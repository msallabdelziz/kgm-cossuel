<?php

namespace App\Services;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class Tools
{

    /**
    * Entity Manager
    *
    * @var EntityManagerInterface
    */
    protected $em;
    
    private $siteName;

    private $siteEmail;

    public function __construct(EntityManagerInterface $em, MailerInterface $mailer, string $siteEmail, string $siteName)
    {
        $this->em = $em;
        $this->mailer = $mailer;

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
    

}
