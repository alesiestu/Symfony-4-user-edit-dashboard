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
        
       
        

        /** @var $user \FOS\UserBundle\Model\UserInterface */
        $aRoles = array('ROLE_USER');  //SI REGISTRANO I MEMBRI DELLA PIATTAFORMA PER ACCEDERE ALL'AREA MEMBER
        $user = $event->getForm()->getData();
        $user->setRoles($aRoles);
        
    }




}