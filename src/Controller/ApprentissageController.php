<?php

namespace App\Controller;

use App\Repository\ApprentissageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ApprentissageController extends AbstractController
{
    /**
     * @Route("/apprentissage", name="apprentissage")
     */
    public function index(ApprentissageRepository $repository)
    {
        $apprentissage = $repository->findAll();
        return $this->render('apprentissage/apprentissage.html.twig',[
            'apprentissage'=>$apprentissage
        ]);
    }
}
