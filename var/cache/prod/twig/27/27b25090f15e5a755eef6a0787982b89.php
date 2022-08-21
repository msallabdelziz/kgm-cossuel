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
class __TwigTemplate_81632d6e73607b9d597893d441be50b4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dossier/rapporter_new.html.twig", 1);
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
        if ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "affecte", [], "any", false, false, false, 70)) {
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
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visite", [], "any", false, false, false, 75)) {
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
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 80)) {
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
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 85)) {
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
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 92);
        // line 93
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 93);
        // line 94
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 94), "get", [0 => "page_liste_dossier"], "method", true, true, false, 94) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 94), "get", [0 => "page_liste_dossier"], "method", false, false, false, 94))) {
            // line 95
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 95), "get", [0 => "page_liste_dossier"], "method", false, false, false, 95);
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
        echo twig_escape_filter($this->env, ($context["action_demande"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "Etat", [], "any", false, false, false, 116), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["dossierForm"] ?? null), 'form_start');
        echo "
                
                <div align=\"right\">
                    <a href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link_show"] ?? null), ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 128)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-secondary btn my-3\">Annuler</a>
                    ";
        // line 129
        if ((($context["step"] ?? null) == 2)) {
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "dateVisite", [], "any", false, false, false, 140), 'label');
        echo "
                                ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "dateVisite", [], "any", false, false, false, 141), 'widget');
        echo "
                                ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "dateVisite", [], "any", false, false, false, 142), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "latitude", [], "any", false, false, false, 150), 'label');
        echo "
                                        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "latitude", [], "any", false, false, false, 151), 'widget');
        echo "
                                        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "latitude", [], "any", false, false, false, 152), 'errors');
        echo "
                                        
                                        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "longitude", [], "any", false, false, false, 154), 'label');
        echo "
                                        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "longitude", [], "any", false, false, false, 155), 'widget');
        echo "
                                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "longitude", [], "any", false, false, false, 156), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "habitation", [], "any", false, false, false, 165), 'widget');
        echo "
                                            ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "habitation", [], "any", false, false, false, 166), 'errors');
        echo "
                                        </div>
    
                                    </div>
                        </div>
                    <div class=\"\">
                        <div align=\"right\">
                            ";
        // line 173
        if ((($context["step"] ?? null) == 2)) {
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
        if ((($context["step"] ?? null) == 1)) {
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
        if ((($context["step"] ?? null) == 2)) {
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
        $context['_seq'] = twig_ensure_traversable(($context["les_detailverif"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
            // line 207
            echo "                            ";
            if ((($context["rub"] ?? null) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 207), "rubrique", [], "any", false, false, false, 207), "id", [], "any", false, false, false, 207))) {
                // line 208
                echo "                                ";
                if (($context["rub"] ?? null)) {
                    // line 209
                    echo "                                    </div>
                                ";
                }
                // line 211
                echo "                                <div id=\"zrub_";
                echo twig_escape_filter($this->env, ($context["ix"] ?? null), "html", null, true);
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
                $context["ix"] = (($context["ix"] ?? null) + 1);
                // line 217
                echo "                            ";
            }
            // line 218
            echo "                            <div class=\"shadow p-4 pb-1 pt-2 mb-1\">
                                ";
            // line 219
            $context["inp0"] = twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), ("sansobjet_" . twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 219)), [], "any", false, false, false, 219);
            // line 220
            echo "                                ";
            $context["inp1"] = twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), ("conclusion_" . twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 220)), [], "any", false, false, false, 220);
            // line 221
            echo "                                ";
            $context["inp2"] = twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), ("comment_" . twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 221)), [], "any", false, false, false, 221);
            // line 222
            echo "                                ";
            $context["inp3"] = twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), ("pnc_" . twig_get_attribute($this->env, $this->source, $context["pt"], "id", [], "any", false, false, false, 222)), [], "any", false, false, false, 222);
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["inp0"] ?? null), 'row');
            echo "
                                            ";
            // line 276
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["inp1"] ?? null), 'row');
            echo "
                                        </div>
                                        <div class=\"mt-1 row\">
                                            <div class=\"offset-6 col-6 text-danger\" align=\"left\" id=\"z_";
            // line 279
            echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["inp3"] ?? null), "vars", [], "any", false, false, false, 279)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), "html", null, true);
            echo "\">
                                                ";
            // line 280
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["inp3"] ?? null), 'label');
            echo "
                                                ";
            // line 281
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["inp3"] ?? null), 'widget');
            echo "
                                            </div>
                                        </div>
                                        <div class=\"mt-1\">
                                            ";
            // line 285
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["inp2"] ?? null), 'widget');
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
        if ((($context["step"] ?? null) == 2)) {
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "mesurePriseTerre", [], "any", false, false, false, 299), 'row');
            echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                        ";
            // line 302
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "barrette", [], "any", false, false, false, 302), 'row');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "commentaire2", [], "any", false, false, false, 314), 'row');
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
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto1", [], "any", false, false, false, 327)) {
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
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto1", [], "any", false, false, false, 332), "fichier", [], "any", false, false, false, 332), 0, 10), "html", null, true);
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "pj1", [], "any", false, false, false, 344), 'row');
            echo "
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <label for=\"\">Photo 2</label>
                                        ";
            // line 349
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto2", [], "any", false, false, false, 349)) {
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
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto2", [], "any", false, false, false, 354), "fichier", [], "any", false, false, false, 354), 0, 10), "html", null, true);
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "pj2", [], "any", false, false, false, 366), 'row');
            echo "
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <label for=\"\">Photo 3</label>
                                        ";
            // line 371
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto3", [], "any", false, false, false, 371)) {
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
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto3", [], "any", false, false, false, 376), "fichier", [], "any", false, false, false, 376), 0, 10), "html", null, true);
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "pj3", [], "any", false, false, false, 388), 'row');
            echo "
                                    </div>

                                    <div class=\"col-lg-3\">
                                        <label for=\"\">Photo 4</label>
                                        ";
            // line 393
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto4", [], "any", false, false, false, 393)) {
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
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto4", [], "any", false, false, false, 398), "fichier", [], "any", false, false, false, 398), 0, 10), "html", null, true);
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "pj4", [], "any", false, false, false, 410), 'row');
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 423), "nomComplet", [], "any", false, false, false, 423), "html", null, true);
            echo "</span></div>
                                            ";
            // line 424
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 424), "signcontroleur", [], "any", false, false, false, 424)) {
                // line 425
                echo "                                                <div class=\"mb-4\">
                                                    <img width=\"400\" height=\"100\" id=\"img_signcontroleur\" src=\"";
                // line 426
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 426), "signcontroleur", [], "any", false, false, false, 426), "fichier", [], "any", false, false, false, 426))), "html", null, true);
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "sign_controleur", [], "any", false, false, false, 438), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-lg-6\">
                                            <div><label class=\"\" for=\"\">Signature Electricien:</label><span class=\"fw-light text-dark\">";
            // line 441
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 441), "nomComplet", [], "any", false, false, false, 441), "html", null, true);
            echo "</span></div>
                                            ";
            // line 442
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 442), "signelectricien", [], "any", false, false, false, 442)) {
                // line 443
                echo "                                                <div class=\"mb-4\">
                                                    <img width=\"400\" height=\"100\" id=\"img_signelectricien\" src=\"";
                // line 444
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 444), "signelectricien", [], "any", false, false, false, 444), "fichier", [], "any", false, false, false, 444))), "html", null, true);
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "sign_electricien", [], "any", false, false, false, 456), 'widget');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "mesurePriseTerre", [], "any", false, false, false, 464), 'widget');
            echo "
                            ";
            // line 465
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "barrette", [], "any", false, false, false, 465), 'widget');
            echo "
                            ";
            // line 466
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "pj1", [], "any", false, false, false, 466), 'row');
            echo "
                            ";
            // line 467
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "pj2", [], "any", false, false, false, 467), 'row');
            echo "
                            ";
            // line 468
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "pj3", [], "any", false, false, false, 468), 'row');
            echo "
                            ";
            // line 469
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "pj4", [], "any", false, false, false, 469), 'row');
            echo "
                            ";
            // line 470
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "commentaire2", [], "any", false, false, false, 470), 'row');
            echo "
                            ";
            // line 471
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "sign_electricien", [], "any", false, false, false, 471), 'row');
            echo "
                            ";
            // line 472
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "sign_controleur", [], "any", false, false, false, 472), 'row');
            echo "
                            </div>
                        ";
        }
        // line 475
        echo "                        </div>
                        <div align=\"right\">
                            ";
        // line 477
        if ((($context["step"] ?? null) == 2)) {
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
        if ((($context["step"] ?? null) == 1)) {
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
        if ((($context["step"] ?? null) == 2)) {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["dossierForm"] ?? null), 'form_end');
        echo "
            </div>

            <div class=\"col-lg-4 mb-2 priority-5\" id=\"paiement_demande\">
                <div align=\"right\">
                    <a target=\"_blank\" href=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 517), "id", [], "any", false, false, false, 517)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Demande</a>
                    <a href=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link_liste"] ?? null), ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 518)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour à la liste</a>
                </div>                                
                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Traitement du dossier
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_histo", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 523)]), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 533), "numero", [], "any", false, false, false, 533), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Date création dossier</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-success form-control py-0 fw-bold fs-6\" value=\"";
        // line 539
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "dateCreation", [], "any", false, false, false, 539), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" class=\"fs-7\" >Usage</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fw-bold fs-6\" value=\"";
        // line 545
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 545), "installation", [], "any", false, false, false, 545), "usages", [], "any", false, false, false, 545), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Puissance</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fs-6\" value=\"";
        // line 551
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 551), "puissance", [], "any", false, false, false, 551), "html", null, true);
        echo " kW\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 557
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 557), "installation", [], "any", false, false, false, 557), "localite", [], "any", false, false, false, 557), "nom", [], "any", false, false, false, 557), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Agence</label>
                                <input type=\"text\" disabled readonly class=\"form-control fw-bold text-black form-control py-0 fs-6\" value=\"";
        // line 563
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 563), "installation", [], "any", false, false, false, 563), "localite", [], "any", false, false, false, 563), "agence", [], "any", false, false, false, 563)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 563), "installation", [], "any", false, false, false, 563), "localite", [], "any", false, false, false, 563), "agence", [], "any", false, false, false, 563), "code", [], "any", false, false, false, 563), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 568), "installation", [], "any", false, false, false, 568), "adresse", [], "any", false, false, false, 568), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 573
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 573), "installation", [], "any", false, false, false, 573), "electricien", [], "any", false, false, false, 573), "nom", [], "any", false, false, false, 573), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 573), "installation", [], "any", false, false, false, 573), "electricien", [], "any", false, false, false, 573), "prenom", [], "any", false, false, false, 573), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Tél Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control fw-bold py-0 fs-6\" value=\"";
        // line 579
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 579), "installation", [], "any", false, false, false, 579), "electricien", [], "any", false, false, false, 579), "telephone", [], "any", false, false, false, 579), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <hr class=\"mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Date création dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
        // line 585
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "dateCreation", [], "any", false, false, false, 585), "d-m-Y"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Référent chargé du dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
        // line 589
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "referent", [], "any", false, false, false, 589), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Contrôleur chargé du traitement</label>
                            ";
        // line 593
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 593)) {
            // line 594
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 594), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visite", [], "any", false, false, false, 601)) {
            // line 602
            echo "                            <div class=\"row\">
                                <div class=\"col-5\">
                                    <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Planifiée\">
                                </div>
                                <div class=\"col-7\">
                                    <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
            // line 607
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 607), "datePlanifie", [], "any", false, false, false, 607), "d-m-Y à H:i"), "html", null, true);
            echo "\">
                                </div>
                                <div class=\"col-12\">
                                    Modèle Rapport d'inspection
                                    <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-1 fw-bold fs-6\" value=\"";
            // line 611
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 611), "rapport", [], "any", false, false, false, 611), "libelle", [], "any", false, false, false, 611), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 611), "rapport", [], "any", false, false, false, 611), "PointVerification", [], "any", false, false, false, 611), "count", [], "any", false, false, false, 611), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 620)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["les_detailverif"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
                // line 626
                echo "                                    ";
                if (((null === twig_get_attribute($this->env, $this->source, $context["pt"], "conclusion", [], "any", false, false, false, 626)) &&  !twig_get_attribute($this->env, $this->source, $context["pt"], "sansobjet", [], "any", false, false, false, 626))) {
                    // line 627
                    echo "                                        ";
                    $context["nb_nok"] = (($context["nb_nok"] ?? null) + 1);
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
            if (($context["nb_nok"] ?? null)) {
                // line 631
                echo "                                    <div align=\"right\" class=\"text-danger fw-light fs-7\">";
                echo twig_escape_filter($this->env, ($context["nb_nok"] ?? null), "html", null, true);
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
    }

    // line 651
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 652
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 652);
        // line 653
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 653);
        // line 654
        echo "


<script>

    \$(document).ready(function() {
        for(i=0; i<";
        // line 660
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_rubrique"] ?? null), "count", [], "any", false, false, false, 660), "html", null, true);
        echo "; i++) {
            \$(\"#zrub_\"+i).hide();
        }
        ";
        // line 663
        if ((($context["step"] ?? null) == 1)) {
            // line 664
            echo "            for(i=0; i<4; i++) { \$(\"#zrub_\"+i).show(); }
            for(i=4; i<";
            // line 665
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_rubrique"] ?? null), "count", [], "any", false, false, false, 665), "html", null, true);
            echo "; i++) { \$(\"#zrub_\"+i).hide(); }
            \$(\"#form_barrette\").attr(\"required\", false);
            \$(\"#form_mesurePriseTerre\").attr(\"required\", false);
        ";
        } else {
            // line 669
            echo "            for(i=0; i<4; i++) { \$(\"#zrub_\"+i).hide(); }
            for(i=4; i<";
            // line 670
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_rubrique"] ?? null), "count", [], "any", false, false, false, 670), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        echo "+1)); });  
        \$(\"#prev_rub\").on('click', function() { \$(\"#form_stay\").val(1); \$(\"#form_step\").val((";
        // line 691
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        echo "-1)); });  
        \$(\"#btn_save\").on('click', function() { 
            \$(\"#form_stay\").val(0); \$(\"#form_step\").val(1); 
        });  
        \$(\"#next_rub0\").on('click', function() { \$(\"#form_stay\").val(1); \$(\"#form_step\").val((";
        // line 695
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        echo "+1)); });  
        \$(\"#prev_rub0\").on('click', function() { \$(\"#form_stay\").val(1); \$(\"#form_step\").val((";
        // line 696
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["les_detailverif"] ?? null));
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
        if ( !twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto1", [], "any", false, false, false, 866)) {
            echo " \$('.z_pj1').show(); ";
        }
        // line 867
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto2", [], "any", false, false, false, 867)) {
            echo " \$('.z_pj2').show(); ";
        }
        // line 868
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto3", [], "any", false, false, false, 868)) {
            echo " \$('.z_pj3').show(); ";
        }
        // line 869
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto4", [], "any", false, false, false, 869)) {
            echo " \$('.z_pj4').show(); ";
        }
        // line 870
        echo "
    ";
        // line 871
        if ((($context["step"] ?? null) == 2)) {
            // line 872
            echo "
        var signelectricien = \$('#signelectricien').signature({syncField: '#form_sign_electricien', syncFormat: 'PNG'});
        var signcontroleur = \$('#signcontroleur').signature({syncField: '#form_sign_controleur', syncFormat: 'PNG'});

        ";
            // line 876
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 876), "signelectricien", [], "any", false, false, false, 876)) {
                // line 877
                echo "            \$(\".bloc_sign1\").hide(); 
            \$(\"#modifsign1\").click(function(){ 
                \$(\".bloc_sign1\").toggle();
            })
        ";
            }
            // line 882
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 882), "signcontroleur", [], "any", false, false, false, 882)) {
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
        return array (  1699 => 927,  1695 => 926,  1692 => 925,  1674 => 902,  1658 => 888,  1651 => 883,  1648 => 882,  1641 => 877,  1639 => 876,  1633 => 872,  1631 => 871,  1628 => 870,  1623 => 869,  1618 => 868,  1613 => 867,  1609 => 866,  1519 => 778,  1512 => 776,  1505 => 772,  1501 => 771,  1496 => 769,  1492 => 768,  1487 => 767,  1480 => 763,  1476 => 762,  1471 => 760,  1464 => 757,  1457 => 753,  1453 => 752,  1448 => 750,  1442 => 747,  1437 => 745,  1433 => 744,  1429 => 743,  1425 => 742,  1420 => 740,  1416 => 739,  1412 => 738,  1408 => 737,  1404 => 736,  1397 => 734,  1391 => 733,  1385 => 732,  1379 => 731,  1372 => 729,  1366 => 728,  1359 => 727,  1355 => 726,  1322 => 696,  1318 => 695,  1311 => 691,  1307 => 690,  1297 => 682,  1291 => 674,  1284 => 670,  1281 => 669,  1274 => 665,  1271 => 664,  1269 => 663,  1263 => 660,  1255 => 654,  1252 => 653,  1249 => 652,  1245 => 651,  1236 => 644,  1233 => 634,  1230 => 633,  1224 => 631,  1221 => 630,  1215 => 629,  1212 => 628,  1209 => 627,  1206 => 626,  1201 => 625,  1199 => 624,  1196 => 623,  1192 => 621,  1190 => 620,  1185 => 617,  1181 => 615,  1172 => 611,  1165 => 607,  1158 => 602,  1156 => 601,  1151 => 598,  1147 => 596,  1141 => 594,  1139 => 593,  1132 => 589,  1125 => 585,  1116 => 579,  1105 => 573,  1097 => 568,  1084 => 563,  1075 => 557,  1066 => 551,  1057 => 545,  1048 => 539,  1039 => 533,  1027 => 524,  1023 => 523,  1015 => 518,  1011 => 517,  1003 => 512,  996 => 507,  992 => 505,  990 => 504,  987 => 503,  980 => 499,  976 => 497,  969 => 493,  965 => 491,  962 => 490,  955 => 486,  951 => 484,  944 => 480,  940 => 478,  938 => 477,  934 => 475,  928 => 472,  924 => 471,  920 => 470,  916 => 469,  912 => 468,  908 => 467,  904 => 466,  900 => 465,  896 => 464,  893 => 463,  883 => 456,  879 => 454,  872 => 449,  864 => 444,  861 => 443,  859 => 442,  855 => 441,  849 => 438,  845 => 436,  838 => 431,  830 => 426,  827 => 425,  825 => 424,  821 => 423,  805 => 410,  801 => 408,  795 => 404,  788 => 400,  783 => 398,  778 => 396,  774 => 394,  772 => 393,  764 => 388,  760 => 386,  754 => 382,  747 => 378,  742 => 376,  737 => 374,  733 => 372,  731 => 371,  723 => 366,  719 => 364,  713 => 360,  706 => 356,  701 => 354,  696 => 352,  692 => 350,  690 => 349,  682 => 344,  678 => 342,  672 => 338,  665 => 334,  660 => 332,  655 => 330,  651 => 328,  649 => 327,  633 => 314,  618 => 302,  612 => 299,  603 => 292,  600 => 291,  588 => 285,  581 => 281,  577 => 280,  573 => 279,  567 => 276,  563 => 275,  553 => 268,  549 => 267,  543 => 264,  538 => 262,  533 => 260,  525 => 255,  521 => 254,  515 => 251,  510 => 249,  505 => 247,  497 => 242,  493 => 241,  485 => 236,  480 => 234,  471 => 228,  462 => 226,  458 => 225,  454 => 223,  451 => 222,  448 => 221,  445 => 220,  443 => 219,  440 => 218,  437 => 217,  434 => 216,  432 => 215,  425 => 213,  419 => 211,  415 => 209,  412 => 208,  409 => 207,  404 => 206,  401 => 205,  399 => 204,  396 => 203,  392 => 201,  390 => 200,  387 => 199,  380 => 195,  376 => 193,  369 => 189,  365 => 187,  362 => 186,  355 => 182,  351 => 180,  344 => 176,  340 => 174,  338 => 173,  328 => 166,  324 => 165,  312 => 156,  308 => 155,  304 => 154,  299 => 152,  295 => 151,  291 => 150,  280 => 142,  276 => 141,  272 => 140,  262 => 132,  258 => 130,  256 => 129,  252 => 128,  246 => 125,  234 => 116,  226 => 111,  213 => 101,  207 => 97,  204 => 96,  201 => 95,  198 => 94,  195 => 93,  193 => 92,  190 => 91,  187 => 90,  184 => 89,  181 => 88,  178 => 87,  175 => 86,  172 => 85,  169 => 84,  166 => 83,  163 => 82,  160 => 81,  157 => 80,  154 => 79,  151 => 78,  148 => 77,  145 => 76,  142 => 75,  139 => 74,  136 => 73,  133 => 72,  130 => 71,  127 => 70,  125 => 69,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/rapporter_new.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/rapporter_new.html.twig");
    }
}
