<?php

namespace App\Controller\Admin;

use App\Entity\Educatif;
use App\Entity\Etape;
use App\Repository\EducatifRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Routing\Annotation\Route;

class AdminEducatifController extends AbstractController
{
    /**
     * @Route("/admin/educatif", name="admin_educatif")
     */
    public function index(EducatifRepository $repository)
    {
        $educatif = $repository->findAll();
        return $this->render('admin/admin_educatif/adminEducatif.html.twig', [
            'educatifs' => $educatif
        ]);
    }

    /**
     * @Route("/admin/educatif/creation", name="admin_educatif_creation")
     * @Route("/admin/educatif/{id}", name="admin_educatif_modification", methods="GET|POST")
     */
    public function ajoutModification(Educatif $educatif = null, Request $request, EntityManagerInterface $entityManager)
    {
        if (!$educatif) {
            $educatif = new Educatif();
        }

        $form = $this->createFormBuilder($educatif)
            ->add('titre', TextType::class)
            ->add('description', TextareaType::class)
            ->add('realisation', TextType::class)
            ->add('aspectPedagogique', TextareaType::class)
            ->add('etape', EntityType::class, [
                'class' => Etape::class,
                'choice_label' => 'gesteConcerne',
                'expanded' => true
            ])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$modif = $apprentissage->getId() !== null; 
            $entityManager->persist($educatif);
            $entityManager->flush();
            // $this->addFlash("success", $modif ? "La modification a été effectuée" : "L'ajout a été effectuée");
            return $this->redirectToRoute("admin_educatif");
        }
        return $this->render('admin/admin_educatif/ajoutModificationEducatif.html.twig', [
            'educatifs' => $educatif,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/educatif/{id}", name="admin_educatif_suppression", methods="delete")
     */
    public function suppressionMouvement(Educatif $educatif, Request $request, EntityManagerInterface $entityManager)
    {
        if ($this->isCsrfTokenValid("SUP" . $educatif->getId(), $request->get('_token'))) {
            $entityManager->remove($educatif);
            $entityManager->flush();
            $this->addFlash("success", "La suppression a été effectuée");
            return $this->redirectToRoute("admin_etape");
        }
    }
}