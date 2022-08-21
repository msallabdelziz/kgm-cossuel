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
class __TwigTemplate_935606e7a831f291407ade4a2281939c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "installation/new.html.twig", 1);
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
                                        <span class=\"text-danger\">[Etape 1 sur 6]</span>
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "usages", [], "any", false, false, false, 44), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "alimente", [], "any", false, false, false, 47), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "compteur", [], "any", false, false, false, 50), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "abonnement", [], "any", false, false, false, 53), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "grstReseau", [], "any", false, false, false, 56), 'row');
        echo "<br>
                                        </div>
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-4\">
                                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "region", [], "any", false, false, false, 60), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "departement", [], "any", false, false, false, 63), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "localite", [], "any", false, false, false, 66), 'row');
        echo "<br>
                                        </div>
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-12\">
                                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "adresse", [], "any", false, false, false, 70), 'row');
        echo "<br>
                                        </div>
                                        <div class=\"col-lg-8\">
                                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "habitation", [], "any", false, false, false, 73), 'row');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["installationForm"] ?? null), 'form_end');
        echo "            
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 103
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  281 => 173,  253 => 148,  207 => 104,  203 => 103,  191 => 95,  183 => 86,  178 => 83,  173 => 73,  167 => 70,  160 => 66,  154 => 63,  148 => 60,  141 => 56,  135 => 53,  129 => 50,  123 => 47,  117 => 44,  105 => 36,  103 => 35,  97 => 32,  83 => 21,  72 => 13,  68 => 12,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/new.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/new.html.twig");
    }
}
