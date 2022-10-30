<?php

namespace ContainerOJRYYZ4;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelDevContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\AdminController::deleteCategorie' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\Admin\\AgriculteurController::deleteAgri_admin' => ['privates', '.service_locator._y3IbbG', 'get_ServiceLocator_Y3IbbGService', true],
            'App\\Controller\\Admin\\AgriculteurController::editAgriculteur_Admin' => ['privates', '.service_locator.2wMaQxF', 'get_ServiceLocator_2wMaQxFService', true],
            'App\\Controller\\Admin\\AgriculteurController::indexAgriculteurV' => ['privates', '.service_locator.cb7XNjU', 'get_ServiceLocator_Cb7XNjUService', true],
            'App\\Controller\\Admin\\AgriculteurController::indexAriculteurA' => ['privates', '.service_locator.cb7XNjU', 'get_ServiceLocator_Cb7XNjUService', true],
            'App\\Controller\\Admin\\AgriculteurController::new_Agriculteur' => ['privates', '.service_locator.eKNhDLJ', 'get_ServiceLocator_EKNhDLJService', true],
            'App\\Controller\\Admin\\AgriculteurController::show' => ['privates', '.service_locator.FVT1VGj', 'get_ServiceLocator_FVT1VGjService', true],
            'App\\Controller\\Admin\\AgriculteurController::unnabledAgri' => ['privates', '.service_locator.cb7XNjU', 'get_ServiceLocator_Cb7XNjUService', true],
            'App\\Controller\\Admin\\AgriculteurController::updateEtat' => ['privates', '.service_locator._y3IbbG', 'get_ServiceLocator_Y3IbbGService', true],
            'App\\Controller\\Admin\\CategorieController::deleteCategorie' => ['privates', '.service_locator.pB6IJCx', 'get_ServiceLocator_PB6IJCxService', true],
            'App\\Controller\\Admin\\CategorieController::editCategorie' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\Admin\\CategorieController::showCategorie' => ['privates', '.service_locator.G54SSh4', 'get_ServiceLocator_G54SSh4Service', true],
            'App\\Controller\\Admin\\RegistrationController::register' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Controller\\Admin\\SecurityController::login' => ['privates', '.service_locator.Mg6dpWg', 'get_ServiceLocator_Mg6dpWgService', true],
            'App\\Controller\\Agriculteur\\AgriculteurController::editPerso' => ['privates', '.service_locator.6nFXVKY', 'get_ServiceLocator_6nFXVKYService', true],
            'App\\Controller\\Agriculteur\\AgriculteurController::profil' => ['privates', '.service_locator.IGsq3RR', 'get_ServiceLocator_IGsq3RRService', true],
            'App\\Controller\\Agriculteur\\CategorieController::delete' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\Agriculteur\\CategorieController::deleteImage' => ['privates', '.service_locator.XBdMERO', 'get_ServiceLocator_XBdMEROService', true],
            'App\\Controller\\Agriculteur\\CategorieController::imageProd' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\Agriculteur\\ResetPasswordController::request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\Agriculteur\\ResetPasswordController::reset' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Controller\\ContactInfo\\ContactController::updateContact' => ['privates', '.service_locator.y74NPPa', 'get_ServiceLocator_Y74NPPaService', true],
            'App\\Controller\\SecurityAdminController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController::activation' => ['privates', '.service_locator.MZdy6_.', 'get_ServiceLocator_MZdy6_Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController::registerAgri' => ['privates', '.service_locator.wOgjN1.', 'get_ServiceLocator_WOgjN1_Service', true],
            'App\\Controller\\Trash\\RegistrationController::activation' => ['privates', '.service_locator.HgTJSjH', 'get_ServiceLocator_HgTJSjHService', true],
            'App\\Controller\\Trash\\RegistrationController::register' => ['privates', '.service_locator.ZhVQ6t8', 'get_ServiceLocator_ZhVQ6t8Service', true],
            'App\\Controller\\VisiteurController::contact' => ['privates', '.service_locator.ohjzx.a', 'get_ServiceLocator_Ohjzx_AService', true],
            'App\\Controller\\VisiteurController::footerAction' => ['privates', '.service_locator.xdpP7cS', 'get_ServiceLocator_XdpP7cSService', true],
            'App\\Controller\\VisiteurController::headerAction' => ['privates', '.service_locator.YoF3g3F', 'get_ServiceLocator_YoF3g3FService', true],
            'App\\Controller\\VisiteurController::home' => ['privates', '.service_locator.YoF3g3F', 'get_ServiceLocator_YoF3g3FService', true],
            'App\\Controller\\VisiteurController::listByCategorie' => ['privates', '.service_locator.vFpOJGe', 'get_ServiceLocator_VFpOJGeService', true],
            'App\\Controller\\VisiteurController::show' => ['privates', '.service_locator.FVT1VGj', 'get_ServiceLocator_FVT1VGjService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Admin\\AdminController:deleteCategorie' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\Admin\\AgriculteurController:deleteAgri_admin' => ['privates', '.service_locator._y3IbbG', 'get_ServiceLocator_Y3IbbGService', true],
            'App\\Controller\\Admin\\AgriculteurController:editAgriculteur_Admin' => ['privates', '.service_locator.2wMaQxF', 'get_ServiceLocator_2wMaQxFService', true],
            'App\\Controller\\Admin\\AgriculteurController:indexAgriculteurV' => ['privates', '.service_locator.cb7XNjU', 'get_ServiceLocator_Cb7XNjUService', true],
            'App\\Controller\\Admin\\AgriculteurController:indexAriculteurA' => ['privates', '.service_locator.cb7XNjU', 'get_ServiceLocator_Cb7XNjUService', true],
            'App\\Controller\\Admin\\AgriculteurController:new_Agriculteur' => ['privates', '.service_locator.eKNhDLJ', 'get_ServiceLocator_EKNhDLJService', true],
            'App\\Controller\\Admin\\AgriculteurController:show' => ['privates', '.service_locator.FVT1VGj', 'get_ServiceLocator_FVT1VGjService', true],
            'App\\Controller\\Admin\\AgriculteurController:unnabledAgri' => ['privates', '.service_locator.cb7XNjU', 'get_ServiceLocator_Cb7XNjUService', true],
            'App\\Controller\\Admin\\AgriculteurController:updateEtat' => ['privates', '.service_locator._y3IbbG', 'get_ServiceLocator_Y3IbbGService', true],
            'App\\Controller\\Admin\\CategorieController:deleteCategorie' => ['privates', '.service_locator.pB6IJCx', 'get_ServiceLocator_PB6IJCxService', true],
            'App\\Controller\\Admin\\CategorieController:editCategorie' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\Admin\\CategorieController:showCategorie' => ['privates', '.service_locator.G54SSh4', 'get_ServiceLocator_G54SSh4Service', true],
            'App\\Controller\\Admin\\RegistrationController:register' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Controller\\Admin\\SecurityController:login' => ['privates', '.service_locator.Mg6dpWg', 'get_ServiceLocator_Mg6dpWgService', true],
            'App\\Controller\\Agriculteur\\AgriculteurController:editPerso' => ['privates', '.service_locator.6nFXVKY', 'get_ServiceLocator_6nFXVKYService', true],
            'App\\Controller\\Agriculteur\\AgriculteurController:profil' => ['privates', '.service_locator.IGsq3RR', 'get_ServiceLocator_IGsq3RRService', true],
            'App\\Controller\\Agriculteur\\CategorieController:delete' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\Agriculteur\\CategorieController:deleteImage' => ['privates', '.service_locator.XBdMERO', 'get_ServiceLocator_XBdMEROService', true],
            'App\\Controller\\Agriculteur\\CategorieController:imageProd' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\Agriculteur\\ResetPasswordController:request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\Agriculteur\\ResetPasswordController:reset' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Controller\\ContactInfo\\ContactController:updateContact' => ['privates', '.service_locator.y74NPPa', 'get_ServiceLocator_Y74NPPaService', true],
            'App\\Controller\\SecurityAdminController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController:activation' => ['privates', '.service_locator.MZdy6_.', 'get_ServiceLocator_MZdy6_Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController:registerAgri' => ['privates', '.service_locator.wOgjN1.', 'get_ServiceLocator_WOgjN1_Service', true],
            'App\\Controller\\Trash\\RegistrationController:activation' => ['privates', '.service_locator.HgTJSjH', 'get_ServiceLocator_HgTJSjHService', true],
            'App\\Controller\\Trash\\RegistrationController:register' => ['privates', '.service_locator.ZhVQ6t8', 'get_ServiceLocator_ZhVQ6t8Service', true],
            'App\\Controller\\VisiteurController:contact' => ['privates', '.service_locator.ohjzx.a', 'get_ServiceLocator_Ohjzx_AService', true],
            'App\\Controller\\VisiteurController:footerAction' => ['privates', '.service_locator.xdpP7cS', 'get_ServiceLocator_XdpP7cSService', true],
            'App\\Controller\\VisiteurController:headerAction' => ['privates', '.service_locator.YoF3g3F', 'get_ServiceLocator_YoF3g3FService', true],
            'App\\Controller\\VisiteurController:home' => ['privates', '.service_locator.YoF3g3F', 'get_ServiceLocator_YoF3g3FService', true],
            'App\\Controller\\VisiteurController:listByCategorie' => ['privates', '.service_locator.vFpOJGe', 'get_ServiceLocator_VFpOJGeService', true],
            'App\\Controller\\VisiteurController:show' => ['privates', '.service_locator.FVT1VGj', 'get_ServiceLocator_FVT1VGjService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Admin\\AdminController::deleteCategorie' => '?',
            'App\\Controller\\Admin\\AgriculteurController::deleteAgri_admin' => '?',
            'App\\Controller\\Admin\\AgriculteurController::editAgriculteur_Admin' => '?',
            'App\\Controller\\Admin\\AgriculteurController::indexAgriculteurV' => '?',
            'App\\Controller\\Admin\\AgriculteurController::indexAriculteurA' => '?',
            'App\\Controller\\Admin\\AgriculteurController::new_Agriculteur' => '?',
            'App\\Controller\\Admin\\AgriculteurController::show' => '?',
            'App\\Controller\\Admin\\AgriculteurController::unnabledAgri' => '?',
            'App\\Controller\\Admin\\AgriculteurController::updateEtat' => '?',
            'App\\Controller\\Admin\\CategorieController::deleteCategorie' => '?',
            'App\\Controller\\Admin\\CategorieController::editCategorie' => '?',
            'App\\Controller\\Admin\\CategorieController::showCategorie' => '?',
            'App\\Controller\\Admin\\RegistrationController::register' => '?',
            'App\\Controller\\Admin\\SecurityController::login' => '?',
            'App\\Controller\\Agriculteur\\AgriculteurController::editPerso' => '?',
            'App\\Controller\\Agriculteur\\AgriculteurController::profil' => '?',
            'App\\Controller\\Agriculteur\\CategorieController::delete' => '?',
            'App\\Controller\\Agriculteur\\CategorieController::deleteImage' => '?',
            'App\\Controller\\Agriculteur\\CategorieController::imageProd' => '?',
            'App\\Controller\\Agriculteur\\ResetPasswordController::request' => '?',
            'App\\Controller\\Agriculteur\\ResetPasswordController::reset' => '?',
            'App\\Controller\\ContactInfo\\ContactController::updateContact' => '?',
            'App\\Controller\\SecurityAdminController::login' => '?',
            'App\\Controller\\SecurityController::activation' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::registerAgri' => '?',
            'App\\Controller\\Trash\\RegistrationController::activation' => '?',
            'App\\Controller\\Trash\\RegistrationController::register' => '?',
            'App\\Controller\\VisiteurController::contact' => '?',
            'App\\Controller\\VisiteurController::footerAction' => '?',
            'App\\Controller\\VisiteurController::headerAction' => '?',
            'App\\Controller\\VisiteurController::home' => '?',
            'App\\Controller\\VisiteurController::listByCategorie' => '?',
            'App\\Controller\\VisiteurController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\AdminController:deleteCategorie' => '?',
            'App\\Controller\\Admin\\AgriculteurController:deleteAgri_admin' => '?',
            'App\\Controller\\Admin\\AgriculteurController:editAgriculteur_Admin' => '?',
            'App\\Controller\\Admin\\AgriculteurController:indexAgriculteurV' => '?',
            'App\\Controller\\Admin\\AgriculteurController:indexAriculteurA' => '?',
            'App\\Controller\\Admin\\AgriculteurController:new_Agriculteur' => '?',
            'App\\Controller\\Admin\\AgriculteurController:show' => '?',
            'App\\Controller\\Admin\\AgriculteurController:unnabledAgri' => '?',
            'App\\Controller\\Admin\\AgriculteurController:updateEtat' => '?',
            'App\\Controller\\Admin\\CategorieController:deleteCategorie' => '?',
            'App\\Controller\\Admin\\CategorieController:editCategorie' => '?',
            'App\\Controller\\Admin\\CategorieController:showCategorie' => '?',
            'App\\Controller\\Admin\\RegistrationController:register' => '?',
            'App\\Controller\\Admin\\SecurityController:login' => '?',
            'App\\Controller\\Agriculteur\\AgriculteurController:editPerso' => '?',
            'App\\Controller\\Agriculteur\\AgriculteurController:profil' => '?',
            'App\\Controller\\Agriculteur\\CategorieController:delete' => '?',
            'App\\Controller\\Agriculteur\\CategorieController:deleteImage' => '?',
            'App\\Controller\\Agriculteur\\CategorieController:imageProd' => '?',
            'App\\Controller\\Agriculteur\\ResetPasswordController:request' => '?',
            'App\\Controller\\Agriculteur\\ResetPasswordController:reset' => '?',
            'App\\Controller\\ContactInfo\\ContactController:updateContact' => '?',
            'App\\Controller\\SecurityAdminController:login' => '?',
            'App\\Controller\\SecurityController:activation' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:registerAgri' => '?',
            'App\\Controller\\Trash\\RegistrationController:activation' => '?',
            'App\\Controller\\Trash\\RegistrationController:register' => '?',
            'App\\Controller\\VisiteurController:contact' => '?',
            'App\\Controller\\VisiteurController:footerAction' => '?',
            'App\\Controller\\VisiteurController:headerAction' => '?',
            'App\\Controller\\VisiteurController:home' => '?',
            'App\\Controller\\VisiteurController:listByCategorie' => '?',
            'App\\Controller\\VisiteurController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]));
    }
}
