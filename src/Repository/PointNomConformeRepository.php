<?php

namespace App\Repository;

use App\Entity\PointNomConforme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PointNomConforme|null find($id, $lockMode = null, $lockVersion = null)
 * @method PointNomConforme|null findOneBy(array $criteria, array $orderBy = null)
 * @method PointNomConforme[]    findAll()
 * @method PointNomConforme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PointNomConformeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PointNomConforme::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(PointNomConforme $entity, bool $flush = true): void
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
    public function remove(PointNomConforme $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return PointNomConforme[] Returns an array of PointNomConforme objects
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
    public function findOneBySomeField($value): ?PointNomConforme
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
