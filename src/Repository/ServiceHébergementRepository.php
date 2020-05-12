<?php

namespace App\Repository;

use App\Entity\ServiceHébergement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ServiceHébergement|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServiceHébergement|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServiceHébergement[]    findAll()
 * @method ServiceHébergement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServiceHébergementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ServiceHébergement::class);
    }

    // /**
    //  * @return ServiceHébergement[] Returns an array of ServiceHébergement objects
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
    public function findOneBySomeField($value): ?ServiceHébergement
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
