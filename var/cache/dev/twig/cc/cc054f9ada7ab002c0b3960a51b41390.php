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

/* pointverification/edit.html.twig */
class __TwigTemplate_1625988897cfa78200eced76f38adb5f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointverification/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointverification/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointverification/edit.html.twig", 1);
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

        echo "COSSUEL";
        
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
        echo "    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des rubriques</span>
            </a>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 10, $this->source); })()), "rubrique", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Rubriques de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 10, $this->source); })()), "rubrique", [], "any", false, false, false, 10), "libelle", [], "any", false, false, false, 10), "html", null, true);
        echo "</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow bg-light card0 me-4 p-3 priority-4\">
                <nav class=\"navbar text-secondarymy-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 16, $this->source); })()), "rubrique", [], "any", false, false, false, 16), "rapport", [], "any", false, false, false, 16), "libelle", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 23, $this->source); })()), "rubrique", [], "any", false, false, false, 23), "rapport", [], "any", false, false, false, 23), "libelle", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>

                <nav class=\"navbar text-secondary my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 30, $this->source); })()), "rubrique", [], "any", false, false, false, 30), "libelle", [], "any", false, false, false, 30), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 37, $this->source); })()), "rubrique", [], "any", false, false, false, 37), "libelle", [], "any", false, false, false, 37), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des points de vérification de ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 46, $this->source); })()), "rubrique", [], "any", false, false, false, 46), "libelle", [], "any", false, false, false, 46), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 46, $this->source); })()), "rubrique", [], "any", false, false, false, 46), "pointverification", [], "any", false, false, false, 46)), "html", null, true);
        echo ")
                        </caption>
                        ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 48, $this->source); })()), "rubrique", [], "any", false, false, false, 48), "pointverification", [], "any", false, false, false, 48), "count", [], "any", false, false, false, 48)) {
            // line 49
            echo "                        <thead>
                            <tr>
                                <th scope=\"col\" width=\"30\"></th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Points Non Conformité</th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 57, $this->source); })()), "rubrique", [], "any", false, false, false, 57), "pointverification", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 58
                echo "                                ";
                $context["cur"] = "";
                // line 59
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 59))) {
                    // line 60
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 61
                    echo "                                ";
                }
                // line 62
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "\">
                                    <td scope=\"row\"><a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointverification_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "numero", [], "any", false, false, false, 63), "html", null, true);
                echo "</a></td>
                                    <td scope=\"row\"><a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointverification_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "objetVerification", [], "any", false, false, false, 64), "html", null, true);
                echo "</a></td>
                                    <td align=\"center\">
                                    ";
                // line 66
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "pointnonconf", [], "any", false, false, false, 66), "count", [], "any", false, false, false, 66) > 0)) {
                    // line 67
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointverification_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                    echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "pointnonconf", [], "any", false, false, false, 67), "count", [], "any", false, false, false, 67), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 69
                    echo "                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    ";
                }
                // line 71
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                        </tbody>
                        ";
        } else {
            // line 76
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun pointverification !</span></td></tr>
                        ";
        }
        // line 78
        echo "                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Edition de point de vérification ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 87, $this->source); })()), "numero", [], "any", false, false, false, 87), "html", null, true);
        echo "</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["pointverificationForm"]) || array_key_exists("pointverificationForm", $context) ? $context["pointverificationForm"] : (function () { throw new RuntimeError('Variable "pointverificationForm" does not exist.', 91, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pointverificationForm"]) || array_key_exists("pointverificationForm", $context) ? $context["pointverificationForm"] : (function () { throw new RuntimeError('Variable "pointverificationForm" does not exist.', 92, $this->source); })()), "numero", [], "any", false, false, false, 92), 'row');
        echo "
                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pointverificationForm"]) || array_key_exists("pointverificationForm", $context) ? $context["pointverificationForm"] : (function () { throw new RuntimeError('Variable "pointverificationForm" does not exist.', 93, $this->source); })()), "objetVerification", [], "any", false, false, false, 93), 'row');
        echo "
                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pointverificationForm"]) || array_key_exists("pointverificationForm", $context) ? $context["pointverificationForm"] : (function () { throw new RuntimeError('Variable "pointverificationForm" does not exist.', 94, $this->source); })()), "libelleConclusion1", [], "any", false, false, false, 94), 'row');
        echo "
                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pointverificationForm"]) || array_key_exists("pointverificationForm", $context) ? $context["pointverificationForm"] : (function () { throw new RuntimeError('Variable "pointverificationForm" does not exist.', 95, $this->source); })()), "libelleConclusion2", [], "any", false, false, false, 95), 'row');
        echo "
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointverification_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
        echo "\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["pointverificationForm"]) || array_key_exists("pointverificationForm", $context) ? $context["pointverificationForm"] : (function () { throw new RuntimeError('Variable "pointverificationForm" does not exist.', 100, $this->source); })()), 'form_end');
        echo "            
                    </div>
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
        return "pointverification/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 100,  270 => 97,  265 => 95,  261 => 94,  257 => 93,  253 => 92,  249 => 91,  242 => 87,  231 => 78,  227 => 76,  223 => 74,  215 => 71,  211 => 69,  203 => 67,  201 => 66,  194 => 64,  188 => 63,  183 => 62,  180 => 61,  177 => 60,  174 => 59,  171 => 58,  167 => 57,  157 => 49,  155 => 48,  148 => 46,  136 => 37,  126 => 30,  116 => 23,  106 => 16,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des rubriques</span>
            </a>
            <a href=\"{{ path('app_rubrique_show', { 'id': pointverification.rubrique.id}) }}\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Rubriques de {{ pointverification.rubrique.libelle }}</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow bg-light card0 me-4 p-3 priority-4\">
                <nav class=\"navbar text-secondarymy-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de {{ pointverification.rubrique.rapport.libelle }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ pointverification.rubrique.rapport.libelle }}</div>
                        </div>
                    </div>
                </div>

                <nav class=\"navbar text-secondary my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de {{ pointverification.rubrique.libelle }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ pointverification.rubrique.libelle }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des points de vérification de {{ pointverification.rubrique.libelle }} ({{ pointverification.rubrique.pointverification|length }})
                        </caption>
                        {% if pointverification.rubrique.pointverification.count %}
                        <thead>
                            <tr>
                                <th scope=\"col\" width=\"30\"></th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Points Non Conformité</th> 
                            </tr>
                        </thead>
                        <tbody>
                            {% for dep in pointverification.rubrique.pointverification %}
                                {% set cur='' %}
                                {% if pointverification.id==dep.id %}
                                    {% set cur='bg-warning text-dark bg-opacity-25' %}
                                {% endif %}
                                <tr class=\"{{ cur }}\">
                                    <td scope=\"row\"><a href=\"{{ path('app_pointverification_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ dep.numero }}</a></td>
                                    <td scope=\"row\"><a href=\"{{ path('app_pointverification_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none\">{{ dep.objetVerification }}</a></td>
                                    <td align=\"center\">
                                    {% if dep.pointnonconf.count >0 %}
                                        <a href=\"{{ path('app_pointverification_show', {'id': dep.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ dep.pointnonconf.count }}</a>
                                    {% else %}
                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                        {% else %}
                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun pointverification !</span></td></tr>
                        {% endif %}
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Edition de point de vérification {{ pointverification.numero }}</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        {{ form_start(pointverificationForm) }}
                            {{ form_row(pointverificationForm.numero) }}
                            {{ form_row(pointverificationForm.objetVerification) }}
                            {{ form_row(pointverificationForm.libelleConclusion1) }}
                            {{ form_row(pointverificationForm.libelleConclusion2) }}
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"{{ path('app_pointverification_show', { 'id': pointverification.id }) }}\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        {{ form_end(pointverificationForm) }}            
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "pointverification/edit.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/pointverification/edit.html.twig");
    }
}
