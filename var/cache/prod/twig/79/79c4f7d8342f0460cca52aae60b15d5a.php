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
class __TwigTemplate_7f148260a2acd61dfe4f577c8d9b9609 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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
\t\t\t\t<li class=\"nav-item bg-dark mx-1 rounded-top mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link fw-bold text-light\" aria-current=\"page\">Mon espace personnel</a>
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
            if ((($context["perio_stat"] ?? null) == "last1")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last1\">Aujourd'hui</option>
\t\t\t\t\t\t\t\t<option ";
            // line 33
            if ((($context["perio_stat"] ?? null) == "last7")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last7\">7 derniers jours</option>
\t\t\t\t\t\t\t\t<option ";
            // line 34
            if ((($context["perio_stat"] ?? null) == "last15")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last15\">15 derniers jours</option>
\t\t\t\t\t\t\t\t<option ";
            // line 35
            if ((($context["perio_stat"] ?? null) == "last30")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last30\">30 derniers jours</option>
\t\t\t\t\t\t\t\t<option ";
            // line 36
            if ((($context["perio_stat"] ?? null) == "all")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"all\">Toutes les périodes</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</form>

\t\t\t\t<div class=\"float-end text-dark fs-6\">Vous êtes actif sur <span class=\"badge bg-success fw-bold px-1\">";
            // line 40
            if ((($__internal_compile_1 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["All"] ?? null) : null)) {
                echo twig_escape_filter($this->env, twig_round((((($__internal_compile_2 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["All"] ?? null) : null) / (($__internal_compile_3 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["All"] ?? null) : null)) * 100), 1), "html", null, true);
            } else {
                echo "0";
            }
            echo "%</span> du total des demandes</div>
\t\t\t\t</h5>
\t\t\t</div>
\t\t\t";
            // line 43
            if ((($__internal_compile_4 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["All"] ?? null) : null)) {
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("All;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">";
                // line 54
                echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["All"] ?? null) : null), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Domestiques;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
                // line 67
                echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["Domestiques"] ?? null) : null), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Professionnelles;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
                // line 79
                echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["Professionnelles"] ?? null) : null), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("ERP - ERT;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
                // line 91
                echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["ERP - ERT"] ?? null) : null), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("1ère visite;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 102), "id", [], "any", false, false, false, 102))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
                // line 103
                echo twig_escape_filter($this->env, (($__internal_compile_9 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["1ère visite"] ?? null) : null), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("2e visite;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
                // line 115
                echo twig_escape_filter($this->env, (($__internal_compile_10 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["2e visite"] ?? null) : null), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable(($context["les_etat"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
                    // line 175
                    echo "\t\t\t\t\t\t\t";
                    $context["col"] = (($__internal_compile_11 = ($context["les_col"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[($context["ix"] ?? null)] ?? null) : null);
                    // line 176
                    echo "\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t<div class=\"card bg-";
                    // line 177
                    echo twig_escape_filter($this->env, ($context["col"] ?? null), "html", null, true);
                    echo " p-2 card-stat\">
\t\t\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                    // line 180
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => (($context["etat"] . ";") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180))]), "html", null, true);
                    echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">";
                    // line 181
                    echo twig_escape_filter($this->env, (($__internal_compile_12 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["etat"]] ?? null) : null), "html", null, true);
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
                    $context["ix"] = (($context["ix"] ?? null) + 1);
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
                echo twig_escape_filter($this->env, (($__internal_compile_13 = ($context["mes_alerte"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["Hors délais 5 jours"] ?? null) : null), "html", null, true);
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
                echo twig_escape_filter($this->env, (($__internal_compile_14 = ($context["mes_alerte"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["Hors délais 15 jours"] ?? null) : null), "html", null, true);
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
    }

    // line 246
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if ((($__internal_compile_15 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["All"] ?? null) : null)) {
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
            echo twig_escape_filter($this->env, (($__internal_compile_16 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["Domestiques"] ?? null) : null), "html", null, true);
            echo ",
                        \"color\": \"#febf04\"
                    },
                    {
                        \"label\": \"Professionnel\",
                        \"value\": ";
            // line 281
            echo twig_escape_filter($this->env, (($__internal_compile_17 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["Professionnelles"] ?? null) : null), "html", null, true);
            echo ",
                        \"color\": \"#508af5\"
                    },
                    {
                        \"label\": \"ERP - ERT\",
                        \"value\": ";
            // line 286
            echo twig_escape_filter($this->env, (($__internal_compile_18 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["ERP - ERT"] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_compile_19 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["1ère visite"] ?? null) : null), "html", null, true);
            echo ",
                        \"color\": \"#196110\"
                    },
                    {
                        \"label\": \"2e visite\",
                        \"value\": ";
            // line 324
            echo twig_escape_filter($this->env, (($__internal_compile_20 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["2e visite"] ?? null) : null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["les_etat"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
                // line 357
                echo "\t\t\t\t\t";
                $context["col"] = (($__internal_compile_21 = ($context["les_col"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[($context["ix"] ?? null)] ?? null) : null);
                // line 358
                echo "\t\t\t\t\t\t{
\t\t\t\t\t\t\t\"label\": \"";
                // line 359
                echo twig_escape_filter($this->env, $context["etat"], "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\"value\": ";
                // line 360
                echo twig_escape_filter($this->env, (($__internal_compile_22 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[$context["etat"]] ?? null) : null), "html", null, true);
                echo ",
\t\t\t\t\t\t\t\"color\": \"";
                // line 361
                echo twig_escape_filter($this->env, ($context["col"] ?? null), "html", null, true);
                echo "\"
\t\t\t\t\t\t}
\t\t\t\t\t";
                // line 363
                if ((($context["ix"] ?? null) < twig_length_filter($this->env, ($context["les_etat"] ?? null)))) {
                    // line 364
                    echo "\t\t\t\t\t\t,
\t\t\t\t\t";
                }
                // line 366
                echo "\t\t\t\t\t";
                $context["ix"] = (($context["ix"] ?? null) + 1);
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
        return array (  613 => 381,  598 => 368,  592 => 367,  589 => 366,  585 => 364,  583 => 363,  578 => 361,  574 => 360,  570 => 359,  567 => 358,  564 => 357,  559 => 356,  557 => 355,  523 => 324,  515 => 319,  479 => 286,  471 => 281,  463 => 276,  444 => 259,  442 => 258,  432 => 250,  429 => 249,  427 => 248,  424 => 247,  420 => 246,  415 => 243,  408 => 238,  403 => 235,  399 => 233,  385 => 222,  380 => 220,  364 => 207,  359 => 205,  343 => 191,  337 => 190,  335 => 189,  325 => 182,  321 => 181,  317 => 180,  311 => 177,  308 => 176,  305 => 175,  300 => 174,  298 => 173,  295 => 172,  293 => 171,  290 => 170,  287 => 169,  273 => 133,  265 => 126,  254 => 115,  250 => 114,  236 => 103,  232 => 102,  218 => 91,  214 => 90,  200 => 79,  196 => 78,  182 => 67,  178 => 66,  163 => 54,  159 => 53,  152 => 48,  149 => 44,  147 => 43,  137 => 40,  128 => 36,  122 => 35,  116 => 34,  110 => 33,  104 => 32,  95 => 25,  89 => 22,  83 => 19,  77 => 16,  74 => 15,  72 => 14,  63 => 7,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/index.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/index.html.twig");
    }
}
