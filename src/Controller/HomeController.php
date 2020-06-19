<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * Class HomeController
 * @package App\Controller
 *
 * Controller for homepage and related
 *
 */


class HomeController
{

    /**
     * @Route("/", name="index.php")
     *
     * @param Environment $twig
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */

    public function homepage(Environment $twig) {
        return new Response($twig->render('/home.html.twig', []));
    }

}