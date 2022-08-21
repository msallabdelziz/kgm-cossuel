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

/* dossier/rejetrapport.html.twig */
class __TwigTemplate_854d02a0832a551292b4f657afa864e8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dossier/rejetrapport.html.twig", 1);
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
        if ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "affecte", [], "any", false, false, false, 31)) {
            // line 32
            echo "        ";
            $context["action_demande"] = "Affectation";
            // line 33
            echo "        ";
            $context["link_liste"] = "app_dossier_affectation";
            // line 34
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                // line 35
                echo "            ";
                $context["link_action"] = "app_dossier_affecter";
                // line 36
                echo "        ";
            }
            // line 37
            echo "        ";
            $context["libelle_action"] = "Affecter à un contrôleur";
            // line 38
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visite", [], "any", false, false, false, 38)) {
            // line 39
            echo "        ";
            $context["action_demande"] = "Planification Visite";
            // line 40
            echo "        ";
            $context["link_liste"] = "app_dossier_visite";
            // line 41
            echo "        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT"))) {
                // line 42
                echo "            ";
                $context["link_action"] = "app_dossier_visiter";
                // line 43
                echo "        ";
            }
            // line 44
            echo "        ";
            $context["libelle_action"] = "Planifier une visite";
            // line 45
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 45)) {
            // line 46
            echo "        ";
            $context["action_demande"] = "Rapport de Visite";
            // line 47
            echo "        ";
            $context["link_liste"] = "app_dossier_rapport";
            // line 48
            echo "        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT"))) {
                // line 49
                echo "            ";
                $context["link_action"] = "app_dossier_rapporter";
                // line 50
                echo "        ";
            }
            // line 51
            echo "        ";
            $context["libelle_action"] = "Elaborer le rapport de visite";
            // line 52
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 52)) {
            // line 53
            echo "        ";
            $context["action_demande"] = "Résultat Inspection";
            // line 54
            echo "        ";
            $context["link_liste"] = "app_dossier_attestation";
            // line 55
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                // line 56
                echo "            ";
                $context["link_action"] = "app_dossier_attestation";
                // line 57
                echo "        ";
            }
            // line 58
            echo "        ";
            $context["libelle_action"] = "Confirmer Résultats Inspection";
            // line 59
            echo "    ";
        }
        // line 60
        echo "
    ";
        // line 61
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 61);
        // line 62
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 62);
        // line 63
        echo "    
    ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 64), "get", [0 => "page_liste_dossier"], "method", true, true, false, 64) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 64), "get", [0 => "page_liste_dossier"], "method", false, false, false, 64))) {
            // line 65
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 65), "get", [0 => "page_liste_dossier"], "method", false, false, false, 65);
            // line 66
            echo "    ";
        }
        // line 67
        echo "
    ";
        // line 68
        $context["link_liste"] = "app_dossier_showrapp";
        // line 69
        echo "
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 73
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
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                </svg>
                                Détails du dossier
                            </div>
                            <div class=\"col\" align=\"right\">
                                <span class=\"text-success\">[En attente de ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "Etat", [], "any", false, false, false, 88), "html", null, true);
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
        // line 100
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandecourante", [], "any", false, false, false, 100) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandecourante", [], "any", false, false, false, 100), "numeroPassage", [], "any", false, false, false, 100) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
        }
        echo "</h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Numéro Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 105), "demandeCourante", [], "any", false, false, false, 105), "numero", [], "any", false, false, false, 105), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 109), "demandeCourante", [], "any", false, false, false, 109), "dateCreation", [], "any", false, false, false, 109), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 113), "demandeCourante", [], "any", false, false, false, 113), "puissance", [], "any", false, false, false, 113), "html", null, true);
        echo " kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 117), "demandeCourante", [], "any", false, false, false, 117), "cout", [], "any", false, false, false, 117), "html", null, true);
        echo " FCFA\">
                            </div>
                        </div>  
                    </div>

                    <div class=\"container mt-4\">
                        <div class=\"row\">
                            <div>
                        ";
        // line 125
        $context["rub"] = "";
        // line 126
        echo "                        ";
        $context["ix"] = 0;
        // line 127
        echo "                        ";
        $context["les_detailverif"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 127), "detailVerification", [], "any", false, false, false, 127);
        // line 128
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_detailverif"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
            // line 129
            echo "                                ";
            if ((($context["rub"] ?? null) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 129), "rubrique", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129))) {
                // line 130
                echo "                                    ";
                if (($context["rub"] ?? null)) {
                    // line 131
                    echo "                                        </div>
                                    ";
                }
                // line 133
                echo "                                    <div id=\"zrub_";
                echo twig_escape_filter($this->env, ($context["ix"] ?? null), "html", null, true);
                echo "\">
                                        <h5 class=\"p-2 bg-dark text-light shadow border-bottom\"> ";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 134), "rubrique", [], "any", false, false, false, 134), "numero", [], "any", false, false, false, 134), "html", null, true);
                echo "- ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 134), "rubrique", [], "any", false, false, false, 134), "libelle", [], "any", false, false, false, 134), "html", null, true);
                echo "</h5>
                                    ";
                // line 135
                $context["rub"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 135), "rubrique", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135);
                // line 136
                echo "                                    ";
                $context["ix"] = (($context["ix"] ?? null) + 1);
                // line 137
                echo "                                ";
            }
            // line 138
            echo "                                <div class=\"shadow p-4 pt-2 mb-3\">
                                    <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                        <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                            <use xlink:href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
            echo "\"></use>
                                        </svg> ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 142), "objetVerification", [], "any", false, false, false, 142), "html", null, true);
            echo "
                                        <div class=\"float-end fw-bold\">
                                        ";
            // line 144
            if (twig_get_attribute($this->env, $this->source, $context["pt"], "sansobjet", [], "any", false, false, false, 144)) {
                // line 145
                echo "                                                <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"black\">
                                                    <use xlink:href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x-octagon-fill"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                Sans Objet
                                        ";
            } else {
                // line 150
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["pt"], "conclusion", [], "any", false, false, false, 150)) {
                    // line 151
                    echo "                                                    <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"green\">
                                                        <use xlink:href=\"";
                    // line 152
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check"), "html", null, true);
                    echo "\"></use>
                                                    </svg>
                                                    <span class=\"text-success\">";
                    // line 154
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 154), "libelleConclusion1", [], "any", false, false, false, 154), "html", null, true);
                    echo "</span>
                                            ";
                } else {
                    // line 156
                    echo "                                                    <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"red\">
                                                        <use xlink:href=\"";
                    // line 157
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x"), "html", null, true);
                    echo "\"></use>
                                                    </svg>
                                                    <span class=\"text-danger\">";
                    // line 159
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 159), "libelleConclusion2", [], "any", false, false, false, 159), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 161
                echo "                                        ";
            }
            // line 162
            echo "                                        </div>
                                    </div>
                                        ";
            // line 164
            if (( !twig_get_attribute($this->env, $this->source, $context["pt"], "conclusion", [], "any", false, false, false, 164) &&  !twig_get_attribute($this->env, $this->source, $context["pt"], "sansobjet", [], "any", false, false, false, 164))) {
                // line 165
                echo "                                                <div class=\"fw-light ms-4 fs-8\">
                                                Commentaire: <span class=\"text-danger\">";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "commentaire", [], "any", false, false, false, 166), "html", null, true);
                echo "</span>
                                                </div>
                                        ";
            }
            // line 169
            echo "                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "
                                <div>
                                    <h5 class=\"p-2 bg-dark text-light shadow border-bottom\">Tableau 2: Mesures des prises de terre </h5>
                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Mesures des prises de terre
                                                <div class=\"float-end fw-bold\">
                                                </div>
                                            </div>
                                            <div class=\"fw-light ms-4 fs-7\">
                                                <span class=\"text-dark\">";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 184), "mesurePriseTerre", [], "any", false, false, false, 184), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Barrette
                                                <div class=\"float-end fw-bold\">
                                                </div>
                                            </div>
                                            <div class=\"fw-light ms-4 fs-7\">
                                                <span class=\"text-dark\">";
        // line 196
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 196), "barrette", [], "any", false, false, false, 196), "html", null, true);
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
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                            </svg> Commentaire sur l'inspection
                                            <div class=\"float-end fw-bold\">
                                            </div>
                                        </div>
                                        <div class=\"fw-light ms-4 fs-8\">
                                            <span class=\"text-danger\">";
        // line 213
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 213), "commentaire2", [], "any", false, false, false, 213), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 1
                                                <div class=\"\">
                                                ";
        // line 224
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto1", [], "any", false, false, false, 224)) {
            // line 225
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto1", [], "any", false, false, false, 225), "fichier", [], "any", false, false, false, 225))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 227
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 2
                                                <div class=\"\">
                                                ";
        // line 236
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto2", [], "any", false, false, false, 236)) {
            // line 237
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto2", [], "any", false, false, false, 237), "fichier", [], "any", false, false, false, 237))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 239
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 3
                                                <div class=\"\">
                                                ";
        // line 248
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto3", [], "any", false, false, false, 248)) {
            // line 249
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto3", [], "any", false, false, false, 249), "fichier", [], "any", false, false, false, 249))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 251
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 4
                                                <div class=\"\">
                                                ";
        // line 260
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto4", [], "any", false, false, false, 260)) {
            // line 261
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "PJPhoto4", [], "any", false, false, false, 261), "fichier", [], "any", false, false, false, 261))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 263
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Signature Controleur
                                                <div class=\"\">
                                                ";
        // line 275
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 275), "signcontroleur", [], "any", false, false, false, 275)) {
            // line 276
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 276), "signcontroleur", [], "any", false, false, false, 276), "fichier", [], "any", false, false, false, 276))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 278
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Signature Electricien
                                                <div class=\"\">
                                                ";
        // line 287
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 287), "signelectricien", [], "any", false, false, false, 287)) {
            // line 288
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 288), "signelectricien", [], "any", false, false, false, 288), "fichier", [], "any", false, false, false, 288))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 290
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

            <div class=\"col-lg-4 mb-2\" id=\"paiement_demande\">
                <div id=\"validation_dossier\" class=\"mb-4\">
                    ";
        // line 303
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["dossierForm"] ?? null), 'form_start');
        echo "
                    <div class=\"card mb-2 pb-0\">
                        <h2 class=\"fs-title\">Rejet du rapport d'inspection</h2>
                        <div class=\"row\">
                            <hr class=\"mb-3\" />
                            <div class=\"\">
                                ";
        // line 309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "commentaire", [], "any", false, false, false, 309), 'label');
        echo "<br />
                                ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["dossierForm"] ?? null), "commentaire", [], "any", false, false, false, 310), 'widget');
        echo "<br />
                            </div>
                        </div>  
                        <div align=\"right\">
                            <a href=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link_liste"] ?? null), ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 314)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-secondary btn my-3\">Annuler</a>
                            <button type=\"submit\" class=\"next action-button btn btn-success btn my-3 ms-2\">Valider et rejeter le dossier</button>
                        </div>
                    </div>
                    ";
        // line 318
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["dossierForm"] ?? null), 'form_end');
        echo "
                </div>

                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Traitement du dossier
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_histo", ["id" => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 324)]), "html", null, true);
        echo "\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 325
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
        // line 334
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 334), "numero", [], "any", false, false, false, 334), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Date création dossier</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-success form-control py-0 fw-bold fs-6\" value=\"";
        // line 340
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "dateCreation", [], "any", false, false, false, 340), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" class=\"fs-7\" >Usage</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fw-bold fs-6\" value=\"";
        // line 346
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 346), "installation", [], "any", false, false, false, 346), "usages", [], "any", false, false, false, 346), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Puissance</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fs-6\" value=\"";
        // line 352
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 352), "puissance", [], "any", false, false, false, 352), "html", null, true);
        echo " kW\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 358
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 358), "installation", [], "any", false, false, false, 358), "localite", [], "any", false, false, false, 358), "nom", [], "any", false, false, false, 358), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Agence</label>
                                <input type=\"text\" disabled readonly class=\"form-control fw-bold text-black form-control py-0 fs-6\" value=\"";
        // line 364
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 364), "installation", [], "any", false, false, false, 364), "localite", [], "any", false, false, false, 364), "agence", [], "any", false, false, false, 364)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 364), "installation", [], "any", false, false, false, 364), "localite", [], "any", false, false, false, 364), "agence", [], "any", false, false, false, 364), "code", [], "any", false, false, false, 364), "html", null, true);
        } else {
            echo " - ";
        }
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-1\">
                            <label class=\"fs-7\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 369
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 369), "installation", [], "any", false, false, false, 369), "adresse", [], "any", false, false, false, 369), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 374
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 374), "installation", [], "any", false, false, false, 374), "electricien", [], "any", false, false, false, 374), "nom", [], "any", false, false, false, 374), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 374), "installation", [], "any", false, false, false, 374), "electricien", [], "any", false, false, false, 374), "prenom", [], "any", false, false, false, 374), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Tél Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control fw-bold py-0 fs-6\" value=\"";
        // line 380
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 380), "installation", [], "any", false, false, false, 380), "electricien", [], "any", false, false, false, 380), "telephone", [], "any", false, false, false, 380), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <hr class=\"my-2 mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Référent chargé du dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
        // line 386
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "referent", [], "any", false, false, false, 386), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Contrôleur chargé du traitement</label>
                            ";
        // line 390
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 390)) {
            // line 391
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "controleur", [], "any", false, false, false, 391), "html", null, true);
            echo "\">
                            ";
        } else {
            // line 393
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 395
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Visite du site pour inspection</label>
                            ";
        // line 398
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visite", [], "any", false, false, false, 398)) {
            // line 399
            echo "                                <div class=\"row\">
                                    <div class=\"col-5\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Planifiée\">
                                    </div>
                                    <div class=\"col-7\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
            // line 404
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 404), "datePlanifie", [], "any", false, false, false, 404), "d-m-Y à H:i"), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"col-12 mb-2\">
                                        Modèle Rapport d'inspection
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-1 fw-bold fs-6\" value=\"";
            // line 408
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 408), "rapport", [], "any", false, false, false, 408), "libelle", [], "any", false, false, false, 408), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 408), "rapport", [], "any", false, false, false, 408), "PointVerification", [], "any", false, false, false, 408), "count", [], "any", false, false, false, 408), "html", null, true);
            echo " points de vérification\">
                                    </div>
                                </div>
                            ";
        } else {
            // line 412
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 414
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Rapport de visite</label>
                            ";
        // line 417
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "rapport", [], "any", false, false, false, 417)) {
            // line 418
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Visite réalisée et Rapport élaboré\">
                            ";
        } else {
            // line 420
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non finalisé\">
                            ";
        }
        // line 422
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Résultat de conformité</label>
                            ";
        // line 425
        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 425)) {
            // line 426
            echo "                                <input type=\"text\" disabled readonly class=\"bg-success bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Résultat inspection disponile\">
                            ";
        } else {
            // line 428
            echo "                                <input type=\"text\" disabled readonly class=\"bg-success  form-control text-light form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 430
        echo "                        </div>
                    </div>  
                </div>

            </div>
        </div>
    </section>
";
    }

    // line 439
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 440
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 440);
        // line 441
        echo "    ";
        $context["paiement"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "paiement", [], "any", false, false, false, 441);
        // line 442
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 442);
        // line 443
        echo "<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"";
        // line 447
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "mode", [], "any", false, false, false, 447), "html", null, true);
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
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-up"), "html", null, true);
        echo "\"></use></svg>Cacher ...'); 
                \$(le_btn_bloc).prop('title', 'Cacher les détails');
                \$(le_btn_bloc).addClass(\"text-danger\");
                \$(le_btn_bloc).removeClass(\"text-warning\");
            } else {
                \$(le_bloc).hide();
                \$(le_titre_bloc).removeClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 466
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
        return "dossier/rejetrapport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  891 => 466,  881 => 459,  866 => 447,  860 => 443,  857 => 442,  854 => 441,  851 => 440,  847 => 439,  836 => 430,  832 => 428,  828 => 426,  826 => 425,  821 => 422,  817 => 420,  813 => 418,  811 => 417,  806 => 414,  802 => 412,  793 => 408,  786 => 404,  779 => 399,  777 => 398,  772 => 395,  768 => 393,  762 => 391,  760 => 390,  753 => 386,  744 => 380,  733 => 374,  725 => 369,  712 => 364,  703 => 358,  694 => 352,  685 => 346,  676 => 340,  667 => 334,  655 => 325,  651 => 324,  642 => 318,  635 => 314,  628 => 310,  624 => 309,  615 => 303,  600 => 290,  594 => 288,  592 => 287,  586 => 284,  578 => 278,  572 => 276,  570 => 275,  564 => 272,  553 => 263,  547 => 261,  545 => 260,  539 => 257,  531 => 251,  525 => 249,  523 => 248,  517 => 245,  509 => 239,  503 => 237,  501 => 236,  495 => 233,  487 => 227,  481 => 225,  479 => 224,  473 => 221,  462 => 213,  453 => 207,  439 => 196,  430 => 190,  421 => 184,  412 => 178,  403 => 171,  396 => 169,  390 => 166,  387 => 165,  385 => 164,  381 => 162,  378 => 161,  373 => 159,  368 => 157,  365 => 156,  360 => 154,  355 => 152,  352 => 151,  349 => 150,  342 => 146,  339 => 145,  337 => 144,  332 => 142,  328 => 141,  323 => 138,  320 => 137,  317 => 136,  315 => 135,  309 => 134,  304 => 133,  300 => 131,  297 => 130,  294 => 129,  289 => 128,  286 => 127,  283 => 126,  281 => 125,  270 => 117,  263 => 113,  256 => 109,  249 => 105,  239 => 100,  224 => 88,  216 => 83,  203 => 73,  197 => 69,  195 => 68,  192 => 67,  189 => 66,  186 => 65,  184 => 64,  181 => 63,  178 => 62,  176 => 61,  173 => 60,  170 => 59,  167 => 58,  164 => 57,  161 => 56,  158 => 55,  155 => 54,  152 => 53,  149 => 52,  146 => 51,  143 => 50,  140 => 49,  137 => 48,  134 => 47,  131 => 46,  128 => 45,  125 => 44,  122 => 43,  119 => 42,  116 => 41,  113 => 40,  110 => 39,  107 => 38,  104 => 37,  101 => 36,  98 => 35,  95 => 34,  92 => 33,  89 => 32,  87 => 31,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/rejetrapport.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/rejetrapport.html.twig");
    }
}
