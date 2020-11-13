<?php

namespace App\Form;

use App\Entity\Mouvement;
use App\Entity\TypeMouvement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MouvementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('objectif')
            ->add('intensite')
            ->add('consignes')
            ->add('erreur')
            ->add('correctif')
            ->add('imageFile', FileType::class, ['required'=>false])
            ->add('typeMouvements', EntityType::class, [ 
                'class' => TypeMouvement::class, 
                'choice_label' => 'libelle',
                'expanded'=>true,
                'multiple'=>true ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mouvement::class,
        ]);
    }
}
