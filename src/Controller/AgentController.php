<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Agent;
use App\Entity\Agence;
use App\Entity\AffectationsAgents;
use App\Entity\Utilisateur;
use App\Form\AgentType;
use App\Repository\AffectationsAgentsRepository;
use App\Repository\AgenceRepository;
use App\Repository\AgentRepository;
use App\Repository\ProfilRepository;
use App\Repository\UtilisateurRepository;
use App\Services\Tools;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Fpdf\AgentPDF;

#[Route('/agent', name: 'app_agent_')]
class AgentController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Request $request, PaginatorInterface $pgn, AgentRepository $agentRepository, AgenceRepository $agenceRepository, ProfilRepository $profilRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'agent');
        $request->getSession()->set('sousmenu', '');

        $val_agence=0; 
        $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));

        $val_profil=0; 
        $les_profil = $profilRepository->findBy(array(), array("nom"=>"asc", ));

        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            $val_agence = $request->request->get("val_agence");
            $val_profil = $request->request->get("val_profil");
            if($val_agence) { $val_filtre["id_agence"] = $val_agence; }
            if($val_profil) { $val_filtre["profil"] = $val_profil; }
        }
        $ag = $agentRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $ag= $pgn->paginate($ag, $request->query->getInt('page', 1), 20);
        return $this->render('agent/index.html.twig', [
            'les_agent' => $ag,
            'val_rech' => $val_rech,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'les_profil'=> $les_profil,
            'val_profil'=> $val_profil,
        ]);
    }


    #[Route('/add', name: 'add')]
    public function create(Request $request, ManagerRegistry $doctrine, AgenceRepository $agenceRepository, AgentRepository $agentRepository, SluggerInterface $slugger, AffectationsAgentsRepository $agaffRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $entityManager = $doctrine->getManager();
        $agent = new Agent();
        $form = $this->createForm(AgentType::class, $agent);
        $form->add(
            'agence',
            EntityType::class,
            [
                'attr' => ['class' => "form-select mb-2"],
                'mapped' => false,
                'class' => Agence::class,
                'choice_label' => 'nom',
                'placeholder' => '',
                'label' => 'Agence',
                'required' => false
            ]
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photoFile = $form->get('photo')->getData();
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

                $agent->setPhoto($newFilename);
            }
            
            $agentRepository->add($agent);
            $agence = $form->get('agence')->getData();
            if($agence) {
                $agaff = new AffectationsAgents();
                $agence = $agenceRepository->find($agence);
                //dump($agence);
                $agaff->setAgence($agence)
                    ->setAgent($agent)
                    ->setDateAffectation(new \DateTime());
                $agaffRepository->add($agaff);
            }

            $this->addFlash('success', 'Agent créé avec succès !.');

            return $this->redirectToRoute("app_agent_show", ['id'=>$agent->getId()]);
        }
        return $this->renderForm('agent/add.html.twig', [
            'agent' => $agent,
            'les_agent' => $agentRepository->findBy([], ['matricule' => 'asc']),
            'agentForm' => $form,
        ]);
    }



    #[Route('/update/{id}', name: 'edit')]
    public function update(AgentRepository $agentRepository, Tools $tools, UtilisateurRepository $utilisateurRepository, SluggerInterface $slugger, Agent $id, Request $request): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $agent = $agentRepository->find($id);

        $form = $this->createForm(AgentType::class, $agent);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $photoFile = $form->get('photo')->getData();
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

                $agent->setPhoto($newFilename);
            }
            $agentRepository->add($agent);
            // Si agent utilisateur
            $utilisateur = $utilisateurRepository->findOneBy(array("type"=>'agent', "id_type"=>$agent->getId()));
            if($utilisateur) {
                $profil="ROLE_USER";
                if($agent->getProfil()) {
                    $profil = "ROLE_".strtoupper($agent->getProfil()->getCode());
                }
                $utilisateur->setRoles([$profil]);
                $utilisateurRepository->add($utilisateur);
            }

            // $tools->notifMail("mlthioune@gmail.com", "Mise à jour agent effectuée !", "Notification COSSUEL");

            $this->addFlash('success', 'Les informations ont été enregistrées avec succès !.');
            return $this->redirectToRoute("app_agent_show", ['id'=>$agent->getId()]);
        }


        return $this->renderForm('agent/edit.html.twig', [
            'les_agent' => $agentRepository->findBy([], ['matricule' => 'asc']),
            'agent' => $agent,
            'agentForm' => $form,
        ]);
    }

    #[Route('/affecter/{id}', name: 'affect')]
    public function affecter(ManagerRegistry $doctrine, Agent $agent, AgentRepository $agentRepository, AgenceRepository $agenceRepository, AffectationsAgentsRepository $agaffRepository, Request $request): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $les_agent = $agentRepository->findAll();
        $agent = $agentRepository->find($agent);
        $agaff = new AffectationsAgents();
        $form = $this->createFormBuilder($agaff, ['method' => 'post'])
            ->add('agence',
            EntityType::class,
            [
                // 'mapped' => false,
                'class' => Agence::class,
                'attr' => ['class' => 'form-select-sm'],
                'choice_label' => 'nom',
                'data' => $agent->getAgence(),
                'placeholder' => '',
                'required' => true
            ])
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $agence = $agenceRepository->find($agaff->getAgence()->getId());
            if($agent->getAgence() != $agence) {
                $agent->setIdAgence($agence->getId());
                $agentRepository->add($agent);
                $agaff->setAgent($agent)->setDateAffectation(new \DateTime());
                $agaffRepository->add($agaff);
                $this->addFlash('success', 'Compte utilisateur créé avec succès !.');
            }
            $this->addFlash('success', 'Les informations ont été enregistrées avec succès !.');
            return $this->redirectToRoute("app_agent_show", ['id'=>$agent->getId()]);
        }
        return $this->renderForm('agent/affect.html.twig', [
            'les_agent' => $les_agent,
            'agent' => $agent,
            'formAgaff' => $form,
        ]);
    }

    #[Route('/show/{id}', name: 'show')]
    public function show(ManagerRegistry $doctrine, Agent $agent, AgentRepository $agentRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // $agent = $doctrine->getRepository(Agent::class)->find($agent);
        $les_agent = $agentRepository->findAll();
        if (!$agent) {
            throw $this->createNotFoundException(
                'N\'EXISTE PAS'
            );
        }
        // Si agent utilisateur
        $utilisateur = $doctrine->getRepository(Utilisateur::class)->findOneBy(array("type"=>'agent', "id_type"=>$agent->getId()));
        return $this->render('agent/show.html.twig', [
            'les_agent' => $les_agent,
            'agent' => $agent,
            'utilisateur' => $utilisateur,
        ]);
    }

    #[Route('/createuser/{id}', name: 'createuser')]
    public function createuser(Request $request, UserPasswordHasherInterface $userPasswordHasher, ManagerRegistry $doctrine, Agent $agent, AgentRepository $agentRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $entityManager = $doctrine->getManager();
        $les_agent = $entityManager->getRepository(Agent::class)->findAll();
        $agent = $entityManager->getRepository(Agent::class)->find($agent);
        $utilisateur = new Utilisateur();
        $form = $this->createFormBuilder($utilisateur, ['method' => 'POST'])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateur->setAdresse($agent->getAdresse());
            $utilisateur->setNom($agent->getNom());
            $utilisateur->setPrenom($agent->getPrenom());
            $utilisateur->setTelephone($agent->getTelephone());
            $utilisateur->setEmail($agent->getEmail());
            $utilisateur->setIdType($agent->getId());
            $utilisateur->setType("Agent");
            $utilisateur->setIsVerified(1);
            $utilisateur->setLogin($agent->getMatricule());
            $utilisateur->setPassword($agent->getMatricule());
                // encode the plain password
            $utilisateur->setPassword(
                $userPasswordHasher->hashPassword(
                        $utilisateur,
                        $agent->getMatricule()
                    )
                );
                
            $profil="ROLE_USER";
            if($agent->getProfil()) {
                $profil = "ROLE_".strtoupper($agent->getProfil()->getCode());
            }
            $utilisateur->setRoles([$profil]);
            $this->addFlash('success', 'Compte utilisateur créé pour l\'agent '.$agent);
            $entityManager->persist($utilisateur);
            $entityManager->flush();
            return $this->redirectToRoute("app_agent_show", ['id'=>$agent->getId()]);
        }
        return $this->renderForm('agent/createuser.html.twig', [
            'les_agent' => $les_agent,
            'agent' => $agent,
            'formUtil' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agent::class)->find($id);
        $entityManager->remove($ag);
        $entityManager->flush();
        return new Response('Suppresion effectué!');
    }


    #[Route('/pdfs', name: 'pdfs')]
    public function pdfs(Request $request,AgentPDF $pdf, ProfilRepository $profilRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository)
    {
        
       
        $pdf = new AgentPDF('L','mm','A4');

        // Nouvelle page A4 (incluant ici logo, titre et pied de page)
        $pdf->AddPage();
        // Polices par défaut : Helvetica taille 9
        $pdf->SetFont('Helvetica','B',9);
        // Couleur par défaut : noir
        $pdf->SetTextColor(0);
        // Compteur de pages {nb}
        $pdf->AliasNbPages();

        // AFFICHAGE EN-TÊTE DU TABLEAU
        // Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (70 mm)
        $position_entete = 60;
        // police des caractères
        $pdf->SetFont('Helvetica','',9);
        $pdf->SetTextColor(0);
        // on affiche les en-têtes du tableau
        $pdf->SetDrawColor(255,215,0); // Couleur du fond RVB
        $pdf->SetFillColor(255,215,0); // Couleur des filets RVB
        $pdf->SetTextColor(0); // Couleur du texte noir
        $pdf->SetY($position_entete);
        // position de colonne 1 (10mm à gauche)  
        $pdf->SetX(10);
        $pdf->Cell(50,8,'Matricule',1,0,'C',1);  // 60 >largeur colonne, 8 >hauteur colonne
        // position de la colonne 2 (70 = 10+60)
        $pdf->SetX(60); 
        $pdf->Cell(60,8,'Nom',1,0,'C',1);
        // position de la colonne 3 (130 = 70+60)
        $pdf->SetX(120); 
        $pdf->Cell(53,8,'Fonction',1,0,'C',1);
         // position de la colonne 3 (130 = 70+60)
         $pdf->SetX(173); 
         $pdf->Cell(55,8,utf8_decode('Téléphone'),1,0,'C',1);
          // position de la colonne 3 (130 = 70+60)
        $pdf->SetX(228); 
        $pdf->Cell(60,8,'Adresse Email',1,0,'C',1);


        $position_detail = 68; // Position ordonnée = $position_entete+hauteur de la cellule d'en-tête (60+8)
        $result2=$agentRepository->findBy([],['nom'=>'asc']);
        //dd($result2[0]->getCode());
        $ligne=0;
        for ($i=0; $i<count($result2);$i++) {
            $ligne = $ligne+1;
                if ($ligne == 15){
                    $pdf->AddPage();
                    $ligne = 0;
                    $position_detail=68;
                }
            $pdf->SetY($position_detail);
            $pdf->SetX(10);
            $pdf->MultiCell(50,8,utf8_decode($result2[$i]->getNom()),1,'C');
                // position abcisse de la colonne 2 (40 = 10 +30)  
            $pdf->SetY($position_detail);
            $pdf->SetX(60); 
            $pdf->MultiCell(60,8,utf8_decode($result2[$i]->getPrenom()),1,'C');
            // position abcisse de la colonne 3 (70 = 40+ 30)
            $pdf->SetY($position_detail);
            $pdf->SetX(120); 
            $pdf->MultiCell(53,8,utf8_decode($result2[$i]->getProfil()),1,'C');
            // position abcisse de la colonne 3 (100 = 70+ 30)
            $pdf->SetY($position_detail);
            $pdf->SetX(173); 
            $pdf->MultiCell(55,8,$result2[$i]->getTelephone(),1,'C');
            // position abcisse de la colonne 3 (130 = 100+ 30)
            $pdf->SetY($position_detail);
            $pdf->SetX(228); 
            $pdf->MultiCell(60,8,$result2[$i]->getEmail(),1,'C');

            // on incrémente la position ordonnée de la ligne suivante (+8mm = hauteur des cellules)  
            $position_detail += 8; 

            
        }
        
        $pdf->Output('agence.pdf','I');
    }


    #[Route('/pdf', name: 'pdf')]
    public function pdf(SessionInterface $session,Request $request,AgentPDF $pdf, ProfilRepository $profilRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository)
    {
        $session=$request->getSession();
        $id2=$session->get('id2');
        $id1=$session->get('id1');
        
        if ($id1==0 and $id2==0){
            $result2=$agentRepository->findBy([],['nom'=>'asc']);
            $pdf = new AgentPDF('L','mm','A4');
            $pdf->AddPage();
            $pdf->SetFont('Helvetica','B',9);
            $pdf->SetTextColor(0);
            $pdf->AliasNbPages();
            $position_entete = 60;
            $pdf->SetFont('Helvetica','',9);
            $pdf->SetTextColor(0);
            $pdf->SetDrawColor(255,215,0);
            $pdf->SetFillColor(255,215,0);
            $pdf->SetTextColor(0);
            $pdf->SetY($position_entete);
            $pdf->SetX(10);
            $pdf->Cell(50,8,'Matricule',1,0,'C',1);
            $pdf->SetX(60); 
            $pdf->Cell(60,8,'Nom',1,0,'C',1);
            $pdf->SetX(120); 
            $pdf->Cell(53,8,'Fonction',1,0,'C',1);
            $pdf->SetX(173); 
            $pdf->Cell(55,8,utf8_decode('Téléphone'),1,0,'C',1);
            $pdf->SetX(228); 
            $pdf->Cell(60,8,'Adresse Email',1,0,'C',1);
            $position_detail = 68; 
            $ligne=0;
            for ($i=0; $i<count($result2);$i++) {
                $ligne = $ligne+1;
                    if ($ligne == 15){
                        $pdf->AddPage();
                        $ligne = 0;
                        $position_detail=68;
                    }
                $pdf->SetY($position_detail);
                $pdf->SetX(10);
                $pdf->MultiCell(50,8,utf8_decode($result2[$i]->getNom()),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(60); 
                $pdf->MultiCell(60,8,utf8_decode($result2[$i]->getPrenom()),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(120); 
                $pdf->MultiCell(53,8,utf8_decode($result2[$i]->getProfil()),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(173); 
                $pdf->MultiCell(55,8,$result2[$i]->getTelephone(),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(228); 
                $pdf->MultiCell(60,8,$result2[$i]->getEmail(),1,'C');
                $position_detail += 8; 
            }
        }
    
        if ($id1 == 0 and $id2 != 0){
            $agence = $agenceRepository->find($id2);
            $result2=$agentRepository->findByAgence($agence);
            $pdf = new AgentPDF('L','mm','A4');
            $pdf->AddPage();
            $pdf->SetFont('Helvetica','B',9);
            $pdf->SetTextColor(0);
            $pdf->AliasNbPages();
            $position_entete = 60;
            $pdf->SetFont('Helvetica','',9);
            $pdf->SetTextColor(0);
            $pdf->SetDrawColor(255,215,0);
            $pdf->SetFillColor(255,215,0);
            $pdf->SetTextColor(0);
            $pdf->SetY($position_entete);
            $pdf->SetX(10);
            $pdf->Cell(50,8,'Matricule',1,0,'C',1);
            $pdf->SetX(60); 
            $pdf->Cell(60,8,'Nom',1,0,'C',1);
            $pdf->SetX(120); 
            $pdf->Cell(53,8,'Fonction',1,0,'C',1);
            $pdf->SetX(173); 
            $pdf->Cell(55,8,utf8_decode('Téléphone'),1,0,'C',1);
            $pdf->SetX(228); 
            $pdf->Cell(60,8,'Adresse Email',1,0,'C',1);
            $position_detail = 68; 
            $ligne=0;
            for ($i=0; $i<count($result2);$i++) {
                $ligne = $ligne+1;
                    if ($ligne == 15){
                        $pdf->AddPage();
                        $ligne = 0;
                        $position_detail=68;
                    }
                $pdf->SetY($position_detail);
                $pdf->SetX(10);
                $pdf->MultiCell(50,8,utf8_decode($result2[$i]->getNom()),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(60); 
                $pdf->MultiCell(60,8,utf8_decode($result2[$i]->getPrenom()),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(120); 
                $pdf->MultiCell(53,8,utf8_decode($result2[$i]->getProfil()),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(173); 
                $pdf->MultiCell(55,8,$result2[$i]->getTelephone(),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(228); 
                $pdf->MultiCell(60,8,$result2[$i]->getEmail(),1,'C');
                $position_detail += 8; 
            }
        }
        elseif ($id1!=0 and $id2 == 0){
            $prof = $profilRepository->find($id1);
            $result2=$agentRepository->findByProfil($prof);
            $pdf = new AgentPDF('L','mm','A4');
            $pdf->AddPage();
            $pdf->SetFont('Helvetica','B',9);
            $pdf->SetTextColor(0);
            $pdf->AliasNbPages();
            $position_entete = 60;
            $pdf->SetFont('Helvetica','',9);
            $pdf->SetTextColor(0);
            $pdf->SetDrawColor(255,215,0);
            $pdf->SetFillColor(255,215,0);
            $pdf->SetTextColor(0);
            $pdf->SetY($position_entete);
            $pdf->SetX(10);
            $pdf->Cell(50,8,'Matricule',1,0,'C',1);
            $pdf->SetX(60); 
            $pdf->Cell(60,8,'Nom',1,0,'C',1);
            $pdf->SetX(120); 
            $pdf->Cell(53,8,'Fonction',1,0,'C',1);
            $pdf->SetX(173); 
            $pdf->Cell(55,8,utf8_decode('Téléphone'),1,0,'C',1);
            $pdf->SetX(228); 
            $pdf->Cell(60,8,'Adresse Email',1,0,'C',1);
            $position_detail = 68; 
            $ligne=0;
            for ($i=0; $i<count($result2);$i++) {
                $ligne = $ligne+1;
                    if ($ligne == 15){
                        $pdf->AddPage();
                        $ligne = 0;
                        $position_detail=68;
                    }
                $pdf->SetY($position_detail);
                $pdf->SetX(10);
                $pdf->MultiCell(50,8,utf8_decode($result2[$i]->getNom()),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(60); 
                $pdf->MultiCell(60,8,utf8_decode($result2[$i]->getPrenom()),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(120); 
                $pdf->MultiCell(53,8,utf8_decode($result2[$i]->getProfil()),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(173); 
                $pdf->MultiCell(55,8,$result2[$i]->getTelephone(),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(228); 
                $pdf->MultiCell(60,8,$result2[$i]->getEmail(),1,'C');
                $position_detail += 8; 
            }
        }
        elseif ($id1!=0 and $id2!=0){
            $result2=$agentRepository->filtrePdf($id1,$id2);
            $pdf = new AgentPDF('L','mm','A4');
            $pdf->AddPage();
            $pdf->SetFont('Helvetica','B',9);
            $pdf->SetTextColor(0);
            $pdf->AliasNbPages();
            $position_entete = 60;
            $pdf->SetFont('Helvetica','',9);
            $pdf->SetTextColor(0);
            $pdf->SetDrawColor(255,215,0);
            $pdf->SetFillColor(255,215,0);
            $pdf->SetTextColor(0);
            $pdf->SetY($position_entete);
            $pdf->SetX(10);
            $pdf->Cell(50,8,'Matricule',1,0,'C',1);
            $pdf->SetX(60); 
            $pdf->Cell(60,8,'Nom',1,0,'C',1);
            $pdf->SetX(120); 
            $pdf->Cell(53,8,'Fonction',1,0,'C',1);
            $pdf->SetX(173); 
            $pdf->Cell(55,8,utf8_decode('Téléphone'),1,0,'C',1);
            $pdf->SetX(228); 
            $pdf->Cell(60,8,'Adresse Email',1,0,'C',1);
            $position_detail = 68; 
            $ligne=0;
            for ($i=0; $i<count($result2);$i++) {
                $ligne = $ligne+1;
                    if ($ligne == 15){
                        $pdf->AddPage();
                        $ligne = 0;
                        $position_detail=68;
                    }
                $pdf->SetY($position_detail);
                $pdf->SetX(10);
                $pdf->MultiCell(50,8,utf8_decode($result2[$i]->getNom()),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(60); 
                $pdf->MultiCell(60,8,utf8_decode($result2[$i]->getPrenom()),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(120); 
                $pdf->MultiCell(53,8,utf8_decode($result2[$i]->getProfil()),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(173); 
                $pdf->MultiCell(55,8,$result2[$i]->getTelephone(),1,'C');
                $pdf->SetY($position_detail);
                $pdf->SetX(228); 
                $pdf->MultiCell(60,8,$result2[$i]->getEmail(),1,'C');
                $position_detail += 8; 
            }
        }
        
        
        $pdf->Output('agence.pdf','I');
    }



}
