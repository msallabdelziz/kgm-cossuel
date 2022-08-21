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
class __TwigTemplate_d0c6a1b0d9c940f55478bebf6a9bfa6d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/stat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/stat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/stat.html.twig", 1);
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

\t\t\t<ul class=\"nav nav-tabs mb-4 border-dark border-2\">
\t\t\t\t<li class=\"nav-item bg-warning mx-1 rounded-top mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" aria-current=\"page\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main", ["dash_page" => "perso"]);
            echo "\">Mon espace personnel</a>
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
                $context['_seq'] = twig_ensure_traversable((isset($context["les_agence"]) || array_key_exists("les_agence", $context) ? $context["les_agence"] : (function () { throw new RuntimeError('Variable "les_agence" does not exist.', 33, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                    // line 34
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 34), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 34) == (isset($context["val_agence"]) || array_key_exists("val_agence", $context) ? $context["val_agence"] : (function () { throw new RuntimeError('Variable "val_agence" does not exist.', 34, $this->source); })()))) {
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
                $context['_seq'] = twig_ensure_traversable((isset($context["les_passage"]) || array_key_exists("les_passage", $context) ? $context["les_passage"] : (function () { throw new RuntimeError('Variable "les_passage" does not exist.', 41, $this->source); })()));
                foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
                    // line 42
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
                    echo "\" ";
                    if (($context["obj"] == (isset($context["val_passage"]) || array_key_exists("val_passage", $context) ? $context["val_passage"] : (function () { throw new RuntimeError('Variable "val_passage" does not exist.', 42, $this->source); })()))) {
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
                $context['_seq'] = twig_ensure_traversable((isset($context["les_usage"]) || array_key_exists("les_usage", $context) ? $context["les_usage"] : (function () { throw new RuntimeError('Variable "les_usage" does not exist.', 49, $this->source); })()));
                foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
                    // line 50
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
                    echo "\" ";
                    if (($context["obj"] == (isset($context["val_usage"]) || array_key_exists("val_usage", $context) ? $context["val_usage"] : (function () { throw new RuntimeError('Variable "val_usage" does not exist.', 50, $this->source); })()))) {
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
                $context['_seq'] = twig_ensure_traversable((isset($context["les_referent"]) || array_key_exists("les_referent", $context) ? $context["les_referent"] : (function () { throw new RuntimeError('Variable "les_referent" does not exist.', 57, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                    // line 58
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 58), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 58) == (isset($context["val_referent"]) || array_key_exists("val_referent", $context) ? $context["val_referent"] : (function () { throw new RuntimeError('Variable "val_referent" does not exist.', 58, $this->source); })()))) {
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
                $context['_seq'] = twig_ensure_traversable((isset($context["les_controleur"]) || array_key_exists("les_controleur", $context) ? $context["les_controleur"] : (function () { throw new RuntimeError('Variable "les_controleur" does not exist.', 65, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                    // line 66
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 66), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 66) == (isset($context["val_controleur"]) || array_key_exists("val_controleur", $context) ? $context["val_controleur"] : (function () { throw new RuntimeError('Variable "val_controleur" does not exist.', 66, $this->source); })()))) {
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
                $context['_seq'] = twig_ensure_traversable((isset($context["les_statut"]) || array_key_exists("les_statut", $context) ? $context["les_statut"] : (function () { throw new RuntimeError('Variable "les_statut" does not exist.', 73, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                    // line 74
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
                    echo "\" ";
                    if (($context["obj"] == (isset($context["val_statut"]) || array_key_exists("val_statut", $context) ? $context["val_statut"] : (function () { throw new RuntimeError('Variable "val_statut" does not exist.', 74, $this->source); })()))) {
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
                    echo twig_escape_filter($this->env, (isset($context["val_rech"]) || array_key_exists("val_rech", $context) ? $context["val_rech"] : (function () { throw new RuntimeError('Variable "val_rech" does not exist.', 81, $this->source); })()), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_demande"]) || array_key_exists("les_demande", $context) ? $context["les_demande"] : (function () { throw new RuntimeError('Variable "les_demande" does not exist.', 96, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 96), "html", null, true);
                echo ")</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t<hr></span>
            \t";
                // line 100
                if ((twig_length_filter($this->env, (isset($context["les_demande"]) || array_key_exists("les_demande", $context) ? $context["les_demande"] : (function () { throw new RuntimeError('Variable "les_demande" does not exist.', 100, $this->source); })())) == 0)) {
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
                    $context['_seq'] = twig_ensure_traversable((isset($context["les_demande"]) || array_key_exists("les_demande", $context) ? $context["les_demande"] : (function () { throw new RuntimeError('Variable "les_demande" does not exist.', 130, $this->source); })()));
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
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 134, $this->source); })()), "step", [], "any", false, false, false, 134) < 7)) {
                            // line 135
                            echo "\t\t\t\t\t\t\t";
                            $context["badge_etat"] = "danger";
                            // line 136
                            echo "\t\t\t\t\t\t";
                        }
                        // line 137
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 137, $this->source); })()), "step", [], "any", false, false, false, 137) <= 7)) {
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
                        if (((twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 145, $this->source); })()), "step", [], "any", false, false, false, 145) >= 7) && (twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 145, $this->source); })()), "etat", [], "any", false, false, false, 145) != "Saisie"))) {
                            // line 146
                            echo "\t\t\t\t\t\t\t\t<span class=\"badge text-secondary fs-8\">";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 146, $this->source); })()), "demandeCourante", [], "any", false, false, false, 146), "dateCreation", [], "any", false, false, false, 146), "d-m-Y"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 148
                            echo "\t\t\t\t\t\t\t\t<span class=\"badge text-secondary fs-8\">";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 148, $this->source); })()), "createdAt", [], "any", false, false, false, 148), "d-m-Y"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 150
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-3\">
\t\t\t\t\t\t\t\t";
                        // line 152
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 152, $this->source); })()), "usages", [], "any", false, false, false, 152) == "domestique")) {
                            // line 153
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-warning fs-8 fw-bold\">Domestique</span>
\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 154
(isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 154, $this->source); })()), "usages", [], "any", false, false, false, 154) == "non_domestique")) {
                            // line 155
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 156
(isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 156, $this->source); })()), "usages", [], "any", false, false, false, 156) == "erp_ert")) {
                            // line 157
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 159
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-4\">
\t\t\t\t\t\t\t\t";
                        // line 161
                        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 161, $this->source); })()), "localite", [], "any", false, false, false, 161)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 161, $this->source); })()), "localite", [], "any", false, false, false, 161), "agence", [], "any", false, false, false, 161)))) {
                            // line 162
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 162, $this->source); })()), "localite", [], "any", false, false, false, 162), "agence", [], "any", false, false, false, 162), "nom", [], "any", false, false, false, 162), "html", null, true);
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
                        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 168, $this->source); })()), "localite", [], "any", false, false, false, 168))) {
                            // line 169
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 169, $this->source); })()), "localite", [], "any", false, false, false, 169), "nom", [], "any", false, false, false, 169), "html", null, true);
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
                        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 175, $this->source); })()), "typeconstruction", [], "any", false, false, false, 175))) {
                            // line 176
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 176, $this->source); })()), "typeconstruction", [], "any", false, false, false, 176), "nom", [], "any", false, false, false, 176), "html", null, true);
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
                        $context["etat"] = twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 182, $this->source); })()), "etat", [], "any", false, false, false, 182);
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
                        $context["id_ent"] = twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 185, $this->source); })()), "id", [], "any", false, false, false, 185);
                        // line 186
                        echo "\t\t\t\t\t\t\t\t";
                        if ((isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 186, $this->source); })())) {
                            // line 187
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["etat"] = "Paiement enregistré";
                            // line 188
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 188, $this->source); })()), "paiementEffectue", [], "any", false, false, false, 188)) {
                                // line 189
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                $context["etat"] = "Paiement validé";
                                // line 190
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 190, $this->source); })()), "etatRembousement", [], "any", false, false, false, 190)) {
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
                        if ((isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 196, $this->source); })())) {
                            // line 197
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["link"] = "app_dossier_showpop";
                            // line 198
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["id_ent"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 198, $this->source); })()), "id", [], "any", false, false, false, 198);
                            // line 199
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["etat"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 199, $this->source); })()), "etat", [], "any", false, false, false, 199);
                            // line 200
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 200, $this->source); })()), "attestation", [], "any", false, false, false, 200)) {
                                // line 201
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                $context["etat"] = ("En attente " . twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 201, $this->source); })()), "etat", [], "any", false, false, false, 201));
                                // line 202
                                echo "\t\t\t\t\t\t\t\t\t";
                            }
                            // line 203
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["label_etat"] = "success";
                            echo " 

\t\t\t\t\t\t\t\t\t";
                            // line 205
                            if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 205, $this->source); })()), "attestation", [], "any", false, false, false, 205)) {
                                // line 206
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 206, $this->source); })()), "visiteCourante", [], "any", false, false, false, 206) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 206, $this->source); })()), "visiteCourante", [], "any", false, false, false, 206), "conclusion", [], "any", false, false, false, 206))) {
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
                        echo twig_escape_filter($this->env, (isset($context["label_etat"]) || array_key_exists("label_etat", $context) ? $context["label_etat"] : (function () { throw new RuntimeError('Variable "label_etat" does not exist.', 214, $this->source); })()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 214, $this->source); })()), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td align=\"right\">

\t\t\t\t\t\t\t";
                        // line 221
                        echo "\t\t\t\t\t\t\t<a class=\"me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 221, $this->source); })()), ["id" => (isset($context["id_ent"]) || array_key_exists("id_ent", $context) ? $context["id_ent"] : (function () { throw new RuntimeError('Variable "id_ent" does not exist.', 221, $this->source); })())]), "html", null, true);
                        echo "\" title=\"Détails de la demande\">
\t\t\t\t\t\t\t\t<svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"";
                        // line 222
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                        echo "\"></use></svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                        // line 224
                        if ((isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 224, $this->source); })())) {
                            // line 225
                            echo "\t\t\t\t\t\t\t\t<a class=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_histo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 225, $this->source); })()), "id", [], "any", false, false, false, 225)]), "html", null, true);
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
                    twig_get_attribute($this->env, $this->source, (isset($context["les_demande"]) || array_key_exists("les_demande", $context) ? $context["les_demande"] : (function () { throw new RuntimeError('Variable "les_demande" does not exist.', 239, $this->source); })()), "setPageRange", [0 => 1], "method", false, false, false, 239);
                    // line 240
                    echo "\t\t\t\t\t";
                    echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["les_demande"]) || array_key_exists("les_demande", $context) ? $context["les_demande"] : (function () { throw new RuntimeError('Variable "les_demande" does not exist.', 240, $this->source); })()), "pagination.html.twig");
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 259
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  728 => 272,  718 => 268,  713 => 266,  709 => 265,  702 => 264,  698 => 263,  693 => 260,  683 => 259,  672 => 256,  665 => 251,  659 => 247,  653 => 243,  646 => 240,  644 => 239,  639 => 236,  631 => 233,  625 => 230,  620 => 229,  614 => 226,  609 => 225,  607 => 224,  602 => 222,  597 => 221,  588 => 214,  585 => 213,  582 => 212,  579 => 211,  576 => 210,  573 => 209,  570 => 208,  567 => 207,  564 => 206,  562 => 205,  556 => 203,  553 => 202,  550 => 201,  547 => 200,  544 => 199,  541 => 198,  538 => 197,  535 => 196,  529 => 194,  526 => 193,  523 => 192,  520 => 191,  517 => 190,  514 => 189,  511 => 188,  508 => 187,  505 => 186,  502 => 185,  500 => 184,  496 => 183,  492 => 182,  488 => 180,  484 => 178,  478 => 176,  476 => 175,  472 => 173,  468 => 171,  462 => 169,  460 => 168,  456 => 166,  452 => 164,  446 => 162,  444 => 161,  440 => 159,  436 => 157,  434 => 156,  431 => 155,  429 => 154,  426 => 153,  424 => 152,  420 => 150,  414 => 148,  408 => 146,  406 => 145,  400 => 142,  396 => 140,  393 => 139,  390 => 138,  387 => 137,  384 => 136,  381 => 135,  378 => 134,  375 => 133,  372 => 132,  369 => 131,  365 => 130,  360 => 127,  358 => 126,  346 => 115,  330 => 101,  328 => 100,  321 => 96,  310 => 88,  304 => 86,  297 => 81,  290 => 76,  275 => 74,  271 => 73,  264 => 68,  249 => 66,  245 => 65,  238 => 60,  223 => 58,  219 => 57,  212 => 52,  197 => 50,  193 => 49,  186 => 44,  171 => 42,  167 => 41,  160 => 36,  145 => 34,  141 => 33,  135 => 29,  132 => 28,  128 => 25,  122 => 22,  116 => 19,  110 => 16,  107 => 15,  105 => 14,  100 => 12,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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

\t\t\t<ul class=\"nav nav-tabs mb-4 border-dark border-2\">
\t\t\t\t<li class=\"nav-item bg-warning mx-1 rounded-top mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" aria-current=\"page\" href=\"{{ path('main', {'dash_page': 'perso'}) }}\">Mon espace personnel</a>
\t\t\t\t</li>
\t\t\t\t{% if  app.user.roles[0] != \"ROLE_PUBLIC\" %}
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"{{ path('main', {'dash_page': 'stat_dem'}) }}\">Statistiques sur les demandes</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"{{ path('main', {'dash_page': 'stat_paye'}) }}\">Statistiques sur les paiements</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-dark rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link fw-bold text-light\" href=\"{{ path('stat') }}\">Consultation des demandes</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>

\t\t\t{# {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_PUBLIC') %} #}
\t\t\t{% if is_granted('ROLE_USER') %}
            <div align=\"right\" class=\"row priority-3 fs-5 mt-0 pt-0 caption fw-light\" style=\"\">
                <div class=\"col-2 fs-6\">
                    <select name=\"val_agence0\" id=\"val_agence0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Toutes les Agences ...</option>
                        {% for obj in les_agence %}
                            <option value=\"{{obj.id}}\" {% if obj.id == val_agence %} selected=\"selected\"{% endif %}>{{obj.nom}}</option>
                        {% endfor %}
                    </select>
                </div>
\t\t\t\t<div class=\"col-2 fs-6\">
\t\t\t\t\t<select name=\"val_passage0\" id=\"val_passage0\" class=\"form-select form-select-sm border-warning py-1\">
\t\t\t\t\t\t<option value=\"\">Tous les passages ...</option>
\t\t\t\t\t\t{% for obj, lib_obj in les_passage %}
\t\t\t\t\t\t\t<option value=\"{{obj}}\" {% if obj == val_passage %} selected=\"selected\"{% endif %}>{{lib_obj}}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t</div>
                <div class=\"col-2 fs-6\">
                    <select name=\"val_usage0\" id=\"val_usage0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Tous les Usages ...</option>
                        {% for obj,lib_obj in les_usage %}
                            <option value=\"{{obj}}\" {% if obj == val_usage %} selected=\"selected\"{% endif %}>{{lib_obj}}</option>
                        {% endfor %}
                    </select>
                </div>
\t\t\t\t<div class=\"col-2 fs-6\">
\t\t\t\t\t<select name=\"val_referent0\" id=\"val_referent0\" class=\"form-select form-select-sm border-warning py-1\">
\t\t\t\t\t\t<option value=\"\">Tous les referents ...</option>
\t\t\t\t\t\t{% for obj in les_referent %}
\t\t\t\t\t\t\t<option value=\"{{obj.id}}\" {% if obj.id == val_referent %} selected=\"selected\"{% endif %}>{{obj}}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2 fs-6\">
\t\t\t\t\t<select name=\"val_controleur0\" id=\"val_controleur0\" class=\"form-select form-select-sm border-warning py-1\">
\t\t\t\t\t\t<option value=\"\">Tous les controleurs ...</option>
\t\t\t\t\t\t{% for obj in les_controleur %}
\t\t\t\t\t\t\t<option value=\"{{obj.id}}\" {% if obj.id == val_controleur %} selected=\"selected\"{% endif %}>{{obj}}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t</div>
                <div class=\"col-2 fs-6\">
                    <select name=\"val_statut0\" id=\"val_statut0\" class=\"form-select form-select-sm border-success py-1\">
                        <option value=\"\">Tous les statuts ...</option>
                        {% for obj in les_statut %}
                            <option value=\"{{obj}}\" {% if obj == val_statut %} selected=\"selected\"{% endif %}>{{obj}}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            <div class=\"clear\"></div>
\t\t\t<div class=\"row m-3\">
                <div class=\"offset-lg-9 col-lg-2 col-6 offset-5 fs-6\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"{% if val_rech is defined %}{{ val_rech }}{% endif %}\" /></div>
                <div class=\"col-1 col-lg-1 priority-3\" align=\"right\">
                    {# <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"#c32424\">
                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#filetype-pdf') }}\"></use>
                    </svg> #}
                    <a href=\"{{path('stat_excel')}}\" class=\"ms-1\">
                        <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"green\">
                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#filetype-xls') }}\"></use>
                        </svg>
                    </a>
                </div>
\t\t\t</div>
\t\t\t<div class=\"row mt-2\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t<h4 class=\"fw-bold\">Historique Demandes soumises ({{ les_demande.getTotalItemCount }})</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t<hr></span>
            \t{% if les_demande|length == 0 %}
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
\t\t\t\t\t\t<th class=\"priority-3\" scope=\"col\">Date Demande</th> 
\t\t\t\t\t\t<th class=\"priority-3\" scope=\"col\">Usage</th> 
\t\t\t\t\t\t<th class=\"priority-4\">Agence</th>
\t\t\t\t\t\t<th class=\"priority-5\">Localité</th>
\t\t\t\t\t\t<th class=\"priority-5\">Type Construction</th>
\t\t\t\t\t\t<th class=\"priority-2\">Statut demande</th>
\t\t\t\t\t\t{# <th scope=\"col\">Agence</th> #}
\t\t\t\t\t\t{# <th class=\"text-center\" scope=\"col\">Départements</th>  #}
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for dem in les_demande %}
\t\t\t\t\t\t{% set ag = dem.installation %}
\t\t\t\t\t\t{% set paiement = dem.paiement %}
\t\t\t\t\t\t{% set dossier = dem.dossier %}
\t\t\t\t\t\t{% if ag.step < 7 %}
\t\t\t\t\t\t\t{% set badge_etat = \"danger\" %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if ag.step <= 7 %}
\t\t\t\t\t\t\t{% set badge_etat = \"warning\" %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\" class=\"fw-bold\">
\t\t\t\t\t\t\t\t{{ dem.numero }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-3\">
\t\t\t\t\t\t\t\t{% if ag.step>=7 and ag.etat!=\"Saisie\" %}
\t\t\t\t\t\t\t\t<span class=\"badge text-secondary fs-8\">{{ ag.demandeCourante.dateCreation | date(\"d-m-Y\") }}</span>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"badge text-secondary fs-8\">{{ ag.createdAt | date(\"d-m-Y\") }}</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-3\">
\t\t\t\t\t\t\t\t{% if ag.usages == \"domestique\" %}
\t\t\t\t\t\t\t\t\t<span class=\"text-warning fs-8 fw-bold\">Domestique</span>
\t\t\t\t\t\t\t\t{% elseif ag.usages == \"non_domestique\" %}
\t\t\t\t\t\t\t\t\t<span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
\t\t\t\t\t\t\t\t{% elseif ag.usages == \"erp_ert\" %}
\t\t\t\t\t\t\t\t\t<span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-4\">
\t\t\t\t\t\t\t\t{% if ag.localite is not null and ag.localite.agence is not null %}
\t\t\t\t\t\t\t\t\t{{ ag.localite.agence.nom }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-5\">
\t\t\t\t\t\t\t\t{% if ag.localite is not null %}
\t\t\t\t\t\t\t\t\t{{ ag.localite.nom }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-5\">
\t\t\t\t\t\t\t\t{% if ag.typeconstruction is not null %}
\t\t\t\t\t\t\t\t\t{{ ag.typeconstruction.nom }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-2\">
\t\t\t\t\t\t\t\t{% set etat = ag.etat %} 
\t\t\t\t\t\t\t\t{% set label_etat = 'danger' %} 
\t\t\t\t\t\t\t\t{% set link = 'app_installation_showpop' %}
\t\t\t\t\t\t\t\t{% set id_ent = ag.id %}
\t\t\t\t\t\t\t\t{% if paiement %}
\t\t\t\t\t\t\t\t\t{% set etat = 'Paiement enregistré' %}
\t\t\t\t\t\t\t\t\t{% if paiement.paiementEffectue %}
\t\t\t\t\t\t\t\t\t\t{% set etat = 'Paiement validé' %}
\t\t\t\t\t\t\t\t\t\t{% if paiement.etatRembousement %}
\t\t\t\t\t\t\t\t\t\t\t{% set etat = 'Paiement validé - Remboursé' %}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% set label_etat = 'warning' %} 
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if dossier %}
\t\t\t\t\t\t\t\t\t{% set link = 'app_dossier_showpop' %}
\t\t\t\t\t\t\t\t\t{% set id_ent = dossier.id %}
\t\t\t\t\t\t\t\t\t{% set etat = dossier.etat %}
\t\t\t\t\t\t\t\t\t{% if not dossier.attestation %}
\t\t\t\t\t\t\t\t\t\t{% set etat = 'En attente ' ~ dossier.etat %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% set label_etat = 'success' %} 

\t\t\t\t\t\t\t\t\t{% if dossier.attestation %}
\t\t\t\t\t\t\t\t\t\t{% if dossier.visiteCourante and dossier.visiteCourante.conclusion %}
\t\t\t\t\t\t\t\t\t\t\t{% set label_etat = \" bg-vertf bg-success p-1\" %}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t{% set label_etat = \" bg-danger p-1\" %}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t<span class=\"fs-8 badge badge-{{label_etat}}\">{{ etat }}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td align=\"right\">

\t\t\t\t\t\t\t{# <a class=\"me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('app_installation_showpdf', {'id': ag.id}) }}\" title=\"Formulaire de demande\">
\t\t\t\t\t\t\t\t<svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"red\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#file-pdf\") }}\"></use></svg>
\t\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t\t<a class=\"me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path(link, {'id': id_ent}) }}\" title=\"Détails de la demande\">
\t\t\t\t\t\t\t\t<svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#search\") }}\"></use></svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% if dossier %}
\t\t\t\t\t\t\t\t<a class=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"{{ path('app_dossier_histo', {'id': dossier.id}) }}\" title=\"Historique du traitement\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"#dc3545\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#hourglass-split\") }}\"></use></svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a class=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"{{ path('app_demande_histo', {'id': dem.id}) }}\" title=\"Historique du traitement\">
\t\t\t\t\t\t\t\t\t<svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"#dc3545\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#hourglass-split\") }}\"></use></svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t\t{% do les_demande.setPageRange(1)%}
\t\t\t\t\t{{ knp_pagination_render(les_demande, 'pagination.html.twig')}}

\t\t\t\t{% endif %}
\t\t\t\t\t</div>

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
<script>
    \$(document).ready(function () {

        {% for filtre in [\"agence\", \"usage\", \"statut\", \"passage\", \"referent\", \"controleur\"] %}
            \$('#val_{{filtre}}').val(\$('#val_{{filtre}}0').val())
            \$('#val_{{filtre}}0').on('change', function() {
                optSel=\$('#val_{{filtre}}0').find(\"option:selected\");
                valSel=optSel.val();
                \$('#val_{{filtre}}').val(valSel);
                \$('#form_rech_list').submit();
            });
        {% endfor %}

    });

</script>
{% endblock %}
", "main/stat.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/stat.html.twig");
    }
}
