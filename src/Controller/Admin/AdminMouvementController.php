<?php

namespace App\Controller\Admin;

use App\Entity\Mouvement;
use App\Form\MouvementType;
use App\Entity\TypeMouvement;
use App\Repository\MouvementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminMouvementController extends AbstractController
{
    /**
     * @Route("/admin/mouvements", name="admin_mouvements")
     */
    public function index(MouvementRepository $repository)
    {
        $mouvements = $repository->findAll();
        return $this->render('admin/admin_mouvement/adminMouvement.html.twig', [
            'mouvements' => $mouvements
        ]);
    }

    /**
     * @Route("/admin/mouvement/creation", name="admin_creation")
     */
    public function ajoutModification(Mouvement $mouvement = null, Request $request, EntityManagerInterface $entityManager)
    {
        $mouvement = new Mouvement();
        $form = $this->createFormBuilder($mouvement)
            ->add('nom', TextType::class)
            ->add('objectif', TextType::class)
            ->add('intensite', IntegerType::class)
            ->add('consignes', TextType::class)
            ->add('erreur', TextType::class)
            ->add('correctif', TextType::class)
            ->add('image', TextType::class)
            ->add('typeMouvements', EntityType::class, [ 
                'class' => TypeMouvement::class, 
                'choice_label' => 'libelle',
                'expanded'=>true,
                'multiple'=>true ])
            ->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($mouvement);
            $entityManager->flush();
            return $this->redirectToRoute("admin_mouvements");
        }
        return $this->render('admin/admin_mouvement/ajoutModifMouvement.html.twig', [
            'mouvement'=>$mouvement,
            'form' => $form->createView()
        ]);
    }



}
