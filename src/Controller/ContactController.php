<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

    /**
     * @Route("/contact-us", name="contact_us", methods={"GET","POST"})
     */
    public function contact_us(Request $request): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();
            $this->addFlash('success', 'Message sent!');
            return $this->redirectToRoute('home');
        }

        return $this->render('main\contact-us.html.twig', [
            'contact' => $contact,
            'form' => $form->createView(),
        ]);
    }

}
