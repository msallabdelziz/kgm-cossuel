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
        '/agence/pdf' => [[['_route' => 'app_agence_pdf', '_controller' => 'App\\Controller\\AgenceController::pdf'], null, null, null, false, false, null]],
        '/agence/agence_excel' => [[['_route' => 'app_agence_excel', '_controller' => 'App\\Controller\\AgenceController::genExcel'], null, null, null, false, false, null]],
        '/agence/add' => [[['_route' => 'app_agence_add', '_controller' => 'App\\Controller\\AgenceController::create'], null, null, null, false, false, null]],
        '/agent' => [[['_route' => 'app_agent_index', '_controller' => 'App\\Controller\\AgentController::index'], null, null, null, true, false, null]],
        '/agent/agent_excel' => [[['_route' => 'app_agent_excel', '_controller' => 'App\\Controller\\AgentController::genExcel'], null, null, null, false, false, null]],
        '/agent/add' => [[['_route' => 'app_agent_add', '_controller' => 'App\\Controller\\AgentController::create'], null, null, null, false, false, null]],
        '/departement' => [[['_route' => 'app_departement_index', '_controller' => 'App\\Controller\\DepartementController::index'], null, null, null, true, false, null]],
        '/departement/load' => [[['_route' => 'app_departement_load', '_controller' => 'App\\Controller\\DepartementController::load'], null, null, null, false, false, null]],
        '/dossier/all' => [[['_route' => 'app_dossier_index0', '_controller' => 'App\\Controller\\DossierController::index0'], null, null, null, false, false, null]],
        '/dossier/affectation' => [[['_route' => 'app_dossier_affectation', '_controller' => 'App\\Controller\\DossierController::affectation_index'], null, null, null, false, false, null]],
        '/dossier/visite' => [[['_route' => 'app_dossier_visite', '_controller' => 'App\\Controller\\DossierController::visite_index'], null, null, null, false, false, null]],
        '/dossier/rapport' => [[['_route' => 'app_dossier_rapport', '_controller' => 'App\\Controller\\DossierController::rapport_index'], null, null, null, false, false, null]],
        '/dossier/attestation' => [[['_route' => 'app_dossier_attestation', '_controller' => 'App\\Controller\\DossierController::attestation_index'], null, null, null, false, false, null]],
        '/dossier/liste_excel' => [[['_route' => 'app_dossier_excel', '_controller' => 'App\\Controller\\DossierController::genExcel'], null, null, null, false, false, null]],
        '/dossier/cloture' => [[['_route' => 'app_dossier_cloture', '_controller' => 'App\\Controller\\DossierController::cloture_index'], null, null, null, false, false, null]],
        '/electricien' => [[['_route' => 'app_electricien_index', '_controller' => 'App\\Controller\\ElectricienController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/electricien/electricien_excel' => [[['_route' => 'app_electricien_excel', '_controller' => 'App\\Controller\\ElectricienController::genExcel'], null, null, null, false, false, null]],
        '/electricien/add' => [[['_route' => 'app_electricien_add', '_controller' => 'App\\Controller\\ElectricienController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/installation/all' => [[['_route' => 'app_installation_index0', '_controller' => 'App\\Controller\\InstallationController::index0'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/installation/soumission' => [[['_route' => 'app_installation_index', '_controller' => 'App\\Controller\\InstallationController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/installation/paiement' => [[['_route' => 'app_installation_index2', '_controller' => 'App\\Controller\\InstallationController::index2'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/installation/validation' => [[['_route' => 'app_installation_index3', '_controller' => 'App\\Controller\\InstallationController::index3'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/installation/liste_excel' => [[['_route' => 'app_installation_excel', '_controller' => 'App\\Controller\\InstallationController::genExcel'], null, null, null, false, false, null]],
        '/localite' => [[['_route' => 'app_localite_index', '_controller' => 'App\\Controller\\LocaliteController::index'], null, null, null, true, false, null]],
        '/localite/load' => [[['_route' => 'app_localite_load', '_controller' => 'App\\Controller\\LocaliteController::load'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/statistiques' => [[['_route' => 'stat', '_controller' => 'App\\Controller\\MainController::stat_demande'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/stat_excel' => [[['_route' => 'stat_excel', '_controller' => 'App\\Controller\\MainController::genExcel'], null, null, null, false, false, null]],
        '/nature/batiment' => [[['_route' => 'app_nature_batiment_index', '_controller' => 'App\\Controller\\NatureBatimentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/nature/batiment/add' => [[['_route' => 'app_nature_batiment_add', '_controller' => 'App\\Controller\\NatureBatimentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nature/travaux' => [[['_route' => 'app_nature_travaux_index', '_controller' => 'App\\Controller\\NatureTravauxController::index'], null, ['GET' => 0], null, true, false, null]],
        '/nature/travaux/add' => [[['_route' => 'app_nature_travaux_add', '_controller' => 'App\\Controller\\NatureTravauxController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/paiement/journal_caisse' => [[['_route' => 'app_paiement_journal', '_controller' => 'App\\Controller\\PaiementController::index'], null, null, null, false, false, null]],
        '/paiement/histo_paiement' => [[['_route' => 'app_paiement_histo', '_controller' => 'App\\Controller\\PaiementController::histo_paiement'], null, null, null, false, false, null]],
        '/pointNonconf' => [[['_route' => 'app_pointnonconf_index', '_controller' => 'App\\Controller\\PointNonconfController::index'], null, null, null, true, false, null]],
        '/pointVerification' => [[['_route' => 'app_pointverification_index', '_controller' => 'App\\Controller\\PointVerificationController::index'], null, null, null, true, false, null]],
        '/proprietaire' => [[['_route' => 'app_proprietaire_index', '_controller' => 'App\\Controller\\ProprietaireController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/proprietaire/proprietaire_excel' => [[['_route' => 'app_proprietaire_excel', '_controller' => 'App\\Controller\\ProprietaireController::genExcel'], null, null, null, false, false, null]],
        '/proprietaire/add' => [[['_route' => 'app_proprietaire_add', '_controller' => 'App\\Controller\\ProprietaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rapport' => [[['_route' => 'app_rapport_index', '_controller' => 'App\\Controller\\RapportController::index'], null, null, null, true, false, null]],
        '/rapport/add' => [[['_route' => 'app_rapport_add', '_controller' => 'App\\Controller\\RapportController::add'], null, null, null, false, false, null]],
        '/region' => [[['_route' => 'app_region_index', '_controller' => 'App\\Controller\\RegionController::index'], null, null, null, true, false, null]],
        '/region/add' => [[['_route' => 'app_region_add', '_controller' => 'App\\Controller\\RegionController::add'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/register_ok' => [[['_route' => 'app_register_ok', '_controller' => 'App\\Controller\\RegistrationController::registerOK'], null, null, null, false, false, null]],
        '/register_confirm' => [[['_route' => 'app_register_confirm', '_controller' => 'App\\Controller\\RegistrationController::registerConfirm'], null, null, null, false, false, null]],
        '/register_confirm2' => [[['_route' => 'app_register_confirm2', '_controller' => 'App\\Controller\\RegistrationController::sendEmailVerification'], null, null, null, false, false, null]],
        '/remboursement/all' => [[['_route' => 'app_remboursement_index', '_controller' => 'App\\Controller\\RemboursementController::index'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/rubrique' => [[['_route' => 'app_rubrique_index', '_controller' => 'App\\Controller\\RubriqueController::index'], null, null, null, true, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/type/construction' => [[['_route' => 'app_type_construction_index', '_controller' => 'App\\Controller\\TypeConstructionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/construction/add' => [[['_route' => 'app_type_construction_add', '_controller' => 'App\\Controller\\TypeConstructionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/utilisateur/add' => [[['_route' => 'app_utilisateur_add', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur/moncompte' => [[['_route' => 'app_utilisateur_moncompte', '_controller' => 'App\\Controller\\UtilisateurController::connected'], null, null, null, false, false, null]],
        '/utilisateur/editPassword' => [[['_route' => 'app_utilisateur_password', '_controller' => 'App\\Controller\\UtilisateurController::editPass'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:35)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:73)'
                    .'|wdt/([^/]++)(*:92)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:137)'
                            .'|router(*:151)'
                            .'|exception(?'
                                .'|(*:171)'
                                .'|\\.css(*:184)'
                            .')'
                        .')'
                        .'|(*:194)'
                    .')'
                .')'
                .'|/a(?'
                    .'|ffectations/a(?'
                        .'|gence/([^/]++)(*:239)'
                        .'|dd([^/]++)(*:257)'
                    .')'
                    .'|gen(?'
                        .'|ce(?'
                            .'|/(?'
                                .'|update/([^/]++)(*:296)'
                                .'|localite/([^/]++)(*:321)'
                            .')'
                            .'|([^/]++)/dellocalite/([^/]++)(*:359)'
                            .'|/(?'
                                .'|show/([^/]++)(*:384)'
                                .'|delete/([^/]++)(*:407)'
                            .')'
                        .')'
                        .'|t/(?'
                            .'|update/([^/]++)(*:437)'
                            .'|affecter/([^/]++)(*:462)'
                            .'|de(?'
                                .'|saffecter/([^/]++)(*:493)'
                                .'|lete/([^/]++)(*:514)'
                            .')'
                            .'|show/([^/]++)(*:536)'
                            .'|createuser/([^/]++)(*:563)'
                        .')'
                    .')'
                .')'
                .'|/d(?'
                    .'|e(?'
                        .'|mande(?'
                            .'|/(?'
                                .'|([^/]++)(*:603)'
                                .'|pop/([^/]++)(*:623)'
                                .'|([^/]++)/(?'
                                    .'|histo(*:648)'
                                    .'|valid(*:661)'
                                    .'|edit(?'
                                        .'|1(*:677)'
                                        .'|2(*:686)'
                                        .'|3(*:695)'
                                    .')'
                                .')'
                            .')'
                            .'|pop/([^/]++)(*:718)'
                        .')'
                        .'|partement/([^/]++)(?'
                            .'|/(?'
                                .'|add(*:755)'
                                .'|edit(*:767)'
                            .')'
                            .'|(*:776)'
                        .')'
                    .')'
                    .'|ossier/(?'
                        .'|([^/]++)(?'
                            .'|/rapport(*:815)'
                            .'|(*:823)'
                        .')'
                        .'|pop/([^/]++)(*:844)'
                        .'|([^/]++)/(?'
                            .'|histo(*:869)'
                            .'|a(?'
                                .'|tt(?'
                                    .'|ribuer(*:892)'
                                    .'|est(?'
                                        .'|er(*:908)'
                                        .'|pdf(*:919)'
                                        .'|0pdf(*:931)'
                                    .')'
                                .')'
                                .'|ffecter(*:948)'
                            .')'
                            .'|desaffecter(*:968)'
                            .'|visiter(*:983)'
                            .'|r(?'
                                .'|e(?'
                                    .'|visiter(*:1006)'
                                    .'|jetrapport(*:1025)'
                                .')'
                                .'|apport(?'
                                    .'|er(*:1046)'
                                    .'|pdf(*:1058)'
                                .')'
                            .')'
                            .'|showpdf(*:1076)'
                        .')'
                    .')'
                .')'
                .'|/electricien/([^/]++)(?'
                    .'|(*:1112)'
                    .'|/edit(*:1126)'
                    .'|(*:1135)'
                .')'
                .'|/installation/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|pdf(*:1180)'
                            .'|renew(*:1194)'
                            .'|clone(*:1208)'
                            .'|add(?'
                                .'|fromE/([^/]++)(*:1237)'
                                .'|(*:1246)'
                                .'|2(*:1256)'
                                .'|3(*:1266)'
                                .'|4(*:1276)'
                                .'|5(*:1286)'
                                .'|6(*:1296)'
                            .')'
                        .')'
                        .'|(*:1307)'
                    .')'
                    .'|pop/([^/]++)(*:1329)'
                    .'|([^/]++)/(?'
                        .'|accepte(?'
                            .'|0(*:1361)'
                            .'|1(*:1371)'
                        .')'
                        .'|edit(*:1385)'
                        .'|d(?'
                            .'|elinst(*:1404)'
                            .'|ownloadpj/([^/]++)(*:1431)'
                        .')'
                        .'|showpdf(?'
                            .'|0(*:1452)'
                            .'|(*:1461)'
                        .')'
                        .'|facturepdf(?'
                            .'|0(*:1485)'
                            .'|(*:1494)'
                        .')'
                        .'|recupdf(?'
                            .'|0(*:1515)'
                            .'|(*:1524)'
                        .')'
                    .')'
                    .'|download(*:1543)'
                .')'
                .'|/localite/([^/]++)(?'
                    .'|/(?'
                        .'|add(*:1581)'
                        .'|edit(*:1594)'
                    .')'
                    .'|(*:1604)'
                .')'
                .'|/nature/(?'
                    .'|batiment/([^/]++)(?'
                        .'|(*:1645)'
                        .'|/edit(*:1659)'
                        .'|(*:1668)'
                    .')'
                    .'|travaux/([^/]++)(?'
                        .'|(*:1697)'
                        .'|/edit(*:1711)'
                        .'|(*:1720)'
                    .')'
                .')'
                .'|/p(?'
                    .'|aiement/(?'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|add(?'
                                    .'|(*:1768)'
                                    .'|2(*:1778)'
                                .')'
                                .'|modif(*:1793)'
                            .')'
                            .'|(*:1803)'
                        .')'
                        .'|pop/([^/]++)(*:1825)'
                    .')'
                    .'|oint(?'
                        .'|Nonconf/([^/]++)(?'
                            .'|/(?'
                                .'|add(*:1868)'
                                .'|edit(*:1881)'
                            .')'
                            .'|(*:1891)'
                        .')'
                        .'|Verification/([^/]++)(?'
                            .'|/(?'
                                .'|add(*:1932)'
                                .'|edit(*:1945)'
                            .')'
                            .'|(*:1955)'
                        .')'
                    .')'
                    .'|roprietaire/([^/]++)(?'
                        .'|(*:1989)'
                        .'|/edit(*:2003)'
                        .'|(*:2012)'
                    .')'
                .')'
                .'|/r(?'
                    .'|apport/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:2054)'
                            .'|showpdf(*:2070)'
                        .')'
                        .'|(*:2080)'
                    .')'
                    .'|e(?'
                        .'|gion/([^/]++)(?'
                            .'|/edit(*:2115)'
                            .'|(*:2124)'
                        .')'
                        .'|mboursement/(?'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|add(?'
                                        .'|(*:2170)'
                                        .'|2(*:2180)'
                                    .')'
                                    .'|rejet(*:2195)'
                                .')'
                                .'|(*:2205)'
                            .')'
                            .'|pop/([^/]++)(*:2227)'
                        .')'
                        .'|set\\-password/reset(?:/([^/]++))?(*:2270)'
                    .')'
                    .'|ubrique/([^/]++)(?'
                        .'|/(?'
                            .'|add(*:2306)'
                            .'|edit(*:2319)'
                        .')'
                        .'|(*:2329)'
                    .')'
                .')'
                .'|/type/construction/([^/]++)(?'
                    .'|(*:2370)'
                    .'|/edit(*:2384)'
                    .'|(*:2393)'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:2427)'
                    .'|/(?'
                        .'|edit(*:2444)'
                        .'|resetpass(*:2462)'
                        .'|activer(*:2478)'
                    .')'
                    .'|(*:2488)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        73 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        92 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        137 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        151 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        171 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        184 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        194 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        239 => [[['_route' => 'app_affecter_index', '_controller' => 'App\\Controller\\AffectationsAgentsController::formulaireAff'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'app_affecter_add', '_controller' => 'App\\Controller\\AffectationsAgentsController::create'], ['id'], null, null, false, true, null]],
        296 => [[['_route' => 'app_agence_edit', '_controller' => 'App\\Controller\\AgenceController::update'], ['id'], null, null, false, true, null]],
        321 => [[['_route' => 'app_agence_localite', '_controller' => 'App\\Controller\\AgenceController::addlocalite'], ['id'], null, null, false, true, null]],
        359 => [[['_route' => 'app_agence_localitedel', '_controller' => 'App\\Controller\\AgenceController::dellocalite'], ['id', 'idL'], null, null, false, true, null]],
        384 => [[['_route' => 'app_agence_show', '_controller' => 'App\\Controller\\AgenceController::show'], ['id'], null, null, false, true, null]],
        407 => [[['_route' => 'app_agence_delete', '_controller' => 'App\\Controller\\AgenceController::delete'], ['id'], null, null, false, true, null]],
        437 => [[['_route' => 'app_agent_edit', '_controller' => 'App\\Controller\\AgentController::update'], ['id'], null, null, false, true, null]],
        462 => [[['_route' => 'app_agent_affect', '_controller' => 'App\\Controller\\AgentController::affecter'], ['id'], null, null, false, true, null]],
        493 => [[['_route' => 'app_agent_desaffect', '_controller' => 'App\\Controller\\AgentController::desaffecter'], ['id'], null, null, false, true, null]],
        514 => [[['_route' => 'app_agent_delete', '_controller' => 'App\\Controller\\AgentController::delete'], ['id'], null, null, false, true, null]],
        536 => [[['_route' => 'app_agent_show', '_controller' => 'App\\Controller\\AgentController::show'], ['id'], null, null, false, true, null]],
        563 => [[['_route' => 'app_agent_createuser', '_controller' => 'App\\Controller\\AgentController::createuser'], ['id'], null, null, false, true, null]],
        603 => [[['_route' => 'app_demande_show', '_controller' => 'App\\Controller\\DemandeController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        623 => [[['_route' => 'app_demande_showpop', '_controller' => 'App\\Controller\\DemandeController::showpop'], ['id'], ['GET' => 0], null, false, true, null]],
        648 => [[['_route' => 'app_demande_histo', '_controller' => 'App\\Controller\\DemandeController::showtime'], ['id'], ['GET' => 0], null, false, false, null]],
        661 => [[['_route' => 'app_demande_valid', '_controller' => 'App\\Controller\\DemandeController::valid'], ['id'], null, null, false, false, null]],
        677 => [[['_route' => 'app_installation_edit1', '_controller' => 'App\\Controller\\DemandeController::edit1'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        686 => [[['_route' => 'app_installation_edit2', '_controller' => 'App\\Controller\\DemandeController::edit2'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        695 => [[['_route' => 'app_installation_edit3', '_controller' => 'App\\Controller\\DemandeController::edit3'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        718 => [[['_route' => 'main_demandepop', '_controller' => 'App\\Controller\\MainController::demandepop'], ['restr'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        755 => [[['_route' => 'app_departement_add', '_controller' => 'App\\Controller\\DepartementController::add'], ['id'], null, null, false, false, null]],
        767 => [[['_route' => 'app_departement_edit', '_controller' => 'App\\Controller\\DepartementController::edit'], ['id'], null, null, false, false, null]],
        776 => [[['_route' => 'app_departement_show', '_controller' => 'App\\Controller\\DepartementController::show'], ['id'], null, null, false, true, null]],
        815 => [[['_route' => 'app_dossier_showrapp', '_controller' => 'App\\Controller\\DossierController::showrapport'], ['id'], ['GET' => 0], null, false, false, null]],
        823 => [[['_route' => 'app_dossier_show', '_controller' => 'App\\Controller\\DossierController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        844 => [[['_route' => 'app_dossier_showpop', '_controller' => 'App\\Controller\\DossierController::showpop'], ['id'], ['GET' => 0], null, false, true, null]],
        869 => [[['_route' => 'app_dossier_histo', '_controller' => 'App\\Controller\\DossierController::showtime'], ['id'], ['GET' => 0], null, false, false, null]],
        892 => [[['_route' => 'app_dossier_attribuer', '_controller' => 'App\\Controller\\DossierController::attribuer'], ['id'], null, null, false, false, null]],
        908 => [[['_route' => 'app_dossier_attester', '_controller' => 'App\\Controller\\DossierController::attester'], ['id'], null, null, false, false, null]],
        919 => [[['_route' => 'app_attestation_showpdf', '_controller' => 'App\\Controller\\DossierController::pdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        931 => [[['_route' => 'app_attestation_showpdf0', '_controller' => 'App\\Controller\\DossierController::pdf0'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        948 => [[['_route' => 'app_dossier_affecter', '_controller' => 'App\\Controller\\DossierController::affecter'], ['id'], null, null, false, false, null]],
        968 => [[['_route' => 'app_dossier_desaffecter', '_controller' => 'App\\Controller\\DossierController::desaffecter'], ['id'], null, null, false, false, null]],
        983 => [[['_route' => 'app_dossier_visiter', '_controller' => 'App\\Controller\\DossierController::visiter'], ['id'], null, null, false, false, null]],
        1006 => [[['_route' => 'app_dossier_revisiter', '_controller' => 'App\\Controller\\DossierController::revisiter'], ['id'], null, null, false, false, null]],
        1025 => [[['_route' => 'app_dossier_rejetrapport', '_controller' => 'App\\Controller\\DossierController::rejetrapport'], ['id'], null, null, false, false, null]],
        1046 => [[['_route' => 'app_dossier_rapporter', '_controller' => 'App\\Controller\\DossierController::rapporter'], ['id'], null, null, false, false, null]],
        1058 => [[['_route' => 'app_dossier_rapportpdf', '_controller' => 'App\\Controller\\DossierController::rapportpdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1076 => [[['_route' => 'app_attestation_showpdf00', '_controller' => 'App\\Controller\\DossierController::showpdf'], ['id'], ['GET' => 0], null, false, false, null]],
        1112 => [[['_route' => 'app_electricien_show', '_controller' => 'App\\Controller\\ElectricienController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1126 => [[['_route' => 'app_electricien_edit', '_controller' => 'App\\Controller\\ElectricienController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1135 => [[['_route' => 'app_electricien_delete', '_controller' => 'App\\Controller\\ElectricienController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1180 => [[['_route' => 'app_installation_showpdf', '_controller' => 'App\\Controller\\InstallationController::pdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1194 => [[['_route' => 'app_installation_renew', '_controller' => 'App\\Controller\\InstallationController::addrenew'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1208 => [[['_route' => 'app_installation_clone', '_controller' => 'App\\Controller\\InstallationController::addclone'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1237 => [[['_route' => 'app_installation_addfromE', '_controller' => 'App\\Controller\\InstallationController::newfromE'], ['id', 'idE'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1246 => [[['_route' => 'app_installation_add', '_controller' => 'App\\Controller\\InstallationController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1256 => [[['_route' => 'app_installation_add2', '_controller' => 'App\\Controller\\InstallationController::new2'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1266 => [[['_route' => 'app_installation_add3', '_controller' => 'App\\Controller\\InstallationController::new3'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1276 => [[['_route' => 'app_installation_add4', '_controller' => 'App\\Controller\\InstallationController::new4'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1286 => [[['_route' => 'app_installation_add5', '_controller' => 'App\\Controller\\InstallationController::new5'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1296 => [[['_route' => 'app_installation_add6', '_controller' => 'App\\Controller\\InstallationController::new6'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1307 => [[['_route' => 'app_installation_show', '_controller' => 'App\\Controller\\InstallationController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1329 => [[['_route' => 'app_installation_showpop', '_controller' => 'App\\Controller\\InstallationController::showpop'], ['id'], ['GET' => 0], null, false, true, null]],
        1361 => [[['_route' => 'app_installation_accepte0', '_controller' => 'App\\Controller\\InstallationController::accepte0'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1371 => [[['_route' => 'app_installation_accepte1', '_controller' => 'App\\Controller\\InstallationController::accepte1'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1385 => [[['_route' => 'app_installation_edit', '_controller' => 'App\\Controller\\InstallationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1404 => [[['_route' => 'app_installation_delete', '_controller' => 'App\\Controller\\InstallationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1431 => [[['_route' => 'app_installation_downloadpj', '_controller' => 'App\\Controller\\InstallationController::downloadFileAction'], ['id', 'type'], ['GET' => 0], null, false, true, null]],
        1452 => [[['_route' => 'app_installation_showpdf0', '_controller' => 'App\\Controller\\InstallationController::showpdf0'], ['id'], ['GET' => 0], null, false, false, null]],
        1461 => [[['_route' => 'app_installation_showpdf1', '_controller' => 'App\\Controller\\InstallationController::showpdf'], ['id'], ['GET' => 0], null, false, false, null]],
        1485 => [[['_route' => 'app_installation_facturepdf0', '_controller' => 'App\\Controller\\InstallationController::facturepdf0'], ['id'], ['GET' => 0], null, false, false, null]],
        1494 => [[['_route' => 'app_installation_facturepdf', '_controller' => 'App\\Controller\\InstallationController::facturepdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1515 => [[['_route' => 'app_installation_recupdf0', '_controller' => 'App\\Controller\\InstallationController::recupdf0'], ['id'], ['GET' => 0], null, false, false, null]],
        1524 => [[['_route' => 'app_installation_recupdf', '_controller' => 'App\\Controller\\InstallationController::recupdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1543 => [[['_route' => 'download_file', '_controller' => 'App\\Controller\\InstallationController::downloadFileAction'], [], null, null, false, false, null]],
        1581 => [[['_route' => 'app_localite_add', '_controller' => 'App\\Controller\\LocaliteController::add'], ['id'], null, null, false, false, null]],
        1594 => [[['_route' => 'app_localite_edit', '_controller' => 'App\\Controller\\LocaliteController::edit'], ['id'], null, null, false, false, null]],
        1604 => [[['_route' => 'app_localite_show', '_controller' => 'App\\Controller\\LocaliteController::show'], ['id'], null, null, false, true, null]],
        1645 => [[['_route' => 'app_nature_batiment_show', '_controller' => 'App\\Controller\\NatureBatimentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1659 => [[['_route' => 'app_nature_batiment_edit', '_controller' => 'App\\Controller\\NatureBatimentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1668 => [[['_route' => 'app_nature_batiment_delete', '_controller' => 'App\\Controller\\NatureBatimentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1697 => [[['_route' => 'app_nature_travaux_show', '_controller' => 'App\\Controller\\NatureTravauxController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1711 => [[['_route' => 'app_nature_travaux_edit', '_controller' => 'App\\Controller\\NatureTravauxController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1720 => [[['_route' => 'app_nature_travaux_delete', '_controller' => 'App\\Controller\\NatureTravauxController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1768 => [[['_route' => 'app_paiement_add', '_controller' => 'App\\Controller\\PaiementController::add'], ['id'], null, null, false, false, null]],
        1778 => [[['_route' => 'app_paiement_add2', '_controller' => 'App\\Controller\\PaiementController::add2'], ['id'], null, null, false, false, null]],
        1793 => [[['_route' => 'app_paiement_modif', '_controller' => 'App\\Controller\\PaiementController::modif'], ['id'], null, null, false, false, null]],
        1803 => [[['_route' => 'app_paiement_show', '_controller' => 'App\\Controller\\PaiementController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1825 => [[['_route' => 'app_paiement_showpop', '_controller' => 'App\\Controller\\PaiementController::showpop'], ['id'], ['GET' => 0], null, false, true, null]],
        1868 => [[['_route' => 'app_pointnonconf_add', '_controller' => 'App\\Controller\\PointNonconfController::add'], ['id'], null, null, false, false, null]],
        1881 => [[['_route' => 'app_pointnonconf_edit', '_controller' => 'App\\Controller\\PointNonconfController::edit'], ['id'], null, null, false, false, null]],
        1891 => [[['_route' => 'app_pointnonconf_show', '_controller' => 'App\\Controller\\PointNonconfController::show'], ['id'], null, null, false, true, null]],
        1932 => [[['_route' => 'app_pointverification_add', '_controller' => 'App\\Controller\\PointVerificationController::add'], ['id'], null, null, false, false, null]],
        1945 => [[['_route' => 'app_pointverification_edit', '_controller' => 'App\\Controller\\PointVerificationController::edit'], ['id'], null, null, false, false, null]],
        1955 => [[['_route' => 'app_pointverification_show', '_controller' => 'App\\Controller\\PointVerificationController::show'], ['id'], null, null, false, true, null]],
        1989 => [[['_route' => 'app_proprietaire_show', '_controller' => 'App\\Controller\\ProprietaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2003 => [[['_route' => 'app_proprietaire_edit', '_controller' => 'App\\Controller\\ProprietaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2012 => [[['_route' => 'app_proprietaire_delete', '_controller' => 'App\\Controller\\ProprietaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2054 => [[['_route' => 'app_rapport_edit', '_controller' => 'App\\Controller\\RapportController::edit'], ['id'], null, null, false, false, null]],
        2070 => [[['_route' => 'app_rapport_showpdf', '_controller' => 'App\\Controller\\RapportController::show'], ['id'], null, null, false, false, null]],
        2080 => [[['_route' => 'app_rapport_show', '_controller' => 'App\\Controller\\RapportController::showpdf'], ['id'], null, null, false, true, null]],
        2115 => [[['_route' => 'app_region_edit', '_controller' => 'App\\Controller\\RegionController::edit'], ['id'], null, null, false, false, null]],
        2124 => [[['_route' => 'app_region_show', '_controller' => 'App\\Controller\\RegionController::show'], ['id'], null, null, false, true, null]],
        2170 => [[['_route' => 'app_remboursement_add', '_controller' => 'App\\Controller\\RemboursementController::add'], ['id'], null, null, false, false, null]],
        2180 => [[['_route' => 'app_remboursement_add2', '_controller' => 'App\\Controller\\RemboursementController::add2'], ['id'], null, null, false, false, null]],
        2195 => [[['_route' => 'app_remboursement_rejet', '_controller' => 'App\\Controller\\RemboursementController::rejet'], ['id'], null, null, false, false, null]],
        2205 => [[['_route' => 'app_remboursement_show', '_controller' => 'App\\Controller\\RemboursementController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2227 => [[['_route' => 'app_remboursement_showpop', '_controller' => 'App\\Controller\\RemboursementController::showpop'], ['id'], ['GET' => 0], null, false, true, null]],
        2270 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        2306 => [[['_route' => 'app_rubrique_add', '_controller' => 'App\\Controller\\RubriqueController::add'], ['id'], null, null, false, false, null]],
        2319 => [[['_route' => 'app_rubrique_edit', '_controller' => 'App\\Controller\\RubriqueController::edit'], ['id'], null, null, false, false, null]],
        2329 => [[['_route' => 'app_rubrique_show', '_controller' => 'App\\Controller\\RubriqueController::show'], ['id'], null, null, false, true, null]],
        2370 => [[['_route' => 'app_type_construction_show', '_controller' => 'App\\Controller\\TypeConstructionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2384 => [[['_route' => 'app_type_construction_edit', '_controller' => 'App\\Controller\\TypeConstructionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2393 => [[['_route' => 'app_type_construction_delete', '_controller' => 'App\\Controller\\TypeConstructionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2427 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2444 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2462 => [[['_route' => 'app_utilisateur_resetpass', '_controller' => 'App\\Controller\\UtilisateurController::resetpass'], ['id'], ['GET' => 0], null, false, false, null]],
        2478 => [[['_route' => 'app_utilisateur_activer', '_controller' => 'App\\Controller\\UtilisateurController::activer'], ['id'], ['GET' => 0], null, false, false, null]],
        2488 => [
            [['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
