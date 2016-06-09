<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AMAPBundle\Admin;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends Admin {

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     *
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('email')
                ->add('username')
                ->add('firstName')
                ->add('name')
                ->add('password')
                ->add('roles')
                ->add('groups', null, array(
                    'class' => 'AMAPBundle:Account\Group',
                    'associated_property' => function ($groups) {
                        return $groups->getName();
                    }))
                ->add('amap', null, array(
                    'class' => 'AMAPBundle:AMAP\AMAP',
                    'associated_property' => function ($amap) {
                        return $amap->getNameAMAP();
                    }))
                ->add('adress')
                ->add('locale')
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                        'delete' => array(),
                    )
                ))
        ;
    }

}
