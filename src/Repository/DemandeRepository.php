<?php

namespace App\Repository;

use App\Entity\Demande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Demande|null find($id, $lockMode = null, $lockVersion = null)
 * @method Demande|null findOneBy(array $criteria, array $orderBy = null)
 * @method Demande[]    findAll()
 * @method Demande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DemandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Demande::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Demande $entity, bool $flush = true): void
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
    public function remove(Demande $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findByRestr($val_rech, $val_filtre, $orderBy="", $page=0)
    {
        // $les_col0=array("numero");
        $les_col1=array("compteur", "abonnement", "adresse", "nomSite", "usages", "activite", "habitation");
        $les_col2=array("nom", "prenom", "telephone", "email", "numPiece");
        $les_col3=array("nom", "prenom", "telephone", "email", "numPiece");
        $str='1 = 0';
        foreach($les_col1 as $col) {
            $str.=' or i.'.$col.' like :val';
        }
        foreach($les_col2 as $col) {
            $str.=' or e.'.$col.' like :val';
        }
        foreach($les_col3 as $col) {
            $str.=' or p.'.$col.' like :val';
        }

        $q = $this->createQueryBuilder('a')
        ->leftjoin('App\Entity\Installation', 'i', 'WITH', 'i.id = a.installation')
        ->leftjoin('App\Entity\Paiement', 'pm', 'WITH', 'pm.id = a.paiement')
        ->leftjoin('App\Entity\Localite', 'l', 'WITH', 'l.id = i.localite')
        ->leftjoin('App\Entity\Electricien', 'e', 'WITH', 'e.id = i.electricien')
        ->leftjoin('App\Entity\Proprietaire', 'p', 'WITH', 'p.id = i.proprietaire')
        ;
        if($val_rech) {
            $q->andWhere($str)
            ->setParameter('val', '%'.$val_rech.'%');
        }
        if(is_array($val_filtre) && count($val_filtre)) {
            $ix=0;
            foreach ($val_filtre as $p => $v) {
                if($p=="etat") {
                    $restr="i.step = 0";
                    if($v=="Saisie") { $restr='i.step < 7'; }
                    elseif($v=="Soumis") $restr='i.step = 7 or i.step = 8';
                    elseif($v=="Payé") $restr='i.step = 9';
                    elseif($v=="Validé") $restr='i.step = 10';
                    $q->andWhere($restr);
                } elseif($p=="paiement_deb") {
                    $q->andWhere('pm.datePaiement >= :val'.$ix)
                    ->setParameter('val'.$ix, "$v");
                } elseif($p=="mode_paiement") {
                    $q->andWhere('pm.mode = :val'.$ix)
                    ->setParameter('val'.$ix, "$v");
                } elseif($p=="paiement_fin") {
                    $q->andWhere('pm.datePaiement <= :val'.$ix)
                    ->setParameter('val'.$ix, "$v");
                } elseif($p=="agence") {
                    $q->andWhere('l.'.$p.' = :val'.$ix)
                    ->setParameter('val'.$ix, "$v");
                } else {
                    $q->andWhere('i.'.$p.' = :val'.$ix)
                    ->setParameter('val'.$ix, "$v");
                }
                $ix++;
            }
        }
        if($orderBy) {
            $q->orderBy('a.'.$orderBy, 'ASC');
        }
        if($page) {
            $q
            ->setFirstResult($page-1)
            ->setMaxResults(20);
        }
        // echo $sql=$q->getQuery()->getSQL();
        return $q->getQuery()->getResult();
    }
    
    public function findByRestr2($val_filtre, $orderBy="", $page=0)
    {
        $q = $this->createQueryBuilder('a')
        ->leftjoin('App\Entity\Installation', 'i', 'WITH', 'i.id = a.installation')
        ->leftjoin('App\Entity\Localite', 'l', 'WITH', 'l.id = i.localite')
        ->leftjoin('App\Entity\Dossier', 'd', 'WITH', 'd.demande = a.id')
        ->leftjoin('App\Entity\Paiement', 'p', 'WITH', 'p.demande = a.id')
        ->leftjoin('App\Entity\Visite', 'v', 'WITH', 'v.dossier = d.id')
        ;
        if(is_array($val_filtre) && count($val_filtre)) {
            $ix=0;
            foreach ($val_filtre as $p => $v) {
                $q->andWhere($p.' = :val'.$ix)
                ->setParameter('val'.$ix, "$v");
                $ix++;
            }
        }
        if($orderBy) {
            $q->orderBy('a.'.$orderBy, 'ASC');
        }
        if($page) {
            $q
            ->setFirstResult($page-1)
            ->setMaxResults(20);
        }
        // echo $sql=$q->getQuery()->getSQL();
        return $q->getQuery()->getResult();
    }
    
    public function findBy2($val_filtre, $orderBy="", $page=0)
    {

        $q = $this->createQueryBuilder('a');
        $q->select('a')
        ->join('App\Entity\Installation', 'i', 'WITH', 'a.installation = i.id')
        ->join('App\Entity\Localite', 'l', 'WITH', 'i.localite = l.id');
        if(is_array($val_filtre) && count($val_filtre)) {
            $restr="";
            $ix=0;
            foreach ($val_filtre as $p => $v) {
                if($p=="agence") {
                    $q->andWhere('l.'.$p.' = :val'.$ix)
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
        }
        if($page) {
            $q
            ->setFirstResult($page-1)
            ->setMaxResults(20);
        }
        // echo $sql=$q->getQuery()->getSQL();
        return $q->getQuery()->getResult();
    }
        
    // /**
    //  * @return Demande[] Returns an array of Demande objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Demande
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
