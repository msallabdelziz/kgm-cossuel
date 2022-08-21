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

/* rubrique/add.html.twig */
class __TwigTemplate_57af459e5be634c1e04c728b61f19a87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rubrique/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rubrique/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rubrique/add.html.twig", 1);
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
                <span class=\"fs-4\">Gestion des régions</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Rapports</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow bg-light card0 me-4 p-3 priority-4\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des rapports (";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_rapport"]) || array_key_exists("les_rapport", $context) ? $context["les_rapport"] : (function () { throw new RuntimeError('Variable "les_rapport" does not exist.', 16, $this->source); })())), "html", null, true);
        echo ")
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_add");
        echo "\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                            <use xlink:href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#plus"), "html", null, true);
        echo "\"></use>
                        </svg>Ajout Rapport
                    </a>
                </caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\" width=\"1%\" align=\"center\">Rubriques</th> 
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["les_rapport"]) || array_key_exists("les_rapport", $context) ? $context["les_rapport"] : (function () { throw new RuntimeError('Variable "les_rapport" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
            // line 31
            echo "                        ";
            $context["cur"] = "";
            // line 32
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32) == twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 32))) {
                // line 33
                echo "                            ";
                $context["cur"] = "bg-warning text-dark bg-opacity-25";
                // line 34
                echo "                        ";
            }
            // line 35
            echo "                        <tr class=\"";
            echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "\">
                            <td scope=\"row\"><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"text-dark text-decoration-none fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "libelle", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></td>
                            <td align=\"center\">
                            ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reg"], "rubriques", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38) > 0)) {
                // line 39
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reg"], "rubriques", [], "any", false, false, false, 39), "count", [], "any", false, false, false, 39), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 41
                echo "                                <code class=\"text-danger text-opacity-50\">-</code>
                            ";
            }
            // line 43
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
                </table>
            </div>
            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 52, $this->source); })()), "libelle", [], "any", false, false, false, 52), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 59, $this->source); })()), "libelle", [], "any", false, false, false, 59), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Ajout de rubrique pour ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 67, $this->source); })()), "libelle", [], "any", false, false, false, 67), "html", null, true);
        echo "</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["rubriqueForm"]) || array_key_exists("rubriqueForm", $context) ? $context["rubriqueForm"] : (function () { throw new RuntimeError('Variable "rubriqueForm" does not exist.', 71, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["rubriqueForm"]) || array_key_exists("rubriqueForm", $context) ? $context["rubriqueForm"] : (function () { throw new RuntimeError('Variable "rubriqueForm" does not exist.', 72, $this->source); })()), "numero", [], "any", false, false, false, 72), 'row');
        echo "
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["rubriqueForm"]) || array_key_exists("rubriqueForm", $context) ? $context["rubriqueForm"] : (function () { throw new RuntimeError('Variable "rubriqueForm" does not exist.', 73, $this->source); })()), "libelle", [], "any", false, false, false, 73), 'row');
        echo "
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
        echo "\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["rubriqueForm"]) || array_key_exists("rubriqueForm", $context) ? $context["rubriqueForm"] : (function () { throw new RuntimeError('Variable "rubriqueForm" does not exist.', 78, $this->source); })()), 'form_end');
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
        return "rubrique/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 78,  226 => 75,  221 => 73,  217 => 72,  213 => 71,  206 => 67,  195 => 59,  185 => 52,  177 => 46,  169 => 43,  165 => 41,  157 => 39,  155 => 38,  148 => 36,  143 => 35,  140 => 34,  137 => 33,  134 => 32,  131 => 31,  127 => 30,  113 => 19,  108 => 17,  104 => 16,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/rapport\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des régions</span>
            </a>
            <a href=\"{{ path('app_rapport_index') }}\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Rapports</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow bg-light card0 me-4 p-3 priority-4\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des rapports ({{ les_rapport|length }})
                    <a href=\"{{ path('app_rapport_add') }}\" class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#plus') }}\"></use>
                        </svg>Ajout Rapport
                    </a>
                </caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\" width=\"1%\" align=\"center\">Rubriques</th> 
                    </tr>
                </thead>
                <tbody>
                    {% for reg in les_rapport %}
                        {% set cur='' %}
                        {% if rapport.id==reg.id %}
                            {% set cur='bg-warning text-dark bg-opacity-25' %}
                        {% endif %}
                        <tr class=\"{{ cur }}\">
                            <td scope=\"row\"><a href=\"{{ path('app_rapport_show', {'id': reg.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ reg.libelle }}</a></td>
                            <td align=\"center\">
                            {% if reg.rubriques.count >0 %}
                                <a href=\"{{ path('app_rapport_show', {'id': reg.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ reg.rubriques.count }}</a>
                            {% else %}
                                <code class=\"text-danger text-opacity-50\">-</code>
                            {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
                </table>
            </div>
            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de {{ rapport.libelle }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ rapport.libelle }}</div>
                        </div>
                    </div>
                </div>

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Ajout de rubrique pour {{ rapport.libelle }}</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        {{ form_start(rubriqueForm) }}
                            {{ form_row(rubriqueForm.numero) }}
                            {{ form_row(rubriqueForm.libelle) }}
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"{{ path('app_rapport_show', { 'id': rapport.id }) }}\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        {{ form_end(rubriqueForm) }}            
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "rubrique/add.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/rubrique/add.html.twig");
    }
}
