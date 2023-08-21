<?php

namespace ContainerRxbv6n5;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_Session_UserappService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.listener.session.userapp' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\SessionStrategyListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.listener.session.userapp'] = new \Symfony\Component\Security\Http\EventListener\SessionStrategyListener(new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'));
    }
}
