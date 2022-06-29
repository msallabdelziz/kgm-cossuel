<?php

namespace App\Repository;

use App\Entity\Dossier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dossier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dossier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dossier[]    findAll()
 * @method Dossier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DossierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dossier::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Dossier $entity, bool $flush = true): void
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
    public function remove(Dossier $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Dossier[] Returns an array of Dossier objects
    //  */
    public function findByEtat($value)
    {
        $v="d.affecte = 0 and d.visite = 0 and d.rapport = 0";
        if($value=="Visite") { $v="d.affecte = 1 and d.visite = 0 and d.rapport = 0"; }
        elseif($value=="Rapport") { $v="d.affecte = 1 and d.visite = 1 and d.rapport = 0"; }
        elseif($value=="Attestation") { $v="d.affecte = 1 and d.visite = 1 and d.rapport = 1"; }
        
        return $this->createQueryBuilder('d')
            ->andWhere($v)
            ->orderBy('d.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
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
                } elseif($p=="usages") {
                    $q->andWhere('i.usages = :val'.$ix)
                    ->setParameter('val'.$ix, "$v");
                } elseif($p=="passage") {
                    $q->andWhere('d.numeroPassage = :val'.$ix)
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
        
    public function findByRestr($val_rech, $val_filtre, $orderBy="", $page=0)
    {
        $les_col0=array("num");
        $les_col1=array("compteur", "abonnement", "adresse", "nomSite", "usages", "activite", "habitation");
        $les_col2=array("numero");
        $str='1 = 0';
        foreach($les_col0 as $col) {
            $str.=' or a.'.$col.' like :val';
        }
        foreach($les_col1 as $col) {
            $str.=' or b.'.$col.' like :val';
        }
        foreach($les_col2 as $col) {
            $str.=' or c.'.$col.' like :val';
        }
        $q = $this->createQueryBuilder('a');
        $q->select('a')
        ->join('App\Entity\Demande', 'c', 'WITH', 'a.demande = c.id')
        ->join('App\Entity\Installation', 'b', 'WITH', 'c.installation = b.id')
        ->leftjoin('App\Entity\Localite', 'l', 'WITH', 'l.id = b.localite')
        ;
        if($val_rech) {
            $q->andWhere($str)
            ->setParameter('val', '%'.$val_rech.'%');
        }
        if(is_array($val_filtre) && count($val_filtre)) {
            $restr="";
            $ix=0;
            foreach ($val_filtre as $p => $v) {
                if($p=="etat") {
                    $restr="0=1";
                    if($v=="Validé|Affecté") { $restr="(a.affecte = 0 or a.affecte = 1) and a.visite = 0 and a.rapport = 0 and a.attestation = 0"; }
                    if($v=="Visite|Rapport") { $restr="a.affecte = 1 and (a.visite = 0 or a.visite = 1) and a.rapport = 0 and a.attestation = 0"; }
                    if($v=="Attestation|Cloture") { $restr="a.affecte = 1 and a.visite = 1 and a.rapport = 1 and (a.attestation = 0 or a.attestation = 1)"; }
                    if($v=="Validé, En Attente Affectation" || $v=="En Attente Affectation" || $v=="Affectation") { $restr="a.affecte = 0 and a.visite = 0 and a.rapport = 0 and a.attestation = 0"; }
                    elseif($v=="Visite" || $v=="Affecté, En Attente Visite" || $v=="En Attente Visite") { $restr="a.affecte = 1 and a.visite = 0 and a.rapport = 0 and a.attestation = 0"; }
                    elseif($v=="Rapport" || $v=="Attente Rapport" || $v=="Visite Planifiée, En Attente de Rapport" || $v=="En Attente de Rapport") { $restr="a.affecte = 1 and a.visite = 1 and a.rapport = 0 and a.attestation = 0"; }
                    elseif($v=="Attestation" || $v=="Attente validation rapport" || $v=="Rapport Soumis" || $v=="Visite Réalisée, En Attente de Confirmation Rapport" || $v=="En Attente de Confirmation Rapport") { $restr="a.affecte = 1 and a.visite = 1 and a.rapport = 1 and a.attestation = 0"; }
                    elseif($v=="Cloture" || $v=="Rapport validé, Clôturé" || $v=="Clôture" || $v=="En Attente de Cloture" || $v=="Rapport confirmé, En Attente de Clôture" || $v=="En Attente de Clôture") { $restr="a.affecte = 1 and a.visite = 1 and a.rapport = 1 and a.attestation = 1"; }
                    elseif($v=="Soumis" || $v=="Soumis, En Attente Paiement" || $v=="En Attente Paiement") { $restr="c.etat='Soumis'"; }
//                    elseif($v=="Demande Validée" || $v=="Validé") { $restr="c.etat='Demande validée'"; }
                    elseif($v=="Paiement enregistré" || $v=="Payé, En Attente confirmation Paiement" || $v=="En Attente confirmation Paiement") { $restr="c.etat='Paiement enregistré'"; }
                    elseif($v=="Paiement confirmé" || $v=="Payé" || $v=="En Attente Validation" || $v=="Payé, En Attente Validation") { $restr="c.etat='Paiement confirmé'"; }
                    elseif($v=="Chez Controleur") { $restr="(a.affecte = 0 or a.visite = 0 or a.rapport = 0)"; }
                    elseif($v=="Chez Controleur0") { $restr="(a.affecte = 1 and (a.visite = 0 or a.rapport = 0))"; }
                    elseif($v=="Cloture" || $v=="Clôturé") { $restr="(a.attestation = 1 and a.dateCloture is not null and a.cloture = 1)"; }
                    elseif($v=="Clôturé - Conforme") { $restr="(a.cloture = 1 and a.conforme = 1)"; }
                    elseif($v=="Clôturé - Non Conforme") { $restr="(a.cloture = 1 and a.conforme = 0)"; }
                    $q->andWhere($restr);
                } elseif($p=="agence") {
                    $q->andWhere('l.'.$p.' = :val'.$ix)
                    ->setParameter('val'.$ix, "$v");
                } elseif($p=="usages") {
                    $q->andWhere('b.usages = :val'.$ix)
                    ->setParameter('val'.$ix, "$v");
                } elseif($p=="passage") {
                    $q->andWhere('c.numeroPassage = :val'.$ix)
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
    //  * @return Dossier[] Returns an array of Dossier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dossier
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
