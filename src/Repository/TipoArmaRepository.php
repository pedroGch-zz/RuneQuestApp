<?php

namespace App\Repository;

use App\Entity\TipoArma;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TipoArma|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoArma|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoArma[]    findAll()
 * @method TipoArma[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoArmaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TipoArma::class);
    }

//    /**
//     * @return TipoArma[] Returns an array of TipoArma objects
//     */
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
    public function findOneBySomeField($value): ?TipoArma
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
