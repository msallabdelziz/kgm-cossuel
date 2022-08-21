<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* dossier/show.html.twig */
class __TwigTemplate_9d08ddad97fa54ff6d0ba9d2d7bbfc11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "dossier/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "COSSUEL";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <style>
    #synthese_demande input[disabled] {
        background-color:#f1f5f9;
        border: 1px solid #7a7b7c;
        color: gray;
        font-weight:normal;
    }
    #synthese_demande .card {
        background-color:#ffffff;
    }
    #synthese_demande label, #synthese_demande .fs-title {
        color:gray;
        font-weight:normal;
    }

    #paiement_demande .card {
        background-color:#fff;
        box-shadow: 0 0 0 2px white, 0 0 0 3px #000
    }
    
    </style>
    ";
        // line 26
        $context["link_action"] = "";
        // line 27
        echo "    ";
        $context["paiement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 27), "paiement", [], "any", false, false, false, 27);
        // line 28
        echo "    ";
        $context["agentConn"] = twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateurAgent", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)], "method", false, false, false, 28);
        // line 29
        echo "
    ";
        // line 30
        $context["action_demande"] = "Consultation";
        // line 31
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "affecte", [], "any", false, false, false, 31)) {
            // line 32
            echo "        ";
            $context["action_demande"] = "Affectation";
            // line 33
            echo "        ";
            $context["link_liste"] = "app_dossier_affectation";
            // line 34
            echo "        ";
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT") && ($context["agentConn"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "referent", [], "any", false, false, false, 34)) && (twig_get_attribute($this->env, $this->source, ($context["agentConn"] ?? null), "id", [], "any", false, false, false, 34) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "referent", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)))) {
                // line 35
                echo "            ";
                $context["link_action"] = "app_dossier_affecter";
                // line 36
                echo "            ";
                $context["libelle_action"] = "Affecter à un contrôleur";
                // line 37
                echo "        ";
            }
            // line 38
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visite", [], "any", false, false, false, 38)) {
            // line 39
            echo "        ";
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") && ($context["agentConn"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 39)) && (twig_get_attribute($this->env, $this->source, ($context["agentConn"] ?? null), "id", [], "any", false, false, false, 39) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)))) {
                // line 40
                echo "            ";
                $context["action_demande"] = "Planification Visite";
                // line 41
                echo "            ";
                $context["link_liste"] = "app_dossier_visite";
                // line 42
                echo "            ";
                $context["link_action"] = "app_dossier_visiter";
                // line 43
                echo "            ";
                $context["libelle_action"] = "Planifier une visite";
                // line 44
                echo "        ";
            }
            // line 45
            echo "        ";
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT") && ($context["agentConn"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "referent", [], "any", false, false, false, 45)) && (twig_get_attribute($this->env, $this->source, ($context["agentConn"] ?? null), "id", [], "any", false, false, false, 45) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "referent", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)))) {
                // line 46
                echo "            ";
                $context["link_action"] = "app_dossier_desaffecter";
                // line 47
                echo "            ";
                $context["action_demande"] = "Consultation Affectation";
                // line 48
                echo "            ";
                $context["link_liste"] = "app_dossier_affectation";
                // line 49
                echo "            ";
                $context["libelle_action"] = "Retirer dossier affecté";
                // line 50
                echo "        ";
            }
            // line 51
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 51)) {
            // line 52
            echo "        ";
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") && ($context["agentConn"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 52)) && (twig_get_attribute($this->env, $this->source, ($context["agentConn"] ?? null), "id", [], "any", false, false, false, 52) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)))) {
                // line 53
                echo "            ";
                $context["action_demande"] = "Rapport de Visite";
                // line 54
                echo "            ";
                $context["link_liste"] = "app_dossier_rapport";
                // line 55
                echo "            ";
                $context["link_action"] = "app_dossier_rapporter";
                // line 56
                echo "            ";
                $context["libelle_action"] = "Elaborer Rapport";
                // line 57
                echo "            ";
                $context["libelle_action2"] = "Re-planifier Visite";
                // line 58
                echo "            ";
                $context["link_action2"] = "app_dossier_revisiter";
                // line 59
                echo "        ";
            }
            // line 60
            echo "        ";
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT") && ($context["agentConn"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "referent", [], "any", false, false, false, 60)) && (twig_get_attribute($this->env, $this->source, ($context["agentConn"] ?? null), "id", [], "any", false, false, false, 60) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "referent", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60)))) {
                // line 61
                echo "            ";
                $context["link_action"] = "app_dossier_desaffecter";
                // line 62
                echo "            ";
                $context["action_demande"] = "Consultation Affectation";
                // line 63
                echo "            ";
                $context["link_liste"] = "app_dossier_affectation";
                // line 64
                echo "            ";
                $context["libelle_action"] = "Retirer dossier affecté";
                // line 65
                echo "        ";
            }
            // line 66
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 66)) {
            // line 67
            echo "        ";
            $context["action_demande"] = "Résultat Inspection";
            // line 68
            echo "        ";
            $context["link_liste"] = "app_dossier_attestation";
            // line 69
            echo "        ";
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT") && ($context["agentConn"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "referent", [], "any", false, false, false, 69)) && (twig_get_attribute($this->env, $this->source, ($context["agentConn"] ?? null), "id", [], "any", false, false, false, 69) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "referent", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69)))) {
                // line 70
                echo "            ";
                $context["link_action"] = "app_dossier_showrapp";
                // line 71
                echo "            ";
                $context["libelle_action"] = "Consulter le rapport";
                // line 72
                echo "        ";
            }
            // line 73
            echo "    ";
        } else {
            // line 74
            echo "        ";
            $context["action_demande"] = "Consultation ";
            // line 75
            echo "    ";
        }
        // line 76
        echo "
    ";
        // line 77
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 77);
        // line 78
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 78);
        // line 79
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 79), "get", [0 => "page_liste_dossier"], "method", true, true, false, 79) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 79), "get", [0 => "page_liste_dossier"], "method", false, false, false, 79))) {
            // line 80
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 80), "get", [0 => "page_liste_dossier"], "method", false, false, false, 80);
            // line 81
            echo "    ";
        }
        // line 82
        echo "    
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 86
        echo twig_escape_filter($this->env, ($context["action_demande"] ?? null), "html", null, true);
        echo " de dossiers </span>
            </a>
        </header>

        <div class=\"container\">
            <nav class=\"navbar shadow bg-warning border border-dark mt-2 p-0\">
                <div class=\"container-fluid ps-4\">
                        <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                            <div class=\"col\">
                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                </svg>
                                Détails du dossier
                            </div>
                            <div class=\"col\" align=\"right\">
                                ";
        // line 101
        if ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 101)) {
            // line 102
            echo "                                    <span class=\"text-success\">[
                                    ";
            // line 103
            if ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 103)) {
                // line 104
                echo "                                        En attente de 
                                    ";
            }
            // line 106
            echo "                                    ";
            if ((( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "Etat", [], "any", false, false, false, 106) == "Affectation") && ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "Etat", [], "any", false, false, false, 106) == "Attestation"))) {
                // line 107
                echo "                                        En attente d' 
                                    ";
            }
            // line 109
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "Etat", [], "any", false, false, false, 109), "html", null, true);
            echo "]</span>
                                ";
        } else {
            // line 111
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 111), "conclusion", [], "any", false, false, false, 111)) {
                // line 112
                echo "                                        <span class=\"badge bg-success fs-5\">[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "Etat", [], "any", false, false, false, 112), "html", null, true);
                echo "]</span>
                                    ";
            } else {
                // line 114
                echo "                                        <span class=\"badge bg-danger fs-5\">[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "Etat", [], "any", false, false, false, 114), "html", null, true);
                echo "]</span>
                                    ";
            }
            // line 116
            echo "                                ";
        }
        // line 117
        echo "                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                    ";
        // line 126
        if (twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdBy", [], "any", false, false, false, 126)], "method", false, false, false, 126)) {
            // line 127
            echo "                        ";
            $context["creator"] = twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdBy", [], "any", false, false, false, 127)], "method", false, false, false, 127);
            // line 128
            echo "                        <div align=\"left\" class=\"float-start border border-warning shadow p-2 mt-2 fs-8 fw-light\">
                            <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["creator"] ?? null), "nomComplet", [], "any", false, false, false, 129), "html", null, true);
            echo "</span></div>
                            <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">";
            // line 130
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdAt", [], "any", false, false, false, 130), "d-m-Y à H:i:s"), "html", null, true);
            echo "</span></div>
                        </div>
                        <div class=\"clear\"></div>
                    ";
        }
        // line 134
        echo "                <div align=\"right\">
                ";
        // line 135
        if (((twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 135) &&  !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 135)) || twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 135))) {
            // line 136
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_showrapp", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 136)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-secondary btn my-3\">Consulter le rapport</a>
                ";
        }
        // line 138
        echo "                ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 138)) {
            // line 139
            echo "                    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Demande</a>
                ";
        }
        // line 141
        echo "                ";
        if (((( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 141) && twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visite", [], "any", false, false, false, 141)) &&  !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 141)) && ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") && ($context["agentConn"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 141)) && (twig_get_attribute($this->env, $this->source, ($context["agentConn"] ?? null), "id", [], "any", false, false, false, 141) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 141), "id", [], "any", false, false, false, 141))))) {
            // line 142
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_showrapp", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 142)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-outline-dark btn my-3\">Consulter le rapport provisoire</a>
                ";
        }
        // line 144
        echo "                ";
        if ((((twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "cloture", [], "any", false, false, false, 144) &&  !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "conforme", [], "any", false, false, false, 144)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 144), "numeroPassage", [], "any", false, false, false, 144) == 1)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")))) {
            // line 145
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_renew", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 145)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-success border-dark btn ms-2\">
                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"white\">
                        <use xlink:href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#files"), "html", null, true);
            echo "\"></use>
                    </svg>
                    Créer une demande en 2e visite</a>
                ";
        }
        // line 151
        echo "
                </div>
                <fieldset id=\"synthese_demande\">
                    ";
        // line 154
        if ((twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visite", [], "any", false, false, false, 154) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 154), "rejetRapport", [], "any", false, false, false, 154))) {
            // line 155
            echo "                        <div class=\"alert alert-danger py-2 fs-6\"><span class=\"text-danger\">Rapport rejeté:  </span> <span class=\"fs-7\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 155), "motifRejetRapport", [], "any", false, false, false, 155), "html", null, true);
            echo "</span></div>
                    ";
        }
        // line 157
        echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif ";
        // line 158
        if ((($context["demande"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "numeroPassage", [], "any", false, false, false, 158) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
        }
        // line 159
        echo "                            ";
        if ((((0 && (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 159) >= 7)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 159), "numeroPassage", [], "any", false, false, false, 159) == 1)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")))) {
            // line 160
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_clone", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 160)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-warning py-0 border-dark btn ms-5 float-end\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#files"), "html", null, true);
            echo "\"></use>
                                </svg>
                                Cloner la Demande</a>
                            ";
        }
        // line 166
        echo "                        </h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Numéro Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 171), "demandeCourante", [], "any", false, false, false, 171), "numero", [], "any", false, false, false, 171), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 175
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 175), "demandeCourante", [], "any", false, false, false, 175), "dateCreation", [], "any", false, false, false, 175), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 179), "demandeCourante", [], "any", false, false, false, 179), "puissance", [], "any", false, false, false, 179), "html", null, true);
        echo " kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 183), "demandeCourante", [], "any", false, false, false, 183), "cout", [], "any", false, false, false, 183), "html", null, true);
        echo " FCFA\">
                            </div>

                        </div>  
                    </div>

                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title text-black\">Situation paiement</h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Statut Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6 text-success\" value=\"";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "etat", [], "any", false, false, false, 195), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Paiement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6\" value=\"";
        // line 199
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "datepaiement", [], "any", false, false, false, 199), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Mode paiement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "mode", [], "any", false, false, false, 203), "html", null, true);
        echo "\">
                            </div>
                            ";
        // line 205
        if (twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "reference", [], "any", false, false, false, 205)) {
            // line 206
            echo "                            <div class=\"col-lg-3\">
                                <label >Référence paiement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6\" value=\"";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "reference", [], "any", false, false, false, 208), "html", null, true);
            echo "\">
                            </div>
                            ";
        }
        // line 211
        echo "                        </div>  
                    </div>

                    ";
        // line 215
        echo "                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title text-black titre_bloc_1\">
                        Données de base de la demande
                        ";
        // line 218
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 219
            echo "                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit1", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 219)]), "html", null, true);
            echo "\" class=\" pt fs-8 text-dark\">
                            <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                <use xlink:href=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                            </svg>
                            </a>
                        ";
        }
        // line 225
        echo "                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_1\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
        echo "\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_1\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-8\">
                                <label for=\"form_usage\" >Usage Installation</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 235), "html", null, true);
        echo "\" id=\"form_usage\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 239
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "alimente", [], "any", false, false, false, 239)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_alimente\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_compteur\" >Numéro Compteur</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "compteur", [], "any", false, false, false, 243), "html", null, true);
        echo "\" id=\"form_compteur\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "abonnement", [], "any", false, false, false, 247), "html", null, true);
        echo "\" id=\"form_abonnement\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 251
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "grstReseau", [], "any", false, false, false, 251), "html", null, true);
        echo "\" id=\"form_grstReseau\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4\">
                                <label for=\"form_localite\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 256
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 256), "html", null, true);
        echo "\" id=\"form_localite\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_adresse\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "adresse", [], "any", false, false, false, 260), "html", null, true);
        echo "\" id=\"form_adresse\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_habitation\" >Complément Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 264
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "habitation", [], "any", false, false, false, 264), "html", null, true);
        echo "\" id=\"form_habitation\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_lattitude\" >Latitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 268
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "lattitude", [], "any", false, false, false, 268), "html", null, true);
        echo "\" id=\"form_lattitude\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_longitude\" >Longitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "longitude", [], "any", false, false, false, 272), "html", null, true);
        echo "\" id=\"form_longitude\">
                            </div>
                        </div>
                    </div>

                    ";
        // line 278
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 278)) {
            // line 279
            echo "                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title titre_bloc_2\">
                            Caractéristiques du site
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_2\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
            echo "\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_2\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-4\">
                                <label for=\"form_collectif collectif1\" >Bien Collectif ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 292
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "collectif", [], "any", false, false, false, 292)) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "\" id=\"form_collectif\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_nomSite\" >Nom du site</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 296
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "nomSite", [], "any", false, false, false, 296), "html", null, true);
            echo "\" id=\"form_nomSite\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_logement\" >Nombre de logements</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 300
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "logement", [], "any", false, false, false, 300), "html", null, true);
            echo "\" id=\"form_logement\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-6\">
                                <label for=\"form_typeConstruction\" >Type de construction</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 305), "nom", [], "any", false, false, false, 305), "html", null, true);
            echo "\" id=\"form_typeConstruction\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1\">
                                <label for=\"form_niveau\" >Nombre de niveaux</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 309
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "niveau", [], "any", false, false, false, 309), "html", null, true);
            echo "\" id=\"form_niveau\">
                            </div>
                            <div class=\"col-lg-6 typeConstruction3\">
                                <label for=\"form_activite\" >Activités</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "activite", [], "any", false, false, false, 313), "html", null, true);
            echo "\" id=\"form_activite\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                <label for=\"form_priece\" >Nombre de pièces</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "priece", [], "any", false, false, false, 317), "html", null, true);
            echo "\" id=\"form_priece\">
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 322
        echo "
                    ";
        // line 324
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 324)) {
            // line 325
            echo "                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title titre_bloc_3\">
                            Caractéristiques de l'installation
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_3\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 330
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
            echo "\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_3\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-6\">
                                <label for=\"form_natureTravaux\" >Nature des travaux</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 338
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 338), "html", null, true);
            echo "\" id=\"form_natureTravaux\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf15\" >Neufs_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 342
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neuf15", [], "any", false, false, false, 342), "html", null, true);
            echo "\" id=\"form_neufs_15\">
                                <label for=\"form_existant15\" >Existants_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 344
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existant15", [], "any", false, false, false, 344), "html", null, true);
            echo "\" id=\"form_existant15\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf25\" >Neufs_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 348
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neuf25", [], "any", false, false, false, 348), "html", null, true);
            echo "\" id=\"form_neuf25\">
                                <label for=\"form_existant25\" >Existants_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existant25", [], "any", false, false, false, 350), "html", null, true);
            echo "\" id=\"form_existant25\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neufAutre\" >Neufs_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neufAutre", [], "any", false, false, false, 354), "html", null, true);
            echo "\" id=\"form_neufAutre\">
                                <label for=\"form_existantAutre\" >Existants_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 356
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existantAutre", [], "any", false, false, false, 356), "html", null, true);
            echo "\" id=\"form_existantAutre\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4 intervenantAutre1\">
                                <label for=\"form_intervenantAutre\" >Autres intervenants ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 361
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenantAutre", [], "any", false, false, false, 361), "html", null, true);
            echo "\" id=\"form_intervenantAutre\">
                            </div>
                            <div class=\"col-lg-8 intervenantAutre1\">
                                <label for=\"form_intervenant\" >Intervenants</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 365
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenant", [], "any", false, false, false, 365), "html", null, true);
            echo "\" id=\"form_intervenant\">
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 370
        echo "
                ";
        // line 372
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 372), "electricien", [], "any", false, false, false, 372)) {
            // line 373
            echo "                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title titre_bloc_4\">
                            Informations sur l'électricien
                            ";
            // line 376
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 377
                echo "                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit2", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 377)]), "html", null, true);
                echo "\" class=\" pt fs-8 text-dark\">
                                <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                    <use xlink:href=\"";
                // line 379
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                </svg>
                                </a>
                            ";
            }
            // line 383
            echo "                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_4\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 385
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
            echo "\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_4\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Nom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 393
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 393), "electricien", [], "any", false, false, false, 393), "nom", [], "any", false, false, false, 393), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 397
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 397), "electricien", [], "any", false, false, false, 397), "prenom", [], "any", false, false, false, 397), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 401
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 401), "electricien", [], "any", false, false, false, 401), "localite", [], "any", false, false, false, 401), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 405
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 405), "electricien", [], "any", false, false, false, 405), "adresse", [], "any", false, false, false, 405), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 409
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 409), "electricien", [], "any", false, false, false, 409), "telephone", [], "any", false, false, false, 409), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 413
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 413), "electricien", [], "any", false, false, false, 413), "email", [], "any", false, false, false, 413), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 417
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 417), "electricien", [], "any", false, false, false, 417), "typePiece", [], "any", false, false, false, 417), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 421
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 421), "electricien", [], "any", false, false, false, 421), "numPiece", [], "any", false, false, false, 421), "html", null, true);
            echo "\">
                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Electricien</label><br />
                            ";
            // line 426
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJElectricien", [], "any", false, false, false, 426)) {
                // line 427
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 428
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 430
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 430), "type" => "electricien"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJElectricien", [], "any", false, false, false, 430), "fichier", [], "any", false, false, false, 430), "html", null, true);
                echo " </span>
                            ";
            } else {
                // line 432
                echo "                                    <span class=\"text-danger pt fs-8\">N/D</span>
                            ";
            }
            // line 434
            echo "                            </div>

                        </div>
                    </div>
                    ";
        }
        // line 438
        echo "                                

                    ";
        // line 441
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 441)) {
            // line 442
            echo "                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title titre_bloc_5\">
                            Informations sur le propriétaire de l'installation
                            ";
            // line 445
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 446
                echo "                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit3", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 446)]), "html", null, true);
                echo "\" class=\" pt fs-8 text-dark\">
                                <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                    <use xlink:href=\"";
                // line 448
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                </svg>
                                </a>
                            ";
            }
            // line 452
            echo "                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_5\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 454
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
            echo "\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_5\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Nom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 462
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 462), "nom", [], "any", false, false, false, 462), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 466
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 466), "prenom", [], "any", false, false, false, 466), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 470
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 470), "localite", [], "any", false, false, false, 470), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 474
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 474), "adresse", [], "any", false, false, false, 474), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 478
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 478), "telephone", [], "any", false, false, false, 478), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 482
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 482), "email", [], "any", false, false, false, 482), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 486
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 486), "typePiece", [], "any", false, false, false, 486), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 490
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 490), "numPiece", [], "any", false, false, false, 490), "html", null, true);
            echo "\">
                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Propriétaire</label><br />
                            ";
            // line 495
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJProprietaire", [], "any", false, false, false, 495)) {
                // line 496
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 497
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 499
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 499), "type" => "proprietaire"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJProprietaire", [], "any", false, false, false, 499), "fichier", [], "any", false, false, false, 499), "html", null, true);
                echo " </span>
                            ";
            } else {
                // line 501
                echo "                                    <span class=\"text-danger pt fs-8\">N/D</span>
                            ";
            }
            // line 503
            echo "                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >";
            // line 506
            if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 506) != "erp_ert")) {
                echo "Titre de propriété";
            } else {
                echo "Documents Techniques";
            }
            echo "</label><br />
                            ";
            // line 507
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJDossierTechnique", [], "any", false, false, false, 507)) {
                // line 508
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 509
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 511
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 511), "type" => "dosstech"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJDossierTechnique", [], "any", false, false, false, 511), "fichier", [], "any", false, false, false, 511), "html", null, true);
                echo " </span>
                            ";
            } else {
                // line 513
                echo "                                    <span class=\"text-danger pt fs-8\">N/D</span>
                            ";
            }
            // line 515
            echo "                            </div>
                        </div>
                    ";
        }
        // line 518
        echo "                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2\" id=\"paiement_demande\">
                <div align=\"right\">
                    <a href=\"";
        // line 523
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link_liste"] ?? null));
        echo "\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour</a>
                    ";
        // line 524
        if ((array_key_exists("link_action2", $context) && ($context["link_action2"] ?? null))) {
            // line 525
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link_action2"] ?? null), ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 525)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-secondary btn my-3\">";
            echo twig_escape_filter($this->env, ($context["libelle_action2"] ?? null), "html", null, true);
            echo "</a>
                    ";
        }
        // line 527
        echo "                    ";
        if (($context["link_action"] ?? null)) {
            // line 528
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link_action"] ?? null), ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 528)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-primary btn my-3\">";
            echo twig_escape_filter($this->env, ($context["libelle_action"] ?? null), "html", null, true);
            echo "</a>
                    ";
        }
        // line 530
        echo "                    ";
        if (( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "affecte", [], "any", false, false, false, 530) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
            // line 531
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_attribuer", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 531)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-primary0 btn my-3\">Changer de référent</a>
                    ";
        }
        // line 533
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 533)) {
            // line 534
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 534), "conclusion", [], "any", false, false, false, 534)) {
                // line 535
                echo "                        <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_attestation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 535)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-success btn my-3\">Attestation Conformité</a>
                    ";
            } else {
                // line 537
                echo "                        <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_attestation_showpdf0", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 537)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-danger btn my-3\">Bon de travaux</a>
                    ";
            }
            // line 539
            echo "                ";
        }
        // line 540
        echo "                
                ";
        // line 541
        if ((((twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 541) &&  !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 541)) || twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 541)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR"))) {
            // line 542
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_showrapp", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 542)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-secondary btn my-3\">Consulter le rapport</a>
                ";
        }
        // line 544
        echo "                </div>                                
                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Traitement du dossier
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
        // line 548
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_histo", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 548)]), "html", null, true);
        echo "\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#hourglass-split"), "html", null, true);
        echo "\"></use></svg>
                            </a>
                        </div>
                    </h2>
                    <div class=\"row\">
                        <hr class=\"mb-1\" />
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >N° Dossier</label>
                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-0 fw-bold fs-6\" value=\"";
        // line 558
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 558), "numero", [], "any", false, false, false, 558), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Date création dossier</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-success form-control py-0 fw-bold fs-6\" value=\"";
        // line 564
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "dateCreation", [], "any", false, false, false, 564), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" class=\"fs-7\" >Usage</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fw-bold fs-6\" value=\"";
        // line 570
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 570), "installation", [], "any", false, false, false, 570), "usages", [], "any", false, false, false, 570), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Puissance</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fs-6\" value=\"";
        // line 576
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 576), "puissance", [], "any", false, false, false, 576), "html", null, true);
        echo " kW\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 582
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 582), "installation", [], "any", false, false, false, 582), "localite", [], "any", false, false, false, 582), "nom", [], "any", false, false, false, 582), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Agence</label>
                                <input type=\"text\" disabled readonly class=\"form-control fw-bold text-black form-control py-0 fs-6\" value=\"";
        // line 588
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 588), "installation", [], "any", false, false, false, 588), "localite", [], "any", false, false, false, 588), "agence", [], "any", false, false, false, 588)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 588), "installation", [], "any", false, false, false, 588), "localite", [], "any", false, false, false, 588), "agence", [], "any", false, false, false, 588), "code", [], "any", false, false, false, 588), "html", null, true);
        } else {
            echo " - ";
        }
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-1\">
                            <label class=\"fs-7\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 593
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 593), "installation", [], "any", false, false, false, 593), "adresse", [], "any", false, false, false, 593), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 598
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 598), "installation", [], "any", false, false, false, 598), "electricien", [], "any", false, false, false, 598), "nom", [], "any", false, false, false, 598), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 598), "installation", [], "any", false, false, false, 598), "electricien", [], "any", false, false, false, 598), "prenom", [], "any", false, false, false, 598), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Tél Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control fw-bold py-0 fs-6\" value=\"";
        // line 604
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 604), "installation", [], "any", false, false, false, 604), "electricien", [], "any", false, false, false, 604), "telephone", [], "any", false, false, false, 604), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <hr class=\"my-2 mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Référent chargé du dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
        // line 610
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "referent", [], "any", false, false, false, 610), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Contrôleur chargé du traitement</label>
                            ";
        // line 614
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 614)) {
            // line 615
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 615), "html", null, true);
            echo "\">
                            ";
        } else {
            // line 617
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 619
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Visite du site pour inspection</label>
                            ";
        // line 622
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visite", [], "any", false, false, false, 622)) {
            // line 623
            echo "                                <div class=\"row\">
                                    <div class=\"col-5\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Planifiée\">
                                    </div>
                                    <div class=\"col-7\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
            // line 628
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 628), "datePlanifie", [], "any", false, false, false, 628), "d-m-Y à H:i"), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"col-12\">
                                        Modèle Rapport d'inspection
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-1 fw-bold fs-6\" value=\"";
            // line 632
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 632), "rapport", [], "any", false, false, false, 632), "libelle", [], "any", false, false, false, 632), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 632), "rapport", [], "any", false, false, false, 632), "PointVerification", [], "any", false, false, false, 632), "count", [], "any", false, false, false, 632), "html", null, true);
            echo " points de vérification\">
                                    </div>
                                </div>
                            ";
        } else {
            // line 636
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 638
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Rapport de visite</label>
                            ";
        // line 641
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 641)) {
            // line 642
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Visite réalisée et Rapport élaboré\">
                            ";
        } else {
            // line 644
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non finalisé\">
                            ";
        }
        // line 646
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Résultat de conformité</label>
                            ";
        // line 649
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 649)) {
            // line 650
            echo "                                <input type=\"text\" disabled readonly class=\"bg-success bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Résultat inspection disponile\">
                            ";
        } else {
            // line 652
            echo "                                <input type=\"text\" disabled readonly class=\"bg-success  form-control text-light form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 654
        echo "                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 662
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 663
        echo "    ";
        $context["paiement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 663), "paiement", [], "any", false, false, false, 663);
        // line 664
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 664);
        // line 665
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 665);
        // line 666
        echo "<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"";
        // line 670
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "mode", [], "any", false, false, false, 670), "html", null, true);
        echo "\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        if (\"";
        // line 676
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "alimente", [], "any", false, false, false, 676), "html", null, true);
        echo "\" == 1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (\"";
        // line 684
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "collectif", [], "any", false, false, false, 684), "html", null, true);
        echo "\" == 1) {
            \$('.collectif1').show(); \$('.collectif0').hide();
        }
        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        valSel=\"";
        // line 688
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 688), "html", null, true);
        echo "\";
        if (valSel == \"Maison\" || valSel == \"IGH (Immeuble de Grande Hauteur)\") {
            \$('.typeConstruction1').show(); 
        }
        else if (valSel == \"Appartement\" || valSel == \"Foyer Logement\" || valSel == \"Dépendance\") {
            \$('.typeConstruction2').show();
        }
        else if (valSel == \"Etablissement Public\") {
            \$('.typeConstruction3').show(); 
        }

        // Bloc 3
        \$('.intervenantAutre1').hide(); \$('.natureTravaux1').hide();
        valSel=\"";
        // line 701
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenantAutre", [], "any", false, false, false, 701), "html", null, true);
        echo "\";
        if (valSel==\"Oui\") {
            \$('.intervenantAutre1').show(); 
        }
        valSel=\"";
        // line 705
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 705), "html", null, true);
        echo "\";
        if (valSel == \"Rénovation Partielle\") {
            \$('.natureTravaux1').show(); 
        }

        ";
        // line 711
        echo "        \$(\".bloc_2\").hide();
        \$(\".bloc_3\").hide();
        \$(\".bloc_4\").hide();
        \$(\".bloc_5\").hide();

        \$(\".btn_bloc_1\").on('click', function(){ showhide_bloc(1); });  
        \$(\".btn_bloc_2\").on('click', function(){ showhide_bloc(2); });  
        \$(\".btn_bloc_4\").on('click', function(){ showhide_bloc(4); });  
        \$(\".btn_bloc_3\").on('click', function(){ showhide_bloc(3); });  
        \$(\".btn_bloc_5\").on('click', function(){ showhide_bloc(5); });  

        \$('.alimente0').show(); \$('.alimente1').hide();
        \$('#form_abonnement').prop('required',false);
        \$('#form_compteur').prop('required',false);
        \$('#form_region').prop('required',true);
        \$('#form_usages').prop('required',true);
        \$('#form_departement').prop('required',true);
        \$('#form_localite').prop('required',true);
        \$('#form_adresse').prop('required',true);
        optSel=\$('input[type=radio][name=\"form[alimente]\"]:checked');
        valSel=optSel.val();
        if (valSel==1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
            \$('#form_abonnement').prop('required',true);
            \$('#form_compteur').prop('required',true);
        }

        \$('input[type=radio][name=\"form[alimente]\"]').change(function() {
            \$('.alimente0').show(); \$('.alimente1').hide();
            \$('#form_abonnement').prop('required',false);
            \$('#form_compteur').prop('required',false);
            optSel=\$('input[type=radio][name=\"form[alimente]\"]:checked');
            valSel=optSel.val();
            if (valSel == 1) {
                \$('.alimente1').show(); \$('.alimente0').hide();
                \$('#form_abonnement').prop('required',true);
                \$('#form_compteur').prop('required',true);
            }
        });

        on_region_change();
        on_departement_change();


    });

    function showhide_bloc(x) {
        le_bloc=\".bloc_\"+x
        le_btn_bloc=\".btn_bloc_\"+x
        le_titre_bloc=\".titre_bloc_\"+x
        
        if(\$(le_btn_bloc).prop('title')==\"Afficher les détails\") {
            \$(le_bloc).show();
            \$(le_titre_bloc).addClass(\"text-black\");
            \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 765
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-up"), "html", null, true);
        echo "\"></use></svg>Cacher ...'); 
            \$(le_btn_bloc).prop('title', 'Cacher les détails');
            \$(le_btn_bloc).addClass(\"text-danger\");
            \$(le_btn_bloc).removeClass(\"text-warning\");
        } else {
            \$(le_bloc).hide();
            \$(le_titre_bloc).removeClass(\"text-black\");
            \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 772
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
        echo "\"></use></svg>Afficher ...'); 
            \$(le_btn_bloc).prop('title', 'Afficher les détails');
            \$(le_btn_bloc).removeClass(\"text-danger\");
            \$(le_btn_bloc).addClass(\"text-warning\");
        }
    }

    function on_region_change() {
        var \$region = \$('#form_region');

        // When region gets selected ...
        \$region.change(function() {
            // Simulate form data, but only include the selected region value.
            var data = {};
            data['region'] = \$region.val();
            // Submit data via AJAX to the form's action path.
            \$.ajax({
                url : '";
        // line 789
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_load");
        echo "',
                type: 'post',
                data : data,
                complete: function(html) {
                // Replace current departement field ...
                \$('#form_departement').replaceWith(
                    // ... with the returned one from the AJAX response.
                    \$(html.responseText).find('#form_departement')
                );
                // Replace current loalite field ...
                \$('#form_localite').replaceWith(
                    // ... with the returned one from the AJAX response.
                    \$(html.responseText).find('#form_localite')
                );
                on_departement_change();
                // departement & localite field now displays the appropriate values.
                } 
            });
        });
    }

    function on_departement_change() {
        var \$departement = \$('#form_departement');
        // When departement gets selected ...
        \$departement.change(function() {
            // Simulate form data, but only include the selected departement value.
            var data = {};
            data['departement'] = \$departement.val();
            // Submit data via AJAX to the form's action path.
            \$.ajax({
                url : '";
        // line 819
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_load");
        echo "',
                type: 'post',
                data : data,
                complete: function(html) {
                // Replace current loalite field ...
                \$('#form_localite').replaceWith(
                    // ... with the returned one from the AJAX response.
                    \$(html.responseText).find('#form_localite')
                );
                // departement & localite field now displays the appropriate values.
                } 
            });
        });
    }

    
</script>
";
    }

    public function getTemplateName()
    {
        return "dossier/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1531 => 819,  1498 => 789,  1478 => 772,  1468 => 765,  1412 => 711,  1404 => 705,  1397 => 701,  1381 => 688,  1374 => 684,  1363 => 676,  1354 => 670,  1348 => 666,  1345 => 665,  1342 => 664,  1339 => 663,  1335 => 662,  1325 => 654,  1321 => 652,  1317 => 650,  1315 => 649,  1310 => 646,  1306 => 644,  1302 => 642,  1300 => 641,  1295 => 638,  1291 => 636,  1282 => 632,  1275 => 628,  1268 => 623,  1266 => 622,  1261 => 619,  1257 => 617,  1251 => 615,  1249 => 614,  1242 => 610,  1233 => 604,  1222 => 598,  1214 => 593,  1201 => 588,  1192 => 582,  1183 => 576,  1174 => 570,  1165 => 564,  1156 => 558,  1144 => 549,  1140 => 548,  1134 => 544,  1128 => 542,  1126 => 541,  1123 => 540,  1120 => 539,  1114 => 537,  1108 => 535,  1105 => 534,  1102 => 533,  1096 => 531,  1093 => 530,  1085 => 528,  1082 => 527,  1074 => 525,  1072 => 524,  1068 => 523,  1061 => 518,  1056 => 515,  1052 => 513,  1045 => 511,  1040 => 509,  1037 => 508,  1035 => 507,  1027 => 506,  1022 => 503,  1018 => 501,  1011 => 499,  1006 => 497,  1003 => 496,  1001 => 495,  993 => 490,  986 => 486,  979 => 482,  972 => 478,  965 => 474,  958 => 470,  951 => 466,  944 => 462,  933 => 454,  929 => 452,  922 => 448,  916 => 446,  914 => 445,  909 => 442,  906 => 441,  902 => 438,  895 => 434,  891 => 432,  884 => 430,  879 => 428,  876 => 427,  874 => 426,  866 => 421,  859 => 417,  852 => 413,  845 => 409,  838 => 405,  831 => 401,  824 => 397,  817 => 393,  806 => 385,  802 => 383,  795 => 379,  789 => 377,  787 => 376,  782 => 373,  779 => 372,  776 => 370,  768 => 365,  761 => 361,  753 => 356,  748 => 354,  741 => 350,  736 => 348,  729 => 344,  724 => 342,  717 => 338,  706 => 330,  699 => 325,  696 => 324,  693 => 322,  685 => 317,  678 => 313,  671 => 309,  664 => 305,  656 => 300,  649 => 296,  638 => 292,  627 => 284,  620 => 279,  617 => 278,  609 => 272,  602 => 268,  595 => 264,  588 => 260,  581 => 256,  573 => 251,  566 => 247,  559 => 243,  548 => 239,  541 => 235,  530 => 227,  526 => 225,  519 => 221,  513 => 219,  511 => 218,  506 => 215,  501 => 211,  495 => 208,  491 => 206,  489 => 205,  484 => 203,  477 => 199,  470 => 195,  455 => 183,  448 => 179,  441 => 175,  434 => 171,  427 => 166,  420 => 162,  414 => 160,  411 => 159,  407 => 158,  404 => 157,  398 => 155,  396 => 154,  391 => 151,  384 => 147,  378 => 145,  375 => 144,  369 => 142,  366 => 141,  360 => 139,  357 => 138,  351 => 136,  349 => 135,  346 => 134,  339 => 130,  335 => 129,  332 => 128,  329 => 127,  327 => 126,  316 => 117,  313 => 116,  307 => 114,  301 => 112,  298 => 111,  292 => 109,  288 => 107,  285 => 106,  281 => 104,  279 => 103,  276 => 102,  274 => 101,  266 => 96,  253 => 86,  247 => 82,  244 => 81,  241 => 80,  238 => 79,  235 => 78,  233 => 77,  230 => 76,  227 => 75,  224 => 74,  221 => 73,  218 => 72,  215 => 71,  212 => 70,  209 => 69,  206 => 68,  203 => 67,  200 => 66,  197 => 65,  194 => 64,  191 => 63,  188 => 62,  185 => 61,  182 => 60,  179 => 59,  176 => 58,  173 => 57,  170 => 56,  167 => 55,  164 => 54,  161 => 53,  158 => 52,  155 => 51,  152 => 50,  149 => 49,  146 => 48,  143 => 47,  140 => 46,  137 => 45,  134 => 44,  131 => 43,  128 => 42,  125 => 41,  122 => 40,  119 => 39,  116 => 38,  113 => 37,  110 => 36,  107 => 35,  104 => 34,  101 => 33,  98 => 32,  95 => 31,  93 => 30,  90 => 29,  87 => 28,  84 => 27,  82 => 26,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/show.html.twig");
    }
}
