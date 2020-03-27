<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(ProductRepository $productRepository)
    {
        return $this->render('main\home.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }

    /**
     * @Route("/about-us", name="about_us")
     */
    public function about_us()
    {
        return $this->render('main\about-us.html.twig', [
        ]);
    }
}
