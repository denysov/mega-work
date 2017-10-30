<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResumeController extends Controller
{
    public function viewAction()
    {
        return $this->render('AppBundle:Resume:view.html.twig', array(
            // ...
        ));
    }

}
