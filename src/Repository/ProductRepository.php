<?php


namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class ProductRepository
 * @package App\Repository
 *
 * Product Repository class for obtaining data from database
 *
 */

class ProductRepository extends ServiceEntityRepository
{

    /**
     * ProductRepository constructor.
     * @param ManagerRegistry $registry
     */

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function findAll() : array {

        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery('SELECT p FROM App\Entity\Product p');
        return $query->getResult();

    }

}