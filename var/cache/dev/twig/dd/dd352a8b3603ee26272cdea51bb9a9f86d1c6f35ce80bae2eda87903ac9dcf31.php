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

/* electricien/show.html.twig */
class __TwigTemplate_7b9a3892b64a3b570014cfe68284ca85b1e8bc062252637620ad1f1bcc9c30e3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "electricien/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "electricien/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "electricien/show.html.twig", 1);
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
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/electricien\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des Electriciens</span>
            </a>
            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_index");
        echo "\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Electriciens</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4\">
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des Electriciens (";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 28, $this->source); })())), "html", null, true);
        echo ")
                            <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_add");
        echo "\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#plus"), "html", null, true);
        echo "\"></use>
                                </svg>Ajout Electricien
                            </a>
                        </caption>
                        ";
        // line 35
        if ((isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Type</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\">Prénom</th> 
                                ";
            // line 42
            echo "                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 46
                echo "                                ";
                $context["cur"] = "";
                // line 47
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 47))) {
                    // line 48
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 49
                    echo "                                ";
                }
                // line 50
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "\">
                                    <td scope=\"row\"><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "telephone", [], "any", false, false, false, 51), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "nom", [], "any", false, false, false, 52), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "prenom", [], "any", false, false, false, 53), "html", null, true);
                echo "</a></td>
";
                // line 62
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                        </tbody>
                        ";
        } else {
            // line 66
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun electricien !</span></td></tr>
                        ";
        }
        // line 68
        echo "                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails du electricien ";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Localité</label>
                            <div class=\"ms-4\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 83, $this->source); })()), "localite", [], "any", false, false, false, 83), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 87, $this->source); })()), "nom", [], "any", false, false, false, 87), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Prénom</label>
                            <div class=\"ms-4\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 91, $this->source); })()), "prenom", [], "any", false, false, false, 91), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Adresse</label>
                            <div class=\"ms-4\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 95, $this->source); })()), "adresse", [], "any", false, false, false, 95), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Téléphone</label>
                            <div class=\"ms-4\">";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 99, $this->source); })()), "telephone", [], "any", false, false, false, 99), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Email</label>
                            <div class=\"ms-4\">";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 103, $this->source); })()), "email", [], "any", false, false, false, 103), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Type Pièce</label>
                            <div class=\"ms-4\">";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 107, $this->source); })()), "typePiece", [], "any", false, false, false, 107), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Numéro Pièce</label>
                            <div class=\"ms-4\">";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 111, $this->source); })()), "numPiece", [], "any", false, false, false, 111), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_index");
        echo "\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-counterclockwise"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            <a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120)]), "html", null, true);
        echo "\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
        // line 127
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
        return "electricien/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 127,  295 => 122,  290 => 120,  284 => 117,  279 => 115,  272 => 111,  265 => 107,  258 => 103,  251 => 99,  244 => 95,  237 => 91,  230 => 87,  223 => 83,  213 => 76,  203 => 68,  199 => 66,  195 => 64,  188 => 62,  182 => 53,  176 => 52,  170 => 51,  165 => 50,  162 => 49,  159 => 48,  156 => 47,  153 => 46,  149 => 45,  144 => 42,  137 => 36,  135 => 35,  128 => 31,  123 => 29,  119 => 28,  108 => 20,  96 => 11,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
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
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/electricien\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des Electriciens</span>
            </a>
            <a href=\"{{ path('app_electricien_index') }}\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Electriciens</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4\">
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des Electriciens ({{ les_electricien|length }})
                            <a href=\"{{ path('app_electricien_add') }}\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#plus') }}\"></use>
                                </svg>Ajout Electricien
                            </a>
                        </caption>
                        {% if les_electricien  %}
                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Type</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\">Prénom</th> 
                                {# <th scope=\"col\" width=\"1%\" align=\"center\">Localités</th>  #}
                            </tr>
                        </thead>
                        <tbody>
                            {% for dep in les_electricien %}
                                {% set cur='' %}
                                {% if electricien.id==dep.id %}
                                    {% set cur='bg-warning text-dark bg-opacity-25' %}
                                {% endif %}
                                <tr class=\"{{ cur }}\">
                                    <td scope=\"row\"><a href=\"{{ path('app_electricien_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ dep.telephone }}</a></td>
                                    <td><a href=\"{{ path('app_electricien_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none\">{{ dep.nom }}</a></td>
                                    <td><a href=\"{{ path('app_electricien_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none\">{{ dep.prenom }}</a></td>
{#                                     
                                    <td align=\"center\">
                                    {% if dep.localite.count >0 %}
                                        <a href=\"{{ path('app_electricien_show', {'id': dep.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ dep.localite.count }}</a>
                                    {% else %}
                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    {% endif %}
                                    </td> #}
                                </tr>
                            {% endfor %}
                        </tbody>
                        {% else %}
                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun electricien !</span></td></tr>
                        {% endif %}
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails du electricien {{ electricien }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Localité</label>
                            <div class=\"ms-4\">{{ electricien.localite }}</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ electricien.nom }}</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Prénom</label>
                            <div class=\"ms-4\">{{ electricien.prenom }}</div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Adresse</label>
                            <div class=\"ms-4\">{{ electricien.adresse }}</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Téléphone</label>
                            <div class=\"ms-4\">{{ electricien.telephone }}</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Email</label>
                            <div class=\"ms-4\">{{ electricien.email }}</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Type Pièce</label>
                            <div class=\"ms-4\">{{ electricien.typePiece }}</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Numéro Pièce</label>
                            <div class=\"ms-4\">{{ electricien.numPiece }}</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"{{ path('app_electricien_index') }}\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#arrow-counterclockwise') }}\"></use>
                                </svg>
                            </a>
                            <a href=\"{{ path('app_electricien_edit', {'id': electricien.id }) }}\" class=\"mx-2\" title=\"Modifier\">
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


", "electricien/show.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/electricien/show.html.twig");
    }
}
