<?php

namespace ContainerOJRYYZ4;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_UserChecker_UserappService extends App_KernelDevContainer
{
    /*
     * Gets the private 'security.listener.user_checker.userapp' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserCheckerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.listener.user_checker.userapp'] = new \Symfony\Component\Security\Http\EventListener\UserCheckerListener(new \App\Security\EmailValidateChecker());
    }
}
