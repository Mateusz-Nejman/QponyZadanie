<?php

namespace App\Repository;

use App\Entity\CalculatorData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CalculatorData|null find($id, $lockMode = null, $lockVersion = null)
 * @method CalculatorData|null findOneBy(array $criteria, array $orderBy = null)
 * @method CalculatorData[]    findAll()
 * @method CalculatorData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalculatorDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CalculatorData::class);
    }

    // /**
    //  * @return CalculatorData[] Returns an array of CalculatorData objects
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
    public function findOneBySomeField($value): ?CalculatorData
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
