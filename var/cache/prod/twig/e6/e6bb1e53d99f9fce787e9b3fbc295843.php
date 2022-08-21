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

/* main/stat.html.twig */
class __TwigTemplate_86a8c93b03a9710428478bb18990e9b3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/stat.html.twig", 1);
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

\t\t\t<ul class=\"nav nav-tabs mb-4 border-dark border-2\">
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
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"";
                // line 19
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main", ["dash_page" => "stat_paye"]);
                echo "\">Statistiques sur les paiements</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-dark rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link fw-bold text-light\" href=\"";
                // line 22
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stat");
                echo "\">Consultation des demandes</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t</ul>

\t\t\t";
            // line 28
            echo "\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 29
                echo "            <div align=\"right\" class=\"row priority-3 fs-5 mt-0 pt-0 caption fw-light\" style=\"\">
                <div class=\"col-2 fs-6\">
                    <select name=\"val_agence0\" id=\"val_agence0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Toutes les Agences ...</option>
                        ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["les_agence"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                    // line 34
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 34), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 34) == ($context["val_agence"] ?? null))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "nom", [], "any", false, false, false, 34), "html", null, true);
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                    </select>
                </div>
\t\t\t\t<div class=\"col-2 fs-6\">
\t\t\t\t\t<select name=\"val_passage0\" id=\"val_passage0\" class=\"form-select form-select-sm border-warning py-1\">
\t\t\t\t\t\t<option value=\"\">Tous les passages ...</option>
\t\t\t\t\t\t";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["les_passage"] ?? null));
                foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
                    // line 42
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
                    echo "\" ";
                    if (($context["obj"] == ($context["val_passage"] ?? null))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["lib_obj"], "html", null, true);
                    echo "</option>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['obj'], $context['lib_obj'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "\t\t\t\t\t</select>
\t\t\t\t</div>
                <div class=\"col-2 fs-6\">
                    <select name=\"val_usage0\" id=\"val_usage0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Tous les Usages ...</option>
                        ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["les_usage"] ?? null));
                foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
                    // line 50
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
                    echo "\" ";
                    if (($context["obj"] == ($context["val_usage"] ?? null))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["lib_obj"], "html", null, true);
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['obj'], $context['lib_obj'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                    </select>
                </div>
\t\t\t\t<div class=\"col-2 fs-6\">
\t\t\t\t\t<select name=\"val_referent0\" id=\"val_referent0\" class=\"form-select form-select-sm border-warning py-1\">
\t\t\t\t\t\t<option value=\"\">Tous les referents ...</option>
\t\t\t\t\t\t";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["les_referent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                    // line 58
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 58), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 58) == ($context["val_referent"] ?? null))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
                    echo "</option>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2 fs-6\">
\t\t\t\t\t<select name=\"val_controleur0\" id=\"val_controleur0\" class=\"form-select form-select-sm border-warning py-1\">
\t\t\t\t\t\t<option value=\"\">Tous les controleurs ...</option>
\t\t\t\t\t\t";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["les_controleur"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                    // line 66
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 66), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 66) == ($context["val_controleur"] ?? null))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
                    echo "</option>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "\t\t\t\t\t</select>
\t\t\t\t</div>
                <div class=\"col-2 fs-6\">
                    <select name=\"val_statut0\" id=\"val_statut0\" class=\"form-select form-select-sm border-success py-1\">
                        <option value=\"\">Tous les statuts ...</option>
                        ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["les_statut"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                    // line 74
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
                    echo "\" ";
                    if (($context["obj"] == ($context["val_statut"] ?? null))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                    </select>
                </div>
            </div>
            <div class=\"clear\"></div>
\t\t\t<div class=\"row m-3\">
                <div class=\"offset-lg-9 col-lg-2 col-6 offset-5 fs-6\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"";
                // line 81
                if (array_key_exists("val_rech", $context)) {
                    echo twig_escape_filter($this->env, ($context["val_rech"] ?? null), "html", null, true);
                }
                echo "\" /></div>
                <div class=\"col-1 col-lg-1 priority-3\" align=\"right\">
                    ";
                // line 86
                echo "                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stat_excel");
                echo "\" class=\"ms-1\">
                        <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"green\">
                            <use xlink:href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-xls"), "html", null, true);
                echo "\"></use>
                        </svg>
                    </a>
                </div>
\t\t\t</div>
\t\t\t<div class=\"row mt-2\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t<h4 class=\"fw-bold\">Historique Demandes soumises (";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_demande"] ?? null), "getTotalItemCount", [], "any", false, false, false, 96), "html", null, true);
                echo ")</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t<hr></span>
            \t";
                // line 100
                if ((twig_length_filter($this->env, ($context["les_demande"] ?? null)) == 0)) {
                    // line 101
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
                    // line 115
                    echo "\t\t\t\t<table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">N° demande</th> 
\t\t\t\t\t\t<th class=\"priority-3\" scope=\"col\">Date Demande</th> 
\t\t\t\t\t\t<th class=\"priority-3\" scope=\"col\">Usage</th> 
\t\t\t\t\t\t<th class=\"priority-4\">Agence</th>
\t\t\t\t\t\t<th class=\"priority-5\">Localité</th>
\t\t\t\t\t\t<th class=\"priority-5\">Type Construction</th>
\t\t\t\t\t\t<th class=\"priority-2\">Statut demande</th>
\t\t\t\t\t\t";
                    // line 126
                    echo "\t\t\t\t\t\t";
                    // line 127
                    echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
                    // line 130
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["les_demande"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["dem"]) {
                        // line 131
                        echo "\t\t\t\t\t\t";
                        $context["ag"] = twig_get_attribute($this->env, $this->source, $context["dem"], "installation", [], "any", false, false, false, 131);
                        // line 132
                        echo "\t\t\t\t\t\t";
                        $context["paiement"] = twig_get_attribute($this->env, $this->source, $context["dem"], "paiement", [], "any", false, false, false, 132);
                        // line 133
                        echo "\t\t\t\t\t\t";
                        $context["dossier"] = twig_get_attribute($this->env, $this->source, $context["dem"], "dossier", [], "any", false, false, false, 133);
                        // line 134
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "step", [], "any", false, false, false, 134) < 7)) {
                            // line 135
                            echo "\t\t\t\t\t\t\t";
                            $context["badge_etat"] = "danger";
                            // line 136
                            echo "\t\t\t\t\t\t";
                        }
                        // line 137
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "step", [], "any", false, false, false, 137) <= 7)) {
                            // line 138
                            echo "\t\t\t\t\t\t\t";
                            $context["badge_etat"] = "warning";
                            // line 139
                            echo "\t\t\t\t\t\t";
                        }
                        // line 140
                        echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\" class=\"fw-bold\">
\t\t\t\t\t\t\t\t";
                        // line 142
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dem"], "numero", [], "any", false, false, false, 142), "html", null, true);
                        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-3\">
\t\t\t\t\t\t\t\t";
                        // line 145
                        if (((twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "step", [], "any", false, false, false, 145) >= 7) && (twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "etat", [], "any", false, false, false, 145) != "Saisie"))) {
                            // line 146
                            echo "\t\t\t\t\t\t\t\t<span class=\"badge text-secondary fs-8\">";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "demandeCourante", [], "any", false, false, false, 146), "dateCreation", [], "any", false, false, false, 146), "d-m-Y"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 148
                            echo "\t\t\t\t\t\t\t\t<span class=\"badge text-secondary fs-8\">";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "createdAt", [], "any", false, false, false, 148), "d-m-Y"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 150
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-3\">
\t\t\t\t\t\t\t\t";
                        // line 152
                        if ((twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "usages", [], "any", false, false, false, 152) == "domestique")) {
                            // line 153
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-warning fs-8 fw-bold\">Domestique</span>
\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 154
($context["ag"] ?? null), "usages", [], "any", false, false, false, 154) == "non_domestique")) {
                            // line 155
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 156
($context["ag"] ?? null), "usages", [], "any", false, false, false, 156) == "erp_ert")) {
                            // line 157
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 159
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-4\">
\t\t\t\t\t\t\t\t";
                        // line 161
                        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "localite", [], "any", false, false, false, 161)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "localite", [], "any", false, false, false, 161), "agence", [], "any", false, false, false, 161)))) {
                            // line 162
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "localite", [], "any", false, false, false, 162), "agence", [], "any", false, false, false, 162), "nom", [], "any", false, false, false, 162), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 164
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 166
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-5\">
\t\t\t\t\t\t\t\t";
                        // line 168
                        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "localite", [], "any", false, false, false, 168))) {
                            // line 169
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "localite", [], "any", false, false, false, 169), "nom", [], "any", false, false, false, 169), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 171
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 173
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-5\">
\t\t\t\t\t\t\t\t";
                        // line 175
                        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "typeconstruction", [], "any", false, false, false, 175))) {
                            // line 176
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "typeconstruction", [], "any", false, false, false, 176), "nom", [], "any", false, false, false, 176), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 178
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 180
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-2\">
\t\t\t\t\t\t\t\t";
                        // line 182
                        $context["etat"] = twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "etat", [], "any", false, false, false, 182);
                        echo " 
\t\t\t\t\t\t\t\t";
                        // line 183
                        $context["label_etat"] = "danger";
                        echo " 
\t\t\t\t\t\t\t\t";
                        // line 184
                        $context["link"] = "app_installation_showpop";
                        // line 185
                        echo "\t\t\t\t\t\t\t\t";
                        $context["id_ent"] = twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "id", [], "any", false, false, false, 185);
                        // line 186
                        echo "\t\t\t\t\t\t\t\t";
                        if (($context["paiement"] ?? null)) {
                            // line 187
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["etat"] = "Paiement enregistré";
                            // line 188
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "paiementEffectue", [], "any", false, false, false, 188)) {
                                // line 189
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                $context["etat"] = "Paiement validé";
                                // line 190
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "etatRembousement", [], "any", false, false, false, 190)) {
                                    // line 191
                                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["etat"] = "Paiement validé - Remboursé";
                                    // line 192
                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 193
                                echo "\t\t\t\t\t\t\t\t\t";
                            }
                            // line 194
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["label_etat"] = "warning";
                            echo " 
\t\t\t\t\t\t\t\t";
                        }
                        // line 196
                        echo "\t\t\t\t\t\t\t\t";
                        if (($context["dossier"] ?? null)) {
                            // line 197
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["link"] = "app_dossier_showpop";
                            // line 198
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["id_ent"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 198);
                            // line 199
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["etat"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "etat", [], "any", false, false, false, 199);
                            // line 200
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 200)) {
                                // line 201
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                $context["etat"] = ("En attente " . twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "etat", [], "any", false, false, false, 201));
                                // line 202
                                echo "\t\t\t\t\t\t\t\t\t";
                            }
                            // line 203
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["label_etat"] = "success";
                            echo " 

\t\t\t\t\t\t\t\t\t";
                            // line 205
                            if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 205)) {
                                // line 206
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 206) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 206), "conclusion", [], "any", false, false, false, 206))) {
                                    // line 207
                                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["label_etat"] = " bg-vertf bg-success p-1";
                                    // line 208
                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 209
                                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["label_etat"] = " bg-danger p-1";
                                    // line 210
                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 211
                                echo "\t\t\t\t\t\t\t\t\t";
                            }
                            // line 212
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        // line 213
                        echo "
\t\t\t\t\t\t\t\t\t<span class=\"fs-8 badge badge-";
                        // line 214
                        echo twig_escape_filter($this->env, ($context["label_etat"] ?? null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($context["etat"] ?? null), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td align=\"right\">

\t\t\t\t\t\t\t";
                        // line 221
                        echo "\t\t\t\t\t\t\t<a class=\"me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link"] ?? null), ["id" => ($context["id_ent"] ?? null)]), "html", null, true);
                        echo "\" title=\"Détails de la demande\">
\t\t\t\t\t\t\t\t<svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"";
                        // line 222
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                        echo "\"></use></svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                        // line 224
                        if (($context["dossier"] ?? null)) {
                            // line 225
                            echo "\t\t\t\t\t\t\t\t<a class=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_histo", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 225)]), "html", null, true);
                            echo "\" title=\"Historique du traitement\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"#dc3545\"><use xlink:href=\"";
                            // line 226
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#hourglass-split"), "html", null, true);
                            echo "\"></use></svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                        } else {
                            // line 229
                            echo "\t\t\t\t\t\t\t\t<a class=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_histo", ["id" => twig_get_attribute($this->env, $this->source, $context["dem"], "id", [], "any", false, false, false, 229)]), "html", null, true);
                            echo "\" title=\"Historique du traitement\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"#dc3545\"><use xlink:href=\"";
                            // line 230
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#hourglass-split"), "html", null, true);
                            echo "\"></use></svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                        }
                        // line 233
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 236
                    echo "\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t\t";
                    // line 239
                    twig_get_attribute($this->env, $this->source, ($context["les_demande"] ?? null), "setPageRange", [0 => 1], "method", false, false, false, 239);
                    // line 240
                    echo "\t\t\t\t\t";
                    echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["les_demande"] ?? null), "pagination.html.twig");
                    echo "

\t\t\t\t";
                }
                // line 243
                echo "\t\t\t\t\t</div>

\t\t\t</div>
\t\t\t";
            }
            // line 247
            echo "
\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
\t";
        } else {
            // line 251
            echo "\t\t<div class=\"col-8 mt-5 offset-2 alert alert-danger fs-4 text-center\">
\t\t\tVotre adresse email n'a pas encore été confirmée !
\t\t\tVeuillez cliquer sur le lien envoyé sur votre boite mail pour valider votre inscription !
\t\t</div>
\t";
        }
        // line 256
        echo "
";
    }

    // line 259
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 260
        echo "<script>
    \$(document).ready(function () {

        ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "agence", 1 => "usage", 2 => "statut", 3 => "passage", 4 => "referent", 5 => "controleur"]);
        foreach ($context['_seq'] as $context["_key"] => $context["filtre"]) {
            // line 264
            echo "            \$('#val_";
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "').val(\$('#val_";
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').val())
            \$('#val_";
            // line 265
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').on('change', function() {
                optSel=\$('#val_";
            // line 266
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').find(\"option:selected\");
                valSel=optSel.val();
                \$('#val_";
            // line 268
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "').val(valSel);
                \$('#form_rech_list').submit();
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filtre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "
    });

</script>
";
    }

    public function getTemplateName()
    {
        return "main/stat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  686 => 272,  676 => 268,  671 => 266,  667 => 265,  660 => 264,  656 => 263,  651 => 260,  647 => 259,  642 => 256,  635 => 251,  629 => 247,  623 => 243,  616 => 240,  614 => 239,  609 => 236,  601 => 233,  595 => 230,  590 => 229,  584 => 226,  579 => 225,  577 => 224,  572 => 222,  567 => 221,  558 => 214,  555 => 213,  552 => 212,  549 => 211,  546 => 210,  543 => 209,  540 => 208,  537 => 207,  534 => 206,  532 => 205,  526 => 203,  523 => 202,  520 => 201,  517 => 200,  514 => 199,  511 => 198,  508 => 197,  505 => 196,  499 => 194,  496 => 193,  493 => 192,  490 => 191,  487 => 190,  484 => 189,  481 => 188,  478 => 187,  475 => 186,  472 => 185,  470 => 184,  466 => 183,  462 => 182,  458 => 180,  454 => 178,  448 => 176,  446 => 175,  442 => 173,  438 => 171,  432 => 169,  430 => 168,  426 => 166,  422 => 164,  416 => 162,  414 => 161,  410 => 159,  406 => 157,  404 => 156,  401 => 155,  399 => 154,  396 => 153,  394 => 152,  390 => 150,  384 => 148,  378 => 146,  376 => 145,  370 => 142,  366 => 140,  363 => 139,  360 => 138,  357 => 137,  354 => 136,  351 => 135,  348 => 134,  345 => 133,  342 => 132,  339 => 131,  335 => 130,  330 => 127,  328 => 126,  316 => 115,  300 => 101,  298 => 100,  291 => 96,  280 => 88,  274 => 86,  267 => 81,  260 => 76,  245 => 74,  241 => 73,  234 => 68,  219 => 66,  215 => 65,  208 => 60,  193 => 58,  189 => 57,  182 => 52,  167 => 50,  163 => 49,  156 => 44,  141 => 42,  137 => 41,  130 => 36,  115 => 34,  111 => 33,  105 => 29,  102 => 28,  98 => 25,  92 => 22,  86 => 19,  80 => 16,  77 => 15,  75 => 14,  70 => 12,  63 => 7,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/stat.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/stat.html.twig");
    }
}
