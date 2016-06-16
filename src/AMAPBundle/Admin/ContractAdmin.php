<?php

namespace AMAPBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ContractAdmin extends AbstractAdmin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('id')
                ->add('rules')
                ->add('description')
                ->add('signDate')
                ->add('expirationDate')
                ->add('repPDF')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('id')
                ->add('rules')
                ->add('description')
                ->add('signDate')
                ->add('expirationDate')
                ->add('repPDF')
                ->add('users', 'entity', array(
                    'class' => 'AMAPBundle:Account\User',
                    'associated_property' => function ($amap) {
                        return $amap->getUsername();
                    }))
                ->add('amap', 'entity', array(
                    'class' => 'AMAPBundle:AMAP\AMAP',
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
                ->add('rules')
                ->add('description')
                ->add('signDate')
                ->add('expirationDate')
                ->add('repPDF');
        if ($this->isCurrentRoute('create')) {
            $formMapper
                    ->add('users', 'sonata_type_collection', array(
                        'by_reference' => false,
                    ))
                    ->add('amap', 'sonata_type_model_list', array(
                        'by_reference' => false,
            ));
        } elseif ($this->isCurrentRoute('edit')) {
            $formMapper
                    /* ->add('users', 'sonata_type_collection', array(
                      'by_reference' => false), array(
                      'edit' => 'inline',
                      'inline' => 'table'
                      ))
                     */
                    /*
                      ->add('users', null, array('by_reference' => false), array(
                      'edit' => 'inline',
                      'inline' => 'table',
                      'sortable' => 'position'
                      ))
                     * */
                    ->add('users', 'sonata_type_model', array(
                        'by_reference' => false, 'expanded' => true, 'multiple' => true
                    ))


                    /* ->add('users', null, array('property_path' => 'username'), array(
                      'edit' => 'inline',
                      'inline' => 'table',
                      'sortable' => 'position',
                      'limit' => 2
                      ))
                     */
                    ->add('amap', 'sonata_type_model', array(
                        'by_reference' => false,
                        'property' => 'name'
            ));
        }
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('id')
                ->add('rules')
                ->add('description')
                ->add('signDate')
                ->add('expirationDate')
                ->add('repPDF')
        ;
    }

}
