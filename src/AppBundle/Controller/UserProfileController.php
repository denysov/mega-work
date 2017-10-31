<?php

namespace AppBundle\Controller;

use AppBundle\Events\UserEvent;
use AppBundle\Form\UserEditType;
use AppBundle\Entity\Education;
use AppBundle\Form\EducationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserProfileController extends Controller
{
    public function stubAction()
    {
        return $this->render('AppBundle:UserProfile:stub.html.twig', array(
            // ...
        ));
    }

    public function dashboardAction()
    {
        return $this->render('AppBundle:UserProfile:profile.html.twig', array(
            // ...
        ));
    }

    public function editAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $form = $this->createForm(UserEditType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $dispatcher = $this->get('event_dispatcher');
                $dispatcher->dispatch(UserEvent::EVENT_USER_EDITED, new UserEvent($this->container, $user));
            }
        }


        return $this->render('AppBundle:UserProfile:profile-edit.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function editResumeAction()
    {
        return $this->render('AppBundle:UserProfile:edit_resume.html.twig', array(
            // ...
        ));
    }
    
    public function getEmbeddedFormAction(Request $request) {
        $education = new Education();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $form = $this->createForm(EducationType::class, $education);
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $education->setUser($user);
                $em->persist($education);
                $em->flush();
            }
        }
        
        return $this->render('AppBundle:UserProfile:form-education.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function savedResumeAction()
    {
        return $this->render('AppBundle:UserProfile:saved_resume.html.twig', array(
            // ...
        ));
    }

    public function jobsAction()
    {
        return $this->render('AppBundle:UserProfile:jobs.html.twig', array(
            // ...
        ));
    }

    public function followedAction()
    {
        return $this->render('AppBundle:UserProfile:followed.html.twig', array(
            // ...
        ));
    }

}
