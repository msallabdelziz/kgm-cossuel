<?php

namespace App\Services;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Tools
{

    /**
    * Entity Manager
    *
    * @var EntityManagerInterface
    */
    protected $em;
    
    private $client; 

    private $siteName;

    private $siteEmail;

    public function __construct(EntityManagerInterface $em, HttpClientInterface $client, MailerInterface $mailer, string $siteEmail, string $siteName)
    {
        $this->em = $em;
        $this->mailer = $mailer;
        $this->client = $client;

        $this->siteEmail=$siteEmail;
        $this->siteName=$siteName;
    }

    public static function dateEN2FR($x): string {
        if (! $x) {
            return "";
        }
        $sep = "-";
        if (strstr ( $x, "/" )) {
            $sep = "/";
        }
        if (strstr ( $x, "-" )) {
            $sep = "-";
        }
        $t = explode ( $sep, $x );
        if (strlen ( $t [2] ) > 2) {
            $a = $t [2];
            $m = $t [1];
            $j = $t [0];
            return "$a-$m-$j";
        } else {
            $a = $t [0];
            $m = $t [1];
            $j = $t [2];
            return "$j-$m-$a";
        }
    }

    public function notifMail(string $dest, string $mess, string $sujet=""): bool {
        $email = (new Email())
            ->from(new Address($this->siteEmail, $this->siteName))
            ->to($dest)
            ->subject($sujet)
            ->text($mess);
        ;

        $this->mailer->send($email);
        return true;
    }
    public function notifSMS(string $dest, string $mess, string $sujet=""): bool {
        $auth = 'Basic Y29zc3VlbDpDT1MyMDIyQGtnbQ==';
        
        $response = $this->client->request(
            'GET',
            'https://api.freebusiness.sn/post/sms/1/text/advanced', [
                'auth_basic' => ['cossuel', 'COS2022&kgm'],
                'headers' => [
                    'Authorization' => 'Basic Y29zc3VlbDpDT1MyMDIyQGtnbQ==',
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json'
                ],
                'body' => [
                    'from' => 'COSSUEL',
                    'to' => '011221773799200',
                    'text' => 'Salut'
                ]
            ]
        );
        $statusCode = $response->getStatusCode();

        if($statusCode  == 200) {
            echo "Connexion OK !";
           $content = $response->getContent();
           dd($content);
         }
        // $contentType = 'application/json'
        dd($response);
        // $content = $response->getContent();

        return true;
    }


}
