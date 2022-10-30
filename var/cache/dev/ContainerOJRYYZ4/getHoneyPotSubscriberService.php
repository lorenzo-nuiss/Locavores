<?php

namespace ContainerOJRYYZ4;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHoneyPotSubscriberService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\EventSubscriber\HoneyPotSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\HoneyPotSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\EventSubscriber\\HoneyPotSubscriber'] = new \App\EventSubscriber\HoneyPotSubscriber(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
