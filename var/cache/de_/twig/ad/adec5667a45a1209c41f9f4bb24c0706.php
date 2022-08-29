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

/* installation/new2.html.twig */
class __TwigTemplate_843ab41d78c647129582b4d5435c9e11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "installation/new2.html.twig", 1);
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
                <span class=\"fs-4\">Soumission de demandes </span>
            </a>
        </header>
        <div class=\"row\">
        ";
        // line 12
        $context["offset"] = "offset-md-1";
        echo "            
            <div class=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " col-lg-10 mb-2  p-3\">

                <div class=\"\">
                    <nav class=\"navbar shadow bg-warning border border-dark my-2 mb-2 p-0\">
                        <div class=\"container-fluid ps-4\">
                            <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                                <div class=\"col\">
                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                        <use xlink:href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                    </svg>
                                    Saisie Nouvelle demande
                                </div>
                                <div class=\"col\" align=\"right\">
                                        <span class=\"text-danger\">[Etape 2 sur 6]</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class=\"\">
                        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["id" => "formInstall"]]);
        echo "
                            <div class=\"row\">
                            ";
        // line 34
        $context["curr_etat"] = 2;
        // line 35
        echo "                            ";
        echo twig_include($this->env, $context, "installation/_progress_bar.html.twig");
        echo "
                            \t<fieldset>
                                <div class=\"card\">
                                    <h2 class=\"fs-title\">Caractéristiques du site</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-4\">
                                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 42, $this->source); })()), "collectif", [], "any", false, false, false, 42), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 45, $this->source); })()), "nomSite", [], "any", false, false, false, 45), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 48, $this->source); })()), "logement", [], "any", false, false, false, 48), 'row');
        echo "<br>
                                        </div>
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 52, $this->source); })()), "typeConstruction", [], "any", false, false, false, 52), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1\">
                                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 55, $this->source); })()), "niveau", [], "any", false, false, false, 55), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-6 typeConstruction3\">
                                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 58, $this->source); })()), "activite", [], "any", false, false, false, 58), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 61, $this->source); })()), "priece", [], "any", false, false, false, 61), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 64, $this->source); })()), "numeroMaison", [], "any", false, false, false, 64), 'row');
        echo "<br>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 68
        $this->loadTemplate("installation/_actions_new.html.twig", "installation/new2.html.twig", 68)->display($context);
        // line 69
        echo "                                </fieldset>
                            </div>
                            ";
        // line 75
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 75, $this->source); })()), 'form_end');
        echo "            
                        ";
        // line 76
        $this->loadTemplate("installation/_delete_form.html.twig", "installation/new2.html.twig", 76)->display($context);
        // line 77
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "<script>
    \$(document).ready(function () {
        \$('#form_typeConstruction').prop('required',true);
    
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('input[type=radio][name=\"form[collectif]\"]:checked');
        valSel=optSel.val();
        if (valSel==1) {
            \$('.collectif1').show(); \$('.collectif0').hide();
            \$('#form_nomSite').prop('required',true);
            \$('#form_logement').prop('required',true);
        }
        \$('input[type=radio][name=\"form[collectif]\"]').change(function() {
            optSel=\$('input[type=radio][name=\"form[collectif]\"]:checked');
            valSel=optSel.val();
            if (valSel==1) {
                \$('.collectif1').show(); \$('.collectif0').hide();
                \$('#form_nomSite').prop('required',true);
                \$('#form_logement').prop('required',true);
            }
            else if (valSel==0) {
                \$('.collectif0').show(); \$('.collectif1').hide();
                \$('#form_nomSite').prop('required',false);
                \$('#form_logement').prop('required',false);
            }
        });

        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        optSel=\$('select[name=\"form[typeConstruction]\"]').find(\"option:selected\");
        valSel=optSel.text();
        if (valSel == \"Maison\" || valSel == \"IGH (Immeuble de Grande Hauteur)\") {
            \$('.typeConstruction1').show(); 
            \$('#form_niveau').prop('required',true); 
            ";
        // line 117
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 117, $this->source); })()), "usages", [], "any", false, false, false, 117) != "erp_ert")) {
            // line 118
            echo "                \$('#form_niveau').prop('max', 4);
            ";
        } else {
            // line 120
            echo "                \$('#form_niveau').prop('min', 5);
            ";
        }
        // line 122
        echo "            \$('#form_priece').prop('required',true);
        }
        else if (valSel == \"Appartement\" || valSel == \"Foyer Logement\" || valSel == \"Dépendance\") {
            \$('.typeConstruction2').show();
            \$('#form_priece').prop('required',true);
        }
        else if (valSel == \"Etablissement Recevant du Public (ERP)\" || valSel == \"Etablissement Recevant des Travailleurs (ERT)\") {
            \$('.typeConstruction3').show(); 
            \$('#form_activite').prop('required',true);
        }

        \$('select[name=\"form[typeConstruction]\"]').on('change', function() {
            \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide(); \$('.typeConstruction3').hide();
            optSel=\$('select[name=\"form[typeConstruction]\"]').find(\"option:selected\");
            valSel=optSel.text();
            \$('#form_niveau').prop('required',false);
            \$('#form_priece').prop('required',false);
            \$('#form_activite').prop('required',false);
            if (valSel == \"Maison\" || valSel == \"IGH (Immeuble de Grande Hauteur)\") {
                \$('.typeConstruction1').show(); 
                \$('#form_niveau').prop('required',true); 
                ";
        // line 143
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 143, $this->source); })()), "usages", [], "any", false, false, false, 143) != "erp_ert")) {
            // line 144
            echo "                    \$('#form_niveau').prop('max', 4);
                ";
        } else {
            // line 146
            echo "                    \$('#form_niveau').prop('min', 5);
                ";
        }
        // line 148
        echo "                \$('#form_priece').prop('required',true);
            }
            else if (valSel == \"Appartement\" || valSel == \"Foyer Logement\" || valSel == \"Dépendance\") {
                \$('.typeConstruction2').show();
                \$('#form_priece').prop('required',true);
            }
            else if (valSel == \"Etablissement Recevant du Public (ERP)\" || valSel == \"Etablissement Recevant des Travailleurs (ERT)\") {
                \$('.typeConstruction3').show(); 
                \$('#form_activite').prop('required',true);
            }
        });
    });
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "installation/new2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 148,  307 => 146,  303 => 144,  301 => 143,  278 => 122,  274 => 120,  270 => 118,  268 => 117,  233 => 84,  223 => 83,  208 => 77,  206 => 76,  201 => 75,  197 => 69,  195 => 68,  188 => 64,  182 => 61,  176 => 58,  170 => 55,  164 => 52,  157 => 48,  151 => 45,  145 => 42,  134 => 35,  132 => 34,  127 => 32,  113 => 21,  102 => 13,  98 => 12,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Soumission de demandes </span>
            </a>
        </header>
        <div class=\"row\">
        {% set offset=\"offset-md-1\" %}            
            <div class=\"{{ offset }} col-lg-10 mb-2  p-3\">

                <div class=\"\">
                    <nav class=\"navbar shadow bg-warning border border-dark my-2 mb-2 p-0\">
                        <div class=\"container-fluid ps-4\">
                            <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                                <div class=\"col\">
                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#lightbulb') }}\"></use>
                                    </svg>
                                    Saisie Nouvelle demande
                                </div>
                                <div class=\"col\" align=\"right\">
                                        <span class=\"text-danger\">[Etape 2 sur 6]</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class=\"\">
                        {{ form_start(installationForm, {'attr': {'id': 'formInstall'}}) }}
                            <div class=\"row\">
                            {% set curr_etat = 2 %}
                            {{ include('installation/_progress_bar.html.twig') }}
                            \t<fieldset>
                                <div class=\"card\">
                                    <h2 class=\"fs-title\">Caractéristiques du site</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.collectif) }}<br>
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            {{ form_row(installationForm.nomSite) }}<br>
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            {{ form_row(installationForm.logement) }}<br>
                                        </div>
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                            {{ form_row(installationForm.typeConstruction) }}<br>
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1\">
                                            {{ form_row(installationForm.niveau) }}<br>
                                        </div>
                                        <div class=\"col-lg-6 typeConstruction3\">
                                            {{ form_row(installationForm.activite) }}<br>
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                            {{ form_row(installationForm.priece) }}<br>
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                            {{ form_row(installationForm.numeroMaison) }}<br>
                                        </div>
                                    </div>
                                </div>
                                {% include \"installation/_actions_new.html.twig\" %}
                                </fieldset>
                            </div>
                            {# <div align=\"center\">
                                <a class=\"previous btn btn-secondary\" href=\"{{ path('app_installation_index') }}\">Annuler</a>
                                <button type=\"button\" class=\"next action-button btn btn-primary btn my-3\">Enregistrer</button>
                            </div> #}
                        {{ form_end(installationForm) }}            
                        {% include \"installation/_delete_form.html.twig\" %}
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
{% block javascripts %}
<script>
    \$(document).ready(function () {
        \$('#form_typeConstruction').prop('required',true);
    
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('input[type=radio][name=\"form[collectif]\"]:checked');
        valSel=optSel.val();
        if (valSel==1) {
            \$('.collectif1').show(); \$('.collectif0').hide();
            \$('#form_nomSite').prop('required',true);
            \$('#form_logement').prop('required',true);
        }
        \$('input[type=radio][name=\"form[collectif]\"]').change(function() {
            optSel=\$('input[type=radio][name=\"form[collectif]\"]:checked');
            valSel=optSel.val();
            if (valSel==1) {
                \$('.collectif1').show(); \$('.collectif0').hide();
                \$('#form_nomSite').prop('required',true);
                \$('#form_logement').prop('required',true);
            }
            else if (valSel==0) {
                \$('.collectif0').show(); \$('.collectif1').hide();
                \$('#form_nomSite').prop('required',false);
                \$('#form_logement').prop('required',false);
            }
        });

        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        optSel=\$('select[name=\"form[typeConstruction]\"]').find(\"option:selected\");
        valSel=optSel.text();
        if (valSel == \"Maison\" || valSel == \"IGH (Immeuble de Grande Hauteur)\") {
            \$('.typeConstruction1').show(); 
            \$('#form_niveau').prop('required',true); 
            {% if installation.usages != \"erp_ert\" %}
                \$('#form_niveau').prop('max', 4);
            {% else %}
                \$('#form_niveau').prop('min', 5);
            {% endif %}
            \$('#form_priece').prop('required',true);
        }
        else if (valSel == \"Appartement\" || valSel == \"Foyer Logement\" || valSel == \"Dépendance\") {
            \$('.typeConstruction2').show();
            \$('#form_priece').prop('required',true);
        }
        else if (valSel == \"Etablissement Recevant du Public (ERP)\" || valSel == \"Etablissement Recevant des Travailleurs (ERT)\") {
            \$('.typeConstruction3').show(); 
            \$('#form_activite').prop('required',true);
        }

        \$('select[name=\"form[typeConstruction]\"]').on('change', function() {
            \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide(); \$('.typeConstruction3').hide();
            optSel=\$('select[name=\"form[typeConstruction]\"]').find(\"option:selected\");
            valSel=optSel.text();
            \$('#form_niveau').prop('required',false);
            \$('#form_priece').prop('required',false);
            \$('#form_activite').prop('required',false);
            if (valSel == \"Maison\" || valSel == \"IGH (Immeuble de Grande Hauteur)\") {
                \$('.typeConstruction1').show(); 
                \$('#form_niveau').prop('required',true); 
                {% if installation.usages != \"erp_ert\" %}
                    \$('#form_niveau').prop('max', 4);
                {% else %}
                    \$('#form_niveau').prop('min', 5);
                {% endif %}
                \$('#form_priece').prop('required',true);
            }
            else if (valSel == \"Appartement\" || valSel == \"Foyer Logement\" || valSel == \"Dépendance\") {
                \$('.typeConstruction2').show();
                \$('#form_priece').prop('required',true);
            }
            else if (valSel == \"Etablissement Recevant du Public (ERP)\" || valSel == \"Etablissement Recevant des Travailleurs (ERT)\") {
                \$('.typeConstruction3').show(); 
                \$('#form_activite').prop('required',true);
            }
        });
    });
</script>

{% endblock %}", "installation/new2.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/new2.html.twig");
    }
}
