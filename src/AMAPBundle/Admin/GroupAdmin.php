<?php

namespace AMAPBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class GroupAdmin extends AbstractAdmin {

    private $roles;

    public function __construct($code, $class, $baseControllerName) {
        parent::__construct($code, $class, $baseControllerName);
        $this->roles = new Roles();
    }

    public function getNewInstance() {
        $class = $this->getClass();
        return new $class('', array());
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('id')
                ->add('name')
                ->add('roles')

        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $container = $this->getConfigurationPool()->getContainer();
        $roles = $container->getParameter('security.role_hierarchy.roles');

        $rolesChoices = $this->roles->flattenRoles($roles);
        $listMapper
                ->add('name')
                ->add('roles', 'choice', array(
                    'choices' => $rolesChoices,
                    'multiple' => true
                ))
                ->add('users', 'entity', array(
                    'class' => 'AMAPBundle:Account\User',
                    'associated_property' => function ($amap) {
                        return $amap->getUsername();
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
        ;
// Name field will be added only when create an item
        if ($this->isCurrentRoute('create')) {
            $container = $this->getConfigurationPool()->getContainer();
            $roles = $container->getParameter('security.role_hierarchy.roles');

            $rolesChoices = $this->roles->flattenRoles($roles);
            $formMapper
                    ->add('roles', 'choice', array(
                        'choices' => $rolesChoices,
                        'multiple' => true))
                    ->add('users', 'sonata_type_model', array(
                        'required' => false,
                        'multiple' => true,
                        'by_reference' => false,
                        'class' => 'AMAPBundle:Account\User',
                        'property' => 'username',
            ));
        }

// The foo field will added when current action is related acme.demo.admin.code Admin's edit form
        if ($this->isCurrentRoute('edit')) {
            if (!empty(array_filter($this->getRoot()->getSubject()->getRoles())) && count($this->getRoot()->getSubject()->getRoles()) == 1) {
                $formMapper
                        ->add('roles', 'text', array(
                            'property_path' => 'roles[0]',
                ));
            } else {
                $formMapper
                        ->add('roles', 'choice', array(
                            'choices' => $rolesChoices,
                            'multiple' => false
                ));
            }
            $formMapper->add('users', 'sonata_type_model', array(
                'expanded' => true,
                'by_reference' => false,
                'required' => false,
                'multiple' => true,
                'class' => 'AMAPBundle:Account\User',
                'property' => 'username'
            ))
            ;
        }
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('id')
                ->add('name')
                ->add('roles')
        ;
    }

}
