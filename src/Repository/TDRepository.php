<?php

namespace App\Repository;

use App\Entity\TD;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TD|null find($id, $lockMode = null, $lockVersion = null)
 * @method TD|null findOneBy(array $criteria, array $orderBy = null)
 * @method TD[]    findAll()
 * @method TD[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TDRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TD::class);
    }

    // /**
    //  * @return TD[] Returns an array of TD objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TD
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
