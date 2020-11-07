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
        ->setImage("MouvDebout.png");
        $manager->persist($typeMouvement1);

        $mouvementRepository = $manager->getRepository(Mouvement::class);
        
        $mouvDebout1 = $mouvementRepository->findOneBy(["nom"=>"arrache debout"]);
        $mouvDebout1->addTypeMouvement($typeMouvement1);
        $manager->persist($mouvDebout1);

        $mouvDebout2 = $mouvementRepository->findOneBy(["nom"=>"arraché debout en suspension"]);
        $mouvDebout2->addTypeMouvement($typeMouvement1);
        $manager->persist($mouvDebout2);


        $manager->flush();
    }
}
