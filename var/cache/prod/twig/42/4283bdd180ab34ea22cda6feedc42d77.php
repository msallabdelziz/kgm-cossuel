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

/* main/index_accueil.html.twig */
class __TwigTemplate_c5656392f368a3c7e8228a8a6b658ab2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/index_accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil
";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
\t";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7), "isverified", [], "any", false, false, false, 7))) {
            // line 8
            echo "\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper pt-10 accordion\" id=\"accordionExample\">
\t\t\t<div class=\"row m-1 pt-2\">
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Mes Performances</h5>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"collapseOne\" class=\"accordion-collapse collapse show card\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t<div class=\"card bg-bleuf2 p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Demande ;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t";
            // line 25
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mes_stat"] ?? null), "Demande Soumise", [], "array", false, true, false, 25), ("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)), [], "array", true, true, false, 25)) {
                // line 26
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["Demande Soumise"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26))] ?? null) : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Demandes soumises</span>
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
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Demande Domestique;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t";
            // line 43
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mes_stat"] ?? null), "Demande Domestique", [], "array", false, true, false, 43), ("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)), [], "array", true, true, false, 43)) {
                // line 44
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["Demande Domestique"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44))] ?? null) : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Demandes Domestiques</span>
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
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Demande Professionnelle;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t";
            // line 61
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mes_stat"] ?? null), "Demande Professionnelle", [], "array", false, true, false, 61), ("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61)), [], "array", true, true, false, 61)) {
                // line 62
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, (($__internal_compile_4 = (($__internal_compile_5 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["Demande Professionnelle"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62))] ?? null) : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Demandes Professionnelles</span>
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
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("ERP - ERT;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t";
            // line 79
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mes_stat"] ?? null), "ERP - ERT", [], "array", false, true, false, 79), ("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79)), [], "array", true, true, false, 79)) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, (($__internal_compile_6 = (($__internal_compile_7 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["ERP - ERT"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80))] ?? null) : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Demandes ERP - ERT</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>

\t\t\t<hr class=\"border-bottom border-secondary border-2\" />

\t\t\t<div class=\"row m-1 mt-4 pt-2 accordion-item\">
\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
\t\t\t\t\t<a class=\"row m-1 mt-4 pt-2\" data-bs-toggle=\"collapse\" href=\"#collapseTwo\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Demandes par type d'usage et passage visite</h5>
\t\t\t\t\t</a>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div id=\"collapseTwo\" class=\"accordion-collapse collapse card\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 mt-2\">
\t\t\t\t\t<div class=\"card bg-dark p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "All"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">";
            // line 110
            echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["All"] ?? null) : null), "html", null, true);
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
            // line 124
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Domestiques"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 125
            echo twig_escape_filter($this->env, (($__internal_compile_9 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["Domestiques"] ?? null) : null), "html", null, true);
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
            // line 137
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Professionnelles"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 138
            echo twig_escape_filter($this->env, (($__internal_compile_10 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["Professionnelles"] ?? null) : null), "html", null, true);
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
            // line 150
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "ERP - ERT"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 151
            echo twig_escape_filter($this->env, (($__internal_compile_11 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["ERP - ERT"] ?? null) : null), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes ERP - ERT</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<div class=\"card bg-primary p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 167
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "1ère visite"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 168
            echo twig_escape_filter($this->env, (($__internal_compile_12 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["1ère visite"] ?? null) : null), "html", null, true);
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
            // line 180
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "2e visite"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 181
            echo twig_escape_filter($this->env, (($__internal_compile_13 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["2e visite"] ?? null) : null), "html", null, true);
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
            // line 196
            $context["les_etat"] = [0 => "Soumis, en attente paiement"];
            // line 197
            echo "\t\t\t\t";
            $context["les_col"] = [0 => "danger"];
            // line 198
            echo "\t\t\t\t
\t\t\t\t";
            // line 199
            $context["ix"] = 0;
            // line 200
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_etat"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
                // line 201
                echo "\t\t\t\t\t";
                $context["col"] = (($__internal_compile_14 = ($context["les_col"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[($context["ix"] ?? null)] ?? null) : null);
                // line 202
                echo "\t\t\t\t\t<div class=\"col-md-4 mt-2\">
\t\t\t\t\t\t<div class=\"card bg-";
                // line 203
                echo twig_escape_filter($this->env, ($context["col"] ?? null), "html", null, true);
                echo " p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 206
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => $context["etat"]]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">";
                // line 207
                echo twig_escape_filter($this->env, (($__internal_compile_15 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["etat"]] ?? null) : null), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light\">";
                // line 208
                echo twig_escape_filter($this->env, $context["etat"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 215
                $context["ix"] = (($context["ix"] ?? null) + 1);
                // line 216
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t";
            // line 221
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL"))) {
                // line 222
                echo "\t\t\t<div class=\"row mt-50\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Demandes en préparation (";
                // line 226
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["les_install"] ?? null)), "html", null, true);
                echo ")</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
            \t";
                // line 230
                if ((twig_length_filter($this->env, ($context["les_install"] ?? null)) == 0)) {
                    // line 231
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
                    // line 245
                    echo "\t\t\t\t<table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">N° demande</th> 
\t\t\t\t\t\t<th class=\"priority-3\">Usage</th> 
\t\t\t\t\t\t<th>Localité</th>
\t\t\t\t\t\t<th>Type Construction</th>
\t\t\t\t\t\t<th>Statut demande</th>
\t\t\t\t\t\t";
                    // line 254
                    echo "\t\t\t\t\t\t";
                    // line 255
                    echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
                    // line 258
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["les_install"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                        // line 259
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 259) < 7)) {
                            // line 260
                            echo "\t\t\t\t\t\t\t";
                            $context["badge_etat"] = "danger";
                            // line 261
                            echo "\t\t\t\t\t\t";
                        }
                        // line 262
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 262) <= 7)) {
                            // line 263
                            echo "\t\t\t\t\t\t\t";
                            $context["badge_etat"] = "warning";
                            // line 264
                            echo "\t\t\t\t\t\t";
                        }
                        // line 265
                        echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\" class=\"fw-bold\">
\t\t\t\t\t\t\t\t";
                        // line 267
                        if (twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 267)) {
                            // line 268
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 268), "numero", [], "any", false, false, false, 268), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 270
                            echo "\t\t\t\t\t\t\t\t\t\t<span>[";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdAt", [], "any", false, false, false, 270), "d/m/y_H:i:s"), "html", null, true);
                            echo "]</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 272
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                        // line 273
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "usages", [], "any", false, false, false, 273), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                        // line 275
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 275))) {
                            // line 276
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 276), "nom", [], "any", false, false, false, 276), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 278
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 280
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                        // line 282
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "typeconstruction", [], "any", false, false, false, 282))) {
                            // line 283
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "typeconstruction", [], "any", false, false, false, 283), "nom", [], "any", false, false, false, 283), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 285
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 287
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"pt badge badge-info fs-8\">";
                        // line 289
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 289), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                        // line 292
                        echo "\t\t\t\t\t\t\t";
                        // line 299
                        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 301
                    echo "\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t";
                }
                // line 304
                echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 309
            echo "
\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
\t";
        } else {
            // line 313
            echo "\t\t<div class=\"col-8 mt-5 offset-2 alert alert-danger fs-4 text-center\">
\t\t\tVotre adresse email n'a pas encore été confirmée !
\t\t\tVeuillez cliquer sur le lien envoyé sur votre boite mail pour valider votre inscription !
\t\t</div>
\t";
        }
        // line 318
        echo "
";
    }

    public function getTemplateName()
    {
        return "main/index_accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 318,  559 => 313,  553 => 309,  546 => 304,  541 => 301,  534 => 299,  532 => 292,  527 => 289,  523 => 287,  519 => 285,  513 => 283,  511 => 282,  507 => 280,  503 => 278,  497 => 276,  495 => 275,  490 => 273,  487 => 272,  481 => 270,  475 => 268,  473 => 267,  469 => 265,  466 => 264,  463 => 263,  460 => 262,  457 => 261,  454 => 260,  451 => 259,  447 => 258,  442 => 255,  440 => 254,  430 => 245,  414 => 231,  412 => 230,  405 => 226,  399 => 222,  397 => 221,  391 => 217,  385 => 216,  383 => 215,  373 => 208,  369 => 207,  365 => 206,  359 => 203,  356 => 202,  353 => 201,  348 => 200,  346 => 199,  343 => 198,  340 => 197,  338 => 196,  320 => 181,  316 => 180,  301 => 168,  297 => 167,  278 => 151,  274 => 150,  259 => 138,  255 => 137,  240 => 125,  236 => 124,  219 => 110,  215 => 109,  188 => 84,  184 => 82,  178 => 80,  176 => 79,  171 => 77,  158 => 66,  154 => 64,  148 => 62,  146 => 61,  141 => 59,  128 => 48,  124 => 46,  118 => 44,  116 => 43,  111 => 41,  98 => 30,  94 => 28,  88 => 26,  86 => 25,  81 => 23,  64 => 8,  62 => 7,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/index_accueil.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/index_accueil.html.twig");
    }
}
