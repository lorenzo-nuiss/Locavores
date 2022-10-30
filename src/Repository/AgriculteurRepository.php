<?php

namespace App\Repository;

use App\Entity\Agriculteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Agriculteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Agriculteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Agriculteur[]    findAll()
 * @method Agriculteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgriculteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Agriculteur::class);
    }

    // /**
    //  * @return Agriculteur[] Returns an array of Agriculteur objects
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
    public function findOneBySomeField($value): ?Agriculteur
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Returns all agri per page
     * @return void
     */

    public function getPaginatedAgriculteurs($page, $limit, $categorie)
    {
        $query = $this->createQueryBuilder('a');

        $query->leftJoin('a.Categorie', 'c');
        $query->where('c.id = :id')
            ->setParameter('id', $categorie);

        $query->andWhere ("a.etat = 'valide'")
        ->setFirstResult(($page * $limit) - $limit )
            ->setMaxResults($limit);

        return $query->getQuery()->getResult();
    }

    /**
     * Returns number of Annonces
     * @return void 
     */
    public function getTotalAgriculteurByCat($categorie){
        $query = $this->createQueryBuilder('a')
            ->select('COUNT(a)')
            ->where("a.etat = 'valide'");

            $query->leftJoin('a.Categorie', 'c');
        $query->andWhere('c.id = :id')
            ->setParameter('id', $categorie);

        return $query->getQuery()->getSingleScalarResult();
    }
}
