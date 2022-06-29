<?php

namespace App\Controller;

use App\Entity\Paiement;
use App\Entity\Remboursement;
use App\Entity\Utilisateur;
use App\Repository\AgenceRepository;
use App\Repository\AgentRepository;
use App\Repository\PaiementRepository;
use App\Repository\RemboursementRepository;
use App\Services\Tools;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/remboursement')]
class RemboursementController extends AbstractController
{
    #[Route('/all', name: 'app_remboursement_index')]
    public function index(Request $request, Tools $tools, PaginatorInterface $pgn, ManagerRegistry $doctrine, RemboursementRepository $remboursementRepository, AgentRepository $agentRepository, AgenceRepository $agenceRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        $em = $doctrine->getManager();
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        // Définition en session du module en cours
        $request->getSession()->set('menu', 'caisse');
        $request->getSession()->set('sousmenu', 'remboursement');
        $request->getSession()->set('page_liste_demande', 'app_remboursement_index');
        
        $affichage_demande=$request->getSession()->get('affichage_demande');

        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 
        
        $mode_affichage=$request->getSession()->get('affichage_demande');

        $val_agence=""; $restr_agence=0;
        if($agence && in_array($role, array('ROLE_REFERENT', 'ROLE_CONTROLEUR'))) {
            $val_agence=$agence->getId();
            $val_filtre["agence"] = $val_agence;
            $restr_agence=1;
            $les_agence = $agenceRepository->findBy(array("id"=>$agence->getId()), array("nom"=>"asc", ));
        } else {
            $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));
        }

        $val_usage=""; 
        $les_usage = array("domestique"=>"Domestique", "non_domestique"=>"Professionnel", "erp_ert"=>"ERP - ERT");

        $val_statut=""; 
        $les_statut = array("En Attente Validation", "Validé",);

        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            
            $val_usage = $request->request->get("val_usage");
            if($val_usage) { $val_filtre["usages"] = $val_usage; }
            
            $val_agence = $request->request->get("val_agence");
            if($val_agence) { $val_filtre["agence"] = $val_agence; }
            
            $val_statut = $request->request->get("val_statut");
            if($val_statut) { $val_filtre["etat"] = $val_statut; }
        }

        $list=$remboursementRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $list = $pgn->paginate($list, $request->query->getInt('page', 1), 20);

        return $this->render('remboursement/index.html.twig', [
            'page_list' => "app_remboursement_index",
            'les_remboursement' => $list,
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,

            'les_usage'=> $les_usage,
            'val_usage'=> $val_usage,

            'les_statut'=> $les_statut,
            'val_statut'=> $val_statut,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,
        ]);
    }

    #[Route('/{id}/add', name: 'app_remboursement_add')]
    public function add(Request $request, Paiement $paiement, PaiementRepository $paiementRepository, RemboursementRepository $remboursementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $remboursement = new Remboursement();
        $paiement=$paiementRepository->find($paiement);

        $form = $this->createFormBuilder($remboursement)
            ->add('motif', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => true,
                'label' => 'Motif du remboursement'
            ])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // $paiement->setE("Remboursement enregistré");
            // $paiementRepository->add($paiement);

            $remboursement->setPaiement($paiement);
            $remboursement->setValide(0);
            $remboursement->setDateDemande(new \DateTime());
            $remboursement->setMontant($paiement->getDemande()->getCout());
            $remboursement->setCreatedby($this->getUser()->getId());
            $remboursementRepository->add($remboursement);

            return $this->redirectToRoute('app_remboursement_show', array('id' => $remboursement->getId())); 
        }

        return $this->renderForm('remboursement/add.html.twig', [
            'paiement' => $paiement,
            'remboursementForm' => $form,
        ]);
    }

    #[Route('/{id}/add2', name: 'app_remboursement_add2')]
    public function add2(Request $request, Remboursement $remboursement, PaiementRepository $paiementRepository, RemboursementRepository $remboursementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $form = $this->createFormBuilder($remboursement)
        ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // $paiement->setE("Remboursement enregistré");
            // $paiementRepository->add($paiement);

            $remboursement->setUpdatedby($this->getUser()->getId());
            $remboursement->setUpdatedAt(new \DateTimeImmutable());
            $remboursement->setDateValidation(new \DateTime());
            $remboursement->setValide(1);
            $remboursementRepository->add($remboursement);

            $paiement=$paiementRepository->find($remboursement->getPaiement()->getId());
            $paiement->setEtatRembousement('1');
            $paiementRepository->add($paiement);
            
            return $this->redirectToRoute('app_remboursement_show', array('id' => $remboursement->getId())); 
        }

        return $this->renderForm('remboursement/add2.html.twig', [
            'remboursement' => $remboursement,
            'remboursementForm' => $form,
        ]);
    }

    #[Route('/{id}/rejet', name: 'app_remboursement_rejet')]
    public function rejet(Request $request, Remboursement $remboursement, PaiementRepository $paiementRepository, RemboursementRepository $remboursementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }

        $form = $this->createFormBuilder($remboursement)
        ->add('motifRejet', TextareaType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Motif du rejet'
        ])
        ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // $paiement->setE("Remboursement enregistré");
            // $paiementRepository->add($paiement);

            $remboursement->setRejete(1);
            $remboursement->setUpdatedby($this->getUser()->getId());
            $remboursement->setUpdatedAt(new \DateTimeImmutable());
            $remboursementRepository->add($remboursement);

            return $this->redirectToRoute('app_remboursement_show', array('id' => $remboursement->getId())); 
        }

        return $this->renderForm('remboursement/rejet.html.twig', [
            'remboursement' => $remboursement,
            'remboursementForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_remboursement_show', methods: ['GET'])]
    public function show(Remboursement $remboursement, Tools $tools, ManagerRegistry $doctrine): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager();
        return $this->render('remboursement/show.html.twig', [
            'remboursement' => $remboursement,

            'tools' => $tools,
        ]);
    }

    #[Route('/pop/{id}', name: 'app_remboursement_showpop', methods: ['GET'])]
    public function showpop(Remboursement $remboursement, Tools $tools, ManagerRegistry $doctrine): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); 
        return $this->render('remboursement/showpop.html.twig', [
            'remboursement' => $remboursement,

            'tools' => $tools,
        ]);
    }

}
