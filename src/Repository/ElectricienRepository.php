<?php

namespace App\Repository;

use App\Entity\Electricien;
use App\Donnees\SearchElectricien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Electricien|null find($id, $lockMode = null, $lockVersion = null)
 * @method Electricien|null findOneBy(array $criteria, array $orderBy = null)
 * @method Electricien[]    findAll()
 * @method Electricien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ElectricienRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Electricien::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Electricien $entity, bool $flush = true): void
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
    public function remove(Electricien $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findOneByTelMailPiece($value): ?Electricien
    {
        $res = $this->createQueryBuilder('i')
        ->Where('i.telephone = :val or i.email = :val or i.numPiece = :val')
        ->setParameter('val', $value)
        ->getQuery()
        ->getResult()
        ;
        if (empty($res)===true) { return null; } else { return $res[0]; }
    }

    // /**
    //  * @return Electricien[] Returns an array of Electricien objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Electricien
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
public function findSearch(SearchElectricien $search):array
    {
        $query = $this->createQueryBuilder('c')
                ->select('localite', 'c')
                ->join('c.localite', 'localite');
                
        if(!empty($search->nom)){
            $query  = $query
                ->andWhere('c.prenom LIKE :prenom')
                ->setParameter('prenom', "%{$search->nom}%")
                ->orWhere('c.nom LIKE :nom')
                ->setParameter('nom', "%{$search->nom}%")
                ->orderBy('c.id', 'ASC');
                 
        }
        if(!empty($search->localite)){
            $query  = $query
                ->andWhere('localite.id LIKE :localite')
                ->setParameter('localite', "$search->localite")
                ->orderBy('c.id', 'ASC'); 
        }
        return $query->getQuery()->getResult();
        
    }
}
