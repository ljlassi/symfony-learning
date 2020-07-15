<?php


namespace App\Controller;


use App\Entity\ProductForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductFormController extends AbstractController
{

    /**
     * @Route("/new/product", name="new_product")
     *
     * @param Request $request
     * @return Response
     */

    public function new(Request $request) : Response {
        $product_form = new ProductForm();
        $product_form->setId(0);
        $product_form->setName("enter name");
        $product_form->setPrice(100);

        $form = $this->createFormBuilder($product_form);
        $form->add('id', TextType::class);
        $form->add('name', TextType::class);
        $form->add('price', TextType::class);
        $form->add('submit', SubmitType::class);
        $form_ready = $form->getForm();

        return $this->render('add_product.html.twig', ['form' => $form_ready->createView()]);
    }

}