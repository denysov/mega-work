<?php

namespace AppBundle\Controller;

use AppBundle\Form\UserEditType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

    public function editAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $form = $this->createForm(UserEditType::class, $user);

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
