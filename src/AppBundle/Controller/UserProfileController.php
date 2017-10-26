<?php

namespace AppBundle\Controller;

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
        return $this->render('AppBundle:UserProfile:dashboard.html.twig', array(
            // ...
        ));
    }

    public function editAction()
    {
        return $this->render('AppBundle:UserProfile:edit.html.twig', array(
            // ...
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
