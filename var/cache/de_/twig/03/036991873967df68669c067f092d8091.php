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

/* installation/new5.html.twig */
class __TwigTemplate_ecfbdcf43ebd2fe864e23cdba4c5cae0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new5.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new5.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "installation/new5.html.twig", 1);
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
                                        <span class=\"text-danger\">[Etape 5 sur 6]</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                    ";
        // line 31
        $this->loadTemplate("installation/_search_proprietaire.html.twig", "installation/new5.html.twig", 31)->display($context);
        // line 32
        echo "                    <div class=\"\">
                        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["id" => "formInstall"]]);
        echo "
                            <div class=\"row\">
                                <!-- progressbar -->
                                ";
        // line 36
        $context["curr_etat"] = 5;
        // line 37
        echo "                                ";
        echo twig_include($this->env, $context, "installation/_progress_bar.html.twig");
        echo "

                            \t<fieldset>
                                <div class=\"card\">
                                    <div class=\"row\">
                                        <div class=\"col-8\">
                                            <h2 class=\"fs-title\">Informations sur le propriétaire de l'installation</h2>
                                        </div>
                                        <div class=\"col-4\" align=\"right\">
                                            <div class=\"input-group input-group-sm mb-2\">
                                                <span class=\"input-group-text \">Rechercher</span>
                                                <input placeholder=\"... par nin, tél. ou email\" class=\"border-warning form-control\" id=\"telephone_proprietaire\" type=\"text\" name=\"telephone_proprietaire\" value=\"\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 55, $this->source); })()), "nom", [], "any", false, false, false, 55), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-5\">
                                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 58, $this->source); })()), "prenom", [], "any", false, false, false, 58), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 61, $this->source); })()), "localite", [], "any", false, false, false, 61), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-8\">
                                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 64, $this->source); })()), "adresse", [], "any", false, false, false, 64), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 67, $this->source); })()), "telephone", [], "any", false, false, false, 67), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 70, $this->source); })()), "email", [], "any", false, false, false, 70), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 73, $this->source); })()), "typePiece", [], "any", false, false, false, 73), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 76, $this->source); })()), "numPiece", [], "any", false, false, false, 76), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label for=\"\">PJ Propriétaire</label>
                                            ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 80, $this->source); })()), "PJProprietaire", [], "any", false, false, false, 80)) {
            // line 81
            echo "                                                <div class=\"form-control\">
                                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                        <use xlink:href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
            echo "\"></use>
                                                    </svg>
                                                    <span class=\"text-success pt fs-8\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 85, $this->source); })()), "PJProprietaire", [], "any", false, false, false, 85), "fichier", [], "any", false, false, false, 85), "html", null, true);
            echo " </span>
                                                    <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj1').show()\">
                                                        <use xlink:href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                                    </svg>
                                                </div>
                                            ";
        } else {
            // line 91
            echo "                                                <div class=\"form-control\">
                                                    <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                                    <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj1').show()\">
                                                        <use xlink:href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                                    </svg>
                                                </div>
                                            ";
        }
        // line 98
        echo "                                        </div>
                                        <div class=\"col-lg-8 z_pj1\">
                                            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 100, $this->source); })()), "pj1", [], "any", false, false, false, 100), 'row');
        echo "
                                        </div>
                                        <div></div>
                                        <div class=\"col-lg-4 bloc_pj2\">
                                        ";
        // line 104
        $context["lib_pj"] = "Dossier Technique";
        // line 105
        echo "                                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 105, $this->source); })()), "usages", [], "any", false, false, false, 105) == "domestique")) {
            // line 106
            echo "                                            ";
            $context["lib_pj"] = "Titre de proprièté";
            // line 107
            echo "                                        ";
        }
        // line 108
        echo "                                            <label for=\"\">PJ ";
        echo twig_escape_filter($this->env, (isset($context["lib_pj"]) || array_key_exists("lib_pj", $context) ? $context["lib_pj"] : (function () { throw new RuntimeError('Variable "lib_pj" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "</label>
                                            ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 109, $this->source); })()), "PJDossierTechnique", [], "any", false, false, false, 109)) {
            // line 110
            echo "                                                <div class=\"form-control\">
                                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                        <use xlink:href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
            echo "\"></use>
                                                    </svg>
                                                    <span class=\"text-success pt fs-8\">";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 114, $this->source); })()), "PJDossierTechnique", [], "any", false, false, false, 114), "fichier", [], "any", false, false, false, 114), "html", null, true);
            echo " </span>
                                                    <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj2').show()\">
                                                        <use xlink:href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                                    </svg>
                                                </div>
                                            ";
        } else {
            // line 120
            echo "                                                <div class=\"form-control\">
                                                    <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                                    <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj2').show()\">
                                                        <use xlink:href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                                    </svg>
                                                </div>
                                            ";
        }
        // line 127
        echo "                                        </div>
                                        <div class=\"col-lg-8 z_pj2 bloc_pj2\">
                                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 129, $this->source); })()), "pj2", [], "any", false, false, false, 129), 'row');
        echo "
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 133
        $this->loadTemplate("installation/_actions_new.html.twig", "installation/new5.html.twig", 133)->display($context);
        // line 134
        echo "                                </fieldset>
                            </div>
                            ";
        // line 140
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 140, $this->source); })()), 'form_end');
        echo "            
                        ";
        // line 141
        $this->loadTemplate("installation/_delete_form.html.twig", "installation/new5.html.twig", 141)->display($context);
        // line 142
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 149
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 150
        echo "<script>
    \$(document).ready(function() {
        \$('.z_pj1').hide(); \$('.z_pj2').hide(); 
        ";
        // line 153
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 153, $this->source); })()), "usages", [], "any", false, false, false, 153) != "domestique")) {
            echo " \$('.bloc_pj2').show(); \$('.z_pj2').hide();  ";
        }
        // line 154
        echo "
        ";
        // line 155
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 155, $this->source); })()), "PJProprietaire", [], "any", false, false, false, 155)) {
            // line 156
            echo "            \$('.z_pj1').show();
            \$(\"#proprietaire_pj1\").prop('required',true);
        ";
        }
        // line 159
        echo "
        ";
        // line 160
        if (( !twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 160, $this->source); })()), "PJDossierTechnique", [], "any", false, false, false, 160) && (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 160, $this->source); })()), "usages", [], "any", false, false, false, 160) != "domestique"))) {
            // line 161
            echo "            \$('.z_pj2').show();
            \$(\"#proprietaire_pj2\").prop('required',true);
        ";
        }
        // line 164
        echo "        
        \$(\"#proprietaire_typePiece\").change(function(e) {
            \$(\"#proprietaire_numPiece\").focus();
            \$(\"#proprietaire_numPiece\").css('borderColor', '#ced4da')
            \$(\"#proprietaire_numPiece\").css('borderLeft', '2px solid red')
        });

        \$(\"#proprietaire_numPiece\").keydown(function(e) {
            type_p=\$(\"#proprietaire_typePiece option:selected\").val();
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

        \$('#proprietaire_numPiece').focusout(function(){
            type_p=\$(\"#proprietaire_typePiece option:selected\").val();
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

        \$(\"#proprietaire_telephone\").keydown(function(e) {
            val_num=\$(\"#proprietaire_telephone\").val().replace(/ /g,'').length;
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

        \$('#proprietaire_telephone').focusout(function(){
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

        \$(\"#telephone_proprietaire\").keydown(function(event){
            if(event.keyCode == 13) {
                \$(\"#rech_proprietaire\").val(\$(\"#telephone_proprietaire\").val());
                \$(\"#form_rech_proprietaire\").submit();
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
        return "installation/new5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 164,  380 => 161,  378 => 160,  375 => 159,  370 => 156,  368 => 155,  365 => 154,  361 => 153,  356 => 150,  346 => 149,  331 => 142,  329 => 141,  324 => 140,  320 => 134,  318 => 133,  311 => 129,  307 => 127,  300 => 123,  295 => 120,  288 => 116,  283 => 114,  278 => 112,  274 => 110,  272 => 109,  267 => 108,  264 => 107,  261 => 106,  258 => 105,  256 => 104,  249 => 100,  245 => 98,  238 => 94,  233 => 91,  226 => 87,  221 => 85,  216 => 83,  212 => 81,  210 => 80,  203 => 76,  197 => 73,  191 => 70,  185 => 67,  179 => 64,  173 => 61,  167 => 58,  161 => 55,  139 => 37,  137 => 36,  131 => 33,  128 => 32,  126 => 31,  113 => 21,  102 => 13,  98 => 12,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
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
                                        <span class=\"text-danger\">[Etape 5 sur 6]</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                    {% include \"installation/_search_proprietaire.html.twig\" %}
                    <div class=\"\">
                        {{ form_start(installationForm, {'attr': {'id': 'formInstall'}}) }}
                            <div class=\"row\">
                                <!-- progressbar -->
                                {% set curr_etat = 5 %}
                                {{ include('installation/_progress_bar.html.twig') }}

                            \t<fieldset>
                                <div class=\"card\">
                                    <div class=\"row\">
                                        <div class=\"col-8\">
                                            <h2 class=\"fs-title\">Informations sur le propriétaire de l'installation</h2>
                                        </div>
                                        <div class=\"col-4\" align=\"right\">
                                            <div class=\"input-group input-group-sm mb-2\">
                                                <span class=\"input-group-text \">Rechercher</span>
                                                <input placeholder=\"... par nin, tél. ou email\" class=\"border-warning form-control\" id=\"telephone_proprietaire\" type=\"text\" name=\"telephone_proprietaire\" value=\"\">
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
                                            {{ form_row(installationForm.email) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.typePiece) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            {{ form_row(installationForm.numPiece) }}
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label for=\"\">PJ Propriétaire</label>
                                            {% if installation.PJProprietaire %}
                                                <div class=\"form-control\">
                                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                                                    </svg>
                                                    <span class=\"text-success pt fs-8\">{{installation.PJProprietaire.fichier}} </span>
                                                    <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj1').show()\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                                    </svg>
                                                </div>
                                            {% else %}
                                                <div class=\"form-control\">
                                                    <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                                    <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj1').show()\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                                    </svg>
                                                </div>
                                            {% endif %}
                                        </div>
                                        <div class=\"col-lg-8 z_pj1\">
                                            {{ form_row(installationForm.pj1) }}
                                        </div>
                                        <div></div>
                                        <div class=\"col-lg-4 bloc_pj2\">
                                        {% set lib_pj = \"Dossier Technique\" %}
                                        {% if installation.usages == \"domestique\" %}
                                            {% set lib_pj = \"Titre de proprièté\" %}
                                        {% endif %}
                                            <label for=\"\">PJ {{ lib_pj }}</label>
                                            {% if installation.PJDossierTechnique %}
                                                <div class=\"form-control\">
                                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                                                    </svg>
                                                    <span class=\"text-success pt fs-8\">{{installation.PJDossierTechnique.fichier}} </span>
                                                    <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj2').show()\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                                    </svg>
                                                </div>
                                            {% else %}
                                                <div class=\"form-control\">
                                                    <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                                    <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj2').show()\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                                    </svg>
                                                </div>
                                            {% endif %}
                                        </div>
                                        <div class=\"col-lg-8 z_pj2 bloc_pj2\">
                                            {{ form_row(installationForm.pj2) }}
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
        \$('.z_pj1').hide(); \$('.z_pj2').hide(); 
        {% if installation.usages !=\"domestique\" %} \$('.bloc_pj2').show(); \$('.z_pj2').hide();  {% endif %}

        {% if not installation.PJProprietaire %}
            \$('.z_pj1').show();
            \$(\"#proprietaire_pj1\").prop('required',true);
        {% endif %}

        {% if not installation.PJDossierTechnique and installation.usages != \"domestique\" %}
            \$('.z_pj2').show();
            \$(\"#proprietaire_pj2\").prop('required',true);
        {% endif %}
        
        \$(\"#proprietaire_typePiece\").change(function(e) {
            \$(\"#proprietaire_numPiece\").focus();
            \$(\"#proprietaire_numPiece\").css('borderColor', '#ced4da')
            \$(\"#proprietaire_numPiece\").css('borderLeft', '2px solid red')
        });

        \$(\"#proprietaire_numPiece\").keydown(function(e) {
            type_p=\$(\"#proprietaire_typePiece option:selected\").val();
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

        \$('#proprietaire_numPiece').focusout(function(){
            type_p=\$(\"#proprietaire_typePiece option:selected\").val();
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

        \$(\"#proprietaire_telephone\").keydown(function(e) {
            val_num=\$(\"#proprietaire_telephone\").val().replace(/ /g,'').length;
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

        \$('#proprietaire_telephone').focusout(function(){
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

        \$(\"#telephone_proprietaire\").keydown(function(event){
            if(event.keyCode == 13) {
                \$(\"#rech_proprietaire\").val(\$(\"#telephone_proprietaire\").val());
                \$(\"#form_rech_proprietaire\").submit();
            }
        });
    });
</script>
{% endblock %}
", "installation/new5.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/new5.html.twig");
    }
}
