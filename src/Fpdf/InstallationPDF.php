<?php
namespace App\Fpdf;
use App\Fpdf\FPDF;

class InstallationPDF extends FPDF {
  // Header
    function Header() {

        // Logo : 8 >position à gauche du document (en mm), 2 >position en haut du document, 80 >largeur de l'image en mm). La hauteur est calculée automatiquement.
        $this->Image("assets/img/thumbnail_Logo_COSSUEL.png",7,10,75,25);

        // Saut de ligne 20 mm
        $this->Ln(35);

        // Titre gras (B) police Helbetica de 11
        $this->SetFont('Helvetica','N',14);
        // fond de couleur gris (valeurs en RGB)
        $this->setFillColor(255,255,255);
        // position du coin supérieur gauche par rapport à la marge gauche (mm)
        $this->SetX(130);
        // Texte : 60 >largeur ligne, 8 >hauteur ligne. Premier 0 >pas de bordure, 1 >retour à la ligneensuite, C >centrer texte, 1> couleur de fond ok  
        $this->Cell(60,8,'LISTE DES AGENTS COSSUEL',0,1,'C',1);
        $this->Ln(5);    
    }
    // Footer
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Helvetica','I',9);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    
    
}


?>