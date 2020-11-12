<?php

namespace App\Controller;

use App\Entity\Mouvement;
use App\Repository\MouvementRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MouvementController extends AbstractController
{
   
    /**
     * @Route("/client/mouvement/{id}", name="mouvement_detail")
     */
    public function getMouvementDetail(Mouvement $mouvement)
    {
        return $this->render('mouvement/mouvementDetail.html.twig', [
            "mouvement"=>$mouvement
        ]);
    }



}
