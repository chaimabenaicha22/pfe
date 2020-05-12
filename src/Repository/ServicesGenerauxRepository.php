<?php

namespace App\Repository;

use App\Entity\ServicesGeneraux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ServicesGeneraux|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServicesGeneraux|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServicesGeneraux[]    findAll()
 * @method ServicesGeneraux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServicesGenerauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ServicesGeneraux::class);
    }

    // /**
    //  * @return ServicesGeneraux[] Returns an array of ServicesGeneraux objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ServicesGeneraux
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
