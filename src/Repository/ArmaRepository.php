<?php

namespace App\Repository;

use App\Entity\Arma;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Arma|null find($id, $lockMode = null, $lockVersion = null)
 * @method Arma|null findOneBy(array $criteria, array $orderBy = null)
 * @method Arma[]    findAll()
 * @method Arma[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArmaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Arma::class);
    }

//    /**
//     * @return Arma[] Returns an array of Arma objects
//     */
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
    public function findOneBySomeField($value): ?Arma
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
