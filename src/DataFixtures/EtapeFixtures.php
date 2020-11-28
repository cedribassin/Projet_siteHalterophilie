<?php

namespace App\DataFixtures;

use App\Entity\Etape;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class EtapeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

       // $etape1 = new Etape();


        $manager->flush();
    }
}
