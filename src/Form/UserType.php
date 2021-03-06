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
            ->add('username', TextType::class, ['label' => 'Username utente'  ] )
            ->add('first_name',TextType::class, ['label' => 'Nome'  ] )
            ->add('last_name',TextType::class,  ['label' => 'Cognome'  ])
            ->add('email', EmailType::class, ['label' => 'Email utente'  ]   )
            ->add('roles', UserRoleType::class, [
                'label' => 'Ruolo utente',
                'multiple' => true,
            ])
            ->add('enabled', ChoiceType::class, array(
                'choices'  => array(
                
                 'Si' => true,
                 'No' => false,
                )))
            
            
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Ripeti Password'),
            ))
          //  ->add('brochure', FileType::class, array('label' => 'Brochure (PDF file)', ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}