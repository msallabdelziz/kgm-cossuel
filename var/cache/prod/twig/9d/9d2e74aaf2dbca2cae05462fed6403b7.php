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

/* dossier/show2.html.twig */
class __TwigTemplate_14a1b6e7748cf7388ad85fb45812b4ca extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dossier/show2.html.twig", 1);
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

    #paiement_demande .card {
        background-color:#fff;
        box-shadow: 0 0 0 2px white, 0 0 0 3px #000
    }
    
    </style>
    ";
        // line 26
        $context["paiement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 26), "paiement", [], "any", false, false, false, 26);
        // line 27
        echo "    ";
        $context["action_demande"] = "Consultation ";
        // line 28
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "affecte", [], "any", false, false, false, 28)) {
            // line 29
            echo "        ";
            $context["action_demande"] = "Affectation";
            // line 30
            echo "        ";
            $context["link_liste"] = "app_dossier_affectation";
            // line 31
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                // line 32
                echo "            ";
                $context["link_action"] = "app_dossier_affecter";
                // line 33
                echo "        ";
            }
            // line 34
            echo "        ";
            $context["libelle_action"] = "Affecter à un contrôleur";
            // line 35
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visite", [], "any", false, false, false, 35)) {
            // line 36
            echo "        ";
            $context["action_demande"] = "Planification Visite";
            // line 37
            echo "        ";
            $context["link_liste"] = "app_dossier_visite";
            // line 38
            echo "        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT"))) {
                // line 39
                echo "            ";
                $context["link_action"] = "app_dossier_visiter";
                // line 40
                echo "        ";
            }
            // line 41
            echo "        ";
            $context["libelle_action"] = "Planifier une visite";
            // line 42
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 42)) {
            // line 43
            echo "        ";
            $context["action_demande"] = "Rapport de Visite";
            // line 44
            echo "        ";
            $context["link_liste"] = "app_dossier_rapport";
            // line 45
            echo "        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT"))) {
                // line 46
                echo "            ";
                $context["link_action"] = "app_dossier_rapporter";
                // line 47
                echo "        ";
            }
            // line 48
            echo "        ";
            $context["libelle_action"] = "Elaborer le rapport de visite";
            // line 49
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 49)) {
            // line 50
            echo "        ";
            $context["action_demande"] = "Résultat Inspection";
            // line 51
            echo "        ";
            $context["link_liste"] = "app_dossier_attestation";
            // line 52
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                // line 53
                echo "            ";
                $context["link_action"] = "app_dossier_attester";
                // line 54
                echo "        ";
            }
            // line 55
            echo "        ";
            $context["libelle_action"] = "Valider Rapport Inspection";
            // line 56
            echo "    ";
        }
        // line 57
        echo "
    ";
        // line 58
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 58);
        // line 59
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 59);
        // line 60
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 60), "get", [0 => "page_liste_dossier"], "method", true, true, false, 60) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 60), "get", [0 => "page_liste_dossier"], "method", false, false, false, 60))) {
            // line 61
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 61), "get", [0 => "page_liste_dossier"], "method", false, false, false, 61);
            // line 62
            echo "    ";
        }
        // line 63
        echo "    
    ";
        // line 64
        $context["link_liste"] = "app_dossier_show";
        // line 65
        echo "
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 69
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
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                </svg>
                                Détails du dossier
                            </div>
                            <div class=\"col\" align=\"right\">
                                <span class=\"text-success\">[
                                ";
        // line 85
        if ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 85)) {
            // line 86
            echo "                                    En attente de 
                                ";
        }
        // line 88
        echo "                                ";
        if ((( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "Etat", [], "any", false, false, false, 88) == "Affectation") && ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "Etat", [], "any", false, false, false, 88) == "Attestation"))) {
            // line 89
            echo "                                    En attente d' 
                                ";
        }
        // line 91
        echo "                                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "Etat", [], "any", false, false, false, 91), "html", null, true);
        echo " ]</span>
                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                <div align=\"left\" class=\"float-start border border-warning shadow p-2 fs-8 mt-2 fw-light\">
                    <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 102), "nomComplet", [], "any", false, false, false, 102), "html", null, true);
        echo "</span></div>
                    <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">";
        // line 103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 103), "dateRapporte", [], "any", false, false, false, 103), "d-m-Y à H:i:s"), "html", null, true);
        echo "</span></div>
                </div>
                <div align=\"right\">
                ";
        // line 106
        if ((twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 106) &&  !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 106))) {
            // line 107
            echo "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                // line 108
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_rejetrapport", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-danger btn my-3\">Rejeter le rapport</a>
                    <a href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_attester", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 109)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-primary btn my-3\">";
                echo twig_escape_filter($this->env, ($context["libelle_action"] ?? null), "html", null, true);
                echo "</a>
                    ";
            }
            // line 111
            echo "                ";
        }
        // line 112
        echo "                    <a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_rapportpdf", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 112)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Rapport</a>
                    <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link_liste"] ?? null), ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 113)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour</a>
                </div>
                <fieldset id=\"synthese_demande\">
                    ";
        // line 116
        if ((twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visite", [], "any", false, false, false, 116) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 116), "rejetRapport", [], "any", false, false, false, 116))) {
            // line 117
            echo "                        <div class=\"alert alert-danger py-2 fs-6\"><span class=\"text-danger\">Rapport rejeté:  </span> <span class=\"fs-7\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 117), "motifRejetRapport", [], "any", false, false, false, 117), "html", null, true);
            echo "</span></div>
                    ";
        }
        // line 119
        echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif ";
        // line 120
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandecourante", [], "any", false, false, false, 120) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandecourante", [], "any", false, false, false, 120), "numeroPassage", [], "any", false, false, false, 120) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
        }
        echo "</h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Numéro Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 125), "demandeCourante", [], "any", false, false, false, 125), "numero", [], "any", false, false, false, 125), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 129), "demandeCourante", [], "any", false, false, false, 129), "dateCreation", [], "any", false, false, false, 129), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 133), "demandeCourante", [], "any", false, false, false, 133), "puissance", [], "any", false, false, false, 133), "html", null, true);
        echo " kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 137), "demandeCourante", [], "any", false, false, false, 137), "cout", [], "any", false, false, false, 137), "html", null, true);
        echo " FCFA\">
                            </div>
                        ";
        // line 139
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 139)) {
            // line 140
            echo "                            <div class=\"col-lg-3\">
                                <label >Latitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "lattitude", [], "any", false, false, false, 142), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Longitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "longitude", [], "any", false, false, false, 146), "html", null, true);
            echo "\">
                            </div>
                        ";
        }
        // line 149
        echo "                        </div>  
                    </div>

                    <div class=\"container mt-4 mx-0\">
                        <div class=\"row\">
                            <div>
                        ";
        // line 155
        $context["rub"] = "";
        // line 156
        echo "                        ";
        $context["ix"] = 0;
        // line 157
        echo "                        ";
        $context["les_detailverif"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 157), "detailVerification", [], "any", false, false, false, 157);
        // line 158
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_detailverif"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
            // line 159
            echo "                                ";
            if ((($context["rub"] ?? null) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 159), "rubrique", [], "any", false, false, false, 159), "id", [], "any", false, false, false, 159))) {
                // line 160
                echo "                                    ";
                if (($context["rub"] ?? null)) {
                    // line 161
                    echo "                                        </div>
                                    ";
                }
                // line 163
                echo "                                    <div id=\"zrub_";
                echo twig_escape_filter($this->env, ($context["ix"] ?? null), "html", null, true);
                echo "\">
                                        <h5 class=\"p-2 bg-dark text-light shadow border-bottom\"> ";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 164), "rubrique", [], "any", false, false, false, 164), "numero", [], "any", false, false, false, 164), "html", null, true);
                echo "- ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 164), "rubrique", [], "any", false, false, false, 164), "libelle", [], "any", false, false, false, 164), "html", null, true);
                echo "</h5>
                                    ";
                // line 165
                $context["rub"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 165), "rubrique", [], "any", false, false, false, 165), "id", [], "any", false, false, false, 165);
                // line 166
                echo "                                    ";
                $context["ix"] = (($context["ix"] ?? null) + 1);
                // line 167
                echo "                                ";
            }
            // line 168
            echo "                                <div class=\"shadow p-4 pt-2 mb-3\">
                                    <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                        <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                            <use xlink:href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
            echo "\"></use>
                                        </svg> ";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 172), "objetVerification", [], "any", false, false, false, 172), "html", null, true);
            echo "
                                        <div class=\"float-end fw-bold\">
                                        ";
            // line 174
            if (twig_get_attribute($this->env, $this->source, $context["pt"], "sansobjet", [], "any", false, false, false, 174)) {
                // line 175
                echo "                                                <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"black\">
                                                    <use xlink:href=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x-octagon-fill"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                Sans Objet
                                        ";
            } else {
                // line 180
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["pt"], "conclusion", [], "any", false, false, false, 180)) {
                    // line 181
                    echo "                                                    <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"green\">
                                                        <use xlink:href=\"";
                    // line 182
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check"), "html", null, true);
                    echo "\"></use>
                                                    </svg>
                                                    <span class=\"text-success\">";
                    // line 184
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 184), "libelleConclusion1", [], "any", false, false, false, 184), "html", null, true);
                    echo "</span>
                                            ";
                } else {
                    // line 186
                    echo "                                                    <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"red\">
                                                        <use xlink:href=\"";
                    // line 187
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x"), "html", null, true);
                    echo "\"></use>
                                                    </svg>
                                                    <span class=\"text-danger\">";
                    // line 189
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 189), "libelleConclusion2", [], "any", false, false, false, 189), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 191
                echo "                                        ";
            }
            // line 192
            echo "                                        </div>
                                    </div>
                                        ";
            // line 194
            if (( !twig_get_attribute($this->env, $this->source, $context["pt"], "conclusion", [], "any", false, false, false, 194) &&  !twig_get_attribute($this->env, $this->source, $context["pt"], "sansobjet", [], "any", false, false, false, 194))) {
                // line 195
                echo "                                                <div class=\"fw-light ms-4 fs-8\">
                                                Commentaire: <span class=\"text-danger\">";
                // line 196
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "commentaire", [], "any", false, false, false, 196), "html", null, true);
                echo "</span>
                                                </div>
                                        ";
            }
            // line 199
            echo "                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "
                                <div>
                                    <h5 class=\"p-2 bg-dark text-light shadow border-bottom\">Tableau 2: Mesures des prises de terre </h5>
                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Mesures des prises de terre
                                                <div class=\"float-end fw-bold\">
                                                </div>
                                            </div>
                                            <div class=\"fw-light ms-4 fs-7\">
                                                <span class=\"text-dark\">";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 214), "mesurePriseTerre", [], "any", false, false, false, 214), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Barrette
                                                <div class=\"float-end fw-bold\">
                                                </div>
                                            </div>
                                            <div class=\"fw-light ms-4 fs-7\">
                                                <span class=\"text-dark\">";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 226), "barrette", [], "any", false, false, false, 226), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h5 class=\"p-2 bg-dark text-light shadow border-bottom\">Autres observations </h5>
                                    <div class=\"shadow p-4 pt-2 mb-3\">
                                        <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                            <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                <use xlink:href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                            </svg> Commentaire sur l'inspection
                                            <div class=\"float-end fw-bold\">
                                            </div>
                                        </div>
                                        <div class=\"fw-light ms-4 fs-8\">
                                            <span class=\"text-danger\">";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 243), "commentaire2", [], "any", false, false, false, 243), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 1
                                                <div class=\"\">
                                                ";
        // line 254
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto1", [], "any", false, false, false, 254)) {
            // line 255
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto1", [], "any", false, false, false, 255), "fichier", [], "any", false, false, false, 255))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 257
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 2
                                                <div class=\"\">
                                                ";
        // line 266
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto2", [], "any", false, false, false, 266)) {
            // line 267
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto2", [], "any", false, false, false, 267), "fichier", [], "any", false, false, false, 267))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 269
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 3
                                                <div class=\"\">
                                                ";
        // line 278
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto3", [], "any", false, false, false, 278)) {
            // line 279
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto3", [], "any", false, false, false, 279), "fichier", [], "any", false, false, false, 279))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 281
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 4
                                                <div class=\"\">
                                                ";
        // line 290
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto4", [], "any", false, false, false, 290)) {
            // line 291
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto4", [], "any", false, false, false, 291), "fichier", [], "any", false, false, false, 291))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 293
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Signature Controleur
                                                <div class=\"\">
                                                ";
        // line 305
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 305), "signcontroleur", [], "any", false, false, false, 305)) {
            // line 306
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 306), "signcontroleur", [], "any", false, false, false, 306), "fichier", [], "any", false, false, false, 306))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 308
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Signature Electricien
                                                <div class=\"\">
                                                ";
        // line 317
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 317), "signelectricien", [], "any", false, false, false, 317)) {
            // line 318
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 318), "signelectricien", [], "any", false, false, false, 318), "fichier", [], "any", false, false, false, 318))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 320
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2 priority-3\" id=\"paiement_demande\">
                <div align=\"right\">
                    <a href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link_liste"] ?? null), ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 334)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour</a>
                </div>                                
                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Traitement du dossier
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_histo", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 339)]), "html", null, true);
        echo "\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 340
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
        // line 349
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 349), "numero", [], "any", false, false, false, 349), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Date création dossier</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-success form-control py-0 fw-bold fs-6\" value=\"";
        // line 355
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "dateCreation", [], "any", false, false, false, 355), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" class=\"fs-7\" >Usage</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fw-bold fs-6\" value=\"";
        // line 361
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 361), "installation", [], "any", false, false, false, 361), "usages", [], "any", false, false, false, 361), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Puissance</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fs-6\" value=\"";
        // line 367
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 367), "puissance", [], "any", false, false, false, 367), "html", null, true);
        echo " kW\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 373
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 373), "installation", [], "any", false, false, false, 373), "localite", [], "any", false, false, false, 373), "nom", [], "any", false, false, false, 373), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Agence</label>
                                <input type=\"text\" disabled readonly class=\"form-control fw-bold text-black form-control py-0 fs-6\" value=\"";
        // line 379
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 379), "installation", [], "any", false, false, false, 379), "localite", [], "any", false, false, false, 379), "agence", [], "any", false, false, false, 379)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 379), "installation", [], "any", false, false, false, 379), "localite", [], "any", false, false, false, 379), "agence", [], "any", false, false, false, 379), "code", [], "any", false, false, false, 379), "html", null, true);
        } else {
            echo " - ";
        }
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-1\">
                            <label class=\"fs-7\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 384
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 384), "installation", [], "any", false, false, false, 384), "adresse", [], "any", false, false, false, 384), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 389
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 389), "installation", [], "any", false, false, false, 389), "electricien", [], "any", false, false, false, 389), "nom", [], "any", false, false, false, 389), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 389), "installation", [], "any", false, false, false, 389), "electricien", [], "any", false, false, false, 389), "prenom", [], "any", false, false, false, 389), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Tél Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control fw-bold py-0 fs-6\" value=\"";
        // line 395
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 395), "installation", [], "any", false, false, false, 395), "electricien", [], "any", false, false, false, 395), "telephone", [], "any", false, false, false, 395), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <hr class=\"my-2 mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Référent chargé du dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
        // line 401
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "referent", [], "any", false, false, false, 401), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Contrôleur chargé du traitement</label>
                            ";
        // line 405
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 405)) {
            // line 406
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 406), "html", null, true);
            echo "\">
                            ";
        } else {
            // line 408
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 410
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Visite du site pour inspection</label>
                            ";
        // line 413
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visite", [], "any", false, false, false, 413)) {
            // line 414
            echo "                                <div class=\"row\">
                                    <div class=\"col-5\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Planifiée\">
                                    </div>
                                    <div class=\"col-7\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
            // line 419
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 419), "datePlanifie", [], "any", false, false, false, 419), "d-m-Y à H:i"), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"col-12\">
                                        Modèle Rapport d'inspection
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-1 fw-bold fs-6\" value=\"";
            // line 423
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 423), "rapport", [], "any", false, false, false, 423), "libelle", [], "any", false, false, false, 423), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 423), "rapport", [], "any", false, false, false, 423), "PointVerification", [], "any", false, false, false, 423), "count", [], "any", false, false, false, 423), "html", null, true);
            echo " points de vérification\">
                                    </div>
                                </div>
                            ";
        } else {
            // line 427
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 429
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Rapport de visite</label>
                            ";
        // line 432
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 432)) {
            // line 433
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Visite réalisée et Rapport élaboré\">
                            ";
        } else {
            // line 435
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non finalisé\">
                            ";
        }
        // line 437
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Résultat de conformité</label>
                            ";
        // line 440
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 440)) {
            // line 441
            echo "                                <input type=\"text\" disabled readonly class=\"bg-success bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Résultat inspection disponile\">
                            ";
        } else {
            // line 443
            echo "                                <input type=\"text\" disabled readonly class=\"bg-success  form-control text-light form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 445
        echo "                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 453
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 454
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 454);
        // line 455
        echo "    ";
        $context["paiement"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "paiement", [], "any", false, false, false, 455);
        // line 456
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 456);
        // line 457
        echo "<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"";
        // line 461
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "mode", [], "any", false, false, false, 461), "html", null, true);
        echo "\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

        function showhide_bloc(x) {
            le_bloc=\".bloc_\"+x
            le_btn_bloc=\".btn_bloc_\"+x
            le_titre_bloc=\".titre_bloc_\"+x
            
            if(\$(le_btn_bloc).prop('title')==\"Afficher les détails\") {
                \$(le_bloc).show();
                \$(le_titre_bloc).addClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-up"), "html", null, true);
        echo "\"></use></svg>Cacher ...'); 
                \$(le_btn_bloc).prop('title', 'Cacher les détails');
                \$(le_btn_bloc).addClass(\"text-danger\");
                \$(le_btn_bloc).removeClass(\"text-warning\");
            } else {
                \$(le_bloc).hide();
                \$(le_titre_bloc).removeClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
        echo "\"></use></svg>Afficher ...'); 
                \$(le_btn_bloc).prop('title', 'Afficher les détails');
                \$(le_btn_bloc).removeClass(\"text-danger\");
                \$(le_btn_bloc).addClass(\"text-warning\");
            }
        }

    });
</script>
";
    }

    public function getTemplateName()
    {
        return "dossier/show2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  949 => 480,  939 => 473,  924 => 461,  918 => 457,  915 => 456,  912 => 455,  909 => 454,  905 => 453,  895 => 445,  891 => 443,  887 => 441,  885 => 440,  880 => 437,  876 => 435,  872 => 433,  870 => 432,  865 => 429,  861 => 427,  852 => 423,  845 => 419,  838 => 414,  836 => 413,  831 => 410,  827 => 408,  821 => 406,  819 => 405,  812 => 401,  803 => 395,  792 => 389,  784 => 384,  771 => 379,  762 => 373,  753 => 367,  744 => 361,  735 => 355,  726 => 349,  714 => 340,  710 => 339,  702 => 334,  686 => 320,  680 => 318,  678 => 317,  672 => 314,  664 => 308,  658 => 306,  656 => 305,  650 => 302,  639 => 293,  633 => 291,  631 => 290,  625 => 287,  617 => 281,  611 => 279,  609 => 278,  603 => 275,  595 => 269,  589 => 267,  587 => 266,  581 => 263,  573 => 257,  567 => 255,  565 => 254,  559 => 251,  548 => 243,  539 => 237,  525 => 226,  516 => 220,  507 => 214,  498 => 208,  489 => 201,  482 => 199,  476 => 196,  473 => 195,  471 => 194,  467 => 192,  464 => 191,  459 => 189,  454 => 187,  451 => 186,  446 => 184,  441 => 182,  438 => 181,  435 => 180,  428 => 176,  425 => 175,  423 => 174,  418 => 172,  414 => 171,  409 => 168,  406 => 167,  403 => 166,  401 => 165,  395 => 164,  390 => 163,  386 => 161,  383 => 160,  380 => 159,  375 => 158,  372 => 157,  369 => 156,  367 => 155,  359 => 149,  353 => 146,  346 => 142,  342 => 140,  340 => 139,  335 => 137,  328 => 133,  321 => 129,  314 => 125,  304 => 120,  301 => 119,  295 => 117,  293 => 116,  287 => 113,  282 => 112,  279 => 111,  272 => 109,  267 => 108,  264 => 107,  262 => 106,  256 => 103,  252 => 102,  237 => 91,  233 => 89,  230 => 88,  226 => 86,  224 => 85,  215 => 79,  202 => 69,  196 => 65,  194 => 64,  191 => 63,  188 => 62,  185 => 61,  182 => 60,  179 => 59,  177 => 58,  174 => 57,  171 => 56,  168 => 55,  165 => 54,  162 => 53,  159 => 52,  156 => 51,  153 => 50,  150 => 49,  147 => 48,  144 => 47,  141 => 46,  138 => 45,  135 => 44,  132 => 43,  129 => 42,  126 => 41,  123 => 40,  120 => 39,  117 => 38,  114 => 37,  111 => 36,  108 => 35,  105 => 34,  102 => 33,  99 => 32,  96 => 31,  93 => 30,  90 => 29,  87 => 28,  84 => 27,  82 => 26,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/show2.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/show2.html.twig");
    }
}
