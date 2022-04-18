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

/* agent/liste.html.twig */
class __TwigTemplate_a0b5f1d6098f758c929ffab1428327aff67a20d49fbfa6c8ffca963bf6a8e0fb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agent/liste.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Administration";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/agence\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des agents</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_add");
        echo "\" class=\"btn btn-sm fs-7 btn-primary ms-auto\">Ajouter Agent</a>
        </header>
        <div class=\"row\">
            <div class=\"bg-body shadow bg-light\">
            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
              <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des agents (";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 15, $this->source); })())), "html", null, true);
        echo ")</caption>
              <thead>
                <tr>
                    <th scope=\"col\">Matricule</th> 
                    <th scope=\"col\">Nom</th> 
                    <th class=\"text-center\" scope=\"col\">Téléphone</th> 
                    <th scope=\"col\">Adresse Email</th>
                    <th scope=\"col\">Adresse</th>
                    <th scope=\"col\">Agence</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
            // line 28
            echo "                    <tr>
                        <td scope=\"row\"><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "matricule", [], "any", false, false, false, 29), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "nom", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "telephone", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "adresse", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td class=\"text-end\">
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affecter_index", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-sm py-0 fs-7 btn-secondary\">Affecter</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "              </tbody>
            </table>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "agent/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 40,  152 => 36,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  131 => 30,  125 => 29,  122 => 28,  118 => 27,  103 => 15,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/agence\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des agents</span>
            </a>
            <a href=\"{{ path('app_agence_add') }}\" class=\"btn btn-sm fs-7 btn-primary ms-auto\">Ajouter Agent</a>
        </header>
        <div class=\"row\">
            <div class=\"bg-body shadow bg-light\">
            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
              <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des agents ({{ agents|length }})</caption>
              <thead>
                <tr>
                    <th scope=\"col\">Matricule</th> 
                    <th scope=\"col\">Nom</th> 
                    <th class=\"text-center\" scope=\"col\">Téléphone</th> 
                    <th scope=\"col\">Adresse Email</th>
                    <th scope=\"col\">Adresse</th>
                    <th scope=\"col\">Agence</th>
                </tr>
              </thead>
              <tbody>
                {% for ag in agents %}
                    <tr>
                        <td scope=\"row\"><a href=\"{{ path('app_agent_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ ag.matricule }}</a></td>
                        <td>{{ ag.nom }}</td>
                        <td>{{ ag.telephone }}</td>
                        <td>{{ ag.email }}</td>
                        <td>{{ ag.adresse }}</td>
                        <td>{{ ag.nom }}</td>
                        <td class=\"text-end\">
                            <a href=\"{{ path('app_affecter_index', {'id': ag.id }) }}\" class=\"btn btn-sm py-0 fs-7 btn-secondary\">Affecter</a>
                        </td>
                    </tr>
                {% endfor %}
              </tbody>
            </table>
            </div>
        </div>
    </section>
{% endblock %}
", "agent/liste.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/agent/liste.html.twig");
    }
}
