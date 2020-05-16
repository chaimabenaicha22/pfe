<?php

namespace App\Repository;

use App\Entity\AffecterA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AffecterA|null find($id, $lockMode = null, $lockVersion = null)
 * @method AffecterA|null findOneBy(array $criteria, array $orderBy = null)
 * @method AffecterA[]    findAll()
 * @method AffecterA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffecterARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AffecterA::class);
    }

    // /**
    //  * @return AffecterA[] Returns an array of AffecterA objects
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
    public function findOneBySomeField($value): ?AffecterA
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
