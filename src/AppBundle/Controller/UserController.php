<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;


class UserController extends Controller
{
    public function registerAction()
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        
        return $this->render('AppBundle:User:register.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function loginAction()
    {
        return $this->render('AppBundle:User:login.html.twig', array(
            // ...
        ));
    }

}
