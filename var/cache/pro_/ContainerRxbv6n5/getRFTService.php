<?php

namespace ContainerRxbv6n5;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRFTService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Trash\RFT' shared autowired service.
     *
     * @return \App\Form\Trash\RFT
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Trash\\RFT'] = new \App\Form\Trash\RFT();
    }
}
