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

/* rapport/show.html.twig */
class __TwigTemplate_82e5e535cfe1d33d88de96bbff331fa9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rapport/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rapport/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rapport/show.html.twig", 1);
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

        echo "COSSUEL";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/rapport\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des rapports</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des rapports</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow bg-light card0 me-4 p-3 priority-4\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des rapports (";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_rapport"]) || array_key_exists("les_rapport", $context) ? $context["les_rapport"] : (function () { throw new RuntimeError('Variable "les_rapport" does not exist.', 16, $this->source); })())), "html", null, true);
        echo ")
                    ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_add");
            echo "\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                            <use xlink:href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#plus"), "html", null, true);
            echo "\"></use>
                        </svg>Ajout rapport
                    </a>
                    ";
        }
        // line 24
        echo "                </caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\" width=\"1%\" align=\"center\">Rubriques</th> 
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["les_rapport"]) || array_key_exists("les_rapport", $context) ? $context["les_rapport"] : (function () { throw new RuntimeError('Variable "les_rapport" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
            // line 33
            echo "                        ";
            $context["cur"] = "";
            // line 34
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34) == twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 34))) {
                // line 35
                echo "                            ";
                $context["cur"] = "bg-warning text-dark bg-opacity-25";
                // line 36
                echo "                        ";
            }
            // line 37
            echo "                        <tr class=\"";
            echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "\">
                            <td scope=\"row\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "libelle", [], "any", false, false, false, 38), "html", null, true);
            echo "</a></td>
                            <td align=\"center\">
                            ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reg"], "rubriques", [], "any", false, false, false, 40), "count", [], "any", false, false, false, 40) > 0)) {
                // line 41
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reg"], "rubriques", [], "any", false, false, false, 41), "count", [], "any", false, false, false, 41), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 43
                echo "                                <code class=\"text-danger text-opacity-50\">-</code>
                            ";
            }
            // line 45
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </tbody>
                </table>
            </div>
            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 54, $this->source); })()), "libelle", [], "any", false, false, false, 54), "html", null, true);
        echo "</span>
                        <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_showpdf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\" class=\"float-end mx-1\" title=\"Aperçu général du rapport\">
                            <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"red\">
                                <use xlink:href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
        echo "\"></use>
                            </svg>
                        </a>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-8\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 66, $this->source); })()), "libelle", [], "any", false, false, false, 66), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_index");
        echo "\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-return-left"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            ";
        // line 75
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 76
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 82
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 83
            echo "                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 89
        echo "                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des rubriques de ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 96, $this->source); })()), "libelle", [], "any", false, false, false, 96), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 96, $this->source); })()), "rubriques", [], "any", false, false, false, 96)), "html", null, true);
        echo ")
                            ";
        // line 97
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 98
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Rubrique</a>
                            ";
        }
        // line 100
        echo "                        </caption>
                        ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 101, $this->source); })()), "rubriques", [], "any", false, false, false, 101), "count", [], "any", false, false, false, 101)) {
            // line 102
            echo "                        <thead>
                            <tr>
                                <th scope=\"col\"></th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Points de vérification</th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 110, $this->source); })()), "rubriques", [], "any", false, false, false, 110));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 111
                echo "                                <tr>
                                    <td scope=\"row\" width=\"30\"><a href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 112)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "numero", [], "any", false, false, false, 112), "html", null, true);
                echo "</a></td>
                                    <td scope=\"row\"><a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "libelle", [], "any", false, false, false, 113), "html", null, true);
                echo "</a></td>
                                    <td align=\"center\">
                                    ";
                // line 115
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "pointverification", [], "any", false, false, false, 115), "count", [], "any", false, false, false, 115) > 0)) {
                    // line 116
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                    echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "pointverification", [], "any", false, false, false, 116), "count", [], "any", false, false, false, 116), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 118
                    echo "                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    ";
                }
                // line 120
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                        </tbody>
                        ";
        } else {
            // line 125
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun point de vérification !</span></td></tr>
                        ";
        }
        // line 127
        echo "                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "rapport/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 127,  343 => 125,  339 => 123,  331 => 120,  327 => 118,  319 => 116,  317 => 115,  310 => 113,  304 => 112,  301 => 111,  297 => 110,  287 => 102,  285 => 101,  282 => 100,  276 => 98,  274 => 97,  268 => 96,  259 => 89,  252 => 85,  248 => 83,  245 => 82,  238 => 78,  232 => 76,  230 => 75,  224 => 72,  219 => 70,  212 => 66,  200 => 57,  195 => 55,  191 => 54,  183 => 48,  175 => 45,  171 => 43,  163 => 41,  161 => 40,  154 => 38,  149 => 37,  146 => 36,  143 => 35,  140 => 34,  137 => 33,  133 => 32,  123 => 24,  116 => 20,  110 => 18,  108 => 17,  104 => 16,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/rapport\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des rapports</span>
            </a>
            <a href=\"{{ path('app_rapport_index') }}\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des rapports</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow bg-light card0 me-4 p-3 priority-4\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des rapports ({{ les_rapport|length }})
                    {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('app_rapport_add') }}\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#plus') }}\"></use>
                        </svg>Ajout rapport
                    </a>
                    {% endif %}
                </caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\" width=\"1%\" align=\"center\">Rubriques</th> 
                    </tr>
                </thead>
                <tbody>
                    {% for reg in les_rapport %}
                        {% set cur='' %}
                        {% if rapport.id==reg.id %}
                            {% set cur='bg-warning text-dark bg-opacity-25' %}
                        {% endif %}
                        <tr class=\"{{ cur }}\">
                            <td scope=\"row\"><a href=\"{{ path('app_rapport_show', {'id': reg.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ reg.libelle }}</a></td>
                            <td align=\"center\">
                            {% if reg.rubriques.count >0 %}
                                <a href=\"{{ path('app_rapport_show', {'id': reg.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ reg.rubriques.count }}</a>
                            {% else %}
                                <code class=\"text-danger text-opacity-50\">-</code>
                            {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
                </table>
            </div>
            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de {{ rapport.libelle }}</span>
                        <a href=\"{{ path('app_rapport_showpdf', {'id': rapport.id }) }}\" class=\"float-end mx-1\" title=\"Aperçu général du rapport\">
                            <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"red\">
                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                            </svg>
                        </a>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-8\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ rapport.libelle }}</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"{{ path('app_rapport_index') }}\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#arrow-return-left') }}\"></use>
                                </svg>
                            </a>
                            {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('app_rapport_edit', {'id': rapport.id }) }}\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                </svg>
                            </a>
                            {% endif %}
                            {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#trash') }}\"></use>
                                </svg>
                            </a>
                            {% endif %}
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des rubriques de {{ rapport.libelle }} ({{ rapport.rubriques|length }})
                            {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('app_rubrique_add', {'id': rapport.id }) }}\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Rubrique</a>
                            {% endif %}
                        </caption>
                        {% if rapport.rubriques.count %}
                        <thead>
                            <tr>
                                <th scope=\"col\"></th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Points de vérification</th> 
                            </tr>
                        </thead>
                        <tbody>
                            {% for dep in rapport.rubriques %}
                                <tr>
                                    <td scope=\"row\" width=\"30\"><a href=\"{{ path('app_rubrique_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ dep.numero }}</a></td>
                                    <td scope=\"row\"><a href=\"{{ path('app_rubrique_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none\">{{ dep.libelle }}</a></td>
                                    <td align=\"center\">
                                    {% if dep.pointverification.count >0 %}
                                        <a href=\"{{ path('app_rubrique_show', {'id': dep.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ dep.pointverification.count }}</a>
                                    {% else %}
                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                        {% else %}
                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun point de vérification !</span></td></tr>
                        {% endif %}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "rapport/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/rapport/show.html.twig");
    }
}
