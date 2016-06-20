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
                ->add('phone')
                ->add('locale')
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
                ->addIdentifier('username')
                ->add('email')
                ->add('name')
                ->add('firstName')
                ->add('adress')
                ->add('phone')
                ->add('locale')
                ->add('groups', 'entity', array(
                    'class' => 'AMAPBundle:Account\Group',
                    'associated_property' => function ($amap) {
                        return $amap->getName();
                    }))
                ->add('amap', 'entity', array(
                    'class' => 'AMAPBundle:AMAP\AMAP',
                    'associated_property' => function ($amap) {
                        return $amap->getName();
                    }))
                ->add('contract_user', 'entity', array(
                    'class' => 'AMAPBundle:Account\Contract',
                    'associated_property' => function ($amap) {
                        return $amap->getId();
                    }))
                ->add('enabled')
                ->add('password', 'password')
                ->add('lastLogin')
                ->add('locked')
                ->add('expired')
                ->add('expiresAt')
                ->add('confirmationToken')
                ->add('passwordRequestedAt')
                ->add('roles', 'choice', array(
                    'choices' => $rolesChoices,
                    'multiple' => true
                ))
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
                ->add('username')
                ->add('name')
                ->add('firstName')
                ->add('email')
                ->add('enabled')
                ->add('locale', 'choice', array(
                    'choices' => array(
                        'English' => 'en',
                        'Spanish' => 'es',
                        'Français' => 'fr_FR',
                        'Pirate' => 'arr'
                    ),
                    'preferred_choices' => array('Français', 'fr_FR')))
                ->add('adress')
                ->add('phone')
                ->end()
                ->with('label_option', array('collapsed' => true))
                ->add('confirmationToken', null, array('required' => false))
                ->add('credentialsExpired', null, array('required' => false))
                ->add('locked', null, array('required' => false))
                ->add('expired', null, array('required' => false))
                ->end()

        ;
        if ($this->isCurrentRoute('create')) {
            $formMapper
                    ->with('label_needed')
                    ->add('plainPassword', 'repeated', array(
                        'type' => 'password',
                        'options' => array('translation_domain' => 'FOSUserBundle'),
                        'first_options' => array('label' => 'form.password'),
                        'second_options' => array('label' => 'form.password_confirmation'),
                        'invalid_message' => 'fos_user.password.mismatch',
                    ))
                    ->end();
            $formMapper->with('label_group')
                    ->add('roles', 'choice', array(
                        'choices' => $rolesChoices,
                        'multiple' => true
                    ))
                    ->add('groups', 'sonata_type_model', array(
                        'required' => false,
                        'multiple' => true,
                        'by_reference' => false,
                        'class' => 'AMAPBundle:Account\Group',
                        'property' => 'name'
                    ))
                    ->add('amap', 'sonata_type_model', array(
                        'required' => false,
                        'multiple' => true,
                        'by_reference' => false,
                        'class' => 'AMAPBundle:AMAP\AMAP',
                        'property' => 'name'
            ));
        } elseif ($this->isCurrentRoute('edit')) {
            $formMapper
                    ->with('label_needed')
                    ->add('plainPassword', 'repeated', array(
                        'required' => false,
                        'type' => 'password',
                        'options' => array('translation_domain' => 'FOSUserBundle'),
                        'first_options' => array('label' => 'form.password'),
                        'second_options' => array('label' => 'form.password_confirmation'),
                        'invalid_message' => 'fos_user.password.mismatch',
                    ))
                    ->end();

            $formMapper->with('label_group')
                    ->add('roles', 'choice', array(
                        'choices' => $rolesChoices,
                        'multiple' => true
                    ))
                    ->add('groups', 'sonata_type_model', array(
                        'expanded' => true,
                        'by_reference' => false,
                        'required' => false,
                        'multiple' => true,
                        'class' => 'AMAPBundle:Account\Group',
                        'property' => 'name'
                    ))
                    ->add('amap', 'sonata_type_model', array(
                        'expanded' => true,
                        'by_reference' => false,
                        'required' => false,
                        'multiple' => true,
                        'class' => 'AMAPBundle:AMAP\AMAP',
                        'property' => 'name'
            ));
        }
        $formMapper
                ->add('contract_user', 'sonata_type_model_list', array(
                    'by_reference' => false,
                    'required' => false), array(
                    'placeholder' => 'Pas de contrat séléctionné'
                ))
                ->end();
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
                ->add('phone')
                ->add('locale')
        ;
    }

}
