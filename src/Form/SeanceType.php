<?php

namespace App\Form;

use App\Entity\Mouvement;
use App\Entity\Seance;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SeanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreSerie')
            ->add('nombreReps')
            ->add('intensite')
            ->add('recuperation')
            ->add('titre')
            ->add('mouvement', EntityType::class, [
                'class' => Mouvement::class,
                'choice_label' => 'nom',
                'expanded' => true,
                'multiple' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Seance::class,
        ]);
    }
}