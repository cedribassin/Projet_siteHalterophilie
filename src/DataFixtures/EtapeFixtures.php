<?php

namespace App\DataFixtures;

use App\Entity\Etape;
use App\Entity\Apprentissage;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class EtapeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

       /*  $etape1 = new Etape();
        $etape1->setGesteConcerne("Etape 1 pour l'arraché : le tirage");
        $apprentissageRepository = $manager->getRepository(Apprentissage::class); */
      //  $app1 = $apprentissageRepository->findOneBy(["titre"]=>)

        $manager->flush();
    }
}