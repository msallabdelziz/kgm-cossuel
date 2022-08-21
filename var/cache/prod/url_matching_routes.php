<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/a(?'
                    .'|ffectations/a(?'
                        .'|gence/([^/]++)(*:77)'
                        .'|dd([^/]++)(*:94)'
                    .')'
                    .'|gen(?'
                        .'|ce(?'
                            .'|/(?'
                                .'|update/([^/]++)(*:132)'
                                .'|localite/([^/]++)(*:157)'
                            .')'
                            .'|([^/]++)/dellocalite/([^/]++)(*:195)'
                            .'|/(?'
                                .'|show/([^/]++)(*:220)'
                                .'|delete/([^/]++)(*:243)'
                            .')'
                        .')'
                        .'|t/(?'
                            .'|update/([^/]++)(*:273)'
                            .'|affecter/([^/]++)(*:298)'
                            .'|de(?'
                                .'|saffecter/([^/]++)(*:329)'
                                .'|lete/([^/]++)(*:350)'
                            .')'
                            .'|show/([^/]++)(*:372)'
                            .'|createuser/([^/]++)(*:399)'
                        .')'
                    .')'
                .')'
                .'|/d(?'
                    .'|e(?'
                        .'|mande(?'
                            .'|/(?'
                                .'|([^/]++)(*:439)'
                                .'|pop/([^/]++)(*:459)'
                                .'|([^/]++)/(?'
                                    .'|histo(*:484)'
                                    .'|valid(*:497)'
                                    .'|edit(?'
                                        .'|1(*:513)'
                                        .'|2(*:522)'
                                        .'|3(*:531)'
                                    .')'
                                .')'
                            .')'
                            .'|pop/([^/]++)(*:554)'
                        .')'
                        .'|partement/([^/]++)(?'
                            .'|/(?'
                                .'|add(*:591)'
                                .'|edit(*:603)'
                            .')'
                            .'|(*:612)'
                        .')'
                    .')'
                    .'|ossier/(?'
                        .'|([^/]++)(?'
                            .'|/rapport(*:651)'
                            .'|(*:659)'
                        .')'
                        .'|pop/([^/]++)(*:680)'
                        .'|([^/]++)/(?'
                            .'|histo(*:705)'
                            .'|a(?'
                                .'|tt(?'
                                    .'|ribuer(*:728)'
                                    .'|est(?'
                                        .'|er(*:744)'
                                        .'|pdf(*:755)'
                                        .'|0pdf(*:767)'
                                    .')'
                                .')'
                                .'|ffecter(*:784)'
                            .')'
                            .'|desaffecter(*:804)'
                            .'|visiter(*:819)'
                            .'|r(?'
                                .'|e(?'
                                    .'|visiter(*:842)'
                                    .'|jetrapport(*:860)'
                                .')'
                                .'|apport(?'
                                    .'|er(*:880)'
                                    .'|pdf(*:891)'
                                .')'
                            .')'
                            .'|showpdf(*:908)'
                        .')'
                    .')'
                .')'
                .'|/electricien/([^/]++)(?'
                    .'|(*:943)'
                    .'|/edit(*:956)'
                    .'|(*:964)'
                .')'
                .'|/installation/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|pdf(*:1008)'
                            .'|renew(*:1022)'
                            .'|clone(*:1036)'
                            .'|add(?'
                                .'|fromE/([^/]++)(*:1065)'
                                .'|(*:1074)'
                                .'|2(*:1084)'
                                .'|3(*:1094)'
                                .'|4(*:1104)'
                                .'|5(*:1114)'
                                .'|6(*:1124)'
                            .')'
                        .')'
                        .'|(*:1135)'
                    .')'
                    .'|pop/([^/]++)(*:1157)'
                    .'|([^/]++)/(?'
                        .'|accepte(?'
                            .'|0(*:1189)'
                            .'|1(*:1199)'
                        .')'
                        .'|edit(*:1213)'
                        .'|d(?'
                            .'|elinst(*:1232)'
                            .'|ownloadpj/([^/]++)(*:1259)'
                        .')'
                        .'|showpdf(?'
                            .'|0(*:1280)'
                            .'|(*:1289)'
                        .')'
                        .'|facturepdf(?'
                            .'|0(*:1313)'
                            .'|(*:1322)'
                        .')'
                        .'|recupdf(?'
                            .'|0(*:1343)'
                            .'|(*:1352)'
                        .')'
                    .')'
                    .'|download(*:1371)'
                .')'
                .'|/localite/([^/]++)(?'
                    .'|/(?'
                        .'|add(*:1409)'
                        .'|edit(*:1422)'
                    .')'
                    .'|(*:1432)'
                .')'
                .'|/nature/(?'
                    .'|batiment/([^/]++)(?'
                        .'|(*:1473)'
                        .'|/edit(*:1487)'
                        .'|(*:1496)'
                    .')'
                    .'|travaux/([^/]++)(?'
                        .'|(*:1525)'
                        .'|/edit(*:1539)'
                        .'|(*:1548)'
                    .')'
                .')'
                .'|/p(?'
                    .'|aiement/(?'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|add(?'
                                    .'|(*:1596)'
                                    .'|2(*:1606)'
                                .')'
                                .'|modif(*:1621)'
                            .')'
                            .'|(*:1631)'
                        .')'
                        .'|pop/([^/]++)(*:1653)'
                    .')'
                    .'|oint(?'
                        .'|Nonconf/([^/]++)(?'
                            .'|/(?'
                                .'|add(*:1696)'
                                .'|edit(*:1709)'
                            .')'
                            .'|(*:1719)'
                        .')'
                        .'|Verification/([^/]++)(?'
                            .'|/(?'
                                .'|add(*:1760)'
                                .'|edit(*:1773)'
                            .')'
                            .'|(*:1783)'
                        .')'
                    .')'
                    .'|roprietaire/([^/]++)(?'
                        .'|(*:1817)'
                        .'|/edit(*:1831)'
                        .'|(*:1840)'
                    .')'
                .')'
                .'|/r(?'
                    .'|apport/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:1882)'
                            .'|showpdf(*:1898)'
                        .')'
                        .'|(*:1908)'
                    .')'
                    .'|e(?'
                        .'|gion/([^/]++)(?'
                            .'|/edit(*:1943)'
                            .'|(*:1952)'
                        .')'
                        .'|mboursement/(?'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|add(?'
                                        .'|(*:1998)'
                                        .'|2(*:2008)'
                                    .')'
                                    .'|rejet(*:2023)'
                                .')'
                                .'|(*:2033)'
                            .')'
                            .'|pop/([^/]++)(*:2055)'
                        .')'
                        .'|set\\-password/reset(?:/([^/]++))?(*:2098)'
                    .')'
                    .'|ubrique/([^/]++)(?'
                        .'|/(?'
                            .'|add(*:2134)'
                            .'|edit(*:2147)'
                        .')'
                        .'|(*:2157)'
                    .')'
                .')'
                .'|/type/construction/([^/]++)(?'
                    .'|(*:2198)'
                    .'|/edit(*:2212)'
                    .'|(*:2221)'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:2255)'
                    .'|/(?'
                        .'|edit(*:2272)'
                        .'|resetpass(*:2290)'
                        .'|activer(*:2306)'
                    .')'
                    .'|(*:2316)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        77 => [[['_route' => 'app_affecter_index', '_controller' => 'App\\Controller\\AffectationsAgentsController::formulaireAff'], ['id'], null, null, false, true, null]],
        94 => [[['_route' => 'app_affecter_add', '_controller' => 'App\\Controller\\AffectationsAgentsController::create'], ['id'], null, null, false, true, null]],
        132 => [[['_route' => 'app_agence_edit', '_controller' => 'App\\Controller\\AgenceController::update'], ['id'], null, null, false, true, null]],
        157 => [[['_route' => 'app_agence_localite', '_controller' => 'App\\Controller\\AgenceController::addlocalite'], ['id'], null, null, false, true, null]],
        195 => [[['_route' => 'app_agence_localitedel', '_controller' => 'App\\Controller\\AgenceController::dellocalite'], ['id', 'idL'], null, null, false, true, null]],
        220 => [[['_route' => 'app_agence_show', '_controller' => 'App\\Controller\\AgenceController::show'], ['id'], null, null, false, true, null]],
        243 => [[['_route' => 'app_agence_delete', '_controller' => 'App\\Controller\\AgenceController::delete'], ['id'], null, null, false, true, null]],
        273 => [[['_route' => 'app_agent_edit', '_controller' => 'App\\Controller\\AgentController::update'], ['id'], null, null, false, true, null]],
        298 => [[['_route' => 'app_agent_affect', '_controller' => 'App\\Controller\\AgentController::affecter'], ['id'], null, null, false, true, null]],
        329 => [[['_route' => 'app_agent_desaffect', '_controller' => 'App\\Controller\\AgentController::desaffecter'], ['id'], null, null, false, true, null]],
        350 => [[['_route' => 'app_agent_delete', '_controller' => 'App\\Controller\\AgentController::delete'], ['id'], null, null, false, true, null]],
        372 => [[['_route' => 'app_agent_show', '_controller' => 'App\\Controller\\AgentController::show'], ['id'], null, null, false, true, null]],
        399 => [[['_route' => 'app_agent_createuser', '_controller' => 'App\\Controller\\AgentController::createuser'], ['id'], null, null, false, true, null]],
        439 => [[['_route' => 'app_demande_show', '_controller' => 'App\\Controller\\DemandeController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        459 => [[['_route' => 'app_demande_showpop', '_controller' => 'App\\Controller\\DemandeController::showpop'], ['id'], ['GET' => 0], null, false, true, null]],
        484 => [[['_route' => 'app_demande_histo', '_controller' => 'App\\Controller\\DemandeController::showtime'], ['id'], ['GET' => 0], null, false, false, null]],
        497 => [[['_route' => 'app_demande_valid', '_controller' => 'App\\Controller\\DemandeController::valid'], ['id'], null, null, false, false, null]],
        513 => [[['_route' => 'app_installation_edit1', '_controller' => 'App\\Controller\\DemandeController::edit1'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        522 => [[['_route' => 'app_installation_edit2', '_controller' => 'App\\Controller\\DemandeController::edit2'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        531 => [[['_route' => 'app_installation_edit3', '_controller' => 'App\\Controller\\DemandeController::edit3'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        554 => [[['_route' => 'main_demandepop', '_controller' => 'App\\Controller\\MainController::demandepop'], ['restr'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        591 => [[['_route' => 'app_departement_add', '_controller' => 'App\\Controller\\DepartementController::add'], ['id'], null, null, false, false, null]],
        603 => [[['_route' => 'app_departement_edit', '_controller' => 'App\\Controller\\DepartementController::edit'], ['id'], null, null, false, false, null]],
        612 => [[['_route' => 'app_departement_show', '_controller' => 'App\\Controller\\DepartementController::show'], ['id'], null, null, false, true, null]],
        651 => [[['_route' => 'app_dossier_showrapp', '_controller' => 'App\\Controller\\DossierController::showrapport'], ['id'], ['GET' => 0], null, false, false, null]],
        659 => [[['_route' => 'app_dossier_show', '_controller' => 'App\\Controller\\DossierController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        680 => [[['_route' => 'app_dossier_showpop', '_controller' => 'App\\Controller\\DossierController::showpop'], ['id'], ['GET' => 0], null, false, true, null]],
        705 => [[['_route' => 'app_dossier_histo', '_controller' => 'App\\Controller\\DossierController::showtime'], ['id'], ['GET' => 0], null, false, false, null]],
        728 => [[['_route' => 'app_dossier_attribuer', '_controller' => 'App\\Controller\\DossierController::attribuer'], ['id'], null, null, false, false, null]],
        744 => [[['_route' => 'app_dossier_attester', '_controller' => 'App\\Controller\\DossierController::attester'], ['id'], null, null, false, false, null]],
        755 => [[['_route' => 'app_attestation_showpdf', '_controller' => 'App\\Controller\\DossierController::pdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        767 => [[['_route' => 'app_attestation_showpdf0', '_controller' => 'App\\Controller\\DossierController::pdf0'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        784 => [[['_route' => 'app_dossier_affecter', '_controller' => 'App\\Controller\\DossierController::affecter'], ['id'], null, null, false, false, null]],
        804 => [[['_route' => 'app_dossier_desaffecter', '_controller' => 'App\\Controller\\DossierController::desaffecter'], ['id'], null, null, false, false, null]],
        819 => [[['_route' => 'app_dossier_visiter', '_controller' => 'App\\Controller\\DossierController::visiter'], ['id'], null, null, false, false, null]],
        842 => [[['_route' => 'app_dossier_revisiter', '_controller' => 'App\\Controller\\DossierController::revisiter'], ['id'], null, null, false, false, null]],
        860 => [[['_route' => 'app_dossier_rejetrapport', '_controller' => 'App\\Controller\\DossierController::rejetrapport'], ['id'], null, null, false, false, null]],
        880 => [[['_route' => 'app_dossier_rapporter', '_controller' => 'App\\Controller\\DossierController::rapporter'], ['id'], null, null, false, false, null]],
        891 => [[['_route' => 'app_dossier_rapportpdf', '_controller' => 'App\\Controller\\DossierController::rapportpdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        908 => [[['_route' => 'app_attestation_showpdf00', '_controller' => 'App\\Controller\\DossierController::showpdf'], ['id'], ['GET' => 0], null, false, false, null]],
        943 => [[['_route' => 'app_electricien_show', '_controller' => 'App\\Controller\\ElectricienController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        956 => [[['_route' => 'app_electricien_edit', '_controller' => 'App\\Controller\\ElectricienController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        964 => [[['_route' => 'app_electricien_delete', '_controller' => 'App\\Controller\\ElectricienController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1008 => [[['_route' => 'app_installation_showpdf', '_controller' => 'App\\Controller\\InstallationController::pdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1022 => [[['_route' => 'app_installation_renew', '_controller' => 'App\\Controller\\InstallationController::addrenew'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1036 => [[['_route' => 'app_installation_clone', '_controller' => 'App\\Controller\\InstallationController::addclone'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1065 => [[['_route' => 'app_installation_addfromE', '_controller' => 'App\\Controller\\InstallationController::newfromE'], ['id', 'idE'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1074 => [[['_route' => 'app_installation_add', '_controller' => 'App\\Controller\\InstallationController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1084 => [[['_route' => 'app_installation_add2', '_controller' => 'App\\Controller\\InstallationController::new2'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1094 => [[['_route' => 'app_installation_add3', '_controller' => 'App\\Controller\\InstallationController::new3'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1104 => [[['_route' => 'app_installation_add4', '_controller' => 'App\\Controller\\InstallationController::new4'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1114 => [[['_route' => 'app_installation_add5', '_controller' => 'App\\Controller\\InstallationController::new5'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1124 => [[['_route' => 'app_installation_add6', '_controller' => 'App\\Controller\\InstallationController::new6'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1135 => [[['_route' => 'app_installation_show', '_controller' => 'App\\Controller\\InstallationController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1157 => [[['_route' => 'app_installation_showpop', '_controller' => 'App\\Controller\\InstallationController::showpop'], ['id'], ['GET' => 0], null, false, true, null]],
        1189 => [[['_route' => 'app_installation_accepte0', '_controller' => 'App\\Controller\\InstallationController::accepte0'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1199 => [[['_route' => 'app_installation_accepte1', '_controller' => 'App\\Controller\\InstallationController::accepte1'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1213 => [[['_route' => 'app_installation_edit', '_controller' => 'App\\Controller\\InstallationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1232 => [[['_route' => 'app_installation_delete', '_controller' => 'App\\Controller\\InstallationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1259 => [[['_route' => 'app_installation_downloadpj', '_controller' => 'App\\Controller\\InstallationController::downloadFileAction'], ['id', 'type'], ['GET' => 0], null, false, true, null]],
        1280 => [[['_route' => 'app_installation_showpdf0', '_controller' => 'App\\Controller\\InstallationController::showpdf0'], ['id'], ['GET' => 0], null, false, false, null]],
        1289 => [[['_route' => 'app_installation_showpdf1', '_controller' => 'App\\Controller\\InstallationController::showpdf'], ['id'], ['GET' => 0], null, false, false, null]],
        1313 => [[['_route' => 'app_installation_facturepdf0', '_controller' => 'App\\Controller\\InstallationController::facturepdf0'], ['id'], ['GET' => 0], null, false, false, null]],
        1322 => [[['_route' => 'app_installation_facturepdf', '_controller' => 'App\\Controller\\InstallationController::facturepdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1343 => [[['_route' => 'app_installation_recupdf0', '_controller' => 'App\\Controller\\InstallationController::recupdf0'], ['id'], ['GET' => 0], null, false, false, null]],
        1352 => [[['_route' => 'app_installation_recupdf', '_controller' => 'App\\Controller\\InstallationController::recupdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1371 => [[['_route' => 'download_file', '_controller' => 'App\\Controller\\InstallationController::downloadFileAction'], [], null, null, false, false, null]],
        1409 => [[['_route' => 'app_localite_add', '_controller' => 'App\\Controller\\LocaliteController::add'], ['id'], null, null, false, false, null]],
        1422 => [[['_route' => 'app_localite_edit', '_controller' => 'App\\Controller\\LocaliteController::edit'], ['id'], null, null, false, false, null]],
        1432 => [[['_route' => 'app_localite_show', '_controller' => 'App\\Controller\\LocaliteController::show'], ['id'], null, null, false, true, null]],
        1473 => [[['_route' => 'app_nature_batiment_show', '_controller' => 'App\\Controller\\NatureBatimentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1487 => [[['_route' => 'app_nature_batiment_edit', '_controller' => 'App\\Controller\\NatureBatimentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1496 => [[['_route' => 'app_nature_batiment_delete', '_controller' => 'App\\Controller\\NatureBatimentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1525 => [[['_route' => 'app_nature_travaux_show', '_controller' => 'App\\Controller\\NatureTravauxController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1539 => [[['_route' => 'app_nature_travaux_edit', '_controller' => 'App\\Controller\\NatureTravauxController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1548 => [[['_route' => 'app_nature_travaux_delete', '_controller' => 'App\\Controller\\NatureTravauxController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1596 => [[['_route' => 'app_paiement_add', '_controller' => 'App\\Controller\\PaiementController::add'], ['id'], null, null, false, false, null]],
        1606 => [[['_route' => 'app_paiement_add2', '_controller' => 'App\\Controller\\PaiementController::add2'], ['id'], null, null, false, false, null]],
        1621 => [[['_route' => 'app_paiement_modif', '_controller' => 'App\\Controller\\PaiementController::modif'], ['id'], null, null, false, false, null]],
        1631 => [[['_route' => 'app_paiement_show', '_controller' => 'App\\Controller\\PaiementController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1653 => [[['_route' => 'app_paiement_showpop', '_controller' => 'App\\Controller\\PaiementController::showpop'], ['id'], ['GET' => 0], null, false, true, null]],
        1696 => [[['_route' => 'app_pointnonconf_add', '_controller' => 'App\\Controller\\PointNonconfController::add'], ['id'], null, null, false, false, null]],
        1709 => [[['_route' => 'app_pointnonconf_edit', '_controller' => 'App\\Controller\\PointNonconfController::edit'], ['id'], null, null, false, false, null]],
        1719 => [[['_route' => 'app_pointnonconf_show', '_controller' => 'App\\Controller\\PointNonconfController::show'], ['id'], null, null, false, true, null]],
        1760 => [[['_route' => 'app_pointverification_add', '_controller' => 'App\\Controller\\PointVerificationController::add'], ['id'], null, null, false, false, null]],
        1773 => [[['_route' => 'app_pointverification_edit', '_controller' => 'App\\Controller\\PointVerificationController::edit'], ['id'], null, null, false, false, null]],
        1783 => [[['_route' => 'app_pointverification_show', '_controller' => 'App\\Controller\\PointVerificationController::show'], ['id'], null, null, false, true, null]],
        1817 => [[['_route' => 'app_proprietaire_show', '_controller' => 'App\\Controller\\ProprietaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1831 => [[['_route' => 'app_proprietaire_edit', '_controller' => 'App\\Controller\\ProprietaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1840 => [[['_route' => 'app_proprietaire_delete', '_controller' => 'App\\Controller\\ProprietaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1882 => [[['_route' => 'app_rapport_edit', '_controller' => 'App\\Controller\\RapportController::edit'], ['id'], null, null, false, false, null]],
        1898 => [[['_route' => 'app_rapport_showpdf', '_controller' => 'App\\Controller\\RapportController::show'], ['id'], null, null, false, false, null]],
        1908 => [[['_route' => 'app_rapport_show', '_controller' => 'App\\Controller\\RapportController::showpdf'], ['id'], null, null, false, true, null]],
        1943 => [[['_route' => 'app_region_edit', '_controller' => 'App\\Controller\\RegionController::edit'], ['id'], null, null, false, false, null]],
        1952 => [[['_route' => 'app_region_show', '_controller' => 'App\\Controller\\RegionController::show'], ['id'], null, null, false, true, null]],
        1998 => [[['_route' => 'app_remboursement_add', '_controller' => 'App\\Controller\\RemboursementController::add'], ['id'], null, null, false, false, null]],
        2008 => [[['_route' => 'app_remboursement_add2', '_controller' => 'App\\Controller\\RemboursementController::add2'], ['id'], null, null, false, false, null]],
        2023 => [[['_route' => 'app_remboursement_rejet', '_controller' => 'App\\Controller\\RemboursementController::rejet'], ['id'], null, null, false, false, null]],
        2033 => [[['_route' => 'app_remboursement_show', '_controller' => 'App\\Controller\\RemboursementController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2055 => [[['_route' => 'app_remboursement_showpop', '_controller' => 'App\\Controller\\RemboursementController::showpop'], ['id'], ['GET' => 0], null, false, true, null]],
        2098 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        2134 => [[['_route' => 'app_rubrique_add', '_controller' => 'App\\Controller\\RubriqueController::add'], ['id'], null, null, false, false, null]],
        2147 => [[['_route' => 'app_rubrique_edit', '_controller' => 'App\\Controller\\RubriqueController::edit'], ['id'], null, null, false, false, null]],
        2157 => [[['_route' => 'app_rubrique_show', '_controller' => 'App\\Controller\\RubriqueController::show'], ['id'], null, null, false, true, null]],
        2198 => [[['_route' => 'app_type_construction_show', '_controller' => 'App\\Controller\\TypeConstructionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2212 => [[['_route' => 'app_type_construction_edit', '_controller' => 'App\\Controller\\TypeConstructionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2221 => [[['_route' => 'app_type_construction_delete', '_controller' => 'App\\Controller\\TypeConstructionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2255 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2272 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2290 => [[['_route' => 'app_utilisateur_resetpass', '_controller' => 'App\\Controller\\UtilisateurController::resetpass'], ['id'], ['GET' => 0], null, false, false, null]],
        2306 => [[['_route' => 'app_utilisateur_activer', '_controller' => 'App\\Controller\\UtilisateurController::activer'], ['id'], ['GET' => 0], null, false, false, null]],
        2316 => [
            [['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
