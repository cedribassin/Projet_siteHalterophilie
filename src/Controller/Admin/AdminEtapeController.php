<?php

namespace App\Controller\Admin;

use App\Entity\Etape;
use App\Entity\Apprentissage;
use App\Repository\EtapeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AdminEtapeController extends AbstractController
{
    /**
     * @Route("/admin/etape", name="admin_etape")
     */
    public function index(EtapeRepository $repository)
    {
        $etape = $repository->findAll();
        return $this->render('admin/admin_etape/adminEtape.html.twig', [
            'etapes'=>$etape
        ]);
    }

    /**
     * @Route("/admin/etape/creation", name="admin_etape_creation")
     * @Route("/admin/etape/{id}", name="admin_etape_modification", methods="GET|POST")
     */
    public function ajoutModification(Etape $etape = null, Request $request, EntityManagerInterface $entityManager)
    {
        if(!$etape){
            $etape = new Etape();
        }

        $form = $this->createFormBuilder($etape)
        ->add('gesteConcerne', TextType::class)
        ->add('libelle', TextareaType::class)
        ->add('apprentissage', EntityType::class, [ 
            'class' => Apprentissage::class, 
            'choice_label' => 'titre',
            'expanded'=>true ])
        ->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //$modif = $apprentissage->getId() !== null; 
            $entityManager->persist($etape);
            $entityManager->flush();
           // $this->addFlash("success", $modif ? "La modification a été effectuée" : "L'ajout a été effectuée");
            return $this->redirectToRoute("admin_etape");
        }    
        return $this->render('admin/admin_etape/ajoutModificationEtape.html.twig', [
            'etapes'=>$etape,
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/admin/etape/{id}", name="admin_etape_suppression", methods="delete")
     */
    public function suppressionMouvement(Etape $etape, Request $request, EntityManagerInterface $entityManager)
    {
        if ($this->isCsrfTokenValid("SUP". $etape->getId(), $request->get('_token'))){
        $entityManager->remove($etape);
        $entityManager->flush();
        $this->addFlash("success","La suppression a été effectuée");
        return $this->redirectToRoute("admin_etape");
        } 
    }


}
