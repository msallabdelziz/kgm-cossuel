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

/* remboursement/show.html.twig */
class __TwigTemplate_44ad6ad0c51b407e2dfba9a4e1931779 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "remboursement/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "COSSUEL";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <style>
    input[disabled] {
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
        // line 25
        $context["paiement"] = twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "paiement", [], "any", false, false, false, 25);
        // line 26
        echo "    ";
        $context["action_demande"] = "Paiement";
        // line 27
        echo "    ";
        $context["link_liste"] = "app_installation_index2";
        // line 28
        echo "
    ";
        // line 29
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "demande", [], "any", false, false, false, 29);
        // line 30
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 30);
        // line 31
        echo "    
    ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 32), "get", [0 => "page_liste_demande"], "method", true, true, false, 32) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 32), "get", [0 => "page_liste_demande"], "method", false, false, false, 32))) {
            // line 33
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 33), "get", [0 => "page_liste_demande"], "method", false, false, false, 33);
            // line 34
            echo "    ";
        }
        // line 35
        echo "

    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Demandes de remboursement </span>
            </a>
        </header>

        <div class=\"container\">
            <nav class=\"navbar shadow bg-warning border border-dark mt-2 p-0\">
                <div class=\"container-fluid ps-4\">
                        <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                            <div class=\"col\">
                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                </svg>
                                Détails de la demande 
                            </div>
                            <div class=\"col\" align=\"right\">
                                ";
        // line 56
        echo "                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdBy", [], "any", false, false, false, 65)], "method", false, false, false, 65)) {
            // line 66
            echo "                    ";
            $context["creator"] = twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdBy", [], "any", false, false, false, 66)], "method", false, false, false, 66);
            // line 67
            echo "                    <div align=\"left\" class=\"float-start mt-2 border border-warning shadow p-2 fs-8 fw-light\">
                        <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["creator"] ?? null), "nomComplet", [], "any", false, false, false, 68), "html", null, true);
            echo "</span></div>
                        <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdAt", [], "any", false, false, false, 69), "d-m-Y à H:i:s"), "html", null, true);
            echo "</span></div>
                    </div>
                ";
        }
        // line 72
        echo "                <div align=\"right\">
                    <a target=\"_blank\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Demande</a>
                    <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link_liste"] ?? null));
        echo "\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour à la liste</a>
                </div>
                <fieldset id=\"synthese_demande\">
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandecourante", [], "any", false, false, false, 78) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandecourante", [], "any", false, false, false, 78), "numeroPassage", [], "any", false, false, false, 78) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
        }
        echo "</h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Numéro Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 83), "demandeCourante", [], "any", false, false, false, 83), "numero", [], "any", false, false, false, 83), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 87), "demandeCourante", [], "any", false, false, false, 87), "dateCreation", [], "any", false, false, false, 87), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 91), "demandeCourante", [], "any", false, false, false, 91), "puissance", [], "any", false, false, false, 91), "html", null, true);
        echo " kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 95), "demandeCourante", [], "any", false, false, false, 95), "cout", [], "any", false, false, false, 95), "html", null, true);
        echo " FCFA\">
                            </div>
                        </div>  
                    </div>

                    
                ";
        // line 102
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 102), "electricien", [], "any", false, false, false, 102)) {
            // line 103
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black titre_bloc_4\">
                            Informations sur l'électricien
                            ";
            // line 106
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 107
                echo "                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit2", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 107)]), "html", null, true);
                echo "\" class=\" pt fs-8 text-dark\">
                                <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                    <use xlink:href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                </svg>
                                </a>
                            ";
            }
            // line 113
            echo "                        </h2>
                        <div class=\"row bloc_4\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Nom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 118), "electricien", [], "any", false, false, false, 118), "nom", [], "any", false, false, false, 118), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 122), "electricien", [], "any", false, false, false, 122), "prenom", [], "any", false, false, false, 122), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 126), "electricien", [], "any", false, false, false, 126), "localite", [], "any", false, false, false, 126), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 130), "electricien", [], "any", false, false, false, 130), "adresse", [], "any", false, false, false, 130), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 134), "electricien", [], "any", false, false, false, 134), "telephone", [], "any", false, false, false, 134), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 138), "electricien", [], "any", false, false, false, 138), "email", [], "any", false, false, false, 138), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 142), "electricien", [], "any", false, false, false, 142), "typePiece", [], "any", false, false, false, 142), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 146), "electricien", [], "any", false, false, false, 146), "numPiece", [], "any", false, false, false, 146), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Electricien</label><br />
                            ";
            // line 150
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 150), "PJElectricien", [], "any", false, false, false, 150)) {
                // line 151
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 154), "id", [], "any", false, false, false, 154), "type" => "electricien"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 154), "PJElectricien", [], "any", false, false, false, 154), "fichier", [], "any", false, false, false, 154), "html", null, true);
                echo " </span>
                            ";
            } else {
                // line 156
                echo "                                    <span class=\"text-danger pt fs-8\">N/D</span>
                            ";
            }
            // line 158
            echo "                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 161
        echo "                                

                    ";
        // line 164
        echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_1\">
                        Données de base de la demande
                        ";
        // line 167
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 168
            echo "                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit1", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 168)]), "html", null, true);
            echo "\" class=\" pt fs-8 text-dark\">
                            <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                <use xlink:href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                            </svg>
                            </a>
                        ";
        }
        // line 174
        echo "                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_1\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 176
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
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 184), "html", null, true);
        echo "\" id=\"form_usage\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 188
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "alimente", [], "any", false, false, false, 188)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_alimente\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_compteur\" >Numéro Compteur</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "compteur", [], "any", false, false, false, 192), "html", null, true);
        echo "\" id=\"form_compteur\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 196
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "abonnement", [], "any", false, false, false, 196), "html", null, true);
        echo "\" id=\"form_abonnement\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "grstReseau", [], "any", false, false, false, 200), "html", null, true);
        echo "\" id=\"form_grstReseau\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4\">
                                <label for=\"form_localite\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 205), "html", null, true);
        echo "\" id=\"form_localite\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_adresse\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "adresse", [], "any", false, false, false, 209), "html", null, true);
        echo "\" id=\"form_adresse\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_habitation\" >Complément Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 213
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "habitation", [], "any", false, false, false, 213), "html", null, true);
        echo "\" id=\"form_habitation\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_lattitude\" >Latitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "lattitude", [], "any", false, false, false, 217), "html", null, true);
        echo "\" id=\"form_lattitude\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_longitude\" >Longitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "longitude", [], "any", false, false, false, 221), "html", null, true);
        echo "\" id=\"form_longitude\">
                            </div>
                        </div>
                    </div>

                    ";
        // line 227
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 227)) {
            // line 228
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_2\">
                            Caractéristiques du site
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_2\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 233
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
            // line 241
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "collectif", [], "any", false, false, false, 241)) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "\" id=\"form_collectif\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_nomSite\" >Nom du site</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "nomSite", [], "any", false, false, false, 245), "html", null, true);
            echo "\" id=\"form_nomSite\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_logement\" >Nombre de logements</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "logement", [], "any", false, false, false, 249), "html", null, true);
            echo "\" id=\"form_logement\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-6\">
                                <label for=\"form_typeConstruction\" >Type de construction</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 254), "nom", [], "any", false, false, false, 254), "html", null, true);
            echo "\" id=\"form_typeConstruction\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1\">
                                <label for=\"form_niveau\" >Nombre de niveaux</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "niveau", [], "any", false, false, false, 258), "html", null, true);
            echo "\" id=\"form_niveau\">
                            </div>
                            <div class=\"col-lg-6 typeConstruction3\">
                                <label for=\"form_activite\" >Activités</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "activite", [], "any", false, false, false, 262), "html", null, true);
            echo "\" id=\"form_activite\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                <label for=\"form_priece\" >Nombre de pièces</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "priece", [], "any", false, false, false, 266), "html", null, true);
            echo "\" id=\"form_priece\">
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 271
        echo "
                    ";
        // line 273
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 273)) {
            // line 274
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_3\">
                            Caractéristiques de l'installation
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_3\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 279
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
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 287), "html", null, true);
            echo "\" id=\"form_natureTravaux\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf15\" >Neufs_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neuf15", [], "any", false, false, false, 291), "html", null, true);
            echo "\" id=\"form_neufs_15\">
                                <label for=\"form_existant15\" >Existants_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 293
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existant15", [], "any", false, false, false, 293), "html", null, true);
            echo "\" id=\"form_existant15\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf25\" >Neufs_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 297
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neuf25", [], "any", false, false, false, 297), "html", null, true);
            echo "\" id=\"form_neuf25\">
                                <label for=\"form_existant25\" >Existants_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 299
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existant25", [], "any", false, false, false, 299), "html", null, true);
            echo "\" id=\"form_existant25\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neufAutre\" >Neufs_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 303
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neufAutre", [], "any", false, false, false, 303), "html", null, true);
            echo "\" id=\"form_neufAutre\">
                                <label for=\"form_existantAutre\" >Existants_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existantAutre", [], "any", false, false, false, 305), "html", null, true);
            echo "\" id=\"form_existantAutre\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4 intervenantAutre1\">
                                <label for=\"form_intervenantAutre\" >Autres intervenants ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenantAutre", [], "any", false, false, false, 310), "html", null, true);
            echo "\" id=\"form_intervenantAutre\">
                            </div>
                            <div class=\"col-lg-8 intervenantAutre1\">
                                <label for=\"form_intervenant\" >Intervenants</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 314
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenant", [], "any", false, false, false, 314), "html", null, true);
            echo "\" id=\"form_intervenant\">
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 319
        echo "
                    ";
        // line 321
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 321)) {
            // line 322
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_5\">
                            Informations sur le propriétaire de l'installation
                            ";
            // line 325
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 326
                echo "                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit3", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 326)]), "html", null, true);
                echo "\" class=\" pt fs-8 text-dark\">
                                <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                    <use xlink:href=\"";
                // line 328
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                </svg>
                                </a>
                            ";
            }
            // line 332
            echo "                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_5\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 334
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
            // line 342
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 342), "nom", [], "any", false, false, false, 342), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 346
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 346), "prenom", [], "any", false, false, false, 346), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 350), "localite", [], "any", false, false, false, 350), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 354), "adresse", [], "any", false, false, false, 354), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 358
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 358), "telephone", [], "any", false, false, false, 358), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 362
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 362), "email", [], "any", false, false, false, 362), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 366
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 366), "typePiece", [], "any", false, false, false, 366), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 370
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 370), "numPiece", [], "any", false, false, false, 370), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Propriétaire</label><br />
                            ";
            // line 374
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJProprietaire", [], "any", false, false, false, 374)) {
                // line 375
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 376
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 378
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 378), "type" => "proprietaire"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJProprietaire", [], "any", false, false, false, 378), "fichier", [], "any", false, false, false, 378), "html", null, true);
                echo " </span>
                            ";
            } else {
                // line 380
                echo "                                    <span class=\"text-danger pt fs-8\">N/D</span>
                            ";
            }
            // line 382
            echo "                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >";
            // line 385
            if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 385) != "erp_ert")) {
                echo "Titre de propriété";
            } else {
                echo "Documents Techniques";
            }
            echo "</label><br />
                            ";
            // line 386
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJDossierTechnique", [], "any", false, false, false, 386)) {
                // line 387
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 388
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 390
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 390), "type" => "dosstech"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJDossierTechnique", [], "any", false, false, false, 390), "fichier", [], "any", false, false, false, 390), "html", null, true);
                echo " </span>
                            ";
            } else {
                // line 392
                echo "                                    <span class=\"text-danger pt fs-8\">N/D</span>
                            ";
            }
            // line 394
            echo "                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 398
        echo "                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2\" id=\"paiement_demande\">
                <div align=\"right\">
                        ";
        // line 403
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DAF") &&  !twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "rejete", [], "any", false, false, false, 403)) &&  !twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "valide", [], "any", false, false, false, 403))) {
            // line 404
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remboursement_rejet", ["id" => twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "id", [], "any", false, false, false, 404)]), "html", null, true);
            echo "\" type=\"button\" class=\"next action-button btn btn-danger btn my-3 ms-2\">Rejeter</a>
                        <a href=\"";
            // line 405
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remboursement_add2", ["id" => twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "id", [], "any", false, false, false, 405)]), "html", null, true);
            echo "\" type=\"button\" class=\"next action-button btn btn-success btn my-3 ms-2\">Valider Remboursement</a>
                        ";
            // line 407
            echo "                        ";
        } else {
            // line 408
            echo "                        <div class=\"my-4 mb-3\">
                            ";
            // line 409
            if (twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "rejete", [], "any", false, false, false, 409)) {
                // line 410
                echo "                                <span class=\"badge bg-danger p-2 fs-6\">Demande de remboursement rejetée</span>
                            ";
            }
            // line 412
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "valide", [], "any", false, false, false, 412)) {
                // line 413
                echo "                                <span class=\"badge bg-success p-2 fs-6\">Demande de remboursement validée</span>
                            ";
            }
            // line 415
            echo "                        </div>
                        ";
        }
        // line 417
        echo "                </div>                                
                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Données sur le paiement
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_histo", ["id" => twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "id", [], "any", false, false, false, 421)]), "html", null, true);
        echo "\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#hourglass-split"), "html", null, true);
        echo "\"></use></svg>
                            </a>
                        </div>
                    </h2>
                    <div class=\"row\">
                        <hr class=\"mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Statut Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
        // line 430
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "demande", [], "any", false, false, false, 430), "etat", [], "any", false, false, false, 430), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Mode Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"";
        // line 434
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "mode", [], "any", false, false, false, 434), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Montant Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"";
        // line 438
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "cout", [], "any", false, false, false, 438), 0, "", " "), "html", null, true);
        echo " FCFA\">
                        </div>
                        <div class=\"mb-3 reference\">
                            <label >Référence Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"";
        // line 442
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "reference", [], "any", false, false, false, 442), "html", null, true);
        echo "\">
                        </div>
                        ";
        // line 444
        if (twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "observation", [], "any", false, false, false, 444)) {
            // line 445
            echo "                        <div class=\"mb-3 \">
                            <label >Observations sur Paiement</label>
                            <textarea type=\"text\" rows=\"4\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\">";
            // line 447
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "observation", [], "any", false, false, false, 447), "html", null, true);
            echo "</textarea>
                        </div>
                        ";
        }
        // line 450
        echo "                        <div class=\"mb-3\">
                            <label class=\"text-danger\" >Date remboursement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6 bg-warning bg-opacity-50\" value=\"";
        // line 452
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "dateDemande", [], "any", false, false, false, 452), "d-m-Y"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"text-danger\" >Montant remboursement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6 bg-warning bg-opacity-50\" value=\"";
        // line 456
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "montant", [], "any", false, false, false, 456), 0, "", " "), "html", null, true);
        echo " FCFA\">
                        </div>
                        <div class=\"mb-3 \">
                            <label class=\"text-danger\">Motif Remboursement</label>
                            <textarea type=\"text\" rows=\"4\" disabled readonly class=\"form-control form-control-sm py-1 border-secondary bg-warning bg-opacity-50 fs-7\">";
        // line 460
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "motif", [], "any", false, false, false, 460), "html", null, true);
        echo "</textarea>
                        </div>
                    ";
        // line 462
        if ((twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "rejete", [], "any", false, false, false, 462) || twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "valide", [], "any", false, false, false, 462))) {
            // line 463
            echo "                        <hr class=\"mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Statut Remboursement</label>
                            ";
            // line 466
            if (twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "rejete", [], "any", false, false, false, 466)) {
                // line 467
                echo "                                <input type=\"text\" disabled readonly class=\"form-control text-danger bg-danger bg-opacity-25 form-control py-1 fw-bold fs-6\" value=\"Rejeté\">
                            ";
            }
            // line 469
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "valide", [], "any", false, false, false, 469)) {
                // line 470
                echo "                                <input type=\"text\" disabled readonly class=\"form-control text-success bg-success bg-opacity-25 form-control py-1 fw-bold fs-6\" value=\"Validé\">
                            ";
            }
            // line 472
            echo "                        </div>
                        ";
            // line 473
            if (twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "rejete", [], "any", false, false, false, 473)) {
                // line 474
                echo "                            <div class=\"mb-3 \">
                                <label class=\"\">Motif Rejet</label>
                                <textarea type=\"text\" rows=\"4\" disabled readonly class=\"form-control form-control-sm py-1 bg-danger bg-opacity-25 border-secondary text-danger fs-7\">";
                // line 476
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "motifRejet", [], "any", false, false, false, 476), "html", null, true);
                echo "</textarea>
                            </div>
                        ";
            }
            // line 479
            echo "                    ";
        }
        // line 480
        echo "                    </div>  
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 487
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 488
        echo "    ";
        $context["paiement"] = twig_get_attribute($this->env, $this->source, ($context["remboursement"] ?? null), "paiement", [], "any", false, false, false, 488);
        // line 489
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "demande", [], "any", false, false, false, 489);
        // line 490
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 490);
        // line 491
        echo "<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"";
        // line 495
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "mode", [], "any", false, false, false, 495), "html", null, true);
        echo "\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        if (\"";
        // line 501
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "alimente", [], "any", false, false, false, 501), "html", null, true);
        echo "\" == 1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (\"";
        // line 509
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "collectif", [], "any", false, false, false, 509), "html", null, true);
        echo "\" == 1) {
            \$('.collectif1').show(); \$('.collectif0').hide();
        }
        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        valSel=\"";
        // line 513
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 513), "html", null, true);
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
        // line 526
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenantAutre", [], "any", false, false, false, 526), "html", null, true);
        echo "\";
        if (valSel==\"Oui\") {
            \$('.intervenantAutre1').show(); 
        }
        valSel=\"";
        // line 530
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 530), "html", null, true);
        echo "\";
        if (valSel == \"Rénovation Partielle\") {
            \$('.natureTravaux1').show(); 
        }

        \$(\".bloc_1\").hide(); 
        \$(\".bloc_2\").hide();
        \$(\".bloc_3\").hide();
        \$(\".bloc_5\").hide();

        \$(\".btn_bloc_1\").on('click', function(){ showhide_bloc(1); });  
        \$(\".btn_bloc_2\").on('click', function(){ showhide_bloc(2); });  
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
        // line 553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-up"), "html", null, true);
        echo "\"></use></svg>Cacher ...'); 
                \$(le_btn_bloc).prop('title', 'Cacher les détails');
                \$(le_btn_bloc).addClass(\"text-danger\");
                \$(le_btn_bloc).removeClass(\"text-warning\");
            } else {
                \$(le_bloc).hide();
                \$(le_titre_bloc).removeClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 560
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
        return "remboursement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1037 => 560,  1027 => 553,  1001 => 530,  994 => 526,  978 => 513,  971 => 509,  960 => 501,  951 => 495,  945 => 491,  942 => 490,  939 => 489,  936 => 488,  932 => 487,  923 => 480,  920 => 479,  914 => 476,  910 => 474,  908 => 473,  905 => 472,  901 => 470,  898 => 469,  894 => 467,  892 => 466,  887 => 463,  885 => 462,  880 => 460,  873 => 456,  866 => 452,  862 => 450,  856 => 447,  852 => 445,  850 => 444,  845 => 442,  838 => 438,  831 => 434,  824 => 430,  813 => 422,  809 => 421,  803 => 417,  799 => 415,  795 => 413,  792 => 412,  788 => 410,  786 => 409,  783 => 408,  780 => 407,  776 => 405,  771 => 404,  769 => 403,  762 => 398,  756 => 394,  752 => 392,  745 => 390,  740 => 388,  737 => 387,  735 => 386,  727 => 385,  722 => 382,  718 => 380,  711 => 378,  706 => 376,  703 => 375,  701 => 374,  694 => 370,  687 => 366,  680 => 362,  673 => 358,  666 => 354,  659 => 350,  652 => 346,  645 => 342,  634 => 334,  630 => 332,  623 => 328,  617 => 326,  615 => 325,  610 => 322,  607 => 321,  604 => 319,  596 => 314,  589 => 310,  581 => 305,  576 => 303,  569 => 299,  564 => 297,  557 => 293,  552 => 291,  545 => 287,  534 => 279,  527 => 274,  524 => 273,  521 => 271,  513 => 266,  506 => 262,  499 => 258,  492 => 254,  484 => 249,  477 => 245,  466 => 241,  455 => 233,  448 => 228,  445 => 227,  437 => 221,  430 => 217,  423 => 213,  416 => 209,  409 => 205,  401 => 200,  394 => 196,  387 => 192,  376 => 188,  369 => 184,  358 => 176,  354 => 174,  347 => 170,  341 => 168,  339 => 167,  334 => 164,  330 => 161,  324 => 158,  320 => 156,  313 => 154,  308 => 152,  305 => 151,  303 => 150,  296 => 146,  289 => 142,  282 => 138,  275 => 134,  268 => 130,  261 => 126,  254 => 122,  247 => 118,  240 => 113,  233 => 109,  227 => 107,  225 => 106,  220 => 103,  217 => 102,  208 => 95,  201 => 91,  194 => 87,  187 => 83,  177 => 78,  170 => 74,  166 => 73,  163 => 72,  157 => 69,  153 => 68,  150 => 67,  147 => 66,  145 => 65,  134 => 56,  126 => 50,  109 => 35,  106 => 34,  103 => 33,  101 => 32,  98 => 31,  95 => 30,  93 => 29,  90 => 28,  87 => 27,  84 => 26,  82 => 25,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remboursement/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/remboursement/show.html.twig");
    }
}
