<?php

namespace App\DataFixtures;

use App\Entity\Apprentissage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ApprentissageFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $apprentissage1 = new Apprentissage();
        $apprentissage1->setTitre("Principe n°1 - Utilisation de charges légères")
                        ->setTexte("En général, un bâton ou une barre à vide 
                        (rappel : 15 ou 20 kg selon le sexe) sont suffisants. 
                        Pour les plus jeunes, il existe des barres d’initiations 
                        plus courtes et moins lourdes pouvant peser 10 kg voir 2,5kg. 
                        Une charge trop importante risque fortement de nuire à l’apprentissage 
                        technique (en imprimant une mauvaise gestuelle, plus difficile 
                        à corriger une fois installée), et peut présenter des risques 
                        physiques pour les débutants.");
        $manager->persist($apprentissage1);

        $apprentissage2 = new Apprentissage();
        $apprentissage2->setTitre("Principe n°2 – le placement du dos")
                        ->setTexte("Tous les exercices d’haltérophilie nécessitent un placement 
                        irréprochable du dos. Même si le terme de dos droit est souvent employé, 
                        les exercices techniques et semi-techniques devront toujours être réalisés 
                        avec une fixation du dos la plus solide possible. C’est-à-dire en respectant 
                        les différentes courbures de la colonne vertébrale. Excepté le cas de la réception 
                        à l’arraché ou on constate un léger effacement de la cyphose dorsale (dû au rapprochement 
                        des omoplates qui permettent justement de protéger cette région), les pratiquants 
                        ne devront pas accentuer ou effacer (encore moins inverser !) les courbures naturelles 
                        du rachis. En pratique : l’entraîneur démontre le placement du dos avec un bâton, en 
                        le plaçant au-dessus des genoux et se redresse en conservant les courbures du rachis.
                        Réalisation : 3 séries de 5 reps
                        Aspects pédagogiques : en consigne on utilise un vocabulaire simple et accessible. 
                        Par conséquent, on évitera d’employer des termes comme « adduction » des omoplates etc… 
                        Auquel, on préférera pour ce cas, le terme de poitrine ressortie (induisant automatiquement 
                        des omoplates rapprochées).
                        Astuces pour obtenir un bon placement :")
                        ->setImage("placement.png");

        $manager->persist($apprentissage2);


        $manager->flush();
    }
}
