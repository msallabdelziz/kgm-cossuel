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

/* utilisateur/new.html.twig */
class __TwigTemplate_b0c09a095850da0b1e7ce84a1070725828917096d2909f649ad2aabc2afeeb62 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/new.html.twig", 1);
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
            <a href=\"/utilisateur\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des utilisateurs</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        echo "\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Utilisateurs</a>
        </header>
        <div class=\"row\">
        ";
        // line 13
        $context["offset"] = "offset-md-3";
        echo "            
        ";
        // line 14
        if (twig_length_filter($this->env, (isset($context["les_utilisateur"]) || array_key_exists("les_utilisateur", $context) ? $context["les_utilisateur"] : (function () { throw new RuntimeError('Variable "les_utilisateur" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "        ";
            $context["offset"] = "";
            echo "            
            <div class=\"col-5 bg-body shadow bg-light card0 me-4 p-3\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des utilisateurs (";
            // line 19
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_utilisateur"]) || array_key_exists("les_utilisateur", $context) ? $context["les_utilisateur"] : (function () { throw new RuntimeError('Variable "les_utilisateur" does not exist.', 19, $this->source); })())), "html", null, true);
            echo ")
                </caption>
                <thead>
                    <tr>
                        <th>Type</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\">Prénom</th> 
                        ";
            // line 27
            echo "                    </tr>
                </thead>
                <tbody>
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_utilisateur"]) || array_key_exists("les_utilisateur", $context) ? $context["les_utilisateur"] : (function () { throw new RuntimeError('Variable "les_utilisateur" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
                // line 31
                echo "                        ";
                $context["cur"] = "";
                // line 32
                echo "                        ";
                if ((array_key_exists("utilisateur", $context) && (twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32) == twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 32)))) {
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "type", [], "any", false, false, false, 36), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "nom", [], "any", false, false, false, 37), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "prenom", [], "any", false, false, false, 38), "html", null, true);
                echo "</a></td>
                            ";
                // line 46
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </tbody>
                </table>
            </div>
        ";
        }
        // line 52
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " col-lg-6 mb-2 shadow border border-light card p-3\">

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Ajout Utilisateur</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                            ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["utilisateurForm"]) || array_key_exists("utilisateurForm", $context) ? $context["utilisateurForm"] : (function () { throw new RuntimeError('Variable "utilisateurForm" does not exist.', 61, $this->source); })()), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateurForm"]) || array_key_exists("utilisateurForm", $context) ? $context["utilisateurForm"] : (function () { throw new RuntimeError('Variable "utilisateurForm" does not exist.', 64, $this->source); })()), "type", [], "any", false, false, false, 64), 'row');
        echo "
                                </div>
                                <div class=\"col-5\">
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateurForm"]) || array_key_exists("utilisateurForm", $context) ? $context["utilisateurForm"] : (function () { throw new RuntimeError('Variable "utilisateurForm" does not exist.', 67, $this->source); })()), "nom", [], "any", false, false, false, 67), 'row');
        echo "
                                </div>
                                <div class=\"col-7\">
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateurForm"]) || array_key_exists("utilisateurForm", $context) ? $context["utilisateurForm"] : (function () { throw new RuntimeError('Variable "utilisateurForm" does not exist.', 70, $this->source); })()), "prenom", [], "any", false, false, false, 70), 'row');
        echo "
                                </div>
                                <div class=\"col-12\">
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateurForm"]) || array_key_exists("utilisateurForm", $context) ? $context["utilisateurForm"] : (function () { throw new RuntimeError('Variable "utilisateurForm" does not exist.', 73, $this->source); })()), "adresse", [], "any", false, false, false, 73), 'row');
        echo "
                                </div>
                                <div class=\"col-5\">
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateurForm"]) || array_key_exists("utilisateurForm", $context) ? $context["utilisateurForm"] : (function () { throw new RuntimeError('Variable "utilisateurForm" does not exist.', 76, $this->source); })()), "telephone", [], "any", false, false, false, 76), 'row');
        echo "
                                </div>
                                <div class=\"col-7\">
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateurForm"]) || array_key_exists("utilisateurForm", $context) ? $context["utilisateurForm"] : (function () { throw new RuntimeError('Variable "utilisateurForm" does not exist.', 79, $this->source); })()), "email", [], "any", false, false, false, 79), 'row');
        echo "
                                </div>
                            </div>
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        echo "\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["utilisateurForm"]) || array_key_exists("utilisateurForm", $context) ? $context["utilisateurForm"] : (function () { throw new RuntimeError('Variable "utilisateurForm" does not exist.', 86, $this->source); })()), 'form_end');
        echo "            
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
        return "utilisateur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 86,  238 => 83,  231 => 79,  225 => 76,  219 => 73,  213 => 70,  207 => 67,  201 => 64,  195 => 61,  182 => 52,  176 => 48,  169 => 46,  163 => 38,  157 => 37,  151 => 36,  146 => 35,  143 => 34,  140 => 33,  137 => 32,  134 => 31,  130 => 30,  125 => 27,  115 => 19,  107 => 15,  105 => 14,  101 => 13,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}
{% block body %}
    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/utilisateur\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des utilisateurs</span>
            </a>
            <a href=\"{{ path('app_utilisateur_index') }}\" class=\"btn btn-sm fs-7 btn-success ms-auto\">Liste des Utilisateurs</a>
        </header>
        <div class=\"row\">
        {% set offset=\"offset-md-3\" %}            
        {% if les_utilisateur|length %}
        {% set offset=\"\" %}            
            <div class=\"col-5 bg-body shadow bg-light card0 me-4 p-3\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des utilisateurs ({{ les_utilisateur|length }})
                </caption>
                <thead>
                    <tr>
                        <th>Type</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\">Prénom</th> 
                        {# <th scope=\"col\" width=\"1%\" align=\"center\">Utilisateurs</th>  #}
                    </tr>
                </thead>
                <tbody>
                    {% for reg in les_utilisateur %}
                        {% set cur='' %}
                        {% if utilisateur is defined and utilisateur.id==reg.id %}
                            {% set cur='bg-warning text-dark bg-opacity-25' %}
                        {% endif %}
                        <tr class=\"{{ cur }}\">
                            <td scope=\"row\"><a href=\"{{ path('app_utilisateur_show', {'id': reg.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ reg.type }}</a></td>
                            <td><a href=\"{{ path('app_utilisateur_show', {'id': reg.id }) }}\" class=\"text-dark text-decoration-none\">{{ reg.nom }}</a></td>
                            <td><a href=\"{{ path('app_utilisateur_show', {'id': reg.id }) }}\" class=\"text-dark text-decoration-none\">{{ reg.prenom }}</a></td>
                            {# <td align=\"center\">
                            {% if reg.utilisateur.count >0 %}
                                <a href=\"{{ path('app_utilisateur_show', {'id': reg.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ reg.utilisateur.count }}</a>
                            {% else %}
                                <code class=\"text-danger text-opacity-50\">-</code>
                            {% endif %}
                            </td> #}
                        </tr>
                    {% endfor %}
                </tbody>
                </table>
            </div>
        {% endif %}
            <div class=\"{{ offset }} col-lg-6 mb-2 shadow border border-light card p-3\">

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Ajout Utilisateur</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                            {{ form_start(utilisateurForm) }}
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    {{ form_row(utilisateurForm.type) }}
                                </div>
                                <div class=\"col-5\">
                                    {{ form_row(utilisateurForm.nom) }}
                                </div>
                                <div class=\"col-7\">
                                    {{ form_row(utilisateurForm.prenom) }}
                                </div>
                                <div class=\"col-12\">
                                    {{ form_row(utilisateurForm.adresse) }}
                                </div>
                                <div class=\"col-5\">
                                    {{ form_row(utilisateurForm.telephone) }}
                                </div>
                                <div class=\"col-7\">
                                    {{ form_row(utilisateurForm.email) }}
                                </div>
                            </div>
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"{{ path('app_utilisateur_index') }}\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        {{ form_end(utilisateurForm) }}            
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "utilisateur/new.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/utilisateur/new.html.twig");
    }
}
