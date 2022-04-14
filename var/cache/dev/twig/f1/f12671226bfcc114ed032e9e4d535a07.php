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

/* localite/show.html.twig */
class __TwigTemplate_1c9203f4a730000326e635f7f8458dcf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "localite/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "localite/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "localite/show.html.twig", 1);
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
                <span class=\"fs-4\">Gestion des localités</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_index");
        echo "\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Localités</a>
        </header>
        <div class=\"row\">
            <div class=\"col-6 bg-body shadow bg-light\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des localites (";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["localites"]) || array_key_exists("localites", $context) ? $context["localites"] : (function () { throw new RuntimeError('Variable "localites" does not exist.', 16, $this->source); })())), "html", null, true);
        echo ")
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_create");
        echo "\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Localité</a>
                </caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Code</th> 
                        <th scope=\"col\">Nom</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localites"]) || array_key_exists("localites", $context) ? $context["localites"] : (function () { throw new RuntimeError('Variable "localites" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 27
            echo "                        ";
            $context["cur"] = "";
            // line 28
            echo "                        
                        <tr class=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "\">
                            <td scope=\"row\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["loc"], "slug", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "code", [], "any", false, false, false, 30), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["loc"], "slug", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo "</a></td>
                            <td align=\"center\">
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
                </table>
            </div>
            <div class=\"col-6 shadow border border-light\">
                <nav class=\"navbar navbar-light bg-light my-2\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de région de ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loc"]) || array_key_exists("loc", $context) ? $context["loc"] : (function () { throw new RuntimeError('Variable "loc" does not exist.', 42, $this->source); })()), "nom", [], "any", false, false, false, 42), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Code</label>
                            <div class=\"ms-4 fw-bold\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 49, $this->source); })()), "code", [], "any", false, false, false, 49), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-8\">
                            <label class=\"fw-light\">Nom</label>
                            <div class=\"ms-4 fw-bold\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 53, $this->source); })()), "nom", [], "any", false, false, false, 53), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_index", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 57, $this->source); })()), "slug", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\" class=\"btn btn py-0 fs-7 btn-secondary\">Retour</a>
                        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 58, $this->source); })()), "slug", [], "any", false, false, false, 58)]), "html", null, true);
        echo "\" class=\"btn btn py-0 fs-7 btn-warning\">Modifier</a>
                        <a href=\"\" class=\"btn btn-sm py-0 fs-7 btn-danger\">Supprimer</a>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des départements de ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 67, $this->source); })()), "nom", [], "any", false, false, false, 67), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 67, $this->source); })()), "departement", [], "any", false, false, false, 67)), "html", null, true);
        echo ")
                            <a href=\"\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Département</a>
                        </caption>
                        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 70, $this->source); })()), "departement", [], "any", false, false, false, 70), "count", [], "any", false, false, false, 70)) {
            // line 71
            echo "                        <thead>
                            <tr>
                                <th scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Localités</th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 79, $this->source); })()), "departement", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 80
                echo "                                <tr>
                                    <td scope=\"row\"><a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_index", ["slug" => twig_get_attribute($this->env, $this->source, $context["dep"], "slug", [], "any", false, false, false, 81)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "code", [], "any", false, false, false, 81), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["dep"], "slug", [], "any", false, false, false, 82)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "nom", [], "any", false, false, false, 82), "html", null, true);
                echo "</a></td>
                                    <td align=\"center\">
                                    ";
                // line 84
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "localites", [], "any", false, false, false, 84), "count", [], "any", false, false, false, 84) > 0)) {
                    // line 85
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["dep"], "slug", [], "any", false, false, false, 85)]), "html", null, true);
                    echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "localites", [], "any", false, false, false, 85), "count", [], "any", false, false, false, 85), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 87
                    echo "                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    ";
                }
                // line 89
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                        </tbody>
                        ";
        } else {
            // line 94
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun département !</span></td></tr>
                        ";
        }
        // line 96
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
        return "localite/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 96,  267 => 94,  263 => 92,  255 => 89,  251 => 87,  243 => 85,  241 => 84,  234 => 82,  228 => 81,  225 => 80,  221 => 79,  211 => 71,  209 => 70,  201 => 67,  189 => 58,  185 => 57,  178 => 53,  171 => 49,  161 => 42,  153 => 36,  140 => 31,  134 => 30,  130 => 29,  127 => 28,  124 => 27,  120 => 26,  108 => 17,  104 => 16,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/region\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des localités</span>
            </a>
            <a href=\"{{ path('app_localite_index') }}\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Localités</a>
        </header>
        <div class=\"row\">
            <div class=\"col-6 bg-body shadow bg-light\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des localites ({{ localites|length }})
                    <a href=\"{{ path('app_localite_create') }}\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Localité</a>
                </caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Code</th> 
                        <th scope=\"col\">Nom</th>
                    </tr>
                </thead>
                <tbody>
                    {% for loc in localites %}
                        {% set cur='' %}
                        
                        <tr class=\"{{ cur }}\">
                            <td scope=\"row\"><a href=\"{{ path('app_localite_show', {'slug': loc.slug }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ loc.code }}</a></td>
                            <td><a href=\"{{ path('app_localite_show', {'slug': loc.slug }) }}\" class=\"text-dark text-decoration-none\">{{ loc.nom }}</a></td>
                            <td align=\"center\">
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
                </table>
            </div>
            <div class=\"col-6 shadow border border-light\">
                <nav class=\"navbar navbar-light bg-light my-2\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de région de {{ loc.nom }}</span>
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
", "localite/show.html.twig", "E:\\symfony\\kgm-cossuel-master\\templates\\localite\\show.html.twig");
    }
}
