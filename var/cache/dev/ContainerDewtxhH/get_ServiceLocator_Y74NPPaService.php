<?php

namespace ContainerDewtxhH;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y74NPPaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.y74NPPa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.y74NPPa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repContact' => ['privates', 'App\\Repository\\ContactInfoRepository', 'getContactInfoRepositoryService', true],
        ], [
            'repContact' => 'App\\Repository\\ContactInfoRepository',
        ]);
    }
}
