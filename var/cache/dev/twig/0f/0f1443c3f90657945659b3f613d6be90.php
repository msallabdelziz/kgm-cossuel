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

/* agent/add.html.twig */
class __TwigTemplate_6f4c36028aae9acacfedde54381d1afa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agent/add.html.twig", 1);
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
            <a href=\"/agent\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des Agents</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_index");
        echo "\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Agents</a>
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affecter_liste");
        echo "\" class=\"btn btn-sm fs-7 btn-warning ms-auto\"><b>Affecter Agents</b></a>
        </header>
        <div class=\"row\">
            <div class=\"col-10 shadow border border-light\">
                <nav class=\"navbar navbar-light bg-light my-2\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Ajout Agent</span>
                    </div>
                </nav>
                <div class=\"container\">
                    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 22, $this->source); })()), "matricule", [], "any", false, false, false, 22), 'row');
        echo "<br>
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'row');
        echo "<br>
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'row');
        echo "<br>
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 25, $this->source); })()), "adresse", [], "any", false, false, false, 25), 'row');
        echo "<br>
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 26, $this->source); })()), "telephone", [], "any", false, false, false, 26), 'row');
        echo "<br>
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), 'row');
        echo "<br>
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 28, $this->source); })()), "photo", [], "any", false, false, false, 28), 'row');
        echo "<br>
                        <label>Agence</label>
                        <select name=\"agence\">
                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
            // line 32
            echo "                            <option value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                        <select>
                    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 35, $this->source); })()), 'form_end');
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
        return "agent/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 35,  161 => 34,  150 => 32,  146 => 31,  140 => 28,  136 => 27,  132 => 26,  128 => 25,  124 => 24,  120 => 23,  116 => 22,  112 => 21,  99 => 11,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/agent\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des Agents</span>
            </a>
            <a href=\"{{ path('app_agent_index') }}\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Agents</a>
            <a href=\"{{ path('app_affecter_liste') }}\" class=\"btn btn-sm fs-7 btn-warning ms-auto\"><b>Affecter Agents</b></a>
        </header>
        <div class=\"row\">
            <div class=\"col-10 shadow border border-light\">
                <nav class=\"navbar navbar-light bg-light my-2\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Ajout Agent</span>
                    </div>
                </nav>
                <div class=\"container\">
                    {{ form_start(agentForm) }}
                        {{ form_row(agentForm.matricule) }}<br>
                        {{ form_row(agentForm.nom) }}<br>
                        {{ form_row(agentForm.prenom) }}<br>
                        {{ form_row(agentForm.adresse) }}<br>
                        {{ form_row(agentForm.telephone) }}<br>
                        {{ form_row(agentForm.email) }}<br>
                        {{ form_row(agentForm.photo) }}<br>
                        <label>Agence</label>
                        <select name=\"agence\">
                            {% for ag in agence %}
                            <option value='{{ ag.id }}'>{{ ag.nom }}</option>
                            {% endfor %}
                        <select>
                    {{ form_end(agentForm) }}          
                </div>
            </div>
            
        </div>
    </section>
{% endblock %}
", "agent/add.html.twig", "E:\\symfony\\kgm-cossuel-master\\templates\\agent\\add.html.twig");
    }
}
