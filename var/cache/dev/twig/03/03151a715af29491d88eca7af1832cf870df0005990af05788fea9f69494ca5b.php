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

/* installation/new.html.twig */
class __TwigTemplate_e8e226aea0e66bb62c20bd40b39dd24b8d78e9ec011a82ddc52b0cbe9aaf00ed extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "installation/new.html.twig", 1);
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
            <a href=\"/installation\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des demandes</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_index");
        echo "\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Demandes</a>
        </header>
        <div class=\"row\">
        ";
        // line 13
        $context["offset"] = "offset-md-1";
        echo "            
            <div class=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " col-lg-10 mb-2  p-3\">

                <div class=\"container\">
                    <nav class=\"navbar shadow bg-warning border border-dark my-2 mb-2 p-0\">
                        <div class=\"container-fluid ps-4\">
                            <span class=\"navbar-brand mb-0 fs-4 fw-400\">
                            <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                <use xlink:href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                            </svg>
                            Nouvelle demande</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["id" => "formInstall"]]);
        echo "
                            <div class=\"row\">
                                <!-- progressbar -->
                                <ul id=\"progressbar\">
                                    <li class=\"step active\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"#ffc328\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                        Données de base
                                    </li>
                                    <li class=\"step\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#house-door"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                        Données sur le Site
                                    </li>
                                    <li class=\"step\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#gear"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                        Données Installation
                                    </li>
                                    <li class=\"step\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                        Données Electricien
                                    </li>
                                    <li class=\"step\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person-check"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                        Données Propriétaire
                                    <li/>
                                    <li class=\"step\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                        Soumission demande
                                    <li/>
                                </ul>
                            \t<fieldset>
                                <div class=\"card\">
                                    <h2 class=\"fs-title\">Données de base de la demande</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-8\">
                                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 74, $this->source); })()), "usage", [], "any", false, false, false, 74), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 77, $this->source); })()), "alimente", [], "any", false, false, false, 77), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 80, $this->source); })()), "compteur", [], "any", false, false, false, 80), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 83, $this->source); })()), "abonnement", [], "any", false, false, false, 83), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 86, $this->source); })()), "grstReseau", [], "any", false, false, false, 86), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente0\">
                                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 89, $this->source); })()), "compteurVoisin", [], "any", false, false, false, 89), 'row');
        echo "<br>
                                        </div>
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-4\">
                                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 93, $this->source); })()), "localite", [], "any", false, false, false, 93), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-8\">
                                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 96, $this->source); })()), "adresse", [], "any", false, false, false, 96), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 99, $this->source); })()), "habitation", [], "any", false, false, false, 99), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 102, $this->source); })()), "bp", [], "any", false, false, false, 102), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 105, $this->source); })()), "lattitude", [], "any", false, false, false, 105), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 108, $this->source); })()), "longitude", [], "any", false, false, false, 108), 'row');
        echo "<br>
                                        </div>
                                    </div>
                                </div>
                                <div align=\"right\">
                                    <a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_add2");
        echo "\" class=\"next action-button btn btn-primary btn my-3\">Suivant</a>
                                </div>
                                </fieldset>
                            </div>
                            ";
        // line 121
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 121, $this->source); })()), 'form_end');
        echo "            
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        echo "<script>
    \$(document).ready(function () {
        \$('.alimente0').show(); \$('.alimente1').hide();
        \$('input[type=radio][name=\"form[alimente]\"]').change(function() {
            if (this.value == true) {
                \$('.alimente1').show(); \$('.alimente0').hide();
            }
            else if (this.value == false) {
                \$('.alimente0').show(); \$('.alimente1').hide();
            }
        });
    });
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "installation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 130,  293 => 129,  275 => 121,  268 => 113,  260 => 108,  254 => 105,  248 => 102,  242 => 99,  236 => 96,  230 => 93,  223 => 89,  217 => 86,  211 => 83,  205 => 80,  199 => 77,  193 => 74,  179 => 63,  170 => 57,  161 => 51,  152 => 45,  143 => 39,  134 => 33,  125 => 27,  116 => 21,  106 => 14,  102 => 13,  96 => 10,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/installation\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des demandes</span>
            </a>
            <a href=\"{{ path('app_installation_index') }}\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Demandes</a>
        </header>
        <div class=\"row\">
        {% set offset=\"offset-md-1\" %}            
            <div class=\"{{ offset }} col-lg-10 mb-2  p-3\">

                <div class=\"container\">
                    <nav class=\"navbar shadow bg-warning border border-dark my-2 mb-2 p-0\">
                        <div class=\"container-fluid ps-4\">
                            <span class=\"navbar-brand mb-0 fs-4 fw-400\">
                            <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#lightbulb') }}\"></use>
                            </svg>
                            Nouvelle demande</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        {{ form_start(installationForm, {'attr': {'id': 'formInstall'}}) }}
                            <div class=\"row\">
                                <!-- progressbar -->
                                <ul id=\"progressbar\">
                                    <li class=\"step active\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"#ffc328\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#lightbulb') }}\"></use>
                                        </svg>
                                        Données de base
                                    </li>
                                    <li class=\"step\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#house-door') }}\"></use>
                                        </svg>
                                        Données sur le Site
                                    </li>
                                    <li class=\"step\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#gear') }}\"></use>
                                        </svg>
                                        Données Installation
                                    </li>
                                    <li class=\"step\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person') }}\"></use>
                                        </svg>
                                        Données Electricien
                                    </li>
                                    <li class=\"step\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person-check') }}\"></use>
                                        </svg>
                                        Données Propriétaire
                                    <li/>
                                    <li class=\"step\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check') }}\"></use>
                                        </svg>
                                        Soumission demande
                                    <li/>
                                </ul>
                            \t<fieldset>
                                <div class=\"card\">
                                    <h2 class=\"fs-title\">Données de base de la demande</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-8\">
                                            {{ form_row(installationForm.usage) }}<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.alimente) }}<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            {{ form_row(installationForm.compteur) }}<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                        {{ form_row(installationForm.abonnement) }}<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            {{ form_row(installationForm.grstReseau) }}<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente0\">
                                            {{ form_row(installationForm.compteurVoisin) }}<br>
                                        </div>
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.localite) }}<br>
                                        </div>
                                        <div class=\"col-lg-8\">
                                        {{ form_row(installationForm.adresse) }}<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.habitation) }}<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.bp) }}<br>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            {{ form_row(installationForm.lattitude) }}<br>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            {{ form_row(installationForm.longitude) }}<br>
                                        </div>
                                    </div>
                                </div>
                                <div align=\"right\">
                                    <a href=\"{{ path('app_installation_add2') }}\" class=\"next action-button btn btn-primary btn my-3\">Suivant</a>
                                </div>
                                </fieldset>
                            </div>
                            {# <div align=\"center\">
                                <a class=\"previous btn btn-secondary\" href=\"{{ path('app_installation_index') }}\">Annuler</a>
                                <button type=\"button\" class=\"next action-button btn btn-primary btn my-3\">Enregistrer</button>
                            </div> #}
                        {{ form_end(installationForm) }}            
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
<script>
    \$(document).ready(function () {
        \$('.alimente0').show(); \$('.alimente1').hide();
        \$('input[type=radio][name=\"form[alimente]\"]').change(function() {
            if (this.value == true) {
                \$('.alimente1').show(); \$('.alimente0').hide();
            }
            else if (this.value == false) {
                \$('.alimente0').show(); \$('.alimente1').hide();
            }
        });
    });
</script>

{% endblock %}", "installation/new.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/installation/new.html.twig");
    }
}
