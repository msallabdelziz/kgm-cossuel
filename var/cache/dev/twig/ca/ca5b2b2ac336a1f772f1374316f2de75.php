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

/* agence/add.html.twig */
class __TwigTemplate_ac920cb5b31464486dc5efeaf1df9ea8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agence/add.html.twig", 1);
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
            <a href=\"/agence\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des agences</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Agences</a>
        </header>
        <div class=\"row\">
        ";
        // line 13
        $context["offset"] = "offset-md-3";
        echo "            
        ";
        // line 14
        if (twig_length_filter($this->env, (isset($context["les_agence"]) || array_key_exists("les_agence", $context) ? $context["les_agence"] : (function () { throw new RuntimeError('Variable "les_agence" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "        ";
            $context["offset"] = "";
            echo "            
            <div class=\"col-5 shadow bg-light card0 me-4 p-3 priority-4\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des agences (";
            // line 19
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_agence"]) || array_key_exists("les_agence", $context) ? $context["les_agence"] : (function () { throw new RuntimeError('Variable "les_agence" does not exist.', 19, $this->source); })())), "html", null, true);
            echo ")
                </caption>
                <thead>
                    <tr>
                        <th width=\"20%\" scope=\"col\">Code</th> 
                        <th scope=\"col\">Nom</th> 
                        ";
            // line 26
            echo "                    </tr>
                </thead>
                <tbody>
                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_agence"]) || array_key_exists("les_agence", $context) ? $context["les_agence"] : (function () { throw new RuntimeError('Variable "les_agence" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
                // line 30
                echo "                        ";
                $context["cur"] = "";
                // line 31
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31) == twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 31))) {
                    // line 32
                    echo "                            ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 33
                    echo "                        ";
                }
                // line 34
                echo "                        <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 34, $this->source); })()), "html", null, true);
                echo "\">
                            <td scope=\"row\"><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "code", [], "any", false, false, false, 35), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "nom", [], "any", false, false, false, 36), "html", null, true);
                echo "</a></td>
                            ";
                // line 44
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                </tbody>
                </table>
            </div>
        ";
        }
        // line 50
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 50, $this->source); })()), "html", null, true);
        echo " col-lg-6 mb-2 shadow border border-light card p-3\">

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Ajout d'Agence</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["agenceForm"]) || array_key_exists("agenceForm", $context) ? $context["agenceForm"] : (function () { throw new RuntimeError('Variable "agenceForm" does not exist.', 59, $this->source); })()), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col-lg-5\">
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agenceForm"]) || array_key_exists("agenceForm", $context) ? $context["agenceForm"] : (function () { throw new RuntimeError('Variable "agenceForm" does not exist.', 62, $this->source); })()), "code", [], "any", false, false, false, 62), 'row');
        echo "<br>
                                </div>
                                <div class=\"col-lg-7\">
                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agenceForm"]) || array_key_exists("agenceForm", $context) ? $context["agenceForm"] : (function () { throw new RuntimeError('Variable "agenceForm" does not exist.', 65, $this->source); })()), "nom", [], "any", false, false, false, 65), 'row');
        echo "<br>
                                </div>
                                <div class=\"col-lg-12\">
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agenceForm"]) || array_key_exists("agenceForm", $context) ? $context["agenceForm"] : (function () { throw new RuntimeError('Variable "agenceForm" does not exist.', 68, $this->source); })()), "adresse", [], "any", false, false, false, 68), 'row');
        echo "<br>
                                </div>
                                <div class=\"col-lg-5\">
                                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agenceForm"]) || array_key_exists("agenceForm", $context) ? $context["agenceForm"] : (function () { throw new RuntimeError('Variable "agenceForm" does not exist.', 71, $this->source); })()), "telephone", [], "any", false, false, false, 71), 'row');
        echo "<br>
                                </div>
                                <div class=\"col-lg-7\">
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["agenceForm"]) || array_key_exists("agenceForm", $context) ? $context["agenceForm"] : (function () { throw new RuntimeError('Variable "agenceForm" does not exist.', 74, $this->source); })()), "email", [], "any", false, false, false, 74), 'row');
        echo "<br>
                                </div>
                            </div>
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_index");
        echo "\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["agenceForm"]) || array_key_exists("agenceForm", $context) ? $context["agenceForm"] : (function () { throw new RuntimeError('Variable "agenceForm" does not exist.', 81, $this->source); })()), 'form_end');
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
        return "agence/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 81,  225 => 78,  218 => 74,  212 => 71,  206 => 68,  200 => 65,  194 => 62,  188 => 59,  175 => 50,  169 => 46,  162 => 44,  156 => 36,  150 => 35,  145 => 34,  142 => 33,  139 => 32,  136 => 31,  133 => 30,  129 => 29,  124 => 26,  115 => 19,  107 => 15,  105 => 14,  101 => 13,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/agence\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des agences</span>
            </a>
            <a href=\"{{ path('app_agence_index') }}\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Agences</a>
        </header>
        <div class=\"row\">
        {% set offset=\"offset-md-3\" %}            
        {% if les_agence|length %}
        {% set offset=\"\" %}            
            <div class=\"col-5 shadow bg-light card0 me-4 p-3 priority-4\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des agences ({{ les_agence|length }})
                </caption>
                <thead>
                    <tr>
                        <th width=\"20%\" scope=\"col\">Code</th> 
                        <th scope=\"col\">Nom</th> 
                        {# <th scope=\"col\" width=\"1%\" align=\"center\">Agents</th>  #}
                    </tr>
                </thead>
                <tbody>
                    {% for reg in les_agence %}
                        {% set cur='' %}
                        {% if agence.id==reg.id %}
                            {% set cur='bg-warning text-dark bg-opacity-25' %}
                        {% endif %}
                        <tr class=\"{{ cur }}\">
                            <td scope=\"row\"><a href=\"{{ path('app_agence_show', {'id': reg.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ reg.code }}</a></td>
                            <td><a href=\"{{ path('app_agence_show', {'id': reg.id }) }}\" class=\"text-dark text-decoration-none\">{{ reg.nom }}</a></td>
                            {# <td align=\"center\">
                            {% if reg.agent.count >0 %}
                                <a href=\"{{ path('app_agence_show', {'id': reg.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ reg.agence.count }}</a>
                            {% else %}
                                <code class=\"text-danger text-opacity-50\">-</code>
                            {% endif %}
                            </td> #}
                        </tr>
                    {% endfor %}
                </tbody>
                </table>
            </div>
        {% endif %}
            <div class=\"{{ offset }} col-lg-6 mb-2 shadow border border-light card p-3\">

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Ajout d'Agence</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        {{ form_start(agenceForm) }}
                            <div class=\"row\">
                                <div class=\"col-lg-5\">
                                    {{ form_row(agenceForm.code) }}<br>
                                </div>
                                <div class=\"col-lg-7\">
                                    {{ form_row(agenceForm.nom) }}<br>
                                </div>
                                <div class=\"col-lg-12\">
                                    {{ form_row(agenceForm.adresse) }}<br>
                                </div>
                                <div class=\"col-lg-5\">
                                    {{ form_row(agenceForm.telephone) }}<br>
                                </div>
                                <div class=\"col-lg-7\">
                                    {{ form_row(agenceForm.email) }}<br>
                                </div>
                            </div>
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"{{ path('app_agence_index') }}\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        {{ form_end(agenceForm) }}            
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "agence/add.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/agence/add.html.twig");
    }
}
