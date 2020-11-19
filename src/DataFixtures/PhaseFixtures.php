<?php

namespace App\DataFixtures;

use App\Entity\MouvementTechnique;
use App\Entity\Phase;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PhaseFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);


       /*  $phase1Arr = new Phase();
        $phase1Arr->setTitre("1ère phase de l'arraché : la position de départ")
                  ->setLibelle("Pointes de pieds, genoux, et épaules en avant de la barre\n
                  Écartement des pieds d’environ la largeur du bassin et légèrement ouvert vers l’extérieur\n
                  Mains en pronation et pouces crochetés (l’index, voir le majeur sont par-dessus le pouce) avec une prise large (minimum envergure coude à coude)\n
                  Les membres supérieurs sont tendus mais relâchés (grâce au crochetage spécifique)\n
                  Dos incliné vers l'avant, la cyphose dorsale est effacée, et la lordose lombaire fixée\n
                  Les membres inférieurs sont fléchis, cuisses parallèles au sol, les tibias inclinés vers l'avant et au contact de la barre\n
                  Le regard accrochant un point fixe devant, pour l'équilibration générale \n")
                  ->setImageName("arrPhase1.png");
        $manager->persist($phase1Arr);

        $phase2Arr = new Phase();
        $phase2Arr->setTitre("2ème phase de l'arraché: le 1er tirage (le soulevé jusqu'au dessus des genoux)")
                  ->setLibelle("Grosse poussée des membres inférieurs tandis l'angle tronc/sol reste relativement stable (les muscles du dos sont en mode isométrique)\n
                  Les bras sont tendus mais relâchés grâce au crochetage de la barre\n
                  La barre frôle les tibias et les genoux et sa vitesse est contrôlée, voir même être freinée chez certains athlètes afin de mieux préparer la phase suivante\n
                  La durée du premier tirage est la plus longue de toutes les phases et s'explique par une charge déplacée plus lourde pour casser l'inertie de la barre \n")
                  ->setImageName("arrPhase2.png");
        $manager->persist($phase2Arr);

        $phase1Ep = new Phase();
        $phase1Ep->setTitre("1ère phase de l'épaulé: la position de départ")
                  ->setLibelle("En comparaison de l’arraché, la prise est plus rapprochée et équivalente à la largeur d’épaule\n
                  Il y a une flexion moins importante des hanches, genoux, chevilles et le buste est plus redressé\n")
                  ->setImageName("EpPhase1.png");
        $manager->persist($phase1Ep);

        $phase2Ep = new Phase();
        $phase2Ep->setTitre("2ème phase de l'épaulé: le 1er tirage")
                  ->setLibelle("En comparaison de l’arraché, la prise est plus rapprochée et équivalente à la largeur d’épaule\n
                  Il y a une flexion moins importante des hanches, genoux, chevilles et le buste est plus redressé\n")
                  ->setImageName("EpPhase1.png");
        $manager->persist($phase2Ep);

        $phase1Jet = new Phase();
        $phase1Jet->setTitre("1ère phase du jeté: l'appel")
                  ->setLibelle("Le pratiquant se tient debout, la barre au niveau des clavicules, les pieds largeur de bassin et légèrement ouverts\n
                  Pour diminuer le chemin de la barre, il est possible d’augmenter l’écartement des mains\n
                  Le buste est droit, le tronc est gainé et les coudes engagés vers l’avant\n
                  Le pratiquant effectue une triple flexion maîtrisée des hanches, genoux et chevilles sur une petite amplitude en bloquant la respiration\n")
                  ->setImageName("JetPhase1.png");
        $manager->persist($phase1Jet);

        $phase2Jet = new Phase();
        $phase2Jet->setTitre("2ème phase de jeté: l'impulsion")
                  ->setLibelle("Immédiatement après l’appel, l’athlète effectue une triple extension chevilles, genoux, hanches en étant le plus vertical et explosif possible\n
                  Le tronc reste gainé pour une meilleure transmission des forces du sol vers le haut\n
                  Les coudes descendent légèrement et les épaules montent pour que la barre puisse décoller d’une hauteur plus importante et faciliter ainsi le passage sous la barre\n
                  L’athlète dégage alors le menton en envoyant la tête vers l’arrière afin de faciliter le passage de la barre et avoir une trajectoire la plus verticale possible\n")
                  ->setImageName("JetPhase2.png");
        $manager->persist($phase2Jet);

        $mvtTechRepository = $manager->getRepository(MouvementTechnique::class);

        $arrPhase1 = $mvtTechRepository->findOneBy(["libelle"=>"Analyse de l'arraché technique"]);
        $arrPhase1->setMvtTechnique($phase1Arr);
        $manager->persist($arrPhase1);

        $arrPhase2 = $mvtTechRepository->findOneBy(["libelle"=>"Analyse de l'arraché technique"]);
        $arrPhase2->setMvtTechnique($phase2Arr);
        $manager->persist($arrPhase2);

        $epPhase1 = $mvtTechRepository->findOneBy(["libelle"=>"Analyse de l'épaulé technique"]);
        $epPhase1->setMvtTechnique($phase1Ep);
        $manager->persist($epPhase1);

        $epPhase2 = $mvtTechRepository->findOneBy(["libelle"=>"Analyse de l'épaulé technique"]);
        $epPhase2->setMvtTechnique($phase2Ep);
        $manager->persist($epPhase2);

        $jetPhase1 = $mvtTechRepository->findOneBy(["libelle"=>"Analyse du jeté technique"]);
        $jetPhase1->setMvtTechnique($phase1Jet);
        $manager->persist($jetPhase1);

        $jetPhase1 = $mvtTechRepository->findOneBy(["libelle"=>"Analyse du jeté technique"]);
        $jetPhase1->setMvtTechnique($phase2Jet);
        $manager->persist($jetPhase1);


        $manager->flush();  */
    }
}
