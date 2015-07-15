<?php

namespace eDemy\ThemeBundle\Controller;

use Symfony\Component\EventDispatcher\GenericEvent;
use eDemy\MainBundle\Controller\BaseController;
use eDemy\MainBundle\Event\ContentEvent;
use eDemy\MainBundle\Entity\Param;

class ThemeController extends BaseController
{
    public static function getSubscribedEvents()
    {
        return self::getSubscriptions('theme', [], array(

        ));
    }
}
