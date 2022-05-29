<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Entity\Agent;
use App\Entity\Demande;
use App\Entity\Dossier;
use App\Entity\Electricien;
use App\Entity\Installation;
use App\Entity\Paiement;
use App\Entity\Utilisateur;
use App\Services\Tools;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agent=null; $agence=null; $electricien=null;
        if(!$request->getSession()->get('agence')) {
            if($userConn->getType() && $userConn->getIdType()) {
                if($userConn->getType()=="Electricien") {
                    $electricien=$em->getRepository(Electricien::class)->find($userConn->getIdType());
                    $request->getSession()->set('electricien', $electricien);
                }
                if($userConn->getType()=="Agent") {
                    $agent=$em->getRepository(Agent::class)->find($userConn->getIdType());
                    $request->getSession()->set('agent', $agent);
                    $agence=$agent->getAgenceCourante();
                    // Initialisation variable de session pour agence actuelle de l'utilisateur connecté
                    if($agence) {
                        $request->getSession()->set('agence', $agence);
                    }
                }
            }
        } else {
            $agent=$request->getSession()->get('agent'); $agence=$request->getSession()->get('agence'); 
            $electricien=$request->getSession()->get('electricien');
        }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'main');
        $request->getSession()->set('sousmenu', '');

        $restr_dem=array(); $restr_dos=array();

        // VUE FINANCIERS
        if(in_array($role, array("ROLE_CAISSIER", "ROLE_COMPTABLE", "ROLE_DAF"))) {
            if($role!="ROLE_DAF" && $agence) {
                $restr_dem=array("agence"=>$agence->getId()); $restr_dos=array("agence"=>$agence->getId());
            }
            $les_demande = $em->getRepository(Demande::class)->findBy2($restr_dem);
            $les_dossier = $em->getRepository(Dossier::class)->findBy2($restr_dos);

            $stat_paiement=array(
                // "ModePaiement"=>array("Total", "domestique", "non_domestique", "erp_ert"),
                "All"=>array(0, 0, 0, 0),
                "Espèce"=>array(0, 0, 0, 0),
                "Chèque"=>array(0, 0, 0, 0),
                "Autre"=>array(0, 0, 0, 0),
            );

            $montant_paiement=array(
                // "ModePaiement"=>array("Total", "domestique", "non_domestique", "erp_ert"),
                "All"=>array(0, 0, 0, 0),
                "Espèce"=>array(0, 0, 0, 0),
                "Chèque"=>array(0, 0, 0, 0),
                "Autre"=>array(0, 0, 0, 0),
            );

            $les_paiement = $em->getRepository(Paiement::class)->findBy2($restr_dem);
            foreach($les_paiement as $p) {
                $stat_paiement["All"][0]++;
                if($p->getMode()=="Espèce") { $stat_paiement["Espèce"][0]++; }
                if($p->getMode()=="Chèque") { $stat_paiement["Chèque"][0]++; }
                if(!in_array($p->getMode(), array("Espèce", "Chèque"))) { $stat_paiement["Autre"][0]++; }
                if($p->getDemande()->getInstallation()->getUsages()=="domestique") {
                    $stat_paiement["All"][0]++;
                    if($p->getMode()=="Espèce") { $stat_paiement["Espèce"][0]++; }
                    if($p->getMode()=="Chèque") { $stat_paiement["Chèque"][0]++; }
                    if(!in_array($p->getMode(), array("Espèce", "Chèque"))) { $stat_paiement["Autre"][0]++; }
                }
                if($p->getDemande()->getInstallation()->getUsages()=="non_domestique") {
                    $stat_paiement["All"][1]++;
                    if($p->getMode()=="Espèce") { $stat_paiement["Espèce"][1]++; }
                    if($p->getMode()=="Chèque") { $stat_paiement["Chèque"][1]++; }
                    if(!in_array($p->getMode(), array("Espèce", "Chèque"))) { $stat_paiement["Autre"][1]++; }
                }
                if($p->getDemande()->getInstallation()->getUsages()=="erp_ert") {
                    $stat_paiement["All"][2]++;
                    if($p->getMode()=="Espèce") { $stat_paiement["Espèce"][2]++; }
                    if($p->getMode()=="Chèque") { $stat_paiement["Chèque"][2]++; }
                    if(!in_array($p->getMode(), array("Espèce", "Chèque"))) { $stat_paiement["Autre"][2]++; }
                }
            }

            $les_stat0 = [
                "All"=>0, 
                "Domestiques"=>0, 
                "Professionnelles"=>0, 
                "ERP - ERT"=>0, 
                "Soumis, en attente paiement"=>0, 
                "Payé, en attente confirmation paiement"=>0, 
                "Payé, en attente validation"=>0, 
            ];

            foreach ($les_demande as $demande) {
                $etat = $demande->getEtat();
                $usage = $demande->getInstallation()->getUsages();
                if($usage=="domestique") { $les_stat0["Domestiques"]=$les_stat0["Domestiques"]+1; }
                if($usage=="non_domestique") { $les_stat0["Professionnelles"]=$les_stat0["Professionnelles"]+1; }
                if($usage=="erp_ert") { $les_stat0["ERP - ERT"]=$les_stat0["ERP - ERT"]+1; }

                if($etat=="Soumis") { $les_stat0["Soumis, en attente paiement"] = $les_stat0["Soumis, en attente paiement"]+1; }
                if($etat=="Paiement enregistré") { $les_stat0["Payé, en attente confirmation paiement"] = $les_stat0["Payé, en attente confirmation paiement"]+1; }
                if($etat=="Paiement validé") { $les_stat0["Payé, en attente validation"] = $les_stat0["Payé, en attente validation"]+1; }
                
                $les_stat0["All"] = $les_stat0["All"]+1;

            }
        }

        // VUE TECHNICIENS
        if(in_array($role, array("ROLE_REFERENT", "ROLE_RFO", "ROLE_CONTROLEUR"))) {
            if($agence) {
                $restr_dem=array("agence"=>$agence->getId()); $restr_dos=array("agence"=>$agence->getId());
            }
            $les_demande = $em->getRepository(Demande::class)->findBy2($restr_dem);
            $les_dossier = $em->getRepository(Dossier::class)->findBy2($restr_dos);

            $les_stat0 = [
                "All"=>0, 
                "Domestiques"=>0, 
                "Professionnelles"=>0, 
                "ERP - ERT"=>0, 
                "Payé, en attente validation"=>0, 
                "Dossier Validé, En Attente Affectation"=>0,
                "Dossier Affecté, En Attente Visite"=>0,
                "Visite Planifiée, En Attente de Rapport"=>0,
                "Visite Réalisée, En Attente de validation Rapport"=>0,
                "Rapport validé, en attente clôture"=>0,
            ];

            foreach ($les_demande as $demande) {
                $etat = $demande->getEtat();
                $usage = $demande->getInstallation()->getUsages();
                if($usage=="domestique") { $les_stat0["Domestiques"]=$les_stat0["Domestiques"]+1; }
                if($usage=="non_domestique") { $les_stat0["Professionnelles"]=$les_stat0["Professionnelles"]+1; }
                if($usage=="erp_ert") { $les_stat0["ERP - ERT"]=$les_stat0["ERP - ERT"]+1; }

                if($etat=="Paiement validé") { $les_stat0["Payé, en attente validation"] = $les_stat0["Payé, en attente validation"]+1; }
                
                $les_stat0["All"] = $les_stat0["All"]+1;

            }

            foreach ($les_dossier as $dossier) {
                $affecte = $dossier->getAffecte(); $visite = $dossier->getVisite();
                $rapport = $dossier->getRapport(); $attestation = $dossier->getAttestation();

                if($affecte == 0 and $visite == 0 and $rapport == 0 and $attestation == 0) { $les_stat0["Dossier Validé, En Attente Affectation"] = $les_stat0["Dossier Validé, En Attente Affectation"]+1; }
                if($affecte == 1 and $visite == 0 and $rapport == 0 and $attestation == 0) { $les_stat0["Dossier affecté"] = $les_stat0["Dossier Affecté, En Attente Visite"]+1; }
                if($affecte == 1 and $visite == 1 and $rapport == 0 and $attestation == 0) { $les_stat0["Visite Planifiée, En Attente de Rapport"] = $les_stat0["Visite Planifiée, En Attente de Rapport"]+1; }
                if($affecte == 1 and $visite == 1 and $rapport == 1 and $attestation == 0) { $les_stat0["Visite Réalisée, En Attente de validation Rapport"] = $les_stat0["Visite Réalisée, En Attente de validation Rapport"]+1; }
                if($affecte == 1 and $visite == 1 and $rapport == 1 and $attestation == 1) { $les_stat0["Rapport validé, en attente clôture"] = $les_stat0["Rapport validé, en attente Cloture"]+1; }
            }
        }

        // VUE ADMIN
        if(in_array($role, array("ROLE_ADMIN"))) {
            $last_client = $em->getRepository(Electricien::class)->findBy(array(),array('id' => 'DESC'),5 ,0);
            $les_install = $em->getRepository(Installation::class)->findByEtat("Saisie");
            $les_demande = $em->getRepository(Demande::class)->findBy2($restr_dem);
            $les_dossier = $em->getRepository(Dossier::class)->findBy2($restr_dos);

            $stat_paiement=array(
                // "ModePaiement"=>array("Total", "domestique", "non_domestique", "erp_ert"),
                "All"=>array(0, 0, 0, 0),
                "Espèce"=>array(0, 0, 0, 0),
                "Chèque"=>array(0, 0, 0, 0),
                "Autre"=>array(0, 0, 0, 0),
            );

            $montant_paiement=array(
                // "ModePaiement"=>array("Total", "domestique", "non_domestique", "erp_ert"),
                "All"=>array(0, 0, 0, 0),
                "Espèce"=>array(0, 0, 0, 0),
                "Chèque"=>array(0, 0, 0, 0),
                "Autre"=>array(0, 0, 0, 0),
            );

            $les_paiement = $em->getRepository(Paiement::class)->findAll();
            foreach($les_paiement as $p) {
                $stat_paiement["All"][0]++;
                if($p->getMode()=="Espèce") { $stat_paiement["Espèce"][0]++; }
                if($p->getMode()=="Chèque") { $stat_paiement["Chèque"][0]++; }
                if(!in_array($p->getMode(), array("Espèce", "Chèque"))) { $stat_paiement["Autre"][0]++; }
                if($p->getDemande()->getInstallation()->getUsages()=="domestique") {
                    $stat_paiement["All"][0]++;
                    if($p->getMode()=="Espèce") { $stat_paiement["Espèce"][0]++; }
                    if($p->getMode()=="Chèque") { $stat_paiement["Chèque"][0]++; }
                    if(!in_array($p->getMode(), array("Espèce", "Chèque"))) { $stat_paiement["Autre"][0]++; }
                }
                if($p->getDemande()->getInstallation()->getUsages()=="non_domestique") {
                    $stat_paiement["All"][1]++;
                    if($p->getMode()=="Espèce") { $stat_paiement["Espèce"][1]++; }
                    if($p->getMode()=="Chèque") { $stat_paiement["Chèque"][1]++; }
                    if(!in_array($p->getMode(), array("Espèce", "Chèque"))) { $stat_paiement["Autre"][1]++; }
                }
                if($p->getDemande()->getInstallation()->getUsages()=="erp_ert") {
                    $stat_paiement["All"][2]++;
                    if($p->getMode()=="Espèce") { $stat_paiement["Espèce"][2]++; }
                    if($p->getMode()=="Chèque") { $stat_paiement["Chèque"][2]++; }
                    if(!in_array($p->getMode(), array("Espèce", "Chèque"))) { $stat_paiement["Autre"][2]++; }
                }
            }

            $les_stat0 = [
                "All"=>0, 
                "Domestiques"=>0, 
                "Professionnelles"=>0, 
                "ERP - ERT"=>0, 
                "En saisie"=>0, 
                "Soumis, en attente paiement"=>0, 
                "Payé, en attente confirmation paiement"=>0, 
                "Payé, en attente validation"=>0, 
                "Dossier Validé, En Attente Affectation"=>0,
                "Dossier Affecté, En Attente Visite"=>0,
                "Visite Planifiée, En Attente de Rapport"=>0,
                "Visite Réalisée, En Attente de validation Rapport"=>0,
                "Rapport validé, en attente clôture"=>0,
            ];

            foreach ($les_demande as $demande) {
                $etat = $demande->getEtat();
                $usage = $demande->getInstallation()->getUsages();
                if($usage=="domestique") { $les_stat0["Domestiques"]=$les_stat0["Domestiques"]+1; }
                if($usage=="non_domestique") { $les_stat0["Professionnelles"]=$les_stat0["Professionnelles"]+1; }
                if($usage=="erp_ert") { $les_stat0["ERP - ERT"]=$les_stat0["ERP - ERT"]+1; }

                if($etat=="Soumis") { $les_stat0["Soumis, en attente paiement"] = $les_stat0["Soumis, en attente paiement"]+1; }
                if($etat=="Paiement enregistré") { $les_stat0["Payé, en attente confirmation paiement"] = $les_stat0["Payé, en attente confirmation paiement"]+1; }
                if($etat=="Paiement validé") { $les_stat0["Payé, en attente validation"] = $les_stat0["Payé, en attente validation"]+1; }
                
                $les_stat0["All"] = $les_stat0["All"]+1;

            }

            foreach ($les_dossier as $dossier) {
                $affecte = $dossier->getAffecte(); $visite = $dossier->getVisite();
                $rapport = $dossier->getRapport(); $attestation = $dossier->getAttestation();

                if($affecte == 0 and $visite == 0 and $rapport == 0 and $attestation == 0) { $les_stat0["Dossier Validé, En Attente Affectation"] = $les_stat0["Dossier Validé, En Attente Affectation"]+1; }
                if($affecte == 1 and $visite == 0 and $rapport == 0 and $attestation == 0) { $les_stat0["Dossier affecté"] = $les_stat0["Dossier Affecté, En Attente Visite"]+1; }
                if($affecte == 1 and $visite == 1 and $rapport == 0 and $attestation == 0) { $les_stat0["Visite Planifiée, En Attente de Rapport"] = $les_stat0["Visite Planifiée, En Attente de Rapport"]+1; }
                if($affecte == 1 and $visite == 1 and $rapport == 1 and $attestation == 0) { $les_stat0["Visite Réalisée, En Attente de validation Rapport"] = $les_stat0["Visite Réalisée, En Attente de validation Rapport"]+1; }
                if($affecte == 1 and $visite == 1 and $rapport == 1 and $attestation == 1) { $les_stat0["Rapport validé, en attente clôture"] = $les_stat0["Rapport validé, en attente Cloture"]+1; }
            }
        }

        // VUE ACCUEIL
        if(in_array($role, array("ROLE_ACCUEIL"))) {
            if($agence) {
                $restr_dem=array("agence"=>$agence->getId()); $restr_dos=array("agence"=>$agence->getId());
            }
            $last_client = $em->getRepository(Electricien::class)->findBy(array(),array('id' => 'DESC'),5 ,0);
            $les_install = $em->getRepository(Installation::class)->findByEtat("Saisie");
            $les_demande = $em->getRepository(Demande::class)->findBy2($restr_dem);

            $les_stat0 = [
                "All"=>0, 
                "Domestiques"=>0, 
                "Professionnelles"=>0, 
                "ERP - ERT"=>0, 
                "En saisie"=>0, 
                "Soumis, en attente paiement"=>0, 
            ];

            foreach ($les_demande as $demande) {
                $etat = $demande->getEtat();
                $usage = $demande->getInstallation()->getUsages();
                if($usage=="domestique") { $les_stat0["Domestiques"]=$les_stat0["Domestiques"]+1; }
                if($usage=="non_domestique") { $les_stat0["Professionnelles"]=$les_stat0["Professionnelles"]+1; }
                if($usage=="erp_ert") { $les_stat0["ERP - ERT"]=$les_stat0["ERP - ERT"]+1; }

                if($etat=="Soumis") { $les_stat0["Soumis, en attente paiement"] = $les_stat0["Soumis, en attente paiement"]+1; }
                
                $les_stat0["All"] = $les_stat0["All"]+1;

            }

        }

        // VUE PUBLIC
        if(in_array($role, array("ROLE_PUBLIC"))) {
            $restr_dem=array("created_by"=>$userConn->getId());

            $les_demande = $em->getRepository(Demande::class)->findBy2($restr_dem);
            $les_dossier = $em->getRepository(Dossier::class)->findBy2($restr_dos);

            $les_stat0 = [
                "All"=>0, 
                "Domestiques"=>0, 
                "Professionnelles"=>0, 
                "ERP - ERT"=>0, 
                "En saisie"=>0, 
                "Soumis, en attente paiement"=>0, 
                "Payé, en attente confirmation paiement"=>0, 
                "Payé, en attente validation"=>0, 
                "Dossier Validé, En Attente Affectation"=>0,
                "Dossier Affecté, En Attente Visite"=>0,
                "Visite Planifiée, En Attente de Rapport"=>0,
                "Visite Réalisée, En Attente de validation Rapport"=>0,
                "Rapport validé, en attente clôture"=>0,
            ];

            foreach ($les_demande as $demande) {
                $etat = $demande->getEtat();
                $usage = $demande->getInstallation()->getUsages();
                if($usage=="domestique") { $les_stat0["Domestiques"]=$les_stat0["Domestiques"]+1; }
                if($usage=="non_domestique") { $les_stat0["Professionnelles"]=$les_stat0["Professionnelles"]+1; }
                if($usage=="erp_ert") { $les_stat0["ERP - ERT"]=$les_stat0["ERP - ERT"]+1; }

                if($etat=="Soumis") { $les_stat0["Soumis, en attente paiement"] = $les_stat0["Soumis, en attente paiement"]+1; }
                if($etat=="Paiement enregistré") { $les_stat0["Payé, en attente confirmation paiement"] = $les_stat0["Payé, en attente confirmation paiement"]+1; }
                if($etat=="Paiement validé") { $les_stat0["Payé, en attente validation"] = $les_stat0["Payé, en attente validation"]+1; }
                
                $les_stat0["All"] = $les_stat0["All"]+1;

            }

            foreach ($les_dossier as $dossier) {
                $affecte = $dossier->getAffecte(); $visite = $dossier->getVisite();
                $rapport = $dossier->getRapport(); $attestation = $dossier->getAttestation();

                if($affecte == 0 and $visite == 0 and $rapport == 0 and $attestation == 0) { $les_stat0["Dossier Validé, En Attente Affectation"] = $les_stat0["Dossier Validé, En Attente Affectation"]+1; }
                if($affecte == 1 and $visite == 0 and $rapport == 0 and $attestation == 0) { $les_stat0["Dossier affecté"] = $les_stat0["Dossier Affecté, En Attente Visite"]+1; }
                if($affecte == 1 and $visite == 1 and $rapport == 0 and $attestation == 0) { $les_stat0["Visite Planifiée, En Attente de Rapport"] = $les_stat0["Visite Planifiée, En Attente de Rapport"]+1; }
                if($affecte == 1 and $visite == 1 and $rapport == 1 and $attestation == 0) { $les_stat0["Visite Réalisée, En Attente de validation Rapport"] = $les_stat0["Visite Réalisée, En Attente de validation Rapport"]+1; }
                if($affecte == 1 and $visite == 1 and $rapport == 1 and $attestation == 1) { $les_stat0["Rapport validé, en attente clôture"] = $les_stat0["Rapport validé, en attente Cloture"]+1; }
            }
        }


        // usually you'll want to make sure the user is authenticated first
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if(in_array($role, array("ROLE_CAISSIER", "ROLE_COMPTABLE", "ROLE_DAF"))) {
            return $this->render('main/index_paiement.html.twig', [
                'les_stat' => $les_stat0,
                'stat_paiement' => $stat_paiement,
                'montant_paiement' => $montant_paiement,
            ]);
        }
        elseif(in_array($role, array("ROLE_CONTROLEUR", "ROLE_REFERENT", "ROLE_RFO"))) {
            return $this->render('main/index_dossier.html.twig', [
                'les_stat' => $les_stat0,
            ]);
        }
        elseif(in_array($role, array("ROLE_ADMIN"))) {
            return $this->render('main/index.html.twig', [
                'les_stat' => $les_stat0,
                'stat_paiement' => $stat_paiement,
                'montant_paiement' => $montant_paiement,
                'les_install' => $les_install,
                'last_client' => $last_client,
            ]);
        }
        elseif(in_array($role, array("ROLE_PUBLIC"))) {
            return $this->render('main/index_public.html.twig', [
                'les_stat' => $les_stat0,
                'les_install' => $les_install,
            ]);
        }
        elseif(in_array($role, array("ROLE_ACCUEIL"))) {
            return $this->render('main/index_accueil.html.twig', [
                'les_install' => $les_install,
                'les_stat' => $les_stat0,
            ]);
        }
    }

    #[Route('/statistiques', name: 'stat', methods: ['GET', 'POST'])]
    public function stat_demande(Request $request, ManagerRegistry $doctrine): Response
    {
        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agent=null; $electricien=null; $agence=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'statistiques');
        $request->getSession()->set('sousmenu', '');

        $restr_dem=array(); $restr_dos=array();

        if($role=="ROLE_PUBLIC") {
            $restr_dem=array("created_by"=>$userConn->getId());
        }

        $val_agence=""; $restr_agence=0;
        $les_agence = $em->getRepository(Agence::class)->findBy(array(), array("nom"=>"asc", ));

        $val_usage=""; 
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=""; 
        $les_statut = array("Soumis");

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            if($val_agence) { $val_filtre["agence"] = $val_agence; }
            
            $val_usage = $request->request->get("val_usage");
            if($val_usage) { $val_filtre["usages"] = $val_usage; }
            
            $val_statut = $request->request->get("val_statut");
            if($val_statut) { $val_filtre["etat"] = $val_statut; }
        }


        // $les_demande = $em->getRepository(Demande::class)->findBy2($restr_dem);
        $les_demande = $em->getRepository(Demande::class)->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $les_dossier = $em->getRepository(Dossier::class)->findBy2($restr_dos);

        
        $les_stat0 = [
            "All"=>0, 
            "Domestiques"=>0, 
            "Professionnelles"=>0, 
            "En saisie"=>0, 
            "Soumis, en attente paiement"=>0, 
            "Payé, en attente confirmation paiement"=>0, 
            "Payé, en attente validation"=>0, 
            "Dossier Validé, En Attente Affectation"=>0,
            "Dossier Affecté, En Attente Visite"=>0,
            "Visite Planifiée, En Attente de Rapport"=>0,
            "Visite Réalisée, En Attente de validation Rapport"=>0,
            "Rapport validé, en attente clôture"=>0,
        ];

        foreach ($les_dossier as $dossier) {
            $affecte = $dossier->getAffecte(); $visite = $dossier->getVisite();
            $rapport = $dossier->getRapport(); $attestation = $dossier->getAttestation();

            if($affecte == 0 and $visite == 0 and $rapport == 0 and $attestation == 0) { $les_stat0["Dossier Validé, En Attente Affectation"] = $les_stat0["Dossier Validé, En Attente Affectation"]+1; }
            if($affecte == 1 and $visite == 0 and $rapport == 0 and $attestation == 0) { $les_stat0["Dossier affecté"] = $les_stat0["Dossier Affecté, En Attente Visite"]+1; }
            if($affecte == 1 and $visite == 1 and $rapport == 0 and $attestation == 0) { $les_stat0["Visite Planifiée, En Attente de Rapport"] = $les_stat0["Visite Planifiée, En Attente de Rapport"]+1; }
            if($affecte == 1 and $visite == 1 and $rapport == 1 and $attestation == 0) { $les_stat0["Visite Réalisée, En Attente de validation Rapport"] = $les_stat0["Visite Réalisée, En Attente de validation Rapport"]+1; }
            if($affecte == 1 and $visite == 1 and $rapport == 1 and $attestation == 1) { $les_stat0["Rapport validé, en attente clôture"] = $les_stat0["Rapport validé, en attente Cloture"]+1; }
        }


        // usually you'll want to make sure the user is authenticated first
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('main/stat.html.twig', [
            'les_demande' => $les_demande,
            'val_rech' => $val_rech,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'tools'=> $tools,
        ]);
    }    
}
