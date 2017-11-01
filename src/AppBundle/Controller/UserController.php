<?php

namespace AppBundle\Controller;

use AppBundle\Events\UserEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use AppBundle\Form\UserRegisterType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends Controller
{
    public function registerAction(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = new User(); 
        $form = $this->createForm(UserRegisterType::class, $user);
        $form->handleRequest($request);
        
        if ($form->isValid() && $form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $encoded = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($encoded);
            $em->persist($user);
            $em->flush();

            $dispatcher = $this->get('event_dispatcher');
            $dispatcher->dispatch(UserEvent::EVENT_USER_REGISTERED, new UserEvent($this->container, $user));

            return $this->redirectToRoute('homepage');
        }
        
        return $this->render('AppBundle:User:register.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function loginAction(AuthenticationUtils $authUtils)
    {
        return $this->render('AppBundle:User:login.html.twig', array(
            'last_username' => $authUtils->getLastUsername(),
            'error'         => $authUtils->getLastAuthenticationError(),
        ));
    }
    public function logoutAction() {
        return new Response();
    }
    
    protected function getErrorMessages(\Symfony\Component\Form\Form $form) 
    {
        $errors = array();

        foreach ($form->getErrors() as $key => $error) {
            $errors[] = $error->getMessage();
        }

        foreach ($form->all() as $child) {
            if (!$child->isValid()) {
                $errors[$child->getName()] = $this->getErrorMessages($child);
            }
        }

        return $errors;
    }

}
