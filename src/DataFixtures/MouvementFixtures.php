<?php

namespace App\DataFixtures;

use App\Entity\Image;
use App\Entity\Mouvement;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MouvementFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

       /*  $mouvement1=new Mouvement();
        $mouvement1->setNom("arraché")
                ->setObjectif("Amener une barre le plus lourdement chargée, du sol au-dessus de la tête, entièrement grandit
                et bras tendu, en un seul mouvement")
                ->setIntensite(100)
                ->setConsignes("L'athlète se place avec les pointes de pieds, genoux, et épaules en avant de la barre. Les pieds sont orientés vers l'extérieur 
                et d'une largeur qui représente environ la largeur du bassin. Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs 
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
                ->setCorrectif("Utilisation appropriée des mouvements semi-techniques")
                ->setImage("Arrache.jpg");
                $manager->persist($mouvement1);
    

        $mouvement2=new Mouvement();
        $mouvement2->setNom("arraché debout")
                ->setObjectif("Cet exercice est pratiqué pour renforcer le mouvement de l'arraché technique et 
                notamment pour insister sur la finition du tirage.")
                ->setIntensite(86)
                ->setConsignes("L'athlète se place avec les pointes de pieds, genoux, et épaules en avant de la barre. Les pieds sont orientés vers l'extérieur 
                et d'une largeur qui représente environ la largeur du bassin. Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs 
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
                ->setCorrectif("Arraché force, arraché debout en suspension ou des plots, THA, THA en suspension ou des plots, utilisation de repères au sol")
                ->setImage("ArrDebout.jpg");
                $manager->persist($mouvement2);

        $mouvement3=new Mouvement();
        $mouvement3->setNom("arraché des plots")
                ->setObjectif("Cet exercice permet d'insister sur la trajectoire de la barre et sur le positionnement du corps après les genoux, sur l'extension finale et 
                le relâchement des bras. Il peut être pratiqué en position de départ barre sous ou sur les genoux.")
                ->setIntensite(95)
                ->setConsignes("L'athlète se place contre la barre (en général sur le haut des tibias ou le bas des cuisses) après avoir réglé les plots à la hauteur souhaitée 
                (en général, une hauteur proche de celle des genoux). Les pieds sont orientés vers l'extérieur et d'une largeur qui représente environ la largeur du bassin. 
                Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, 
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
                ->setCorrectif("Arraché debout en suspension ou des plots, arraché force + squat d'arraché, repères au sol")
                ->setImage("ArrPlot.jpg");
                $manager->persist($mouvement3);

        $mouvement4=new Mouvement();
        $mouvement4->setNom("arraché suspension")
                ->setObjectif("Cet exercice est pratiqué pour renforcer le mouvement de l'arraché technique en insistant notamment sur la finition 
                du tirage, en respectant les appuis au sol sur l'extension finale.")
                ->setIntensite(93)
                ->setConsignes("L'athlète se  redresse avec la barre pour la placer en général sur le haut des tibias ou le bas des cuisses,
                (en général, une hauteur proche de celle des genoux). Les pieds sont orientés vers l'extérieur et d'une largeur qui représente environ la largeur du bassin. 
                Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, 
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
                ->setCorrectif("Arraché debout en suspension ou des plots, arraché force + squat d'arraché, repères au sol")
                ->setImage("ArrSusp.jpg");
                $manager->persist($mouvement4);
        
        $mouvement5=new Mouvement();
        $mouvement5->setNom("arraché puissance")
                ->setObjectif("Cet exercice est pratiqué pour renforcer le mouvement de l'arraché technique en insistant notamment sur la finition du tirage, 
                en respectant les appuis au sol sur l'extension finale.")
                ->setIntensite(93)
                ->setConsignes("L'athlète se place avec les pointes de pieds, genoux, et épaules en avant de la barre. Les pieds sont orientés vers l'extérieur 
                et d'une largeur qui représente celle des pieds en réception. Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs 
                sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, la cyphose dorsale est effacée, et la lordose lombaire fixée. 
                Les membres inférieurs sont fléchis, cuisses parallèles au sol, les tibias inclinés vers l'avant et au contact de la barre. 
                Le regard accrochant un point fixe devant, pour l'équilibration générale. L'athlète démarre le mouvement en effectuant une grosse poussée des jambes, 
                le dos reste fixe, les bras sont tendus mais relâchés grâce au crochetage de la barre. La barre reste toujours proche du corps avec une vitesse contrôlée, 
                pour anticiper le passage des genoux. Le dos se redresse quasiment à la verticale, les bras toujours tendus, l'athlète accélère la barre avec 
                une grosse poussée des jambes (comme un saut vertical). Lorsqu'il est entièrement redressé, il réalise un haussement des 
                épaules et monte sur ces pointes de pieds, mais conserve les pieds en contact avec le sol. Tandis que la barre monte, l'athlète se sert de celle-ci 
                (en faisant un tirage vers le haut) pour passer rapidement en-dessous, jambes fléchis avec les articulations des hanches sous les genoux et les bras toujours tendus. 
                Ensuite l'athlète se redresse entièrement en conservant les bras tendus et le dos fixé.")
                ->setErreur("Barre devant ou derrière entraînant un déséquilibre, manque de tirage des bras")
                ->setCorrectif("Arraché force + squat d'arraché, TBA")
                ->setImage("ArrPuis.jpg");
                $manager->persist($mouvement5);

        $mouvement6=new Mouvement();
        $mouvement6->setNom("arraché debout en suspension")
                ->setObjectif("Cet exercice est pratiqué pour renforcer le mouvement de l'arraché technique et notamment pour insister sur la finition du tirage. Nous 
                retrouvons les mêmes objectifs que pour l'arraché flexion des plots")
                ->setIntensite(82)
                ->setConsignes("L'athlète se  redresse avec la barre pour la placer en général sur le haut des tibias ou le bas des cuisses,
                (en général, une hauteur proche de celle des genoux). Les pieds sont orientés vers l'extérieur et d'une largeur qui représente environ la largeur du bassin. 
                Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, 
                la cyphose dorsale est effacée, et la lordose lombaire fixée.  
                Le regard accrochant un point fixe devant, pour l'équilibration générale. L'athlète démarre le mouvement en effectuant une grosse poussée des jambes, 
                le dos reste fixe, les bras sont tendus mais relâchés grâce au crochetage de la barre. La barre reste toujours proche du corps avec une vitesse contrôlée, 
                pour anticiper le passage des genoux. Le dos se redresse quasiment à la verticale, les bras toujours tendus, l'athlète accélère la barre avec 
                une grosse poussée des jambes (comme un saut vertical). Lorsqu'il est entièrement redressé, il réalise un haussement des 
                épaules et monte sur ces pointes de pieds, jusqu'à ce que ces derniers décollent du sol pour s'écarter vers l'extérieur (pour le style
                en flexion), tandis que la barre monte, l'athlète se sert de celle-ci (en faisant un tirage vers le haut) pour passer rapidement 
                en-dessous, en ayant les jambes et les genoux légèrement fléchis (seulement 1/4 de flexion), et les bras toujours tendus. Ensuite l'athlète se redresse entièrement 
                en conservant les bras tendus et le dos fixé.")
                ->setErreur("Tirage prématuré des bras, manque d'extension et de poussée des jambes, saut non vertical avec réception décalée en AV/AR et/ou trop basse")
                ->setCorrectif("Arraché force en suspension ou des plots, repères au sol, sauts verticaux sur box, squat")
                ->setImage("ArrDebSusp.jpg");
                $manager->persist($mouvement6);
        
        $mouvement7=new Mouvement();
        $mouvement7->setNom("arraché debout des plots")
                ->setObjectif("Cet exercice est pratiqué pour renforcer le mouvement de l'arraché technique et notamment pour insister sur la finition du tirage. Nous 
                retrouvons les mêmes objectifs que pour l'arraché flexion des plots")
                ->setIntensite(82)
                ->setConsignes("L'athlète se place contre la barre (en général sur le haut des tibias ou le bas des cuisses) après avoir réglé les plots à la hauteur souhaitée 
                (en général, une hauteur proche de celle des genoux). Les pieds sont orientés vers l'extérieur et d'une largeur qui représente environ la largeur du bassin. 
                Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, 
                la cyphose dorsale est effacée, et la lordose lombaire fixée. 
                Le regard accrochant un point fixe devant, pour l'équilibration générale. L'athlète démarre le mouvement en effectuant une grosse poussée des jambes, 
                le dos reste fixe, les bras sont tendus mais relâchés grâce au crochetage de la barre. La barre reste toujours proche du corps avec une vitesse contrôlée, 
                pour anticiper le passage des genoux. Le dos se redresse quasiment à la verticale, les bras toujours tendus, l'athlète accélère la barre avec 
                une grosse poussée des jambes (comme un saut vertical). Lorsqu'il est entièrement redressé, il réalise un haussement des 
                épaules et monte sur ces pointes de pieds, jusqu'à ce que ces derniers décollent du sol pour s'écarter vers l'extérieur (pour le style
                en flexion), tandis que la barre monte, l'athlète se sert de celle-ci (en faisant un tirage vers le haut) pour passer rapidement 
                en-dessous, en ayant les jambes et les genoux légèrement fléchis (seulement 1/4 de flexion), et les bras toujours tendus. Ensuite l'athlète se redresse entièrement 
                en conservant les bras tendus et le dos fixé.")
                ->setErreur("Tirage prématuré des bras, manque d'extension et de poussée des jambes, saut non vertical avec réception décalée en AV/AR et/ou trop basse")
                ->setCorrectif("Arraché force en suspension ou des plots, repères au sol, sauts verticaux sur box, squat")
                ->setImage("ArrDebPlot.jpg");
                $manager->persist($mouvement7);

                    
        $mouvement8=new Mouvement();
        $mouvement8->setNom("arraché puissance debout")
                ->setObjectif("Cet exercice est pratiqué pour renforcer le mouvement de l'arraché technique 
                et notamment pour insister sur la finition du tirage.")
                ->setIntensite(82)
                ->setConsignes("L'athlète se place avec les pointes de pieds, genoux, et épaules en avant de la barre. Les pieds sont orientés vers l'extérieur 
                et d'une largeur qui représente celle des pieds en réception. Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs 
                sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, la cyphose dorsale est effacée, et la lordose lombaire fixée. 
                Les membres inférieurs sont fléchis, cuisses parallèles au sol, les tibias inclinés vers l'avant et au contact de la barre. 
                Le regard accrochant un point fixe devant, pour l'équilibration générale. L'athlète démarre le mouvement en effectuant une grosse poussée des jambes, 
                le dos reste fixe, les bras sont tendus mais relâchés grâce au crochetage de la barre. La barre reste toujours proche du corps avec une vitesse contrôlée, 
                pour anticiper le passage des genoux. Le dos se redresse quasiment à la verticale, les bras toujours tendus, l'athlète accélère la barre avec 
                une grosse poussée des jambes (comme un saut vertical). Lorsqu'il est entièrement redressé, il réalise un haussement des 
                épaules et monte sur ces pointes de pieds, mais conserve les pieds en contact avec le sol. Tandis que la barre monte, l'athlète se sert de celle-ci 
                (en faisant un tirage vers le haut) pour passer rapidement en-dessous, jambes fléchis avec les articulations des hanches sous les genoux et les bras toujours tendus. 
                Ensuite l'athlète se redresse entièrement en conservant les bras tendus et le dos fixé.")
                ->setErreur("Barre devant ou derrière entraînant un déséquilibre, manque de poussée des jambes et de tirage des bras")
                ->setCorrectif("Arraché force + squat d'arraché, TBA, sauts verticaux, squat")
                ->setImage("ArrPuisDeb.jpg");
                $manager->persist($mouvement8);

        $mouvement9=new Mouvement();
        $mouvement9->setNom("arraché puissance en suspension")
                ->setObjectif("Cet exercice est pratiqué pour renforcer le mouvement de l'arraché technique 
                et notamment pour insister sur la finition du tirage.")
                ->setIntensite(93)
                ->setConsignes("L'athlète se  redresse avec la barre pour la placer en général sur le haut des tibias ou le bas des cuisses,
                (en général, une hauteur proche de celle des genoux). Les pieds sont orientés vers l'extérieur 
                et d'une largeur qui représente celle des pieds en réception. Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs 
                sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, la cyphose dorsale est effacée, et la lordose lombaire fixée. 
                Les membres inférieurs sont fléchis, cuisses parallèles au sol, les tibias inclinés vers l'avant et au contact de la barre. 
                Le regard accrochant un point fixe devant, pour l'équilibration générale. L'athlète démarre le mouvement en effectuant une grosse poussée des jambes, 
                le dos reste fixe, les bras sont tendus mais relâchés grâce au crochetage de la barre. La barre reste toujours proche du corps avec une vitesse contrôlée, 
                pour anticiper le passage des genoux. Le dos se redresse quasiment à la verticale, les bras toujours tendus, l'athlète accélère la barre avec 
                une grosse poussée des jambes (comme un saut vertical). Lorsqu'il est entièrement redressé, il réalise un haussement des 
                épaules et monte sur ces pointes de pieds, mais conserve les pieds en contact avec le sol. Tandis que la barre monte, l'athlète se sert de celle-ci 
                (en faisant un tirage vers le haut) pour passer rapidement en-dessous, jambes fléchis avec les articulations des hanches sous les genoux et les bras toujours tendus. 
                Ensuite l'athlète se redresse entièrement en conservant les bras tendus et le dos fixé.")
                ->setErreur("Barre devant ou derrière entraînant un déséquilibre, manque de poussée des jambes et/ou tirage des bras, manque d'amplitude en flexion")
                ->setCorrectif("Arraché force + squat d'arraché, TBA, sauts verticaux, chute d'arraché, squat")
                ->setImage("ArrPuisSusp.jpg");
                $manager->persist($mouvement9);

                
        $mouvement10=new Mouvement();
        $mouvement10->setNom("arraché puissance des plots")
                ->setObjectif("Cet exercice est pratiqué pour renforcer le mouvement de l'arraché technique 
                et notamment pour insister sur la finition du tirage.")
                ->setIntensite(93)
                ->setConsignes("L'athlète se place contre la barre (en général sur le haut des tibias ou le bas des cuisses) après avoir réglé les plots à la hauteur souhaitée 
                (en général, une hauteur proche de celle des genoux). Les pieds sont orientés vers l'extérieur 
                et d'une largeur qui représente celle des pieds en réception. Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs 
                sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, la cyphose dorsale est effacée, et la lordose lombaire fixée. 
                Les membres inférieurs sont fléchis, cuisses parallèles au sol, les tibias inclinés vers l'avant et au contact de la barre. 
                Le regard accrochant un point fixe devant, pour l'équilibration générale. L'athlète démarre le mouvement en effectuant une grosse poussée des jambes, 
                le dos reste fixe, les bras sont tendus mais relâchés grâce au crochetage de la barre. La barre reste toujours proche du corps avec une vitesse contrôlée, 
                pour anticiper le passage des genoux. Le dos se redresse quasiment à la verticale, les bras toujours tendus, l'athlète accélère la barre avec 
                une grosse poussée des jambes (comme un saut vertical). Lorsqu'il est entièrement redressé, il réalise un haussement des 
                épaules et monte sur ces pointes de pieds, mais conserve les pieds en contact avec le sol. Tandis que la barre monte, l'athlète se sert de celle-ci 
                (en faisant un tirage vers le haut) pour passer rapidement en-dessous, jambes fléchis avec les articulations des hanches sous les genoux et les bras toujours tendus. 
                Ensuite l'athlète se redresse entièrement en conservant les bras tendus et le dos fixé.")
                ->setErreur("Barre devant ou derrière entraînant un déséquilibre, manque de poussée des jambes et/ou tirage des bras, manque d'amplitude en flexion")
                ->setCorrectif("Arraché force + squat d'arraché, TBA, sauts verticaux, chute d'arraché, squat")
                ->setImage("ArrPuisPlot.jpg");
                $manager->persist($mouvement10);

                
        $mouvement11=new Mouvement();
        $mouvement11->setNom("arraché puissance debout des plots")
                ->setObjectif("Cet exercice est pratiqué pour renforcer le mouvement de l'arraché technique 
                et notamment pour insister sur la finition du tirage.")
                ->setIntensite(82)
                ->setConsignes("L'athlète se place contre la barre (en général sur le haut des tibias ou le bas des cuisses) après avoir réglé les plots à la hauteur souhaitée 
                (en général, une hauteur proche de celle des genoux). Les pieds sont orientés vers l'extérieur 
                et d'une largeur qui représente celle des pieds en réception. Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs 
                sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, la cyphose dorsale est effacée, et la lordose lombaire fixée. 
                Les membres inférieurs sont fléchis, cuisses parallèles au sol, les tibias inclinés vers l'avant et au contact de la barre. 
                Le regard accrochant un point fixe devant, pour l'équilibration générale. L'athlète démarre le mouvement en effectuant une grosse poussée des jambes, 
                le dos reste fixe, les bras sont tendus mais relâchés grâce au crochetage de la barre. La barre reste toujours proche du corps avec une vitesse contrôlée, 
                pour anticiper le passage des genoux. Le dos se redresse quasiment à la verticale, les bras toujours tendus, l'athlète accélère la barre avec 
                une grosse poussée des jambes (comme un saut vertical). Lorsqu'il est entièrement redressé, il réalise un haussement des 
                épaules et monte sur ces pointes de pieds, mais conserve les pieds en contact avec le sol. Tandis que la barre monte, l'athlète se sert de celle-ci 
                (en faisant un tirage vers le haut) pour passer rapidement en-dessous, en ayant les jambes et les genoux légèrement fléchis (seulement 1/4 de flexion) 
                avec les articulations des hanches sous les genoux et les bras toujours tendus. Ensuite l'athlète se redresse entièrement en conservant les bras tendus et le dos fixé.")
                ->setErreur("Barre devant ou derrière entraînant un déséquilibre, manque de poussée des jambes et/ou tirage des bras")
                ->setCorrectif("Arraché force des plots + squat d'arraché, TBA, sauts verticaux, squat")
                ->setImage("ArrPuisDebPlot.jpg");
                $manager->persist($mouvement11);

                
        $mouvement12=new Mouvement();
        $mouvement12->setNom("arraché puissance debout en suspension")
                ->setObjectif("Cet exercice est pratiqué pour renforcer le mouvement de l'arraché technique 
                et notamment pour insister sur la finition du tirage.")
                ->setIntensite(82)
                ->setConsignes("L'athlète se  redresse avec la barre pour la placer en général sur le haut des tibias ou le bas des cuisses,
                (en général, une hauteur proche de celle des genoux). Les pieds sont orientés vers l'extérieur 
                et d'une largeur qui représente celle des pieds en réception. Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs 
                sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, la cyphose dorsale est effacée, et la lordose lombaire fixée. 
                Les membres inférieurs sont fléchis, cuisses parallèles au sol, les tibias inclinés vers l'avant et au contact de la barre. 
                Le regard accrochant un point fixe devant, pour l'équilibration générale. L'athlète démarre le mouvement en effectuant une grosse poussée des jambes, 
                le dos reste fixe, les bras sont tendus mais relâchés grâce au crochetage de la barre. La barre reste toujours proche du corps avec une vitesse contrôlée, 
                pour anticiper le passage des genoux. Le dos se redresse quasiment à la verticale, les bras toujours tendus, l'athlète accélère la barre avec 
                une grosse poussée des jambes (comme un saut vertical). Lorsqu'il est entièrement redressé, il réalise un haussement des 
                épaules et monte sur ces pointes de pieds, mais conserve les pieds en contact avec le sol. Tandis que la barre monte, l'athlète se sert de celle-ci 
                (en faisant un tirage vers le haut) pour passer rapidement en-dessous, en ayant les jambes et les genoux légèrement fléchis (seulement 1/4 de flexion) 
                avec les articulations des hanches sous les genoux et les bras toujours tendus. Ensuite l'athlète se redresse entièrement en conservant les bras tendus et le dos fixé.")
                ->setErreur("Barre devant ou derrière entraînant un déséquilibre, manque de poussée des jambes et/ou tirage des bras")
                ->setCorrectif("Arraché force des plots + squat d'arraché, TBA, sauts verticaux, squat")
                ->setImage("ArrPuisDebSusp.jpg");
                $manager->persist($mouvement12);

                
        $mouvement13=new Mouvement();
        $mouvement13->setNom("arraché force")
                ->setObjectif("C’est un mouvement qui permet notamment de travailler la trajectoire de barre 
                et la force de traction des bras en insistant sur la fin du tirage.")
                ->setIntensite(64)
                ->setConsignes("L'athlète se place avec les pointes de pieds, genoux, et épaules en avant de la barre. Les pieds sont orientés vers l'extérieur 
                et d'une largeur qui représente celle du bassin (voir celle des pieds en réception). Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs 
                sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, la cyphose dorsale est effacée, et la lordose lombaire fixée. 
                Les membres inférieurs sont fléchis, cuisses parallèles au sol, les tibias inclinés vers l'avant et au contact de la barre. 
                Le regard accrochant un point fixe devant, pour l'équilibration générale. L'athlète démarre le mouvement en effectuant une grosse poussée des jambes, 
                le dos reste fixe, les bras sont tendus mais relâchés grâce au crochetage de la barre. La barre reste toujours proche du corps avec une vitesse contrôlée, 
                pour anticiper le passage des genoux. Le dos se redresse quasiment à la verticale, les bras toujours tendus, l'athlète accélère la barre avec 
                une grosse poussée des jambes (comme un saut vertical). Lorsqu'il est entièrement redressé, il réalise un haussement des 
                épaules et monte sur ces pointes de pieds, mais conserve les pieds en contact avec le sol. Tandis que la barre monte, l'athlète continu d'amener la barre
                vers le haut (les poignets \"cassés\" pour conserver la barre le plus proche possible du corps) en réalisant un tirage de la barre, le corps entièrement
                grandi.")
                ->setErreur("Fessiers trop haut entraînant une mauvaise extension et une barre éloignée du corps")
                ->setCorrectif("Arraché force suspension, TBA, mouvements au ralenti pour le ressenti")
                ->setImage("ArrForce.jpg");
                $manager->persist($mouvement13);

                
        $mouvement14=new Mouvement();
        $mouvement14->setNom("Arraché force en suspension")
                ->setObjectif("C’est un mouvement qui permet notamment de travailler la trajectoire de barre 
                et la force de traction des bras en insistant sur la fin du tirage.")
                ->setIntensite(59)
                ->setConsignes("L'athlète se  redresse avec la barre pour la placer en général sur le haut des tibias ou le bas des cuisses,
                (en général, une hauteur proche de celle des genoux). Les pieds sont orientés vers l'extérieur 
                et d'une largeur qui représente celle du bassin (voir celle des pieds en réception). Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs 
                sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, la cyphose dorsale est effacée, et la lordose lombaire fixée. 
                Les membres inférieurs sont fléchis, cuisses parallèles au sol, les tibias inclinés vers l'avant et au contact de la barre. 
                Le regard accrochant un point fixe devant, pour l'équilibration générale. L'athlète démarre le mouvement en effectuant une grosse poussée des jambes, 
                le dos reste fixe, les bras sont tendus mais relâchés grâce au crochetage de la barre. La barre reste toujours proche du corps avec une vitesse contrôlée, 
                pour anticiper le passage des genoux. Le dos se redresse quasiment à la verticale, les bras toujours tendus, l'athlète accélère la barre avec 
                une grosse poussée des jambes (comme un saut vertical). Lorsqu'il est entièrement redressé, il réalise un haussement des 
                épaules et monte sur ces pointes de pieds, mais conserve les pieds en contact avec le sol. Tandis que la barre monte, l'athlète continu d'amener la barre
                vers le haut (les poignets \"cassés\" pour conserver la barre le plus proche possible du corps) en réalisant un tirage de la barre, le corps entièrement
                grandi.")
                ->setErreur("Fessiers trop haut entraînant une mauvaise extension et une barre éloignée du corps")
                ->setCorrectif("Arraché force suspension, TBA, mouvements au ralenti pour le ressenti")
                ->setImage("ArrForceSusp.jpg");
                $manager->persist($mouvement14);

                
        $mouvement15=new Mouvement();
        $mouvement15->setNom("Arraché force des plots")
                ->setObjectif("C’est un mouvement qui permet notamment de travailler la trajectoire de barre 
                et la force de traction des bras en insistant sur la fin du tirage.")
                ->setIntensite(59)
                ->setConsignes("L'athlète se place contre la barre (en général sur le haut des tibias ou le bas des cuisses) après avoir réglé les plots à la hauteur souhaitée 
                (en général, une hauteur proche de celle des genoux). Les pieds sont orientés vers l'extérieur 
                et d'une largeur qui représente celle du bassin (voir celle des pieds en réception). Les mains saisisent la barre en pronation, pouces crochetés. Les membres supérieurs 
                sont tendus mais relâchés (grâce au crochetage spécifique). Dos incliné vers l'avant, la cyphose dorsale est effacée, et la lordose lombaire fixée. 
                Les membres inférieurs sont fléchis, cuisses parallèles au sol, les tibias inclinés vers l'avant et au contact de la barre. 
                Le regard accrochant un point fixe devant, pour l'équilibration générale. L'athlète démarre le mouvement en effectuant une grosse poussée des jambes, 
                le dos reste fixe, les bras sont tendus mais relâchés grâce au crochetage de la barre. La barre reste toujours proche du corps avec une vitesse contrôlée, 
                pour anticiper le passage des genoux. Le dos se redresse quasiment à la verticale, les bras toujours tendus, l'athlète accélère la barre avec 
                une grosse poussée des jambes (comme un saut vertical). Lorsqu'il est entièrement redressé, il réalise un haussement des 
                épaules et monte sur ces pointes de pieds, mais conserve les pieds en contact avec le sol. Tandis que la barre monte, l'athlète continu d'amener la barre
                vers le haut (les poignets \"cassés\" pour conserver la barre le plus proche possible du corps) en réalisant un tirage de la barre, le corps entièrement
                grandi.")
                ->setErreur("Fessiers trop haut entraînant une mauvaise extension et une barre éloignée du corps")
                ->setCorrectif("Arraché force suspension, TBA, mouvements au ralenti pour le ressenti")
                ->setImage("ArrForcePlot.jpg");
                $manager->persist($mouvement15);

                $manager->flush();
 */
    }

}
