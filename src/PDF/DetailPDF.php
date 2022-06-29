<?php
namespace App\PDF;

use Fpdf\Fpdf;

class DetailPDF extends Fpdf {
    // Header
      function Header() {
  
          // Logo : 8 >position à gauche du document (en mm), 2 >position en haut du document, 80 >largeur de l'image en mm). La hauteur est calculée automatiquement.
          // $this->Image("assets/img/thumbnail_Logo_COSSUEL.png",7,10,75,25);
  
          // Saut de ligne 20 mm
          // $this->Ln(35);
  
      }
      // Footer
      function Footer() {
          // Positionnement à 1,5 cm du bas
        //   $this->SetY(-15);
        //   // Police Arial italique 8
        //   $this->SetFont('Helvetica','I',9);
        //   // Numéro de page, centré (C)
        //   $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
      }
      
      
  }
  
  
?>