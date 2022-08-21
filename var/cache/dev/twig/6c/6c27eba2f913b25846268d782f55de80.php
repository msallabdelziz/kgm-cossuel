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

/* installation/new4.html.twig */
class __TwigTemplate_f4448ff3ad4f9599d6b5b8512e70364b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new4.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new4.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "installation/new4.html.twig", 1);
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
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Demandes</a>
        </header>
        <div class=\"row\">
        ";
        // line 13
        $context["offset"] = "offset-md-1";
        echo "            
            <div class=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " col-lg-10 mb-2  p-3\">

                <div class=\"\">
                    <nav class=\"navbar shadow bg-warning border border-dark my-2 mb-2 p-0\">
                        <div class=\"container-fluid ps-4\">
                            <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                                <div class=\"col\">
                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                        <use xlink:href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                    </svg>
                                    Saisie Nouvelle demande
                                </div>
                                <div class=\"col\" align=\"right\">
                                        <span class=\"text-danger\">[Etape 4 sur 6]</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                    ";
        // line 32
        $this->loadTemplate("installation/_search_electricien.html.twig", "installation/new4.html.twig", 32)->display($context);
        // line 33
        echo "                    <div class=\"\">
                        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["id" => "formInstall"]]);
        echo "
                            <div class=\"row\">
                                <!-- progressbar -->
                                ";
        // line 37
        $context["curr_etat"] = 4;
        // line 38
        echo "                                ";
        echo twig_include($this->env, $context, "installation/_progress_bar.html.twig");
        echo "

                            \t<fieldset>
                                <div class=\"card\">
                                    <div class=\"row\">
                                        <div class=\"col-8\">
                                            <h2 class=\"fs-title\">Informations sur l'électricien</h2>
                                        </div>
                                        <div class=\"col-4\" align=\"right\">
                                            <div class=\"input-group input-group-sm mb-2\">
                                                <span class=\"input-group-text \">Rechercher</span>
                                                <input placeholder=\"... par nin, tél. ou email\" class=\"border-warning form-control\" id=\"telephone_electricien\" type=\"text\" name=\"telephone_electricien\" value=\"\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 56, $this->source); })()), "nom", [], "any", false, false, false, 56), 'row');
        echo "
                                        </div>

                                        <div class=\"col-lg-5\">
                                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 60, $this->source); })()), "prenom", [], "any", false, false, false, 60), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 63, $this->source); })()), "localite", [], "any", false, false, false, 63), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-8\">
                                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 66, $this->source); })()), "adresse", [], "any", false, false, false, 66), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 69, $this->source); })()), "telephone", [], "any", false, false, false, 69), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 72, $this->source); })()), "autreNumTelephone", [], "any", false, false, false, 72), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 75, $this->source); })()), "email", [], "any", false, false, false, 75), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 78, $this->source); })()), "typePiece", [], "any", false, false, false, 78), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 81, $this->source); })()), "numPiece", [], "any", false, false, false, 81), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label for=\"\">PJ Electricien</label>
                                            ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 85, $this->source); })()), "PJElectricien", [], "any", false, false, false, 85)) {
            // line 86
            echo "                                                <div class=\"form-control\">
                                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                        <use xlink:href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
            echo "\"></use>
                                                    </svg>
                                                    <span class=\"text-success pt fs-8\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 90, $this->source); })()), "PJElectricien", [], "any", false, false, false, 90), "fichier", [], "any", false, false, false, 90), "html", null, true);
            echo " </span>
                                                    <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj').show()\">
                                                        <use xlink:href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                                    </svg>
                                                </div>
                                            ";
        } else {
            // line 96
            echo "                                                <div class=\"form-control\">
                                                    <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                                    <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj').show()\">
                                                        <use xlink:href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                                    </svg>
                                                </div>
                                            ";
        }
        // line 103
        echo "                                        </div>
                                        <div class=\"col-lg-8 z_pj\">
                                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 105, $this->source); })()), "pj", [], "any", false, false, false, 105), 'row');
        echo "
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 109
        $this->loadTemplate("installation/_actions_new.html.twig", "installation/new4.html.twig", 109)->display($context);
        // line 110
        echo "                                </fieldset>
                            </div>
                            ";
        // line 116
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 116, $this->source); })()), 'form_end');
        echo "            
                        ";
        // line 117
        $this->loadTemplate("installation/_delete_form.html.twig", "installation/new4.html.twig", 117)->display($context);
        // line 118
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "<script>
    \$(document).ready(function() {
        \$(\"#electricien_localite\").prop('required',true);
        \$(\"#electricien_typePiece\").prop('required',true);
        \$('.z_pj').hide();

        ";
        // line 132
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 132, $this->source); })()), "PJElectricien", [], "any", false, false, false, 132)) {
            // line 133
            echo "            \$('.z_pj').show();
            \$(\"#electricien_pj\").prop('required',true);
        ";
        }
        // line 136
        echo "
        \$(\"#electricien_typePiece\").change(function(e) {
            \$(\"#electricien_numPiece\").focus();
            \$(\"#electricien_numPiece\").css('borderColor', '#ced4da')
            \$(\"#electricien_numPiece\").css('borderLeft', '2px solid red')
        });

        \$(\"#electricien_numPiece\").keydown(function(e) {
            type_p=\$(\"#electricien_typePiece option:selected\").val();
            val_num=\$(this).val().replace(/ /g,'').length;
            var value = String.fromCharCode(e.keyCode); //get the charcode and convert to char
            var test0 = /[\\b]/; //regex
            nb_max=15;
            if(type_p==\"CNI\") {
                var test = /[0-9\\b]/; //regex
                \$(this).val(\$(this).val().replace(/[a-zA-Z]/g,''));
                val_num=\$(this).val().replace(/ /g,'').length;
                nb_max=13;
            } else {
                var test = /[a-zA-Z0-9\\b]/; //regex
            }
            if (!value.match(test)) { 
                return false; //dont display key if it is a number
            }    
            if (val_num>nb_max) { 
                if(!value.match(test0))
                    return false; //dont display key if it is a number
            }    

        });

        \$('#electricien_numPiece').focusout(function(){
            type_p=\$(\"#electricien_typePiece option:selected\").val();
            if(type_p==\"CNI\") {
                var max1 = 13; var max2 = 14;
                var len = \$(this).val().length;

                if((len != max1 && len != max2) && len){
                    \$(this).css('border', '1px solid red')
                    \$(this).css('borderLeft', '2px solid red')
                    \$(this).select();
                    \$(this).focus();
                } else {
                    \$(this).css('borderColor', '#ced4da')
                    \$(this).css('borderLeft', '2px solid red')
                }
            }
        });        

        \$(\"#electricien_telephone\").keydown(function(e) {
            val_num=\$(\"#electricien_telephone\").val().replace(/ /g,'').length;
            var value = String.fromCharCode(e.keyCode); //get the charcode and convert to char
            var test0 = /[\\b]/; //regex
            nb_max=9
            var test = /[0-9\\b]/; //regex
            if (!value.match(test)) { 
                return false; //dont display key if it is a number
            }    
            if (val_num>=nb_max) { 
                if(!value.match(test0))
                    return false; //dont display key if it is a number
            }    

        });

        \$('#electricien_telephone').focusout(function(){
            var max = 9;
            var len = \$(this).val().length;

            if(len != max && len){
                \$(this).css('border', '1px solid red')
                \$(this).css('borderLeft', '2px solid red')
                \$(this).select();
                \$(this).focus();
            } else {
                \$(this).css('borderColor', '#ced4da')
                \$(this).css('borderLeft', '2px solid red')
            }
        });        

        \$(\"#telephone_electricien\").keydown(function(event){
            if(event.keyCode == 13) {
                \$(\"#rech_electricien\").val(\$(\"#telephone_electricien\").val());
                \$(\"#form_rech_electricien\").submit();
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
        return "installation/new4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 136,  315 => 133,  313 => 132,  305 => 126,  295 => 125,  280 => 118,  278 => 117,  273 => 116,  269 => 110,  267 => 109,  260 => 105,  256 => 103,  249 => 99,  244 => 96,  237 => 92,  232 => 90,  227 => 88,  223 => 86,  221 => 85,  214 => 81,  208 => 78,  202 => 75,  196 => 72,  190 => 69,  184 => 66,  178 => 63,  172 => 60,  165 => 56,  143 => 38,  141 => 37,  135 => 34,  132 => 33,  130 => 32,  117 => 22,  106 => 14,  102 => 13,  96 => 10,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
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
            <a href=\"{{ path('app_installation_index') }}\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Demandes</a>
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
                                        <span class=\"text-danger\">[Etape 4 sur 6]</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                    {% include \"installation/_search_electricien.html.twig\" %}
                    <div class=\"\">
                        {{ form_start(installationForm, {'attr': {'id': 'formInstall'}}) }}
                            <div class=\"row\">
                                <!-- progressbar -->
                                {% set curr_etat = 4 %}
                                {{ include('installation/_progress_bar.html.twig') }}

                            \t<fieldset>
                                <div class=\"card\">
                                    <div class=\"row\">
                                        <div class=\"col-8\">
                                            <h2 class=\"fs-title\">Informations sur l'électricien</h2>
                                        </div>
                                        <div class=\"col-4\" align=\"right\">
                                            <div class=\"input-group input-group-sm mb-2\">
                                                <span class=\"input-group-text \">Rechercher</span>
                                                <input placeholder=\"... par nin, tél. ou email\" class=\"border-warning form-control\" id=\"telephone_electricien\" type=\"text\" name=\"telephone_electricien\" value=\"\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                        {{ form_row(installationForm.nom) }}
                                        </div>

                                        <div class=\"col-lg-5\">
                                        {{ form_row(installationForm.prenom) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.localite) }}
                                        </div>
                                        <div class=\"col-lg-8\">
                                            {{ form_row(installationForm.adresse) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.telephone) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.autreNumTelephone) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.email) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.typePiece) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.numPiece) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label for=\"\">PJ Electricien</label>
                                            {% if installation.PJElectricien %}
                                                <div class=\"form-control\">
                                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                                                    </svg>
                                                    <span class=\"text-success pt fs-8\">{{installation.PJElectricien.fichier}} </span>
                                                    <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj').show()\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                                    </svg>
                                                </div>
                                            {% else %}
                                                <div class=\"form-control\">
                                                    <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                                    <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj').show()\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                                    </svg>
                                                </div>
                                            {% endif %}
                                        </div>
                                        <div class=\"col-lg-8 z_pj\">
                                            {{ form_row(installationForm.pj) }}
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
    \$(document).ready(function() {
        \$(\"#electricien_localite\").prop('required',true);
        \$(\"#electricien_typePiece\").prop('required',true);
        \$('.z_pj').hide();

        {% if not installation.PJElectricien %}
            \$('.z_pj').show();
            \$(\"#electricien_pj\").prop('required',true);
        {% endif %}

        \$(\"#electricien_typePiece\").change(function(e) {
            \$(\"#electricien_numPiece\").focus();
            \$(\"#electricien_numPiece\").css('borderColor', '#ced4da')
            \$(\"#electricien_numPiece\").css('borderLeft', '2px solid red')
        });

        \$(\"#electricien_numPiece\").keydown(function(e) {
            type_p=\$(\"#electricien_typePiece option:selected\").val();
            val_num=\$(this).val().replace(/ /g,'').length;
            var value = String.fromCharCode(e.keyCode); //get the charcode and convert to char
            var test0 = /[\\b]/; //regex
            nb_max=15;
            if(type_p==\"CNI\") {
                var test = /[0-9\\b]/; //regex
                \$(this).val(\$(this).val().replace(/[a-zA-Z]/g,''));
                val_num=\$(this).val().replace(/ /g,'').length;
                nb_max=13;
            } else {
                var test = /[a-zA-Z0-9\\b]/; //regex
            }
            if (!value.match(test)) { 
                return false; //dont display key if it is a number
            }    
            if (val_num>nb_max) { 
                if(!value.match(test0))
                    return false; //dont display key if it is a number
            }    

        });

        \$('#electricien_numPiece').focusout(function(){
            type_p=\$(\"#electricien_typePiece option:selected\").val();
            if(type_p==\"CNI\") {
                var max1 = 13; var max2 = 14;
                var len = \$(this).val().length;

                if((len != max1 && len != max2) && len){
                    \$(this).css('border', '1px solid red')
                    \$(this).css('borderLeft', '2px solid red')
                    \$(this).select();
                    \$(this).focus();
                } else {
                    \$(this).css('borderColor', '#ced4da')
                    \$(this).css('borderLeft', '2px solid red')
                }
            }
        });        

        \$(\"#electricien_telephone\").keydown(function(e) {
            val_num=\$(\"#electricien_telephone\").val().replace(/ /g,'').length;
            var value = String.fromCharCode(e.keyCode); //get the charcode and convert to char
            var test0 = /[\\b]/; //regex
            nb_max=9
            var test = /[0-9\\b]/; //regex
            if (!value.match(test)) { 
                return false; //dont display key if it is a number
            }    
            if (val_num>=nb_max) { 
                if(!value.match(test0))
                    return false; //dont display key if it is a number
            }    

        });

        \$('#electricien_telephone').focusout(function(){
            var max = 9;
            var len = \$(this).val().length;

            if(len != max && len){
                \$(this).css('border', '1px solid red')
                \$(this).css('borderLeft', '2px solid red')
                \$(this).select();
                \$(this).focus();
            } else {
                \$(this).css('borderColor', '#ced4da')
                \$(this).css('borderLeft', '2px solid red')
            }
        });        

        \$(\"#telephone_electricien\").keydown(function(event){
            if(event.keyCode == 13) {
                \$(\"#rech_electricien\").val(\$(\"#telephone_electricien\").val());
                \$(\"#form_rech_electricien\").submit();
            }
        });
    });

</script>
{% endblock %}
", "installation/new4.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/new4.html.twig");
    }
}
