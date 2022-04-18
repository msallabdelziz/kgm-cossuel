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

/* proprietaire/show.html.twig */
class __TwigTemplate_7900f16fe69bc48e8ada0c9ecc361e7958f0740535454108d304a4deded1a0c4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proprietaire/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proprietaire/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proprietaire/show.html.twig", 1);
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
                <a class=\"nav-link\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_index");
        echo "\">Electriciens installateurs</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Propriétaires d'installation</a>
            </li>
        </ul>
    </div>
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/proprietaire\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des propriétaires</span>
            </a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4\">
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des propriétaires (";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_proprietaire"]) || array_key_exists("les_proprietaire", $context) ? $context["les_proprietaire"] : (function () { throw new RuntimeError('Variable "les_proprietaire" does not exist.', 27, $this->source); })())), "html", null, true);
        echo ")
                            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_add");
        echo "\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#plus"), "html", null, true);
        echo "\"></use>
                                </svg>Ajout Proprietaire
                            </a>
                        </caption>
                        ";
        // line 34
        if ((isset($context["les_proprietaire"]) || array_key_exists("les_proprietaire", $context) ? $context["les_proprietaire"] : (function () { throw new RuntimeError('Variable "les_proprietaire" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Type</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\">Prénom</th> 
                                ";
            // line 41
            echo "                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_proprietaire"]) || array_key_exists("les_proprietaire", $context) ? $context["les_proprietaire"] : (function () { throw new RuntimeError('Variable "les_proprietaire" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 45
                echo "                                ";
                $context["cur"] = "";
                // line 46
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 46))) {
                    // line 47
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 48
                    echo "                                ";
                }
                // line 49
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "\">
                                    <td scope=\"row\"><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "telephone", [], "any", false, false, false, 50), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "nom", [], "any", false, false, false, 51), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "prenom", [], "any", false, false, false, 52), "html", null, true);
                echo "</a></td>
";
                // line 61
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                        </tbody>
                        ";
        } else {
            // line 65
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun proprietaire !</span></td></tr>
                        ";
        }
        // line 67
        echo "                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails du proprietaire ";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Localité</label>
                            <div class=\"ms-4\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 82, $this->source); })()), "localite", [], "any", false, false, false, 82), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 86, $this->source); })()), "nom", [], "any", false, false, false, 86), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Prénom</label>
                            <div class=\"ms-4\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 90, $this->source); })()), "prenom", [], "any", false, false, false, 90), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Adresse</label>
                            <div class=\"ms-4\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 94, $this->source); })()), "adresse", [], "any", false, false, false, 94), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Téléphone</label>
                            <div class=\"ms-4\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 98, $this->source); })()), "telephone", [], "any", false, false, false, 98), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Email</label>
                            <div class=\"ms-4\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 102, $this->source); })()), "email", [], "any", false, false, false, 102), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Type Pièce</label>
                            <div class=\"ms-4\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 106, $this->source); })()), "typePiece", [], "any", false, false, false, 106), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Numéro Pièce</label>
                            <div class=\"ms-4\">";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 110, $this->source); })()), "numPiece", [], "any", false, false, false, 110), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_index");
        echo "\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-counterclockwise"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 119, $this->source); })()), "id", [], "any", false, false, false, 119)]), "html", null, true);
        echo "\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
        // line 126
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
        return "proprietaire/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 126,  291 => 121,  286 => 119,  280 => 116,  275 => 114,  268 => 110,  261 => 106,  254 => 102,  247 => 98,  240 => 94,  233 => 90,  226 => 86,  219 => 82,  209 => 75,  199 => 67,  195 => 65,  191 => 63,  184 => 61,  178 => 52,  172 => 51,  166 => 50,  161 => 49,  158 => 48,  155 => 47,  152 => 46,  149 => 45,  145 => 44,  140 => 41,  133 => 35,  131 => 34,  124 => 30,  119 => 28,  115 => 27,  93 => 8,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}
    <div class=\"row-fluid\">
        <ul class=\"nav nav-pills mb-4 pb-2 border-bottom border-dark\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_electricien_index') }}\">Electriciens installateurs</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Propriétaires d'installation</a>
            </li>
        </ul>
    </div>
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/proprietaire\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des propriétaires</span>
            </a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4\">
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des propriétaires ({{ les_proprietaire|length }})
                            <a href=\"{{ path('app_proprietaire_add') }}\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#plus') }}\"></use>
                                </svg>Ajout Proprietaire
                            </a>
                        </caption>
                        {% if les_proprietaire  %}
                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Type</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\">Prénom</th> 
                                {# <th scope=\"col\" width=\"1%\" align=\"center\">Localités</th>  #}
                            </tr>
                        </thead>
                        <tbody>
                            {% for dep in les_proprietaire %}
                                {% set cur='' %}
                                {% if proprietaire.id==dep.id %}
                                    {% set cur='bg-warning text-dark bg-opacity-25' %}
                                {% endif %}
                                <tr class=\"{{ cur }}\">
                                    <td scope=\"row\"><a href=\"{{ path('app_proprietaire_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ dep.telephone }}</a></td>
                                    <td><a href=\"{{ path('app_proprietaire_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none\">{{ dep.nom }}</a></td>
                                    <td><a href=\"{{ path('app_proprietaire_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none\">{{ dep.prenom }}</a></td>
{#                                     
                                    <td align=\"center\">
                                    {% if dep.localite.count >0 %}
                                        <a href=\"{{ path('app_proprietaire_show', {'id': dep.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ dep.localite.count }}</a>
                                    {% else %}
                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    {% endif %}
                                    </td> #}
                                </tr>
                            {% endfor %}
                        </tbody>
                        {% else %}
                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun proprietaire !</span></td></tr>
                        {% endif %}
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails du proprietaire {{ proprietaire }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Localité</label>
                            <div class=\"ms-4\">{{ proprietaire.localite }}</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ proprietaire.nom }}</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Prénom</label>
                            <div class=\"ms-4\">{{ proprietaire.prenom }}</div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Adresse</label>
                            <div class=\"ms-4\">{{ proprietaire.adresse }}</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Téléphone</label>
                            <div class=\"ms-4\">{{ proprietaire.telephone }}</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Email</label>
                            <div class=\"ms-4\">{{ proprietaire.email }}</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Type Pièce</label>
                            <div class=\"ms-4\">{{ proprietaire.typePiece }}</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Numéro Pièce</label>
                            <div class=\"ms-4\">{{ proprietaire.numPiece }}</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"{{ path('app_proprietaire_index') }}\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#arrow-counterclockwise') }}\"></use>
                                </svg>
                            </a>
                            <a href=\"{{ path('app_proprietaire_edit', {'id': proprietaire.id }) }}\" class=\"mx-2\" title=\"Modifier\">
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


", "proprietaire/show.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/proprietaire/show.html.twig");
    }
}
