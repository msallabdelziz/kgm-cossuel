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

/* dossier/rapporter_new.html.twig */
class __TwigTemplate_387a8647eabeead7fb76815a51f38f49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/rapporter_new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/rapporter_new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dossier/rapporter_new.html.twig", 1);
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
        echo "    <style>
    #synthese_demande input[disabled] {
        background-color:#f1f5f9;
        border: 1px solid #7a7b7c;
        color: gray;
        font-weight:normal;
    }
    #synthese_demande .card {
        background-color:#ffffff;
    }
    #synthese_demande label, #synthese_demande .fs-title {
        color:gray;
        font-weight:normal;
    }

    #synthese_demande .text-danger label  {
        color: #dd3444;
        font-weight:normal;
    }

    #synthese_demande .text-danger select  {
        border-color: #dd3444;
    }

    .latlong {
        width: 100px;
        padding: 1px;
        min-height: 12px;
        background-color: #fff0cc;
        color:red;
        font-weight: bold;
        border:1px inset #000;
    }

    .adresse {
        padding: 2px;
        font-size:13px;
        min-height: 12px;
        background-color: #fff0cc;
        color:red;
        border:1px inset #000;
    }

    #paiement_demande .card {
        background-color:#fff;
        box-shadow: 0 0 0 2px white, 0 0 0 3px #000
    }
    
    #validation_dossier .card {
        background-color:#ffc328;
        box-shadow: 0 0 0 2px white, 0 0 0 3px #000
    }
    
    .kbw-signature { width: 400px; height: 200px;}
    #signelectricien canvas{
        width: 100% !important;
        min-height: 200px;
    }

    #signcontroleur canvas{
        width: 100% !important;
        min-height: 200px;
    }
    </style>
    ";
        // line 69
        $context["link_show"] = "app_dossier_show";
        // line 70
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 70, $this->source); })()), "affecte", [], "any", false, false, false, 70)) {
            // line 71
            echo "        ";
            $context["action_demande"] = "Affectation";
            // line 72
            echo "        ";
            $context["link_liste"] = "app_dossier_affectation";
            // line 73
            echo "        ";
            $context["link_action"] = "app_dossier_affecter";
            // line 74
            echo "        ";
            $context["libelle_action"] = "Affecter à un contrôleur";
            // line 75
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 75, $this->source); })()), "visite", [], "any", false, false, false, 75)) {
            // line 76
            echo "        ";
            $context["action_demande"] = "Planification Visite";
            // line 77
            echo "        ";
            $context["link_liste"] = "app_dossier_visite";
            // line 78
            echo "        ";
            $context["link_action"] = "app_dossier_visite";
            // line 79
            echo "        ";
            $context["libelle_action"] = "Planifier une visite";
            // line 80
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 80, $this->source); })()), "rapport", [], "any", false, false, false, 80)) {
            // line 81
            echo "        ";
            $context["action_demande"] = "Rapport de Visite";
            // line 82
            echo "        ";
            $context["link_liste"] = "app_dossier_show";
            // line 83
            echo "        ";
            $context["link_action"] = "app_dossier_rapport";
            // line 84
            echo "        ";
            $context["libelle_action"] = "Elaborer le rapport de visite";
            // line 85
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 85, $this->source); })()), "attestation", [], "any", false, false, false, 85)) {
            // line 86
            echo "        ";
            $context["action_demande"] = "Résultat Inspection";
            // line 87
            echo "        ";
            $context["link_liste"] = "app_dossier_attestation";
            // line 88
            echo "        ";
            $context["link_action"] = "app_dossier_attestation";
            // line 89
            echo "        ";
            $context["libelle_action"] = "Confirmer Résultats Inspection";
            // line 90
            echo "    ";
        }
        // line 91
        echo "
    ";
        // line 92
        $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 92, $this->source); })()), "demande", [], "any", false, false, false, 92);
        // line 93
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 93, $this->source); })()), "installation", [], "any", false, false, false, 93);
        // line 94
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 94), "get", [0 => "page_liste_dossier"], "method", true, true, false, 94) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "session", [], "any", false, false, false, 94), "get", [0 => "page_liste_dossier"], "method", false, false, false, 94))) {
            // line 95
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "session", [], "any", false, false, false, 95), "get", [0 => "page_liste_dossier"], "method", false, false, false, 95);
            // line 96
            echo "    ";
        }
        // line 97
        echo "
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["action_demande"]) || array_key_exists("action_demande", $context) ? $context["action_demande"] : (function () { throw new RuntimeError('Variable "action_demande" does not exist.', 101, $this->source); })()), "html", null, true);
        echo " de dossiers </span>
            </a>
        </header>

        <div class=\"container\">
            <nav class=\"navbar shadow bg-warning border border-dark mt-2 p-0\">
                <div class=\"container-fluid ps-4\">
                        <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                            <div class=\"col\">
                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                </svg>
                                Détails du dossier
                            </div>
                            <div class=\"col\" align=\"right\">
                                <span class=\"text-success\">[En attente de ";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 116, $this->source); })()), "Etat", [], "any", false, false, false, 116), "html", null, true);
        echo "]</span>
                            </div>
                        </div>

                </div>
            </nav>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                ";
        // line 125
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 125, $this->source); })()), 'form_start');
        echo "
                
                <div align=\"right\">
                    <a href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link_show"]) || array_key_exists("link_show", $context) ? $context["link_show"] : (function () { throw new RuntimeError('Variable "link_show" does not exist.', 128, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-secondary btn my-3\">Annuler</a>
                    ";
        // line 129
        if (((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 129, $this->source); })()) == 2)) {
            // line 130
            echo "                        <button id=\"btn_submit\" type=\"submit\" class=\"next action-button btn btn-success btn my-3 ms-2\">Soumettre le rapport</button>
                    ";
        }
        // line 132
        echo "                </div>
                <fieldset id=\"synthese_demande\">

                <div id=\"validation_dossier\" class=\"\">
                    <div class=\"card mb-2 pb-0\">
                        <h2 class=\"fs-title text-dark\">
                            Rapport d'inspection
                            <div class=\"float-end fs-8\">
                                ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 140, $this->source); })()), "dateVisite", [], "any", false, false, false, 140), 'label');
        echo "
                                ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 141, $this->source); })()), "dateVisite", [], "any", false, false, false, 141), 'widget');
        echo "
                                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 142, $this->source); })()), "dateVisite", [], "any", false, false, false, 142), 'errors');
        echo "
                            </div>
                        </h2>
                    </div>
                    <hr class=\"mb-3\" />
                        <div class=\"row mb-2 border shadow border-dark rounded\" align=\"right\">
                                    <div class=\"p-2\">
                                        <label class=\"me-4 text-dark fs-6 \">Localisation du Site de l'installation</label>
                                        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 150, $this->source); })()), "latitude", [], "any", false, false, false, 150), 'label');
        echo "
                                        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 151, $this->source); })()), "latitude", [], "any", false, false, false, 151), 'widget');
        echo "
                                        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 152, $this->source); })()), "latitude", [], "any", false, false, false, 152), 'errors');
        echo "
                                        
                                        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 154, $this->source); })()), "longitude", [], "any", false, false, false, 154), 'label');
        echo "
                                        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 155, $this->source); })()), "longitude", [], "any", false, false, false, 155), 'widget');
        echo "
                                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 156, $this->source); })()), "longitude", [], "any", false, false, false, 156), 'errors');
        echo "
    
                                        <button id=\"find_btn\" class=\"ms-4 btn btn-sm btn-secondary action fs-7\">Géolocaliser...</button>
                                    </div>
                                    <div class=\"p-2 row\" id=\"z_habitation\">
                                        <div class=\"col-6\">
                                            <label class=\"me-4 text-dark fs-6 \">Adresse exacte de l'installation</label>
                                        </div>
                                        <div class=\"col-6\">
                                            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 165, $this->source); })()), "habitation", [], "any", false, false, false, 165), 'widget');
        echo "
                                            ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 166, $this->source); })()), "habitation", [], "any", false, false, false, 166), 'errors');
        echo "
                                        </div>
    
                                    </div>
                        </div>
                    <div class=\"\">
                        <div align=\"right\">
                            ";
        // line 173
        if (((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 173, $this->source); })()) == 2)) {
            // line 174
            echo "                            <button id=\"prev_rub0\" class=\"next action-button btn btn-secondary btn my-3\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"white\">
                                    <use xlink:href=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-left-fill"), "html", null, true);
            echo "\"></use>
                                </svg> Précédent
                            </button>
                            ";
        } else {
            // line 180
            echo "                            <button class=\"next disabled action-button btn btn-outline-secondary btn my-3\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"gray\">
                                    <use xlink:href=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-left-fill"), "html", null, true);
            echo "\"></use>
                                </svg> Précédent
                            </button>
                            ";
        }
        // line 186
        echo "                            ";
        if (((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 186, $this->source); })()) == 1)) {
            // line 187
            echo "                            <button id=\"next_rub0\" class=\"next action-button btn btn-warning btn my-3\">
                                Suivant <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right-fill"), "html", null, true);
            echo "\"></use>
                                </svg> 
                            </button>
                            ";
        } else {
            // line 193
            echo "                            <button class=\"next disabled action-button btn btn-outline-secondary btn my-3\">
                                Suivant <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"gray\">
                                    <use xlink:href=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right-fill"), "html", null, true);
            echo "\"></use>
                                </svg> 
                            </button>
                            ";
        }
        // line 199
        echo "                            <button id=\"btn_save0\" class=\"next action-button btn btn-outline-success btn my-3 ms-2\">Enregistrer et sortir</button>
                            ";
        // line 200
        if (((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 200, $this->source); })()) == 2)) {
            // line 201
            echo "                                <button id=\"btn_submit0\" class=\"next action-button btn btn-success btn my-3 ms-2\">Soumettre le rapport</button>
                            ";
        }
        // line 203
        echo "                        </div>
                    ";
        // line 204
        $context["rub"] = "";
        // line 205
        echo "                    ";
        $context["ix"] = 0;
        // line 206
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["les_detailverif"]) || array_key_exists("les_detailverif", $context) ? $context["les_detailverif"] : (function () { throw new RuntimeError('Variable "les_detailverif" does not exist.', 206, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
            // line 207
            echo "                            ";
            if (((isset($context["rub"]) || array_key_exists("rub", $context) ? $context["rub"] : (function () { throw new RuntimeError('Variable "rub" does not exist.', 207, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 207), "rubrique", [], "any", false, false, false, 207), "id", [], "any", false, false, false, 207))) {
                // line 208
                echo "                                ";
                if ((isset($context["rub"]) || array_key_exists("rub", $context) ? $context["rub"] : (function () { throw new RuntimeError('Variable "rub" does not exist.', 208, $this->source); })())) {
                    // line 209
                    echo "                                    </div>
                                ";
                }
                // line 211
                echo "                                <div id=\"zrub_";
                echo twig_escape_filter($this->env, (isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 211, $this->source); })()), "html", null, true);
                echo "\">
                                <div class=\"shadow bg-warning bg-opacity-50 border border-secondary mb-2 p-2 fw-bold\">
                                    ";
                // line 213
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 213), "rubrique", [], "any", false, false, false, 213), "numero", [], "any", false, false, false, 213), "html", null, true);
                echo "- ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 213), "rubrique", [], "any", false, false, false, 213), "libelle", [], "any", false, false, false, 213), "html", null, true);
                echo "
                                </div>
                                ";
                // line 215
                $context["rub"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 215), "rubrique", [], "any", false, false, false, 215), "id", [], "any", false, false, false, 215);
                // line 216
                echo "                                ";
                $context["ix"] = ((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 216, $this->source); })()) + 1);
                // line 217
                echo "                            ";
            }
            // line 218
            echo "                            <div class=\"shadow p-4 pb-1 pt-2 mb-1\">
                                ";
            // line 219
            $context["inp0"] = twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 219, $this->source); })()), ("sansobjet_" . twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 219)), [], "any", false, false, false, 219);
            // line 220
            echo "                                ";
            $context["inp1"] = twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 220, $this->source); })()), ("conclusion_" . twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 220)), [], "any", false, false, false, 220);
            // line 221
            echo "                                ";
            $context["inp2"] = twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 221, $this->source); })()), ("comment_" . twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 221)), [], "any", false, false, false, 221);
            // line 222
            echo "                                ";
            $context["inp3"] = twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 222, $this->source); })()), ("pnc_" . twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 222)), [], "any", false, false, false, 222);
            // line 223
            echo "                                <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                    <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                        <use xlink:href=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
            echo "\"></use>
                                    </svg> <span id=\"code_pv_";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 226), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 226), "numero", [], "any", false, false, false, 226), "html", null, true);
            echo "]</span>- ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 226), "objetVerification", [], "any", false, false, false, 226), "html", null, true);
            echo "
                                    <div class=\"float-end\">
                                        <span class=\"text-danger fs-8 fw-light pt\" id=\"btn_unactive_";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 228), "html", null, true);
            echo "\">Effacer</span>
                                    </div>
                                </div>
                                <div class=\"ps-4\">
                                    <div class=\"row fw-light\">
                                        <div class=\"col-md-3 shadow border border-dark p-1 mb-0 me-4\">
                                            <div class=\"pt float-start\" id=\"label_chk2_";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 234), "html", null, true);
            echo "\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                                    <use xlink:href=\"";
            // line 236
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x-octagon-fill"), "html", null, true);
            echo "\"></use>
                                                </svg>
                                                Sans Objet
                                            </div>
                                            <div class=\"float-end\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" id=\"chk2_";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 241), "html", null, true);
            echo "\">
                                                    <use xlink:href=\"";
            // line 242
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#square"), "html", null, true);
            echo "\"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 shadow border border-success p-1 mb-0 ms-2\">
                                            <div class=\"pt float-start\" id=\"label_chk0_";
            // line 247
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 247), "html", null, true);
            echo "\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"green\">
                                                    <use xlink:href=\"";
            // line 249
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check"), "html", null, true);
            echo "\"></use>
                                                </svg>
                                                ";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 251), "libelleConclusion1", [], "any", false, false, false, 251), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"float-end\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" id=\"chk0_";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 254), "html", null, true);
            echo "\">
                                                    <use xlink:href=\"";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#square"), "html", null, true);
            echo "\"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 shadow border border-danger p-1 mb-0 ms-2\">
                                            <div class=\"pt float-start\" id=\"label_chk1_";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 260), "html", null, true);
            echo "\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"red\">
                                                    <use xlink:href=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x"), "html", null, true);
            echo "\"></use>
                                                </svg>
                                                ";
            // line 264
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 264), "libelleConclusion2", [], "any", false, false, false, 264), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"float-end\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" id=\"chk1_";
            // line 267
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 267), "html", null, true);
            echo "\">
                                                    <use xlink:href=\"";
            // line 268
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#square"), "html", null, true);
            echo "\"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"mt-1\">
                                            ";
            // line 275
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["inp0"]) || array_key_exists("inp0", $context) ? $context["inp0"] : (function () { throw new RuntimeError('Variable "inp0" does not exist.', 275, $this->source); })()), 'row');
            echo "
                                            ";
            // line 276
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["inp1"]) || array_key_exists("inp1", $context) ? $context["inp1"] : (function () { throw new RuntimeError('Variable "inp1" does not exist.', 276, $this->source); })()), 'row');
            echo "
                                        </div>
                                        <div class=\"mt-1 row\">
                                            <div class=\"offset-6 col-6 text-danger\" align=\"left\" id=\"z_";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inp3"]) || array_key_exists("inp3", $context) ? $context["inp3"] : (function () { throw new RuntimeError('Variable "inp3" does not exist.', 279, $this->source); })()), "vars", [], "any", false, false, false, 279), "id", [], "array", false, false, false, 279), "html", null, true);
            echo "\">
                                                ";
            // line 280
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["inp3"]) || array_key_exists("inp3", $context) ? $context["inp3"] : (function () { throw new RuntimeError('Variable "inp3" does not exist.', 280, $this->source); })()), 'label');
            echo "
                                                ";
            // line 281
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["inp3"]) || array_key_exists("inp3", $context) ? $context["inp3"] : (function () { throw new RuntimeError('Variable "inp3" does not exist.', 281, $this->source); })()), 'widget');
            echo "
                                            </div>
                                        </div>
                                        <div class=\"mt-1\">
                                            ";
            // line 285
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["inp2"]) || array_key_exists("inp2", $context) ? $context["inp2"] : (function () { throw new RuntimeError('Variable "inp2" does not exist.', 285, $this->source); })()), 'widget');
            echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "                        ";
        if (((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 291, $this->source); })()) == 2)) {
            // line 292
            echo "                            <div class=\"shadow p-4 pt-2 mb-3\">
                                <div class=\"row mt-1 pt-2\">
                                    <div>
                                        Tableau 2: Mesures des prises de terre
                                        <hr class=\"mt-2\" />
                                    </div>
                                    <div class=\"col-md-6\">
                                        ";
            // line 299
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 299, $this->source); })()), "mesurePriseTerre", [], "any", false, false, false, 299), 'row');
            echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                        ";
            // line 302
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 302, $this->source); })()), "barrette", [], "any", false, false, false, 302), 'row');
            echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"shadow p-4 pt-2 mb-3\">
                                <div class=\"row mt-1 pt-2\">
                                    <div>
                                        Autres observations
                                        <hr class=\"mt-2\" />
                                    </div>
                                    <div class=\"row\">
                                            ";
            // line 314
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 314, $this->source); })()), "commentaire2", [], "any", false, false, false, 314), 'row');
            echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"shadow p-4 pt-2 mb-3\">
                                <div class=\"row mt-1 pt-2\">
                                    <div>
                                        Photos Installation
                                        <hr class=\"mt-2\" />
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <label for=\"\">Photo 1</label>
                                        ";
            // line 327
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 327, $this->source); })()), "PJPhoto1", [], "any", false, false, false, 327)) {
                // line 328
                echo "                                            <div class=\"form-control\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
                // line 330
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                <span class=\"text-success pt fs-8\">";
                // line 332
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 332, $this->source); })()), "PJPhoto1", [], "any", false, false, false, 332), "fichier", [], "any", false, false, false, 332), 0, 10), "html", null, true);
                echo " ... </span>
                                                <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj1').show()\">
                                                    <use xlink:href=\"";
                // line 334
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                            </div>
                                        ";
            } else {
                // line 338
                echo "                                            <div class=\"form-control\">
                                                <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                            </div>
                                        ";
            }
            // line 342
            echo "                                    </div>
                                    <div class=\"col-lg-3 z_pj1\">
                                        ";
            // line 344
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 344, $this->source); })()), "pj1", [], "any", false, false, false, 344), 'row');
            echo "
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <label for=\"\">Photo 2</label>
                                        ";
            // line 349
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 349, $this->source); })()), "PJPhoto2", [], "any", false, false, false, 349)) {
                // line 350
                echo "                                            <div class=\"form-control\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
                // line 352
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                <span class=\"text-success pt fs-8\">";
                // line 354
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 354, $this->source); })()), "PJPhoto2", [], "any", false, false, false, 354), "fichier", [], "any", false, false, false, 354), 0, 10), "html", null, true);
                echo " ... </span>
                                                <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj2').show()\">
                                                    <use xlink:href=\"";
                // line 356
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                            </div>
                                        ";
            } else {
                // line 360
                echo "                                            <div class=\"form-control\">
                                                <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                            </div>
                                        ";
            }
            // line 364
            echo "                                    </div>
                                    <div class=\"col-lg-3 z_pj2\">
                                        ";
            // line 366
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 366, $this->source); })()), "pj2", [], "any", false, false, false, 366), 'row');
            echo "
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <label for=\"\">Photo 3</label>
                                        ";
            // line 371
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 371, $this->source); })()), "PJPhoto3", [], "any", false, false, false, 371)) {
                // line 372
                echo "                                            <div class=\"form-control\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
                // line 374
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                <span class=\"text-success pt fs-8\">";
                // line 376
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 376, $this->source); })()), "PJPhoto3", [], "any", false, false, false, 376), "fichier", [], "any", false, false, false, 376), 0, 10), "html", null, true);
                echo " ... </span>
                                                <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj3').show()\">
                                                    <use xlink:href=\"";
                // line 378
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                            </div>
                                        ";
            } else {
                // line 382
                echo "                                            <div class=\"form-control\">
                                                <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                            </div>
                                        ";
            }
            // line 386
            echo "                                    </div>
                                    <div class=\"col-lg-3 z_pj3\">
                                        ";
            // line 388
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 388, $this->source); })()), "pj3", [], "any", false, false, false, 388), 'row');
            echo "
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <label for=\"\">Photo 4</label>
                                        ";
            // line 393
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 393, $this->source); })()), "PJPhoto4", [], "any", false, false, false, 393)) {
                // line 394
                echo "                                            <div class=\"form-control\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
                // line 396
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                <span class=\"text-success pt fs-8\">";
                // line 398
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 398, $this->source); })()), "PJPhoto4", [], "any", false, false, false, 398), "fichier", [], "any", false, false, false, 398), 0, 10), "html", null, true);
                echo " ... </span>
                                                <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj4').show()\">
                                                    <use xlink:href=\"";
                // line 400
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                            </div>
                                        ";
            } else {
                // line 404
                echo "                                            <div class=\"form-control\">
                                                <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                            </div>
                                        ";
            }
            // line 408
            echo "                                    </div>
                                    <div class=\"col-lg-3 z_pj4\">
                                        ";
            // line 410
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 410, $this->source); })()), "pj4", [], "any", false, false, false, 410), 'row');
            echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"shadow p-4 pt-2 mb-3\">
                                <div class=\"row mt-1 pt-2\">
                                    <div>
                                        Signature du rapport d'inspection
                                        <hr class=\"mt-2\" />
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-lg-6\">
                                            <div><label class=\"\" for=\"\">Signature Controleur:</label><span class=\"fw-light text-dark\">";
            // line 423
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 423, $this->source); })()), "controleur", [], "any", false, false, false, 423), "nomComplet", [], "any", false, false, false, 423), "html", null, true);
            echo "</span></div>
                                            ";
            // line 424
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 424, $this->source); })()), "visiteCourante", [], "any", false, false, false, 424), "signcontroleur", [], "any", false, false, false, 424)) {
                // line 425
                echo "                                                <div class=\"mb-4\">
                                                    <img width=\"400\" height=\"100\" id=\"img_signcontroleur\" src=\"";
                // line 426
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 426, $this->source); })()), "visiteCourante", [], "any", false, false, false, 426), "signcontroleur", [], "any", false, false, false, 426), "fichier", [], "any", false, false, false, 426))), "html", null, true);
                echo "\" alt=\"\">
                                                    <div id=\"modifsign2\" class=\"btn btn-sm btn-info float-end fs-7 m-1 my-2 py-0\" style=\"position:relative;top:-20px\">Modifier signature</div>
                                                    <div class=\"clear\"></div>
                                                </div>
                                            ";
            } else {
                // line 431
                echo "                                                <div class=\"mb-4\">
                                                    <img width=\"400\" height=\"100\" id=\"img_signcontroleur\" alt=\"\">
                                                    <div class=\"clear\"></div>
                                                </div>
                                            ";
            }
            // line 436
            echo "                                            <div class=\"border border-secondary shadow bloc_sign2\" style=\"height:200px\" id=\"signcontroleur\"></div>
                                            <button type=\"button\" class=\"btn btn-outline-primary btn-sm mt-2 bloc_sign2\" id=\"clear1\">Effacer Signature</button>
                                            ";
            // line 438
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 438, $this->source); })()), "sign_controleur", [], "any", false, false, false, 438), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-lg-6\">
                                            <div><label class=\"\" for=\"\">Signature Electricien:</label><span class=\"fw-light text-dark\">";
            // line 441
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 441, $this->source); })()), "electricien", [], "any", false, false, false, 441), "nomComplet", [], "any", false, false, false, 441), "html", null, true);
            echo "</span></div>
                                            ";
            // line 442
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 442, $this->source); })()), "visiteCourante", [], "any", false, false, false, 442), "signelectricien", [], "any", false, false, false, 442)) {
                // line 443
                echo "                                                <div class=\"mb-4\">
                                                    <img width=\"400\" height=\"100\" id=\"img_signelectricien\" src=\"";
                // line 444
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 444, $this->source); })()), "visiteCourante", [], "any", false, false, false, 444), "signelectricien", [], "any", false, false, false, 444), "fichier", [], "any", false, false, false, 444))), "html", null, true);
                echo "\" alt=\"\">
                                                    <div id=\"modifsign1\" class=\"btn btn-sm btn-info float-end fs-7 m-1 my-2 py-0\" style=\"position:relative;top:-20px\">Modifier signature</div>
                                                    <div class=\"clear\"></div>
                                                </div>
                                            ";
            } else {
                // line 449
                echo "                                                <div class=\"mb-4\">
                                                    <img width=\"400\" height=\"100\" id=\"img_signelectricien\" alt=\"\">
                                                    <div class=\"clear\"></div>
                                                </div>
                                            ";
            }
            // line 454
            echo "                                            <div class=\"border border-secondary shadow bloc_sign1\" style=\"height:200px\" id=\"signelectricien\"></div>
                                            <button type=\"button\" class=\"btn btn-outline-primary btn-sm mt-2 bloc_sign1\" id=\"clear2\">Effacer Signature</button>
                                            ";
            // line 456
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 456, $this->source); })()), "sign_electricien", [], "any", false, false, false, 456), 'widget');
            echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                        ";
        } else {
            // line 463
            echo "                            <div class=\"\" style=\"display:none\">
                            ";
            // line 464
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 464, $this->source); })()), "mesurePriseTerre", [], "any", false, false, false, 464), 'widget');
            echo "
                            ";
            // line 465
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 465, $this->source); })()), "barrette", [], "any", false, false, false, 465), 'widget');
            echo "
                            ";
            // line 466
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 466, $this->source); })()), "pj1", [], "any", false, false, false, 466), 'row');
            echo "
                            ";
            // line 467
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 467, $this->source); })()), "pj2", [], "any", false, false, false, 467), 'row');
            echo "
                            ";
            // line 468
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 468, $this->source); })()), "pj3", [], "any", false, false, false, 468), 'row');
            echo "
                            ";
            // line 469
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 469, $this->source); })()), "pj4", [], "any", false, false, false, 469), 'row');
            echo "
                            ";
            // line 470
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 470, $this->source); })()), "commentaire2", [], "any", false, false, false, 470), 'row');
            echo "
                            ";
            // line 471
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 471, $this->source); })()), "sign_electricien", [], "any", false, false, false, 471), 'row');
            echo "
                            ";
            // line 472
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 472, $this->source); })()), "sign_controleur", [], "any", false, false, false, 472), 'row');
            echo "
                            </div>
                        ";
        }
        // line 475
        echo "                        </div>
                        <div align=\"right\">
                            ";
        // line 477
        if (((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 477, $this->source); })()) == 2)) {
            // line 478
            echo "                            <button id=\"prev_rub\" class=\"next action-button btn btn-secondary btn my-3\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"white\">
                                    <use xlink:href=\"";
            // line 480
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-left-fill"), "html", null, true);
            echo "\"></use>
                                </svg> Précédent
                            </button>
                            ";
        } else {
            // line 484
            echo "                            <button class=\"next disabled action-button btn btn-outline-secondary btn my-3\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"gray\">
                                    <use xlink:href=\"";
            // line 486
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-left-fill"), "html", null, true);
            echo "\"></use>
                                </svg> Précédent
                            </button>
                            ";
        }
        // line 490
        echo "                            ";
        if (((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 490, $this->source); })()) == 1)) {
            // line 491
            echo "                            <button id=\"next_rub\" class=\"next action-button btn btn-warning btn my-3\">
                                Suivant <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
            // line 493
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right-fill"), "html", null, true);
            echo "\"></use>
                                </svg> 
                            </button>
                            ";
        } else {
            // line 497
            echo "                            <button class=\"next disabled action-button btn btn-outline-secondary btn my-3\">
                                Suivant <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"gray\">
                                    <use xlink:href=\"";
            // line 499
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right-fill"), "html", null, true);
            echo "\"></use>
                                </svg> 
                            </button>
                            ";
        }
        // line 503
        echo "                            <button id=\"btn_save\" class=\"next action-button btn btn-outline-success btn my-3 ms-2\">Enregistrer et sortir</button>
                            ";
        // line 504
        if (((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 504, $this->source); })()) == 2)) {
            // line 505
            echo "                                <button id=\"btn_submit1\" class=\"next action-button btn btn-success btn my-3 ms-2\">Soumettre le rapport</button>
                            ";
        }
        // line 507
        echo "                        </div>
                    </div>  
                </div>

                </fieldset>
                ";
        // line 512
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 512, $this->source); })()), 'form_end');
        echo "
            </div>

            <div class=\"col-lg-4 mb-2 priority-5\" id=\"paiement_demande\">
                <div align=\"right\">
                    <a target=\"_blank\" href=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 517, $this->source); })()), "installation", [], "any", false, false, false, 517), "id", [], "any", false, false, false, 517)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Demande</a>
                    <a href=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link_liste"]) || array_key_exists("link_liste", $context) ? $context["link_liste"] : (function () { throw new RuntimeError('Variable "link_liste" does not exist.', 518, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 518, $this->source); })()), "id", [], "any", false, false, false, 518)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour à la liste</a>
                </div>                                
                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Traitement du dossier
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_histo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 523, $this->source); })()), "id", [], "any", false, false, false, 523)]), "html", null, true);
        echo "\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#hourglass-split"), "html", null, true);
        echo "\"></use></svg>
                            </a>
                        </div>
                    </h2>
                    <div class=\"row\">
                        <hr class=\"mb-3\" />
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >N° Dossier</label>
                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-0 fw-bold fs-6\" value=\"";
        // line 533
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 533, $this->source); })()), "demande", [], "any", false, false, false, 533), "numero", [], "any", false, false, false, 533), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Date création dossier</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-success form-control py-0 fw-bold fs-6\" value=\"";
        // line 539
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 539, $this->source); })()), "dateCreation", [], "any", false, false, false, 539), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" class=\"fs-7\" >Usage</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fw-bold fs-6\" value=\"";
        // line 545
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 545, $this->source); })()), "demande", [], "any", false, false, false, 545), "installation", [], "any", false, false, false, 545), "usages", [], "any", false, false, false, 545), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Puissance</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fs-6\" value=\"";
        // line 551
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 551, $this->source); })()), "demande", [], "any", false, false, false, 551), "puissance", [], "any", false, false, false, 551), "html", null, true);
        echo " kW\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 557
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 557, $this->source); })()), "demande", [], "any", false, false, false, 557), "installation", [], "any", false, false, false, 557), "localite", [], "any", false, false, false, 557), "nom", [], "any", false, false, false, 557), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Agence</label>
                                <input type=\"text\" disabled readonly class=\"form-control fw-bold text-black form-control py-0 fs-6\" value=\"";
        // line 563
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 563, $this->source); })()), "demande", [], "any", false, false, false, 563), "installation", [], "any", false, false, false, 563), "localite", [], "any", false, false, false, 563), "agence", [], "any", false, false, false, 563)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 563, $this->source); })()), "demande", [], "any", false, false, false, 563), "installation", [], "any", false, false, false, 563), "localite", [], "any", false, false, false, 563), "agence", [], "any", false, false, false, 563), "code", [], "any", false, false, false, 563), "html", null, true);
        } else {
            echo " - ";
        }
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-1\">
                            <label class=\"fs-7\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 568
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 568, $this->source); })()), "demande", [], "any", false, false, false, 568), "installation", [], "any", false, false, false, 568), "adresse", [], "any", false, false, false, 568), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 573
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 573, $this->source); })()), "demande", [], "any", false, false, false, 573), "installation", [], "any", false, false, false, 573), "electricien", [], "any", false, false, false, 573), "nom", [], "any", false, false, false, 573), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 573, $this->source); })()), "demande", [], "any", false, false, false, 573), "installation", [], "any", false, false, false, 573), "electricien", [], "any", false, false, false, 573), "prenom", [], "any", false, false, false, 573), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Tél Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control fw-bold py-0 fs-6\" value=\"";
        // line 579
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 579, $this->source); })()), "demande", [], "any", false, false, false, 579), "installation", [], "any", false, false, false, 579), "electricien", [], "any", false, false, false, 579), "telephone", [], "any", false, false, false, 579), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 579, $this->source); })()), "demande", [], "any", false, false, false, 579), "installation", [], "any", false, false, false, 579), "electricien", [], "any", false, false, false, 579), "autreNumTelephone", [], "any", false, false, false, 579), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <hr class=\"mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Date création dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
        // line 585
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 585, $this->source); })()), "dateCreation", [], "any", false, false, false, 585), "d-m-Y"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Référent chargé du dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
        // line 589
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 589, $this->source); })()), "referent", [], "any", false, false, false, 589), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Contrôleur chargé du traitement</label>
                            ";
        // line 593
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 593, $this->source); })()), "controleur", [], "any", false, false, false, 593)) {
            // line 594
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 594, $this->source); })()), "controleur", [], "any", false, false, false, 594), "html", null, true);
            echo "\">
                            ";
        } else {
            // line 596
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 598
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Visite du site pour inspection</label>
                            ";
        // line 601
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 601, $this->source); })()), "visite", [], "any", false, false, false, 601)) {
            // line 602
            echo "                            <div class=\"row\">
                                <div class=\"col-5\">
                                    <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Planifiée\">
                                </div>
                                <div class=\"col-7\">
                                    <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
            // line 607
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 607, $this->source); })()), "visiteCourante", [], "any", false, false, false, 607), "datePlanifie", [], "any", false, false, false, 607), "d-m-Y à H:i"), "html", null, true);
            echo "\">
                                </div>
                                <div class=\"col-12\">
                                    Modèle Rapport d'inspection
                                    <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-1 fw-bold fs-6\" value=\"";
            // line 611
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 611, $this->source); })()), "visiteCourante", [], "any", false, false, false, 611), "rapport", [], "any", false, false, false, 611), "libelle", [], "any", false, false, false, 611), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 611, $this->source); })()), "visiteCourante", [], "any", false, false, false, 611), "rapport", [], "any", false, false, false, 611), "PointVerification", [], "any", false, false, false, 611), "count", [], "any", false, false, false, 611), "html", null, true);
            echo " points de vérification\">
                                </div>
                            </div>
                            ";
        } else {
            // line 615
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 617
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Rapport de visite</label>
                            ";
        // line 620
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 620, $this->source); })()), "rapport", [], "any", false, false, false, 620)) {
            // line 621
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Visite réalisée et Rapport élaboré\">
                            ";
        } else {
            // line 623
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non finalisé\">
                                ";
            // line 624
            $context["nb_nok"] = 0;
            // line 625
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_detailverif"]) || array_key_exists("les_detailverif", $context) ? $context["les_detailverif"] : (function () { throw new RuntimeError('Variable "les_detailverif" does not exist.', 625, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
                // line 626
                echo "                                    ";
                if (((null === twig_get_attribute($this->env, $this->source, $context["pt"], "conclusion", [], "any", false, false, false, 626)) &&  !twig_get_attribute($this->env, $this->source, $context["pt"], "sansobjet", [], "any", false, false, false, 626))) {
                    // line 627
                    echo "                                        ";
                    $context["nb_nok"] = ((isset($context["nb_nok"]) || array_key_exists("nb_nok", $context) ? $context["nb_nok"] : (function () { throw new RuntimeError('Variable "nb_nok" does not exist.', 627, $this->source); })()) + 1);
                    // line 628
                    echo "                                    ";
                }
                // line 629
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 630
            echo "                                ";
            if ((isset($context["nb_nok"]) || array_key_exists("nb_nok", $context) ? $context["nb_nok"] : (function () { throw new RuntimeError('Variable "nb_nok" does not exist.', 630, $this->source); })())) {
                // line 631
                echo "                                    <div align=\"right\" class=\"text-danger fw-light fs-7\">";
                echo twig_escape_filter($this->env, (isset($context["nb_nok"]) || array_key_exists("nb_nok", $context) ? $context["nb_nok"] : (function () { throw new RuntimeError('Variable "nb_nok" does not exist.', 631, $this->source); })()), "html", null, true);
                echo " points de vérification non renseignés</div>
                                ";
            }
            // line 633
            echo "                            ";
        }
        // line 634
        echo "                        </div>
";
        // line 644
        echo "                    </div>  
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 651
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 652
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 652, $this->source); })()), "demande", [], "any", false, false, false, 652);
        // line 653
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 653, $this->source); })()), "installation", [], "any", false, false, false, 653);
        // line 654
        echo "


<script>

    \$(document).ready(function() {
        for(i=0; i<";
        // line 660
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_rubrique"]) || array_key_exists("les_rubrique", $context) ? $context["les_rubrique"] : (function () { throw new RuntimeError('Variable "les_rubrique" does not exist.', 660, $this->source); })()), "count", [], "any", false, false, false, 660), "html", null, true);
        echo "; i++) {
            \$(\"#zrub_\"+i).hide();
        }
        ";
        // line 663
        if (((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 663, $this->source); })()) == 1)) {
            // line 664
            echo "            for(i=0; i<4; i++) { \$(\"#zrub_\"+i).show(); }
            for(i=4; i<";
            // line 665
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_rubrique"]) || array_key_exists("les_rubrique", $context) ? $context["les_rubrique"] : (function () { throw new RuntimeError('Variable "les_rubrique" does not exist.', 665, $this->source); })()), "count", [], "any", false, false, false, 665), "html", null, true);
            echo "; i++) { \$(\"#zrub_\"+i).hide(); }
            \$(\"#form_barrette\").attr(\"required\", false);
            \$(\"#form_mesurePriseTerre\").attr(\"required\", false);
        ";
        } else {
            // line 669
            echo "            for(i=0; i<4; i++) { \$(\"#zrub_\"+i).hide(); }
            for(i=4; i<";
            // line 670
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_rubrique"]) || array_key_exists("les_rubrique", $context) ? $context["les_rubrique"] : (function () { throw new RuntimeError('Variable "les_rubrique" does not exist.', 670, $this->source); })()), "count", [], "any", false, false, false, 670), "html", null, true);
            echo "; i++) { \$(\"#zrub_\"+i).show(); }
            \$(\"#form_barrette\").attr(\"required\", \"required\");
            \$(\"#form_mesurePriseTerre\").attr(\"required\", \"required\" );
        ";
        }
        // line 674
        echo "
        \$(\"#form_longitude\").attr(\"required\", \"required\");
        \$(\"#form_latitude\").attr(\"required\", \"required\");

        ";
        // line 682
        echo "
        \$(\"#form_longitude\").addClass(\"bg-warning bg-opacity-25 text-danger fw-bold\");
        \$(\"#form_latitude\").addClass(\"bg-warning bg-opacity-25 text-danger fw-bold\");

        \$(\"#z_habitation\").hide();

        

        \$(\"#next_rub\").on('click', function() { \$(\"#form_stay\").val(1); \$(\"#form_step\").val((";
        // line 690
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 690, $this->source); })()), "html", null, true);
        echo "+1)); });  
        \$(\"#prev_rub\").on('click', function() { \$(\"#form_stay\").val(1); \$(\"#form_step\").val((";
        // line 691
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 691, $this->source); })()), "html", null, true);
        echo "-1)); });  
        \$(\"#btn_save\").on('click', function() { 
            \$(\"#form_stay\").val(0); \$(\"#form_step\").val(1); 
        });  
        \$(\"#next_rub0\").on('click', function() { \$(\"#form_stay\").val(1); \$(\"#form_step\").val((";
        // line 695
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 695, $this->source); })()), "html", null, true);
        echo "+1)); });  
        \$(\"#prev_rub0\").on('click', function() { \$(\"#form_stay\").val(1); \$(\"#form_step\").val((";
        // line 696
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 696, $this->source); })()), "html", null, true);
        echo "-1)); });  
        \$(\"#btn_save0\").on('click', function() { 
            \$(\"#form_stay\").val(0); \$(\"#form_step\").val(1); 
        });  
        
        \$(\"#btn_submit0\").on('click', function() { \$(\"#btn_submit\").click(); return false });  
        \$(\"#btn_submit1\").on('click', function() { \$(\"#btn_submit\").click(); return false });  

        \$(\"#btn_submit\").on('click', function() { 
            \$(\"#form_stay\").val(0); \$(\"#form_step\").val(1); 
            ok_valid=1; nb_non_conclusion=0; mess_nok=\"\";
            \$('.vconclusion').each(function(){
                if(\$(this).val()==\"\") {
                    t_idd=\$(this).attr(\"id\").split(\"_\"); 
                    idd=t_idd[2];
                    v_so=\$(\"#form_sansobjet_\"+idd).val();
                    if(v_so==\"0\") {
                        ok_valid=0; mess_nok+=\" \"+\$(\"#code_pv_\"+idd).html();
                    }
                }
            });
            if(ok_valid==\"0\") {
                alert(\"Tous les points de vérification n'ont pas été renseignés ! Revoir les points: \"+mess_nok);
                return false;
            } else {
                \$(\"#form_valid\").val(1);
            }

        });  

        ";
        // line 726
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["les_detailverif"]) || array_key_exists("les_detailverif", $context) ? $context["les_detailverif"] : (function () { throw new RuntimeError('Variable "les_detailverif" does not exist.', 726, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
            // line 727
            echo "            \$(\"#label_chk2_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 727), "html", null, true);
            echo "\").on('click', function(){ \$(\"#chk2_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 727), "html", null, true);
            echo "\").click(); });  
            \$(\"#label_chk1_";
            // line 728
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 728), "html", null, true);
            echo "\").on('click', function(){ \$(\"#chk1_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 728), "html", null, true);
            echo "\").click(); });  
            \$(\"#label_chk0_";
            // line 729
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 729), "html", null, true);
            echo "\").on('click', function(){ \$(\"#chk0_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 729), "html", null, true);
            echo "\").click(); });  

            \$(\"#chk2_";
            // line 731
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 731), "html", null, true);
            echo "\").on('click', function(){ active_chk(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 731), "html", null, true);
            echo ", 2); });  
            \$(\"#chk0_";
            // line 732
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 732), "html", null, true);
            echo "\").on('click', function(){ active_chk(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 732), "html", null, true);
            echo ", 0); });  
            \$(\"#chk1_";
            // line 733
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 733), "html", null, true);
            echo "\").on('click', function(){ active_chk(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 733), "html", null, true);
            echo ", 1); });  
            \$(\"#btn_unactive_";
            // line 734
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 734), "html", null, true);
            echo "\").on('click', function(){ unactive_chk(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 734), "html", null, true);
            echo "); });  
            
            val_inp = \$(\"#form_conclusion_";
            // line 736
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 736), "html", null, true);
            echo "\"); 
            val_so = \$(\"#form_sansobjet_";
            // line 737
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 737), "html", null, true);
            echo "\"); 
            comment_inp = \$(\"#form_comment_";
            // line 738
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 738), "html", null, true);
            echo "\"); 
            pnc_inp = \$(\"#form_pnc_";
            // line 739
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 739), "html", null, true);
            echo "\"); 
            z_pnc_inp = \$(\"#z_form_pnc_";
            // line 740
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 740), "html", null, true);
            echo "\"); 
            
            \$(\"#form_pnc_";
            // line 742
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 742), "html", null, true);
            echo "\").hide();
            \$(\"#z_form_pnc_";
            // line 743
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 743), "html", null, true);
            echo "\").hide();
            \$(\"#form_comment_";
            // line 744
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 744), "html", null, true);
            echo "\").hide();
            \$(\"#btn_unactive_";
            // line 745
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 745), "html", null, true);
            echo "\").hide();

            ";
            // line 747
            if (twig_get_attribute($this->env, $this->source, $context["pt"], "sansobjet", [], "any", false, false, false, 747)) {
                echo " 
                comment_inp.hide(); pnc_inp.hide(); 
                z_pnc_inp.hide(); pnc_inp.attr(\"required\", false);
                \$(\"#btn_unactive_";
                // line 750
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 750), "html", null, true);
                echo "\").show();

                \$(\"#chk2_";
                // line 752
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 752), "html", null, true);
                echo "\").attr(\"fill\", \"green\");
                \$(\"#chk2_";
                // line 753
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 753), "html", null, true);
                echo "\").html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#check-square-fill\"></use>');
                pnc_inp.hide(); comment_inp.hide(); val_inp.val(\"\"); val_so.val(\"1\");
                z_pnc_inp.hide(); pnc_inp.attr(\"required\", false);
            ";
            }
            // line 757
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["pt"], "conclusion", [], "any", false, false, false, 757) == "1")) {
                echo " 
                comment_inp.hide(); pnc_inp.hide(); 
                z_pnc_inp.hide(); pnc_inp.attr(\"required\", false);
                \$(\"#btn_unactive_";
                // line 760
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 760), "html", null, true);
                echo "\").show();

                \$(\"#chk0_";
                // line 762
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 762), "html", null, true);
                echo "\").attr(\"fill\", \"green\");
                \$(\"#chk0_";
                // line 763
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 763), "html", null, true);
                echo "\").html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#check-square-fill\"></use>');
                pnc_inp.hide(); comment_inp.hide(); val_inp.val(\"1\"); val_so.val(\"0\");
                z_pnc_inp.hide(); pnc_inp.attr(\"required\", false);
            ";
            }
            // line 767
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["pt"], "conclusion", [], "any", false, false, false, 767) == "0")) {
                echo " 
                \$(\"#form_comment_";
                // line 768
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 768), "html", null, true);
                echo "\").show();
                \$(\"#btn_unactive_";
                // line 769
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 769), "html", null, true);
                echo "\").show();

                \$(\"#chk1_";
                // line 771
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 771), "html", null, true);
                echo "\").attr(\"fill\", \"green\");
                \$(\"#chk1_";
                // line 772
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 772), "html", null, true);
                echo "\").html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#check-square-fill\"></use>');
                pnc_inp.show();comment_inp.show(); val_inp.val(\"0\"); val_so.val(\"0\");
                z_pnc_inp.show(); pnc_inp.attr(\"required\", \"required\");
            ";
            }
            // line 776
            echo "            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 778
        echo "
        function active_chk(id, val) {
            val_inp = \$(\"#form_conclusion_\"+id); 
            val_so = \$(\"#form_sansobjet_\"+id); 
            comment_inp = \$(\"#form_comment_\"+id); 
            pnc_inp = \$(\"#form_pnc_\"+id); 
            z_pnc_inp = \$(\"#z_form_pnc_\"+id); 
            el=\$(\"#chk\"+val+\"_\"+id);
            
            \$(\"#chk2_\"+id).html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#square\"></use>');
            \$(\"#chk2_\"+id).attr(\"fill\", \"gray\");

            \$(\"#chk0_\"+id).html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#square\"></use>');
            \$(\"#chk0_\"+id).attr(\"fill\", \"gray\");

            \$(\"#chk1_\"+id).html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#square\"></use>');
            \$(\"#chk1_\"+id).attr(\"fill\", \"gray\");


            el.attr(\"fill\", \"green\");
            el.html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#check-square-fill\"></use>');
            if(val==2) { 
                comment_inp.hide(); comment_inp.val(\"\"); 
                pnc_inp.hide(); pnc_inp.val(\"\"); 
                z_pnc_inp.hide(); pnc_inp.attr(\"required\", false);
            } 
            if(val==0) { 
                comment_inp.hide(); comment_inp.val(\"\"); 
                pnc_inp.hide(); pnc_inp.val(\"\"); 
                z_pnc_inp.hide(); pnc_inp.attr(\"required\", false);
            } 
            if(val==1) { 
                comment_inp.show(); 
                pnc_inp.show(); 
                z_pnc_inp.show(); pnc_inp.attr(\"required\", \"required\");                
            }
            if(val==0) { val_inp.val(1); val_so.val(0); } 
            if(val==1) { val_inp.val(0); val_so.val(0); }
            if(val==2) { val_inp.val(\"\"); val_so.val(1); }
            


            \$(\"#btn_unactive_\"+id).show();
        }

        function unactive_chk(id) {
            \$(\"#chk2_\"+id).html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#square\"></use>');
            \$(\"#chk2_\"+id).attr(\"fill\", \"gray\");

            \$(\"#chk0_\"+id).html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#square\"></use>');
            \$(\"#chk0_\"+id).attr(\"fill\", \"gray\");

            \$(\"#chk1_\"+id).html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#square\"></use>');
            \$(\"#chk1_\"+id).attr(\"fill\", \"gray\");

            val_inp = \$(\"#form_conclusion_\"+id); 
            val_so = \$(\"#form_sansobjet_\"+id); 
            val_inp.val(\"\"); val_so.val(0);

            \$(\"#btn_unactive_\"+id).hide();

            val_inp = \$(\"#form_conclusion_\"+id); 
            val_so = \$(\"#form_sansobjet_\"+id); 
            pnc_inp = \$(\"#form_pnc_\"+id); 
            z_pnc_inp = \$(\"#z_form_pnc_\"+id); 
            comment_inp = \$(\"#form_comment_\"+id); 
            pnc_inp = \$(\"#form_pnc_\"+id); 
            val_so.val(\"0\"); val_inp.val(\"\"); comment_inp.val(\"\"); comment_inp.hide();
            pnc_inp.val(\"\"); pnc_inp.hide();
            z_pnc_inp.hide(); pnc_inp.attr(\"required\", false);
        }

        
        \$(\"#find_btn\").click(function () { //user clicks button
            if (\"geolocation\" in navigator){ //check geolocation available 
                //try to get user current location using getCurrentPosition() method
                navigator.geolocation.getCurrentPosition(function(position){ 
                        \$(\"#form_latitude\").val(position.coords.latitude)
                        \$(\"#form_longitude\").val(position.coords.longitude)
                    });
            }else{
                console.log(\"Browser doesn't support geolocation!\");
            }
            return false;
        });

        \$('.z_pj1').hide(); \$('.z_pj2').hide(); \$('.z_pj3').hide(); \$('.z_pj4').hide(); 

        ";
        // line 866
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 866, $this->source); })()), "PJPhoto1", [], "any", false, false, false, 866)) {
            echo " \$('.z_pj1').show(); ";
        }
        // line 867
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 867, $this->source); })()), "PJPhoto2", [], "any", false, false, false, 867)) {
            echo " \$('.z_pj2').show(); ";
        }
        // line 868
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 868, $this->source); })()), "PJPhoto3", [], "any", false, false, false, 868)) {
            echo " \$('.z_pj3').show(); ";
        }
        // line 869
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 869, $this->source); })()), "PJPhoto4", [], "any", false, false, false, 869)) {
            echo " \$('.z_pj4').show(); ";
        }
        // line 870
        echo "
    ";
        // line 871
        if (((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 871, $this->source); })()) == 2)) {
            // line 872
            echo "
        var signelectricien = \$('#signelectricien').signature({syncField: '#form_sign_electricien', syncFormat: 'PNG'});
        var signcontroleur = \$('#signcontroleur').signature({syncField: '#form_sign_controleur', syncFormat: 'PNG'});

        ";
            // line 876
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 876, $this->source); })()), "visiteCourante", [], "any", false, false, false, 876), "signelectricien", [], "any", false, false, false, 876)) {
                // line 877
                echo "            \$(\".bloc_sign1\").hide(); 
            \$(\"#modifsign1\").click(function(){ 
                \$(\".bloc_sign1\").toggle();
            })
        ";
            }
            // line 882
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 882, $this->source); })()), "visiteCourante", [], "any", false, false, false, 882), "signcontroleur", [], "any", false, false, false, 882)) {
                // line 883
                echo "            \$(\".bloc_sign2\").hide();
            \$(\"#modifsign2\").click(function(){ 
                \$(\".bloc_sign2\").toggle();
            })
        ";
            }
            // line 888
            echo "        \$(\"#form_sign_electricien\").hide(); \$(\"#form_sign_controleur\").hide();
        
            \$('#clear2').click(function() {
                e.preventDefault();
                signelectricien.signature('clear');
                \$(\"#form_sign_electricien\").val('');
            });
            \$('#clear1').click(function() {
                e.preventDefault();
                signcontroleur.signature('clear');
                \$(\"#form_sign_controleur\").val('');
            });

    ";
        }
        // line 902
        echo "    });

function getBase64Image(img) {
  var canvas = document.createElement(\"canvas\");
  canvas.width = img.width;
  canvas.height = img.height;
  var ctx = canvas.getContext(\"2d\");
  ctx.drawImage(img, 0, 0);
  var dataURL = canvas.toDataURL(\"image/png\");
  return dataURL.replace(/^data:image\\/(png|jpg);base64,/, \"\");
}

</script>


<!-- jSignature -->
";
        // line 925
        echo "
<script src=\"";
        // line 926
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/signature_pad.umd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 927
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dossier/rapporter_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1743 => 927,  1739 => 926,  1736 => 925,  1718 => 902,  1702 => 888,  1695 => 883,  1692 => 882,  1685 => 877,  1683 => 876,  1677 => 872,  1675 => 871,  1672 => 870,  1667 => 869,  1662 => 868,  1657 => 867,  1653 => 866,  1563 => 778,  1556 => 776,  1549 => 772,  1545 => 771,  1540 => 769,  1536 => 768,  1531 => 767,  1524 => 763,  1520 => 762,  1515 => 760,  1508 => 757,  1501 => 753,  1497 => 752,  1492 => 750,  1486 => 747,  1481 => 745,  1477 => 744,  1473 => 743,  1469 => 742,  1464 => 740,  1460 => 739,  1456 => 738,  1452 => 737,  1448 => 736,  1441 => 734,  1435 => 733,  1429 => 732,  1423 => 731,  1416 => 729,  1410 => 728,  1403 => 727,  1399 => 726,  1366 => 696,  1362 => 695,  1355 => 691,  1351 => 690,  1341 => 682,  1335 => 674,  1328 => 670,  1325 => 669,  1318 => 665,  1315 => 664,  1313 => 663,  1307 => 660,  1299 => 654,  1296 => 653,  1293 => 652,  1283 => 651,  1268 => 644,  1265 => 634,  1262 => 633,  1256 => 631,  1253 => 630,  1247 => 629,  1244 => 628,  1241 => 627,  1238 => 626,  1233 => 625,  1231 => 624,  1228 => 623,  1224 => 621,  1222 => 620,  1217 => 617,  1213 => 615,  1204 => 611,  1197 => 607,  1190 => 602,  1188 => 601,  1183 => 598,  1179 => 596,  1173 => 594,  1171 => 593,  1164 => 589,  1157 => 585,  1146 => 579,  1135 => 573,  1127 => 568,  1114 => 563,  1105 => 557,  1096 => 551,  1087 => 545,  1078 => 539,  1069 => 533,  1057 => 524,  1053 => 523,  1045 => 518,  1041 => 517,  1033 => 512,  1026 => 507,  1022 => 505,  1020 => 504,  1017 => 503,  1010 => 499,  1006 => 497,  999 => 493,  995 => 491,  992 => 490,  985 => 486,  981 => 484,  974 => 480,  970 => 478,  968 => 477,  964 => 475,  958 => 472,  954 => 471,  950 => 470,  946 => 469,  942 => 468,  938 => 467,  934 => 466,  930 => 465,  926 => 464,  923 => 463,  913 => 456,  909 => 454,  902 => 449,  894 => 444,  891 => 443,  889 => 442,  885 => 441,  879 => 438,  875 => 436,  868 => 431,  860 => 426,  857 => 425,  855 => 424,  851 => 423,  835 => 410,  831 => 408,  825 => 404,  818 => 400,  813 => 398,  808 => 396,  804 => 394,  802 => 393,  794 => 388,  790 => 386,  784 => 382,  777 => 378,  772 => 376,  767 => 374,  763 => 372,  761 => 371,  753 => 366,  749 => 364,  743 => 360,  736 => 356,  731 => 354,  726 => 352,  722 => 350,  720 => 349,  712 => 344,  708 => 342,  702 => 338,  695 => 334,  690 => 332,  685 => 330,  681 => 328,  679 => 327,  663 => 314,  648 => 302,  642 => 299,  633 => 292,  630 => 291,  618 => 285,  611 => 281,  607 => 280,  603 => 279,  597 => 276,  593 => 275,  583 => 268,  579 => 267,  573 => 264,  568 => 262,  563 => 260,  555 => 255,  551 => 254,  545 => 251,  540 => 249,  535 => 247,  527 => 242,  523 => 241,  515 => 236,  510 => 234,  501 => 228,  492 => 226,  488 => 225,  484 => 223,  481 => 222,  478 => 221,  475 => 220,  473 => 219,  470 => 218,  467 => 217,  464 => 216,  462 => 215,  455 => 213,  449 => 211,  445 => 209,  442 => 208,  439 => 207,  434 => 206,  431 => 205,  429 => 204,  426 => 203,  422 => 201,  420 => 200,  417 => 199,  410 => 195,  406 => 193,  399 => 189,  395 => 187,  392 => 186,  385 => 182,  381 => 180,  374 => 176,  370 => 174,  368 => 173,  358 => 166,  354 => 165,  342 => 156,  338 => 155,  334 => 154,  329 => 152,  325 => 151,  321 => 150,  310 => 142,  306 => 141,  302 => 140,  292 => 132,  288 => 130,  286 => 129,  282 => 128,  276 => 125,  264 => 116,  256 => 111,  243 => 101,  237 => 97,  234 => 96,  231 => 95,  228 => 94,  225 => 93,  223 => 92,  220 => 91,  217 => 90,  214 => 89,  211 => 88,  208 => 87,  205 => 86,  202 => 85,  199 => 84,  196 => 83,  193 => 82,  190 => 81,  187 => 80,  184 => 79,  181 => 78,  178 => 77,  175 => 76,  172 => 75,  169 => 74,  166 => 73,  163 => 72,  160 => 71,  157 => 70,  155 => 69,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <style>
    #synthese_demande input[disabled] {
        background-color:#f1f5f9;
        border: 1px solid #7a7b7c;
        color: gray;
        font-weight:normal;
    }
    #synthese_demande .card {
        background-color:#ffffff;
    }
    #synthese_demande label, #synthese_demande .fs-title {
        color:gray;
        font-weight:normal;
    }

    #synthese_demande .text-danger label  {
        color: #dd3444;
        font-weight:normal;
    }

    #synthese_demande .text-danger select  {
        border-color: #dd3444;
    }

    .latlong {
        width: 100px;
        padding: 1px;
        min-height: 12px;
        background-color: #fff0cc;
        color:red;
        font-weight: bold;
        border:1px inset #000;
    }

    .adresse {
        padding: 2px;
        font-size:13px;
        min-height: 12px;
        background-color: #fff0cc;
        color:red;
        border:1px inset #000;
    }

    #paiement_demande .card {
        background-color:#fff;
        box-shadow: 0 0 0 2px white, 0 0 0 3px #000
    }
    
    #validation_dossier .card {
        background-color:#ffc328;
        box-shadow: 0 0 0 2px white, 0 0 0 3px #000
    }
    
    .kbw-signature { width: 400px; height: 200px;}
    #signelectricien canvas{
        width: 100% !important;
        min-height: 200px;
    }

    #signcontroleur canvas{
        width: 100% !important;
        min-height: 200px;
    }
    </style>
    {% set link_show = 'app_dossier_show' %}
    {% if not dossier.affecte %}
        {% set action_demande = \"Affectation\" %}
        {% set link_liste = 'app_dossier_affectation' %}
        {% set link_action = 'app_dossier_affecter' %}
        {% set libelle_action = 'Affecter à un contrôleur' %}
    {% elseif not dossier.visite %}
        {% set action_demande = \"Planification Visite\" %}
        {% set link_liste = 'app_dossier_visite' %}
        {% set link_action = 'app_dossier_visite' %}
        {% set libelle_action = 'Planifier une visite' %}
    {% elseif not dossier.rapport %}
        {% set action_demande = \"Rapport de Visite\" %}
        {% set link_liste = 'app_dossier_show' %}
        {% set link_action = 'app_dossier_rapport' %}
        {% set libelle_action = 'Elaborer le rapport de visite' %}
    {% elseif not dossier.attestation %}
        {% set action_demande = \"Résultat Inspection\" %}
        {% set link_liste = 'app_dossier_attestation' %}
        {% set link_action = 'app_dossier_attestation' %}
        {% set libelle_action = 'Confirmer Résultats Inspection' %}
    {% endif %}

    {% set demande = dossier.demande %}
    {% set installation = demande.installation %}
    {% if app.session.get('page_liste_dossier') is defined and app.session.get('page_liste_dossier') %}
        {% set link_liste = app.session.get('page_liste_dossier') %}
    {% endif %}

    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">{{ action_demande }} de dossiers </span>
            </a>
        </header>

        <div class=\"container\">
            <nav class=\"navbar shadow bg-warning border border-dark mt-2 p-0\">
                <div class=\"container-fluid ps-4\">
                        <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                            <div class=\"col\">
                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#lightbulb') }}\"></use>
                                </svg>
                                Détails du dossier
                            </div>
                            <div class=\"col\" align=\"right\">
                                <span class=\"text-success\">[En attente de {{ dossier.Etat }}]</span>
                            </div>
                        </div>

                </div>
            </nav>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                {{ form_start(dossierForm) }}
                
                <div align=\"right\">
                    <a href=\"{{ path(link_show, {'id' : dossier.id }) }}\" class=\"next action-button btn btn-secondary btn my-3\">Annuler</a>
                    {% if step == 2 %}
                        <button id=\"btn_submit\" type=\"submit\" class=\"next action-button btn btn-success btn my-3 ms-2\">Soumettre le rapport</button>
                    {% endif %}
                </div>
                <fieldset id=\"synthese_demande\">

                <div id=\"validation_dossier\" class=\"\">
                    <div class=\"card mb-2 pb-0\">
                        <h2 class=\"fs-title text-dark\">
                            Rapport d'inspection
                            <div class=\"float-end fs-8\">
                                {{ form_label(dossierForm.dateVisite) }}
                                {{ form_widget(dossierForm.dateVisite) }}
                                {{ form_errors(dossierForm.dateVisite) }}
                            </div>
                        </h2>
                    </div>
                    <hr class=\"mb-3\" />
                        <div class=\"row mb-2 border shadow border-dark rounded\" align=\"right\">
                                    <div class=\"p-2\">
                                        <label class=\"me-4 text-dark fs-6 \">Localisation du Site de l'installation</label>
                                        {{ form_label(dossierForm.latitude) }}
                                        {{ form_widget(dossierForm.latitude) }}
                                        {{ form_errors(dossierForm.latitude) }}
                                        
                                        {{ form_label(dossierForm.longitude) }}
                                        {{ form_widget(dossierForm.longitude) }}
                                        {{ form_errors(dossierForm.longitude) }}
    
                                        <button id=\"find_btn\" class=\"ms-4 btn btn-sm btn-secondary action fs-7\">Géolocaliser...</button>
                                    </div>
                                    <div class=\"p-2 row\" id=\"z_habitation\">
                                        <div class=\"col-6\">
                                            <label class=\"me-4 text-dark fs-6 \">Adresse exacte de l'installation</label>
                                        </div>
                                        <div class=\"col-6\">
                                            {{ form_widget(dossierForm.habitation) }}
                                            {{ form_errors(dossierForm.habitation) }}
                                        </div>
    
                                    </div>
                        </div>
                    <div class=\"\">
                        <div align=\"right\">
                            {% if step == 2 %}
                            <button id=\"prev_rub0\" class=\"next action-button btn btn-secondary btn my-3\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"white\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-left-fill') }}\"></use>
                                </svg> Précédent
                            </button>
                            {% else %}
                            <button class=\"next disabled action-button btn btn-outline-secondary btn my-3\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"gray\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-left-fill') }}\"></use>
                                </svg> Précédent
                            </button>
                            {% endif %}
                            {% if step == 1 %}
                            <button id=\"next_rub0\" class=\"next action-button btn btn-warning btn my-3\">
                                Suivant <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right-fill') }}\"></use>
                                </svg> 
                            </button>
                            {% else %}
                            <button class=\"next disabled action-button btn btn-outline-secondary btn my-3\">
                                Suivant <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"gray\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right-fill') }}\"></use>
                                </svg> 
                            </button>
                            {% endif %}
                            <button id=\"btn_save0\" class=\"next action-button btn btn-outline-success btn my-3 ms-2\">Enregistrer et sortir</button>
                            {% if step == 2 %}
                                <button id=\"btn_submit0\" class=\"next action-button btn btn-success btn my-3 ms-2\">Soumettre le rapport</button>
                            {% endif %}
                        </div>
                    {% set rub = \"\" %}
                    {% set ix = 0 %}
                        {% for pt in les_detailverif %}
                            {% if rub != pt.pointverification.rubrique.id %}
                                {% if rub %}
                                    </div>
                                {% endif %}
                                <div id=\"zrub_{{ ix }}\">
                                <div class=\"shadow bg-warning bg-opacity-50 border border-secondary mb-2 p-2 fw-bold\">
                                    {{ pt.pointverification.rubrique.numero }}- {{ pt.pointverification.rubrique.libelle }}
                                </div>
                                {% set rub = pt.pointverification.rubrique.id %}
                                {% set ix = ix + 1 %}
                            {% endif %}
                            <div class=\"shadow p-4 pb-1 pt-2 mb-1\">
                                {% set inp0 = attribute(dossierForm, 'sansobjet_'~pt.id) %}
                                {% set inp1 = attribute(dossierForm, 'conclusion_'~pt.id) %}
                                {% set inp2 = attribute(dossierForm, 'comment_'~pt.id) %}
                                {% set inp3 = attribute(dossierForm, 'pnc_'~pt.id) %}
                                <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                    <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                    </svg> <span id=\"code_pv_{{ pt.id }}\">[{{ pt.pointVerification.numero }}]</span>- {{ pt.pointVerification.objetVerification }}
                                    <div class=\"float-end\">
                                        <span class=\"text-danger fs-8 fw-light pt\" id=\"btn_unactive_{{ pt.id }}\">Effacer</span>
                                    </div>
                                </div>
                                <div class=\"ps-4\">
                                    <div class=\"row fw-light\">
                                        <div class=\"col-md-3 shadow border border-dark p-1 mb-0 me-4\">
                                            <div class=\"pt float-start\" id=\"label_chk2_{{ pt.id }}\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#x-octagon-fill') }}\"></use>
                                                </svg>
                                                Sans Objet
                                            </div>
                                            <div class=\"float-end\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" id=\"chk2_{{ pt.id }}\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#square') }}\"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 shadow border border-success p-1 mb-0 ms-2\">
                                            <div class=\"pt float-start\" id=\"label_chk0_{{ pt.id }}\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"green\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check') }}\"></use>
                                                </svg>
                                                {{ pt.pointVerification.libelleConclusion1 }}
                                            </div>
                                            <div class=\"float-end\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" id=\"chk0_{{ pt.id }}\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#square') }}\"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 shadow border border-danger p-1 mb-0 ms-2\">
                                            <div class=\"pt float-start\" id=\"label_chk1_{{ pt.id }}\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"red\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#x') }}\"></use>
                                                </svg>
                                                {{ pt.pointVerification.libelleConclusion2 }}
                                            </div>
                                            <div class=\"float-end\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\" id=\"chk1_{{ pt.id }}\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#square') }}\"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"mt-1\">
                                            {{ form_row(inp0) }}
                                            {{ form_row(inp1) }}
                                        </div>
                                        <div class=\"mt-1 row\">
                                            <div class=\"offset-6 col-6 text-danger\" align=\"left\" id=\"z_{{inp3.vars['id']}}\">
                                                {{ form_label(inp3) }}
                                                {{ form_widget(inp3) }}
                                            </div>
                                        </div>
                                        <div class=\"mt-1\">
                                            {{ form_widget(inp2) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                        {% if step == 2 %}
                            <div class=\"shadow p-4 pt-2 mb-3\">
                                <div class=\"row mt-1 pt-2\">
                                    <div>
                                        Tableau 2: Mesures des prises de terre
                                        <hr class=\"mt-2\" />
                                    </div>
                                    <div class=\"col-md-6\">
                                        {{ form_row(dossierForm.mesurePriseTerre) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                        {{ form_row(dossierForm.barrette) }}
                                    </div>
                                </div>
                            </div>

                            <div class=\"shadow p-4 pt-2 mb-3\">
                                <div class=\"row mt-1 pt-2\">
                                    <div>
                                        Autres observations
                                        <hr class=\"mt-2\" />
                                    </div>
                                    <div class=\"row\">
                                            {{ form_row(dossierForm.commentaire2) }}
                                    </div>
                                </div>
                            </div>

                            <div class=\"shadow p-4 pt-2 mb-3\">
                                <div class=\"row mt-1 pt-2\">
                                    <div>
                                        Photos Installation
                                        <hr class=\"mt-2\" />
                                    </div>
                                    <div class=\"col-lg-3\">
                                        <label for=\"\">Photo 1</label>
                                        {% if installation.PJPhoto1 %}
                                            <div class=\"form-control\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                                                </svg>
                                                <span class=\"text-success pt fs-8\">{{installation.PJPhoto1.fichier | slice(0, 10)}} ... </span>
                                                <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj1').show()\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                                </svg>
                                            </div>
                                        {% else %}
                                            <div class=\"form-control\">
                                                <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"col-lg-3 z_pj1\">
                                        {{ form_row(dossierForm.pj1) }}
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <label for=\"\">Photo 2</label>
                                        {% if installation.PJPhoto2 %}
                                            <div class=\"form-control\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                                                </svg>
                                                <span class=\"text-success pt fs-8\">{{installation.PJPhoto2.fichier | slice(0, 10)}} ... </span>
                                                <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj2').show()\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                                </svg>
                                            </div>
                                        {% else %}
                                            <div class=\"form-control\">
                                                <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"col-lg-3 z_pj2\">
                                        {{ form_row(dossierForm.pj2) }}
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <label for=\"\">Photo 3</label>
                                        {% if installation.PJPhoto3 %}
                                            <div class=\"form-control\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                                                </svg>
                                                <span class=\"text-success pt fs-8\">{{installation.PJPhoto3.fichier | slice(0, 10)}} ... </span>
                                                <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj3').show()\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                                </svg>
                                            </div>
                                        {% else %}
                                            <div class=\"form-control\">
                                                <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"col-lg-3 z_pj3\">
                                        {{ form_row(dossierForm.pj3) }}
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <label for=\"\">Photo 4</label>
                                        {% if installation.PJPhoto4 %}
                                            <div class=\"form-control\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                                                </svg>
                                                <span class=\"text-success pt fs-8\">{{installation.PJPhoto4.fichier | slice(0, 10)}} ... </span>
                                                <svg class=\"bi float-end pt\" width=\"16\" height=\"16\" fill=\"red\" onclick=\"\$('.z_pj4').show()\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                                </svg>
                                            </div>
                                        {% else %}
                                            <div class=\"form-control\">
                                                <span class=\"text-danger pt fs-8\">Aucune pièce jointe</span>
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"col-lg-3 z_pj4\">
                                        {{ form_row(dossierForm.pj4) }}
                                    </div>
                                </div>
                            </div>

                            <div class=\"shadow p-4 pt-2 mb-3\">
                                <div class=\"row mt-1 pt-2\">
                                    <div>
                                        Signature du rapport d'inspection
                                        <hr class=\"mt-2\" />
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-lg-6\">
                                            <div><label class=\"\" for=\"\">Signature Controleur:</label><span class=\"fw-light text-dark\">{{dossier.controleur.nomComplet}}</span></div>
                                            {% if dossier.visiteCourante.signcontroleur %}
                                                <div class=\"mb-4\">
                                                    <img width=\"400\" height=\"100\" id=\"img_signcontroleur\" src=\"{{ asset('upload/photo/' ~ dossier.visiteCourante.signcontroleur.fichier) }}\" alt=\"\">
                                                    <div id=\"modifsign2\" class=\"btn btn-sm btn-info float-end fs-7 m-1 my-2 py-0\" style=\"position:relative;top:-20px\">Modifier signature</div>
                                                    <div class=\"clear\"></div>
                                                </div>
                                            {% else %}
                                                <div class=\"mb-4\">
                                                    <img width=\"400\" height=\"100\" id=\"img_signcontroleur\" alt=\"\">
                                                    <div class=\"clear\"></div>
                                                </div>
                                            {% endif %}
                                            <div class=\"border border-secondary shadow bloc_sign2\" style=\"height:200px\" id=\"signcontroleur\"></div>
                                            <button type=\"button\" class=\"btn btn-outline-primary btn-sm mt-2 bloc_sign2\" id=\"clear1\">Effacer Signature</button>
                                            {{ form_widget(dossierForm.sign_controleur) }}
                                        </div>
                                        <div class=\"col-lg-6\">
                                            <div><label class=\"\" for=\"\">Signature Electricien:</label><span class=\"fw-light text-dark\">{{installation.electricien.nomComplet}}</span></div>
                                            {% if dossier.visiteCourante.signelectricien %}
                                                <div class=\"mb-4\">
                                                    <img width=\"400\" height=\"100\" id=\"img_signelectricien\" src=\"{{ asset('upload/photo/' ~ dossier.visiteCourante.signelectricien.fichier) }}\" alt=\"\">
                                                    <div id=\"modifsign1\" class=\"btn btn-sm btn-info float-end fs-7 m-1 my-2 py-0\" style=\"position:relative;top:-20px\">Modifier signature</div>
                                                    <div class=\"clear\"></div>
                                                </div>
                                            {% else %}
                                                <div class=\"mb-4\">
                                                    <img width=\"400\" height=\"100\" id=\"img_signelectricien\" alt=\"\">
                                                    <div class=\"clear\"></div>
                                                </div>
                                            {% endif %}
                                            <div class=\"border border-secondary shadow bloc_sign1\" style=\"height:200px\" id=\"signelectricien\"></div>
                                            <button type=\"button\" class=\"btn btn-outline-primary btn-sm mt-2 bloc_sign1\" id=\"clear2\">Effacer Signature</button>
                                            {{ form_widget(dossierForm.sign_electricien) }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        {% else %}
                            <div class=\"\" style=\"display:none\">
                            {{ form_widget(dossierForm.mesurePriseTerre) }}
                            {{ form_widget(dossierForm.barrette) }}
                            {{ form_row(dossierForm.pj1) }}
                            {{ form_row(dossierForm.pj2) }}
                            {{ form_row(dossierForm.pj3) }}
                            {{ form_row(dossierForm.pj4) }}
                            {{ form_row(dossierForm.commentaire2) }}
                            {{ form_row(dossierForm.sign_electricien) }}
                            {{ form_row(dossierForm.sign_controleur) }}
                            </div>
                        {% endif %}
                        </div>
                        <div align=\"right\">
                            {% if step == 2 %}
                            <button id=\"prev_rub\" class=\"next action-button btn btn-secondary btn my-3\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"white\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-left-fill') }}\"></use>
                                </svg> Précédent
                            </button>
                            {% else %}
                            <button class=\"next disabled action-button btn btn-outline-secondary btn my-3\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"gray\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-left-fill') }}\"></use>
                                </svg> Précédent
                            </button>
                            {% endif %}
                            {% if step == 1 %}
                            <button id=\"next_rub\" class=\"next action-button btn btn-warning btn my-3\">
                                Suivant <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right-fill') }}\"></use>
                                </svg> 
                            </button>
                            {% else %}
                            <button class=\"next disabled action-button btn btn-outline-secondary btn my-3\">
                                Suivant <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"gray\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right-fill') }}\"></use>
                                </svg> 
                            </button>
                            {% endif %}
                            <button id=\"btn_save\" class=\"next action-button btn btn-outline-success btn my-3 ms-2\">Enregistrer et sortir</button>
                            {% if step == 2 %}
                                <button id=\"btn_submit1\" class=\"next action-button btn btn-success btn my-3 ms-2\">Soumettre le rapport</button>
                            {% endif %}
                        </div>
                    </div>  
                </div>

                </fieldset>
                {{ form_end(dossierForm) }}
            </div>

            <div class=\"col-lg-4 mb-2 priority-5\" id=\"paiement_demande\">
                <div align=\"right\">
                    <a target=\"_blank\" href=\"{{ path('app_installation_showpdf', {'id': demande.installation.id}) }}\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Demande</a>
                    <a href=\"{{ path(link_liste, {'id' : dossier.id }) }}\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour à la liste</a>
                </div>                                
                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Traitement du dossier
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"{{ path('app_dossier_histo', {'id': dossier.id}) }}\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#hourglass-split\") }}\"></use></svg>
                            </a>
                        </div>
                    </h2>
                    <div class=\"row\">
                        <hr class=\"mb-3\" />
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >N° Dossier</label>
                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-0 fw-bold fs-6\" value=\"{{ dossier.demande.numero }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Date création dossier</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-success form-control py-0 fw-bold fs-6\" value=\"{{ dossier.dateCreation | date('d-m-Y') }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" class=\"fs-7\" >Usage</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fw-bold fs-6\" value=\"{{ dossier.demande.installation.usages }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Puissance</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fs-6\" value=\"{{ dossier.demande.puissance }} kW\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"{{ dossier.demande.installation.localite.nom }}\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Agence</label>
                                <input type=\"text\" disabled readonly class=\"form-control fw-bold text-black form-control py-0 fs-6\" value=\"{% if dossier.demande.installation.localite.agence %} {{ dossier.demande.installation.localite.agence.code }}{% else %} - {% endif %}\">
                            </div>
                        </div>
                        <div class=\"mb-1\">
                            <label class=\"fs-7\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"{{ dossier.demande.installation.adresse }}\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"{{ dossier.demande.installation.electricien.nom }} {{ dossier.demande.installation.electricien.prenom }}\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Tél Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control fw-bold py-0 fs-6\" value=\"{{ dossier.demande.installation.electricien.telephone }} / {{ dossier.demande.installation.electricien.autreNumTelephone }}\">
                            </div>
                        </div>
                        <hr class=\"mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Date création dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"{{ dossier.dateCreation | date('d-m-Y') }}\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Référent chargé du dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"{{ dossier.referent }}\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Contrôleur chargé du traitement</label>
                            {% if dossier.controleur %}
                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"{{ dossier.controleur }}\">
                            {% else %}
                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            {% endif %}
                        </div>
                        <div class=\"mb-3 \">
                            <label >Visite du site pour inspection</label>
                            {% if dossier.visite %}
                            <div class=\"row\">
                                <div class=\"col-5\">
                                    <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Planifiée\">
                                </div>
                                <div class=\"col-7\">
                                    <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"{{ dossier.visiteCourante.datePlanifie | date('d-m-Y à H:i') }}\">
                                </div>
                                <div class=\"col-12\">
                                    Modèle Rapport d'inspection
                                    <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-1 fw-bold fs-6\" value=\"{{ dossier.visiteCourante.rapport.libelle }} - {{ dossier.visiteCourante.rapport.PointVerification.count }} points de vérification\">
                                </div>
                            </div>
                            {% else %}
                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            {% endif %}
                        </div>
                        <div class=\"mb-3 \">
                            <label >Rapport de visite</label>
                            {% if dossier.rapport %}
                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Visite réalisée et Rapport élaboré\">
                            {% else %}
                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non finalisé\">
                                {% set nb_nok = 0 %}
                                {% for pt in les_detailverif %}
                                    {% if pt.conclusion is null and not pt.sansobjet %}
                                        {% set nb_nok = nb_nok+1 %}
                                    {% endif %}
                                {% endfor %}
                                {% if nb_nok %}
                                    <div align=\"right\" class=\"text-danger fw-light fs-7\">{{nb_nok}} points de vérification non renseignés</div>
                                {% endif %}
                            {% endif %}
                        </div>
{#                         
                        <div class=\"mb-3 \">
                            <label >Résultat de conformité</label>
                            {% if dossier.attestation %}
                                <input type=\"text\" disabled readonly class=\"bg-success bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Résultat inspection disponile\">
                            {% else %}
                                <input type=\"text\" disabled readonly class=\"bg-success  form-control text-light form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            {% endif %}
                        </div> #}
                    </div>  
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
    {% set demande = dossier.demande %}
    {% set installation = demande.installation %}



<script>

    \$(document).ready(function() {
        for(i=0; i<{{ les_rubrique.count }}; i++) {
            \$(\"#zrub_\"+i).hide();
        }
        {% if step == 1 %}
            for(i=0; i<4; i++) { \$(\"#zrub_\"+i).show(); }
            for(i=4; i<{{ les_rubrique.count }}; i++) { \$(\"#zrub_\"+i).hide(); }
            \$(\"#form_barrette\").attr(\"required\", false);
            \$(\"#form_mesurePriseTerre\").attr(\"required\", false);
        {% else %}
            for(i=0; i<4; i++) { \$(\"#zrub_\"+i).hide(); }
            for(i=4; i<{{ les_rubrique.count }}; i++) { \$(\"#zrub_\"+i).show(); }
            \$(\"#form_barrette\").attr(\"required\", \"required\");
            \$(\"#form_mesurePriseTerre\").attr(\"required\", \"required\" );
        {% endif %}

        \$(\"#form_longitude\").attr(\"required\", \"required\");
        \$(\"#form_latitude\").attr(\"required\", \"required\");

        {# 
            \$(\"#form_longitude\").attr(\"disabled\", \"disabled\");
            \$(\"#form_latitude\").attr(\"disabled\", \"disabled\"); 
        #}

        \$(\"#form_longitude\").addClass(\"bg-warning bg-opacity-25 text-danger fw-bold\");
        \$(\"#form_latitude\").addClass(\"bg-warning bg-opacity-25 text-danger fw-bold\");

        \$(\"#z_habitation\").hide();

        

        \$(\"#next_rub\").on('click', function() { \$(\"#form_stay\").val(1); \$(\"#form_step\").val(({{step}}+1)); });  
        \$(\"#prev_rub\").on('click', function() { \$(\"#form_stay\").val(1); \$(\"#form_step\").val(({{step}}-1)); });  
        \$(\"#btn_save\").on('click', function() { 
            \$(\"#form_stay\").val(0); \$(\"#form_step\").val(1); 
        });  
        \$(\"#next_rub0\").on('click', function() { \$(\"#form_stay\").val(1); \$(\"#form_step\").val(({{step}}+1)); });  
        \$(\"#prev_rub0\").on('click', function() { \$(\"#form_stay\").val(1); \$(\"#form_step\").val(({{step}}-1)); });  
        \$(\"#btn_save0\").on('click', function() { 
            \$(\"#form_stay\").val(0); \$(\"#form_step\").val(1); 
        });  
        
        \$(\"#btn_submit0\").on('click', function() { \$(\"#btn_submit\").click(); return false });  
        \$(\"#btn_submit1\").on('click', function() { \$(\"#btn_submit\").click(); return false });  

        \$(\"#btn_submit\").on('click', function() { 
            \$(\"#form_stay\").val(0); \$(\"#form_step\").val(1); 
            ok_valid=1; nb_non_conclusion=0; mess_nok=\"\";
            \$('.vconclusion').each(function(){
                if(\$(this).val()==\"\") {
                    t_idd=\$(this).attr(\"id\").split(\"_\"); 
                    idd=t_idd[2];
                    v_so=\$(\"#form_sansobjet_\"+idd).val();
                    if(v_so==\"0\") {
                        ok_valid=0; mess_nok+=\" \"+\$(\"#code_pv_\"+idd).html();
                    }
                }
            });
            if(ok_valid==\"0\") {
                alert(\"Tous les points de vérification n'ont pas été renseignés ! Revoir les points: \"+mess_nok);
                return false;
            } else {
                \$(\"#form_valid\").val(1);
            }

        });  

        {% for pt in les_detailverif %}
            \$(\"#label_chk2_{{ pt.id }}\").on('click', function(){ \$(\"#chk2_{{ pt.id }}\").click(); });  
            \$(\"#label_chk1_{{ pt.id }}\").on('click', function(){ \$(\"#chk1_{{ pt.id }}\").click(); });  
            \$(\"#label_chk0_{{ pt.id }}\").on('click', function(){ \$(\"#chk0_{{ pt.id }}\").click(); });  

            \$(\"#chk2_{{ pt.id }}\").on('click', function(){ active_chk({{ pt.id }}, 2); });  
            \$(\"#chk0_{{ pt.id }}\").on('click', function(){ active_chk({{ pt.id }}, 0); });  
            \$(\"#chk1_{{ pt.id }}\").on('click', function(){ active_chk({{ pt.id }}, 1); });  
            \$(\"#btn_unactive_{{ pt.id }}\").on('click', function(){ unactive_chk({{ pt.id }}); });  
            
            val_inp = \$(\"#form_conclusion_{{ pt.id }}\"); 
            val_so = \$(\"#form_sansobjet_{{ pt.id }}\"); 
            comment_inp = \$(\"#form_comment_{{ pt.id }}\"); 
            pnc_inp = \$(\"#form_pnc_{{ pt.id }}\"); 
            z_pnc_inp = \$(\"#z_form_pnc_{{ pt.id }}\"); 
            
            \$(\"#form_pnc_{{ pt.id }}\").hide();
            \$(\"#z_form_pnc_{{ pt.id }}\").hide();
            \$(\"#form_comment_{{ pt.id }}\").hide();
            \$(\"#btn_unactive_{{ pt.id }}\").hide();

            {% if pt.sansobjet %} 
                comment_inp.hide(); pnc_inp.hide(); 
                z_pnc_inp.hide(); pnc_inp.attr(\"required\", false);
                \$(\"#btn_unactive_{{ pt.id }}\").show();

                \$(\"#chk2_{{ pt.id }}\").attr(\"fill\", \"green\");
                \$(\"#chk2_{{ pt.id }}\").html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#check-square-fill\"></use>');
                pnc_inp.hide(); comment_inp.hide(); val_inp.val(\"\"); val_so.val(\"1\");
                z_pnc_inp.hide(); pnc_inp.attr(\"required\", false);
            {% endif %}
            {% if pt.conclusion == '1' %} 
                comment_inp.hide(); pnc_inp.hide(); 
                z_pnc_inp.hide(); pnc_inp.attr(\"required\", false);
                \$(\"#btn_unactive_{{ pt.id }}\").show();

                \$(\"#chk0_{{ pt.id }}\").attr(\"fill\", \"green\");
                \$(\"#chk0_{{ pt.id }}\").html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#check-square-fill\"></use>');
                pnc_inp.hide(); comment_inp.hide(); val_inp.val(\"1\"); val_so.val(\"0\");
                z_pnc_inp.hide(); pnc_inp.attr(\"required\", false);
            {% endif %}
            {% if pt.conclusion == '0' %} 
                \$(\"#form_comment_{{ pt.id }}\").show();
                \$(\"#btn_unactive_{{ pt.id }}\").show();

                \$(\"#chk1_{{ pt.id }}\").attr(\"fill\", \"green\");
                \$(\"#chk1_{{ pt.id }}\").html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#check-square-fill\"></use>');
                pnc_inp.show();comment_inp.show(); val_inp.val(\"0\"); val_so.val(\"0\");
                z_pnc_inp.show(); pnc_inp.attr(\"required\", \"required\");
            {% endif %}
            
        {% endfor %}

        function active_chk(id, val) {
            val_inp = \$(\"#form_conclusion_\"+id); 
            val_so = \$(\"#form_sansobjet_\"+id); 
            comment_inp = \$(\"#form_comment_\"+id); 
            pnc_inp = \$(\"#form_pnc_\"+id); 
            z_pnc_inp = \$(\"#z_form_pnc_\"+id); 
            el=\$(\"#chk\"+val+\"_\"+id);
            
            \$(\"#chk2_\"+id).html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#square\"></use>');
            \$(\"#chk2_\"+id).attr(\"fill\", \"gray\");

            \$(\"#chk0_\"+id).html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#square\"></use>');
            \$(\"#chk0_\"+id).attr(\"fill\", \"gray\");

            \$(\"#chk1_\"+id).html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#square\"></use>');
            \$(\"#chk1_\"+id).attr(\"fill\", \"gray\");


            el.attr(\"fill\", \"green\");
            el.html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#check-square-fill\"></use>');
            if(val==2) { 
                comment_inp.hide(); comment_inp.val(\"\"); 
                pnc_inp.hide(); pnc_inp.val(\"\"); 
                z_pnc_inp.hide(); pnc_inp.attr(\"required\", false);
            } 
            if(val==0) { 
                comment_inp.hide(); comment_inp.val(\"\"); 
                pnc_inp.hide(); pnc_inp.val(\"\"); 
                z_pnc_inp.hide(); pnc_inp.attr(\"required\", false);
            } 
            if(val==1) { 
                comment_inp.show(); 
                pnc_inp.show(); 
                z_pnc_inp.show(); pnc_inp.attr(\"required\", \"required\");                
            }
            if(val==0) { val_inp.val(1); val_so.val(0); } 
            if(val==1) { val_inp.val(0); val_so.val(0); }
            if(val==2) { val_inp.val(\"\"); val_so.val(1); }
            


            \$(\"#btn_unactive_\"+id).show();
        }

        function unactive_chk(id) {
            \$(\"#chk2_\"+id).html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#square\"></use>');
            \$(\"#chk2_\"+id).attr(\"fill\", \"gray\");

            \$(\"#chk0_\"+id).html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#square\"></use>');
            \$(\"#chk0_\"+id).attr(\"fill\", \"gray\");

            \$(\"#chk1_\"+id).html('<use xlink:href=\"/assets/img/bootstrap-icons.svg#square\"></use>');
            \$(\"#chk1_\"+id).attr(\"fill\", \"gray\");

            val_inp = \$(\"#form_conclusion_\"+id); 
            val_so = \$(\"#form_sansobjet_\"+id); 
            val_inp.val(\"\"); val_so.val(0);

            \$(\"#btn_unactive_\"+id).hide();

            val_inp = \$(\"#form_conclusion_\"+id); 
            val_so = \$(\"#form_sansobjet_\"+id); 
            pnc_inp = \$(\"#form_pnc_\"+id); 
            z_pnc_inp = \$(\"#z_form_pnc_\"+id); 
            comment_inp = \$(\"#form_comment_\"+id); 
            pnc_inp = \$(\"#form_pnc_\"+id); 
            val_so.val(\"0\"); val_inp.val(\"\"); comment_inp.val(\"\"); comment_inp.hide();
            pnc_inp.val(\"\"); pnc_inp.hide();
            z_pnc_inp.hide(); pnc_inp.attr(\"required\", false);
        }

        
        \$(\"#find_btn\").click(function () { //user clicks button
            if (\"geolocation\" in navigator){ //check geolocation available 
                //try to get user current location using getCurrentPosition() method
                navigator.geolocation.getCurrentPosition(function(position){ 
                        \$(\"#form_latitude\").val(position.coords.latitude)
                        \$(\"#form_longitude\").val(position.coords.longitude)
                    });
            }else{
                console.log(\"Browser doesn't support geolocation!\");
            }
            return false;
        });

        \$('.z_pj1').hide(); \$('.z_pj2').hide(); \$('.z_pj3').hide(); \$('.z_pj4').hide(); 

        {% if not installation.PJPhoto1 %} \$('.z_pj1').show(); {% endif %}
        {% if not installation.PJPhoto2 %} \$('.z_pj2').show(); {% endif %}
        {% if not installation.PJPhoto3 %} \$('.z_pj3').show(); {% endif %}
        {% if not installation.PJPhoto4 %} \$('.z_pj4').show(); {% endif %}

    {% if step == 2 %}

        var signelectricien = \$('#signelectricien').signature({syncField: '#form_sign_electricien', syncFormat: 'PNG'});
        var signcontroleur = \$('#signcontroleur').signature({syncField: '#form_sign_controleur', syncFormat: 'PNG'});

        {% if dossier.visiteCourante.signelectricien %}
            \$(\".bloc_sign1\").hide(); 
            \$(\"#modifsign1\").click(function(){ 
                \$(\".bloc_sign1\").toggle();
            })
        {% endif %}
        {% if dossier.visiteCourante.signcontroleur %}
            \$(\".bloc_sign2\").hide();
            \$(\"#modifsign2\").click(function(){ 
                \$(\".bloc_sign2\").toggle();
            })
        {% endif %}
        \$(\"#form_sign_electricien\").hide(); \$(\"#form_sign_controleur\").hide();
        
            \$('#clear2').click(function() {
                e.preventDefault();
                signelectricien.signature('clear');
                \$(\"#form_sign_electricien\").val('');
            });
            \$('#clear1').click(function() {
                e.preventDefault();
                signcontroleur.signature('clear');
                \$(\"#form_sign_controleur\").val('');
            });

    {% endif %}
    });

function getBase64Image(img) {
  var canvas = document.createElement(\"canvas\");
  canvas.width = img.width;
  canvas.height = img.height;
  var ctx = canvas.getContext(\"2d\");
  ctx.drawImage(img, 0, 0);
  var dataURL = canvas.toDataURL(\"image/png\");
  return dataURL.replace(/^data:image\\/(png|jpg);base64,/, \"\");
}

</script>


<!-- jSignature -->
{# 
<script src=\"{{ asset('assets/js/jSignature.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/modernizr.js') }}\"></script>
<!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"{{ asset('flashcanvas.js') }}\"></script>
<![endif]--> 
#}

<script src=\"{{ asset('assets/js/signature_pad.umd.js') }}\"></script>
<script src=\"{{ asset('assets/js/app.js') }}\"></script>

{% endblock %}
", "dossier/rapporter_new.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/rapporter_new.html.twig");
    }
}
