<?php

namespace App\Repository;

use App\Entity\Agence;
use App\Donnees\SearchData;
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
    public function findSearch(SearchData $search):array
    {
        $query = $this->createQueryBuilder('a')
                ->select('localite', 'a')
                ->join('a.localite', 'localite');
                
        if(!empty($search->code)){
            $query  = $query
                ->andWhere('a.code LIKE :code')
                ->setParameter('code', "%{$search->code}%")
                ->orWhere('a.nom LIKE :nom')
                ->setParameter('nom', "%{$search->code}%")
                ->orderBy('a.id', 'ASC');
                 
        }
        if(!empty($search->localite)){
            $query  = $query
                ->andWhere('localite.id LIKE :localite')
                ->setParameter('localite', "$search->localite")
                ->orderBy('a.id', 'ASC'); 
        }
        return $query->getQuery()->getResult();
        
    }
}
