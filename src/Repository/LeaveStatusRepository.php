<?php

namespace App\Repository;

use App\Entity\LeaveStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LeaveStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method LeaveStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method LeaveStatus[]    findAll()
 * @method LeaveStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LeaveStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LeaveStatus::class);
    }

    // /**
    //  * @return LeaveStatus[] Returns an array of LeaveStatus objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LeaveStatus
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
