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
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine): Response
    {
        if($this->getUser() == null) {
            return $this->redirectToRoute('app_logout');
        }
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $idConn=$userConn->getId();
        $agent=null; $idAgent=null; $agence=null; $electricien=null;
        if(!$request->getSession()->get('agence')) {
            if($userConn->getType() && $userConn->getIdType()) {
                if($userConn->getType()=="Electricien") {
                    $electricien=$em->getRepository(Electricien::class)->find($userConn->getIdType());
                    $request->getSession()->set('electricien', $electricien);
                }
                if($userConn->getType()=="Agent") {
                    $agent=$em->getRepository(Agent::class)->find($userConn->getIdType());
                    if($agent) {
                        $request->getSession()->set('agent', $agent);
                        $agence=$agent->getAgenceCourante();
                        // Initialisation variable de session pour agence actuelle de l'utilisateur connecté
                        if($agence) {
                            $request->getSession()->set('agence', $agence);
                        }
                    }
                }
            }
        } else {
            $agent=$request->getSession()->get('agent'); $agence=$request->getSession()->get('agence'); 
            $electricien=$request->getSession()->get('electricien');
        }
        if($agent) { $idAgent=$agent->getId(); }
        if($agence) { $idAgence=$agence->getId(); }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'main');
        $request->getSession()->set('sousmenu', '');
        $request->getSession()->set('page_liste_dossier', 'main');
        $request->getSession()->set('page_liste_demande', 'main');

        $restr_dem=array(); $restr_dos=array();
        if($agence && in_array($role, array("ROLE_CONTROLEUR", "ROLE_REFERENT"))) {
            $restr_dem=array("agence"=>$idAgence);
        }

        if(in_array($role, array("ROLE_CAISSIER", "ROLE_COMPTABLE"))) {
            $restr_dem["paiement_by"]=$userConn->getId();
        }

        if($request->query->count() && $request->query->get("dash_page")) {
            // dd($request->query->get("dash_page"));
            $dash_page="perso";
            $page_dash=$request->query->get("dash_page");
            if($page_dash=="stat_dem") { $dash_page="stat_dem"; }
            elseif($page_dash=="stat_paye") { $dash_page="stat_paye"; }
            $request->getSession()->set('dash_page', $dash_page);
        }
        if($request->getSession()->get('dash_page')) {
            $dash_page=$request->getSession()->get('dash_page');
        } else {
            $dash_page="perso";
            $request->getSession()->set('dash_page', $dash_page);
        }

        $les_install=null; $last_client=null;
        if(in_array($role, array("ROLE_ADMIN"))) {
            $last_client = $em->getRepository(Electricien::class)->findBy(array(),array('id' => 'DESC'),5 ,0);
            $les_install = $em->getRepository(Installation::class)->findByEtat("Saisie");
            $les_install = $pgn->paginate($les_install, $request->query->getInt('page', 1), 20);
    
        } 
        $les_demande = $em->getRepository(Demande::class)->findBy2($restr_dem);

        $stat_paiement=array(
            // "ModePaiement"=>array("Total", "domestique", "non_domestique", "erp_ert"),
            "All"=>array(array(0, 0), array(0, 0), array(0, 0), array(0, 0)),
            "Espèce"=>array(array(0, 0), array(0, 0), array(0, 0), array(0, 0)),
            "Chèque"=>array(array(0, 0), array(0, 0), array(0, 0), array(0, 0)),
            "Autre"=>array(array(0, 0), array(0, 0), array(0, 0), array(0, 0)),
        );

        $mes_stat_paiement=array(
            // "ModePaiement"=>array("Total", "domestique", "non_domestique", "erp_ert"),
            "All"=>array(array(0, 0), array(0, 0), array(0, 0), array(0, 0)),
            "Espèce"=>array(array(0, 0), array(0, 0), array(0, 0), array(0, 0)),
            "Chèque"=>array(array(0, 0), array(0, 0), array(0, 0), array(0, 0)),
            "Autre"=>array(array(0, 0), array(0, 0), array(0, 0), array(0, 0)),
        );

        $les_stat0 = [
                "All"=>0, 
                "Domestiques"=>0, 
                "Professionnelles"=>0, 
                "ERP - ERT"=>0, 
                "1ère visite"=>0, 
                "2e visite"=>0, 
                "En saisie"=>0, 
                "Soumis"=>0, 
                "Paiement enregistré"=>0, 
                "Paiement validé"=>0, 
                "Dossier validé"=>0,
                "Dossier affecté"=>0,
                "Visite planifiée"=>0,
                "Rapport élaboré"=>0,
                "Rapport validé"=>0,
            ];

            $mes_stat = [
                "All"=>0, 
                "Domestiques"=>0, 
                "Professionnelles"=>0, 
                "ERP - ERT"=>0, 
                "1ère visite"=>0, 
                "2e visite"=>0, 
                "En saisie"=>0, 
                "Soumis"=>0, 
                "Paiement enregistré"=>0, 
                "Paiement validé"=>0, 
                "Dossier validé"=>0,
                "Dossier affecté"=>0,
                "Visite planifiée"=>0,
                "Rapport élaboré"=>0,
                "Rapport validé"=>0,
            ];

            $les_alerte = [
                "Hors délais 5 jours"=>0, 
                "Hors délais 15 jours"=>0, 
            ];

            $mes_alerte = [
                "Hors délais 5 jours"=>0, 
                "Hors délais 15 jours"=>0, 
            ];

            foreach($les_demande as $dem) {
                // Stat sur paiements
                // --------------------------------------------
                $paiement=$dem->getPaiement();
                if($paiement) {
                    $p=$paiement;
                    $montant=$p->getDemande()->getCout();
                    $xx=0;
                    $stat_paiement["All"][$xx][0]++; $stat_paiement["All"][$xx][1]+=$montant;
                    if(!in_array($p->getMode(), array("Espèce", "Chèque"))) { $stat_paiement["Autre"][$xx][0]++; $stat_paiement["Autre"][$xx][1]+=$montant; }
                    else { $stat_paiement[$p->getMode()][$xx][0]++; $stat_paiement[$p->getMode()][$xx][1]+=$montant; }

                    // mes paiements
                    if($idConn && (($p->getCreatedBy() && $p->getCreatedBy()==$idConn) || ($p->getUpdatedBy() && $p->getUpdatedBy()==$idConn))) {
                        $mes_stat_paiement["All"][$xx][0]++; $mes_stat_paiement["All"][$xx][1]+=$montant;
                        if(!in_array($p->getMode(), array("Espèce", "Chèque"))) { $mes_stat_paiement["Autre"][$xx][0]++; $mes_stat_paiement["Autre"][$xx][1]+=$montant; }
                        else { $mes_stat_paiement[$p->getMode()][$xx][0]++; $mes_stat_paiement[$p->getMode()][$xx][1]+=$montant; }
                    }

                    if($p->getDemande()->getInstallation()->getUsages()=="domestique") { $xx=1; }
                    if($p->getDemande()->getInstallation()->getUsages()=="non_domestique") { $xx=2; }
                    if($p->getDemande()->getInstallation()->getUsages()=="erp_ert") { $xx=3; }

                    $stat_paiement["All"][$xx][0]++; $stat_paiement["All"][$xx][1]+=$montant;
                    if(!in_array($p->getMode(), array("Espèce", "Chèque"))) { $stat_paiement["Autre"][$xx][0]++; $stat_paiement["Autre"][$xx][1]+=$montant; }
                    else { $stat_paiement[$p->getMode()][$xx][0]++; $stat_paiement[$p->getMode()][$xx][1]+=$montant; }

                    // mes paiements
                    if($idConn && (($p->getCreatedBy() && $p->getCreatedBy()==$idConn) || ($p->getUpdatedBy() && $p->getUpdatedBy()==$idConn))) {
                        $mes_stat_paiement["All"][$xx][0]++; $mes_stat_paiement["All"][$xx][1]+=$montant;
                        if(!in_array($p->getMode(), array("Espèce", "Chèque"))) { $stat_paiement["Autre"][$xx][0]++; $mes_stat_paiement["Autre"][$xx][1]+=$montant; }
                        else { $mes_stat_paiement[$p->getMode()][$xx][0]++; $mes_stat_paiement[$p->getMode()][$xx][1]+=$montant; }
                    }
                }

                // Stat sur demandes
                // --------------------------------------------
                $demande=$dem;
                $etat = $demande->getEtat();
                $usage = $demande->getInstallation()->getUsages();

                $id_auteur_dem=$demande->getCreatedBy();
                $id_referent=null; 
                $id_rfo=null; 
                $id_controleur=null; 
                $id_auteur_doss=null;
                $id_auteur_vis=null;
                if($demande->getDossier()) {
                    if($demande->getDossier()->getReferent()) { $id_referent=$demande->getDossier()->getReferent()->getId(); }
                    if($demande->getDossier()->getRespoFrontOffice()) { $id_rfo=$demande->getDossier()->getRespoFrontOffice()->getId(); }
                    if($demande->getDossier()->getControleur()) { $id_controleur=$demande->getDossier()->getControleur()->getId(); }
                    $id_auteur_doss=$demande->getDossier()->getCreatedBy();
                    if($demande->getDossier()->getVisiteCourante()) {
                        $id_auteur_vis=$demande->getDossier()->getVisiteCourante()->getCreatedBy();
                    }
                }
                $id_auteur_paye0=null; $id_auteur_paye1=null;
                if($demande->getPaiement()) {
                    $id_auteur_paye0=$demande->getPaiement()->getCreatedBy();
                    $id_auteur_paye1=$demande->getPaiement()->getUpdatedBy();
                }

                $test_auteur=($id_auteur_vis && $idConn && $id_auteur_vis==$idConn) || ($id_auteur_doss && $idConn && $id_auteur_doss==$idConn) || ($id_auteur_dem && $idConn && $id_auteur_dem==$idConn) || ($id_auteur_paye1 && $idConn && $id_auteur_paye1 == $idConn) || ($id_auteur_paye0 && $idConn && $id_auteur_paye0 == $idConn) || ($id_referent && $idAgent && $id_referent == $idAgent) || ($id_controleur && $idAgent && $id_controleur == $idAgent);

                if($usage=="domestique") { 
                    $les_stat0["Domestiques"]=$les_stat0["Domestiques"]+1; 
                    if($test_auteur) {
                        $mes_stat["Domestiques"]++;
                    }
                }
                if($usage=="non_domestique") { 
                    $les_stat0["Professionnelles"]=$les_stat0["Professionnelles"]+1; 
                    if($test_auteur) {
                        $mes_stat["Professionnelles"]++;
                    }
                }
                if($usage=="erp_ert") { 
                    $les_stat0["ERP - ERT"]=$les_stat0["ERP - ERT"]+1; 
                    if($test_auteur) {
                        $mes_stat["ERP - ERT"]++;
                    }
                }

                $numPassage = $demande->getNumeroPassage();
                if($numPassage=="1") { 
                    $les_stat0["1ère visite"]=$les_stat0["1ère visite"]+1; 
                    if($test_auteur) {
                        $mes_stat["1ère visite"]++;
                    }
                }
                if($numPassage=="2") { 
                    $les_stat0["2e visite"]=$les_stat0["2e visite"]+1; 
                    if($test_auteur) {
                        $mes_stat["2e visite"]++;
                    }
                }

                if(in_array($etat, array("Soumis", "Paiement enregistré", "Paiement validé"))) {
                    $les_stat0[$etat]++; 
                    if($test_auteur) { $mes_stat[$etat]++; }
                }

                $les_stat0["All"] = $les_stat0["All"]+1;
                if($test_auteur) {
                    $mes_stat["All"]++;
                }

                // Stat sur dossier
                // --------------------------------------------
                $dossier=$dem->getDossier();
                if(!$dossier) { continue; }
                $affecte = $dossier->getAffecte(); $visite = $dossier->getVisite();
                $rapport = $dossier->getRapport(); $attestation = $dossier->getAttestation();

                $datePaiement=$dem->getPaiement()->getDatePaiement()->format('d-m-Y');;
                $dateNow=date("d-m-Y");
                $alerte5=0; $alerte15=0;
                if(!$attestation) {
                    $delta=$tools->nbjours_entre($datePaiement, $dateNow);
                    if($delta>5 && $delta<=15) { $alerte5=1; }
                    if($delta>15) { $alerte15=1; }
                    if($alerte5) { $les_alerte["Hors délais 5 jours"]++; }
                    if($alerte15) { $les_alerte["Hors délais 15 jours"]++; }
                }
                // Dossier Validé, à affecter
                if($affecte == 0 and $visite == 0 and $rapport == 0 and $attestation == 0) { 
                    $etatD="Dossier validé";
                }
                if($affecte == 1 and $visite == 0 and $rapport == 0 and $attestation == 0) { 
                    $etatD="Dossier affecté";
                }
                if($affecte == 1 and $visite == 1 and $rapport == 0 and $attestation == 0) { 
                    $etatD="Visite planifiée";
                }
                if($affecte == 1 and $visite == 1 and $rapport == 1 and $attestation == 0) { 
                    $etatD="Rapport élaboré";
                }
                if($affecte == 1 and $visite == 1 and $rapport == 1 and $attestation == 1) { 
                    $etatD="Rapport validé";
                }

                $les_stat0[$etatD]++; 
                if($test_auteur) {
                    $mes_stat[$etatD]++;
                    // Hors délais 5 j
                    if($alerte5) { $mes_alerte["Hors délais 5 jours"]++; }
                    // Hors délais 15 j
                    if($alerte15) { $mes_alerte["Hors délais 15 jours"]++; }
                }
            }

        // usually you'll want to make sure the user is authenticated first
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if($dash_page=="perso") { $linkp="index"; }
        if($dash_page=="stat_dem") { $linkp="index_stat"; }
        if($dash_page=="stat_paye") { $linkp="index_paye"; }
        return $this->render('main/'.$linkp.'.html.twig', [
            'mes_stat' => $mes_stat,
            'les_stat' => $les_stat0,
            'stat_paiement' => $stat_paiement,
            'mes_stat_paiement' => $mes_stat_paiement,
            'les_install' => $les_install,
            'last_client' => $last_client,

            'mes_alerte' => $mes_alerte,
            'les_alerte' => $les_alerte,

            'tools' => $tools,
        ]);
    }

    #[Route('/demandepop/{restr}', name: 'main_demandepop', methods: ['GET', 'POST'])]
    public function demandepop(String $restr, Tools $tools, Request $request, PaginatorInterface $pgn, ManagerRegistry $doctrine): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $idConn=$userConn->getId();
        $role=$userConn->getRoles()[0];
        $agent=null; $idAgent=null; $electricien=null; $agence=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
        }
        if($request->getSession()->get('agent')) {
            $agent=$request->getSession()->get('agent');
            if($agent) { $idAgent=$agent->getId(); }
        }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'statistiques');
        $request->getSession()->set('sousmenu', '');

        if($role=="ROLE_PUBLIC") { $val_filtre["a.created_by"]=$userConn->getId(); }
        if($role=="ROLE_CAISSIER") { $val_filtre["paiement_by"]=$userConn->getId(); }

        if($agent && $agence && in_array($role, array("ROLE_CONTROLEUR", "ROLE_REFERENT"))) { 
            $val_filtre["l.agence"]=$agence->getId(); 
        }
        $val_filtre["i.etat"]="Soumis";
        $val_filtre["a.soumis"]="1";
        // $val_filtre["a.rejet"]="0"; $val_filtre["a.accepte"]="1";

        $les_restr = [
            "All"=>array(), 
            "Domestiques"=>array('i.usages'=>'domestique'), 
            "Professionnelles"=>array('i.usages'=>'non_domestique'), 
            "ERP - ERT"=>array('i.usages'=>'erp_ert'), 
            "1ère visite"=>array('a.numeroPassage'=>'1'), 
            "2e visite"=>array('a.numeroPassage'=>'2'), 
            "Soumis"=>array('a.etat'=>'Soumis'), 
            "Paiement enregistré"=>array('a.etat'=>'Paiement enregistré'), 
            "Paiement validé"=>array('a.etat'=>'Paiement validé'), 
            
            "Dossier validé"=>array('d.affecte'=>'0', 'd.visite'=>'0', 'd.rapport'=>'0', 'd.attestation'=>'0', ),
            "Dossier affecté"=>array('d.affecte'=>'1', 'd.visite'=>'0', 'd.rapport'=>'0', 'd.attestation'=>'0', ),
            "Visite planifiée"=>array('d.affecte'=>'1', 'd.visite'=>'1', 'd.rapport'=>'0', 'd.attestation'=>'0', ),
            "Visite réalisée"=>array('d.affecte'=>'1', 'd.visite'=>'1', 'd.rapport'=>'1', 'd.attestation'=>'0', ),
            "Rapport élaboré"=>array('d.affecte'=>'1', 'd.visite'=>'1', 'd.rapport'=>'1', 'd.attestation'=>'0', ),
            "Rapport validé"=>array('d.affecte'=>'1', 'd.visite'=>'1', 'd.rapport'=>'1', 'd.attestation'=>'1', ),
        ];
        
        $restr2=""; $restr3="";
        $restr0=$restr;
        if(strstr($restr,";")) {
            $t_restr=explode(";", $restr);
            $restr=$t_restr[0];
            $restr_=$t_restr[1];
            if(strstr($restr_,"|")) {
                $t_restr=explode("|", $restr_);
                $restr2=$t_restr[0];
                $restr3=$t_restr[1];
            } else {
                $restr2=$restr_;
            }
        } else {
            if(strstr($restr,"|")) {
                $t_restr=explode("|", $restr);
                $restr=$t_restr[0];
                $restr3=$t_restr[1];
            }
        }
        $restr0=$restr; 
        if($restr2) { $restr0.=";$restr2"; }
        // if($restr3) { $restr0.="|$restr3"; }

        if(isset($les_restr[$restr])) {
            $val_filtre=array_merge($val_filtre, $les_restr[$restr]);
            if(isset($restr2) && $restr2) {
                $test_auteur="(v.created_by = $idConn or d.created_by = $idConn or a.created_by = $idConn or p.created_by = $idConn or p.updated_by = $idConn";
                if($idAgent) {
                    $test_auteur.=" or d.referent = $idAgent or d.controleur = $idAgent";
                }
                $test_auteur.=")";
                $val_filtre=array_merge($val_filtre,array($test_auteur." and 1"=>1));
                /*
                if(in_array($restr, array('All', 'Soumis', 'Domestiques', 'Professionnelles', 'ERP - ERT', '1ère visite', '2e visite'))) {
                    if($idAgent && $role=="ROLE_REFERENT") {
                        $val_filtre=array_merge($val_filtre, array("Référent Dossier"=>$idAgent));
                    } elseif($idAgent && $role=="ROLE_CONTROLEUR") {
                        $val_filtre=array_merge($val_filtre, array("Référent Dossier"=>$idAgent));
                    } elseif($idAgent && $role=="ROLE_RFO") {
                        $val_filtre=array_merge($val_filtre, array("Référent Dossier"=>$restr2));
                    } elseif($role=="ROLE_CAISSIER" || $role=="ROLE_COMPTABLE" || $role=="ROLE_DAF" || $role=="ROLE_ADMIN") {
                        $val_filtre=array_merge($val_filtre, array("Paiement"=>$restr2));
                    } else {
                        $val_filtre=array_merge($val_filtre, array("a.created_by"=>$restr2));
                    }
                }
                if(in_array($restr, array('Paiement enregistré'))) {
                    $val_filtre=array_merge($val_filtre, array("Paiement enregistré"=>$restr2));
                }
                if(in_array($restr, array('Paiement validé'))) {
                    $val_filtre=array_merge($val_filtre, array("Paiement validé"=>$restr2));
                }
                if(in_array($restr, array('Dossier validé'))) {
                    if($idAgent && $role=="ROLE_REFERENT") {
                        $val_filtre=array_merge($val_filtre, array("Référent Dossier"=>$idAgent));
                    } elseif($role=="ROLE_CAISSIER" || $role=="ROLE_COMPTABLE" || $role=="ROLE_DAF" || $role=="ROLE_ADMIN") {
                        $val_filtre=array_merge($val_filtre, array("Paiement"=>$restr2));
                    } elseif($role=="ROLE_ADMIN" || $role=="ROLE_RFO") {
                        $val_filtre=array_merge($val_filtre, array("RFO Dossier"=>$restr2));
                    } else {
                        $val_filtre=array_merge($val_filtre, array("a.created_by"=>$restr2));
                    }
                }
                if(in_array($restr, array('Dossier affecté'))) {
                    if($idAgent && $role=="ROLE_REFERENT") {
                        $val_filtre=array_merge($val_filtre, array("Référent Dossier"=>$idAgent));
                    } elseif($idAgent && $role=="ROLE_RFO" || $role=="ROLE_ADMIN") {
                        $val_filtre=array_merge($val_filtre, array("RFO Dossier"=>$restr2));
                    } elseif($idAgent && $role=="ROLE_CONTROLEUR") {
                        $val_filtre=array_merge($val_filtre, array("Controleur Dossier"=>$idAgent));
                    } elseif($role=="ROLE_CAISSIER" || $role=="ROLE_COMPTABLE" || $role=="ROLE_DAF" || $role=="ROLE_ADMIN") {
                        $val_filtre=array_merge($val_filtre, array("Paiement"=>$restr2));
                    } else {
                        $val_filtre=array_merge($val_filtre, array("a.created_by"=>$restr2));
                    }
                }
                if(in_array($restr, array('Rapport validé', 'Visite planifiée', 'Rapport élaboré'))) {
                    if($idAgent && $role=="ROLE_REFERENT") {
                        $val_filtre=array_merge($val_filtre, array("Référent Dossier"=>$idAgent));
                    } elseif($idAgent && $role=="ROLE_RFO" || $role=="ROLE_ADMIN") {
                        $val_filtre=array_merge($val_filtre, array("RFO Dossier"=>$restr2));
                    } elseif($idAgent && $role=="ROLE_CONTROLEUR") {
                        $val_filtre=array_merge($val_filtre, array("Controleur Dossier"=>$idAgent));
                    } elseif($role=="ROLE_CAISSIER" || $role=="ROLE_COMPTABLE" || $role=="ROLE_DAF" || $role=="ROLE_ADMIN") {
                        $val_filtre=array_merge($val_filtre, array("Paiement"=>$restr2));
                    } elseif($role=="ROLE_CONTROLEUR" || $role=="ROLE_ADMIN") {
                        $val_filtre=array_merge($val_filtre, array("v.created_by"=>$restr2));
                    } else {
                        $val_filtre=array_merge($val_filtre, array("v.created_by"=>$restr2));
                    }
                }
                */
            } 
        }
        else {
            $val_filtre=array_merge($val_filtre, array("0"=>"1"));
        }
    // dd($val_filtre);

        $val_rech=$restr3;
        // if($request->request->count()) {
        //     $val_rech = $request->request->get("val_rech");
        // }
        
        $les_demande = $em->getRepository(Demande::class)->findByRestr2($val_rech, $val_filtre, $orderBy, $page);
        $list=$les_demande;
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);


        // usually you'll want to make sure the user is authenticated first
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('main/demandepop.html.twig', [
            'les_demande' => $list,
            'titre'=> $restr,
            'val_rech' => $val_rech,
            'restr' => $restr0,

            'tools'=> $tools,
        ]);
    }    

    #[Route('/statistiques', name: 'stat', methods: ['GET', 'POST'])]
    public function stat_demande(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"AllSoumis"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agent=null; $electricien=null; $agence=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'main');
        $request->getSession()->set('sousmenu', '');
        $request->getSession()->set('page_liste_dossier', 'stat');
        $request->getSession()->set('page_liste_demande', 'stat');

        $restr_dem=array(); $restr_dos=array();

        if($role=="ROLE_PUBLIC") {
            $restr_dem=array("created_by"=>$userConn->getId());
        }

        if($role=="ROLE_CAISSIER") {
            $restr_dem=array("paiement_by"=>$userConn->getId());
        }

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array("ROLE_CONTROLEUR", "ROLE_REFERENT"))) { 
            $val_agence=$agence->getId(); $val_filtre["agence"] = $val_agence;
        }
        $les_agence = $em->getRepository(Agence::class)->findBy(array(), array("nom"=>"asc", ));

        $val_usage=""; 
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=""; 
        $les_statut = array("Paiement enregistré", "Paiement validé", "En Attente Validation Soumission", "Validé, En Attente Affectation", "Affecté, En Attente Visite", "Visite Planifiée, En Attente de Rapport", "Visite Réalisée, En Attente de Confirmation Rapport", "Rapport confirmé, Clôture",);

        $val_controleur = $request->request->get("val_controleur");
        if($val_controleur) { $val_filtre["controleur"] = $val_controleur; }
        
        $val_referent = $request->request->get("val_referent");
        if($val_referent) { $val_filtre["referent"] = $val_referent; }
        
        $val_passage = $request->request->get("val_passage");
        if($val_passage) { $val_filtre["passage"] = $val_passage; }
        
        $val_controleur=""; 
        $les_controleur = $em->getRepository(Agent::class)->findByProfil("controleur");

        $val_referent=""; 
        $les_referent = $em->getRepository(Agent::class)->findByProfil("referent");

        $val_passage=""; 
        $les_passage = array("1"=>"1ère visite", "2"=>"2e visite");

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            if($val_agence) { $val_filtre["agence"] = $val_agence; }
            
            $val_controleur = $request->request->get("val_controleur");
            if($val_controleur) { $val_filtre["controleur"] = $val_controleur; }
            
            $val_referent = $request->request->get("val_referent");
            if($val_referent) { $val_filtre["referent"] = $val_referent; }
            
            $val_passage = $request->request->get("val_passage");
            if($val_passage) { $val_filtre["passage"] = $val_passage; }
            
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
            "1ère visite"=>0, 
            "2e visite"=>0, 
            "En saisie"=>0, 
            "Soumis, en attente paiement"=>0, 
            "Payé, en attente confirmation paiement"=>0, 
            "Payé, en attente validation"=>0, 
            "Dossier Validé, En Attente Affectation"=>0,
            "Dossier Affecté, En Attente Visite"=>0,
            "Visite Planifiée, En Attente de Rapport"=>0,
            "Visite Réalisée, En Attente de validation Rapport"=>0,
            "Rapport validé, dossier clôturé"=>0,
        ];

        foreach ($les_dossier as $dossier) {
            $affecte = $dossier->getAffecte(); $visite = $dossier->getVisite();
            $rapport = $dossier->getRapport(); $attestation = $dossier->getAttestation();

            if($affecte == 0 and $visite == 0 and $rapport == 0 and $attestation == 0) { $les_stat0["Dossier Validé, En Attente Affectation"] = $les_stat0["Dossier Validé, En Attente Affectation"]+1; }
            if($affecte == 1 and $visite == 0 and $rapport == 0 and $attestation == 0) { $les_stat0["Dossier affecté"] = $les_stat0["Dossier Affecté, En Attente Visite"]+1; }
            if($affecte == 1 and $visite == 1 and $rapport == 0 and $attestation == 0) { $les_stat0["Visite Planifiée, En Attente de Rapport"] = $les_stat0["Visite Planifiée, En Attente de Rapport"]+1; }
            if($affecte == 1 and $visite == 1 and $rapport == 1 and $attestation == 0) { $les_stat0["Visite Réalisée, En Attente de validation Rapport"] = $les_stat0["Visite Réalisée, En Attente de validation Rapport"]+1; }
            if($affecte == 1 and $visite == 1 and $rapport == 1 and $attestation == 1) { $les_stat0["Rapport validé, dossier clôturé"] = $les_stat0["Rapport validé, dossier clôturé"]+1; }
        }

        $list=$les_demande;
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);


        // usually you'll want to make sure the user is authenticated first
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('main/stat.html.twig', [
            'les_demande' => $list,
            'val_rech' => $val_rech,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'les_controleur'=> $les_controleur,
            'val_controleur'=> $val_controleur,

            'les_referent'=> $les_referent,
            'val_referent'=> $val_referent,

            'les_passage'=> $les_passage,
            'val_passage'=> $val_passage,


            'tools'=> $tools,
        ]);
    }    
}
