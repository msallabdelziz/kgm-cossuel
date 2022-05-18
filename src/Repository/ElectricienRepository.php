<?php

namespace App\Repository;

use App\Entity\Electricien;
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

    public function findByRestr($val_rech, $val_filtre, $orderBy="", $page=0)
    {
        $les_col=array("prenom", "nom", "adresse", "telephone", "email", "numPiece");
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

}
