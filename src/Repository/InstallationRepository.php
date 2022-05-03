<?php

namespace App\Repository;

use App\Entity\Installation;
use App\Donnees\SearchInstallation;
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
        if($value=="Saisie") { $v='i.step <= 7'; }
        elseif($value=="Soumis") $v='i.step = 7';
        elseif($value=="Payé") $v='i.step = 8';
        elseif($value=="Validé") $v='i.step = 9';
        return $this->createQueryBuilder('i')
            ->andWhere($v)
            ->orderBy('i.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
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
    public function findSearch(SearchInstallation $search):array
    {
        $query = $this->createQueryBuilder('i')
                ->select('localite', 'i')
                ->select('demande', 'i')
                ->join('i.localite', 'localite')
                ->join('i.demande', 'demande');
        if(!empty($search->nom)){
            $query  = $query
            ->andWhere('demande.numero LIKE :numero')
            ->setParameter('numero', "$search->nom")
            ->orderBy('i.id', 'ASC'); 
                    
        }
        if(!empty($search->statut)){
            $query  = $query
            ->andWhere('demande.etat LIKE :etat')
            ->setParameter('etat', "$search->statut")
            ->orderBy('i.id', 'ASC'); 
                 
        }
        if(!empty($search->usage)){
            $query  = $query
                ->andWhere('i.usages LIKE :usages')
                ->setParameter('usages', "%{$search->usage}%")
                ->orderBy('i.id', 'ASC');
                 
        }
        if(!empty($search->localite)){
            $query  = $query
                ->andWhere('localite.id LIKE :localite')
                ->setParameter('localite', "$search->localite")
                ->orderBy('i.id', 'ASC'); 
        }
        return $query->getQuery()->getResult();
        
    }
}
