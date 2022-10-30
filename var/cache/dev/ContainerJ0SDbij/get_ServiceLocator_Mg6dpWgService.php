<?php

namespace ContainerJ0SDbij;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Mg6dpWgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Mg6dpWg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Mg6dpWg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'adminRepo' => ['privates', 'App\\Repository\\AdminRepository', 'getAdminRepositoryService', true],
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
        ], [
            'adminRepo' => 'App\\Repository\\AdminRepository',
            'authenticationUtils' => '?',
        ]);
    }
}
