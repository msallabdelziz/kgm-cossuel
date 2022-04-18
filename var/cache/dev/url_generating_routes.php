<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
<<<<<<< HEAD
    'app_affecter_index' => [['id'], ['_controller' => 'App\\Controller\\AffectationsAgentsController::formulaireAff'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/affectations/agence']], [], [], []],
    'app_affecter_liste' => [[], ['_controller' => 'App\\Controller\\AffectationsAgentsController::liste'], [], [['text', '/affectations/liste']], [], [], []],
    'app_affecter_add' => [['id'], ['_controller' => 'App\\Controller\\AffectationsAgentsController::create'], [], [['variable', '', '[^/]++', 'id', true], ['text', '/affectations/add']], [], [], []],
    'app_agence_index' => [[], ['_controller' => 'App\\Controller\\AgenceController::index'], [], [['text', '/agence/']], [], [], []],
    'app_agence_add' => [[], ['_controller' => 'App\\Controller\\AgenceController::create'], [], [['text', '/agence/add']], [], [], []],
    'app_agence_edit' => [['id'], ['_controller' => 'App\\Controller\\AgenceController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/agence/update']], [], [], []],
    'app_agence_show' => [['id'], ['_controller' => 'App\\Controller\\AgenceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/agence/show']], [], [], []],
    'app_agence_delete' => [['id'], ['_controller' => 'App\\Controller\\AgenceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/agence/delete']], [], [], []],
    'app_agent_index' => [[], ['_controller' => 'App\\Controller\\AgentController::index'], [], [['text', '/agent/']], [], [], []],
    'app_agent_add' => [[], ['_controller' => 'App\\Controller\\AgentController::create'], [], [['text', '/agent/add']], [], [], []],
    'app_agent_edit' => [['id'], ['_controller' => 'App\\Controller\\AgentController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/agent/update']], [], [], []],
    'app_agent_affect' => [['id'], ['_controller' => 'App\\Controller\\AgentController::affecter'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/agent/affecter']], [], [], []],
    'app_agent_show' => [['id'], ['_controller' => 'App\\Controller\\AgentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/agent/show']], [], [], []],
    'app_agent_delete' => [['id'], ['_controller' => 'App\\Controller\\AgentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/agent/delete']], [], [], []],
    'app_departement_index' => [[], ['_controller' => 'App\\Controller\\DepartementController::index'], [], [['text', '/departement/']], [], [], []],
    'app_departement_add' => [['id'], ['_controller' => 'App\\Controller\\DepartementController::add'], [], [['text', '/add'], ['variable', '/', '[^/]++', 'id', true], ['text', '/departement']], [], [], []],
    'app_departement_edit' => [['id'], ['_controller' => 'App\\Controller\\DepartementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/departement']], [], [], []],
    'app_departement_show' => [['id'], ['_controller' => 'App\\Controller\\DepartementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/departement']], [], [], []],
    'app_electricien_index' => [[], ['_controller' => 'App\\Controller\\ElectricienController::index'], [], [['text', '/electricien/']], [], [], []],
    'app_electricien_add' => [[], ['_controller' => 'App\\Controller\\ElectricienController::new'], [], [['text', '/electricien/add']], [], [], []],
    'app_electricien_show' => [['id'], ['_controller' => 'App\\Controller\\ElectricienController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/electricien']], [], [], []],
    'app_electricien_edit' => [['id'], ['_controller' => 'App\\Controller\\ElectricienController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/electricien']], [], [], []],
    'app_electricien_delete' => [['id'], ['_controller' => 'App\\Controller\\ElectricienController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/electricien']], [], [], []],
    'app_installation_index' => [[], ['_controller' => 'App\\Controller\\InstallationController::index'], [], [['text', '/installation/']], [], [], []],
    'app_installation_add' => [[], ['_controller' => 'App\\Controller\\InstallationController::new'], [], [['text', '/installation/add']], [], [], []],
    'app_installation_add2' => [[], ['_controller' => 'App\\Controller\\InstallationController::new2'], [], [['text', '/installation/add2']], [], [], []],
    'app_installation_add3' => [[], ['_controller' => 'App\\Controller\\InstallationController::new3'], [], [['text', '/installation/add3']], [], [], []],
    'app_installation_add4' => [[], ['_controller' => 'App\\Controller\\InstallationController::new4'], [], [['text', '/installation/add4']], [], [], []],
    'app_installation_add5' => [[], ['_controller' => 'App\\Controller\\InstallationController::new5'], [], [['text', '/installation/add5']], [], [], []],
    'app_installation_add6' => [[], ['_controller' => 'App\\Controller\\InstallationController::new6'], [], [['text', '/installation/add6']], [], [], []],
    'app_installation_show' => [['id'], ['_controller' => 'App\\Controller\\InstallationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/installation']], [], [], []],
    'app_installation_edit' => [['id'], ['_controller' => 'App\\Controller\\InstallationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/installation']], [], [], []],
    'app_installation_delete' => [['id'], ['_controller' => 'App\\Controller\\InstallationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/installation']], [], [], []],
    'app_localite_index' => [[], ['_controller' => 'App\\Controller\\LocaliteController::index'], [], [['text', '/localite/']], [], [], []],
    'app_localite_add' => [['id'], ['_controller' => 'App\\Controller\\LocaliteController::add'], [], [['text', '/add'], ['variable', '/', '[^/]++', 'id', true], ['text', '/localite']], [], [], []],
    'app_localite_edit' => [['id'], ['_controller' => 'App\\Controller\\LocaliteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/localite']], [], [], []],
    'app_localite_show' => [['id'], ['_controller' => 'App\\Controller\\LocaliteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/localite']], [], [], []],
=======
    'app_client_index' => [[], ['_controller' => 'App\\Controller\\ClientController::index'], [], [['text', '/client/']], [], [], []],
    'app_client_new' => [[], ['_controller' => 'App\\Controller\\ClientController::new'], [], [['text', '/client/new']], [], [], []],
    'app_client_show' => [['id'], ['_controller' => 'App\\Controller\\ClientController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client']], [], [], []],
    'app_client_edit' => [['id'], ['_controller' => 'App\\Controller\\ClientController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/client']], [], [], []],
    'app_client_delete' => [['id'], ['_controller' => 'App\\Controller\\ClientController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client']], [], [], []],
    'app_departement_index' => [[], ['_controller' => 'App\\Controller\\DepartementController::index'], [], [['text', '/departement/']], [], [], []],
    'app_departement_add' => [[], ['_controller' => 'App\\Controller\\DepartementController::add'], [], [['text', '/departement/add']], [], [], []],
    'app_departement_edit' => [['slug'], ['_controller' => 'App\\Controller\\DepartementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/departement']], [], [], []],
    'app_departement_show' => [['slug'], ['_controller' => 'App\\Controller\\DepartementController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/departement']], [], [], []],
    'app_installation_index' => [[], ['_controller' => 'App\\Controller\\InstallationController::index'], [], [['text', '/installation/']], [], [], []],
    'app_installation_new' => [[], ['_controller' => 'App\\Controller\\InstallationController::new'], [], [['text', '/installation/new']], [], [], []],
    'app_installation_show' => [['id'], ['_controller' => 'App\\Controller\\InstallationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/installation']], [], [], []],
    'app_installation_edit' => [['id'], ['_controller' => 'App\\Controller\\InstallationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/installation']], [], [], []],
    'app_installation_delete' => [['id'], ['_controller' => 'App\\Controller\\InstallationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/installation']], [], [], []],
>>>>>>> 601003a06e4b3cb15c96b0485e6d0da65c68d0a0
    'main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], [], []],
    'app_nature_batiment_index' => [[], ['_controller' => 'App\\Controller\\NatureBatimentController::index'], [], [['text', '/nature/batiment/']], [], [], []],
    'app_nature_batiment_add' => [[], ['_controller' => 'App\\Controller\\NatureBatimentController::new'], [], [['text', '/nature/batiment/add']], [], [], []],
    'app_nature_batiment_show' => [['id'], ['_controller' => 'App\\Controller\\NatureBatimentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/nature/batiment']], [], [], []],
    'app_nature_batiment_edit' => [['id'], ['_controller' => 'App\\Controller\\NatureBatimentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/nature/batiment']], [], [], []],
    'app_nature_batiment_delete' => [['id'], ['_controller' => 'App\\Controller\\NatureBatimentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/nature/batiment']], [], [], []],
    'app_nature_travaux_index' => [[], ['_controller' => 'App\\Controller\\NatureTravauxController::index'], [], [['text', '/nature/travaux/']], [], [], []],
    'app_nature_travaux_add' => [[], ['_controller' => 'App\\Controller\\NatureTravauxController::new'], [], [['text', '/nature/travaux/add']], [], [], []],
    'app_nature_travaux_show' => [['id'], ['_controller' => 'App\\Controller\\NatureTravauxController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/nature/travaux']], [], [], []],
    'app_nature_travaux_edit' => [['id'], ['_controller' => 'App\\Controller\\NatureTravauxController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/nature/travaux']], [], [], []],
    'app_nature_travaux_delete' => [['id'], ['_controller' => 'App\\Controller\\NatureTravauxController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/nature/travaux']], [], [], []],
    'app_proprietaire_index' => [[], ['_controller' => 'App\\Controller\\ProprietaireController::index'], [], [['text', '/proprietaire/']], [], [], []],
    'app_proprietaire_add' => [[], ['_controller' => 'App\\Controller\\ProprietaireController::new'], [], [['text', '/proprietaire/add']], [], [], []],
    'app_proprietaire_show' => [['id'], ['_controller' => 'App\\Controller\\ProprietaireController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/proprietaire']], [], [], []],
    'app_proprietaire_edit' => [['id'], ['_controller' => 'App\\Controller\\ProprietaireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/proprietaire']], [], [], []],
    'app_proprietaire_delete' => [['id'], ['_controller' => 'App\\Controller\\ProprietaireController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/proprietaire']], [], [], []],
    'app_region_index' => [[], ['_controller' => 'App\\Controller\\RegionController::index'], [], [['text', '/region/']], [], [], []],
    'app_region_add' => [[], ['_controller' => 'App\\Controller\\RegionController::add'], [], [['text', '/region/add']], [], [], []],
    'app_region_edit' => [['id'], ['_controller' => 'App\\Controller\\RegionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/region']], [], [], []],
    'app_region_show' => [['id'], ['_controller' => 'App\\Controller\\RegionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/region']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_register_ok' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registerOK'], [], [['text', '/register_ok']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_type_construction_index' => [[], ['_controller' => 'App\\Controller\\TypeConstructionController::index'], [], [['text', '/type/construction/']], [], [], []],
    'app_type_construction_add' => [[], ['_controller' => 'App\\Controller\\TypeConstructionController::new'], [], [['text', '/type/construction/add']], [], [], []],
    'app_type_construction_show' => [['id'], ['_controller' => 'App\\Controller\\TypeConstructionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type/construction']], [], [], []],
    'app_type_construction_edit' => [['id'], ['_controller' => 'App\\Controller\\TypeConstructionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/type/construction']], [], [], []],
    'app_type_construction_delete' => [['id'], ['_controller' => 'App\\Controller\\TypeConstructionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type/construction']], [], [], []],
    'app_utilisateur_index' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur/']], [], [], []],
    'app_utilisateur_add' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::new'], [], [['text', '/utilisateur/add']], [], [], []],
    'app_utilisateur_show' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_edit' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_delete' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
];
