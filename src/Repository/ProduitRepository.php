<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Produit>
 *
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    public function save(Produit $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Produit $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function rechercherParNom($term)
    {
        return $this->createQueryBuilder('p')
            ->where('p.nomProd LIKE :term OR p.description LIKE :term')
            ->setParameter('term', '%'.$term.'%')
            ->getQuery()
            ->getResult();
    }
    
    

    public function trierParNbLikesAsc()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.nbLikes', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function trierParNbLikesDesc()
{
    return $this->createQueryBuilder('p')
        ->orderBy('p.nbLikes', 'DESC')
        ->getQuery()
        ->getResult();
}


public function trierParNbDislikesAsc()
{
    return $this->createQueryBuilder('p')
        ->orderBy('p.nbDislikes', 'ASC')
        ->getQuery()
        ->getResult();
}



public function trierParNbDislikesDesc()
{
    return $this->createQueryBuilder('p')
        ->orderBy('p.nbDislikes', 'DESC')
        ->getQuery()
        ->getResult();
}



public function trierParPrixAsc()
{
    return $this->createQueryBuilder('p')
        ->orderBy('p.prix', 'ASC')
        ->getQuery()
        ->getResult();
}




public function trierParPrixDesc()
{
    return $this->createQueryBuilder('p')
        ->orderBy('p.prix', 'DESC')
        ->getQuery()
        ->getResult();
}




public function trierParQuantiteAsc()
{
    return $this->createQueryBuilder('p')
        ->orderBy('p.quantite', 'ASC')
        ->getQuery()
        ->getResult();
}



public function trierParQuantiteDesc()
{
    return $this->createQueryBuilder('p')
        ->orderBy('p.quantite', 'DESC')
        ->getQuery()
        ->getResult();
}

//    /**
//     * @return Produit[] Returns an array of Produit objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Produit
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }





public function statistique_produit()
{

    return $this->getEntityManager()
        ->createQuery(
            'SELECT V.nomProd , V.prix
            FROM App\Entity\Produit V
            '
        )
        ->getResult();

}















}
