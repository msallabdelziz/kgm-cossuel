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

/* pointverification/add.html.twig */
class __TwigTemplate_e15574c7de6934728e2108569c587055 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointverification/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointverification/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointverification/add.html.twig", 1);
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
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des rubriques</span>
            </a>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Rubriques de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 10, $this->source); })()), "libelle", [], "any", false, false, false, 10), "html", null, true);
        echo "</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow bg-light card0 me-4 p-3 priority-4\">
                <nav class=\"navbar text-secondary my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 16, $this->source); })()), "rapport", [], "any", false, false, false, 16), "libelle", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-8\">
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
                        <thead>
                            <tr>
                                <th width=\"30\" scope=\"col\"></th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Point de vérifications</th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 42, $this->source); })()), "rapport", [], "any", false, false, false, 42), "rubriques", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 43
            echo "                                ";
            $context["cur"] = "";
            // line 44
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 44))) {
                // line 45
                echo "                                    ";
                $context["cur"] = "bg-warning text-dark bg-opacity-25";
                // line 46
                echo "                                ";
            }
            // line 47
            echo "                                <tr class=\"";
            echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "\">
                                    <td scope=\"row\"><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "numero", [], "any", false, false, false, 48), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "libelle", [], "any", false, false, false, 49), "html", null, true);
            echo "</a></td>
                                    <td align=\"center\">
                                    ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "pointverification", [], "any", false, false, false, 51), "count", [], "any", false, false, false, 51) > 0)) {
                // line 52
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "pointverification", [], "any", false, false, false, 52), "count", [], "any", false, false, false, 52), "html", null, true);
                echo "</a>
                                    ";
            } else {
                // line 54
                echo "                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    ";
            }
            // line 56
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de rubrique de ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 67, $this->source); })()), "libelle", [], "any", false, false, false, 67), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-3\">
                            <label class=\"fw-light fs-7\">Numéro</label>
                            <div class=\"ms-4\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 74, $this->source); })()), "numero", [], "any", false, false, false, 74), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 78, $this->source); })()), "libelle", [], "any", false, false, false, 78), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Ajout de point de vérification</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["pointverificationForm"]) || array_key_exists("pointverificationForm", $context) ? $context["pointverificationForm"] : (function () { throw new RuntimeError('Variable "pointverificationForm" does not exist.', 90, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pointverificationForm"]) || array_key_exists("pointverificationForm", $context) ? $context["pointverificationForm"] : (function () { throw new RuntimeError('Variable "pointverificationForm" does not exist.', 91, $this->source); })()), "numero", [], "any", false, false, false, 91), 'row');
        echo "
                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pointverificationForm"]) || array_key_exists("pointverificationForm", $context) ? $context["pointverificationForm"] : (function () { throw new RuntimeError('Variable "pointverificationForm" does not exist.', 92, $this->source); })()), "objetVerification", [], "any", false, false, false, 92), 'row');
        echo "
                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pointverificationForm"]) || array_key_exists("pointverificationForm", $context) ? $context["pointverificationForm"] : (function () { throw new RuntimeError('Variable "pointverificationForm" does not exist.', 93, $this->source); })()), "libelleConclusion1", [], "any", false, false, false, 93), 'row');
        echo "
                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pointverificationForm"]) || array_key_exists("pointverificationForm", $context) ? $context["pointverificationForm"] : (function () { throw new RuntimeError('Variable "pointverificationForm" does not exist.', 94, $this->source); })()), "libelleConclusion2", [], "any", false, false, false, 94), 'row');
        echo "
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rubrique_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["rubrique"]) || array_key_exists("rubrique", $context) ? $context["rubrique"] : (function () { throw new RuntimeError('Variable "rubrique" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
        echo "\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["pointverificationForm"]) || array_key_exists("pointverificationForm", $context) ? $context["pointverificationForm"] : (function () { throw new RuntimeError('Variable "pointverificationForm" does not exist.', 99, $this->source); })()), 'form_end');
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
        return "pointverification/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 99,  262 => 96,  257 => 94,  253 => 93,  249 => 92,  245 => 91,  241 => 90,  226 => 78,  219 => 74,  209 => 67,  199 => 59,  191 => 56,  187 => 54,  179 => 52,  177 => 51,  170 => 49,  164 => 48,  159 => 47,  156 => 46,  153 => 45,  150 => 44,  147 => 43,  143 => 42,  128 => 32,  116 => 23,  106 => 16,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des rubriques</span>
            </a>
            <a href=\"{{ path('app_rubrique_show', { 'id': rubrique.id}) }}\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Rubriques de {{ rubrique.libelle }}</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow bg-light card0 me-4 p-3 priority-4\">
                <nav class=\"navbar text-secondary my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails {{ rubrique.rapport.libelle }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-8\">
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
                        <thead>
                            <tr>
                                <th width=\"30\" scope=\"col\"></th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Point de vérifications</th> 
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
                                    <td><a href=\"{{ path('app_rubrique_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none\">{{ dep.libelle }}</a></td>
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
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de rubrique de {{ rubrique.libelle }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-3\">
                            <label class=\"fw-light fs-7\">Numéro</label>
                            <div class=\"ms-4\">{{ rubrique.numero }}</div>
                        </div>
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ rubrique.libelle }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Ajout de point de vérification</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        {{ form_start(pointverificationForm) }}
                            {{ form_row(pointverificationForm.numero) }}
                            {{ form_row(pointverificationForm.objetVerification) }}
                            {{ form_row(pointverificationForm.libelleConclusion1) }}
                            {{ form_row(pointverificationForm.libelleConclusion2) }}
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"{{ path('app_rubrique_show', { 'id': rubrique.id }) }}\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        {{ form_end(pointverificationForm) }}            
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "pointverification/add.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/pointverification/add.html.twig");
    }
}
