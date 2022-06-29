<?php

namespace App\Repository;

use App\Entity\Paiement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Paiement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Paiement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Paiement[]    findAll()
 * @method Paiement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaiementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Paiement::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Paiement $entity, bool $flush = true): void
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
    public function remove(Paiement $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findBy2($val_filtre, $orderBy="", $page=0)
    {

        $q = $this->createQueryBuilder('a');
        $q->select('a')
        ->join('App\Entity\Demande', 'd', 'WITH', 'a.demande = d.id')
        ->join('App\Entity\Installation', 'i', 'WITH', 'd.installation = i.id')
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
    //  * @return Paiement[] Returns an array of Paiement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Paiement
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
