<?php

namespace App\Repository;

use App\Entity\AttestationConf;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AttestationConf>
 *
 * @method AttestationConf|null find($id, $lockMode = null, $lockVersion = null)
 * @method AttestationConf|null findOneBy(array $criteria, array $orderBy = null)
 * @method AttestationConf[]    findAll()
 * @method AttestationConf[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AttestationConfRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AttestationConf::class);
    }

    public function add(AttestationConf $entity, bool $flush = true): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(AttestationConf $entity, bool $flush = true): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findOneByNum($value): ?AttestationConf
    {
        if(!$value) { return null; }
         return $this->createQueryBuilder('a')
            ->andWhere('a.numero = :val')
            ->setParameter('val', "$value")
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function findOneByAvis($value): ?AttestationConf
    {
        if(!$value) { return null; }
         return $this->createQueryBuilder('a')
            ->andWhere('a.avis = :val')
            ->setParameter('val', "$value")
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
      
    public function findByRestr($val_rech, $val_filtre, $orderBy="", $page=0)
    {
        $les_col0=array("numero", "compteur", "contrat", "avis", "telephoneP", "telephoneE", "electricien", "proprietaire" );
        $str='1 = 0';
        foreach($les_col0 as $col) {
            $str.=' or a.'.$col.' like :val';
        }

        $q = $this->createQueryBuilder('a')
        ;
        if($val_rech) {
            $q->andWhere($str)
            ->setParameter('val', '%'.$val_rech.'%');
        }
        if(is_array($val_filtre) && count($val_filtre)) {
            $ix=0;
            foreach ($val_filtre as $p => $v) {
                if($p=="etat") {
                    $restr="(a.comptabilise = '1')";
                    if($v=="Comptabilisé") $restr="(a.comptabilise = '1' and a.finalise='0')";
                    elseif($v=="Non comptabilisé") $restr="(a.comptabilise = '' or a.comptabilise = '0' or a.comptabilise is null)";
                    elseif($v=="Finalisé") $restr="(a.finalise = '1')";
                    $q->andWhere($restr);
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
            $q->orderBy('a.dateAvis', 'DESC');
        }
        if($page) {
            $q
            ->setFirstResult($page-1)
            ->setMaxResults(20);
        }
        // echo $sql=$q->getQuery()->getSQL();
        return $q->getQuery()->getResult();
    }
    

    //    /**
//     * @return AttestationConf[] Returns an array of AttestationConf objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AttestationConf
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
