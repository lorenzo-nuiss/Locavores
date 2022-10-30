<?php

namespace ContainerOJRYYZ4;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ohjzx_AService extends App_KernelDevContainer
{
    /*
     * Gets the private '.service_locator.ohjzx.a' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ohjzx.a'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'notification' => ['privates', 'App\\Notification\\ContactNotification', 'getContactNotificationService', true],
            'repContact' => ['privates', 'App\\Repository\\ContactInfoRepository', 'getContactInfoRepositoryService', true],
        ], [
            'notification' => 'App\\Notification\\ContactNotification',
            'repContact' => 'App\\Repository\\ContactInfoRepository',
        ]);
    }
}