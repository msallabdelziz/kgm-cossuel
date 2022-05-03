<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Electricien;
use App\Form\ElectricienType;
use App\Repository\ElectricienRepository;
use App\Service\PdfService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/electricien')]
class ElectricienController extends AbstractController
{
    #[Route('/', name: 'app_electricien_index', methods: ['GET'])]
    public function index(ElectricienRepository $electricienRepository): Response
    {
        return $this->render('electricien/index.html.twig', [
            'les_electricien' => $electricienRepository->findAll(),
        ]);
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
    
    // #[Route('/pdfdata', name: "app_electricien_pdfdata")]
    // public function pdfdata()
    // {
    //     return $this->render('electricien/pdfdata.html.twig');
    // }
   
    // #[Route('/{id}/pdfservice', name: "app_electricien_pdfservice")]
    // public function generatePdf(Electricien $electricien=null, PdfService $pdf)
    // {
    //     $html = $this->renderView('electricien/details.html.twig', ['electricien' => $electricien]);
    //     $pdf ->showPdfFile($html);
        
    // }
  

    #[Route('/{id}/data', name: 'app_electricien_data', methods: ['GET'])]
    public function datae(Electricien $electricien, ElectricienRepository $electricienRepository)
    {
                // Configure Dompdf according to your needs
                $pdfOptions = new Options();
                $pdfOptions->set('defaultFont', 'Arial');
                
                // Instantiate Dompdf with our options
                $dompdf = new Dompdf($pdfOptions);
                /*return (
                        $this->render('electricien/datae.html.twig', [
                            'les_electricien' => $electricienRepository->findAll(),
                            'electricien' => $electricien,
                        ]);
                        */
                // Retrieve the HTML generated in our twig file
                $html = $this->renderView('electricien/data.html', [
                    'les_electricien' => $electricienRepository->findAll(),
                    'electricien' => $electricien,
                ]);
                
                // Load HTML to Dompdf
                $dompdf->loadHtml($html);
                
                // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
                $dompdf->setPaper('A4', 'portrait');
        
                // Render the HTML as PDF
                $dompdf->render();
        
                // Output the generated PDF to Browser (force download)
                $dompdf->stream("mypdf.pdf", [
                    "Attachment" => false
                ]);
        
        
        //$electricien = $electricienRepository->findAll();

        
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
