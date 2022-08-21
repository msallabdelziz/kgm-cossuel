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

/* main/index_paye.html.twig */
class __TwigTemplate_d68aa404c712524829430c476d034c94 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/index_paye.html.twig", 1);
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
                echo "\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"";
                // line 22
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main", ["dash_page" => "stat_dem"]);
                echo "\">Statistiques sur les demandes</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-dark rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link fw-bold text-light\" href=\"";
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

\t\t\t\t\t";
            // line 33
            $context["les_mode"] = ["All" => "Total Paiements", "Espèce" => "Espèces", "Chèque" => "Chèque", "Autre" => "Autre"];
            // line 34
            echo "\t\t\t\t\t";
            $context["les_col"] = [0 => "green bg-opacity-50", 1 => "success bg-opacity-50", 2 => "warning bg-opacity-25", 3 => "danger bg-opacity-50"];
            // line 35
            echo "
\t\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">
\t\t\t\t\t\t<div class=\"float-start mr-20\">Situation des paiements par mode et usage installation</div>
\t\t\t\t\t\t<form method=\"post\" id=\"form_dash_perio\" class=\"float-end\" action=\"\">
\t\t\t\t\t\t\t<select name=\"val_dash_perio\" id=\"val_dash_perio\" class=\"fw-bold bg-success bg-opacity-25 form-select-sm\">
\t\t\t\t\t\t\t\t<option ";
            // line 41
            if ((($context["perio_stat"] ?? null) == "last1")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last1\">Aujourd'hui</option>
\t\t\t\t\t\t\t\t<option ";
            // line 42
            if ((($context["perio_stat"] ?? null) == "last7")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last7\">7 derniers jours</option>
\t\t\t\t\t\t\t\t<option ";
            // line 43
            if ((($context["perio_stat"] ?? null) == "last15")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last15\">15 derniers jours</option>
\t\t\t\t\t\t\t\t<option ";
            // line 44
            if ((($context["perio_stat"] ?? null) == "last30")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last30\">30 derniers jours</option>
\t\t\t\t\t\t\t\t<option ";
            // line 45
            if ((($context["perio_stat"] ?? null) == "all")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"all\">Toutes les périodes</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</form>
\t\t\t\t\t</h5>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 51
            $context["ix"] = 0;
            // line 52
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_mode"] ?? null));
            foreach ($context['_seq'] as $context["mode"] => $context["lib_mode"]) {
                // line 53
                echo "\t\t\t\t\t";
                $context["col"] = (($__internal_compile_1 = ($context["les_col"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["ix"] ?? null)] ?? null) : null);
                // line 54
                echo "\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-3 mt-2\">
\t\t\t\t\t\t";
                // line 55
                if ((($context["ix"] ?? null) == 0)) {
                    // line 56
                    echo "\t\t\t\t\t\t<div class=\"card bg-warning bg-opacity-50 p-2 card-stat shadow\">
\t\t\t\t\t\t";
                } else {
                    // line 58
                    echo "\t\t\t\t\t\t<div class=\"card bg-dark bg-opacity-25 p-2 card-stat shadow\">
\t\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"row px-2\">
\t\t\t\t\t\t\t\t\t";
                // line 63
                echo "\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-secondary mb-1 pb-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 p-1 badge badge-danger py-1\">";
                // line 65
                echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = (($__internal_compile_4 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"\">";
                // line 66
                echo twig_escape_filter($this->env, $context["lib_mode"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\"><span class=\"number mb-0 fs-7 badge bg-success p-1\">";
                // line 67
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_compile_5 = (($__internal_compile_6 = (($__internal_compile_7 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[1] ?? null) : null), 0, ",", " "), "html", null, true);
                echo " FCFA</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-8 mt-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number p-1 mb-0 fs-8 badge bg-warning text-dark\">";
                // line 70
                echo twig_escape_filter($this->env, (($__internal_compile_8 = (($__internal_compile_9 = (($__internal_compile_10 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[1] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null), "html", null, true);
                echo "</span> <span class=\"text-dark px-1 rounded\">Domestiques</span> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\"><span class=\"number mb-0 me-3 fs-8 badge badge-success p-1\">";
                // line 71
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_compile_11 = (($__internal_compile_12 = (($__internal_compile_13 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[1] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[1] ?? null) : null), 0, ",", " "), "html", null, true);
                echo " FCFA</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-8 mt-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number p-1 mb-0 fs-8 badge bg-primary bg-opacity-50\">";
                // line 74
                echo twig_escape_filter($this->env, (($__internal_compile_14 = (($__internal_compile_15 = (($__internal_compile_16 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[2] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[0] ?? null) : null), "html", null, true);
                echo "</span> <span class=\"text-dark px-1 rounded\">Professionnelles</span> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\"><span class=\"number mb-0 me-3 fs-8 badge badge-success p-1\">";
                // line 75
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_compile_17 = (($__internal_compile_18 = (($__internal_compile_19 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[2] ?? null) : null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[1] ?? null) : null), 0, ",", " "), "html", null, true);
                echo " FCFA</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-8 mt-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number p-1 mb-0 fs-8 badge bg-primary\">";
                // line 78
                echo twig_escape_filter($this->env, (($__internal_compile_20 = (($__internal_compile_21 = (($__internal_compile_22 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[3] ?? null) : null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[0] ?? null) : null), "html", null, true);
                echo "</span> <span class=\"text-dark px-1 rounded\">ERP - ERT</span> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\"><span class=\"number mb-0 me-3 fs-8 badge badge-success p-1\">";
                // line 79
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_compile_23 = (($__internal_compile_24 = (($__internal_compile_25 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[$context["mode"]] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[3] ?? null) : null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[1] ?? null) : null), 0, ",", " "), "html", null, true);
                echo " FCFA</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"m-0 pt-2\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"pieC2";
                // line 82
                echo twig_escape_filter($this->env, (($context["ix"] ?? null) + 1), "html", null, true);
                echo "\" class=\"p-2 mt-2 shadow border bg-light bg-opacity-50 rounded\" align=\"center\"></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 91
                $context["ix"] = (($context["ix"] ?? null) + 1);
                // line 92
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['mode'], $context['lib_mode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- end col -->
\t\t\t
\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
\t";
        } else {
            // line 100
            echo "\t\t<div class=\"col-8 mt-5 offset-2 alert alert-danger fs-4 text-center\">
\t\t\tVotre adresse email n'a pas encore été confirmée !
\t\t\tVeuillez cliquer sur le lien envoyé sur votre boite mail pour valider votre inscription !
\t\t</div>
\t";
        }
        // line 105
        echo "
";
    }

    // line 108
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "
";
        // line 110
        $context["les_etat"] = [0 => "Soumis", 1 => "Paiement enregistré", 2 => "Paiement validé", 3 => "Dossier validé", 4 => "Dossier affecté", 5 => "Visite planifiée", 6 => "Rapport élaboré", 7 => "Rapport validé"];
        // line 111
        $context["les_col"] = [0 => "#d83444", 1 => "#b5cbf1", 2 => "#b8d0c7", 3 => "#13c5ea", 4 => "#e1501e", 5 => "#508bf6", 6 => "#508bf6", 7 => "#4b9f47"];
        // line 112
        $context["les_mode"] = ["All" => "Total Paiements", "Espèce" => "Paiement Espèces", "Chèque" => "Paiement Chèque", "Autre" => "Paiement Autre"];
        // line 113
        $context["les_code"] = ["1" => "All", "2" => "Espèce", "3" => "Chèque", "4" => "Autre"];
        // line 114
        echo "<script>
    \$(document).ready(function () {

        \$('#val_dash_perio').on('change', function() {
            \$(\"#form_dash_perio\").submit();
        });

\t\t";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => 1, 1 => 2, 2 => 3, 3 => 4]);
        foreach ($context['_seq'] as $context["_key"] => $context["ix"]) {
            // line 122
            echo "\t\t\t";
            $context["code"] = (($__internal_compile_26 = ($context["les_code"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[$context["ix"]] ?? null) : null);
            // line 123
            echo "\t\t\tvar pieC2";
            echo twig_escape_filter($this->env, $context["ix"], "html", null, true);
            echo " = new d3pie(\"pieC2";
            echo twig_escape_filter($this->env, $context["ix"], "html", null, true);
            echo "\", {
\t\t\t\t\"header\": {
\t\t\t\t\t\"title\": false,
\t\t\t\t},
\t\t\t\t\"size\": {
\t\t\t\t\t\"canvasWidth\": 180,
\t\t\t\t\t\"canvasHeight\": 180,
\t\t\t\t\t\"pieOuterRadius\": \"70%\"
\t\t\t\t},
\t\t\t\t\"data\": {
\t\t\t\t\t\"content\": [
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\"label\": \"Domestique\",
\t\t\t\t\t\t\t\"value\": ";
            // line 136
            echo twig_escape_filter($this->env, (($__internal_compile_27 = (($__internal_compile_28 = (($__internal_compile_29 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[($context["code"] ?? null)] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[1] ?? null) : null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[1] ?? null) : null), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\"color\": \"#febf04\"
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\"label\": \"Professionnel\",
\t\t\t\t\t\t\t\"value\": ";
            // line 141
            echo twig_escape_filter($this->env, (($__internal_compile_30 = (($__internal_compile_31 = (($__internal_compile_32 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[($context["code"] ?? null)] ?? null) : null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[2] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[1] ?? null) : null), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\"color\": \"#508af5\"
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\"label\": \"ERP - ERT\",
\t\t\t\t\t\t\t\"value\": ";
            // line 146
            echo twig_escape_filter($this->env, (($__internal_compile_33 = (($__internal_compile_34 = (($__internal_compile_35 = ($context["stat_paiement"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[($context["code"] ?? null)] ?? null) : null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[3] ?? null) : null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[1] ?? null) : null), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\"color\": \"#0b6efc\"
\t\t\t\t\t\t}
\t\t\t\t\t]
\t\t\t\t},
\t\t\t\t\"labels\": {
\t\t\t\t\t\"inner\": false,
\t\t\t\t\t\"outer\": {
\t\t\t\t\t\t\"format\":\"percentage\",
\t\t\t\t\t\t\"pieDistance\": -40,\t
\t\t\t\t\t},
\t\t\t\t\t\"percentage\":{
\t\t\t\t\t\t\"color\":\"#000000\",
\t\t\t\t\t\t\"fontSize\":\"12\",
\t\t\t\t\t}
\t\t\t\t},
\t\t\t});

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "main/index_paye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 165,  339 => 146,  331 => 141,  323 => 136,  304 => 123,  301 => 122,  297 => 121,  288 => 114,  286 => 113,  284 => 112,  282 => 111,  280 => 110,  277 => 109,  273 => 108,  268 => 105,  261 => 100,  252 => 93,  246 => 92,  244 => 91,  232 => 82,  226 => 79,  222 => 78,  216 => 75,  212 => 74,  206 => 71,  202 => 70,  196 => 67,  192 => 66,  188 => 65,  184 => 63,  180 => 60,  176 => 58,  172 => 56,  170 => 55,  167 => 54,  164 => 53,  159 => 52,  157 => 51,  146 => 45,  140 => 44,  134 => 43,  128 => 42,  122 => 41,  114 => 35,  111 => 34,  109 => 33,  105 => 31,  99 => 28,  93 => 25,  87 => 22,  84 => 21,  82 => 20,  77 => 18,  70 => 13,  68 => 12,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/index_paye.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/index_paye.html.twig");
    }
}
