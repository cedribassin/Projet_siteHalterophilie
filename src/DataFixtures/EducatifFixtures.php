<?php

namespace App\DataFixtures;

use App\Entity\Etape;
use App\Entity\Educatif;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EducatifFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        /*  $educatif1 = new Educatif();
        $educatif1->setTitre("Educatif 1")
            ->setDescription("corps redressée, prise large en pronation, on demande 
        simplement un haussement d’épaules combiné avec une montée sur pointes de pieds 
        (extension des chevilles)")
            ->setRealisation("Réalisation = 3 séries de 3 à 5 reps")
            ->setAspectPedagogique("regard droit devant");

        $etapeRepository = $manager->getRepository(Etape::class);
        $etape1 = $etapeRepository->findOneBy(["libelle" => "Educatif"]);
        $etape1->setEtape($educatif1);
        $manager->persist($etape1);
        $manager->flush(); */
    }
}