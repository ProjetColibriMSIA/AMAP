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
                ->add('id', null, array('required' => false))
                ->add('name')
                ->add('price')
                ->add('barCode')
                ->add('weight')
                ->add('expirationDate')
                ->add('supplyDate')
                ->add('storeDate')
                ->add('description')
                ->add('repIMG')
                ->add('products', 'sonata_type_collection', array(), array(
                    'edit' => 'inline',
                    'inline' => 'table',
                    'sortable' => 'position',
                    'limit' => 10,
                    'link_parameters' => array('id' => $this->getSubject()->getId())))
                
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
        ;
    }

}
