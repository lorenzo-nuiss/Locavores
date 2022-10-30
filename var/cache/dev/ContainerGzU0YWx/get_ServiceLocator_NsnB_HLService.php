<?php

namespace ContainerGzU0YWx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NsnB_HLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nsnB.hL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nsnB.hL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.userapp' => ['privates', 'security.event_dispatcher.userapp', 'getSecurity_EventDispatcher_UserappService', false],
        ], [
            'event_dispatcher' => '?',
            'security.event_dispatcher.userapp' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
        ]);
    }
}
