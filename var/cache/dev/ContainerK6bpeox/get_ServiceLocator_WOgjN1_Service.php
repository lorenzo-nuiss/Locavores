<?php

namespace ContainerK6bpeox;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WOgjN1_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wOgjN1.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wOgjN1.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorie' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'userPasswordHasherInterface' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'categorie' => 'App\\Repository\\CategorieRepository',
            'mailer' => '?',
            'userPasswordHasherInterface' => '?',
        ]);
    }
}
