<?php
namespace App\PDF;

use Fpdf\Fpdf;

class ListePDF extends Fpdf {
  // Header
    function Header() {

        // Logo : 8 >position à gauche du document (en mm), 2 >position en haut du document, 80 >largeur de l'image en mm). La hauteur est calculée automatiquement.
        $this->Image("assets/img/thumbnail_Logo_COSSUEL.png",7,10,75,25);

        // Saut de ligne 20 mm
        $this->Ln(35);

        // Titre gras (B) police Helbetica de 11
        $this->SetFont('Helvetica','B',11);
        // fond de couleur gris (valeurs en RGB)
        $this->setFillColor(255,255,255);
        // position du coin supérieur gauche par rapport à la marge gauche (mm)
    }
    // Footer
    function Footer() {
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Helvetica','I',9);
        // Numéro de page, centré (C)
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    
    
}
  
?>