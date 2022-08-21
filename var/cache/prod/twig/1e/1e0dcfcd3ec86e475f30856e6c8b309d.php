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

/* demande/show.html.twig */
class __TwigTemplate_0abcb90b7effa0ebdf894284514e00fe extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "demande/show.html.twig", 1);
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
        $context["action_demande"] = "Validation";
        // line 27
        echo "    ";
        $context["link_liste"] = "app_installation_index3";
        // line 28
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "demande", [], "any", false, false, false, 28);
        // line 29
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 29);
        // line 30
        echo "    
    ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 31), "get", [0 => "page_liste_demande"], "method", true, true, false, 31) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 31), "get", [0 => "page_liste_demande"], "method", false, false, false, 31))) {
            // line 32
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 32), "get", [0 => "page_liste_demande"], "method", false, false, false, 32);
            // line 33
            echo "    ";
        }
        // line 34
        echo "
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 38
        echo twig_escape_filter($this->env, ($context["action_demande"] ?? null), "html", null, true);
        echo " de demandes </span>
            </a>
        </header>

        <div class=\"container\">
            <nav class=\"navbar shadow bg-warning border border-dark mt-2 p-0\">
                <div class=\"container-fluid ps-4\">
                        <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                            <div class=\"col\">
                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                </svg>
                                Détails de la demande 
                            </div>
                            <div class=\"col\" align=\"right\">
                                <span class=\"text-success\">[";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 53), "etat", [], "any", false, false, false, 53), "html", null, true);
        echo "]</span>
                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8 mb-2 pt-2\">
                ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdBy", [], "any", false, false, false, 63)], "method", false, false, false, 63)) {
            // line 64
            echo "                    ";
            $context["creator"] = twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdBy", [], "any", false, false, false, 64)], "method", false, false, false, 64);
            // line 65
            echo "                    <div align=\"left\" class=\"float-start border border-warning shadow p-2 fs-8 fw-light\">
                        <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["creator"] ?? null), "nomComplet", [], "any", false, false, false, 66), "html", null, true);
            echo "</span></div>
                        <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdAt", [], "any", false, false, false, 67), "d-m-Y à H:i:s"), "html", null, true);
            echo "</span></div>
                    </div>
                ";
        }
        // line 70
        echo "                <div align=\"right\">
                    <a target=\"_blank\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Demande</a>
                </div>
                <fieldset id=\"synthese_demande\">
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif ";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandecourante", [], "any", false, false, false, 75) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandecourante", [], "any", false, false, false, 75), "numeroPassage", [], "any", false, false, false, 75) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
        }
        echo "</h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Numéro Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 80), "demandeCourante", [], "any", false, false, false, 80), "numero", [], "any", false, false, false, 80), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 84), "demandeCourante", [], "any", false, false, false, 84), "dateCreation", [], "any", false, false, false, 84), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 88), "demandeCourante", [], "any", false, false, false, 88), "puissance", [], "any", false, false, false, 88), "html", null, true);
        echo " kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 92), "demandeCourante", [], "any", false, false, false, 92), "cout", [], "any", false, false, false, 92), "html", null, true);
        echo " FCFA\">
                            </div>
                        </div>  
                    </div>

                    
                ";
        // line 99
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 99), "electricien", [], "any", false, false, false, 99)) {
            // line 100
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black titre_bloc_4\">
                            Informations sur l'électricien
                            ";
            // line 103
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 104
                echo "                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit2", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 104)]), "html", null, true);
                echo "\" class=\" pt fs-8 text-dark\">
                                <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                    <use xlink:href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                </svg>
                                </a>
                            ";
            }
            // line 110
            echo "                        </h2>
                        <div class=\"row bloc_4\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Nom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 115), "electricien", [], "any", false, false, false, 115), "nom", [], "any", false, false, false, 115), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 119), "electricien", [], "any", false, false, false, 119), "prenom", [], "any", false, false, false, 119), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 123), "electricien", [], "any", false, false, false, 123), "localite", [], "any", false, false, false, 123), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 127), "electricien", [], "any", false, false, false, 127), "adresse", [], "any", false, false, false, 127), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 131), "electricien", [], "any", false, false, false, 131), "telephone", [], "any", false, false, false, 131), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 135), "electricien", [], "any", false, false, false, 135), "email", [], "any", false, false, false, 135), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 139), "electricien", [], "any", false, false, false, 139), "typePiece", [], "any", false, false, false, 139), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 143), "electricien", [], "any", false, false, false, 143), "numPiece", [], "any", false, false, false, 143), "html", null, true);
            echo "\">
                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Electricien</label><br />
                            ";
            // line 148
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 148), "PJElectricien", [], "any", false, false, false, 148)) {
                // line 149
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 152
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 152), "id", [], "any", false, false, false, 152), "type" => "electricien"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 152), "PJElectricien", [], "any", false, false, false, 152), "fichier", [], "any", false, false, false, 152), "html", null, true);
                echo " </span>
                            ";
            } else {
                // line 154
                echo "                                    <span class=\"text-danger pt fs-8\">N/D</span>
                            ";
            }
            // line 156
            echo "                            </div>

                        </div>
                    </div>
                    ";
        }
        // line 160
        echo "                                

                    ";
        // line 163
        echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_1\">
                        Données de base de la demande
                        ";
        // line 166
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 167
            echo "                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit1", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 167)]), "html", null, true);
            echo "\" class=\" pt fs-8 text-dark\">
                            <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                <use xlink:href=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                            </svg>
                            </a>
                        ";
        }
        // line 173
        echo "                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_1\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 175
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
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 183), "html", null, true);
        echo "\" id=\"form_usage\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 187
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "alimente", [], "any", false, false, false, 187)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_alimente\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_compteur\" >Numéro Compteur</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "compteur", [], "any", false, false, false, 191), "html", null, true);
        echo "\" id=\"form_compteur\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "abonnement", [], "any", false, false, false, 195), "html", null, true);
        echo "\" id=\"form_abonnement\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "grstReseau", [], "any", false, false, false, 199), "html", null, true);
        echo "\" id=\"form_grstReseau\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4\">
                                <label for=\"form_localite\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 204), "html", null, true);
        echo "\" id=\"form_localite\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_adresse\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "adresse", [], "any", false, false, false, 208), "html", null, true);
        echo "\" id=\"form_adresse\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_habitation\" >Complément Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 212
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "habitation", [], "any", false, false, false, 212), "html", null, true);
        echo "\" id=\"form_habitation\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_lattitude\" >Latitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "lattitude", [], "any", false, false, false, 216), "html", null, true);
        echo "\" id=\"form_lattitude\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_longitude\" >Longitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "longitude", [], "any", false, false, false, 220), "html", null, true);
        echo "\" id=\"form_longitude\">
                            </div>
                        </div>
                    </div>

                    ";
        // line 226
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 226)) {
            // line 227
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_2\">
                            Caractéristiques du site
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_2\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 232
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
            // line 240
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "collectif", [], "any", false, false, false, 240)) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "\" id=\"form_collectif\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_nomSite\" >Nom du site</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "nomSite", [], "any", false, false, false, 244), "html", null, true);
            echo "\" id=\"form_nomSite\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_logement\" >Nombre de logements</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "logement", [], "any", false, false, false, 248), "html", null, true);
            echo "\" id=\"form_logement\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-6\">
                                <label for=\"form_typeConstruction\" >Type de construction</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 253
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 253), "nom", [], "any", false, false, false, 253), "html", null, true);
            echo "\" id=\"form_typeConstruction\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1\">
                                <label for=\"form_niveau\" >Nombre de niveaux</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "niveau", [], "any", false, false, false, 257), "html", null, true);
            echo "\" id=\"form_niveau\">
                            </div>
                            <div class=\"col-lg-6 typeConstruction3\">
                                <label for=\"form_activite\" >Activités</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 261
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "activite", [], "any", false, false, false, 261), "html", null, true);
            echo "\" id=\"form_activite\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                <label for=\"form_priece\" >Nombre de pièces</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 265
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "priece", [], "any", false, false, false, 265), "html", null, true);
            echo "\" id=\"form_priece\">
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 270
        echo "
                    ";
        // line 272
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 272)) {
            // line 273
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_3\">
                            Caractéristiques de l'installation
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_3\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 278
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
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 286), "html", null, true);
            echo "\" id=\"form_natureTravaux\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf15\" >Neufs_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 290
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neuf15", [], "any", false, false, false, 290), "html", null, true);
            echo "\" id=\"form_neufs_15\">
                                <label for=\"form_existant15\" >Existants_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 292
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existant15", [], "any", false, false, false, 292), "html", null, true);
            echo "\" id=\"form_existant15\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf25\" >Neufs_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 296
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neuf25", [], "any", false, false, false, 296), "html", null, true);
            echo "\" id=\"form_neuf25\">
                                <label for=\"form_existant25\" >Existants_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 298
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existant25", [], "any", false, false, false, 298), "html", null, true);
            echo "\" id=\"form_existant25\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neufAutre\" >Neufs_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 302
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "neufAutre", [], "any", false, false, false, 302), "html", null, true);
            echo "\" id=\"form_neufAutre\">
                                <label for=\"form_existantAutre\" >Existants_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 304
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "existantAutre", [], "any", false, false, false, 304), "html", null, true);
            echo "\" id=\"form_existantAutre\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4 intervenantAutre1\">
                                <label for=\"form_intervenantAutre\" >Autres intervenants ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 309
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenantAutre", [], "any", false, false, false, 309), "html", null, true);
            echo "\" id=\"form_intervenantAutre\">
                            </div>
                            <div class=\"col-lg-8 intervenantAutre1\">
                                <label for=\"form_intervenant\" >Intervenants</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenant", [], "any", false, false, false, 313), "html", null, true);
            echo "\" id=\"form_intervenant\">
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 318
        echo "
                    ";
        // line 320
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 320)) {
            // line 321
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_5\">
                            Informations sur le propriétaire de l'installation
                            ";
            // line 324
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 325
                echo "                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit3", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 325)]), "html", null, true);
                echo "\" class=\" pt fs-8 text-dark\">
                                <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                    <use xlink:href=\"";
                // line 327
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                </svg>
                                </a>
                            ";
            }
            // line 331
            echo "                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_5\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 333
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
            // line 341
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 341), "nom", [], "any", false, false, false, 341), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 345
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 345), "prenom", [], "any", false, false, false, 345), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 349
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 349), "localite", [], "any", false, false, false, 349), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 353
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 353), "adresse", [], "any", false, false, false, 353), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 357
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 357), "telephone", [], "any", false, false, false, 357), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 361
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 361), "email", [], "any", false, false, false, 361), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 365
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 365), "typePiece", [], "any", false, false, false, 365), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 369
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 369), "numPiece", [], "any", false, false, false, 369), "html", null, true);
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
                    ";
        }
        // line 397
        echo "                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2\" id=\"paiement_demande\">
                <div align=\"right\">
                    <a href=\"";
        // line 402
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link_liste"] ?? null));
        echo "\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour à la liste</a>
                </div>                                
                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Données sur le paiement
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_histo", ["id" => twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "id", [], "any", false, false, false, 407)]), "html", null, true);
        echo "\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#hourglass-split"), "html", null, true);
        echo "\"></use></svg>
                            </a>
                        </div>
                    </h2>
                    <div class=\"row\">
                        <hr class=\"mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Statut Paiement</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
        // line 416
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "demande", [], "any", false, false, false, 416), "etat", [], "any", false, false, false, 416), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Mode Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"";
        // line 420
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "mode", [], "any", false, false, false, 420), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 reference\">
                            <label >Référence Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"";
        // line 424
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "reference", [], "any", false, false, false, 424), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Observations</label>
                            <textarea type=\"text\" rows=\"4\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\">";
        // line 428
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "observation", [], "any", false, false, false, 428), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 437
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 438
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "demande", [], "any", false, false, false, 438);
        // line 439
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 439);
        // line 440
        echo "<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"";
        // line 444
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "mode", [], "any", false, false, false, 444), "html", null, true);
        echo "\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        if (\"";
        // line 450
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "alimente", [], "any", false, false, false, 450), "html", null, true);
        echo "\" == 1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (\"";
        // line 458
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "collectif", [], "any", false, false, false, 458), "html", null, true);
        echo "\" == 1) {
            \$('.collectif1').show(); \$('.collectif0').hide();
        }
        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        valSel=\"";
        // line 462
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 462), "html", null, true);
        echo "\";
        if (valSel == \"Maison\" || valSel == \"IGH (Immeuble de Grande Hauteur)\") {
            \$('.typeConstruction1').show(); 
        }
        else if (valSel == \"Appartement\" || valSel == \"Foyer Logement\" || valSel == \"Dépendance\" || valSel == \"Foyer Logement\" || valSel == \"Dépendance\") {
            \$('.typeConstruction2').show();
        }
        else if (valSel == \"Etablissement Public\") {
            \$('.typeConstruction3').show(); 
        }

        // Bloc 3
        \$('.intervenantAutre1').hide(); \$('.natureTravaux1').hide();
        valSel=\"";
        // line 475
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenantAutre", [], "any", false, false, false, 475), "html", null, true);
        echo "\";
        if (valSel==\"Oui\") {
            \$('.intervenantAutre1').show(); 
        }
        valSel=\"";
        // line 479
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 479), "html", null, true);
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
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-up"), "html", null, true);
        echo "\"></use></svg>Cacher ...'); 
                \$(le_btn_bloc).prop('title', 'Cacher les détails');
                \$(le_btn_bloc).addClass(\"text-danger\");
                \$(le_btn_bloc).removeClass(\"text-warning\");
            } else {
                \$(le_bloc).hide();
                \$(le_titre_bloc).removeClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 509
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
        return "demande/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  924 => 509,  914 => 502,  888 => 479,  881 => 475,  865 => 462,  858 => 458,  847 => 450,  838 => 444,  832 => 440,  829 => 439,  826 => 438,  822 => 437,  810 => 428,  803 => 424,  796 => 420,  789 => 416,  778 => 408,  774 => 407,  766 => 402,  759 => 397,  754 => 394,  750 => 392,  743 => 390,  738 => 388,  735 => 387,  733 => 386,  725 => 385,  720 => 382,  716 => 380,  709 => 378,  704 => 376,  701 => 375,  699 => 374,  691 => 369,  684 => 365,  677 => 361,  670 => 357,  663 => 353,  656 => 349,  649 => 345,  642 => 341,  631 => 333,  627 => 331,  620 => 327,  614 => 325,  612 => 324,  607 => 321,  604 => 320,  601 => 318,  593 => 313,  586 => 309,  578 => 304,  573 => 302,  566 => 298,  561 => 296,  554 => 292,  549 => 290,  542 => 286,  531 => 278,  524 => 273,  521 => 272,  518 => 270,  510 => 265,  503 => 261,  496 => 257,  489 => 253,  481 => 248,  474 => 244,  463 => 240,  452 => 232,  445 => 227,  442 => 226,  434 => 220,  427 => 216,  420 => 212,  413 => 208,  406 => 204,  398 => 199,  391 => 195,  384 => 191,  373 => 187,  366 => 183,  355 => 175,  351 => 173,  344 => 169,  338 => 167,  336 => 166,  331 => 163,  327 => 160,  320 => 156,  316 => 154,  309 => 152,  304 => 150,  301 => 149,  299 => 148,  291 => 143,  284 => 139,  277 => 135,  270 => 131,  263 => 127,  256 => 123,  249 => 119,  242 => 115,  235 => 110,  228 => 106,  222 => 104,  220 => 103,  215 => 100,  212 => 99,  203 => 92,  196 => 88,  189 => 84,  182 => 80,  172 => 75,  165 => 71,  162 => 70,  156 => 67,  152 => 66,  149 => 65,  146 => 64,  144 => 63,  131 => 53,  123 => 48,  110 => 38,  104 => 34,  101 => 33,  98 => 32,  96 => 31,  93 => 30,  90 => 29,  87 => 28,  84 => 27,  82 => 26,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "demande/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/demande/show.html.twig");
    }
}
