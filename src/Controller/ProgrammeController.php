<?php

namespace App\Controller;

use App\Repository\ProgrammeRepository;
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

    /**
     * @Route("/client/programmeManqueExtEpArr", name="prog_manque_ext_Ep_Arr")
     */
    public function getProgrammeManqueExtension(ProgrammeRepository $repository)
    {
        //getProgrammeParNom() => fonction codée dans ProgrammeRepository
        $programmes = $repository->getProgrammeParNom('Programme: remédiation à un manque d\'extension dans le 2ème tirage');
        return $this->render('Programme/programmesManqueExtension.html.twig', [
            "programmes" => $programmes
        ]);
    }
}