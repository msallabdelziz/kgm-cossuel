<?php

namespace App\Repository;

use App\Entity\Remboursement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Remboursement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Remboursement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Remboursement[]    findAll()
 * @method Remboursement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RemboursementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Remboursement::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Remboursement $entity, bool $flush = true): void
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
    public function remove(Remboursement $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findByRestr($val_rech, $val_filtre, $orderBy="", $page=0)
    {
        $les_col0=array("num");
        $les_col1=array("compteur", "abonnement", "adresse", "nomSite", "usages", "activite", "habitation");
        $les_col2=array("numero");
        $str='1 = 0';
        foreach($les_col0 as $col) {
            $str.=' or a.'.$col.' like :val';
        }
        foreach($les_col1 as $col) {
            $str.=' or b.'.$col.' like :val';
        }
        foreach($les_col2 as $col) {
            $str.=' or c.'.$col.' like :val';
        }
        $q = $this->createQueryBuilder('a');
        $q->select('a')
        ->join('App\Entity\Paiement', 'p', 'WITH', 'p.id = a.paiement')
        ->join('App\Entity\Demande', 'c', 'WITH', 'p.demande = c.id')
        ->join('App\Entity\Installation', 'b', 'WITH', 'c.installation = b.id')
        ->leftjoin('App\Entity\Localite', 'l', 'WITH', 'l.id = b.localite')
        ;
        if($val_rech) {
            $q->andWhere($str)
            ->setParameter('val', '%'.$val_rech.'%');
        }
        if(is_array($val_filtre) && count($val_filtre)) {
            $restr="";
            $ix=0;
            foreach ($val_filtre as $p => $v) {
                if($p=="agence") {
                    $q->andWhere('l.'.$p.' = :val'.$ix)
                    ->setParameter('val'.$ix, "$v");
                } elseif($p=="usages") {
                    $q->andWhere('b.'.$p.' = :val'.$ix)
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
        // /**
    //  * @return Remboursement[] Returns an array of Remboursement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Remboursement
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
