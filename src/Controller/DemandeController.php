<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Entity\Agent;
use App\Entity\Demande;
use App\Entity\Dossier;
use App\Repository\AgentRepository;
use App\Repository\DemandeRepository;
use App\Repository\DossierRepository;
use App\Repository\InstallationRepository;
use App\Repository\PaiementRepository;
use App\Services\Tools;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Fpdf\DemandePDF;

#[Route('/demande')]
class DemandeController extends AbstractController
{
    #[Route('/{id}', name: 'app_demande_show', methods: ['GET'])]
    public function show(Demande $demande, ManagerRegistry $doctrine, DemandeRepository $demandeRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();
        return $this->render('demande/show.html.twig', [
            'paiement' => $paiement,

            'tools' => $tools,
        ]);
    }

    #[Route('/pop/{id}', name: 'app_demande_showpop', methods: ['GET'])]
    public function showpop(Demande $demande, ManagerRegistry $doctrine, DemandeRepository $demandeRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();
        return $this->render('demande/showpop.html.twig', [
            'paiement' => $paiement,

            'tools' => $tools,
        ]);
    }

    #[Route('/{id}/histo', name: 'app_demande_histo', methods: ['GET'])]
    public function showtime(Demande $demande, EntityManagerInterface $em, DemandeRepository $demandeRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();
        $tools = new Tools($em);
        if($paiement) {
            return $this->render('dossier/showtime.html.twig', [
                'demande' => $demande,
                'paiement' => $paiement,
                'tools' => $tools,
            ]);
        } else {
            return $this->render('dossier/showtime.html.twig', [
                'demande' => $demande,
                'tools' => $tools,
            ]);
        }
    }

    #[Route('/{id}/valid', name: 'app_demande_valid')]
    public function valid(Request $request, Demande $demande, DemandeRepository $demandeRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository, InstallationRepository $installationRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();

        $localite=$demande->getInstallation()->getLocalite();
        $dossier = new Dossier;
        $dossier->setDemande($demande);
        $form = $this->createFormBuilder($dossier)
        ->add('referent', EntityType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-select'
            ],
            'query_builder' => function (AgentRepository $er) use ($localite) {
                return $er->createQueryBuilder('agt')
                ->select('agt')
                ->join('App\Entity\Localite', 'loc', 'WITH', 'agt.id_agence = loc.agence')
                ->join('App\Entity\Profil', 'prof', 'WITH', 'agt.profil = prof.id')
                ->where('loc.id = :val')
                ->andWhere('prof.code = :val2')
                ->setParameter('val', $localite->getId())
                ->setParameter('val2', 'referent')
                ;
            },
            'class' => Agent::class,
            'label' => 'Désignation du Référent chargé du dossier',
            'choice_label' => function ($agent) {
                return "[".$agent->getMatricule()."] ".$agent->getPrenom()." ".$agent->getNom();
            },
            'required' => true
        ])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 10;
            $installation=$installationRepository->find($demande->getInstallation());
            $installation->setStep($step);
            $installationRepository->add($installation);

            $demande->setEtat("Demande validée");
            $demandeRepository->add($demande);

            $id_agent=$form->get('referent')->getData();
            if($id_agent) {
                $agent=$agentRepository->find($id_agent);
                $dossier->setReferent($agent);
            } 
            $dossier->setDateCreation(new DateTime());
            $dossier->setCreatedby($this->getUser()->getId());
            $dossier->setNum($demande->getNumero());
            $dossierRepository->add($dossier);
            $demande->setDossier($dossier);
            $demandeRepository->add($demande);

            $this->addFlash("success", "La demande a été validée. Le dossier est créé et affecté au référent ".$dossier->getReferent()." !");
            return $this->redirectToRoute('app_demande_show', array('id' => $demande->getId())); 
        }

        return $this->renderForm('demande/valid.html.twig', [
            'demande' => $demande,
            'paiement' => $paiement,
            'dossierForm' => $form,
        ]);
    }
    
    #[Route('/pdfE', name: 'pdfE')]
    public function pdfE(DemandePDF $pdf, DemandeRepository $demandeRepository)
    {
        $pdf = new DemandePDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Helvetica','B',9);
        $pdf->SetTextColor(0);
        $pdf->AliasNbPages();

        // AFFICHAGE EN-TÊTE DU TABLEAU
        // Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (70 mm)
        $position_entete = 60;
        // police des caractères
        $pdf->SetFont('Helvetica','N',9);
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(255,215,0);
        $pdf->SetFillColor(255,215,0);
        $pdf->SetTextColor(0);
        $pdf->SetY($position_entete);
        // position de la colonne 2 (70 = 10+60)
        $pdf->SetX(35); 
        $pdf->Cell(40,8,'N° demande',1,0,'C',1);
        // position de colonne 1 (10mm à gauche)  
        $pdf->SetX(5);
        $pdf->Cell(30,8,utf8_decode('Usage'),1,0,'C',1);  // 60 >largeur colonne, 8 >hauteur colonne
        // position de la colonne 3 (130 = 70+60)
        $pdf->SetX(75); 
        $pdf->Cell(33,8,'Localité',1,0,'C',1);
         // position de la colonne 3 (130 = 70+60)
         $pdf->SetX(108); 
         $pdf->Cell(33,8,utf8_decode('Agence'),1,0,'C',1);
          // position de la colonne 3 (130 = 70+60)
        $pdf->SetX(141); 
        $pdf->Cell(63,8,utf8_decode('Electricien'),1,0,'C',1);

        $pdf->Ln(); // Retour à la ligne

        $position_detail = 68; // Position ordonnée = $position_entete+hauteur de la cellule d'en-tête (60+8)
        $result2 = $demandeRepository->findBy([],['id'=>'asc']);
        for ($i=0; $i<count($result2);$i++) {
            // position abcisse de la colonne 2 (40 = 10 +30)  
            $pdf->SetY($position_detail);
            $pdf->SetX(35); 
            $pdf->MultiCell(40,8,$result2[$i]->getId(),1,'C');
            // position abcisse de la colonne 1 (10mm du bord)
            $pdf->SetY($position_detail);
            $pdf->SetX(5);
            $pdf->MultiCell(30,8,utf8_decode($result2[$i]->getInstallation()),1,'C');
            // position abcisse de la colonne 3 (70 = 40+ 30)
            $pdf->SetY($position_detail);
            $pdf->SetX(75); 
            $pdf->MultiCell(33,8,utf8_decode($result2[$i]->getAdresse()),1,'C');
            // position abcisse de la colonne 3 (100 = 70+ 30)
            $pdf->SetY($position_detail);
            $pdf->SetX(108); 
            $pdf->MultiCell(33,8,$result2[$i]->getTelephone(),1,'C');
            // position abcisse de la colonne 3 (130 = 100+ 30)
            $pdf->SetY($position_detail);
            $pdf->SetX(141); 
            $pdf->MultiCell(63,8,utf8_decode($result2[$i]->getLocalite()),1,'C');

            // on incrémente la position ordonnée de la ligne suivante (+8mm = hauteur des cellules)  
            $position_detail += 8; 
        }
        
        $pdf->Output('demande.pdf','I');
    }

    

}
