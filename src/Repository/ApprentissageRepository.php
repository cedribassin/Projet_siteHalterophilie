<?php

namespace App\Repository;

use App\Entity\Apprentissage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Apprentissage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Apprentissage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Apprentissage[]    findAll()
 * @method Apprentissage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApprentissageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Apprentissage::class);
    }

    // /**
    //  * @return Apprentissage[] Returns an array of Apprentissage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Apprentissage
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
