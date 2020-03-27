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

    /**
     * @Route("/contact-us", name="contact_us")
     */
    public function contact_us()
    {
        return $this->render('main\contact-us.html.twig', [
        ]);
    }

    /**
     * @Route("/faq", name="faq")
     */
    public function faq()
    {
        return $this->render('main\faq.html.twig', [
        ]);
    }
}
