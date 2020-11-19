<?php

namespace App\Repository;

use App\Entity\MouvementTechnique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MouvementTechnique|null find($id, $lockMode = null, $lockVersion = null)
 * @method MouvementTechnique|null findOneBy(array $criteria, array $orderBy = null)
 * @method MouvementTechnique[]    findAll()
 * @method MouvementTechnique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MouvementTechniqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MouvementTechnique::class);
    }

    // /**
    //  * @return MouvementTechnique[] Returns an array of MouvementTechnique objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MouvementTechnique
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
