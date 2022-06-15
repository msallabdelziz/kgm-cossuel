<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Entity\Agent;
use App\Entity\Demande;
use App\Entity\Departement;
use App\Entity\Electricien;
use App\Entity\Installation;
use App\Entity\Localite;
use App\Entity\NatureTravaux;
use App\Entity\PieceJointe;
use App\Entity\Proprietaire;
use App\Entity\Region;
use App\Entity\TypeConstruction;
use App\Entity\Utilisateur;
use App\Form\ElectricienType;
use App\Form\ProprietaireType;
use App\Form\InstallationType;
use App\Repository\AgenceRepository;
use App\Repository\DemandeRepository;
use App\Repository\DepartementRepository;
use App\Repository\ElectricienRepository;
use App\Repository\InstallationRepository;
use App\Repository\LocaliteRepository;
use App\Repository\PaiementRepository;
use App\Repository\PieceJointeRepository;
use App\Repository\ProprietaireRepository;
use App\Repository\RegionRepository;
use App\Repository\TypeConstructionRepository;
use App\Services\Tools;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Snappy\Pdf;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType as TypeIntegerType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\File as ConstraintsFile;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use App\Fpdf\DemandePDF;

#[Route('/installation')]
class InstallationController extends AbstractController
{

    #[Route('/pdf', name: 'app_install_pdf', methods: ['GET', 'POST'])]
    public function pdf( ManagerRegistry $doctrine, PaiementRepository $paiementRepository,Request $request, DemandePDF $pdf, InstallationRepository $installationRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'demande');
        $request->getSession()->set('sousmenu', 'demande_all');
        $request->getSession()->set('page_liste_demande', 'app_installation_index0');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $mode_affichage=$request->getSession()->get('affichage_demande');

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_RFO', 'ROLE_ACCUEIL', 'ROLE_COMPTABLE', 'ROLE_CAISSIER', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
            if(! in_array($role, array("ROLE_ADMIN", "ROLE_PUBLIC", "ROLE_ACCUEIL"))) {
                $val_filtre["etat"] = "Soumis";
            }
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        $val_usage=""; 
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=""; 
        $les_statut = array("Soumis");

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            if($val_agence) { $val_filtre["agence"] = $val_agence; }
            
            $val_usage = $request->request->get("val_usage");
            if($val_usage) { $val_filtre["usages"] = $val_usage; }
            
            $val_statut = $request->request->get("val_statut");
            if($val_statut) { $val_filtre["etat"] = $val_statut; }
        }

        $list=$installationRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);

        $pdf = new DemandePDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Helvetica','B',9);
        $pdf->SetTextColor(0);
        $pdf->AliasNbPages();

        // AFFICHAGE EN-TÊTE DU TABLEAU
        // Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (70 mm)
        $position_entete = 55;
        // police des caractères
        $pdf->SetFont('Helvetica','N',16);
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(255,215,0);
        $pdf->SetFillColor(255,215,0);
        $pdf->SetTextColor(0);
        $pdf->SetY($position_entete);
        // position de la colonne 2 (70 = 10+60)

        //INFORMATION INSTALLATEUR
        $pdf->SetX(10); 
        $pdf->Cell(190,8,'INFORMATION INSTALLATEUR',1,0,'C',1);
        $pdf->Ln(10);
        
        $pdf->SetFont('Helvetica','',9);
        $pdf->SetTextColor(0);
        $pdf->Line(10, 60, 10, 107);
        $pdf->Line(10, 107, 200, 107);
        $pdf->Line(200, 107, 200, 60);
        $pdf->SetFillColor(255,255,255);
        $pdf->setDrawColor(255,215,0);
        $pdf->SetX(12);
        $pdf->Cell(40,8,'Nom du contact:',0,0,'L',1);
        $pdf->Cell(70,8,utf8_decode('Emilie Mendy'),0,0,'L',1);
        $pdf->Ln();
        $pdf->SetX(12);
        $pdf->Cell(40,8,'Adresse:',0,0,'L',1);
        $pdf->Cell(70,8,utf8_decode('HLM Granf-yoff'),0,0,'L',1);
        $pdf->Ln();
        $pdf->SetX(12);
        $pdf->Cell(40,8,'Ville:',0,0,'L',1);
        $pdf->Cell(70,8,utf8_decode('Dakar'),0,0,'L',1);
        $pdf->Ln();
        $pdf->SetX(12);
        $pdf->Cell(40,8,utf8_decode('Téléphone:'),0,0,'L',1);
        $pdf->Cell(60,8,'78 457 80 73',0,0,'L',1);
        $pdf->Cell(35,8,'Email:',0,0,'L',1);
        $pdf->Cell(50,8,utf8_decode('emilie@gmail.com'),0,0,'R',1);
        $pdf->Ln();
        $pdf->SetX(12);
        $pdf->Cell(40,8,utf8_decode('Type Pièce:'),0,0,'L',1);
        $pdf->Cell(60,8,'CNI',0,0,'L',1);
        $pdf->Cell(35,8,utf8_decode('Numéro Pièce:'),0,0,'L',1);
        $pdf->Cell(50,8,'781457180173',0,0,'R',1);
       
        $pdf->Ln(10);

        //INSTALLATION ELECTRIQUE
        $position_entete = 110;
        // police des caractères
        $pdf->SetFont('Helvetica','N',16);
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(255,215,0);
        $pdf->SetFillColor(255,215,0);
        $pdf->SetTextColor(0);
        $pdf->SetY($position_entete);
        // position de la colonne 2 (70 = 10+60)
        $pdf->SetX(10); 
        $pdf->Cell(190,8,'INSTALLATION ELECTRIQUE',1,0,'C',1);
        $pdf->Ln(10);

        $pdf->SetFont('Helvetica','',9);
        $pdf->SetTextColor(0);
        $pdf->Line(10, 115, 10, 178);
        $pdf->Line(10, 178, 200, 178);
        $pdf->Line(200, 178, 200, 115);
        $pdf->SetFillColor(255,255,255);
        $pdf->setDrawColor(255,215,0);
        $pdf->SetX(12);
        $pdf->Cell(40,8,utf8_decode('Etat Installation:'),0,0,'L',1);
        $pdf->SetX(60);
        $pdf->Cell(50,8,'78 457 80 73',0,0,'L',1);
        $pdf->Cell(35,8,'Num Compteur Voisin:',0,0,'L',1);
        $pdf->Cell(50,8,utf8_decode('emilie@gmail.com'),0,0,'R',1);
        $pdf->Ln();
        $pdf->SetX(12);
        $pdf->Cell(40,8,'Propriétaire Installation:',0,0,'L',1);
        $pdf->SetX(60);
        $pdf->Cell(70,8,utf8_decode('Emilie Mendy'),0,0,'L',1);
        $pdf->Ln();
        $pdf->SetX(12);
        $pdf->Cell(40,8,utf8_decode('Type Pièce:'),0,0,'L',1);
        $pdf->SetX(60);
        $pdf->Cell(50,8,'78 457 80 73',0,0,'L',1);
        $pdf->Cell(35,8,'Num Pièce:',0,0,'L',1);
        $pdf->Cell(50,8,utf8_decode('emilie@gmail.com'),0,0,'R',1);
        $pdf->Ln();
        $pdf->SetX(12);
        $pdf->Cell(40,8,'Type Bâtiment:',0,0,'L',1);
        $pdf->SetX(60);
        $pdf->Cell(70,8,utf8_decode('Emilie Mendy'),0,0,'L',1);
        $pdf->Ln();
        $pdf->SetX(12);
        $pdf->Cell(40,8,utf8_decode('Adresse:'),0,0,'L',1);
        $pdf->SetX(60);
        $pdf->Cell(50,8,'78 457 80 73',0,0,'L',1);
        $pdf->Cell(35,8,utf8_decode('Téléphone:'),0,0,'L',1);
        $pdf->Cell(50,8,utf8_decode('emilie@gmail.com'),0,0,'R',1);
        $pdf->Ln();
        $pdf->SetX(12);
        $pdf->Cell(40,8,'Ville:',0,0,'L',1);
        $pdf->SetX(60);
        $pdf->Cell(70,8,utf8_decode('Emilie Mendy'),0,0,'L',1);
        $pdf->Ln();

        $pdf->SetX(12);
        $pdf->Cell(40,8,'G.P.S',0,0,'L',1);
        $pdf->Cell(30,8,'Longitude:',0,0,'L',1);
        $pdf->Cell(30,8,utf8_decode('Emilie Mendy'),0,0,'L',1);
        $pdf->SetX(130);
        $pdf->Cell(30,8,'Lattitude:',0,0,'L',1);
        $pdf->Cell(30,8,utf8_decode('Emilie Mendy'),0,0,'L',1);
        $pdf->Ln();
        
        //TYPE DE CONSTRUCTION A USAGE DOMESTIQUE
        $position_entete = 181;
        // police des caractères
        $pdf->SetFont('Helvetica','N',16);
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(255,215,0);
        $pdf->SetFillColor(255,215,0);
        $pdf->SetTextColor(0);
        $pdf->SetY($position_entete);
        // position de la colonne 2 (70 = 10+60)
        $pdf->SetX(10); 
        $pdf->Cell(190,8,'TYPE DE CONSTRUCTION A USAGE DOMESTIQUE',1,0,'C',1);
        $pdf->Ln(10);
        $pdf->SetFont('Helvetica','',9);
        $pdf->SetTextColor(0);
        $pdf->Line(10, 182, 10, 211);
        $pdf->Line(10, 211, 200, 211);
        $pdf->Line(200, 211, 200, 182);
        $pdf->SetFillColor(255,255,255);
        $pdf->setDrawColor(255,215,0);
        $pdf->SetX(12);
        $pdf->Cell(40,8,utf8_decode('Type de construction:'),0,0,'L',1);
        $pdf->Cell(60,8,utf8_decode('78 457 80 73'),0,0,'L',1);
        $pdf->Cell(35,8,utf8_decode('Nombre de pièce principale:'),0,0,'L',1);
        $pdf->Cell(50,8,utf8_decode('emilie@gmail.com'),0,0,'R',1);
        $pdf->Ln();
        $pdf->SetX(12);
        $pdf->Cell(40,8,utf8_decode('Type Opération:'),0,0,'L',1);
        $pdf->Cell(70,8,utf8_decode('Emilie Mendy'),0,0,'L',1);
        $pdf->Ln();

        //TRAVAUX
        $position_entete = 214;
        // police des caractères
        $pdf->SetFont('Helvetica','N',16);
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(255,215,0);
        $pdf->SetFillColor(255,215,0);
        $pdf->SetTextColor(0);
        $pdf->SetY($position_entete);
        // position de la colonne 2 (70 = 10+60)
        $pdf->SetX(10); 
        $pdf->Cell(190,8,'TRAVAUX',1,0,'C',1);
        $pdf->Ln(10);

        $pdf->SetFont('Helvetica','',9);
        $pdf->SetTextColor(0);
        $pdf->Line(10, 215, 10, 243);
        $pdf->Line(10, 243, 200, 243);
        $pdf->Line(200, 243, 200, 215);
        $pdf->SetFillColor(255,255,255);
        $pdf->setDrawColor(255,215,0);
        $pdf->SetX(12);
        $pdf->Cell(40,8,utf8_decode('Installation Neuve:'),0,0,'L',1);
        $pdf->Cell(60,8,utf8_decode('78 457 80 73'),0,0,'L',1);
        $pdf->Ln();
        $pdf->SetX(12);
        $pdf->Cell(40,8,'Autre Intervenants:',0,0,'L',1);
        $pdf->Cell(70,8,utf8_decode('--------------------'),0,0,'L',1);
        $pdf->Ln();
        
        //TARIFICATION
        $position_entete = 246;

        // SIGNATURE
        $pdf->SetFont('Helvetica','U',14);
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(255,255,255);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetTextColor(0);
        $pdf->SetY($position_entete);
        $pdf->SetX(120); 
        $pdf->Cell(120,6,'Signature',1,0,'C',1);

        $pdf->SetX(10); 
        $pdf->Cell(120,6,'TARIFICATION',1,0,'C',1);
        // police des caractères
        $pdf->SetFont('Helvetica','N',14);
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(255,215,0);
        $pdf->SetFillColor(255,215,0);
        $pdf->SetTextColor(0);
        $pdf->SetY($position_entete);
        // position de la colonne 2 (70 = 10+60)
        $pdf->SetX(10); 
        $pdf->Cell(120,6,'TARIFICATION',1,0,'C',1);

        $pdf->Ln(6);

        $pdf->SetFont('Helvetica','',9);
        $pdf->SetTextColor(0);
        $pdf->Line(10, 247, 10, 270);
        $pdf->Line(10, 270, 130, 270);
        $pdf->Line(130, 270, 130, 247);
        $pdf->SetFillColor(255,255,255);
        $pdf->setDrawColor(255,215,0);
        $pdf->SetX(12);
        $pdf->Cell(40,8,utf8_decode('Info Visite:'),0,0,'L',1);
        $pdf->Cell(70,8,utf8_decode('Emilie Mendy'),0,0,'L',1);
        $pdf->Ln();
        $pdf->SetX(12);
        $pdf->Cell(35,8,utf8_decode('Puissance demandée:'),0,0,'L',1);
        $pdf->Cell(25,8,utf8_decode('78 457 80 73'),0,0,'L',1);
        $pdf->Cell(30,8,utf8_decode('Tarif:'),0,0,'L',1);
        $pdf->Cell(15,8,utf8_decode('emilie@gmail.com'),0,0,'R',1);
        $pdf->Ln();
        
        
        $pdf->Output('demande.pdf','I');
        /*return $this->render('installation/index0.html.twig', [
            'les_installation' => $list,
            'page_list' => "app_installation_index0",
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'tools'=> $tools,
        ]);*/
    }


    #[Route('/all', name: 'app_installation_index0', methods: ['GET', 'POST'])]
    public function index0(Request $request, PaginatorInterface $pgn, ManagerRegistry $doctrine, InstallationRepository $installationRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'demande');
        $request->getSession()->set('sousmenu', 'demande_all');
        $request->getSession()->set('page_liste_demande', 'app_installation_index0');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $mode_affichage=$request->getSession()->get('affichage_demande');

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_RFO', 'ROLE_ACCUEIL', 'ROLE_COMPTABLE', 'ROLE_CAISSIER', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
            if(! in_array($role, array("ROLE_ADMIN", "ROLE_PUBLIC", "ROLE_ACCUEIL"))) {
                $val_filtre["etat"] = "Soumis";
            }
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        $val_usage=""; 
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=""; 
        $les_statut = array("Soumis");

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_agence = $request->request->get("val_agence");
            if($val_agence) { $val_filtre["agence"] = $val_agence; }
            
            $val_usage = $request->request->get("val_usage");
            if($val_usage) { $val_filtre["usages"] = $val_usage; }
            
            $val_statut = $request->request->get("val_statut");
            if($val_statut) { $val_filtre["etat"] = $val_statut; }
        }

        $list=$installationRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('installation/index0.html.twig', [
            'les_installation' => $list,
            'page_list' => "app_installation_index0",
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'tools'=> $tools,
        ]);
    }

    #[Route('/soumission', name: 'app_installation_index', methods: ['GET', 'POST'])]
    public function index(Request $request, PaginatorInterface $pgn, ManagerRegistry $doctrine, InstallationRepository $installationRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"Saisie"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agent=null; $electricien=null; $agence=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'demande');
        $request->getSession()->set('sousmenu', 'demande_soumission');
        $request->getSession()->set('page_liste_demande', 'app_installation_index');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $mode_affichage=$request->getSession()->get('affichage_demande');

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_RFO', 'ROLE_ACCUEIL', 'ROLE_COMPTABLE', 'ROLE_CAISSIER', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        if($role=="ROLE_USER" || $role=="ROLE_CLIENT" || $role=="ROLE_PUBLIC") {
            $val_filtre["created_by"] = $userConn->getId();
        }
        $val_usage=""; 
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");

            $val_agence = $request->request->get("val_agence");
            if($val_agence) { $val_filtre["agence"] = $val_agence; }
            
            $val_usage = $request->request->get("val_usage");
            if($val_usage) { $val_filtre["usages"] = $val_usage; }
        }

        $list=$installationRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('installation/index.html.twig', [
            'les_installation' => $list,
            'modif' => 1,
            'page_list' => "app_installation_index",
            'affichage' => $mode_affichage,
            'etatDemande' => "en soumission",
            'val_rech' => $val_rech,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'tools'=> $tools,
        ]);
    }

    #[Route('/paiement', name: 'app_installation_index2', methods: ['GET', 'POST'])]
    public function index2(Request $request, PaginatorInterface $pgn, ManagerRegistry $doctrine, InstallationRepository $installationRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"Soumis"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agent=null; $electricien=null; $agence=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'caisse');
        $request->getSession()->set('sousmenu', 'demande_paiement');
        $request->getSession()->set('page_liste_demande', 'app_installation_index2');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $mode_affichage=$request->getSession()->get('affichage_demande');

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_RFO', 'ROLE_ACCUEIL', 'ROLE_COMPTABLE', 'ROLE_CAISSIER', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        $val_usage=""; 
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");

            $val_agence = $request->request->get("val_agence");
            if($val_agence) { $val_filtre["agence"] = $val_agence; }
            
            $val_usage = $request->request->get("val_usage");
            if($val_usage) { $val_filtre["usages"] = $val_usage; }
        }

        $list=$installationRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('installation/index.html.twig', [
            'les_installation' => $list,
            'modif' => 0,
            'affichage' => $mode_affichage,
            'page_list' => "app_installation_index2",
            'etatDemande' => "en attente de paiement",
            'val_rech' => $val_rech,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'tools'=> $tools,
        ]);
    }

    #[Route('/validation', name: 'app_installation_index3', methods: ['GET', 'POST'])]
    public function index3(Request $request, PaginatorInterface $pgn, ManagerRegistry $doctrine, InstallationRepository $installationRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array("etat"=>"Payé"); $page = 0; $orderBy = "";
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agent=null; $electricien=null; $agence=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'demande');
        $request->getSession()->set('sousmenu', 'demande_validation');
        $request->getSession()->set('page_liste_demande', 'app_installation_index3');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $mode_affichage=$request->getSession()->get('affichage_demande');

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_RFO', 'ROLE_ACCUEIL', 'ROLE_COMPTABLE', 'ROLE_CAISSIER', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        $val_usage=""; 
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");

            $val_agence = $request->request->get("val_agence");
            if($val_agence) { $val_filtre["agence"] = $val_agence; }
            
            $val_usage = $request->request->get("val_usage");
            if($val_usage) { $val_filtre["usages"] = $val_usage; }
        }

        $list=$installationRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('installation/index.html.twig', [
            'les_installation' => $list,
            'modif' => 0,
            'page_list' => "app_installation_index3",
            'affichage' => $mode_affichage,
            'etatDemande' => "en attente de validation",
            'val_rech' => $val_rech,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'tools'=> $tools,
        ]);
    }

    #[Route('/{id}/renew', name: 'app_installation_renew', methods: ['GET', 'POST'])]
    public function addrenew(Request $request, Installation $installation = null, InstallationRepository $installationRepository, DemandeRepository $demandeRepo): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $installation_old=$installationRepository->find($installation);
        $old_demande=$installation_old->getDemandeCourante();

        $installation_new=clone $installation_old;
        $installation_new->restId();
        $installation_new->setEtat("En Saisie 6/6");
        $installation_new->setStep("6");
        $installation_new->setCreatedby($this->getUser()->getId());
        $installation_new->setCreatedAt(new \DateTimeImmutable());

        $installationRepository->add($installation_new);

        $demande=new Demande();
        $demande->setInstallation($installation_new);
        $demande->setCout($old_demande->getCout()*80/100);
        $demande->setPuissance($old_demande->getPuissance());
        $demande->setCreatedby($this->getUser()->getId());
        $demande->setDemandeParente($old_demande->getId());
        $demande->setNumeroPassage(2);
        $demandeRepo->add($demande);
        $demande->setNumero($old_demande->getNumero());
        $demandeRepo->add($demande);

        return $this->redirectToRoute('app_installation_add6', array('id' => $installation_new->getId())); 
    }

    #[Route('/{id}/clone', name: 'app_installation_clone', methods: ['GET', 'POST'])]
    public function addclone(Request $request, Installation $installation, InstallationRepository $installationRepository, DemandeRepository $demandeRepo): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $installation_old=$installationRepository->find($installation);
        $old_demande=$installation_old->getDemandeCourante();

        $installation_new=clone $installation_old;
        $installation_new->restId();
        $installation_new->setEtat("En Saisie 6/6");
        $installation_new->setStep("6");
        $installation_new->setCreatedby($this->getUser()->getId());
        $installation_new->setCreatedAt(new \DateTimeImmutable());
        $installation_new->restDemande();

        $installationRepository->add($installation_new);

        // $demande=new Demande();
        // $demande->setInstallation($installation_new);
        // $demande->setCout($old_demande->getCout());
        // $demande->setPuissance($old_demande->getPuissance());
        // $demande->setCreatedby($this->getUser()->getId());
        // $demande->setDemandeParente($old_demande->getId());
        // $demande->setNumeroPassage(2);
        // $demandeRepo->add($demande);
        
        // $numD=str_pad($demande->getId(), 8, '0', STR_PAD_LEFT);
        // $demande->setNumero($numD);
        // $demandeRepo->add($demande);

        return $this->redirectToRoute('app_installation_add6', array('id' => $installation_new->getId())); 
    }

    #[Route('/{id}/addfromE/{idE}', name: 'app_installation_addfromE', methods: ['GET', 'POST'])]
    public function newfromE(Request $request, Electricien $idE, InstallationRepository $installationRepository, ElectricienRepository $electricienRepo): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $electricien=$electricienRepo->find($idE);
        $installation = new Installation();
        $installation->setElectricien($electricien);
        $installation->setLocalite($electricien->getLocalite());
        $installation->setStep(4);
        $installation->setCreatedby($this->getUser()->getId());
        $installation->setEtat("En Saisie 4/6"); 
        $installation->setUsages("domestique");
        $installationRepository->add($installation);

        return $this->redirectToRoute('app_installation_add', array('id' => $installation->getId())); 
    }

    #[Route('/{id}/add', name: 'app_installation_add', methods: ['GET', 'POST'])]
    public function new(Request $request, ManagerRegistry $doctrine, Installation $installation = null, InstallationRepository $installationRepository, DepartementRepository $departRepo, RegionRepository $regionRepo, LocaliteRepository $localiteRepo): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); $tools = new Tools($em);
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        if($installation==null) {
            $installation = new Installation();
        } else {
            $installation=$installationRepository->find($installation);
        }
        if(!$installation) {
            $installation = new Installation();
        }
    // $form = $this->createForm(InstallationType::class, $installation);
        $val_alimente=false; if($installation->getAlimente()) { $val_alimente=true; }
        $val_usages="domestique"; if($installation->getUsages()) { $val_usages=$installation->getUsages(); }
        $val_gest="domestique"; if($installation->getGrstReseau()) { $val_gest=$installation->getGrstReseau(); }
        $o_region=null; $o_departement=null; $o_localite=null;
        if($installation->getLocalite()) { 
            $o_localite=$installation->getLocalite(); 
            $o_departement=$o_localite->getDepartement(); 
            $o_region=$o_departement->getRegion(); 
        }
        $formBuilder = $this->createFormBuilder($installation);
        $form=$formBuilder
        ->add('region', EntityType::class, [
            'attr' => [
                'class' => 'form-select'
            ],
            'mapped' => false,
            'class' => Region::class,
            'query_builder' => function (RegionRepository $er) use ($agence) {
                if($agence) {
                    return $er->createQueryBuilder('r')
                    ->leftJoin('App\Entity\Departement', 'd', 'WITH', 'd.region = r.id') 
                    ->leftJoin('App\Entity\Localite', 'l', 'WITH', 'l.departement = d.id') 
                    ->where('l.agence = :val') 
                    ->setParameter('val', $agence);
                } else {
                    return $er->createQueryBuilder('r');
                }
            },
            'choice_label' => 'nom',
            'data' => $o_region,
            'label' => 'Région',
            'required' => false
        ])
        ->add('departement', EntityType::class, [
            'attr' => [
                'class' => 'form-select'
            ],
            'mapped' => false,
            'class' => Departement::class,
            'data' => $o_departement,
            'query_builder' => function (DepartementRepository $er) use ($o_region, $agence) {
                if($agence) {
                    return $er->createQueryBuilder('d')
                    ->leftJoin('App\Entity\Localite', 'l', 'WITH', 'l.departement = d.id') 
                    ->where('l.agence = :val') 
                    ->andWhere('d.region = :val2') 
                    ->setParameter('val', $agence)
                    ->setParameter('val2', $o_region!=null?$o_region:null);
                } else {
                    return $er->createQueryBuilder('d')
                    ->where('d.region = :val') 
                    ->setParameter('val', $o_region!=null?$o_region:null);
                }
            },
            'choice_label' => 'nom',
            'label' => 'Département',
            'required' => false
        ])
        ->add('localite', EntityType::class, [
            'attr' => [
                'class' => 'form-select'
            ],
            'class' => Localite::class,
            'data' => $o_localite,
            'query_builder' => function (LocaliteRepository $er) use ($o_departement, $agence) {
                if($agence) {
                    return $er->createQueryBuilder('l')
                    ->where('l.departement = :val') 
                    ->andWhere('l.agence = :val2') 
                    ->setParameter('val', $o_departement!=null?$o_departement:null)
                    ->setParameter('val2', $agence);
                } else {
                    return $er->createQueryBuilder('l')
                    ->where('l.departement = :val') 
                    ->setParameter('val', $o_departement!=null?$o_departement:null);
                }
            },
            'choice_label' => 'nom',
            'label' => 'Localité',
            'required' => false
        ])
        ->add('adresse', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => false,
            'label' => 'Adresse'
        ])
        ->add('habitation', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => false,
            'label' => 'Complément Adresse'
        ])
/*
        ->add('lattitude', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'constraints' => [
                new Callback(function($object, ExecutionContextInterface $context) {
                    $v = $object;
                    if($object) {
                        if (!is_numeric($object)) {
                            $context
                                ->buildViolation('Format incorrect ! Doit être numérique.')
                                ->addViolation();
                        }
                    }
                }),
            ],
            'required' => false,
            'label' => 'Latitude'
        ])
        ->add('longitude', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'constraints' => [
                new Callback(function($object, ExecutionContextInterface $context) {
                    $v = $object;
                    if($object) {
                        if (!is_numeric($object)) {
                            $context
                                ->buildViolation('Format incorrect ! Doit être numérique.')
                                ->addViolation();
                        }
                    }
                }),
            ],
            'required' => false,
            'label' => 'Longitude'
        ])
        */
        ->add('usages', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'form-select'
                ],
                'choices' => array('Domestique' => 'domestique', 'Professionnel' => 'non_domestique', 'ERP/ERT' => 'erp_ert'),
                'data' => $val_usages,
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Usage Installation'
            ])
            ->add('alimente', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'm-2'
                ],
                'choices' => array('Non' => false, 'Oui' => true),
                'choice_attr' => [
                    'Oui' => ['class' => 'm-2 ms-3 me-1'],
                    'Non' => ['class' => 'm-2 ms-3 me-1'],
                ],
                'expanded' => true,
                'data' => $val_alimente,
                'placeholder' => Null,
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Installation déja alimentée ?'
            ])
            ->add('compteur', TextType::class, [
                'attr' => [
                    'class' => 'form-control on_alimente1'
                ],
                'constraints' => [
                    new Callback(function($object, ExecutionContextInterface $context) {
                        $v = $object;
                        if($object) {
                            if (strlen($object) !=7 || !is_numeric($object)) {
                                $context
                                    ->buildViolation('Le numéro du compteur est incorrect ! 7 chiffres attendus !')
                                    ->addViolation();
                            }
                        }
                    }),
                ],
                'required' => false,
                'label' => 'Numéro Compteur'
            ])
            ->add('abonnement', TextType::class, [
                'attr' => [
                    'class' => 'form-control on_alimente1'
                ],
                'required' => false,
                'label' => 'Numéro Abonnement'
            ])
            ->add('grstReseau', ChoiceType::class, [
                'attr' => [
                    'class' => 'form-select on_alimente1'
                ],
                'choices' => array('SENELEC' => 'SENELEC', ),
                'data' => $val_gest,
                'required' => false,
                'label' => 'Gestionnaire Réseau'
            ])
            ->getForm();
        
            $formModifier = function (FormInterface $form, Region $region = null) {
    
                $form
                    ->add('departement', EntityType::class, [
                        'attr' => [
                            'class' => 'form-select'
                        ],
                        'mapped' => false,
                        'class' => Departement::class,
                        'query_builder' => function (DepartementRepository $er) use ($region) {
                            return $er->createQueryBuilder('l')
                            ->where('l.region = :val') 
                            ->setParameter('val', $region);
                        },
                        'data' => null,
                        'choice_label' => 'nom',
                        'label' => 'Département',
                        'required' => true
                    ])
                    ->add('localite', EntityType::class, [
                        'attr' => [
                            'class' => 'form-select'
                        ],
                        'mapped' => false,
                        'class' => Localite::class,
                        'data' => null,
                        'query_builder' => function (LocaliteRepository $er) use ($region) {
                            return $er->createQueryBuilder('l')
                            ->join('App\Entity\Departement', 'd', 'WITH', 'd.id = l.departement')
                            ->where('d.region = :val') 
                            ->setParameter('val', $region);
                        },
                        'choice_label' => 'nom',
                        'label' => 'Localité',
                        'required' => true
                    ])
                ;
            };

        // $formBuilder->addEventListener(
        //     FormEvents::PRE_SET_DATA,
        //     function (FormEvent $event) use ($formModifier) {
        //         $data = $event->getData();

        //         $formModifier($event->getForm(), $data->getRegion());
        //     }
        // );
        $formBuilder->get('region')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                // It's important here to fetch $event->getForm()->getData(), as
                // $event->getData() will get you the client data (that is, the ID)
                $region = $event->getForm()->getData();

                // since we've added the listener to the child, we'll have to pass on
                // the parent to the callback functions!
                $formModifier($event->getForm()->getParent(), $region);
            }
        );
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            echo $form->get('localite')->getData()."=VAL";
            $localite=$form->get('localite')->getData();
            $localite=$localiteRepo->find($localite);
            $installation->setLocalite($localite);
            $step = 2;
            if($installation->getStep()<$step) { 
                $installation->setCreatedby($this->getUser()->getId());
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 2/6"); 
            }
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_add2', array('id' => $installation->getId())); 
            // return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('installation/new.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}/add2', name: 'app_installation_add2', methods: ['GET', 'POST'])]
    public function new2(Request $request, Installation $installation, InstallationRepository $installationRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $installation=$installationRepository->find($installation);
        // $form = $this->createForm(InstallationType::class, $installation);
        $val_collectif=false; if($installation->getCollectif()) { $val_collectif=true; }
        $val_typeC=null; if($installation->getTypeConstruction()) { $val_typeC=$installation->getTypeConstruction(); }
        $form = $this->createFormBuilder($installation)
            ->add('collectif', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'm-2'
                ],
                'choices' => array('Non' => false, 'Oui' => true),
                'choice_attr' => [
                    'Oui' => ['class' => 'm-2 ms-3 me-1'],
                    'Non' => ['class' => 'm-2 ms-3 me-1'],
                ],
                'expanded' => true,
                'data' => $val_collectif,
                'placeholder' => Null,
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Batiment collectif ?'
            ])
            ->add('nomSite', TextType::class, [
                'attr' => [
                    'class' => 'form-control on_collectif1'
                ],
                'required' => false,
                'label' => 'Nom du Site'
            ])
            ->add('logement', TypeIntegerType::class, [
                'attr' => [
                    'class' => 'form-control on_collectif1'
                ],
                'required' => false,
                'label' => 'Nbre Logements'
            ])            
            // Type Construction
            ->add('typeConstruction', EntityType::class, [
                'attr' => [
                    'class' => 'form-select'
                ],
                'class' => TypeConstruction::class,
                'data' => $val_typeC,
                'query_builder' => function (TypeConstructionRepository $er) use ($installation) {
                    return $er->createQueryBuilder('u')
                    ->where('u.usages = :usages') 
                    ->setParameter('usages', $installation->getUsages());
                },
                'choice_label' => 'nom',
                'label' => 'Type Construction',
                'required' => false
                ])
            ->add('niveau', TypeIntegerType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'min' => 1
                ],
                'required' => false,
                'label' => 'Nombre de niveaux'
            ])
            ->add('activite', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Nature des activités de la structure'
            ])
            ->add('priece', TypeIntegerType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'min' => 2
                ],
                'required' => false,
                'label' => 'Nombre de Pièces'
            ])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 3;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 3/6"); 
            }
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_add3', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new2.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}/add3', name: 'app_installation_add3', methods: ['GET', 'POST'])]
    public function new3(Request $request, Installation $installation, InstallationRepository $installationRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $installation=$installationRepository->find($installation);
        $val_typeinstall=$installation->getTypeInstallation();
        // $form = $this->createForm(InstallationType::class, $installation);
        $form = $this->createFormBuilder($installation)
            // Nature Travaux
            // -------------------------------------------------------------------------------------------
            ->add('natureTravaux',  EntityType::class, [
                'attr' => [
                    'class' => 'form-select'
                ],
                'class' => NatureTravaux::class,
                'choice_label' => 'nom',
                'label' => 'Nature Travaux',
                'required' => false
                ])

            ->add('neuf15', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Neuf_15'
            ])
            ->add('existant15', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Existant_15'
            ])
            ->add('neuf25', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Neuf_25'
            ])
            ->add('existant25', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Existant_25'
            ])
            ->add('neufAutre', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'NeufAutre'
            ])
            ->add('existantAutre', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Existant_Autre'
            ])
            ->add('typeInstallation', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'form-select'
                ],
                'choices' => array('Installation en monophasé' => 'monophase', 'Installation en triphasé' => 'triphase'),
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'required' => false,
                'label' => 'Type Installation'
            ])
            // -------------------------------------------------------------------------------------------
            // Autre Intervenant ?
            // -------------------------------------------------------------------------------------------
            ->add('intervenantAutre', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'm-2'
                ],
                'choices' => array('Non' => false, 'Oui' => true),
                'choice_attr' => [
                    'Oui' => ['class' => 'm-2 ms-3 me-1'],
                    'Non' => ['class' => 'm-2 ms-3 me-1'],
                ],
                'expanded' => true,
                'data' => false,
                'placeholder' => Null,
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Autres intervenants en électricité sur installation de consommation ?'
            ])
            ->add('intervenant', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Intervenants'
            ])
            // -------------------------------------------------------------------------------------------
        ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 4;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 4/6"); 
            }
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_add4', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new3.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}/add4', name: 'app_installation_add4', methods: ['GET', 'POST'])]
    public function new4(Request $request, Installation $installation, InstallationRepository $installationRepository, SluggerInterface $slugger, ElectricienRepository $electricienRepository, PieceJointeRepository $pjRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $installation=$installationRepository->find($installation);
        $ok_elec=0;
        if($installation->getElectricien()) { 
            $electricien=$electricienRepository->find($installation->getElectricien()->getId());
        } else {
            if($request->request->get('rech_electricien')) {
                $rech_electricien=$request->request->get('rech_electricien');
                $resrech_electricien=$electricienRepository->findOneByTelMailPiece($rech_electricien);
                if($resrech_electricien) {
                    $this->addFlash("success", "Un électricien répondant au critère ($rech_electricien) trouvé et chargé !");
                    $electricien=$resrech_electricien;
                    $installation->setElectricien($electricien);
                    $ok_elec=1;
                } else {
                    $this->addFlash("danger", "Aucun électricien répondant au critère ($rech_electricien) trouvé !");
                    $electricien = new Electricien();
                }
            } else {
                $electricien = new Electricien();
            }
        }
        $form = $this->createForm(ElectricienType::class, $electricien);
        $form
            ->add('pj', FileType::class,[
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nouvelle Pièce Jointe',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new ConstraintsFile([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/*',
                            'application/pdf'
                        ],
                        
                    ])
                ],
            ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $pj=$pjRepository->findBy(array('installation'=>$installation->getId(), 'libelle'=>'PJ Electricien'));
            if($pj==null) {
                $pj=new PieceJointe();
                $pj->setInstallation($installation);
                $pj->setCreatedby($this->getUser()->getId());
                $pj->setLibelle('PJ Electricien');
            }
            $photoFile = $form->get('pj')->getData();
            if ($photoFile) {
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile->guessExtension();

                try {
                    $photoFile->move(
                        $this->getParameter('photo_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                
                $pj->setFichier($newFilename);
                $pjRepository->add($pj);
            }
            
            $step = 5;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 5/6"); 
            }
            $electricienRepository->add($electricien);
            $installation->setElectricien($electricien);
            $installationRepository->add($installation);

            return $this->redirectToRoute('app_installation_add5', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new4.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}/add5', name: 'app_installation_add5', methods: ['GET', 'POST'])]
    public function new5(Request $request, Installation $installation, InstallationRepository $installationRepository, SluggerInterface $slugger, ProprietaireRepository $proprietaireRepository, PieceJointeRepository $pjRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $proprietaire = new Proprietaire();
        $installation=$installationRepository->find($installation);
        if($installation->getProprietaire()) { 
            $proprietaire=$proprietaireRepository->find($installation->getProprietaire()->getId());
        } else {
            if($request->request->get('rech_proprietaire')) {
                $rech_proprietaire=$request->request->get('rech_proprietaire');
                $resrech_proprietaire=$proprietaireRepository->findOneByTelMailPiece($rech_proprietaire);
                if($resrech_proprietaire) {
                    $this->addFlash("success", "Un propriétaire répondant au critère ($rech_proprietaire) trouvé et chargé !");
                    $proprietaire=$resrech_proprietaire;
                } else {
                    $this->addFlash("danger", "Aucun propriétaire répondant au critère ($rech_proprietaire) trouvé !");
                    $proprietaire = new Proprietaire();
                }
            } else {
                $proprietaire = new Proprietaire();
            }
        }
        $form = $this->createForm(ProprietaireType::class, $proprietaire);
        $form
            ->add('pj1', FileType::class,[
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nouvelle Pièce Jointe',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new ConstraintsFile([
                        'maxSize' => '4M',
                        'mimeTypes' => [
                            'image/*',
                            'application/pdf'
                        ],
                        
                    ])
                ],
            ])
            ->add('pj2', FileType::class,[
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nouvelle Pièce Jointe',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new ConstraintsFile([
                        'maxSize' => '4M',
                        'mimeTypes' => [
                            'image/*',
                            'application/pdf'
                        ],
                        
                    ])
                ],
            ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $pj1=$pjRepository->findBy(array('installation'=>$installation->getId(), 'libelle'=>'PJ Propriétaire'));
            $pj2=$pjRepository->findBy(array('installation'=>$installation->getId(), 'libelle'=>'PJ Dossier Technique'));
            if($pj1==null) {
                $pj1=new PieceJointe();
                $pj1->setInstallation($installation);
                $pj1->setCreatedby($this->getUser()->getId());
                $pj1->setLibelle('PJ Propriétaire');
            }
            if($pj2==null) {
                $pj2=new PieceJointe();
                $pj2->setInstallation($installation);
                $pj2->setCreatedby($this->getUser()->getId());
                $pj2->setLibelle('PJ Dossier Technique');
            }
            $photoFile1 = $form->get('pj1')->getData();
            $photoFile2 = $form->get('pj2')->getData();
            if ($photoFile1) {
                $originalFilename = pathinfo($photoFile1->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile1->guessExtension();

                try {
                    $photoFile1->move(
                        $this->getParameter('photo_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                
                $pj1->setFichier($newFilename);
                $pjRepository->add($pj1);
            }
            if ($photoFile2) {
                $originalFilename = pathinfo($photoFile2->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile2->guessExtension();

                try {
                    $photoFile2->move(
                        $this->getParameter('photo_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                
                $pj2->setFichier($newFilename);
                $pjRepository->add($pj2);
            }
            
            $step = 6;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 6/6"); 
            }
            $proprietaireRepository->add($proprietaire);
            $installation->setProprietaire($proprietaire);
            $installationRepository->add($installation);

            return $this->redirectToRoute('app_installation_add6', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new5.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }


    #[Route('/{id}/add6', name: 'app_installation_add6', methods: ['GET', 'POST'])]
    public function new6(Request $request, Installation $installation, InstallationRepository $installationRepository, DemandeRepository $demandeRepository, MailerInterface $mailer): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $demande = new Demande();
        $installation=$installationRepository->find($installation);

        if($installation->getDemandeCourante()) { 
            $demande=$demandeRepository->find($installation->getDemandeCourante()->getId());
        } 
        $form = $this->createFormBuilder($demande)
            ->add('puissance', TypeIntegerType::class, [
                'attr' => [
                    'class' => 'form-control fs-5 py-2 fw-bold ',
                    'min' => 1,
                    'step' => 1,
                    // 'max' => 34
                ],
                'required' => true,
                'label' => 'Puissance demandée'
            ])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 7;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("Soumis"); 
                // Notification à faire au client
                // ...
            }
            $demande->setInstallation($installation);
            $demande->setCreatedby($this->getUser()->getId());
            $demandeRepository->add($demande);
            $numD=str_pad($demande->getId(), 8, '0', STR_PAD_LEFT);

            $val_puissance=$demande->getPuissance();
            $result=0;
            if ( !$val_puissance) $result=0;
            if($installation->getUsages()=="domestique") {
                if ( ($val_puissance>0) && ($val_puissance <= 6 )  ) $result="10000";
                if ( ($val_puissance>6) && ($val_puissance<=17) )   $result="30000";
                if ($val_puissance>17)  $result="100000";
            }
            else {
                if ( ($val_puissance>0) && ($val_puissance <= 6 )  ) $result="12000";
                if ( ($val_puissance>6) && ($val_puissance<=17) ) $result="150000";
                if ($val_puissance>17)  $result="250000";
            } 
            if($demande->getDemandeParente()) {
                $result=$result*80/100;
                $demande->setNumeroPassage(2);
            }
            $demande->setCout($result);
            $demande->setNumero($numD);
            $demandeRepository->add($demande);
            $installationRepository->add($installation);
            $this->addFlash("success", "La demande a été soumise sous le numero $numD ! Le montant à payer est de ".number_format($demande->getCout(), 0, ""," ")." FCFA");
            
            if($installation->getElectricien()->getEmail() || $installation->getElectricien()->getEmail()) {
                // generate an email 
                $email = (new Email())
                // ->from('alert@cossuel.sn');
                ->from('yatamala.net@gmail.com');
                if($installation->getElectricien()->getEmail()) {
                    $email->to($installation->getElectricien()->getEmail());
                }
                if($installation->getProprietaire()->getEmail()) {
                    $email->cc($installation->getProprietaire()->getEmail());
                }
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                $email
                ->subject('Demande COSSUEL soumise !')
                ->text('Votre demande a été enregistrée et soumise à COSSUEL !')
                ->html('<p>Votre demande a été enregistrée et soumise à COSSUEL !</p><p>Numéro: '.$demande->getNumero().'</p> </p><p>Montant à payer: '.number_format($demande->getCout(), 0, ""," ").' FCFA</p>');

                // $mailer->send($email);
            }
        
            return $this->redirectToRoute('app_installation_show', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new6.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_installation_show', methods: ['GET'])]
    public function show(Installation $installation, ManagerRegistry $doctrine, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); $tools = new Tools($em);
        if($installation->getStep()<=7 || !$installation->getDemandeCourante()->getPaiement()) {
            return $this->render('installation/show.html.twig', [
                'installation' => $installation,

                'tools'=> $tools,
            ]);
        } elseif($installation->getDemandeCourante()) {
            $paiement = $installation->getDemandeCourante()->getPaiement();
            return $this->render('paiement/show.html.twig', [
                'paiement' => $paiement,

                'tools'=> $tools,
            ]);
        }
    }

    #[Route('/pop/{id}', name: 'app_installation_showpop', methods: ['GET'])]
    public function showpop(Installation $installation, ManagerRegistry $doctrine, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); $tools = new Tools($em);
        if($installation->getStep()<=7 || !$installation->getDemandeCourante()->getPaiement()) {
            return $this->render('installation/showpop.html.twig', [
                'installation' => $installation,
                'tools'=> $tools,
            ]);
        } elseif($installation->getDemandeCourante()) {
            $paiement = $installation->getDemandeCourante()->getPaiement();
            return $this->render('paiement/showpop.html.twig', [
                'paiement' => $paiement,
                'tools'=> $tools,
            ]);
        }
    }

    #[Route('/{id}/edit', name: 'app_installation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Installation $installation, InstallationRepository $installationRepository): Response
    {
        $form = $this->createForm(InstallationType::class, $installation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('installation/edit.html.twig', [
            'installation' => $installation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_installation_delete', methods: ['POST'])]
    public function delete(Request $request, Installation $installation, InstallationRepository $installationRepository, DemandeRepository $demandeRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        if ($this->isCsrfTokenValid('delete'.$installation->getId(), $request->request->get('_token'))) {
            if($installation->getDemandeCourante() && $installation->getDemandeCourante()->getNumeroPassage()==2) {
                $demande=$demandeRepository->find($installation->getDemandeCourante()->getId());
                $demandeRepository->remove($demande);
            } else {
                if($installation->getDemandeCourante()) {
                    $demande=$demandeRepository->find($installation->getDemandeCourante()->getId());
                    $demandeRepository->remove($demande);
                }                
                $installationRepository->remove($installation);
            }
        }

        
        return $this->redirectToRoute($request->getSession()->get('page_liste_demande'), [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/showpdf0', name: 'app_installation_showpdf0', methods: ['GET'])]
    public function showpdf0(Request $request, Installation $installation)
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        // $pdfOptions->set('defaultFont', 'Courier');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('installation/showpdf0.html.twig', [
            'installation' => $installation,
            'title' => "Formulaire de demande COSSUEL"
        ]);
        
        $html.="\n";
        $html.= '<link rel="stylesheet" type="text/css" media="screen" href="'.$this->getParameter('css_directory').'/demande-A.css" />'; $html.="\n";
        // $html.= '<link rel="stylesheet" type="text/css" media="screen" href="'.$this->getParameter('css_directory').'/bootstrap.css" />'; $html.="\n";

        // echo $html;

        $filename = 'DemandeCOSSUEL'.$installation->getDemandeCourante()->getNumero();
        $fich = $this->getParameter('pdf_directory').'/'.$filename.'.pdf';

        // echo realpath($this->getParameter('photo_directory').'/css');
        // exit;

        $dompdf->getOptions()->setChroot(realpath($this->getParameter('css_directory')));
        //    $dompdf->setBasePath(realpath($this->getParameter('css_directory').'/'));

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'letter');

       // Render the HTML as PDF
        $dompdf->render();

        $output = $dompdf->output();
        file_put_contents($fich, $output);
    
        return $this->file($fich, 'fich_temp_'.date("YmdHis").'.pdf', ResponseHeaderBag::DISPOSITION_INLINE);

    }

    #[Route('/{id}/showpdf', name: 'app_installation_showpdf', methods: ['GET'])]
    public function showpdf(Request $request, Installation $installation, Pdf $knpSnappyPdf)
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('installation/showpdf.html.twig', [
            'installation' => $installation,
            'title' => "Formulaire de demande COSSUEL"
        ]);
        
        echo $html; exit;

        $filename = 'DemandeCOSSUEL_'.$installation->getDemandeCourante()->getNumero();
        $fich = $this->getParameter('pdf_directory').'/'.$filename.'.pdf';

        if(!file_exists($fich)) {
            $knpSnappyPdf
            ->setOption('no-outline', true)
            ->setOption('encoding', 'UTF-8')
            ->setOption('page-size','LETTER')
            ->generateFromHtml($html, $fich);
        }
    
        
        // display the file contents in the browser instead of downloading it
        return $this->file($fich, 'fich_temp_'.date("YmdHis").'.pdf', ResponseHeaderBag::DISPOSITION_INLINE);

        // return new Response(
        //     $knpSnappyPdf
        //     ->setOption('no-outline', true)
        //     ->setOption('encoding', 'UTF-8')
        //     ->setOption('page-size','LETTER')
        //     ->getOutputFromHtml($html),
        //     200,
        //     array(
        //         'Content-Type'          => 'application/pdf',
        //         'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
        //     )
        // );
    }

    #[Route('/{id}/facturepdf', name: 'app_installation_facturepdf', methods: ['GET'])]
    public function facturepdf(Request $request, Installation $installation, Pdf $knpSnappyPdf)
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('installation/facturepdf.html.twig', [
            'installation' => $installation,
            'title' => "Facture de demande COSSUEL"
        ]);
        echo $html; exit;
        $filename = 'FactureDemandeCOSSUEL'.$installation->getDemandeCourante()->getNumero();
        $fich = $this->getParameter('pdf_directory').'/'.$filename.'.pdf';

        if(!file_exists($fich)) {
            $knpSnappyPdf
            ->setOption('no-outline', true)
            ->setOption('encoding', 'UTF-8')
            ->setOption('page-size','LETTER')
            ->generateFromHtml($html, $fich);
        }
    
        // display the file contents in the browser instead of downloading it
        return $this->file($fich, 'fich_temp_'.date("YmdHis").'.pdf', ResponseHeaderBag::DISPOSITION_INLINE);

        //     return new Response(
        //     $knpSnappyPdf
        //     ->setOption('no-outline', true)
        //     ->setOption('encoding', 'UTF-8')
        //     ->setOption('page-size','LETTER')
        //     ->getOutputFromHtml($html),
        //     200,
        //     array(
        //         'Content-Type'          => 'application/pdf',
        //         'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
        //     )
        // );
    }

    #[Route('/{id}/recupdf', name: 'app_installation_recupdf', methods: ['GET'])]
    public function recupdf(Request $request, Installation $installation, Pdf $knpSnappyPdf)
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('installation/recupdf.html.twig', [
            'installation' => $installation,
            'title' => "Recu de paiement de demande COSSUEL"
        ]);
        // echo $html;
        $filename = 'PaiementDemandeCOSSUEL'.$installation->getDemandeCourante()->getNumero();
        $fich = $this->getParameter('pdf_directory').'/'.$filename.'.pdf';

        if(!file_exists($fich)) {
            $knpSnappyPdf
            ->setOption('no-outline', true)
            ->setOption('encoding', 'UTF-8')
            ->setOption('page-size','LETTER')
            ->generateFromHtml($html, $fich);
        }
        
        // display the file contents in the browser instead of downloading it
        return $this->file($fich, 'fich_temp_'.date("YmdHis").'.pdf', ResponseHeaderBag::DISPOSITION_INLINE);

        // return new Response(
        //     $knpSnappyPdf
        //     ->setOption('no-outline', true)
        //     ->setOption('encoding', 'UTF-8')
        //     ->setOption('page-size','LETTER')
        //     ->getOutputFromHtml($html),
        //     200,
        //     array(
        //         'Content-Type'          => 'application/pdf',
        //         'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
        //     )
        // );
    }

    
}
