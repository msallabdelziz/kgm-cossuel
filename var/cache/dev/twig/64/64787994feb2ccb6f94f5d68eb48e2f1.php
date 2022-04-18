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

/* region/show.html.twig */
class __TwigTemplate_94cb410b06d5a5aab75deaaad8b46f92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "region/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "region/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "region/show.html.twig", 1);
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

        echo "Administration";
        
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
        echo "    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/region\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des régions</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_index");
        echo "\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Régions</a>
        </header>
        <div class=\"row\">
            <div class=\"col-6 bg-body shadow bg-light\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des régions (";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_region"]) || array_key_exists("les_region", $context) ? $context["les_region"] : (function () { throw new RuntimeError('Variable "les_region" does not exist.', 16, $this->source); })())), "html", null, true);
        echo ")
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_add");
        echo "\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Région</a>
                </caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Code</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\" width=\"1%\" align=\"center\">Départements</th> 
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["les_region"]) || array_key_exists("les_region", $context) ? $context["les_region"] : (function () { throw new RuntimeError('Variable "les_region" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
            // line 28
            echo "                        ";
            $context["cur"] = "";
            // line 29
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29) == twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 29))) {
                // line 30
                echo "                            ";
                $context["cur"] = "bg-success text-dark bg-opacity-25";
                // line 31
                echo "                        ";
            }
            // line 32
            echo "                        <tr class=\"";
            echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "\">
                            <td scope=\"row\"><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["reg"], "slug", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "code", [], "any", false, false, false, 33), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["reg"], "slug", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></td>
                            <td align=\"center\">
                            ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reg"], "departement", [], "any", false, false, false, 36), "count", [], "any", false, false, false, 36) > 0)) {
                // line 37
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["reg"], "slug", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reg"], "departement", [], "any", false, false, false, 37), "count", [], "any", false, false, false, 37), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 39
                echo "                                <code class=\"text-danger text-opacity-50\">-</code>
                            ";
            }
            // line 41
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </tbody>
                </table>
            </div>
            <div class=\"col-6 shadow border border-light\">
                <nav class=\"navbar navbar-light bg-light my-2\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de région de ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 50, $this->source); })()), "nom", [], "any", false, false, false, 50), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Code</label>
                            <div class=\"ms-4 fw-bold\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 57, $this->source); })()), "code", [], "any", false, false, false, 57), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-8\">
                            <label class=\"fw-light\">Nom</label>
                            <div class=\"ms-4 fw-bold\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 61, $this->source); })()), "nom", [], "any", false, false, false, 61), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                        <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_index", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 65, $this->source); })()), "slug", [], "any", false, false, false, 65)]), "html", null, true);
        echo "\" class=\"btn btn py-0 fs-7 btn-secondary\">Retour</a>
                        <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 66, $this->source); })()), "slug", [], "any", false, false, false, 66)]), "html", null, true);
        echo "\" class=\"btn btn py-0 fs-7 btn-warning\">Modifier</a>
                        <a href=\"\" class=\"btn btn-sm py-0 fs-7 btn-danger\">Supprimer</a>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des départements de ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 75, $this->source); })()), "nom", [], "any", false, false, false, 75), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 75, $this->source); })()), "departement", [], "any", false, false, false, 75)), "html", null, true);
        echo ")
                            <a href=\"\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Département</a>
                        </caption>
                        ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 78, $this->source); })()), "departement", [], "any", false, false, false, 78), "count", [], "any", false, false, false, 78)) {
            // line 79
            echo "                        <thead>
                            <tr>
                                <th scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Localités</th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 87, $this->source); })()), "departement", [], "any", false, false, false, 87));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 88
                echo "                                <tr>
                                    <td scope=\"row\"><a href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_index", ["slug" => twig_get_attribute($this->env, $this->source, $context["dep"], "slug", [], "any", false, false, false, 89)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "code", [], "any", false, false, false, 89), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["dep"], "slug", [], "any", false, false, false, 90)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "nom", [], "any", false, false, false, 90), "html", null, true);
                echo "</a></td>
                                    <td align=\"center\">
                                    ";
                // line 92
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "localites", [], "any", false, false, false, 92), "count", [], "any", false, false, false, 92) > 0)) {
                    // line 93
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["dep"], "slug", [], "any", false, false, false, 93)]), "html", null, true);
                    echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "localites", [], "any", false, false, false, 93), "count", [], "any", false, false, false, 93), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 95
                    echo "                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    ";
                }
                // line 97
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                        </tbody>
                        ";
        } else {
            // line 102
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun département !</span></td></tr>
                        ";
        }
        // line 104
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
        return "region/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 104,  291 => 102,  287 => 100,  279 => 97,  275 => 95,  267 => 93,  265 => 92,  258 => 90,  252 => 89,  249 => 88,  245 => 87,  235 => 79,  233 => 78,  225 => 75,  213 => 66,  209 => 65,  202 => 61,  195 => 57,  185 => 50,  177 => 44,  169 => 41,  165 => 39,  157 => 37,  155 => 36,  148 => 34,  142 => 33,  137 => 32,  134 => 31,  131 => 30,  128 => 29,  125 => 28,  121 => 27,  108 => 17,  104 => 16,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/region\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des régions</span>
            </a>
            <a href=\"{{ path('app_region_index') }}\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Régions</a>
        </header>
        <div class=\"row\">
            <div class=\"col-6 bg-body shadow bg-light\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des régions ({{ les_region|length }})
                    <a href=\"{{ path('app_region_add') }}\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Région</a>
                </caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Code</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\" width=\"1%\" align=\"center\">Départements</th> 
                    </tr>
                </thead>
                <tbody>
                    {% for reg in les_region %}
                        {% set cur='' %}
                        {% if region.id==reg.id %}
                            {% set cur='bg-success text-dark bg-opacity-25' %}
                        {% endif %}
                        <tr class=\"{{ cur }}\">
                            <td scope=\"row\"><a href=\"{{ path('app_region_show', {'slug': reg.slug }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ reg.code }}</a></td>
                            <td><a href=\"{{ path('app_region_show', {'slug': reg.slug }) }}\" class=\"text-dark text-decoration-none\">{{ reg.nom }}</a></td>
                            <td align=\"center\">
                            {% if reg.departement.count >0 %}
                                <a href=\"{{ path('app_region_show', {'slug': reg.slug }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ reg.departement.count }}</a>
                            {% else %}
                                <code class=\"text-danger text-opacity-50\">-</code>
                            {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
                </table>
            </div>
            <div class=\"col-6 shadow border border-light\">
                <nav class=\"navbar navbar-light bg-light my-2\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de région de {{ region.nom }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Code</label>
                            <div class=\"ms-4 fw-bold\">{{ region.code }}</div>
                        </div>
                        <div class=\"col-8\">
                            <label class=\"fw-light\">Nom</label>
                            <div class=\"ms-4 fw-bold\">{{ region.nom }}</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                        <a href=\"{{ path('app_region_index', {'slug': region.slug }) }}\" class=\"btn btn py-0 fs-7 btn-secondary\">Retour</a>
                        <a href=\"{{ path('app_region_edit', {'slug': region.slug }) }}\" class=\"btn btn py-0 fs-7 btn-warning\">Modifier</a>
                        <a href=\"\" class=\"btn btn-sm py-0 fs-7 btn-danger\">Supprimer</a>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des départements de {{ region.nom }} ({{ region.departement|length }})
                            <a href=\"\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Département</a>
                        </caption>
                        {% if region.departement.count %}
                        <thead>
                            <tr>
                                <th scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Localités</th> 
                            </tr>
                        </thead>
                        <tbody>
                            {% for dep in region.departement %}
                                <tr>
                                    <td scope=\"row\"><a href=\"{{ path('app_departement_index', {'slug': dep.slug }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ dep.code }}</a></td>
                                    <td><a href=\"{{ path('app_departement_show', {'slug': dep.slug }) }}\" class=\"text-dark text-decoration-none\">{{ dep.nom }}</a></td>
                                    <td align=\"center\">
                                    {% if dep.localites.count >0 %}
                                        <a href=\"{{ path('app_departement_show', {'slug': dep.slug }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ dep.localites.count }}</a>
                                    {% else %}
                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                        {% else %}
                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun département !</span></td></tr>
                        {% endif %}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "region/show.html.twig", "/Users/msallabdelaziz/Documents/cossuel-git/kgm-cossuel-1/templates/region/show.html.twig");
    }
}
