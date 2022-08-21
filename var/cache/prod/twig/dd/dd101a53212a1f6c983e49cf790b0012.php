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

/* dossier/show2pop.html.twig */
class __TwigTemplate_e18d08889fffcd18cd21ab141c36090e extends Template
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
        return "base_modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base_modal.html.twig", "dossier/show2pop.html.twig", 1);
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
        if ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "affecte", [], "any", false, false, false, 27)) {
            // line 28
            echo "        ";
            $context["action_demande"] = "Affectation";
            // line 29
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                // line 30
                echo "            ";
                $context["link_action"] = "app_dossier_show";
                // line 31
                echo "        ";
            }
            // line 32
            echo "        ";
            $context["libelle_action"] = "Gérer le dossier";
            // line 33
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visite", [], "any", false, false, false, 33)) {
            // line 34
            echo "        ";
            $context["action_demande"] = "Planification Visite";
            // line 35
            echo "        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT"))) {
                // line 36
                echo "            ";
                $context["link_action"] = "app_dossier_show";
                // line 37
                echo "        ";
            }
            // line 38
            echo "        ";
            $context["libelle_action"] = "Gérer le dossier";
            // line 39
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 39)) {
            // line 40
            echo "        ";
            $context["action_demande"] = "Rapport de Visite";
            // line 41
            echo "        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT"))) {
                // line 42
                echo "            ";
                $context["link_action"] = "app_dossier_show";
                // line 43
                echo "        ";
            }
            // line 44
            echo "        ";
            $context["libelle_action"] = "Gérer le dossier";
            // line 45
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 45)) {
            // line 46
            echo "        ";
            $context["action_demande"] = "Résultat Inspection";
            // line 47
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                // line 48
                echo "            ";
                $context["link_action"] = "app_dossier_show";
                // line 49
                echo "        ";
            }
            // line 50
            echo "        ";
            $context["libelle_action"] = "Gérer le dossier";
            // line 51
            echo "    ";
        }
        // line 52
        echo "
    ";
        // line 53
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 53);
        // line 54
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 54);
        // line 55
        echo "    ";
        $context["link_liste"] = "stat";
        // line 56
        echo "    
    <section class=\"\">
        <a data-bs-dismiss=\"modal\" class=\"closeModal float-end next action-button btn btn-sm btn-secondary \">Fermer</a>
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 61
        echo twig_escape_filter($this->env, ($context["action_demande"] ?? null), "html", null, true);
        echo " de dossiers </span>
            </a>
        </header>

        <div class=\"container\">
            <nav class=\"navbar shadow bg-warning border border-dark my-2 p-0\">
                <div class=\"container-fluid ps-4\">
                        <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                            <div class=\"col\">
                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                </svg>
                                Détails du dossier
                            </div>
                            <div class=\"col\" align=\"right\">
                                <span class=\"text-success\">[
                                ";
        // line 77
        if ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 77)) {
            // line 78
            echo "                                    En attente de 
                                ";
        }
        // line 80
        echo "                                ";
        if ((( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "Etat", [], "any", false, false, false, 80) == "Affectation") && ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "Etat", [], "any", false, false, false, 80) == "Attestation"))) {
            // line 81
            echo "                                    En attente d' 
                                ";
        }
        // line 83
        echo "                                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "Etat", [], "any", false, false, false, 83), "html", null, true);
        echo "]</span>
                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                <fieldset id=\"synthese_demande\">
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif ";
        // line 95
        if ((($context["demande"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "numeroPassage", [], "any", false, false, false, 95) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
        }
        echo "</h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Numéro Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 100), "demandeCourante", [], "any", false, false, false, 100), "numero", [], "any", false, false, false, 100), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 104), "demandeCourante", [], "any", false, false, false, 104), "dateCreation", [], "any", false, false, false, 104), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 108), "demandeCourante", [], "any", false, false, false, 108), "puissance", [], "any", false, false, false, 108), "html", null, true);
        echo " kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 112), "demandeCourante", [], "any", false, false, false, 112), "cout", [], "any", false, false, false, 112), "html", null, true);
        echo " FCFA\">
                            </div>
                        </div>  
                    </div>

                    <div class=\"container mt-4\">
                        <div class=\"row\">
                            <div>
                        ";
        // line 120
        $context["rub"] = "";
        // line 121
        echo "                        ";
        $context["ix"] = 0;
        // line 122
        echo "                        ";
        $context["les_detailverif"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 122), "detailVerification", [], "any", false, false, false, 122);
        // line 123
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_detailverif"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
            // line 124
            echo "                                ";
            if ((($context["rub"] ?? null) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 124), "rubrique", [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124))) {
                // line 125
                echo "                                    ";
                if (($context["rub"] ?? null)) {
                    // line 126
                    echo "                                        </div>
                                    ";
                }
                // line 128
                echo "                                    <div id=\"zrub_";
                echo twig_escape_filter($this->env, ($context["ix"] ?? null), "html", null, true);
                echo "\">
                                        <h5 class=\"p-2 bg-dark text-light shadow border-bottom\"> ";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 129), "rubrique", [], "any", false, false, false, 129), "numero", [], "any", false, false, false, 129), "html", null, true);
                echo "- ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 129), "rubrique", [], "any", false, false, false, 129), "libelle", [], "any", false, false, false, 129), "html", null, true);
                echo "</h5>
                                    ";
                // line 130
                $context["rub"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 130), "rubrique", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130);
                // line 131
                echo "                                    ";
                $context["ix"] = (($context["ix"] ?? null) + 1);
                // line 132
                echo "                                ";
            }
            // line 133
            echo "                                <div class=\"shadow p-4 pt-2 mb-3\">
                                    <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                        <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                            <use xlink:href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
            echo "\"></use>
                                        </svg> ";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 137), "objetVerification", [], "any", false, false, false, 137), "html", null, true);
            echo "
                                        <div class=\"float-end fw-bold\">
                                        ";
            // line 139
            if (twig_get_attribute($this->env, $this->source, $context["pt"], "conclusion", [], "any", false, false, false, 139)) {
                // line 140
                echo "                                                <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"green\">
                                                    <use xlink:href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                <span class=\"text-success\">";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 143), "libelleConclusion1", [], "any", false, false, false, 143), "html", null, true);
                echo "</span>
                                        ";
            } else {
                // line 145
                echo "                                                <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"red\">
                                                    <use xlink:href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                <span class=\"text-danger\">";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 148), "libelleConclusion2", [], "any", false, false, false, 148), "html", null, true);
                echo "</span>
                                        ";
            }
            // line 150
            echo "                                        </div>
                                    </div>
                                        ";
            // line 152
            if ( !twig_get_attribute($this->env, $this->source, $context["pt"], "conclusion", [], "any", false, false, false, 152)) {
                // line 153
                echo "                                                <div class=\"fw-light ms-4 fs-8\">
                                                Commentaire: <span class=\"text-danger\">";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "commentaire", [], "any", false, false, false, 154), "html", null, true);
                echo "</span>
                                                </div>
                                        ";
            }
            // line 157
            echo "                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                            </div>
                        </div>
                    </div>

                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2\" id=\"paiement_demande\">
                ";
        // line 167
        if (twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdBy", [], "any", false, false, false, 167)], "method", false, false, false, 167)) {
            // line 168
            echo "                    ";
            $context["creator"] = twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdBy", [], "any", false, false, false, 168)], "method", false, false, false, 168);
            // line 169
            echo "                    <div align=\"left\" class=\"border border-warning shadow p-2 fs-8 mb-3 fw-light\">
                        <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["creator"] ?? null), "nomComplet", [], "any", false, false, false, 170), "html", null, true);
            echo "</span></div>
                        <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">";
            // line 171
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "createdAt", [], "any", false, false, false, 171), "d-m-Y à H:i:s"), "html", null, true);
            echo "</span></div>
                    </div>
                ";
        }
        // line 174
        echo "                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Traitement du dossier
                    </h2>
                    <div class=\"row\">
                        <hr class=\"mb-3\" />
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >N° Dossier</label>
                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-0 fw-bold fs-6\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 182), "numero", [], "any", false, false, false, 182), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Date création dossier</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-success form-control py-0 fw-bold fs-6\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "dateCreation", [], "any", false, false, false, 188), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" class=\"fs-7\" >Usage</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fw-bold fs-6\" value=\"";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 194), "installation", [], "any", false, false, false, 194), "usages", [], "any", false, false, false, 194), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Puissance</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fs-6\" value=\"";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 200), "puissance", [], "any", false, false, false, 200), "html", null, true);
        echo " kW\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 206), "installation", [], "any", false, false, false, 206), "localite", [], "any", false, false, false, 206), "nom", [], "any", false, false, false, 206), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Agence</label>
                                <input type=\"text\" disabled readonly class=\"form-control fw-bold text-black form-control py-0 fs-6\" value=\"";
        // line 212
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 212), "installation", [], "any", false, false, false, 212), "localite", [], "any", false, false, false, 212), "agence", [], "any", false, false, false, 212)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 212), "installation", [], "any", false, false, false, 212), "localite", [], "any", false, false, false, 212), "agence", [], "any", false, false, false, 212), "code", [], "any", false, false, false, 212), "html", null, true);
        } else {
            echo " - ";
        }
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-1\">
                            <label class=\"fs-7\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 217), "installation", [], "any", false, false, false, 217), "adresse", [], "any", false, false, false, 217), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 222), "installation", [], "any", false, false, false, 222), "electricien", [], "any", false, false, false, 222), "nom", [], "any", false, false, false, 222), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 222), "installation", [], "any", false, false, false, 222), "electricien", [], "any", false, false, false, 222), "prenom", [], "any", false, false, false, 222), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Tél Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control fw-bold py-0 fs-6\" value=\"";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 228), "installation", [], "any", false, false, false, 228), "electricien", [], "any", false, false, false, 228), "telephone", [], "any", false, false, false, 228), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <hr class=\"my-2 mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Référent chargé du dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
        // line 234
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "referent", [], "any", false, false, false, 234), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Contrôleur chargé du traitement</label>
                            ";
        // line 238
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 238)) {
            // line 239
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 239), "html", null, true);
            echo "\">
                            ";
        } else {
            // line 241
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 243
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Visite du site pour inspection</label>
                            ";
        // line 246
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visite", [], "any", false, false, false, 246)) {
            // line 247
            echo "                                <div class=\"row\">
                                    <div class=\"col-5\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Planifiée\">
                                    </div>
                                    <div class=\"col-7\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
            // line 252
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 252), "datePlanifie", [], "any", false, false, false, 252), "d-m-Y à H:i"), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"col-12\">
                                        Modèle Rapport d'inspection
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-1 fw-bold fs-6\" value=\"";
            // line 256
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 256), "rapport", [], "any", false, false, false, 256), "libelle", [], "any", false, false, false, 256), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 256), "rapport", [], "any", false, false, false, 256), "PointVerification", [], "any", false, false, false, 256), "count", [], "any", false, false, false, 256), "html", null, true);
            echo " points de vérification\">
                                    </div>
                                </div>
                            ";
        } else {
            // line 260
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 262
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Rapport de visite</label>
                            ";
        // line 265
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 265)) {
            // line 266
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Visite réalisée et Rapport élaboré\">
                            ";
        } else {
            // line 268
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non finalisé\">
                            ";
        }
        // line 270
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Résultat de conformité</label>
                            ";
        // line 273
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 273)) {
            // line 274
            echo "                                <input type=\"text\" disabled readonly class=\"bg-success bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Résultat inspection disponile\">
                            ";
        } else {
            // line 276
            echo "                                <input type=\"text\" disabled readonly class=\"bg-success  form-control text-light form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 278
        echo "                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 286
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 287
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "demande", [], "any", false, false, false, 287);
        // line 288
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 288);
        // line 289
        echo "<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"";
        // line 293
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "mode", [], "any", false, false, false, 293), "html", null, true);
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
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-up"), "html", null, true);
        echo "\"></use></svg>Cacher ...'); 
                \$(le_btn_bloc).prop('title', 'Cacher les détails');
                \$(le_btn_bloc).addClass(\"text-danger\");
                \$(le_btn_bloc).removeClass(\"text-warning\");
            } else {
                \$(le_bloc).hide();
                \$(le_titre_bloc).removeClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 312
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
        return "dossier/show2pop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 312,  624 => 305,  609 => 293,  603 => 289,  600 => 288,  597 => 287,  593 => 286,  583 => 278,  579 => 276,  575 => 274,  573 => 273,  568 => 270,  564 => 268,  560 => 266,  558 => 265,  553 => 262,  549 => 260,  540 => 256,  533 => 252,  526 => 247,  524 => 246,  519 => 243,  515 => 241,  509 => 239,  507 => 238,  500 => 234,  491 => 228,  480 => 222,  472 => 217,  459 => 212,  450 => 206,  441 => 200,  432 => 194,  423 => 188,  414 => 182,  404 => 174,  398 => 171,  394 => 170,  391 => 169,  388 => 168,  386 => 167,  376 => 159,  369 => 157,  363 => 154,  360 => 153,  358 => 152,  354 => 150,  349 => 148,  344 => 146,  341 => 145,  336 => 143,  331 => 141,  328 => 140,  326 => 139,  321 => 137,  317 => 136,  312 => 133,  309 => 132,  306 => 131,  304 => 130,  298 => 129,  293 => 128,  289 => 126,  286 => 125,  283 => 124,  278 => 123,  275 => 122,  272 => 121,  270 => 120,  259 => 112,  252 => 108,  245 => 104,  238 => 100,  228 => 95,  212 => 83,  208 => 81,  205 => 80,  201 => 78,  199 => 77,  190 => 71,  177 => 61,  170 => 56,  167 => 55,  164 => 54,  162 => 53,  159 => 52,  156 => 51,  153 => 50,  150 => 49,  147 => 48,  144 => 47,  141 => 46,  138 => 45,  135 => 44,  132 => 43,  129 => 42,  126 => 41,  123 => 40,  120 => 39,  117 => 38,  114 => 37,  111 => 36,  108 => 35,  105 => 34,  102 => 33,  99 => 32,  96 => 31,  93 => 30,  90 => 29,  87 => 28,  84 => 27,  82 => 26,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/show2pop.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/show2pop.html.twig");
    }
}
