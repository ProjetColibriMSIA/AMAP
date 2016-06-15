<?php

namespace AMAPBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class UserAdmin extends AbstractAdmin {

    private $roles;

    public function __construct($code, $class, $baseControllerName) {
        parent::__construct($code, $class, $baseControllerName);
        $this->roles = new Roles();
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('username')
                ->add('usernameCanonical')
                ->add('email')
                ->add('emailCanonical')
                ->add('enabled')
                ->add('salt')
                ->add('password')
                ->add('lastLogin')
                ->add('locked')
                ->add('expired')
                ->add('expiresAt')
                ->add('confirmationToken')
                ->add('passwordRequestedAt')
                ->add('roles')
                ->add('credentialsExpired')
                ->add('credentialsExpireAt', 'doctrine_orm_datetime', array('input_type' => 'datetime'))
                ->add('id')
                ->add('name')
                ->add('firstName')
                ->add('adress')
                ->add('locale')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('username')
                ->add('usernameCanonical')
                ->add('email')
                ->add('emailCanonical')
                ->add('name')
                ->add('firstName')
                ->add('adress')
                ->add('locale')
                ->add('groups', 'entity', array(
                    'class' => 'AMAPBundle:Account\Group',
                    'associated_property' => function ($groups) {
                        return $groups->getName();
                    }))
                ->add('amap', 'entity', array(
                    'class' => 'AMAPBundle:AMAP\AMAP',
                    'associated_property' => function ($amap) {
                        return $amap->getName();
                    }))
                ->add('contract_user', 'entity', array(
                    'class' => 'AMAPBundle:Account\Contract',
                    'associated_property' => function ($contract) {
                        return $contract->getId();
                    }))
                ->add('enabled')
                ->add('salt')
                ->add('password')
                ->add('lastLogin')
                ->add('locked')
                ->add('expired')
                ->add('expiresAt')
                ->add('confirmationToken')
                ->add('passwordRequestedAt')
                ->add('roles')
                ->add('credentialsExpired')
                ->add('credentialsExpireAt')
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
        $container = $this->getConfigurationPool()->getContainer();
        $roles = $container->getParameter('security.role_hierarchy.roles');

        $rolesChoices = $this->roles->flattenRoles($roles);

        $formMapper
                ->with('label_needed')
                ->add('id', null, array('required' => false))
                ->add('username')
                ->add('usernameCanonical', null, array('required' => false))
                ->add('name')
                ->add('firstName')
                ->add('email')
                ->add('emailCanonical', null, array('required' => false))
                ->add('enabled')
                ->add('salt', null, array('required' => false))
                ->add('password')
                ->end()
                ->with('label_option', array('collapsed' => true))
                ->add('credentialsExpired', null, array('required' => false))
                ->add('adress', null, array('required' => false))
                ->add('locale', null, array('required' => false))
                ->add('lastLogin', null, array('required' => false))
                ->add('locked', null, array('required' => false))
                ->add('expired', null, array('required' => false))
                ->add('confirmationToken', null, array('required' => false))
                ->add('passwordRequestedAt')
                ->end()
                ->with('label_group')
                ->add('roles', 'choice', array(
                    'choices' => $rolesChoices,
                    'multiple' => true))
                ->add('groups', 'sonata_type_collection', array(), array(
                    'edit' => 'inline',
                    'inline' => 'table',
                    'sortable' => 'position',
                    'limit' => 10
                ))
                ->add('amap', 'sonata_type_collection', array(), array(
                    'edit' => 'inline',
                    'inline' => 'table',
                    'sortable' => 'position',
                    'limit' => 10
                ))
                ->add('contract_user', 'sonata_type_model_autocomplete', array(
                    'property' => 'id'))
                ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('username')
                ->add('usernameCanonical')
                ->add('email')
                ->add('emailCanonical')
                ->add('enabled')
                ->add('salt')
                ->add('password')
                ->add('lastLogin')
                ->add('locked')
                ->add('expired')
                ->add('expiresAt')
                ->add('confirmationToken')
                ->add('passwordRequestedAt')
                ->add('roles')
                ->add('credentialsExpired')
                ->add('credentialsExpireAt')
                ->add('id')
                ->add('name')
                ->add('firstName')
                ->add('adress')
                ->add('locale')
        ;
    }

}
