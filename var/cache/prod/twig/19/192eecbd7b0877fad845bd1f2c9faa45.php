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

/* dossier/attribuer.html.twig */
class __TwigTemplate_dbc720254a0048f63f230caa1661fcec extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dossier/attribuer.html.twig", 1);
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
    
    #validation_dossier .card {
        background-color:#ffc328;
        box-shadow: 0 0 0 2px white, 0 0 0 3px #000
    }
    
    </style>
    ";
        // line 31
        $context["action_demande"] = "Changement Référent";
        // line 32
        echo "    ";
        $context["link_liste"] = "app_dossier_affectation";
        // line 33
        echo "    ";
        $context["link_action"] = "app_dossier_affecter";
        // line 34
        echo "    ";
        $context["libelle_action"] = "Affecter à un contrôleur";
        // line 35
        echo "
    ";
        // line 36
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 36);
        // line 37
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 37);
        // line 38
        echo "    ";
        $context["paiement"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "paiement", [], "any", false, false, false, 38);
        // line 39
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 39), "get", [0 => "page_liste_dossier"], "method", true, true, false, 39) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 39), "get", [0 => "page_liste_dossier"], "method", false, false, false, 39))) {
            // line 40
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 40), "get", [0 => "page_liste_dossier"], "method", false, false, false, 40);
            // line 41
            echo "    ";
        }
        // line 42
        echo "
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 46
        echo twig_escape_filter($this->env, ($context["action_demande"] ?? null), "html", null, true);
        echo " dossier </span>
            </a>
        </header>

        <div class=\"container\">
            <nav class=\"navbar shadow bg-warning border border-dark mt-2 p-0\">
                <div class=\"container-fluid ps-4\">
                        <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                            <div class=\"col\">
                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                </svg>
                                Détails du dossier
                            </div>
                            <div class=\"col\" align=\"right\">
                                <span class=\"text-success\">[En attente de ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "Etat", [], "any", false, false, false, 61), "html", null, true);
        echo "]</span>
                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row pt-4\">
            <div class=\"col-lg-8 mb-2\">
                <fieldset id=\"synthese_demande\">
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif ";
        // line 73
        if ((($context["demande"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "numeroPassage", [], "any", false, false, false, 73) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
        }
        echo "</h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Numéro Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 78), "demandeCourante", [], "any", false, false, false, 78), "numero", [], "any", false, false, false, 78), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 82), "demandeCourante", [], "any", false, false, false, 82), "dateCreation", [], "any", false, false, false, 82), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 86), "demandeCourante", [], "any", false, false, false, 86), "puissance", [], "any", false, false, false, 86), "html", null, true);
        echo " kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 90), "demandeCourante", [], "any", false, false, false, 90), "cout", [], "any", false, false, false, 90), "html", null, true);
        echo " FCFA\">
                            </div>
                        </div>  
                    </div>

                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Situation paiement</h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Statut Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6 text-success\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "etat", [], "any", false, false, false, 101), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Paiement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "datepaiement", [], "any", false, false, false, 105), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Mode paiement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "mode", [], "any", false, false, false, 109), "html", null, true);
        echo "\">
                            </div>
                            ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "reference", [], "any", false, false, false, 111)) {
            // line 112
            echo "                            <div class=\"col-lg-3\">
                                <label >Référence paiement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fs-6\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "reference", [], "any", false, false, false, 114), "html", null, true);
            echo "\">
                            </div>
                            ";
        }
        // line 117
        echo "                        </div>  
                    </div>

                    ";
        // line 121
        echo "                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title text-black titre_bloc_1\">
                        Données de base de la demande
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_1\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
        echo "\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_1\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-8\">
                                <label for=\"form_usage\" >Usage Installation</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 134), "html", null, true);
        echo "\" id=\"form_usage\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 138
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "alimente", [], "any", false, false, false, 138)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_alimente\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_compteur\" >Numéro Compteur</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "compteur", [], "any", false, false, false, 142), "html", null, true);
        echo "\" id=\"form_compteur\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "abonnement", [], "any", false, false, false, 146), "html", null, true);
        echo "\" id=\"form_abonnement\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "grstReseau", [], "any", false, false, false, 150), "html", null, true);
        echo "\" id=\"form_grstReseau\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4\">
                                <label for=\"form_localite\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 155), "html", null, true);
        echo "\" id=\"form_localite\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_adresse\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "adresse", [], "any", false, false, false, 159), "html", null, true);
        echo "\" id=\"form_adresse\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_habitation\" >Complément Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "habitation", [], "any", false, false, false, 163), "html", null, true);
        echo "\" id=\"form_habitation\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_lattitude\" >Latitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "lattitude", [], "any", false, false, false, 167), "html", null, true);
        echo "\" id=\"form_lattitude\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_longitude\" >Longitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "longitude", [], "any", false, false, false, 171), "html", null, true);
        echo "\" id=\"form_longitude\">
                            </div>
                        </div>
                    </div>

                    ";
        // line 177
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 177)) {
            // line 178
            echo "                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title titre_bloc_2\">
                            Caractéristiques du site
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_2\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
            echo "\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_2\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-4\">
                                <label for=\"form_collectif collectif1\" >Bien Collectif ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 191
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "collectif", [], "any", false, false, false, 191)) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "\" id=\"form_collectif\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_nomSite\" >Nom du site</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "nomSite", [], "any", false, false, false, 195), "html", null, true);
            echo "\" id=\"form_nomSite\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_logement\" >Nombre de logements</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "logement", [], "any", false, false, false, 199), "html", null, true);
            echo "\" id=\"form_logement\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-6\">
                                <label for=\"form_typeConstruction\" >Type de construction</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 204), "nom", [], "any", false, false, false, 204), "html", null, true);
            echo "\" id=\"form_typeConstruction\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1\">
                                <label for=\"form_niveau\" >Nombre de niveaux</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "niveau", [], "any", false, false, false, 208), "html", null, true);
            echo "\" id=\"form_niveau\">
                            </div>
                            <div class=\"col-lg-6 typeConstruction3\">
                                <label for=\"form_activite\" >Activités</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "activite", [], "any", false, false, false, 212), "html", null, true);
            echo "\" id=\"form_activite\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                <label for=\"form_priece\" >Nombre de pièces</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "priece", [], "any", false, false, false, 216), "html", null, true);
            echo "\" id=\"form_priece\">
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 221
        echo "
                    ";
        // line 223
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 223)) {
            // line 224
            echo "                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title titre_bloc_3\">
                            Caractéristiques de l'installation
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_3\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
            echo "\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_3\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-6\">
                                <label for=\"form_natureTravaux\" >Nature des travaux</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 237), "html", null, true);
            echo "\" id=\"form_natureTravaux\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf15\" >Neufs_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neuf15", [], "any", false, false, false, 241), "html", null, true);
            echo "\" id=\"form_neufs_15\">
                                <label for=\"form_existant15\" >Existants_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existant15", [], "any", false, false, false, 243), "html", null, true);
            echo "\" id=\"form_existant15\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf25\" >Neufs_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 247
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neuf25", [], "any", false, false, false, 247), "html", null, true);
            echo "\" id=\"form_neuf25\">
                                <label for=\"form_existant25\" >Existants_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existant25", [], "any", false, false, false, 249), "html", null, true);
            echo "\" id=\"form_existant25\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neufAutre\" >Neufs_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 253
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neufAutre", [], "any", false, false, false, 253), "html", null, true);
            echo "\" id=\"form_neufAutre\">
                                <label for=\"form_existantAutre\" >Existants_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existantAutre", [], "any", false, false, false, 255), "html", null, true);
            echo "\" id=\"form_existantAutre\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4 intervenantAutre1\">
                                <label for=\"form_intervenantAutre\" >Autres intervenants ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenantAutre", [], "any", false, false, false, 260), "html", null, true);
            echo "\" id=\"form_intervenantAutre\">
                            </div>
                            <div class=\"col-lg-8 intervenantAutre1\">
                                <label for=\"form_intervenant\" >Intervenants</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 264
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenant", [], "any", false, false, false, 264), "html", null, true);
            echo "\" id=\"form_intervenant\">
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 269
        echo "
                ";
        // line 271
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 271), "electricien", [], "any", false, false, false, 271)) {
            // line 272
            echo "                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title titre_bloc_4\">
                            Informations sur l'électricien
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_4\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 277
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
            echo "\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_4\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Nom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 285), "electricien", [], "any", false, false, false, 285), "nom", [], "any", false, false, false, 285), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 289), "electricien", [], "any", false, false, false, 289), "prenom", [], "any", false, false, false, 289), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 293
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 293), "electricien", [], "any", false, false, false, 293), "localite", [], "any", false, false, false, 293), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 297
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 297), "electricien", [], "any", false, false, false, 297), "adresse", [], "any", false, false, false, 297), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 301
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 301), "electricien", [], "any", false, false, false, 301), "telephone", [], "any", false, false, false, 301), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 305), "electricien", [], "any", false, false, false, 305), "email", [], "any", false, false, false, 305), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 309
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 309), "electricien", [], "any", false, false, false, 309), "typePiece", [], "any", false, false, false, 309), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 313), "electricien", [], "any", false, false, false, 313), "numPiece", [], "any", false, false, false, 313), "html", null, true);
            echo "\">
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 317
        echo "                                

                    ";
        // line 320
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 320)) {
            // line 321
            echo "                    <div class=\"card mb-2 priority-4\">
                        <h2 class=\"fs-title titre_bloc_5\">
                            Informations sur le propriétaire de l'installation
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_5\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 326
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
            echo "\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_5\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Nom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 334
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 334), "nom", [], "any", false, false, false, 334), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 338
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 338), "prenom", [], "any", false, false, false, 338), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 342
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 342), "localite", [], "any", false, false, false, 342), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 346
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 346), "adresse", [], "any", false, false, false, 346), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 350), "telephone", [], "any", false, false, false, 350), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 354), "email", [], "any", false, false, false, 354), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 358
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 358), "typePiece", [], "any", false, false, false, 358), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 362
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 362), "numPiece", [], "any", false, false, false, 362), "html", null, true);
            echo "\">
                            </div>
                        </div>
                    ";
        }
        // line 366
        echo "                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2\" id=\"paiement_demande\">
                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Traitement du dossier
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_histo", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 373)]), "html", null, true);
        echo "\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 374
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
        // line 383
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 383), "numero", [], "any", false, false, false, 383), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Date création dossier</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-success form-control py-0 fw-bold fs-6\" value=\"";
        // line 389
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "dateCreation", [], "any", false, false, false, 389), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" class=\"fs-7\" >Usage</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fw-bold fs-6\" value=\"";
        // line 395
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 395), "installation", [], "any", false, false, false, 395), "usages", [], "any", false, false, false, 395), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Puissance</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fs-6\" value=\"";
        // line 401
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 401), "puissance", [], "any", false, false, false, 401), "html", null, true);
        echo " kW\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 407
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 407), "installation", [], "any", false, false, false, 407), "localite", [], "any", false, false, false, 407), "nom", [], "any", false, false, false, 407), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Agence</label>
                                <input type=\"text\" disabled readonly class=\"form-control fw-bold text-black form-control py-0 fs-6\" value=\"";
        // line 413
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 413), "installation", [], "any", false, false, false, 413), "localite", [], "any", false, false, false, 413), "agence", [], "any", false, false, false, 413)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 413), "installation", [], "any", false, false, false, 413), "localite", [], "any", false, false, false, 413), "agence", [], "any", false, false, false, 413), "code", [], "any", false, false, false, 413), "html", null, true);
        } else {
            echo " - ";
        }
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-1\">
                            <label class=\"fs-7\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 418
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 418), "installation", [], "any", false, false, false, 418), "adresse", [], "any", false, false, false, 418), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 423
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 423), "installation", [], "any", false, false, false, 423), "electricien", [], "any", false, false, false, 423), "nom", [], "any", false, false, false, 423), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 423), "installation", [], "any", false, false, false, 423), "electricien", [], "any", false, false, false, 423), "prenom", [], "any", false, false, false, 423), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Tél Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control fw-bold py-0 fs-6\" value=\"";
        // line 429
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 429), "installation", [], "any", false, false, false, 429), "electricien", [], "any", false, false, false, 429), "telephone", [], "any", false, false, false, 429), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <hr class=\"my-2 mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Référent actuel</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
        // line 435
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "referent", [], "any", false, false, false, 435), "html", null, true);
        echo "\">
                        </div>

                    </div>  
                </div>
                <div id=\"validation_dossier\">
                    ";
        // line 441
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["dossierForm"] ?? null), 'form_start');
        echo "
                    <div class=\"card mb-2 pb-0\">
                        <h2 class=\"fs-title\">Changement de référent du dossier</h2>
                        <div class=\"row\">
                            <hr class=\"mb-3\" />
                            <div class=\"\">
                                ";
        // line 447
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "referent", [], "any", false, false, false, 447), 'label');
        echo "<br />
                                ";
        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "referent", [], "any", false, false, false, 448), 'widget');
        echo "<br />
                            </div>
                            <div class=\"form-error\">
                                ";
        // line 451
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "referent", [], "any", false, false, false, 451), 'errors');
        echo "
                            </div>
                        </div>  
                    </div>
                    </div>
                    <div align=\"right\">
                        <a href=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 457)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-secondary btn my-3\">Annuler</a>
                        <button type=\"submit\" class=\"next action-button btn btn-success btn my-3 ms-2\">Valider le référent</button>
                    </div>                                
                    ";
        // line 460
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["dossierForm"] ?? null), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 467
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 468
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 468);
        // line 469
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 469);
        // line 470
        echo "    ";
        $context["paiement"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "paiement", [], "any", false, false, false, 470);
        // line 471
        echo "<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"";
        // line 475
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "mode", [], "any", false, false, false, 475), "html", null, true);
        echo "\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        if (\"";
        // line 481
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "alimente", [], "any", false, false, false, 481), "html", null, true);
        echo "\" == 1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (\"";
        // line 489
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "collectif", [], "any", false, false, false, 489), "html", null, true);
        echo "\" == 1) {
            \$('.collectif1').show(); \$('.collectif0').hide();
        }
        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        valSel=\"";
        // line 493
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 493), "html", null, true);
        echo "\";
        if (valSel == \"Maison\" || valSel == \"IGH (Immeuble de Grande Hauteur)\") {
            \$('.typeConstruction1').show(); 
        }
        else if (valSel == \"Appartement\" || valSel == \"Foyer Logement\" || valSel == \"Dépendance\") {
            \$('.typeConstruction2').show();
        }
        else if (valSel == \"Etablissement Public\") {
            \$('.typeConstruction3').show(); 
        }

        // Bloc 3
        \$('.intervenantAutre1').hide(); \$('.natureTravaux1').hide();
        valSel=\"";
        // line 506
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenantAutre", [], "any", false, false, false, 506), "html", null, true);
        echo "\";
        if (valSel==\"Oui\") {
            \$('.intervenantAutre1').show(); 
        }
        valSel=\"";
        // line 510
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 510), "html", null, true);
        echo "\";
        if (valSel == \"Rénovation Partielle\") {
            \$('.natureTravaux1').show(); 
        }

        ";
        // line 516
        echo "        \$(\".bloc_2\").hide();
        \$(\".bloc_3\").hide();
        \$(\".bloc_4\").hide();
        \$(\".bloc_5\").hide();

        \$(\".btn_bloc_1\").on('click', function(){ showhide_bloc(1); });  
        \$(\".btn_bloc_2\").on('click', function(){ showhide_bloc(2); });  
        \$(\".btn_bloc_4\").on('click', function(){ showhide_bloc(4); });  
        \$(\".btn_bloc_3\").on('click', function(){ showhide_bloc(3); });  
        \$(\".btn_bloc_5\").on('click', function(){ showhide_bloc(5); });  

        function showhide_bloc(x) {
            le_bloc=\".bloc_\"+x
            le_btn_bloc=\".btn_bloc_\"+x
            le_titre_bloc=\".titre_bloc_\"+x
            
            if(\$(le_btn_bloc).prop('title')==\"Afficher les détails\") {
                \$(le_bloc).show();
                \$(le_titre_bloc).addClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-up"), "html", null, true);
        echo "\"></use></svg>Cacher ...'); 
                \$(le_btn_bloc).prop('title', 'Cacher les détails');
                \$(le_btn_bloc).addClass(\"text-danger\");
                \$(le_btn_bloc).removeClass(\"text-warning\");
            } else {
                \$(le_bloc).hide();
                \$(le_titre_bloc).removeClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 542
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
        return "dossier/attribuer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  928 => 542,  918 => 535,  897 => 516,  889 => 510,  882 => 506,  866 => 493,  859 => 489,  848 => 481,  839 => 475,  833 => 471,  830 => 470,  827 => 469,  824 => 468,  820 => 467,  810 => 460,  804 => 457,  795 => 451,  789 => 448,  785 => 447,  776 => 441,  767 => 435,  758 => 429,  747 => 423,  739 => 418,  726 => 413,  717 => 407,  708 => 401,  699 => 395,  690 => 389,  681 => 383,  669 => 374,  665 => 373,  656 => 366,  649 => 362,  642 => 358,  635 => 354,  628 => 350,  621 => 346,  614 => 342,  607 => 338,  600 => 334,  589 => 326,  582 => 321,  579 => 320,  575 => 317,  567 => 313,  560 => 309,  553 => 305,  546 => 301,  539 => 297,  532 => 293,  525 => 289,  518 => 285,  507 => 277,  500 => 272,  497 => 271,  494 => 269,  486 => 264,  479 => 260,  471 => 255,  466 => 253,  459 => 249,  454 => 247,  447 => 243,  442 => 241,  435 => 237,  424 => 229,  417 => 224,  414 => 223,  411 => 221,  403 => 216,  396 => 212,  389 => 208,  382 => 204,  374 => 199,  367 => 195,  356 => 191,  345 => 183,  338 => 178,  335 => 177,  327 => 171,  320 => 167,  313 => 163,  306 => 159,  299 => 155,  291 => 150,  284 => 146,  277 => 142,  266 => 138,  259 => 134,  248 => 126,  241 => 121,  236 => 117,  230 => 114,  226 => 112,  224 => 111,  219 => 109,  212 => 105,  205 => 101,  191 => 90,  184 => 86,  177 => 82,  170 => 78,  160 => 73,  145 => 61,  137 => 56,  124 => 46,  118 => 42,  115 => 41,  112 => 40,  109 => 39,  106 => 38,  103 => 37,  101 => 36,  98 => 35,  95 => 34,  92 => 33,  89 => 32,  87 => 31,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/attribuer.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/attribuer.html.twig");
    }
}