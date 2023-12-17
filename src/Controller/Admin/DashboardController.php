<?php

namespace App\Controller\Admin;

use App\Controller\Admin\ArticleCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Role\Role;

class DashboardController extends AbstractDashboardController
{
    public function __construct(
        private AdminUrlGenerator $adminUrlGenerator
    ) {
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // Option 1. Rediriger vers une page spécifique (dans cet exemple, ArticleCrudController)
        return $this->redirect($this->adminUrlGenerator->setController(ArticleCrudController::class)->generateUrl());
    }

    #[Route('/admin/some-secured-route')]
    #[Role("ROLE_ADMIN")]
    public function someSecuredAction(): Response
    {
        return new Response('Ceci est une action sécurisée pour les administrateurs.');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SoundScoop');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // Exemple d'ajout de liens vers des entités dans le menu
        yield MenuItem::linkToCrud('Articles', 'fa fa-newspaper', ArticleCrudController::class);
        // Ajoutez d'autres liens pour d'autres entités si nécessaire
    }
}
