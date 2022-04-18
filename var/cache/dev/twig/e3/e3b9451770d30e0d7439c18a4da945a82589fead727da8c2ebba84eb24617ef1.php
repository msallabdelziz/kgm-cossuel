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

/* installation/new5.html.twig */
class __TwigTemplate_618149bbbed8a6cb4b69e91202171e02e9ef16f592f5edba4e8d6962649fd94b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new5.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new5.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "installation/new5.html.twig", 1);
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
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"#fff\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#gear"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                        Données Installation
                                    </li>
                                    <li class=\"step active\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"#fff\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                        Données Electricien
                                    </li>
                                    <li class=\"step active\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"#ffc328\" style=\"position:relative; left:66px; top:-48px;\">
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
                                    <h2 class=\"fs-title\">Informations sur le propriétaire de l'installation</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 74, $this->source); })()), "nom", [], "any", false, false, false, 74), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-5\">
                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 77, $this->source); })()), "prenom", [], "any", false, false, false, 77), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 80, $this->source); })()), "localite", [], "any", false, false, false, 80), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-8\">
                                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 83, $this->source); })()), "adresse", [], "any", false, false, false, 83), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 86, $this->source); })()), "telephone", [], "any", false, false, false, 86), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 89, $this->source); })()), "email", [], "any", false, false, false, 89), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 92, $this->source); })()), "typePiece", [], "any", false, false, false, 92), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 95, $this->source); })()), "numPiece", [], "any", false, false, false, 95), 'row');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div align=\"right\">
                                    <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_add4");
        echo "\" class=\"next action-button btn btn-secondary btn my-3\">Précédent</a>
                                    <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_add6");
        echo "\" class=\"next action-button btn btn-primary btn my-3\">Suivant</a>
                                </div>
                                </fieldset>
                            </div>
                            ";
        // line 109
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 109, $this->source); })()), 'form_end');
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

    public function getTemplateName()
    {
        return "installation/new5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 109,  246 => 101,  242 => 100,  234 => 95,  228 => 92,  222 => 89,  216 => 86,  210 => 83,  204 => 80,  198 => 77,  192 => 74,  178 => 63,  169 => 57,  160 => 51,  151 => 45,  142 => 39,  133 => 33,  124 => 27,  115 => 21,  105 => 14,  101 => 13,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
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
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"#fff\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#gear') }}\"></use>
                                        </svg>
                                        Données Installation
                                    </li>
                                    <li class=\"step active\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"#fff\" style=\"position:relative; left:66px; top:-48px;\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person') }}\"></use>
                                        </svg>
                                        Données Electricien
                                    </li>
                                    <li class=\"step active\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"#ffc328\" style=\"position:relative; left:66px; top:-48px;\">
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
                                    <h2 class=\"fs-title\">Informations sur le propriétaire de l'installation</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                        {{ form_row(installationForm.nom) }}
                                        </div>
                                        <div class=\"col-lg-5\">
                                        {{ form_row(installationForm.prenom) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.localite) }}
                                        </div>
                                        <div class=\"col-lg-8\">
                                            {{ form_row(installationForm.adresse) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.telephone) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.email) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.typePiece) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.numPiece) }}
                                        </div>
                                    </div>
                                </div>
                                <div align=\"right\">
                                    <a href=\"{{ path('app_installation_add4') }}\" class=\"next action-button btn btn-secondary btn my-3\">Précédent</a>
                                    <a href=\"{{ path('app_installation_add6') }}\" class=\"next action-button btn btn-primary btn my-3\">Suivant</a>
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
", "installation/new5.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/installation/new5.html.twig");
    }
}
