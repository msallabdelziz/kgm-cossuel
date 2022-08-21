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

/* installation/new.html.twig */
class __TwigTemplate_5a0ce5b4a5cbd10528034105102e9d67 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "installation/new.html.twig", 1);
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
                                        <span class=\"text-danger\">[Etape 1 sur 6]</span>
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
                                <!-- progressbar -->
                                ";
        // line 35
        $context["curr_etat"] = 1;
        // line 36
        echo "                                ";
        echo twig_include($this->env, $context, "installation/_progress_bar.html.twig");
        echo "

                            \t<fieldset>
                                <div class=\"card\">
                                    <h2 class=\"fs-title\">Données de base de la demande</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-8\">
                                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 44, $this->source); })()), "usages", [], "any", false, false, false, 44), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 47, $this->source); })()), "alimente", [], "any", false, false, false, 47), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 50, $this->source); })()), "compteur", [], "any", false, false, false, 50), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 53, $this->source); })()), "abonnement", [], "any", false, false, false, 53), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 56, $this->source); })()), "grstReseau", [], "any", false, false, false, 56), 'row');
        echo "<br>
                                        </div>
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-4\">
                                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 60, $this->source); })()), "region", [], "any", false, false, false, 60), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 63, $this->source); })()), "departement", [], "any", false, false, false, 63), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 66, $this->source); })()), "localite", [], "any", false, false, false, 66), 'row');
        echo "<br>
                                        </div>
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-12\">
                                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 70, $this->source); })()), "adresse", [], "any", false, false, false, 70), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-8\">
                                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 73, $this->source); })()), "habitation", [], "any", false, false, false, 73), 'row');
        echo "<br>
                                        </div>
                                        ";
        // line 83
        echo "                                    </div>
                                </div>
                                <div align=\"right\">
                                    <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_index");
        echo "\" class=\"me-3 next action-button btn btn-outline-secondary btn my-3\">Annuler</a>
                                    <button type=\"submit\" class=\"next action-button btn btn-primary btn my-3\">Etape Suivante</button>
                                </div>
                                </fieldset>
                            </div>
                            ";
        // line 95
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 95, $this->source); })()), 'form_end');
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

    // line 103
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
        echo "<script>
    \$(document).ready(function () {
        \$('.alimente0').show(); \$('.alimente1').hide();
        \$('#form_abonnement').prop('required',false);
        \$('#form_compteur').prop('required',false);
        \$('#form_region').prop('required',true);
        \$('#form_usages').prop('required',true);
        \$('#form_departement').prop('required',true);
        \$('#form_localite').prop('required',true);
        \$('#form_adresse').prop('required',true);
        optSel=\$('input[type=radio][name=\"form[alimente]\"]:checked');
        valSel=optSel.val();
        if (valSel==1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
            \$('#form_abonnement').prop('required',true);
            \$('#form_compteur').prop('required',true);
        }

        \$('input[type=radio][name=\"form[alimente]\"]').change(function() {
            \$('.alimente0').show(); \$('.alimente1').hide();
            \$('#form_abonnement').prop('required',false);
            \$('#form_compteur').prop('required',false);
            optSel=\$('input[type=radio][name=\"form[alimente]\"]:checked');
            valSel=optSel.val();
            if (valSel == 1) {
                \$('.alimente1').show(); \$('.alimente0').hide();
                \$('#form_abonnement').prop('required',true);
                \$('#form_compteur').prop('required',true);
            }
        });

        on_region_change();
        on_departement_change();
});

    function on_departement_change() {
        var \$departement = \$('#form_departement');
        // When departement gets selected ...
        \$departement.change(function() {
            // Simulate form data, but only include the selected departement value.
            var data = {};
            data['departement'] = \$departement.val();
            // Submit data via AJAX to the form's action path.
            \$.ajax({
                url : '";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_load");
        echo "',
                type: 'post',
                data : data,
                complete: function(html) {
                // Replace current loalite field ...
                \$('#form_localite').replaceWith(
                    // ... with the returned one from the AJAX response.
                    \$(html.responseText).find('#form_localite')
                );
                // departement & localite field now displays the appropriate values.
                } 
            });
        });
    }

    function on_region_change() {
        var \$region = \$('#form_region');

        // When region gets selected ...
        \$region.change(function() {
            // Simulate form data, but only include the selected region value.
            var data = {};
            data['region'] = \$region.val();
            // Submit data via AJAX to the form's action path.
            \$.ajax({
                url : '";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_load");
        echo "',
                type: 'post',
                data : data,
                complete: function(html) {
                // Replace current departement field ...
                \$('#form_departement').replaceWith(
                    // ... with the returned one from the AJAX response.
                    \$(html.responseText).find('#form_departement')
                );
                // Replace current loalite field ...
                \$('#form_localite').replaceWith(
                    // ... with the returned one from the AJAX response.
                    \$(html.responseText).find('#form_localite')
                );
                on_departement_change();
                // departement & localite field now displays the appropriate values.
                } 
            });
        });
    }

</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "installation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 173,  295 => 148,  249 => 104,  239 => 103,  221 => 95,  213 => 86,  208 => 83,  203 => 73,  197 => 70,  190 => 66,  184 => 63,  178 => 60,  171 => 56,  165 => 53,  159 => 50,  153 => 47,  147 => 44,  135 => 36,  133 => 35,  127 => 32,  113 => 21,  102 => 13,  98 => 12,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
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
                                        <span class=\"text-danger\">[Etape 1 sur 6]</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class=\"\">
                        {{ form_start(installationForm, {'attr': {'id': 'formInstall'}}) }}
                            <div class=\"row\">
                                <!-- progressbar -->
                                {% set curr_etat = 1 %}
                                {{ include('installation/_progress_bar.html.twig') }}

                            \t<fieldset>
                                <div class=\"card\">
                                    <h2 class=\"fs-title\">Données de base de la demande</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-8\">
                                            {{ form_row(installationForm.usages) }}<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.alimente) }}<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            {{ form_row(installationForm.compteur) }}<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                        {{ form_row(installationForm.abonnement) }}<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            {{ form_row(installationForm.grstReseau) }}<br>
                                        </div>
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.region) }}<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.departement) }}<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.localite) }}<br>
                                        </div>
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-12\">
                                        {{ form_row(installationForm.adresse) }}<br>
                                        </div>
                                        <div class=\"col-lg-8\">
                                            {{ form_row(installationForm.habitation) }}<br>
                                        </div>
                                        {#                                         
                                        <div class=\"col-lg-2\">
                                            {{ form_row(installationForm.lattitude) }}<br>
                                        </div>
                                        <div class=\"col-lg-2\">
                                            {{ form_row(installationForm.longitude) }}<br>
                                        </div> 
                                        #}
                                    </div>
                                </div>
                                <div align=\"right\">
                                    <a href=\"{{ path('app_installation_index') }}\" class=\"me-3 next action-button btn btn-outline-secondary btn my-3\">Annuler</a>
                                    <button type=\"submit\" class=\"next action-button btn btn-primary btn my-3\">Etape Suivante</button>
                                </div>
                                </fieldset>
                            </div>
                            {# <div align=\"center\">
                                <a class=\"previous btn btn-secondary\" href=\"{{ path('app_installation_index') }}\">Annuler</a>
                                <button type=\"button\" class=\"next action-button btn btn-primary btn my-3\">Enregistrer</button>
                            </div> #}
                        {{ form_end(installationForm) }}            
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
<script>
    \$(document).ready(function () {
        \$('.alimente0').show(); \$('.alimente1').hide();
        \$('#form_abonnement').prop('required',false);
        \$('#form_compteur').prop('required',false);
        \$('#form_region').prop('required',true);
        \$('#form_usages').prop('required',true);
        \$('#form_departement').prop('required',true);
        \$('#form_localite').prop('required',true);
        \$('#form_adresse').prop('required',true);
        optSel=\$('input[type=radio][name=\"form[alimente]\"]:checked');
        valSel=optSel.val();
        if (valSel==1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
            \$('#form_abonnement').prop('required',true);
            \$('#form_compteur').prop('required',true);
        }

        \$('input[type=radio][name=\"form[alimente]\"]').change(function() {
            \$('.alimente0').show(); \$('.alimente1').hide();
            \$('#form_abonnement').prop('required',false);
            \$('#form_compteur').prop('required',false);
            optSel=\$('input[type=radio][name=\"form[alimente]\"]:checked');
            valSel=optSel.val();
            if (valSel == 1) {
                \$('.alimente1').show(); \$('.alimente0').hide();
                \$('#form_abonnement').prop('required',true);
                \$('#form_compteur').prop('required',true);
            }
        });

        on_region_change();
        on_departement_change();
});

    function on_departement_change() {
        var \$departement = \$('#form_departement');
        // When departement gets selected ...
        \$departement.change(function() {
            // Simulate form data, but only include the selected departement value.
            var data = {};
            data['departement'] = \$departement.val();
            // Submit data via AJAX to the form's action path.
            \$.ajax({
                url : '{{ path('app_localite_load') }}',
                type: 'post',
                data : data,
                complete: function(html) {
                // Replace current loalite field ...
                \$('#form_localite').replaceWith(
                    // ... with the returned one from the AJAX response.
                    \$(html.responseText).find('#form_localite')
                );
                // departement & localite field now displays the appropriate values.
                } 
            });
        });
    }

    function on_region_change() {
        var \$region = \$('#form_region');

        // When region gets selected ...
        \$region.change(function() {
            // Simulate form data, but only include the selected region value.
            var data = {};
            data['region'] = \$region.val();
            // Submit data via AJAX to the form's action path.
            \$.ajax({
                url : '{{ path('app_departement_load') }}',
                type: 'post',
                data : data,
                complete: function(html) {
                // Replace current departement field ...
                \$('#form_departement').replaceWith(
                    // ... with the returned one from the AJAX response.
                    \$(html.responseText).find('#form_departement')
                );
                // Replace current loalite field ...
                \$('#form_localite').replaceWith(
                    // ... with the returned one from the AJAX response.
                    \$(html.responseText).find('#form_localite')
                );
                on_departement_change();
                // departement & localite field now displays the appropriate values.
                } 
            });
        });
    }

</script>

{% endblock %}
", "installation/new.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/new.html.twig");
    }
}
