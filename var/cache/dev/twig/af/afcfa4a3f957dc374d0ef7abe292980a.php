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

/* include/_menu.html.twig */
class __TwigTemplate_2b572b23ab8ef9da716116e11a11a0c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_menu.html.twig"));

        // line 1
        echo "<!-- ======== sidebar start =========== -->
<aside class=\"sidebar-nav-wrapper\">
\t<div class=\"navbar-logo\">
\t\t<a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">
\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-cossuel-black.png"), "html", null, true);
        echo "\" alt=\"logo\"/>
\t\t</a>
\t</div>
\t";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "isverified", [], "any", false, false, false, 8))) {
            // line 9
            echo "\t<nav class=\"sidebar-nav\">
\t\t<ul>
\t\t\t<span class=\"divider\">
\t\t\t\t<hr/></span>
\t\t\t";
            // line 14
            echo "\t\t\t<li>
\t\t\t\t<div class=\"px-3 user-logged d-flex align-items-center flex-wrap col\">
\t\t\t\t\t<div class=\"photo col-3 ps-1\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"black\" class=\"bi bi-plus-lg\" viewBox=\"0 0 32 32\">
\t\t\t\t\t\t\t<use xlink:href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person-badge"), "html", null, true);
            echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"infos col-9\">
\t\t\t\t\t\t<h5 class=\"nom tb fw-normal text-nowrap fs-6 mb-1\" title=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "prenom", [], "any", false, false, false, 22), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "prenom", [], "any", false, false, false, 22), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t<p class=\"poste small fw-light fs-8\">";
            // line 23
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "roles", [], "any", false, false, false, 23), 0, [], "array", false, false, false, 23), ["ROLE_" => ""]), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<span class=\"divider\">
\t\t\t\t<hr/>
\t\t\t</span>
\t\t\t";
            // line 31
            echo "

\t\t";
            // line 33
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 34
                echo "\t\t\t<li class=\"nav-item ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "session", [], "any", false, false, false, 34), "get", [0 => "menu"], "method", false, false, false, 34) == "main")) {
                    echo "active";
                }
                echo "\">
\t\t\t\t<a href=\"";
                // line 35
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
                echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pie-chart"), "html", null, true);
                echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Tableau de bord</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 45
            echo "
\t\t";
            // line 46
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 47
                echo "\t\t\t<li class=\"nav-item ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", [0 => "menu"], "method", false, false, false, 47) == "localite")) {
                    echo "active";
                }
                echo "\">
\t\t\t\t<a href=\"";
                // line 48
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_index");
                echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#geo-alt"), "html", null, true);
                echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion Localités</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 58
            echo "
\t\t";
            // line 59
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 60
                echo "\t\t\t<li class=\"nav-item ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "get", [0 => "menu"], "method", false, false, false, 60) == "agence")) {
                    echo "active";
                }
                echo "\">
\t\t\t\t<a href=\"";
                // line 61
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_index");
                echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#building"), "html", null, true);
                echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion Agences</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 71
            echo "
\t\t";
            // line 72
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 73
                echo "\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"";
                // line 74
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_index");
                echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person-workspace"), "html", null, true);
                echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion Agents</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 84
            echo "\t\t";
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
                // line 85
                echo "\t\t\t<li class=\"nav-item ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "session", [], "any", false, false, false, 85), "get", [0 => "menu"], "method", false, false, false, 85), [0 => "electricien", 1 => "proprietaire"])) {
                    echo "active";
                }
                echo "\">
\t\t\t\t<a href=\"";
                // line 86
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_index");
                echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#people"), "html", null, true);
                echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Clients</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 96
            echo "
\t\t";
            // line 97
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DAF"))) {
                // line 98
                echo "                <li class=\"nav-item nav-item-has-children ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "session", [], "any", false, false, false, 98), "get", [0 => "menu"], "method", false, false, false, 98) == "caisse")) {
                    echo "active";
                }
                echo "\">
                    <a href=\"#0\" class=\"collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#ddmenu_4\" aria-controls=\"ddmenu_4\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t\t<use xlink:href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#coin"), "html", null, true);
                echo "\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
                        <span class=\"text\">Gestion Caisse</span>
                    </a>
                    <ul id=\"ddmenu_4\" class=\"dropdown-nav collapse ";
                // line 108
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "session", [], "any", false, false, false, 108), "get", [0 => "menu"], "method", false, false, false, 108) == "caisse")) {
                    echo "show";
                }
                echo "\">
\t\t
\t\t\t\t";
                // line 110
                if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DAF"))) {
                    // line 111
                    echo "                        <li>
                            <a href=\"";
                    // line 112
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_journal");
                    echo "\" class=\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "session", [], "any", false, false, false, 112), "get", [0 => "sousmenu"], "method", false, false, false, 112) == "journal_caisse")) {
                        echo "active";
                    }
                    echo "\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
                    // line 115
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#currency-dollar"), "html", null, true);
                    echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Journal de caisse</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t\t\t";
                }
                // line 121
                echo "\t\t
\t\t\t\t";
                // line 122
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE"))) {
                    // line 123
                    echo "                        <li>
                            <a href=\"";
                    // line 124
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_index2");
                    echo "\" class=\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "session", [], "any", false, false, false, 124), "get", [0 => "sousmenu"], "method", false, false, false, 124) == "demande_paiement")) {
                        echo "active";
                    }
                    echo "\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
                    // line 127
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#cash"), "html", null, true);
                    echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Instances Paiement</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t\t\t";
                }
                // line 134
                echo "\t\t\t\t";
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE"))) {
                    // line 135
                    echo "                        <li>
                            <a href=\"";
                    // line 136
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_histo");
                    echo "\" class=\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "session", [], "any", false, false, false, 136), "get", [0 => "sousmenu"], "method", false, false, false, 136) == "histo_paiement")) {
                        echo "active";
                    }
                    echo "\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
                    // line 139
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#cash"), "html", null, true);
                    echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Historique Paiement</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t\t\t";
                }
                // line 146
                echo "\t\t\t\t";
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DAF"))) {
                    // line 147
                    echo "                        <li>
                            <a href=\"";
                    // line 148
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remboursement_index");
                    echo "\" class=\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "session", [], "any", false, false, false, 148), "get", [0 => "sousmenu"], "method", false, false, false, 148) == "remboursement")) {
                        echo "active";
                    }
                    echo "\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
                    // line 151
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#cash-coin"), "html", null, true);
                    echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Remboursements</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t\t\t";
                }
                // line 157
                echo "\t\t
                    </ul>
                </li>
\t\t";
            }
            // line 160
            echo "\t\t

\t\t";
            // line 162
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PUBLIC") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
                // line 163
                echo "                <li class=\"nav-item nav-item-has-children ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "session", [], "any", false, false, false, 163), "get", [0 => "menu"], "method", false, false, false, 163) == "demande")) {
                    echo "active";
                }
                echo "\">
                    <a href=\"#0\" class=\"collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#ddmenu_2\" aria-controls=\"ddmenu_2\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t\t<use xlink:href=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
                echo "\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
                        <span class=\"text\">Gestion Demandes</span>
                    </a>
                    <ul id=\"ddmenu_2\" class=\"dropdown-nav collapse ";
                // line 173
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "session", [], "any", false, false, false, 173), "get", [0 => "menu"], "method", false, false, false, 173) == "demande")) {
                    echo "show";
                }
                echo "\">
\t\t
\t\t";
                // line 175
                if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "user", [], "any", false, false, false, 175), "roles", [], "any", false, false, false, 175), 0, [], "array", false, false, false, 175) != "ROLE_PUBLIC")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "user", [], "any", false, false, false, 175), "roles", [], "any", false, false, false, 175), 0, [], "array", false, false, false, 175) != "ROLE_CLIENT"))) {
                    // line 176
                    echo "                        <li>
                            <a href=\"";
                    // line 177
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_index0");
                    echo "\" class=\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "session", [], "any", false, false, false, 177), "get", [0 => "sousmenu"], "method", false, false, false, 177) == "demande_all")) {
                        echo "active";
                    }
                    echo "\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
                    // line 180
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#list"), "html", null, true);
                    echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Toutes les demandes</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t";
                }
                // line 186
                echo "\t\t
\t\t";
                // line 187
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PUBLIC") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
                    // line 188
                    echo "                        <li>
                            <a href=\"";
                    // line 189
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_index");
                    echo "\" class=\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "session", [], "any", false, false, false, 189), "get", [0 => "sousmenu"], "method", false, false, false, 189) == "demande_soumission")) {
                        echo "active";
                    }
                    echo "\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
                    // line 192
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#send-check"), "html", null, true);
                    echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Soumission demande</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t";
                }
                // line 199
                echo "\t\t";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")) {
                    // line 200
                    echo "                        <li>
                            <a href=\"";
                    // line 201
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_index3");
                    echo "\" class=\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "session", [], "any", false, false, false, 201), "get", [0 => "sousmenu"], "method", false, false, false, 201) == "demande_validation")) {
                        echo "active";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
                    // line 204
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check2-circle"), "html", null, true);
                    echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Validation demande</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t";
                }
                // line 211
                echo "                    </ul>
                </li>
\t\t";
            }
            // line 214
            echo "
\t\t";
            // line 215
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
                // line 216
                echo "                <li class=\"nav-item nav-item-has-children ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 216, $this->source); })()), "session", [], "any", false, false, false, 216), "get", [0 => "menu"], "method", false, false, false, 216) == "dossier")) {
                    echo "active";
                }
                echo "\">
                    <a href=\"#0\" class=\"collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#ddmenu_3\" aria-controls=\"ddmenu_3\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t\t<use xlink:href=\"";
                // line 221
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#gear"), "html", null, true);
                echo "\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
                        <span class=\"text\">Gestion Dossiers</span>
                    </a>
                    <ul id=\"ddmenu_3\" class=\"dropdown-nav collapse ";
                // line 226
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 226, $this->source); })()), "session", [], "any", false, false, false, 226), "get", [0 => "menu"], "method", false, false, false, 226) == "dossier")) {
                    echo "show";
                }
                echo "\">
\t\t
\t\t";
                // line 228
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR"))) {
                    // line 229
                    echo "                        <li>
                            <a href=\"";
                    // line 230
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_index0");
                    echo "\" class=\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "session", [], "any", false, false, false, 230), "get", [0 => "sousmenu"], "method", false, false, false, 230) == "dossier_index0")) {
                        echo "active";
                    }
                    echo "\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
                    // line 233
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#list-check"), "html", null, true);
                    echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Tous les Dossiers</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t";
                }
                // line 240
                echo "\t\t";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                    // line 241
                    echo "                        <li>
                            <a href=\"";
                    // line 242
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_affectation");
                    echo "\" class=\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 242, $this->source); })()), "session", [], "any", false, false, false, 242), "get", [0 => "sousmenu"], "method", false, false, false, 242) == "dossier_affectation")) {
                        echo "active";
                    }
                    echo "\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
                    // line 245
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#clipboard"), "html", null, true);
                    echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Affectation Dossiers</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t";
                }
                // line 252
                echo "\t\t";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR")) {
                    // line 253
                    echo "                        <li>
                            <a href=\"";
                    // line 254
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_visite");
                    echo "\" class=\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 254, $this->source); })()), "session", [], "any", false, false, false, 254), "get", [0 => "sousmenu"], "method", false, false, false, 254) == "dossier_visite")) {
                        echo "active";
                    }
                    echo "\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
                    // line 257
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#calendar3"), "html", null, true);
                    echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Planification Visite</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t";
                }
                // line 264
                echo "\t\t";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR")) {
                    // line 265
                    echo "                        <li>
                            <a href=\"";
                    // line 266
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_rapport");
                    echo "\" class=\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 266, $this->source); })()), "session", [], "any", false, false, false, 266), "get", [0 => "sousmenu"], "method", false, false, false, 266) == "dossier_rapport")) {
                        echo "active";
                    }
                    echo "\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
                    // line 269
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#card-checklist"), "html", null, true);
                    echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Rapport de visite</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t";
                }
                // line 276
                echo "\t\t";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                    // line 277
                    echo "                        <li>
                            <a href=\"";
                    // line 278
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_attestation");
                    echo "\" class=\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 278, $this->source); })()), "session", [], "any", false, false, false, 278), "get", [0 => "sousmenu"], "method", false, false, false, 278) == "dossier_attestation")) {
                        echo "active";
                    }
                    echo "\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
                    // line 281
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#clipboard-check-fill"), "html", null, true);
                    echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Attestation Inspection</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t";
                }
                // line 288
                echo "\t\t";
                if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
                    // line 289
                    echo "                        <li>
                            <a href=\"";
                    // line 290
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_cloture");
                    echo "\" class=\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 290, $this->source); })()), "session", [], "any", false, false, false, 290), "get", [0 => "sousmenu"], "method", false, false, false, 290) == "dossier_cloture")) {
                        echo "active";
                    }
                    echo "\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
                    // line 293
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x-octagon"), "html", null, true);
                    echo "\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Dossiers Clôturés</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t";
                }
                // line 300
                echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t";
            }
            // line 317
            echo "\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 318
                echo "\t\t\t<li class=\"nav-item ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 318, $this->source); })()), "session", [], "any", false, false, false, 318), "get", [0 => "menu"], "method", false, false, false, 318) == "rapport")) {
                    echo "active";
                }
                echo "\">
\t\t\t\t<a href=\"";
                // line 319
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_index");
                echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
                // line 322
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#folder-check"), "html", null, true);
                echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion Rapports</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 329
            echo "
\t\t";
            // line 330
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DAF"))) {
                // line 331
                echo "\t\t\t<li class=\"nav-item ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 331, $this->source); })()), "session", [], "any", false, false, false, 331), "get", [0 => "menu"], "method", false, false, false, 331) == "utilisateur")) {
                    echo "active";
                }
                echo "\">
\t\t\t\t<a href=\"";
                // line 332
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
                echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
                // line 335
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person-badge"), "html", null, true);
                echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Utilisateurs</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 342
            echo "
\t\t";
            // line 343
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 344
                echo "\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"";
                // line 345
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
                // line 348
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#box-arrow-left"), "html", null, true);
                echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Se déconnecter</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 355
            echo "\t\t</ul>
\t</nav>
\t";
        }
        // line 358
        echo "</aside>
<div class=\"overlay\"></div>
<!-- ======== sidebar end =========== -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "include/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  764 => 358,  759 => 355,  749 => 348,  743 => 345,  740 => 344,  738 => 343,  735 => 342,  725 => 335,  719 => 332,  712 => 331,  710 => 330,  707 => 329,  697 => 322,  691 => 319,  684 => 318,  681 => 317,  676 => 300,  666 => 293,  656 => 290,  653 => 289,  650 => 288,  640 => 281,  630 => 278,  627 => 277,  624 => 276,  614 => 269,  604 => 266,  601 => 265,  598 => 264,  588 => 257,  578 => 254,  575 => 253,  572 => 252,  562 => 245,  552 => 242,  549 => 241,  546 => 240,  536 => 233,  526 => 230,  523 => 229,  521 => 228,  514 => 226,  506 => 221,  495 => 216,  493 => 215,  490 => 214,  485 => 211,  475 => 204,  465 => 201,  462 => 200,  459 => 199,  449 => 192,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  421 => 180,  411 => 177,  408 => 176,  406 => 175,  399 => 173,  391 => 168,  380 => 163,  378 => 162,  374 => 160,  368 => 157,  358 => 151,  348 => 148,  345 => 147,  342 => 146,  332 => 139,  322 => 136,  319 => 135,  316 => 134,  306 => 127,  296 => 124,  293 => 123,  291 => 122,  288 => 121,  278 => 115,  268 => 112,  265 => 111,  263 => 110,  256 => 108,  248 => 103,  237 => 98,  235 => 97,  232 => 96,  222 => 89,  216 => 86,  209 => 85,  206 => 84,  196 => 77,  190 => 74,  187 => 73,  185 => 72,  182 => 71,  172 => 64,  166 => 61,  159 => 60,  157 => 59,  154 => 58,  144 => 51,  138 => 48,  131 => 47,  129 => 46,  126 => 45,  116 => 38,  110 => 35,  103 => 34,  101 => 33,  97 => 31,  87 => 23,  79 => 22,  72 => 18,  66 => 14,  60 => 9,  58 => 8,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======== sidebar start =========== -->
<aside class=\"sidebar-nav-wrapper\">
\t<div class=\"navbar-logo\">
\t\t<a href=\"{{ path('main') }}\">
\t\t\t<img src=\"{{ asset('assets/img/logo-cossuel-black.png') }}\" alt=\"logo\"/>
\t\t</a>
\t</div>
\t{% if app.user and app.user.isverified %}
\t<nav class=\"sidebar-nav\">
\t\t<ul>
\t\t\t<span class=\"divider\">
\t\t\t\t<hr/></span>
\t\t\t{# Debut - Utilisateur Connecté #}
\t\t\t<li>
\t\t\t\t<div class=\"px-3 user-logged d-flex align-items-center flex-wrap col\">
\t\t\t\t\t<div class=\"photo col-3 ps-1\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"black\" class=\"bi bi-plus-lg\" viewBox=\"0 0 32 32\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person-badge') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"infos col-9\">
\t\t\t\t\t\t<h5 class=\"nom tb fw-normal text-nowrap fs-6 mb-1\" title=\"{{ app.user.prenom }} {{ app.user.nom }}\">{{ app.user.prenom }}</h5>
\t\t\t\t\t\t<p class=\"poste small fw-light fs-8\">{{ app.user.roles[0] | replace({'ROLE_':''}) }}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<span class=\"divider\">
\t\t\t\t<hr/>
\t\t\t</span>
\t\t\t{# Fin - Utilisateur Connecté #}


\t\t{% if is_granted('ROLE_USER') %}
\t\t\t<li class=\"nav-item {% if app.session.get('menu') == 'main' %}active{% endif %}\">
\t\t\t\t<a href=\"{{ path('main') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pie-chart') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Tableau de bord</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t{% endif %}

\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<li class=\"nav-item {% if app.session.get('menu') == 'localite' %}active{% endif %}\">
\t\t\t\t<a href=\"{{ path('app_region_index') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#geo-alt') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion Localités</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t{% endif %}

\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<li class=\"nav-item {% if app.session.get('menu') == 'agence' %}active{% endif %}\">
\t\t\t\t<a href=\"{{ path('app_agence_index') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#building') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion Agences</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t{% endif %}

\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"{{ path('app_agent_index') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person-workspace') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion Agents</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t{% endif %}
\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_ACCUEIL') or is_granted('ROLE_RFO') %}
\t\t\t<li class=\"nav-item {% if app.session.get('menu') in ['electricien', 'proprietaire'] %}active{% endif %}\">
\t\t\t\t<a href=\"{{ path('app_electricien_index') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#people') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Clients</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t{% endif %}

\t\t{% if is_granted('ROLE_COMPTABLE') or is_granted('ROLE_CAISSIER') or is_granted('ROLE_DAF') %}
                <li class=\"nav-item nav-item-has-children {% if app.session.get('menu') == 'caisse' %}active{% endif %}\">
                    <a href=\"#0\" class=\"collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#ddmenu_4\" aria-controls=\"ddmenu_4\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#coin') }}\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
                        <span class=\"text\">Gestion Caisse</span>
                    </a>
                    <ul id=\"ddmenu_4\" class=\"dropdown-nav collapse {% if app.session.get('menu') == 'caisse' %}show{% endif %}\">
\t\t
\t\t\t\t{% if is_granted('ROLE_COMPTABLE') or is_granted('ROLE_CAISSIER') or is_granted('ROLE_DAF') %}
                        <li>
                            <a href=\"{{ path('app_paiement_journal') }}\" class=\"{% if app.session.get('sousmenu') == 'journal_caisse' %}active{% endif %}\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#currency-dollar') }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Journal de caisse</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t\t\t{% endif %}\t\t
\t\t\t\t{% if is_granted('ROLE_CAISSIER') or is_granted('ROLE_COMPTABLE') %}
                        <li>
                            <a href=\"{{ path('app_installation_index2') }}\" class=\"{% if app.session.get('sousmenu') == 'demande_paiement' %}active{% endif %}\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#cash') }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Instances Paiement</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t\t\t{% endif %}
\t\t\t\t{% if is_granted('ROLE_CAISSIER') or is_granted('ROLE_COMPTABLE') %}
                        <li>
                            <a href=\"{{ path('app_paiement_histo') }}\" class=\"{% if app.session.get('sousmenu') == 'histo_paiement' %}active{% endif %}\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#cash') }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Historique Paiement</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t\t\t{% endif %}
\t\t\t\t{% if is_granted('ROLE_COMPTABLE') or is_granted('ROLE_DAF') %}
                        <li>
                            <a href=\"{{ path('app_remboursement_index') }}\" class=\"{% if app.session.get('sousmenu') == 'remboursement' %}active{% endif %}\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#cash-coin') }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Remboursements</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t\t\t{% endif %}\t\t
                    </ul>
                </li>
\t\t{% endif %}\t\t

\t\t{% if is_granted('ROLE_PUBLIC') or is_granted('ROLE_CAISSIER') or is_granted('ROLE_RFO') %}
                <li class=\"nav-item nav-item-has-children {% if app.session.get('menu') == 'demande' %}active{% endif %}\">
                    <a href=\"#0\" class=\"collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#ddmenu_2\" aria-controls=\"ddmenu_2\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#lightbulb') }}\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
                        <span class=\"text\">Gestion Demandes</span>
                    </a>
                    <ul id=\"ddmenu_2\" class=\"dropdown-nav collapse {% if app.session.get('menu') == 'demande' %}show{% endif %}\">
\t\t
\t\t{% if is_granted('ROLE_USER') and app.user.roles[0] != \"ROLE_PUBLIC\" and app.user.roles[0] != \"ROLE_CLIENT\" %}
                        <li>
                            <a href=\"{{ path('app_installation_index0') }}\" class=\"{% if app.session.get('sousmenu') == 'demande_all' %}active{% endif %}\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#list') }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Toutes les demandes</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t{% endif %}\t\t
\t\t{% if is_granted('ROLE_PUBLIC') or is_granted('ROLE_RFO') %}
                        <li>
                            <a href=\"{{ path('app_installation_index') }}\" class=\"{% if app.session.get('sousmenu') == 'demande_soumission' %}active{% endif %}\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#send-check') }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Soumission demande</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t{% endif %}
\t\t{% if is_granted('ROLE_RFO') %}
                        <li>
                            <a href=\"{{ path('app_installation_index3') }}\" class=\"{% if app.session.get('sousmenu') == 'demande_validation' %}active{% endif %}\">
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check2-circle') }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Validation demande</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t{% endif %}
                    </ul>
                </li>
\t\t{% endif %}

\t\t{% if is_granted('ROLE_REFERENT') or is_granted('ROLE_CONTROLEUR') or is_granted('ROLE_RFO') %}
                <li class=\"nav-item nav-item-has-children {% if app.session.get('menu') == 'dossier' %}active{% endif %}\">
                    <a href=\"#0\" class=\"collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#ddmenu_3\" aria-controls=\"ddmenu_3\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#gear') }}\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
                        <span class=\"text\">Gestion Dossiers</span>
                    </a>
                    <ul id=\"ddmenu_3\" class=\"dropdown-nav collapse {% if app.session.get('menu') == 'dossier' %}show{% endif %}\">
\t\t
\t\t{% if is_granted('ROLE_REFERENT') or is_granted('ROLE_CONTROLEUR') %}
                        <li>
                            <a href=\"{{ path('app_dossier_index0') }}\" class=\"{% if app.session.get('sousmenu') == 'dossier_index0' %}active{% endif %}\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#list-check') }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Tous les Dossiers</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t{% endif %}
\t\t{% if is_granted('ROLE_REFERENT') %}
                        <li>
                            <a href=\"{{ path('app_dossier_affectation') }}\" class=\"{% if app.session.get('sousmenu') == 'dossier_affectation' %}active{% endif %}\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#clipboard') }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Affectation Dossiers</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t{% endif %}
\t\t{% if is_granted('ROLE_CONTROLEUR') %}
                        <li>
                            <a href=\"{{ path('app_dossier_visite') }}\" class=\"{% if app.session.get('sousmenu') == 'dossier_visite' %}active{% endif %}\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#calendar3') }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Planification Visite</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t{% endif %}
\t\t{% if is_granted('ROLE_CONTROLEUR') %}
                        <li>
                            <a href=\"{{ path('app_dossier_rapport') }}\" class=\"{% if app.session.get('sousmenu') == 'dossier_rapport' %}active{% endif %}\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#card-checklist') }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Rapport de visite</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t{% endif %}
\t\t{% if is_granted('ROLE_REFERENT') %}
                        <li>
                            <a href=\"{{ path('app_dossier_attestation') }}\" class=\"{% if app.session.get('sousmenu') == 'dossier_attestation' %}active{% endif %}\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#clipboard-check-fill') }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Attestation Inspection</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t{% endif %}
\t\t{% if is_granted('ROLE_REFERENT') or is_granted('ROLE_CONTROLEUR') or is_granted('ROLE_RFO') %}
                        <li>
                            <a href=\"{{ path('app_dossier_cloture') }}\" class=\"{% if app.session.get('sousmenu') == 'dossier_cloture' %}active{% endif %}\"> 
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"black\">
\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#x-octagon') }}\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">Dossiers Clôturés</span>
\t\t\t\t\t\t\t</a>
                        </li>
\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t{% endif %}
{# \t\t
\t\t{% if is_granted('ROLE_USER') %}
\t\t\t<li class=\"nav-item {% if app.session.get('menu') == 'statistiques' %}active{% endif %}\">
\t\t\t\t<a href=\"{{ path('stat') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#graph-up') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Statistiques</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t{% endif %}
 #}
\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<li class=\"nav-item {% if app.session.get('menu') == 'rapport' %}active{% endif %}\">
\t\t\t\t<a href=\"{{ path('app_rapport_index') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#folder-check') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion Rapports</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t{% endif %}

\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_DAF') %}
\t\t\t<li class=\"nav-item {% if app.session.get('menu') == 'utilisateur' %}active{% endif %}\">
\t\t\t\t<a href=\"{{ path('app_utilisateur_index') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person-badge') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Utilisateurs</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t{% endif %}

\t\t{% if is_granted('ROLE_USER') %}
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"{{ path('app_logout') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#box-arrow-left') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Se déconnecter</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t{% endif %}
\t\t</ul>
\t</nav>
\t{% endif %}
</aside>
<div class=\"overlay\"></div>
<!-- ======== sidebar end =========== -->
", "include/_menu.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/include/_menu.html.twig");
    }
}
