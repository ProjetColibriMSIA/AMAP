<?php

namespace AMAPBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AMAPAdmin extends AbstractAdmin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('id')
                ->add('name')
                ->add('phone')
                ->add('adress')
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
                ->add('phone')
                ->add('adress')
                ->add('description')
                ->add('repIMG')
                ->add('users', 'entity', array(
                    'class' => 'AMAPBundle:Account\User',
                    'associated_property' => function ($amap) {
                        return $amap->getUsername();
                    }))
                ->add('news', 'entity', array(
                    'class' => 'AMAPBundle:Announcement\News',
                    'associated_property' => function ($amap) {
                        return $amap->getName();
                    }))
                ->add('contracts_amap', 'entity', array(
                    'class' => 'AMAPBundle:Account\Contract',
                    'associated_property' => function ($amap) {
                        return $amap->getId();
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
                ->add('phone')
                ->add('adress')
                ->add('description')
                ->add('repIMG')
                ->add('users', 'sonata_type_model', array(
                    'expanded' => true,
                    'by_reference' => false,
                    'required' => false,
                    'multiple' => true,
                    'class' => 'AMAPBundle:Account\User',
                    'property' => 'username'
                ))
                ->add('news', 'sonata_type_model', array(
                    'expanded' => true,
                    'by_reference' => false,
                    'required' => false,
                    'multiple' => true,
                    'class' => 'AMAPBundle:Announcement\News',
                    'property' => 'name'
                ))
                ->add('contracts_amap', 'sonata_type_model', array(
                    'required' => false,
                    'expanded' => true,
                    'by_reference' => false,
                    'multiple' => true
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
                ->add('phone')
                ->add('adress')
                ->add('description')
                ->add('repIMG')
        ;
    }

}
