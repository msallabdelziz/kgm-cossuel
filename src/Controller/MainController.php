<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Entity\Dossier;
use App\Entity\Electricien;
use App\Entity\Installation;
use App\Repository\DemandeRepository;
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
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'main');
        $request->getSession()->set('sousmenu', '');

        $em = $doctrine->getManager();
        $les_install = $em->getRepository(Installation::class)->findByEtat("Saisie");
        $les_demande = $em->getRepository(Demande::class)->findAll();
        $les_dossier = $em->getRepository(Dossier::class)->findAll();

        $last_demande = $em->getRepository(Demande::class)->findBy(array('etat' => 'Soumis'),array('dateCreation' => 'DESC'),10 ,0);
        $last_client = $em->getRepository(Electricien::class)->findBy(array(),array('id' => 'DESC'),5 ,0);

        $les_stat0 = [
            "All"=>0, 
            "Domestiques"=>0, 
            "Non Domestiques"=>0, 
            "En saisie"=>0, 
            "Soumis"=>0, 
            "Paiement enregistré"=>0, 
            "Paiement validé"=>0, 
            "Demande validée"=>0,
            "Dossier créé"=>0,
            "Dossier affecté"=>0,
            "Dossier avec visite planifiée"=>0,
            "Dossier avec rapport établi"=>0,
            "Dossier cloturé"=>0,
        ];

        foreach ($les_demande as $demande) {
            $etat = $demande->getEtat();
            $usage = $demande->getInstallation()->getUsages();
            if($usage=="domestique") { $les_stat0["Domestiques"]=$les_stat0["Domestiques"]+1; }
            if($usage=="non_domestique") { $les_stat0["Non Domestiques"]=$les_stat0["Non Domestiques"]+1; }
            $les_stat0[$etat] = $les_stat0[$etat]+1;
            $les_stat0["All"] = $les_stat0["All"]+1;

        }

        foreach ($les_dossier as $dossier) {
            $etat = $dossier->getEtat();
            if($etat=="Affectation") { $les_stat0["Dossier affecté"] = $les_stat0["Dossier affecté"]+1; }
            if($etat=="Visite") { $les_stat0["Dossier avec visite planifiée"] = $les_stat0["Dossier avec visite planifiée"]+1; }
            if($etat=="Rapport") { $les_stat0["Dossier avec rapport établi"] = $les_stat0["Dossier avec rapport établi"]+1; }
            if($etat=="Attestation") { $les_stat0["Dossier cloturé"] = $les_stat0["Dossier cloturé"]+1; }
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
