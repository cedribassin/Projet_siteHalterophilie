<?php

namespace App\Controller;

use App\Repository\MouvementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MouvementController extends AbstractController
{
    /**
     * @Route("/mouvements", name="mouvements")
     */
    public function mouvements()
    {
        return $this->render('mouvement/mouvements.html.twig');
    }

    /**
     * @Route("/mouvement", name="mouvement_detail")
     */
    public function mouvementDetail(MouvementRepository $repository)
    {
        $mouvements = $repository->findAll();
        return $this->render('mouvement/mouvementDetail.html.twig', [
            "mouvements"=>$mouvements
        ]);
    }

}
