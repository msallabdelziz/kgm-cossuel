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
class __TwigTemplate_2baeb9790ab1c1946aae532be8ac12aa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "installation/new2.html.twig", 1);
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
                                        <span class=\"text-danger\">[Etape 2 sur 6]</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class=\"\">
                        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["installationForm"] ?? null), 'form_start', ["attr" => ["id" => "formInstall"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "collectif", [], "any", false, false, false, 42), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "nomSite", [], "any", false, false, false, 45), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "logement", [], "any", false, false, false, 48), 'row');
        echo "<br>
                                        </div>
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "typeConstruction", [], "any", false, false, false, 52), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1\">
                                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "niveau", [], "any", false, false, false, 55), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-6 typeConstruction3\">
                                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "activite", [], "any", false, false, false, 58), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "priece", [], "any", false, false, false, 61), 'row');
        echo "<br>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 65
        $this->loadTemplate("installation/_actions_new.html.twig", "installation/new2.html.twig", 65)->display($context);
        // line 66
        echo "                                </fieldset>
                            </div>
                            ";
        // line 72
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["installationForm"] ?? null), 'form_end');
        echo "            
                        ";
        // line 73
        $this->loadTemplate("installation/_delete_form.html.twig", "installation/new2.html.twig", 73)->display($context);
        // line 74
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
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
        // line 114
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 114) != "erp_ert")) {
            // line 115
            echo "                \$('#form_niveau').prop('max', 4);
            ";
        } else {
            // line 117
            echo "                \$('#form_niveau').prop('min', 5);
            ";
        }
        // line 119
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
        // line 140
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 140) != "erp_ert")) {
            // line 141
            echo "                    \$('#form_niveau').prop('max', 4);
                ";
        } else {
            // line 143
            echo "                    \$('#form_niveau').prop('min', 5);
                ";
        }
        // line 145
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
        return array (  263 => 145,  259 => 143,  255 => 141,  253 => 140,  230 => 119,  226 => 117,  222 => 115,  220 => 114,  185 => 81,  181 => 80,  172 => 74,  170 => 73,  165 => 72,  161 => 66,  159 => 65,  152 => 61,  146 => 58,  140 => 55,  134 => 52,  127 => 48,  121 => 45,  115 => 42,  104 => 35,  102 => 34,  97 => 32,  83 => 21,  72 => 13,  68 => 12,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/new2.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/new2.html.twig");
    }
}
