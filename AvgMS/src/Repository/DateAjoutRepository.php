<?php

namespace App\Repository;

use App\Entity\DateAjout;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DateAjout|null find($id, $lockMode = null, $lockVersion = null)
 * @method DateAjout|null findOneBy(array $criteria, array $orderBy = null)
 * @method DateAjout[]    findAll()
 * @method DateAjout[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DateAjoutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DateAjout::class);
    }

    // /**
    //  * @return DateAjout[] Returns an array of DateAjout objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DateAjout
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
