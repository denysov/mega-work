<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

class LangController extends Controller
{
    public function changeAction($lang, SessionInterface $session, Request $request)
    {
        $session->set('_locale', $lang);
        return $this->redirect($request->headers->get('referer'));
    }

}
