<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [
            [['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null],
            [['_route' => 'profil.admin', '_controller' => 'App\\Controller\\Admin\\AdminController::Profil'], null, null, null, true, false, null],
        ],
        '/admin/supprmier-mon-compte' => [[['_route' => 'deleteAdmin', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteCategorie'], null, null, null, true, false, null]],
        '/admin/producteur' => [[['_route' => 'allAgri.admin', '_controller' => 'App\\Controller\\Admin\\AgriculteurController::indexAgriculteurV'], null, null, null, true, false, null]],
        '/admin/producteur/en-attente' => [[['_route' => 'attAgri.admin', '_controller' => 'App\\Controller\\Admin\\AgriculteurController::indexAriculteurA'], null, null, null, false, false, null]],
        '/admin/producteur/historique' => [[['_route' => 'unnabledAgri.admin', '_controller' => 'App\\Controller\\Admin\\AgriculteurController::unnabledAgri'], null, null, null, false, false, null]],
        '/admin/producteur/ajout' => [[['_route' => 'addAgri.admin', '_controller' => 'App\\Controller\\Admin\\AgriculteurController::new_Agriculteur'], null, null, null, false, false, null]],
        '/admin/categorie/ajout_categorie' => [[['_route' => 'addCategorie.admin', '_controller' => 'App\\Controller\\Admin\\CategorieController::addCategorie'], null, null, null, false, false, null]],
        '/admin/categorie' => [[['_route' => 'showCategorie.admin', '_controller' => 'App\\Controller\\Admin\\CategorieController::showCategorie'], null, null, null, true, false, null]],
        '/admin/inscription_admin' => [[['_route' => 'app_register_admin', '_controller' => 'App\\Controller\\Admin\\RegistrationController::register'], null, null, null, false, false, null]],
        '/admin-connexion' => [[['_route' => 'app_login_admin', '_controller' => 'App\\Controller\\Admin\\SecurityController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'app_logout_admin', '_controller' => 'App\\Controller\\Admin\\SecurityController::logout'], null, null, null, false, false, null]],
        '/agriculteur' => [[['_route' => 'agriculteur_index', '_controller' => 'App\\Controller\\Agriculteur\\AgriculteurController::index'], null, null, null, true, false, null]],
        '/agriculteur/modification_profil' => [[['_route' => 'agriculteur_editProfil', '_controller' => 'App\\Controller\\Agriculteur\\AgriculteurController::editProfile'], null, null, null, false, false, null]],
        '/agriculteur/modification_mot-de-passe' => [[['_route' => 'agriculteur_editmdp', '_controller' => 'App\\Controller\\Agriculteur\\AgriculteurController::editPerso'], null, null, null, false, false, null]],
        '/agriculteur/votre-magasin' => [[['_route' => 'agriculteur_profil', '_controller' => 'App\\Controller\\Agriculteur\\AgriculteurController::profil'], null, null, null, false, false, null]],
        '/agriculteur/disponible' => [[['_route' => 'agriculteur_disponible', '_controller' => 'App\\Controller\\Agriculteur\\AgriculteurController::disponible'], null, null, null, false, false, null]],
        '/agriculteur/supprimer-profil' => [[['_route' => 'agriculteur_deleteProfil', '_controller' => 'App\\Controller\\Agriculteur\\AgriculteurController::deleteProfile'], null, null, null, false, false, null]],
        '/agriculteur/categorie' => [[['_route' => 'agriCategorie_index', '_controller' => 'App\\Controller\\Agriculteur\\CategorieController::index'], null, null, null, true, false, null]],
        '/reinitialisation-mot-de-passe' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\Agriculteur\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reinitialisation-mot-de-passe/email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\Agriculteur\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/admin/informations_contact' => [[['_route' => 'updateContact.admin', '_controller' => 'App\\Controller\\ContactInfo\\ContactController::updateContact'], null, null, null, false, false, null]],
        '/login-admin' => [[['_route' => 'app_loginAdmin', '_controller' => 'App\\Controller\\SecurityAdminController::login'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_registere', '_controller' => 'App\\Controller\\SecurityController::registerAgri'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'sitemap', '_format' => 'xml', '_controller' => 'App\\Controller\\SitemapController::index'], null, null, null, false, false, null]],
        '/agri/registration' => [[['_route' => 'app_registr', '_controller' => 'App\\Controller\\Trash\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\Trash\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\VisiteurController::home'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\VisiteurController::contact'], null, null, null, false, false, null]],
        '/mentions-legales' => [[['_route' => 'mention', '_controller' => 'App\\Controller\\VisiteurController::mentionsLegales'], null, null, null, false, false, null]],
        '/politique-de-confidentialité' => [[['_route' => 'politiqueConfidentialite', '_controller' => 'App\\Controller\\VisiteurController::politiqueConfidentialite'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|producteur/(?'
                            .'|([^/]++)(*:42)'
                            .'|modification(?'
                                .'|/([^/]++)(*:73)'
                                .'|\\-etat/(\\d+)(*:92)'
                            .')'
                            .'|suppression/([^/]++)(*:120)'
                        .')'
                        .'|categorie/(?'
                            .'|modifier_categorie/(\\d+)(*:166)'
                            .'|supprmier/(\\d+)(*:189)'
                        .')'
                    .')'
                    .'|griculteur/categorie(?'
                        .'|/(?'
                            .'|ajout_images/([^/]++)/(\\d+)/([^/]++)(*:262)'
                            .'|produit/supprimer_images/(\\d+)(*:300)'
                        .')'
                        .'|categorie/supprimer/(\\d+)(*:334)'
                    .')'
                    .'|ctivation/([^/]++)(*:361)'
                .')'
                .'|/reinitialisation\\-mot\\-de\\-passe/reinitialisation(?:/([^/]++))?(*:434)'
                .'|/categorie/([^/]++)(*:461)'
                .'|/producteur/([^/]++)/(\\d+)(*:495)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:557)'
                    .'|([A-z0-9_-]*)/(.+)(*:583)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'showAgri.admin', '_controller' => 'App\\Controller\\Admin\\AgriculteurController::show'], ['id'], null, null, false, true, null]],
        73 => [[['_route' => 'editAgri.admin', '_controller' => 'App\\Controller\\Admin\\AgriculteurController::editAgriculteur_Admin'], ['id'], null, null, false, true, null]],
        92 => [[['_route' => 'updateEtat', '_controller' => 'App\\Controller\\Admin\\AgriculteurController::updateEtat'], ['id'], null, null, false, true, null]],
        120 => [[['_route' => 'deleteAgri.admin', '_controller' => 'App\\Controller\\Admin\\AgriculteurController::deleteAgri_admin'], ['id'], null, null, false, true, null]],
        166 => [[['_route' => 'editCategorie.admin', '_controller' => 'App\\Controller\\Admin\\CategorieController::editCategorie'], ['id'], null, null, false, true, null]],
        189 => [[['_route' => 'deleteCategorie.admin', '_controller' => 'App\\Controller\\Admin\\CategorieController::deleteCategorie'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'agriCategorie_addImages', '_controller' => 'App\\Controller\\Agriculteur\\CategorieController::imageProd'], ['userCategorie', 'id', 'slug'], null, null, false, true, null]],
        300 => [[['_route' => 'agriCategorie_deleteImages', '_controller' => 'App\\Controller\\Agriculteur\\CategorieController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        334 => [[['_route' => 'agriCategorie_delete', '_controller' => 'App\\Controller\\Agriculteur\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        361 => [[['_route' => 'activation', '_controller' => 'App\\Controller\\Trash\\RegistrationController::activation'], ['token'], null, null, false, true, null]],
        434 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\Agriculteur\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        461 => [[['_route' => 'listAgriByCategorie', '_controller' => 'App\\Controller\\VisiteurController::listByCategorie'], ['categorie_name'], null, null, false, true, null]],
        495 => [[['_route' => 'showAgriVisiteur', '_controller' => 'App\\Controller\\VisiteurController::show'], ['name', 'id'], null, null, false, true, null]],
        557 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        583 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
