<?php

namespace App\Repository;

use App\Entity\Ospedale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ospedale|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ospedale|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ospedale[]    findAll()
 * @method Ospedale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OspedaleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ospedale::class);
    }

    // /**
    //  * @return Ospedale[] Returns an array of Ospedale objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ospedale
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
