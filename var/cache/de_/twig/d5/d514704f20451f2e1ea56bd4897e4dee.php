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

/* pointverification/show.html.twig */
class __TwigTemplate_f8169dad75fe71e484ed8e77b5183c60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointverification/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointverification/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointverification/show.html.twig", 1);
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
            <a href=\"/rubrique\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des points de vérification</span>
            </a>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 10, $this->source); })()), "rubrique", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Points de verification de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 10, $this->source); })()), "rubrique", [], "any", false, false, false, 10), "libelle", [], "any", false, false, false, 10), "html", null, true);
        echo "</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4 priority-4\">
                <nav class=\"navbar text-secondarymy-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 16, $this->source); })()), "rubrique", [], "any", false, false, false, 16), "rapport", [], "any", false, false, false, 16), "libelle", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 23, $this->source); })()), "rubrique", [], "any", false, false, false, 23), "rapport", [], "any", false, false, false, 23), "libelle", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>

                <nav class=\"navbar text-secondary my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 30, $this->source); })()), "rubrique", [], "any", false, false, false, 30), "libelle", [], "any", false, false, false, 30), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 37, $this->source); })()), "rubrique", [], "any", false, false, false, 37), "libelle", [], "any", false, false, false, 37), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des points de vérification de ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 46, $this->source); })()), "rubrique", [], "any", false, false, false, 46), "libelle", [], "any", false, false, false, 46), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 46, $this->source); })()), "rubrique", [], "any", false, false, false, 46), "pointverification", [], "any", false, false, false, 46)), "html", null, true);
        echo ")
                        </caption>
                        ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 48, $this->source); })()), "rubrique", [], "any", false, false, false, 48), "pointverification", [], "any", false, false, false, 48), "count", [], "any", false, false, false, 48)) {
            // line 49
            echo "                        <thead>
                            <tr>
                                <th scope=\"col\" width=\"30\"></th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Points Non Conformité</th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 57, $this->source); })()), "rubrique", [], "any", false, false, false, 57), "pointverification", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 58
                echo "                                ";
                $context["cur"] = "";
                // line 59
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 59))) {
                    // line 60
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 61
                    echo "                                ";
                }
                // line 62
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "\">
                                    <td scope=\"row\"><a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointverification_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "numero", [], "any", false, false, false, 63), "html", null, true);
                echo "</a></td>
                                    <td scope=\"row\"><a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointverification_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "objetVerification", [], "any", false, false, false, 64), "html", null, true);
                echo "</a></td>
                                    <td align=\"center\">
                                    ";
                // line 66
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "pointnonconf", [], "any", false, false, false, 66), "count", [], "any", false, false, false, 66) > 0)) {
                    // line 67
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointverification_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                    echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "pointnonconf", [], "any", false, false, false, 67), "count", [], "any", false, false, false, 67), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 69
                    echo "                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    ";
                }
                // line 71
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                        </tbody>
                        ";
        } else {
            // line 76
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun pointverification !</span></td></tr>
                        ";
        }
        // line 78
        echo "                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 86, $this->source); })()), "objetVerification", [], "any", false, false, false, 86), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-3\">
                            <label class=\"fw-light fs-7\">Numéro</label>
                            <div class=\"ms-4\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 93, $this->source); })()), "numero", [], "any", false, false, false, 93), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 97, $this->source); })()), "objetVerification", [], "any", false, false, false, 97), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 101, $this->source); })()), "rubrique", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101)]), "html", null, true);
        echo "\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-return-left"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            ";
        // line 106
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 107
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointverification_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107)]), "html", null, true);
            echo "\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 113
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 114
            echo "                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 120
        echo "                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Points de non conformité (";
        // line 127
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 127, $this->source); })()), "pointnonconf", [], "any", false, false, false, 127)), "html", null, true);
        echo ")
                            ";
        // line 128
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 129
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointnonconf_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129)]), "html", null, true);
            echo "\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Point de vérification</a>
                            ";
        }
        // line 131
        echo "                        </caption>
                        ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 132, $this->source); })()), "pointnonconf", [], "any", false, false, false, 132), "count", [], "any", false, false, false, 132)) {
            // line 133
            echo "                        <thead>
                            <tr>
                                <th scope=\"col\" width=\"30\"></th> 
                                <th scope=\"col\">Objet Vérification</th> 
                                <th width=\"60\"></th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 141, $this->source); })()), "pointnonconf", [], "any", false, false, false, 141));
            foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
                // line 142
                echo "                                <tr>
                                    <td scope=\"row\"><a href=\"\" class=\"text-dark text-decoration-none fw-bold\">";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "numero", [], "any", false, false, false, 143), "html", null, true);
                echo "</a></td>
                                    <td scope=\"row\"><a href=\"\" class=\"text-dark text-decoration-none\">";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "libelle", [], "any", false, false, false, 144), "html", null, true);
                echo "</a></td>
                                    <td align=\"right\">
                                        ";
                // line 146
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 147
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointnonconf_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["loc"], "id", [], "any", false, false, false, 147)]), "html", null, true);
                    echo "\" class=\"mx-1\" title=\"Détails\">
                                            <svg class=\"bi\" width=\"12\" height=\"12\" fill=\"black\">
                                                <use xlink:href=\"";
                    // line 149
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil"), "html", null, true);
                    echo "\"></use>
                                            </svg>
                                        </a>
                                        ";
                }
                // line 153
                echo "                                        ";
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && 0)) {
                    // line 154
                    echo "                                        <a href=\"\" class=\"mx-1\" title=\"Supprimer\">
                                            <svg class=\"bi\" width=\"12\" height=\"12\" fill=\"red\">
                                                <use xlink:href=\"";
                    // line 156
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
                    echo "\"></use>
                                            </svg>
                                        </a>
                                        ";
                }
                // line 160
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "                        </tbody>
                        ";
        } else {
            // line 165
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun enregistrement !</span></td></tr>
                        ";
        }
        // line 167
        echo "                        </table>
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
        return "pointverification/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 167,  398 => 165,  394 => 163,  386 => 160,  379 => 156,  375 => 154,  372 => 153,  365 => 149,  359 => 147,  357 => 146,  352 => 144,  348 => 143,  345 => 142,  341 => 141,  331 => 133,  329 => 132,  326 => 131,  320 => 129,  318 => 128,  314 => 127,  305 => 120,  298 => 116,  294 => 114,  291 => 113,  284 => 109,  278 => 107,  276 => 106,  270 => 103,  265 => 101,  258 => 97,  251 => 93,  241 => 86,  231 => 78,  227 => 76,  223 => 74,  215 => 71,  211 => 69,  203 => 67,  201 => 66,  194 => 64,  188 => 63,  183 => 62,  180 => 61,  177 => 60,  174 => 59,  171 => 58,  167 => 57,  157 => 49,  155 => 48,  148 => 46,  136 => 37,  126 => 30,  116 => 23,  106 => 16,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/rubrique\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des points de vérification</span>
            </a>
            <a href=\"{{ path('app_rubrique_show', { 'id': pointverification.rubrique.id}) }}\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Points de verification de {{ pointverification.rubrique.libelle }}</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4 priority-4\">
                <nav class=\"navbar text-secondarymy-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de {{ pointverification.rubrique.rapport.libelle }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ pointverification.rubrique.rapport.libelle }}</div>
                        </div>
                    </div>
                </div>

                <nav class=\"navbar text-secondary my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de {{ pointverification.rubrique.libelle }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ pointverification.rubrique.libelle }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des points de vérification de {{ pointverification.rubrique.libelle }} ({{ pointverification.rubrique.pointverification|length }})
                        </caption>
                        {% if pointverification.rubrique.pointverification.count %}
                        <thead>
                            <tr>
                                <th scope=\"col\" width=\"30\"></th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Points Non Conformité</th> 
                            </tr>
                        </thead>
                        <tbody>
                            {% for dep in pointverification.rubrique.pointverification %}
                                {% set cur='' %}
                                {% if pointverification.id==dep.id %}
                                    {% set cur='bg-warning text-dark bg-opacity-25' %}
                                {% endif %}
                                <tr class=\"{{ cur }}\">
                                    <td scope=\"row\"><a href=\"{{ path('app_pointverification_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ dep.numero }}</a></td>
                                    <td scope=\"row\"><a href=\"{{ path('app_pointverification_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none\">{{ dep.objetVerification }}</a></td>
                                    <td align=\"center\">
                                    {% if dep.pointnonconf.count >0 %}
                                        <a href=\"{{ path('app_pointverification_show', {'id': dep.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ dep.pointnonconf.count }}</a>
                                    {% else %}
                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                        {% else %}
                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun pointverification !</span></td></tr>
                        {% endif %}
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">{{ pointverification.objetVerification }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-3\">
                            <label class=\"fw-light fs-7\">Numéro</label>
                            <div class=\"ms-4\">{{ pointverification.numero }}</div>
                        </div>
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ pointverification.objetVerification }}</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"{{ path('app_rubrique_show', { 'id': pointverification.rubrique.id}) }}\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#arrow-return-left') }}\"></use>
                                </svg>
                            </a>
                            {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('app_pointverification_edit', {'id': pointverification.id }) }}\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                </svg>
                            </a>
                            {% endif %}
                            {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#trash') }}\"></use>
                                </svg>
                            </a>
                            {% endif %}
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Points de non conformité ({{ pointverification.pointnonconf|length }})
                            {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('app_pointnonconf_add', {'id': pointverification.id }) }}\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Point de vérification</a>
                            {% endif %}
                        </caption>
                        {% if pointverification.pointnonconf.count %}
                        <thead>
                            <tr>
                                <th scope=\"col\" width=\"30\"></th> 
                                <th scope=\"col\">Objet Vérification</th> 
                                <th width=\"60\"></th> 
                            </tr>
                        </thead>
                        <tbody>
                            {% for loc in pointverification.pointnonconf %}
                                <tr>
                                    <td scope=\"row\"><a href=\"\" class=\"text-dark text-decoration-none fw-bold\">{{ loc.numero }}</a></td>
                                    <td scope=\"row\"><a href=\"\" class=\"text-dark text-decoration-none\">{{ loc.libelle }}</a></td>
                                    <td align=\"right\">
                                        {% if is_granted('ROLE_ADMIN') %}
                                        <a href=\"{{ path('app_pointnonconf_edit', {'id': loc.id }) }}\" class=\"mx-1\" title=\"Détails\">
                                            <svg class=\"bi\" width=\"12\" height=\"12\" fill=\"black\">
                                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil') }}\"></use>
                                            </svg>
                                        </a>
                                        {% endif %}
                                        {% if is_granted('ROLE_ADMIN') and 0 %}
                                        <a href=\"\" class=\"mx-1\" title=\"Supprimer\">
                                            <svg class=\"bi\" width=\"12\" height=\"12\" fill=\"red\">
                                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#trash') }}\"></use>
                                            </svg>
                                        </a>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                        {% else %}
                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun enregistrement !</span></td></tr>
                        {% endif %}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "pointverification/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/pointverification/show.html.twig");
    }
}
