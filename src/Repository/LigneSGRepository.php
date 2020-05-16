<?php

namespace App\Repository;

use App\Entity\LigneSG;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LigneSG|null find($id, $lockMode = null, $lockVersion = null)
 * @method LigneSG|null findOneBy(array $criteria, array $orderBy = null)
 * @method LigneSG[]    findAll()
 * @method LigneSG[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LigneSGRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LigneSG::class);
    }

    // /**
    //  * @return LigneSG[] Returns an array of LigneSG objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LigneSG
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
