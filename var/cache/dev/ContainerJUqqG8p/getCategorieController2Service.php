<?php

namespace ContainerJUqqG8p;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorieController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Agriculteur\CategorieController' shared autowired service.
     *
     * @return \App\Controller\Agriculteur\CategorieController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Agriculteur'.\DIRECTORY_SEPARATOR.'CategorieController.php';

        $container->services['App\\Controller\\Agriculteur\\CategorieController'] = $instance = new \App\Controller\Agriculteur\CategorieController();

        $instance->setContainer(($container->privates['.service_locator.0ghLsew'] ?? $container->load('get_ServiceLocator_0ghLsewService'))->withContext('App\\Controller\\Agriculteur\\CategorieController', $container));

        return $instance;
    }
}
