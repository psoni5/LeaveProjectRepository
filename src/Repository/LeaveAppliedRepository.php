<?php

namespace App\Repository;

use App\Entity\LeaveApplied;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LeaveApplied|null find($id, $lockMode = null, $lockVersion = null)
 * @method LeaveApplied|null findOneBy(array $criteria, array $orderBy = null)
 * @method LeaveApplied[]    findAll()
 * @method LeaveApplied[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LeaveAppliedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LeaveApplied::class);
    }

    // /**
    //  * @return LeaveApplied[] Returns an array of LeaveApplied objects
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
    public function findOneBySomeField($value): ?LeaveApplied
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
