<?php


namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;


class ProductController
{

    /**
     * @Route("/product", name="create_product")
     *
     * @param string
     * @param int
     *
     * @return String
     */

    public function createProduct(string $name, int $price) : Response {

        $entityManager = $this->getDoctrine()->getManager();
        $product = new Product();
        $product->setName($name);
        $product->setPrice($price);

        $entityManager->persist($product);
        $entityManager->flush();


    }

}