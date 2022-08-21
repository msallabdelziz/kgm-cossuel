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

/* electricien/new.html.twig */
class __TwigTemplate_57e72ca525fbbae744d91bbffd432ce7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "electricien/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "electricien/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "electricien/new.html.twig", 1);
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
        echo "    <div class=\"row-fluid\">
        <ul class=\"nav nav-pills mb-4 pb-2 border-bottom border-dark\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Electriciens installateurs</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_index");
        echo "\">Propriétaires d'installation</a>
            </li>
        </ul>
    </div>
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/electricien\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des Electriciens</span>
            </a>
            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Electriciens</a>
        </header>
        <div class=\"row\">
        ";
        // line 23
        $context["offset"] = "offset-md-3";
        echo "            
        ";
        // line 24
        if (twig_length_filter($this->env, (isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 24, $this->source); })()))) {
            // line 25
            echo "        ";
            $context["offset"] = "";
            echo "            
            <div class=\"col-5 bg-body shadow bg-light card0 me-4 p-3 priority-4\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des Electriciens (";
            // line 29
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 29, $this->source); })())), "html", null, true);
            echo ")
                </caption>
                <thead>
                    <tr>
                        <th>Téléphone</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\">Prénom</th> 
                        ";
            // line 37
            echo "                    </tr>
                </thead>
                <tbody>
                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
                // line 41
                echo "                        ";
                $context["cur"] = "";
                // line 42
                echo "                        ";
                if ((array_key_exists("electricien", $context) && (twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42) == twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 42)))) {
                    // line 43
                    echo "                            ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 44
                    echo "                        ";
                }
                // line 45
                echo "                        <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 45, $this->source); })()), "html", null, true);
                echo "\">
                            <td scope=\"row\"><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "telephone", [], "any", false, false, false, 46), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "nom", [], "any", false, false, false, 47), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "prenom", [], "any", false, false, false, 48), "html", null, true);
                echo "</a></td>
                            ";
                // line 56
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                </tbody>
                </table>
            </div>
        ";
        }
        // line 62
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 62, $this->source); })()), "html", null, true);
        echo " col-lg-6 mb-2 shadow border border-light card p-3\">

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Ajout Electricien</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                            ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["electricienForm"]) || array_key_exists("electricienForm", $context) ? $context["electricienForm"] : (function () { throw new RuntimeError('Variable "electricienForm" does not exist.', 71, $this->source); })()), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col-5\">
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["electricienForm"]) || array_key_exists("electricienForm", $context) ? $context["electricienForm"] : (function () { throw new RuntimeError('Variable "electricienForm" does not exist.', 74, $this->source); })()), "nom", [], "any", false, false, false, 74), 'row');
        echo "
                                </div>
                                <div class=\"col-7\">
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["electricienForm"]) || array_key_exists("electricienForm", $context) ? $context["electricienForm"] : (function () { throw new RuntimeError('Variable "electricienForm" does not exist.', 77, $this->source); })()), "prenom", [], "any", false, false, false, 77), 'row');
        echo "
                                </div>
                                <div class=\"col-5\">
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["electricienForm"]) || array_key_exists("electricienForm", $context) ? $context["electricienForm"] : (function () { throw new RuntimeError('Variable "electricienForm" does not exist.', 80, $this->source); })()), "localite", [], "any", false, false, false, 80), 'row');
        echo "
                                </div>
                                <div class=\"col-7\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["electricienForm"]) || array_key_exists("electricienForm", $context) ? $context["electricienForm"] : (function () { throw new RuntimeError('Variable "electricienForm" does not exist.', 83, $this->source); })()), "adresse", [], "any", false, false, false, 83), 'row');
        echo "
                                </div>
                                <div class=\"col-5\">
                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["electricienForm"]) || array_key_exists("electricienForm", $context) ? $context["electricienForm"] : (function () { throw new RuntimeError('Variable "electricienForm" does not exist.', 86, $this->source); })()), "telephone", [], "any", false, false, false, 86), 'row');
        echo "
                                </div>
                                <div class=\"col-7\">
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["electricienForm"]) || array_key_exists("electricienForm", $context) ? $context["electricienForm"] : (function () { throw new RuntimeError('Variable "electricienForm" does not exist.', 89, $this->source); })()), "email", [], "any", false, false, false, 89), 'row');
        echo "
                                </div>
                                <div class=\"col-5\">
                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["electricienForm"]) || array_key_exists("electricienForm", $context) ? $context["electricienForm"] : (function () { throw new RuntimeError('Variable "electricienForm" does not exist.', 92, $this->source); })()), "typePiece", [], "any", false, false, false, 92), 'row');
        echo "
                                </div>
                                <div class=\"col-7\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["electricienForm"]) || array_key_exists("electricienForm", $context) ? $context["electricienForm"] : (function () { throw new RuntimeError('Variable "electricienForm" does not exist.', 95, $this->source); })()), "numPiece", [], "any", false, false, false, 95), 'row');
        echo "
                                </div>
                            </div>
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_index");
        echo "\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["electricienForm"]) || array_key_exists("electricienForm", $context) ? $context["electricienForm"] : (function () { throw new RuntimeError('Variable "electricienForm" does not exist.', 102, $this->source); })()), 'form_end');
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
        return "electricien/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 102,  263 => 99,  256 => 95,  250 => 92,  244 => 89,  238 => 86,  232 => 83,  226 => 80,  220 => 77,  214 => 74,  208 => 71,  195 => 62,  189 => 58,  182 => 56,  176 => 48,  170 => 47,  164 => 46,  159 => 45,  156 => 44,  153 => 43,  150 => 42,  147 => 41,  143 => 40,  138 => 37,  128 => 29,  120 => 25,  118 => 24,  114 => 23,  108 => 20,  96 => 11,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <div class=\"row-fluid\">
        <ul class=\"nav nav-pills mb-4 pb-2 border-bottom border-dark\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Electriciens installateurs</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_proprietaire_index') }}\">Propriétaires d'installation</a>
            </li>
        </ul>
    </div>
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/electricien\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des Electriciens</span>
            </a>
            <a href=\"{{ path('app_electricien_index') }}\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Electriciens</a>
        </header>
        <div class=\"row\">
        {% set offset=\"offset-md-3\" %}            
        {% if les_electricien|length %}
        {% set offset=\"\" %}            
            <div class=\"col-5 bg-body shadow bg-light card0 me-4 p-3 priority-4\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des Electriciens ({{ les_electricien|length }})
                </caption>
                <thead>
                    <tr>
                        <th>Téléphone</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\">Prénom</th> 
                        {# <th scope=\"col\" width=\"1%\" align=\"center\">Electriciens</th>  #}
                    </tr>
                </thead>
                <tbody>
                    {% for reg in les_electricien %}
                        {% set cur='' %}
                        {% if electricien is defined and electricien.id==reg.id %}
                            {% set cur='bg-warning text-dark bg-opacity-25' %}
                        {% endif %}
                        <tr class=\"{{ cur }}\">
                            <td scope=\"row\"><a href=\"{{ path('app_electricien_show', {'id': reg.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ reg.telephone }}</a></td>
                            <td><a href=\"{{ path('app_electricien_show', {'id': reg.id }) }}\" class=\"text-dark text-decoration-none\">{{ reg.nom }}</a></td>
                            <td><a href=\"{{ path('app_electricien_show', {'id': reg.id }) }}\" class=\"text-dark text-decoration-none\">{{ reg.prenom }}</a></td>
                            {# <td align=\"center\">
                            {% if reg.electricien.count >0 %}
                                <a href=\"{{ path('app_electricien_show', {'id': reg.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ reg.electricien.count }}</a>
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
                            <span class=\"navbar-brand mb-0 h1\">Ajout Electricien</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                            {{ form_start(electricienForm) }}
                            <div class=\"row\">
                                <div class=\"col-5\">
                                    {{ form_row(electricienForm.nom) }}
                                </div>
                                <div class=\"col-7\">
                                    {{ form_row(electricienForm.prenom) }}
                                </div>
                                <div class=\"col-5\">
                                    {{ form_row(electricienForm.localite) }}
                                </div>
                                <div class=\"col-7\">
                                    {{ form_row(electricienForm.adresse) }}
                                </div>
                                <div class=\"col-5\">
                                    {{ form_row(electricienForm.telephone) }}
                                </div>
                                <div class=\"col-7\">
                                    {{ form_row(electricienForm.email) }}
                                </div>
                                <div class=\"col-5\">
                                    {{ form_row(electricienForm.typePiece) }}
                                </div>
                                <div class=\"col-7\">
                                    {{ form_row(electricienForm.numPiece) }}
                                </div>
                            </div>
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"{{ path('app_electricien_index') }}\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        {{ form_end(electricienForm) }}            
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "electricien/new.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/electricien/new.html.twig");
    }
}
