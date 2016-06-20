<?php

namespace AMAPBundle\Form;

use AppBundle\Entity\AMAP\AMAP;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('username', TextType::class, array('label_attr' => array('class' => 'control-label col-sm-5'), 'attr' => array('class' => 'form-control width300'), 'label_format' => 'label_username'))
                ->add('plainPassword', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'options' => array('label_attr' => array('class' => 'control-label col-sm-5'), 'attr' => array('class' => 'form-control width300')),
                    'first_options' => array('label' => 'label_password'),
                    'second_options' => array('label' => 'label_confirmpassword')
                ))
                ->add('email', EmailType::class, array('label_attr' => array('class' => 'control-label col-sm-5'), 'attr' => array('class' => 'form-control width300'), 'label_format' => 'label_email'))
                ->add('name', TextType::class, array('label_attr' => array('class' => 'control-label col-sm-5'), 'attr' => array('class' => 'form-control width300'), 'label_format' => 'label_name'))
                ->add('firstname', TextType::class, array('label_attr' => array('class' => 'control-label col-sm-5'), 'attr' => array('class' => 'form-control width300'), 'label_format' => 'label_firstname'))
                ->add('adress', TextareaType::class, array('label_attr' => array('class' => 'control-label col-sm-5'), 'attr' => array('class' => 'form-control width300'), 'label_format' => 'label_adress'))
                ->add('phone', TextType::class, array('label_attr' => array('class' => 'control-label col-sm-5'), 'attr' => array('class' => 'form-control width300'), 'label_format' => 'label_phone'))
                ->add('locale', TextType::class, array('label_attr' => array('class' => 'control-label col-sm-5'), 'attr' => array('class' => 'form-control width300'), 'label_format' => 'label_locale'))

        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AMAPBundle\Entity\Account\User',
            'translation_domain' => 'AMAPBundle'
        ));
    }

}

?>
