<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'Accueil',
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('index/contact.html.twig', [
            'controller_name' => 'Contact',
        ]);
    }

    #[Route('/about', name: 'about')]
    public function aboutUs(): Response
    {
        return $this->render('index/about.html.twig', [
            'controller_name' => 'À propos de nous',
        ]);
    }
}
