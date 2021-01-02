<?php

namespace App\Repository;

use App\Entity\TP;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TP|null find($id, $lockMode = null, $lockVersion = null)
 * @method TP|null findOneBy(array $criteria, array $orderBy = null)
 * @method TP[]    findAll()
 * @method TP[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TPRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TP::class);
    }

    // /**
    //  * @return TP[] Returns an array of TP objects
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
    public function findOneBySomeField($value): ?TP
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
