<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AMAPBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class ProductAdmin extends Admin {

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     *
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('name')
                ->add('price')
                ->add('barCode')
                ->add('description')
                ->add('weight')
                ->add('expirationDate')
                ->add('storeDate')
                ->add('repIMG')
                ->add('products', null, array(
                    'class' => 'AMAPBundle:Basket\Product',
                    'associated_property' => function ($baskets) {
                        return $baskets->getName();
                    }))
        ;
    }

}
