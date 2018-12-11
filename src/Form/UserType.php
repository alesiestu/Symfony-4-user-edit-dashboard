<?php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Form\Type\UserRoleType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
        
        $builder
            ->add('email', EmailType::class)
            ->add('roles', UserRoleType::class, [
                'label' => 'label.roles',
                'multiple' => true,
            ])
            ->add('enabled', ChoiceType::class, array(
                'choices'  => array(
                    
                    'Si' => true,
                    'No' => false,
                )))
            
            ->add('username', TextType::class)
            ->add('first_name',TextType::class)
            ->add('last_name',TextType::class)
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            ->add('brochure', FileType::class, array('label' => 'Brochure (PDF file)', ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}