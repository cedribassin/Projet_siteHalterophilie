<?php

namespace App\Controller;

use App\Repository\PhaseRepository;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MouvementTechniqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MouvementTechniqueController extends AbstractController
{
    /**
     * @Route("/client/mouvements_technique", name="mouvements_technique")
     */
    public function index(MouvementTechniqueRepository $repository)
    {
        $mvtTech = $repository->findAll();
        return $this->render('mouvement_technique/mouvementTechniques.html.twig', [
            'mvtTechniques' => $mvtTech
        ]);
    }
}
