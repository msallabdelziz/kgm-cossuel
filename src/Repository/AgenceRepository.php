<?php

namespace App\Repository;

use App\Entity\Agence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Agence|null find($id, $lockMode = null, $lockVersion = null)
 * @method Agence|null findOneBy(array $criteria, array $orderBy = null)
 * @method Agence[]    findAll()
 * @method Agence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Agence::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Agence $entity, bool $flush = true): void
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
    public function remove(Agence $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @return Agence[] Returns an array of Agence objects
     */
    
    public function findByRestr($val_rech, $val_filtre, $orderBy="", $page=0)
    {
        $les_col=array("code", "nom", "adresse");
        $str='1 = 0';
        foreach($les_col as $col) {
            $str.=' or a.'.$col.' like :val';
        }
        $q = $this->createQueryBuilder('a');
        if($val_rech) {
            $q->andWhere($str)
            ->setParameter('val', '%'.$val_rech.'%');
        }
        if(is_array($val_filtre) && count($val_filtre)) {
            $ix=0;
            foreach ($val_filtre as $p => $v) {
                $q->andWhere('a.'.$p.' = :val'.$ix)
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
    

    // /**
    //  * @return Agence[] Returns an array of Agence objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Agence
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
