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
class __TwigTemplate_5e7d1177b97f02b703f6c0ef2a01cc17 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "installation/new3.html.twig", 1);
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
                                        <span class=\"text-danger\">[Etape 3 sur 6]</span>
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "typeInstallation", [], "any", false, false, false, 44), 'row');
        echo "
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-6\">
                                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "natureTravaux", [], "any", false, false, false, 48), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "neuf15", [], "any", false, false, false, 59), 'widget');
        echo "</div>
                                                <div class=\"col-4 border\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "existant15", [], "any", false, false, false, 60), 'widget');
        echo "</div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-4 bg-secondary bg-opacity-25 border py-1\"><span class=\"fw-light\">2,5 mm2</span></div>
                                                <div class=\"col-4 border\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "neuf25", [], "any", false, false, false, 64), 'widget');
        echo "</div>
                                                <div class=\"col-4 border\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "existant25", [], "any", false, false, false, 65), 'widget');
        echo "</div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-4 border bg-secondary bg-opacity-25\"><span class=\"fw-light\">Autres</span></div>
                                                <div class=\"col-4 border\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "neufAutre", [], "any", false, false, false, 69), 'widget');
        echo "</div>
                                                <div class=\"col-4 border\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "existantAutre", [], "any", false, false, false, 70), 'widget');
        echo "</div>
                                            </div>
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4\">
                                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "intervenantAutre", [], "any", false, false, false, 75), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-8 intervenantAutre1\">
                                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "intervenant", [], "any", false, false, false, 78), 'row');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["installationForm"] ?? null), 'form_end');
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
    }

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  211 => 99,  207 => 98,  198 => 91,  196 => 90,  191 => 89,  187 => 83,  185 => 82,  178 => 78,  172 => 75,  164 => 70,  160 => 69,  153 => 65,  149 => 64,  142 => 60,  138 => 59,  124 => 48,  117 => 44,  105 => 36,  103 => 35,  97 => 32,  83 => 21,  72 => 13,  68 => 12,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/new3.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/new3.html.twig");
    }
}
