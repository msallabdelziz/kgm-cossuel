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

/* agence/show.html.twig */
class __TwigTemplate_1e9bd3b61d7cb77e47ed6701dd96c07f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agence/show.html.twig", 1);
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
            <a href=\"/agence\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des agences</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_index");
        echo "\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des agences</a>
        </header>
        <div class=\"row\">
            <div class=\"col-6 bg-body shadow bg-light\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des agences (";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["agences"]) || array_key_exists("agences", $context) ? $context["agences"] : (function () { throw new RuntimeError('Variable "agences" does not exist.', 16, $this->source); })())), "html", null, true);
        echo ")
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_create");
        echo "\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Région</a>
                </caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Code</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\" width=\"1%\" align=\"center\">Téléphone</th>
                        <th scope=\"col\">Adresse Email</th>
                        <th scope=\"col\">Adresse</th> 
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agences"]) || array_key_exists("agences", $context) ? $context["agences"] : (function () { throw new RuntimeError('Variable "agences" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
            // line 30
            echo "                        ";
            $context["cur"] = "";
            // line 31
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31) == twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 31))) {
                // line 32
                echo "                            ";
                $context["cur"] = "bg-success text-dark bg-opacity-25";
                // line 33
                echo "                        ";
            }
            // line 34
            echo "                        <tr class=\"";
            echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\">
                            <td scope=\"row\"><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "code", [], "any", false, false, false, 35), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "telephone", [], "any", false, false, false, 37), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "email", [], "any", false, false, false, 38), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "adresse", [], "any", false, false, false, 39), "html", null, true);
            echo "</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </tbody>
                </table>
            </div>
            <div class=\"col-6 shadow border border-light\">
                <nav class=\"navbar navbar-light bg-light my-2\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails agence de ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 48, $this->source); })()), "nom", [], "any", false, false, false, 48), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Code</label>
                            <div class=\"ms-4 fw-bold\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 55, $this->source); })()), "code", [], "any", false, false, false, 55), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Nom</label>
                            <div class=\"ms-4 fw-bold\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 59, $this->source); })()), "nom", [], "any", false, false, false, 59), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Adresse</label>
                            <div class=\"ms-4 fw-bold\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 63, $this->source); })()), "adresse", [], "any", false, false, false, 63), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Email</label>
                            <div class=\"ms-4 fw-bold\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Téléphone</label>
                            <div class=\"ms-4 fw-bold\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 71, $this->source); })()), "telephone", [], "any", false, false, false, 71), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                        <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
        echo "\" class=\"btn btn py-0 fs-7 btn-secondary\">Retour</a>
                        <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
        echo "\" class=\"btn btn py-0 fs-7 btn-warning\">Modifier</a>
                        <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
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
        return "agence/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 77,  236 => 76,  232 => 75,  225 => 71,  218 => 67,  211 => 63,  204 => 59,  197 => 55,  187 => 48,  179 => 42,  168 => 39,  162 => 38,  156 => 37,  150 => 36,  144 => 35,  139 => 34,  136 => 33,  133 => 32,  130 => 31,  127 => 30,  123 => 29,  108 => 17,  104 => 16,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/agence\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des agences</span>
            </a>
            <a href=\"{{ path('app_agence_index') }}\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des agences</a>
        </header>
        <div class=\"row\">
            <div class=\"col-6 bg-body shadow bg-light\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des agences ({{ agences|length }})
                    <a href=\"{{ path('app_agence_create') }}\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Région</a>
                </caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Code</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\" width=\"1%\" align=\"center\">Téléphone</th>
                        <th scope=\"col\">Adresse Email</th>
                        <th scope=\"col\">Adresse</th> 
                    </tr>
                </thead>
                <tbody>
                    {% for ag in agences %}
                        {% set cur='' %}
                        {% if agence.id==ag.id %}
                            {% set cur='bg-success text-dark bg-opacity-25' %}
                        {% endif %}
                        <tr class=\"{{ cur }}\">
                            <td scope=\"row\"><a href=\"{{ path('app_agence_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ ag.code }}</a></td>
                            <td><a href=\"{{ path('app_agence_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none\">{{ ag.nom }}</a></td>
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
                        <span class=\"navbar-brand mb-0 h1\">Détails agence de {{ agence.nom }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Code</label>
                            <div class=\"ms-4 fw-bold\">{{ agence.code }}</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Nom</label>
                            <div class=\"ms-4 fw-bold\">{{ agence.nom }}</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Adresse</label>
                            <div class=\"ms-4 fw-bold\">{{ agence.adresse }}</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Email</label>
                            <div class=\"ms-4 fw-bold\">{{ agence.email }}</div>
                        </div>
                        <div class=\"col-4\">
                            <label class=\"fw-light\">Téléphone</label>
                            <div class=\"ms-4 fw-bold\">{{ agence.telephone }}</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                        <a href=\"{{ path('app_agence_index', {'id': agence.id }) }}\" class=\"btn btn py-0 fs-7 btn-secondary\">Retour</a>
                        <a href=\"{{ path('app_agence_update', {'id': agence.id }) }}\" class=\"btn btn py-0 fs-7 btn-warning\">Modifier</a>
                        <a href=\"{{ path('app_agence_delete', {'id': agence.id }) }}\" class=\"btn btn-sm py-0 fs-7 btn-danger\">Supprimer</a>
                    </div>
                </div>

               
            </div>
        </div>
    </section>
{% endblock %}
", "agence/show.html.twig", "E:\\symfony\\kgm-cossuel-master\\templates\\agence\\show.html.twig");
    }
}
