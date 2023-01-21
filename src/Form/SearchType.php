<?php

namespace App\Form;

use App\Classe\Search;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('string', TextType::class, [
            'label' => 'Recherche',
            'required' => false,
            'attr' => [
                'placeholder' => 'Votre recherche...'
            ]
        ])
        ->add('categories', EntityType::class,[
            'label' => false,
            'required' => false,
            'class' => Category::class,
            'multiple' => true,
            'expanded' => true,
        ])

        ->add('submit', SubmitType::class,[
            'label' => 'Filtrer',
            'attr' =>[
                'class' => 'btn btn-block btn btn-info'
            ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Search::class,
            'method' => 'GET',
            'csrf_protection' => false,
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}