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

/* departement/index.html.twig */
class __TwigTemplate_08ff328371d15dcbc66c2ed8141088c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "departement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "COSSUEL";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <h4 class=\"fw-bold\">Gestion des régions</h4>
                    ";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_add");
            echo "\" class=\"btn btn-primary btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 16 16\">
                            <path fill-rule=\"evenodd\" d=\"M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z\"></path>
                        </svg>
                        Nouvelle Région
                    </a>
                    ";
        }
        // line 17
        echo "                </div>
                <span class=\"divider\">
                    <hr></span>
            ";
        // line 20
        if ((twig_length_filter($this->env, (isset($context["les_region"]) || array_key_exists("les_region", $context) ? $context["les_region"] : (function () { throw new RuntimeError('Variable "les_region" does not exist.', 20, $this->source); })())) == 0)) {
            // line 21
            echo "                <div class=\"row pt-20\">
                    <div class=\"col-3\"></div>
                    <div class=\"col-6\">
                        <div class=\"alert alert-warning d-flex align-items-center\" role=\"alert\">
                            <div>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 24 24\">
                                    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
                                </svg>
                                Aucun enregistrement trouvé !
                            </div>
                        </div>
                    </div>
                </div>
            ";
        } else {
            // line 35
            echo "            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des régions (";
            // line 36
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_region"]) || array_key_exists("les_region", $context) ? $context["les_region"] : (function () { throw new RuntimeError('Variable "les_region" does not exist.', 36, $this->source); })())), "html", null, true);
            echo ")</caption>
            <thead>
                <tr>
                    <th scope=\"col\">Code</th> 
                    <th scope=\"col\">Nom</th> 
                    <th class=\"text-center\" scope=\"col\">Départements</th> 
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_region"]) || array_key_exists("les_region", $context) ? $context["les_region"] : (function () { throw new RuntimeError('Variable "les_region" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
                // line 47
                echo "                    <tr>
                        <td scope=\"row\"><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "code", [], "any", false, false, false, 48), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "nom", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                        <td class=\"text-center\">
                            ";
                // line 51
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reg"], "departement", [], "any", false, false, false, 51), "count", [], "any", false, false, false, 51) > 0)) {
                    // line 52
                    echo "                                <span class=\"badge bg-success text-light rounded-pill fw-normal\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reg"], "departement", [], "any", false, false, false, 52), "count", [], "any", false, false, false, 52), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 54
                    echo "                                <code class=\"text-danger text-opacity-50\">Aucun département</code>
                            ";
                }
                // line 56
                echo "                        </td>
                        <td class=\"text-end\">
                            <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\" class=\"mx-1\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                echo "\"></use>
                                </svg>
                            </a>
                            ";
                // line 63
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 64
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                    echo "\" class=\"mx-1\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                    echo "\"></use>
                                </svg>
                            </a>
                            ";
                }
                // line 70
                echo "                            ";
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && 0)) {
                    // line 71
                    echo "                            <a href=\"\" class=\"mx-1\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
                    echo "\"></use>
                                </svg>
                            </a>
                            ";
                }
                // line 77
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "            </tbody>
            </table>
            ";
        }
        // line 83
        echo "        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "departement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 83,  229 => 80,  221 => 77,  214 => 73,  210 => 71,  207 => 70,  200 => 66,  194 => 64,  192 => 63,  186 => 60,  181 => 58,  177 => 56,  173 => 54,  167 => 52,  165 => 51,  160 => 49,  154 => 48,  151 => 47,  147 => 46,  134 => 36,  131 => 35,  115 => 21,  113 => 20,  108 => 17,  97 => 10,  95 => 9,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}COSSUEL{% endblock %}
{% block body %}
    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <h4 class=\"fw-bold\">Gestion des régions</h4>
                    {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('app_region_add') }}\" class=\"btn btn-primary btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 16 16\">
                            <path fill-rule=\"evenodd\" d=\"M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z\"></path>
                        </svg>
                        Nouvelle Région
                    </a>
                    {% endif %}
                </div>
                <span class=\"divider\">
                    <hr></span>
            {% if les_region|length == 0 %}
                <div class=\"row pt-20\">
                    <div class=\"col-3\"></div>
                    <div class=\"col-6\">
                        <div class=\"alert alert-warning d-flex align-items-center\" role=\"alert\">
                            <div>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 24 24\">
                                    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
                                </svg>
                                Aucun enregistrement trouvé !
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des régions ({{ les_region|length }})</caption>
            <thead>
                <tr>
                    <th scope=\"col\">Code</th> 
                    <th scope=\"col\">Nom</th> 
                    <th class=\"text-center\" scope=\"col\">Départements</th> 
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                {% for reg in les_region %}
                    <tr>
                        <td scope=\"row\"><a href=\"{{ path('app_region_show', {'id': reg.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ reg.code }}</a></td>
                        <td>{{ reg.nom }}</td>
                        <td class=\"text-center\">
                            {% if reg.departement.count >0 %}
                                <span class=\"badge bg-success text-light rounded-pill fw-normal\">{{ reg.departement.count }}</span>
                            {% else %}
                                <code class=\"text-danger text-opacity-50\">Aucun département</code>
                            {% endif %}
                        </td>
                        <td class=\"text-end\">
                            <a href=\"{{ path('app_region_show', {'id': reg.id }) }}\" class=\"mx-1\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#search') }}\"></use>
                                </svg>
                            </a>
                            {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('app_region_edit', {'id': reg.id }) }}\" class=\"mx-1\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                </svg>
                            </a>
                            {% endif %}
                            {% if is_granted('ROLE_ADMIN') and 0 %}
                            <a href=\"\" class=\"mx-1\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#trash') }}\"></use>
                                </svg>
                            </a>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
            </table>
            {% endif %}
        </div>
    </section>
{% endblock %}
", "departement/index.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/departement/index.html.twig");
    }
}
