<?php
namespace App\Fpdf;
use App\Fpdf\FPDF;

class DemandePDF extends FPDF {
  // Header
    function Header() {

        // Logo : 8 >position à gauche du document (en mm), 2 >position en haut du document, 80 >largeur de l'image en mm). La hauteur est calculée automatiquement.
        $this->Image("assets/img/thumbnail_Logo_COSSUEL.png",0,4,105,40);

        // Saut de ligne 20 mm
       // $this->Ln(35);

        // Titre gras (B) police Helbetica de 11
        $this->SetFont('Helvetica','B',16);
        // fond de couleur gris (valeurs en RGB)
        $this->setFillColor(255,255,255);
        // position du coin supérieur gauche par rapport à la marge gauche (mm)
        $this->SetX(150);
        // Texte : 60 >largeur ligne, 8 >hauteur ligne. Premier 0 >pas de bordure, 1 >retour à la ligneensuite, C >centrer texte, 1> couleur de fond ok  
        $this->Cell(6,10,'DEMANDE D\'ATTESTATION DE',0,0,'C',1);
        // Saut de ligne 10 mm
        $this->Ln(7); 
        
        $this->SetFont('Helvetica','B',14);
        $this->setDrawColor(255,215,0);
        $this->SetLineWidth(0,8);
        $this->SetX(115);
        $this->Cell(80,11,'CONFORMITE','B',0,'C',1);
        $this->Ln(12);

        $this->SetFont('Helvetica','',12);
        $this->setDrawColor(255,215,0);
        $this->SetLineWidth(0,8);
        $this->SetX(115);
        $this->Cell(80,8,utf8_decode('Installation à usage domestique'),'B',0,'C',1);
        $this->Ln(15);

        $this->SetFont('Helvetica','',9);
        $this->SetX(10);
        $this->Cell(20,8,utf8_decode('Agence:'),0,0,'C',1);
        
        $this->SetFont('Helvetica','',9);
        $this->SetX(40);
        $this->Cell(20,8,utf8_decode('Cossuel Dakar'),0,0,'C',1);

        $this->SetFont('Helvetica','',9);
        $this->SetX(85);
        $this->Cell(20,8,utf8_decode('Demande Num:'),0,0,'C',1);

        $this->SetFont('Helvetica','',9);
        $this->SetX(110);
        $this->Cell(20,8,'14523698',0,0,'C',1);

        $this->SetFont('Helvetica','',9);
        $this->SetX(140);
        $this->Cell(20,8,utf8_decode('Du:'),0,0,'C',1);

        $this->SetFont('Helvetica','',9);
        $this->SetX(170);
        $this->Cell(20,8,'2021-02-03  08:15',0,0,'C',1);
        $this->Ln(3);
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