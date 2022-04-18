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
class __TwigTemplate_382bfd9de3d741394da25389fa330d0bafbf783b74286534f1e8b442a84fb18f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_menu.html.twig"));

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
\t<nav class=\"sidebar-nav\">
\t\t<ul>
\t\t\t<span class=\"divider\">
\t\t\t\t<hr/></span>
\t\t\t";
        // line 13
        echo "\t\t\t<li>
\t\t\t\t<div class=\"px-3 user-logged d-flex align-items-center flex-wrap col\">
\t\t\t\t\t<div class=\"photo col-4\">
\t\t\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatar.jpg"), "html", null, true);
        echo "\" alt=\"AVATAR\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"infos col-8\">
\t\t\t\t\t\t<h5 class=\"nom tb fw-normal text-nowrap\" title=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "prenom", [], "any", false, false, false, 19), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "prenom", [], "any", false, false, false, 19), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t<p class=\"poste small fw-light\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "roles", [], "any", false, false, false, 20), 0, [], "array", false, false, false, 20), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<span class=\"divider\">
\t\t\t\t<hr/></span>
\t\t\t";
        // line 27
        echo "
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\" class=\"active\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pie-chart"), "html", null, true);
        echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Tableau de bord</span>
\t\t\t\t</a>
\t\t\t</li>

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_index");
        echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#geo-alt"), "html", null, true);
        echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion Localités</span>
\t\t\t\t</a>
\t\t\t</li>

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_index");
        echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#building"), "html", null, true);
        echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion Agences</span>
\t\t\t\t</a>
\t\t\t</li>

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_index");
        echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person-workspace"), "html", null, true);
        echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion Agents</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_index");
        echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#people"), "html", null, true);
        echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Clients</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_index");
        echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion des Demandes</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#graph-up"), "html", null, true);
        echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Statistiques</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person-badge"), "html", null, true);
        echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Utilisateurs</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#box-arrow-left"), "html", null, true);
        echo "\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Se déconnecter</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
</aside>
<div class=\"overlay\"></div>
<!-- ======== sidebar end =========== -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  231 => 115,  225 => 112,  215 => 105,  209 => 102,  199 => 95,  193 => 92,  183 => 85,  177 => 82,  167 => 75,  161 => 72,  151 => 65,  145 => 62,  134 => 54,  128 => 51,  117 => 43,  111 => 40,  100 => 32,  94 => 29,  90 => 27,  81 => 20,  73 => 19,  67 => 16,  62 => 13,  52 => 5,  48 => 4,  43 => 1,);
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
\t<nav class=\"sidebar-nav\">
\t\t<ul>
\t\t\t<span class=\"divider\">
\t\t\t\t<hr/></span>
\t\t\t{# Debut - Utilisateur Connecté #}
\t\t\t<li>
\t\t\t\t<div class=\"px-3 user-logged d-flex align-items-center flex-wrap col\">
\t\t\t\t\t<div class=\"photo col-4\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/img/avatar.jpg') }}\" alt=\"AVATAR\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"infos col-8\">
\t\t\t\t\t\t<h5 class=\"nom tb fw-normal text-nowrap\" title=\"{{ app.user.prenom }} {{ app.user.nom }}\">{{ app.user.prenom }}</h5>
\t\t\t\t\t\t<p class=\"poste small fw-light\">{{ app.user.roles[0] }}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<span class=\"divider\">
\t\t\t\t<hr/></span>
\t\t\t{# Fin - Utilisateur Connecté #}

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"{{ path('main') }}\" class=\"active\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pie-chart') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Tableau de bord</span>
\t\t\t\t</a>
\t\t\t</li>

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"{{ path('app_region_index') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#geo-alt') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion Localités</span>
\t\t\t\t</a>
\t\t\t</li>

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"{{ path('app_agence_index') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#building') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion Agences</span>
\t\t\t\t</a>
\t\t\t</li>

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
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"{{ path('app_electricien_index') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#people') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Clients</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"{{ path('app_installation_index') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#lightbulb') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Gestion des Demandes</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"{{ path('main') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#graph-up') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Statistiques</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"{{ path('app_utilisateur_index') }}\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person-badge') }}\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\">Utilisateurs</span>
\t\t\t\t</a>
\t\t\t</li>
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
\t\t</ul>
\t</nav>
</aside>
<div class=\"overlay\"></div>
<!-- ======== sidebar end =========== -->
", "include/_menu.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/include/_menu.html.twig");
    }
}
