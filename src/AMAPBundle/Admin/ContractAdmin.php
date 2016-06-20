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
                ->add('adressDelivery')
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
                ->addIdentifier('id')
                ->add('rules')
                ->add('description', 'html')
                ->add('adressDelivery')
                ->add('signDate')
                ->add('expirationDate')
                ->add('repPDF')
                ->add('users', 'entity', array(
                    'class' => 'AMAPBundle:Account\User',
                    'associated_property' => function ($amap) {
                        return $amap->getUsername();
                    }))
                ->add('amap', 'contracts_amap', array(
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
                ->add('description', 'ckeditor', array(
                    'config' => array('toolbar' => 'full'),
                ))
                ->add('adressDelivery')
                ->add('signDate', 'sonata_type_date_picker',array('format'=>'dd/MM/yyyy'))
                ->add('expirationDate', 'sonata_type_date_picker',array('format'=>'dd/MM/yyyy'))
                ->add('repPDF');
        if ($this->isCurrentRoute('create')) {
            $formMapper
                    ->add('users', 'sonata_type_model', array(
                        'expanded' => true,
                        'by_reference' => false,
                        'multiple' => true
            ));
        } elseif ($this->isCurrentRoute('edit')) {
            $formMapper
                    ->add('users', 'sonata_type_model', array(
                        'expanded' => true,
                        'by_reference' => false,
                        'multiple' => true
            ));
        }
        $formMapper
                ->add('amap', 'sonata_type_model_list', array(
                    'by_reference' => false,
                    'required' => true,
                    'btn_delete'    => false,
                    'btn_add'    => false, ), array(
                    'placeholder' => 'Aucune AMAP séléctionné',
                    'associated_property' => function ($amap) {
                        return $amap->getName();
                    }
                ));
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('id')
                ->add('rules')
                ->add('description')
                ->add('adressDelivery')
                ->add('signDate')
                ->add('expirationDate')
                ->add('repPDF')
                ->add('users', 'entity', array(
                    'class' => 'AMAPBundle:Account\User',
                    'associated_property' => function ($amap) {
                        return $amap->getUsername();
                    }))
                ->add('amap', 'contracts_amap', array(
                    'class' => 'AMAPBundle:AMAP\AMAP',
                    'associated_property' => function ($amap) {
                        return $amap->getName();
                    }))
        ;
    }

}
