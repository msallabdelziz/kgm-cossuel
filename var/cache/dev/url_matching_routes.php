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
        '/agence/create' => [[['_route' => 'app_agence_create', '_controller' => 'App\\Controller\\AgenceController::create'], null, null, null, false, false, null]],
        '/agent' => [[['_route' => 'app_agent_index', '_controller' => 'App\\Controller\\AgentController::index'], null, null, null, true, false, null]],
        '/agent/create' => [[['_route' => 'app_agent_create', '_controller' => 'App\\Controller\\AgentController::create'], null, null, null, false, false, null]],
        '/departement' => [[['_route' => 'app_departement_index', '_controller' => 'App\\Controller\\DepartementController::index'], null, null, null, true, false, null]],
        '/departement/add' => [[['_route' => 'app_departement_add', '_controller' => 'App\\Controller\\DepartementController::add'], null, null, null, false, false, null]],
        '/localite' => [[['_route' => 'app_localite_index', '_controller' => 'App\\Controller\\LocaliteController::index'], null, null, null, true, false, null]],
        '/localite/create' => [[['_route' => 'app_localite_create', '_controller' => 'App\\Controller\\LocaliteController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/region' => [[['_route' => 'app_region_index', '_controller' => 'App\\Controller\\RegionController::index'], null, null, null, true, false, null]],
        '/region/add' => [[['_route' => 'app_region_add', '_controller' => 'App\\Controller\\RegionController::add'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                    .'|ffectations/(?'
                        .'|agence/([^/]++)(*:204)'
                        .'|create([^/]++)(*:226)'
                    .')'
                    .'|gen(?'
                        .'|ce/(?'
                            .'|update/([^/]++)(*:262)'
                            .'|show/([^/]++)(*:283)'
                            .'|delete/([^/]++)(*:306)'
                        .')'
                        .'|t/(?'
                            .'|update/([^/]++)(*:335)'
                            .'|show/([^/]++)(*:356)'
                            .'|delete/([^/]++)(*:379)'
                        .')'
                    .')'
                .')'
                .'|/departement/([^/]++)(?'
                    .'|/edit(*:419)'
                    .'|(*:427)'
                .')'
                .'|/localite/(?'
                    .'|update/([^/]++)(*:464)'
                    .'|show/([^/]++)(*:485)'
                    .'|delete/([^/]++)(*:508)'
                .')'
                .'|/re(?'
                    .'|gion/([^/]++)(?'
                        .'|/edit(*:544)'
                        .'|(*:552)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:594)'
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
        226 => [[['_route' => 'app_affecter_create', '_controller' => 'App\\Controller\\AffectationsAgentsController::create'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'app_agence_update', '_controller' => 'App\\Controller\\AgenceController::update'], ['id'], null, null, false, true, null]],
        283 => [[['_route' => 'app_agence_show', '_controller' => 'App\\Controller\\AgenceController::show'], ['id'], null, null, false, true, null]],
        306 => [[['_route' => 'app_agence_delete', '_controller' => 'App\\Controller\\AgenceController::delete'], ['id'], null, null, false, true, null]],
        335 => [[['_route' => 'app_agent_update', '_controller' => 'App\\Controller\\AgentController::update'], ['id'], null, null, false, true, null]],
        356 => [[['_route' => 'app_agent_show', '_controller' => 'App\\Controller\\AgentController::show'], ['id'], null, null, false, true, null]],
        379 => [[['_route' => 'app_agent_delete', '_controller' => 'App\\Controller\\AgentController::delete'], ['id'], null, null, false, true, null]],
        419 => [[['_route' => 'app_departement_edit', '_controller' => 'App\\Controller\\DepartementController::edit'], ['slug'], null, null, false, false, null]],
        427 => [[['_route' => 'app_departement_show', '_controller' => 'App\\Controller\\DepartementController::show'], ['slug'], null, null, false, true, null]],
        464 => [[['_route' => 'app_localite_update', '_controller' => 'App\\Controller\\LocaliteController::update'], ['slug'], null, null, false, true, null]],
        485 => [[['_route' => 'app_localite_show', '_controller' => 'App\\Controller\\LocaliteController::show'], ['slug'], null, null, false, true, null]],
        508 => [[['_route' => 'app_localite_delete', '_controller' => 'App\\Controller\\LocaliteController::delete'], ['slug'], null, null, false, true, null]],
        544 => [[['_route' => 'app_region_edit', '_controller' => 'App\\Controller\\RegionController::edit'], ['slug'], null, null, false, false, null]],
        552 => [[['_route' => 'app_region_show', '_controller' => 'App\\Controller\\RegionController::show'], ['slug'], null, null, false, true, null]],
        594 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
