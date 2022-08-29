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
class __TwigTemplate_fb8c25b936b77a6be8ea81368c7e23bc extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "electricien/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "electricien/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "electricien/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <h4 class=\"fw-bold\">Gestion des Electriciens</h4>
                    ";
        // line 25
        echo "                </div>
                <span class=\"divider\">
                    <hr></span>
            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"height:0px; position:relative; top:4px;\">
                <div class=\"col-lg-2 col-3 offset-3 offset-lg-7 fs-6 border-bottom priority-3\">
                    <select name=\"val_localite0\" id=\"val_localite0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Localité ...</option>
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["les_localite"]) || array_key_exists("les_localite", $context) ? $context["les_localite"] : (function () { throw new RuntimeError('Variable "les_localite" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 33
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 33) == (isset($context["val_localite"]) || array_key_exists("val_localite", $context) ? $context["val_localite"] : (function () { throw new RuntimeError('Variable "val_localite" does not exist.', 33, $this->source); })()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </select>
                </div>
                <div class=\"col-5 col-lg-2 offset-6 offset-lg-0 fs-6 border-bottom\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"";
        // line 37
        if (array_key_exists("val_rech", $context)) {
            echo twig_escape_filter($this->env, (isset($context["val_rech"]) || array_key_exists("val_rech", $context) ? $context["val_rech"] : (function () { throw new RuntimeError('Variable "val_rech" does not exist.', 37, $this->source); })()), "html", null, true);
        }
        echo "\" /></div>
                <div class=\"col-2 col-lg-1 priority-3\" align=\"center\">
                    <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"#c32424\">
                        <use xlink:href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-pdf"), "html", null, true);
        echo "\"></use>
                    </svg>
                    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_excel");
        echo "\" class=\"ms-1\">
                        <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"green\">
                            <use xlink:href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-xls"), "html", null, true);
        echo "\"></use>
                        </svg>
                    </a>
                </div>
            </div>
            ";
        // line 49
        if ((twig_length_filter($this->env, (isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 49, $this->source); })())) == 0)) {
            // line 50
            echo "                <br />
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
            ";
        } else {
            // line 65
            echo "            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des Electriciens (";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 66, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 66), "html", null, true);
            echo ")</caption>
            <thead>
                <tr>
                    <th scope=\"col\">Téléphone</th> 
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th class=\"priority-4\">Localité</th>
                    <th class=\"priority-5\">Adresse</th>
                    ";
            // line 75
            echo "                    ";
            // line 76
            echo "                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 80, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 81
                echo "                    <tr>
                        ";
                // line 82
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "autreNumTelephone", [], "any", false, false, false, 82) != null)) {
                    // line 83
                    echo "                        <td scope=\"row\">
                                <a href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                    echo "\" class=\"text-dark text-decoration-none fw-bold\">
                                    ";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "telephone", [], "any", false, false, false, 85), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "autreNumTelephone", [], "any", false, false, false, 85), "html", null, true);
                    echo "
                                </a>
                        </td>
                        ";
                } else {
                    // line 89
                    echo "                        <td scope=\"row\">
                                <a href=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                    echo "\" class=\"text-dark text-decoration-none fw-bold\">
                                    ";
                    // line 91
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "telephone", [], "any", false, false, false, 91), "html", null, true);
                    echo "
                                </a>
                        </td>
                        ";
                }
                // line 95
                echo "                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "nom", [], "any", false, false, false, 95), "html", null, true);
                echo "</td>
                        <td>";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "prenom", [], "any", false, false, false, 96), "html", null, true);
                echo "</td>
                        <td class=\"priority-4\">";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 97), "html", null, true);
                echo "</td>
                        <td class=\"priority-5\">";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "adresse", [], "any", false, false, false, 98), "html", null, true);
                echo "</td>
                        ";
                // line 100
                echo "                        ";
                // line 107
                echo "                        <td class=\"text-end\">
                            <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\" class=\"mx-1\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                echo "\"></use>
                                </svg>
                            </a>
                            ";
                // line 113
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 114
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 114)]), "html", null, true);
                    echo "\" class=\"mx-1\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                    echo "\"></use>
                                </svg>
                            </a>
                            ";
                }
                // line 120
                echo "                            ";
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && 0)) {
                    // line 121
                    echo "                            <a href=\"\" class=\"mx-1\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
                    echo "\"></use>
                                </svg>
                            </a>
                            ";
                }
                // line 127
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "            </tbody>
            </table>

                ";
            // line 133
            twig_get_attribute($this->env, $this->source, (isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 133, $this->source); })()), "setPageRange", [0 => 1], "method", false, false, false, 133);
            // line 134
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 134, $this->source); })()), "pagination.html.twig");
            echo "

            ";
        }
        // line 137
        echo "        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 141
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 142
        echo "<script>
    \$(document).ready(function () {

        ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "localite"]);
        foreach ($context['_seq'] as $context["_key"] => $context["filtre"]) {
            // line 146
            echo "            \$('#val_";
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "').val(\$('#val_";
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').val())
            \$('#val_";
            // line 147
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').on('change', function() {
                optSel=\$('#val_";
            // line 148
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').find(\"option:selected\");
                valSel=optSel.val();
                \$('#val_";
            // line 150
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "').val(valSel);
                \$('#form_rech_list').submit();
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filtre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  388 => 154,  378 => 150,  373 => 148,  369 => 147,  362 => 146,  358 => 145,  353 => 142,  343 => 141,  331 => 137,  324 => 134,  322 => 133,  317 => 130,  309 => 127,  302 => 123,  298 => 121,  295 => 120,  288 => 116,  282 => 114,  280 => 113,  274 => 110,  269 => 108,  266 => 107,  264 => 100,  260 => 98,  256 => 97,  252 => 96,  247 => 95,  240 => 91,  236 => 90,  233 => 89,  224 => 85,  220 => 84,  217 => 83,  215 => 82,  212 => 81,  208 => 80,  202 => 76,  200 => 75,  189 => 66,  186 => 65,  169 => 50,  167 => 49,  159 => 44,  154 => 42,  149 => 40,  141 => 37,  137 => 35,  122 => 33,  118 => 32,  109 => 25,  97 => 10,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
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
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <h4 class=\"fw-bold\">Gestion des Electriciens</h4>
                    {# <a href=\"{{ path('app_electricien_add') }}\" class=\"btn btn-primary btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 16 16\">
                            <path fill-rule=\"evenodd\" d=\"M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z\"></path>
                        </svg>
                        Nouveau Electricien
                    </a> #}
                </div>
                <span class=\"divider\">
                    <hr></span>
            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"height:0px; position:relative; top:4px;\">
                <div class=\"col-lg-2 col-3 offset-3 offset-lg-7 fs-6 border-bottom priority-3\">
                    <select name=\"val_localite0\" id=\"val_localite0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Localité ...</option>
                        {% for obj in les_localite %}
                            <option value=\"{{obj.id}}\" {% if obj.id == val_localite %} selected=\"selected\"{% endif %}>{{obj.nom}}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-5 col-lg-2 offset-6 offset-lg-0 fs-6 border-bottom\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"{% if val_rech is defined %}{{ val_rech }}{% endif %}\" /></div>
                <div class=\"col-2 col-lg-1 priority-3\" align=\"center\">
                    <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"#c32424\">
                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#filetype-pdf') }}\"></use>
                    </svg>
                    <a href=\"{{path('app_electricien_excel')}}\" class=\"ms-1\">
                        <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"green\">
                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#filetype-xls') }}\"></use>
                        </svg>
                    </a>
                </div>
            </div>
            {% if les_electricien|length == 0 %}
                <br />
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
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des Electriciens ({{ les_electricien.getTotalItemCount }})</caption>
            <thead>
                <tr>
                    <th scope=\"col\">Téléphone</th> 
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th class=\"priority-4\">Localité</th>
                    <th class=\"priority-5\">Adresse</th>
                    {# <th scope=\"col\">Agence</th> #}
                    {# <th class=\"text-center\" scope=\"col\">Départements</th>  #}
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                {% for ag in les_electricien %}
                    <tr>
                        {% if ag.autreNumTelephone != NULL  %}
                        <td scope=\"row\">
                                <a href=\"{{ path('app_electricien_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">
                                    {{ ag.telephone }} / {{ag.autreNumTelephone}}
                                </a>
                        </td>
                        {% else %}
                        <td scope=\"row\">
                                <a href=\"{{ path('app_electricien_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">
                                    {{ ag.telephone }}
                                </a>
                        </td>
                        {% endif %}
                        <td>{{ ag.nom }}</td>
                        <td>{{ ag.prenom }}</td>
                        <td class=\"priority-4\">{{ ag.localite }}</td>
                        <td class=\"priority-5\">{{ ag.adresse }}</td>
                        {# <td>{{ ag.agence }}</td> #}
                        {# <td class=\"text-center\">
                            {% if reg.departement.count >0 %}
                                <span class=\"badge bg-success text-light rounded-pill fw-normal\">{{ reg.departement.count }}</span>
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
                            {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('app_electricien_edit', {'id': ag.id }) }}\" class=\"mx-1\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                </svg>
                            </a>
                            {% endif %}
                            {% if is_granted('ROLE_ADMIN') and 0 %}
                            <a href=\"\" class=\"mx-1\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#trash') }}\"></use>
                                </svg>
                            </a>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
            </table>

                {% do les_electricien.setPageRange(1)%}
                {{ knp_pagination_render(les_electricien, 'pagination.html.twig')}}

            {% endif %}
        </div>
    </section>
{% endblock %}

{% block javascripts %}
<script>
    \$(document).ready(function () {

        {% for filtre in [\"localite\"] %}
            \$('#val_{{filtre}}').val(\$('#val_{{filtre}}0').val())
            \$('#val_{{filtre}}0').on('change', function() {
                optSel=\$('#val_{{filtre}}0').find(\"option:selected\");
                valSel=optSel.val();
                \$('#val_{{filtre}}').val(valSel);
                \$('#form_rech_list').submit();
            });
        {% endfor %}
    });
</script>
{% endblock %}", "electricien/index.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/electricien/index.html.twig");
    }
}
