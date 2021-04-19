<?php

namespace App\Controller\Admin;

use App\Entity\Mouvement;
use App\Entity\Seance;
use App\Repository\SeanceRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminSeanceController extends AbstractController
{
    /**
     * @Route("/admin/seance", name="admin_seance")
     */
    public function index(SeanceRepository $repository)
    {
        $seances = $repository->findAll();
        return $this->render('admin/admin_seance/adminSeance.html.twig', [
            'seances' => $seances
        ]);
    }

    /**
     * @Route("/admin/seance/creation", name="admin_seance_creation")
     * @Route("/admin/seance/{id}", name="admin_modification_seance", methods="GET|POST")
     */
    public function ajoutModificationSeance(Seance $seance = null, Request $request, EntityManagerInterface $entityManager)
    {
        if (!$seance) {
            $seance = new Seance();
        }
        $form = $this->createFormBuilder($seance)
            ->add('nombreSerie', IntegerType::class)
            ->add('nombreReps',  IntegerType::class)
            ->add('intensite',  IntegerType::class)
            ->add('recuperation',  IntegerType::class)
            ->add('titre', TextType::class)
            ->add('mouvement', EntityType::class, [
                'class' => Mouvement::class,
                'choice_label' => 'nom',
                'expanded' => true,
                'multiple' => true
            ])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $modif = $seance->getId() !== null;
            $entityManager->persist($seance);
            $entityManager->flush();
            $this->addFlash("success", $modif ? "La modification a été effectuée" : "L'ajout a été effectuée");
            return $this->redirectToRoute("admin_seance");
        }
        return $this->render('admin/admin_seance/ajoutModifSeance.html.twig', [
            'seance' => $seance,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/seance/{id}", name="admin_suppression_seance", methods="delete")
     */
    //Fonction permettant de supprimer un mouvement (en rajoutant methods="delete" dans les routes, on va pouvoir distinguer
    // son url de celle présente dans la fonction ajoutEtModification())
    public function suppressionMouvement(Seance $seance = null, Request $request, EntityManagerInterface $entityManager)
    {
        //On vérifie que le token de la requete est valide en vérifiant si les info sont identiques à celles pour générer 
        // le token dans la vue adminMouvement.html.twig.php, et si c'est la cas alors on peut réaliser les actions en BDD
        if ($this->isCsrfTokenValid("SUP" . $seance->getId(), $request->get('_token'))) {
            //On prépare la requête de suppression avec remove() et on envoie en BDD avec flush()
            $entityManager->remove($seance);
            $entityManager->flush();
            $this->addFlash("success", "La suppression a été effectuée");
            return $this->redirectToRoute("admin_seance");
        }
    }
}