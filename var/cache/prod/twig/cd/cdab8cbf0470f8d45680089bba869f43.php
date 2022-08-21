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
class __TwigTemplate_6c4f2ea5af0cb37ee97edf6ffd9052d5 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8), "isverified", [], "any", false, false, false, 8))) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "prenom", [], "any", false, false, false, 22), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "prenom", [], "any", false, false, false, 22), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t<p class=\"poste small fw-light fs-8\">";
            // line 23
            echo twig_escape_filter($this->env, twig_replace_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "roles", [], "any", false, false, false, 23)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), ["ROLE_" => ""]), "html", null, true);
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
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 34), "get", [0 => "menu"], "method", false, false, false, 34) == "main")) {
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
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 47), "get", [0 => "menu"], "method", false, false, false, 47) == "localite")) {
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
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 60), "get", [0 => "menu"], "method", false, false, false, 60) == "agence")) {
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
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 85), "get", [0 => "menu"], "method", false, false, false, 85), [0 => "electricien", 1 => "proprietaire"])) {
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
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 98), "get", [0 => "menu"], "method", false, false, false, 98) == "caisse")) {
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
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 108), "get", [0 => "menu"], "method", false, false, false, 108) == "caisse")) {
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 112), "get", [0 => "sousmenu"], "method", false, false, false, 112) == "journal_caisse")) {
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 124), "get", [0 => "sousmenu"], "method", false, false, false, 124) == "demande_paiement")) {
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 136), "get", [0 => "sousmenu"], "method", false, false, false, 136) == "histo_paiement")) {
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 148), "get", [0 => "sousmenu"], "method", false, false, false, 148) == "remboursement")) {
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
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 163), "get", [0 => "menu"], "method", false, false, false, 163) == "demande")) {
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
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 173), "get", [0 => "menu"], "method", false, false, false, 173) == "demande")) {
                    echo "show";
                }
                echo "\">
\t\t
\t\t";
                // line 175
                if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 175), "roles", [], "any", false, false, false, 175)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null) != "ROLE_PUBLIC")) && ((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 175), "roles", [], "any", false, false, false, 175)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null) != "ROLE_CLIENT"))) {
                    // line 176
                    echo "                        <li>
                            <a href=\"";
                    // line 177
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_index0");
                    echo "\" class=\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 177), "get", [0 => "sousmenu"], "method", false, false, false, 177) == "demande_all")) {
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 189), "get", [0 => "sousmenu"], "method", false, false, false, 189) == "demande_soumission")) {
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 201), "get", [0 => "sousmenu"], "method", false, false, false, 201) == "demande_validation")) {
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
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 216), "get", [0 => "menu"], "method", false, false, false, 216) == "dossier")) {
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
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 226), "get", [0 => "menu"], "method", false, false, false, 226) == "dossier")) {
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 230), "get", [0 => "sousmenu"], "method", false, false, false, 230) == "dossier_index0")) {
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 242), "get", [0 => "sousmenu"], "method", false, false, false, 242) == "dossier_affectation")) {
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 254), "get", [0 => "sousmenu"], "method", false, false, false, 254) == "dossier_visite")) {
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 266), "get", [0 => "sousmenu"], "method", false, false, false, 266) == "dossier_rapport")) {
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 278), "get", [0 => "sousmenu"], "method", false, false, false, 278) == "dossier_attestation")) {
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 290), "get", [0 => "sousmenu"], "method", false, false, false, 290) == "dossier_cloture")) {
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
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 318), "get", [0 => "menu"], "method", false, false, false, 318) == "rapport")) {
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
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 331), "get", [0 => "menu"], "method", false, false, false, 331) == "utilisateur")) {
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
        return array (  758 => 358,  753 => 355,  743 => 348,  737 => 345,  734 => 344,  732 => 343,  729 => 342,  719 => 335,  713 => 332,  706 => 331,  704 => 330,  701 => 329,  691 => 322,  685 => 319,  678 => 318,  675 => 317,  670 => 300,  660 => 293,  650 => 290,  647 => 289,  644 => 288,  634 => 281,  624 => 278,  621 => 277,  618 => 276,  608 => 269,  598 => 266,  595 => 265,  592 => 264,  582 => 257,  572 => 254,  569 => 253,  566 => 252,  556 => 245,  546 => 242,  543 => 241,  540 => 240,  530 => 233,  520 => 230,  517 => 229,  515 => 228,  508 => 226,  500 => 221,  489 => 216,  487 => 215,  484 => 214,  479 => 211,  469 => 204,  459 => 201,  456 => 200,  453 => 199,  443 => 192,  433 => 189,  430 => 188,  428 => 187,  425 => 186,  415 => 180,  405 => 177,  402 => 176,  400 => 175,  393 => 173,  385 => 168,  374 => 163,  372 => 162,  368 => 160,  362 => 157,  352 => 151,  342 => 148,  339 => 147,  336 => 146,  326 => 139,  316 => 136,  313 => 135,  310 => 134,  300 => 127,  290 => 124,  287 => 123,  285 => 122,  282 => 121,  272 => 115,  262 => 112,  259 => 111,  257 => 110,  250 => 108,  242 => 103,  231 => 98,  229 => 97,  226 => 96,  216 => 89,  210 => 86,  203 => 85,  200 => 84,  190 => 77,  184 => 74,  181 => 73,  179 => 72,  176 => 71,  166 => 64,  160 => 61,  153 => 60,  151 => 59,  148 => 58,  138 => 51,  132 => 48,  125 => 47,  123 => 46,  120 => 45,  110 => 38,  104 => 35,  97 => 34,  95 => 33,  91 => 31,  81 => 23,  73 => 22,  66 => 18,  60 => 14,  54 => 9,  52 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "include/_menu.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/include/_menu.html.twig");
    }
}
