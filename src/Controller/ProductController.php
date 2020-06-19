<?php


namespace App\Controller;

use App\Entity\Product;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;


class ProductController
{

    /**
     * @Route("/create/product", name="create_product")
     *
     *
     * @return String
     */

    public function createProduct(EntityManagerInterface $entityManager) : Response {

        $request = Request::createFromGlobals();
        $product_name = $request->request->get('product_name');
        $product_price = $request->request->get('product_price');
        
        $product = new Product();
        $product->setName($product_name);
        $product->setPrice($product_price);

        $entityManager->persist($product);
        $entityManager->flush();

        return new Response('Saved new product named: ' . $product->getName());


    }

    /**
     * @Route("/new/product", name="new_product")
     *
     * @return String
     */

    public function createProductForm(Environment $twig) : Response {
        return new Response($twig->render("/add_product.html.twig", []));
    }

}