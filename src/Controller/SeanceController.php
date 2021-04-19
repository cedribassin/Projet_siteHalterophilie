<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SeanceController extends AbstractController
{
    /**
     * @Route("/client/seance", name="seance")
     */
    public function index()
    {
        return $this->render('seance/seanceAccueil.html.twig', [
            'controller_name' => 'SeanceController',
        ]);
    }

    /**
     * @Route("/client/seance2xSem", name="seance2xSem")
     */
    public function seance2xSem()
    {
        return $this->render('seance/seanceAccueil.html.twig', [
            'controller_name' => 'SeanceController',
        ]);
    }
}
