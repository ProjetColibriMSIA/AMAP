<?php

namespace AMAPBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class NewsAdmin extends AbstractAdmin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('id')
                ->add('name')
                ->add('description')
                ->add('repIMG')
                ->add('startDate')
                ->add('endDate')
                ->add('isDisplay')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('name')
                ->add('description', 'html')
                ->add('repIMG')
                ->add('startDate')
                ->add('endDate')
                ->add('isDisplay')
                ->add('news_amap', 'entity', array(
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
                ->add('name')
                ->add('description', 'ckeditor', array(
                    'config' => array('toolbar' => 'full'),
                ))
                ->add('repIMG')
                ->add('startDate', 'sonata_type_date_picker',array('format'=>'dd/MM/yyyy'))
                ->add('endDate', 'sonata_type_date_picker',array('format'=>'dd/MM/yyyy'))
                ->add('isDisplay', 'choice', array(
                    'required' => true,
                    'choices' => array(
                        'Visible' => true,
                        'Invisible' => false
                    ),
                    'expanded' => true,
                    'choices_as_values' => true))
                ->add('news_amap', 'sonata_type_model', array(
                    'expanded' => true,
                    'by_reference' => false,
                    'multiple' => true,
                    'class' => 'AMAPBundle:AMAP\AMAP',
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
                ->add('description')
                ->add('repIMG')
                ->add('startDate')
                ->add('endDate')
                ->add('isDisplay')
                ->add('news_amap', 'entity', array(
                    'class' => 'AMAPBundle:AMAP\AMAP',
                    'associated_property' => function ($amap) {
                        return $amap->getName();
                    }))
        ;
    }

}
