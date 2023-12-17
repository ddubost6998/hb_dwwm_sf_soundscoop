<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\ArtistRepository;
use App\Repository\CategoryRepository;
use App\Repository\StyleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(ArticleRepository $articleRepository, ArtistRepository $artistRepository, CategoryRepository $categoryRepository, StyleRepository $styleRepository): Response
    {
        $latestArticles = $articleRepository->findLatest(3);
        $allArtists = $artistRepository->findAll();
        $allCategories = $categoryRepository->findAll();
        $allStyles = $styleRepository->findAll();

        return $this->render('index/index.html.twig', [
            'latestArticles' => $latestArticles,
            'allArtists' => $allArtists,
            'allCategories' => $allCategories,
            'allStyles' => $allStyles,
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
