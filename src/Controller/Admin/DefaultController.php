<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin')]
#[IsGranted('ROLE_ADMIN')]
final class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_admin_home')]
    #[IsGranted('ROLE_ADMIN', message: 'You are not allowed to access the admin dashboard.')]
    public function index(): Response
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_SUPER_ADMIN')) {
            $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Vous devez être admin ou super admin pour accéder à cette page.');
        }
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
