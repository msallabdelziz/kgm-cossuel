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

/* installation/showpop.html.twig */
class __TwigTemplate_df05235f49793701b9d78c66148ba1b4 extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base_modal.html.twig", "installation/showpop.html.twig", 1);
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
    ";
        // line 13
        $context["action_demande"] = "Soumission";
        // line 14
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 14) < 7)) {
            // line 15
            echo "        ";
            $context["action_demande"] = "Soumission";
            // line 16
            echo "    ";
        } elseif (((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 16) == 7) || (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 16) == 8))) {
            // line 17
            echo "        ";
            $context["action_demande"] = "Paiement";
            // line 18
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 18) == 9)) {
            // line 19
            echo "        ";
            $context["action_demande"] = "Validation";
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        $context["link_liste"] = "stat";
        // line 23
        echo "
    <section class=\"\">
        <a data-bs-dismiss=\"modal\" class=\"closeModal float-end next action-button btn btn-sm btn-secondary \">Fermer</a>
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 28
        echo twig_escape_filter($this->env, ($context["action_demande"] ?? null), "html", null, true);
        echo " de demandes </span>
                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 29)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-success btn my-0 ms-5 py-0 fs-7\">Plus de détails sur la demande ...</a>
            </a>
        </header>
        <div class=\"row\">
        ";
        // line 33
        $context["offset"] = "offset-md-1";
        echo "            
        ";
        // line 34
        $context["badge_etat"] = "text-danger";
        // line 35
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 35) == 7)) {
            // line 36
            echo "            ";
            $context["badge_etat"] = "text-danger";
            // line 37
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 37) > 7)) {
            // line 38
            echo "            ";
            $context["badge_etat"] = "text-success";
            // line 39
            echo "        ";
        }
        // line 40
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, ($context["offset"] ?? null), "html", null, true);
        echo " col-lg-10 mb-2  p-3\">
                <div class=\"\">
                    <nav class=\"navbar shadow bg-warning border border-dark my-2 mb-2 p-0\">
                        <div class=\"container-fluid ps-4\">
                            <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                                <div class=\"col\">
                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                        <use xlink:href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                    </svg>
                                    Détails de la demande 
                                </div>
                                <div class=\"col\" align=\"right\">
                                    ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 52) >= 7)) {
            // line 53
            echo "                                        <span class=\"";
            echo twig_escape_filter($this->env, ($context["badge_etat"] ?? null), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 53), "etat", [], "any", false, false, false, 53), "html", null, true);
            echo "]</span>
                                    ";
        } else {
            // line 55
            echo "                                        <span class=\"";
            echo twig_escape_filter($this->env, ($context["badge_etat"] ?? null), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "etat", [], "any", false, false, false, 55), "html", null, true);
            echo "]</span>
                                    ";
        }
        // line 57
        echo "                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class=\"\">
                            <div class=\"row\">
                            \t<fieldset id=\"synthese_demande\">
                                ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 64)) {
            // line 65
            echo "                                    <div class=\"card mb-2\">
                                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 66) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 66), "numeroPassage", [], "any", false, false, false, 66) == 2))) {
                echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
            }
            echo "</h2>
                                        <div class=\"row\">
                                            <hr class=\"mb-3\" />
                                            <div class=\"col-lg-3\">
                                                <label >Numéro Demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 71), "numero", [], "any", false, false, false, 71), "html", null, true);
            echo "\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Date Demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 75), "dateCreation", [], "any", false, false, false, 75), "d-m-Y"), "html", null, true);
            echo "\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Puissance demandée</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 79), "puissance", [], "any", false, false, false, 79), "html", null, true);
            echo " kW\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Cout de la demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 83), "cout", [], "any", false, false, false, 83), "html", null, true);
            echo " FCFA\">
                                            </div>
                                        </div>  
                                    </div>
                                ";
        }
        // line 88
        echo "                                ";
        // line 89
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Données de base de la demande</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_usage\" >Usage Installation</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 95), "html", null, true);
        echo "\" id=\"form_usage\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "alimente", [], "any", false, false, false, 99)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_alimente\">
                                        </div>
                                        ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "compteur", [], "any", false, false, false, 101)) {
            // line 102
            echo "                                            <div class=\"col-lg-4 alimente1\">
                                                <label for=\"form_compteur\" >Numéro Compteur</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "compteur", [], "any", false, false, false, 104), "html", null, true);
            echo "\" id=\"form_compteur\">
                                            </div>
                                            <div class=\"col-lg-4 alimente1\">
                                                <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "abonnement", [], "any", false, false, false, 108), "html", null, true);
            echo "\" id=\"form_abonnement\">
                                            </div>
                                            <div class=\"col-lg-4 alimente1\">
                                                <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "grstReseau", [], "any", false, false, false, 112), "html", null, true);
            echo "\" id=\"form_grstReseau\">
                                            </div>
                                        ";
        }
        // line 115
        echo "                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_localite\" >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 118), "html", null, true);
        echo "\" id=\"form_localite\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_adresse\" >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "adresse", [], "any", false, false, false, 122), "html", null, true);
        echo "\" id=\"form_adresse\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_habitation\" >Complément Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "habitation", [], "any", false, false, false, 126), "html", null, true);
        echo "\" id=\"form_habitation\">
                                        </div>
                                        ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "lattitude", [], "any", false, false, false, 128)) {
            // line 129
            echo "                                            <div class=\"col-lg-2\">
                                                <label for=\"form_lattitude\" >Latitude</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "lattitude", [], "any", false, false, false, 131), "html", null, true);
            echo "\" id=\"form_lattitude\">
                                            </div>
                                            <div class=\"col-lg-2\">
                                                <label for=\"form_longitude\" >Longitude</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "longitude", [], "any", false, false, false, 135), "html", null, true);
            echo "\" id=\"form_longitude\">
                                            </div>
                                        ";
        }
        // line 138
        echo "                                    </div>
                                </div>
                            
                                ";
        // line 142
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 142)) {
            // line 143
            echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Informations sur l'électricien</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                            <label >Nom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 149), "nom", [], "any", false, false, false, 149), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-5\">
                                            <label >Prénom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 153), "prenom", [], "any", false, false, false, 153), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 157), "localite", [], "any", false, false, false, 157), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 161), "adresse", [], "any", false, false, false, 161), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Téléphone</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 165), "telephone", [], "any", false, false, false, 165), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Email</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 169), "email", [], "any", false, false, false, 169), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Type de pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 173), "typePiece", [], "any", false, false, false, 173), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Numéro Pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 177), "numPiece", [], "any", false, false, false, 177), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4 mt-2\">
                                            <label >Scan CNI Electricien</label><br />
                                        ";
            // line 181
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJElectricien", [], "any", false, false, false, 181)) {
                // line 182
                echo "                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
                // line 183
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                <span onclick=\"window.open('";
                // line 185
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 185), "type" => "electricien"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">{.installation.PJElectricien.fichier}} </span>
                                        ";
            } else {
                // line 187
                echo "                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        ";
            }
            // line 189
            echo "                                        </div>
                                    </div>
                                </div>
                                ";
        }
        // line 192
        echo "                                

                                </fieldset>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "installation/showpop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 192,  411 => 189,  407 => 187,  402 => 185,  397 => 183,  394 => 182,  392 => 181,  385 => 177,  378 => 173,  371 => 169,  364 => 165,  357 => 161,  350 => 157,  343 => 153,  336 => 149,  328 => 143,  325 => 142,  320 => 138,  314 => 135,  307 => 131,  303 => 129,  301 => 128,  296 => 126,  289 => 122,  282 => 118,  277 => 115,  271 => 112,  264 => 108,  257 => 104,  253 => 102,  251 => 101,  242 => 99,  235 => 95,  227 => 89,  225 => 88,  217 => 83,  210 => 79,  203 => 75,  196 => 71,  186 => 66,  183 => 65,  181 => 64,  172 => 57,  164 => 55,  156 => 53,  154 => 52,  146 => 47,  135 => 40,  132 => 39,  129 => 38,  126 => 37,  123 => 36,  120 => 35,  118 => 34,  114 => 33,  107 => 29,  103 => 28,  96 => 23,  94 => 22,  91 => 21,  88 => 20,  85 => 19,  82 => 18,  79 => 17,  76 => 16,  73 => 15,  70 => 14,  68 => 13,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/showpop.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/showpop.html.twig");
    }
}
