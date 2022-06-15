<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Services\Tools;
use App\Entity\Localite;
use App\Form\AgenceType;
use App\Repository\AgenceRepository;
use App\Repository\LocaliteRepository;
use Doctrine\Persistence\ManagerRegistry;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Notifier\TexterInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Notifier\Message\SmsMessage;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/agence', name: 'app_agence_')]
class AgenceController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Request $request, AgenceRepository $agenceRepository, LocaliteRepository $localiteRepository): Response
    {
        
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

    ##--------Generation de Excel---------
    // #[Route('/agenceExcel', name:'app_agence_excel')]
    #[Route('/agence_excel', name:'excel')]
    public function genExcel(ManagerRegistry $doctrine, array $headers = [],
    $fileName = 'data.xlsx'): Response
    {
        // {#-----------Generation de fichiers Excel-------------#} 
        $spreadsheet = new Spreadsheet();

        /* @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet */
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ID ');
        $sheet->setCellValue('B1', 'NOM ');
        $sheet->setCellValue('C1', 'TELEPHONE ');
        $sheet->setCellValue('D1', 'ADRESS ');
        $sheet->setTitle("Liste des Agences");

        $em = $doctrine->getManager();
        $listAgence = $em->getRepository(
            Agence::class
        )->findAll();

         $i = 3;
            foreach ($listAgence as $u )
            
            {
                $sheet->setCellValue('A'.$i , $u->getId());
                $sheet->setCellValue('B'.$i ,  $u->getNom());
                $sheet->setCellValue('C'.$i ,  $u->getTelephone());
                $sheet->setCellValue('D'.$i ,  $u->getAdresse());
                $i++;
            }

       
        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);

        // Create a Temporary file in the system
        $fileName = 'Données des Agences.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Create the excel file in the tmp directory of the system
        $writer->save($temp_file);

        // Return the excel file as an attachment
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }



    #[Route('/add', name: 'add')]
    public function create(Request $request, AgenceRepository $agenceRepository): Response
    {
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
        $agence = $agenceRepository->find($id);
        $form = $this->createForm(AgenceType::class, $agence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agenceRepository->add($agence);


           $tools->notifSMS('221773799200', 'MaJ Agence réussie !');

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
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agence::class)->find($id);
        $entityManager->remove($ag);
        $entityManager->flush();
        return new Response('Suppression effectué!');
    }

}
