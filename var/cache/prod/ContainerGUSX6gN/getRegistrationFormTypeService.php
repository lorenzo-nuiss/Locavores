<?php

namespace ContainerGUSX6gN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationFormTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Agriculteur\RegistrationFormType' shared autowired service.
     *
     * @return \App\Form\Agriculteur\RegistrationFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Agriculteur\\RegistrationFormType'] = new \App\Form\Agriculteur\RegistrationFormType(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
