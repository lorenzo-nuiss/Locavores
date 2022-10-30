<?php

namespace ContainerRpP9LFM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EKNhDLJService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.eKNhDLJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eKNhDLJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorie' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'encoder' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'categorie' => 'App\\Repository\\CategorieRepository',
            'encoder' => '?',
        ]);
    }
}
