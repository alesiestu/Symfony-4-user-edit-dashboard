<?php

namespace App\Form\EventListener;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityRepository;


class AddRoleFieldSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(FormEvents::POST_SUBMIT => 'setRole');
    }

    
   
   
    public function setRole(FormEvent $event)
    {
        
        global $kernel;

        if ( 'AppCache' == get_class($kernel) )
        {
            $kernel = $kernel->getKernel();
        }
        $doctrine = $kernel->getContainer()->get( 'doctrine' );

        $userRepository=$doctrine->getRepository('App:User');
        $numberuser = $userRepository-> findAllOrderedByName();
        
        
        
        
        
        
        //controlla tabella vuota
       // $numberuser = $this->getDoctrine()
         //   ->getRepository(User::class)
           // ->countAllUser();
        
        if ($numberuser->isEmpty()) {
            $aRoles = array('ROLE_ADMIN');
        }  else {
            $aRoles = array('ROLE_USER');
        }
        



        
       // $aRoles = array('ROLE_USER');  //SI REGISTRANO I MEMBRI DELLA PIATTAFORMA PER ACCEDERE ALL'AREA MEMBER

        /** @var $user \FOS\UserBundle\Model\UserInterface */
        $user = $event->getForm()->getData();
        $user->setRoles($aRoles);
    }




}