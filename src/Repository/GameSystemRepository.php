<?php

namespace App\Repository;

use App\Entity\GameSystem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GameSystem|null find($id, $lockMode = null, $lockVersion = null)
 * @method GameSystem|null findOneBy(array $criteria, array $orderBy = null)
 * @method GameSystem[]    findAll()
 * @method GameSystem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GameSystemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GameSystem::class);
    }

    // /**
    //  * @return GameSystem[] Returns an array of GameSystem objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GameSystem
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
