<?php

namespace App\DataFixtures;

use App\Entity\Mouvement;
use App\Entity\TypeMouvement;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class TypeMouvementFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $typeMouvement1 = new TypeMouvement();
        $typeMouvement1->setLibelle("Mouvement debout")
        ->setDescription("Les mouvements debout consistent à supprimer la phase du passage 
        lors de l’arraché, l’épaulé ou encore le jeté. En comparaison du mouvement global, 
        la réception s’effectue sur une petite amplitude correspondant à un ¼ de flexion au 
        niveau des genoux. Les mouvements debout présentent un intérêt dans la phase 
        d’apprentissage car ils suppriment la phase du passage, qui est souvent difficile pour 
        des débutants. Ils vont également permettre de se focaliser sur les phases de tirage 
        et accentuer la synergie entre l’action des membres supérieurs et celle des membres inférieurs. 
        Néanmoins, il faudra être vigilant sur une trop grande amplitude de déplacement latéral des 
        pieds (pour le style en flexion), ou qu’une inclinaison du buste trop importante 
        (pour le style en fente) ne viennent pas compenser un manque d’amplitude de flexion ou fente. 
        Un excès de mouvements debout peut aussi gêner l’apprentissage du mouvement global en occultant 
        le passage sous la barre.")
        ->setImage("MvtDebout.png");
        $manager->persist($typeMouvement1);

        $typeMouvement2 = new TypeMouvement();
        $typeMouvement2->setLibelle("Mouvement des plots/suspension")
        ->setDescription("Démarrage en suspension:\n
        Ils concernent l’arraché et l’épaulé, et en général, il s’agit de suspension haute 
        c’est-à-dire avec la barre au-dessus des genoux pour démarrer le mouvement. L’objectif 
        majeur se situe dans une amélioration du placement de l’athlète à partir de la position 
        travaillée, et aussi de supprimer la phase de transition pour se concentrer le 2ème tirage.
        On parle généralement de mouvement en suspension lorsque le départ de celui-ci s'effectue 
        barre au-dessus des genoux, mais dans l'absolu, différentes hauteurs sont possibles selon 
        l'objectif choisi. Celles-ci doivent alors être précisées dans l'intitulé de l'exercice.Ces 
        différentes hauteurs s'établissent en fonction des objectifs visés mais avec comme obligation 
        de prendre une posture identique au mouvement technique. La suspension permet en effet d'ancrer, 
        par le ressenti permanent de la charge, des repères sur son placement par rapport à la barre idéale 
        à partir d'une position de référence (distorsion nulle au départ du mouvement en suspension par 
        rapport au mouvement technique).\n
        Démarrage des plots:\n
        Les plots, eux, s'utilisent de différentes hauteurs en fonction des effets recherchés (mais généralement 
        au-dessus des genoux). Il faut alors veiller à ce que ces mouvements ne provoquent pas d'attitudes 
        de compensation plus facilitantes à l'exécution du geste au détriment de la technique de référence.")
        ->setImage("MvtPlotSusp.png");
        $manager->persist($typeMouvement2);


        $mouvementRepository = $manager->getRepository(Mouvement::class);
        
        $mouvDebout1 = $mouvementRepository->findOneBy(["nom"=>"arrache debout"]);
        $mouvDebout1->addTypeMouvement($typeMouvement1);
        $manager->persist($mouvDebout1);

        $mouvDebout2 = $mouvementRepository->findOneBy(["nom"=>"arraché debout en suspension"]);
        $mouvDebout2->addTypeMouvement($typeMouvement1);
        $manager->persist($mouvDebout2);

        $mouvDebout3 = $mouvementRepository->findOneBy(["nom"=>"arraché des plots"]);
        $mouvDebout3->addTypeMouvement($typeMouvement2);
        $manager->persist($mouvDebout2);

        $mouvDebout4 = $mouvementRepository->findOneBy(["nom"=>"arraché debout en suspension"]);
        $mouvDebout4->addTypeMouvement($typeMouvement2);
        $manager->persist($mouvDebout4);

        $mouvDebout5 = $mouvementRepository->findOneBy(["nom"=>"arraché suspension"]);
        $mouvDebout5->addTypeMouvement($typeMouvement2);
        $manager->persist($mouvDebout5);


        $manager->flush();
    }
}
