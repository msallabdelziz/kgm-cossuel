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

/* utilisateur/show.html.twig */
class __TwigTemplate_6a662ec9e50e76650c8a2f7c51ac1a901db57fad7cd3cac84332ef7496c50450 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/show.html.twig", 1);
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
            <a href=\"/utilisateur\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des utilisateurs</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        echo "\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Utilisateurs</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4\">
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des utilisateurs (";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_utilisateur"]) || array_key_exists("les_utilisateur", $context) ? $context["les_utilisateur"] : (function () { throw new RuntimeError('Variable "les_utilisateur" does not exist.', 18, $this->source); })())), "html", null, true);
        echo ")
                            <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_add");
        echo "\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#plus"), "html", null, true);
        echo "\"></use>
                                </svg>Ajout Utilisateur
                            </a>
                        </caption>
                        ";
        // line 25
        if ((isset($context["les_utilisateur"]) || array_key_exists("les_utilisateur", $context) ? $context["les_utilisateur"] : (function () { throw new RuntimeError('Variable "les_utilisateur" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Type</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\">Prénom</th> 
                                ";
            // line 32
            echo "                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_utilisateur"]) || array_key_exists("les_utilisateur", $context) ? $context["les_utilisateur"] : (function () { throw new RuntimeError('Variable "les_utilisateur" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 36
                echo "                                ";
                $context["cur"] = "";
                // line 37
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 37))) {
                    // line 38
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 39
                    echo "                                ";
                }
                // line 40
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 40, $this->source); })()), "html", null, true);
                echo "\">
                                    <td scope=\"row\"><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "type", [], "any", false, false, false, 41), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "nom", [], "any", false, false, false, 42), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "prenom", [], "any", false, false, false, 43), "html", null, true);
                echo "</a></td>
";
                // line 52
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                        </tbody>
                        ";
        } else {
            // line 56
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun utilisateur !</span></td></tr>
                        ";
        }
        // line 58
        echo "                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails du utilisateur ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Type</label>
                            <div class=\"ms-4\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 73, $this->source); })()), "type", [], "any", false, false, false, 73), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Identifiant</label>
                            <div class=\"ms-4\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 77, $this->source); })()), "login", [], "any", false, false, false, 77), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 81, $this->source); })()), "nom", [], "any", false, false, false, 81), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Prénom</label>
                            <div class=\"ms-4\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 85, $this->source); })()), "prenom", [], "any", false, false, false, 85), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Adresse</label>
                            <div class=\"ms-4\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 89, $this->source); })()), "adresse", [], "any", false, false, false, 89), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Téléphone</label>
                            <div class=\"ms-4\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 93, $this->source); })()), "telephone", [], "any", false, false, false, 93), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Email</label>
                            <div class=\"ms-4\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 97, $this->source); })()), "email", [], "any", false, false, false, 97), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        echo "\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-counterclockwise"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)]), "html", null, true);
        echo "\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
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
        return "utilisateur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 113,  275 => 108,  270 => 106,  264 => 103,  259 => 101,  252 => 97,  245 => 93,  238 => 89,  231 => 85,  224 => 81,  217 => 77,  210 => 73,  200 => 66,  190 => 58,  186 => 56,  182 => 54,  175 => 52,  169 => 43,  163 => 42,  157 => 41,  152 => 40,  149 => 39,  146 => 38,  143 => 37,  140 => 36,  136 => 35,  131 => 32,  124 => 26,  122 => 25,  115 => 21,  110 => 19,  106 => 18,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/utilisateur\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des utilisateurs</span>
            </a>
            <a href=\"{{ path('app_utilisateur_index') }}\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Utilisateurs</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4\">
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des utilisateurs ({{ les_utilisateur|length }})
                            <a href=\"{{ path('app_utilisateur_add') }}\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#plus') }}\"></use>
                                </svg>Ajout Utilisateur
                            </a>
                        </caption>
                        {% if les_utilisateur  %}
                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Type</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\">Prénom</th> 
                                {# <th scope=\"col\" width=\"1%\" align=\"center\">Localités</th>  #}
                            </tr>
                        </thead>
                        <tbody>
                            {% for dep in les_utilisateur %}
                                {% set cur='' %}
                                {% if utilisateur.id==dep.id %}
                                    {% set cur='bg-warning text-dark bg-opacity-25' %}
                                {% endif %}
                                <tr class=\"{{ cur }}\">
                                    <td scope=\"row\"><a href=\"{{ path('app_utilisateur_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ dep.type }}</a></td>
                                    <td><a href=\"{{ path('app_utilisateur_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none\">{{ dep.nom }}</a></td>
                                    <td><a href=\"{{ path('app_utilisateur_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none\">{{ dep.prenom }}</a></td>
{#                                     
                                    <td align=\"center\">
                                    {% if dep.localite.count >0 %}
                                        <a href=\"{{ path('app_utilisateur_show', {'id': dep.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ dep.localite.count }}</a>
                                    {% else %}
                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    {% endif %}
                                    </td> #}
                                </tr>
                            {% endfor %}
                        </tbody>
                        {% else %}
                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun utilisateur !</span></td></tr>
                        {% endif %}
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails du utilisateur {{ utilisateur }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Type</label>
                            <div class=\"ms-4\">{{ utilisateur.type }}</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Identifiant</label>
                            <div class=\"ms-4\">{{ utilisateur.login }}</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ utilisateur.nom }}</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Prénom</label>
                            <div class=\"ms-4\">{{ utilisateur.prenom }}</div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Adresse</label>
                            <div class=\"ms-4\">{{ utilisateur.adresse }}</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Téléphone</label>
                            <div class=\"ms-4\">{{ utilisateur.telephone }}</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Email</label>
                            <div class=\"ms-4\">{{ utilisateur.email }}</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"{{ path('app_utilisateur_index') }}\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#arrow-counterclockwise') }}\"></use>
                                </svg>
                            </a>
                            <a href=\"{{ path('app_utilisateur_edit', {'id': utilisateur.id }) }}\" class=\"mx-2\" title=\"Modifier\">
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
        </div>
    </section>
{% endblock %}


", "utilisateur/show.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/utilisateur/show.html.twig");
    }
}
