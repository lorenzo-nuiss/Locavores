<?php

namespace Container0WMduRQ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_GmailService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mailer.transport_factory.gmail' shared service.
     *
     * @return \Symfony\Component\Mailer\Bridge\Google\Transport\GmailTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'google-mailer'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'GmailTransportFactory.php';

        return new \Symfony\Component\Mailer\Bridge\Google\Transport\GmailTransportFactory(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['.debug.http_client'] ?? $container->get_Debug_HttpClientService()), ($container->privates['monolog.logger.mailer'] ?? $container->load('getMonolog_Logger_MailerService')));
    }
}
