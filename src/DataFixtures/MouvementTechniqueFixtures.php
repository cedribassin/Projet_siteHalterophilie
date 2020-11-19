<?php

namespace App\DataFixtures;

use App\Entity\Phase;
use App\Entity\MouvementTechnique;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MouvementTechniqueFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $arracheTech = new MouvementTechnique();
        $arracheTech->setLibelle("Analyse de l'arraché technique");
        $manager->persist($arracheTech);

        $epauleTech = new MouvementTechnique();
        $epauleTech->setLibelle("Analyse de l'épaulé technique");
        $manager->persist($epauleTech);

        $JeteTech = new MouvementTechnique();
        $JeteTech->setLibelle("Analyse du jeté technique");
        $manager->persist($JeteTech);

        $phaseRepository = $manager->getRepository(Phase::class);

        $arrPhase1 = $phaseRepository->findOneBy(["titre"=>"1ère phase de l'arraché : la position de départ"]);
        $arrPhase1->setMvtTechnique($arracheTech);
        $manager->persist($arrPhase1);

        $arrPhase2 = $phaseRepository->findOneBy(["titre"=>"2ème phase de l'arraché: le 1er tirage (le soulevé jusqu'au dessus des genoux)"]);
        $arrPhase2->setMvtTechnique($arracheTech);
        $manager->persist($arrPhase2);

        $epPhase1 = $phaseRepository->findOneBy(["titre"=>"1ère phase de l'épaulé: la position de départ"]);
        $epPhase1->setMvtTechnique($epauleTech);
        $manager->persist($epPhase1);

        $epPhase2 = $phaseRepository->findOneBy(["titre"=>"2ème phase de l'épaulé: le 1er tirage"]);
        $epPhase2->setMvtTechnique($epauleTech);
        $manager->persist($epPhase2);

        $jetPhase1 = $phaseRepository->findOneBy(["titre"=>"1ère phase du jeté: l'appel"]);
        $jetPhase1->setMvtTechnique($JeteTech);
        $manager->persist($jetPhase1);

        $jetPhase2 = $phaseRepository->findOneBy(["titre"=>"2ème phase de jeté: l'impulsion"]);
        $jetPhase2->setMvtTechnique($JeteTech);
        $manager->persist($jetPhase2);


        $manager->flush();
    }
}
