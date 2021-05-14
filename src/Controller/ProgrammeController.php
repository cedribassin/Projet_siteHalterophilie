<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProgrammeController extends AbstractController
{
    /**
     * @Route("/client/programme", name="programme_accueil")
     */
    public function index()
    {
        return $this->render('programme/programmesAccueil.html.twig', [
            'controller_name' => 'ProgrammeController',
        ]);
    }
}
