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

/* rubrique/edit.html.twig */
class __TwigTemplate_278fdd2647f31f83877ff92e48becfd0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rubrique/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rubrique/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rubrique/edit.html.twig", 1);
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
            <a href=\"/rapport\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des rubriques</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Rapports</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4 priority-4\">
                <nav class=\"navbar text-secondary my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 16, $this->source); })()), "rapport", [], "any", false, false, false, 16), "libelle", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 23, $this->source); })()), "rapport", [], "any", false, false, false, 23), "libelle", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des rubriques de ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 32, $this->source); })()), "rapport", [], "any", false, false, false, 32), "libelle", [], "any", false, false, false, 32), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 32, $this->source); })()), "rapport", [], "any", false, false, false, 32), "rubriques", [], "any", false, false, false, 32)), "html", null, true);
        echo ")
                        </caption>
                        ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 34, $this->source); })()), "rapport", [], "any", false, false, false, 34), "rubriques", [], "any", false, false, false, 34), "count", [], "any", false, false, false, 34)) {
            // line 35
            echo "                        <thead>
                            <tr>
                                <th scope=\"col\" width=\"30\"></th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"\" align=\"center\">Points de vérification</th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 43, $this->source); })()), "rapport", [], "any", false, false, false, 43), "rubriques", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 44
                echo "                                ";
                $context["cur"] = "";
                // line 45
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 45))) {
                    // line 46
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 47
                    echo "                                ";
                }
                // line 48
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "\">
                                    <td scope=\"row\"><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "numero", [], "any", false, false, false, 49), "html", null, true);
                echo "</a></td>
                                    <td scope=\"row\"><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "libelle", [], "any", false, false, false, 50), "html", null, true);
                echo "</a></td>
                                    <td align=\"center\">
                                    ";
                // line 52
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "pointverification", [], "any", false, false, false, 52), "count", [], "any", false, false, false, 52) > 0)) {
                    // line 53
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                    echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "pointverification", [], "any", false, false, false, 53), "count", [], "any", false, false, false, 53), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 55
                    echo "                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    ";
                }
                // line 57
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                        </tbody>
                        ";
        } else {
            // line 62
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucune rubrique !</span></td></tr>
                        ";
        }
        // line 64
        echo "                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Edition du rubrique ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 73, $this->source); })()), "libelle", [], "any", false, false, false, 73), "html", null, true);
        echo "</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["rubriqueForm"]) || array_key_exists("rubriqueForm", $context) ? $context["rubriqueForm"] : (function () { throw new RuntimeError('Variable "rubriqueForm" does not exist.', 77, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["rubriqueForm"]) || array_key_exists("rubriqueForm", $context) ? $context["rubriqueForm"] : (function () { throw new RuntimeError('Variable "rubriqueForm" does not exist.', 78, $this->source); })()), "numero", [], "any", false, false, false, 78), 'row');
        echo "
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["rubriqueForm"]) || array_key_exists("rubriqueForm", $context) ? $context["rubriqueForm"] : (function () { throw new RuntimeError('Variable "rubriqueForm" does not exist.', 79, $this->source); })()), "libelle", [], "any", false, false, false, 79), 'row');
        echo "
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)]), "html", null, true);
        echo "\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["rubriqueForm"]) || array_key_exists("rubriqueForm", $context) ? $context["rubriqueForm"] : (function () { throw new RuntimeError('Variable "rubriqueForm" does not exist.', 84, $this->source); })()), 'form_end');
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
        return "rubrique/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 84,  240 => 81,  235 => 79,  231 => 78,  227 => 77,  220 => 73,  209 => 64,  205 => 62,  201 => 60,  193 => 57,  189 => 55,  181 => 53,  179 => 52,  172 => 50,  166 => 49,  161 => 48,  158 => 47,  155 => 46,  152 => 45,  149 => 44,  145 => 43,  135 => 35,  133 => 34,  126 => 32,  114 => 23,  104 => 16,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/rapport\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des rubriques</span>
            </a>
            <a href=\"{{ path('app_rapport_index') }}\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Rapports</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4 priority-4\">
                <nav class=\"navbar text-secondary my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de {{ rubrique.rapport.libelle }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ rubrique.rapport.libelle }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des rubriques de {{ rubrique.rapport.libelle }} ({{ rubrique.rapport.rubriques|length }})
                        </caption>
                        {% if rubrique.rapport.rubriques.count %}
                        <thead>
                            <tr>
                                <th scope=\"col\" width=\"30\"></th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"\" align=\"center\">Points de vérification</th> 
                            </tr>
                        </thead>
                        <tbody>
                            {% for dep in rubrique.rapport.rubriques %}
                                {% set cur='' %}
                                {% if rubrique.id==dep.id %}
                                    {% set cur='bg-warning text-dark bg-opacity-25' %}
                                {% endif %}
                                <tr class=\"{{ cur }}\">
                                    <td scope=\"row\"><a href=\"{{ path('app_rubrique_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ dep.numero }}</a></td>
                                    <td scope=\"row\"><a href=\"{{ path('app_rubrique_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ dep.libelle }}</a></td>
                                    <td align=\"center\">
                                    {% if dep.pointverification.count >0 %}
                                        <a href=\"{{ path('app_rubrique_show', {'id': dep.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ dep.pointverification.count }}</a>
                                    {% else %}
                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                        {% else %}
                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucune rubrique !</span></td></tr>
                        {% endif %}
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Edition du rubrique {{ rubrique.libelle }}</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        {{ form_start(rubriqueForm) }}
                            {{ form_row(rubriqueForm.numero) }}
                            {{ form_row(rubriqueForm.libelle) }}
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"{{ path('app_rubrique_show', { 'id': rubrique.id }) }}\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        {{ form_end(rubriqueForm) }}            
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "rubrique/edit.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/rubrique/edit.html.twig");
    }
}
