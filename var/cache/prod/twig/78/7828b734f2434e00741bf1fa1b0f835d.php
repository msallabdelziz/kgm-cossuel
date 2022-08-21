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
class __TwigTemplate_ef922f05d19150b8ca92c38775e7be26 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/index_stat.html.twig", 1);
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
        echo "\t<style>
\t\t.p0_title {
\t\t\tborder:1px solid #ccc;
\t\t\tfon-weight:bold;
\t\t}
\t</style>
\t";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "isverified", [], "any", false, false, false, 12))) {
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
            if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20), "roles", [], "any", false, false, false, 20)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) != "ROLE_PUBLIC")) {
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
            if ((($context["perio_stat"] ?? null) == "last1")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last1\">Aujourd'hui</option>
\t\t\t\t\t\t\t<option ";
            // line 39
            if ((($context["perio_stat"] ?? null) == "last7")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last7\">7 derniers jours</option>
\t\t\t\t\t\t\t<option ";
            // line 40
            if ((($context["perio_stat"] ?? null) == "last15")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last15\">15 derniers jours</option>
\t\t\t\t\t\t\t<option ";
            // line 41
            if ((($context["perio_stat"] ?? null) == "last30")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last30\">30 derniers jours</option>
\t\t\t\t\t\t\t<option ";
            // line 42
            if ((($context["perio_stat"] ?? null) == "all")) {
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
            echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["All"] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["Domestiques"] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["Professionnelles"] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["ERP - ERT"] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["1ère visite"] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["2e visite"] ?? null) : null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["les_etat"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
                // line 180
                echo "\t\t\t\t\t\t\t";
                $context["col"] = (($__internal_compile_7 = ($context["les_col"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["ix"] ?? null)] ?? null) : null);
                // line 181
                echo "\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t<div class=\"card bg-";
                // line 182
                echo twig_escape_filter($this->env, ($context["col"] ?? null), "html", null, true);
                echo " p-2 card-stat\">
\t\t\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 185
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => $context["etat"]]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">";
                // line 186
                echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["etat"]] ?? null) : null), "html", null, true);
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
                $context["ix"] = (($context["ix"] ?? null) + 1);
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
            echo twig_escape_filter($this->env, (($__internal_compile_9 = ($context["les_alerte"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["Hors délais 5 jours"] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_compile_10 = ($context["les_alerte"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["Hors délais 15 jours"] ?? null) : null), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_install"] ?? null), "getTotalItemCount", [], "any", false, false, false, 242), "html", null, true);
                echo ")</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
            \t";
                // line 246
                if ((twig_length_filter($this->env, ($context["les_install"] ?? null)) == 0)) {
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
                    $context['_seq'] = twig_ensure_traversable(($context["les_install"] ?? null));
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
                    twig_get_attribute($this->env, $this->source, ($context["les_install"] ?? null), "setPageRange", [0 => 1], "method", false, false, false, 329);
                    // line 330
                    echo "                ";
                    echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["les_install"] ?? null), "pagination.html.twig");
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
    }

    // line 350
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, (($__internal_compile_11 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["Domestiques"] ?? null) : null), "html", null, true);
        echo ",
                        \"color\": \"#febf04\"
                    },
                    {
                        \"label\": \"Professionnel\",
                        \"value\": ";
        // line 384
        echo twig_escape_filter($this->env, (($__internal_compile_12 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["Professionnelles"] ?? null) : null), "html", null, true);
        echo ",
                        \"color\": \"#508af5\"
                    },
                    {
                        \"label\": \"ERP - ERT\",
                        \"value\": ";
        // line 389
        echo twig_escape_filter($this->env, (($__internal_compile_13 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["ERP - ERT"] ?? null) : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (($__internal_compile_14 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["1ère visite"] ?? null) : null), "html", null, true);
        echo ",
                        \"color\": \"#196110\"
                    },
                    {
                        \"label\": \"2e visite\",
                        \"value\": ";
        // line 427
        echo twig_escape_filter($this->env, (($__internal_compile_15 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["2e visite"] ?? null) : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["les_etat"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
            // line 460
            echo "\t\t\t\t\t";
            $context["col"] = (($__internal_compile_16 = ($context["les_col"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[($context["ix"] ?? null)] ?? null) : null);
            // line 461
            echo "\t\t\t\t\t\t{
\t\t\t\t\t\t\t\"label\": \"";
            // line 462
            echo twig_escape_filter($this->env, $context["etat"], "html", null, true);
            echo "\",
\t\t\t\t\t\t\t\"value\": ";
            // line 463
            echo twig_escape_filter($this->env, (($__internal_compile_17 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["etat"]] ?? null) : null), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\"color\": \"";
            // line 464
            echo twig_escape_filter($this->env, ($context["col"] ?? null), "html", null, true);
            echo "\"
\t\t\t\t\t\t}
\t\t\t\t\t";
            // line 466
            if ((($context["ix"] ?? null) < twig_length_filter($this->env, ($context["les_etat"] ?? null)))) {
                // line 467
                echo "\t\t\t\t\t\t,
\t\t\t\t\t";
            }
            // line 469
            echo "\t\t\t\t\t";
            $context["ix"] = (($context["ix"] ?? null) + 1);
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
        return array (  770 => 471,  764 => 470,  761 => 469,  757 => 467,  755 => 466,  750 => 464,  746 => 463,  742 => 462,  739 => 461,  736 => 460,  731 => 459,  729 => 458,  695 => 427,  687 => 422,  651 => 389,  643 => 384,  635 => 379,  608 => 354,  606 => 353,  604 => 352,  601 => 351,  597 => 350,  592 => 347,  585 => 342,  579 => 338,  572 => 333,  565 => 330,  563 => 329,  557 => 325,  550 => 323,  548 => 316,  543 => 313,  539 => 311,  535 => 309,  529 => 307,  527 => 306,  523 => 304,  519 => 302,  513 => 300,  511 => 299,  507 => 297,  503 => 295,  501 => 294,  498 => 293,  496 => 292,  493 => 291,  491 => 290,  487 => 288,  481 => 286,  475 => 284,  473 => 283,  469 => 281,  466 => 280,  463 => 279,  460 => 278,  457 => 277,  454 => 276,  451 => 275,  447 => 274,  442 => 271,  440 => 270,  430 => 261,  414 => 247,  412 => 246,  405 => 242,  399 => 238,  397 => 237,  384 => 227,  379 => 225,  363 => 212,  358 => 210,  342 => 196,  336 => 195,  334 => 194,  324 => 187,  320 => 186,  316 => 185,  310 => 182,  307 => 181,  304 => 180,  299 => 179,  297 => 178,  294 => 177,  292 => 176,  289 => 175,  286 => 174,  270 => 136,  262 => 129,  251 => 118,  247 => 117,  233 => 106,  229 => 105,  215 => 94,  211 => 93,  197 => 82,  193 => 81,  179 => 70,  175 => 69,  160 => 57,  156 => 56,  149 => 51,  138 => 42,  132 => 41,  126 => 40,  120 => 39,  114 => 38,  105 => 31,  99 => 28,  93 => 25,  87 => 22,  84 => 21,  82 => 20,  77 => 18,  70 => 13,  68 => 12,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/index_stat.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/index_stat.html.twig");
    }
}
