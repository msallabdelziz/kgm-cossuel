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

/* departement/add.html.twig */
class __TwigTemplate_44c9eae5c619d9fea8feecafd7f9babd8429b1a4eef78d19405a9514fea4bfa8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departement/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departement/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "departement/add.html.twig", 1);
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
            <a href=\"/region\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des régions</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_index");
        echo "\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Régions</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 bg-body shadow bg-light card0 me-4 p-3\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des régions (";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_region"]) || array_key_exists("les_region", $context) ? $context["les_region"] : (function () { throw new RuntimeError('Variable "les_region" does not exist.', 16, $this->source); })())), "html", null, true);
        echo ")
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_add");
        echo "\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                            <use xlink:href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#plus"), "html", null, true);
        echo "\"></use>
                        </svg>Ajout Région
                    </a>
                </caption>
                <thead>
                    <tr>
                        <th width=\"20%\" scope=\"col\">Code</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\" width=\"1%\" align=\"center\">Départements</th> 
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["les_region"]) || array_key_exists("les_region", $context) ? $context["les_region"] : (function () { throw new RuntimeError('Variable "les_region" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
            // line 32
            echo "                        ";
            $context["cur"] = "";
            // line 33
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33) == twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 33))) {
                // line 34
                echo "                            ";
                $context["cur"] = "bg-warning text-dark bg-opacity-25";
                // line 35
                echo "                        ";
            }
            // line 36
            echo "                        <tr class=\"";
            echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\">
                            <td scope=\"row\"><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "code", [], "any", false, false, false, 37), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "</a></td>
                            <td align=\"center\">
                            ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reg"], "departement", [], "any", false, false, false, 40), "count", [], "any", false, false, false, 40) > 0)) {
                // line 41
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reg"], "departement", [], "any", false, false, false, 41), "count", [], "any", false, false, false, 41), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 43
                echo "                                <code class=\"text-danger text-opacity-50\">-</code>
                            ";
            }
            // line 45
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </tbody>
                </table>
            </div>
            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Région de ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-3\">
                            <label class=\"fw-light fs-7\">Code</label>
                            <div class=\"ms-4\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 61, $this->source); })()), "code", [], "any", false, false, false, 61), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 65, $this->source); })()), "nom", [], "any", false, false, false, 65), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Ajout de département pour ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 73, $this->source); })()), "code", [], "any", false, false, false, 73), "html", null, true);
        echo "</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["departementForm"]) || array_key_exists("departementForm", $context) ? $context["departementForm"] : (function () { throw new RuntimeError('Variable "departementForm" does not exist.', 77, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["departementForm"]) || array_key_exists("departementForm", $context) ? $context["departementForm"] : (function () { throw new RuntimeError('Variable "departementForm" does not exist.', 78, $this->source); })()), "region", [], "any", false, false, false, 78), 'row');
        echo "
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["departementForm"]) || array_key_exists("departementForm", $context) ? $context["departementForm"] : (function () { throw new RuntimeError('Variable "departementForm" does not exist.', 79, $this->source); })()), "code", [], "any", false, false, false, 79), 'row');
        echo "
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["departementForm"]) || array_key_exists("departementForm", $context) ? $context["departementForm"] : (function () { throw new RuntimeError('Variable "departementForm" does not exist.', 80, $this->source); })()), "nom", [], "any", false, false, false, 80), 'row');
        echo "
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)]), "html", null, true);
        echo "\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["departementForm"]) || array_key_exists("departementForm", $context) ? $context["departementForm"] : (function () { throw new RuntimeError('Variable "departementForm" does not exist.', 85, $this->source); })()), 'form_end');
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
        return "departement/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 85,  244 => 82,  239 => 80,  235 => 79,  231 => 78,  227 => 77,  220 => 73,  209 => 65,  202 => 61,  192 => 54,  184 => 48,  176 => 45,  172 => 43,  164 => 41,  162 => 40,  155 => 38,  149 => 37,  144 => 36,  141 => 35,  138 => 34,  135 => 33,  132 => 32,  128 => 31,  113 => 19,  108 => 17,  104 => 16,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/region\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des régions</span>
            </a>
            <a href=\"{{ path('app_region_index') }}\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Régions</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 bg-body shadow bg-light card0 me-4 p-3\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des régions ({{ les_region|length }})
                    <a href=\"{{ path('app_region_add') }}\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#plus') }}\"></use>
                        </svg>Ajout Région
                    </a>
                </caption>
                <thead>
                    <tr>
                        <th width=\"20%\" scope=\"col\">Code</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\" width=\"1%\" align=\"center\">Départements</th> 
                    </tr>
                </thead>
                <tbody>
                    {% for reg in les_region %}
                        {% set cur='' %}
                        {% if region.id==reg.id %}
                            {% set cur='bg-warning text-dark bg-opacity-25' %}
                        {% endif %}
                        <tr class=\"{{ cur }}\">
                            <td scope=\"row\"><a href=\"{{ path('app_region_show', {'id': reg.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ reg.code }}</a></td>
                            <td><a href=\"{{ path('app_region_show', {'id': reg.id }) }}\" class=\"text-dark text-decoration-none\">{{ reg.nom }}</a></td>
                            <td align=\"center\">
                            {% if reg.departement.count >0 %}
                                <a href=\"{{ path('app_region_show', {'id': reg.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ reg.departement.count }}</a>
                            {% else %}
                                <code class=\"text-danger text-opacity-50\">-</code>
                            {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
                </table>
            </div>
            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Région de {{ region.nom }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-3\">
                            <label class=\"fw-light fs-7\">Code</label>
                            <div class=\"ms-4\">{{ region.code }}</div>
                        </div>
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ region.nom }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Ajout de département pour {{ region.code }}</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        {{ form_start(departementForm) }}
                            {{ form_row(departementForm.region) }}
                            {{ form_row(departementForm.code) }}
                            {{ form_row(departementForm.nom) }}
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"{{ path('app_region_show', { 'id': region.id }) }}\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        {{ form_end(departementForm) }}            
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "departement/add.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/departement/add.html.twig");
    }
}
