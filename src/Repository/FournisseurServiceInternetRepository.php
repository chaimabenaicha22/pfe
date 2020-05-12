<?php

namespace App\Repository;

use App\Entity\FournisseurServiceInternet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FournisseurServiceInternet|null find($id, $lockMode = null, $lockVersion = null)
 * @method FournisseurServiceInternet|null findOneBy(array $criteria, array $orderBy = null)
 * @method FournisseurServiceInternet[]    findAll()
 * @method FournisseurServiceInternet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FournisseurServiceInternetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FournisseurServiceInternet::class);
    }

    // /**
    //  * @return FournisseurServiceInternet[] Returns an array of FournisseurServiceInternet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FournisseurServiceInternet
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
