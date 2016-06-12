<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AMAPBundle\EventListener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent,
    Symfony\Component\HttpKernel\Event\GetResponseEvent,
    Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * Stores the locale of the user in the session after the
 * login. This can be used by the LocaleListener afterwards.
 */
class UserLocaleListener {

    private $defaultLocale;

    public function __construct() {
        $this->defaultLocale = 'fr_FR';
    }

    /**
     * kernel.request event. If a guest user doesn't have an opened session, locale is equal to
     * "undefined" as configured by default in parameters.ini. If so, set as a locale the user's
     * preferred language.
     *
     * @param \Symfony\Component\HttpKernel\Event\GetResponseEvent $event
     */
    public function setLocaleForUnauthenticatedUser(GetResponseEvent $event) {
        if (HttpKernelInterface::MASTER_REQUEST !== $event->getRequestType()) {
            return;
        }
        $request = $event->getRequest();
        if ($request->getLocale() != 'fr_FR') {
            $request->setLocale($this->defaultLocale);
        }
    }

    /**
     * security.interactive_login event. If a user chose a locale in preferences, it would be set,
     * if not, a locale that was set by setLocaleForUnauthenticatedUser remains.
     *
     * @param \Symfony\Component\Security\Http\Event\InteractiveLoginEvent $event
     */
    public function setLocaleForAuthenticatedUser(InteractiveLoginEvent $event) {
        /** @var \Application\Sonata\UserBundle\Entity\User $user  */
        $user = $event->getAuthenticationToken()->getUser();
        $request = $event->getRequest();
        if (($user->getLocale() != $request->getLocale()) and ( $user->getLocale() !== null)) {
            $request->setLocale($user->getLocale());
        }
        else if(is_null($user->getLocale())){
            $user->setLocale($request->getLocale());
        }
    }

}
