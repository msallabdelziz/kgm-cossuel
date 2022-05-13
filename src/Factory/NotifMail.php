<?php

namespace App\Factory;

use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
//use Symfony\Component\Mime\RawMessage;

class NotifMail{

    public function __construct(private MailerInterface $mailer){}

    public function notification($email,$contexte):void
    {
        $email=  (new  TemplatedEmail())
                ->from(new Address('yatamala.net@gmail.com', 'COSSUEL - Inscription'))
                ->to($email)
                ->subject('Inscription Cossuel')
                ->htmlTemplate('confirmation_inscription.html.twig')
                ->context([
                    'message' => $contexte,
                ]);
        $this->mailer->send($email);
    }
}
?>