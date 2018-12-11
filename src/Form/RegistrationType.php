<?php

// src/AppBundle/Form/RegistrationType.php

namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Form\EventListener\AddRoleFieldSubscriber;

class RegistrationType extends AbstractType

{
   public function buildForm(FormBuilderInterface $builder, array $options)

   {
       $builder->add('first_name');
       $builder->add('last_name');
       $builder->addEventSubscriber(new AddRoleFieldSubscriber());
   }

   public function getParent()

   {
       return 'FOS\UserBundle\Form\Type\RegistrationFormType';
   }

   public function getBlockPrefix()

   {
       return 'app_user_registration';
   }

   public function getName()

   {
       return $this->getBlockPrefix();
   }

}