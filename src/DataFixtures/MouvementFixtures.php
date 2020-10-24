<?php

namespace App\DataFixtures;

use App\Entity\Mouvement;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MouvementFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $mouvement1=new Mouvement();
        $mouvement1->setNom("arraché")
                ->setObjectif("Amener une barre le plus lourdement chargée, du sol au-dessus de la tête, entièrement grandit
                et bras tendu, en un seul mouvement")
                ->setIntensite(100)
                ->setConsignes("L'athlète se place avec les pointes de pieds, genoux, et épaules en avant de la barre. Les pieds sont orientés vers l'extérieur 
                et d'une largeur qui représente environ la largeur du bassin. Les mains saisisent la barre pronation, pouces crochetés. Les membres supérieurs 
                sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, la cyphose dorsale est effacée, et la lordose lombaire fixée. 
                Les membres inférieurs sont fléchis, cuisses parallèles au sol, les tibias inclinés vers l'avant et au contact de la barre. 
                Le regard accrochant un point fixe devant, pour l'équilibration générale. L'athlète démarre le mouvement en effectuant une grosse poussée des jambes, 
                le dos reste fixe, les bras sont tendus mais relâchés grâce au crochetage de la barre. La barre reste toujours proche du corps avec une vitesse contrôlée, 
                pour anticiper le passage des genoux. Le dos se redresse quasiment à la verticale, les bras toujours tendus, l'athlète accélère la barre avec 
                une grosse poussée des jambes (comme un saut vertical). Lorsqu'il est entièrement redressé, il réalise un haussement des 
                épaules et monte sur ces pointes de pieds, jusqu'à ce que ces derniers décollent du sol pour s'écarter vers l'extérieur (pour le style
                en flexion), tandis que la barre monte, l'athlète se sert de celle-ci (en faisant un tirage vers le haut) pour passer rapidement 
                en-dessous, jambes fléchis avec les articulations des hanches sous les genoux et les bras toujours tendus. Ensuite l'athlète se redresse entièrement 
                en conservant les bras tendus et le dos fixé.")
                ->setErreur("Nombreuses, dans les 6 phases du mouvement")
                ->setCorrectif("Utilisation appropriée des mouvements semi-techniques");
                $manager->persist($mouvement1);
                $manager->flush();
    

    $mouvement2=new Mouvement();
    $mouvement2->setNom("arraché debout")
            ->setObjectif("Cet exercice est pratiqué pour renforcer le mouvement de l'arraché technique et 
            notamment pour insister sur la finition du tirage.")
            ->setIntensite(86)
            ->setConsignes("L'athlète se place avec les pointes de pieds, genoux, et épaules en avant de la barre. Les pieds sont orientés vers l'extérieur 
            et d'une largeur qui représente environ la largeur du bassin. Les mains saisisent la barre pronation, pouces crochetés. Les membres supérieurs 
            sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, la cyphose dorsale est effacée, et la lordose lombaire fixée. 
            Les membres inférieurs sont fléchis, cuisses parallèles au sol, les tibias inclinés vers l'avant et au contact de la barre. 
            Le regard accrochant un point fixe devant, pour l'équilibration générale. L'athlète démarre le mouvement en effectuant une grosse poussée des jambes, 
            le dos reste fixe, les bras sont tendus mais relâchés grâce au crochetage de la barre. La barre reste toujours proche du corps avec une vitesse contrôlée, 
            pour anticiper le passage des genoux. Le dos se redresse quasiment à la verticale, les bras toujours tendus, l'athlète accélère la barre avec 
            une grosse poussée des jambes (comme un saut vertical). Lorsqu'il est entièrement redressé, il réalise un haussement des 
            épaules et monte sur ces pointes de pieds, jusqu'à ce que ces derniers décollent du sol pour s'écarter vers l'extérieur (pour le style
            en flexion), tandis que la barre monte, l'athlète se sert de celle-ci (en faisant un tirage vers le haut) pour passer rapidement 
            en-dessous, en ayant les jambes et les genoux légèrement fléchis (seulement 1/4 de flexion), et les bras toujours tendus. Ensuite l'athlète se redresse entièrement 
            en conservant les bras tendus et le dos fixé.")
            ->setErreur("Tirage prématuré des bras, manque d'extension, saut non vertical avec réception décalée en AV/AR et/ou trop basse")
            ->setCorrectif("Arraché force, arraché debout en suspension ou des plots, THA, THA en suspension ou des plots, utilisation de repères au sol");
            $manager->persist($mouvement2);
            $manager->flush();

            $mouvement3=new Mouvement();
            $mouvement3->setNom("arraché des plots")
                    ->setObjectif("Cet exercice permet d'insister sur la trajectoire de la barre et sur le positionnement du corps après les genoux, sur l'extension finale et 
                    le relâchement des bras. Il peut être pratiqué en position de départ barre sous ou sur les genoux.")
                    ->setIntensite(95)
                    ->setConsignes("L'athlète se place contre la barre (en général sur le haut des tibias ou le bas des cuisses) après avoir réglé les plots à la hauteur souhaitée 
                    (en général, une hauteur proche de celle des genoux). Les pieds sont orientés vers l'extérieur et d'une largeur qui représente environ la largeur du bassin. 
                    Les mains saisisent la barre pronation, pouces crochetés. Les membres supérieurs sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, 
                    la cyphose dorsale est effacée, et la lordose lombaire fixée.  
                    Le regard accrochant un point fixe devant, pour l'équilibration générale. L'athlète démarre le mouvement en effectuant une grosse poussée des jambes, 
                    le dos reste fixe, les bras sont tendus mais relâchés grâce au crochetage de la barre. La barre reste toujours proche du corps avec une vitesse contrôlée, 
                    pour anticiper le passage des genoux. Le dos se redresse quasiment à la verticale, les bras toujours tendus, l'athlète accélère la barre avec 
                    une grosse poussée des jambes (comme un saut vertical). Lorsqu'il est entièrement redressé, il réalise un haussement des 
                    épaules et monte sur ces pointes de pieds, jusqu'à ce que ces derniers décollent du sol pour s'écarter vers l'extérieur (pour le style
                    en flexion), tandis que la barre monte, l'athlète se sert de celle-ci (en faisant un tirage vers le haut) pour passer rapidement 
                    en-dessous, jambes fléchis avec les articulations des hanches sous les genoux et les bras toujours tendus. Ensuite l'athlète se redresse entièrement 
                    en conservant les bras tendus et le dos fixé.")
                    ->setErreur("Tirage prématuré des bras, manque d'extension, équilibre en réception et manque d'amplitude dans la chute")
                    ->setCorrectif("Arraché debout en suspension ou des plots, arraché force + squat d'arraché, repères au sol");
                    $manager->persist($mouvement3);
                    $manager->flush();
        
    }

}
