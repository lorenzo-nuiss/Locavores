<?php

namespace ContainerGUSX6gN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_SendgridService extends App_KernelProdContainer
{
    /*
     * Gets the private 'mailer.transport_factory.sendgrid' shared service.
     *
     * @return \Symfony\Component\Mailer\Bridge\Sendgrid\Transport\SendgridTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return new \Symfony\Component\Mailer\Bridge\Sendgrid\Transport\SendgridTransportFactory(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['http_client'] ?? $container->load('getHttpClientService')), ($container->privates['monolog.logger.mailer'] ?? $container->load('getMonolog_Logger_MailerService')));
    }
}
