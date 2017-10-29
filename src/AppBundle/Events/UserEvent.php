<?php

namespace AppBundle\Events;
use AppBundle\Entity\User;
use Symfony\Component\EventDispatcher\Event;

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 29.10.2017
 * Time: 17:32
 */
class UserEvent extends Event
{

    const EVENT_USER_REGISTERED = 'event.user.registered';
    const EVENT_USER_EDITED = 'event.user.edited';

    private $container;
    private $user;

    public function __construct($container, User $user = null)
    {
        $this->container = $container;
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }



}