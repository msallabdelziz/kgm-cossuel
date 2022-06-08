<?php

namespace App\Controller;

use App\Entity\Agent;
use App\Entity\DetailVerification;
use App\Entity\Dossier;
use App\Entity\Rapport;
use App\Entity\Utilisateur;
use App\Entity\Visite;
use App\Repository\AgenceRepository;
use App\Repository\AgentRepository;
use App\Repository\DossierRepository;
use App\Repository\PaiementRepository;
use App\Repository\VisiteRepository;
use App\Services\Tools;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Snappy\Pdf;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[Route('/dossier')]
class DossierController extends AbstractController
{
    #[Route('/all', name: 'app_dossier_index0')]
    public function index0(Request $request, PaginatorInterface $pgn, ManagerRegistry $doctrine, DossierRepository $dossierRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_index0');
        $request->getSession()->set('page_liste_dossier', 'app_dossier_index0');
        
        $affichage_demande=$request->getSession()->get('affichage_demande');

        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 
        
        $mode_affichage=$request->getSession()->get('affichage_demande');

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_RFO', 'ROLE_ACCUEIL', 'ROLE_COMPTABLE', 'ROLE_CAISSIER', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        $val_controleur=""; 
        $les_controleur = $agentRepository->findByProfil("controleur");

        $val_statut=""; 
        $les_statut = array("Payé, En Attente Confirmation Paiement", "Payé, En Attente Validation", "Validé, En Attente Affectation", "Affecté, En Attente Visite", "Visite Planifiée, En Attente de Rapport", "Visite Réalisée, En Attente de Confirmation Rapport", "Rapport confirmé, En Attente de Clôture",);

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            if($val_agence) { $val_filtre["agence"] = $val_agence; }
            
            $val_controleur = $request->request->get("val_controleur");
            if($val_controleur) { $val_filtre["controleur"] = $val_controleur; }
            
            $val_statut = $request->request->get("val_statut");
            if($val_statut) { $val_filtre["etat"] = $val_statut; }
        }

        $list=$dossierRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('dossier/index0.html.twig', [
            'page_list' => "app_dossier_index0",
            'les_dossier' => $list,
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_controleur'=> $les_controleur,
            'val_controleur'=> $val_controleur,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,
        ]);
    }

    #[Route('/affectation', name: 'app_dossier_affectation')]
    public function affectation_index(Request $request, PaginatorInterface $pgn, ManagerRegistry $doctrine, DossierRepository $dossierRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        $val_filtre["etat"]="Chez Controleur";
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_affectation');
        $request->getSession()->set('page_liste_dossier', 'app_dossier_affectation');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 
        
        $mode_affichage=$request->getSession()->get('affichage_demande');

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_RFO', 'ROLE_ACCUEIL', 'ROLE_COMPTABLE', 'ROLE_CAISSIER', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        $val_agence = $request->request->get("val_agence");
        if($val_agence) { $val_filtre["agence"] = $val_agence; }


        $val_controleur=""; 
        $les_controleur = $agentRepository->findByProfil("controleur");

        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $type_user=$userConn->getType();
        $id_type=$userConn->getIdType();
        if($role=="ROLE_REFERENT" && $type_user=="Agent" && $id_type) {
            $val_filtre["referent"]=$id_type;
        }

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            if($val_agence) { $val_filtre["agence"] = $val_agence; }
            
            $val_controleur = $request->request->get("val_controleur");
            if($val_controleur) { $val_filtre["controleur"] = $val_controleur; }
        }

        $list=$dossierRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('dossier/index.html.twig', [
            'etatDossier' => "Affectation",
            'page_list' => "app_dossier_affectation",
            'les_dossier' => $list,
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,

            'les_controleur'=> $les_controleur,
            'val_controleur'=> $val_controleur,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,
        ]);
    }

    #[Route('/visite', name: 'app_dossier_visite')]
    public function visite_index(Request $request, PaginatorInterface $pgn, ManagerRegistry $doctrine, DossierRepository $dossierRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"Chez Controleur0"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_visite');
        $request->getSession()->set('page_liste_dossier', 'app_dossier_visite');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $type_user=$userConn->getType();
        $id_type=$userConn->getIdType();
        if($role=="ROLE_CONTROLEUR" && $type_user=="Agent" && $id_type) {
            $val_filtre["controleur"]=$id_type;
        }
        if($role=="ROLE_REFERENT" && $type_user=="Agent" && $id_type) {
            $val_filtre["referent"]=$id_type;
        }

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_RFO', 'ROLE_ACCUEIL', 'ROLE_COMPTABLE', 'ROLE_CAISSIER', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        $val_controleur=""; 
        $les_controleur = $agentRepository->findByProfil("controleur");

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            if($val_agence) { $val_filtre["agence"] = $val_agence; }
            
            $val_controleur = $request->request->get("val_controleur");
            if($val_controleur) { $val_filtre["controleur"] = $val_controleur; }
        }

        $mode_affichage=$request->getSession()->get('affichage_demande');

        $list=$dossierRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('dossier/index.html.twig', [
            'etatDossier' => "Visite",
            'page_list' => "app_dossier_visite",
            'les_dossier' => $list,
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,

            'les_controleur'=> $les_controleur,
            'val_controleur'=> $val_controleur,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,
        ]);
    }

    #[Route('/rapport', name: 'app_dossier_rapport')]
    public function rapport_index(Request $request, PaginatorInterface $pgn, ManagerRegistry $doctrine, DossierRepository $dossierRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"Visite"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_rapport');
        $request->getSession()->set('page_liste_dossier', 'app_dossier_rapport');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        $val_rech=""; $val_filtre = array("etat"=>"Rapport"); $page = 0; $orderBy = "";
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_RFO', 'ROLE_ACCUEIL', 'ROLE_COMPTABLE', 'ROLE_CAISSIER', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        $val_controleur=""; 
        $les_controleur = $agentRepository->findByProfil("controleur");

        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $type_user=$userConn->getType();
        $id_type=$userConn->getIdType();
        if($role=="ROLE_CONTROLEUR" && $type_user=="Agent" && $id_type) {
            $val_filtre["controleur"]=$id_type;
        }
        if($role=="ROLE_REFERENT" && $type_user=="Agent" && $id_type) {
            $val_filtre["referent"]=$id_type;
        }

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            if($val_agence) { $val_filtre["agence"] = $val_agence; }
            
            $val_controleur = $request->request->get("val_controleur");
            if($val_controleur) { $val_filtre["controleur"] = $val_controleur; }
        }

        $mode_affichage=$request->getSession()->get('affichage_demande');

        $list=$dossierRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('dossier/index.html.twig', [
            'etatDossier' => "Rapport",
            'page_list' => "app_dossier_rapport",
            'les_dossier' => $list,
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,

            'les_controleur'=> $les_controleur,
            'val_controleur'=> $val_controleur,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,
        ]);
    }

    #[Route('/attestation', name: 'app_dossier_attestation')]
    public function attestation_index(Request $request, PaginatorInterface $pgn, ManagerRegistry $doctrine, DossierRepository $dossierRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"Attestation"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_attestation');
        $request->getSession()->set('page_liste_dossier', 'app_dossier_attestation');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_RFO', 'ROLE_ACCUEIL', 'ROLE_COMPTABLE', 'ROLE_CAISSIER', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        $val_controleur=""; 
        $les_controleur = $agentRepository->findByProfil("controleur");

        $type_user=$userConn->getType();
        $id_type=$userConn->getIdType();
        if($role=="ROLE_REFERENT" && $type_user=="Agent" && $id_type) {
            $val_filtre["referent"]=$id_type;
        }

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            if($val_agence) { $val_filtre["agence"] = $val_agence; }
            
            $val_controleur = $request->request->get("val_controleur");
            if($val_controleur) { $val_filtre["controleur"] = $val_controleur; }
            
        }

        $mode_affichage=$request->getSession()->get('affichage_demande');

        $list=$dossierRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('dossier/index.html.twig', [
            'etatDossier' => "Attestation",
            'page_list' => "app_dossier_attestation",
            'les_dossier' => $list,
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,

            'les_controleur'=> $les_controleur,
            'val_controleur'=> $val_controleur,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,
        ]);
    }

    #[Route('/{id}/rapport', name: 'app_dossier_showrapp', methods: ['GET'])]
    public function showrapport(Dossier $dossier, ManagerRegistry $doctrine, DossierRepository $dossierRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $dossier=$dossierRepository->find($dossier);
        if(($dossier->getRapport() && ! $dossier->getAttestation()) || $dossier->getAttestation()) {
            return $this->render('dossier/show2.html.twig', [
                'dossier' => $dossier,

                'tools' => $tools,
            ]);
        } else {
            return $this->render('dossier/show.html.twig', [
                'dossier' => $dossier,

                'tools' => $tools,
            ]);
        }
    }

    #[Route('/cloture', name: 'app_dossier_cloture')]
    public function cloture_index(Request $request, PaginatorInterface $pgn, ManagerRegistry $doctrine, DossierRepository $dossierRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"Cloture"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_cloture');
        $request->getSession()->set('page_liste_dossier', 'app_dossier_cloture');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_RFO', 'ROLE_ACCUEIL', 'ROLE_COMPTABLE', 'ROLE_CAISSIER', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        $val_controleur=""; 
        $les_controleur = $agentRepository->findByProfil("controleur");

        $val_statut=""; 
        $les_statut = array("Clôturé - Conforme", "Clôturé - Non Conforme",);

        $type_user=$userConn->getType();
        $id_type=$userConn->getIdType();
        if($role=="ROLE_REFERENT" && $type_user=="Agent" && $id_type) {
            $val_filtre["referent"]=$id_type;
        }

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            if($val_agence) { $val_filtre["agence"] = $val_agence; }
            
            $val_controleur = $request->request->get("val_controleur");
            if($val_controleur) { $val_filtre["controleur"] = $val_controleur; }
            
            $val_statut = $request->request->get("val_statut");
            if($val_statut) { $val_filtre["etat"] = $val_statut; }
            
        }

        $mode_affichage=$request->getSession()->get('affichage_demande');

        $list=$dossierRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('dossier/index.html.twig', [
            'etatDossier' => "Cloturé",
            'page_list' => "app_dossier_cloture",
            'les_dossier' => $list,
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,

            'les_controleur'=> $les_controleur,
            'val_controleur'=> $val_controleur,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,
        ]);
    }

    #[Route('/{id}', name: 'app_dossier_show', methods: ['GET'])]
    public function show(Dossier $dossier, ManagerRegistry $doctrine, DossierRepository $dossierRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $dossier=$dossierRepository->find($dossier);
        $paiement=$dossier->getDemande()->getPaiement();
        return $this->render('dossier/show.html.twig', [
            'dossier' => $dossier,
            'paiement' => $paiement,

            'tools' => $tools,
        ]);
    }

    #[Route('/pop/{id}', name: 'app_dossier_showpop', methods: ['GET'])]
    public function showpop(Dossier $dossier, ManagerRegistry $doctrine, DossierRepository $dossierRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $dossier=$dossierRepository->find($dossier);
            return $this->render('dossier/showpop.html.twig', [
                'dossier' => $dossier,

                'tools' => $tools,
            ]);
    }

    #[Route('/{id}/histo', name: 'app_dossier_histo', methods: ['GET'])]
    public function showtime(Dossier $dossier, EntityManagerInterface $em, DossierRepository $dossierRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $dossier=$dossierRepository->find($dossier);
        $paiement=$dossier->getDemande()->getPaiement();
        $tools = new Tools($em);

        return $this->render('dossier/showtime.html.twig', [
            'dossier' => $dossier,
            'tools' => $tools,
        ]);
    }

    #[Route('/{id}/affecter', name: 'app_dossier_affecter')]
    public function affecter(Request $request, Dossier $dossier, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $dossier=$dossierRepository->find($dossier);
        $paiement=$dossier->getDemande()->getPaiement();

        $form = $this->createFormBuilder($dossier)
        ->add('controleur', EntityType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-select',
                'size' => '5'
            ],
            'query_builder' => function (AgentRepository $er) use ($dossier) {
                return $er->createQueryBuilder('agt')
                ->select('agt')
                ->join('App\Entity\Profil', 'prof', 'WITH', 'agt.profil = prof.id')
                ->andWhere('agt.id_agence = :val3')
                ->andWhere('prof.code = :val2')
                ->setParameter('val2', 'controleur')
                ->setParameter('val3', $dossier->getReferent()->getAgence())
                ;
            },
            'class' => Agent::class,
            'label' => 'Désignation du Contrôleur chargé du dossier',
            'choice_label' => function ($agent) {
                return "[".$agent->getMatricule()."] ".$agent->getPrenom()." ".$agent->getNom()." -   ".count($agent->getDossierActifControleur())." dossiers en cours";
            },
            'choice_attr' => function($choice, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['class' => 'form-control-sm p-2 ps-1 text-success'];
            },
            'required' => true
        ])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $dossier->setAffecte(1);
            $dossier->setDateAffecte(new \DateTime());
            $id_agent=$form->get('controleur')->getData();
            if($id_agent) {
                $agent=$agentRepository->find($id_agent);
                $dossier->setControleur($agent);
            } 
            $dossierRepository->add($dossier);

            $this->addFlash("success", "Le dossier a été affecté au contrôleur ".$dossier->getControleur()." !");
            return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        }

        return $this->renderForm('dossier/affecter.html.twig', [
            'dossier' => $dossier,
            'paiement' => $paiement,
            'dossierForm' => $form,
        ]);
    }

    #[Route('/{id}/desaffecter', name: 'app_dossier_desaffecter')]
    public function desaffecter(Request $request, ManagerRegistry $doctrine, Dossier $dossier, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $entityManager = $doctrine->getManager();
        $dossier=$dossierRepository->find($dossier);
        $paiement=$dossier->getDemande()->getPaiement();
        $old_controleur=$dossier->getControleur();
        $form = $this->createFormBuilder($dossier)
        ->add('commentaire', TextareaType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'mapped' => false,
            'required' => false,
            'label' => 'Commentaires'
        ])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $dossier->setAffecte(0); 
            $dossier->setDateAffecte(null);
            if($dossier->getVisite()) {
                $dossier->setVisite(0);
                $visite = $dossier->getVisiteCourante();
                $dossier->removeVisite($visite);
                foreach($visite->getDetailVerification() as $dv) {
                    $entityManager->remove($dv);
                }
                $entityManager->remove($visite);
                $entityManager->flush();
            }
            $comment=$form->get('commentaire')->getData();
            $dossier->setControleur(null);
            $dossierRepository->add($dossier);

            $this->addFlash("success", "Le dossier a été retiré au contrôleur ".$old_controleur." !");
            return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        }

        return $this->renderForm('dossier/desaffecter.html.twig', [
            'dossier' => $dossier,
            'paiement' => $paiement,
            'dossierForm' => $form,
        ]);
    }

    #[Route('/{id}/visiter', name: 'app_dossier_visiter')]
    public function visiter(Request $request, Dossier $dossier, VisiteRepository $visiteRepository, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $dossier=$dossierRepository->find($dossier);
        $paiement=$dossier->getDemande()->getPaiement();

        $form = $this->createFormBuilder($dossier)
        ->add('dateVisite', DateTimeType::class, [
            'mapped' => false,
            'html5' => true,
            'widget' => 'single_text',
            'attr' => [
                'class' => 'form-control',
                'min' => ( new \DateTime() )->format('d-m-Y'),
            ],
            'constraints' => [
                new Callback(function($object, ExecutionContextInterface $context) {
                    $start = new \DateTime();
                    $stop = $object;

                    if (is_a($start, \DateTime::class) && is_a($stop, \DateTime::class)) {
                        if ($stop->format('U') - $start->format('U') < 0) {
                            $context
                                ->buildViolation('Date de visite doit être supérieure à la date du jour !')
                                ->addViolation();
                        }
                    }
                }),
            ],
        'required' => true,
            'label' => 'Date visite planifiée'
        ])
        ->add('rapport', EntityType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-select',
            ],
            'class' => Rapport::class,
            'label' => 'Modèle de rapport pour l\'inspection',
            'choice_label' => 'libelle',
            'required' => true
        ])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dossier->setVisite(1);
            $dossierRepository->add($dossier);

            $dateVisite=$form->get('dateVisite')->getData();
            $rapport=$form->get('rapport')->getData();

            $visite = new Visite();
            $visite->setDossier($dossier);
            $visite->setRapport($rapport);
            $visite->setEtat("Planifié");
            $visite->setCreatedby($this->getUser()->getId());
            $visite->setDatePlanifie($dateVisite);
            $visite->setPlanifie(1);
            $visiteRepository->add($visite);

            $this->addFlash("success", "La visite pour le suivi du dossier a été planifiée à la date ".date_format($visite->getDatePlanifie(), "d-m-Y à H:i")." !");
            return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        }

        return $this->renderForm('dossier/visiter.html.twig', [
            'dossier' => $dossier,
            'paiement' => $paiement,
            'dossierForm' => $form,
        ]);
    }

    #[Route('/{id}/revisiter', name: 'app_dossier_revisiter')]
    public function revisiter(Request $request, Dossier $dossier, VisiteRepository $visiteRepository, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $dossier=$dossierRepository->find($dossier);
        $paiement=$dossier->getDemande()->getPaiement();

        $form = $this->createFormBuilder($dossier)
        ->add('dateVisite', DateTimeType::class, [
            'mapped' => false,
            'html5' => true,
            'widget' => 'single_text',
            'attr' => [
                'class' => 'form-control',
                'min' => ( new \DateTime() )->format('d-m-Y'),
            ],
            'constraints' => [
                new Callback(function($object, ExecutionContextInterface $context) {
                    $start = new \DateTime();
                    $stop = $object;

                    if (is_a($start, \DateTime::class) && is_a($stop, \DateTime::class)) {
                        if ($stop->format('U') - $start->format('U') < 0) {
                            $context
                                ->buildViolation('Date de visite doit être supérieure à la date du jour !')
                                ->addViolation();
                        }
                    }
                }),
            ],
        'required' => true,
            'label' => 'Nouvelle Date planifiée'
        ])
        ->add('commentaire', TextareaType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'mapped' => false,
            'required' => true,
            'label' => 'Motif du report'
        ])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dossier->setVisite(1);
            $dossierRepository->add($dossier);

            $dateVisite=$form->get('dateVisite')->getData();
            $commentaire=$form->get('commentaire')->getData();

            $old_visite=$visiteRepository->find($dossier->getVisiteCourante()->getId());
            $old_visite->setCommentaire($commentaire);
            $visite = new Visite();
            $visite->setDossier($dossier);
            $visite->setRapport($old_visite->getRapport());
            $visite->setEtat("Planifié");
            $visite->setCreatedby($this->getUser()->getId());
            $visite->setDatePlanifie($dateVisite);
            $visite->setPlanifie(1);

            $visiteRepository->add($visite);
            $visiteRepository->add($old_visite);

            $this->addFlash("success", "La visite a été replanifiée à la date ".date_format($visite->getDatePlanifie(), "d-m-Y à H:i")." !");
            return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        }

        return $this->renderForm('dossier/revisiter.html.twig', [
            'dossier' => $dossier,
            'paiement' => $paiement,
            'dossierForm' => $form,
        ]);
    }

    #[Route('/{id}/rapporter', name: 'app_dossier_rapporter')]
    public function rapporter(Request $request, ManagerRegistry $doctrine, Dossier $dossier, VisiteRepository $visiteRepository, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager();

        $dossier=$dossierRepository->find($dossier);
        $visite = $visiteRepository->find($dossier->getVisiteCourante()->getId());
        $rapport = $visite->getRapport();
        $les_rubrique=$rapport->getRubriques();
        $les_detailverif=$visite->getDetailVerification();
        
        // Initialisation des détails à vérifier suivant les point de vérif du rapport !
        if($les_detailverif->count() == 0) {
            foreach($rapport->getRubriques() as $rub) {
                foreach($rub->getPointVerification() as $pt) {
                    $detailverif = new DetailVerification();
                    $detailverif->setVisite($visite);
                    $detailverif->setPointVerification($pt);
                    $em->persist($detailverif);
                }
            }
            $em->flush();
        }
        
        $visite = $visiteRepository->find($dossier->getVisiteCourante()->getId());
        $les_detailverif = $em->getRepository(DetailVerification::class)->findBy(array("visite"=>$visite->getId()));

        // if(! $les_detailverif->count()) {
        //     $this->addFlash("danger", "Aucun point de vérification pour le rapport d'inspection  !");
        //     return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        // }

        $form = $this->createFormBuilder($dossier)
        ->add('dateVisite', DateTimeType::class, [
            'mapped' => false,
            'html5' => true,
            'widget' => 'single_text',
            'label_attr' => [
                'class' => 'text-black',
            ],
            'attr' => [
                'class' => 'form-select-sm fs-6 bg-light bg-opacity-75',
            ],
            'constraints' => [
                new Callback(function($object, ExecutionContextInterface $context) {
                    $start = new \DateTime();
                    $stop = $object;

                    if (is_a($start, \DateTime::class) && is_a($stop, \DateTime::class)) {
                        if ($stop->format('U') - $start->format('U') >= 0) {
                            $context
                                ->buildViolation('Date de réalisation de la visite doit être antérieure à la date du jour !')
                                ->addViolation();
                        }
                    }
                }),
            ],
            'required' => true,
            'label' => 'Date réalisation visite',
            'data' => $visite->getDateRealise(),
        ]);
        $form = $form
        ->add("latitude", TextType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-control-sm latlong',
                'readonly' => 'readonly',
            ],
            'label' => 'Latitude',
            'required' => true,
        ]);
        $form = $form
        ->add("longitude", TextType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-control-sm latlong',
                'readonly' => 'readonly',
            ],
            'label' => 'Longitude',
            'required' => true,
        ]);
        $form = $form
        ->add("step", HiddenType::class, [
            'mapped' => false,
            'data' => 0,
        ]);
        $form = $form
        ->add("stay", HiddenType::class, [
            'mapped' => false,
            'data' => 0,
        ]);
        $form = $form
        ->add("valid", HiddenType::class, [
            'mapped' => false,
            'data' => 0,
        ]);

        // on prevoit les champs du form pour gérer chaque points de vérification
        foreach ($les_detailverif as $pt) {
            $inp_conclusion = 'conclusion_'.$pt->getId();
            $inp_comment = 'comment_'.$pt->getId();

            $val_conclusion = "";
            if($pt->getConclusion() != null) {
                $val_conclusion = $pt->getConclusion();
            }
            $val_comment = "";
            if($pt->getCommentaire()) {
                $val_comment = $pt->getCommentaire();
            }
            $form = $form
            ->add($inp_conclusion, HiddenType::class, [
                'mapped' => false,
                'required' => true,
                'attr' => [
                    'class' => 'vconclusion',
                ],
                    'data' => $val_conclusion,
            ]);
            $form = $form
            ->add($inp_comment, TextareaType::class, [
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control fs-8 fw-light',
                    'size' => 3,
                    'placeholder' => 'Commentaire ...',
                ],
                'label_attr' => [
                    'class' => 'fw-light text-secondary fs-8',
                ],
                'required' => false,
                'data' => $val_comment,
            ]);
        
        }

        $form = $form->getForm();

        $form->handleRequest($request);
        $step=0; $stay=1; $valid=0;
        if ($form->isSubmitted() && $form->isValid()) {

            $step=$form->get('step')->getData();
            $stay=$form->get('stay')->getData();
            $valid=$form->get('valid')->getData();

            $dateVisite=$form->get('dateVisite')->getData();
            $visite->setDateRealise($dateVisite);
            $visite->setRealise(1);
            $visite->setEtat("Réalisé");
            $visiteRepository->add($visite);
            
            $iy=0; $le_rub="";
            foreach ($les_detailverif as $pt) {
                if($le_rub!= $pt->getPointVerification()->getRubrique()->getId()) {
                    $le_rub= $pt->getPointVerification()->getRubrique()->getId();
                    $iy++;
                }
                $val_conclusion=$form->get('conclusion_'.$pt->getId())->getData();
                $val_comment=$form->get('comment_'.$pt->getId())->getData();
                $pt->setCommentaire($val_comment);
                $pt->setConclusion($val_conclusion);
                $em->persist($pt);
            }
            $em->flush();
            if($valid) {
                $this->addFlash("success", "Le rapport a été finalisé et soumis au référent !");
                $visite->setRapporte(1);
                $visite->setEtat("Rapport finalisé");
                $visite->setDateRapporte(new \DateTime());
                $visiteRepository->add($visite);

                $dossier->setRapport(1); $dossierRepository->add($dossier);
                return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
            }
            if(!$stay) {
                $this->addFlash("success", "Les informations ont été enregistrées !");
                return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
            } 
        }

        return $this->renderForm('dossier/rapporter.html.twig', [
            'dossier' => $dossier,
            'step' => $step,
            'stay' => $stay,
            'les_detailverif' => $les_detailverif,
            'les_rubrique' => $les_rubrique,
            'dossierForm' => $form,
        ]);
    }

    #[Route('/{id}/attester', name: 'app_dossier_attester')]
    public function attester(Request $request, Dossier $dossier, VisiteRepository $visiteRepository, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $dossier=$dossierRepository->find($dossier);
        $paiement=$dossier->getDemande()->getPaiement();

        $form = $this->createFormBuilder($dossier)
        ->add('decision', ChoiceType::class, [
            'mapped' => false,
            'required' => true,
            'attr' => [
                'class' => 'form-select'
            ],
            'choices' => array('Conformité - Délivrer Attestation' => 'conformite', 'Non Conformité - Délivrer Bon de travaux' => 'non_conformite'),
            'data' => "",
            'label_attr' => [
                'class' => 'form-check-label'
            ],
            'label' => 'Conclusion générale'
        ])
        ->add('commentaire', TextareaType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'mapped' => false,
            'required' => false,
            'label' => 'Commentaires'
        ])
    ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dossier->setAttestation(1);
            $dossier->setDateCloture(new \DateTime());

            $decision=$form->get('decision')->getData();
            $commentaire=$form->get('commentaire')->getData();

            $visite = $visiteRepository->find($dossier->getVisiteCourante()->getId());
            $visite->setEtat("Rapport validé");
            $visite->setAtteste(1);
            $visite->setDateAtteste(new \DateTime());
            $resultat=0;
            if($decision == "conformite") { $resultat=1; }
            $visite->setConclusion($resultat);
            $visite->setCommentaire($commentaire);
            $visiteRepository->add($visite);
            
            $dossier->setCloture(1);
            $dossier->setConforme($resultat);
            $dossierRepository->add($dossier);

            $this->addFlash("success", "Le rapport d'inspection a été validé ! Le dossier est clotûré ! ");
            return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        }

        return $this->renderForm('dossier/attester.html.twig', [
            'dossier' => $dossier,
            'paiement' => $paiement,
            'dossierForm' => $form,
        ]);
    }

    #[Route('/{id}/rejetrapport', name: 'app_dossier_rejetrapport')]
    public function rejetrapport(Request $request, Dossier $dossier, VisiteRepository $visiteRepository, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $dossier=$dossierRepository->find($dossier);

        $form = $this->createFormBuilder($dossier)
        ->add('commentaire', TextareaType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'mapped' => false,
            'required' => true,
            'label' => 'Commentaires'
        ])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dossier->setRapport(0);
            $dossierRepository->add($dossier);

            $commentaire=$form->get('commentaire')->getData();

            $visite = $visiteRepository->find($dossier->getVisiteCourante()->getId());
            $visite->setEtat("Réalisé");
            $visite->setRapporte(0);
            $visite->setDateRapporte(null);
            $visiteRepository->add($visite);
            
            $this->addFlash("success", "Le rapport d'inspection a été rejeté par le référent ! ");
            return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        }

        return $this->renderForm('dossier/rejetrapport.html.twig', [
            'dossier' => $dossier,
            'dossierForm' => $form,
        ]);
    }

    #[Route('/{id}/showpdf', name: 'app_attestation_showpdf', methods: ['GET'])]
    public function showpdf(Request $request, Dossier $dossier, Pdf $knpSnappyPdf)
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Retrieve the HTML generated in our twig file
        if($dossier->getVisiteCourante()->getConclusion()) {
            $html = $this->renderView('dossier/showattest1.html.twig', [
                'dossier' => $dossier,
            ]);
        } else {
            $html = $this->renderView('dossier/showattest0.html.twig', [
                'dossier' => $dossier,
            ]);
        }
        echo $html; exit;

        $filename = 'AttestationCOSSUEL_'.$dossier->getDemande()->getNumero();
        $fich = $this->getParameter('pdf_directory').'/'.$filename.'.pdf';

        if(!file_exists($fich)) {
            $knpSnappyPdf
            ->setOption('no-outline', true)
            ->setOption('encoding', 'UTF-8')
            ->setOption('page-size','LETTER')
            ->generateFromHtml($html, $fich);
        }
    
        
        // display the file contents in the browser instead of downloading it
        return $this->file($fich, 'fich_temp_'.date("YmdHis").'.pdf', ResponseHeaderBag::DISPOSITION_INLINE);

        // return new Response(
        //     $knpSnappyPdf
        //     ->setOption('no-outline', true)
        //     ->setOption('encoding', 'UTF-8')
        //     ->setOption('page-size','LETTER')
        //     ->getOutputFromHtml($html),
        //     200,
        //     array(
        //         'Content-Type'          => 'application/pdf',
        //         'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
        //     )
        // );
    }


}
