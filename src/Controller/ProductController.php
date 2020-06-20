<?php


namespace App\Controller;

use App\Entity\Product;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class ProductController
 * @package App\Controller
 *
 * Controller for Product related actions.
 *
 */

class ProductController
{

    /**
     * @Route("/list/all/products", name="list_products")
     *
     * @param Environment $twig
     * @return Response
     *
     * get all products from repository, render the view with the array
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */

    public function listAllProducts(Environment $twig) {
        $products = $this->getDoctrine()-getRepository(Product::class)->findAll();

        return new Response($twig->render("list_products.html.twig", ['products' => $products]));
    }

    /**
     * @Route("/create/product", name="create_product")
     *
     * @param EntityManagerInterface $entityManager
     *
     * @return Response
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
     * @param Environment $twig
     *
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */

    public function createProductForm(Environment $twig) : Response {
        return new Response($twig->render("/add_product.html.twig", []));
    }

}