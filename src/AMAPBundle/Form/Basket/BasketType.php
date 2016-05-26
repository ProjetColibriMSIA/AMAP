<?php

namespace AMAPBundle\Form\Basket;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BasketType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('price')
            ->add('barCode')
            ->add('weight')
            ->add('expirationDate', 'date')
            ->add('supplyDate', 'date')
            ->add('storeDate', 'date')
            ->add('description')
            ->add('products')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AMAPBundle\Entity\Basket\Basket'
        ));
    }
}
