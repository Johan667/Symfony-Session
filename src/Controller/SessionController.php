<?php

namespace App\Controller;

use App\Entity\Session;
use App\Entity\Stagiaire;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SessionController extends AbstractController
{
    /**
     * @Route("/session", name="app_session")
     */
    public function index(): Response
    {
        return $this->render('session/index.html.twig', [
            'controller_name' => 'SessionController',
        ]);
    }
     /**
     * @Route("/session/detail/{id}", name="detail_session")
     */
    public function detail(ManagerRegistry $doctrine,Session $session): Response
    {
        $stagiaires = $doctrine->getRepository(Stagiaire::class)->findAll();
        
        return $this->render('session/index.html.twig', [
            'session'=>$session,
            'stagiaires'=>$stagiaires,
        ]);
    }

    // ajouter un stagiaire dans une session --> addStagiaire(Stagiaire $stagiaire)
}
