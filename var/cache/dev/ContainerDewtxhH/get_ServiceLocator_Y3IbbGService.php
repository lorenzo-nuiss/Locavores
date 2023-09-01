<?php

namespace ContainerDewtxhH;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y3IbbGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._y3IbbG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._y3IbbG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repAgri' => ['privates', 'App\\Repository\\AgriculteurRepository', 'getAgriculteurRepositoryService', true],
        ], [
            'repAgri' => 'App\\Repository\\AgriculteurRepository',
        ]);
    }
}
