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

/* installation/new3.html.twig */
class __TwigTemplate_c8f420c5db42ca6dd727420fc03be63e64d9a487f170d1e30e3b63e7e995a505 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new3.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new3.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "installation/new3.html.twig", 1);
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
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"#fff\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                        Données de base
                                    </li>
                                    <li class=\"step active\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"#fff\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#house-door"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                        Données sur le Site
                                    </li>
                                    <li class=\"step active\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"#ffc328\" style=\"position:relative; left:66px; top:-48px;\">
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
                                    <h2 class=\"fs-title\">Caractéristique de l'installation</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 74, $this->source); })()), "natureTravaux", [], "any", false, false, false, 74), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 77, $this->source); })()), "neuf15", [], "any", false, false, false, 77), 'row');
        echo "
                                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 78, $this->source); })()), "existant15", [], "any", false, false, false, 78), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 81, $this->source); })()), "neuf25", [], "any", false, false, false, 81), 'row');
        echo "
                                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 82, $this->source); })()), "existant25", [], "any", false, false, false, 82), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 85, $this->source); })()), "neufAutre", [], "any", false, false, false, 85), 'row');
        echo "
                                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 86, $this->source); })()), "existantAutre", [], "any", false, false, false, 86), 'row');
        echo "
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4\">
                                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 90, $this->source); })()), "puissance", [], "any", false, false, false, 90), 'row');
        echo "
                                        </div>
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-4\">
                                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 94, $this->source); })()), "intervenantAutre", [], "any", false, false, false, 94), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-8 intervenantAutre1\">
                                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 97, $this->source); })()), "intervenant", [], "any", false, false, false, 97), 'row');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div align=\"right\">
                                    <a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_add2");
        echo "\" class=\"next action-button btn btn-secondary btn my-3\">Précédent</a>
                                    <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_add4");
        echo "\" class=\"next action-button btn btn-primary btn my-3\">Suivant</a>
                                </div>
                                </fieldset>
                            </div>
                            ";
        // line 111
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 111, $this->source); })()), 'form_end');
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

    // line 119
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        echo "<script>
    \$(document).ready(function () {
        \$('.natureTravaux1').hide(); \$('.intervenantAutre1').hide();
        \$('input[type=radio][name=\"form[intervenantAutre]\"]').change(function() {
            \$('.intervenantAutre1').hide();
            if (this.value == true) {
                \$('.intervenantAutre1').show(); 
            }
        });

        \$('select[name=\"form[natureTravaux]\"]').on('change', function() {
            \$('.natureTravaux1').hide();
            optSel=\$('select[name=\"form[natureTravaux]\"]').find(\"option:selected\");
            valSel=optSel.text();
            if (valSel == \"Rénovation Partielle\") {
                \$('.natureTravaux1').show(); 
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
        return "installation/new3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 120,  280 => 119,  262 => 111,  255 => 103,  251 => 102,  243 => 97,  237 => 94,  230 => 90,  223 => 86,  219 => 85,  213 => 82,  209 => 81,  203 => 78,  199 => 77,  193 => 74,  179 => 63,  170 => 57,  161 => 51,  152 => 45,  143 => 39,  134 => 33,  125 => 27,  116 => 21,  106 => 14,  102 => 13,  96 => 10,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
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
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"#fff\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#lightbulb') }}\"></use>
                                        </svg>
                                        Données de base
                                    </li>
                                    <li class=\"step active\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"#fff\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#house-door') }}\"></use>
                                        </svg>
                                        Données sur le Site
                                    </li>
                                    <li class=\"step active\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"#ffc328\" style=\"position:relative; left:66px; top:-48px;\">
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
                                    <h2 class=\"fs-title\">Caractéristique de l'installation</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                        {{ form_row(installationForm.natureTravaux) }}
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            {{ form_row(installationForm.neuf15) }}
                                            {{ form_row(installationForm.existant15) }}
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            {{ form_row(installationForm.neuf25) }}
                                            {{ form_row(installationForm.existant25) }}
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            {{ form_row(installationForm.neufAutre) }}
                                            {{ form_row(installationForm.existantAutre) }}
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.puissance) }}
                                        </div>
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.intervenantAutre) }}
                                        </div>
                                        <div class=\"col-lg-8 intervenantAutre1\">
                                            {{ form_row(installationForm.intervenant) }}
                                        </div>
                                    </div>
                                </div>
                                <div align=\"right\">
                                    <a href=\"{{ path('app_installation_add2') }}\" class=\"next action-button btn btn-secondary btn my-3\">Précédent</a>
                                    <a href=\"{{ path('app_installation_add4') }}\" class=\"next action-button btn btn-primary btn my-3\">Suivant</a>
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
        \$('.natureTravaux1').hide(); \$('.intervenantAutre1').hide();
        \$('input[type=radio][name=\"form[intervenantAutre]\"]').change(function() {
            \$('.intervenantAutre1').hide();
            if (this.value == true) {
                \$('.intervenantAutre1').show(); 
            }
        });

        \$('select[name=\"form[natureTravaux]\"]').on('change', function() {
            \$('.natureTravaux1').hide();
            optSel=\$('select[name=\"form[natureTravaux]\"]').find(\"option:selected\");
            valSel=optSel.text();
            if (valSel == \"Rénovation Partielle\") {
                \$('.natureTravaux1').show(); 
            }
        });
    });
</script>

{% endblock %}", "installation/new3.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/installation/new3.html.twig");
    }
}
