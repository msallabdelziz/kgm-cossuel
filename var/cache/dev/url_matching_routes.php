<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/affectations/liste' => [[['_route' => 'app_affecter_liste', '_controller' => 'App\\Controller\\AffectationsAgentsController::liste'], null, null, null, false, false, null]],
        '/agence' => [[['_route' => 'app_agence_index', '_controller' => 'App\\Controller\\AgenceController::index'], null, null, null, true, false, null]],
        '/agence/add' => [[['_route' => 'app_agence_add', '_controller' => 'App\\Controller\\AgenceController::create'], null, null, null, false, false, null]],
        '/agent' => [[['_route' => 'app_agent_index', '_controller' => 'App\\Controller\\AgentController::index'], null, null, null, true, false, null]],
        '/agent/add' => [[['_route' => 'app_agent_add', '_controller' => 'App\\Controller\\AgentController::create'], null, null, null, false, false, null]],
        '/departement' => [[['_route' => 'app_departement_index', '_controller' => 'App\\Controller\\DepartementController::index'], null, null, null, true, false, null]],
        '/electricien' => [[['_route' => 'app_electricien_index', '_controller' => 'App\\Controller\\ElectricienController::index'], null, ['GET' => 0], null, true, false, null]],
        '/electricien/add' => [[['_route' => 'app_electricien_add', '_controller' => 'App\\Controller\\ElectricienController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/installation' => [[['_route' => 'app_installation_index', '_controller' => 'App\\Controller\\InstallationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/installation/add' => [[['_route' => 'app_installation_add', '_controller' => 'App\\Controller\\InstallationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/installation/add2' => [[['_route' => 'app_installation_add2', '_controller' => 'App\\Controller\\InstallationController::new2'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/installation/add3' => [[['_route' => 'app_installation_add3', '_controller' => 'App\\Controller\\InstallationController::new3'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/installation/add4' => [[['_route' => 'app_installation_add4', '_controller' => 'App\\Controller\\InstallationController::new4'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/installation/add5' => [[['_route' => 'app_installation_add5', '_controller' => 'App\\Controller\\InstallationController::new5'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/installation/add6' => [[['_route' => 'app_installation_add6', '_controller' => 'App\\Controller\\InstallationController::new6'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/localite' => [[['_route' => 'app_localite_index', '_controller' => 'App\\Controller\\LocaliteController::index'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/nature/batiment' => [[['_route' => 'app_nature_batiment_index', '_controller' => 'App\\Controller\\NatureBatimentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/nature/batiment/add' => [[['_route' => 'app_nature_batiment_add', '_controller' => 'App\\Controller\\NatureBatimentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nature/travaux' => [[['_route' => 'app_nature_travaux_index', '_controller' => 'App\\Controller\\NatureTravauxController::index'], null, ['GET' => 0], null, true, false, null]],
        '/nature/travaux/add' => [[['_route' => 'app_nature_travaux_add', '_controller' => 'App\\Controller\\NatureTravauxController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/proprietaire' => [[['_route' => 'app_proprietaire_index', '_controller' => 'App\\Controller\\ProprietaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/proprietaire/add' => [[['_route' => 'app_proprietaire_add', '_controller' => 'App\\Controller\\ProprietaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/region' => [[['_route' => 'app_region_index', '_controller' => 'App\\Controller\\RegionController::index'], null, null, null, true, false, null]],
        '/region/add' => [[['_route' => 'app_region_add', '_controller' => 'App\\Controller\\RegionController::add'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/register_ok' => [[['_route' => 'app_register_ok', '_controller' => 'App\\Controller\\RegistrationController::registerOK'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/type/construction' => [[['_route' => 'app_type_construction_index', '_controller' => 'App\\Controller\\TypeConstructionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/construction/add' => [[['_route' => 'app_type_construction_add', '_controller' => 'App\\Controller\\TypeConstructionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateur/add' => [[['_route' => 'app_utilisateur_add', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|ffectations/a(?'
                        .'|gence/([^/]++)(*:204)'
                        .'|dd([^/]++)(*:222)'
                    .')'
                    .'|gen(?'
                        .'|ce/(?'
                            .'|update/([^/]++)(*:258)'
                            .'|show/([^/]++)(*:279)'
                            .'|delete/([^/]++)(*:302)'
                        .')'
                        .'|t/(?'
                            .'|update/([^/]++)(*:331)'
                            .'|affecter/([^/]++)(*:356)'
                            .'|show/([^/]++)(*:377)'
                            .'|delete/([^/]++)(*:400)'
                        .')'
                    .')'
                .')'
                .'|/departement/([^/]++)(?'
                    .'|/(?'
                        .'|add(*:442)'
                        .'|edit(*:454)'
                    .')'
                    .'|(*:463)'
                .')'
                .'|/electricien/([^/]++)(?'
                    .'|(*:496)'
                    .'|/edit(*:509)'
                    .'|(*:517)'
                .')'
                .'|/installation/([^/]++)(?'
                    .'|(*:551)'
                    .'|/edit(*:564)'
                    .'|(*:572)'
                .')'
                .'|/localite/([^/]++)(?'
                    .'|/(?'
                        .'|add(*:609)'
                        .'|edit(*:621)'
                    .')'
                    .'|(*:630)'
                .')'
                .'|/nature/(?'
                    .'|batiment/([^/]++)(?'
                        .'|(*:670)'
                        .'|/edit(*:683)'
                        .'|(*:691)'
                    .')'
                    .'|travaux/([^/]++)(?'
                        .'|(*:719)'
                        .'|/edit(*:732)'
                        .'|(*:740)'
                    .')'
                .')'
                .'|/proprietaire/([^/]++)(?'
                    .'|(*:775)'
                    .'|/edit(*:788)'
                    .'|(*:796)'
                .')'
                .'|/re(?'
                    .'|gion/([^/]++)(?'
                        .'|/edit(*:832)'
                        .'|(*:840)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:882)'
                .')'
                .'|/type/construction/([^/]++)(?'
                    .'|(*:921)'
                    .'|/edit(*:934)'
                    .'|(*:942)'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:975)'
                    .'|/edit(*:988)'
                    .'|(*:996)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        204 => [[['_route' => 'app_affecter_index', '_controller' => 'App\\Controller\\AffectationsAgentsController::formulaireAff'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'app_affecter_add', '_controller' => 'App\\Controller\\AffectationsAgentsController::create'], ['id'], null, null, false, true, null]],
        258 => [[['_route' => 'app_agence_edit', '_controller' => 'App\\Controller\\AgenceController::update'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'app_agence_show', '_controller' => 'App\\Controller\\AgenceController::show'], ['id'], null, null, false, true, null]],
        302 => [[['_route' => 'app_agence_delete', '_controller' => 'App\\Controller\\AgenceController::delete'], ['id'], null, null, false, true, null]],
        331 => [[['_route' => 'app_agent_edit', '_controller' => 'App\\Controller\\AgentController::update'], ['id'], null, null, false, true, null]],
        356 => [[['_route' => 'app_agent_affect', '_controller' => 'App\\Controller\\AgentController::affecter'], ['id'], null, null, false, true, null]],
        377 => [[['_route' => 'app_agent_show', '_controller' => 'App\\Controller\\AgentController::show'], ['id'], null, null, false, true, null]],
        400 => [[['_route' => 'app_agent_delete', '_controller' => 'App\\Controller\\AgentController::delete'], ['id'], null, null, false, true, null]],
        442 => [[['_route' => 'app_departement_add', '_controller' => 'App\\Controller\\DepartementController::add'], ['id'], null, null, false, false, null]],
        454 => [[['_route' => 'app_departement_edit', '_controller' => 'App\\Controller\\DepartementController::edit'], ['id'], null, null, false, false, null]],
        463 => [[['_route' => 'app_departement_show', '_controller' => 'App\\Controller\\DepartementController::show'], ['id'], null, null, false, true, null]],
        496 => [[['_route' => 'app_electricien_show', '_controller' => 'App\\Controller\\ElectricienController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        509 => [[['_route' => 'app_electricien_edit', '_controller' => 'App\\Controller\\ElectricienController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        517 => [[['_route' => 'app_electricien_delete', '_controller' => 'App\\Controller\\ElectricienController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        551 => [[['_route' => 'app_installation_show', '_controller' => 'App\\Controller\\InstallationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        564 => [[['_route' => 'app_installation_edit', '_controller' => 'App\\Controller\\InstallationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        572 => [[['_route' => 'app_installation_delete', '_controller' => 'App\\Controller\\InstallationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        609 => [[['_route' => 'app_localite_add', '_controller' => 'App\\Controller\\LocaliteController::add'], ['id'], null, null, false, false, null]],
        621 => [[['_route' => 'app_localite_edit', '_controller' => 'App\\Controller\\LocaliteController::edit'], ['id'], null, null, false, false, null]],
        630 => [[['_route' => 'app_localite_show', '_controller' => 'App\\Controller\\LocaliteController::show'], ['id'], null, null, false, true, null]],
        670 => [[['_route' => 'app_nature_batiment_show', '_controller' => 'App\\Controller\\NatureBatimentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        683 => [[['_route' => 'app_nature_batiment_edit', '_controller' => 'App\\Controller\\NatureBatimentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        691 => [[['_route' => 'app_nature_batiment_delete', '_controller' => 'App\\Controller\\NatureBatimentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        719 => [[['_route' => 'app_nature_travaux_show', '_controller' => 'App\\Controller\\NatureTravauxController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        732 => [[['_route' => 'app_nature_travaux_edit', '_controller' => 'App\\Controller\\NatureTravauxController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        740 => [[['_route' => 'app_nature_travaux_delete', '_controller' => 'App\\Controller\\NatureTravauxController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        775 => [[['_route' => 'app_proprietaire_show', '_controller' => 'App\\Controller\\ProprietaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        788 => [[['_route' => 'app_proprietaire_edit', '_controller' => 'App\\Controller\\ProprietaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        796 => [[['_route' => 'app_proprietaire_delete', '_controller' => 'App\\Controller\\ProprietaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        832 => [[['_route' => 'app_region_edit', '_controller' => 'App\\Controller\\RegionController::edit'], ['id'], null, null, false, false, null]],
        840 => [[['_route' => 'app_region_show', '_controller' => 'App\\Controller\\RegionController::show'], ['id'], null, null, false, true, null]],
        882 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        921 => [[['_route' => 'app_type_construction_show', '_controller' => 'App\\Controller\\TypeConstructionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        934 => [[['_route' => 'app_type_construction_edit', '_controller' => 'App\\Controller\\TypeConstructionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        942 => [[['_route' => 'app_type_construction_delete', '_controller' => 'App\\Controller\\TypeConstructionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        975 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        988 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        996 => [
            [['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
