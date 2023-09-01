<?php

namespace ContainerDewtxhH;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VFpOJGeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vFpOJGe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vFpOJGe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'agriculteurRepo' => ['privates', 'App\\Repository\\AgriculteurRepository', 'getAgriculteurRepositoryService', true],
            'categorieRepo' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
        ], [
            'agriculteurRepo' => 'App\\Repository\\AgriculteurRepository',
            'categorieRepo' => 'App\\Repository\\CategorieRepository',
        ]);
    }
}
