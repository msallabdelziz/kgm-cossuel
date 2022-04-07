<?php

namespace App\Repository;

use App\Entity\AffectationsAgents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AffectationsAgents|null find($id, $lockMode = null, $lockVersion = null)
 * @method AffectationsAgents|null findOneBy(array $criteria, array $orderBy = null)
 * @method AffectationsAgents[]    findAll()
 * @method AffectationsAgents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffectationsAgentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AffectationsAgents::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(AffectationsAgents $entity, bool $flush = true): void
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
    public function remove(AffectationsAgents $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return AffectationsAgents[] Returns an array of AffectationsAgents objects
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
    public function findOneBySomeField($value): ?AffectationsAgents
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
