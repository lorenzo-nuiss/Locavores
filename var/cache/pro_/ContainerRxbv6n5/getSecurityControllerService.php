<?php

namespace ContainerRxbv6n5;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\SecurityController' shared autowired service.
     *
     * @return \App\Controller\Admin\SecurityController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\SecurityController'] = $instance = new \App\Controller\Admin\SecurityController();

        $instance->setContainer(($container->privates['.service_locator.0ghLsew'] ?? $container->load('get_ServiceLocator_0ghLsewService'))->withContext('App\\Controller\\Admin\\SecurityController', $container));

        return $instance;
    }
}
