<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function home(ProductRepository $productRepository)
    {
        return $this->render('home.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }
}
