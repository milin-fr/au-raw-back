<?php

namespace App\Controller;

use App\Entity\Product;
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

    /**
     * @Route("/delivery", name="delivery")
     */
    public function delivery()
    {
        return $this->render('main\delivery.html.twig', [
        ]);
    }

    /**
     * @Route("/legal", name="legal")
     */
    public function legal()
    {
        return $this->render('main\legal.html.twig', [
        ]);
    }

    /**
     * @Route("/payment", name="payment")
     */
    public function payment()
    {
        return $this->render('main\payment.html.twig', [
        ]);
    }

    /**
     * @Route("/cakes", name="cakes")
     */
    public function cakes(ProductRepository $productRepository)
    {
        return $this->render('main\cakes.html.twig', [
            'products' => $productRepository->findBy(['type' => 'cake']),
        ]);
    }

    /**
     * @Route("/chocolates", name="chocolates")
     */
    public function chocolates(ProductRepository $productRepository)
    {
        return $this->render('main\chocolates.html.twig', [
            'products' => $productRepository->findBy(['type' => 'chocolate']),
        ]);
    }

    /**
     * @Route("/product/{id<\d+>}", name="product")
     */
    public function product(Product $product)
    {
        return $this->render('main\product.html.twig', [
            'product' => $product,
        ]);
    }
}
