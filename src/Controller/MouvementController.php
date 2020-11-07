<?php

namespace App\Controller;

use App\Entity\Mouvement;
use App\Repository\MouvementRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MouvementController extends AbstractController
{
   
    /**
     * @Route("/mouvement/debout", name="mouvement_debout")
     */
    //Fonction qui permet de récupérer les mouvements debouts
    public function getMouvementDebout(MouvementRepository $repository)
    {
        //getMouvementParType() => fonction codée dans MouvementRepository
        $mouvements = $repository->getMouvementParType('debout');
        return $this->render('mouvement/mouvementListe.html.twig', [
            "mouvements"=>$mouvements
        ]);
    }

    /**
     * @Route("/mouvement/puissance", name="mouvement_puissance")
     */
    //Fonction qui permet de récupérer les mouvements en puissance
    public function getMouvementPuissance(MouvementRepository $repository)
    {
        //getMouvementParType() => fonction codée dans MouvementRepository
        $mouvements = $repository->getMouvementParType('puissance');
        return $this->render('mouvement/mouvementListe.html.twig', [
            "mouvements"=>$mouvements
        ]);
    }

    /**
     * @Route("/mouvement/force", name="mouvement_force")
     */
    //Fonction qui permet de récupérer les mouvements en force
    public function getMouvementForce(MouvementRepository $repository)
    {
        //getMouvementParType() => fonction codée dans MouvementRepository
        $mouvements = $repository->getMouvementParType('force');
        return $this->render('mouvement/mouvementListe.html.twig', [
            "mouvements"=>$mouvements
        ]);
    }

    /**
     * @Route("/mouvement/{id}", name="mouvement_detail")
     */
    public function getMouvementDetail(Mouvement $mouvement)
    {
        return $this->render('mouvement/mouvementDetail.html.twig', [
            "mouvement"=>$mouvement
        ]);
    }



}
