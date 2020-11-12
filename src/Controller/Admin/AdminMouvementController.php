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
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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
     * @Route("/admin/mouvement/creation", name="admin_mouvement_creation")
     * @Route("/admin/mouvement/{id}", name="admin_modification_mouvement", methods="GET|POST")
     */
    public function ajoutModificationMouvements(Mouvement $mouvement = null, Request $request, EntityManagerInterface $entityManager)
    {
        if(!$mouvement){
            $mouvement = new Mouvement();
        }
        $form = $this->createFormBuilder($mouvement)
            ->add('nom', TextType::class)
            ->add('objectif', TextType::class)
            ->add('intensite', IntegerType::class)
            ->add('consignes', TextareaType::class)
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
            $modif = $mouvement->getId() !== null; 
            $entityManager->persist($mouvement);
            $entityManager->flush();
            $this->addFlash("success", $modif ? "La modification a été effectuée" : "L'ajout a été effectuée");
            return $this->redirectToRoute("admin_mouvements");
        }
        return $this->render('admin/admin_mouvement/ajoutModifMouvement.html.twig', [
            'mouvement'=>$mouvement,
            'form' => $form->createView()
        ]);
    }

     /**
     * @Route("/admin/mouvement/{id}", name="admin_suppression_mouvement", methods="delete")
     */
    //Fonction permettant de supprimer un mouvement (en rajoutant methods="delete" dans les routes, on va pouvoir distinguer
    // son url de celle présente dans la fonction ajoutEtModification())
    public function suppressionMouvement(Mouvement $mouvement, Request $request, EntityManagerInterface $entityManager)
    {
        //On vérifie que le token de la requete est valide en vérifiant si les info sont identiques à celles pour générer 
        // le token dans la vue adminMouvement.html.twig.php, et si c'est la cas alors on peut réaliser les actions en BDD
        if ($this->isCsrfTokenValid("SUP". $mouvement->getId(), $request->get('_token'))){
        //On prépare la requête de suppression avec remove() et on envoie en BDD avec flush()
        $entityManager->remove($mouvement);
        $entityManager->flush();
        $this->addFlash("success","La suppression a été effectuée");
        return $this->redirectToRoute("admin_mouvements");
        }
    }


}
