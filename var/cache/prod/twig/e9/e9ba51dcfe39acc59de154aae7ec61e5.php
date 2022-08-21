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
class __TwigTemplate_cca0d73860a484d3bd29a2caabafa8be extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "installation/new5.html.twig", 1);
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
        </header>
        <div class=\"row\">
        ";
        // line 12
        $context["offset"] = "offset-md-1";
        echo "            
            <div class=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["offset"] ?? null), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["installationForm"] ?? null), 'form_start', ["attr" => ["id" => "formInstall"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "nom", [], "any", false, false, false, 55), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-5\">
                                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "prenom", [], "any", false, false, false, 58), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "localite", [], "any", false, false, false, 61), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-8\">
                                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "adresse", [], "any", false, false, false, 64), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "telephone", [], "any", false, false, false, 67), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "email", [], "any", false, false, false, 70), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "typePiece", [], "any", false, false, false, 73), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "numPiece", [], "any", false, false, false, 76), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label for=\"\">PJ Propriétaire</label>
                                            ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJProprietaire", [], "any", false, false, false, 80)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJProprietaire", [], "any", false, false, false, 85), "fichier", [], "any", false, false, false, 85), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "pj1", [], "any", false, false, false, 100), 'row');
        echo "
                                        </div>
                                        <div></div>
                                        <div class=\"col-lg-4 bloc_pj2\">
                                        ";
        // line 104
        $context["lib_pj"] = "Dossier Technique";
        // line 105
        echo "                                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 105) == "domestique")) {
            // line 106
            echo "                                            ";
            $context["lib_pj"] = "Titre de proprièté";
            // line 107
            echo "                                        ";
        }
        // line 108
        echo "                                            <label for=\"\">PJ ";
        echo twig_escape_filter($this->env, ($context["lib_pj"] ?? null), "html", null, true);
        echo "</label>
                                            ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJDossierTechnique", [], "any", false, false, false, 109)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJDossierTechnique", [], "any", false, false, false, 114), "fichier", [], "any", false, false, false, 114), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "pj2", [], "any", false, false, false, 129), 'row');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["installationForm"] ?? null), 'form_end');
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
    }

    // line 149
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "<script>
    \$(document).ready(function() {
        \$('.z_pj1').hide(); \$('.z_pj2').hide(); 
        ";
        // line 153
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 153) != "domestique")) {
            echo " \$('.bloc_pj2').show(); \$('.z_pj2').hide();  ";
        }
        // line 154
        echo "
        ";
        // line 155
        if ( !twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJProprietaire", [], "any", false, false, false, 155)) {
            // line 156
            echo "            \$('.z_pj1').show();
            \$(\"#proprietaire_pj1\").prop('required',true);
        ";
        }
        // line 159
        echo "
        ";
        // line 160
        if (( !twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJDossierTechnique", [], "any", false, false, false, 160) && (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 160) != "domestique"))) {
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
        return array (  343 => 164,  338 => 161,  336 => 160,  333 => 159,  328 => 156,  326 => 155,  323 => 154,  319 => 153,  314 => 150,  310 => 149,  301 => 142,  299 => 141,  294 => 140,  290 => 134,  288 => 133,  281 => 129,  277 => 127,  270 => 123,  265 => 120,  258 => 116,  253 => 114,  248 => 112,  244 => 110,  242 => 109,  237 => 108,  234 => 107,  231 => 106,  228 => 105,  226 => 104,  219 => 100,  215 => 98,  208 => 94,  203 => 91,  196 => 87,  191 => 85,  186 => 83,  182 => 81,  180 => 80,  173 => 76,  167 => 73,  161 => 70,  155 => 67,  149 => 64,  143 => 61,  137 => 58,  131 => 55,  109 => 37,  107 => 36,  101 => 33,  98 => 32,  96 => 31,  83 => 21,  72 => 13,  68 => 12,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/new5.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/new5.html.twig");
    }
}
