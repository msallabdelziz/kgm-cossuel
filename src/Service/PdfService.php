<?php

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfService
{
    private $domPdf;

    public function __construct() {
        $this->domPdf = new DomPdf();

        $pdfOptions = new Options();

        $pdfOptions->set('defaultFont', 'Garamond');

        $this->domPdf->setOptions($pdfOptions);
    }

    public function showPdfFile($html) {
        $this->domPdf->loadHtml($html);
        $this->domPdf->render();
        $this->domPdf->stream("details.pdf", [
            'Attachement' => false
        ]);
    }

    public function generateBinaryPDF($html) {

        // Charger le HTML dans Dompdf
        $this->dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $this->dompdf->setPaper('A4', 'portrait');
        // Rendre le HTML au format PDF
        $this->dompdf->render();
   
        // Sortie du PDF généré dans le navigateur (téléchargement forcé)
  
        $this->domPdf->output();
    }
}