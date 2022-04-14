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

/* agent/show.html.twig */
class __TwigTemplate_afcf10b5ede606940ded30a62d259259 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agent/show.html.twig", 1);
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

        echo "Administration";
        
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
        echo "    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/agent\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des agents</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_index");
        echo "\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des agents</a>
        </header>
        <div class=\"row\">
            <div class=\"col-6 bg-body shadow bg-light\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des agents (";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 16, $this->source); })())), "html", null, true);
        echo ")
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_create");
        echo "\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Agent</a>
                </caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Matricule</th> 
                        <th scope=\"col\">Nom</th>
                        <th scope=\"col\">Prénom</th>  
                        <th scope=\"col\" width=\"1%\" align=\"center\">Téléphone</th>
                        <th scope=\"col\">Adresse Email</th>
                        <th scope=\"col\">Adresse</th> 
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
            // line 31
            echo "                        ";
            $context["cur"] = "";
            // line 32
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32) == twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 32))) {
                // line 33
                echo "                            ";
                $context["cur"] = "bg-success text-dark bg-opacity-25";
                // line 34
                echo "                        ";
            }
            // line 35
            echo "                        <tr class=\"";
            echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "\">
                            <td scope=\"row\"><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "matricule", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "nom", [], "any", false, false, false, 37), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "prenom", [], "any", false, false, false, 38), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "telephone", [], "any", false, false, false, 39), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "email", [], "any", false, false, false, 40), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "adresse", [], "any", false, false, false, 41), "html", null, true);
            echo "</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </tbody>
                </table>
            </div>
            <div class=\"col-6 shadow border border-light\">
                <nav class=\"navbar navbar-light bg-light my-2\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de l'agent ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 50, $this->source); })()), "nom", [], "any", false, false, false, 50), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Matricule</label>
                            <div class=\"ms-4 fw-bold\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 57, $this->source); })()), "matricule", [], "any", false, false, false, 57), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Nom</label>
                            <div class=\"ms-4 fw-bold\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 61, $this->source); })()), "nom", [], "any", false, false, false, 61), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Adresse</label>
                            <div class=\"ms-4 fw-bold\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 65, $this->source); })()), "adresse", [], "any", false, false, false, 65), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Email</label>
                            <div class=\"ms-4 fw-bold\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Téléphone</label>
                            <div class=\"ms-4 fw-bold\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 73, $this->source); })()), "telephone", [], "any", false, false, false, 73), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Agence</label>
                            ";
        // line 77
        if ( !(null === (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 77, $this->source); })()))) {
            // line 78
            echo "                            <div class=\"ms-4 fw-bold\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 78, $this->source); })()), "agence", [], "any", false, false, false, 78), "nom", [], "any", false, false, false, 78), "html", null, true);
            echo "</div>
                            ";
        }
        // line 80
        echo "                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                        <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
        echo "\" class=\"btn btn py-0 fs-7 btn-secondary\">Retour</a>
                        <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
        echo "\" class=\"btn btn py-0 fs-7 btn-warning\">Modifier</a>
                        <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
        echo "\" class=\"btn btn-sm py-0 fs-7 btn-danger\">Supprimer</a>
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
        return "agent/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 85,  256 => 84,  252 => 83,  247 => 80,  241 => 78,  239 => 77,  232 => 73,  225 => 69,  218 => 65,  211 => 61,  204 => 57,  194 => 50,  186 => 44,  175 => 41,  169 => 40,  163 => 39,  157 => 38,  151 => 37,  145 => 36,  140 => 35,  137 => 34,  134 => 33,  131 => 32,  128 => 31,  124 => 30,  108 => 17,  104 => 16,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/agent\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des agents</span>
            </a>
            <a href=\"{{ path('app_agent_index') }}\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des agents</a>
        </header>
        <div class=\"row\">
            <div class=\"col-6 bg-body shadow bg-light\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des agents ({{ agents|length }})
                    <a href=\"{{ path('app_agent_create') }}\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Agent</a>
                </caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Matricule</th> 
                        <th scope=\"col\">Nom</th>
                        <th scope=\"col\">Prénom</th>  
                        <th scope=\"col\" width=\"1%\" align=\"center\">Téléphone</th>
                        <th scope=\"col\">Adresse Email</th>
                        <th scope=\"col\">Adresse</th> 
                    </tr>
                </thead>
                <tbody>
                    {% for ag in agents %}
                        {% set cur='' %}
                        {% if agent.id==ag.id %}
                            {% set cur='bg-success text-dark bg-opacity-25' %}
                        {% endif %}
                        <tr class=\"{{ cur }}\">
                            <td scope=\"row\"><a href=\"{{ path('app_agence_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ ag.matricule }}</a></td>
                            <td><a href=\"{{ path('app_agence_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none\">{{ ag.nom }}</a></td>
                            <td><a href=\"{{ path('app_agence_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none\">{{ ag.prenom }}</a></td>
                            <td><a href=\"{{ path('app_agence_show', {'id': ag.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ ag.telephone }}</a></td>
                            <td><a href=\"{{ path('app_agence_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none\">{{ ag.email }}</a></td>
                            <td><a href=\"{{ path('app_agence_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none\">{{ ag.adresse }}</a></td>
                        </tr>
                    {% endfor %}
                </tbody>
                </table>
            </div>
            <div class=\"col-6 shadow border border-light\">
                <nav class=\"navbar navbar-light bg-light my-2\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de l'agent {{ agent.nom }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Matricule</label>
                            <div class=\"ms-4 fw-bold\">{{ agent.matricule }}</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Nom</label>
                            <div class=\"ms-4 fw-bold\">{{ agent.nom }}</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Adresse</label>
                            <div class=\"ms-4 fw-bold\">{{ agent.adresse }}</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Email</label>
                            <div class=\"ms-4 fw-bold\">{{ agent.email }}</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Téléphone</label>
                            <div class=\"ms-4 fw-bold\">{{ agent.telephone }}</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Agence</label>
                            {% if ag is not null %}
                            <div class=\"ms-4 fw-bold\"> {{ ag.agence.nom }}</div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                        <a href=\"{{ path('app_agent_index', {'id': agent.id }) }}\" class=\"btn btn py-0 fs-7 btn-secondary\">Retour</a>
                        <a href=\"{{ path('app_agent_update', {'id': agent.id }) }}\" class=\"btn btn py-0 fs-7 btn-warning\">Modifier</a>
                        <a href=\"{{ path('app_agent_delete', {'id': agent.id }) }}\" class=\"btn btn-sm py-0 fs-7 btn-danger\">Supprimer</a>
                    </div>
                </div>

               
            </div>
        </div>
    </section>
{% endblock %}
", "agent/show.html.twig", "E:\\symfony\\kgm-cossuel-master\\templates\\agent\\show.html.twig");
    }
}
