<?php

namespace Container0WMduRQ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z8xh0Z9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Z8xh0Z9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z8xh0Z9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorie' => ['privates', '.errored..service_locator.Z8xh0Z9.App\\Entity\\Categorie', NULL, 'Cannot autowire service ".service_locator.Z8xh0Z9": it references class "App\\Entity\\Categorie" but no such service exists.'],
        ], [
            'categorie' => 'App\\Entity\\Categorie',
        ]);
    }
}
