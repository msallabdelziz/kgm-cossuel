<?php

namespace App\Controller;

use App\Entity\Electricien;
use App\Form\ElectricienType;
use App\Repository\LocaliteRepository;
use App\Repository\ElectricienRepository;
use Doctrine\Persistence\ManagerRegistry;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/electricien')]
class ElectricienController extends AbstractController
{
    #[Route('/', name: 'app_electricien_index', methods: ['GET', 'POST'])]
    public function index(Request $request, ElectricienRepository $electricienRepository, LocaliteRepository $localiteRepository): Response
    {
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

        return $this->render('electricien/index.html.twig', [
            'les_electricien' => $les_electricien,
            'val_rech' => $val_rech,

            'les_localite'=> $les_localite,
            'val_localite'=> $val_localite,
        ]);
    }

    //{#----------------------------------Excel File---------------------------------#}

    #[Route('/elec_excel', name: 'app_elec_excel')]
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
        $sheet->setTitle("Liste des Electriciens");

        $em = $doctrine->getManager();
        $listElectricien = $em->getRepository(
            Electricien::class
        )->findAll();

         $i = 3;
            foreach ($listElectricien as $u )
            
            {
                $sheet->setCellValue('A'.$i , $u->getId());
                $sheet->setCellValue('B'.$i ,  $u->getNom());
                $sheet->setCellValue('C'.$i ,  $u->getPrenom());
                $sheet->setCellValue('D'.$i ,  $u->getAdresse());
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



    
    #[Route('/add', name: 'app_electricien_add', methods: ['GET', 'POST'])]
    public function new(Request $request, ElectricienRepository $electricienRepository): Response
    {
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

    #[Route('/{id}', name: 'app_electricien_show', methods: ['GET'])]
    public function show(Electricien $electricien, ElectricienRepository $electricienRepository): Response
    {
        return $this->render('electricien/show.html.twig', [
            'les_electricien' => $electricienRepository->findAll(),
            'electricien' => $electricien,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_electricien_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Electricien $electricien, ElectricienRepository $electricienRepository): Response
    {
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

    #[Route('/{id}', name: 'app_electricien_delete', methods: ['POST'])]
    public function delete(Request $request, Electricien $electricien, ElectricienRepository $electricienRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$electricien->getId(), $request->request->get('_token'))) {
            $electricienRepository->remove($electricien);
        }

        return $this->redirectToRoute('app_electricien_index', [], Response::HTTP_SEE_OTHER);
    }
   
}
