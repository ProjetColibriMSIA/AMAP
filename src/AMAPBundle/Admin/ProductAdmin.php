<?php

namespace AMAPBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ProductAdmin extends AbstractAdmin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('id')
                ->add('name')
                ->add('price')
                ->add('weight')
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
                ->add('weight')
                ->add('description','html')
                ->add('repIMG')
                ->add('baskets', 'entity', array(
                    'class' => 'AMAPBundle:Basket\Basket',
                    'associated_property' => function ($amap) {
                        return $amap->getName();
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
                ->add('name')
                ->add('price')
                ->add('weight')
                ->add('description', 'ckeditor', array(
                    'config' => array('toolbar' => 'full'),
                ))
                ->add('repIMG')
                ->add('baskets', 'sonata_type_model', array(
                    'expanded' => true,
                    'by_reference' => false,
                    'required' => false,
                    'multiple' => true,
                    'class' => 'AMAPBundle:Basket\Basket',
                    'property' => 'name'
                ))
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
                ->add('weight')
                ->add('description')
                ->add('repIMG')
                ->add('baskets', 'sonata_type_model', array(
                    'expanded' => true,
                    'by_reference' => false,
                    'required' => false,
                    'multiple' => true,
                    'class' => 'AMAPBundle:Basket\Basket',
                    'property' => 'name'
                ))
        ;
    }

}
