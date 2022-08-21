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
class __TwigTemplate_234565106894f6a765b67dd88d469dd5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/index_paiement.html.twig", 1);
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
\t\t<div class=\"title-wrapper\">
\t\t";
            // line 10
            if ((((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10), "roles", [], "any", false, false, false, 10)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) == "ROLE_CAISSIER") || ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10), "roles", [], "any", false, false, false, 10)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null) == "ROLE_COMPTABLE"))) {
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Paiement enregistré;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t";
                // line 21
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mes_stat"] ?? null), "Paiement enregistré", [], "array", false, true, false, 21), ("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)), [], "array", true, true, false, 21)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["Paiement enregistré"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22))] ?? null) : null), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ("Paiement validé;" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37))]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">
\t\t\t\t\t\t\t\t\t";
                // line 39
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mes_stat"] ?? null), "Paiement validé", [], "array", false, true, false, 39), ("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)), [], "array", true, true, false, 39)) {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($__internal_compile_4 = (($__internal_compile_5 = ($context["mes_stat"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["Paiement validé"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[("user_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40))] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["All"] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["Domestiques"] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["Professionnelles"] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_compile_9 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["ERP - ERT"] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_compile_10 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["1ère visite"] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_compile_11 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["2e visite"] ?? null) : null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["les_etat"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
                // line 165
                echo "\t\t\t\t\t";
                $context["col"] = (($__internal_compile_12 = ($context["les_col"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[($context["ix"] ?? null)] ?? null) : null);
                // line 166
                echo "\t\t\t\t\t<div class=\"col-md-4 mt-2\">
\t\t\t\t\t\t<div class=\"card bg-";
                // line 167
                echo twig_escape_filter($this->env, ($context["col"] ?? null), "html", null, true);
                echo " p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => $context["etat"]]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">";
                // line 171
                echo twig_escape_filter($this->env, (($__internal_compile_13 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["etat"]] ?? null) : null), "html", null, true);
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
                $context["ix"] = (($context["ix"] ?? null) + 1);
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
            $context['_seq'] = twig_ensure_traversable(($context["les_mode"] ?? null));
            foreach ($context['_seq'] as $context["mode"] => $context["lib_mode"]) {
                // line 190
                echo "\t\t\t\t\t";
                $context["col"] = (($__internal_compile_14 = ($context["les_col"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[($context["ix"] ?? null)] ?? null) : null);
                // line 191
                echo "\t\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t\t<div class=\"card bg-";
                // line 192
                echo twig_escape_filter($this->env, ($context["col"] ?? null), "html", null, true);
                echo " p-2 card-stat shadow\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
                // line 196
                echo "\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" >
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">";
                // line 197
                echo twig_escape_filter($this->env, (($__internal_compile_15 = (($__internal_compile_16 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[0] ?? null) : null), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"\">";
                // line 198
                echo twig_escape_filter($this->env, $context["lib_mode"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-warning text-dark\">";
                // line 200
                echo twig_escape_filter($this->env, (($__internal_compile_17 = (($__internal_compile_18 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[1] ?? null) : null), "html", null, true);
                echo "</span> <span class=\"bg-warning text-dark px-1 rounded\">Domestiques</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-primary bg-opacity-50\">";
                // line 203
                echo twig_escape_filter($this->env, (($__internal_compile_19 = (($__internal_compile_20 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[2] ?? null) : null), "html", null, true);
                echo "</span> <span class=\"bg-primary bg-opacity-50 text-light px-1 rounded\">Professionnelles</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-primary\">";
                // line 206
                echo twig_escape_filter($this->env, (($__internal_compile_21 = (($__internal_compile_22 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[3] ?? null) : null), "html", null, true);
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
                $context["ix"] = (($context["ix"] ?? null) + 1);
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
            $context['_seq'] = twig_ensure_traversable(($context["les_mode"] ?? null));
            foreach ($context['_seq'] as $context["mode"] => $context["lib_mode"]) {
                // line 222
                echo "\t\t\t\t\t";
                $context["col"] = (($__internal_compile_23 = ($context["les_col"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[($context["ix"] ?? null)] ?? null) : null);
                // line 223
                echo "\t\t\t\t\t<div class=\"col-md-3 mt-2\">
\t\t\t\t\t\t<div class=\"card bg-";
                // line 224
                echo twig_escape_filter($this->env, ($context["col"] ?? null), "html", null, true);
                echo " p-2 card-stat shadow\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
                // line 228
                echo "\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" >
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">";
                // line 229
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_compile_24 = (($__internal_compile_25 = ($context["montant_paiement"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[0] ?? null) : null), 0, ",", " "), "html", null, true);
                echo " FCFA</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"\">";
                // line 230
                echo twig_escape_filter($this->env, $context["lib_mode"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-warning text-dark\">";
                // line 232
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_compile_26 = (($__internal_compile_27 = ($context["montant_paiement"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[1] ?? null) : null), 0, ",", " "), "html", null, true);
                echo " FCFA</span> <span class=\"bg-warning text-dark px-1 rounded\">Domestiques</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-primary bg-opacity-50\">";
                // line 235
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_compile_28 = (($__internal_compile_29 = ($context["montant_paiement"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[2] ?? null) : null), 0, ",", " "), "html", null, true);
                echo " FCFA</span> <span class=\"bg-primary bg-opacity-50 text-light px-1 rounded\">Professionnels</span> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-7 mt-1 fw-light\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge bg-primary\">";
                // line 238
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_compile_30 = (($__internal_compile_31 = ($context["montant_paiement"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[3] ?? null) : null), 0, ",", " "), "html", null, true);
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
                $context["ix"] = (($context["ix"] ?? null) + 1);
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
        return array (  514 => 260,  507 => 255,  498 => 248,  492 => 247,  490 => 246,  479 => 238,  473 => 235,  467 => 232,  462 => 230,  458 => 229,  455 => 228,  449 => 224,  446 => 223,  443 => 222,  438 => 221,  436 => 220,  430 => 216,  424 => 215,  422 => 214,  411 => 206,  405 => 203,  399 => 200,  394 => 198,  390 => 197,  387 => 196,  381 => 192,  378 => 191,  375 => 190,  370 => 189,  368 => 188,  362 => 184,  359 => 183,  357 => 182,  354 => 181,  348 => 180,  346 => 179,  336 => 172,  332 => 171,  328 => 170,  322 => 167,  319 => 166,  316 => 165,  311 => 164,  309 => 163,  306 => 162,  303 => 161,  300 => 160,  297 => 159,  295 => 158,  292 => 157,  289 => 156,  286 => 155,  283 => 154,  281 => 153,  278 => 152,  275 => 151,  273 => 150,  255 => 135,  251 => 134,  236 => 122,  232 => 121,  213 => 105,  209 => 104,  194 => 92,  190 => 91,  175 => 79,  171 => 78,  154 => 64,  150 => 63,  139 => 54,  127 => 44,  123 => 42,  117 => 40,  115 => 39,  110 => 37,  97 => 26,  93 => 24,  87 => 22,  85 => 21,  80 => 19,  70 => 11,  68 => 10,  64 => 8,  62 => 7,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/index_paiement.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/index_paiement.html.twig");
    }
}
