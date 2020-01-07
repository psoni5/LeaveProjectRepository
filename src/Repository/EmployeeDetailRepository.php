<?php

namespace App\Repository;

use App\Entity\EmployeeDetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EmployeeDetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmployeeDetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmployeeDetail[]    findAll()
 * @method EmployeeDetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmployeeDetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmployeeDetail::class);
    }

    // /**
    //  * @return EmployeeDetail[] Returns an array of EmployeeDetail objects
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
    public function findOneBySomeField($value): ?EmployeeDetail
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
