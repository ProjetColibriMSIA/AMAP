<?php

namespace AMAPBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class BasketAdmin extends AbstractAdmin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('id')
                ->add('name')
                ->add('price')
                ->add('barCode')
                ->add('weight')
                ->add('expirationDate')
                ->add('supplyDate')
                ->add('storeDate')
                ->add('description')
                ->add('repIMG')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('name')
                ->add('price')
                ->add('barCode')
                ->add('weight')
                ->add('expirationDate')
                ->add('supplyDate')
                ->add('storeDate')
                ->add('description')
                ->add('repIMG')
                ->add('products', null, array(
                    'class' => 'AMAPBundle:Basket\Product',
                    'associated_property' => function ($products) {
                        return $products->getName();
                    }))
                ->add('ownerConsumer', null, array(
                    'class' => 'AMAPBundle:Basket\Product',
                    'associated_property' => function ($products) {
                        return $products->getUsername();
                    }))
                ->add('productBy', null, array(
                    'class' => 'AMAPBundle:Basket\Product',
                    'associated_property' => function ($products) {
                        return $products->getUsername();
                    }))
                ->add('inventory', 'sonata_type_model_list', array(
                    'by_reference' => false,
                    'required' => false), array(
                    'placeholder' => 'No basket selected'
                ))
                ->add('_action', null, array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                        'delete' => array(),
                    )
                ))

        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('name')
                ->add('price')
                ->add('barCode')
                ->add('weight')
                ->add('expirationDate')
                ->add('supplyDate')
                ->add('storeDate')
                ->add('description')
                ->add('repIMG')
                ->add('products', 'sonata_type_model', array(
                    'expanded' => true,
                    'by_reference' => false,
                    'multiple' => true,
                    'class' => 'AMAPBundle:Basket\Product',
                    'property' => 'name'
                ))
                ->add('ownerConsumer', 'sonata_type_model', array(
                    'expanded' => true,
                    'by_reference' => false,
                    'required' => false,
                    'multiple' => true,
                    'class' => 'AMAPBundle:Account\Group',
                    'property' => 'name'
                ))
                ->add('productBy', 'sonata_type_model', array(
                    'expanded' => true,
                    'by_reference' => false,
                    'required' => false,
                    'multiple' => true,
                    'class' => 'AMAPBundle:Account\Group',
                    'property' => 'name'
                ))
                /* TODO
                ->add('inventory', 'sonata_type_model_list', array(
                ), array(
                    'placeholder' => 'No author selected'
                ))
                */
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('id')
                ->add('name')
                ->add('price')
                ->add('barCode')
                ->add('weight')
                ->add('expirationDate')
                ->add('supplyDate')
                ->add('storeDate')
                ->add('description')
                ->add('repIMG')
				->add('products', null, array(
                    'class' => 'AMAPBundle:Basket\Product',
                    'associated_property' => function ($products) {
                        return $products->getName();
                    }))
                ->add('ownerConsumer', null, array(
                    'class' => 'AMAPBundle:Basket\Product',
                    'associated_property' => function ($products) {
                        return $products->getUsername();
                    }))
                ->add('productBy', null, array(
                    'class' => 'AMAPBundle:Basket\Product',
                    'associated_property' => function ($products) {
                        return $products->getUsername();
                    }))
                ->add('inventory', 'sonata_type_model_list', array(
                    'by_reference' => false,
                    'required' => false), array(
                    'placeholder' => 'No basket selected'
                ))
        ;
    }

}
