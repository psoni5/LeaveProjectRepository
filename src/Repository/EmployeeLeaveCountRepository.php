<?php

namespace App\Repository;

use App\Entity\EmployeeLeaveCount;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EmployeeLeaveCount|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmployeeLeaveCount|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmployeeLeaveCount[]    findAll()
 * @method EmployeeLeaveCount[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmployeeLeaveCountRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmployeeLeaveCount::class);
    }

    // /**
    //  * @return EmployeeLeaveCount[] Returns an array of EmployeeLeaveCount objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EmployeeLeaveCount
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
