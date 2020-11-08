<?php

namespace App\Controller;

use App\Entity\TypeMouvement;
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

    /**
     * @Route("/client/type/{id}", name="afficher_type_mouvement")
     */
    //Fonction qui permet de récupérer les mouvements debouts
    public function getTypeMouvement(TypeMouvement $typeMouvements)
    {
        return $this->render('mouvement/mouvementListe.html.twig', [
            "typeMouvements"=>$typeMouvements
        ]);
    }
}
