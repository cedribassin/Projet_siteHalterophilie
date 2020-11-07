<?php

namespace App\Controller;

use App\Repository\TypeMouvementRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TypeMouvementController extends AbstractController
{
    /**
     * @Route("/client/mouvements", name="mouvements")
     */
    public function mouvements(TypeMouvementRepository $repository)
    {
        $types = $repository->findAll();
        return $this->render('type_mouvement/mouvements.html.twig', [
            "types"=>$types
        ]);
    }
}
