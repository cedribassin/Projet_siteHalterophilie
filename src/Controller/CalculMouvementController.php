<?php

namespace App\Controller;

use App\Repository\MouvementRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CalculMouvementController extends AbstractController
{
    /**
     * @Route("/client/calcul", name="calcul_mouvement")
     */
    public function calculCharge(Request $request)
    {
        $chargeArrDeb = 0;
        $chargeArrSuspPlot = 0;
        $chargeArrPuis = 0;
        $chargeArrDebSuspPlot = 0;
        $chargeArrPuisDeb = 0;
        $chargeArrPuisSuspPlot = 0;
        $chargeArrPuisDebSuspPlot = 0;
        $chargeArrForce = 0;
        $chargeArrForceSuspPlot = 0;
        $chargeTHA = 0;
        $chargeTHASuspPlot = 0;
        $chargeTLA = 0;
        $chargeTLASuspPlot = 0;
        $chargeTBA = 0;
        $chargeChuteArr = 0;
        $chargePassArr = 0;
        $chargeArrPriseEp = 0;
        $chargeArrDebPriseEp = 0;
        $chargesArr =[];

        $chargeEpDeb = 0;
        $chargeEpSuspPlot = 0;
        $chargeEpPuis = 0;
        $chargeEpDebSuspPlot = 0;
        $chargeEpPuisDeb = 0;
        $chargeEpPuisSuspPlot = 0;
        $chargeEpPuisDebSuspPlot = 0;
        $chargeEpForce = 0;
        $chargeEpForceSuspPlot = 0;
        $chargeTLE = 0;
        $chargeTLESuspPlot = 0;
        $chargeTBE = 0;
        $chargePassEp = 0;
        $chargesEp =[];

        $chargeJetDeb = 0;
        $chargeJetPuis = 0;
        $chargeJetForce = 0;
        $chargeJetNuq = 0;
        $chargePassJet = 0;
        $chargeChuteJetNuq = 0;
        $chargesJet =[];


        $form = $this->createFormBuilder()
        ->add('arrache', IntegerType::class, ['label'=>'Arraché'], [
            'required' => false,
        ])
        ->add('epaule', IntegerType::class, ['label'=>'Epaulé'], [
            'required' => false,
        ])
        ->add('jete', IntegerType::class, ['label'=>'Jeté'], [
            'required' => false,
        ])
        ->getForm();

     $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();

        //Calcul des charges des semi-techniques de l'arraché
        $chargeArrDeb = ['nom'=>'Arraché debout','charge'=> $data['arrache']*0.86];
        $chargeArrSuspPlot = ['nom'=>'Arraché en suspension/plots','charge'=> $data['arrache']*0.95];
        $chargeArrPuis = ['nom'=>'Arraché en puissance','charge'=> $data['arrache']*0.93]; 
        $chargeArrDebSuspPlot = ['nom'=>'Arraché debout en suspension/plots','charge'=> $data['arrache']*0.82]; 
        $chargeArrPuisDeb = ['nom'=>'Arraché puissance debout','charge'=> $data['arrache']*0.82]; 
        $chargeArrPuisSuspPlot = ['nom'=>'Arraché puissance en suspension/plots','charge'=> $data['arrache']*0.93]; 
        $chargeArrPuisDebSuspPlot = ['nom'=>'Arraché puissance debout en suspension/plots','charge'=> $data['arrache']*0.82]; 
        $chargeArrForce = ['nom'=>'Arraché force','charge'=> $data['arrache']*0.64];
        $chargeArrForceSuspPlot = ['nom'=>'Arraché force en suspension/plots','charge'=> $data['arrache']*0.59];
        $chargeTHA = ['nom'=>"Tirage haut d'arraché",'charge'=> $data['arrache']*1.00];
        $chargeTHASuspPlot = ['nom'=>"Tirage haut d'arraché en supension/plots",'charge'=> $data['arrache']*0.90];
        $chargeTLA = ['nom'=>"Tirage lourd d'arraché",'charge'=> $data['arrache']*1.20];
        $chargeTLASuspPlot = ['nom'=>"Tirage lourd d'arraché en suspension/plots",'charge'=> $data['arrache']*1.25];
        $chargeTBA = ['nom'=>"Tirage bras d'arraché",'charge'=> $data['arrache']*0.45];
        $chargeChuteArr = ['nom'=>"Chute d'arraché nuque",'charge'=> $data['arrache']*1.00];
        $chargePassArr = ['nom'=>"Passage d'arraché",'charge'=> $data['arrache']*0.57];
        $chargeArrPriseEp = ['nom'=>"Arraché prise d'épaulé",'charge'=> $data['arrache']*0.79];
        $chargeArrDebPriseEp = ['nom'=>"Arraché debout prise d'épaulé",'charge'=> $data['arrache']*0.68];


        $chargesArr =[$chargeArrDeb, $chargeArrSuspPlot, $chargeArrPuis, $chargeArrDebSuspPlot,
        $chargeArrPuisDeb, $chargeArrPuisSuspPlot, $chargeArrPuisDebSuspPlot, $chargeArrForce, 
        $chargeArrForceSuspPlot, $chargeTHA, $chargeTHASuspPlot, $chargeTLA, $chargeTLASuspPlot,
        $chargeTBA, $chargeChuteArr, $chargePassArr, $chargeArrPriseEp, $chargeArrDebPriseEp];

        //Calcul des charges des semi-techniques de l'epaulé
        $chargeEpDeb = ['nom'=>'Epaulé debout','charge'=> $data['epaule']*0.84];
        $chargeEpSuspPlot = ['nom'=>'Epaulé en suspension/plots','charge'=> $data['epaule']*0.96];
        $chargeEpPuis = ['nom'=>'Epaulé en puissance','charge'=> $data['epaule']*0.93]; 
        $chargeEpDebSuspPlot = ['nom'=>'Epaulé debout en suspension/plots','charge'=> $data['epaule']*0.80];
        $chargeEpPuisDeb = ['nom'=>'Epaulé en puissance debout','charge'=> $data['epaule']*0.73]; 
        $chargeEpPuisSuspPlot = ['nom'=>'Epaulé puissance en suspension/plots','charge'=> $data['epaule']*0.93];
        $chargeEpPuisDebSuspPlot = ['nom'=>'Epaulé puissance debout en suspension/plots','charge'=> $data['epaule']*0.73];
        $chargeEpForce = ['nom'=>'Epaulé force','charge'=> $data['epaule']*0.62];
        $chargeEpForceSuspPlot = ['nom'=>'Epaulé force en suspension/plots','charge'=> $data['epaule']*0.57];
        $chargeTLE = ['nom'=>"Tirage lourd d'épaulé",'charge'=> $data['epaule']*1.28];
        $chargeTLESuspPlot = ['nom'=>"Tirage lourd d'épaulé en suspension/plots",'charge'=> $data['epaule']*1.39];
        $chargeTBE = ['nom'=>"Tirage de bras d'épaulé",'charge'=> $data['epaule']*0.44];
        $chargePassEp = ['nom'=>"Passage d'épaulé",'charge'=> $data['epaule']*0.62];

        $chargesEp =[$chargeEpDeb, $chargeEpSuspPlot, $chargeEpPuis, $chargeEpDebSuspPlot, $chargeEpPuisDeb, 
        $chargeEpForce, $chargeEpForceSuspPlot, $chargeTLE, $chargeTLESuspPlot, $chargeTBE, $chargePassEp];

        //Calcul des charges des semi-techniques du jeté
        $chargeJetDeb = ['nom'=>'Jeté debout','charge'=> $data['jete']*0.93];
        $chargeJetPuis = ['nom'=>'Jeté puissance','charge'=> $data['jete']*0.89];
        $chargeJetForce = ['nom'=>'Jeté force','charge'=> $data['jete']*0.71]; 
        $chargeJetNuq = ['nom'=>'Jeté nuque en fente/debout','charge'=> $data['jete']*1.07]; 
        $chargePassJet = ['nom'=>'Passage de jeté','charge'=> $data['jete']*0.44]; 
        $chargeChuteJetNuq = ['nom'=>'Chute de jeté nuque','charge'=> $data['jete']*0.44]; 

        $chargesJet =[$chargeJetDeb, $chargeJetPuis, $chargeJetForce, $chargeJetNuq, $chargePassJet, $chargeChuteJetNuq];
        


    }
        return $this->render('calcul_mouvement/calculMouvement.html.twig', [
            'form'=>$form->createView(),
            'chargesArr'=>$chargesArr,
            'chargesEp'=>$chargesEp,
            'chargesJet'=>$chargesJet
        ]);
    }
}
