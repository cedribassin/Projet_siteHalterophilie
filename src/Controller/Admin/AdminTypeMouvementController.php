<?php

namespace App\Controller\Admin;

use App\Entity\Mouvement;
use App\Entity\TypeMouvement;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\TypeMouvementRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminTypeMouvementController extends AbstractController
{
    /**
     * @Route("/admin/types", name="admin_types")
     */
    public function index(TypeMouvementRepository $repository)
    {
        $typeMouvements=$repository->findAll();
        return $this->render('admin/admin_type_mouvement/adminTypeMouvement.html.twig', [
            'typeMvts' => $typeMouvements
        ]);
    }


    /**
     * @Route("/admin/type/creation", name="admin_typeMouvement_creation")
     * @Route("/admin/type/{id}", name="admin_modification_typeMouvement", methods="GET|POST")
     */
    public function ajoutModificationTypes(TypeMouvement $typeMouvement = null, Request $request, EntityManagerInterface $entityManager)
    {
        if(!$typeMouvement){
            $typeMouvement = new TypeMouvement();
        }

        $form = $this->createFormBuilder($typeMouvement)
            ->add('libelle', TextType::class)
            ->add('imageFile', FileType::class, ['required'=>false])
            ->add('description', TextareaType::class)
            ->add('mouvement', EntityType::class, [ 
                'class' => Mouvement::class, 
                'choice_label' => 'nom',
                'expanded'=>true,
                'multiple'=>true ])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $modif = $typeMouvement->getId() !== null; 
            $entityManager->persist($typeMouvement);
            $entityManager->flush();
            $this->addFlash("success", $modif ? "La modification a été effectuée" : "L'ajout a été effectuée");
            return $this->redirectToRoute("admin_types");
        }

        return $this->render('admin/admin_type_mouvement/ajoutModifTypeMouvement.html.twig',[
            'typeMvt'=>$typeMouvement,
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/admin/type/{id}", name="admin_suppression_typeMouvement", methods="delete")
     */
    public function suppressionMouvement(TypeMouvement $typeMouvement, Request $request, EntityManagerInterface $entityManager)
    {
        //On vérifie que le token de la requete est valide en vérifiant si les info sont identiques à celles pour générer 
        // le token dans la vue adminMouvement.html.twig.php, et si c'est la cas alors on peut réaliser les actions en BDD
        if ($this->isCsrfTokenValid("SUP". $typeMouvement->getId(), $request->get('_token'))){
        //On prépare la requête de suppression avec remove() et on envoie en BDD avec flush()
        $entityManager->remove($typeMouvement);
        $entityManager->flush();
        $this->addFlash("success","La suppression a été effectuée");
        return $this->redirectToRoute("admin_types");

        }
    }

}