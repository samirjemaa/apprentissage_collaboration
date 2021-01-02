<?php

namespace App\Controller\Admin;

use App\Entity\Activites;
use App\Entity\Apprenant;
use App\Entity\Cour;
use App\Entity\Groupes;
use App\Entity\Modules;
use App\Entity\NiveauScolaire;
use App\Entity\Section;
use App\Entity\Specialite;
use App\Entity\TD;
use App\Entity\TP;
use App\Entity\Tuteur;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();

        return $this->redirect(
            $routeBuilder->setController(GroupesCrudController::class)->generateUrl()
        );
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Apprentissage');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        //yield MenuItem::linkToCrud('User', 'fab fa-accusoft', User::class);
        yield MenuItem::section('User');
        yield MenuItem::linkToCrud('Apprenant', 'fab fa-accusoft', Apprenant::class);
        yield MenuItem::linkToCrud('Tuteur', 'fab fa-accusoft', Tuteur::class);
        //yield MenuItem::linkToCrud('Groupes', 'fab fa-accusoft', Groupes::class);
        //yield MenuItem::linkToCrud('Groupes', 'fab fa-accusoft', Groupes::class);
        yield MenuItem::section('Entites d\'enseignement');
        yield MenuItem::linkToCrud('Groupes', 'fab fa-accusoft', Groupes::class);
        yield MenuItem::linkToCrud('Modules', 'fab fa-accusoft', Modules::class);
        yield MenuItem::linkToCrud('Section', 'fab fa-accusoft', Section::class);
        //yield MenuItem::linkToCrud('Activite', 'fab fa-accusoft', Activites::class);
        yield MenuItem::section('Activite');
        yield MenuItem::linkToCrud('Cours', 'fab fa-accusoft', Cour::class);
        yield MenuItem::linkToCrud('TP', 'fab fa-accusoft', TP::class);
        yield MenuItem::linkToCrud('TD', 'fab fa-accusoft', TD::class);
        yield MenuItem::section('Parametrages');
        yield MenuItem::linkToCrud('Specialite', 'fab fa-accusoft', Specialite::class);
        yield MenuItem::linkToCrud('Niveau Scolaire', 'fab fa-accusoft', NiveauScolaire::class);
    }
}