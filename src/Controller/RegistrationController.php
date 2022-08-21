<?php

namespace App\Controller;

use App\Entity\Electricien;
use App\Entity\Proprietaire;
use App\Entity\Utilisateur;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier;
use App\Security\UserAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UserAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $user = new Utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $user, array('attr' => array('class' => 'row g-4 needs-validation')));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
            $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            // Quelle valeur prendre pour login: Telephone ou email ?
            if($form->get('type_login')->getData()=="Telephone") {
                $user->setLogin($user->getTelephone());
            } else {
                $user->setLogin($user->getEmail());
            }

            // Quelle valeur prendre pour type utilisateur ?
            if($form->get('type')->getData()=="Proprietaire") {
                $user->setType("Proprietaire");
                // Nouveau proprietaire à créer !!!
                $proprietaire = new Proprietaire();
                $proprietaire = $proprietaire->setFromUtilisateur($user);
                $entityManager->persist($proprietaire);
                $entityManager->flush();
                $user->setIdType($proprietaire->getId());
            } else {
                $user->setType("Electricien");
                // Nouveau electricien à créer !!!
                $electricien = new Electricien();
                $electricien = $electricien->setFromUtilisateur($user);
                $entityManager->persist($electricien);
                $entityManager->flush();
                $user->setIdType($electricien->getId());
            }
            $user->setRoles(["ROLE_PUBLIC"]);
            $entityManager->persist($user);
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    // ->from(new Address('alert@cossuel.sn', 'COSSUEL - Inscription'))
                    ->from(new Address('yatamala.net@gmail.com', 'COSSUEL - Inscription'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email

            // return $userAuthenticator->authenticateUser(
            //     $user,
            //     $authenticator,
            //     $request
            // );
            return $this->redirectToRoute('app_register_ok');
        }
        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));
            return $this->redirectToRoute('app_register_confirm');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Votre adresse email a été vérifiée avec succès.');

        return $this->redirectToRoute('main');
    }

    #[Route('/register_ok', name: 'app_register_ok')]
    public function registerOK(Request $request): Response
    {
        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Votre Compte a été créé avec succès.');

        return $this->render('registration/register_ok.html.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }

    #[Route('/register_confirm', name: 'app_register_confirm')]
    public function registerConfirm(Request $request): Response
    {
        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        return $this->render('registration/register_confirm.html.twig', [
        ]);
    }

    #[Route('/register_confirm2', name: 'app_register_confirm2')]
    public function sendEmailVerification(Request $request): Response
    {
        $user = $this->getUser();
        // generate a signed url and email it to the user
        $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
            (new TemplatedEmail())
                // ->from(new Address('alert@cossuel.sn', 'COSSUEL - Inscription'))
                ->from(new Address('yatamala.net@gmail.com', 'COSSUEL - Inscription'))
                ->to($user->getEmail())
                ->subject('Please Confirm your Email')
                ->htmlTemplate('registration/confirmation_email.html.twig')
        );
        return $this->redirectToRoute('app_register_ok');
    }

}
