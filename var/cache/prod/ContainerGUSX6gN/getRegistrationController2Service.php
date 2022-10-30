<?php

namespace ContainerGUSX6gN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationController2Service extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Trash\RegistrationController' shared autowired service.
     *
     * @return \App\Controller\Trash\RegistrationController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Trash\\RegistrationController'] = $instance = new \App\Controller\Trash\RegistrationController(new \App\Security\EmailVerifier(new \SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper(($container->services['router'] ?? $container->getRouterService()), new \Symfony\Component\HttpKernel\UriSigner($container->getEnv('APP_SECRET'), 'signature'), new \SymfonyCasts\Bundle\VerifyEmail\Util\VerifyEmailQueryUtility(), new \SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator($container->getEnv('APP_SECRET')), 3600), ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'))));

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\Trash\\RegistrationController', $container));

        return $instance;
    }
}
