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

/* pointnonconf/edit.html.twig */
class __TwigTemplate_24617370517be56246b0026a025211b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointnonconf/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointnonconf/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointnonconf/edit.html.twig", 1);
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
        echo "    ";
        $context["pointverification"] = twig_get_attribute($this->env, $this->source, (isset($context["pointnonconf"]) || array_key_exists("pointnonconf", $context) ? $context["pointnonconf"] : (function () { throw new RuntimeError('Variable "pointnonconf" does not exist.', 5, $this->source); })()), "pointverification", [], "any", false, false, false, 5);
        // line 6
        echo "    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/rubrique\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des points de vérification</span>
            </a>
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 11, $this->source); })()), "rubrique", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Points de verification de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 11, $this->source); })()), "rubrique", [], "any", false, false, false, 11), "libelle", [], "any", false, false, false, 11), "html", null, true);
        echo "</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4 priority-4\">
                <nav class=\"navbar text-secondarymy-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 17, $this->source); })()), "rubrique", [], "any", false, false, false, 17), "rapport", [], "any", false, false, false, 17), "libelle", [], "any", false, false, false, 17), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 24, $this->source); })()), "rubrique", [], "any", false, false, false, 24), "rapport", [], "any", false, false, false, 24), "libelle", [], "any", false, false, false, 24), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>

                <nav class=\"navbar text-secondary my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 31, $this->source); })()), "rubrique", [], "any", false, false, false, 31), "libelle", [], "any", false, false, false, 31), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 38, $this->source); })()), "rubrique", [], "any", false, false, false, 38), "libelle", [], "any", false, false, false, 38), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des points de vérification de ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 47, $this->source); })()), "rubrique", [], "any", false, false, false, 47), "libelle", [], "any", false, false, false, 47), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 47, $this->source); })()), "rubrique", [], "any", false, false, false, 47), "pointverification", [], "any", false, false, false, 47)), "html", null, true);
        echo ")
                        </caption>
                        ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 49, $this->source); })()), "rubrique", [], "any", false, false, false, 49), "pointverification", [], "any", false, false, false, 49), "count", [], "any", false, false, false, 49)) {
            // line 50
            echo "                        <thead>
                            <tr>
                                <th scope=\"col\" width=\"30\"></th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Points Non Conformité</th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 58, $this->source); })()), "rubrique", [], "any", false, false, false, 58), "pointverification", [], "any", false, false, false, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 59
                echo "                                ";
                $context["cur"] = "";
                // line 60
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 60))) {
                    // line 61
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 62
                    echo "                                ";
                }
                // line 63
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 63, $this->source); })()), "html", null, true);
                echo "\">
                                    <td scope=\"row\"><a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointverification_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "numero", [], "any", false, false, false, 64), "html", null, true);
                echo "</a></td>
                                    <td scope=\"row\"><a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointverification_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "objetVerification", [], "any", false, false, false, 65), "html", null, true);
                echo "</a></td>
                                    <td align=\"center\">
                                    ";
                // line 67
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "pointnonconf", [], "any", false, false, false, 67), "count", [], "any", false, false, false, 67) > 0)) {
                    // line 68
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointverification_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                    echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "pointnonconf", [], "any", false, false, false, 68), "count", [], "any", false, false, false, 68), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 70
                    echo "                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    ";
                }
                // line 72
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                        </tbody>
                        ";
        } else {
            // line 77
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun pointverification !</span></td></tr>
                        ";
        }
        // line 79
        echo "                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 87, $this->source); })()), "objetVerification", [], "any", false, false, false, 87), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-3\">
                            <label class=\"fw-light fs-7\">Numéro</label>
                            <div class=\"ms-4\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 94, $this->source); })()), "numero", [], "any", false, false, false, 94), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 98, $this->source); })()), "objetVerification", [], "any", false, false, false, 98), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 102, $this->source); })()), "rubrique", [], "any", false, false, false, 102), "id", [], "any", false, false, false, 102)]), "html", null, true);
        echo "\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-return-left"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            ";
        // line 107
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 108
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointverification_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 114
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 115
            echo "                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 121
        echo "                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Points de non conformité (";
        // line 128
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 128, $this->source); })()), "pointnonconf", [], "any", false, false, false, 128)), "html", null, true);
        echo ")
                            ";
        // line 129
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 130
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointnonconf_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130)]), "html", null, true);
            echo "\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Point de vérification</a>
                            ";
        }
        // line 132
        echo "                        </caption>
                        ";
        // line 133
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 133, $this->source); })()), "pointnonconf", [], "any", false, false, false, 133), "count", [], "any", false, false, false, 133)) {
            // line 134
            echo "                        <thead>
                            <tr>
                                <th scope=\"col\" width=\"30\"></th> 
                                <th scope=\"col\">Objet Vérification</th> 
                                <th width=\"60\"></th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 142, $this->source); })()), "pointnonconf", [], "any", false, false, false, 142));
            foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
                // line 143
                echo "                                <tr>
                                    <td scope=\"row\"><a href=\"\" class=\"text-dark text-decoration-none fw-bold\">";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "numero", [], "any", false, false, false, 144), "html", null, true);
                echo "</a></td>
                                    <td scope=\"row\"><a href=\"\" class=\"text-dark text-decoration-none\">";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "libelle", [], "any", false, false, false, 145), "html", null, true);
                echo "</a></td>
                                    <td align=\"right\">
                                        ";
                // line 147
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 148
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointnonconf_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["loc"], "id", [], "any", false, false, false, 148)]), "html", null, true);
                    echo "\" class=\"mx-1\" title=\"Détails\">
                                            <svg class=\"bi\" width=\"12\" height=\"12\" fill=\"black\">
                                                <use xlink:href=\"";
                    // line 150
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil"), "html", null, true);
                    echo "\"></use>
                                            </svg>
                                        </a>
                                        ";
                }
                // line 154
                echo "                                        ";
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && 0)) {
                    // line 155
                    echo "                                        <a href=\"\" class=\"mx-1\" title=\"Supprimer\">
                                            <svg class=\"bi\" width=\"12\" height=\"12\" fill=\"red\">
                                                <use xlink:href=\"";
                    // line 157
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
                    echo "\"></use>
                                            </svg>
                                        </a>
                                        ";
                }
                // line 161
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                        </tbody>
                        ";
        } else {
            // line 166
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun enregistrement !</span></td></tr>
                        ";
        }
        // line 168
        echo "                        </table>
                    </div>

                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1 mt-4\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Edition point de non conformité</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        ";
        // line 177
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["pointnonconfForm"]) || array_key_exists("pointnonconfForm", $context) ? $context["pointnonconfForm"] : (function () { throw new RuntimeError('Variable "pointnonconfForm" does not exist.', 177, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pointnonconfForm"]) || array_key_exists("pointnonconfForm", $context) ? $context["pointnonconfForm"] : (function () { throw new RuntimeError('Variable "pointnonconfForm" does not exist.', 178, $this->source); })()), "numero", [], "any", false, false, false, 178), 'row');
        echo "
                            ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pointnonconfForm"]) || array_key_exists("pointnonconfForm", $context) ? $context["pointnonconfForm"] : (function () { throw new RuntimeError('Variable "pointnonconfForm" does not exist.', 179, $this->source); })()), "libelle", [], "any", false, false, false, 179), 'row');
        echo "
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointverification_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pointverification"]) || array_key_exists("pointverification", $context) ? $context["pointverification"] : (function () { throw new RuntimeError('Variable "pointverification" does not exist.', 181, $this->source); })()), "id", [], "any", false, false, false, 181)]), "html", null, true);
        echo "\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        ";
        // line 184
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["pointnonconfForm"]) || array_key_exists("pointnonconfForm", $context) ? $context["pointnonconfForm"] : (function () { throw new RuntimeError('Variable "pointnonconfForm" does not exist.', 184, $this->source); })()), 'form_end');
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
        return "pointnonconf/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 184,  429 => 181,  424 => 179,  420 => 178,  416 => 177,  405 => 168,  401 => 166,  397 => 164,  389 => 161,  382 => 157,  378 => 155,  375 => 154,  368 => 150,  362 => 148,  360 => 147,  355 => 145,  351 => 144,  348 => 143,  344 => 142,  334 => 134,  332 => 133,  329 => 132,  323 => 130,  321 => 129,  317 => 128,  308 => 121,  301 => 117,  297 => 115,  294 => 114,  287 => 110,  281 => 108,  279 => 107,  273 => 104,  268 => 102,  261 => 98,  254 => 94,  244 => 87,  234 => 79,  230 => 77,  226 => 75,  218 => 72,  214 => 70,  206 => 68,  204 => 67,  197 => 65,  191 => 64,  186 => 63,  183 => 62,  180 => 61,  177 => 60,  174 => 59,  170 => 58,  160 => 50,  158 => 49,  151 => 47,  139 => 38,  129 => 31,  119 => 24,  109 => 17,  98 => 11,  91 => 6,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    {% set pointverification = pointnonconf.pointverification %}
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

                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1 mt-4\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Edition point de non conformité</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        {{ form_start(pointnonconfForm) }}
                            {{ form_row(pointnonconfForm.numero) }}
                            {{ form_row(pointnonconfForm.libelle) }}
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"{{ path('app_pointverification_show', { 'id': pointverification.id }) }}\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        {{ form_end(pointnonconfForm) }}            
                    </div>

                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "pointnonconf/edit.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/pointnonconf/edit.html.twig");
    }
}
