<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Entity\Electricien;
use App\Entity\Installation;
use App\Form\ElectricienType;
use App\Repository\ElectricienRepository;
use App\Repository\InstallationRepository;
use App\Repository\LocaliteRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Fpdf\ClientPDF;

#[Route('/electricien', name: 'app_electricien_')]
class ElectricienController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET', 'POST'])]
    public function index(Request $request, PaginatorInterface $pgn, ElectricienRepository $electricienRepository, LocaliteRepository $localiteRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'electricien');
        $request->getSession()->set('sousmenu', '');

        $val_localite=""; 
        $les_localite = $localiteRepository->findBy(array(), array("nom"=>"asc", ));

        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            $val_localite = $request->request->get("val_localite");
            if($val_localite) { $val_filtre["localite"] = $val_localite; }
        }

        $les_electricien = $electricienRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($les_electricien, $request->query->getInt('page', 1), 20);


        return $this->render('electricien/index.html.twig', [
            'les_electricien' => $list,
            'val_rech' => $val_rech,

            'les_localite'=> $les_localite,
            'val_localite'=> $val_localite,
        ]);
    }

    #[Route('/add', name: 'add', methods: ['GET', 'POST'])]
    public function new(Request $request, ElectricienRepository $electricienRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $electricien = new Electricien();
        $form = $this->createForm(ElectricienType::class, $electricien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $electricienRepository->add($electricien);
            return $this->redirectToRoute("app_electricien_show", ['id'=>$electricien->getId()]);
        }

        return $this->renderForm('electricien/new.html.twig', [
            'les_electricien' => $electricienRepository->findAll(),
            'electricienForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(Electricien $electricien, ManagerRegistry $doctrine, ElectricienRepository $electricienRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em=$doctrine->getManager();
        $les_install = $em->getRepository(Installation::class)->findBy(array("electricien"=>$electricien->getId()));       

        return $this->render('electricien/show.html.twig', [
            'les_electricien' => $electricienRepository->findAll(),
            'electricien' => $electricien,
            'les_install' => $les_install,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Electricien $electricien, ElectricienRepository $electricienRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $form = $this->createForm(ElectricienType::class, $electricien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $electricienRepository->add($electricien);
            return $this->redirectToRoute("app_electricien_show", ['id'=>$electricien->getId()]);
        }

        return $this->renderForm('electricien/edit.html.twig', [
            'les_electricien' => $electricienRepository->findAll(),
            'electricien' => $electricien,
            'electricienForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Electricien $electricien, ElectricienRepository $electricienRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$electricien->getId(), $request->request->get('_token'))) {
            $electricienRepository->remove($electricien);
        }

        return $this->redirectToRoute('app_electricien_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/pdf', name: 'pdf')]
    public function pdf(ClientPDF $pdf, ElectricienRepository $elecRepository)
    {
        $pdf = new ClientPDF('L','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Helvetica','B',9);
        $pdf->SetTextColor(0);
        // Compteur de pages {nb}
        $pdf->AliasNbPages();

        // AFFICHAGE EN-TÊTE DU TABLEAU
        // Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (70 mm)
        $position_entete = 60;
        // police des caractères
        $pdf->SetFont('Helvetica','',9);
        $pdf->SetTextColor(0);
        // on affiche les en-têtes du tableau
        $pdf->SetDrawColor(255,215,0); // Couleur du fond RVB
        $pdf->SetFillColor(255,215,0); // Couleur des filets RVB
        $pdf->SetTextColor(0); // Couleur du texte noir
        $pdf->SetY($position_entete);
        // position de la colonne 2 (70 = 10+60)
        $pdf->SetX(35); 
        $pdf->Cell(40,8,'Nom',1,0,'C',1);
        // position de colonne 1 (10mm à gauche)  
        $pdf->SetX(5);
        $pdf->Cell(30,8,utf8_decode('Prénom'),1,0,'C',1);  // 60 >largeur colonne, 8 >hauteur colonne
        // position de la colonne 3 (130 = 70+60)
        $pdf->SetX(75); 
        $pdf->Cell(33,8,'Adresse',1,0,'C',1);
         // position de la colonne 3 (130 = 70+60)
         $pdf->SetX(108); 
         $pdf->Cell(33,8,utf8_decode('Téléphone'),1,0,'C',1);
          // position de la colonne 3 (130 = 70+60)
        $pdf->SetX(141); 
        $pdf->Cell(63,8,utf8_decode('Localité'),1,0,'C',1);

        //$pdf->Ln(); // Retour à la ligne

        $position_detail = 68; // Position ordonnée = $position_entete+hauteur de la cellule d'en-tête (60+8)
        $result2 = $elecRepository->findBy([],['nom'=>'asc']);
        //dd($result2[0]->getCode());
        $ligne=0;
        for ($i=0; $i<count($result2);$i++) {
            $ligne = $ligne+1;
                if ($ligne == 15){
                    $pdf->AddPage();
                    $ligne = 0;
                    $position_detail=68;
                }
            $pdf->SetY($position_detail);
            $pdf->SetX(35); 
            $pdf->MultiCell(40,8,utf8_decode($result2[$i]->getNom()),1,'C');
            // position abcisse de la colonne 1 (10mm du bord)
            $pdf->SetY($position_detail);
            $pdf->SetX(5);
            $pdf->MultiCell(30,8,utf8_decode($result2[$i]->getPrenom()),1,'C');
            // position abcisse de la colonne 3 (70 = 40+ 30)
            $pdf->SetY($position_detail);
            $pdf->SetX(75); 
            $pdf->MultiCell(33,8,$result2[$i]->getAdresse(),1,'C');
            // position abcisse de la colonne 3 (100 = 70+ 30)
            $pdf->SetY($position_detail);
            $pdf->SetX(108); 
            $pdf->MultiCell(33,8,$result2[$i]->getTelephone(),1,'C');
            // position abcisse de la colonne 3 (130 = 100+ 30)
            $pdf->SetY($position_detail);
            $pdf->SetX(141); 
            $pdf->MultiCell(63,8,'aaaa',1,'C');

            // on incrémente la position ordonnée de la ligne suivante (+8mm = hauteur des cellules)  
            $position_detail += 8; 
            }
            
            $pdf->Output('electricien.pdf','I');
    }
}
