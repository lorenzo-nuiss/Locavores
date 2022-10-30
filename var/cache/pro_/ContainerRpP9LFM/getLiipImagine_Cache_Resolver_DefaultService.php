<?php

namespace ContainerRpP9LFM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Cache_Resolver_DefaultService extends App_KernelProdContainer
{
    /*
     * Gets the public 'liip_imagine.cache.resolver.default' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['liip_imagine.cache.resolver.default'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver(($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService()), (\dirname(__DIR__, 4).'/public'), 'media/cache');
    }
}
