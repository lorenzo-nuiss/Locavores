<?php

namespace ContainerJ0SDbij;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XBdMEROService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XBdMERO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XBdMERO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'image' => ['privates', '.errored..service_locator.XBdMERO.App\\Entity\\Images', NULL, 'Cannot autowire service ".service_locator.XBdMERO": it references class "App\\Entity\\Images" but no such service exists.'],
        ], [
            'image' => 'App\\Entity\\Images',
        ]);
    }
}
