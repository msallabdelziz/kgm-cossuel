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
        '/client' => [[['_route' => 'app_client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'app_client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/departement' => [[['_route' => 'app_departement_index', '_controller' => 'App\\Controller\\DepartementController::index'], null, null, null, true, false, null]],
        '/departement/add' => [[['_route' => 'app_departement_add', '_controller' => 'App\\Controller\\DepartementController::add'], null, null, null, false, false, null]],
        '/installation' => [[['_route' => 'app_installation_index', '_controller' => 'App\\Controller\\InstallationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/installation/new' => [[['_route' => 'app_installation_new', '_controller' => 'App\\Controller\\InstallationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/client/([^/]++)(?'
                    .'|(*:188)'
                    .'|/edit(*:201)'
                    .'|(*:209)'
                .')'
                .'|/departement/([^/]++)(?'
                    .'|/edit(*:247)'
                    .'|(*:255)'
                .')'
                .'|/installation/([^/]++)(?'
                    .'|(*:289)'
                    .'|/edit(*:302)'
                    .'|(*:310)'
                .')'
                .'|/re(?'
                    .'|gion/([^/]++)(?'
                        .'|/edit(*:346)'
                        .'|(*:354)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:396)'
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
        188 => [[['_route' => 'app_client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'app_client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'app_client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        247 => [[['_route' => 'app_departement_edit', '_controller' => 'App\\Controller\\DepartementController::edit'], ['slug'], null, null, false, false, null]],
        255 => [[['_route' => 'app_departement_show', '_controller' => 'App\\Controller\\DepartementController::show'], ['slug'], null, null, false, true, null]],
        289 => [[['_route' => 'app_installation_show', '_controller' => 'App\\Controller\\InstallationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'app_installation_edit', '_controller' => 'App\\Controller\\InstallationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        310 => [[['_route' => 'app_installation_delete', '_controller' => 'App\\Controller\\InstallationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        346 => [[['_route' => 'app_region_edit', '_controller' => 'App\\Controller\\RegionController::edit'], ['slug'], null, null, false, false, null]],
        354 => [[['_route' => 'app_region_show', '_controller' => 'App\\Controller\\RegionController::show'], ['slug'], null, null, false, true, null]],
        396 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
