<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Entity\Paiement;
use App\Entity\Utilisateur;
use App\Form\PaiementType;
use App\Repository\AgenceRepository;
use App\Repository\AgentRepository;
use App\Repository\DemandeRepository;
use App\Repository\InstallationRepository;
use App\Repository\PaiementRepository;
use App\Services\Tools;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/paiement')]
class PaiementController extends AbstractController
{
    #[Route('/journal_caisse', name: 'app_paiement_journal')]
    public function index(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine, DemandeRepository $demandeRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"AllPayé"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'caisse');
        $request->getSession()->set('sousmenu', 'journal_caisse');
        $request->getSession()->set('page_liste_demande', 'app_paiement_journal');
        
        $affichage_demande=$request->getSession()->get('affichage_demande');

        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 
        
        $mode_affichage=$request->getSession()->get('affichage_demande');

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_COMPTABLE')) && 0) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        if($role=="ROLE_CAISSIER") {
            $val_filtre["paiement_by"] = $userConn->getId();
        }

        // Fixer les variables de session pour PAGE, FILTRE ET RECH
        $pref_sess=$request->getSession()->get('sousmenu');
        $les_varsess=array("passage", "usage", "deb", "fin", "statut", "modep", "rech");
        foreach ($les_varsess as $varssess) {
            if(!$request->getSession()->get($pref_sess.'_'.$varssess)) { 
                $request->getSession()->set($pref_sess.'_'.$varssess, "");
                if($varssess=="statut") {
                    $request->getSession()->set($pref_sess.'_'.$varssess, "");
                }
                // if($varssess=="modep") {
                //     $request->getSession()->set($pref_sess.'_'.$varssess, "Espèce");
                // }
                if($varssess=="fin") {
                    $request->getSession()->set($pref_sess.'_'.$varssess, date("Y-m-d"));
                }
            }
        }

        $val_rech=$request->getSession()->get($pref_sess.'_rech'); 
        $val_deb=$request->getSession()->get($pref_sess.'_deb'); 
        $val_fin=$request->getSession()->get($pref_sess.'_fin'); 
        
        $val_modep=$request->getSession()->get($pref_sess.'_modep'); 
        $les_modep = array("Espèce", "Chèque", "Autre");

        $val_passage=$request->getSession()->get($pref_sess.'_passage');
        $les_passage = array("1"=>"1ère visite", "2"=>"2e visite");

        $val_usage=$request->getSession()->get($pref_sess.'_usage');
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=$request->getSession()->get($pref_sess.'_statut');
        $les_statut = array("En Attente Validation", "Validé",);

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            $val_deb = $request->request->get("val_deb");
            $val_fin = $request->request->get("val_fin");
            $val_modep = $request->request->get("val_modep");
            
            $val_passage = $request->request->get("val_passage");
            
            $val_usage = $request->request->get("val_usage");
            
            $val_statut = $request->request->get("val_statut");

            foreach ($les_varsess as $varssess) {
                $le_val='val_'.$varssess;
                $request->getSession()->set($pref_sess.'_'.$varssess, $$le_val);
            }
            $request->query->set('page', 1);
        }
        if($val_statut) { $val_filtre["etat"] = $val_statut; }
        if($val_usage) { $val_filtre["usages"] = $val_usage; }
        if($val_agence) { $val_filtre["agence"] = $val_agence; }
        if($val_deb) { $val_filtre["paiement_deb"] = $val_deb.' 00:00:00'; }
        if($val_fin) { $val_filtre["paiement_fin"] = $val_fin.' 23:59:59'; }
        if($val_modep) { $val_filtre["mode_paiement"] = $val_modep; }
        if($val_passage) { $val_filtre["passage"] = $val_passage; }


        $les_demande=$demandeRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $tot_paye=0; $tot_remb=0;
        foreach($les_demande as $dem) {
            $tot_paye+=$dem->getCout();
            if($dem->getPaiement()->getEtatRembousement()) {
                $tot_remb+=$dem->getCout();
            }
        }
        // dd($les_demande);

        $list=$les_demande;
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('paiement/index.html.twig', [
            'page_list' => "app_paiement_journal",
            'les_demande' => $list,
            'val_deb' => $val_deb,
            'val_fin' => $val_fin,
            'tot_paye' => $tot_paye,
            'tot_remb' => $tot_remb,
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,

            'les_modep'=> $les_modep,
            'val_modep'=> $val_modep,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'tools'=>$tools,
        ]);
    }

    #[Route('/histo_paiement', name: 'app_paiement_histo')]
    public function histo_paiement(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine, DemandeRepository $demandeRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"AllPayé"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'caisse');
        $request->getSession()->set('sousmenu', 'histo_paiement');
        $request->getSession()->set('page_liste_demande', 'app_paiement_histo');
        
        $affichage_demande=$request->getSession()->get('affichage_demande');

        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 
        
        $mode_affichage=$request->getSession()->get('affichage_demande');

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_COMPTABLE')) && 0) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        // Fixer les variables de session pour PAGE, FILTRE ET RECH
        $pref_sess=$request->getSession()->get('sousmenu');
        $les_varsess=array("passage", "usage", "deb", "fin", "statut", "modep", "rech");
        foreach ($les_varsess as $varssess) {
            if(!$request->getSession()->get($pref_sess.'_'.$varssess)) { 
                $request->getSession()->set($pref_sess.'_'.$varssess, "");
                if($varssess=="statut") {
                    $request->getSession()->set($pref_sess.'_'.$varssess, "");
                }
                // if($varssess=="modep") {
                //     $request->getSession()->set($pref_sess.'_'.$varssess, "Espèce");
                // }
                if($varssess=="fin") {
                    $request->getSession()->set($pref_sess.'_'.$varssess, date("Y-m-d"));
                }
            }
        }

        $val_rech=$request->getSession()->get($pref_sess.'_rech'); 
        $val_deb=$request->getSession()->get($pref_sess.'_deb'); 
        $val_fin=$request->getSession()->get($pref_sess.'_fin'); 
        
        $val_modep=$request->getSession()->get($pref_sess.'_modep'); 
        $les_modep = array("Espèce", "Chèque", "Autre");

        $val_passage=$request->getSession()->get($pref_sess.'_passage');
        $les_passage = array("1"=>"1ère visite", "2"=>"2e visite");

        $val_usage=$request->getSession()->get($pref_sess.'_usage');
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=$request->getSession()->get($pref_sess.'_statut');
        $les_statut = array("En Attente Validation", "Validé",);

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            $val_deb = $request->request->get("val_deb");
            $val_fin = $request->request->get("val_fin");
            $val_modep = $request->request->get("val_modep");
            
            $val_passage = $request->request->get("val_passage");
            
            $val_usage = $request->request->get("val_usage");
            
            $val_statut = $request->request->get("val_statut");

            foreach ($les_varsess as $varssess) {
                $le_val='val_'.$varssess;
                $request->getSession()->set($pref_sess.'_'.$varssess, $$le_val);
            }
            $request->query->set('page', 1);
        }
        if($val_statut) { $val_filtre["etat"] = $val_statut; }
        if($val_usage) { $val_filtre["usages"] = $val_usage; }
        if($val_agence) { $val_filtre["agence"] = $val_agence; }
        if($val_deb) { $val_filtre["paiement_deb"] = $val_deb.' 00:00:00'; }
        if($val_fin) { $val_filtre["paiement_fin"] = $val_fin.' 23:59:59'; }
        if($val_modep) { $val_filtre["mode_paiement"] = $val_modep; }
        if($val_passage) { $val_filtre["passage"] = $val_passage; }

        $les_demande=$demandeRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list=$les_demande;
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('paiement/histo.html.twig', [
            'page_list' => "app_paiement_histo",
            'les_demande' => $list,

            'val_deb' => $val_deb,
            'val_fin' => $val_fin,

            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,

            'les_modep'=> $les_modep,
            'val_modep'=> $val_modep,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'tools'=>$tools,
        ]);
    }

    #[Route('/{id}/add', name: 'app_paiement_add')]
    public function add(Request $request, Demande $demande, DemandeRepository $demandeRepository, InstallationRepository $installationRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $paiement = new Paiement();
        $demande=$demandeRepository->find($demande);

        $form = $this->createForm(PaiementType::class, $paiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 8;
            $installation=$installationRepository->find($demande->getInstallation());
            $installation->setStep($step);
            $installationRepository->add($installation);

            $demande->setEtat("Paiement enregistré");
            $demandeRepository->add($demande);

            $paiement->setDemande($demande);
            $paiement->setCreatedby($this->getUser()->getId());
            $paiementRepository->add($paiement);

            $demande->setIdPaiement($paiement->getId());
            $demande->setPaiement($paiement);
            $demandeRepository->add($demande);

            return $this->redirectToRoute('app_paiement_show', array('id' => $paiement->getId())); 
        }

        return $this->renderForm('paiement/add.html.twig', [
            'demande' => $demande,
            'paiementForm' => $form,
        ]);
    }

    #[Route('/{id}/add2', name: 'app_paiement_add2')]
    public function add2(Request $request, Tools $tools, ManagerRegistry $doctrine, Demande $demande, DemandeRepository $demandeRepository, InstallationRepository $installationRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();

        $form = $this->createFormBuilder($paiement)->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 9;
            $installation=$installationRepository->find($demande->getInstallation());
            $installation->setStep($step);
            $installationRepository->add($installation);

            $demande->setEtat("Paiement validé");
            $demandeRepository->add($demande);

            $paiement->setPaiementEffectue(true);
            $paiement->setDatePaiement(new \DateTime());
            $paiement->setUpdatedBy($this->getUser()->getId());
            $paiementRepository->add($paiement);

            // Notification à faire au client
            // -----------------------------------------------------------------------------------------------
            $em=$doctrine->getManager(); 
            $mess_sms='Le paiement de votre demande numéro '.$demande->getNumero().' validé. Montant payé: '.number_format($demande->getCout(), 0, ""," ").' FCFA';
            if($installation->getElectricien() && $installation->getElectricien()->getTelephone()) {
                $tools->notifSMS($installation->getElectricien()->getTelephone(), $mess_sms);
            }
            if($installation->getProprietaire() && $installation->getProprietaire()->getTelephone()) {
                $tools->notifSMS($installation->getProprietaire()->getTelephone(), $mess_sms);
            }
            
            $sujet_mail='Demande COSSUEL payée !';
            $mess_mail='Le paiement de votre demande numéro '.$demande->getNumero().' validé. Montant payé: '.number_format($demande->getCout(), 0, ""," ").' FCFA';
            if($installation->getElectricien() && $installation->getElectricien()->getEmail()) {
                $tools->notifMail($installation->getElectricien()->getEmail(), $mess_mail, $sujet_mail);
            }
            if($installation->getProprietaire() && $installation->getProprietaire()->getEmail()) {
                $tools->notifMail($installation->getProprietaire()->getEmail(), $mess_mail, $sujet_mail);
            }
            // -----------------------------------------------------------------------------------------------


            return $this->redirectToRoute('app_paiement_show', array('id' => $paiement->getId())); 
        }

        return $this->renderForm('paiement/add2.html.twig', [
            'demande' => $demande,
            'paiement' => $paiement,
            'paiementForm' => $form,
        ]);
    }


    #[Route('/{id}/modif', name: 'app_paiement_modif')]
    public function modif(Request $request, Demande $demande, DemandeRepository $demandeRepository, InstallationRepository $installationRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();

        $form = $this->createForm(PaiementType::class, $paiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 8;
            $installation=$installationRepository->find($demande->getInstallation());
            $installation->setStep($step);
            $installationRepository->add($installation);

            $demande->setEtat("Paiement enregistré");
            $demandeRepository->add($demande);

            $paiement->setDemande($demande);
            $paiement->setCreatedby($this->getUser()->getId());
            $paiementRepository->add($paiement);

            $demande->setIdPaiement($paiement->getId());
            $demande->setPaiement($paiement);
            $demandeRepository->add($demande);

            return $this->redirectToRoute('app_paiement_show', array('id' => $paiement->getId())); 
        }

        return $this->renderForm('paiement/add.html.twig', [
            'demande' => $demande,
            'paiementForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_paiement_show', methods: ['GET'])]
    public function show(Paiement $paiement, Tools $tools, ManagerRegistry $doctrine): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); 
        return $this->render('paiement/show.html.twig', [
            'paiement' => $paiement,

            'tools' => $tools,
        ]);
    }

    #[Route('/pop/{id}', name: 'app_paiement_showpop', methods: ['GET'])]
    public function showpop(Paiement $paiement, Tools $tools, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager(); 
        return $this->render('paiement/showpop.html.twig', [
            'paiement' => $paiement,

            'tools' => $tools,
        ]);
    }

}
