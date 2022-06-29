<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Entity\Agent;
use App\Entity\Demande;
use App\Entity\Departement;
use App\Entity\Electricien;
use App\Entity\Installation;
use App\Entity\Localite;
use App\Entity\NatureTravaux;
use App\Entity\PieceJointe;
use App\Entity\Proprietaire;
use App\Entity\Region;
use App\Entity\TypeConstruction;
use App\Entity\Utilisateur;
use App\Form\ElectricienType;
use App\Form\ProprietaireType;
use App\Form\InstallationType;
use App\PDF\ListePDF;
use App\PDF\DetailPDF;
use App\Repository\AgenceRepository;
use App\Repository\DemandeRepository;
use App\Repository\DepartementRepository;
use App\Repository\ElectricienRepository;
use App\Repository\InstallationRepository;
use App\Repository\LocaliteRepository;
use App\Repository\PaiementRepository;
use App\Repository\PieceJointeRepository;
use App\Repository\ProprietaireRepository;
use App\Repository\RegionRepository;
use App\Repository\TypeConstructionRepository;
use App\Services\Tools;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Snappy\Pdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType as TypeIntegerType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Process\Process;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\File as ConstraintsFile;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[Route('/installation')]
class InstallationController extends AbstractController
{
    #[Route('/all', name: 'app_installation_index0', methods: ['GET', 'POST'])]
    public function index0(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine, InstallationRepository $installationRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'demande');
        $request->getSession()->set('sousmenu', 'demande_all');
        $request->getSession()->set('page_liste_demande', 'app_installation_index0');
        $request->getSession()->set('page_liste_dossier', 'app_installation_index0');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $mode_affichage=$request->getSession()->get('affichage_demande');

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
            if(! in_array($role, array("ROLE_ADMIN", "ROLE_PUBLIC", "ROLE_ACCUEIL", "ROLE_RFO"))) {
                $val_filtre["etat"] = "Soumis";
            }
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        // Fixer les variables de session pour PAGE, FILTRE ET RECH
        $pref_sess=$request->getSession()->get('sousmenu');
        $les_varsess=array("agence", "passage", "usage", "statut", "rech");
        foreach ($les_varsess as $varssess) {
            if(!$request->getSession()->get($pref_sess.'_'.$varssess)) { 
                $request->getSession()->set($pref_sess.'_'.$varssess, "");
                // if($varssess=="statut") {
                //     $request->getSession()->set($pref_sess.'_'.$varssess, "Attestation|Cloture");
                // }
            }
        }

        $val_rech=$request->getSession()->get($pref_sess.'_rech'); 

        $val_agence=$request->getSession()->get($pref_sess.'_agence');
        
        $val_passage=$request->getSession()->get($pref_sess.'_passage');
        $les_passage = array("1"=>"1ère visite", "2"=>"2e visite");

        $val_usage=$request->getSession()->get($pref_sess.'_usage');
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=$request->getSession()->get($pref_sess.'_statut');
        $les_statut = array("En Attente Validation Soumission", "Paiement enregistré", "Paiement validé", "Validé, En Attente Affectation", "Affecté, En Attente Visite", "Visite Planifiée, En Attente de Rapport", "Visite Réalisée, En Attente de Confirmation Rapport", "Rapport confirmé, Clôture",);

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            
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
        if($val_passage) { $val_filtre["passage"] = $val_passage; }

        $list=$installationRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('installation/index0.html.twig', [
            'les_installation' => $list,
            'page_list' => "app_installation_index0",
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'les_passage'=> $les_passage,
            'val_passage'=> $val_passage,

            'tools'=> $tools,
        ]);
    }

    #[Route('/soumission', name: 'app_installation_index', methods: ['GET', 'POST'])]
    public function index(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine, InstallationRepository $installationRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"SaisieSoumis"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agent=null; $electricien=null; $agence=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }
        
        // if(in_array($role, array("ROLE_RFO", "ROLE_ADMIN"))) {
        //     $val_filtre=array("etat"=>"SaisieSoumis");
        // }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'demande');
        $request->getSession()->set('sousmenu', 'demande_soumission');
        $request->getSession()->set('page_liste_demande', 'app_installation_index');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $mode_affichage=$request->getSession()->get('affichage_demande');

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        // Fixer les variables de session pour PAGE, FILTRE ET RECH
        $pref_sess=$request->getSession()->get('sousmenu');
        $les_varsess=array("agence", "passage", "usage", "statut", "rech");
        foreach ($les_varsess as $varssess) {
            if(!$request->getSession()->get($pref_sess.'_'.$varssess)) { 
                $request->getSession()->set($pref_sess.'_'.$varssess, "");
                if($varssess=="statut") {
                    $request->getSession()->set($pref_sess.'_'.$varssess, "SaisieSoumis");
                }
            }
        }
        $val_rech=$request->getSession()->get($pref_sess.'_rech'); 

        $val_agence=$request->getSession()->get($pref_sess.'_agence');
        
        $val_passage=$request->getSession()->get($pref_sess.'_passage');
        $les_passage = array("1"=>"1ère visite", "2"=>"2e visite");

        $val_usage=$request->getSession()->get($pref_sess.'_usage');
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=$request->getSession()->get($pref_sess.'_statut');
        $les_statut = array("Saisie", "Soumis, Attente Validation", "Soumis, Validé");

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            
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
        if($val_passage) { $val_filtre["passage"] = $val_passage; }

        if($role=="ROLE_USER" || $role=="ROLE_CLIENT" || $role=="ROLE_ACCUEIL" || $role=="ROLE_RFO" || $role=="ROLE_PUBLIC") {
            $val_filtre["created_by"] = $userConn->getId();
        }

        $list=$installationRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('installation/index.html.twig', [
            'les_installation' => $list,
            'modif' => 1,
            'page_list' => "app_installation_index",
            'affichage' => $mode_affichage,
            'etatDemande' => "en soumission",
            'val_rech' => $val_rech,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'les_passage'=> $les_passage,
            'val_passage'=> $val_passage,

            'tools'=> $tools,
        ]);
    }

    #[Route('/paiement', name: 'app_installation_index2', methods: ['GET', 'POST'])]
    public function index2(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine, InstallationRepository $installationRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"Soumis, Accepté, Payé"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agent=null; $electricien=null; $agence=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'caisse');
        $request->getSession()->set('sousmenu', 'demande_paiement');
        $request->getSession()->set('page_liste_demande', 'app_installation_index2');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $mode_affichage=$request->getSession()->get('affichage_demande');

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        // Fixer les variables de session pour PAGE, FILTRE ET RECH
        $pref_sess=$request->getSession()->get('sousmenu');
        $les_varsess=array("agence", "passage", "usage", "statut", "rech");
        foreach ($les_varsess as $varssess) {
            if(!$request->getSession()->get($pref_sess.'_'.$varssess)) { 
                $request->getSession()->set($pref_sess.'_'.$varssess, "");
                // if($varssess=="statut") {
                //     $request->getSession()->set($pref_sess.'_'.$varssess, "SaisieSoumis");
                // }
            }
        }
        $val_rech=$request->getSession()->get($pref_sess.'_rech'); 

        $val_agence=$request->getSession()->get($pref_sess.'_agence');
        
        $val_passage=$request->getSession()->get($pref_sess.'_passage');
        $les_passage = array("1"=>"1ère visite", "2"=>"2e visite");

        $val_usage=$request->getSession()->get($pref_sess.'_usage');
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=$request->getSession()->get($pref_sess.'_statut');
        $les_statut = array("Attente Paiement", "Paiement enregistré", "Paiement validé");

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            
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
        if($val_passage) { $val_filtre["passage"] = $val_passage; }


        $list=$installationRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('installation/index.html.twig', [
            'les_installation' => $list,
            'modif' => 0,
            'affichage' => $mode_affichage,
            'page_list' => "app_installation_index2",
            'etatDemande' => "en attente de paiement",
            'val_rech' => $val_rech,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'les_passage'=> $les_passage,
            'val_passage'=> $val_passage,

            'tools'=> $tools,
        ]);
    }

    #[Route('/validation', name: 'app_installation_index3', methods: ['GET', 'POST'])]
    public function index3(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine, InstallationRepository $installationRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"Payé|Validé"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agent=null; $electricien=null; $agence=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'demande');
        $request->getSession()->set('sousmenu', 'demande_validation');
        $request->getSession()->set('page_liste_demande', 'app_installation_index3');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $mode_affichage=$request->getSession()->get('affichage_demande');

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        // Fixer les variables de session pour PAGE, FILTRE ET RECH
        $pref_sess=$request->getSession()->get('sousmenu');
        $les_varsess=array("agence", "passage", "usage", "statut", "rech");
        foreach ($les_varsess as $varssess) {
            if(!$request->getSession()->get($pref_sess.'_'.$varssess)) { 
                $request->getSession()->set($pref_sess.'_'.$varssess, "");
                // if($varssess=="statut") {
                //     $request->getSession()->set($pref_sess.'_'.$varssess, "SaisieSoumis");
                // }
            }
        }
        $val_rech=$request->getSession()->get($pref_sess.'_rech'); 

        $val_agence=$request->getSession()->get($pref_sess.'_agence');
        
        $val_passage=$request->getSession()->get($pref_sess.'_passage');
        $les_passage = array("1"=>"1ère visite", "2"=>"2e visite");

        $val_usage=$request->getSession()->get($pref_sess.'_usage');
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=$request->getSession()->get($pref_sess.'_statut');
        $les_statut = array("Payé, Attente Validation", "Validé");

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            
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
        if($val_passage) { $val_filtre["passage"] = $val_passage; }

        $list=$installationRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('installation/index.html.twig', [
            'les_installation' => $list,
            'modif' => 0,
            'page_list' => "app_installation_index3",
            'affichage' => $mode_affichage,
            'etatDemande' => "en attente de validation",
            'val_rech' => $val_rech,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_passage'=> $les_passage,
            'val_passage'=> $val_passage,

            'tools'=> $tools,
        ]);
    }


    #[Route('/{id}/pdf', name: 'app_installation_showpdf', methods: ['GET', 'POST'])]
    public function pdf(Installation $installation, ManagerRegistry $doctrine, PaiementRepository $paiementRepository,Request $request, InstallationRepository $installationRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }

        $type_usage=$installation->getUsages(); 
        if($installation->getUsages()=="non_domestique") {
            $type_usage="professionnel";
        }
        if($installation->getUsages()=="erp_ert") {
            $type_usage="ERP / ERT";
        }
        if($type_usage!="domestique") {
            $couleur1="119"; $couleur2="181"; $couleur3="254";
        } else {
            $couleur1="255"; $couleur2="228"; $couleur3="54";
        }

        $nom_f='DEMANDE_'.$installation->getDemandeCourante()->getNumero();
        $fich = $this->getParameter('pdf_directory').'/'.$nom_f.'.pdf';

        // if(file_exists($fich)) {
        //     return $this->file($fich, ''.$nom_f.'_'.date("YmdHis").'.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
        // } 


        $pdf = new DetailPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->Image("assets/img/thumbnail_Logo_COSSUEL.png",5,10,80);
        $pdf->Ln(3);
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(180,5,htmlspecialchars_decode('DEMANDE D\'ATTESTATION DE'),0,0,'R');
        $pdf->SetFont('Arial','B',14);
        $pdf->Ln(5);
        $pdf->Cell(270,10,'CONFORMITE',0,0,'C');
        $pdf->SetLineWidth(0.5);
        $pdf->SetDrawColor($couleur1,$couleur2, $couleur3);
        $pdf->Line(110,30,190,30);
        $pdf->Line(110,40,190,40);
        $pdf->Ln(15);
        $pdf->SetFont('Arial','I',13);
        $pdf->Cell(174,5,utf8_decode('Installation à usage '.strtolower($type_usage)),0,0,'R');
        
        
        $pdf->Ln(10);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(30,5,'Agence:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(65,5,$installation->getLocalite()->getAgence(),0,0);
        
        
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(25,5,utf8_decode('Demande N° :'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(25,5,$installation->getDemandeCourante()->getNumero(),0,0);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(10,5,'Du :',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(25,5,$installation->getDemandeCourante()->getDateCreation()->format("d-m-Y"),0,0);
        
        $pdf->Ln(10);
        $pdf->SetFont('Arial','B',12);
        $pdf->SetFillColor($couleur1,$couleur2, $couleur3);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,8,'INFORMATIONS INSTALLEUR',0,2,'C',true);
        $pdf->Cell(190,43,'',1,0);
        
        $pdf->Ln(3);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,'Nom du contact:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(120,5,utf8_decode($installation->getElectricien()->getNomComplet()),0,0);
        
        $pdf->Ln(8);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,'Adresse:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(120,5,utf8_decode($installation->getElectricien()->getAdresse()),0,0);
        
        $pdf->Ln(8);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,'Ville:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(120,5,utf8_decode($installation->getElectricien()->getLocalite()),0,0);
        
        
        $pdf->Ln(8);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,utf8_decode('Téléphone'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(70,5,$installation->getElectricien()->getTelephone(),0,0);
        
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(14,5,'E-Mail:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(65,5,utf8_decode($installation->getElectricien()->getEmail()),0,0,'R');
        
        $pdf->Ln(8);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,utf8_decode('Type Pièce'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(70,5,$installation->getElectricien()->getTypePiece(),0,0);
        
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(25,5,utf8_decode('Numéro Pièce'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(54,5,$installation->getElectricien()->getNumPiece(),0,0,'R');
        
        $pdf->Ln(10);
        $pdf->SetFont('Arial','B',12);
        $pdf->SetFillColor($couleur1,$couleur2, $couleur3);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,8,'INSTALLATION ELECTRIQUE',0,2,'C',true);
        $pdf->Cell(190,58,'',1,0);
        
        $pdf->Ln(3);
        $pdf->SetFont('Arial','I',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(40,5,utf8_decode('Etat Installation:'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(70,5,($installation->getAlimente()==1?"":"Non").utf8_decode("Alimentée"),0,0);
        
        $pdf->SetFont('Arial','I',10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(37,5,'Num Compteur Voisin:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(42,5,utf8_decode($installation->getCompteur()),0,0,'R');
        
        $pdf->Ln(8);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,utf8_decode('Propriètaire Installation'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(140,5,utf8_decode($installation->getProprietaire()->getNomComplet()),0,0);
        
        $pdf->Ln(8);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,utf8_decode('Type Pièce'),0,0);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(70,5,$installation->getProprietaire()->getTypePiece(),0,0);
        
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(37,5,'Num Piece:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(42,5,$installation->getProprietaire()->getNumPiece(),0,0,'R');
        
        $pdf->Ln(8);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,utf8_decode('Type Batiment'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(140,5,utf8_decode($installation->getNatureBatiment()),0,0);
        $pdf->Ln(8);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,utf8_decode('Adresse'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(70,5,utf8_decode($installation->getAdresse()),0,0);
        
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(37,5,utf8_decode('Téléphone'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(42,5,$installation->getProprietaire()->getTelephone(),0,0,'R');
        
        $pdf->Ln(8);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,utf8_decode('Ville'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(140,5,utf8_decode($installation->getProprietaire()->getLocalite()),0,0);
        
        $pdf->Ln(8);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,'G.P.S.               Latitude:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(70,5,$installation->getLattitude(),0,0);
        
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(30,5,'Longitude:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(50,5,$installation->getLongitude(),0,0);
        
        $pdf->Ln(10);
        $pdf->SetFont('Arial','B',10);
        $pdf->SetFillColor($couleur1,$couleur2, $couleur3);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,8,'TYPE DE CONSTRUCTION A USAGE '.strtoupper($type_usage),0,2,'C',true);
        $pdf->Cell(190,17,'',1,0);
        $pdf->Ln(3);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,utf8_decode('Type de Construction'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(80,5,utf8_decode($installation->getTypeConstruction()),0,0);
        
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(50,5,utf8_decode('Nombre de pièces principales'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(15,5,$installation->getPriece(),0,0);
        
        $pdf->Ln(8);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,utf8_decode('Type Opération'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(80,5,($installation->getCollectif()==1?"":"Non ")."Collectif",0,0);
        $pdf->Ln(10);
        $pdf->SetFont('Arial','B',10);
        $pdf->SetFillColor($couleur1,$couleur2, $couleur3);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,8,'TRAVAUX',0,2,'C',true);
        $pdf->Cell(190,17,'',1,0);
        $pdf->Ln(3);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,utf8_decode('Nature Travaux'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(140,5,utf8_decode($installation->getNatureTravaux()),0,1);
        
        $pdf->Ln(13);
        $pdf->SetFont('Arial','B',10);
        $pdf->SetFillColor($couleur1,$couleur2, $couleur3);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(130,8,'TARIFICATION',0,2,'C',true);
        $pdf->Cell(130,17,'',1,0);
        
        $pdf->Ln(3);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,utf8_decode('Info Visite'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(140,5,$installation->getDemandeCourante()->getNumeroPassage().utf8_decode('e Vistite'),0,0);
        
        $pdf->Ln(8);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(40,5,utf8_decode('Puissance Demandée'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35,5,$installation->getDemandeCourante()->getPuissance().' Kw',0,0);
        
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(20,5,utf8_decode('Tarif'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(25,5,number_format($installation->getDemandeCourante()->getCout(), 0, ""," ")." FCFA",0,0,'R');
        
        $pdf->Ln(-19);
        $pdf->SetFont('Arial','BUI',12);
        $pdf->Cell(320,5,utf8_decode('Signature'),0,0,'C');
        
        
        
        $y=-35;
        $pdf->SetY($y);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(0,5,utf8_decode("Comité Sénégalais pour la Sécurité des Usagers de l'Electricité (COSSUEL)"),'T',0,'C');
        $y+=3; $pdf->SetY($y);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(0,5,utf8_decode("Organisme agréé par le Ministère chargé de l'Energie suivant le decret No 0022609 du 22 Août 2019"),0,0,'C');
        $y+=3; $pdf->SetY($y);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(0,5,utf8_decode("Adresse: 2 Rue Wagane Diouf, Immeuble Mame Alassane FALL, 7ème étage DAKAR SENEGAL"),0,0,'C');
        $y+=3; $pdf->SetY($y);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(0,5,utf8_decode("Téléphone: (+221) 76 644 76 02/ 33 842 01 81  Email: cossuel@cossuel.sn"),0,0,'C');


        $pdf->Output($fich,'F');
        return $this->file($fich, ''.$nom_f.'_'.date("YmdHis").'.pdf', ResponseHeaderBag::DISPOSITION_INLINE);

    }

    #[Route('/liste_excel', name:'app_installation_excel')]
    public function genExcel(Request $request, ManagerRegistry $doctrine, array $headers = [], $fileName = 'liste.xlsx'): Response
    {
        $em = $doctrine->getManager();
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agent=null; $electricien=null; $agence=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }
        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";

        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
        }

        // {#-----------Generation de fichiers Excel-------------#} 
        $spreadsheet = new Spreadsheet();

        $lib="Demande"; $fileName='liste_'.$lib;
        $i=2;
        /* @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet */
        $sheet = $spreadsheet->getActiveSheet();
        $entete=array(
            'N° Demande',
            'Date Demande ',
            'Usage',
            'Agence',
            'Localité',
            'Type Construction',
            'Electricien',
            'Statut Demande',
        );
        $id_col="A";
        foreach ($entete as $col) {
            $sheet->setCellValue($id_col.$i, $col);
            $id_col++;
        }
        $sm = $request->getSession()->get('sousmenu');
        switch ($sm) {
            case 'demande_all':
                if(! in_array($role, array("ROLE_ADMIN", "ROLE_PUBLIC", "ROLE_ACCUEIL", "ROLE_RFO"))) {
                    $val_filtre["etat"] = "Soumis";
                }
            break;
            
            case 'demande_soumission':
                $val_filtre = array("etat"=>"SaisieSoumis");
                if($role=="ROLE_USER" || $role=="ROLE_CLIENT" || $role=="ROLE_PUBLIC") {
                    $val_filtre["created_by"] = $userConn->getId();
                }
            break;
            
            case 'demande_paiement':
                $val_filtre = array("etat"=>"Soumis, Accepté, Payé");
            break;
            
            case 'demande_validation':
                $val_filtre = array("etat"=>"Payé|Validé");
            break;
            
            default:
                if(! in_array($role, array("ROLE_ADMIN", "ROLE_PUBLIC", "ROLE_ACCUEIL", "ROLE_RFO"))) {
                    $val_filtre["etat"] = "Soumis";
                }
            break;
        }
        $list0=$em->getRepository(Installation::class)->findByRestr($val_rech, $val_filtre, "", 0);
        $list = array();
        foreach ($list0 as $val) {
            $dateD=$val->getCreatedAt(); 
            $numD='['.$val->getCreatedAt()->format("d/m/y_H:i:s").']';
            $etatD=$val->getEtat();
            if($val->getDemandeCourante()) { 
                $numD=$val->getDemandeCourante()->getNumero(); 
                $dateD=$val->getDemandeCourante()->getDateCreation(); 
                $etatD=$val->getDemandeCourante()->getEtat();
            }
            $list[]=array(
                $numD,
                $dateD,
                $val->getUsages(),
                $val->getLocalite()->getAgence(),
                $val->getLocalite(),
                $val->getTypeConstruction(),
                $val->getElectricien(),
                $etatD,
            );
        }

        $i = 3; $id_col="A";
        foreach ($list as $u ) {
            $id_col="A"; $ix=0;
            foreach ($entete as $col) {
                $sheet->setCellValue($id_col.$i, $u[$ix]);
                $id_col++; $ix++;
            }
            $i++;
        }
        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);

        // Create a Temporary file in the system
        $fileName = 'Liste des '.$lib.'.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Create the excel file in the tmp directory of the system
        $writer->save($temp_file);

        // Return the excel file as an attachment
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    
    #[Route('/{id}/renew', name: 'app_installation_renew', methods: ['GET', 'POST'])]
    public function addrenew(Request $request, Installation $installation = null, InstallationRepository $installationRepository, DemandeRepository $demandeRepo): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $installation_old=$installationRepository->find($installation);
        $old_demande=$installation_old->getDemandeCourante();

        $installation_new=clone $installation_old;
        $installation_new->restId();
        $installation_new->setEtat("En Saisie 6/6");
        $installation_new->setStep("6");
        $installation_new->setCreatedby($this->getUser()->getId());
        $installation_new->setCreatedAt(new \DateTimeImmutable());

        $installationRepository->add($installation_new);

        $demande=new Demande();
        $demande->setInstallation($installation_new);
        $demande->setCout($old_demande->getCout()*80/100);
        $demande->setPuissance($old_demande->getPuissance());
        $demande->setCreatedby($this->getUser()->getId());
        $demande->setDemandeParente($old_demande->getId());
        $demande->setNumeroPassage(2);
        $demande->setSoumis(0);
        $demande->setAccepte(0);
        $demandeRepo->add($demande);
        $demande->setNumero($old_demande->getNumero());
        $demandeRepo->add($demande);

        return $this->redirectToRoute('app_installation_add6', array('id' => $installation_new->getId())); 
    }

    #[Route('/{id}/clone', name: 'app_installation_clone', methods: ['GET', 'POST'])]
    public function addclone(Request $request, Installation $installation, InstallationRepository $installationRepository, DemandeRepository $demandeRepo): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $installation_old=$installationRepository->find($installation);
        $old_demande=$installation_old->getDemandeCourante();

        $installation_new=clone $installation_old;
        $installation_new->restId();
        $installation_new->setEtat("En Saisie 6/6");
        $installation_new->setStep("6");
        $installation_new->setCreatedby($this->getUser()->getId());
        $installation_new->setCreatedAt(new \DateTimeImmutable());
        $installation_new->restDemande();

        $installationRepository->add($installation_new);

        // $demande=new Demande();
        // $demande->setInstallation($installation_new);
        // $demande->setCout($old_demande->getCout());
        // $demande->setPuissance($old_demande->getPuissance());
        // $demande->setCreatedby($this->getUser()->getId());
        // $demande->setDemandeParente($old_demande->getId());
        // $demande->setNumeroPassage(2);
        // $demandeRepo->add($demande);
        
        // $numD=str_pad($demande->getId(), 8, '0', STR_PAD_LEFT);
        // $demande->setNumero($numD);
        // $demandeRepo->add($demande);

        return $this->redirectToRoute('app_installation_add6', array('id' => $installation_new->getId())); 
    }

    #[Route('/{id}/addfromE/{idE}', name: 'app_installation_addfromE', methods: ['GET', 'POST'])]
    public function newfromE(Request $request, Electricien $idE, InstallationRepository $installationRepository, ElectricienRepository $electricienRepo): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $electricien=$electricienRepo->find($idE);
        $installation = new Installation();
        $installation->setElectricien($electricien);
        $installation->setLocalite($electricien->getLocalite());
        $installation->setStep(4);
        $installation->setCreatedby($this->getUser()->getId());
        $installation->setEtat("En Saisie 4/6"); 
        $installation->setUsages("domestique");
        $installationRepository->add($installation);

        return $this->redirectToRoute('app_installation_add', array('id' => $installation->getId())); 
    }

    #[Route('/{id}/add', name: 'app_installation_add', methods: ['GET', 'POST'])]
    public function new(Request $request, Tools $tools, ManagerRegistry $doctrine, Installation $installation = null, InstallationRepository $installationRepository, DepartementRepository $departRepo, RegionRepository $regionRepo, LocaliteRepository $localiteRepo): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        if($installation==null) {
            $installation = new Installation();
        } else {
            $installation=$installationRepository->find($installation);
        }
        if(!$installation) {
            $installation = new Installation();
        }
    // $form = $this->createForm(InstallationType::class, $installation);
        $val_alimente=false; if($installation->getAlimente()) { $val_alimente=true; }
        $val_usages="domestique"; if($installation->getUsages()) { $val_usages=$installation->getUsages(); }
        $val_gest="domestique"; if($installation->getGrstReseau()) { $val_gest=$installation->getGrstReseau(); }
        $o_region=null; $o_departement=null; $o_localite=null;
        if($installation->getLocalite()) { 
            $o_localite=$installation->getLocalite(); 
            $o_departement=$o_localite->getDepartement(); 
            $o_region=$o_departement->getRegion(); 
        }
        $formBuilder = $this->createFormBuilder($installation);
        $form=$formBuilder
        ->add('region', EntityType::class, [
            'attr' => [
                'class' => 'form-select'
            ],
            'mapped' => false,
            'class' => Region::class,
            'query_builder' => function (RegionRepository $er) use ($agence) {
                // if($agence) {
                //     return $er->createQueryBuilder('r')
                //     ->leftJoin('App\Entity\Departement', 'd', 'WITH', 'd.region = r.id') 
                //     ->leftJoin('App\Entity\Localite', 'l', 'WITH', 'l.departement = d.id') 
                //     ->where('l.agence = :val') 
                //     ->setParameter('val', $agence);
                // } else {
                    return $er->createQueryBuilder('r');
                // }
            },
            'choice_label' => 'nom',
            'data' => $o_region,
            'label' => 'Région',
            'required' => false
        ])
        ->add('departement', EntityType::class, [
            'attr' => [
                'class' => 'form-select'
            ],
            'mapped' => false,
            'class' => Departement::class,
            'data' => $o_departement,
            'query_builder' => function (DepartementRepository $er) use ($o_region, $agence) {
                // if($agence) {
                //     return $er->createQueryBuilder('d')
                //     ->leftJoin('App\Entity\Localite', 'l', 'WITH', 'l.departement = d.id') 
                //     ->where('l.agence = :val') 
                //     ->andWhere('d.region = :val2') 
                //     ->setParameter('val', $agence)
                //     ->setParameter('val2', $o_region!=null?$o_region:null);
                // } else {
                    return $er->createQueryBuilder('d')
                    ->where('d.region = :val') 
                    ->setParameter('val', $o_region!=null?$o_region:null);
                // }
            },
            'choice_label' => 'nom',
            'label' => 'Département',
            'required' => false
        ])
        ->add('localite', EntityType::class, [
            'attr' => [
                'class' => 'form-select'
            ],
            'class' => Localite::class,
            'data' => $o_localite,
            'query_builder' => function (LocaliteRepository $er) use ($o_departement, $agence) {
                // if($agence) {
                //     return $er->createQueryBuilder('l')
                //     ->where('l.departement = :val') 
                //     ->andWhere('l.agence = :val2') 
                //     ->setParameter('val', $o_departement!=null?$o_departement:null)
                //     ->setParameter('val2', $agence);
                // } else {
                    return $er->createQueryBuilder('l')
                    ->where('l.departement = :val') 
                    ->setParameter('val', $o_departement!=null?$o_departement:null);
                // }
            },
            'choice_label' => 'nom',
            'label' => 'Localité',
            'required' => false
        ])
        ->add('adresse', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => false,
            'label' => 'Adresse'
        ])
        ->add('habitation', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            // 'label' => 'Complément Adresse'
            'label' => 'Ancien Numéro Dossier'
        ])
/*
        ->add('lattitude', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'constraints' => [
                new Callback(function($object, ExecutionContextInterface $context) {
                    $v = $object;
                    if($object) {
                        if (!is_numeric($object)) {
                            $context
                                ->buildViolation('Format incorrect ! Doit être numérique.')
                                ->addViolation();
                        }
                    }
                }),
            ],
            'required' => false,
            'label' => 'Latitude'
        ])
        ->add('longitude', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'constraints' => [
                new Callback(function($object, ExecutionContextInterface $context) {
                    $v = $object;
                    if($object) {
                        if (!is_numeric($object)) {
                            $context
                                ->buildViolation('Format incorrect ! Doit être numérique.')
                                ->addViolation();
                        }
                    }
                }),
            ],
            'required' => false,
            'label' => 'Longitude'
        ])
        */
        ->add('usages', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'form-select'
                ],
                'choices' => array('Domestique' => 'domestique', 'Professionnel' => 'non_domestique', 'ERP/ERT' => 'erp_ert'),
                'data' => $val_usages,
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Usage Installation'
            ])
            ->add('alimente', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'm-2'
                ],
                'choices' => array('Non' => false, 'Oui' => true),
                'choice_attr' => [
                    'Oui' => ['class' => 'm-2 ms-3 me-1'],
                    'Non' => ['class' => 'm-2 ms-3 me-1'],
                ],
                'expanded' => true,
                'data' => $val_alimente,
                'placeholder' => Null,
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Installation déja alimentée ?'
            ])
            ->add('compteur', TextType::class, [
                'attr' => [
                    'class' => 'form-control on_alimente1'
                ],
                'constraints' => [
                    new Callback(function($object, ExecutionContextInterface $context) {
                        $v = $object;
                        if($object) {
                            if (strlen($object) !=7 || !is_numeric($object)) {
                                $context
                                    ->buildViolation('Le numéro du compteur est incorrect ! 7 chiffres attendus !')
                                    ->addViolation();
                            }
                        }
                    }),
                ],
                'required' => false,
                'label' => 'Numéro Compteur'
            ])
            ->add('abonnement', TextType::class, [
                'attr' => [
                    'class' => 'form-control on_alimente1'
                ],
                'required' => false,
                'label' => 'Numéro Abonnement'
            ])
            ->add('grstReseau', ChoiceType::class, [
                'attr' => [
                    'class' => 'form-select on_alimente1'
                ],
                'choices' => array('SENELEC' => 'SENELEC', ),
                'data' => $val_gest,
                'required' => false,
                'label' => 'Gestionnaire Réseau'
            ])
            ->getForm();
        
            $formModifier = function (FormInterface $form, Region $region = null) {
    
                $form
                    ->add('departement', EntityType::class, [
                        'attr' => [
                            'class' => 'form-select'
                        ],
                        'mapped' => false,
                        'class' => Departement::class,
                        'query_builder' => function (DepartementRepository $er) use ($region) {
                            return $er->createQueryBuilder('l')
                            ->where('l.region = :val') 
                            ->setParameter('val', $region);
                        },
                        'data' => null,
                        'choice_label' => 'nom',
                        'label' => 'Département',
                        'required' => true
                    ])
                    ->add('localite', EntityType::class, [
                        'attr' => [
                            'class' => 'form-select'
                        ],
                        'mapped' => false,
                        'class' => Localite::class,
                        'data' => null,
                        'query_builder' => function (LocaliteRepository $er) use ($region) {
                            return $er->createQueryBuilder('l')
                            ->join('App\Entity\Departement', 'd', 'WITH', 'd.id = l.departement')
                            ->where('d.region = :val') 
                            ->setParameter('val', $region);
                        },
                        'choice_label' => 'nom',
                        'label' => 'Localité',
                        'required' => true
                    ])
                ;
            };

        // $formBuilder->addEventListener(
        //     FormEvents::PRE_SET_DATA,
        //     function (FormEvent $event) use ($formModifier) {
        //         $data = $event->getData();

        //         $formModifier($event->getForm(), $data->getRegion());
        //     }
        // );
        $formBuilder->get('region')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                // It's important here to fetch $event->getForm()->getData(), as
                // $event->getData() will get you the client data (that is, the ID)
                $region = $event->getForm()->getData();

                // since we've added the listener to the child, we'll have to pass on
                // the parent to the callback functions!
                $formModifier($event->getForm()->getParent(), $region);
            }
        );
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $form->get('localite')->getData()."=VAL";
            $localite=$form->get('localite')->getData();
            $localite=$localiteRepo->find($localite);
            $installation->setLocalite($localite);
            $step = 2;
            if($installation->getStep()<$step) { 
                $installation->setCreatedby($this->getUser()->getId());
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 2/6"); 
            }
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_add2', array('id' => $installation->getId())); 
            // return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('installation/new.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}/add2', name: 'app_installation_add2', methods: ['GET', 'POST'])]
    public function new2(Request $request, Installation $installation, InstallationRepository $installationRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $installation=$installationRepository->find($installation);
        // $form = $this->createForm(InstallationType::class, $installation);
        $val_collectif=false; if($installation->getCollectif()) { $val_collectif=true; }
        $val_typeC=null; if($installation->getTypeConstruction()) { $val_typeC=$installation->getTypeConstruction(); }
        $form = $this->createFormBuilder($installation)
            ->add('collectif', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'm-2'
                ],
                'choices' => array('Non' => false, 'Oui' => true),
                'choice_attr' => [
                    'Oui' => ['class' => 'm-2 ms-3 me-1'],
                    'Non' => ['class' => 'm-2 ms-3 me-1'],
                ],
                'expanded' => true,
                'data' => $val_collectif,
                'placeholder' => Null,
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Batiment collectif ?'
            ])
            ->add('nomSite', TextType::class, [
                'attr' => [
                    'class' => 'form-control on_collectif1'
                ],
                'required' => false,
                'label' => 'Nom du Site'
            ])
            ->add('logement', TypeIntegerType::class, [
                'attr' => [
                    'class' => 'form-control on_collectif1',
                    'min' => 1
                ],
                'required' => false,
                'label' => 'Nbre Logements'
            ])            
            // Type Construction
            ->add('typeConstruction', EntityType::class, [
                'attr' => [
                    'class' => 'form-select'
                ],
                'class' => TypeConstruction::class,
                'data' => $val_typeC,
                'query_builder' => function (TypeConstructionRepository $er) use ($installation) {
                    return $er->createQueryBuilder('u')
                    ->where('u.usages = :usages') 
                    ->setParameter('usages', $installation->getUsages());
                },
                'choice_label' => 'nom',
                'label' => 'Type Construction',
                'required' => false
                ])
            ->add('niveau', TypeIntegerType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'min' => 1
                ],
                'required' => false,
                'label' => 'Nombre de niveaux'
            ])
            ->add('activite', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Nature des activités de la structure'
            ])
            ->add('priece', TypeIntegerType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'min' => 2
                ],
                'required' => false,
                'label' => 'Nombre de Pièces'
            ])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 3;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 3/6"); 
            }
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_add3', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new2.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}/add3', name: 'app_installation_add3', methods: ['GET', 'POST'])]
    public function new3(Request $request, Installation $installation, InstallationRepository $installationRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $installation=$installationRepository->find($installation);
        $val_typeinstall=$installation->getTypeInstallation();
        // $form = $this->createForm(InstallationType::class, $installation);
        $form = $this->createFormBuilder($installation)
            // Nature Travaux
            // -------------------------------------------------------------------------------------------
            ->add('natureTravaux',  EntityType::class, [
                'attr' => [
                    'class' => 'form-select'
                ],
                'class' => NatureTravaux::class,
                'choice_label' => 'nom',
                'label' => 'Nature Travaux',
                'required' => false
                ])

            ->add('neuf15', TextType::class, [
                'attr' => [
                    'class' => 'form-control py-1 my-1 nt1'
                ],
                'required' => false,
                'label' => 'Neuf_15'
            ])
            ->add('existant15', TextType::class, [
                'attr' => [
                    'class' => 'form-control py-1 my-1 nt1'
                ],
                'required' => false,
                'label' => 'Existant_15'
            ])
            ->add('neuf25', TextType::class, [
                'attr' => [
                    'class' => 'form-control py-1 my-1 nt1'
                ],
                'required' => false,
                'label' => 'Neuf_25'
            ])
            ->add('existant25', TextType::class, [
                'attr' => [
                    'class' => 'form-control py-1 my-1 nt1'
                ],
                'required' => false,
                'label' => 'Existant_25'
            ])
            ->add('neufAutre', TextType::class, [
                'attr' => [
                    'class' => 'form-control py-1 my-1 nt1'
                ],
                'required' => false,
                'label' => 'NeufAutre'
            ])
            ->add('existantAutre', TextType::class, [
                'attr' => [
                    'class' => 'form-control py-1 my-1 nt1'
                ],
                'required' => false,
                'label' => 'Existant_Autre'
            ])
            ->add('typeInstallation', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'form-select'
                ],
                'choices' => array('Installation en monophasé' => 'monophase', 'Installation en triphasé' => 'triphase'),
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'required' => false,
                'label' => 'Type Installation'
            ])
            // -------------------------------------------------------------------------------------------
            // Autre Intervenant ?
            // -------------------------------------------------------------------------------------------
            ->add('intervenantAutre', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'm-2'
                ],
                'choices' => array('Non' => false, 'Oui' => true),
                'choice_attr' => [
                    'Oui' => ['class' => 'm-2 ms-3 me-1'],
                    'Non' => ['class' => 'm-2 ms-3 me-1'],
                ],
                'expanded' => true,
                'data' => false,
                'placeholder' => Null,
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Autres intervenants en électricité sur installation de consommation ?'
            ])
            ->add('intervenant', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Intervenants'
            ])
            // -------------------------------------------------------------------------------------------
        ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 4;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 4/6"); 
            }
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_add4', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new3.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}/add4', name: 'app_installation_add4', methods: ['GET', 'POST'])]
    public function new4(Request $request, Installation $installation, InstallationRepository $installationRepository, SluggerInterface $slugger, ElectricienRepository $electricienRepository, PieceJointeRepository $pjRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $installation=$installationRepository->find($installation);
        $ok_elec=0;
        if($installation->getElectricien()) { 
            $electricien=$electricienRepository->find($installation->getElectricien()->getId());
        } else {
            if($request->request->get('rech_electricien')) {
                $rech_electricien=$request->request->get('rech_electricien');
                $resrech_electricien=$electricienRepository->findOneByTelMailPiece($rech_electricien);
                if($resrech_electricien) {
                    $this->addFlash("success", "Un électricien répondant au critère ($rech_electricien) trouvé et chargé !");
                    $electricien=$resrech_electricien;
                    $installation->setElectricien($electricien);
                    $ok_elec=1;
                } else {
                    $this->addFlash("danger", "Aucun électricien répondant au critère ($rech_electricien) trouvé !");
                    $electricien = new Electricien();
                }
            } else {
                $electricien = new Electricien();
            }
        }
        $form = $this->createForm(ElectricienType::class, $electricien);
        $form
            ->add('pj', FileType::class,[
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nouvelle Pièce Jointe',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new ConstraintsFile([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/*',
                            'application/pdf'
                        ],
                        
                    ])
                ],
            ]);
        $form->remove('localite');
        $form->add('localite', EntityType::class, [
            'mapped' => true,
            'attr' => [
                'class' => 'form-select'
            ],
            'class' => Localite::class,
            'query_builder' => function (LocaliteRepository $er) use ($installation) {
                if($installation->getLocalite()->getDepartement()->getRegion()) {
                    return $er->createQueryBuilder('r')
                    ->leftJoin('App\Entity\Departement', 'd', 'WITH', 'd.id = r.departement') 
                    ->where('d.region = :val') 
                    ->setParameter('val', $installation->getLocalite()->getDepartement()->getRegion()->getId());
                } else {
                    return $er->createQueryBuilder('r');
                }
            },
            'choice_label' => 'nom',
            'label' => 'Localité',
            'group_by' => 'departement',
            'required' => false
            ]
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $pj=$pjRepository->findOneBy(array('installation'=>$installation->getId(), 'libelle'=>'PJ Electricien'));
            if($pj==null) {
                $pj=new PieceJointe();
                $pj->setInstallation($installation);
                $pj->setCreatedby($this->getUser()->getId());
                $pj->setLibelle('PJ Electricien');
            }
            $photoFile = $form->get('pj')->getData();
            if ($photoFile) {
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile->guessExtension();

                try {
                    $photoFile->move(
                        $this->getParameter('photo_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash("danger", "Le fichier n'a pas pu être téléchargé !");
                }
                
                $pj->setFichier($newFilename);
                $pjRepository->add($pj);
            }
            
            $step = 5;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 5/6"); 
            }
            $electricienRepository->add($electricien);
            $installation->setElectricien($electricien);
            $installationRepository->add($installation);

            return $this->redirectToRoute('app_installation_add5', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new4.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}/add5', name: 'app_installation_add5', methods: ['GET', 'POST'])]
    public function new5(Request $request, Installation $installation, InstallationRepository $installationRepository, SluggerInterface $slugger, ProprietaireRepository $proprietaireRepository, PieceJointeRepository $pjRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $proprietaire = new Proprietaire();
        $installation=$installationRepository->find($installation);
        if($installation->getProprietaire()) { 
            $proprietaire=$proprietaireRepository->find($installation->getProprietaire()->getId());
        } else {
            if($request->request->get('rech_proprietaire')) {
                $rech_proprietaire=$request->request->get('rech_proprietaire');
                $resrech_proprietaire=$proprietaireRepository->findOneByTelMailPiece($rech_proprietaire);
                if($resrech_proprietaire) {
                    $this->addFlash("success", "Un propriétaire répondant au critère ($rech_proprietaire) trouvé et chargé !");
                    $proprietaire=$resrech_proprietaire;
                } else {
                    $this->addFlash("danger", "Aucun propriétaire répondant au critère ($rech_proprietaire) trouvé !");
                    $proprietaire = new Proprietaire();
                }
            } else {
                $proprietaire = new Proprietaire();
            }
        }
        $form = $this->createForm(ProprietaireType::class, $proprietaire);

        $form->remove('localite');
        $form->add('localite', EntityType::class, [
            'mapped' => true,
            'attr' => [
                'class' => 'form-select'
            ],
            'class' => Localite::class,
            'query_builder' => function (LocaliteRepository $er) use ($installation) {
                if($installation->getLocalite()->getDepartement()->getRegion()) {
                    return $er->createQueryBuilder('r')
                    ->leftJoin('App\Entity\Departement', 'd', 'WITH', 'd.id = r.departement') 
                    ->where('d.region = :val') 
                    ->setParameter('val', $installation->getLocalite()->getDepartement()->getRegion()->getId());
                } else {
                    return $er->createQueryBuilder('r');
                }
            },
            'choice_label' => 'nom',
            'label' => 'Localité',
            'group_by' => 'departement',
            'required' => false
            ]
        );

        $form
            ->add('pj1', FileType::class,[
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nouvelle Pièce Jointe',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new ConstraintsFile([
                        'maxSize' => '4M',
                        'mimeTypes' => [
                            'image/*',
                            'application/pdf'
                        ],
                        
                    ])
                ],
            ])
            ->add('pj2', FileType::class,[
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nouvelle Pièce Jointe',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new ConstraintsFile([
                        'maxSize' => '4M',
                        'mimeTypes' => [
                            'image/*',
                            'application/pdf'
                        ],
                        
                    ])
                ],
            ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $pj1=$pjRepository->findOneBy(array('installation'=>$installation->getId(), 'libelle'=>'PJ Propriétaire'));
            $pj2=$pjRepository->findOneBy(array('installation'=>$installation->getId(), 'libelle'=>'PJ Dossier Technique'));
            if($pj1==null) {
                $pj1=new PieceJointe();
                $pj1->setInstallation($installation);
                $pj1->setCreatedby($this->getUser()->getId());
                $pj1->setLibelle('PJ Propriétaire');
            }
            if($pj2==null) {
                $pj2=new PieceJointe();
                $pj2->setInstallation($installation);
                $pj2->setCreatedby($this->getUser()->getId());
                $pj2->setLibelle('PJ Dossier Technique');
            }
            $photoFile1 = $form->get('pj1')->getData();
            $photoFile2 = $form->get('pj2')->getData();
            if ($photoFile1) {
                $originalFilename = pathinfo($photoFile1->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile1->guessExtension();

                try {
                    $photoFile1->move(
                        $this->getParameter('photo_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash("danger", "Le fichier n'a pas pu être téléchargé !");
                }
                
                $pj1->setFichier($newFilename);
                $pjRepository->add($pj1);
            }
            if ($photoFile2) {
                $originalFilename = pathinfo($photoFile2->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile2->guessExtension();

                try {
                    $photoFile2->move(
                        $this->getParameter('photo_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash("danger", "Le fichier n'a pas pu être téléchargé !");
                }
                
                $pj2->setFichier($newFilename);
                $pjRepository->add($pj2);
            }
            
            $step = 6;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 6/6"); 
            }
            $proprietaireRepository->add($proprietaire);
            $installation->setProprietaire($proprietaire);
            $installationRepository->add($installation);

            return $this->redirectToRoute('app_installation_add6', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new5.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }


    #[Route('/{id}/add6', name: 'app_installation_add6', methods: ['GET', 'POST'])]
    public function new6(Request $request, Tools $tools, ManagerRegistry $doctrine, Installation $installation, InstallationRepository $installationRepository, DemandeRepository $demandeRepository, MailerInterface $mailer): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $demande = new Demande(); $demande->setSoumis(0);
        $installation=$installationRepository->find($installation);

        if($installation->getDemandeCourante()) { 
            $demande=$demandeRepository->find($installation->getDemandeCourante()->getId());
        } 
        $form = $this->createFormBuilder($demande)
            ->add('puissance', TypeIntegerType::class, [
                'attr' => [
                    'class' => 'form-control fs-5 py-2 fw-bold ',
                    'min' => 1,
                    'step' => 1,
                    // 'max' => 34
                ],
                'required' => true,
                'label' => 'Puissance demandée'
            ])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 7;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("Soumis"); 
            }
            $demande->setInstallation($installation);
            $demande->setCreatedby($this->getUser()->getId());
            $demandeRepository->add($demande);
            $numD=str_pad($demande->getId(), 8, '0', STR_PAD_LEFT);

            $val_puissance=$demande->getPuissance();
            $result=0;
            if ( !$val_puissance) $result=0;
            if($installation->getUsages()=="domestique") {
                if ( ($val_puissance>0) && ($val_puissance <= 6 )  ) $result="10000";
                if ( ($val_puissance>6) && ($val_puissance<=17) )   $result="30000";
                if ($val_puissance>17)  $result="100000";
            }
            else {
                if ( ($val_puissance>0) && ($val_puissance <= 6 )  ) $result="12000";
                if ( ($val_puissance>6) && ($val_puissance<=17) ) $result="150000";
                if ($val_puissance>17)  $result="250000";
            } 
            if($demande->getDemandeParente()) {
                $result=$result*80/100;
                $demande->setNumeroPassage(2);
            }
            $demande->setCout($result);
            $demande->setNumero($numD);
            $demande->setRejet(0);
            $demandeRepository->add($demande);
            $installationRepository->add($installation);
            $this->addFlash("success", "La demande a été soumise sous le numero $numD ! Le montant à payer est de ".number_format($demande->getCout(), 0, ""," ")." FCFA");

            // Notification à faire au client
            // -----------------------------------------------------------------------------------------------
            $em=$doctrine->getManager(); 
            $mess_sms='Demande de conformité numéro '.$demande->getNumero().' soumise pour traitement. Nous vous informerons si elle est validée.';
            if($installation->getElectricien() && $installation->getElectricien()->getTelephone()) {
                $tools->notifSMS($installation->getElectricien()->getTelephone(), $mess_sms);
            }
            if($installation->getProprietaire() && $installation->getProprietaire()->getTelephone()) {
                $tools->notifSMS($installation->getProprietaire()->getTelephone(), $mess_sms);
            }
            
            $sujet_mail='Demande COSSUEL soumise !';
            $mess_mail='Demande de conformité numéro '.$demande->getNumero().' soumise pour traitement. Nous vous informerons si elle est validée.';
            if($installation->getElectricien() && $installation->getElectricien()->getEmail()) {
                $tools->notifMail($installation->getElectricien()->getEmail(), $mess_mail, $sujet_mail);
            }
            if($installation->getProprietaire() && $installation->getProprietaire()->getEmail()) {
                $tools->notifMail($installation->getProprietaire()->getEmail(), $mess_mail, $sujet_mail);
            }
            // -----------------------------------------------------------------------------------------------
        
            return $this->redirectToRoute('app_installation_show', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new6.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_installation_show', methods: ['GET'])]
    public function show(Installation $installation, Tools $tools, ManagerRegistry $doctrine, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); 
        if($installation->getStep()<=7 || !$installation->getDemandeCourante()->getPaiement()) {
            return $this->render('installation/show.html.twig', [
                'installation' => $installation,

                'tools'=> $tools,
            ]);
        } elseif($installation->getDemandeCourante() && $installation->getDemandeCourante()->getAccepte()) {
            $paiement = $installation->getDemandeCourante()->getPaiement();
            return $this->render('paiement/show.html.twig', [
                'paiement' => $paiement,

                'tools'=> $tools,
            ]);
        }
    }

    #[Route('/pop/{id}', name: 'app_installation_showpop', methods: ['GET'])]
    public function showpop(Installation $installation, Tools $tools, ManagerRegistry $doctrine, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); 
        if($installation->getStep()<=7 || !$installation->getDemandeCourante()->getPaiement()) {
            return $this->render('installation/showpop.html.twig', [
                'installation' => $installation,
                'tools'=> $tools,
            ]);
        } elseif($installation->getDemandeCourante()) {
            $paiement = $installation->getDemandeCourante()->getPaiement();
            return $this->render('paiement/showpop.html.twig', [
                'paiement' => $paiement,
                'tools'=> $tools,
            ]);
        }
    }

    #[Route('/{id}/accepte0', name: 'app_installation_accepte0', methods: ['GET', 'POST'])]
    public function accepte0(Request $request, Tools $tools, ManagerRegistry $doctrine, Demande $demande, DemandeRepository $demandeRepository, InstallationRepository $installationRepository): Response
    {
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];

        $form = $this->createFormBuilder($demande)
            ->add('motifRejet', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control fs-5 py-2 fw-bold ',
                ],
                'required' => true,
                'label' => 'Motif de rejet'
            ])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $demande->setSoumis(0);
            $demande->setEtat("Rejeté");
            $demande->setRejet(1);
            $installation=$demande->getInstallation();
            $installation->setEtat("En Saisie 6/6");
            $installation->setStep(6);
            $installationRepository->add($installation);
            $demandeRepository->add($demande);

            // Notification à faire au client
            // -----------------------------------------------------------------------------------------------
            $em=$doctrine->getManager(); 
            $mess_sms='Votre demande '.$demande->getNumero().' a été renvoyée, veuillez remplir correctement en rajoutant les bonnes pièces jointes';
            if($installation->getElectricien() && $installation->getElectricien()->getTelephone()) {
                $tools->notifSMS($installation->getElectricien()->getTelephone(), $mess_sms);
            }
            if($installation->getProprietaire() && $installation->getProprietaire()->getTelephone()) {
                $tools->notifSMS($installation->getProprietaire()->getTelephone(), $mess_sms);
            }
            
            $sujet_mail='Demande COSSUEL non acceptée ! Modifications requises';
            $mess_mail='Votre demande '.$demande->getNumero().' a été renvoyée, veuillez remplir correctement en rajoutant les bonnes pièces jointes';
            if($installation->getElectricien() && $installation->getElectricien()->getEmail()) {
                $tools->notifMail($installation->getElectricien()->getEmail(), $mess_mail, $sujet_mail);
            }
            if($installation->getProprietaire() && $installation->getProprietaire()->getEmail()) {
                $tools->notifMail($installation->getProprietaire()->getEmail(), $mess_mail, $sujet_mail);
            }
            // -----------------------------------------------------------------------------------------------

            return $this->redirectToRoute('app_installation_show', array('id' => $demande->getInstallation()->getId())); 
        }

        return $this->renderForm('installation/accepte0.html.twig', [
            'demande' => $demande,
            'demandeForm' => $form,

            'tools' => $tools,
        ]);
    }

    #[Route('/{id}/accepte1', name: 'app_installation_accepte1', methods: ['GET', 'POST'])]
    public function accepte1(Request $request, Tools $tools, ManagerRegistry $doctrine, Demande $demande, DemandeRepository $demandeRepository): Response
    {
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];

        $form = $this->createFormBuilder($demande)
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $demande->setSoumis(1);
            $demande->setEtat("Accepté");
            $demande->setRejet(0);
            $demande->setAccepte(1);
            $demandeRepository->add($demande);

            $installation=$demande->getInstallation();
            // Notification à faire au client
            // -----------------------------------------------------------------------------------------------
            $em=$doctrine->getManager(); 
            $mess_sms='Votre demande numéro '.$demande->getNumero().' est validée ! Elle en cours de traitement. '.number_format($demande->getCout(), 0, ""," ").' FCFA à payer';
            if($installation->getElectricien() && $installation->getElectricien()->getTelephone()) {
                $tools->notifSMS($installation->getElectricien()->getTelephone(), $mess_sms);
            }
            if($installation->getProprietaire() && $installation->getProprietaire()->getTelephone()) {
                $tools->notifSMS($installation->getProprietaire()->getTelephone(), $mess_sms);
            }
            
            $sujet_mail='Demande COSSUEL acceptée ! Traitement en cours ...';
            $mess_mail='Votre demande numéro '.$demande->getNumero().' est validée ! Elle en cours de traitement. '.number_format($demande->getCout(), 0, ""," ").' FCFA à payer';
            if($installation->getElectricien() && $installation->getElectricien()->getEmail()) {
                $tools->notifMail($installation->getElectricien()->getEmail(), $mess_mail, $sujet_mail);
            }
            if($installation->getProprietaire() && $installation->getProprietaire()->getEmail()) {
                $tools->notifMail($installation->getProprietaire()->getEmail(), $mess_mail, $sujet_mail);
            }
            // -----------------------------------------------------------------------------------------------

            return $this->redirectToRoute('app_installation_show', array('id' => $demande->getInstallation()->getId())); 
        }

        return $this->renderForm('installation/accepte1.html.twig', [
            'demande' => $demande,
            'demandeForm' => $form,

            'tools' => $tools,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_installation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Installation $installation, InstallationRepository $installationRepository): Response
    {
        $form = $this->createForm(InstallationType::class, $installation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('installation/edit.html.twig', [
            'installation' => $installation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_installation_delete', methods: ['POST'])]
    public function delete(Request $request, Installation $installation, InstallationRepository $installationRepository, DemandeRepository $demandeRepository, PieceJointeRepository $pjRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        if ($this->isCsrfTokenValid('delete'.$installation->getId(), $request->request->get('_token'))) {
            if($installation->getDemandeCourante() && $installation->getDemandeCourante()->getNumeroPassage()==2) {
                $demande=$demandeRepository->find($installation->getDemandeCourante()->getId());
                $demandeRepository->remove($demande);
            } else {
                if($installation->getDemandeCourante()) {
                    $demande=$demandeRepository->find($installation->getDemandeCourante()->getId());
                    $demandeRepository->remove($demande);
                }                
                $les_pj=$pjRepository->findBy(array("installation"=>$installation->getId()));
                foreach($les_pj as $pj) {
                    $pjRepository->remove($pj);
                }
                $installationRepository->remove($installation);
            }
        }

        
        return $this->redirectToRoute($request->getSession()->get('page_liste_demande'), [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/showpdf0', name: 'app_installation_showpdf0', methods: ['GET'])]
    public function showpdf0(Request $request, Installation $installation)
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        // $pdfOptions->set('defaultFont', 'Courier');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('installation/showpdf0.html.twig', [
            'installation' => $installation,
            'title' => "Formulaire de demande COSSUEL"
        ]);
        
        $html.="\n";
        $html.= '<link rel="stylesheet" type="text/css" media="screen" href="'.$this->getParameter('css_directory').'/demande-A.css" />'; $html.="\n";
        // $html.= '<link rel="stylesheet" type="text/css" media="screen" href="'.$this->getParameter('css_directory').'/bootstrap.css" />'; $html.="\n";

        // echo $html;

        $filename = 'DemandeCOSSUEL'.$installation->getDemandeCourante()->getNumero();
        $fich = $this->getParameter('pdf_directory').'/'.$filename.'.pdf';

        // echo realpath($this->getParameter('photo_directory').'/css');
        // exit;

        $dompdf->getOptions()->setChroot(realpath($this->getParameter('css_directory')));
        //    $dompdf->setBasePath(realpath($this->getParameter('css_directory').'/'));

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'letter');

       // Render the HTML as PDF
        $dompdf->render();

        $output = $dompdf->output();
        file_put_contents($fich, $output);
    
        return $this->file($fich, 'fich_temp_'.date("YmdHis").'.pdf', ResponseHeaderBag::DISPOSITION_INLINE);

    }

    #[Route('/{id}/showpdf', name: 'app_installation_showpdf1', methods: ['GET'])]
    public function showpdf(Request $request, Installation $installation, Pdf $knpSnappyPdf)
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('installation/showpdf.html.twig', [
            'installation' => $installation,
            'title' => "Formulaire de demande COSSUEL"
        ]);
        
        echo $html; exit;

        $filename = 'DemandeCOSSUEL_'.$installation->getDemandeCourante()->getNumero();
        $fich = $this->getParameter('pdf_directory').'/'.$filename.'.pdf';

        if(!file_exists($fich)) {

            // $filetemp = $this->getParameter('pdf_directory').'/'.'temphtml_'.$installation->getDemandeCourante()->getNumero().'-'.date("dmyhis").'.html';
            // \file_put_contents($filetemp, $html);

            // $process = new Process(['/usr/local/bin/wkhtmltopdf', $filetemp, $this->getParameter('pdf_directory').'/'.$filename.'.pdf']);
            // $process->run();


            $knpSnappyPdf
            ->setOption('no-outline', true)
            ->setOption('encoding', 'UTF-8')
            ->setOption('page-size','LETTER')
            ->setOption('lowquality',true)
            ->generateFromHtml($html, $fich);
            
            // $knpSnappyPdf->generateFromHtml($html, $fich, [
            // 'page-size' => 'A4',
            // 'viewport-size' => '1280x1024',
            // 'margin-top' => 1,
            // 'margin-right' => 1,
            // 'margin-bottom' => 1,
            // 'margin-left' => 1,
            // 'enable-javascript' => true,
            // 'no-stop-slow-scripts' => true,
            // 'lowquality' => true,
            // 'encoding' => 'utf-8',
            // 'images' => true,
            // 'cookie' => array(),
            // 'dpi' => 75,
            // 'enable-external-links' => true,
            // 'enable-internal-links' => true
            // ]);
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

    #[Route('/{id}/facturepdf0', name: 'app_installation_facturepdf0', methods: ['GET'])]
    public function facturepdf0(Request $request, Installation $installation, Pdf $knpSnappyPdf)
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('installation/facturepdf.html.twig', [
            'installation' => $installation,
            'title' => "Facture de demande COSSUEL"
        ]);
        echo $html; exit;
        $filename = 'FactureDemandeCOSSUEL'.$installation->getDemandeCourante()->getNumero();
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

        //     return new Response(
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

    #[Route('/{id}/facturepdf', name: 'app_installation_facturepdf', methods: ['GET', 'POST'])]
    public function facturepdf(Installation $installation, ManagerRegistry $doctrine, PaiementRepository $paiementRepository,Request $request, InstallationRepository $installationRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }

        $type_usage=$installation->getUsages(); 
        if($installation->getUsages()=="non_domestique") {
            $type_usage="professionnel";
        }
        if($installation->getUsages()=="erp_ert") {
            $type_usage="ERP / ERT";
        }
        if($type_usage!="domestique") {
            $couleur1="119"; $couleur2="181"; $couleur3="254";
        } else {
            $couleur1="255"; $couleur2="228"; $couleur3="54";
        }

        $nom_f='FACTURE_'.$installation->getDemandeCourante()->getNumero();
        $fich = $this->getParameter('pdf_directory').'/'.$nom_f.'.pdf';
        
        // if(file_exists($fich)) {
        //     return $this->file($fich, ''.$nom_f.'_'.date("YmdHis").'.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
        // } 

        $pdf = new DetailPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->Image("assets/img/thumbnail_Logo_COSSUEL.png",5,10,80);
        $pdf->Ln(3);

        $pdf->SetFont('Arial','BIU',14);
        $pdf->Cell(180,5,htmlspecialchars_decode('Demande d\'attestation de'),0,0,'R');
        $pdf->SetFont('Arial','BIU',14);
        $pdf->Ln(5);
        $pdf->Cell(297,10,utf8_decode('conformité'),0,0,'C');

        $pdf->Ln(10);
        $pdf->SetFont('Arial','BIU',13);
        $pdf->Cell(169,5,utf8_decode('à usage '.$type_usage),0,0,'R');
        $pdf->SetLineWidth(1);
        $pdf->SetDrawColor($couleur1, $couleur2, $couleur3);

        $pdf->Line(10,45,200,45);
        $pdf->Line(10,53,200,53);
        $pdf->Ln(20);
        $pdf->SetFont('Arial','BI',13);
        $pdf->Cell(175,3,utf8_decode('FACTURE N°: '.$installation->getDemandeCourante()->getNumero()),0,0,'C');

        $pdf->SetLineWidth(0.25);
        $pdf->SetDrawColor(0,0,0);

        $pdf->Ln(15);

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(95,8,'CLIENT / INSTALLEUR',1,0,'C');



        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(95,8,'PROPRIETAIRE',1,0,'C');


        $pdf->Ln(10);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(25,5,'Nom:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(70,5,$installation->getElectricien()->getNomComplet(),0,0);

        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(25,5,'Nom:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(70,5,$installation->getProprietaire()->getNomComplet(),0,0);

        $pdf->Ln(10);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(25,5,'Adresse:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(70,5,$installation->getElectricien()->getAdresse(),0,0);

        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(25,5,'Adresse:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(70,5,$installation->getProprietaire()->getAdresse(),0,0);


        $pdf->Ln(10);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(25,5,utf8_decode('Téléphone'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(70,5,$installation->getElectricien()->getTelephone(),0,0);

        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(25,5,utf8_decode('Téléphone'),0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(70,5,$installation->getProprietaire()->getTelephone(),0,0);

        $pdf->Ln(10);
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(25,5,'E-Mail:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(70,5,$installation->getElectricien()->getEmail(),0,0);

        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(25,5,'E-Mail:',0,0);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(70,5,$installation->getProprietaire()->getEmail(),0,0);


        $pdf->Ln(20);
        $pdf->SetFont('Arial','I',12);
        $pdf->Cell(95,10,utf8_decode('Puissande Demandée'),1,0);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(95,10,$installation->getDemandeCourante()->getPuissance().' Kw',1,0,'C');

        $pdf->Ln(10);
        $pdf->SetFont('Arial','I',12);
        $pdf->Cell(95,10,utf8_decode('Type de Visite'),1,0);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(95,10,utf8_decode($installation->getDemandeCourante()->getNumeroPassage().'e Vistite'),1,0,'C');

        $pdf->Ln(10);
        $pdf->SetFont('Arial','I',12);
        $pdf->Cell(95,10,utf8_decode('Montant à Payer'),1,0);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(95,10,number_format($installation->getDemandeCourante()->getCout(),0,","," "),1,0,'C');

        $pdf->Ln(10);
        $pdf->SetFont('Arial','I',12);
        //$pdf->Cell(100,5,utf8_decode('Paiement validé à la date du: '. datefr($resultInfoDem['DatePaiement']).' par '.$resultInfoDem['MatriculeAgent']),0,0);

        $pdf->Ln(10);
        $pdf->SetFont('Arial','BI',10);
        $pdf->Cell(320,5,utf8_decode('Fait à Dakar le: '. $installation->getDemandeCourante()->getDateCreation()->format('d-m-Y')),0,0,'C');

        $pdf->Ln(10);
        $pdf->SetFont('Arial','BUI',12);
        $pdf->Cell(320,5,'Le Comptable',0,0,'C');

        $pdf->Image("assets/img/visa_compta.jpg",150,182,40);

        $pdf->SetY(-35);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(0,5,utf8_decode("Comité Sénégalais pour la Sécurité des Usagers de l'Electricité (COSSUEL)"),0,0,'C');
        $pdf->SetY(-32);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(0,5,utf8_decode("Organisme agréé par le Ministère chargé de l'Energie suivant le decret No 0022609 du 22 Août 2019"),0,0,'C');
        $pdf->SetY(-29);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(0,5,utf8_decode("Adresse: 2 Rue Wagane Diouf, Immeuble Mame Alassane FALL, 7ème étage DAKAR SENEGAL"),0,0,'C');
        $pdf->SetY(-26);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(0,5,utf8_decode("Téléphone: (+221) 76 644 76 02/ 33 842 01 81  Email: cossuel@cossuel.sn"),0,0,'C');


        $pdf->Output($fich,'F');
        return $this->file($fich, ''.$nom_f.'_'.date("YmdHis").'.pdf', ResponseHeaderBag::DISPOSITION_INLINE);

    }


    #[Route('/{id}/recupdf0', name: 'app_installation_recupdf0', methods: ['GET'])]
    public function recupdf0(Request $request, Installation $installation, Pdf $knpSnappyPdf)
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('installation/recupdf.html.twig', [
            'installation' => $installation,
            'title' => "Recu de paiement de demande COSSUEL"
        ]);
        echo $html; exit;
        $filename = 'PaiementDemandeCOSSUEL'.$installation->getDemandeCourante()->getNumero().'_'.date("dmyhis");
        $fich = $this->getParameter('pdf_directory').'/'.$filename.'.pdf';

        if(!file_exists($fich) || 1) {
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

    #[Route('/{id}/recupdf', name: 'app_installation_recupdf', methods: ['GET', 'POST'])]
    public function recupdf(Installation $installation, ManagerRegistry $doctrine, PaiementRepository $paiementRepository,Request $request, InstallationRepository $installationRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }

        $type_usage=$installation->getUsages(); 
        if($installation->getUsages()=="non_domestique") {
            $type_usage="professionnel";
        }
        if($installation->getUsages()=="erp_ert") {
            $type_usage="ERP / ERT";
        }
        if($type_usage!="domestique") {
            $couleur1="119"; $couleur2="181"; $couleur3="254";
        } else {
            $couleur1="255"; $couleur2="228"; $couleur3="54";
        }

        $nom_f='RECU_'.$installation->getDemandeCourante()->getNumero();
        $fich = $this->getParameter('pdf_directory').'/'.$nom_f.'.pdf';

        // if(file_exists($fich)) {
        //     return $this->file($fich, ''.$nom_f.'_'.date("YmdHis").'.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
        // } 

        $pdf = new DetailPDF('P','mm','A4');
        $pdf->AddPage();

        $y=5;
        for($ix=0;$ix<=1; $ix++) {
            $pdf->Image("assets/img/thumbnail_Logo_COSSUEL.png",5,$y,70);
            $y+=5;
            $pdf->setY($y);
            $pdf->SetFont('Arial','BIU',12);
            $pdf->Cell(180,5,utf8_decode('Demande d\'attestation de conformité'),0,0,'R');
            $pdf->Ln(7);
            $pdf->SetFont('Arial','BIU',12);
            $pdf->Cell(170,5,utf8_decode('installation à usage '.$type_usage),0,0,'R');
            $pdf->SetLineWidth(1);
            $pdf->SetDrawColor($couleur1, $couleur2, $couleur3);

            $y=$pdf->getY()+12;
            $pdf->Line(10,$y,200,$y); $y+=8;
            $pdf->Line(10,$y,200,$y);
            $pdf->SetFont('Arial','BI',13);
            $pdf->setY($y-5);
            $pdf->Cell(175,3,utf8_decode('RECU DE PAIEMENT N°: '.$installation->getDemandeCourante()->getNumero()),0,0,'C');

            $pdf->SetLineWidth(0.25);
            $pdf->SetDrawColor(0,0,0);

            $pdf->Ln(10);

            $pdf->SetFont('Arial','B',11);
            $pdf->Cell(95,6,'CLIENT / INSTALLEUR',1,0,'C');
            $pdf->SetFont('Arial','B',11);
            $pdf->Cell(95,6,'PROPRIETAIRE',1,0,'C');


            $pdf->Ln(7);
            $pdf->SetFont('Arial','I',10);
            $pdf->Cell(25,5,'Nom:',0,0);
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(70,5,$installation->getElectricien()->getNomComplet(),0,0);

            $pdf->SetFont('Arial','I',10);
            $pdf->Cell(25,5,'Nom:',0,0);
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(70,5,$installation->getProprietaire()->getNomComplet(),0,0);

            $pdf->Ln(5);
            $pdf->SetFont('Arial','I',10);
            $pdf->Cell(25,5,'Adresse:',0,0);
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(70,5,$installation->getElectricien()->getAdresse(),0,0);

            $pdf->SetFont('Arial','I',10);
            $pdf->Cell(25,5,'Adresse:',0,0);
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(70,5,$installation->getProprietaire()->getAdresse(),0,0);


            $pdf->Ln(5);
            $pdf->SetFont('Arial','I',10);
            $pdf->Cell(25,5,utf8_decode('Téléphone'),0,0);
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(70,5,$installation->getElectricien()->getTelephone(),0,0);

            $pdf->SetFont('Arial','I',10);
            $pdf->Cell(25,5,utf8_decode('Téléphone'),0,0);
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(70,5,$installation->getProprietaire()->getTelephone(),0,0);

            $pdf->Ln(5);
            $pdf->SetFont('Arial','I',10);
            $pdf->Cell(25,5,'E-Mail:',0,0);
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(70,5,$installation->getElectricien()->getEmail(),0,0);

            $pdf->SetFont('Arial','I',10);
            $pdf->Cell(25,5,'E-Mail:',0,0);
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(70,5,$installation->getProprietaire()->getEmail(),0,0);


            $pdf->Ln(10); $yy=$pdf->getY();
            $pdf->SetFont('Arial','I',11);
            $pdf->Cell(45,8,utf8_decode('Puissande Demandée'),1,0);
            $pdf->SetFont('Arial','B',11);
            $pdf->Cell(45,8,$installation->getDemandeCourante()->getPuissance().' Kw',1,0,'C');

            $pdf->Ln(9);
            $pdf->SetFont('Arial','I',11);
            $pdf->Cell(45,8,utf8_decode('Type de Visite'),1,0);
            $pdf->SetFont('Arial','B',11);
            $pdf->Cell(45,8,utf8_decode($installation->getDemandeCourante()->getNumeroPassage().'e Vistite'),1,0,'C');

            $pdf->Ln(9);
            $pdf->SetFont('Arial','I',11);
            $pdf->Cell(45,8,utf8_decode('Montant Payé'),1,0);
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(45,8,number_format($installation->getDemandeCourante()->getCout(),0,","," ").' FCFA',1,0,'C');

            $pdf->Ln(9);
            $pdf->SetFont('Arial','I',11);
            $pdf->Cell(45,8,utf8_decode('Mode Paiement'),1,0);
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(45,8,utf8_decode($installation->getDemandeCourante()->getPaiement()->getMode()),1,0,'C');

            $pdf->Ln(9);
            $pdf->SetFont('Arial','I',11);
            $pdf->Cell(45,8,utf8_decode('Référence Paiement'),1,0);
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(45,8,$installation->getDemandeCourante()->getPaiement()->getReference(),1,0,'C');

            $pdf->Ln(10);

            $pdf->setY($yy+5);
            $pdf->SetFont('Arial','I',10);
            $pdf->Cell(300,5,utf8_decode('Fait à Dakar le: '. $installation->getDemandeCourante()->getDateCreation()->format('d-m-Y')),0,0,'C');

            $pdf->Ln(5);
            $pdf->SetFont('Arial','BUI',11);
            $pdf->Cell(300,5,'Le Comptable',0,0,'C');
            $pdf->Ln(7);
            $y=$pdf->getY();

            $pdf->Image("assets/img/visa_compta.jpg",145,$y,35);
            $pdf->Ln(27);
            $y=$pdf->getY()+4;
            $pdf->Line(20,$y,190,$y);

            $pdf->SetY($y);
            $pdf->SetFont('Arial','I',8);
            $pdf->Cell(0,5,utf8_decode("Comité Sénégalais pour la Sécurité des Usagers de l'Electricité (COSSUEL)"),0,0,'C');
            $y+=3; $pdf->SetY($y);
            $pdf->SetFont('Arial','I',8);
            $pdf->Cell(0,5,utf8_decode("Organisme agréé par le Ministère chargé de l'Energie suivant le decret No 0022609 du 22 Août 2019"),0,0,'C');
            $y+=3; $pdf->SetY($y);
            $pdf->SetFont('Arial','I',8);
            $pdf->Cell(0,5,utf8_decode("Adresse: 2 Rue Wagane Diouf, Immeuble Mame Alassane FALL, 7ème étage DAKAR SENEGAL"),0,0,'C');
            $y+=3; $pdf->SetY($y);
            $pdf->SetFont('Arial','I',8);
            $pdf->Cell(0,5,utf8_decode("Téléphone: (+221) 76 644 76 02/ 33 842 01 81  Email: cossuel@cossuel.sn"),0,0,'C');
            
            $y+=11;
            if($ix==0) {
                $pdf->Line(0,$y,220,$y);
            }
        }

        $pdf->Output($fich,'F');
        return $this->file($fich, ''.$nom_f.'_'.date("YmdHis").'.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
    }

    /**
     * @Route("/download", name="download_file")
    **/
    #[Route('/{id}/downloadpj/{type}', name: 'app_installation_downloadpj', methods: ['GET'])]
    public function downloadFileAction(Request $request, Installation $installation, String $type) {
        $fich="";
        if($type=="electricien") {
            if($installation->getPJElectricien()) {
                $fich=$this->getParameter('photo_directory').'/'.$installation->getPJElectricien()->getFichier();
            }
        }
        if($type=="proprietaire") {
            if($installation->getPJProprietaire()) {
                $fich=$this->getParameter('photo_directory').'/'.$installation->getPJProprietaire()->getFichier();
            }
        }
        if($type=="dosstech") {
            if($installation->getPJDossierTechnique()) {
                $fich=$this->getParameter('photo_directory').'/'.$installation->getPJDossierTechnique()->getFichier();
            }
        }
        if($fich) {
            $response = new BinaryFileResponse($fich);
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT,'pdf.pdf');
            return $response;
        } else {
            return false;
        }
    }    
}
