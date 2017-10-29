<?php
namespace AppBundle\EventSubscriber;

use AppBundle\Events\UserEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class UserSubscriber implements EventSubscriberInterface
{
    private $defaultLocale;

    public function __construct($defaultLocale = 'ua')
    {
        $this->defaultLocale = $defaultLocale;
    }

    public function onUserEdited(UserEvent $event)
    {
        $event->getContainer()->get('session')->getFlashBag()->add('notice', 'User successfully edited');
    }

    public function onUserRegistered(UserEvent $event)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setBody(
                'Welcome ' . $event->getUser()->getUserName() . ' !',
                'text/html'
            );

        $event->getContainer()->get('mailer')->send($message);
    }

    public static function getSubscribedEvents()
    {
        return array(
            // must be registered after the default Locale listener
            UserEvent::EVENT_USER_EDITED => array(array('onUserEdited')),
            UserEvent::EVENT_USER_REGISTERED => array(array('onUserRegistered')),
        );
    }
}