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

class PostAdmin extends Admin {

    // Fields to be shown on create/edit forms

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('title', 'text', array(
                    'label' => 'Post Title'
                ))
                ->add('author', 'entity', array(
                    'class' => 'AMAPBundle\Entity\Account\User'
                ))

                // if no type is specified, SonataAdminBundle tries to guess it
                ->add('body');
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('title')
                ->add('author')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('title')
                ->add('slug')
                ->add('author')
        ;
    }

    // Fields to be shown on show action
    protected function configureShowField(ShowMapper $showMapper) {
        $showMapper
                ->add('title')
                ->add('slug')
                ->add('author')
        ;
    }

}
