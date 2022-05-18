<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Entity\Dossier;
use App\Entity\Electricien;
use App\Entity\Installation;
use App\Entity\Utilisateur;
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
        $em = $doctrine->getManager();

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'main');
        $request->getSession()->set('sousmenu', '');

        $restr_dem=array(); $restr_dos=array();

        $user = $this->getUser();
        if($user) {
            $utilisateur=$em->getRepository(Utilisateur::class)->find($user->getId());
            $role=$utilisateur->getRoles()[0];
            if($role=="ROLE_PUBLIC") {
                $restr_dem=array("created_by"=>$utilisateur->getId());
            }
        }
        
        $les_install = $em->getRepository(Installation::class)->findByEtat("Saisie");
        $les_demande = $em->getRepository(Demande::class)->findBy($restr_dem);
        $les_dossier = $em->getRepository(Dossier::class)->findBy($restr_dos);

        $last_demande = $em->getRepository(Demande::class)->findBy(array('etat' => 'Soumis'),array('dateCreation' => 'DESC'),10 ,0);
        $last_client = $em->getRepository(Electricien::class)->findBy(array(),array('id' => 'DESC'),5 ,0);

        $les_stat0 = [
            "All"=>0, 
            "Domestiques"=>0, 
            "Non Domestiques"=>0, 
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
            if($usage=="non_domestique") { $les_stat0["Non Domestiques"]=$les_stat0["Non Domestiques"]+1; }

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


        // usually you'll want to make sure the user is authenticated first
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('main/index.html.twig', [
            'les_stat' => $les_stat0,
            'les_install' => $les_install,
            'last_client' => $last_client,
        ]);
    }
}
