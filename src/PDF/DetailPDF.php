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
      
      function Rotate($angle,$x=-1,$y=-1)
      {
          if($x==-1)
              $x=$this->x;
          if($y==-1)
              $y=$this->y;
          if(isset($this->angle) && $this->angle!=0)
              $this->_out('Q');
          $this->angle=$angle;
          if($angle!=0)
          {
              $angle*=M_PI/180;
              $c=cos($angle);
              $s=sin($angle);
              $cx=$x*$this->k;
              $cy=($this->h-$y)*$this->k;
              $this->_out(sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm',$c,$s,-$s,$c,$cx,$cy,-$cx,-$cy));
          }
      }
      
      function RotatedText($x,$y,$txt,$angle)
      {
          //Text rotated around its origin
          $this->Rotate($angle,$x,$y);
          $this->Text($x,$y,$txt);
          $this->Rotate(0);
      }      
  }
  
  
?>