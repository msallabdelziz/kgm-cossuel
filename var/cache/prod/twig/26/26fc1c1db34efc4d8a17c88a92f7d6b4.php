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
class __TwigTemplate_a2790bd3306afe96dbb06541376da35a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "installation/new4.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "COSSUEL";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, ($context["offset"] ?? null), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["installationForm"] ?? null), 'form_start', ["attr" => ["id" => "formInstall"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "nom", [], "any", false, false, false, 56), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-5\">
                                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "prenom", [], "any", false, false, false, 59), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "localite", [], "any", false, false, false, 62), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-8\">
                                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "adresse", [], "any", false, false, false, 65), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "telephone", [], "any", false, false, false, 68), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "email", [], "any", false, false, false, 71), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "typePiece", [], "any", false, false, false, 74), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "numPiece", [], "any", false, false, false, 77), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label for=\"\">PJ Electricien</label>
                                            ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJElectricien", [], "any", false, false, false, 81)) {
            // line 82
            echo "                                                <div class=\"form-control\">
                                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                        <use xlink:href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
            echo "\"></use>
                                                    </svg>
                                                    <span class=\"text-success pt fs-8\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJElectricien", [], "any", false, false, false, 86), "fichier", [], "any", false, false, false, 86), "html", null, true);
            echo " </span>
                                                    <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj').show()\">
                                                        <use xlink:href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                                    </svg>
                                                </div>
                                            ";
        } else {
            // line 92
            echo "                                                <div class=\"form-control\">
                                                    <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                                    <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj').show()\">
                                                        <use xlink:href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                                    </svg>
                                                </div>
                                            ";
        }
        // line 99
        echo "                                        </div>
                                        <div class=\"col-lg-8 z_pj\">
                                            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "pj", [], "any", false, false, false, 101), 'row');
        echo "
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 105
        $this->loadTemplate("installation/_actions_new.html.twig", "installation/new4.html.twig", 105)->display($context);
        // line 106
        echo "                                </fieldset>
                            </div>
                            ";
        // line 112
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["installationForm"] ?? null), 'form_end');
        echo "            
                        ";
        // line 113
        $this->loadTemplate("installation/_delete_form.html.twig", "installation/new4.html.twig", 113)->display($context);
        // line 114
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 121
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "<script>
    \$(document).ready(function() {
        \$(\"#electricien_localite\").prop('required',true);
        \$(\"#electricien_typePiece\").prop('required',true);
        \$('.z_pj').hide();

        ";
        // line 128
        if ( !twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJElectricien", [], "any", false, false, false, 128)) {
            // line 129
            echo "            \$('.z_pj').show();
            \$(\"#electricien_pj\").prop('required',true);
        ";
        }
        // line 132
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
        return array (  271 => 132,  266 => 129,  264 => 128,  256 => 122,  252 => 121,  243 => 114,  241 => 113,  236 => 112,  232 => 106,  230 => 105,  223 => 101,  219 => 99,  212 => 95,  207 => 92,  200 => 88,  195 => 86,  190 => 84,  186 => 82,  184 => 81,  177 => 77,  171 => 74,  165 => 71,  159 => 68,  153 => 65,  147 => 62,  141 => 59,  135 => 56,  113 => 38,  111 => 37,  105 => 34,  102 => 33,  100 => 32,  87 => 22,  76 => 14,  72 => 13,  66 => 10,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/new4.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/new4.html.twig");
    }
}
