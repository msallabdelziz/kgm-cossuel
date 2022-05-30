<?php

namespace App\Services;

use App\Entity\Demande;
use App\Entity\Dossier;
use App\Entity\Installation;
use App\Entity\Paiement;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Exception\SessionNotFoundException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
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

    public function __construct(EntityManagerInterface $em, HttpClientInterface $client=null, MailerInterface $mailer=null, string $siteEmail=null, string $siteName=null)
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
    
    public function gdroit_de($id_u, $ent, $id_ent):bool {
        $user = null;
        $user= $this->em->getRepository(Utilisateur::class)->find($id_u);
        $res=false;
        if($user) {
            if(strtolower($ent)=="installation") {
                $ent= $this->em->getRepository(Installation::class)->find($id_ent);
                $res=false;
                if($ent) { $res = ($ent->getCreatedBy() == $id_u); }
                return $res;
            }
            if(strtolower($ent)=="paiement") {
                $ent= $this->em->getRepository(Paiement::class)->find($id_ent);
                $res=false;
                if($ent) { $res = ($ent->getCreatedBy() == $id_u); }
                return $res;
            }
            if(strtolower($ent)=="demande") {
                $ent= $this->em->getRepository(Demande::class)->find($id_ent);
                $res=false;
                if($ent) { $res = ($ent->getCreatedBy() == $id_u); }
                return $res;
            }
            if(strtolower($ent)=="dossier") {
                $ent= $this->em->getRepository(Dossier::class)->find($id_ent);
                $res=false;
                if($ent) { $res = ($ent->getCreatedBy() == $id_u); }
                return $res;
            }
        }
        return $res;
    }

    public static function nbjours_entre($start, $end):?int {
    if (strtotime ( $start ) > strtotime ( $end )) {
            return null;
        }
        
        $sdate = strtotime ( $start );
        $edate = strtotime ( $end );
        
        $dates = array ();
        
        $xx = 0;
        for($i = $sdate; $i < $edate; $i += strtotime ( '+1 day', 0 )) {
            $xx ++;
        }
        
        return $xx;
    }

    public function getAgentUtilisateur(string $id): ?Utilisateur {
        $res = null;
        $res= $this->em->getRepository(Utilisateur::class)->findOneBy(array("type"=>"agent", "id_type"=>$id));
        return $res;
    }

    public function getUtilisateur(string $id): ?Utilisateur {
        $res = null;
        $res= $this->em->getRepository(Utilisateur::class)->find($id);
        return $res;
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
            'POST',
            'https://api.freebusiness.sn/sms/1/text/single', [
                // 'http_version'=>'1.1',
                // 'auth_basic' => ['cossuel', 'COS2022@kgm'],
                'headers' => [
                    'Authorization' => 'Basic Y29zc3VlbDpDT1MyMDIyQGtnbQ==',
                    'Content-Type' => 'application/json',
                    'Accept' => '*/*',
                    'Connection' => 'keep-alive',
                    'Accept-Encoding' => 'gzip, deflate, br'
                ],
                'body' => '
                {
                    "from" : "cossuel",
                    "to" : "'.$dest.'",
                    "text" : "'.$mess.'"
                }
                '
            ]
        );

        // $response = $this->client->request(
        //     'POST',
        //     'https://api.freebusiness.sn/sms/1/text/advanced', [
        //         // 'http_version'=>'1.1',
        //         // 'auth_basic' => ['cossuel', 'COS2022@kgm'],
        //         'headers' => [
        //             'Authorization' => 'Basic Y29zc3VlbDpDT1MyMDIyQGtnbQ==',
        //             'Content-Type' => 'application/json',
        //             'Accept' => '*/*',
        //             'Connection' => 'keep-alive',
        //             'Accept-Encoding' => 'gzip, deflate, br'
        //         ],
        //         'body' => '
        //         {
        //             "bulkId":"TestGroup",
        //             "messages":[
        //             {
        //                 "from":"cossuel",
        //                 "destinations":[
        //                     {
        //                         "to" : "221773799200",
        //                         "messageId" : "M1"
        //                     },
        //                     {
        //                         "to" : "221775755243",
        //                         "messageId" : "M2"
        //                     }
        //                 ],
        //                 "text" : "Merci !"
        //             }
        //             ]
        //         }
        //         '
        //     ]
        // );

        $statusCode = $response->getStatusCode();

        if($statusCode  == 200) {
            echo "Connexion OK !";
            $content = $response->toArray();
            $content = $response->getContent();
            // $session->getFlashBag()->add('success', 'Notification SMS envoyée !');
         } else {
            // $session->getFlashBag()->add('danger', 'Echec Envoi Notification SMS !');
        }
        return true;
    }


}
