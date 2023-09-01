<?php

namespace Container0WMduRQ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PB6IJCxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pB6IJCx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pB6IJCx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorie' => ['privates', '.errored..service_locator.pB6IJCx.App\\Entity\\Categorie', NULL, 'Cannot autowire service ".service_locator.pB6IJCx": it references class "App\\Entity\\Categorie" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'categorie' => 'App\\Entity\\Categorie',
            'manager' => '?',
        ]);
    }
}
