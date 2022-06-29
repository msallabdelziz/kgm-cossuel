<?php

namespace App\Controller;

use App\Entity\Agent;
use App\Entity\DetailVerification;
use App\Entity\Dossier;
use App\Entity\Installation;
use App\Entity\PieceJointe;
use App\Entity\PointNonconf;
use App\Entity\Rapport;
use App\Entity\Signature;
use App\Entity\Utilisateur;
use App\Entity\Visite;
use App\Repository\AgenceRepository;
use App\Repository\AgentRepository;
use App\Repository\DossierRepository;
use App\Repository\PaiementRepository;
use App\Repository\PieceJointeRepository;
use App\Repository\PointNonconfRepository;
use App\Repository\SignatureRepository;
use App\Repository\VisiteRepository;
use App\Services\Tools;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Snappy\Pdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Constraints\File as ConstraintsFile;

#[Route('/dossier')]
class DossierController extends AbstractController
{
    #[Route('/all', name: 'app_dossier_index0')]
    public function index0(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine, DossierRepository $dossierRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository): Response
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
        $les_varsess=array("passage", "usage", "controleur", "referent", "statut", "rech");
        foreach ($les_varsess as $varssess) {
            if(!$request->getSession()->get($pref_sess.'_'.$varssess)) { 
                $request->getSession()->set($pref_sess.'_'.$varssess, "");
            }
        }

        $val_rech=$request->getSession()->get($pref_sess.'_rech'); 

        $val_controleur=$request->getSession()->get($pref_sess.'_controleur'); 
        $les_controleur = $agentRepository->findByProfil("controleur");

        $val_referent=$request->getSession()->get($pref_sess.'_referent'); 
        $les_referent = $agentRepository->findByProfil("referent");

        $val_passage=$request->getSession()->get($pref_sess.'_passage');
        $les_passage = array("1"=>"1ère visite", "2"=>"2e visite");

        $val_usage=$request->getSession()->get($pref_sess.'_usage');
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=$request->getSession()->get($pref_sess.'_statut');
        $les_statut = array("Validé, En Attente Affectation", "Affecté, En Attente Visite", "Visite Planifiée, En Attente de Rapport", "Visite Réalisée, En Attente de Confirmation Rapport", "Clôturé",);

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            
            $val_controleur = $request->request->get("val_controleur");

            $val_referent = $request->request->get("val_referent");
            
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
        if($val_controleur) { $val_filtre["controleur"] = $val_controleur; }
        if($val_referent) { $val_filtre["referent"] = $val_referent; }
        if($val_passage) { $val_filtre["passage"] = $val_passage; }


        $list=$dossierRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('dossier/index0.html.twig', [
            'page_list' => "app_dossier_index0",
            'les_dossier' => $list,
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,

            'les_controleur'=> $les_controleur,
            'val_controleur'=> $val_controleur,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_referent'=> $les_referent,
            'val_referent'=> $val_referent,

            'les_passage'=> $les_passage,
            'val_passage'=> $val_passage,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,
        ]);
    }

    #[Route('/affectation', name: 'app_dossier_affectation')]
    public function affectation_index(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine, DossierRepository $dossierRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        $val_filtre["etat"]="Validé|Affecté";
        $em = $doctrine->getManager(); 
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
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        $val_agence = $request->request->get("val_agence");
        if($val_agence) { $val_filtre["agence"] = $val_agence; }

        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $type_user=$userConn->getType();
        $id_type=$userConn->getIdType();
        if($role=="ROLE_REFERENT" && $type_user=="Agent" && $id_type) {
            $val_filtre["referent"]=$id_type;
        }

        // Fixer les variables de session pour PAGE, FILTRE ET RECH
        $pref_sess=$request->getSession()->get('sousmenu');
        $les_varsess=array("passage", "usage", "controleur", "referent", "statut", "rech");
        foreach ($les_varsess as $varssess) {
            if(!$request->getSession()->get($pref_sess.'_'.$varssess)) { 
                $request->getSession()->set($pref_sess.'_'.$varssess, "");
                if($varssess=="statut") {
                    $request->getSession()->set($pref_sess.'_'.$varssess, "Validé|Affecté");
                }
            }
        }

        $val_rech=$request->getSession()->get($pref_sess.'_rech'); 

        $val_controleur=$request->getSession()->get($pref_sess.'_controleur'); 
        $les_controleur = $agentRepository->findByProfil("controleur");

        $val_referent=$request->getSession()->get($pref_sess.'_referent'); 
        $les_referent = $agentRepository->findByProfil("referent");

        $val_passage=$request->getSession()->get($pref_sess.'_passage');
        $les_passage = array("1"=>"1ère visite", "2"=>"2e visite");

        $val_usage=$request->getSession()->get($pref_sess.'_usage');
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=$request->getSession()->get($pref_sess.'_statut');
        $les_statut = array("Validé, En Attente Affectation", "Affecté, En Attente Visite");

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            
            $val_controleur = $request->request->get("val_controleur");

            $val_referent = $request->request->get("val_referent");
            
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
        if($val_controleur) { $val_filtre["controleur"] = $val_controleur; }
        if($val_referent) { $val_filtre["referent"] = $val_referent; }
        if($val_passage) { $val_filtre["passage"] = $val_passage; }

        $list=$dossierRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('dossier/index.html.twig', [
            'etatDossier' => "Affectation",
            'page_list' => "app_dossier_affectation",
            'les_dossier' => $list,
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_controleur'=> $les_controleur,
            'val_controleur'=> $val_controleur,

            'les_referent'=> $les_referent,
            'val_referent'=> $val_referent,

            'les_passage'=> $les_passage,
            'val_passage'=> $val_passage,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,
        ]);
    }

    #[Route('/visite', name: 'app_dossier_visite')]
    public function visite_index(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine, DossierRepository $dossierRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"Chez Controleur0"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); 
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
        $les_varsess=array("passage", "usage", "controleur", "referent", "statut", "rech");
        foreach ($les_varsess as $varssess) {
            if(!$request->getSession()->get($pref_sess.'_'.$varssess)) { 
                $request->getSession()->set($pref_sess.'_'.$varssess, "");
                if($varssess=="statut") {
                    $request->getSession()->set($pref_sess.'_'.$varssess, "Chez Controleur0");
                }
            }
        }

        $val_rech=$request->getSession()->get($pref_sess.'_rech'); 

        $val_controleur=$request->getSession()->get($pref_sess.'_controleur'); 
        $les_controleur = $agentRepository->findByProfil("controleur");

        $val_referent=$request->getSession()->get($pref_sess.'_referent'); 
        $les_referent = $agentRepository->findByProfil("referent");

        $val_passage=$request->getSession()->get($pref_sess.'_passage');
        $les_passage = array("1"=>"1ère visite", "2"=>"2e visite");

        $val_usage=$request->getSession()->get($pref_sess.'_usage');
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=$request->getSession()->get($pref_sess.'_statut');
        $les_statut = array("Affecté, En Attente Visite", "Visite Planifiée, En Attente de Rapport",);

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            
            $val_controleur = $request->request->get("val_controleur");

            $val_referent = $request->request->get("val_referent");
            
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
        if($val_controleur) { $val_filtre["controleur"] = $val_controleur; }
        if($val_referent) { $val_filtre["referent"] = $val_referent; }
        if($val_passage) { $val_filtre["passage"] = $val_passage; }

        $type_user=$userConn->getType();
        $id_type=$userConn->getIdType();
        if($role=="ROLE_CONTROLEUR" && $type_user=="Agent" && $id_type) {
            $val_filtre["controleur"]=$id_type;
        }
        if($role=="ROLE_REFERENT" && $type_user=="Agent" && $id_type) {
            $val_filtre["referent"]=$id_type;
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

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_controleur'=> $les_controleur,
            'val_controleur'=> $val_controleur,

            'les_referent'=> $les_referent,
            'val_referent'=> $val_referent,

            'les_passage'=> $les_passage,
            'val_passage'=> $val_passage,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,
        ]);
    }

    #[Route('/rapport', name: 'app_dossier_rapport')]
    public function rapport_index(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine, DossierRepository $dossierRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"Visite|Rapport"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager();
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
        $les_varsess=array("passage", "usage", "controleur", "referent", "statut", "rech");
        foreach ($les_varsess as $varssess) {
            if(!$request->getSession()->get($pref_sess.'_'.$varssess)) { 
                $request->getSession()->set($pref_sess.'_'.$varssess, "");
                if($varssess=="statut") {
                    $request->getSession()->set($pref_sess.'_'.$varssess, "Visite|Rapport");
                }
            }
        }

        $val_rech=$request->getSession()->get($pref_sess.'_rech'); 

        $val_controleur=$request->getSession()->get($pref_sess.'_controleur'); 
        $les_controleur = $agentRepository->findByProfil("controleur");

        $val_referent=$request->getSession()->get($pref_sess.'_referent'); 
        $les_referent = $agentRepository->findByProfil("referent");

        $val_passage=$request->getSession()->get($pref_sess.'_passage');
        $les_passage = array("1"=>"1ère visite", "2"=>"2e visite");

        $val_usage=$request->getSession()->get($pref_sess.'_usage');
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=$request->getSession()->get($pref_sess.'_statut');
        $les_statut = array("Attente Rapport", "Rapport Soumis");

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            
            $val_controleur = $request->request->get("val_controleur");

            $val_referent = $request->request->get("val_referent");
            
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
        if($val_controleur) { $val_filtre["controleur"] = $val_controleur; }
        if($val_referent) { $val_filtre["referent"] = $val_referent; }
        if($val_passage) { $val_filtre["passage"] = $val_passage; }

        $type_user=$userConn->getType();
        $id_type=$userConn->getIdType();
        if($role=="ROLE_CONTROLEUR" && $type_user=="Agent" && $id_type) {
            $val_filtre["controleur"]=$id_type;
        }
        if($role=="ROLE_REFERENT" && $type_user=="Agent" && $id_type) {
            $val_filtre["referent"]=$id_type;
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

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_referent'=> $les_referent,
            'val_referent'=> $val_referent,

            'les_passage'=> $les_passage,
            'val_passage'=> $val_passage,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,
        ]);
    }

    #[Route('/attestation', name: 'app_dossier_attestation')]
    public function attestation_index(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine, DossierRepository $dossierRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"Attestation|Cloture"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); 
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
        $les_varsess=array("passage", "usage", "controleur", "referent", "statut", "rech");
        foreach ($les_varsess as $varssess) {
            if(!$request->getSession()->get($pref_sess.'_'.$varssess)) { 
                $request->getSession()->set($pref_sess.'_'.$varssess, "");
                if($varssess=="statut") {
                    $request->getSession()->set($pref_sess.'_'.$varssess, "Attestation|Cloture");
                }
            }
        }

        $val_rech=$request->getSession()->get($pref_sess.'_rech'); 

        $val_controleur=$request->getSession()->get($pref_sess.'_controleur'); 
        $les_controleur = $agentRepository->findByProfil("controleur");

        $val_referent=$request->getSession()->get($pref_sess.'_referent'); 
        $les_referent = $agentRepository->findByProfil("referent");

        $val_passage=$request->getSession()->get($pref_sess.'_passage');
        $les_passage = array("1"=>"1ère visite", "2"=>"2e visite");

        $val_usage=$request->getSession()->get($pref_sess.'_usage');
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=$request->getSession()->get($pref_sess.'_statut');
        $les_statut = array("Attente validation rapport", "Rapport validé, Clôturé",);

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            
            $val_controleur = $request->request->get("val_controleur");

            $val_referent = $request->request->get("val_referent");
            
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
        if($val_controleur) { $val_filtre["controleur"] = $val_controleur; }
        if($val_referent) { $val_filtre["referent"] = $val_referent; }
        if($val_passage) { $val_filtre["passage"] = $val_passage; }

        $type_user=$userConn->getType();
        $id_type=$userConn->getIdType();
        if($role=="ROLE_REFERENT" && $type_user=="Agent" && $id_type) {
            $val_filtre["referent"]=$id_type;
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

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_referent'=> $les_referent,
            'val_referent'=> $val_referent,

            'les_passage'=> $les_passage,
            'val_passage'=> $val_passage,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,
        ]);
    }

    #[Route('/liste_excel', name:'app_dossier_excel')]
    public function genExcel(Request $request, ManagerRegistry $doctrine, array $headers = [], $fileName = 'liste.xlsx'): Response
    {
        $em = $doctrine->getManager();
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $type_user=$userConn->getType();
        $id_type=$userConn->getIdType();
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
            'N° Dossier',
            'Date Dossier ',
            'Usage',
            'Agence',
            'Localité',
            'Type Construction',
            'Electricien',
            'Référent',
            'Controleur',
            'Statut Demande',
        );
        $id_col="A";
        foreach ($entete as $col) {
            $sheet->setCellValue($id_col.$i, $col);
            $id_col++;
        }
        $sm = $request->getSession()->get('sousmenu');
        switch ($sm) {
            case 'dossier_index0':
            break;
            
            case 'dossier_affectation':
                $val_filtre["etat"]="Validé|Affecté";
                if($role=="ROLE_REFERENT" && $type_user=="Agent" && $id_type) {
                    $val_filtre["referent"]=$id_type;
                }
            break;
            
            case 'dossier_visite':
                $val_filtre = array("etat"=>"Chez Controleur0");
                if($role=="ROLE_REFERENT" && $type_user=="Agent" && $id_type) {
                    $val_filtre["referent"]=$id_type;
                }
                if($role=="ROLE_CONTROLEUR" && $type_user=="Agent" && $id_type) {
                    $val_filtre["controleur"]=$id_type;
                }
            break;
            
            case 'dossier_rapport':
                $val_filtre = array("etat"=>"Visite|Rapport");
                if($role=="ROLE_REFERENT" && $type_user=="Agent" && $id_type) {
                    $val_filtre["referent"]=$id_type;
                }
                if($role=="ROLE_CONTROLEUR" && $type_user=="Agent" && $id_type) {
                    $val_filtre["controleur"]=$id_type;
                }
            break;
            
            case 'dossier_attestation':
                $val_filtre = array("etat"=>"Attestation|Cloture");
                if($role=="ROLE_REFERENT" && $type_user=="Agent" && $id_type) {
                    $val_filtre["referent"]=$id_type;
                }
            break;
            
            case 'dossier_cloture':
                $val_filtre = array("etat"=>"Cloture");
                // if($role=="ROLE_REFERENT" && $type_user=="Agent" && $id_type) {
                //     $val_filtre["referent"]=$id_type;
                // }
            break;
            
            default:
                if(! in_array($role, array("ROLE_ADMIN", "ROLE_PUBLIC", "ROLE_ACCUEIL"))) {
                    $val_filtre["etat"] = "Soumis";
                }
            break;
        }
        $list0=$em->getRepository(Dossier::class)->findByRestr($val_rech, $val_filtre, "", 0);
        $list = array();
        foreach ($list0 as $val) {
            $numD=$val->getDemande()->getNumero(); 
            $dateD=$val->getDateCreation(); 
            $etatD=$val->getEtat();
            $list[]=array(
                $numD,
                $dateD,
                $val->getDemande()->getInstallation()->getUsages(),
                $val->getDemande()->getInstallation()->getLocalite()->getAgence(),
                $val->getDemande()->getInstallation()->getLocalite(),
                $val->getDemande()->getInstallation()->getTypeConstruction(),
                $val->getDemande()->getInstallation()->getElectricien(),
                $val->getReferent(),
                $val->getControleur(),
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

    #[Route('/{id}/rapport', name: 'app_dossier_showrapp', methods: ['GET'])]
    public function showrapport(Dossier $dossier, Tools $tools, ManagerRegistry $doctrine, DossierRepository $dossierRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); 
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
    public function cloture_index(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine, DossierRepository $dossierRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"Cloture"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); 
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
        $les_varsess=array("passage", "usage", "controleur", "referent", "statut", "rech");
        foreach ($les_varsess as $varssess) {
            if(!$request->getSession()->get($pref_sess.'_'.$varssess)) { 
                $request->getSession()->set($pref_sess.'_'.$varssess, "");
                if($varssess=="statut") {
                    $request->getSession()->set($pref_sess.'_'.$varssess, "Cloture");
                }
            }
        }

        $val_rech=$request->getSession()->get($pref_sess.'_rech'); 

        $val_controleur=$request->getSession()->get($pref_sess.'_controleur'); 
        $les_controleur = $agentRepository->findByProfil("controleur");

        $val_referent=$request->getSession()->get($pref_sess.'_referent'); 
        $les_referent = $agentRepository->findByProfil("referent");

        $val_passage=$request->getSession()->get($pref_sess.'_passage');
        $les_passage = array("1"=>"1ère visite", "2"=>"2e visite");

        $val_usage=$request->getSession()->get($pref_sess.'_usage');
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=$request->getSession()->get($pref_sess.'_statut');
        $les_statut = array("Clôturé - Conforme", "Clôturé - Non Conforme",);

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            
            $val_controleur = $request->request->get("val_controleur");

            $val_referent = $request->request->get("val_referent");
            
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
        if($val_controleur) { $val_filtre["controleur"] = $val_controleur; }
        if($val_referent) { $val_filtre["referent"] = $val_referent; }
        if($val_passage) { $val_filtre["passage"] = $val_passage; }

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

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_referent'=> $les_referent,
            'val_referent'=> $val_referent,

            'les_passage'=> $les_passage,
            'val_passage'=> $val_passage,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,
        ]);
    }

    #[Route('/{id}', name: 'app_dossier_show', methods: ['GET'])]
    public function show(Request $request, Dossier $dossier, Tools $tools, ManagerRegistry $doctrine, DossierRepository $dossierRepository, PaiementRepository $paiementRepository): Response
    {
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];

        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        if(($role=="ROLE_RFO" || $role=="ROLE_ADMIN") && $request->getSession()->get('page_liste_demande') && $request->getSession()->get('page_liste_demande') == 'app_installation_index3') {
            $request->getSession()->set('page_liste_dossier', 'app_installation_index3');
        }

        $em = $doctrine->getManager(); 
        $dossier=$dossierRepository->find($dossier);
        $paiement=$dossier->getDemande()->getPaiement();
        return $this->render('dossier/show.html.twig', [
            'dossier' => $dossier,
            'paiement' => $paiement,

            'tools' => $tools,
        ]);
    }

    #[Route('/pop/{id}', name: 'app_dossier_showpop', methods: ['GET'])]
    public function showpop(Dossier $dossier, Tools $tools, ManagerRegistry $doctrine, DossierRepository $dossierRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); 
        $dossier=$dossierRepository->find($dossier);
            return $this->render('dossier/showpop.html.twig', [
                'dossier' => $dossier,

                'tools' => $tools,
            ]);
    }

    #[Route('/{id}/histo', name: 'app_dossier_histo', methods: ['GET'])]
    public function showtime(Dossier $dossier, Tools $tools, EntityManagerInterface $em, DossierRepository $dossierRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $dossier=$dossierRepository->find($dossier);
        $paiement=$dossier->getDemande()->getPaiement();

        return $this->render('dossier/showtime.html.twig', [
            'dossier' => $dossier,
            'tools' => $tools,
        ]);
    }

    #[Route('/{id}/attribuer', name: 'app_dossier_attribuer')]
    public function attribuer(Request $request, Dossier $dossier, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $demande=$dossier->getDemande();
        $paiement=$demande->getPaiement();

        $localite=$demande->getInstallation()->getLocalite();
        $form = $this->createFormBuilder($dossier)
        ->add('referent', EntityType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-select',
                'size' => '5'
            ],
            'query_builder' => function (AgentRepository $er) use ($localite) {
                return $er->createQueryBuilder('agt')
                ->select('agt')
                ->join('App\Entity\Profil', 'prof', 'WITH', 'agt.profil = prof.id')
                ->leftJoin('App\Entity\Localite', 'loc', 'WITH', 'agt.id_agence = loc.agence or agt.id_agence is null')
                ->where('loc.id = :val')
                ->andWhere('prof.code = :val2')
                ->setParameter('val', $localite->getId())
                ->setParameter('val2', 'referent')
                ;
            },
            'class' => Agent::class,
            'label' => 'Désignation du Référent chargé du dossier',
            'choice_label' => function ($agent) {
                return "[".$agent->getMatricule()."] ".$agent->getPrenom()." ".$agent->getNom()." - ".$agent->getAgence();
            },
            'required' => true
        ])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $id_agent=$form->get('referent')->getData();
            if($id_agent) {
                $agent=$agentRepository->find($id_agent);
                $dossier->setReferent($agent);
            } 
            $dossier->setUpdatedby($this->getUser()->getId());
            $dossierRepository->add($dossier);

            $this->addFlash("success", "Le dossier a été attribué au référent ".$dossier->getReferent()." !");
            return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        }

        return $this->renderForm('dossier/attribuer.html.twig', [
            'dossier' => $dossier,
            'dossierForm' => $form,
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
                $le_a=null;
                if($dossier->getDemande()->getInstallation()->getLocalite()) {
                    $dossier->getDemande()->getInstallation()->getLocalite()->getAgence();
                }
                return $er->createQueryBuilder('agt')
                ->select('agt')
                ->join('App\Entity\Profil', 'prof', 'WITH', 'agt.profil = prof.id')
                ->andWhere('agt.id_agence = :val3 or agt.id_agence is null')
                ->andWhere('prof.code = :val2')
                ->setParameter('val2', 'controleur')
                ->setParameter('val3', $dossier->getDemande()->getInstallation()->getLocalite()->getAgence())
                ;
            },
            'class' => Agent::class,
            'label' => 'Désignation du Contrôleur chargé du dossier',
            'choice_label' => function ($agent) {
                return "[".$agent->getMatricule()."] ".$agent->getPrenom()." ".$agent->getNom()." -  ".count($agent->getDossierActifControleur())." dossiers en cours";
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
    public function visiter(Request $request, Tools $tools, ManagerRegistry $doctrine, Dossier $dossier, VisiteRepository $visiteRepository, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
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

            // Notification à faire au client
            // -----------------------------------------------------------------------------------------------
            $demande=$dossier->getDemande();
            $installation=$demande->getInstallation();
            $dateV = date_create($dateVisite->format("Y-m-d"));

            $em=$doctrine->getManager(); 
            $mess_sms='Pour le traitement de votre demande '.$demande->getNumero().', une inspection de votre installation est programmée le '.date_format($dateV, 'd-m-Y - H:i:s').'. Nous vous prions de prendre toutes les dispositions nécessaires';
            if($installation->getElectricien() && $installation->getElectricien()->getTelephone()) {
                $tools->notifSMS($installation->getElectricien()->getTelephone(), $mess_sms);
            }
            if($installation->getProprietaire() && $installation->getProprietaire()->getTelephone()) {
                $tools->notifSMS($installation->getProprietaire()->getTelephone(), $mess_sms);
            }
            
            $sujet_mail='Demande COSSUEL - Visite planifiée !';
            $mess_mail='<p>Une inspection a été planifiée pour votre demande numéro: '.$demande->getNumero().'</p><p>Dat et Heure planifiée : '.date_format($dateV, 'd-m-Y H:i:s');
            if($installation->getElectricien() && $installation->getElectricien()->getEmail()) {
                $tools->notifMail($installation->getElectricien()->getEmail(), $mess_mail, $sujet_mail);
            }
            if($installation->getProprietaire() && $installation->getProprietaire()->getEmail()) {
                $tools->notifMail($installation->getProprietaire()->getEmail(), $mess_mail, $sujet_mail);
            }
            // -----------------------------------------------------------------------------------------------

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
    public function revisiter(Request $request, Tools $tools, ManagerRegistry $doctrine, Dossier $dossier, VisiteRepository $visiteRepository, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
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

            // Notification à faire au client
            // -----------------------------------------------------------------------------------------------
            $demande=$dossier->getDemande();
            $installation=$demande->getInstallation();
            $dateV = date_create($dateVisite->format("Y-m-d"));

            $em=$doctrine->getManager(); 
            $mess_sms='Pour le traitement de votre demande '.$demande->getNumero().', une inspection de votre installation est reprogrammée le '.date_format($dateV, 'd-m-Y - H:i:s').'. Nous vous prions de prendre toutes les dispositions nécessaires';
            if($installation->getElectricien() && $installation->getElectricien()->getTelephone()) {
                $tools->notifSMS($installation->getElectricien()->getTelephone(), $mess_sms);
            }
            if($installation->getProprietaire() && $installation->getProprietaire()->getTelephone()) {
                $tools->notifSMS($installation->getProprietaire()->getTelephone(), $mess_sms);
            }
            
            $sujet_mail='Demande COSSUEL - Visite re-planifiée !';
            $mess_mail='<p>Une inspection a été re-planifiée pour votre demande numéro: '.$demande->getNumero().'</p><p>Dat et Heure planifiée : '.date_format($dateV, 'd-m-Y H:i:s');
            if($installation->getElectricien() && $installation->getElectricien()->getEmail()) {
                $tools->notifMail($installation->getElectricien()->getEmail(), $mess_mail, $sujet_mail);
            }
            if($installation->getProprietaire() && $installation->getProprietaire()->getEmail()) {
                $tools->notifMail($installation->getProprietaire()->getEmail(), $mess_mail, $sujet_mail);
            }
            // -----------------------------------------------------------------------------------------------

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
    public function rapporter(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger, Dossier $dossier, VisiteRepository $visiteRepository, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository, PieceJointeRepository $pjRepository, SignatureRepository $signatureRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager();

        $dossier=$dossierRepository->find($dossier);
        $visite = $visiteRepository->find($dossier->getVisiteCourante()->getId());
        $installation = $em->getRepository(Installation::class)->find($dossier->getDemande()->getInstallation()->getId());
        $rapport = $visite->getRapport();
        $les_rubrique=$rapport->getRubriques();
        $les_detailverif=$visite->getDetailVerification();
        
        // Initialisation des détails à vérifier suivant les point de vérif du rapport !
        if($les_detailverif->count() == 0) {
            $ok_pt=0;
            foreach($rapport->getRubriques() as $rub) {
                foreach($rub->getPointVerification() as $pt) {
                    $detailverif = new DetailVerification();
                    $detailverif->setVisite($visite);
                    $detailverif->setPointVerification($pt);
                    $em->persist($detailverif);
                    $ok_pt=1;
                }
            }
            if($ok_pt) {
                $em->flush();
            }
        }
        
        $visite = $visiteRepository->find($dossier->getVisiteCourante()->getId());
        $les_detailverif = $em->getRepository(DetailVerification::class)->findBy(array("visite"=>$visite->getId()));
        $val_mesurePriseTerre=$visite->getMesurePriseTerre();
        $val_barrette=$visite->getBarrette();
        $val_commentaire2=$visite->getCommentaire2();
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
                                ->buildViolation('Date de réalisation de la visite doit être supérieure à la date du jour !')
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
                // 'readonly' => 'readonly',
            ],
            'data' => $installation->getLattitude(),
            'label' => 'Latitude',
            'required' => true,
        ]);
        $form = $form
        ->add("longitude", TextType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-control-sm latlong',
                // 'readonly' => 'readonly',
            ],
            'data' => $installation->getLongitude(),
            'label' => 'Longitude',
            'required' => true,
        ]);
        $form = $form
        ->add("habitation", TextareaType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-control adresse',
            ],
            'data' => $dossier->getDemande()->getInstallation()->getHabitation(),
            'label' => 'Adresse exacte corrigée',
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

        $form = $form
        ->add("mesurePriseTerre", TextType::class, [
            'mapped' => false,
            'required' => true,
            'attr' => [
                'class' => 'form-control',
            ],
            'label' => 'Valeur de prise de terre',
            'data' => $val_mesurePriseTerre,
        ]);
        $form = $form
        ->add("barrette", ChoiceType::class, [
            'mapped' => false,
            'choices' => array('Ouverte'=>'Ouverte', 'Fermée'=>'Fermée'),
            'required' => true,
            'attr' => [
                'class' => 'form-select',
            ],
            'label' => 'Barrette',
            'data' => $val_barrette,
        ]);
        $form = $form
        ->add('pj1', FileType::class,[
            'attr' => [
                'class' => 'form-control'
            ],
            'label' => 'Photo 1 *',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new ConstraintsFile([
                    'maxSize' => '8M',
                    'mimeTypes' => [
                        'image/*',
                    ],
                    
                ])
            ],
        ])
        ->add('pj2', FileType::class,[
            'attr' => [
                'class' => 'form-control'
            ],
            'label' => 'Photo 2 *',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new ConstraintsFile([
                    'maxSize' => '8M',
                    'mimeTypes' => [
                        'image/*',
                    ],
                    
                ])
            ],
        ])
        ->add('pj3', FileType::class,[
            'attr' => [
                'class' => 'form-control'
            ],
            'label' => 'Photo 3',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new ConstraintsFile([
                    'maxSize' => '8M',
                    'mimeTypes' => [
                        'image/*',
                    ],
                    
                ])
            ],
        ])
        ->add('pj4', FileType::class,[
            'attr' => [
                'class' => 'form-control'
            ],
            'label' => 'Photo 4',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new ConstraintsFile([
                    'maxSize' => '8M',
                    'mimeTypes' => [
                        'image/*',
                    ],
                    
                ])
            ],
        ])
        ->add('commentaire2', TextareaType::class, [
            'attr' => [
                'class' => 'form-control text-danger fs-8 fw-bold'
            ],
            'mapped' => false,
            'required' => false,
            'label' => 'Commentaires sur inspection',
            'data' => $val_commentaire2,
        ])

        ->add('sign_electricien', TextareaType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'mapped' => false,
            'required' => false,
            'label' => 'Signature Electricien'
        ])
        ->add('sign_controleur', TextareaType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'mapped' => false,
            'required' => false,
            'label' => 'Signature Controleur'
        ])
        ;


        // on prevoit les champs du form pour gérer chaque points de vérification
        foreach ($les_detailverif as $pt) {
            $inp_sansobjet = 'sansobjet_'.$pt->getId();
            $inp_conclusion = 'conclusion_'.$pt->getId();
            $inp_comment = 'comment_'.$pt->getId();
            $inp_pnc = 'pnc_'.$pt->getId();

            $val_conclusion = "";
            if($pt->getConclusion() != null) {
                $val_conclusion = $pt->getConclusion();
            }

            $val_sansobjet = $pt->getSansobjet();
            if(!$val_sansobjet) { $val_sansobjet=0; }
            $val_comment = "";
            if($pt->getCommentaire()) {
                $val_comment = $pt->getCommentaire();
            }
            $val_pnc = null;
            if($pt->getPointNonconf()) {
                $val_pnc = $pt->getPointNonconf();
            }
            $form = $form
            ->add($inp_sansobjet, HiddenType::class, [
                'mapped' => false,
                'required' => true,
                'attr' => [
                    'class' => 'vsansobjet',
                ],
                    'data' => $val_sansobjet,
            ]);
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

            $form = $form
            ->add($inp_pnc, EntityType::class, [
                'attr' => [
                    'class' => 'form-select py-1',
                ],
                'mapped' => false,
                'class' => PointNonconf::class,
                'data' => $val_pnc,
                'query_builder' => function (PointNonconfRepository $er) use ($pt) {
                    return $er->createQueryBuilder('p')
                    ->where('p.pointVerification = :val') 
                    ->setParameter('val', $pt->getPointVerification());
                },
                'label' => 'Point Non Conformité',
                'required' => false
            ])
            ;
        
        }

        $form = $form->getForm();

        $form->handleRequest($request);
        $step=1; $stay=1; $valid=0;
        if ($form->isSubmitted() && $form->isValid()) {

            $step=$form->get('step')->getData();
            $stay=$form->get('stay')->getData();
            $valid=$form->get('valid')->getData();

            $dateVisite=$form->get('dateVisite')->getData();
            $val_mesurePriseTerre=$form->get('mesurePriseTerre')->getData();
            $val_barrette=$form->get('barrette')->getData();
            $val_commentaire2=$form->get('commentaire2')->getData();
            $visite->setDateRealise($dateVisite);
            $visite->setRealise(1);
            $visite->setEtat("Réalisé");
            $visite->setBarrette($val_barrette);
            $visite->setMesurePriseTerre($val_mesurePriseTerre);
            $visite->setCommentaire2($val_commentaire2);
            $visiteRepository->add($visite);

            $latitude=$form->get('latitude')->getData();
            $longitude=$form->get('longitude')->getData();
            $habitation=$form->get('habitation')->getData();
            $installation->setLattitude($latitude);
            $installation->setLongitude($longitude);
            $installation->setHabitation($habitation);

            $pj1=$pjRepository->findOneBy(array('installation'=>$installation->getId(), 'libelle'=>'Photo Installation 1'));
            $pj2=$pjRepository->findOneBy(array('installation'=>$installation->getId(), 'libelle'=>'Photo Installation 2'));
            $pj3=$pjRepository->findOneBy(array('installation'=>$installation->getId(), 'libelle'=>'Photo Installation 3'));
            $pj4=$pjRepository->findOneBy(array('installation'=>$installation->getId(), 'libelle'=>'Photo Installation 4'));

            $signcontroleur=$signatureRepository->findOneBy(array('visite'=>$visite->getId(), 'libelle'=>'Signature Controleur'));
            $signelectricien=$signatureRepository->findOneBy(array('visite'=>$visite->getId(), 'libelle'=>'Signature Electricien'));
            
            if($pj1==null) {
                $pj1=new PieceJointe();
                $pj1->setInstallation($installation);
                $pj1->setCreatedby($this->getUser()->getId());
                $pj1->setLibelle('Photo Installation 1');
            }
            if($pj2==null) {
                $pj2=new PieceJointe();
                $pj2->setInstallation($installation);
                $pj2->setCreatedby($this->getUser()->getId());
                $pj2->setLibelle('Photo Installation 2');
            }
            if($pj3==null) {
                $pj3=new PieceJointe();
                $pj3->setInstallation($installation);
                $pj3->setCreatedby($this->getUser()->getId());
                $pj3->setLibelle('Photo Installation 3');
            }
            if($pj4==null) {
                $pj4=new PieceJointe();
                $pj4->setInstallation($installation);
                $pj4->setCreatedby($this->getUser()->getId());
                $pj4->setLibelle('Photo Installation 4');
            }
            if($signcontroleur==null) {
                $signcontroleur=new Signature();
                $signcontroleur->setVisite($visite);
                $signcontroleur->setCreatedby($this->getUser()->getId());
                $signcontroleur->setLibelle('Signature Controleur');
            }
            if($signelectricien==null) {
                $signelectricien=new Signature();
                $signelectricien->setVisite($visite);
                $signelectricien->setCreatedby($this->getUser()->getId());
                $signelectricien->setLibelle('Signature Electricien');
            }

            $photoFile1 = $form->get('pj1')->getData();
            $photoFile2 = $form->get('pj2')->getData();
            $photoFile3 = $form->get('pj3')->getData();
            $photoFile4 = $form->get('pj4')->getData();

            $photoElec = $form->get('sign_electricien')->getData();
            $photoContr = $form->get('sign_controleur')->getData();
            if ($photoElec) {
                    $image_parts = explode(";base64,", $photoElec);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $image_type = $image_type_aux[1];
                    $image_base64 = base64_decode($image_parts[1]);
                    $dir = $this->getParameter('photo_directory') .'/';
                    $fich='signelec_'. uniqid() . '.'.$image_type;
                    $file = $dir.$fich;
                    file_put_contents($file, $image_base64);
                    $signelectricien->setFichier($fich);
                    $signatureRepository->add($signelectricien);
            }

            if ($photoContr) {
                    $image_parts = explode(";base64,", $photoContr);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $image_type = $image_type_aux[1];
                    $image_base64 = base64_decode($image_parts[1]);
                    $dir = $this->getParameter('photo_directory') .'/';
                    $fich='signcontr_'. uniqid() . '.'.$image_type;
                    $file = $dir.$fich;
                    file_put_contents($file, $image_base64);
                    $signcontroleur->setFichier($fich);
                    $signatureRepository->add($signcontroleur);
                    // $this->addFlash("danger", "Le fichier de signature n'a pas pu être enregistré !");
            }

            if ($photoFile1) {
                $originalFilename = pathinfo($photoFile1->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile1->guessExtension();

                try {
                    $photoFile1->move(
                        $this->getParameter('photo_directory'),
                        $newFilename
                    );
                    $pj1->setFichier($newFilename);
                    $pjRepository->add($pj1);
                } catch (FileException $e) {
                    $this->addFlash("danger", "Le fichier n'a pas pu être téléchargé !");
                }
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
                    $pj2->setFichier($newFilename);
                    $pjRepository->add($pj2);
                } catch (FileException $e) {
                    $this->addFlash("danger", "Le fichier n'a pas pu être téléchargé !");
                }
            }
                        
            if ($photoFile3) {
                $originalFilename = pathinfo($photoFile3->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile3->guessExtension();

                try {
                    $photoFile3->move(
                        $this->getParameter('photo_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash("danger", "Le fichier n'a pas pu être téléchargé !");
                }
                
                $pj3->setFichier($newFilename);
                $pjRepository->add($pj3);
            }
                        
            if ($photoFile4) {
                $originalFilename = pathinfo($photoFile2->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile4->guessExtension();

                try {
                    $photoFile4->move(
                        $this->getParameter('photo_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash("danger", "Le fichier n'a pas pu être téléchargé !");
                }
                
                $pj4->setFichier($newFilename);
                $pjRepository->add($pj4);
            }
                        
            $iy=0; $le_rub="";
            foreach ($les_detailverif as $pt) {
                if($le_rub!= $pt->getPointVerification()->getRubrique()->getId()) {
                    $le_rub= $pt->getPointVerification()->getRubrique()->getId();
                    $iy++;
                }
                $val_conclusion=$form->get('conclusion_'.$pt->getId())->getData();
                $val_sansobjet=$form->get('sansobjet_'.$pt->getId())->getData();
                $val_comment=$form->get('comment_'.$pt->getId())->getData();
                $val_pnc=$form->get('pnc_'.$pt->getId())->getData();

                $pt->setCommentaire($val_comment);
                if($val_sansobjet) { $val_conclusion=null; }
                if($val_conclusion=="0" || $val_conclusion=="1") {
                    $val_sansobjet=0;
                }
                $pt->setConclusion($val_conclusion);
                $pt->setSansobjet($val_sansobjet);
                $pt->setPointNonconf($val_pnc);
                $em->persist($pt);
            }
            
            $em->flush();
            if($valid) {
                $this->addFlash("success", "Le rapport a été finalisé et soumis au référent !");
                $visite->setRapporte(1);
                $visite->setRejetRapport(0);
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
    public function attester(Request $request, Tools $tools, ManagerRegistry $doctrine, Dossier $dossier, VisiteRepository $visiteRepository, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
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

            // Notification à faire au client
            // -----------------------------------------------------------------------------------------------
            $demande=$dossier->getDemande();
            $installation=$demande->getInstallation();

            $em=$doctrine->getManager(); 
            if(! $resultat) {
                $mess_sms='Après traitement de votre demande '.$demande->getNumero().', votre installation est jugée non conforme. Veuillez prendre en compte les observations reportées et nous soumettre une nouvelle demande.';
            } else {
                $mess_sms='Après traitement de votre demande  '.$demande->getNumero().', votre installation est jugée conforme. Vous pouvez imprimer votre attestation de conformité à partir de votre compte ou la récupérer en agence.';
            }
            if($installation->getElectricien() && $installation->getElectricien()->getTelephone()) {
                $tools->notifSMS($installation->getElectricien()->getTelephone(), $mess_sms);
            }
            if($installation->getProprietaire() && $installation->getProprietaire()->getTelephone()) {
                $tools->notifSMS($installation->getProprietaire()->getTelephone(), $mess_sms);
            }
            
            if(! $resultat) {
                $sujet_mail='Demande COSSUEL - Installation non conforme !';
                $mess_mail='<p>Votre installation est non conforme ! Un bon de travaux est disponible pour correction des anomalies</p>';
            } else {
                $sujet_mail='Demande COSSUEL - Installation conforme !';
                $mess_mail='<p>Votre installation est conforme ! Une attestation de conformité est disponible</p>';
            }
            if($installation->getElectricien() && $installation->getElectricien()->getEmail()) {
                $tools->notifMail($installation->getElectricien()->getEmail(), $mess_mail, $sujet_mail);
            }
            if($installation->getProprietaire() && $installation->getProprietaire()->getEmail()) {
                $tools->notifMail($installation->getProprietaire()->getEmail(), $mess_mail, $sujet_mail);
            }
            // -----------------------------------------------------------------------------------------------

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
            $visite->setRejetRapport(1);
            $visite->setMotifRejetRapport($commentaire);
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
