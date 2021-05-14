<?php

namespace App\Controller;

use App\Repository\SeanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SeanceController extends AbstractController
{
    /**
     * @Route("/client/seance", name="seance_accueil")
     */
    public function index()
    {
        return $this->render('seance/seanceAccueil.html.twig', [
            'controller_name' => 'SeanceController',
        ]);
    }

    /**
     * @Route("/client/seanceCorrective", name="seance_manque_ext_finale")
     */
    public function getSeanceManqueExtension(SeanceRepository $repository)
    {
        //getSeanceParNom() => fonction codée dans SeanceRepository
        $seances = $repository->getSeanceParNom('Seance problème de finition extension finale 2xsem');
        return $this->render('seance/seanceManqueExt.html.twig', [
            "seances" => $seances
        ]);
    }
}