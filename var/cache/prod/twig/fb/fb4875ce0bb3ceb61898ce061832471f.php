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

/* installation/show.html.twig */
class __TwigTemplate_8a2f20f0b52ff5dd55183cdaa9140c77 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "installation/show.html.twig", 1);
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
        background-color:#fff7e3;
        border: 1px solid #7a7b7c;
        color: black;
        font-weight:500;
    }
    </style>
    ";
        // line 13
        $context["action_demande"] = "Soumission";
        // line 14
        echo "    ";
        $context["link_liste"] = "app_installation_index";
        // line 15
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 15) < 7)) {
            // line 16
            echo "        ";
            $context["action_demande"] = "Soumission";
            // line 17
            echo "        ";
            $context["link_liste"] = "app_installation_index";
            // line 18
            echo "    ";
        } elseif (((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 18) == 7) || (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 18) == 8))) {
            // line 19
            echo "        ";
            $context["action_demande"] = "Paiement";
            // line 20
            echo "        ";
            $context["link_liste"] = "app_installation_index2";
            // line 21
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 21) == 9)) {
            // line 22
            echo "        ";
            $context["action_demande"] = "Validation";
            // line 23
            echo "        ";
            $context["link_liste"] = "app_installation_index3";
            // line 24
            echo "    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 26), "get", [0 => "page_liste_demande"], "method", true, true, false, 26) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 26), "get", [0 => "page_liste_demande"], "method", false, false, false, 26))) {
            // line 27
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 27), "get", [0 => "page_liste_demande"], "method", false, false, false, 27);
            // line 28
            echo "    ";
        }
        // line 29
        echo "
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 33
        echo twig_escape_filter($this->env, ($context["action_demande"] ?? null), "html", null, true);
        echo " de demandes </span>
            </a>
        </header>
        <div class=\"row\">
        ";
        // line 37
        $context["offset"] = "offset-md-1";
        echo "            
        ";
        // line 38
        $context["badge_etat"] = "text-danger";
        // line 39
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 39) == 7)) {
            // line 40
            echo "            ";
            $context["badge_etat"] = "text-danger";
            // line 41
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 41) > 7)) {
            // line 42
            echo "            ";
            $context["badge_etat"] = "text-success";
            // line 43
            echo "        ";
        }
        // line 44
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, ($context["offset"] ?? null), "html", null, true);
        echo " col-lg-10 mb-2  p-3\">

                <div class=\"\">
                    <nav class=\"navbar shadow bg-warning border border-dark my-2 mb-2 p-0\">
                        <div class=\"container-fluid ps-4\">
                            <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                                <div class=\"col\">
                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                        <use xlink:href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                    </svg>
                                    Détails de la demande 
                                </div>
                                <div class=\"col\" align=\"right\">
                                    ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 57) >= 7)) {
            // line 58
            echo "                                        <span class=\"";
            echo twig_escape_filter($this->env, ($context["badge_etat"] ?? null), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 58), "etat", [], "any", false, false, false, 58), "html", null, true);
            echo "]</span>
                                    ";
        } else {
            // line 60
            echo "                                        <span class=\"";
            echo twig_escape_filter($this->env, ($context["badge_etat"] ?? null), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "etat", [], "any", false, false, false, 60), "html", null, true);
            echo "]</span>
                                    ";
        }
        // line 62
        echo "                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class=\"\">
                            <div class=\"row\">
                            \t<fieldset id=\"synthese_demande\">
                                    ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdBy", [], "any", false, false, false, 69)], "method", false, false, false, 69)) {
            // line 70
            echo "                                        ";
            $context["creator"] = twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdBy", [], "any", false, false, false, 70)], "method", false, false, false, 70);
            // line 71
            echo "                                        <div align=\"left\" class=\"float-start border border-warning shadow p-2 fs-8 fw-light\">
                                            <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["creator"] ?? null), "nomComplet", [], "any", false, false, false, 72), "html", null, true);
            echo "</span></div>
                                            <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdAt", [], "any", false, false, false, 73), "d-m-Y à H:i:s"), "html", null, true);
            echo "</span></div>
                                        </div>
                                    ";
        }
        // line 76
        echo "                                    <div align=\"right\">
                                        ";
        // line 77
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 77) < 7)) {
            // line 78
            echo "                                            ";
            $context["link_edit"] = "app_installation_add";
            // line 79
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 79) > 1)) {
                // line 80
                echo "                                                ";
                $context["link_edit"] = ("app_installation_add" . twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 80));
                // line 81
                echo "                                            ";
            }
            // line 82
            echo "                                            ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PUBLIC") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
                // line 83
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "gdroit_de", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83), 1 => "installation", 2 => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 83)], "method", false, false, false, 83)) {
                    // line 84
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link_edit"] ?? null), ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 84)]), "html", null, true);
                    echo "\" class=\"next action-button btn btn-success btn my-3\">Finaliser la saisie</a>
                                                ";
                }
                // line 86
                echo "                                            ";
            }
            // line 87
            echo "                                        ";
        } else {
            // line 88
            echo "                                            <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-outline-warning btn my-2\">PDF Demande</a>
                                            ";
            // line 89
            if ((((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 89) >= 7) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 89), "accepte", [], "any", false, false, false, 89)) && (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DAF")))) {
                // line 90
                echo "                                                <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_facturepdf", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 90), "installation", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Facture</a>
                                            ";
            }
            // line 92
            echo "                                            ";
            if (((((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 92) == 7) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 92), "accepte", [], "any", false, false, false, 92)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 92), "rejet", [], "any", false, false, false, 92)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
                // line 93
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_accepte0", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-danger btn my-2 ms-5\">Rejeter Demande soumise</a>
                                                <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_accepte1", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-success btn my-2 ms-2\">Valider Demande soumise</a>
                                                ";
                // line 99
                echo "                                            ";
            }
            // line 100
            echo "                                            ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 100) == 7) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 100), "accepte", [], "any", false, false, false, 100)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE")))) {
                // line 101
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-success btn my-2 ms-5\">Enregistrer Paiement</a>
                                                ";
                // line 106
                echo "                                            ";
            }
            // line 107
            echo "                                        ";
        }
        // line 108
        echo "                                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link_liste"] ?? null));
        echo "\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour à la liste</a>
                                    </div>                                
                                ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 110)) {
            // line 111
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 111), "rejet", [], "any", false, false, false, 111)) {
                // line 112
                echo "                                        <div class=\"alert alert-danger py-2 fs-6\"><span class=\"text-danger\">Demande rejetée:  </span> <span class=\"fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 112), "motifRejet", [], "any", false, false, false, 112), "html", null, true);
                echo "</span></div>
                                    ";
            }
            // line 114
            echo "                                    <div class=\"card mb-2\">
                                        <h2 class=\"fs-title\">Puissance demandée et tarif ";
            // line 115
            if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandecourante", [], "any", false, false, false, 115) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandecourante", [], "any", false, false, false, 115), "numeroPassage", [], "any", false, false, false, 115) == 2))) {
                echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
            }
            // line 116
            echo "                                            ";
            if ((((0 && (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 116) >= 7)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 116), "numeroPassage", [], "any", false, false, false, 116) == 1)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")))) {
                // line 117
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_clone", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 117)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-warning py-0 border-dark btn ms-5 float-end\">
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                                    <use xlink:href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#files"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                Cloner la Demande</a>
                                            ";
            }
            // line 123
            echo "                                        </h2>
                                        <div class=\"row\">
                                            <hr class=\"mb-3\" />
                                            <div class=\"col-lg-3\">
                                                <label >Numéro Demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 128), "numero", [], "any", false, false, false, 128), "html", null, true);
            echo "\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Date Demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 132
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 132), "dateCreation", [], "any", false, false, false, 132), "d-m-Y"), "html", null, true);
            echo "\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Puissance demandée</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 136), "puissance", [], "any", false, false, false, 136), "html", null, true);
            echo " kW\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Cout de la demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 140), "cout", [], "any", false, false, false, 140), "html", null, true);
            echo " FCFA\">
                                            </div>
                                        </div>  
                                    </div>
                                ";
        }
        // line 145
        echo "                                ";
        // line 146
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">
                                    Données de base de la demande
                                    ";
        // line 149
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 150
            echo "                                        <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit1", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 150)]), "html", null, true);
            echo "\" class=\" pt fs-8 text-dark\">
                                        <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                            <use xlink:href=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                        </svg>
                                        </a>
                                    ";
        }
        // line 156
        echo "                                    </h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_usage\" >Usage Installation</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 161), "html", null, true);
        echo "\" id=\"form_usage\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 165
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "alimente", [], "any", false, false, false, 165)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_alimente\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_compteur\" >Numéro Compteur</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "compteur", [], "any", false, false, false, 169), "html", null, true);
        echo "\" id=\"form_compteur\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "abonnement", [], "any", false, false, false, 173), "html", null, true);
        echo "\" id=\"form_abonnement\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "grstReseau", [], "any", false, false, false, 177), "html", null, true);
        echo "\" id=\"form_grstReseau\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_localite\" >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 182), "html", null, true);
        echo "\" id=\"form_localite\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_adresse\" >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "adresse", [], "any", false, false, false, 186), "html", null, true);
        echo "\" id=\"form_adresse\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_habitation\" >Complément Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "habitation", [], "any", false, false, false, 190), "html", null, true);
        echo "\" id=\"form_habitation\">
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <label for=\"form_lattitude\" >Latitude</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "lattitude", [], "any", false, false, false, 194), "html", null, true);
        echo "\" id=\"form_lattitude\">
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <label for=\"form_longitude\" >Longitude</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "longitude", [], "any", false, false, false, 198), "html", null, true);
        echo "\" id=\"form_longitude\">
                                        </div>
                                    </div>
                                </div>
                                
                                ";
        // line 204
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 204)) {
            // line 205
            echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Caractéristiques du site</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_collectif collectif1\" >Bien Collectif ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 211
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "collectif", [], "any", false, false, false, 211)) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "\" id=\"form_collectif\">
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            <label for=\"form_nomSite\" >Nom du site</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "nomSite", [], "any", false, false, false, 215), "html", null, true);
            echo "\" id=\"form_nomSite\">
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            <label for=\"form_logement\" >Nombre de logements</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "logement", [], "any", false, false, false, 219), "html", null, true);
            echo "\" id=\"form_logement\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-6\">
                                            <label for=\"form_typeConstruction\" >Type de construction</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 224), "nom", [], "any", false, false, false, 224), "html", null, true);
            echo "\" id=\"form_typeConstruction\">
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1\">
                                            <label for=\"form_niveau\" >Nombre de niveaux</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "niveau", [], "any", false, false, false, 228), "html", null, true);
            echo "\" id=\"form_niveau\">
                                        </div>
                                        <div class=\"col-lg-6 typeConstruction3\">
                                            <label for=\"form_activite\" >Activités</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "activite", [], "any", false, false, false, 232), "html", null, true);
            echo "\" id=\"form_activite\">
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                            <label for=\"form_priece\" >Nombre de pièces</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "priece", [], "any", false, false, false, 236), "html", null, true);
            echo "\" id=\"form_priece\">
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        // line 241
        echo "
                                ";
        // line 243
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 243)) {
            // line 244
            echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Caractéristiques de l'installation</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                            <label for=\"form_natureTravaux\" >Nature des travaux</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 250
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 250), "html", null, true);
            echo "\" id=\"form_natureTravaux\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neuf15\" >Neufs_15</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neuf15", [], "any", false, false, false, 254), "html", null, true);
            echo "\" id=\"form_neufs_15\">
                                            <label for=\"form_existant15\" >Existants_15</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 256
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existant15", [], "any", false, false, false, 256), "html", null, true);
            echo "\" id=\"form_existant15\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neuf25\" >Neufs_25</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neuf25", [], "any", false, false, false, 260), "html", null, true);
            echo "\" id=\"form_neuf25\">
                                            <label for=\"form_existant25\" >Existants_25</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existant25", [], "any", false, false, false, 262), "html", null, true);
            echo "\" id=\"form_existant25\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neufAutre\" >Neufs_Autres</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neufAutre", [], "any", false, false, false, 266), "html", null, true);
            echo "\" id=\"form_neufAutre\">
                                            <label for=\"form_existantAutre\" >Existants_Autres</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 268
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existantAutre", [], "any", false, false, false, 268), "html", null, true);
            echo "\" id=\"form_existantAutre\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4 intervenantAutre1\">
                                            <label for=\"form_intervenantAutre\" >Autres intervenants ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenantAutre", [], "any", false, false, false, 273), "html", null, true);
            echo "\" id=\"form_intervenantAutre\">
                                        </div>
                                        <div class=\"col-lg-8 intervenantAutre1\">
                                            <label for=\"form_intervenant\" >Intervenants</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenant", [], "any", false, false, false, 277), "html", null, true);
            echo "\" id=\"form_intervenant\">
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        // line 282
        echo "
                                ";
        // line 284
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 284)) {
            // line 285
            echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">
                                    Informations sur l'électricien
                                    ";
            // line 288
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 289
                echo "                                        <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit2", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 289)]), "html", null, true);
                echo "\" class=\" pt fs-8 text-dark\">
                                        <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                            <use xlink:href=\"";
                // line 291
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                        </svg>
                                        </a>
                                    ";
            }
            // line 295
            echo "                                    </h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                            <label >Nom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 300
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 300), "nom", [], "any", false, false, false, 300), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-5\">
                                            <label >Prénom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 304
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 304), "prenom", [], "any", false, false, false, 304), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 308
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 308), "localite", [], "any", false, false, false, 308), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 312
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 312), "adresse", [], "any", false, false, false, 312), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Téléphone</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 316), "telephone", [], "any", false, false, false, 316), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Email</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 320
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 320), "email", [], "any", false, false, false, 320), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Type de pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 324
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 324), "typePiece", [], "any", false, false, false, 324), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Numéro Pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 328
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 328), "numPiece", [], "any", false, false, false, 328), "html", null, true);
            echo "\">
                                        </div>

                                        <div class=\"col-lg-4 mt-2\">
                                        <label >Scan CNI Electricien</label><br />
                                        ";
            // line 333
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJElectricien", [], "any", false, false, false, 333)) {
                // line 334
                echo "                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
                // line 335
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                <span onclick=\"window.open('";
                // line 337
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 337), "type" => "electricien"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJElectricien", [], "any", false, false, false, 337), "fichier", [], "any", false, false, false, 337), "html", null, true);
                echo " </span>
                                        ";
            } else {
                // line 339
                echo "                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        ";
            }
            // line 341
            echo "                                        </div>

                                    </div>
                                </div>
                                ";
        }
        // line 345
        echo "                                

                                ";
        // line 348
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 348)) {
            // line 349
            echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">
                                    Informations sur le propriétaire de l'installation
                                    ";
            // line 352
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 353
                echo "                                        <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit3", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 353)]), "html", null, true);
                echo "\" class=\" pt fs-8 text-dark\">
                                        <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                            <use xlink:href=\"";
                // line 355
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                        </svg>
                                        </a>
                                    ";
            }
            // line 359
            echo "                                    </h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                            <label >Nom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 364
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 364), "nom", [], "any", false, false, false, 364), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-5\">
                                            <label >Prénom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 368
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 368), "prenom", [], "any", false, false, false, 368), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 372
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 372), "localite", [], "any", false, false, false, 372), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 376
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 376), "adresse", [], "any", false, false, false, 376), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Téléphone</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 380
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 380), "telephone", [], "any", false, false, false, 380), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Email</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 384
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 384), "email", [], "any", false, false, false, 384), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Type de pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 388
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 388), "typePiece", [], "any", false, false, false, 388), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Numéro Pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 392
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 392), "numPiece", [], "any", false, false, false, 392), "html", null, true);
            echo "\">
                                        </div>

                                        <div class=\"col-lg-4 mt-2\">
                                            <label >Scan CNI Propriétaire</label><br />
                                        ";
            // line 397
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJProprietaire", [], "any", false, false, false, 397)) {
                // line 398
                echo "                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
                // line 399
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                <span onclick=\"window.open('";
                // line 401
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 401), "type" => "proprietaire"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJProprietaire", [], "any", false, false, false, 401), "fichier", [], "any", false, false, false, 401), "html", null, true);
                echo " </span>
                                        ";
            } else {
                // line 403
                echo "                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        ";
            }
            // line 405
            echo "                                        </div>

                                        <div class=\"col-lg-4 mt-2\">
                                        <label >";
            // line 408
            if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 408) != "erp_ert")) {
                echo "Titre de propriété";
            } else {
                echo "Documents Techniques";
            }
            echo "</label><br />
                                        ";
            // line 409
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJDossierTechnique", [], "any", false, false, false, 409)) {
                // line 410
                echo "                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
                // line 411
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                <span onclick=\"window.open('";
                // line 413
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 413), "type" => "dosstech"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJDossierTechnique", [], "any", false, false, false, 413), "fichier", [], "any", false, false, false, 413), "html", null, true);
                echo " </span>
                                        ";
            } else {
                // line 415
                echo "                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        ";
            }
            // line 417
            echo "                                        </div>

                                    </div>
                                ";
        }
        // line 421
        echo "                                </div>
                                </fieldset>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 431
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 432
        echo "<script>
    \$(document).ready(function() {

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        optSel=\$('#form_alimente'); valSel=optSel.val();
        if (valSel==\"Oui\") {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (valSel==\"Oui\") {
            \$('.collectif1').show(); \$('.collectif0').hide();
        }
        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        optSel=\$('#form_typeConstruction');
        valSel=optSel.val();
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
        optSel=\$('#form_intervenantAutre');
        valSel=optSel.val();
        if (valSel==\"Oui\") {
            \$('.intervenantAutre1').show(); 
        }
        optSel=\$('#form_natureTravaux');
        valSel=optSel.val();
        if (valSel == \"Rénovation Partielle\") {
            \$('.natureTravaux1').show(); 
        }

        // Bloc 4

        // Bloc 5

    });
</script>
";
    }

    public function getTemplateName()
    {
        return "installation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  897 => 432,  893 => 431,  881 => 421,  875 => 417,  871 => 415,  864 => 413,  859 => 411,  856 => 410,  854 => 409,  846 => 408,  841 => 405,  837 => 403,  830 => 401,  825 => 399,  822 => 398,  820 => 397,  812 => 392,  805 => 388,  798 => 384,  791 => 380,  784 => 376,  777 => 372,  770 => 368,  763 => 364,  756 => 359,  749 => 355,  743 => 353,  741 => 352,  736 => 349,  733 => 348,  729 => 345,  722 => 341,  718 => 339,  711 => 337,  706 => 335,  703 => 334,  701 => 333,  693 => 328,  686 => 324,  679 => 320,  672 => 316,  665 => 312,  658 => 308,  651 => 304,  644 => 300,  637 => 295,  630 => 291,  624 => 289,  622 => 288,  617 => 285,  614 => 284,  611 => 282,  603 => 277,  596 => 273,  588 => 268,  583 => 266,  576 => 262,  571 => 260,  564 => 256,  559 => 254,  552 => 250,  544 => 244,  541 => 243,  538 => 241,  530 => 236,  523 => 232,  516 => 228,  509 => 224,  501 => 219,  494 => 215,  483 => 211,  475 => 205,  472 => 204,  464 => 198,  457 => 194,  450 => 190,  443 => 186,  436 => 182,  428 => 177,  421 => 173,  414 => 169,  403 => 165,  396 => 161,  389 => 156,  382 => 152,  376 => 150,  374 => 149,  369 => 146,  367 => 145,  359 => 140,  352 => 136,  345 => 132,  338 => 128,  331 => 123,  324 => 119,  318 => 117,  315 => 116,  311 => 115,  308 => 114,  302 => 112,  299 => 111,  297 => 110,  291 => 108,  288 => 107,  285 => 106,  280 => 101,  277 => 100,  274 => 99,  270 => 94,  265 => 93,  262 => 92,  256 => 90,  254 => 89,  249 => 88,  246 => 87,  243 => 86,  237 => 84,  234 => 83,  231 => 82,  228 => 81,  225 => 80,  222 => 79,  219 => 78,  217 => 77,  214 => 76,  208 => 73,  204 => 72,  201 => 71,  198 => 70,  196 => 69,  187 => 62,  179 => 60,  171 => 58,  169 => 57,  161 => 52,  149 => 44,  146 => 43,  143 => 42,  140 => 41,  137 => 40,  134 => 39,  132 => 38,  128 => 37,  121 => 33,  115 => 29,  112 => 28,  109 => 27,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  71 => 14,  69 => 13,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/show.html.twig");
    }
}
