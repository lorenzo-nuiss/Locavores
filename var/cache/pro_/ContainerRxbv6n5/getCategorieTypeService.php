<?php

namespace ContainerRxbv6n5;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorieTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Admin\CategorieType' shared autowired service.
     *
     * @return \App\Form\Admin\CategorieType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Admin\\CategorieType'] = new \App\Form\Admin\CategorieType();
    }
}
