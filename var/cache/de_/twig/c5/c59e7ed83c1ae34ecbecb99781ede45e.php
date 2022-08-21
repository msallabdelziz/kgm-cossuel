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
class __TwigTemplate_d943d58c2f396d6138fb0d161e914a74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dossier/show.html.twig", 1);
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
        $context["link_action"] = "";
        // line 27
        echo "    ";
        $context["paiement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 27, $this->source); })()), "demande", [], "any", false, false, false, 27), "paiement", [], "any", false, false, false, 27);
        // line 28
        echo "    ";
        $context["agentConn"] = twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 28, $this->source); })()), "getUtilisateurAgent", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)], "method", false, false, false, 28);
        // line 29
        echo "
    ";
        // line 30
        $context["action_demande"] = "Consultation";
        // line 31
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 31, $this->source); })()), "affecte", [], "any", false, false, false, 31)) {
            // line 32
            echo "        ";
            $context["action_demande"] = "Affectation";
            // line 33
            echo "        ";
            $context["link_liste"] = "app_dossier_affectation";
            // line 34
            echo "        ";
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT") && (isset($context["agentConn"]) || array_key_exists("agentConn", $context) ? $context["agentConn"] : (function () { throw new RuntimeError('Variable "agentConn" does not exist.', 34, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 34, $this->source); })()), "referent", [], "any", false, false, false, 34)) && (twig_get_attribute($this->env, $this->source, (isset($context["agentConn"]) || array_key_exists("agentConn", $context) ? $context["agentConn"] : (function () { throw new RuntimeError('Variable "agentConn" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 34, $this->source); })()), "referent", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)))) {
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
        } elseif ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 38, $this->source); })()), "visite", [], "any", false, false, false, 38)) {
            // line 39
            echo "        ";
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") && (isset($context["agentConn"]) || array_key_exists("agentConn", $context) ? $context["agentConn"] : (function () { throw new RuntimeError('Variable "agentConn" does not exist.', 39, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 39, $this->source); })()), "controleur", [], "any", false, false, false, 39)) && (twig_get_attribute($this->env, $this->source, (isset($context["agentConn"]) || array_key_exists("agentConn", $context) ? $context["agentConn"] : (function () { throw new RuntimeError('Variable "agentConn" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 39, $this->source); })()), "controleur", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)))) {
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
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT") && (isset($context["agentConn"]) || array_key_exists("agentConn", $context) ? $context["agentConn"] : (function () { throw new RuntimeError('Variable "agentConn" does not exist.', 45, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 45, $this->source); })()), "referent", [], "any", false, false, false, 45)) && (twig_get_attribute($this->env, $this->source, (isset($context["agentConn"]) || array_key_exists("agentConn", $context) ? $context["agentConn"] : (function () { throw new RuntimeError('Variable "agentConn" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 45, $this->source); })()), "referent", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)))) {
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
        } elseif ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 51, $this->source); })()), "rapport", [], "any", false, false, false, 51)) {
            // line 52
            echo "        ";
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") && (isset($context["agentConn"]) || array_key_exists("agentConn", $context) ? $context["agentConn"] : (function () { throw new RuntimeError('Variable "agentConn" does not exist.', 52, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 52, $this->source); })()), "controleur", [], "any", false, false, false, 52)) && (twig_get_attribute($this->env, $this->source, (isset($context["agentConn"]) || array_key_exists("agentConn", $context) ? $context["agentConn"] : (function () { throw new RuntimeError('Variable "agentConn" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 52, $this->source); })()), "controleur", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)))) {
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
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT") && (isset($context["agentConn"]) || array_key_exists("agentConn", $context) ? $context["agentConn"] : (function () { throw new RuntimeError('Variable "agentConn" does not exist.', 60, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 60, $this->source); })()), "referent", [], "any", false, false, false, 60)) && (twig_get_attribute($this->env, $this->source, (isset($context["agentConn"]) || array_key_exists("agentConn", $context) ? $context["agentConn"] : (function () { throw new RuntimeError('Variable "agentConn" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 60, $this->source); })()), "referent", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60)))) {
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
        } elseif ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 66, $this->source); })()), "attestation", [], "any", false, false, false, 66)) {
            // line 67
            echo "        ";
            $context["action_demande"] = "Résultat Inspection";
            // line 68
            echo "        ";
            $context["link_liste"] = "app_dossier_attestation";
            // line 69
            echo "        ";
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT") && (isset($context["agentConn"]) || array_key_exists("agentConn", $context) ? $context["agentConn"] : (function () { throw new RuntimeError('Variable "agentConn" does not exist.', 69, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 69, $this->source); })()), "referent", [], "any", false, false, false, 69)) && (twig_get_attribute($this->env, $this->source, (isset($context["agentConn"]) || array_key_exists("agentConn", $context) ? $context["agentConn"] : (function () { throw new RuntimeError('Variable "agentConn" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 69, $this->source); })()), "referent", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69)))) {
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
        $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 77, $this->source); })()), "demande", [], "any", false, false, false, 77);
        // line 78
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 78, $this->source); })()), "installation", [], "any", false, false, false, 78);
        // line 79
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 79), "get", [0 => "page_liste_dossier"], "method", true, true, false, 79) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "session", [], "any", false, false, false, 79), "get", [0 => "page_liste_dossier"], "method", false, false, false, 79))) {
            // line 80
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "session", [], "any", false, false, false, 80), "get", [0 => "page_liste_dossier"], "method", false, false, false, 80);
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
        echo twig_escape_filter($this->env, (isset($context["action_demande"]) || array_key_exists("action_demande", $context) ? $context["action_demande"] : (function () { throw new RuntimeError('Variable "action_demande" does not exist.', 86, $this->source); })()), "html", null, true);
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
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 101, $this->source); })()), "attestation", [], "any", false, false, false, 101)) {
            // line 102
            echo "                                    <span class=\"text-success\">[
                                    ";
            // line 103
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 103, $this->source); })()), "attestation", [], "any", false, false, false, 103)) {
                // line 104
                echo "                                        En attente de 
                                    ";
            }
            // line 106
            echo "                                    ";
            if ((( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 106, $this->source); })()), "Etat", [], "any", false, false, false, 106) == "Affectation") && ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 106, $this->source); })()), "Etat", [], "any", false, false, false, 106) == "Attestation"))) {
                // line 107
                echo "                                        En attente d' 
                                    ";
            }
            // line 109
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 109, $this->source); })()), "Etat", [], "any", false, false, false, 109), "html", null, true);
            echo "]</span>
                                ";
        } else {
            // line 111
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 111, $this->source); })()), "visiteCourante", [], "any", false, false, false, 111), "conclusion", [], "any", false, false, false, 111)) {
                // line 112
                echo "                                        <span class=\"badge bg-success fs-5\">[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 112, $this->source); })()), "Etat", [], "any", false, false, false, 112), "html", null, true);
                echo "]</span>
                                    ";
            } else {
                // line 114
                echo "                                        <span class=\"badge bg-danger fs-5\">[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 114, $this->source); })()), "Etat", [], "any", false, false, false, 114), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 126, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 126, $this->source); })()), "createdBy", [], "any", false, false, false, 126)], "method", false, false, false, 126)) {
            // line 127
            echo "                        ";
            $context["creator"] = twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 127, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 127, $this->source); })()), "createdBy", [], "any", false, false, false, 127)], "method", false, false, false, 127);
            // line 128
            echo "                        <div align=\"left\" class=\"float-start border border-warning shadow p-2 mt-2 fs-8 fw-light\">
                            <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["creator"]) || array_key_exists("creator", $context) ? $context["creator"] : (function () { throw new RuntimeError('Variable "creator" does not exist.', 129, $this->source); })()), "nomComplet", [], "any", false, false, false, 129), "html", null, true);
            echo "</span></div>
                            <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">";
            // line 130
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 130, $this->source); })()), "createdAt", [], "any", false, false, false, 130), "d-m-Y à H:i:s"), "html", null, true);
            echo "</span></div>
                        </div>
                        <div class=\"clear\"></div>
                    ";
        }
        // line 134
        echo "                <div align=\"right\">
                ";
        // line 135
        if (((twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 135, $this->source); })()), "rapport", [], "any", false, false, false, 135) &&  !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 135, $this->source); })()), "attestation", [], "any", false, false, false, 135)) || twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 135, $this->source); })()), "attestation", [], "any", false, false, false, 135))) {
            // line 136
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_showrapp", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-secondary btn my-3\">Consulter le rapport</a>
                ";
        }
        // line 138
        echo "                ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 138, $this->source); })()), "attestation", [], "any", false, false, false, 138)) {
            // line 139
            echo "                    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 139, $this->source); })()), "installation", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Demande</a>
                ";
        }
        // line 141
        echo "                ";
        if (((( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 141, $this->source); })()), "attestation", [], "any", false, false, false, 141) && twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 141, $this->source); })()), "visite", [], "any", false, false, false, 141)) &&  !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 141, $this->source); })()), "rapport", [], "any", false, false, false, 141)) && ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") && (isset($context["agentConn"]) || array_key_exists("agentConn", $context) ? $context["agentConn"] : (function () { throw new RuntimeError('Variable "agentConn" does not exist.', 141, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 141, $this->source); })()), "controleur", [], "any", false, false, false, 141)) && (twig_get_attribute($this->env, $this->source, (isset($context["agentConn"]) || array_key_exists("agentConn", $context) ? $context["agentConn"] : (function () { throw new RuntimeError('Variable "agentConn" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 141, $this->source); })()), "controleur", [], "any", false, false, false, 141), "id", [], "any", false, false, false, 141))))) {
            // line 142
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_showrapp", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 142, $this->source); })()), "id", [], "any", false, false, false, 142)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-outline-dark btn my-3\">Consulter le rapport provisoire</a>
                ";
        }
        // line 144
        echo "                ";
        if ((((twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 144, $this->source); })()), "cloture", [], "any", false, false, false, 144) &&  !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 144, $this->source); })()), "conforme", [], "any", false, false, false, 144)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 144, $this->source); })()), "demandeCourante", [], "any", false, false, false, 144), "numeroPassage", [], "any", false, false, false, 144) == 1)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")))) {
            // line 145
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_renew", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 145, $this->source); })()), "id", [], "any", false, false, false, 145)]), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 154, $this->source); })()), "visite", [], "any", false, false, false, 154) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 154, $this->source); })()), "visiteCourante", [], "any", false, false, false, 154), "rejetRapport", [], "any", false, false, false, 154))) {
            // line 155
            echo "                        <div class=\"alert alert-danger py-2 fs-6\"><span class=\"text-danger\">Rapport rejeté:  </span> <span class=\"fs-7\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 155, $this->source); })()), "visiteCourante", [], "any", false, false, false, 155), "motifRejetRapport", [], "any", false, false, false, 155), "html", null, true);
            echo "</span></div>
                    ";
        }
        // line 157
        echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif ";
        // line 158
        if (((isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 158, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 158, $this->source); })()), "numeroPassage", [], "any", false, false, false, 158) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
        }
        // line 159
        echo "                            ";
        if ((((0 && (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 159, $this->source); })()), "step", [], "any", false, false, false, 159) >= 7)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 159, $this->source); })()), "demandeCourante", [], "any", false, false, false, 159), "numeroPassage", [], "any", false, false, false, 159) == 1)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")))) {
            // line 160
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_clone", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 160, $this->source); })()), "id", [], "any", false, false, false, 160)]), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 171, $this->source); })()), "installation", [], "any", false, false, false, 171), "demandeCourante", [], "any", false, false, false, 171), "numero", [], "any", false, false, false, 171), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 175
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 175, $this->source); })()), "installation", [], "any", false, false, false, 175), "demandeCourante", [], "any", false, false, false, 175), "dateCreation", [], "any", false, false, false, 175), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 179, $this->source); })()), "installation", [], "any", false, false, false, 179), "demandeCourante", [], "any", false, false, false, 179), "puissance", [], "any", false, false, false, 179), "html", null, true);
        echo " kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 183, $this->source); })()), "installation", [], "any", false, false, false, 183), "demandeCourante", [], "any", false, false, false, 183), "cout", [], "any", false, false, false, 183), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 195, $this->source); })()), "etat", [], "any", false, false, false, 195), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Paiement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6\" value=\"";
        // line 199
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 199, $this->source); })()), "datepaiement", [], "any", false, false, false, 199), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Mode paiement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 203, $this->source); })()), "mode", [], "any", false, false, false, 203), "html", null, true);
        echo "\">
                            </div>
                            ";
        // line 205
        if (twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 205, $this->source); })()), "reference", [], "any", false, false, false, 205)) {
            // line 206
            echo "                            <div class=\"col-lg-3\">
                                <label >Référence paiement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6\" value=\"";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 208, $this->source); })()), "reference", [], "any", false, false, false, 208), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit1", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 219, $this->source); })()), "id", [], "any", false, false, false, 219)]), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 235, $this->source); })()), "usages", [], "any", false, false, false, 235), "html", null, true);
        echo "\" id=\"form_usage\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 239
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 239, $this->source); })()), "alimente", [], "any", false, false, false, 239)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 243, $this->source); })()), "compteur", [], "any", false, false, false, 243), "html", null, true);
        echo "\" id=\"form_compteur\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 247, $this->source); })()), "abonnement", [], "any", false, false, false, 247), "html", null, true);
        echo "\" id=\"form_abonnement\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 251
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 251, $this->source); })()), "grstReseau", [], "any", false, false, false, 251), "html", null, true);
        echo "\" id=\"form_grstReseau\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4\">
                                <label for=\"form_localite\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 256
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 256, $this->source); })()), "localite", [], "any", false, false, false, 256), "html", null, true);
        echo "\" id=\"form_localite\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_adresse\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 260, $this->source); })()), "adresse", [], "any", false, false, false, 260), "html", null, true);
        echo "\" id=\"form_adresse\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_habitation\" >Complément Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 264
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 264, $this->source); })()), "habitation", [], "any", false, false, false, 264), "html", null, true);
        echo "\" id=\"form_habitation\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_lattitude\" >Latitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 268
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 268, $this->source); })()), "lattitude", [], "any", false, false, false, 268), "html", null, true);
        echo "\" id=\"form_lattitude\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_longitude\" >Longitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 272, $this->source); })()), "longitude", [], "any", false, false, false, 272), "html", null, true);
        echo "\" id=\"form_longitude\">
                            </div>
                        </div>
                    </div>

                    ";
        // line 278
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 278, $this->source); })()), "typeConstruction", [], "any", false, false, false, 278)) {
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
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 292, $this->source); })()), "collectif", [], "any", false, false, false, 292)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 296, $this->source); })()), "nomSite", [], "any", false, false, false, 296), "html", null, true);
            echo "\" id=\"form_nomSite\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_logement\" >Nombre de logements</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 300
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 300, $this->source); })()), "logement", [], "any", false, false, false, 300), "html", null, true);
            echo "\" id=\"form_logement\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-6\">
                                <label for=\"form_typeConstruction\" >Type de construction</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 305, $this->source); })()), "typeConstruction", [], "any", false, false, false, 305), "nom", [], "any", false, false, false, 305), "html", null, true);
            echo "\" id=\"form_typeConstruction\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1\">
                                <label for=\"form_niveau\" >Nombre de niveaux</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 309
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 309, $this->source); })()), "niveau", [], "any", false, false, false, 309), "html", null, true);
            echo "\" id=\"form_niveau\">
                            </div>
                            <div class=\"col-lg-6 typeConstruction3\">
                                <label for=\"form_activite\" >Activités</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 313, $this->source); })()), "activite", [], "any", false, false, false, 313), "html", null, true);
            echo "\" id=\"form_activite\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                <label for=\"form_priece\" >Nombre de pièces</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 317, $this->source); })()), "priece", [], "any", false, false, false, 317), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 324, $this->source); })()), "natureTravaux", [], "any", false, false, false, 324)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 338, $this->source); })()), "natureTravaux", [], "any", false, false, false, 338), "html", null, true);
            echo "\" id=\"form_natureTravaux\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf15\" >Neufs_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 342
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 342, $this->source); })()), "neuf15", [], "any", false, false, false, 342), "html", null, true);
            echo "\" id=\"form_neufs_15\">
                                <label for=\"form_existant15\" >Existants_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 344
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 344, $this->source); })()), "existant15", [], "any", false, false, false, 344), "html", null, true);
            echo "\" id=\"form_existant15\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf25\" >Neufs_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 348
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 348, $this->source); })()), "neuf25", [], "any", false, false, false, 348), "html", null, true);
            echo "\" id=\"form_neuf25\">
                                <label for=\"form_existant25\" >Existants_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 350, $this->source); })()), "existant25", [], "any", false, false, false, 350), "html", null, true);
            echo "\" id=\"form_existant25\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neufAutre\" >Neufs_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 354, $this->source); })()), "neufAutre", [], "any", false, false, false, 354), "html", null, true);
            echo "\" id=\"form_neufAutre\">
                                <label for=\"form_existantAutre\" >Existants_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 356
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 356, $this->source); })()), "existantAutre", [], "any", false, false, false, 356), "html", null, true);
            echo "\" id=\"form_existantAutre\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4 intervenantAutre1\">
                                <label for=\"form_intervenantAutre\" >Autres intervenants ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 361
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 361, $this->source); })()), "intervenantAutre", [], "any", false, false, false, 361), "html", null, true);
            echo "\" id=\"form_intervenantAutre\">
                            </div>
                            <div class=\"col-lg-8 intervenantAutre1\">
                                <label for=\"form_intervenant\" >Intervenants</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 365
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 365, $this->source); })()), "intervenant", [], "any", false, false, false, 365), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 372, $this->source); })()), "installation", [], "any", false, false, false, 372), "electricien", [], "any", false, false, false, 372)) {
            // line 373
            echo "                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title titre_bloc_4\">
                            Informations sur l'électricien
                            ";
            // line 376
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 377
                echo "                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit2", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 377, $this->source); })()), "id", [], "any", false, false, false, 377)]), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 393, $this->source); })()), "installation", [], "any", false, false, false, 393), "electricien", [], "any", false, false, false, 393), "nom", [], "any", false, false, false, 393), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 397
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 397, $this->source); })()), "installation", [], "any", false, false, false, 397), "electricien", [], "any", false, false, false, 397), "prenom", [], "any", false, false, false, 397), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 401
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 401, $this->source); })()), "installation", [], "any", false, false, false, 401), "electricien", [], "any", false, false, false, 401), "localite", [], "any", false, false, false, 401), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 405
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 405, $this->source); })()), "installation", [], "any", false, false, false, 405), "electricien", [], "any", false, false, false, 405), "adresse", [], "any", false, false, false, 405), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 409
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 409, $this->source); })()), "installation", [], "any", false, false, false, 409), "electricien", [], "any", false, false, false, 409), "telephone", [], "any", false, false, false, 409), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 413
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 413, $this->source); })()), "installation", [], "any", false, false, false, 413), "electricien", [], "any", false, false, false, 413), "email", [], "any", false, false, false, 413), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 417
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 417, $this->source); })()), "installation", [], "any", false, false, false, 417), "electricien", [], "any", false, false, false, 417), "typePiece", [], "any", false, false, false, 417), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 421
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 421, $this->source); })()), "installation", [], "any", false, false, false, 421), "electricien", [], "any", false, false, false, 421), "numPiece", [], "any", false, false, false, 421), "html", null, true);
            echo "\">
                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Electricien</label><br />
                            ";
            // line 426
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 426, $this->source); })()), "PJElectricien", [], "any", false, false, false, 426)) {
                // line 427
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 428
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 430
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 430, $this->source); })()), "id", [], "any", false, false, false, 430), "type" => "electricien"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 430, $this->source); })()), "PJElectricien", [], "any", false, false, false, 430), "fichier", [], "any", false, false, false, 430), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 441, $this->source); })()), "proprietaire", [], "any", false, false, false, 441)) {
            // line 442
            echo "                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title titre_bloc_5\">
                            Informations sur le propriétaire de l'installation
                            ";
            // line 445
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 446
                echo "                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit3", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 446, $this->source); })()), "id", [], "any", false, false, false, 446)]), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 462, $this->source); })()), "proprietaire", [], "any", false, false, false, 462), "nom", [], "any", false, false, false, 462), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 466
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 466, $this->source); })()), "proprietaire", [], "any", false, false, false, 466), "prenom", [], "any", false, false, false, 466), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 470
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 470, $this->source); })()), "proprietaire", [], "any", false, false, false, 470), "localite", [], "any", false, false, false, 470), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 474
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 474, $this->source); })()), "proprietaire", [], "any", false, false, false, 474), "adresse", [], "any", false, false, false, 474), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 478
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 478, $this->source); })()), "proprietaire", [], "any", false, false, false, 478), "telephone", [], "any", false, false, false, 478), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 482
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 482, $this->source); })()), "proprietaire", [], "any", false, false, false, 482), "email", [], "any", false, false, false, 482), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 486
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 486, $this->source); })()), "proprietaire", [], "any", false, false, false, 486), "typePiece", [], "any", false, false, false, 486), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 490
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 490, $this->source); })()), "proprietaire", [], "any", false, false, false, 490), "numPiece", [], "any", false, false, false, 490), "html", null, true);
            echo "\">
                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Propriétaire</label><br />
                            ";
            // line 495
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 495, $this->source); })()), "PJProprietaire", [], "any", false, false, false, 495)) {
                // line 496
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 497
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 499
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 499, $this->source); })()), "id", [], "any", false, false, false, 499), "type" => "proprietaire"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 499, $this->source); })()), "PJProprietaire", [], "any", false, false, false, 499), "fichier", [], "any", false, false, false, 499), "html", null, true);
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
            if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 506, $this->source); })()), "usages", [], "any", false, false, false, 506) != "erp_ert")) {
                echo "Titre de propriété";
            } else {
                echo "Documents Techniques";
            }
            echo "</label><br />
                            ";
            // line 507
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 507, $this->source); })()), "PJDossierTechnique", [], "any", false, false, false, 507)) {
                // line 508
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 509
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 511
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 511, $this->source); })()), "id", [], "any", false, false, false, 511), "type" => "dosstech"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 511, $this->source); })()), "PJDossierTechnique", [], "any", false, false, false, 511), "fichier", [], "any", false, false, false, 511), "html", null, true);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link_liste"]) || array_key_exists("link_liste", $context) ? $context["link_liste"] : (function () { throw new RuntimeError('Variable "link_liste" does not exist.', 523, $this->source); })()));
        echo "\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour</a>
                    ";
        // line 524
        if ((array_key_exists("link_action2", $context) && (isset($context["link_action2"]) || array_key_exists("link_action2", $context) ? $context["link_action2"] : (function () { throw new RuntimeError('Variable "link_action2" does not exist.', 524, $this->source); })()))) {
            // line 525
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link_action2"]) || array_key_exists("link_action2", $context) ? $context["link_action2"] : (function () { throw new RuntimeError('Variable "link_action2" does not exist.', 525, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 525, $this->source); })()), "id", [], "any", false, false, false, 525)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-secondary btn my-3\">";
            echo twig_escape_filter($this->env, (isset($context["libelle_action2"]) || array_key_exists("libelle_action2", $context) ? $context["libelle_action2"] : (function () { throw new RuntimeError('Variable "libelle_action2" does not exist.', 525, $this->source); })()), "html", null, true);
            echo "</a>
                    ";
        }
        // line 527
        echo "                    ";
        if ((isset($context["link_action"]) || array_key_exists("link_action", $context) ? $context["link_action"] : (function () { throw new RuntimeError('Variable "link_action" does not exist.', 527, $this->source); })())) {
            // line 528
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link_action"]) || array_key_exists("link_action", $context) ? $context["link_action"] : (function () { throw new RuntimeError('Variable "link_action" does not exist.', 528, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 528, $this->source); })()), "id", [], "any", false, false, false, 528)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-primary btn my-3\">";
            echo twig_escape_filter($this->env, (isset($context["libelle_action"]) || array_key_exists("libelle_action", $context) ? $context["libelle_action"] : (function () { throw new RuntimeError('Variable "libelle_action" does not exist.', 528, $this->source); })()), "html", null, true);
            echo "</a>
                    ";
        }
        // line 530
        echo "                    ";
        if (( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 530, $this->source); })()), "affecte", [], "any", false, false, false, 530) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
            // line 531
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_attribuer", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 531, $this->source); })()), "id", [], "any", false, false, false, 531)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-primary0 btn my-3\">Changer de référent</a>
                    ";
        }
        // line 533
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 533, $this->source); })()), "attestation", [], "any", false, false, false, 533)) {
            // line 534
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 534, $this->source); })()), "visiteCourante", [], "any", false, false, false, 534), "conclusion", [], "any", false, false, false, 534)) {
                // line 535
                echo "                        <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_attestation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 535, $this->source); })()), "id", [], "any", false, false, false, 535)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-success btn my-3\">Attestation Conformité</a>
                    ";
            } else {
                // line 537
                echo "                        <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_attestation_showpdf0", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 537, $this->source); })()), "id", [], "any", false, false, false, 537)]), "html", null, true);
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
        if ((((twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 541, $this->source); })()), "rapport", [], "any", false, false, false, 541) &&  !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 541, $this->source); })()), "attestation", [], "any", false, false, false, 541)) || twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 541, $this->source); })()), "attestation", [], "any", false, false, false, 541)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR"))) {
            // line 542
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_showrapp", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 542, $this->source); })()), "id", [], "any", false, false, false, 542)]), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_histo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 548, $this->source); })()), "id", [], "any", false, false, false, 548)]), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 558, $this->source); })()), "demande", [], "any", false, false, false, 558), "numero", [], "any", false, false, false, 558), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Date création dossier</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-success form-control py-0 fw-bold fs-6\" value=\"";
        // line 564
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 564, $this->source); })()), "dateCreation", [], "any", false, false, false, 564), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" class=\"fs-7\" >Usage</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fw-bold fs-6\" value=\"";
        // line 570
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 570, $this->source); })()), "demande", [], "any", false, false, false, 570), "installation", [], "any", false, false, false, 570), "usages", [], "any", false, false, false, 570), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Puissance</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fs-6\" value=\"";
        // line 576
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 576, $this->source); })()), "demande", [], "any", false, false, false, 576), "puissance", [], "any", false, false, false, 576), "html", null, true);
        echo " kW\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 582
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 582, $this->source); })()), "demande", [], "any", false, false, false, 582), "installation", [], "any", false, false, false, 582), "localite", [], "any", false, false, false, 582), "nom", [], "any", false, false, false, 582), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Agence</label>
                                <input type=\"text\" disabled readonly class=\"form-control fw-bold text-black form-control py-0 fs-6\" value=\"";
        // line 588
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 588, $this->source); })()), "demande", [], "any", false, false, false, 588), "installation", [], "any", false, false, false, 588), "localite", [], "any", false, false, false, 588), "agence", [], "any", false, false, false, 588)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 588, $this->source); })()), "demande", [], "any", false, false, false, 588), "installation", [], "any", false, false, false, 588), "localite", [], "any", false, false, false, 588), "agence", [], "any", false, false, false, 588), "code", [], "any", false, false, false, 588), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 593, $this->source); })()), "demande", [], "any", false, false, false, 593), "installation", [], "any", false, false, false, 593), "adresse", [], "any", false, false, false, 593), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 598
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 598, $this->source); })()), "demande", [], "any", false, false, false, 598), "installation", [], "any", false, false, false, 598), "electricien", [], "any", false, false, false, 598), "nom", [], "any", false, false, false, 598), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 598, $this->source); })()), "demande", [], "any", false, false, false, 598), "installation", [], "any", false, false, false, 598), "electricien", [], "any", false, false, false, 598), "prenom", [], "any", false, false, false, 598), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Tél Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control fw-bold py-0 fs-6\" value=\"";
        // line 604
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 604, $this->source); })()), "demande", [], "any", false, false, false, 604), "installation", [], "any", false, false, false, 604), "electricien", [], "any", false, false, false, 604), "telephone", [], "any", false, false, false, 604), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <hr class=\"my-2 mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Référent chargé du dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
        // line 610
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 610, $this->source); })()), "referent", [], "any", false, false, false, 610), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Contrôleur chargé du traitement</label>
                            ";
        // line 614
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 614, $this->source); })()), "controleur", [], "any", false, false, false, 614)) {
            // line 615
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 615, $this->source); })()), "controleur", [], "any", false, false, false, 615), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 622, $this->source); })()), "visite", [], "any", false, false, false, 622)) {
            // line 623
            echo "                                <div class=\"row\">
                                    <div class=\"col-5\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Planifiée\">
                                    </div>
                                    <div class=\"col-7\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
            // line 628
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 628, $this->source); })()), "visiteCourante", [], "any", false, false, false, 628), "datePlanifie", [], "any", false, false, false, 628), "d-m-Y à H:i"), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"col-12\">
                                        Modèle Rapport d'inspection
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-1 fw-bold fs-6\" value=\"";
            // line 632
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 632, $this->source); })()), "visiteCourante", [], "any", false, false, false, 632), "rapport", [], "any", false, false, false, 632), "libelle", [], "any", false, false, false, 632), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 632, $this->source); })()), "visiteCourante", [], "any", false, false, false, 632), "rapport", [], "any", false, false, false, 632), "PointVerification", [], "any", false, false, false, 632), "count", [], "any", false, false, false, 632), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 641, $this->source); })()), "rapport", [], "any", false, false, false, 641)) {
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 649, $this->source); })()), "attestation", [], "any", false, false, false, 649)) {
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 662
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 663
        echo "    ";
        $context["paiement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 663, $this->source); })()), "demande", [], "any", false, false, false, 663), "paiement", [], "any", false, false, false, 663);
        // line 664
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 664, $this->source); })()), "demande", [], "any", false, false, false, 664);
        // line 665
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 665, $this->source); })()), "installation", [], "any", false, false, false, 665);
        // line 666
        echo "<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"";
        // line 670
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 670, $this->source); })()), "mode", [], "any", false, false, false, 670), "html", null, true);
        echo "\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        if (\"";
        // line 676
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 676, $this->source); })()), "alimente", [], "any", false, false, false, 676), "html", null, true);
        echo "\" == 1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (\"";
        // line 684
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 684, $this->source); })()), "collectif", [], "any", false, false, false, 684), "html", null, true);
        echo "\" == 1) {
            \$('.collectif1').show(); \$('.collectif0').hide();
        }
        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        valSel=\"";
        // line 688
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 688, $this->source); })()), "typeConstruction", [], "any", false, false, false, 688), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 701, $this->source); })()), "intervenantAutre", [], "any", false, false, false, 701), "html", null, true);
        echo "\";
        if (valSel==\"Oui\") {
            \$('.intervenantAutre1').show(); 
        }
        valSel=\"";
        // line 705
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 705, $this->source); })()), "natureTravaux", [], "any", false, false, false, 705), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  1573 => 819,  1540 => 789,  1520 => 772,  1510 => 765,  1454 => 711,  1446 => 705,  1439 => 701,  1423 => 688,  1416 => 684,  1405 => 676,  1396 => 670,  1390 => 666,  1387 => 665,  1384 => 664,  1381 => 663,  1371 => 662,  1355 => 654,  1351 => 652,  1347 => 650,  1345 => 649,  1340 => 646,  1336 => 644,  1332 => 642,  1330 => 641,  1325 => 638,  1321 => 636,  1312 => 632,  1305 => 628,  1298 => 623,  1296 => 622,  1291 => 619,  1287 => 617,  1281 => 615,  1279 => 614,  1272 => 610,  1263 => 604,  1252 => 598,  1244 => 593,  1231 => 588,  1222 => 582,  1213 => 576,  1204 => 570,  1195 => 564,  1186 => 558,  1174 => 549,  1170 => 548,  1164 => 544,  1158 => 542,  1156 => 541,  1153 => 540,  1150 => 539,  1144 => 537,  1138 => 535,  1135 => 534,  1132 => 533,  1126 => 531,  1123 => 530,  1115 => 528,  1112 => 527,  1104 => 525,  1102 => 524,  1098 => 523,  1091 => 518,  1086 => 515,  1082 => 513,  1075 => 511,  1070 => 509,  1067 => 508,  1065 => 507,  1057 => 506,  1052 => 503,  1048 => 501,  1041 => 499,  1036 => 497,  1033 => 496,  1031 => 495,  1023 => 490,  1016 => 486,  1009 => 482,  1002 => 478,  995 => 474,  988 => 470,  981 => 466,  974 => 462,  963 => 454,  959 => 452,  952 => 448,  946 => 446,  944 => 445,  939 => 442,  936 => 441,  932 => 438,  925 => 434,  921 => 432,  914 => 430,  909 => 428,  906 => 427,  904 => 426,  896 => 421,  889 => 417,  882 => 413,  875 => 409,  868 => 405,  861 => 401,  854 => 397,  847 => 393,  836 => 385,  832 => 383,  825 => 379,  819 => 377,  817 => 376,  812 => 373,  809 => 372,  806 => 370,  798 => 365,  791 => 361,  783 => 356,  778 => 354,  771 => 350,  766 => 348,  759 => 344,  754 => 342,  747 => 338,  736 => 330,  729 => 325,  726 => 324,  723 => 322,  715 => 317,  708 => 313,  701 => 309,  694 => 305,  686 => 300,  679 => 296,  668 => 292,  657 => 284,  650 => 279,  647 => 278,  639 => 272,  632 => 268,  625 => 264,  618 => 260,  611 => 256,  603 => 251,  596 => 247,  589 => 243,  578 => 239,  571 => 235,  560 => 227,  556 => 225,  549 => 221,  543 => 219,  541 => 218,  536 => 215,  531 => 211,  525 => 208,  521 => 206,  519 => 205,  514 => 203,  507 => 199,  500 => 195,  485 => 183,  478 => 179,  471 => 175,  464 => 171,  457 => 166,  450 => 162,  444 => 160,  441 => 159,  437 => 158,  434 => 157,  428 => 155,  426 => 154,  421 => 151,  414 => 147,  408 => 145,  405 => 144,  399 => 142,  396 => 141,  390 => 139,  387 => 138,  381 => 136,  379 => 135,  376 => 134,  369 => 130,  365 => 129,  362 => 128,  359 => 127,  357 => 126,  346 => 117,  343 => 116,  337 => 114,  331 => 112,  328 => 111,  322 => 109,  318 => 107,  315 => 106,  311 => 104,  309 => 103,  306 => 102,  304 => 101,  296 => 96,  283 => 86,  277 => 82,  274 => 81,  271 => 80,  268 => 79,  265 => 78,  263 => 77,  260 => 76,  257 => 75,  254 => 74,  251 => 73,  248 => 72,  245 => 71,  242 => 70,  239 => 69,  236 => 68,  233 => 67,  230 => 66,  227 => 65,  224 => 64,  221 => 63,  218 => 62,  215 => 61,  212 => 60,  209 => 59,  206 => 58,  203 => 57,  200 => 56,  197 => 55,  194 => 54,  191 => 53,  188 => 52,  185 => 51,  182 => 50,  179 => 49,  176 => 48,  173 => 47,  170 => 46,  167 => 45,  164 => 44,  161 => 43,  158 => 42,  155 => 41,  152 => 40,  149 => 39,  146 => 38,  143 => 37,  140 => 36,  137 => 35,  134 => 34,  131 => 33,  128 => 32,  125 => 31,  123 => 30,  120 => 29,  117 => 28,  114 => 27,  112 => 26,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
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
    {% set link_action = \"\" %}
    {% set paiement = dossier.demande.paiement %}
    {% set agentConn = tools.getUtilisateurAgent(app.user.id) %}

    {% set action_demande = \"Consultation\" %}
    {% if not dossier.affecte %}
        {% set action_demande = \"Affectation\" %}
        {% set link_liste = 'app_dossier_affectation' %}
        {% if is_granted('ROLE_REFERENT') and agentConn and dossier.referent and agentConn.id == dossier.referent.id %}
            {% set link_action = 'app_dossier_affecter' %}
            {% set libelle_action = 'Affecter à un contrôleur' %}
        {% endif %}
    {% elseif not dossier.visite %}
        {% if is_granted('ROLE_CONTROLEUR') and agentConn and dossier.controleur and agentConn.id == dossier.controleur.id %}
            {% set action_demande = \"Planification Visite\" %}
            {% set link_liste = 'app_dossier_visite' %}
            {% set link_action = 'app_dossier_visiter' %}
            {% set libelle_action = 'Planifier une visite' %}
        {% endif %}
        {% if is_granted('ROLE_REFERENT') and agentConn and dossier.referent and agentConn.id == dossier.referent.id %}
            {% set link_action = 'app_dossier_desaffecter' %}
            {% set action_demande = \"Consultation Affectation\" %}
            {% set link_liste = 'app_dossier_affectation' %}
            {% set libelle_action = 'Retirer dossier affecté' %}
        {% endif %}
    {% elseif not dossier.rapport %}
        {% if is_granted('ROLE_CONTROLEUR') and agentConn and dossier.controleur and agentConn.id == dossier.controleur.id %}
            {% set action_demande = \"Rapport de Visite\" %}
            {% set link_liste = 'app_dossier_rapport' %}
            {% set link_action = 'app_dossier_rapporter' %}
            {% set libelle_action = 'Elaborer Rapport' %}
            {% set libelle_action2 = 'Re-planifier Visite' %}
            {% set link_action2 = 'app_dossier_revisiter' %}
        {% endif %}
        {% if is_granted('ROLE_REFERENT') and agentConn and dossier.referent and agentConn.id == dossier.referent.id %}
            {% set link_action = 'app_dossier_desaffecter' %}
            {% set action_demande = \"Consultation Affectation\" %}
            {% set link_liste = 'app_dossier_affectation' %}
            {% set libelle_action = 'Retirer dossier affecté' %}
        {% endif %}
    {% elseif not dossier.attestation %}
        {% set action_demande = \"Résultat Inspection\" %}
        {% set link_liste = 'app_dossier_attestation' %}
        {% if is_granted('ROLE_REFERENT') and agentConn and dossier.referent and agentConn.id == dossier.referent.id %}
            {% set link_action = 'app_dossier_showrapp' %}
            {% set libelle_action = 'Consulter le rapport' %}
        {% endif %}
    {% else %}
        {% set action_demande = \"Consultation \" %}
    {% endif %}

    {% set demande = dossier.demande %}
    {% set installation = demande.installation %}
    {% if app.session.get('page_liste_dossier') is defined and app.session.get('page_liste_dossier') %}
        {% set link_liste = app.session.get('page_liste_dossier') %}
    {% endif %}
    
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
                                {% if not dossier.attestation %}
                                    <span class=\"text-success\">[
                                    {% if not dossier.attestation %}
                                        En attente de 
                                    {% endif %}
                                    {% if not dossier.Etat == \"Affectation\" and not dossier.Etat == \"Attestation\" %}
                                        En attente d' 
                                    {% endif %}
                                    {{ dossier.Etat }}]</span>
                                {% else %}
                                    {% if dossier.visiteCourante.conclusion %}
                                        <span class=\"badge bg-success fs-5\">[{{ dossier.Etat }}]</span>
                                    {% else %}
                                        <span class=\"badge bg-danger fs-5\">[{{ dossier.Etat }}]</span>
                                    {% endif %}
                                {% endif %}
                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                    {% if tools.getUtilisateur(installation.createdBy) %}
                        {% set creator = tools.getUtilisateur(installation.createdBy) %}
                        <div align=\"left\" class=\"float-start border border-warning shadow p-2 mt-2 fs-8 fw-light\">
                            <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">{{creator.nomComplet}}</span></div>
                            <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">{{installation.createdAt|date(\"d-m-Y à H:i:s\")}}</span></div>
                        </div>
                        <div class=\"clear\"></div>
                    {% endif %}
                <div align=\"right\">
                {% if (dossier.rapport and not dossier.attestation) or dossier.attestation %}
                    <a href=\"{{ path('app_dossier_showrapp', {'id': dossier.id}) }}\" class=\"next action-button btn btn-secondary btn my-3\">Consulter le rapport</a>
                {% endif %}
                {% if not dossier.attestation %}
                    <a target=\"_blank\" href=\"{{ path('app_installation_showpdf', {'id': demande.installation.id}) }}\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Demande</a>
                {% endif %}
                {% if not dossier.attestation and dossier.visite and not dossier.rapport and (is_granted('ROLE_CONTROLEUR') and agentConn and dossier.controleur and agentConn.id == dossier.controleur.id) %}
                    <a href=\"{{ path('app_dossier_showrapp', {'id': dossier.id}) }}\" class=\"next action-button btn btn-outline-dark btn my-3\">Consulter le rapport provisoire</a>
                {% endif %}
                {% if dossier.cloture and not dossier.conforme and installation.demandeCourante.numeroPassage==1 and (is_granted('ROLE_ACCUEIL') or is_granted('ROLE_RFO')) %}
                    <a href=\"{{ path('app_installation_renew', {'id': installation.id}) }}\" class=\"next action-button btn btn-success border-dark btn ms-2\">
                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"white\">
                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#files') }}\"></use>
                    </svg>
                    Créer une demande en 2e visite</a>
                {% endif %}

                </div>
                <fieldset id=\"synthese_demande\">
                    {% if dossier.visite and dossier.visiteCourante.rejetRapport %}
                        <div class=\"alert alert-danger py-2 fs-6\"><span class=\"text-danger\">Rapport rejeté:  </span> <span class=\"fs-7\">{{dossier.visiteCourante.motifRejetRapport}}</span></div>
                    {% endif %}
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif {% if demande and demande.numeroPassage==2 %} <span class=\"badge bg-danger\">2e VISITE</span> {% endif %}
                            {% if 0 and installation.step>=7 and installation.demandeCourante.numeroPassage==1 and (is_granted('ROLE_ACCUEIL') or is_granted('ROLE_RFO')) %}
                                <a href=\"{{ path('app_installation_clone', {'id': installation.id}) }}\" class=\"next action-button btn btn-warning py-0 border-dark btn ms-5 float-end\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#files') }}\"></use>
                                </svg>
                                Cloner la Demande</a>
                            {% endif %}
                        </h2>
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

                        </div>  
                    </div>

                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title text-black\">Situation paiement</h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Statut Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6 text-success\" value=\"{{ demande.etat }}\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Paiement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6\" value=\"{{ paiement.datepaiement | date('d-m-Y') }}\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Mode paiement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6\" value=\"{{ paiement.mode }}\">
                            </div>
                            {% if paiement.reference %}
                            <div class=\"col-lg-3\">
                                <label >Référence paiement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6\" value=\"{{ paiement.reference }}\">
                            </div>
                            {% endif %}
                        </div>  
                    </div>

                    {# BLOC 1 #}
                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title text-black titre_bloc_1\">
                        Données de base de la demande
                        {% if (is_granted('ROLE_ADMIN')) %}
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{path('app_installation_edit1', {'id': installation.id})}}\" class=\" pt fs-8 text-dark\">
                            <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                            </svg>
                            </a>
                        {% endif %}
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_1\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#caret-down\") }}\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_1\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-8\">
                                <label for=\"form_usage\" >Usage Installation</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.usages }}\" id=\"form_usage\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{% if installation.alimente %}Oui{% else %}Non{% endif %}\" id=\"form_alimente\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_compteur\" >Numéro Compteur</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.compteur }}\" id=\"form_compteur\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.abonnement }}\" id=\"form_abonnement\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.grstReseau }}\" id=\"form_grstReseau\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4\">
                                <label for=\"form_localite\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.localite }}\" id=\"form_localite\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_adresse\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.adresse }}\" id=\"form_adresse\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_habitation\" >Complément Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.habitation }}\" id=\"form_habitation\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_lattitude\" >Latitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.lattitude }}\" id=\"form_lattitude\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_longitude\" >Longitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.longitude }}\" id=\"form_longitude\">
                            </div>
                        </div>
                    </div>

                    {# BLOC 2 #}
                    {% if installation.typeConstruction %}
                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title titre_bloc_2\">
                            Caractéristiques du site
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_2\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#caret-down\") }}\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_2\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-4\">
                                <label for=\"form_collectif collectif1\" >Bien Collectif ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{% if installation.collectif %}Oui{% else %}Non{% endif %}\" id=\"form_collectif\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_nomSite\" >Nom du site</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.nomSite }}\" id=\"form_nomSite\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_logement\" >Nombre de logements</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.logement }}\" id=\"form_logement\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-6\">
                                <label for=\"form_typeConstruction\" >Type de construction</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.typeConstruction.nom }}\" id=\"form_typeConstruction\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1\">
                                <label for=\"form_niveau\" >Nombre de niveaux</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.niveau }}\" id=\"form_niveau\">
                            </div>
                            <div class=\"col-lg-6 typeConstruction3\">
                                <label for=\"form_activite\" >Activités</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.activite }}\" id=\"form_activite\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                <label for=\"form_priece\" >Nombre de pièces</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.priece }}\" id=\"form_priece\">
                            </div>
                        </div>
                    </div>
                    {% endif %}

                    {# BLOC 3 #}
                    {% if installation.natureTravaux %}
                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title titre_bloc_3\">
                            Caractéristiques de l'installation
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_3\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#caret-down\") }}\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_3\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-6\">
                                <label for=\"form_natureTravaux\" >Nature des travaux</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.natureTravaux }}\" id=\"form_natureTravaux\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf15\" >Neufs_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.neuf15 }}\" id=\"form_neufs_15\">
                                <label for=\"form_existant15\" >Existants_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.existant15 }}\" id=\"form_existant15\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf25\" >Neufs_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.neuf25 }}\" id=\"form_neuf25\">
                                <label for=\"form_existant25\" >Existants_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.existant25 }}\" id=\"form_existant25\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neufAutre\" >Neufs_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.neufAutre }}\" id=\"form_neufAutre\">
                                <label for=\"form_existantAutre\" >Existants_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.existantAutre }}\" id=\"form_existantAutre\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4 intervenantAutre1\">
                                <label for=\"form_intervenantAutre\" >Autres intervenants ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.intervenantAutre }}\" id=\"form_intervenantAutre\">
                            </div>
                            <div class=\"col-lg-8 intervenantAutre1\">
                                <label for=\"form_intervenant\" >Intervenants</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.intervenant }}\" id=\"form_intervenant\">
                            </div>
                        </div>
                    </div>
                    {% endif %}

                {# BLOC 4 #}
                    {% if demande.installation.electricien %}
                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title titre_bloc_4\">
                            Informations sur l'électricien
                            {% if (is_granted('ROLE_ADMIN')) %}
                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{path('app_installation_edit2', {'id': installation.id})}}\" class=\" pt fs-8 text-dark\">
                                <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                </svg>
                                </a>
                            {% endif %}
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_4\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#caret-down\") }}\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_4\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Nom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.nom }}\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.prenom }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.localite }}\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.adresse }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.telephone }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.email }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.typePiece }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.numPiece }}\">
                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Electricien</label><br />
                            {% if installation.PJElectricien %}
                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                                    </svg>
                                    <span onclick=\"window.open('{{path('app_installation_downloadpj', {'id': installation.id, 'type':'electricien'})}}')\" class=\"text-success pt fs-7\">{{installation.PJElectricien.fichier}} </span>
                            {% else %}
                                    <span class=\"text-danger pt fs-8\">N/D</span>
                            {% endif %}
                            </div>

                        </div>
                    </div>
                    {% endif %}                                

                    {# BLOC 5 #}
                    {% if installation.proprietaire %}
                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title titre_bloc_5\">
                            Informations sur le propriétaire de l'installation
                            {% if (is_granted('ROLE_ADMIN')) %}
                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{path('app_installation_edit3', {'id': installation.id})}}\" class=\" pt fs-8 text-dark\">
                                <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                </svg>
                                </a>
                            {% endif %}
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_5\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#caret-down\") }}\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_5\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Nom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.nom }}\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.prenom }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.localite }}\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.adresse }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.telephone }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.email }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.typePiece }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.numPiece }}\">
                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Propriétaire</label><br />
                            {% if installation.PJProprietaire %}
                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                                    </svg>
                                    <span onclick=\"window.open('{{path('app_installation_downloadpj', {'id': installation.id, 'type':'proprietaire'})}}')\" class=\"text-success pt fs-7\">{{installation.PJProprietaire.fichier}} </span>
                            {% else %}
                                    <span class=\"text-danger pt fs-8\">N/D</span>
                            {% endif %}
                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >{% if installation.usages!='erp_ert' %}Titre de propriété{% else %}Documents Techniques{% endif %}</label><br />
                            {% if installation.PJDossierTechnique %}
                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                                    </svg>
                                    <span onclick=\"window.open('{{path('app_installation_downloadpj', {'id': installation.id, 'type':'dosstech'})}}')\" class=\"text-success pt fs-7\">{{installation.PJDossierTechnique.fichier}} </span>
                            {% else %}
                                    <span class=\"text-danger pt fs-8\">N/D</span>
                            {% endif %}
                            </div>
                        </div>
                    {% endif %}
                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2\" id=\"paiement_demande\">
                <div align=\"right\">
                    <a href=\"{{ path(link_liste) }}\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour</a>
                    {% if link_action2 is defined and link_action2 %}
                        <a href=\"{{ path(link_action2, {'id': dossier.id}) }}\" class=\"next action-button btn btn-secondary btn my-3\">{{libelle_action2}}</a>
                    {% endif %}
                    {% if link_action %}
                    <a href=\"{{ path(link_action, {'id': dossier.id }) }}\" class=\"next action-button btn btn-primary btn my-3\">{{ libelle_action }}</a>
                    {% endif %}
                    {% if (not dossier.affecte and is_granted('ROLE_RFO')) %}
                        <a href=\"{{ path('app_dossier_attribuer', {'id': dossier.id}) }}\" class=\"next action-button btn btn-primary0 btn my-3\">Changer de référent</a>
                    {% endif %}
                {% if dossier.attestation %}
                    {% if dossier.visiteCourante.conclusion %}
                        <a target=\"_blank\" href=\"{{ path('app_attestation_showpdf', {'id': dossier.id}) }}\" class=\"next action-button btn btn-success btn my-3\">Attestation Conformité</a>
                    {% else %}
                        <a target=\"_blank\" href=\"{{ path('app_attestation_showpdf0', {'id': dossier.id}) }}\" class=\"next action-button btn btn-danger btn my-3\">Bon de travaux</a>
                    {% endif %}
                {% endif %}
                
                {% if ((dossier.rapport and not dossier.attestation) or dossier.attestation) and is_granted('ROLE_CONTROLEUR') %}
                    <a href=\"{{ path('app_dossier_showrapp', {'id': dossier.id}) }}\" class=\"next action-button btn btn-secondary btn my-3\">Consulter le rapport</a>
                {% endif %}
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
                        <hr class=\"mb-1\" />
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
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control fw-bold py-0 fs-6\" value=\"{{ dossier.demande.installation.electricien.telephone }}\">
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
    {% set paiement = dossier.demande.paiement %}
    {% set demande = dossier.demande %}
    {% set installation = demande.installation %}
<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"{{ paiement.mode }}\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        if (\"{{ installation.alimente }}\" == 1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (\"{{ installation.collectif }}\" == 1) {
            \$('.collectif1').show(); \$('.collectif0').hide();
        }
        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        valSel=\"{{ installation.typeConstruction }}\";
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
        valSel=\"{{ installation.intervenantAutre }}\";
        if (valSel==\"Oui\") {
            \$('.intervenantAutre1').show(); 
        }
        valSel=\"{{ installation.natureTravaux }}\";
        if (valSel == \"Rénovation Partielle\") {
            \$('.natureTravaux1').show(); 
        }

        {# \$(\".bloc_1\").hide();  #}
        \$(\".bloc_2\").hide();
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

    function on_region_change() {
        var \$region = \$('#form_region');

        // When region gets selected ...
        \$region.change(function() {
            // Simulate form data, but only include the selected region value.
            var data = {};
            data['region'] = \$region.val();
            // Submit data via AJAX to the form's action path.
            \$.ajax({
                url : '{{ path('app_departement_load') }}',
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
                url : '{{ path('app_localite_load') }}',
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
{% endblock %}
", "dossier/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/show.html.twig");
    }
}
