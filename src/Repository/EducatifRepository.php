<?php

namespace App\Repository;

use App\Entity\Educatif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Educatif|null find($id, $lockMode = null, $lockVersion = null)
 * @method Educatif|null findOneBy(array $criteria, array $orderBy = null)
 * @method Educatif[]    findAll()
 * @method Educatif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EducatifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Educatif::class);
    }

    // /**
    //  * @return Educatif[] Returns an array of Educatif objects
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
    public function findOneBySomeField($value): ?Educatif
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
