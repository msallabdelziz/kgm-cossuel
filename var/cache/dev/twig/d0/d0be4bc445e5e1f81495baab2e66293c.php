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

/* localite/index.html.twig */
class __TwigTemplate_95bf6c595435253b63b39d4aec436092 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "localite/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "localite/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "localite/index.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_create");
        echo "\" class=\"btn btn-sm fs-7 btn-primary ms-auto\">Ajouter localité</a>
        </header>
        <div class=\"row\">
            <div class=\"bg-body shadow bg-light\">
            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
              <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des localités (";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["localites"]) || array_key_exists("localites", $context) ? $context["localites"] : (function () { throw new RuntimeError('Variable "localites" does not exist.', 15, $this->source); })())), "html", null, true);
        echo ")</caption>
              <thead>
                <tr>
                    <th scope=\"col\">Code</th> 
                    <th scope=\"col\">Nom</th> 
                    <th scope=\"col\"></th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localites"]) || array_key_exists("localites", $context) ? $context["localites"] : (function () { throw new RuntimeError('Variable "localites" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 25
            echo "                    <tr>
                        <td scope=\"row\"><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["loc"], "slug", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "code", [], "any", false, false, false, 26), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td class=\"text-end\">
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["loc"], "slug", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-sm py-0 fs-7 btn-secondary\">Détails</a>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_update", ["slug" => twig_get_attribute($this->env, $this->source, $context["loc"], "slug", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-sm py-0 fs-7 btn-warning\">Modifier</a>
                            <a href=\"\" class=\"btn btn-sm py-0 fs-7 btn-danger\">Supprimer</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "              </tbody>
            </table>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "localite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 35,  137 => 30,  133 => 29,  128 => 27,  122 => 26,  119 => 25,  115 => 24,  103 => 15,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
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
            <a href=\"{{ path('app_localite_create') }}\" class=\"btn btn-sm fs-7 btn-primary ms-auto\">Ajouter localité</a>
        </header>
        <div class=\"row\">
            <div class=\"bg-body shadow bg-light\">
            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
              <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des localités ({{localites|length }})</caption>
              <thead>
                <tr>
                    <th scope=\"col\">Code</th> 
                    <th scope=\"col\">Nom</th> 
                    <th scope=\"col\"></th>
                </tr>
              </thead>
              <tbody>
                {% for loc in localites %}
                    <tr>
                        <td scope=\"row\"><a href=\"{{ path('app_localite_show', {'slug': loc.slug }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ loc.code }}</a></td>
                        <td>{{ loc.nom }}</td>
                        <td class=\"text-end\">
                            <a href=\"{{ path('app_localite_show', {'slug': loc.slug }) }}\" class=\"btn btn-sm py-0 fs-7 btn-secondary\">Détails</a>
                            <a href=\"{{ path('app_localite_update', {'slug': loc.slug }) }}\" class=\"btn btn-sm py-0 fs-7 btn-warning\">Modifier</a>
                            <a href=\"\" class=\"btn btn-sm py-0 fs-7 btn-danger\">Supprimer</a>
                        </td>
                    </tr>
                {% endfor %}
              </tbody>
            </table>
            </div>
        </div>
    </section>
{% endblock %}
", "localite/index.html.twig", "E:\\symfony\\kgm-cossuel-master\\templates\\localite\\index.html.twig");
    }
}
