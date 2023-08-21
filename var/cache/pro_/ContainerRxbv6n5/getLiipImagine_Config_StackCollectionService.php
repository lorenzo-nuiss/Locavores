<?php

namespace ContainerRxbv6n5;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Config_StackCollectionService extends App_KernelProdContainer
{
    /*
     * Gets the public 'liip_imagine.config.stack_collection' shared service.
     *
     * @return \Liip\ImagineBundle\Config\StackCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Liip\ImagineBundle\Factory\Config\Filter\Argument\SizeFactory();
        $b = new \Liip\ImagineBundle\Factory\Config\Filter\Argument\PointFactory();

        return $container->services['liip_imagine.config.stack_collection'] = new \Liip\ImagineBundle\Config\StackCollection(new \Liip\ImagineBundle\Config\StackBuilder(new \Liip\ImagineBundle\Factory\Config\StackFactory(), new \Liip\ImagineBundle\Config\FilterFactoryCollection(new \Liip\ImagineBundle\Factory\Config\Filter\AutoRotateFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\BackgroundFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\CropFactory($a, $b), new \Liip\ImagineBundle\Factory\Config\Filter\DownscaleFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\FlipFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\GrayscaleFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\InterlaceFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\PasteFactory($b), new \Liip\ImagineBundle\Factory\Config\Filter\RelativeResizeFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\ResizeFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\RotateFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\ScaleFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\StripFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\ThumbnailFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\UpscaleFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\WatermarkFactory())), $container->parameters['liip_imagine.filter_sets']);
    }
}
