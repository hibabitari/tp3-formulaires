<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantity', NumberType::class, [
                'label' => 'Quantity',
                'attr' => ['class' => 'form-control', 'style' => 'max-width: 100px;'],
                'data' => 1
            ])
            ->add('color', ChoiceType::class, [
                'label' => 'Select Color',
                'choices' => [
                    'Matte Black' => 'black',
                    'Pearl White' => 'white',
                    'Silver' => 'silver'
                ],
                'attr' => ['class' => 'form-select', 'style' => 'max-width: 200px;']
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Add to Cart',
                'attr' => ['class' => 'btn btn-primary btn-lg']
            ]);
    }
}