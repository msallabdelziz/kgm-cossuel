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

/* installation/new3.html.twig */
class __TwigTemplate_8fba10e5a2721c2efa8760cafb92ac2f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new3.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "installation/new3.html.twig", 1);
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
                                        <span class=\"text-danger\">[Etape 3 sur 6]</span>
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
        $context["curr_etat"] = 3;
        // line 36
        echo "                                ";
        echo twig_include($this->env, $context, "installation/_progress_bar.html.twig");
        echo "

                            \t<fieldset>
                                <div class=\"card\">
                                    <h2 class=\"fs-title\">Caractéristiques de l'installation</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 44, $this->source); })()), "typeInstallation", [], "any", false, false, false, 44), 'row');
        echo "
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-6\">
                                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 48, $this->source); })()), "natureTravaux", [], "any", false, false, false, 48), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-6 natureTravaux1\">
                                            <span>Indiquer le nombre de circuits *</span>
                                            <div class=\"row\">
                                                <div class=\"col-4 py-1\"><span class=\"fw-light\">TABLEAU A</span></div>
                                                <div class=\"col-4 bg-secondary bg-opacity-25 border py-1\"><span class=\"fw-light\">NEUFS</span></div>
                                                <div class=\"col-4 bg-secondary bg-opacity-25 border py-1\"><span class=\"fw-light\">EXISTANTS</span></div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-4 bg-secondary bg-opacity-25 border py-1\"><span class=\"fw-light\">1,5 mm2</span></div>
                                                <div class=\"col-4 border\">";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 59, $this->source); })()), "neuf15", [], "any", false, false, false, 59), 'widget');
        echo "</div>
                                                <div class=\"col-4 border\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 60, $this->source); })()), "existant15", [], "any", false, false, false, 60), 'widget');
        echo "</div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-4 bg-secondary bg-opacity-25 border py-1\"><span class=\"fw-light\">2,5 mm2</span></div>
                                                <div class=\"col-4 border\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 64, $this->source); })()), "neuf25", [], "any", false, false, false, 64), 'widget');
        echo "</div>
                                                <div class=\"col-4 border\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 65, $this->source); })()), "existant25", [], "any", false, false, false, 65), 'widget');
        echo "</div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-4 border bg-secondary bg-opacity-25\"><span class=\"fw-light\">Autres</span></div>
                                                <div class=\"col-4 border\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 69, $this->source); })()), "neufAutre", [], "any", false, false, false, 69), 'widget');
        echo "</div>
                                                <div class=\"col-4 border\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 70, $this->source); })()), "existantAutre", [], "any", false, false, false, 70), 'widget');
        echo "</div>
                                            </div>
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4\">
                                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 75, $this->source); })()), "intervenantAutre", [], "any", false, false, false, 75), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-8 intervenantAutre1\">
                                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 78, $this->source); })()), "intervenant", [], "any", false, false, false, 78), 'row');
        echo "
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 82
        $this->loadTemplate("installation/_actions_new.html.twig", "installation/new3.html.twig", 82)->display($context);
        // line 83
        echo "                                </fieldset>
                            </div>
                            ";
        // line 89
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 89, $this->source); })()), 'form_end');
        echo "            
                        ";
        // line 90
        $this->loadTemplate("installation/_delete_form.html.twig", "installation/new3.html.twig", 90)->display($context);
        // line 91
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "<script>
    \$(document).ready(function () {
        \$('.intervenantAutre1').hide(); \$(\"#form_intervenant\").prop('required',false); \$('.natureTravaux1').hide();
        \$(\".nt1\").prop('required',false);
        \$(\"#form_typeInstallation\").prop('required',true);
        \$(\"#form_natureTravaux\").prop('required',true);
        optSel=\$('input[type=radio][name=\"form[intervenantAutre]\"]:checked');
        valSel=optSel.val();
        if (valSel==1) {
            \$('.intervenantAutre1').show(); \$(\"#form_intervenant\").prop('required',true);
        }
        \$('input[type=radio][name=\"form[intervenantAutre]\"]').change(function() {
            \$('.intervenantAutre1').hide(); \$(\"#form_intervenant\").prop('required',false);
            optSel=\$('input[type=radio][name=\"form[intervenantAutre]\"]:checked');
            valSel=optSel.val();
            if (valSel==1) {
                \$('.intervenantAutre1').show(); \$(\"#form_intervenant\").prop('required',true);
            }
        });

        optSel=\$('select[name=\"form[natureTravaux]\"]').find(\"option:selected\");
        valSel=optSel.text();
        if (valSel == \"Rénovation Partielle\") {
            \$('.natureTravaux1').show(); \$(\".nt1\").prop('required',true);
            \$(\".nt1\").keydown(function(e) {
                val_num=\$(this).val().replace(/ /g,'').length;
                var value = String.fromCharCode(e.keyCode); //get the charcode and convert to char
                var test0 = /[\\b]/; //regex
                var test = /[0-9\\b]/; //regex
                if (!value.match(test)) { 
                    return false; //dont display key if it is a number
                }    

            });

        }
        \$('select[name=\"form[natureTravaux]\"]').on('change', function() {
            \$('.natureTravaux1').hide(); \$(\".nt1\").prop('required',false);
            optSel=\$('select[name=\"form[natureTravaux]\"]').find(\"option:selected\");
            valSel=optSel.text();
            if (valSel == \"Rénovation Partielle\") {
                \$('.natureTravaux1').show(); 
                \$(\".nt1\").prop('required',true);
                \$(\".nt1\").keydown(function(e) {
                    val_num=\$(this).val().replace(/ /g,'').length;
                    var value = String.fromCharCode(e.keyCode); //get the charcode and convert to char
                    var test0 = /[\\b]/; //regex
                    var test = /[0-9\\b]/; //regex
                    if (!value.match(test)) { 
                        return false; //dont display key if it is a number
                    }    

                });
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
        return "installation/new3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 99,  243 => 98,  228 => 91,  226 => 90,  221 => 89,  217 => 83,  215 => 82,  208 => 78,  202 => 75,  194 => 70,  190 => 69,  183 => 65,  179 => 64,  172 => 60,  168 => 59,  154 => 48,  147 => 44,  135 => 36,  133 => 35,  127 => 32,  113 => 21,  102 => 13,  98 => 12,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
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
                                        <span class=\"text-danger\">[Etape 3 sur 6]</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class=\"\">
                        {{ form_start(installationForm, {'attr': {'id': 'formInstall'}}) }}
                            <div class=\"row\">
                                <!-- progressbar -->
                                {% set curr_etat = 3 %}
                                {{ include('installation/_progress_bar.html.twig') }}

                            \t<fieldset>
                                <div class=\"card\">
                                    <h2 class=\"fs-title\">Caractéristiques de l'installation</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                        {{ form_row(installationForm.typeInstallation) }}
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-6\">
                                        {{ form_row(installationForm.natureTravaux) }}
                                        </div>
                                        <div class=\"col-lg-6 natureTravaux1\">
                                            <span>Indiquer le nombre de circuits *</span>
                                            <div class=\"row\">
                                                <div class=\"col-4 py-1\"><span class=\"fw-light\">TABLEAU A</span></div>
                                                <div class=\"col-4 bg-secondary bg-opacity-25 border py-1\"><span class=\"fw-light\">NEUFS</span></div>
                                                <div class=\"col-4 bg-secondary bg-opacity-25 border py-1\"><span class=\"fw-light\">EXISTANTS</span></div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-4 bg-secondary bg-opacity-25 border py-1\"><span class=\"fw-light\">1,5 mm2</span></div>
                                                <div class=\"col-4 border\">{{ form_widget(installationForm.neuf15) }}</div>
                                                <div class=\"col-4 border\">{{ form_widget(installationForm.existant15) }}</div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-4 bg-secondary bg-opacity-25 border py-1\"><span class=\"fw-light\">2,5 mm2</span></div>
                                                <div class=\"col-4 border\">{{ form_widget(installationForm.neuf25) }}</div>
                                                <div class=\"col-4 border\">{{ form_widget(installationForm.existant25) }}</div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-4 border bg-secondary bg-opacity-25\"><span class=\"fw-light\">Autres</span></div>
                                                <div class=\"col-4 border\">{{ form_widget(installationForm.neufAutre) }}</div>
                                                <div class=\"col-4 border\">{{ form_widget(installationForm.existantAutre) }}</div>
                                            </div>
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.intervenantAutre) }}
                                        </div>
                                        <div class=\"col-lg-8 intervenantAutre1\">
                                            {{ form_row(installationForm.intervenant) }}
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
        \$('.intervenantAutre1').hide(); \$(\"#form_intervenant\").prop('required',false); \$('.natureTravaux1').hide();
        \$(\".nt1\").prop('required',false);
        \$(\"#form_typeInstallation\").prop('required',true);
        \$(\"#form_natureTravaux\").prop('required',true);
        optSel=\$('input[type=radio][name=\"form[intervenantAutre]\"]:checked');
        valSel=optSel.val();
        if (valSel==1) {
            \$('.intervenantAutre1').show(); \$(\"#form_intervenant\").prop('required',true);
        }
        \$('input[type=radio][name=\"form[intervenantAutre]\"]').change(function() {
            \$('.intervenantAutre1').hide(); \$(\"#form_intervenant\").prop('required',false);
            optSel=\$('input[type=radio][name=\"form[intervenantAutre]\"]:checked');
            valSel=optSel.val();
            if (valSel==1) {
                \$('.intervenantAutre1').show(); \$(\"#form_intervenant\").prop('required',true);
            }
        });

        optSel=\$('select[name=\"form[natureTravaux]\"]').find(\"option:selected\");
        valSel=optSel.text();
        if (valSel == \"Rénovation Partielle\") {
            \$('.natureTravaux1').show(); \$(\".nt1\").prop('required',true);
            \$(\".nt1\").keydown(function(e) {
                val_num=\$(this).val().replace(/ /g,'').length;
                var value = String.fromCharCode(e.keyCode); //get the charcode and convert to char
                var test0 = /[\\b]/; //regex
                var test = /[0-9\\b]/; //regex
                if (!value.match(test)) { 
                    return false; //dont display key if it is a number
                }    

            });

        }
        \$('select[name=\"form[natureTravaux]\"]').on('change', function() {
            \$('.natureTravaux1').hide(); \$(\".nt1\").prop('required',false);
            optSel=\$('select[name=\"form[natureTravaux]\"]').find(\"option:selected\");
            valSel=optSel.text();
            if (valSel == \"Rénovation Partielle\") {
                \$('.natureTravaux1').show(); 
                \$(\".nt1\").prop('required',true);
                \$(\".nt1\").keydown(function(e) {
                    val_num=\$(this).val().replace(/ /g,'').length;
                    var value = String.fromCharCode(e.keyCode); //get the charcode and convert to char
                    var test0 = /[\\b]/; //regex
                    var test = /[0-9\\b]/; //regex
                    if (!value.match(test)) { 
                        return false; //dont display key if it is a number
                    }    

                });
            }
        });
    });
</script>

{% endblock %}", "installation/new3.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/new3.html.twig");
    }
}
