<?php

namespace App\Service;
use Dompdf\Dompdf;
use Dompdf\Options;

class PdfService{

    private $domPdf;

    public function __construct(){
        $this->domPdf = new  Dompdf();
        $pdfOption = new Options();
        $pdfOption->set('defaultFont','Garamond');
        $pdfOption->set("dpi",'130');
        //"dpi" => 130
        $this->domPdf->setOptions($pdfOption);
        
    }

    public function showPdfFile($html)
    {
        $this->domPdf->loadHtml($html);
        $this->domPdf->render();
        $this->domPdf->stream("agent.pdf",['Attachement'=> true]);
    }

    public function generatePdf($html){
        $this->domPdf->loadHtml($html);
        $this->domPdf->render();
        $this->domPdf->output("agent.pdf",['Attachement'=> false]);
    }
}


?>