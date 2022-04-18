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

/* localite/edit.html.twig */
class __TwigTemplate_d40db5382ea9d998a0753b254862d7b0996e96397fec6f43e87ed554ee139ca2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "localite/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "localite/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "localite/edit.html.twig", 1);
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
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des départements</span>
            </a>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 10, $this->source); })()), "departement", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Départements de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 10, $this->source); })()), "departement", [], "any", false, false, false, 10), "nom", [], "any", false, false, false, 10), "html", null, true);
        echo "</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 bg-body shadow bg-light card0 me-4 p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Région de ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 16, $this->source); })()), "departement", [], "any", false, false, false, 16), "region", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-4\">
                            <label class=\"fw-light fs-7\">Code</label>
                            <div class=\"ms-4\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 23, $this->source); })()), "departement", [], "any", false, false, false, 23), "region", [], "any", false, false, false, 23), "code", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-8\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 27, $this->source); })()), "departement", [], "any", false, false, false, 27), "region", [], "any", false, false, false, 27), "nom", [], "any", false, false, false, 27), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des départements de ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 36, $this->source); })()), "departement", [], "any", false, false, false, 36), "region", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 36, $this->source); })()), "departement", [], "any", false, false, false, 36), "region", [], "any", false, false, false, 36), "departement", [], "any", false, false, false, 36)), "html", null, true);
        echo ")
                        </caption>
                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Localités</th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 46, $this->source); })()), "departement", [], "any", false, false, false, 46), "region", [], "any", false, false, false, 46), "departement", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 47
            echo "                                ";
            $context["cur"] = "";
            // line 48
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 48, $this->source); })()), "departement", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 48))) {
                // line 49
                echo "                                    ";
                $context["cur"] = "bg-warning text-dark bg-opacity-25";
                // line 50
                echo "                                ";
            }
            // line 51
            echo "                                <tr class=\"";
            echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 51, $this->source); })()), "html", null, true);
            echo "\">
                                    <td scope=\"row\"><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "code", [], "any", false, false, false, 52), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "nom", [], "any", false, false, false, 53), "html", null, true);
            echo "</a></td>
                                    <td align=\"center\">
                                    ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "localite", [], "any", false, false, false, 55), "count", [], "any", false, false, false, 55) > 0)) {
                // line 56
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "localite", [], "any", false, false, false, 56), "count", [], "any", false, false, false, 56), "html", null, true);
                echo "</a>
                                    ";
            } else {
                // line 58
                echo "                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    ";
            }
            // line 60
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de département de ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 71, $this->source); })()), "departement", [], "any", false, false, false, 71), "nom", [], "any", false, false, false, 71), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-3\">
                            <label class=\"fw-light fs-7\">Code</label>
                            <div class=\"ms-4\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 78, $this->source); })()), "departement", [], "any", false, false, false, 78), "code", [], "any", false, false, false, 78), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 82, $this->source); })()), "departement", [], "any", false, false, false, 82), "nom", [], "any", false, false, false, 82), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Edition de localité ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 90, $this->source); })()), "code", [], "any", false, false, false, 90), "html", null, true);
        echo "</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["localiteForm"]) || array_key_exists("localiteForm", $context) ? $context["localiteForm"] : (function () { throw new RuntimeError('Variable "localiteForm" does not exist.', 94, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localiteForm"]) || array_key_exists("localiteForm", $context) ? $context["localiteForm"] : (function () { throw new RuntimeError('Variable "localiteForm" does not exist.', 95, $this->source); })()), "departement", [], "any", false, false, false, 95), 'row');
        echo "
                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localiteForm"]) || array_key_exists("localiteForm", $context) ? $context["localiteForm"] : (function () { throw new RuntimeError('Variable "localiteForm" does not exist.', 96, $this->source); })()), "code", [], "any", false, false, false, 96), 'row');
        echo "
                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localiteForm"]) || array_key_exists("localiteForm", $context) ? $context["localiteForm"] : (function () { throw new RuntimeError('Variable "localiteForm" does not exist.', 97, $this->source); })()), "nom", [], "any", false, false, false, 97), 'row');
        echo "
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 99, $this->source); })()), "departement", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99)]), "html", null, true);
        echo "\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["localiteForm"]) || array_key_exists("localiteForm", $context) ? $context["localiteForm"] : (function () { throw new RuntimeError('Variable "localiteForm" does not exist.', 102, $this->source); })()), 'form_end');
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
        return "localite/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 102,  268 => 99,  263 => 97,  259 => 96,  255 => 95,  251 => 94,  244 => 90,  233 => 82,  226 => 78,  216 => 71,  206 => 63,  198 => 60,  194 => 58,  186 => 56,  184 => 55,  177 => 53,  171 => 52,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  154 => 47,  150 => 46,  135 => 36,  123 => 27,  116 => 23,  106 => 16,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des départements</span>
            </a>
            <a href=\"{{ path('app_departement_show', { 'id': localite.departement.id}) }}\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Départements de {{ localite.departement.nom }}</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 bg-body shadow bg-light card0 me-4 p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Région de {{ localite.departement.region.nom }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-4\">
                            <label class=\"fw-light fs-7\">Code</label>
                            <div class=\"ms-4\">{{ localite.departement.region.code }}</div>
                        </div>
                        <div class=\"col-8\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ localite.departement.region.nom }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des départements de {{ localite.departement.region.nom }} ({{ localite.departement.region.departement|length }})
                        </caption>
                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Localités</th> 
                            </tr>
                        </thead>
                        <tbody>
                            {% for dep in localite.departement.region.departement %}
                                {% set cur='' %}
                                {% if localite.departement.id==dep.id %}
                                    {% set cur='bg-warning text-dark bg-opacity-25' %}
                                {% endif %}
                                <tr class=\"{{ cur }}\">
                                    <td scope=\"row\"><a href=\"{{ path('app_departement_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ dep.code }}</a></td>
                                    <td><a href=\"{{ path('app_departement_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none\">{{ dep.nom }}</a></td>
                                    <td align=\"center\">
                                    {% if dep.localite.count >0 %}
                                        <a href=\"{{ path('app_departement_show', {'id': dep.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ dep.localite.count }}</a>
                                    {% else %}
                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de département de {{ localite.departement.nom }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-3\">
                            <label class=\"fw-light fs-7\">Code</label>
                            <div class=\"ms-4\">{{ localite.departement.code }}</div>
                        </div>
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ localite.departement.nom }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Edition de localité {{ localite.code }}</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        {{ form_start(localiteForm) }}
                            {{ form_row(localiteForm.departement) }}
                            {{ form_row(localiteForm.code) }}
                            {{ form_row(localiteForm.nom) }}
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"{{ path('app_departement_show', { 'id': localite.departement.id }) }}\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        {{ form_end(localiteForm) }}            
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "localite/edit.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/localite/edit.html.twig");
    }
}
