<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Entity\Agent;
use App\Entity\Demande;
use App\Entity\Departement;
use App\Entity\Dossier;
use App\Entity\Electricien;
use App\Entity\Installation;
use App\Entity\Localite;
use App\Entity\Proprietaire;
use App\Entity\Region;
use App\Entity\TypeConstruction;
use App\Entity\Utilisateur;
use App\Form\ElectricienType;
use App\Repository\AgentRepository;
use App\Repository\DemandeRepository;
use App\Repository\DepartementRepository;
use App\Repository\DossierRepository;
use App\Repository\ElectricienRepository;
use App\Repository\InstallationRepository;
use App\Repository\LocaliteRepository;
use App\Repository\PaiementRepository;
use App\Repository\PieceJointeRepository;
use App\Repository\ProprietaireRepository;
use App\Repository\RegionRepository;
use App\Repository\TypeConstructionRepository;
use App\Services\Tools;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Test\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[Route('/demande')]
class DemandeController extends AbstractController
{
    #[Route('/{id}', name: 'app_demande_show', methods: ['GET', 'POST'])]
    public function show(Request $request, Demande $demande, Tools $tools, ManagerRegistry $doctrine, DemandeRepository $demandeRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this || !$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); 
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();

        if($request->request->count()) {
            $form = $this->createFormBuilder()->getForm();
            $form->handleRequest($request);
            $data=$form->getExtraData();

            $installation=$demande->getInstallation();
            if(isset($data["edit1"]) && $data["edit1"]) {
                $localite=$data['localite'];
                $adresse=$data['adresse'];
                $habitation=$data['habitation'];

                $localite=$em->getRepository(Localite::class)->find($localite);
                $installation->setLocalite($localite);
                $installation->setAdresse($adresse);
                $installation->setHabitation($habitation);
                $em->getRepository(Installation::class)->add($installation);
            }
            if(isset($data["edit2"]) && $data["edit2"]) {
                $nom=$data['nom'];
                $prenom=$data['prenom'];
                $telephone=$data['telephone'];
                $email=$data['email'];
                $adresse=$data['adresse'];
                $numpiece=$data['numPiece'];
                $electricien=$installation->getElectricien();
                $change_elec1=($electricien->getTelephone()!=$telephone && ($electricien->getPrenom()!=$prenom || $electricien->getNom()!=$nom));
                $change_elec2=($electricien->getNumPiece()!=$numpiece && ($electricien->getPrenom()!=$prenom || $electricien->getNom()!=$nom));
                if($change_elec1 || $change_elec2) {
                    $electricien2=clone $electricien;
                    $electricien2->restId();
                    $electricien=$electricien2;
                }
                $electricien->setAdresse($adresse);
                $electricien->setNom($nom);
                $electricien->setPrenom($prenom);
                $electricien->setEmail($email);
                $electricien->setTelephone($telephone);
                $electricien->setNumPiece($numpiece);
                $em->getRepository(Electricien::class)->add($electricien);
                $installation->setElectricien($electricien);
                $em->getRepository(Installation::class)->add($installation);
            }

            if(isset($data["edit3"]) && $data["edit3"]) {
                $nom=$data['nom'];
                $prenom=$data['prenom'];
                $telephone=$data['telephone'];
                $email=$data['email'];
                $adresse=$data['adresse'];
                $numpiece=$data['numPiece'];
                $proprietaire=$installation->getProprietaire();
                $change_prop1=($proprietaire->getTelephone()!=$telephone && ($proprietaire->getPrenom()!=$prenom || $proprietaire->getNom()!=$nom));
                $change_prop2=($proprietaire->getNumPiece()!=$numpiece && ($proprietaire->getPrenom()!=$prenom || $proprietaire->getNom()!=$nom));
                if($change_prop1 || $change_prop2) {
                    $proprietaire2=clone $proprietaire;
                    $proprietaire2->restId();
                    $proprietaire=$proprietaire2;
                }
                $proprietaire->setAdresse($adresse);
                $proprietaire->setNom($nom);
                $proprietaire->setPrenom($prenom);
                $proprietaire->setEmail($email);
                $proprietaire->setTelephone($telephone);
                $proprietaire->setNumPiece($numpiece);
                $em->getRepository(Proprietaire::class)->add($proprietaire);
                $installation->setProprietaire($proprietaire);
                $em->getRepository(Installation::class)->add($installation);
            }

            $this->addFlash("success", "Les informations ont été modifiées !");
            return $this->redirectToRoute('app_demande_show', array('id' => $demande->getId())); 
        }

        return $this->render('demande/show.html.twig', [
            'paiement' => $paiement,

            'tools' => $tools,
        ]);
    }

    #[Route('/pop/{id}', name: 'app_demande_showpop', methods: ['GET'])]
    public function showpop(Demande $demande, Tools $tools, ManagerRegistry $doctrine, DemandeRepository $demandeRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this || !$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); 
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();
        return $this->render('demande/showpop.html.twig', [
            'paiement' => $paiement,
            'tools' => $tools,
        ]);
    }

    #[Route('/{id}/histo', name: 'app_demande_histo', methods: ['GET'])]
    public function showtime(Demande $demande, Tools $tools, EntityManagerInterface $em, DemandeRepository $demandeRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this || !$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();
        if($paiement) {
            return $this->render('dossier/showtime.html.twig', [
                'demande' => $demande,
                'paiement' => $paiement,
                'tools' => $tools,
            ]);
        } else {
            return $this->render('dossier/showtime.html.twig', [
                'demande' => $demande,
                'tools' => $tools,
            ]);
        }
    }

    #[Route('/{id}/valid', name: 'app_demande_valid')]
    public function valid(Request $request, Demande $demande, DemandeRepository $demandeRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository, InstallationRepository $installationRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this || !$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();

        $localite=$demande->getInstallation()->getLocalite();
        $dossier = new Dossier;
        $dossier->setDemande($demande);
        $form = $this->createFormBuilder($dossier)
        ->add('referent', EntityType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-select',
                'size' => '5'
            ],
            'query_builder' => function (AgentRepository $er) use ($localite) {
                return $er->createQueryBuilder('agt')
                ->select('agt')
                ->join('App\Entity\Profil', 'prof', 'WITH', 'agt.profil = prof.id')
                ->leftJoin('App\Entity\Localite', 'loc', 'WITH', 'agt.id_agence = loc.agence or agt.id_agence is null')
                ->where('loc.id = :val')
                ->andWhere('prof.code = :val2')
                ->setParameter('val', $localite->getId())
                ->setParameter('val2', 'referent')
                ;
            },
            'class' => Agent::class,
            'label' => 'Désignation du Référent chargé du dossier',
            'choice_label' => function ($agent) {
                return "[".$agent->getMatricule()."] ".$agent->getPrenom()." ".$agent->getNom()." - ".$agent->getAgence();
            },
            'required' => true
        ])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 10;
            $installation=$installationRepository->find($demande->getInstallation());
            $installation->setStep($step);
            $installationRepository->add($installation);

            $demande->setEtat("Demande validée");
            $demande->setValide(1);
            $demandeRepository->add($demande);

            $id_agent=$form->get('referent')->getData();
            if($id_agent) {
                $agent=$agentRepository->find($id_agent);
                $dossier->setReferent($agent);
            } 
            $dossier->setDateCreation(new DateTime());
            $dossier->setCreatedby($this->getUser()->getId());
            $dossier->setNum($demande->getNumero());
            $dossierRepository->add($dossier);
            $demande->setDossier($dossier);
            $demandeRepository->add($demande);

            $this->addFlash("success", "La demande a été validée. Le dossier est créé et affecté au référent ".$dossier->getReferent()." !");
            return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        }

        return $this->renderForm('demande/valid.html.twig', [
            'demande' => $demande,
            'paiement' => $paiement,
            'dossierForm' => $form,
        ]);
    }

    // ---------------------------------------------------------------------------------------
    // EDITION BLOC INFORMATIONS DE LA DEMANDE
    // ---------------------------------------------------------------------------------------

    #[Route('/{id}/edit1', name: 'app_installation_edit1', methods: ['GET', 'POST'])]
    public function edit1(Request $request, Tools $tools, ManagerRegistry $doctrine, Installation $installation = null, InstallationRepository $installationRepository, DepartementRepository $departRepo, RegionRepository $regionRepo, LocaliteRepository $localiteRepo): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this || !$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        $installation=$installationRepository->find($installation);
        if(!$installation) { return false; }
        
        // $form = $this->createForm(InstallationType::class, $installation);
        $formBuilder = $this->createFormBuilder($installation);
        $form=$formBuilder
        ->add('edit1', HiddenType::class, [
            'mapped' => false,
            'data' =>1,
        ])
        ->add('localite', EntityType::class, [
            'mapped' => true,
            'attr' => [
                'class' => 'form-select'
            ],
            'class' => Localite::class,
            'query_builder' => function (LocaliteRepository $er) use ($installation) {
                    return $er->createQueryBuilder('r');
            },
            'choice_label' => 'nom',
            'label' => 'Localité',
            'group_by' => 'departement',
            'data' => $installation->getLocalite(),
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
            // 'label' => 'Complément Adresse'
            'label' => 'Ancien Numéro Dossier'
        ])
        ->getForm();
        
        
        $form->handleRequest($request);

        return $this->renderForm('installation/edit1.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    // ---------------------------------------------------------------------------------------
    // EDITION BLOC INFORMATIONS ELECTRICIEN
    // ---------------------------------------------------------------------------------------
    #[Route('/{id}/edit2', name: 'app_installation_edit2', methods: ['GET', 'POST'])]
    public function edit2(Request $request, Tools $tools, ManagerRegistry $doctrine, Installation $installation = null, InstallationRepository $installationRepository, DepartementRepository $departRepo, RegionRepository $regionRepo, LocaliteRepository $localiteRepo): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this || !$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        $installation=$installationRepository->find($installation);
        if(!$installation) { return false; }

        $electricien=$em->getRepository(Electricien::class)->find($installation->getElectricien()->getId());
        // $form = $this->createForm(InstallationType::class, $installation);
        // $form = $this->createForm(ElectricienType::class, $electricien);
        $formBuilder = $this->createFormBuilder($electricien);
        $form=$formBuilder
        ->add('edit2', HiddenType::class, [
            'mapped' => false,
            'data' =>1,
        ])
        ->add('prenom', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Prénom'
        ])
        ->add('nom', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Nom'
        ])
        ->add('adresse', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => false,
            'label' => 'Adresse'
        ])
        ->add('telephone', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Téléphone'
        ])
        ->add('email', EmailType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => false,
            'label' => 'Email'
        ])
        ->add('numPiece', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Numéro Piece'
        ])
        ->getForm();
        
        $form->handleRequest($request);

        return $this->renderForm('installation/edit2.html.twig', [
            'installation' => $installation,
            'electricien' => $electricien,
            'installationForm' => $form,
        ]);
    }

    // ---------------------------------------------------------------------------------------
    // EDITION BLOC INFORMATIONS Proprietaire
    // ---------------------------------------------------------------------------------------
    #[Route('/{id}/edit3', name: 'app_installation_edit3', methods: ['GET', 'POST'])]
    public function edit3(Request $request, Tools $tools, ManagerRegistry $doctrine, Installation $installation = null, InstallationRepository $installationRepository, DepartementRepository $departRepo, RegionRepository $regionRepo, LocaliteRepository $localiteRepo): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this || !$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); 
        $userConn = $em->getRepository(Utilisateur::class)->find($this->getUser()->getId());
        $role=$userConn->getRoles()[0];
        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
            $agent=$request->getSession()->get('agent');
        }

        $installation=$installationRepository->find($installation);
        if(!$installation) { return false; }
        $propritaire=$em->getRepository(Proprietaire::class)->find($installation->getProprietaire()->getId());
        $formBuilder = $this->createFormBuilder($propritaire);
        $form=$formBuilder
        ->add('edit3', HiddenType::class, [
            'mapped' => false,
            'data' =>1,
        ])
        ->add('prenom', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Prénom'
        ])
        ->add('nom', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Nom'
        ])
        ->add('adresse', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => false,
            'label' => 'Adresse'
        ])
        ->add('telephone', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Téléphone'
        ])
        ->add('email', EmailType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => false,
            'label' => 'Email'
        ])
        ->add('numPiece', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Numéro Piece'
        ])
        ->getForm();
        
        $form->handleRequest($request);

        return $this->renderForm('installation/edit2.html.twig', [
            'installation' => $installation,
            'propritaire' => $propritaire,
            'installationForm' => $form,
        ]);
    }

}
