<?php

namespace ContainerRxbv6n5;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_FormLogin_UserappService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.form_login.userapp' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));
        $b = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, []);
        $b->setOptions(['login_path' => 'app_login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $b->setFirewallName('userapp');
        $c = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($container->services['http_kernel'] ?? $container->getHttpKernelService()), $a, [], ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()));
        $c->setOptions(['login_path' => 'app_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $container->privates['security.authenticator.form_login.userapp'] = new \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator($a, ($container->privates['security.user.provider.concrete.all_users'] ?? $container->load('getSecurity_User_Provider_Concrete_AllUsersService')), $b, $c, ['login_path' => 'app_login', 'check_path' => 'app_login', 'enable_csrf' => true, 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true]);
    }
}
