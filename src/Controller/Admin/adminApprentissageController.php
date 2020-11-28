<?php

namespace App\Controller\Admin;

use App\Entity\Apprentissage;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ApprentissageRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class adminApprentissageController extends AbstractController
{
    /**
     * @Route("/admin/apprentissage", name="admin_apprentissage")
     */
    public function index(ApprentissageRepository $repository)
    {
        $principes = $repository->findAll();
        return $this->render('admin/admin_apprentissage/adminApprentissage.html.twig', [
            'principes'=>$principes
        ]);
    }

    /**
     * @Route("/admin/apprentissage/creation", name="admin_apprentissage_creation")
     * @Route("/admin/apprentissage/{id}", name="admin_apprentissage_ajout", methods="GET|POST")
     */
    public function ajoutModificationApprentissage(Apprentissage $apprentissage = null, Request $request, EntityManagerInterface $entityManager)
    {
        if(!$apprentissage){
            $apprentissage = new Apprentissage();
        }

        $form = $this->createFormBuilder($apprentissage)
            ->add('titre', TextType::class)
            ->add('texte', TextareaType::class)
            ->add('image', TextType::class, ['required'=>false])
            ->getForm();
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                //$modif = $apprentissage->getId() !== null; 
                $entityManager->persist($apprentissage);
                $entityManager->flush();
               // $this->addFlash("success", $modif ? "La modification a été effectuée" : "L'ajout a été effectuée");
                return $this->redirectToRoute("admin_apprentissage");
            }    

        return $this->render('admin/admin_apprentissage/ajoutCreationApprentissage.html.twig', [
            'principes'=>$apprentissage,
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/admin/apprentissage/{id}", name="admin_suppression_apprentissage", methods="delete")
     */
    //Fonction permettant de supprimer un mouvement (en rajoutant methods="delete" dans les routes, on va pouvoir distinguer
    // son url de celle présente dans la fonction ajoutEtModification())
    public function suppressionMouvement(Apprentissage $apprentissage, Request $request, EntityManagerInterface $entityManager)
    {
        //On vérifie que le token de la requete est valide en vérifiant si les info sont identiques à celles pour générer 
        // le token dans la vue adminMouvement.html.twig.php, et si c'est la cas alors on peut réaliser les actions en BDD
        if ($this->isCsrfTokenValid("SUP". $apprentissage->getId(), $request->get('_token'))){
        //On prépare la requête de suppression avec remove() et on envoie en BDD avec flush()
        $entityManager->remove($apprentissage);
        $entityManager->flush();
        $this->addFlash("success","La suppression a été effectuée");
        return $this->redirectToRoute("admin_apprentissage");
        } 
    }


}
