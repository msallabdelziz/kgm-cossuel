<?php

namespace App\Controller;

use App\Entity\Proprietaire;
use App\Form\ProprietaireType;
use App\Repository\LocaliteRepository;
use Doctrine\Persistence\ManagerRegistry;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Repository\ProprietaireRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/proprietaire')]
class ProprietaireController extends AbstractController
{
    #[Route('/', name: 'app_proprietaire_index', methods: ['GET', 'POST'])]
    public function index(Request $request, ProprietaireRepository $proprietaireRepository, LocaliteRepository $localiteRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'proprietaire');
        $request->getSession()->set('sousmenu', '');

        $val_localite=""; 
        $les_localite = $localiteRepository->findBy(array(), array("nom"=>"asc", ));

        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            $val_localite = $request->request->get("val_localite");
            if($val_localite) { $val_filtre["localite"] = $val_localite; }
        }

        $les_proprietaire = $proprietaireRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);

        return $this->render('proprietaire/index.html.twig', [
            'les_proprietaire' => $les_proprietaire,
            'val_rech' => $val_rech,

            'les_localite'=> $les_localite,
            'val_localite'=> $val_localite,
        ]);

        return $this->render('proprietaire/index.html.twig', [
            'les_proprietaire' => $proprietaireRepository->findAll(),
        ]);
    }

     //{#----------------------------------Excel File---------------------------------#}

     #[Route('/prop_excel', name: 'app_prop_excel')]
     public function genExcel(ManagerRegistry $doctrine, array $headers = [],
     $fileName = 'data.xlsx'): Response
     {
         // {#-----------Generation de fichiers Excel-------------#} 
         $spreadsheet = new Spreadsheet();
 
         /* @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet */
         $sheet = $spreadsheet->getActiveSheet();
         $sheet->setCellValue('A1', 'ID ');
         $sheet->setCellValue('B1', 'NOM ');
         $sheet->setCellValue('C1', 'PRENOM ');
         $sheet->setCellValue('D1', 'ADRESS ');
         $sheet->setTitle("Liste des Proprietaires");
 
         $em = $doctrine->getManager();
         $listProprietaire = $em->getRepository(
             Proprietaire::class
         )->findAll();
 
          $i = 3;
             foreach ($listProprietaire as $p )
             
             {
                 $sheet->setCellValue('A'.$i , $p->getId());
                 $sheet->setCellValue('B'.$i ,  $p->getNom());
                 $sheet->setCellValue('C'.$i ,  $p->getPrenom());
                 $sheet->setCellValue('D'.$i ,  $p->getAdresse());
                 $i++;
             }
 
        
         // Create your Office 2007 Excel (XLSX Format)
         $writer = new Xlsx($spreadsheet);
 
         // Create a Temporary file in the system
         $fileName = 'Données des xlsx';
         $temp_file = tempnam(sys_get_temp_dir(), $fileName);
 
         // Create the excel file in the tmp directory of the system
         $writer->save($temp_file);
 
         // Return the excel file as an attachment
         return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
     }


    #[Route('/add', name: 'app_proprietaire_add', methods: ['GET', 'POST'])]
    public function new(Request $request, ProprietaireRepository $proprietaireRepository): Response
    {
        $proprietaire = new Proprietaire();
        $form = $this->createForm(ProprietaireType::class, $proprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $proprietaireRepository->add($proprietaire);
            return $this->redirectToRoute("app_proprietaire_show", ['id'=>$proprietaire->getId()]);
        }

        return $this->renderForm('proprietaire/new.html.twig', [
            'les_proprietaire' => $proprietaireRepository->findAll(),
            'proprietaireForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_proprietaire_show', methods: ['GET'])]
    public function show(Proprietaire $proprietaire, ProprietaireRepository $proprietaireRepository): Response
    {
        return $this->render('proprietaire/show.html.twig', [
            'les_proprietaire' => $proprietaireRepository->findAll(),
            'proprietaire' => $proprietaire,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_proprietaire_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Proprietaire $proprietaire, ProprietaireRepository $proprietaireRepository): Response
    {
        $form = $this->createForm(ProprietaireType::class, $proprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $proprietaireRepository->add($proprietaire);
            return $this->redirectToRoute("app_proprietaire_show", ['id'=>$proprietaire->getId()]);
        }

        return $this->renderForm('proprietaire/edit.html.twig', [
            'les_proprietaire' => $proprietaireRepository->findAll(),
            'proprietaire' => $proprietaire,
            'proprietaireForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_proprietaire_delete', methods: ['POST'])]
    public function delete(Request $request, Proprietaire $proprietaire, ProprietaireRepository $proprietaireRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$proprietaire->getId(), $request->request->get('_token'))) {
            $proprietaireRepository->remove($proprietaire);
        }

        return $this->redirectToRoute('app_proprietaire_index', [], Response::HTTP_SEE_OTHER);
    }
}
