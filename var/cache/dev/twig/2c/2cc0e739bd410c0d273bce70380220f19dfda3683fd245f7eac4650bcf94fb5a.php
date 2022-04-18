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
class __TwigTemplate_9bc69456633b8441f2ac2962c49b3800606abd65122088e567ce44675e0761fd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "localite/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "localite/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "localite/show.html.twig", 1);
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
        echo "
    <section>
        <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
            <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                <div class=\"container-fluid\">
                    <span class=\"navbar-brand mb-0 h1\">Détails localité de ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        echo "</span>
                </div>
            </nav>
            <div class=\"container\">
                <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                    <div class=\"col-4\">
                        <label class=\"fw-light fs-7\">Code</label>
                        <div class=\"ms-4\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 17, $this->source); })()), "code", [], "any", false, false, false, 17), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"col-8\">
                        <label class=\"fw-light fs-7\">Nom</label>
                        <div class=\"ms-4\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</div>
                    </div>
                </div>
                <div class=\"col pt-2\" align=\"right\">
                        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 25, $this->source); })()), "departement", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\" class=\"mx-2\" title=\"Retour\">
                            <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                <use xlink:href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-counterclockwise"), "html", null, true);
        echo "\"></use>
                            </svg>
                        </a>
                        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\" class=\"mx-2\" title=\"Modifier\">
                            <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                <use xlink:href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
        echo "\"></use>
                            </svg>
                        </a>
                        <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                            <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                <use xlink:href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
        echo "\"></use>
                            </svg>
                        </a>
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
        return "localite/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 37,  135 => 32,  130 => 30,  124 => 27,  119 => 25,  112 => 21,  105 => 17,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}

    <section>
        <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
            <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                <div class=\"container-fluid\">
                    <span class=\"navbar-brand mb-0 h1\">Détails localité de {{ localite.nom }}</span>
                </div>
            </nav>
            <div class=\"container\">
                <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                    <div class=\"col-4\">
                        <label class=\"fw-light fs-7\">Code</label>
                        <div class=\"ms-4\">{{ localite.code }}</div>
                    </div>
                    <div class=\"col-8\">
                        <label class=\"fw-light fs-7\">Nom</label>
                        <div class=\"ms-4\">{{ localite.nom }}</div>
                    </div>
                </div>
                <div class=\"col pt-2\" align=\"right\">
                        <a href=\"{{ path('app_departement_show', { 'id': localite.departement.id}) }}\" class=\"mx-2\" title=\"Retour\">
                            <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#arrow-counterclockwise') }}\"></use>
                            </svg>
                        </a>
                        <a href=\"{{ path('app_localite_edit', {'id': localite.id }) }}\" class=\"mx-2\" title=\"Modifier\">
                            <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                            </svg>
                        </a>
                        <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                            <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#trash') }}\"></use>
                            </svg>
                        </a>
                </div>
            </div>

        </div>
    </section>
{% endblock %}
", "localite/show.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/localite/show.html.twig");
    }
}
