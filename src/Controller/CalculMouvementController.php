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
        $chargeArrPlot = 0;
        $chargeArrSusp = 0;
        $chargeArrPuis = 0;
        $chargesArr =[];

        $chargeEpDeb = 0;
        $chargeEpPlot = 0;
        $chargeEpSusp = 0;
        $chargeEpPuis = 0;
        $chargesEp =[];


        $form = $this->createFormBuilder()
        ->add('arrache', IntegerType::class)
        ->add('epaule', IntegerType::class)
        ->getForm();

     $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();

        //Calcul des charges des semi-techniques de l'arraché
        $chargeArrDeb = ['nom'=>'Arraché debout','charge'=> $data['arrache']*0.86];
        $chargeArrPlot = ['nom'=>'Arraché des plots','charge'=> $data['arrache']*0.95];
        $chargeArrSusp = ['nom'=>'Arraché en suspension','charge'=> $data['arrache']*0.95]; 
        $chargeArrPuis = ['nom'=>'Arraché en puissance','charge'=> $data['arrache']*0.93]; 

        $chargesArr =[$chargeArrDeb, $chargeArrPlot, $chargeArrSusp, $chargeArrPuis];

        //Calcul des charges des semi-techniques de l'epaulé
        $chargeEpDeb = ['nom'=>'Epaulé debout','charge'=> $data['epaule']*0.84];
        $chargeEpPlot = ['nom'=>'Epaulé des plots','charge'=> $data['epaule']*0.96];
        $chargeEpSusp = ['nom'=>'Epaulé en suspension','charge'=> $data['epaule']*0.96]; 
        $chargeEpPuis = ['nom'=>'Epaulé en puissance','charge'=> $data['epaule']*0.93]; 

        $chargesEp =[$chargeEpDeb, $chargeEpPlot, $chargeEpSusp, $chargeEpPuis];


    }
        return $this->render('calcul_mouvement/calculMouvement.html.twig', [
            'form'=>$form->createView(),
            'chargesArr'=>$chargesArr,
            'chargesEp'=>$chargesEp
        ]);
    }
}
