<?php

namespace App\Repository;

use App\Entity\Prospects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Prospects|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prospects|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prospects[]    findAll()
 * @method Prospects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProspectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prospects::class);
    }

    // /**
    //  * @return Prospects[] Returns an array of Prospects objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Prospects
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
