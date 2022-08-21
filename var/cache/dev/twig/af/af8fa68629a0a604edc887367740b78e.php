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

/* main/index_stat.html.twig */
class __TwigTemplate_3a9f6bddc7fbca2b1cee6d98ab919b71 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index_stat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index_stat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index_stat.html.twig", 1);
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
        echo "\t<style>
\t\t.p0_title {
\t\t\tborder:1px solid #ccc;
\t\t\tfon-weight:bold;
\t\t}
\t</style>
\t";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "isverified", [], "any", false, false, false, 12))) {
            // line 13
            echo "\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper pt-10\">

\t\t\t<ul class=\"nav nav-tabs mb-4 border-bottom border-dark border-2\">
\t\t\t\t<li class=\"nav-item bg-warning mx-1 rounded-top mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" aria-current=\"page\" href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main", ["dash_page" => "perso"]);
            echo "\">Mon espace personnel</a>
\t\t\t\t</li>
\t\t\t\t";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "roles", [], "any", false, false, false, 20), 0, [], "array", false, false, false, 20) != "ROLE_PUBLIC")) {
                // line 21
                echo "\t\t\t\t<li class=\"nav-item bg-dark rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link fw-bold text-light\" href=\"";
                // line 22
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main", ["dash_page" => "stat_dem"]);
                echo "\">Statistiques sur les demandes</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"";
                // line 25
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main", ["dash_page" => "stat_paye"]);
                echo "\">Statistiques sur les paiements</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"";
                // line 28
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stat");
                echo "\">Consultation des demandes</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 31
            echo "\t\t\t</ul>

\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">
\t\t\t\t\t<div class=\"float-start mr-20\">Demandes par type d'usage et passage visite</div>
\t\t\t\t\t<form method=\"post\" id=\"form_dash_perio\" class=\"float-end\" action=\"\">
\t\t\t\t\t\t<select name=\"val_dash_perio\" id=\"val_dash_perio\" class=\"fw-bold bg-success bg-opacity-25 form-select-sm\">
\t\t\t\t\t\t\t<option ";
            // line 38
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 38, $this->source); })()) == "last1")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last1\">Aujourd'hui</option>
\t\t\t\t\t\t\t<option ";
            // line 39
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 39, $this->source); })()) == "last7")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last7\">7 derniers jours</option>
\t\t\t\t\t\t\t<option ";
            // line 40
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 40, $this->source); })()) == "last15")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last15\">15 derniers jours</option>
\t\t\t\t\t\t\t<option ";
            // line 41
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 41, $this->source); })()) == "last30")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last30\">30 derniers jours</option>
\t\t\t\t\t\t\t<option ";
            // line 42
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 42, $this->source); })()) == "all")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"all\">Toutes les périodes</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</form>
\t\t\t\t</h5>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 51
            echo "\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t<div class=\"card bg-dark p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "All"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 57, $this->source); })()), "All", [], "array", false, false, false, 57), "html", null, true);
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
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Domestiques"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 70, $this->source); })()), "Domestiques", [], "array", false, false, false, 70), "html", null, true);
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
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Professionnelles"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 82, $this->source); })()), "Professionnelles", [], "array", false, false, false, 82), "html", null, true);
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
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "ERP - ERT"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 94, $this->source); })()), "ERP - ERT", [], "array", false, false, false, 94), "html", null, true);
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
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "1ère visite"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 106, $this->source); })()), "1ère visite", [], "array", false, false, false, 106), "html", null, true);
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
            // line 117
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "2e visite"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 118, $this->source); })()), "2e visite", [], "array", false, false, false, 118), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes en 2e visite</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 129
            echo "\t\t\t\t<div class=\"col-lg-4\" align=\"center\">
\t\t\t\t\t<div id=\"pieC\" class=\"p-2 mt-2 shadow border\" align=\"center\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\" align=\"center\">
\t\t\t\t\t<div id=\"pieC2\" class=\"p-2 mt-2 shadow border\" align=\"center\"></div>
\t\t\t\t</div>
\t\t\t\t";
            // line 136
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end col -->
\t\t\t
\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">
\t\t\t\tDemandes par état de traitement
\t\t\t\t</h5>
\t\t\t</div>
\t\t\t<!-- end col -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t";
            // line 174
            echo "\t\t\t\t\t\t\t";
            $context["les_etat"] = [0 => "Soumis", 1 => "Paiement enregistré", 2 => "Paiement validé", 3 => "Dossier validé", 4 => "Dossier affecté", 5 => "Visite planifiée", 6 => "Rapport élaboré", 7 => "Rapport validé"];
            // line 175
            echo "\t\t\t\t\t\t\t";
            $context["les_col"] = [0 => "danger", 1 => "primary bg-opacity-25", 2 => "success bg-opacity-25", 3 => "info", 4 => "dark bg-opacity-50", 5 => "red", 6 => "primary bg-opacity-75", 7 => "green"];
            // line 176
            echo "\t\t\t\t\t\t";
            // line 177
            echo "
\t\t\t\t\t\t";
            // line 178
            $context["ix"] = 0;
            // line 179
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_etat"]) || array_key_exists("les_etat", $context) ? $context["les_etat"] : (function () { throw new RuntimeError('Variable "les_etat" does not exist.', 179, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
                // line 180
                echo "\t\t\t\t\t\t\t";
                $context["col"] = twig_get_attribute($this->env, $this->source, (isset($context["les_col"]) || array_key_exists("les_col", $context) ? $context["les_col"] : (function () { throw new RuntimeError('Variable "les_col" does not exist.', 180, $this->source); })()), (isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 180, $this->source); })()), [], "array", false, false, false, 180);
                // line 181
                echo "\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t<div class=\"card bg-";
                // line 182
                echo twig_escape_filter($this->env, (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 182, $this->source); })()), "html", null, true);
                echo " p-2 card-stat\">
\t\t\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 185
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => $context["etat"]]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 186, $this->source); })()), $context["etat"], [], "array", false, false, false, 186), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light\">";
                // line 187
                echo twig_escape_filter($this->env, $context["etat"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 194
                $context["ix"] = ((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 194, $this->source); })()) + 1);
                // line 195
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
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
            // line 210
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Hors délais 5 jours"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_alerte"]) || array_key_exists("les_alerte", $context) ? $context["les_alerte"] : (function () { throw new RuntimeError('Variable "les_alerte" does not exist.', 212, $this->source); })()), "Hors délais 5 jours", [], "array", false, false, false, 212), "html", null, true);
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
            // line 225
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Hors délais 15 jours"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_alerte"]) || array_key_exists("les_alerte", $context) ? $context["les_alerte"] : (function () { throw new RuntimeError('Variable "les_alerte" does not exist.', 227, $this->source); })()), "Hors délais 15 jours", [], "array", false, false, false, 227), "html", null, true);
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
            // line 237
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 238
                echo "\t\t\t<div class=\"row mt-50\">
\t\t\t\t<div class=\"offset-1 col-md-10\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Demandes en préparation (";
                // line 242
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_install"]) || array_key_exists("les_install", $context) ? $context["les_install"] : (function () { throw new RuntimeError('Variable "les_install" does not exist.', 242, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 242), "html", null, true);
                echo ")</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
            \t";
                // line 246
                if ((twig_length_filter($this->env, (isset($context["les_install"]) || array_key_exists("les_install", $context) ? $context["les_install"] : (function () { throw new RuntimeError('Variable "les_install" does not exist.', 246, $this->source); })())) == 0)) {
                    // line 247
                    echo "                <div class=\"row pt-20\">
                    <div class=\"col-3\"></div>
                    <div class=\"col-6\">
                        <div class=\"alert alert-warning d-flex align-items-center\" role=\"alert\">
                            <div>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 24 24\">
                                    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
                                </svg>
                                Aucun enregistrement trouvé !
                            </div>
                        </div>
                    </div>
                </div>
\t\t\t\t";
                } else {
                    // line 261
                    echo "\t\t\t\t<table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">N° demande</th> 
\t\t\t\t\t\t<th class=\"priority-3\">Usage</th> 
\t\t\t\t\t\t<th>Localité</th>
\t\t\t\t\t\t<th>Type Construction</th>
\t\t\t\t\t\t<th>Statut demande</th>
\t\t\t\t\t\t";
                    // line 270
                    echo "\t\t\t\t\t\t";
                    // line 271
                    echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
                    // line 274
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["les_install"]) || array_key_exists("les_install", $context) ? $context["les_install"] : (function () { throw new RuntimeError('Variable "les_install" does not exist.', 274, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                        // line 275
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 275) < 7)) {
                            // line 276
                            echo "\t\t\t\t\t\t\t";
                            $context["badge_etat"] = "danger";
                            // line 277
                            echo "\t\t\t\t\t\t";
                        }
                        // line 278
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 278) <= 7)) {
                            // line 279
                            echo "\t\t\t\t\t\t\t";
                            $context["badge_etat"] = "warning";
                            // line 280
                            echo "\t\t\t\t\t\t";
                        }
                        // line 281
                        echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\" class=\"fw-bold\">
\t\t\t\t\t\t\t\t";
                        // line 283
                        if (twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 283)) {
                            // line 284
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 284), "numero", [], "any", false, false, false, 284), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 286
                            echo "\t\t\t\t\t\t\t\t\t\t<span>[";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdAt", [], "any", false, false, false, 286), "d/m/y_H:i:s"), "html", null, true);
                            echo "]</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 288
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
                            ";
                        // line 290
                        if ((twig_get_attribute($this->env, $this->source, $context["ag"], "usages", [], "any", false, false, false, 290) == "domestique")) {
                            // line 291
                            echo "                                <span class=\"text-warning fs-8 fw-bold\">Domestique</span>
                            ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 292
$context["ag"], "usages", [], "any", false, false, false, 292) == "non_domestique")) {
                            // line 293
                            echo "                                <span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
                            ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 294
$context["ag"], "usages", [], "any", false, false, false, 294) == "erp_ert")) {
                            // line 295
                            echo "                                <span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
                            ";
                        }
                        // line 297
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                        // line 299
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 299))) {
                            // line 300
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 300), "nom", [], "any", false, false, false, 300), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 302
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 304
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                        // line 306
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "typeconstruction", [], "any", false, false, false, 306))) {
                            // line 307
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "typeconstruction", [], "any", false, false, false, 307), "nom", [], "any", false, false, false, 307), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 309
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 311
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"pt badge badge-info fs-8\">";
                        // line 313
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 313), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                        // line 316
                        echo "\t\t\t\t\t\t\t";
                        // line 323
                        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 325
                    echo "\t\t\t\t</tbody>
\t\t\t\t</table>


                ";
                    // line 329
                    twig_get_attribute($this->env, $this->source, (isset($context["les_install"]) || array_key_exists("les_install", $context) ? $context["les_install"] : (function () { throw new RuntimeError('Variable "les_install" does not exist.', 329, $this->source); })()), "setPageRange", [0 => 1], "method", false, false, false, 329);
                    // line 330
                    echo "                ";
                    echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["les_install"]) || array_key_exists("les_install", $context) ? $context["les_install"] : (function () { throw new RuntimeError('Variable "les_install" does not exist.', 330, $this->source); })()), "pagination.html.twig");
                    echo "

\t\t\t\t";
                }
                // line 333
                echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 338
            echo "
\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
\t";
        } else {
            // line 342
            echo "\t\t<div class=\"col-8 mt-5 offset-2 alert alert-danger fs-4 text-center\">
\t\t\tVotre adresse email n'a pas encore été confirmée !
\t\t\tVeuillez cliquer sur le lien envoyé sur votre boite mail pour valider votre inscription !
\t\t</div>
\t";
        }
        // line 347
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 350
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 351
        echo "
";
        // line 352
        $context["les_etat"] = [0 => "Soumis", 1 => "Paiement enregistré", 2 => "Paiement validé", 3 => "Dossier validé", 4 => "Dossier affecté", 5 => "Visite planifiée", 6 => "Rapport élaboré", 7 => "Rapport validé"];
        // line 353
        $context["les_col"] = [0 => "#d83444", 1 => "#b5cbf1", 2 => "#b8d0c7", 3 => "#13c5ea", 4 => "#e1501e", 5 => "#508bf6", 6 => "#508bf6", 7 => "#4b9f47"];
        // line 354
        echo "
<script>
    \$(document).ready(function () {

        \$('#val_dash_perio').on('change', function() {
            \$(\"#form_dash_perio\").submit();
        });

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
                        \"value\": ";
        // line 379
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 379, $this->source); })()), "Domestiques", [], "array", false, false, false, 379), "html", null, true);
        echo ",
                        \"color\": \"#febf04\"
                    },
                    {
                        \"label\": \"Professionnel\",
                        \"value\": ";
        // line 384
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 384, $this->source); })()), "Professionnelles", [], "array", false, false, false, 384), "html", null, true);
        echo ",
                        \"color\": \"#508af5\"
                    },
                    {
                        \"label\": \"ERP - ERT\",
                        \"value\": ";
        // line 389
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 389, $this->source); })()), "ERP - ERT", [], "array", false, false, false, 389), "html", null, true);
        echo ",
                        \"color\": \"#0b6efc\"
                    }
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
        // line 422
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 422, $this->source); })()), "1ère visite", [], "array", false, false, false, 422), "html", null, true);
        echo ",
                        \"color\": \"#196110\"
                    },
                    {
                        \"label\": \"2e visite\",
                        \"value\": ";
        // line 427
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 427, $this->source); })()), "2e visite", [], "array", false, false, false, 427), "html", null, true);
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
        // line 458
        $context["ix"] = 0;
        // line 459
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["les_etat"]) || array_key_exists("les_etat", $context) ? $context["les_etat"] : (function () { throw new RuntimeError('Variable "les_etat" does not exist.', 459, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
            // line 460
            echo "\t\t\t\t\t";
            $context["col"] = twig_get_attribute($this->env, $this->source, (isset($context["les_col"]) || array_key_exists("les_col", $context) ? $context["les_col"] : (function () { throw new RuntimeError('Variable "les_col" does not exist.', 460, $this->source); })()), (isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 460, $this->source); })()), [], "array", false, false, false, 460);
            // line 461
            echo "\t\t\t\t\t\t{
\t\t\t\t\t\t\t\"label\": \"";
            // line 462
            echo twig_escape_filter($this->env, $context["etat"], "html", null, true);
            echo "\",
\t\t\t\t\t\t\t\"value\": ";
            // line 463
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 463, $this->source); })()), $context["etat"], [], "array", false, false, false, 463), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\"color\": \"";
            // line 464
            echo twig_escape_filter($this->env, (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 464, $this->source); })()), "html", null, true);
            echo "\"
\t\t\t\t\t\t}
\t\t\t\t\t";
            // line 466
            if (((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 466, $this->source); })()) < twig_length_filter($this->env, (isset($context["les_etat"]) || array_key_exists("les_etat", $context) ? $context["les_etat"] : (function () { throw new RuntimeError('Variable "les_etat" does not exist.', 466, $this->source); })())))) {
                // line 467
                echo "\t\t\t\t\t\t,
\t\t\t\t\t";
            }
            // line 469
            echo "\t\t\t\t\t";
            $context["ix"] = ((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 469, $this->source); })()) + 1);
            // line 470
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 471
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


    });
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index_stat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  812 => 471,  806 => 470,  803 => 469,  799 => 467,  797 => 466,  792 => 464,  788 => 463,  784 => 462,  781 => 461,  778 => 460,  773 => 459,  771 => 458,  737 => 427,  729 => 422,  693 => 389,  685 => 384,  677 => 379,  650 => 354,  648 => 353,  646 => 352,  643 => 351,  633 => 350,  622 => 347,  615 => 342,  609 => 338,  602 => 333,  595 => 330,  593 => 329,  587 => 325,  580 => 323,  578 => 316,  573 => 313,  569 => 311,  565 => 309,  559 => 307,  557 => 306,  553 => 304,  549 => 302,  543 => 300,  541 => 299,  537 => 297,  533 => 295,  531 => 294,  528 => 293,  526 => 292,  523 => 291,  521 => 290,  517 => 288,  511 => 286,  505 => 284,  503 => 283,  499 => 281,  496 => 280,  493 => 279,  490 => 278,  487 => 277,  484 => 276,  481 => 275,  477 => 274,  472 => 271,  470 => 270,  460 => 261,  444 => 247,  442 => 246,  435 => 242,  429 => 238,  427 => 237,  414 => 227,  409 => 225,  393 => 212,  388 => 210,  372 => 196,  366 => 195,  364 => 194,  354 => 187,  350 => 186,  346 => 185,  340 => 182,  337 => 181,  334 => 180,  329 => 179,  327 => 178,  324 => 177,  322 => 176,  319 => 175,  316 => 174,  300 => 136,  292 => 129,  281 => 118,  277 => 117,  263 => 106,  259 => 105,  245 => 94,  241 => 93,  227 => 82,  223 => 81,  209 => 70,  205 => 69,  190 => 57,  186 => 56,  179 => 51,  168 => 42,  162 => 41,  156 => 40,  150 => 39,  144 => 38,  135 => 31,  129 => 28,  123 => 25,  117 => 22,  114 => 21,  112 => 20,  107 => 18,  100 => 13,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}
{% block body %}
\t<style>
\t\t.p0_title {
\t\t\tborder:1px solid #ccc;
\t\t\tfon-weight:bold;
\t\t}
\t</style>
\t{% if app.user and app.user.isverified %}
\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper pt-10\">

\t\t\t<ul class=\"nav nav-tabs mb-4 border-bottom border-dark border-2\">
\t\t\t\t<li class=\"nav-item bg-warning mx-1 rounded-top mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" aria-current=\"page\" href=\"{{ path('main', {'dash_page': 'perso'}) }}\">Mon espace personnel</a>
\t\t\t\t</li>
\t\t\t\t{% if  app.user.roles[0] != \"ROLE_PUBLIC\" %}
\t\t\t\t<li class=\"nav-item bg-dark rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link fw-bold text-light\" href=\"{{ path('main', {'dash_page': 'stat_dem'}) }}\">Statistiques sur les demandes</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"{{ path('main', {'dash_page': 'stat_paye'}) }}\">Statistiques sur les paiements</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"{{ path('stat') }}\">Consultation des demandes</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>

\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">
\t\t\t\t\t<div class=\"float-start mr-20\">Demandes par type d'usage et passage visite</div>
\t\t\t\t\t<form method=\"post\" id=\"form_dash_perio\" class=\"float-end\" action=\"\">
\t\t\t\t\t\t<select name=\"val_dash_perio\" id=\"val_dash_perio\" class=\"fw-bold bg-success bg-opacity-25 form-select-sm\">
\t\t\t\t\t\t\t<option {% if perio_stat == 'last1' %} selected=\"selected\" {% endif %} value=\"last1\">Aujourd'hui</option>
\t\t\t\t\t\t\t<option {% if perio_stat == 'last7' %} selected=\"selected\" {% endif %} value=\"last7\">7 derniers jours</option>
\t\t\t\t\t\t\t<option {% if perio_stat == 'last15' %} selected=\"selected\" {% endif %} value=\"last15\">15 derniers jours</option>
\t\t\t\t\t\t\t<option {% if perio_stat == 'last30' %} selected=\"selected\" {% endif %} value=\"last30\">30 derniers jours</option>
\t\t\t\t\t\t\t<option {% if perio_stat == 'all' %} selected=\"selected\" {% endif %} value=\"all\">Toutes les périodes</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</form>
\t\t\t\t</h5>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t{# 
\t\t\t\tTAB STAT 
\t\t\t\t----------------------------------------------------------------------------------------------- #}
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t<div class=\"card bg-dark p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'All'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">{{ les_stat[\"All\"] }}</span>
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
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'Domestiques'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ les_stat[\"Domestiques\"] }}</span>
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
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'Professionnelles'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ les_stat[\"Professionnelles\"] }}</span>
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
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'ERP - ERT'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ les_stat[\"ERP - ERT\"] }}</span>
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
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': '1ère visite'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ les_stat[\"1ère visite\"] }}</span>
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
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': '2e visite'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ les_stat[\"2e visite\"] }}</span>
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
\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">
\t\t\t\tDemandes par état de traitement
\t\t\t\t</h5>
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
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': etat}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">{{ les_stat[etat] }}</span>
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
\t\t\t\t\t\t\t\t\t\t{{ les_alerte[\"Hors délais 5 jours\"] }}
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
\t\t\t\t\t\t\t\t\t\t{{ les_alerte[\"Hors délais 15 jours\"] }}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Dossiers Hors délais 15j</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<div class=\"row mt-50\">
\t\t\t\t<div class=\"offset-1 col-md-10\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Demandes en préparation ({{ les_install.getTotalItemCount }})</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
            \t{% if les_install|length == 0 %}
                <div class=\"row pt-20\">
                    <div class=\"col-3\"></div>
                    <div class=\"col-6\">
                        <div class=\"alert alert-warning d-flex align-items-center\" role=\"alert\">
                            <div>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 24 24\">
                                    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
                                </svg>
                                Aucun enregistrement trouvé !
                            </div>
                        </div>
                    </div>
                </div>
\t\t\t\t{% else %}
\t\t\t\t<table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">N° demande</th> 
\t\t\t\t\t\t<th class=\"priority-3\">Usage</th> 
\t\t\t\t\t\t<th>Localité</th>
\t\t\t\t\t\t<th>Type Construction</th>
\t\t\t\t\t\t<th>Statut demande</th>
\t\t\t\t\t\t{# <th scope=\"col\">Agence</th> #}
\t\t\t\t\t\t{# <th class=\"text-center\" scope=\"col\">Départements</th>  #}
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for ag in les_install %}
\t\t\t\t\t\t{% if ag.step < 7 %}
\t\t\t\t\t\t\t{% set badge_etat = \"danger\" %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if ag.step <= 7 %}
\t\t\t\t\t\t\t{% set badge_etat = \"warning\" %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\" class=\"fw-bold\">
\t\t\t\t\t\t\t\t{% if ag.demandeCourante %}
\t\t\t\t\t\t\t\t\t\t{{ ag.demandeCourante.numero }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span>[{{ ag.createdAt|date(\"d/m/y_H:i:s\") }}]</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
                            {% if ag.usages == \"domestique\" %}
                                <span class=\"text-warning fs-8 fw-bold\">Domestique</span>
                            {% elseif ag.usages == \"non_domestique\" %}
                                <span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
                            {% elseif ag.usages == \"erp_ert\" %}
                                <span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
                            {% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if ag.localite is not null %}
\t\t\t\t\t\t\t\t\t{{ ag.localite.nom }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if ag.typeconstruction is not null %}
\t\t\t\t\t\t\t\t\t{{ ag.typeconstruction.nom }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"pt badge badge-info fs-8\">{{ ag.etat }}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{# <td>{{ ag.agence }}</td> #}
\t\t\t\t\t\t\t{# <td class=\"text-center\">
\t\t\t\t\t\t\t\t{% if reg.departement.count >0 %}
\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success text-light rounded-pill fw-normal\">{{ reg.departement.count }}</span>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<code class=\"text-danger text-opacity-50\">Aucun département</code>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td> #}
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t\t</table>


                {% do les_install.setPageRange(1)%}
                {{ knp_pagination_render(les_install, 'pagination.html.twig')}}

\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
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

{% set les_etat = [\"Soumis\",\"Paiement enregistré\", \"Paiement validé\",\"Dossier validé\", \"Dossier affecté\", \"Visite planifiée\", \"Rapport élaboré\", \"Rapport validé\"] %}
{% set les_col = [\"#d83444\", \"#b5cbf1\", \"#b8d0c7\", \"#13c5ea\", \"#e1501e\", \"#508bf6\", \"#508bf6\", \"#4b9f47\"] %}

<script>
    \$(document).ready(function () {

        \$('#val_dash_perio').on('change', function() {
            \$(\"#form_dash_perio\").submit();
        });

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
                        \"value\": {{ les_stat[\"Domestiques\"] }},
                        \"color\": \"#febf04\"
                    },
                    {
                        \"label\": \"Professionnel\",
                        \"value\": {{ les_stat[\"Professionnelles\"] }},
                        \"color\": \"#508af5\"
                    },
                    {
                        \"label\": \"ERP - ERT\",
                        \"value\": {{ les_stat[\"ERP - ERT\"] }},
                        \"color\": \"#0b6efc\"
                    }
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
                        \"value\": {{ les_stat[\"1ère visite\"] }},
                        \"color\": \"#196110\"
                    },
                    {
                        \"label\": \"2e visite\",
                        \"value\": {{ les_stat[\"2e visite\"] }},
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
\t\t\t\t\t\t\t\"value\": {{ les_stat[etat] }},
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


    });
</script>

{% endblock %}
", "main/index_stat.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/index_stat.html.twig");
    }
}
