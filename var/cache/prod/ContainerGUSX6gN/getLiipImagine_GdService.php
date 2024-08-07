<?php

namespace ContainerGUSX6gN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_GdService extends App_KernelProdContainer
{
    /*
     * Gets the private 'liip_imagine.gd' shared service.
     *
     * @return \Imagine\Gd\Imagine
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['liip_imagine.gd'] = $instance = new \Imagine\Gd\Imagine();

        $instance->setMetadataReader(new \Imagine\Image\Metadata\ExifMetadataReader());

        return $instance;
    }
}
