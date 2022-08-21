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

/* main/index_paiement.html.twig */
class __TwigTemplate_c4089b9bc4f2317e40d31296101aeb24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index_paiement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index_paiement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index_paiement.html.twig", 1);
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
        echo "
\t";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "isverified", [], "any", false, false, false, 7))) {
            // line 8
            echo "\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper\">
\t\t";
            // line 10
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "roles", [], "any", false, false, false, 10), 0, [], "array", false, false, false, 10) == "ROLE_CAISSIER") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "roles", [], "any", false, false, false, 10), 0, [], "array", false, false, false, 10) == "ROLE_COMPTABLE"))) {
                // line 11
                echo "\t\t\t<div class=\"row m-1 pt-2\">
\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Mes Performances</h5>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t<div class=\"card bg-bleuf2 p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Paiement enregistré;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t";
                // line 21
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mes_stat"] ?? null), "Paiement enregistré", [], "array", false, true, false, 21), ("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)), [], "array", true, true, false, 21)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 22, $this->source); })()), "Paiement enregistré", [], "array", false, false, false, 22), ("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)), [], "array", false, false, false, 22), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Paiements enregistrés</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t<div class=\"card bg-bleuf2 p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Paiement validé;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t";
                // line 39
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mes_stat"] ?? null), "Paiement validé", [], "array", false, true, false, 39), ("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)), [], "array", true, true, false, 39)) {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mes_stat"]) || array_key_exists("mes_stat", $context) ? $context["mes_stat"] : (function () { throw new RuntimeError('Variable "mes_stat" does not exist.', 40, $this->source); })()), "Paiement validé", [], "array", false, false, false, 40), ("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)), [], "array", false, false, false, 40), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Paiements validés</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr class=\"border-bottom border-secondary border-2\" />
\t\t";
            }
            // line 54
            echo "
\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Demandes par type d'usage et passage visite</h5>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 mt-2\">
\t\t\t\t\t<div class=\"card bg-dark p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "All"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 64, $this->source); })()), "All", [], "array", false, false, false, 64), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Total des demandes</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t\t<div class=\"col-md-8 mt-2\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card bg-warning p-2 card-stat\">
\t\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Domestiques"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 79, $this->source); })()), "Domestiques", [], "array", false, false, false, 79), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light\">Demandes domestiques</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card bg-primary bg-opacity-75 p-2 card-stat\">
\t\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Professionnelles"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 92, $this->source); })()), "Professionnelles", [], "array", false, false, false, 92), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-dark\">Demandes professionnelles</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card bg-primary p-2 card-stat\">
\t\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "ERP - ERT"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 105, $this->source); })()), "ERP - ERT", [], "array", false, false, false, 105), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes ERP - ERT</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<div class=\"card bg-primary p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 121
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "1ère visite"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 122, $this->source); })()), "1ère visite", [], "array", false, false, false, 122), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes en 1ère visite</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<div class=\"card bg-primary p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 134
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "2e visite"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 135, $this->source); })()), "2e visite", [], "array", false, false, false, 135), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes en 2e visite</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- end col -->
\t\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Demandes par état de traitement</h5>
\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t\t
\t\t\t\t";
            // line 150
            $context["les_etat"] = [0 => "Soumis, en attente paiement"];
            // line 151
            echo "\t\t\t\t";
            $context["les_col"] = [0 => "danger"];
            // line 152
            echo "\t\t\t\t
\t\t\t\t";
            // line 153
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE"))) {
                // line 154
                echo "\t\t\t\t\t";
                $context["les_etat"] = [0 => "Payé, en attente confirmation paiement", 1 => "Payé, en attente validation"];
                // line 155
                echo "\t\t\t\t\t";
                $context["les_col"] = [0 => "primary bg-opacity-25", 1 => "success bg-opacity-25"];
                // line 156
                echo "\t\t\t\t";
            }
            // line 157
            echo "
\t\t\t\t";
            // line 158
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DAF")) {
                // line 159
                echo "\t\t\t\t\t";
                $context["les_etat"] = [0 => "Payé, en attente confirmation paiement", 1 => "Payé, en attente validation"];
                // line 160
                echo "\t\t\t\t\t";
                $context["les_col"] = [0 => "primary bg-opacity-25", 1 => "success bg-opacity-25"];
                // line 161
                echo "\t\t\t\t";
            }
            // line 162
            echo "
\t\t\t\t";
            // line 163
            $context["ix"] = 0;
            // line 164
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_etat"]) || array_key_exists("les_etat", $context) ? $context["les_etat"] : (function () { throw new RuntimeError('Variable "les_etat" does not exist.', 164, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
                // line 165
                echo "\t\t\t\t\t";
                $context["col"] = twig_get_attribute($this->env, $this->source, (isset($context["les_col"]) || array_key_exists("les_col", $context) ? $context["les_col"] : (function () { throw new RuntimeError('Variable "les_col" does not exist.', 165, $this->source); })()), (isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 165, $this->source); })()), [], "array", false, false, false, 165);
                // line 166
                echo "\t\t\t\t\t<div class=\"col-md-4 mt-2\">
\t\t\t\t\t\t<div class=\"card bg-";
                // line 167
                echo twig_escape_filter($this->env, (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 167, $this->source); })()), "html", null, true);
                echo " p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => $context["etat"]]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 171, $this->source); })()), $context["etat"], [], "array", false, false, false, 171), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light\">";
                // line 172
                echo twig_escape_filter($this->env, $context["etat"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 179
                $context["ix"] = ((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 179, $this->source); })()) + 1);
                // line 180
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "
\t\t\t\t\t";
            // line 182
            $context["les_mode"] = ["All" => "Total Paiements", "Espèce" => "Paiement Espèces", "Chèque" => "Paiement Chèque", "Autre" => "Paiement Autre"];
            // line 183
            echo "\t\t\t\t\t";
            $context["les_col"] = [0 => "green bg-opacity-50", 1 => "success bg-opacity-50", 2 => "warning bg-opacity-25", 3 => "danger bg-opacity-50"];
            // line 184
            echo "
\t\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Situation des paiements en nombre</h5>
\t\t\t\t</div>
\t\t\t\t";
            // line 188
            $context["ix"] = 0;
            // line 189
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_mode"]) || array_key_exists("les_mode", $context) ? $context["les_mode"] : (function () { throw new RuntimeError('Variable "les_mode" does not exist.', 189, $this->source); })()));
            foreach ($context['_seq'] as $context["mode"] => $context["lib_mode"]) {
                // line 190
                echo "\t\t\t\t\t";
                $context["col"] = twig_get_attribute($this->env, $this->source, (isset($context["les_col"]) || array_key_exists("les_col", $context) ? $context["les_col"] : (function () { throw new RuntimeError('Variable "les_col" does not exist.', 190, $this->source); })()), (isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 190, $this->source); })()), [], "array", false, false, false, 190);
                // line 191
                echo "\t\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t\t<div class=\"card bg-";
                // line 192
                echo twig_escape_filter($this->env, (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 192, $this->source); })()), "html", null, true);
                echo " p-2 card-stat shadow\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
                // line 196
                echo "\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" >
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 197, $this->source); })()), $context["mode"], [], "array", false, false, false, 197), 0, [], "array", false, false, false, 197), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"\">";
                // line 198
                echo twig_escape_filter($this->env, $context["lib_mode"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-warning text-dark\">";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 200, $this->source); })()), $context["mode"], [], "array", false, false, false, 200), 1, [], "array", false, false, false, 200), "html", null, true);
                echo "</span> <span class=\"bg-warning text-dark px-1 rounded\">Domestiques</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-primary bg-opacity-50\">";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 203, $this->source); })()), $context["mode"], [], "array", false, false, false, 203), 2, [], "array", false, false, false, 203), "html", null, true);
                echo "</span> <span class=\"bg-primary bg-opacity-50 text-light px-1 rounded\">Professionnelles</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-primary\">";
                // line 206
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 206, $this->source); })()), $context["mode"], [], "array", false, false, false, 206), 3, [], "array", false, false, false, 206), "html", null, true);
                echo "</span> <span class=\"bg-primary text-light px-1 rounded\">ERP - ERT</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 214
                $context["ix"] = ((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 214, $this->source); })()) + 1);
                // line 215
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['mode'], $context['lib_mode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "
\t\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Situation des paiements en montant FCFA</h5>
\t\t\t\t</div>
\t\t\t\t";
            // line 220
            $context["ix"] = 0;
            // line 221
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_mode"]) || array_key_exists("les_mode", $context) ? $context["les_mode"] : (function () { throw new RuntimeError('Variable "les_mode" does not exist.', 221, $this->source); })()));
            foreach ($context['_seq'] as $context["mode"] => $context["lib_mode"]) {
                // line 222
                echo "\t\t\t\t\t";
                $context["col"] = twig_get_attribute($this->env, $this->source, (isset($context["les_col"]) || array_key_exists("les_col", $context) ? $context["les_col"] : (function () { throw new RuntimeError('Variable "les_col" does not exist.', 222, $this->source); })()), (isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 222, $this->source); })()), [], "array", false, false, false, 222);
                // line 223
                echo "\t\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t\t<div class=\"card bg-";
                // line 224
                echo twig_escape_filter($this->env, (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 224, $this->source); })()), "html", null, true);
                echo " p-2 card-stat shadow\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
                // line 228
                echo "\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" >
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">";
                // line 229
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["montant_paiement"]) || array_key_exists("montant_paiement", $context) ? $context["montant_paiement"] : (function () { throw new RuntimeError('Variable "montant_paiement" does not exist.', 229, $this->source); })()), $context["mode"], [], "array", false, false, false, 229), 0, [], "array", false, false, false, 229), 0, ",", " "), "html", null, true);
                echo " FCFA</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"\">";
                // line 230
                echo twig_escape_filter($this->env, $context["lib_mode"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-warning text-dark\">";
                // line 232
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["montant_paiement"]) || array_key_exists("montant_paiement", $context) ? $context["montant_paiement"] : (function () { throw new RuntimeError('Variable "montant_paiement" does not exist.', 232, $this->source); })()), $context["mode"], [], "array", false, false, false, 232), 1, [], "array", false, false, false, 232), 0, ",", " "), "html", null, true);
                echo " FCFA</span> <span class=\"bg-warning text-dark px-1 rounded\">Domestiques</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-primary bg-opacity-50\">";
                // line 235
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["montant_paiement"]) || array_key_exists("montant_paiement", $context) ? $context["montant_paiement"] : (function () { throw new RuntimeError('Variable "montant_paiement" does not exist.', 235, $this->source); })()), $context["mode"], [], "array", false, false, false, 235), 2, [], "array", false, false, false, 235), 0, ",", " "), "html", null, true);
                echo " FCFA</span> <span class=\"bg-primary bg-opacity-50 text-light px-1 rounded\">Professionnels</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-primary\">";
                // line 238
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["montant_paiement"]) || array_key_exists("montant_paiement", $context) ? $context["montant_paiement"] : (function () { throw new RuntimeError('Variable "montant_paiement" does not exist.', 238, $this->source); })()), $context["mode"], [], "array", false, false, false, 238), 3, [], "array", false, false, false, 238), 0, ",", " "), "html", null, true);
                echo " FCFA</span> <span class=\"bg-primary text-light px-1 rounded\">ERP - ERT</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 246
                $context["ix"] = ((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 246, $this->source); })()) + 1);
                // line 247
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['mode'], $context['lib_mode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "
\t\t\t</div>
\t\t\t<!-- end row -->

\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
\t";
        } else {
            // line 255
            echo "\t\t<div class=\"col-8 mt-5 offset-2 alert alert-danger fs-4 text-center\">
\t\t\tVotre adresse email n'a pas encore été confirmée !
\t\t\tVeuillez cliquer sur le lien envoyé sur votre boite mail pour valider votre inscription !
\t\t</div>
\t";
        }
        // line 260
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index_paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 260,  537 => 255,  528 => 248,  522 => 247,  520 => 246,  509 => 238,  503 => 235,  497 => 232,  492 => 230,  488 => 229,  485 => 228,  479 => 224,  476 => 223,  473 => 222,  468 => 221,  466 => 220,  460 => 216,  454 => 215,  452 => 214,  441 => 206,  435 => 203,  429 => 200,  424 => 198,  420 => 197,  417 => 196,  411 => 192,  408 => 191,  405 => 190,  400 => 189,  398 => 188,  392 => 184,  389 => 183,  387 => 182,  384 => 181,  378 => 180,  376 => 179,  366 => 172,  362 => 171,  358 => 170,  352 => 167,  349 => 166,  346 => 165,  341 => 164,  339 => 163,  336 => 162,  333 => 161,  330 => 160,  327 => 159,  325 => 158,  322 => 157,  319 => 156,  316 => 155,  313 => 154,  311 => 153,  308 => 152,  305 => 151,  303 => 150,  285 => 135,  281 => 134,  266 => 122,  262 => 121,  243 => 105,  239 => 104,  224 => 92,  220 => 91,  205 => 79,  201 => 78,  184 => 64,  180 => 63,  169 => 54,  157 => 44,  153 => 42,  147 => 40,  145 => 39,  140 => 37,  127 => 26,  123 => 24,  117 => 22,  115 => 21,  110 => 19,  100 => 11,  98 => 10,  94 => 8,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}
{% block body %}

\t{% if app.user and app.user.isverified %}
\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper\">
\t\t{% if app.user.roles[0] == \"ROLE_CAISSIER\" or app.user.roles[0] == \"ROLE_COMPTABLE\" %}
\t\t\t<div class=\"row m-1 pt-2\">
\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Mes Performances</h5>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t<div class=\"card bg-bleuf2 p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'Paiement enregistré;' ~ app.user.id}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t{% if  mes_stat[\"Paiement enregistré\"][\"user_\"~app.user.id] is defined  %}
\t\t\t\t\t\t\t\t\t\t{{ mes_stat[\"Paiement enregistré\"][\"user_\"~app.user.id] }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Paiements enregistrés</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t<div class=\"card bg-bleuf2 p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'Paiement validé;' ~ app.user.id}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t{% if  mes_stat[\"Paiement validé\"][\"user_\"~app.user.id] is defined  %}
\t\t\t\t\t\t\t\t\t\t{{ mes_stat[\"Paiement validé\"][\"user_\"~app.user.id] }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Paiements validés</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr class=\"border-bottom border-secondary border-2\" />
\t\t{% endif %}

\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Demandes par type d'usage et passage visite</h5>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 mt-2\">
\t\t\t\t\t<div class=\"card bg-dark p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'All'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">{{ les_stat[\"All\"] }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Total des demandes</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t\t<div class=\"col-md-8 mt-2\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card bg-warning p-2 card-stat\">
\t\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'Domestiques'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ les_stat[\"Domestiques\"] }}</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light\">Demandes domestiques</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card bg-primary bg-opacity-75 p-2 card-stat\">
\t\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'Professionnelles'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ les_stat[\"Professionnelles\"] }}</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-dark\">Demandes professionnelles</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card bg-primary p-2 card-stat\">
\t\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'ERP - ERT'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ les_stat[\"ERP - ERT\"] }}</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes ERP - ERT</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<div class=\"card bg-primary p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': '1ère visite'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ les_stat[\"1ère visite\"] }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes en 1ère visite</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<div class=\"card bg-primary p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': '2e visite'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ les_stat[\"2e visite\"] }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes en 2e visite</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- end col -->
\t\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Demandes par état de traitement</h5>
\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t\t
\t\t\t\t{% set les_etat = [\"Soumis, en attente paiement\"] %}
\t\t\t\t{% set les_col = [\"danger\"] %}
\t\t\t\t
\t\t\t\t{% if is_granted('ROLE_CAISSIER') or  is_granted('ROLE_COMPTABLE') %}
\t\t\t\t\t{% set les_etat = [\"Payé, en attente confirmation paiement\", \"Payé, en attente validation\"] %}
\t\t\t\t\t{% set les_col = [\"primary bg-opacity-25\", \"success bg-opacity-25\"] %}
\t\t\t\t{% endif %}

\t\t\t\t{% if is_granted('ROLE_DAF') %}
\t\t\t\t\t{% set les_etat = [\"Payé, en attente confirmation paiement\", \"Payé, en attente validation\"] %}
\t\t\t\t\t{% set les_col = [\"primary bg-opacity-25\", \"success bg-opacity-25\"] %}
\t\t\t\t{% endif %}

\t\t\t\t{% set ix = 0 %}
\t\t\t\t{% for etat in les_etat  %}
\t\t\t\t\t{% set col = les_col[ix] %}
\t\t\t\t\t<div class=\"col-md-4 mt-2\">
\t\t\t\t\t\t<div class=\"card bg-{{col}} p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': etat}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">{{ les_stat[etat] }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light\">{{etat}}</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% set ix = ix+1 %}
\t\t\t\t{% endfor %}

\t\t\t\t\t{% set les_mode = {\"All\":\"Total Paiements\", \"Espèce\":\"Paiement Espèces\", \"Chèque\":\"Paiement Chèque\", \"Autre\":\"Paiement Autre\"} %}
\t\t\t\t\t{% set les_col = [\"green bg-opacity-50\", \"success bg-opacity-50\", \"warning bg-opacity-25\", \"danger bg-opacity-50\"] %}

\t\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Situation des paiements en nombre</h5>
\t\t\t\t</div>
\t\t\t\t{% set ix = 0 %}
\t\t\t\t{% for mode,lib_mode in les_mode  %}
\t\t\t\t\t{% set col = les_col[ix] %}
\t\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t\t<div class=\"card bg-{{col}} p-2 card-stat shadow\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t{# <p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': mode}) }}\" title=\"Afficher la liste des demandes\"> #}
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" >
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">{{ stat_paiement[mode][0] }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"\">{{lib_mode}}</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-warning text-dark\">{{ stat_paiement[mode][1] }}</span> <span class=\"bg-warning text-dark px-1 rounded\">Domestiques</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-primary bg-opacity-50\">{{ stat_paiement[mode][2] }}</span> <span class=\"bg-primary bg-opacity-50 text-light px-1 rounded\">Professionnelles</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-primary\">{{ stat_paiement[mode][3] }}</span> <span class=\"bg-primary text-light px-1 rounded\">ERP - ERT</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% set ix = ix+1 %}
\t\t\t\t{% endfor %}

\t\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Situation des paiements en montant FCFA</h5>
\t\t\t\t</div>
\t\t\t\t{% set ix = 0 %}
\t\t\t\t{% for mode,lib_mode in les_mode  %}
\t\t\t\t\t{% set col = les_col[ix] %}
\t\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t\t<div class=\"card bg-{{col}} p-2 card-stat shadow\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t{# <p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': mode}) }}\" title=\"Afficher la liste des demandes\"> #}
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" >
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">{{ montant_paiement[mode][0]|number_format(0, ',', ' ') }} FCFA</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"\">{{lib_mode}}</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-warning text-dark\">{{ montant_paiement[mode][1]|number_format(0, ',', ' ') }} FCFA</span> <span class=\"bg-warning text-dark px-1 rounded\">Domestiques</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-primary bg-opacity-50\">{{ montant_paiement[mode][2]|number_format(0, ',', ' ') }} FCFA</span> <span class=\"bg-primary bg-opacity-50 text-light px-1 rounded\">Professionnels</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-primary\">{{ montant_paiement[mode][3]|number_format(0, ',', ' ') }} FCFA</span> <span class=\"bg-primary text-light px-1 rounded\">ERP - ERT</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% set ix = ix+1 %}
\t\t\t\t{% endfor %}

\t\t\t</div>
\t\t\t<!-- end row -->

\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
\t{% else %}
\t\t<div class=\"col-8 mt-5 offset-2 alert alert-danger fs-4 text-center\">
\t\t\tVotre adresse email n'a pas encore été confirmée !
\t\t\tVeuillez cliquer sur le lien envoyé sur votre boite mail pour valider votre inscription !
\t\t</div>
\t{% endif %}

{% endblock %}
", "main/index_paiement.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/index_paiement.html.twig");
    }
}
