<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\AgenceRepository;
use App\Entity\Agence;
use App\Entity\Localite;
use App\Form\AgenceType;
use App\PDF\ListePDF;
use App\Repository\LocaliteRepository;
use App\Services\Tools;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

#[Route('/agence', name: 'app_agence_')]
class AgenceController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Request $request, AgenceRepository $agenceRepository, LocaliteRepository $localiteRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'agence');
        $request->getSession()->set('sousmenu', '');
        
        $val_rech=""; 
        
        $val_filtre = array(); $page = 0; $orderBy = "";
        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            $val_localite = $request->request->get("val_localite");
        }

        $ag = $agenceRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        return $this->render('agence/index.html.twig', [
            'controller_name' => 'AgenceController',
            'les_agence'=> $ag,
            'val_rech'=> $val_rech,
        ]);
    }

    #[Route('/pdf', name: 'pdf')]
    public function pdf(AgenceRepository $agenceRepository)
    {
        // On active la classe une fois pour toutes les pages suivantes
        // Format portrait (>P) ou paysage (>L), en mm (ou en points > pts), A4 (ou A5, etc.)
        $pdf = new ListePDF('P','mm','A4');

        // Nouvelle page A4 (incluant ici logo, titre et pied de page)
        $pdf->AddPage();
        // Polices par défaut : Helvetica taille 9
        $pdf->SetFont('Helvetica','B',9);
        // Couleur par défaut : noir
        $pdf->SetTextColor(0);
        // Compteur de pages {nb}
        $pdf->AliasNbPages();

        // Titre gras (B) police Helbetica de 11
        $pdf->SetFont('Helvetica','B',11);
        // fond de couleur gris (valeurs en RGB)
        $pdf->setFillColor(255,255,255);
        // position du coin supérieur gauche par rapport à la marge gauche (mm)
        $pdf->SetX(70);
        // Texte : 60 >largeur ligne, 8 >hauteur ligne. Premier 0 >pas de bordure, 1 >retour à la ligneensuite, C >centrer texte, 1> couleur de fond ok  
        $pdf->Cell(60,8,'LISTE DES AGENCES COSSUEL',0,1,'C',1);
        // Saut de ligne 10 mm
        $pdf->Ln(5);    

        // AFFICHAGE EN-TÊTE DU TABLEAU
        // Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (70 mm)
        $position_entete = 60;
        // police des caractères
        $pdf->SetFont('Helvetica','',14);
        $pdf->SetTextColor(0);
        // on affiche les en-têtes du tableau
        $pdf->SetDrawColor(255,215,0); // Couleur du fond RVB
        $pdf->SetFillColor(255,215,0); // Couleur des filets RVB
        $pdf->SetTextColor(0); // Couleur du texte noir
        $pdf->SetY($position_entete);
        // position de colonne 1 (10mm à gauche)  
        $pdf->SetX(10);
        $pdf->Cell(60,8,'Code',1,0,'C',1);  // 60 >largeur colonne, 8 >hauteur colonne
        // position de la colonne 2 (70 = 10+60)
        $pdf->SetX(70); 
        $pdf->Cell(60,8,'Nom',1,0,'C',1);
        // position de la colonne 3 (130 = 70+60)
        $pdf->SetX(130); 
        $pdf->Cell(60,8,'Adresse',1,0,'C',1);

        $pdf->Ln(); // Retour à la ligne

        $position_detail = 68; // Position ordonnée = $position_entete+hauteur de la cellule d'en-tête (60+8)

        $result2 = $agenceRepository->findBy([],['code'=>'asc']);

        for ($i=0; $i<count($result2);$i++) {
            // position abcisse de la colonne 1 (10mm du bord)
            $pdf->SetY($position_detail);
            $pdf->SetX(10);
            $pdf->MultiCell(60,8,utf8_decode($result2[$i]->getCode()),1,'C');
                // position abcisse de la colonne 2 (70 = 10 + 60)  
            $pdf->SetY($position_detail);
            $pdf->SetX(70); 
            $pdf->MultiCell(60,8,utf8_decode($result2[$i]->getNom()),1,'C');
            // position abcisse de la colonne 3 (130 = 70+ 60)
            $pdf->SetY($position_detail);
            $pdf->SetX(130); 
            $pdf->MultiCell(60,8,$result2[$i]->getAdresse(),1,'C');

            // on incrémente la position ordonnée de la ligne suivante (+8mm = hauteur des cellules)  
            $position_detail += 8; 
        }

        // $pdf->Output('agence.pdf','I');
        return new Response($pdf->Output('liste_agence.pdf','I'), 200, array(
            'Content-Type' => 'application/pdf'));

    }

    #[Route('/agence_excel', name:'excel')]
    public function genExcel(ManagerRegistry $doctrine, array $headers = [], $fileName = 'liste.xlsx'): Response
    {
        // {#-----------Generation de fichiers Excel-------------#} 
        $spreadsheet = new Spreadsheet();

        $lib="Agence"; $fileName='liste_'.$lib;
        $i=2;
        /* @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet */
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A'.$i, 'CODE ');
        $sheet->setCellValue('B'.$i, 'NOM ');
        $sheet->setCellValue('C'.$i, 'TELEPHONE ');
        $sheet->setCellValue('D'.$i, 'ADRESS ');
        $sheet->setTitle("Liste des Agences");

        $em = $doctrine->getManager();
        $list = $em->getRepository(Agence::class)->findAll();

        $i = 3;
        foreach ($list as $u ) {
            $sheet->setCellValue('A'.$i , $u->getCode());
            $sheet->setCellValue('B'.$i ,  $u->getNom());
            $sheet->setCellValue('C'.$i ,  $u->getTelephone());
            $sheet->setCellValue('D'.$i ,  $u->getAdresse());
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

    #[Route('/add', name: 'add')]
    public function create(Request $request, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $ag = new Agence();
        $form = $this->createForm(AgenceType::class, $ag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agenceRepository->add($ag);
            return $this->redirectToRoute('app_agence_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('agence/add.html.twig', [
            'agence' => $ag,
            'les_agence' => $agenceRepository->findBy([],['code'=>'asc']),
            'agenceForm' => $form,
        ]);

    }

    #[Route('/update/{id}', name: 'edit')]
    public function update(Agence $id,Request $request, AgenceRepository $agenceRepository, Tools $tools): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $agence = $agenceRepository->find($id);
        $form = $this->createForm(AgenceType::class, $agence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agenceRepository->add($agence);
            return $this->redirectToRoute("app_agence_show", ['id'=>$agence->getId()]);
        }

        return $this->renderForm('agence/edit.html.twig', [
            'les_agence' => $agenceRepository->findBy([],['code'=>'asc']),
            'agence' => $agence,
            'agenceForm' => $form,
        ]);

    }

    #[Route('/localite/{id}', name: 'localite')]
    public function addlocalite(Agence $id, ManagerRegistry $doctrine, Request $request, LocaliteRepository $localiteRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager();
        $agence = $agenceRepository->find($id);
        $form = $this->createFormBuilder()
        ->add('localite', EntityType::class, [
            'mapped' => false,
            'multiple' => true,
            'attr' => [
                'class' => 'form-select',
                'size' => '10'
            ],
            'query_builder' => function (LocaliteRepository $er) use ($agence) {
                return $er->createQueryBuilder('loc')
                ->where('loc.agence is null')
                ;
            },
            'class' => Localite::class,
            'label' => 'Localités couvertes',
            'group_by' => 'departement',
            'choice_label' => function ($loc) {
                return "[".$loc->getCode()."] ".$loc->getNom();
            },
            'required' => false,
            'data' => $agence->getLocalite()
        ])
        ->getForm();

        $form->handleRequest($request);

        $les_localite0 = $agence->getLocalite();
        if ($form->isSubmitted() && $form->isValid()) {
            $les_localite1 = $form->get('localite')->getData();

            foreach($les_localite1 as $loc) { 
                $loc_ = $localiteRepository->find($loc);
                $loc_->setAgence($agence);
                $localiteRepository->add($loc_);
                // $agence = $agence->addLocalite($loc_);
                // $agenceRepository->add($agence);
            }            

            return $this->redirectToRoute("app_agence_show", ['id'=>$agence->getId()]);
        }

        return $this->renderForm('agence/localite.html.twig', [
            'les_agence' => $agenceRepository->findBy([],['code'=>'asc']),
            'agence' => $agence,
            'agenceForm' => $form,
        ]);

    }

    #[Route('{id}/dellocalite/{idL}', name: 'localitedel')]
    public function dellocalite(Agence $id, Localite $idL, ManagerRegistry $doctrine, Request $request, LocaliteRepository $localiteRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager();
        $agence = $agenceRepository->find($id);
        $localite = $localiteRepository->find($idL);
        $localite = $localite->setAgence(null);
        $em->persist($localite);
        $em->flush();
        return $this->redirectToRoute("app_agence_show", ['id'=>$agence->getId()]);
    }

    #[Route('/show/{id}', name: 'show')]
    public function show(ManagerRegistry $doctrine, Agence $agence, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $agence = $doctrine->getRepository(Agence::class)->find($agence->getId());

        if (!$agence) {
            throw $this->createNotFoundException(
                'N\'EXISTE PAS'
            );
        }

        return $this->render('agence/show.html.twig', [
            'les_agence' => $agenceRepository->findBy([],['code'=>'asc']),
            'agence' => $agence,
        ]);
    }


    #[Route('/delete/{id}', name: 'delete')]
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agence::class)->find($id);
        $entityManager->remove($ag);
        $entityManager->flush();
        return new Response('Suppression effectué!');
    }




}
