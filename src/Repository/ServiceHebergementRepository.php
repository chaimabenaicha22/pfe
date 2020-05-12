<?php

namespace App\Repository;

use App\Entity\ServiceHebergement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ServiceHebergement|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServiceHebergement|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServiceHebergement[]    findAll()
 * @method ServiceHebergement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServiceHebergementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ServiceHebergement::class);
    }

    // /**
    //  * @return ServiceHebergement[] Returns an array of ServiceHebergement objects
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
    public function findOneBySomeField($value): ?ServiceHebergement
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
