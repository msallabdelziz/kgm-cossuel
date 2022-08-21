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
class __TwigTemplate_bfcacc9f4ac3871ec0fd45e007168df4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index_paye.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index_paye.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index_paye.html.twig", 1);
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
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 41, $this->source); })()) == "last1")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last1\">Aujourd'hui</option>
\t\t\t\t\t\t\t\t<option ";
            // line 42
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 42, $this->source); })()) == "last7")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last7\">7 derniers jours</option>
\t\t\t\t\t\t\t\t<option ";
            // line 43
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 43, $this->source); })()) == "last15")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last15\">15 derniers jours</option>
\t\t\t\t\t\t\t\t<option ";
            // line 44
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 44, $this->source); })()) == "last30")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"last30\">30 derniers jours</option>
\t\t\t\t\t\t\t\t<option ";
            // line 45
            if (((isset($context["perio_stat"]) || array_key_exists("perio_stat", $context) ? $context["perio_stat"] : (function () { throw new RuntimeError('Variable "perio_stat" does not exist.', 45, $this->source); })()) == "all")) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["les_mode"]) || array_key_exists("les_mode", $context) ? $context["les_mode"] : (function () { throw new RuntimeError('Variable "les_mode" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["mode"] => $context["lib_mode"]) {
                // line 53
                echo "\t\t\t\t\t";
                $context["col"] = twig_get_attribute($this->env, $this->source, (isset($context["les_col"]) || array_key_exists("les_col", $context) ? $context["les_col"] : (function () { throw new RuntimeError('Variable "les_col" does not exist.', 53, $this->source); })()), (isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 53, $this->source); })()), [], "array", false, false, false, 53);
                // line 54
                echo "\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-3 mt-2\">
\t\t\t\t\t\t";
                // line 55
                if (((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 55, $this->source); })()) == 0)) {
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 65, $this->source); })()), $context["mode"], [], "array", false, false, false, 65), 0, [], "array", false, false, false, 65), 0, [], "array", false, false, false, 65), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"\">";
                // line 66
                echo twig_escape_filter($this->env, $context["lib_mode"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\"><span class=\"number mb-0 fs-7 badge bg-success p-1\">";
                // line 67
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 67, $this->source); })()), $context["mode"], [], "array", false, false, false, 67), 0, [], "array", false, false, false, 67), 1, [], "array", false, false, false, 67), 0, ",", " "), "html", null, true);
                echo " FCFA</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-8 mt-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number p-1 mb-0 fs-8 badge bg-warning text-dark\">";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 70, $this->source); })()), $context["mode"], [], "array", false, false, false, 70), 1, [], "array", false, false, false, 70), 0, [], "array", false, false, false, 70), "html", null, true);
                echo "</span> <span class=\"text-dark px-1 rounded\">Domestiques</span> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\"><span class=\"number mb-0 me-3 fs-8 badge badge-success p-1\">";
                // line 71
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 71, $this->source); })()), $context["mode"], [], "array", false, false, false, 71), 1, [], "array", false, false, false, 71), 1, [], "array", false, false, false, 71), 0, ",", " "), "html", null, true);
                echo " FCFA</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-8 mt-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number p-1 mb-0 fs-8 badge bg-primary bg-opacity-50\">";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 74, $this->source); })()), $context["mode"], [], "array", false, false, false, 74), 2, [], "array", false, false, false, 74), 0, [], "array", false, false, false, 74), "html", null, true);
                echo "</span> <span class=\"text-dark px-1 rounded\">Professionnelles</span> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\"><span class=\"number mb-0 me-3 fs-8 badge badge-success p-1\">";
                // line 75
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 75, $this->source); })()), $context["mode"], [], "array", false, false, false, 75), 2, [], "array", false, false, false, 75), 1, [], "array", false, false, false, 75), 0, ",", " "), "html", null, true);
                echo " FCFA</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-8 mt-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number p-1 mb-0 fs-8 badge bg-primary\">";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 78, $this->source); })()), $context["mode"], [], "array", false, false, false, 78), 3, [], "array", false, false, false, 78), 0, [], "array", false, false, false, 78), "html", null, true);
                echo "</span> <span class=\"text-dark px-1 rounded\">ERP - ERT</span> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\"><span class=\"number mb-0 me-3 fs-8 badge badge-success p-1\">";
                // line 79
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 79, $this->source); })()), $context["mode"], [], "array", false, false, false, 79), 3, [], "array", false, false, false, 79), 1, [], "array", false, false, false, 79), 0, ",", " "), "html", null, true);
                echo " FCFA</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"m-0 pt-2\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"pieC2";
                // line 82
                echo twig_escape_filter($this->env, ((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 82, $this->source); })()) + 1), "html", null, true);
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
                $context["ix"] = ((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 91, $this->source); })()) + 1);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
            $context["code"] = twig_get_attribute($this->env, $this->source, (isset($context["les_code"]) || array_key_exists("les_code", $context) ? $context["les_code"] : (function () { throw new RuntimeError('Variable "les_code" does not exist.', 122, $this->source); })()), $context["ix"], [], "array", false, false, false, 122);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 136, $this->source); })()), (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 136, $this->source); })()), [], "array", false, false, false, 136), 1, [], "array", false, false, false, 136), 1, [], "array", false, false, false, 136), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\"color\": \"#febf04\"
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\"label\": \"Professionnel\",
\t\t\t\t\t\t\t\"value\": ";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 141, $this->source); })()), (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 141, $this->source); })()), [], "array", false, false, false, 141), 2, [], "array", false, false, false, 141), 1, [], "array", false, false, false, 141), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\"color\": \"#508af5\"
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\"label\": \"ERP - ERT\",
\t\t\t\t\t\t\t\"value\": ";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat_paiement"]) || array_key_exists("stat_paiement", $context) ? $context["stat_paiement"] : (function () { throw new RuntimeError('Variable "stat_paiement" does not exist.', 146, $this->source); })()), (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 146, $this->source); })()), [], "array", false, false, false, 146), 3, [], "array", false, false, false, 146), 1, [], "array", false, false, false, 146), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  406 => 165,  381 => 146,  373 => 141,  365 => 136,  346 => 123,  343 => 122,  339 => 121,  330 => 114,  328 => 113,  326 => 112,  324 => 111,  322 => 110,  319 => 109,  309 => 108,  298 => 105,  291 => 100,  282 => 93,  276 => 92,  274 => 91,  262 => 82,  256 => 79,  252 => 78,  246 => 75,  242 => 74,  236 => 71,  232 => 70,  226 => 67,  222 => 66,  218 => 65,  214 => 63,  210 => 60,  206 => 58,  202 => 56,  200 => 55,  197 => 54,  194 => 53,  189 => 52,  187 => 51,  176 => 45,  170 => 44,  164 => 43,  158 => 42,  152 => 41,  144 => 35,  141 => 34,  139 => 33,  135 => 31,  129 => 28,  123 => 25,  117 => 22,  114 => 21,  112 => 20,  107 => 18,  100 => 13,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"{{ path('main', {'dash_page': 'stat_dem'}) }}\">Statistiques sur les demandes</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-dark rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link fw-bold text-light\" href=\"{{ path('main', {'dash_page': 'stat_paye'}) }}\">Statistiques sur les paiements</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item bg-warning rounded-top mx-1 mb-0 mt-1\">
\t\t\t\t\t<a class=\"nav-link text-dark\" href=\"{{ path('stat') }}\">Consultation des demandes</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>

\t\t\t\t\t{% set les_mode = {\"All\":\"Total Paiements\", \"Espèce\":\"Espèces\", \"Chèque\":\"Chèque\", \"Autre\":\"Autre\"} %}
\t\t\t\t\t{% set les_col = [\"green bg-opacity-50\", \"success bg-opacity-50\", \"warning bg-opacity-25\", \"danger bg-opacity-50\"] %}

\t\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">
\t\t\t\t\t\t<div class=\"float-start mr-20\">Situation des paiements par mode et usage installation</div>
\t\t\t\t\t\t<form method=\"post\" id=\"form_dash_perio\" class=\"float-end\" action=\"\">
\t\t\t\t\t\t\t<select name=\"val_dash_perio\" id=\"val_dash_perio\" class=\"fw-bold bg-success bg-opacity-25 form-select-sm\">
\t\t\t\t\t\t\t\t<option {% if perio_stat == 'last1' %} selected=\"selected\" {% endif %} value=\"last1\">Aujourd'hui</option>
\t\t\t\t\t\t\t\t<option {% if perio_stat == 'last7' %} selected=\"selected\" {% endif %} value=\"last7\">7 derniers jours</option>
\t\t\t\t\t\t\t\t<option {% if perio_stat == 'last15' %} selected=\"selected\" {% endif %} value=\"last15\">15 derniers jours</option>
\t\t\t\t\t\t\t\t<option {% if perio_stat == 'last30' %} selected=\"selected\" {% endif %} value=\"last30\">30 derniers jours</option>
\t\t\t\t\t\t\t\t<option {% if perio_stat == 'all' %} selected=\"selected\" {% endif %} value=\"all\">Toutes les périodes</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</form>
\t\t\t\t\t</h5>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% set ix = 0 %}
\t\t\t\t\t{% for mode,lib_mode in les_mode  %}
\t\t\t\t\t{% set col = les_col[ix] %}
\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-3 mt-2\">
\t\t\t\t\t\t{% if ix==0 %}
\t\t\t\t\t\t<div class=\"card bg-warning bg-opacity-50 p-2 card-stat shadow\">
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"card bg-dark bg-opacity-25 p-2 card-stat shadow\">
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"row px-2\">
\t\t\t\t\t\t\t\t\t{# <p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': mode}) }}\" title=\"Afficher la liste des demandes\"> #}
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"border-bottom border-secondary mb-1 pb-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 p-1 badge badge-danger py-1\">{{ stat_paiement[mode][0][0] }}</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"\">{{lib_mode}}</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\"><span class=\"number mb-0 fs-7 badge bg-success p-1\">{{ stat_paiement[mode][0][1]|number_format(0, ',', ' ') }} FCFA</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-8 mt-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number p-1 mb-0 fs-8 badge bg-warning text-dark\">{{ stat_paiement[mode][1][0] }}</span> <span class=\"text-dark px-1 rounded\">Domestiques</span> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\"><span class=\"number mb-0 me-3 fs-8 badge badge-success p-1\">{{ stat_paiement[mode][1][1]|number_format(0, ',', ' ') }} FCFA</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-8 mt-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number p-1 mb-0 fs-8 badge bg-primary bg-opacity-50\">{{ stat_paiement[mode][2][0] }}</span> <span class=\"text-dark px-1 rounded\">Professionnelles</span> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\"><span class=\"number mb-0 me-3 fs-8 badge badge-success p-1\">{{ stat_paiement[mode][2][1]|number_format(0, ',', ' ') }} FCFA</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 fs-8 mt-1\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number p-1 mb-0 fs-8 badge bg-primary\">{{ stat_paiement[mode][3][0] }}</span> <span class=\"text-dark px-1 rounded\">ERP - ERT</span> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\"><span class=\"number mb-0 me-3 fs-8 badge badge-success p-1\">{{ stat_paiement[mode][3][1]|number_format(0, ',', ' ') }} FCFA</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"m-0 pt-2\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"pieC2{{(ix+1)}}\" class=\"p-2 mt-2 shadow border bg-light bg-opacity-50 rounded\" align=\"center\"></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% set ix = ix+1 %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- end col -->
\t\t\t
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
{% set les_mode = {\"All\":\"Total Paiements\", \"Espèce\":\"Paiement Espèces\", \"Chèque\":\"Paiement Chèque\", \"Autre\":\"Paiement Autre\"} %}
{% set les_code = {\"1\":\"All\", \"2\":\"Espèce\", \"3\":\"Chèque\", \"4\":\"Autre\"} %}
<script>
    \$(document).ready(function () {

        \$('#val_dash_perio').on('change', function() {
            \$(\"#form_dash_perio\").submit();
        });

\t\t{% for ix in [1, 2, 3, 4] %}
\t\t\t{% set code = les_code[ix] %}
\t\t\tvar pieC2{{ix}} = new d3pie(\"pieC2{{ix}}\", {
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
\t\t\t\t\t\t\t\"value\": {{ stat_paiement[code][1][1] }},
\t\t\t\t\t\t\t\"color\": \"#febf04\"
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\"label\": \"Professionnel\",
\t\t\t\t\t\t\t\"value\": {{ stat_paiement[code][2][1] }},
\t\t\t\t\t\t\t\"color\": \"#508af5\"
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t\t\"label\": \"ERP - ERT\",
\t\t\t\t\t\t\t\"value\": {{ stat_paiement[code][3][1] }},
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

\t\t{% endfor %}

    });
</script>

{% endblock %}
", "main/index_paye.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/index_paye.html.twig");
    }
}
