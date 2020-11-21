<?php

namespace App\Controller\Admin;

use App\Entity\MouvementTechnique;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MouvementTechniqueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdminMouvementTechController extends AbstractController
{
    /**
     * @Route("/admin/mouvements_tech", name="admin_mouvements_tech")
     */
    public function index(MouvementTechniqueRepository $repository)
    {
        $mvtTech = $repository->findAll();
        return $this->render('admin/admin_mouvement_tech/adminMvtTech.html.twig', [
            'mvtTech'=>$mvtTech
        ]);
    }

    /**
     * @Route("/admin/mouvements_tech/creation", name="admin_mouvements_tech_creation")
     * @Route("/admin/mouvements_tech/{id}", name="admin_mouvements_tech_modification", methods="GET|POST")
     */
    public function ajoutModificatioMvtTech(MouvementTechnique $mvtTech = null, Request $request, EntityManagerInterface $entityManager)
    {
        if(!$mvtTech){
            $mvtTech = new MouvementTechnique();
        }

        $form = $this->createFormBuilder($mvtTech)
        ->add('libelle', TextType::class)
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //$modif = $phase->getId() !== null; 
            $entityManager->persist($mvtTech);
            $entityManager->flush();
            //$this->addFlash("success", $modif ? "La modification a été effectuée" : "L'ajout a été effectuée");
            return $this->redirectToRoute("admin_mouvements_tech");
        }    

        return $this->render('admin/admin_mouvement_tech/ajoutModifMvtTech.html.twig', [
            'mvtTech'=>$mvtTech,
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/admin/mouvements_tech/{id}", name="admin_mouvements_tech_suppression", methods="delete")
     */
    public function suppressionPhase(MouvementTechnique $mvtTech, Request $request, EntityManagerInterface $entityManager)
    {
        if ($this->isCsrfTokenValid("SUP". $mvtTech->getId(), $request->get('_token'))){
            //On prépare la requête de suppression avec remove() et on envoie en BDD avec flush()
            $entityManager->remove($mvtTech);
            $entityManager->flush();
            $this->addFlash("success","La suppression a été effectuée");
            return $this->redirectToRoute("admin_mouvements_tech");
            }
        }


}
