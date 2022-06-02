<?php

namespace App\Repository;

use App\Entity\Agent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

/**
 * @method Agent|null find($id, $lockMode = null, $lockVersion = null)
 * @method Agent|null findOneBy(array $criteria, array $orderBy = null)
 * @method Agent[]    findAll()
 * @method Agent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Agent::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Agent $entity, bool $flush = true): void
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
    public function remove(Agent $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @return Agent[] Returns an array of Agent objects
     */
    
    public function findByLocalite($id_localite)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.id_agence = :val')
            ->setParameter('val', $id_localite)
            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    public function findByProfil($profil)
    {
        return $this->createQueryBuilder('agt')
        ->join('App\Entity\Profil', 'prof', 'WITH', 'agt.profil = prof.id')
        ->andWhere('prof.code = :val2')
        ->setParameter('val2', $profil)
        ->orderBy('agt.id', 'ASC')
//            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    
    /**
     * @return Agent[] Returns an array of Agent objects
     */
    
    public function findByRestr($val_rech, $val_filtre, $orderBy="", $page=0)
    {
        $les_col=array("matricule", "nom", "prenom", "adresse", "email", "telephone");
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
    //  * @return Agent[] Returns an array of Agent objects
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
    public function findOneBySomeField($value): ?Agent
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
