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

/* departement/show.html.twig */
class __TwigTemplate_f8d91de77b06f92176a1728518f2f06142b916bf7d1c9626fd3baa100342e45b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departement/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "departement/show.html.twig", 1);
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
                <span class=\"fs-4\">Gestion des départements</span>
            </a>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 10, $this->source); })()), "region", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Départements de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 10, $this->source); })()), "region", [], "any", false, false, false, 10), "nom", [], "any", false, false, false, 10), "html", null, true);
        echo "</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Région de ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 16, $this->source); })()), "region", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-4\">
                            <label class=\"fw-light fs-7\">Code</label>
                            <div class=\"ms-4\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 23, $this->source); })()), "region", [], "any", false, false, false, 23), "code", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-8\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 27, $this->source); })()), "region", [], "any", false, false, false, 27), "nom", [], "any", false, false, false, 27), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 36, $this->source); })()), "region", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 36, $this->source); })()), "region", [], "any", false, false, false, 36), "departement", [], "any", false, false, false, 36)), "html", null, true);
        echo ")
                        </caption>
                        ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 38, $this->source); })()), "region", [], "any", false, false, false, 38), "departement", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38)) {
            // line 39
            echo "                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Localités</th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 47, $this->source); })()), "region", [], "any", false, false, false, 47), "departement", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 48
                echo "                                ";
                $context["cur"] = "";
                // line 49
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 49))) {
                    // line 50
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 51
                    echo "                                ";
                }
                // line 52
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 52, $this->source); })()), "html", null, true);
                echo "\">
                                    <td scope=\"row\"><a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "code", [], "any", false, false, false, 53), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "nom", [], "any", false, false, false, 54), "html", null, true);
                echo "</a></td>
                                    <td align=\"center\">
                                    ";
                // line 56
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "localite", [], "any", false, false, false, 56), "count", [], "any", false, false, false, 56) > 0)) {
                    // line 57
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                    echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "localite", [], "any", false, false, false, 57), "count", [], "any", false, false, false, 57), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 59
                    echo "                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    ";
                }
                // line 61
                echo "                                    </td>
                                </tr>
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
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun département !</span></td></tr>
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
                        <span class=\"navbar-brand mb-0 h1\">Département de ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 76, $this->source); })()), "nom", [], "any", false, false, false, 76), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-3\">
                            <label class=\"fw-light fs-7\">Code</label>
                            <div class=\"ms-4\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 83, $this->source); })()), "code", [], "any", false, false, false, 83), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 87, $this->source); })()), "nom", [], "any", false, false, false, 87), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 91, $this->source); })()), "region", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91)]), "html", null, true);
        echo "\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-counterclockwise"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
        echo "\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des localités de ";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 113, $this->source); })()), "nom", [], "any", false, false, false, 113), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 113, $this->source); })()), "localite", [], "any", false, false, false, 113)), "html", null, true);
        echo ")
                            <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114)]), "html", null, true);
        echo "\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Localité</a>
                        </caption>
                        ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 116, $this->source); })()), "localite", [], "any", false, false, false, 116), "count", [], "any", false, false, false, 116)) {
            // line 117
            echo "                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                <th width=\"60\"></th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 125, $this->source); })()), "localite", [], "any", false, false, false, 125));
            foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
                // line 126
                echo "                                <tr>
                                    <td scope=\"row\"><a href=\"\" class=\"text-dark text-decoration-none fw-bold\">";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "code", [], "any", false, false, false, 127), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"\" class=\"text-dark text-decoration-none\">";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "nom", [], "any", false, false, false, 128), "html", null, true);
                echo "</a></td>
                                    <td>
                                        <a href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["loc"], "id", [], "any", false, false, false, 130)]), "html", null, true);
                echo "\" class=\"mx-1\" title=\"Modifier\">
                                            <svg class=\"bi\" width=\"12\" height=\"12\" fill=\"black\">
                                                <use xlink:href=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"\" class=\"mx-1\" title=\"Supprimer\">
                                            <svg class=\"bi\" width=\"12\" height=\"12\" fill=\"red\">
                                                <use xlink:href=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
                echo "\"></use>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                        </tbody>
                        ";
        } else {
            // line 145
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucune localité !</span></td></tr>
                        ";
        }
        // line 147
        echo "                        </table>
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
        return "departement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 147,  357 => 145,  353 => 143,  341 => 137,  333 => 132,  328 => 130,  323 => 128,  319 => 127,  316 => 126,  312 => 125,  302 => 117,  300 => 116,  295 => 114,  289 => 113,  276 => 103,  268 => 98,  263 => 96,  257 => 93,  252 => 91,  245 => 87,  238 => 83,  228 => 76,  218 => 68,  214 => 66,  210 => 64,  202 => 61,  198 => 59,  190 => 57,  188 => 56,  181 => 54,  175 => 53,  170 => 52,  167 => 51,  164 => 50,  161 => 49,  158 => 48,  154 => 47,  144 => 39,  142 => 38,  135 => 36,  123 => 27,  116 => 23,  106 => 16,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/region\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des départements</span>
            </a>
            <a href=\"{{ path('app_region_show', { 'id': departement.region.id}) }}\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Départements de {{ departement.region.nom }}</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Région de {{ departement.region.nom }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-4\">
                            <label class=\"fw-light fs-7\">Code</label>
                            <div class=\"ms-4\">{{ departement.region.code }}</div>
                        </div>
                        <div class=\"col-8\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ departement.region.nom }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des départements de {{ departement.region.nom }} ({{ departement.region.departement|length }})
                        </caption>
                        {% if departement.region.departement.count %}
                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Localités</th> 
                            </tr>
                        </thead>
                        <tbody>
                            {% for dep in departement.region.departement %}
                                {% set cur='' %}
                                {% if departement.id==dep.id %}
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
                        {% else %}
                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun département !</span></td></tr>
                        {% endif %}
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Département de {{ departement.nom }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-3\">
                            <label class=\"fw-light fs-7\">Code</label>
                            <div class=\"ms-4\">{{ departement.code }}</div>
                        </div>
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ departement.nom }}</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"{{ path('app_region_show', { 'id': departement.region.id}) }}\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#arrow-counterclockwise') }}\"></use>
                                </svg>
                            </a>
                            <a href=\"{{ path('app_departement_edit', {'id': departement.id }) }}\" class=\"mx-2\" title=\"Modifier\">
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

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des localités de {{ departement.nom }} ({{ departement.localite|length }})
                            <a href=\"{{ path('app_localite_add', {'id': departement.id }) }}\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Localité</a>
                        </caption>
                        {% if departement.localite.count %}
                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                <th width=\"60\"></th> 
                            </tr>
                        </thead>
                        <tbody>
                            {% for loc in departement.localite %}
                                <tr>
                                    <td scope=\"row\"><a href=\"\" class=\"text-dark text-decoration-none fw-bold\">{{ loc.code }}</a></td>
                                    <td><a href=\"\" class=\"text-dark text-decoration-none\">{{ loc.nom }}</a></td>
                                    <td>
                                        <a href=\"{{ path('app_localite_edit', {'id': loc.id }) }}\" class=\"mx-1\" title=\"Modifier\">
                                            <svg class=\"bi\" width=\"12\" height=\"12\" fill=\"black\">
                                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                            </svg>
                                        </a>
                                        <a href=\"\" class=\"mx-1\" title=\"Supprimer\">
                                            <svg class=\"bi\" width=\"12\" height=\"12\" fill=\"red\">
                                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#trash') }}\"></use>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                        {% else %}
                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucune localité !</span></td></tr>
                        {% endif %}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "departement/show.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/departement/show.html.twig");
    }
}
