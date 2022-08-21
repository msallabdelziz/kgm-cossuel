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

/* main/index_cons.html.twig */
class __TwigTemplate_d90b181dc8ebf99c4934f7650e07cca1 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/index_cons.html.twig", 1);
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
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "isverified", [], "any", false, false, false, 6))) {
            // line 7
            echo "\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper pt-10\">

\t\t\t<ul class=\"nav nav-tabs mb-4 border-bottom border-dark border-2\">
\t\t\t\t<li class=\"nav-item bg-warning mx-1 rounded-top mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" aria-current=\"page\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main", ["dash_page" => "perso"]);
            echo "\">Mon espace personnel</a>
\t\t\t\t</li>
\t\t\t\t";
            // line 14
            if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14), "roles", [], "any", false, false, false, 14)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) != "ROLE_PUBLIC")) {
                // line 15
                echo "\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"";
                // line 16
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main", ["dash_page" => "stat_dem"]);
                echo "\">Statistiques sur les demandes</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-dark rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link fw-bold text-light\" href=\"";
                // line 19
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main", ["dash_page" => "stat_paye"]);
                echo "\">Statistiques sur les paiements</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"";
                // line 22
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main", ["dash_page" => "cons_dem"]);
                echo "\">Consultation des demandes</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t</ul>

\t\t\t<div class=\"row m-1 pt-2\">
\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Mes Performances</h5>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t<div class=\"card bg-bleuf2 p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Demande Soumise;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["Soumis"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
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
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Demande Domestique;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 51
            echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["Domestiques"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
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
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Demande Professionnelle;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 65
            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["Professionnelles"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Demande ERP - ERT;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 79
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["ERP - ERT"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Demandes ERP - ERT</span>
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
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Paiement enregistré;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 93
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["Paiement enregistré"] ?? null) : null), "html", null, true);
            echo "
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
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Paiement validé;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 107
            echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["Paiement validé"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Paiements validés</span>
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
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Dossier validé;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 121
            echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["Dossier validé"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Dossiers validés</span>
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
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Rapport Affecté;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 134), "id", [], "any", false, false, false, 134))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 136
            echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["Dossier affecté"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Dossiers affectés</span>
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
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Visite planifiée;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 150
            echo twig_escape_filter($this->env, (($__internal_compile_9 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["Visite planifiée"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Visites planifiées</span>
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
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Rapport élaboré;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 162), "id", [], "any", false, false, false, 162))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 164
            echo twig_escape_filter($this->env, (($__internal_compile_10 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["Rapport élaboré"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Rapports élaborés</span>
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
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Rapport validé;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 176), "id", [], "any", false, false, false, 176))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 178
            echo twig_escape_filter($this->env, (($__internal_compile_11 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["Rapport validé"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Rapports validés</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<hr />
\t\t\t<div class=\"row mt-2\">
\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t<div class=\"card bg-red p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Hors délais 5 jours;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 194), "id", [], "any", false, false, false, 194))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 196
            echo twig_escape_filter($this->env, (($__internal_compile_12 = ($context["mes_alerte"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["Hors délais 5 jours"] ?? null) : null), "html", null, true);
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
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Hors délais 15 jours;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 209), "id", [], "any", false, false, false, 209))]), "html", null, true);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 211
            echo twig_escape_filter($this->env, (($__internal_compile_13 = ($context["mes_alerte"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["Hors délais 15 jours"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Dossiers Hors délais 15j</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr class=\"border-bottom border-secondary border-2\" />

\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Demandes par type d'usage et passage visite</h5>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 mt-2\">
\t\t\t\t\t<div class=\"card bg-dark p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 230
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "All"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">";
            // line 231
            echo twig_escape_filter($this->env, (($__internal_compile_14 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["All"] ?? null) : null), "html", null, true);
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
            // line 245
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Domestiques"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 246
            echo twig_escape_filter($this->env, (($__internal_compile_15 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["Domestiques"] ?? null) : null), "html", null, true);
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
            // line 258
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Professionnelles"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 259
            echo twig_escape_filter($this->env, (($__internal_compile_16 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["Professionnelles"] ?? null) : null), "html", null, true);
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
            // line 271
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "ERP - ERT"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 272
            echo twig_escape_filter($this->env, (($__internal_compile_17 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["ERP - ERT"] ?? null) : null), "html", null, true);
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
            // line 287
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "1ère visite"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 288
            echo twig_escape_filter($this->env, (($__internal_compile_18 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["1ère visite"] ?? null) : null), "html", null, true);
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
            // line 300
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "2e visite"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 301
            echo twig_escape_filter($this->env, (($__internal_compile_19 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["2e visite"] ?? null) : null), "html", null, true);
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
            // line 316
            $context["les_etat"] = [0 => "Soumis"];
            // line 317
            echo "\t\t\t\t";
            $context["les_col"] = [0 => "danger"];
            // line 318
            echo "\t\t\t\t
\t\t\t\t";
            // line 319
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DAF"))) {
                // line 320
                echo "\t\t\t\t\t";
                $context["les_etat"] = [0 => "Paiement enregistré", 1 => "Paiement validé"];
                // line 321
                echo "\t\t\t\t\t";
                $context["les_col"] = [0 => "primary bg-opacity-25", 1 => "success bg-opacity-25"];
                // line 322
                echo "\t\t\t\t";
            }
            // line 323
            echo "
\t\t\t\t";
            // line 324
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")) {
                // line 325
                echo "\t\t\t\t\t";
                $context["les_etat"] = [0 => "Dossier validé"];
                // line 326
                echo "\t\t\t\t\t";
                $context["les_col"] = [0 => "success bg-opacity-25"];
                // line 327
                echo "\t\t\t\t";
            }
            // line 328
            echo "
\t\t\t\t";
            // line 329
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR")) {
                // line 330
                echo "\t\t\t\t\t";
                $context["les_etat"] = [0 => "Dossier affecté", 1 => "Visite planifiée", 2 => "Rapport élaboré", 3 => "Rapport validé"];
                // line 331
                echo "\t\t\t\t\t";
                $context["les_col"] = [0 => "light", 1 => "red", 2 => "primary bg-opacity-75", 3 => "green"];
                // line 332
                echo "\t\t\t\t";
            }
            // line 333
            echo "
\t\t\t\t";
            // line 334
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                // line 335
                echo "\t\t\t\t\t";
                $context["les_etat"] = [0 => "Dossier validé", 1 => "Dossier affecté", 2 => "Visite planifiée", 3 => "Rapport élaboré", 4 => "Rapport validé"];
                // line 336
                echo "\t\t\t\t\t";
                $context["les_col"] = [0 => "info", 1 => "dark bg-opacity-50", 2 => "red", 3 => "primary bg-opacity-75", 4 => "green"];
                // line 337
                echo "\t\t\t\t";
            }
            // line 338
            echo "\t\t\t\t
\t\t\t\t";
            // line 339
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 340
                echo "\t\t\t\t\t";
                $context["les_etat"] = [0 => "Soumis", 1 => "Paiement enregistré", 2 => "Paiement validé", 3 => "Dossier validé", 4 => "Dossier affecté", 5 => "Visite planifiée", 6 => "Rapport élaboré", 7 => "Rapport validé"];
                // line 341
                echo "\t\t\t\t\t";
                $context["les_col"] = [0 => "danger", 1 => "primary bg-opacity-25", 2 => "success bg-opacity-25", 3 => "info", 4 => "dark bg-opacity-50", 5 => "red", 6 => "primary bg-opacity-75", 7 => "green"];
                // line 342
                echo "\t\t\t\t";
            }
            // line 343
            echo "
\t\t\t\t";
            // line 344
            $context["ix"] = 0;
            // line 345
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_etat"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
                // line 346
                echo "\t\t\t\t\t";
                $context["col"] = (($__internal_compile_20 = ($context["les_col"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[($context["ix"] ?? null)] ?? null) : null);
                // line 347
                echo "\t\t\t\t\t<div class=\"col-md-4 mt-2\">
\t\t\t\t\t\t<div class=\"card bg-";
                // line 348
                echo twig_escape_filter($this->env, ($context["col"] ?? null), "html", null, true);
                echo " p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 351
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => $context["etat"]]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">";
                // line 352
                echo twig_escape_filter($this->env, (($__internal_compile_21 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[$context["etat"]] ?? null) : null), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light\">";
                // line 353
                echo twig_escape_filter($this->env, $context["etat"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 360
                $context["ix"] = (($context["ix"] ?? null) + 1);
                // line 361
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 362
            echo "\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t<hr />
\t\t\t<div class=\"row mt-2\">
\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t<div class=\"card bg-red p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 371
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Hors délais 5 jours"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 373
            echo twig_escape_filter($this->env, (($__internal_compile_22 = ($context["les_alerte"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["Hors délais 5 jours"] ?? null) : null), "html", null, true);
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
            // line 386
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Hors délais 15 jours"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t";
            // line 388
            echo twig_escape_filter($this->env, (($__internal_compile_23 = ($context["les_alerte"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["Hors délais 15 jours"] ?? null) : null), "html", null, true);
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
            // line 398
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
                // line 399
                echo "\t\t\t<div class=\"row mt-50\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Demandes en préparation (";
                // line 403
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["les_install"] ?? null)), "html", null, true);
                echo ")</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
            \t";
                // line 407
                if ((twig_length_filter($this->env, ($context["les_install"] ?? null)) == 0)) {
                    // line 408
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
                    // line 422
                    echo "\t\t\t\t<table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">N° demande</th> 
\t\t\t\t\t\t<th class=\"priority-3\">Usage</th> 
\t\t\t\t\t\t<th>Localité</th>
\t\t\t\t\t\t<th>Type Construction</th>
\t\t\t\t\t\t<th>Statut demande</th>
\t\t\t\t\t\t";
                    // line 431
                    echo "\t\t\t\t\t\t";
                    // line 432
                    echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
                    // line 435
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["les_install"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                        // line 436
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 436) < 7)) {
                            // line 437
                            echo "\t\t\t\t\t\t\t";
                            $context["badge_etat"] = "danger";
                            // line 438
                            echo "\t\t\t\t\t\t";
                        }
                        // line 439
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 439) <= 7)) {
                            // line 440
                            echo "\t\t\t\t\t\t\t";
                            $context["badge_etat"] = "warning";
                            // line 441
                            echo "\t\t\t\t\t\t";
                        }
                        // line 442
                        echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\" class=\"fw-bold\">
\t\t\t\t\t\t\t\t";
                        // line 444
                        if (twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 444)) {
                            // line 445
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 445), "numero", [], "any", false, false, false, 445), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 447
                            echo "\t\t\t\t\t\t\t\t\t\t<span>[";
                            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->strpad_left(twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 447), 9, "0"), "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdAt", [], "any", false, false, false, 447), "d/m/y"), "html", null, true);
                            echo "]</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 449
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
                            ";
                        // line 451
                        if ((twig_get_attribute($this->env, $this->source, $context["ag"], "usages", [], "any", false, false, false, 451) == "domestique")) {
                            // line 452
                            echo "                                <span class=\"text-warning fs-8 fw-bold\">Domestique</span>
                            ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 453
$context["ag"], "usages", [], "any", false, false, false, 453) == "non_domestique")) {
                            // line 454
                            echo "                                <span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
                            ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 455
$context["ag"], "usages", [], "any", false, false, false, 455) == "erp_ert")) {
                            // line 456
                            echo "                                <span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
                            ";
                        }
                        // line 458
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                        // line 460
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 460))) {
                            // line 461
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 461), "nom", [], "any", false, false, false, 461), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 463
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 465
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                        // line 467
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "typeconstruction", [], "any", false, false, false, 467))) {
                            // line 468
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "typeconstruction", [], "any", false, false, false, 468), "nom", [], "any", false, false, false, 468), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 470
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 472
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"pt badge badge-info fs-8\">";
                        // line 474
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 474), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                        // line 477
                        echo "\t\t\t\t\t\t\t";
                        // line 484
                        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 486
                    echo "\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t";
                }
                // line 489
                echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-clients\">
\t\t\t\t\t\t<h4 class=\"fw-bold\">Derniers clients enregistrés</h4>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
\t\t\t\t\t\t<ul class=\"pl-0\">
\t\t\t\t\t\t\t";
                // line 498
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["last_client"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                    // line 499
                    echo "\t\t\t\t\t\t\t<li class=\"un-client d-flex align-items-center mt-3\">
\t\t\t\t\t\t\t\t<div style=\"position:relative; top:-2px\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"gray\" class=\"bi bi-plus-lg\" viewBox=\"0 0 32 32\">
                                    <use xlink:href=\"";
                    // line 502
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-person"), "html", null, true);
                    echo "\"></use>
                                </svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-2 d-flex flex-wrap align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">";
                    // line 507
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "prenom", [], "any", false, false, false, 507), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "nom", [], "any", false, false, false, 507), "html", null, true);
                    echo "</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 509
                    if (twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 509)) {
                        // line 510
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 510), "nom", [], "any", false, false, false, 510), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 512
                        echo "\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 514
                    echo "\t\t\t\t\t\t\t\t\t\t, ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "adresse", [], "any", false, false, false, 514), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "telephone", [], "any", false, false, false, 514), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning\">Electricien</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 521
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 526
            echo "
\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
\t";
        } else {
            // line 530
            echo "\t\t<div class=\"col-8 mt-5 offset-2 alert alert-danger fs-4 text-center\">
\t\t\tVotre adresse email n'a pas encore été confirmée !
\t\t\tVeuillez cliquer sur le lien envoyé sur votre boite mail pour valider votre inscription !
\t\t</div>
\t";
        }
        // line 535
        echo "
";
    }

    public function getTemplateName()
    {
        return "main/index_cons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  927 => 535,  920 => 530,  914 => 526,  907 => 521,  891 => 514,  887 => 512,  881 => 510,  879 => 509,  872 => 507,  864 => 502,  859 => 499,  855 => 498,  844 => 489,  839 => 486,  832 => 484,  830 => 477,  825 => 474,  821 => 472,  817 => 470,  811 => 468,  809 => 467,  805 => 465,  801 => 463,  795 => 461,  793 => 460,  789 => 458,  785 => 456,  783 => 455,  780 => 454,  778 => 453,  775 => 452,  773 => 451,  769 => 449,  761 => 447,  755 => 445,  753 => 444,  749 => 442,  746 => 441,  743 => 440,  740 => 439,  737 => 438,  734 => 437,  731 => 436,  727 => 435,  722 => 432,  720 => 431,  710 => 422,  694 => 408,  692 => 407,  685 => 403,  679 => 399,  677 => 398,  664 => 388,  659 => 386,  643 => 373,  638 => 371,  627 => 362,  621 => 361,  619 => 360,  609 => 353,  605 => 352,  601 => 351,  595 => 348,  592 => 347,  589 => 346,  584 => 345,  582 => 344,  579 => 343,  576 => 342,  573 => 341,  570 => 340,  568 => 339,  565 => 338,  562 => 337,  559 => 336,  556 => 335,  554 => 334,  551 => 333,  548 => 332,  545 => 331,  542 => 330,  540 => 329,  537 => 328,  534 => 327,  531 => 326,  528 => 325,  526 => 324,  523 => 323,  520 => 322,  517 => 321,  514 => 320,  512 => 319,  509 => 318,  506 => 317,  504 => 316,  486 => 301,  482 => 300,  467 => 288,  463 => 287,  445 => 272,  441 => 271,  426 => 259,  422 => 258,  407 => 246,  403 => 245,  386 => 231,  382 => 230,  360 => 211,  355 => 209,  339 => 196,  334 => 194,  315 => 178,  310 => 176,  295 => 164,  290 => 162,  275 => 150,  270 => 148,  255 => 136,  250 => 134,  234 => 121,  229 => 119,  214 => 107,  209 => 105,  194 => 93,  189 => 91,  174 => 79,  169 => 77,  154 => 65,  149 => 63,  134 => 51,  129 => 49,  114 => 37,  109 => 35,  97 => 25,  91 => 22,  85 => 19,  79 => 16,  76 => 15,  74 => 14,  69 => 12,  62 => 7,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/index_cons.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/index_cons.html.twig");
    }
}
