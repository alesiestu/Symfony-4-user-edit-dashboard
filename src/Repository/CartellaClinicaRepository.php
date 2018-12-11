<?php

namespace App\Repository;

use App\Entity\CartellaClinica;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CartellaClinica|null find($id, $lockMode = null, $lockVersion = null)
 * @method CartellaClinica|null findOneBy(array $criteria, array $orderBy = null)
 * @method CartellaClinica[]    findAll()
 * @method CartellaClinica[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CartellaClinicaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CartellaClinica::class);
    }

    // /**
    //  * @return CartellaClinica[] Returns an array of CartellaClinica objects
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
    public function findOneBySomeField($value): ?CartellaClinica
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
