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

/* main/index.html.twig */
class __TwigTemplate_27a9632d3757c7012885411d0e0eb92e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        echo "Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "isverified", [], "any", false, false, false, 6))) {
            // line 7
            echo "\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper pt-10\">

\t\t\t<ul class=\"nav nav-tabs mb-4 border-bottom border-dark border-2\">
\t\t\t\t<li class=\"nav-item bg-dark mx-1 rounded-top mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link fw-bold text-light\" aria-current=\"page\">Mon espace personnel</a>
\t\t\t\t</li>
\t\t\t\t";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "roles", [], "any", false, false, false, 14), 0, [], "array", false, false, false, 14) != "ROLE_PUBLIC")) {
                // line 15
                echo "\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"";
                // line 16
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main", ["dash_page" => "stat_dem"]);
                echo "\">Statistiques sur les demandes</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"";
                // line 19
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main", ["dash_page" => "stat_paye"]);
                echo "\">Statistiques sur les paiements</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"";
                // line 22
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stat");
                echo "\">Consultation des demandes</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t</ul>

\t\t\t<div class=\"row m-1 pt-2\">
\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">
\t\t\t\t\t\t<div class=\"float-start mr-20\">Mes Performances</div>
\t\t\t\t\t\t<form method=\"post\" id=\"form_dash_perio\" class=\"float-start\" action=\"\">
\t\t\t\t\t\t\t<select name=\"val_dash_perio\" id=\"val_dash_perio\" class=\"fw-bold bg-success bg-opacity-25 form-select-sm\">
\t\t\t\t\t\t\t\t<option ";
            // line 32
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 32, $this->source); })()) == "last1")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last1\">Aujourd'hui</option>
\t\t\t\t\t\t\t\t<option ";
            // line 33
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 33, $this->source); })()) == "last7")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last7\">7 derniers jours</option>
\t\t\t\t\t\t\t\t<option ";
            // line 34
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 34, $this->source); })()) == "last15")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last15\">15 derniers jours</option>
\t\t\t\t\t\t\t\t<option ";
            // line 35
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 35, $this->source); })()) == "last30")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last30\">30 derniers jours</option>
\t\t\t\t\t\t\t\t<option ";
            // line 36
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 36, $this->source); })()) == "all")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"all\">Toutes les périodes</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</form>

\t\t\t\t<div class=\"float-end text-dark fs-6\">Vous êtes actif sur <span class=\"badge bg-success fw-bold px-1\">";
            // line 40
            if (twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 40, $this->source); })()), "All", [], "array", false, false, false, 40)) {
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 40, $this->source); })()), "All", [], "array", false, false, false, 40) / twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 40, $this->source); })()), "All", [], "array", false, false, false, 40)) * 100), 1), "html", null, true);
            } else {
                echo "0";
            }
            echo "%</span> du total des demandes</div>
\t\t\t\t</h5>
\t\t\t</div>
\t\t\t";
            // line 43
            if (twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 43, $this->source); })()), "All", [], "array", false, false, false, 43)) {
                // line 44
                echo "\t\t\t<div class=\"row\">
\t\t\t\t";
                // line 48
                echo "\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t<div class=\"card bg-dark p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("All;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 54, $this->source); })()), "All", [], "array", false, false, false, 54), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Total des demandes</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t<div class=\"card bg-warning p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Domestiques;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 67, $this->source); })()), "Domestiques", [], "array", false, false, false, 67), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light\">Demandes domestiques</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t<div class=\"card bg-primary bg-opacity-75 p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Professionnelles;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 79, $this->source); })()), "Professionnelles", [], "array", false, false, false, 79), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-dark\">Demandes professionnelles</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t<div class=\"card bg-primary p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("ERP - ERT;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 91, $this->source); })()), "ERP - ERT", [], "array", false, false, false, 91), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes ERP - ERT</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t<div class=\"card bg-vertf p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("1ère visite;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "id", [], "any", false, false, false, 102))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 103, $this->source); })()), "1ère visite", [], "array", false, false, false, 103), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes en 1ère visite</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t<div class=\"card bg-rougef2 p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("2e visite;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 115, $this->source); })()), "2e visite", [], "array", false, false, false, 115), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes en 2e visite</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                // line 126
                echo "\t\t\t\t<div class=\"col-lg-4\" align=\"center\">
\t\t\t\t\t<div id=\"pieC\" class=\"p-2 mt-2 shadow border\" align=\"center\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\" align=\"center\">
\t\t\t\t\t<div id=\"pieC2\" class=\"p-2 mt-2 shadow border\" align=\"center\"></div>
\t\t\t\t</div>
\t\t\t\t";
                // line 133
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end col -->
\t\t\t
\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Demandes par état de traitement</h5>
\t\t\t</div>
\t\t\t<!-- end col -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t";
                // line 169
                echo "\t\t\t\t\t\t\t";
                $context["les_etat"] = [0 => "Soumis", 1 => "Paiement enregistré", 2 => "Paiement validé", 3 => "Dossier validé", 4 => "Dossier affecté", 5 => "Visite planifiée", 6 => "Rapport élaboré", 7 => "Rapport validé"];
                // line 170
                echo "\t\t\t\t\t\t\t";
                $context["les_col"] = [0 => "danger", 1 => "primary bg-opacity-25", 2 => "success bg-opacity-25", 3 => "info", 4 => "dark bg-opacity-50", 5 => "red", 6 => "primary bg-opacity-75", 7 => "green"];
                // line 171
                echo "\t\t\t\t\t\t";
                // line 172
                echo "
\t\t\t\t\t\t";
                // line 173
                $context["ix"] = 0;
                // line 174
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["les_etat"]) || array_key_exists("les_etat", $context) ? $context["les_etat"] : (function () { throw new RuntimeError('Variable "les_etat" does not exist.', 174, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
                    // line 175
                    echo "\t\t\t\t\t\t\t";
                    $context["col"] = twig_get_attribute($this->env, $this->source, (isset($context["les_col"]) || array_key_exists("les_col", $context) ? $context["les_col"] : (function () { throw new RuntimeError('Variable "les_col" does not exist.', 175, $this->source); })()), (isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 175, $this->source); })()), [], "array", false, false, false, 175);
                    // line 176
                    echo "\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t<div class=\"card bg-";
                    // line 177
                    echo twig_escape_filter($this->env, (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 177, $this->source); })()), "html", null, true);
                    echo " p-2 card-stat\">
\t\t\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                    // line 180
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => (($context["etat"] . ";") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 180, $this->source); })()), "user", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180))]), "html", null, true);
                    echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">";
                    // line 181
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 181, $this->source); })()), $context["etat"], [], "array", false, false, false, 181), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light\">";
                    // line 182
                    echo twig_escape_filter($this->env, $context["etat"], "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 189
                    $context["ix"] = ((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 189, $this->source); })()) + 1);
                    // line 190
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div id=\"pieC3\" class=\"p-2 mt-2 shadow border\" align=\"center\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t<hr />
\t\t\t<div class=\"row mt-2\">
\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t<div class=\"card bg-red p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 205
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Hors délais 5 jours"]);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
                // line 207
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_alerte"]) || array_key_exists("mes_alerte", $context) ? $context["mes_alerte"] : (function () { throw new RuntimeError('Variable "mes_alerte" does not exist.', 207, $this->source); })()), "Hors délais 5 jours", [], "array", false, false, false, 207), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Dossiers Hors délais 5j</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t<div class=\"card bg-rougef p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 220
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Hors délais 15 jours"]);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
                // line 222
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_alerte"]) || array_key_exists("mes_alerte", $context) ? $context["mes_alerte"] : (function () { throw new RuntimeError('Variable "mes_alerte" does not exist.', 222, $this->source); })()), "Hors délais 15 jours", [], "array", false, false, false, 222), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Dossiers Hors délais 15j</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            } else {
                // line 233
                echo "\t\t\t\t<div class=\"alert alert-danger col-4 offset-4 mt-4\">Vous n'êtes actif sur aucune demande !</div>
\t\t\t";
            }
            // line 235
            echo "\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
\t";
        } else {
            // line 238
            echo "\t\t<div class=\"col-8 mt-5 offset-2 alert alert-danger fs-4 text-center\">
\t\t\tVotre adresse email n'a pas encore été confirmée !
\t\t\tVeuillez cliquer sur le lien envoyé sur votre boite mail pour valider votre inscription !
\t\t</div>
\t";
        }
        // line 243
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 246
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 247
        echo "
\t\t";
        // line 248
        $context["les_etat"] = [0 => "Soumis", 1 => "Paiement enregistré", 2 => "Paiement validé", 3 => "Dossier validé", 4 => "Dossier affecté", 5 => "Visite planifiée", 6 => "Rapport élaboré", 7 => "Rapport validé"];
        // line 249
        echo "\t\t";
        $context["les_col"] = [0 => "#d83444", 1 => "#b5cbf1", 2 => "#b8d0c7", 3 => "#13c5ea", 4 => "#e1501e", 5 => "#508bf6", 6 => "#508bf6", 7 => "#4b9f47"];
        // line 250
        echo "
<script>
    \$(document).ready(function() {

        \$('#val_dash_perio').on('change', function() {
            \$(\"#form_dash_perio\").submit();
        });

\t";
        // line 258
        if (twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 258, $this->source); })()), "All", [], "array", false, false, false, 258)) {
            // line 259
            echo "        var pieC = new d3pie(\"pieC\", {
            \"header\": {
                \"title\": {
                    \"text\": \"Répartition des demandes par usage\",
                    \"fontSize\": 14,
                    \"font\": \"verdana\"
                },
            },
            \"size\": {
                \"canvasWidth\": 400,
                \"canvasHeight\": 300,
                \"pieOuterRadius\": \"70%\"
            },
            \"data\": {
                \"content\": [
                    {
                        \"label\": \"Domestique\",
                        \"value\": ";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 276, $this->source); })()), "Domestiques", [], "array", false, false, false, 276), "html", null, true);
            echo ",
                        \"color\": \"#febf04\"
                    },
                    {
                        \"label\": \"Professionnel\",
                        \"value\": ";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 281, $this->source); })()), "Professionnelles", [], "array", false, false, false, 281), "html", null, true);
            echo ",
                        \"color\": \"#508af5\"
                    },
                    {
                        \"label\": \"ERP - ERT\",
                        \"value\": ";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 286, $this->source); })()), "ERP - ERT", [], "array", false, false, false, 286), "html", null, true);
            echo ",
                        \"color\": \"#0b6efc\"
                    }
                ]
            },
\t\t\"labels\": {
\t\t\t\"mainLabel\": {
\t\t\t\t\"font\": \"verdana\",
\t\t\t\t\"fontSize\":\"12\"
\t\t\t},
\t\t\t\"percentage\": {
\t\t\t\t\"color\": \"#000000\"
\t\t\t}
\t\t}
        });

        var pieC2 = new d3pie(\"pieC2\", {
            \"header\": {
                \"title\": {
                    \"text\": \"Répartition par passage de visite\",
                    \"fontSize\": 14,
                    \"font\": \"verdana\"
                },
            },
            \"size\": {
                \"canvasWidth\": 400,
                \"canvasHeight\": 300,
                \"pieOuterRadius\": \"70%\"
            },
            \"data\": {
                \"content\": [
                    {
                        \"label\": \"1ère visite\",
                        \"value\": ";
            // line 319
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 319, $this->source); })()), "1ère visite", [], "array", false, false, false, 319), "html", null, true);
            echo ",
                        \"color\": \"#196110\"
                    },
                    {
                        \"label\": \"2e visite\",
                        \"value\": ";
            // line 324
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 324, $this->source); })()), "2e visite", [], "array", false, false, false, 324), "html", null, true);
            echo ",
                        \"color\": \"#825454\"
                    },
                ]
            },
\t\t\t\"labels\": {
\t\t\t\t\"mainLabel\": {
\t\t\t\t\t\"font\": \"verdana\",
\t\t\t\t\t\"fontSize\":\"12\"
\t\t\t\t},
\t\t\t\t\"percentage\": {
\t\t\t\t\t\"color\": \"yellow\"
\t\t\t\t}
\t\t\t}
        });

        var pieC3 = new d3pie(\"pieC3\", {
            \"header\": {
                \"title\": {
                    \"text\": \"Répartition des demandes par etat de traitement\",
                    \"fontSize\": 14,
                    \"font\": \"verdana\"
                },
            },
            \"size\": {
                \"canvasWidth\": 500,
                \"canvasHeight\": 400,
                \"pieOuterRadius\": \"80%\"
            },
            \"data\": {
                \"content\": [
\t\t\t\t";
            // line 355
            $context["ix"] = 0;
            // line 356
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_etat"]) || array_key_exists("les_etat", $context) ? $context["les_etat"] : (function () { throw new RuntimeError('Variable "les_etat" does not exist.', 356, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
                // line 357
                echo "\t\t\t\t\t";
                $context["col"] = twig_get_attribute($this->env, $this->source, (isset($context["les_col"]) || array_key_exists("les_col", $context) ? $context["les_col"] : (function () { throw new RuntimeError('Variable "les_col" does not exist.', 357, $this->source); })()), (isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 357, $this->source); })()), [], "array", false, false, false, 357);
                // line 358
                echo "\t\t\t\t\t\t{
\t\t\t\t\t\t\t\"label\": \"";
                // line 359
                echo twig_escape_filter($this->env, $context["etat"], "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\"value\": ";
                // line 360
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 360, $this->source); })()), $context["etat"], [], "array", false, false, false, 360), "html", null, true);
                echo ",
\t\t\t\t\t\t\t\"color\": \"";
                // line 361
                echo twig_escape_filter($this->env, (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 361, $this->source); })()), "html", null, true);
                echo "\"
\t\t\t\t\t\t}
\t\t\t\t\t";
                // line 363
                if (((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 363, $this->source); })()) < twig_length_filter($this->env, (isset($context["les_etat"]) || array_key_exists("les_etat", $context) ? $context["les_etat"] : (function () { throw new RuntimeError('Variable "les_etat" does not exist.', 363, $this->source); })())))) {
                    // line 364
                    echo "\t\t\t\t\t\t,
\t\t\t\t\t";
                }
                // line 366
                echo "\t\t\t\t\t";
                $context["ix"] = ((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 366, $this->source); })()) + 1);
                // line 367
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 368
            echo "                ]
            },
\t\t\t\"labels\": {
\t\t\t\t\"mainLabel\": {
\t\t\t\t\t\"font\": \"verdana\",
\t\t\t\t\t\"fontSize\":\"12\"
\t\t\t\t},
\t\t\t\t\"percentage\": {
\t\t\t\t\t\"color\": \"#000000\"
\t\t\t\t}
\t\t\t}
        });
\t";
        }
        // line 381
        echo "
    });
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  655 => 381,  640 => 368,  634 => 367,  631 => 366,  627 => 364,  625 => 363,  620 => 361,  616 => 360,  612 => 359,  609 => 358,  606 => 357,  601 => 356,  599 => 355,  565 => 324,  557 => 319,  521 => 286,  513 => 281,  505 => 276,  486 => 259,  484 => 258,  474 => 250,  471 => 249,  469 => 248,  466 => 247,  456 => 246,  445 => 243,  438 => 238,  433 => 235,  429 => 233,  415 => 222,  410 => 220,  394 => 207,  389 => 205,  373 => 191,  367 => 190,  365 => 189,  355 => 182,  351 => 181,  347 => 180,  341 => 177,  338 => 176,  335 => 175,  330 => 174,  328 => 173,  325 => 172,  323 => 171,  320 => 170,  317 => 169,  303 => 133,  295 => 126,  284 => 115,  280 => 114,  266 => 103,  262 => 102,  248 => 91,  244 => 90,  230 => 79,  226 => 78,  212 => 67,  208 => 66,  193 => 54,  189 => 53,  182 => 48,  179 => 44,  177 => 43,  167 => 40,  158 => 36,  152 => 35,  146 => 34,  140 => 33,  134 => 32,  125 => 25,  119 => 22,  113 => 19,  107 => 16,  104 => 15,  102 => 14,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}
{% block body %}
\t{% if app.user and app.user.isverified %}
\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper pt-10\">

\t\t\t<ul class=\"nav nav-tabs mb-4 border-bottom border-dark border-2\">
\t\t\t\t<li class=\"nav-item bg-dark mx-1 rounded-top mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link fw-bold text-light\" aria-current=\"page\">Mon espace personnel</a>
\t\t\t\t</li>
\t\t\t\t{% if  app.user.roles[0] != \"ROLE_PUBLIC\" %}
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"{{ path('main', {'dash_page': 'stat_dem'}) }}\">Statistiques sur les demandes</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"{{ path('main', {'dash_page': 'stat_paye'}) }}\">Statistiques sur les paiements</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"{{ path('stat') }}\">Consultation des demandes</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>

\t\t\t<div class=\"row m-1 pt-2\">
\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">
\t\t\t\t\t\t<div class=\"float-start mr-20\">Mes Performances</div>
\t\t\t\t\t\t<form method=\"post\" id=\"form_dash_perio\" class=\"float-start\" action=\"\">
\t\t\t\t\t\t\t<select name=\"val_dash_perio\" id=\"val_dash_perio\" class=\"fw-bold bg-success bg-opacity-25 form-select-sm\">
\t\t\t\t\t\t\t\t<option {% if perio_stat == 'last1' %} selected=\"selected\" {% endif %} value=\"last1\">Aujourd'hui</option>
\t\t\t\t\t\t\t\t<option {% if perio_stat == 'last7' %} selected=\"selected\" {% endif %} value=\"last7\">7 derniers jours</option>
\t\t\t\t\t\t\t\t<option {% if perio_stat == 'last15' %} selected=\"selected\" {% endif %} value=\"last15\">15 derniers jours</option>
\t\t\t\t\t\t\t\t<option {% if perio_stat == 'last30' %} selected=\"selected\" {% endif %} value=\"last30\">30 derniers jours</option>
\t\t\t\t\t\t\t\t<option {% if perio_stat == 'all' %} selected=\"selected\" {% endif %} value=\"all\">Toutes les périodes</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</form>

\t\t\t\t<div class=\"float-end text-dark fs-6\">Vous êtes actif sur <span class=\"badge bg-success fw-bold px-1\">{% if les_stat[\"All\"] %}{{(mes_stat[\"All\"]/les_stat[\"All\"]*100)|round(1)}}{% else %}0{% endif %}%</span> du total des demandes</div>
\t\t\t\t</h5>
\t\t\t</div>
\t\t\t{% if mes_stat[\"All\"] %}
\t\t\t<div class=\"row\">
\t\t\t\t{# 
\t\t\t\tTAB STAT 
\t\t\t\t----------------------------------------------------------------------------------------------- #}
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t<div class=\"card bg-dark p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'All;' ~ app.user.id}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">{{ mes_stat[\"All\"] }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Total des demandes</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t<div class=\"card bg-warning p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'Domestiques;' ~ app.user.id}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ mes_stat[\"Domestiques\"] }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light\">Demandes domestiques</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t<div class=\"card bg-primary bg-opacity-75 p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'Professionnelles;' ~ app.user.id}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ mes_stat[\"Professionnelles\"] }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-dark\">Demandes professionnelles</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t<div class=\"card bg-primary p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'ERP - ERT;' ~ app.user.id}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ mes_stat[\"ERP - ERT\"] }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes ERP - ERT</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t<div class=\"card bg-vertf p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': '1ère visite;' ~ app.user.id}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ mes_stat[\"1ère visite\"] }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes en 1ère visite</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t<div class=\"card bg-rougef2 p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': '2e visite;' ~ app.user.id}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ mes_stat[\"2e visite\"] }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes en 2e visite</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{# 
\t\t\t\tGRAPHIQUE STAT 
\t\t\t\t----------------------------------------------------------------------------------------------- #}
\t\t\t\t<div class=\"col-lg-4\" align=\"center\">
\t\t\t\t\t<div id=\"pieC\" class=\"p-2 mt-2 shadow border\" align=\"center\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\" align=\"center\">
\t\t\t\t\t<div id=\"pieC2\" class=\"p-2 mt-2 shadow border\" align=\"center\"></div>
\t\t\t\t</div>
\t\t\t\t{# ------------------- #}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end col -->
\t\t\t
\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Demandes par état de traitement</h5>
\t\t\t</div>
\t\t\t<!-- end col -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t{# {% set les_etat = [\"Soumis\"] %}
\t\t\t\t\t\t{% set les_col = [\"danger\"] %}
\t\t\t\t\t\t
\t\t\t\t\t\t{% if is_granted('ROLE_CAISSIER') or is_granted('ROLE_COMPTABLE') or is_granted('ROLE_DAF') %}
\t\t\t\t\t\t\t{% set les_etat = [\"Paiement enregistré\", \"Paiement validé\"] %}
\t\t\t\t\t\t\t{% set les_col = [\"primary bg-opacity-25\", \"success bg-opacity-25\"] %}
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if is_granted('ROLE_RFO') %}
\t\t\t\t\t\t\t{% set les_etat = [\"Dossier validé\"] %}
\t\t\t\t\t\t\t{% set les_col = [\"success bg-opacity-25\", ] %}
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if is_granted('ROLE_CONTROLEUR') %}
\t\t\t\t\t\t\t{% set les_etat = [\"Dossier affecté\", \"Visite planifiée\", \"Rapport élaboré\", \"Rapport validé\"] %}
\t\t\t\t\t\t\t{% set les_col = [ \"light\", \"red\", \"primary bg-opacity-75\", \"green\"] %}
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if is_granted('ROLE_REFERENT') %}
\t\t\t\t\t\t\t{% set les_etat = [\"Dossier validé\", \"Dossier affecté\", \"Visite planifiée\", \"Rapport élaboré\", \"Rapport validé\"] %}
\t\t\t\t\t\t\t{% set les_col = [\"info\", \"dark bg-opacity-50\", \"red\", \"primary bg-opacity-75\", \"green\"] %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %} #}
\t\t\t\t\t\t\t{% set les_etat = [\"Soumis\",\"Paiement enregistré\", \"Paiement validé\",\"Dossier validé\", \"Dossier affecté\", \"Visite planifiée\", \"Rapport élaboré\", \"Rapport validé\"] %}
\t\t\t\t\t\t\t{% set les_col = [\"danger\", \"primary bg-opacity-25\", \"success bg-opacity-25\", \"info\", \"dark bg-opacity-50\", \"red\", \"primary bg-opacity-75\", \"green\"] %}
\t\t\t\t\t\t{# {% endif %} #}

\t\t\t\t\t\t{% set ix = 0 %}
\t\t\t\t\t\t{% for etat in les_etat  %}
\t\t\t\t\t\t\t{% set col = les_col[ix] %}
\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t<div class=\"card bg-{{col}} p-2 card-stat\">
\t\t\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': etat ~ ';' ~ app.user.id}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">{{ mes_stat[etat] }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light\">{{etat}}</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% set ix = ix+1 %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div id=\"pieC3\" class=\"p-2 mt-2 shadow border\" align=\"center\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t<hr />
\t\t\t<div class=\"row mt-2\">
\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t<div class=\"card bg-red p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'Hors délais 5 jours'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t{{ mes_alerte[\"Hors délais 5 jours\"] }}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Dossiers Hors délais 5j</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t<div class=\"card bg-rougef p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'Hors délais 15 jours'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t{{ mes_alerte[\"Hors délais 15 jours\"] }}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Dossiers Hors délais 15j</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{% else %}
\t\t\t\t<div class=\"alert alert-danger col-4 offset-4 mt-4\">Vous n'êtes actif sur aucune demande !</div>
\t\t\t{% endif %}
\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
\t{% else %}
\t\t<div class=\"col-8 mt-5 offset-2 alert alert-danger fs-4 text-center\">
\t\t\tVotre adresse email n'a pas encore été confirmée !
\t\t\tVeuillez cliquer sur le lien envoyé sur votre boite mail pour valider votre inscription !
\t\t</div>
\t{% endif %}

{% endblock %}

{% block javascripts %}

\t\t{% set les_etat = [\"Soumis\",\"Paiement enregistré\", \"Paiement validé\",\"Dossier validé\", \"Dossier affecté\", \"Visite planifiée\", \"Rapport élaboré\", \"Rapport validé\"] %}
\t\t{% set les_col = [\"#d83444\", \"#b5cbf1\", \"#b8d0c7\", \"#13c5ea\", \"#e1501e\", \"#508bf6\", \"#508bf6\", \"#4b9f47\"] %}

<script>
    \$(document).ready(function() {

        \$('#val_dash_perio').on('change', function() {
            \$(\"#form_dash_perio\").submit();
        });

\t{% if mes_stat[\"All\"] %}
        var pieC = new d3pie(\"pieC\", {
            \"header\": {
                \"title\": {
                    \"text\": \"Répartition des demandes par usage\",
                    \"fontSize\": 14,
                    \"font\": \"verdana\"
                },
            },
            \"size\": {
                \"canvasWidth\": 400,
                \"canvasHeight\": 300,
                \"pieOuterRadius\": \"70%\"
            },
            \"data\": {
                \"content\": [
                    {
                        \"label\": \"Domestique\",
                        \"value\": {{ mes_stat[\"Domestiques\"] }},
                        \"color\": \"#febf04\"
                    },
                    {
                        \"label\": \"Professionnel\",
                        \"value\": {{ mes_stat[\"Professionnelles\"] }},
                        \"color\": \"#508af5\"
                    },
                    {
                        \"label\": \"ERP - ERT\",
                        \"value\": {{ mes_stat[\"ERP - ERT\"] }},
                        \"color\": \"#0b6efc\"
                    }
                ]
            },
\t\t\"labels\": {
\t\t\t\"mainLabel\": {
\t\t\t\t\"font\": \"verdana\",
\t\t\t\t\"fontSize\":\"12\"
\t\t\t},
\t\t\t\"percentage\": {
\t\t\t\t\"color\": \"#000000\"
\t\t\t}
\t\t}
        });

        var pieC2 = new d3pie(\"pieC2\", {
            \"header\": {
                \"title\": {
                    \"text\": \"Répartition par passage de visite\",
                    \"fontSize\": 14,
                    \"font\": \"verdana\"
                },
            },
            \"size\": {
                \"canvasWidth\": 400,
                \"canvasHeight\": 300,
                \"pieOuterRadius\": \"70%\"
            },
            \"data\": {
                \"content\": [
                    {
                        \"label\": \"1ère visite\",
                        \"value\": {{ mes_stat[\"1ère visite\"] }},
                        \"color\": \"#196110\"
                    },
                    {
                        \"label\": \"2e visite\",
                        \"value\": {{ mes_stat[\"2e visite\"] }},
                        \"color\": \"#825454\"
                    },
                ]
            },
\t\t\t\"labels\": {
\t\t\t\t\"mainLabel\": {
\t\t\t\t\t\"font\": \"verdana\",
\t\t\t\t\t\"fontSize\":\"12\"
\t\t\t\t},
\t\t\t\t\"percentage\": {
\t\t\t\t\t\"color\": \"yellow\"
\t\t\t\t}
\t\t\t}
        });

        var pieC3 = new d3pie(\"pieC3\", {
            \"header\": {
                \"title\": {
                    \"text\": \"Répartition des demandes par etat de traitement\",
                    \"fontSize\": 14,
                    \"font\": \"verdana\"
                },
            },
            \"size\": {
                \"canvasWidth\": 500,
                \"canvasHeight\": 400,
                \"pieOuterRadius\": \"80%\"
            },
            \"data\": {
                \"content\": [
\t\t\t\t{% set ix = 0 %}
\t\t\t\t{% for etat in les_etat  %}
\t\t\t\t\t{% set col = les_col[ix] %}
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\"label\": \"{{etat}}\",
\t\t\t\t\t\t\t\"value\": {{ mes_stat[etat] }},
\t\t\t\t\t\t\t\"color\": \"{{col}}\"
\t\t\t\t\t\t}
\t\t\t\t\t{% if ix<les_etat|length %}
\t\t\t\t\t\t,
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% set ix = ix+1 %}
\t\t\t\t{% endfor %}
                ]
            },
\t\t\t\"labels\": {
\t\t\t\t\"mainLabel\": {
\t\t\t\t\t\"font\": \"verdana\",
\t\t\t\t\t\"fontSize\":\"12\"
\t\t\t\t},
\t\t\t\t\"percentage\": {
\t\t\t\t\t\"color\": \"#000000\"
\t\t\t\t}
\t\t\t}
        });
\t{% endif %}

    });
</script>

{% endblock %}
", "main/index.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/index.html.twig");
    }
}
