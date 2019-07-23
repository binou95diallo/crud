<?php

namespace App\Repository;

use App\Entity\UsersPartenaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UsersPartenaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsersPartenaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsersPartenaire[]    findAll()
 * @method UsersPartenaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersPartenaireRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UsersPartenaire::class);
    }

    // /**
    //  * @return UsersPartenaire[] Returns an array of UsersPartenaire objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UsersPartenaire
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
