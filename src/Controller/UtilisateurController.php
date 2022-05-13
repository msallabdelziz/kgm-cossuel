<?php

namespace App\Controller;

use App\Entity\Electricien;
use App\Entity\Proprietaire;
use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use App\Repository\ElectricienRepository;
use App\Repository\ProprietaireRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

#[Route('/utilisateur')]
class UtilisateurController extends AbstractController
{
    #[Route('/', name: 'app_utilisateur_index', methods: ['GET', 'POST'])]
    public function index(Request $request, UtilisateurRepository $utilisateurRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'utilisateur');
        $request->getSession()->set('sousmenu', '');

        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
        }
        return $this->render('utilisateur/index.html.twig', [
            'les_utilisateur' => $utilisateurRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page),
            'val_rech' => $val_rech,
        ]);
    }

    #[Route('/add', name: 'app_utilisateur_add', methods: ['GET', 'POST'])]
    public function new(Request $request, UtilisateurRepository $utilisateurRepository, UserPasswordHasherInterface $userPasswordHasher, ElectricienRepository $electricienRepository, ProprietaireRepository $proprietaireRepository): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form 
        ->add('type', ChoiceType::class, [
            'choices'  => [
                'Electricien' => 'Electricien',
                'Propriétaire Installation' => 'Proprietaire',
            ],
            'attr' => [
                'class' => 'form-select'
            ],
            'data' => "Electricien",
            'label' => 'Profil Utilisateur'
        ])
        ->add('plainPassword', PasswordType::class, [
            // instead of being set onto the object directly,
            // this is read and encoded in the controller
            'mapped' => false,
            'attr' => [
                'autocomplete' => 'new-password',
                'class' => 'form-control'
            ],
            'label' => 'Mot de passe',
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez entrer un mot de passe',
                ]),
                new Length([
                    'min' => 6,
                    'minMessage' => 'Le mot de passe doit comporter au moins {{ limit }} caractères',
                    // max length allowed by Symfony for security reasons
                    'max' => 4096,
                ]),
            ],
        ])
        ->add('typePiece', ChoiceType::class, [
            'mapped' => false,
            'choices'  => [
                'CNI' => 'CNI',
                'Permis de conduire' => 'Permis de conduire',
                'Passeport' => 'Passeport',
                'Autre' => 'Autre',
            ],
            'attr' => [
                'class' => 'form-select'
            ],
            'data' => "CNI",
            'label' => 'Type Pièce'
        ])
        ->add('numPiece', TextType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-control'
            ],
            'constraints' => [
                new Regex('/^(0|[1-9][0-9]*)$/')
            ],
            'required' => true,
            'label' => 'Numéro Piece'
        ])
        ->add('type_login', ChoiceType::class, [
            'choices'  => [
                'Mon Email' => 'Email',
                'Mon numéro de téléphone' => 'Telephone',
            ],
            'mapped' => false,
            'attr' => [
                'class' => 'form-select'
            ],
            // 'data' => "Email",
            'label' => 'Identifiant à utiliser'
        ])
        ->add('plainPassword', RepeatedType::class, [
            // instead of being set onto the object directly,
            // this is read and encoded in the controller
            'type' => PasswordType::class,
            'invalid_message' => 'Les mots de passe doivent correspondre !',
            'mapped' => false,
            'required' => true,
            'first_options'  => [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Mot de passe'
            ],
            'second_options' => [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Répéter le Mot de passe'
            ],
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez entrer à nouveau le mot de passe',
                ]),
                new Length([
                    'min' => 6,
                    'minMessage' => 'Le mot de passe doit comporter au moins {{ limit }} caractères',
                    // max length allowed by Symfony for security reasons
                    'max' => 4096,
                ]),
            ],
        ])
    ;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $utilisateur->setPassword(
                $userPasswordHasher->hashPassword(
                        $utilisateur,
                        $form->get('plainPassword')->getData()
                    )
                );
            // Quelle valeur prendre pour login: Telephone ou email ?
            if($form->get('type_login')->getData()=="Telephone") {
                $utilisateur->setLogin($utilisateur->getTelephone());
            } else {
                $utilisateur->setLogin($utilisateur->getEmail());
            }
            
            // Quelle valeur prendre pour type utilisateur ?
            if($form->get('type')->getData()=="Proprietaire") {
                $utilisateur->setType("Proprietaire");
                $proprietaire = new Proprietaire();
                $proprietaire = $proprietaire->setFromUtilisateur($utilisateur);
                $proprietaire->setTypePiece($form->get('typePiece')->getData()); 
                $proprietaire->setNumPiece($form->get('numPiece')->getData());
                $proprietaireRepository->add($proprietaire);
                $utilisateur->setIdType($proprietaire->getId());
            } else {
                $utilisateur->setType("Electricien");
                $electricien = new Electricien();
                $electricien = $electricien->setFromUtilisateur($utilisateur);
                $electricien->setTypePiece($form->get('typePiece')->getData()); 
                $electricien->setNumPiece($form->get('numPiece')->getData());
                $electricienRepository->add($electricien);
                $utilisateur->setIdType($electricien->getId());
            }
            $utilisateur->setIsVerified(true);
            $utilisateur->setRoles(["ROLE_CLIENT"]);
            $utilisateurRepository->add($utilisateur);
            return $this->redirectToRoute("app_utilisateur_show", ['id'=>$utilisateur->getId()]);
        }

        return $this->renderForm('utilisateur/new.html.twig', [
            'les_utilisateur' => $utilisateurRepository->findAll(),
            'utilisateurForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_utilisateur_show', methods: ['GET'])]
    public function show(Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('utilisateur/show.html.twig', [
            'les_utilisateur' => $utilisateurRepository->findAll(),
            'utilisateur' => $utilisateur,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_utilisateur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurRepository->add($utilisateur);
            return $this->redirectToRoute("app_utilisateur_show", ['id'=>$utilisateur->getId()]);
        }

        return $this->renderForm('utilisateur/edit.html.twig', [
            'les_utilisateur' => $utilisateurRepository->findAll(),
            'utilisateur' => $utilisateur,
            'utilisateurForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_utilisateur_delete', methods: ['POST'])]
    public function delete(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            $utilisateurRepository->remove($utilisateur);
        }

        return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
    }
}
