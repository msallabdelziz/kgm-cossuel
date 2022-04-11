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
            <a href=\"/region\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des Agents</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_index");
        echo "\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Régions</a>
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
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 21, $this->source); })()), "matricule", [], "any", false, false, false, 21), 'row');
        echo "<br>
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'row');
        echo "<br>
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), 'row');
        echo "<br>
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 24, $this->source); })()), "adresse", [], "any", false, false, false, 24), 'row');
        echo "<br>
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 25, $this->source); })()), "telephone", [], "any", false, false, false, 25), 'row');
        echo "<br>
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'row');
        echo "<br>
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 27, $this->source); })()), "photo", [], "any", false, false, false, 27), 'row');
        echo "<br>
                    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["agentForm"]) || array_key_exists("agentForm", $context) ? $context["agentForm"] : (function () { throw new RuntimeError('Variable "agentForm" does not exist.', 28, $this->source); })()), 'form_end');
        echo "          
                </div>
            </div>
            <div class=\"col-2 shadow border border-light\">
                <nav class=\"navbar navbar-light bg-light my-2\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Ajout Agent</span>
                    </div>
                </nav>
                <div class=\"container\">
                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["agenceForm"]) || array_key_exists("agenceForm", $context) ? $context["agenceForm"] : (function () { throw new RuntimeError('Variable "agenceForm" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["agenceForm"]) || array_key_exists("agenceForm", $context) ? $context["agenceForm"] : (function () { throw new RuntimeError('Variable "agenceForm" does not exist.', 39, $this->source); })()), 'widget');
        echo "
                    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["agenceForm"]) || array_key_exists("agenceForm", $context) ? $context["agenceForm"] : (function () { throw new RuntimeError('Variable "agenceForm" does not exist.', 40, $this->source); })()), 'form_end');
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
        return array (  161 => 40,  157 => 39,  153 => 38,  140 => 28,  136 => 27,  132 => 26,  128 => 25,  124 => 24,  120 => 23,  116 => 22,  112 => 21,  108 => 20,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/region\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des Agents</span>
            </a>
            <a href=\"{{ path('app_region_index') }}\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Régions</a>
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
                    {{ form_end(agentForm) }}          
                </div>
            </div>
            <div class=\"col-2 shadow border border-light\">
                <nav class=\"navbar navbar-light bg-light my-2\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Ajout Agent</span>
                    </div>
                </nav>
                <div class=\"container\">
                    {{ form_start(agenceForm) }}
                        {{ form_widget(agenceForm) }}
                    {{ form_end(agenceForm) }}          
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "agent/add.html.twig", "E:\\symfony\\kgm-cossuel-master\\templates\\agent\\add.html.twig");
    }
}
