<?php

namespace App\Repository;

use App\Entity\OptionCar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OptionCar|null find($id, $lockMode = null, $lockVersion = null)
 * @method OptionCar|null findOneBy(array $criteria, array $orderBy = null)
 * @method OptionCar[]    findAll()
 * @method OptionCar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OptionCarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OptionCar::class);
    }

    // /**
    //  * @return OptionCar[] Returns an array of OptionCar objects
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
    public function findOneBySomeField($value): ?OptionCar
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
