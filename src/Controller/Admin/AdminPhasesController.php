<?php

namespace App\Controller\Admin;

use App\Entity\Phase;
use App\Entity\MouvementTechnique;
use App\Repository\PhaseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminPhasesController extends AbstractController
{
    /**
     * @Route("/admin/phases", name="admin_phases")
     */
    public function index(PhaseRepository $repository)
    {
        $phases = $repository->findAll();
        return $this->render('admin/admin_phases/adminPhases.html.twig', [
            'phases'=>$phases
        ]);
    }
    
    /**
     * @Route("/admin/phase/creation", name="admin_phase_creation")
     * @Route("/admin/phase/{id}", name="admin_phase_modification", methods="GET|POST")
     */
    public function ajoutModificationPhase(Phase $phase = null, Request $request, EntityManagerInterface $entityManager)
    {
        if(!$phase){
            $phase = new Phase();
        }

        $form = $this->createFormBuilder($phase)
            ->add('titre', TextType::class)
            ->add('libelle', TextareaType::class)
            ->add('imageFile', FileType::class, ['required'=>false])
            ->add('MvtTechnique', EntityType::class, [
                'class' => MouvementTechnique::class, 
                'choice_label' => 'libelle',
                'expanded'=>true
            ])
            ->getForm();
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $modif = $phase->getId() !== null; 
                $entityManager->persist($phase);
                $entityManager->flush();
                $this->addFlash("success", $modif ? "La modification a été effectuée" : "L'ajout a été effectuée");
                return $this->redirectToRoute("admin_phases");
            }    

        return $this->render('admin/admin_phases/ajoutModificationPhases.html.twig', [
            'form'=>$form->createView(),
            'phase'=>$phase
        ]);
    }

    /**
     * @Route("/admin/phase/{id}", name="admin_phases_suppression", methods="delete")
     */
    public function suppressionPhase(Phase $phase, Request $request, EntityManagerInterface $entityManager)
    {
       //On vérifie que le token de la requete est valide en vérifiant si les info sont identiques à celles pour générer 
        // le token dans la vue adminMouvement.html.twig.php, et si c'est la cas alors on peut réaliser les actions en BDD
        if ($this->isCsrfTokenValid("SUP". $phase->getId(), $request->get('_token'))){
            //On prépare la requête de suppression avec remove() et on envoie en BDD avec flush()
            $entityManager->remove($phase);
            $entityManager->flush();
            $this->addFlash("success","La suppression a été effectuée");
            return $this->redirectToRoute("admin_phases");
            }
    }


}
