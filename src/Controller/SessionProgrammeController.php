<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SessionProgrammeController extends AbstractController
{
    /**
     * @Route("/session/programme", name="app_session_programme")
     */
    public function index(): Response
    {
        return $this->render('session_programme/index.html.twig', [
            'controller_name' => 'SessionProgrammeController',
        ]);
    }
}
