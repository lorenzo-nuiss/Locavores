<?php

namespace ContainerRpP9LFM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Cache_Resolver_NoCacheWebPathService extends App_KernelProdContainer
{
    /*
     * Gets the public 'liip_imagine.cache.resolver.no_cache_web_path' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['liip_imagine.cache.resolver.no_cache_web_path'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver(($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService()));
    }
}
