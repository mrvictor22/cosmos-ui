<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(): Response
{
    return $this->render('login/index.html.twig'); // Ensure this matches your folder structure.
}

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Symfony manejará el logout
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }
}
