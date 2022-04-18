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

/* region/add.html.twig */
class __TwigTemplate_3a8ef134c86af7c7e6906b6ba677d9bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "region/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "region/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "region/add.html.twig", 1);
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
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des régions (";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_region"]) || array_key_exists("les_region", $context) ? $context["les_region"] : (function () { throw new RuntimeError('Variable "les_region" does not exist.', 15, $this->source); })())), "html", null, true);
        echo ")</caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Code</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\" width=\"1%\" align=\"center\">Départements</th> 
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["les_region"]) || array_key_exists("les_region", $context) ? $context["les_region"] : (function () { throw new RuntimeError('Variable "les_region" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
            // line 25
            echo "                        <tr>
                            <td scope=\"row\"><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["reg"], "slug", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "code", [], "any", false, false, false, 26), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                            <td align=\"center\">
                            ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reg"], "departement", [], "any", false, false, false, 29), "count", [], "any", false, false, false, 29) > 0)) {
                // line 30
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["reg"], "slug", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reg"], "departement", [], "any", false, false, false, 30), "count", [], "any", false, false, false, 30), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 32
                echo "                                <code class=\"text-danger text-opacity-50\">-</code>
                            ";
            }
            // line 34
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </tbody>
                </table>
            </div>
            <div class=\"col-6 shadow border border-light\">
                <nav class=\"navbar navbar-light bg-light my-2\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Ajout de région</span>
                    </div>
                </nav>
                <div class=\"container\">
                    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["regionForm"]) || array_key_exists("regionForm", $context) ? $context["regionForm"] : (function () { throw new RuntimeError('Variable "regionForm" does not exist.', 47, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["regionForm"]) || array_key_exists("regionForm", $context) ? $context["regionForm"] : (function () { throw new RuntimeError('Variable "regionForm" does not exist.', 48, $this->source); })()), "code", [], "any", false, false, false, 48), 'row');
        echo "
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["regionForm"]) || array_key_exists("regionForm", $context) ? $context["regionForm"] : (function () { throw new RuntimeError('Variable "regionForm" does not exist.', 49, $this->source); })()), "nom", [], "any", false, false, false, 49), 'row');
        echo "
                        <div align=\"center\">
                            <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_index");
        echo "\" class=\"btn btn-secondary btn my-3\">Annuler</a>
                            <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                        </div>
                    ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["regionForm"]) || array_key_exists("regionForm", $context) ? $context["regionForm"] : (function () { throw new RuntimeError('Variable "regionForm" does not exist.', 54, $this->source); })()), 'form_end');
        echo "            
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
        return "region/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 54,  180 => 51,  175 => 49,  171 => 48,  167 => 47,  155 => 37,  147 => 34,  143 => 32,  135 => 30,  133 => 29,  128 => 27,  122 => 26,  119 => 25,  115 => 24,  103 => 15,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
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
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des régions ({{ les_region|length }})</caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Code</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\" width=\"1%\" align=\"center\">Départements</th> 
                    </tr>
                </thead>
                <tbody>
                    {% for reg in les_region %}
                        <tr>
                            <td scope=\"row\"><a href=\"{{ path('app_region_show', {'slug': reg.slug }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ reg.code }}</a></td>
                            <td>{{ reg.nom }}</td>
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
                        <span class=\"navbar-brand mb-0 h1\">Ajout de région</span>
                    </div>
                </nav>
                <div class=\"container\">
                    {{ form_start(regionForm) }}
                        {{ form_row(regionForm.code) }}
                        {{ form_row(regionForm.nom) }}
                        <div align=\"center\">
                            <a href=\"{{ path('app_region_index') }}\" class=\"btn btn-secondary btn my-3\">Annuler</a>
                            <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                        </div>
                    {{ form_end(regionForm) }}            
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "region/add.html.twig", "/Users/msallabdelaziz/Documents/cossuel-git/kgm-cossuel-1/templates/region/add.html.twig");
    }
}
