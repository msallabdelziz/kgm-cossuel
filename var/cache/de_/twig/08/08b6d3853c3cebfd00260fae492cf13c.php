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

/* dossier/show2.html.twig */
class __TwigTemplate_c43fc0ae170dd21dfee0ae8e98c7c694 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/show2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/show2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dossier/show2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "COSSUEL";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context["paiement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 26, $this->source); })()), "demande", [], "any", false, false, false, 26), "paiement", [], "any", false, false, false, 26);
        // line 27
        echo "    ";
        $context["action_demande"] = "Consultation ";
        // line 28
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 28, $this->source); })()), "affecte", [], "any", false, false, false, 28)) {
            // line 29
            echo "        ";
            $context["action_demande"] = "Affectation";
            // line 30
            echo "        ";
            $context["link_liste"] = "app_dossier_affectation";
            // line 31
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                // line 32
                echo "            ";
                $context["link_action"] = "app_dossier_affecter";
                // line 33
                echo "        ";
            }
            // line 34
            echo "        ";
            $context["libelle_action"] = "Affecter à un contrôleur";
            // line 35
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 35, $this->source); })()), "visite", [], "any", false, false, false, 35)) {
            // line 36
            echo "        ";
            $context["action_demande"] = "Planification Visite";
            // line 37
            echo "        ";
            $context["link_liste"] = "app_dossier_visite";
            // line 38
            echo "        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT"))) {
                // line 39
                echo "            ";
                $context["link_action"] = "app_dossier_visiter";
                // line 40
                echo "        ";
            }
            // line 41
            echo "        ";
            $context["libelle_action"] = "Planifier une visite";
            // line 42
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 42, $this->source); })()), "rapport", [], "any", false, false, false, 42)) {
            // line 43
            echo "        ";
            $context["action_demande"] = "Rapport de Visite";
            // line 44
            echo "        ";
            $context["link_liste"] = "app_dossier_rapport";
            // line 45
            echo "        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT"))) {
                // line 46
                echo "            ";
                $context["link_action"] = "app_dossier_rapporter";
                // line 47
                echo "        ";
            }
            // line 48
            echo "        ";
            $context["libelle_action"] = "Elaborer le rapport de visite";
            // line 49
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 49, $this->source); })()), "attestation", [], "any", false, false, false, 49)) {
            // line 50
            echo "        ";
            $context["action_demande"] = "Résultat Inspection";
            // line 51
            echo "        ";
            $context["link_liste"] = "app_dossier_attestation";
            // line 52
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                // line 53
                echo "            ";
                $context["link_action"] = "app_dossier_attester";
                // line 54
                echo "        ";
            }
            // line 55
            echo "        ";
            $context["libelle_action"] = "Valider Rapport Inspection";
            // line 56
            echo "    ";
        }
        // line 57
        echo "
    ";
        // line 58
        $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 58, $this->source); })()), "demande", [], "any", false, false, false, 58);
        // line 59
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 59, $this->source); })()), "installation", [], "any", false, false, false, 59);
        // line 60
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 60), "get", [0 => "page_liste_dossier"], "method", true, true, false, 60) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "get", [0 => "page_liste_dossier"], "method", false, false, false, 60))) {
            // line 61
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "session", [], "any", false, false, false, 61), "get", [0 => "page_liste_dossier"], "method", false, false, false, 61);
            // line 62
            echo "    ";
        }
        // line 63
        echo "    
    ";
        // line 64
        $context["link_liste"] = "app_dossier_show";
        // line 65
        echo "
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["action_demande"]) || array_key_exists("action_demande", $context) ? $context["action_demande"] : (function () { throw new RuntimeError('Variable "action_demande" does not exist.', 69, $this->source); })()), "html", null, true);
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
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                </svg>
                                Détails du dossier
                            </div>
                            <div class=\"col\" align=\"right\">
                                <span class=\"text-success\">[
                                ";
        // line 85
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 85, $this->source); })()), "attestation", [], "any", false, false, false, 85)) {
            // line 86
            echo "                                    En attente de 
                                ";
        }
        // line 88
        echo "                                ";
        if ((( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 88, $this->source); })()), "Etat", [], "any", false, false, false, 88) == "Affectation") && ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 88, $this->source); })()), "Etat", [], "any", false, false, false, 88) == "Attestation"))) {
            // line 89
            echo "                                    En attente d' 
                                ";
        }
        // line 91
        echo "                                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 91, $this->source); })()), "Etat", [], "any", false, false, false, 91), "html", null, true);
        echo " ]</span>
                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                <div align=\"left\" class=\"float-start border border-warning shadow p-2 fs-8 mt-2 fw-light\">
                    <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 102, $this->source); })()), "controleur", [], "any", false, false, false, 102), "nomComplet", [], "any", false, false, false, 102), "html", null, true);
        echo "</span></div>
                    <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">";
        // line 103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 103, $this->source); })()), "visiteCourante", [], "any", false, false, false, 103), "dateRapporte", [], "any", false, false, false, 103), "d-m-Y à H:i:s"), "html", null, true);
        echo "</span></div>
                </div>
                <div align=\"right\">
                ";
        // line 106
        if ((twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 106, $this->source); })()), "rapport", [], "any", false, false, false, 106) &&  !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 106, $this->source); })()), "attestation", [], "any", false, false, false, 106))) {
            // line 107
            echo "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                // line 108
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_rejetrapport", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-danger btn my-3\">Rejeter le rapport</a>
                    <a href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_attester", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-primary btn my-3\">";
                echo twig_escape_filter($this->env, (isset($context["libelle_action"]) || array_key_exists("libelle_action", $context) ? $context["libelle_action"] : (function () { throw new RuntimeError('Variable "libelle_action" does not exist.', 109, $this->source); })()), "html", null, true);
                echo "</a>
                    ";
            }
            // line 111
            echo "                ";
        }
        // line 112
        echo "                    <a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_rapportpdf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Rapport</a>
                    <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link_liste"]) || array_key_exists("link_liste", $context) ? $context["link_liste"] : (function () { throw new RuntimeError('Variable "link_liste" does not exist.', 113, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour</a>
                </div>
                <fieldset id=\"synthese_demande\">
                    ";
        // line 116
        if ((twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 116, $this->source); })()), "visite", [], "any", false, false, false, 116) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 116, $this->source); })()), "visiteCourante", [], "any", false, false, false, 116), "rejetRapport", [], "any", false, false, false, 116))) {
            // line 117
            echo "                        <div class=\"alert alert-danger py-2 fs-6\"><span class=\"text-danger\">Rapport rejeté:  </span> <span class=\"fs-7\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 117, $this->source); })()), "visiteCourante", [], "any", false, false, false, 117), "motifRejetRapport", [], "any", false, false, false, 117), "html", null, true);
            echo "</span></div>
                    ";
        }
        // line 119
        echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif ";
        // line 120
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 120, $this->source); })()), "demandecourante", [], "any", false, false, false, 120) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 120, $this->source); })()), "demandecourante", [], "any", false, false, false, 120), "numeroPassage", [], "any", false, false, false, 120) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
        }
        echo "</h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Numéro Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 125, $this->source); })()), "installation", [], "any", false, false, false, 125), "demandeCourante", [], "any", false, false, false, 125), "numero", [], "any", false, false, false, 125), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 129, $this->source); })()), "installation", [], "any", false, false, false, 129), "demandeCourante", [], "any", false, false, false, 129), "dateCreation", [], "any", false, false, false, 129), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 133, $this->source); })()), "installation", [], "any", false, false, false, 133), "demandeCourante", [], "any", false, false, false, 133), "puissance", [], "any", false, false, false, 133), "html", null, true);
        echo " kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 137, $this->source); })()), "installation", [], "any", false, false, false, 137), "demandeCourante", [], "any", false, false, false, 137), "cout", [], "any", false, false, false, 137), "html", null, true);
        echo " FCFA\">
                            </div>
                        ";
        // line 139
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 139, $this->source); })()), "rapport", [], "any", false, false, false, 139)) {
            // line 140
            echo "                            <div class=\"col-lg-3\">
                                <label >Latitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 142, $this->source); })()), "lattitude", [], "any", false, false, false, 142), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Longitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 146, $this->source); })()), "longitude", [], "any", false, false, false, 146), "html", null, true);
            echo "\">
                            </div>
                        ";
        }
        // line 149
        echo "                        </div>  
                    </div>

                    <div class=\"container mt-4 mx-0\">
                        <div class=\"row\">
                            <div>
                        ";
        // line 155
        $context["rub"] = "";
        // line 156
        echo "                        ";
        $context["ix"] = 0;
        // line 157
        echo "                        ";
        $context["les_detailverif"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 157, $this->source); })()), "visiteCourante", [], "any", false, false, false, 157), "detailVerification", [], "any", false, false, false, 157);
        // line 158
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["les_detailverif"]) || array_key_exists("les_detailverif", $context) ? $context["les_detailverif"] : (function () { throw new RuntimeError('Variable "les_detailverif" does not exist.', 158, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
            // line 159
            echo "                                ";
            if (((isset($context["rub"]) || array_key_exists("rub", $context) ? $context["rub"] : (function () { throw new RuntimeError('Variable "rub" does not exist.', 159, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 159), "rubrique", [], "any", false, false, false, 159), "id", [], "any", false, false, false, 159))) {
                // line 160
                echo "                                    ";
                if ((isset($context["rub"]) || array_key_exists("rub", $context) ? $context["rub"] : (function () { throw new RuntimeError('Variable "rub" does not exist.', 160, $this->source); })())) {
                    // line 161
                    echo "                                        </div>
                                    ";
                }
                // line 163
                echo "                                    <div id=\"zrub_";
                echo twig_escape_filter($this->env, (isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 163, $this->source); })()), "html", null, true);
                echo "\">
                                        <h5 class=\"p-2 bg-dark text-light shadow border-bottom\"> ";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 164), "rubrique", [], "any", false, false, false, 164), "numero", [], "any", false, false, false, 164), "html", null, true);
                echo "- ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 164), "rubrique", [], "any", false, false, false, 164), "libelle", [], "any", false, false, false, 164), "html", null, true);
                echo "</h5>
                                    ";
                // line 165
                $context["rub"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 165), "rubrique", [], "any", false, false, false, 165), "id", [], "any", false, false, false, 165);
                // line 166
                echo "                                    ";
                $context["ix"] = ((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 166, $this->source); })()) + 1);
                // line 167
                echo "                                ";
            }
            // line 168
            echo "                                <div class=\"shadow p-4 pt-2 mb-3\">
                                    <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                        <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                            <use xlink:href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
            echo "\"></use>
                                        </svg> ";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 172), "objetVerification", [], "any", false, false, false, 172), "html", null, true);
            echo "
                                        <div class=\"float-end fw-bold\">
                                        ";
            // line 174
            if (twig_get_attribute($this->env, $this->source, $context["pt"], "sansobjet", [], "any", false, false, false, 174)) {
                // line 175
                echo "                                                <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"black\">
                                                    <use xlink:href=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x-octagon-fill"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                Sans Objet
                                        ";
            } else {
                // line 180
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["pt"], "conclusion", [], "any", false, false, false, 180)) {
                    // line 181
                    echo "                                                    <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"green\">
                                                        <use xlink:href=\"";
                    // line 182
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check"), "html", null, true);
                    echo "\"></use>
                                                    </svg>
                                                    <span class=\"text-success\">";
                    // line 184
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 184), "libelleConclusion1", [], "any", false, false, false, 184), "html", null, true);
                    echo "</span>
                                            ";
                } else {
                    // line 186
                    echo "                                                    <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"red\">
                                                        <use xlink:href=\"";
                    // line 187
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x"), "html", null, true);
                    echo "\"></use>
                                                    </svg>
                                                    <span class=\"text-danger\">";
                    // line 189
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 189), "libelleConclusion2", [], "any", false, false, false, 189), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 191
                echo "                                        ";
            }
            // line 192
            echo "                                        </div>
                                    </div>
                                        ";
            // line 194
            if (( !twig_get_attribute($this->env, $this->source, $context["pt"], "conclusion", [], "any", false, false, false, 194) &&  !twig_get_attribute($this->env, $this->source, $context["pt"], "sansobjet", [], "any", false, false, false, 194))) {
                // line 195
                echo "                                                <div class=\"fw-light ms-4 fs-8\">
                                                Commentaire: <span class=\"text-danger\">";
                // line 196
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "commentaire", [], "any", false, false, false, 196), "html", null, true);
                echo "</span>
                                                </div>
                                        ";
            }
            // line 199
            echo "                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "
                                <div>
                                    <h5 class=\"p-2 bg-dark text-light shadow border-bottom\">Tableau 2: Mesures des prises de terre </h5>
                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Mesures des prises de terre
                                                <div class=\"float-end fw-bold\">
                                                </div>
                                            </div>
                                            <div class=\"fw-light ms-4 fs-7\">
                                                <span class=\"text-dark\">";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 214, $this->source); })()), "visiteCourante", [], "any", false, false, false, 214), "mesurePriseTerre", [], "any", false, false, false, 214), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Barrette
                                                <div class=\"float-end fw-bold\">
                                                </div>
                                            </div>
                                            <div class=\"fw-light ms-4 fs-7\">
                                                <span class=\"text-dark\">";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 226, $this->source); })()), "visiteCourante", [], "any", false, false, false, 226), "barrette", [], "any", false, false, false, 226), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h5 class=\"p-2 bg-dark text-light shadow border-bottom\">Autres observations </h5>
                                    <div class=\"shadow p-4 pt-2 mb-3\">
                                        <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                            <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                <use xlink:href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                            </svg> Commentaire sur l'inspection
                                            <div class=\"float-end fw-bold\">
                                            </div>
                                        </div>
                                        <div class=\"fw-light ms-4 fs-8\">
                                            <span class=\"text-danger\">";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 243, $this->source); })()), "visiteCourante", [], "any", false, false, false, 243), "commentaire2", [], "any", false, false, false, 243), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 1
                                                <div class=\"\">
                                                ";
        // line 254
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 254, $this->source); })()), "PJPhoto1", [], "any", false, false, false, 254)) {
            // line 255
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 255, $this->source); })()), "PJPhoto1", [], "any", false, false, false, 255), "fichier", [], "any", false, false, false, 255))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 257
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 2
                                                <div class=\"\">
                                                ";
        // line 266
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 266, $this->source); })()), "PJPhoto2", [], "any", false, false, false, 266)) {
            // line 267
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 267, $this->source); })()), "PJPhoto2", [], "any", false, false, false, 267), "fichier", [], "any", false, false, false, 267))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 269
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 3
                                                <div class=\"\">
                                                ";
        // line 278
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 278, $this->source); })()), "PJPhoto3", [], "any", false, false, false, 278)) {
            // line 279
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 279, $this->source); })()), "PJPhoto3", [], "any", false, false, false, 279), "fichier", [], "any", false, false, false, 279))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 281
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 4
                                                <div class=\"\">
                                                ";
        // line 290
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 290, $this->source); })()), "PJPhoto4", [], "any", false, false, false, 290)) {
            // line 291
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 291, $this->source); })()), "PJPhoto4", [], "any", false, false, false, 291), "fichier", [], "any", false, false, false, 291))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 293
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Signature Controleur
                                                <div class=\"\">
                                                ";
        // line 305
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 305, $this->source); })()), "visiteCourante", [], "any", false, false, false, 305), "signcontroleur", [], "any", false, false, false, 305)) {
            // line 306
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 306, $this->source); })()), "visiteCourante", [], "any", false, false, false, 306), "signcontroleur", [], "any", false, false, false, 306), "fichier", [], "any", false, false, false, 306))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 308
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Signature Electricien
                                                <div class=\"\">
                                                ";
        // line 317
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 317, $this->source); })()), "visiteCourante", [], "any", false, false, false, 317), "signelectricien", [], "any", false, false, false, 317)) {
            // line 318
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 318, $this->source); })()), "visiteCourante", [], "any", false, false, false, 318), "signelectricien", [], "any", false, false, false, 318), "fichier", [], "any", false, false, false, 318))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 320
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2 priority-3\" id=\"paiement_demande\">
                <div align=\"right\">
                    <a href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link_liste"]) || array_key_exists("link_liste", $context) ? $context["link_liste"] : (function () { throw new RuntimeError('Variable "link_liste" does not exist.', 334, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 334, $this->source); })()), "id", [], "any", false, false, false, 334)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour</a>
                </div>                                
                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Traitement du dossier
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_histo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 339, $this->source); })()), "id", [], "any", false, false, false, 339)]), "html", null, true);
        echo "\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#hourglass-split"), "html", null, true);
        echo "\"></use></svg>
                            </a>
                        </div>
                    </h2>
                    <div class=\"row\">
                        <hr class=\"mb-3\" />
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >N° Dossier</label>
                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-0 fw-bold fs-6\" value=\"";
        // line 349
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 349, $this->source); })()), "demande", [], "any", false, false, false, 349), "numero", [], "any", false, false, false, 349), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Date création dossier</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-success form-control py-0 fw-bold fs-6\" value=\"";
        // line 355
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 355, $this->source); })()), "dateCreation", [], "any", false, false, false, 355), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" class=\"fs-7\" >Usage</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fw-bold fs-6\" value=\"";
        // line 361
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 361, $this->source); })()), "demande", [], "any", false, false, false, 361), "installation", [], "any", false, false, false, 361), "usages", [], "any", false, false, false, 361), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Puissance</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fs-6\" value=\"";
        // line 367
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 367, $this->source); })()), "demande", [], "any", false, false, false, 367), "puissance", [], "any", false, false, false, 367), "html", null, true);
        echo " kW\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 373
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 373, $this->source); })()), "demande", [], "any", false, false, false, 373), "installation", [], "any", false, false, false, 373), "localite", [], "any", false, false, false, 373), "nom", [], "any", false, false, false, 373), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Agence</label>
                                <input type=\"text\" disabled readonly class=\"form-control fw-bold text-black form-control py-0 fs-6\" value=\"";
        // line 379
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 379, $this->source); })()), "demande", [], "any", false, false, false, 379), "installation", [], "any", false, false, false, 379), "localite", [], "any", false, false, false, 379), "agence", [], "any", false, false, false, 379)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 379, $this->source); })()), "demande", [], "any", false, false, false, 379), "installation", [], "any", false, false, false, 379), "localite", [], "any", false, false, false, 379), "agence", [], "any", false, false, false, 379), "code", [], "any", false, false, false, 379), "html", null, true);
        } else {
            echo " - ";
        }
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-1\">
                            <label class=\"fs-7\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 384
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 384, $this->source); })()), "demande", [], "any", false, false, false, 384), "installation", [], "any", false, false, false, 384), "adresse", [], "any", false, false, false, 384), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 389
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 389, $this->source); })()), "demande", [], "any", false, false, false, 389), "installation", [], "any", false, false, false, 389), "electricien", [], "any", false, false, false, 389), "nom", [], "any", false, false, false, 389), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 389, $this->source); })()), "demande", [], "any", false, false, false, 389), "installation", [], "any", false, false, false, 389), "electricien", [], "any", false, false, false, 389), "prenom", [], "any", false, false, false, 389), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Tél Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control fw-bold py-0 fs-6\" value=\"";
        // line 395
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 395, $this->source); })()), "demande", [], "any", false, false, false, 395), "installation", [], "any", false, false, false, 395), "electricien", [], "any", false, false, false, 395), "telephone", [], "any", false, false, false, 395), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 395, $this->source); })()), "demande", [], "any", false, false, false, 395), "installation", [], "any", false, false, false, 395), "electricien", [], "any", false, false, false, 395), "autreNumTelephone", [], "any", false, false, false, 395), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <hr class=\"my-2 mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Référent chargé du dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
        // line 401
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 401, $this->source); })()), "referent", [], "any", false, false, false, 401), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Contrôleur chargé du traitement</label>
                            ";
        // line 405
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 405, $this->source); })()), "controleur", [], "any", false, false, false, 405)) {
            // line 406
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 406, $this->source); })()), "controleur", [], "any", false, false, false, 406), "html", null, true);
            echo "\">
                            ";
        } else {
            // line 408
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 410
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Visite du site pour inspection</label>
                            ";
        // line 413
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 413, $this->source); })()), "visite", [], "any", false, false, false, 413)) {
            // line 414
            echo "                                <div class=\"row\">
                                    <div class=\"col-5\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Planifiée\">
                                    </div>
                                    <div class=\"col-7\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
            // line 419
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 419, $this->source); })()), "visiteCourante", [], "any", false, false, false, 419), "datePlanifie", [], "any", false, false, false, 419), "d-m-Y à H:i"), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"col-12\">
                                        Modèle Rapport d'inspection
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-1 fw-bold fs-6\" value=\"";
            // line 423
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 423, $this->source); })()), "visiteCourante", [], "any", false, false, false, 423), "rapport", [], "any", false, false, false, 423), "libelle", [], "any", false, false, false, 423), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 423, $this->source); })()), "visiteCourante", [], "any", false, false, false, 423), "rapport", [], "any", false, false, false, 423), "PointVerification", [], "any", false, false, false, 423), "count", [], "any", false, false, false, 423), "html", null, true);
            echo " points de vérification\">
                                    </div>
                                </div>
                            ";
        } else {
            // line 427
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 429
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Rapport de visite</label>
                            ";
        // line 432
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 432, $this->source); })()), "rapport", [], "any", false, false, false, 432)) {
            // line 433
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Visite réalisée et Rapport élaboré\">
                            ";
        } else {
            // line 435
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non finalisé\">
                            ";
        }
        // line 437
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Résultat de conformité</label>
                            ";
        // line 440
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 440, $this->source); })()), "attestation", [], "any", false, false, false, 440)) {
            // line 441
            echo "                                <input type=\"text\" disabled readonly class=\"bg-success bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Résultat inspection disponile\">
                            ";
        } else {
            // line 443
            echo "                                <input type=\"text\" disabled readonly class=\"bg-success  form-control text-light form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 445
        echo "                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 453
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 454
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 454, $this->source); })()), "demande", [], "any", false, false, false, 454);
        // line 455
        echo "    ";
        $context["paiement"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 455, $this->source); })()), "paiement", [], "any", false, false, false, 455);
        // line 456
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 456, $this->source); })()), "installation", [], "any", false, false, false, 456);
        // line 457
        echo "<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"";
        // line 461
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 461, $this->source); })()), "mode", [], "any", false, false, false, 461), "html", null, true);
        echo "\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

        function showhide_bloc(x) {
            le_bloc=\".bloc_\"+x
            le_btn_bloc=\".btn_bloc_\"+x
            le_titre_bloc=\".titre_bloc_\"+x
            
            if(\$(le_btn_bloc).prop('title')==\"Afficher les détails\") {
                \$(le_bloc).show();
                \$(le_titre_bloc).addClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-up"), "html", null, true);
        echo "\"></use></svg>Cacher ...'); 
                \$(le_btn_bloc).prop('title', 'Cacher les détails');
                \$(le_btn_bloc).addClass(\"text-danger\");
                \$(le_btn_bloc).removeClass(\"text-warning\");
            } else {
                \$(le_bloc).hide();
                \$(le_titre_bloc).removeClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
        echo "\"></use></svg>Afficher ...'); 
                \$(le_btn_bloc).prop('title', 'Afficher les détails');
                \$(le_btn_bloc).removeClass(\"text-danger\");
                \$(le_btn_bloc).addClass(\"text-warning\");
            }
        }

    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dossier/show2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  993 => 480,  983 => 473,  968 => 461,  962 => 457,  959 => 456,  956 => 455,  953 => 454,  943 => 453,  927 => 445,  923 => 443,  919 => 441,  917 => 440,  912 => 437,  908 => 435,  904 => 433,  902 => 432,  897 => 429,  893 => 427,  884 => 423,  877 => 419,  870 => 414,  868 => 413,  863 => 410,  859 => 408,  853 => 406,  851 => 405,  844 => 401,  833 => 395,  822 => 389,  814 => 384,  801 => 379,  792 => 373,  783 => 367,  774 => 361,  765 => 355,  756 => 349,  744 => 340,  740 => 339,  732 => 334,  716 => 320,  710 => 318,  708 => 317,  702 => 314,  694 => 308,  688 => 306,  686 => 305,  680 => 302,  669 => 293,  663 => 291,  661 => 290,  655 => 287,  647 => 281,  641 => 279,  639 => 278,  633 => 275,  625 => 269,  619 => 267,  617 => 266,  611 => 263,  603 => 257,  597 => 255,  595 => 254,  589 => 251,  578 => 243,  569 => 237,  555 => 226,  546 => 220,  537 => 214,  528 => 208,  519 => 201,  512 => 199,  506 => 196,  503 => 195,  501 => 194,  497 => 192,  494 => 191,  489 => 189,  484 => 187,  481 => 186,  476 => 184,  471 => 182,  468 => 181,  465 => 180,  458 => 176,  455 => 175,  453 => 174,  448 => 172,  444 => 171,  439 => 168,  436 => 167,  433 => 166,  431 => 165,  425 => 164,  420 => 163,  416 => 161,  413 => 160,  410 => 159,  405 => 158,  402 => 157,  399 => 156,  397 => 155,  389 => 149,  383 => 146,  376 => 142,  372 => 140,  370 => 139,  365 => 137,  358 => 133,  351 => 129,  344 => 125,  334 => 120,  331 => 119,  325 => 117,  323 => 116,  317 => 113,  312 => 112,  309 => 111,  302 => 109,  297 => 108,  294 => 107,  292 => 106,  286 => 103,  282 => 102,  267 => 91,  263 => 89,  260 => 88,  256 => 86,  254 => 85,  245 => 79,  232 => 69,  226 => 65,  224 => 64,  221 => 63,  218 => 62,  215 => 61,  212 => 60,  209 => 59,  207 => 58,  204 => 57,  201 => 56,  198 => 55,  195 => 54,  192 => 53,  189 => 52,  186 => 51,  183 => 50,  180 => 49,  177 => 48,  174 => 47,  171 => 46,  168 => 45,  165 => 44,  162 => 43,  159 => 42,  156 => 41,  153 => 40,  150 => 39,  147 => 38,  144 => 37,  141 => 36,  138 => 35,  135 => 34,  132 => 33,  129 => 32,  126 => 31,  123 => 30,  120 => 29,  117 => 28,  114 => 27,  112 => 26,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <style>
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
    {% set paiement = dossier.demande.paiement %}
    {% set action_demande = \"Consultation \" %}
    {% if not dossier.affecte %}
        {% set action_demande = \"Affectation\" %}
        {% set link_liste = 'app_dossier_affectation' %}
        {% if is_granted('ROLE_REFERENT') %}
            {% set link_action = 'app_dossier_affecter' %}
        {% endif %}
        {% set libelle_action = 'Affecter à un contrôleur' %}
    {% elseif not dossier.visite %}
        {% set action_demande = \"Planification Visite\" %}
        {% set link_liste = 'app_dossier_visite' %}
        {% if is_granted('ROLE_CONTROLEUR') and not is_granted('ROLE_REFERENT') %}
            {% set link_action = 'app_dossier_visiter' %}
        {% endif %}
        {% set libelle_action = 'Planifier une visite' %}
    {% elseif not dossier.rapport %}
        {% set action_demande = \"Rapport de Visite\" %}
        {% set link_liste = 'app_dossier_rapport' %}
        {% if is_granted('ROLE_CONTROLEUR') and not is_granted('ROLE_REFERENT') %}
            {% set link_action = 'app_dossier_rapporter' %}
        {% endif %}
        {% set libelle_action = 'Elaborer le rapport de visite' %}
    {% elseif not dossier.attestation %}
        {% set action_demande = \"Résultat Inspection\" %}
        {% set link_liste = 'app_dossier_attestation' %}
        {% if is_granted('ROLE_REFERENT') %}
            {% set link_action = 'app_dossier_attester' %}
        {% endif %}
        {% set libelle_action = 'Valider Rapport Inspection' %}
    {% endif %}

    {% set demande = dossier.demande %}
    {% set installation = demande.installation %}
    {% if app.session.get('page_liste_dossier') is defined and app.session.get('page_liste_dossier') %}
        {% set link_liste = app.session.get('page_liste_dossier') %}
    {% endif %}
    
    {% set link_liste = 'app_dossier_show' %}

    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">{{ action_demande }} de dossiers </span>
            </a>
        </header>

        <div class=\"container\">
            <nav class=\"navbar shadow bg-warning border border-dark mt-2 p-0\">
                <div class=\"container-fluid ps-4\">
                        <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                            <div class=\"col\">
                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#lightbulb') }}\"></use>
                                </svg>
                                Détails du dossier
                            </div>
                            <div class=\"col\" align=\"right\">
                                <span class=\"text-success\">[
                                {% if not dossier.attestation %}
                                    En attente de 
                                {% endif %}
                                {% if not dossier.Etat == \"Affectation\" and not dossier.Etat == \"Attestation\" %}
                                    En attente d' 
                                {% endif %}
                                {{ dossier.Etat }} ]</span>
                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                <div align=\"left\" class=\"float-start border border-warning shadow p-2 fs-8 mt-2 fw-light\">
                    <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">{{dossier.controleur.nomComplet}}</span></div>
                    <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">{{dossier.visiteCourante.dateRapporte|date(\"d-m-Y à H:i:s\")}}</span></div>
                </div>
                <div align=\"right\">
                {% if dossier.rapport and not dossier.attestation %}
                    {% if is_granted('ROLE_REFERENT') %}
                    <a href=\"{{ path('app_dossier_rejetrapport', {'id': dossier.id }) }}\" class=\"next action-button btn btn-danger btn my-3\">Rejeter le rapport</a>
                    <a href=\"{{ path('app_dossier_attester', {'id': dossier.id }) }}\" class=\"next action-button btn btn-primary btn my-3\">{{ libelle_action }}</a>
                    {% endif %}
                {% endif %}
                    <a target=\"_blank\" href=\"{{ path('app_dossier_rapportpdf', {'id': dossier.id}) }}\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Rapport</a>
                    <a href=\"{{ path(link_liste, {'id': dossier.id}) }}\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour</a>
                </div>
                <fieldset id=\"synthese_demande\">
                    {% if dossier.visite and dossier.visiteCourante.rejetRapport %}
                        <div class=\"alert alert-danger py-2 fs-6\"><span class=\"text-danger\">Rapport rejeté:  </span> <span class=\"fs-7\">{{dossier.visiteCourante.motifRejetRapport}}</span></div>
                    {% endif %}
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif {% if installation.demandecourante and installation.demandecourante.numeroPassage==2 %} <span class=\"badge bg-danger\">2e VISITE</span> {% endif %}</h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Numéro Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"{{ demande.installation.demandeCourante.numero }}\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"{{ demande.installation.demandeCourante.dateCreation | date('d-m-Y') }}\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"{{ demande.installation.demandeCourante.puissance }} kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"{{ demande.installation.demandeCourante.cout }} FCFA\">
                            </div>
                        {% if dossier.rapport %}
                            <div class=\"col-lg-3\">
                                <label >Latitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"{{ installation.lattitude }}\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Longitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"{{ installation.longitude }}\">
                            </div>
                        {% endif %}
                        </div>  
                    </div>

                    <div class=\"container mt-4 mx-0\">
                        <div class=\"row\">
                            <div>
                        {% set rub = \"\" %}
                        {% set ix = 0 %}
                        {% set les_detailverif = dossier.visiteCourante.detailVerification %}
                            {% for pt in les_detailverif %}
                                {% if rub != pt.pointverification.rubrique.id %}
                                    {% if rub %}
                                        </div>
                                    {% endif %}
                                    <div id=\"zrub_{{ ix }}\">
                                        <h5 class=\"p-2 bg-dark text-light shadow border-bottom\"> {{ pt.pointverification.rubrique.numero }}- {{ pt.pointverification.rubrique.libelle }}</h5>
                                    {% set rub = pt.pointverification.rubrique.id %}
                                    {% set ix = ix + 1 %}
                                {% endif %}
                                <div class=\"shadow p-4 pt-2 mb-3\">
                                    <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                        <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                        </svg> {{ pt.pointVerification.objetVerification }}
                                        <div class=\"float-end fw-bold\">
                                        {% if pt.sansobjet %}
                                                <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"black\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#x-octagon-fill') }}\"></use>
                                                </svg>
                                                Sans Objet
                                        {% else %}
                                            {% if pt.conclusion %}
                                                    <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"green\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check') }}\"></use>
                                                    </svg>
                                                    <span class=\"text-success\">{{ pt.pointVerification.libelleConclusion1 }}</span>
                                            {% else %}
                                                    <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"red\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#x') }}\"></use>
                                                    </svg>
                                                    <span class=\"text-danger\">{{ pt.pointVerification.libelleConclusion2 }}</span>
                                            {% endif %}
                                        {% endif %}
                                        </div>
                                    </div>
                                        {% if not pt.conclusion and not pt.sansobjet %}
                                                <div class=\"fw-light ms-4 fs-8\">
                                                Commentaire: <span class=\"text-danger\">{{pt.commentaire}}</span>
                                                </div>
                                        {% endif %}
                                </div>
                            {% endfor %}

                                <div>
                                    <h5 class=\"p-2 bg-dark text-light shadow border-bottom\">Tableau 2: Mesures des prises de terre </h5>
                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Mesures des prises de terre
                                                <div class=\"float-end fw-bold\">
                                                </div>
                                            </div>
                                            <div class=\"fw-light ms-4 fs-7\">
                                                <span class=\"text-dark\">{{dossier.visiteCourante.mesurePriseTerre}}</span>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Barrette
                                                <div class=\"float-end fw-bold\">
                                                </div>
                                            </div>
                                            <div class=\"fw-light ms-4 fs-7\">
                                                <span class=\"text-dark\">{{dossier.visiteCourante.barrette}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h5 class=\"p-2 bg-dark text-light shadow border-bottom\">Autres observations </h5>
                                    <div class=\"shadow p-4 pt-2 mb-3\">
                                        <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                            <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                            </svg> Commentaire sur l'inspection
                                            <div class=\"float-end fw-bold\">
                                            </div>
                                        </div>
                                        <div class=\"fw-light ms-4 fs-8\">
                                            <span class=\"text-danger\">{{dossier.visiteCourante.commentaire2}}</span>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Photo 1
                                                <div class=\"\">
                                                {% if installation.PJPhoto1 %}
                                                    <img width=\"100%\" src=\"{{ asset('upload/photo/' ~ installation.PJPhoto1.fichier) }}\" />
                                                {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Photo 2
                                                <div class=\"\">
                                                {% if installation.PJPhoto2 %}
                                                    <img width=\"100%\" src=\"{{ asset('upload/photo/' ~ installation.PJPhoto2.fichier) }}\" />
                                                {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Photo 3
                                                <div class=\"\">
                                                {% if installation.PJPhoto3 %}
                                                    <img width=\"100%\" src=\"{{ asset('upload/photo/' ~ installation.PJPhoto3.fichier) }}\" />
                                                {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Photo 4
                                                <div class=\"\">
                                                {% if installation.PJPhoto4 %}
                                                    <img width=\"100%\" src=\"{{ asset('upload/photo/' ~ installation.PJPhoto4.fichier) }}\" />
                                                {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Signature Controleur
                                                <div class=\"\">
                                                {% if dossier.visiteCourante.signcontroleur %}
                                                    <img width=\"100%\" src=\"{{ asset('upload/photo/' ~ dossier.visiteCourante.signcontroleur.fichier) }}\" />
                                                {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Signature Electricien
                                                <div class=\"\">
                                                {% if dossier.visiteCourante.signelectricien %}
                                                    <img width=\"100%\" src=\"{{ asset('upload/photo/' ~ dossier.visiteCourante.signelectricien.fichier) }}\" />
                                                {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2 priority-3\" id=\"paiement_demande\">
                <div align=\"right\">
                    <a href=\"{{ path(link_liste, {'id': dossier.id}) }}\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour</a>
                </div>                                
                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Traitement du dossier
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"{{ path('app_dossier_histo', {'id': dossier.id}) }}\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#hourglass-split\") }}\"></use></svg>
                            </a>
                        </div>
                    </h2>
                    <div class=\"row\">
                        <hr class=\"mb-3\" />
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >N° Dossier</label>
                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-0 fw-bold fs-6\" value=\"{{ dossier.demande.numero }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Date création dossier</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-success form-control py-0 fw-bold fs-6\" value=\"{{ dossier.dateCreation | date('d-m-Y') }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" class=\"fs-7\" >Usage</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fw-bold fs-6\" value=\"{{ dossier.demande.installation.usages }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Puissance</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fs-6\" value=\"{{ dossier.demande.puissance }} kW\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"{{ dossier.demande.installation.localite.nom }}\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Agence</label>
                                <input type=\"text\" disabled readonly class=\"form-control fw-bold text-black form-control py-0 fs-6\" value=\"{% if dossier.demande.installation.localite.agence %} {{ dossier.demande.installation.localite.agence.code }}{% else %} - {% endif %}\">
                            </div>
                        </div>
                        <div class=\"mb-1\">
                            <label class=\"fs-7\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"{{ dossier.demande.installation.adresse }}\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"{{ dossier.demande.installation.electricien.nom }} {{ dossier.demande.installation.electricien.prenom }}\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Tél Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control fw-bold py-0 fs-6\" value=\"{{ dossier.demande.installation.electricien.telephone }} {{ dossier.demande.installation.electricien.autreNumTelephone }}\">
                            </div>
                        </div>
                        <hr class=\"my-2 mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Référent chargé du dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"{{ dossier.referent }}\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Contrôleur chargé du traitement</label>
                            {% if dossier.controleur %}
                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"{{ dossier.controleur }}\">
                            {% else %}
                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            {% endif %}
                        </div>
                        <div class=\"mb-3 \">
                            <label >Visite du site pour inspection</label>
                            {% if dossier.visite %}
                                <div class=\"row\">
                                    <div class=\"col-5\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Planifiée\">
                                    </div>
                                    <div class=\"col-7\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"{{ dossier.visiteCourante.datePlanifie | date('d-m-Y à H:i') }}\">
                                    </div>
                                    <div class=\"col-12\">
                                        Modèle Rapport d'inspection
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-1 fw-bold fs-6\" value=\"{{ dossier.visiteCourante.rapport.libelle }} - {{ dossier.visiteCourante.rapport.PointVerification.count }} points de vérification\">
                                    </div>
                                </div>
                            {% else %}
                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            {% endif %}
                        </div>
                        <div class=\"mb-3 \">
                            <label >Rapport de visite</label>
                            {% if dossier.rapport %}
                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Visite réalisée et Rapport élaboré\">
                            {% else %}
                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non finalisé\">
                            {% endif %}
                        </div>
                        <div class=\"mb-3 \">
                            <label >Résultat de conformité</label>
                            {% if dossier.attestation %}
                                <input type=\"text\" disabled readonly class=\"bg-success bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Résultat inspection disponile\">
                            {% else %}
                                <input type=\"text\" disabled readonly class=\"bg-success  form-control text-light form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            {% endif %}
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
    {% set demande = dossier.demande %}
    {% set paiement = demande.paiement %}
    {% set installation = demande.installation %}
<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"{{ paiement.mode }}\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

        function showhide_bloc(x) {
            le_bloc=\".bloc_\"+x
            le_btn_bloc=\".btn_bloc_\"+x
            le_titre_bloc=\".titre_bloc_\"+x
            
            if(\$(le_btn_bloc).prop('title')==\"Afficher les détails\") {
                \$(le_bloc).show();
                \$(le_titre_bloc).addClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#dc3545\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#caret-up\") }}\"></use></svg>Cacher ...'); 
                \$(le_btn_bloc).prop('title', 'Cacher les détails');
                \$(le_btn_bloc).addClass(\"text-danger\");
                \$(le_btn_bloc).removeClass(\"text-warning\");
            } else {
                \$(le_bloc).hide();
                \$(le_titre_bloc).removeClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#caret-down\") }}\"></use></svg>Afficher ...'); 
                \$(le_btn_bloc).prop('title', 'Afficher les détails');
                \$(le_btn_bloc).removeClass(\"text-danger\");
                \$(le_btn_bloc).addClass(\"text-warning\");
            }
        }

    });
</script>
{% endblock %}
", "dossier/show2.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/show2.html.twig");
    }
}
