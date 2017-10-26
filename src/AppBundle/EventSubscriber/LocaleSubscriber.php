<?php
namespace AppBundle\EventSubscriber;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class LocaleSubscriber implements EventSubscriberInterface
{
    private $defaultLocale;

    public function __construct($defaultLocale = 'ua')
    {
        $this->defaultLocale = $defaultLocale;
    }

    public function onKernelRequest($event, $eventName)
    {
        $request = $event->getRequest();
        $request->setLocale($request->getSession()->get('_locale', $this->defaultLocale));
    }

    public static function getSubscribedEvents()
    {
        return array(
            // must be registered after the default Locale listener
            KernelEvents::REQUEST => array(array('onKernelRequest', 15)),
        );
    }
}