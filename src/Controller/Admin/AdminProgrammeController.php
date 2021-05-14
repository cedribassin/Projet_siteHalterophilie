<?php

namespace App\Controller\Admin;

use App\Entity\Programme;
use App\Entity\Seance;
use App\Repository\ProgrammeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminProgrammeController extends AbstractController
{
    /**
     * @Route("/admin/programme", name="admin_programme")
     */
    public function index(ProgrammeRepository $repository)
    {
        $programmes = $repository->findAll();
        return $this->render('admin/admin_programme/adminProgrammes.html.twig', [
            'programmes' => $programmes,
        ]);
    }

    /**
     * @Route("/admin/programme/creation", name="admin_programme_creation")
     * @Route("/admin/programme/{id}", name="admin_modification_programme", methods="GET|POST")
     */
    public function ajoutModificationSeance(Programme $programme = null, Request $request, EntityManagerInterface $entityManager)
    {
        if (!$programme) {
            $programme = new Programme();
        }
        $form = $this->createFormBuilder($programme)
            ->add('nom', TextType::class)
            ->add('seance', EntityType::class, [
                'class' => Seance::class,
                'choice_label' => 'nom',
                'expanded' => true,
                'multiple' => true
            ])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $modif = $programme->getId() !== null;
            $entityManager->persist($programme);
            $entityManager->flush();
            $this->addFlash("success", $modif ? "La modification a été effectuée" : "L'ajout a été effectuée");
            return $this->redirectToRoute("admin_programme");
        }
        return $this->render('admin/admin_programme/ajoutModifProgramme.html.twig', [
            'programme' => $programme,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/programme/{id}", name="admin_suppression_programme", methods="delete")
     */
    //Fonction permettant de supprimer un programme (en rajoutant methods="delete" dans les routes, on va pouvoir distinguer
    // son url de celle présente dans la fonction ajoutEtModification())
    public function suppressionMouvement(Programme $programme = null, Request $request, EntityManagerInterface $entityManager)
    {
        //On vérifie que le token de la requete est valide en vérifiant si les info sont identiques à celles pour générer 
        // le token dans la vue adminProgramme.html.twig.php, et si c'est la cas alors on peut réaliser les actions en BDD
        if ($this->isCsrfTokenValid("SUP" . $programme->getId(), $request->get('_token'))) {
            //On prépare la requête de suppression avec remove() et on envoie en BDD avec flush()
            $entityManager->remove($programme);
            $entityManager->flush();
            $this->addFlash("success", "La suppression a été effectuée");
            return $this->redirectToRoute("admin_programme");
        }
    }
}