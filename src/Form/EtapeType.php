<?php

namespace App\Form;

use App\Entity\Etape;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtapeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('gesteConcerne', TextType::class)
        ->add('libelle', TextareaType::class)
        ->add('apprentissage', EntityType::class, [ 
            'class' => Apprentissage::class, 
            'choice_label' => 'titre',
            'expanded'=>true,
            'multiple'=>true ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Etape::class,
        ]);
    }
}
