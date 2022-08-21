<?php

namespace App\Repository;

use App\Entity\Installation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Installation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Installation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Installation[]    findAll()
 * @method Installation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InstallationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Installation::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Installation $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Installation $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Installation[] Returns an array of Installation objects
    //  */
    public function findByEtat($value)
    {
        $v="i.step = 0";
        if($value=="Saisie") { $v='i.step < 7'; }
        elseif($value=="Soumis") $v='i.step = 7 or i.step = 8';
        elseif($value=="Payé") $v='i.step = 9';
        elseif($value=="Validé") $v='i.step = 10';
        return $this->createQueryBuilder('i')
            ->andWhere($v)
            ->orderBy('i.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByRestr($val_rech, $val_filtre, $orderBy="", $page=0)
    {
        $les_col0=array("numero");
        $les_col1=array("compteur", "abonnement", "adresse", "nomSite", "usages", "activite", "habitation");
        $les_col2=array("nom", "prenom", "telephone", "email", "numPiece");
        $les_col3=array("nom", "prenom", "telephone", "email", "numPiece");
        $str='1 = 0';
        foreach($les_col1 as $col) {
            $str.=' or a.'.$col.' like :val';
        }
        foreach($les_col0 as $col) {
            $str.=' or b.'.$col.' like :val';
        }
        foreach($les_col2 as $col) {
            $str.=' or e.'.$col.' like :val';
        }
        foreach($les_col3 as $col) {
            $str.=' or p.'.$col.' like :val';
        }

        $q = $this->createQueryBuilder('a')
        ->leftjoin('App\Entity\Localite', 'l', 'WITH', 'l.id = a.localite')
        ->leftjoin('App\Entity\Demande', 'b', 'WITH', 'a.id = b.installation')
        ->leftjoin('App\Entity\Dossier', 'd', 'WITH', 'b.id = d.demande')
        ->leftjoin('App\Entity\Electricien', 'e', 'WITH', 'e.id = a.electricien')
        ->leftjoin('App\Entity\Proprietaire', 'p', 'WITH', 'p.id = a.proprietaire')
        ;
        if($val_rech) {
            $q->andWhere($str)
            ->setParameter('val', '%'.$val_rech.'%');
        }
        if(is_array($val_filtre) && count($val_filtre)) {
            $ix=0;
            foreach ($val_filtre as $p => $v) {
                if($p=="etat") {
                    $restr="a.step = 0";
                    if($v=="Saisie" or $v=="En Saisie") { $restr='a.step < 7'; }
                    elseif($v=="SaisieSoumis") $restr='(a.step <= 7)';
                    elseif($v=="Soumis0") $restr='(b.accepte=0 and (b.etat = 7))';
                    elseif($v=="Soumis") $restr='((a.step = 7))';
                    elseif($v=="Payé|Validé") $restr='a.step = 9 or (a.step = 10 and d.affecte=0)';
                    elseif($v=="Payé" || $v=="Payé, Attente Validation") $restr='a.step = 9';
                    elseif($v=="Validé") $restr='a.step = 10 and d.affecte=0';
                    elseif($v=="Paiement validé") $restr='a.step = 9';
                    elseif($v=="Validé, En Attente Affectation") $restr='a.step = 10 and d.affecte=0';
                    elseif($v=="Paiement enregistré") $restr='a.step = 8';
                    elseif($v=="En Attente Validation Soumission" || $v=="Soumis, Attente Validation" || $v=="En Attente Validation") $restr="a.step = 7 and b.accepte=0";
                    elseif($v=="Attente Paiement" || $v=="Soumis, Accepté" || $v=="Soumis, Validé") $restr="a.step = 7 and b.accepte=1";
                    elseif($v=="Soumis, Accepté, Payé") $restr="(a.step = 7 and b.accepte=1) or a.step=8";
                    
                    elseif($v=="Affecté, En Attente Visite") $restr="d.affecte = 1 and d.visite = 0 and d.rapport = 0 and d.attestation = 0";
                    elseif($v=="Visite Planifiée, En Attente de Rapport") $restr="d.affecte = 1 and d.visite = 1 and d.rapport = 0 and d.attestation = 0";
                    elseif($v=="Visite Réalisée, En Attente de Confirmation Rapport") $restr="d.affecte = 1 and d.visite = 1 and d.rapport = 1 and d.attestation = 0";
                    elseif($v=="Rapport confirmé, Clôture") $restr="d.affecte = 1 and d.visite = 1 and d.rapport = 1 and d.attestation = 1";
                    $q->andWhere($restr);
                } elseif($p=="agence") {
                    $q->andWhere('l.'.$p.' = :val'.$ix)
                    ->setParameter('val'.$ix, "$v");
                } elseif($p=="passage") {
                    $q->andWhere('b.numeroPassage = :val'.$ix)
                    ->setParameter('val'.$ix, "$v");
                } else {
                    $q->andWhere('a.'.$p.' = :val'.$ix)
                    ->setParameter('val'.$ix, "$v");
                }
                $ix++;
            }
        }
        if($orderBy) {
            $q->orderBy('a.'.$orderBy, 'ASC');
        } else {
            $q->orderBy('a.created_at', 'DESC');
        }
        if($page) {
            $q
            ->setFirstResult($page-1)
            ->setMaxResults(20);
        }
        // echo $sql=$q->getQuery()->getSQL();
        return $q->getQuery()->getResult();
    }
    
    public function findByUA($agence=null, $utilisateur=null)
    {
        $q = $this->createQueryBuilder('a')
        ->leftjoin('App\Entity\Localite', 'l', 'WITH', 'l.id = b.localite')
        // ->leftjoin('App\Entity\Demande', 'b', 'WITH', 'a.id = b.installation')
        // ->leftjoin('App\Entity\Electricien', 'e', 'WITH', 'e.id = a.electricien')
        // ->leftjoin('App\Entity\Proprietaire', 'p', 'WITH', 'p.id = a.proprietaire')
        ;
        if($agence) {
            $q->andWhere('l.agence = :val')
            ->setParameter('val', $agence->getId());
        }

        if($utilisateur) {
            $q->andWhere('a.createdBy = :val')
            ->setParameter('val', $utilisateur->getId());
        }

        $q->orderBy('a.createdAt', 'DESC');
        // if($page) {
        //     $q
        //     ->setFirstResult($page-1)
        //     ->setMaxResults(20);
        // }
        // echo $sql=$q->getQuery()->getSQL();
        return $q->getQuery()->getResult();
    }
    
    // /**
    //  * @return Installation[] Returns an array of Installation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Installation
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
