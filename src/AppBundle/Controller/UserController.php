<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends Controller
{
    public function registerAction(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        
        if ($form->isValid() && $form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $encoded = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($encoded);
            $em->persist($user);
            $em->flush();
            
            var_dump($user);
            die('user saved');
            
        }
        
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
