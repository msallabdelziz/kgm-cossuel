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

/* installation/new6.html.twig */
class __TwigTemplate_28b789b1e2253c8db16d86f370b5ab55 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "installation/new6.html.twig", 1);
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
        background-color:#fff7e3;
        border: 1px solid #7a7b7c;
        color: black;
        font-weight:500;
    }
    </style>
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Soumission de demandes </span>
            </a>
        </header>
        <div class=\"row\">
        ";
        // line 20
        $context["offset"] = "offset-md-1";
        echo "            
            <div class=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["offset"] ?? null), "html", null, true);
        echo " col-lg-10 mb-2  p-3\">

                <div class=\"\">
                    <nav class=\"navbar shadow bg-warning border border-dark my-2 mb-2 p-0\">
                        <div class=\"container-fluid ps-4\">
                            <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                                <div class=\"col\">
                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                        <use xlink:href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                    </svg>
                                    Saisie Nouvelle demande
                                </div>
                                <div class=\"col\" align=\"right\">
                                        <span class=\"text-danger\">[Etape 6 sur 6]</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class=\"\">
                        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["installationForm"] ?? null), 'form_start', ["attr" => ["id" => "formInstall"]]);
        echo "
                            <div class=\"row\">
                                <!-- progressbar -->
                                ";
        // line 43
        $context["curr_etat"] = 6;
        // line 44
        echo "                                ";
        echo twig_include($this->env, $context, "installation/_progress_bar.html.twig");
        echo "

                            \t<fieldset id=\"synthese_demande\">
                                ";
        // line 47
        $this->loadTemplate("installation/_actions_new.html.twig", "installation/new6.html.twig", 47)->display($context);
        // line 48
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Puissance demandée et tarif ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandecourante", [], "any", false, false, false, 49) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandecourante", [], "any", false, false, false, 49), "numeroPassage", [], "any", false, false, false, 49) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
        }
        echo "</h2>
                                    <div class=\"row col-6 offset-3\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["installationForm"] ?? null), "puissance", [], "any", false, false, false, 53), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-6\">
                                            <label for=\"form_tarif\" >Tarif en FCFA</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm is-valid fs-5 py-2 fw-bold text-success\" value=\"\" id=\"form_tarif\">
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 62
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Données de base de la demande</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_usage\" >Usage Installation</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 68), "html", null, true);
        echo "\" id=\"form_usage\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "alimente", [], "any", false, false, false, 72)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_alimente\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_compteur\" >Numéro Compteur</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "compteur", [], "any", false, false, false, 76), "html", null, true);
        echo "\" id=\"form_compteur\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "abonnement", [], "any", false, false, false, 80), "html", null, true);
        echo "\" id=\"form_abonnement\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "grstReseau", [], "any", false, false, false, 84), "html", null, true);
        echo "\" id=\"form_grstReseau\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_localite\" >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 89), "html", null, true);
        echo "\" id=\"form_localite\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_adresse\" >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "adresse", [], "any", false, false, false, 93), "html", null, true);
        echo "\" id=\"form_adresse\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_habitation\" >Complément Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "habitation", [], "any", false, false, false, 97), "html", null, true);
        echo "\" id=\"form_habitation\">
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <label for=\"form_lattitude\" >Latitude</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "lattitude", [], "any", false, false, false, 101), "html", null, true);
        echo "\" id=\"form_lattitude\">
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <label for=\"form_longitude\" >Longitude</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "longitude", [], "any", false, false, false, 105), "html", null, true);
        echo "\" id=\"form_longitude\">
                                        </div>
                                    </div>
                                </div>
                                
                                ";
        // line 111
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Caractéristiques du site</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_collectif collectif1\" >Bien Collectif ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "collectif", [], "any", false, false, false, 117)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_collectif\">
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            <label for=\"form_nomSite\" >Nom du site</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "nomSite", [], "any", false, false, false, 121), "html", null, true);
        echo "\" id=\"form_nomSite\">
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            <label for=\"form_logement\" >Nombre de logements</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "logement", [], "any", false, false, false, 125), "html", null, true);
        echo "\" id=\"form_logement\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-6\">
                                            <label for=\"form_typeConstruction\" >Type de construction</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 130), "nom", [], "any", false, false, false, 130), "html", null, true);
        echo "\" id=\"form_typeConstruction\">
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1\">
                                            <label for=\"form_niveau\" >Nombre de niveaux</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "niveau", [], "any", false, false, false, 134), "html", null, true);
        echo "\" id=\"form_niveau\">
                                        </div>
                                        <div class=\"col-lg-6 typeConstruction3\">
                                            <label for=\"form_activite\" >Activités</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "activite", [], "any", false, false, false, 138), "html", null, true);
        echo "\" id=\"form_activite\">
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                            <label for=\"form_priece\" >Nombre de pièces</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "priece", [], "any", false, false, false, 142), "html", null, true);
        echo "\" id=\"form_priece\">
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 148
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Caractéristiques de l'installation</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                            <label for=\"form_natureTravaux\" >Nature des travaux</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 154), "html", null, true);
        echo "\" id=\"form_natureTravaux\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neuf15\" >Neufs_15</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neuf15", [], "any", false, false, false, 158), "html", null, true);
        echo "\" id=\"form_neufs_15\">
                                            <label for=\"form_existant15\" >Existants_15</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existant15", [], "any", false, false, false, 160), "html", null, true);
        echo "\" id=\"form_existant15\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neuf25\" >Neufs_25</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neuf25", [], "any", false, false, false, 164), "html", null, true);
        echo "\" id=\"form_neuf25\">
                                            <label for=\"form_existant25\" >Existants_25</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existant25", [], "any", false, false, false, 166), "html", null, true);
        echo "\" id=\"form_existant25\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neufAutre\" >Neufs_Autres</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neufAutre", [], "any", false, false, false, 170), "html", null, true);
        echo "\" id=\"form_neufAutre\">
                                            <label for=\"form_existantAutre\" >Existants_Autres</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existantAutre", [], "any", false, false, false, 172), "html", null, true);
        echo "\" id=\"form_existantAutre\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4 intervenantAutre1\">
                                            <label for=\"form_intervenantAutre\" >Autres intervenants ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenantAutre", [], "any", false, false, false, 177), "html", null, true);
        echo "\" id=\"form_intervenantAutre\">
                                        </div>
                                        <div class=\"col-lg-8 intervenantAutre1\">
                                            <label for=\"form_intervenant\" >Intervenants</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenant", [], "any", false, false, false, 181), "html", null, true);
        echo "\" id=\"form_intervenant\">
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 187
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Informations sur l'électricien</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                            <label >Nom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 193
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 193), "nom", [], "any", false, false, false, 193), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-5\">
                                            <label >Prénom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 197), "prenom", [], "any", false, false, false, 197), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 201), "localite", [], "any", false, false, false, 201), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 205), "adresse", [], "any", false, false, false, 205), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Téléphone</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 209), "telephone", [], "any", false, false, false, 209), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Email</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 213
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 213), "email", [], "any", false, false, false, 213), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Type de pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 217), "typePiece", [], "any", false, false, false, 217), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Numéro Pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 221), "numPiece", [], "any", false, false, false, 221), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4 mt-2\">
                                            <label >Scan CNI Electricien</label><br />
                                        ";
        // line 225
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJElectricien", [], "any", false, false, false, 225)) {
            // line 226
            echo "                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
            echo "\"></use>
                                                </svg>
                                                <span onclick=\"window.open('";
            // line 229
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 229), "type" => "electricien"]), "html", null, true);
            echo "')\" class=\"text-success pt fs-7\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJElectricien", [], "any", false, false, false, 229), "fichier", [], "any", false, false, false, 229), "html", null, true);
            echo " </span>
                                        ";
        } else {
            // line 231
            echo "                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        ";
        }
        // line 233
        echo "                                        </div>
                                    </div>
                                </div>

                                ";
        // line 238
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Informations sur le propriétaire de l'installation</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                            <label >Nom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 244), "nom", [], "any", false, false, false, 244), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-5\">
                                            <label >Prénom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 248), "prenom", [], "any", false, false, false, 248), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 252
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 252), "localite", [], "any", false, false, false, 252), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 256
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 256), "adresse", [], "any", false, false, false, 256), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Téléphone</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 260), "telephone", [], "any", false, false, false, 260), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Email</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 264
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 264), "email", [], "any", false, false, false, 264), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Type de pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 268
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 268), "typePiece", [], "any", false, false, false, 268), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Numéro Pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 272), "numPiece", [], "any", false, false, false, 272), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4 mt-2\">
                                            <label >Scan CNI Propriétaire</label><br />
                                        ";
        // line 276
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJProprietaire", [], "any", false, false, false, 276)) {
            // line 277
            echo "                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
            echo "\"></use>
                                                </svg>
                                                <span onclick=\"window.open('";
            // line 280
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 280), "type" => "proprietaire"]), "html", null, true);
            echo "')\" class=\"text-success pt fs-7\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJProprietaire", [], "any", false, false, false, 280), "fichier", [], "any", false, false, false, 280), "html", null, true);
            echo " </span>
                                        ";
        } else {
            // line 282
            echo "                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        ";
        }
        // line 284
        echo "                                        </div>

                                        <div class=\"col-lg-4 mt-2\">
                                            <label >";
        // line 287
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 287) != "erp_ert")) {
            echo "Titre de propriété";
        } else {
            echo "Documents Techniques";
        }
        echo "</label><br />
                                        ";
        // line 288
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJDossierTechnique", [], "any", false, false, false, 288)) {
            // line 289
            echo "                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
            // line 290
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
            echo "\"></use>
                                                </svg>
                                                <span onclick=\"window.open('";
            // line 292
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 292), "type" => "dosstech"]), "html", null, true);
            echo "')\" class=\"text-success pt fs-7\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJDossierTechnique", [], "any", false, false, false, 292), "fichier", [], "any", false, false, false, 292), "html", null, true);
            echo " </span>
                                        ";
        } else {
            // line 294
            echo "                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        ";
        }
        // line 296
        echo "                                        </div>
                                    </div>
                                </div>
                                ";
        // line 299
        $this->loadTemplate("installation/_actions_new.html.twig", "installation/new6.html.twig", 299)->display($context);
        // line 300
        echo "                                </fieldset>
                            </div>
                        ";
        // line 302
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["installationForm"] ?? null), 'form_end');
        echo "            
                        ";
        // line 303
        $this->loadTemplate("installation/_delete_form.html.twig", "installation/new6.html.twig", 303)->display($context);
        // line 304
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 311
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 312
        echo "<script>
    \$(document).ready(function() {

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        optSel=\$('#form_alimente'); valSel=optSel.val();
        if (valSel==1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (valSel==1) {
            \$('.collectif1').show(); \$('.collectif0').hide();
        }
        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        optSel=\$('#form_typeConstruction');
        valSel=optSel.val();
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
        optSel=\$('#form_intervenantAutre');
        valSel=optSel.val();
        if (valSel==1) {
            \$('.intervenantAutre1').show(); 
        }
        optSel=\$('#form_natureTravaux');
        valSel=optSel.val();
        if (valSel == \"Rénovation Partielle\") {
            \$('.natureTravaux1').show(); 
        }

        ";
        // line 355
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 355) == "domestique")) {
            // line 356
            echo "            \$(\"#form_puissance\").attr(\"max\", 34);
        ";
        }
        // line 358
        echo "        
        \$(\"#form_puissance\").keypress(function(event){
            getTarif();
        });

        \$(\"#form_puissance\").keydown(function(event){
            getTarif();
        });

        \$(\"#form_puissance\").keyup(function(event){
            getTarif();
        });

        \$(\"#form_puissance\").change(function(event){
            getTarif();
        });

        ";
        // line 375
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 375)) {
            echo " getTarif() ";
        }
        // line 376
        echo "    });
    function getTarif() {
        // Tarif
        val_usage=\$(\"#form_usage\").val();
        val_puissance=\$(\"#form_puissance\").val();
        val_passage=1;
        ";
        // line 382
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 382) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 382), "demandeParente", [], "any", false, false, false, 382))) {
            echo " 
            val_passage=2;
        ";
        }
        // line 385
        echo "
        if ( ( val_puissance == 0 ) || (val_puissance == '' ) || (val_puissance == null ) || (!val_puissance)  ) result=0;
        if(val_usage==\"domestique\") {
            if ( (val_puissance>0) && (val_puissance <= 6 )  ) result=\"10000\";
            if ( (val_puissance>6) && (val_puissance<=17) )   result=\"30000\";
            if (val_puissance>17)  result=\"100000\";
        }
        else {
            if ( (val_puissance>0) && (val_puissance <= 6 )  ) result=\"12000\";
            if ( (val_puissance>6) && (val_puissance<=17) ) result=\"150000\";
            if (val_puissance>17)  result=\"250000\";
        } 

        if(val_passage==2) {
            result=parseFloat(result*80/100);
        }

        result=addCommas(result);

        \$(\"#form_tarif\").val(result+\" FCFA\");
    }

    function addCommas(nStr) {
        nStr += '';
        var x = nStr.split('.');
        var x1 = x[0];
        var x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\\d+)(\\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '\$1' + ' ' + '\$2');
        }
        return x1 + x2;
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "installation/new6.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  687 => 385,  681 => 382,  673 => 376,  669 => 375,  650 => 358,  646 => 356,  644 => 355,  599 => 312,  595 => 311,  586 => 304,  584 => 303,  580 => 302,  576 => 300,  574 => 299,  569 => 296,  565 => 294,  558 => 292,  553 => 290,  550 => 289,  548 => 288,  540 => 287,  535 => 284,  531 => 282,  524 => 280,  519 => 278,  516 => 277,  514 => 276,  507 => 272,  500 => 268,  493 => 264,  486 => 260,  479 => 256,  472 => 252,  465 => 248,  458 => 244,  450 => 238,  444 => 233,  440 => 231,  433 => 229,  428 => 227,  425 => 226,  423 => 225,  416 => 221,  409 => 217,  402 => 213,  395 => 209,  388 => 205,  381 => 201,  374 => 197,  367 => 193,  359 => 187,  351 => 181,  344 => 177,  336 => 172,  331 => 170,  324 => 166,  319 => 164,  312 => 160,  307 => 158,  300 => 154,  292 => 148,  284 => 142,  277 => 138,  270 => 134,  263 => 130,  255 => 125,  248 => 121,  237 => 117,  229 => 111,  221 => 105,  214 => 101,  207 => 97,  200 => 93,  193 => 89,  185 => 84,  178 => 80,  171 => 76,  160 => 72,  153 => 68,  145 => 62,  134 => 53,  125 => 49,  122 => 48,  120 => 47,  113 => 44,  111 => 43,  105 => 40,  91 => 29,  80 => 21,  76 => 20,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/new6.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/new6.html.twig");
    }
}
