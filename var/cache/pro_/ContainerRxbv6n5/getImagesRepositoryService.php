<?php

namespace ContainerRxbv6n5;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImagesRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ImagesRepository' shared autowired service.
     *
     * @return \App\Repository\ImagesRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ImagesRepository'] = new \App\Repository\ImagesRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
