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

/* electricien/index.html.twig */
class __TwigTemplate_3475f55a7c9ef960cebf55b94623550e7da28df57a7cb85bb1b8d8633d8ee8df extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "electricien/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "electricien/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "electricien/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
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

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row-fluid\">
        <ul class=\"nav nav-pills mb-4 pb-2 border-bottom border-dark\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Electriciens installateurs</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_index");
        echo "\">Propriétaires d'installation</a>
            </li>
        </ul>
    </div>
    <section class=\"container\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <h4 class=\"fw-bold\">Gestion des Electriciens</h4>
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_add");
        echo "\" class=\"btn btn-primary btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 16 16\">
                            <path fill-rule=\"evenodd\" d=\"M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z\"></path>
                        </svg>
                        Nouveau Electricien
                    </a>
                </div>
                <span class=\"divider\">
                    <hr></span>
            ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 28, $this->source); })())) == 0)) {
            // line 29
            echo "                <div class=\"row pt-20\">
                    <div class=\"col-3\"></div>
                    <div class=\"col-6\">
                        <div class=\"alert alert-warning d-flex align-items-center\" role=\"alert\">
                            <div>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 24 24\">
                                    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
                                </svg>
                                Aucun enregistrement trouvé !
                            </div>
                        </div>
                    </div>
                </div>
            ";
        } else {
            // line 43
            echo "            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des Electriciens (";
            // line 44
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 44, $this->source); })())), "html", null, true);
            echo ")</caption>
            <thead>
                <tr>
                    <th scope=\"col\">Téléphone</th> 
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Localité</th>
                    <th>Adresse</th>
                    ";
            // line 53
            echo "                    ";
            // line 54
            echo "                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 59
                echo "                    <tr>
                        <td scope=\"row\"><a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "telephone", [], "any", false, false, false, 60), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "nom", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
                        <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "prenom", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
                        <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                        <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "adresse", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                        ";
                // line 66
                echo "                        ";
                // line 73
                echo "                        <td class=\"text-end\">
                            <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\" class=\"mx-1\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                echo "\"></use>
                                </svg>
                            </a>
                            <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\" class=\"mx-1\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                </svg>
                            </a>
                            <a href=\"\" class=\"mx-1\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
                echo "\"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </tbody>
            </table>
            ";
        }
        // line 95
        echo "        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "electricien/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 95,  230 => 92,  218 => 86,  210 => 81,  205 => 79,  199 => 76,  194 => 74,  191 => 73,  189 => 66,  185 => 64,  181 => 63,  177 => 62,  173 => 61,  167 => 60,  164 => 59,  160 => 58,  154 => 54,  152 => 53,  141 => 44,  138 => 43,  122 => 29,  120 => 28,  108 => 19,  96 => 10,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
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
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <h4 class=\"fw-bold\">Gestion des Electriciens</h4>
                    <a href=\"{{ path('app_electricien_add') }}\" class=\"btn btn-primary btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 16 16\">
                            <path fill-rule=\"evenodd\" d=\"M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z\"></path>
                        </svg>
                        Nouveau Electricien
                    </a>
                </div>
                <span class=\"divider\">
                    <hr></span>
            {% if les_electricien|length == 0 %}
                <div class=\"row pt-20\">
                    <div class=\"col-3\"></div>
                    <div class=\"col-6\">
                        <div class=\"alert alert-warning d-flex align-items-center\" role=\"alert\">
                            <div>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 24 24\">
                                    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
                                </svg>
                                Aucun enregistrement trouvé !
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des Electriciens ({{ les_electricien|length }})</caption>
            <thead>
                <tr>
                    <th scope=\"col\">Téléphone</th> 
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Localité</th>
                    <th>Adresse</th>
                    {# <th scope=\"col\">Agence</th> #}
                    {# <th class=\"text-center\" scope=\"col\">Départements</th>  #}
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                {% for ag in les_electricien %}
                    <tr>
                        <td scope=\"row\"><a href=\"{{ path('app_electricien_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ ag.telephone }}</a></td>
                        <td>{{ ag.nom }}</td>
                        <td>{{ ag.prenom }}</td>
                        <td>{{ ag.localite }}</td>
                        <td>{{ ag.adresse }}</td>
                        {# <td>{{ ag.agence }}</td> #}
                        {# <td class=\"text-center\">
                            {% if reg.departement.count >0 %}
                                <span class=\"badge bg-success text-red rounded-pill fw-normal\">{{ reg.departement.count }}</span>
                            {% else %}
                                <code class=\"text-danger text-opacity-50\">Aucun département</code>
                            {% endif %}
                        </td> #}
                        <td class=\"text-end\">
                            <a href=\"{{ path('app_electricien_show', {'id': ag.id }) }}\" class=\"mx-1\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#search') }}\"></use>
                                </svg>
                            </a>
                            <a href=\"{{ path('app_electricien_edit', {'id': ag.id }) }}\" class=\"mx-1\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                </svg>
                            </a>
                            <a href=\"\" class=\"mx-1\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#trash') }}\"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
            </table>
            {% endif %}
        </div>
    </section>
{% endblock %}

", "electricien/index.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/electricien/index.html.twig");
    }
}
