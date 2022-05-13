<?php

namespace App\Service;
use  Dompdf\Dompdf ;

class PdfService{

    private $domPdf;

    public function __construct(){
        $this->domPdf = new  Dompdf();
        $pdfOption = new Options();
        $pdfOption->set('defaultFont','Garamond');
        $this->domPdf->setOptions($pdfOption);
        
    }

    public function showPdfFile($html)
    {
        $this->domPdf->loadHtml($html);
        $this->domPdf->render();
        $this->domPdf->stream("agent.pdf",['Attachement'=> false]);
    }

    public function generatePdf($html){
        $this->domPdf->loadHtml($html);
        $this->domPdf->render();
        $this->domPdf->output();
    }
}


?>