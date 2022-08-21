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

/* installation/_index0_card.html.twig */
class __TwigTemplate_2a7435cbe308e57285c974ee23da9330 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <h4 class=\"fw-bold\">Toutes les Demandes</h4>
                        <select name=\"val_affichage_demande\" id=\"val_affichage_demande\" class=\"bg-warning bg-opacity-50 form-select-sm\">
                            <option ";
        // line 8
        if ((($context["affichage"] ?? null) == "listing")) {
            echo " selected=\"selected\" ";
        }
        echo " value=\"listing\">Affichage en Listing</option>
                            <option ";
        // line 9
        if ((($context["affichage"] ?? null) == "bloc")) {
            echo " selected=\"selected\" ";
        }
        echo " value=\"bloc\">Affichage en Blocs</option>
                        </select>
                    </div>
                </div>
                <span class=\"divider\">
                    <hr></span>
            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"height:0px; position:relative; top:4px;\">
                <div class=\"col-2 offset-3 fs-6 border-bottom priority-4\">
                    <select name=\"val_agence0\" id=\"val_agence0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Toutes les Agences ...</option>
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_agence"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 20
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 20) == ($context["val_agence"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "nom", [], "any", false, false, false, 20), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </select>
                </div>
                <div class=\"col-2 fs-6 border-bottom priority-4\">
                    <select name=\"val_usage0\" id=\"val_usage0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Tous les Usages ...</option>
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_usage"] ?? null));
        foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
            // line 28
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == ($context["val_usage"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["lib_obj"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['obj'], $context['lib_obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </select>
                </div>
                <div class=\"col-2 fs-6 border-bottom priority-4\">
                    <select name=\"val_statut0\" id=\"val_statut0\" class=\"form-select form-select-sm border-success py-1\">
                        <option value=\"\">Tous les statuts ...</option>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_statut"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 36
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == ($context["val_statut"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </select>
                </div>
                <div class=\"col-2 fs-6 border-bottom\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"";
        // line 40
        if (array_key_exists("val_rech", $context)) {
            echo twig_escape_filter($this->env, ($context["val_rech"] ?? null), "html", null, true);
        }
        echo "\" /></div>
                <div class=\"col-1\" align=\"center\">
                    <svg class=\"bi pt\" width=\"28\" height=\"28\" fill=\"#c32424\">
                        <use xlink:href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-pdf"), "html", null, true);
        echo "\"></use>
                    </svg>
                </div>
            </div>
            ";
        // line 47
        if ((twig_length_filter($this->env, ($context["les_installation"] ?? null)) == 0)) {
            // line 48
            echo "                <br />
                <div class=\"row pt-20\">
                    <div class=\"col-3\"></div>
                    <div class=\"col-6\">
                        <div class=\"alert alert-warning d-flex align-items-center\" role=\"alert\">
                            <div>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 24 24\">
                                    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
                                </svg>
                                Aucun enregistrement trouvé !
                            </div>
                        </div>
                    </div>
                </div>
            ";
        } else {
            // line 63
            echo "            <div align=\"top\" class=\"caption fs-5 mt-0 pt-0\">Liste des Demandes (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_installation"] ?? null), "getTotalItemCount", [], "any", false, false, false, 63), "html", null, true);
            echo ")</div>

            ";
            // line 66
            echo "
            <div class=\"row mt-4\">
                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_installation"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 69
                echo "                    ";
                $context["badge_etat"] = "danger";
                // line 70
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 70) == 7)) {
                    // line 71
                    echo "                        ";
                    $context["badge_etat"] = "warning";
                    // line 72
                    echo "                    ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 72) > 7)) {
                    // line 73
                    echo "                        ";
                    $context["badge_etat"] = "success";
                    // line 74
                    echo "                    ";
                }
                // line 75
                echo "                    ";
                $context["badge_usage"] = "warning";
                // line 76
                echo "                    ";
                $context["text_usage"] = "text-dark";
                // line 77
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "usages", [], "any", false, false, false, 77) != "domestique")) {
                    // line 78
                    echo "                        ";
                    $context["badge_usage"] = "primary text-light";
                    // line 79
                    echo "                        ";
                    $context["text_usage"] = "text-light";
                    // line 80
                    echo "                    ";
                }
                // line 81
                echo "                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"card-orig border-dark mb-3\">
                            <h5 class=\"card-header border-dark bg-";
                // line 83
                echo twig_escape_filter($this->env, ($context["badge_usage"] ?? null), "html", null, true);
                echo " py-1 px-2 pt\">
                                ";
                // line 84
                if (twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 84)) {
                    // line 85
                    echo "                                    <a title=\"Afficher les détails la demande\" class=\"text-decoration-none\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                    echo "\">
                                        <span class=\"";
                    // line 86
                    echo twig_escape_filter($this->env, ($context["text_usage"] ?? null), "html", null, true);
                    echo "\">Demande n° ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 86), "numero", [], "any", false, false, false, 86), "html", null, true);
                    echo "</span>
                                    </a>
                                    <a target=\"_blank\" title=\"Générer la demande en pdf\" class=\"text-decoration-none float-end p-0 m-0\" href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                    echo "\">
                                    <svg class=\"bi pt\" width=\"22\" height=\"22\" fill=\"white\">
                                        <use xlink:href=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-pdf"), "html", null, true);
                    echo "\"></use>
                                    </svg>
                                    </a>
                                ";
                } else {
                    // line 94
                    echo "                                    <a class=\"text-decoration-none\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                    echo "\">
                                        <span class=\"";
                    // line 95
                    echo twig_escape_filter($this->env, ($context["text_usage"] ?? null), "html", null, true);
                    echo "\">Saisie [";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdAt", [], "any", false, false, false, 95), "d/m/y_H:i:s"), "html", null, true);
                    echo "]</span>
                                    </a>
                                ";
                }
                // line 98
                echo "                            </h5>
                            <div class=\"card-body\">
                                <h6 class=\"card-title\">
                                    <a href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                echo "\"><span class=\"badge fs-7 bg-";
                echo twig_escape_filter($this->env, ($context["badge_usage"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "usages", [], "any", false, false, false, 101), "html", null, true);
                echo "</span></a>
                                    <a class=\"float-end\" href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 102)]), "html", null, true);
                echo "\">
                                        <span class=\"badge badge-";
                // line 103
                echo twig_escape_filter($this->env, ($context["badge_etat"] ?? null), "html", null, true);
                echo " fs-7 px-1\">
                                        ";
                // line 104
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 104) <= 7)) {
                    echo "                                       
                                            ";
                    // line 105
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 105), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 107
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 107), "etat", [], "any", false, false, false, 107), "html", null, true);
                    echo "
                                        ";
                }
                // line 109
                echo "                                        </span>
                                    </a>
                                </h6>
                                <p class=\"card-text fs-7\">
                                    ";
                // line 113
                if (twig_get_attribute($this->env, $this->source, $context["ag"], "electricien", [], "any", false, false, false, 113)) {
                    // line 114
                    echo "                                    <div class=\"mb-2 border-0 text-muted\" title=\"Electricien\">
                                        <svg class=\"bi pt\" width=\"22\" height=\"22\" fill=\"#036\">
                                            <use xlink:href=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person"), "html", null, true);
                    echo "\"></use>
                                        </svg>
                                        ";
                    // line 118
                    echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "electricien", [], "any", false, false, false, 118), "nomComplet", [], "any", false, false, false, 118)) < 30)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "electricien", [], "any", false, false, false, 118), "nomComplet", [], "any", false, false, false, 118)) : ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "electricien", [], "any", false, false, false, 118), "nomComplet", [], "any", false, false, false, 118), 0, 27) . "..."))), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
                                    ";
                }
                // line 121
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["ag"], "proprietaire", [], "any", false, false, false, 121)) {
                    // line 122
                    echo "                                    <div class=\"mb-2 border-0 text-muted\" title=\"Propriétaire de l'installation\">
                                        <svg class=\"bi pt\" width=\"22\" height=\"22\" fill=\"gray\">
                                            <use xlink:href=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person-check"), "html", null, true);
                    echo "\"></use>
                                        </svg>
                                        ";
                    // line 126
                    echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "proprietaire", [], "any", false, false, false, 126), "nomComplet", [], "any", false, false, false, 126)) < 30)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "proprietaire", [], "any", false, false, false, 126), "nomComplet", [], "any", false, false, false, 126)) : ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "proprietaire", [], "any", false, false, false, 126), "nomComplet", [], "any", false, false, false, 126), 0, 27) . "..."))), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
                                    ";
                }
                // line 129
                echo "                                    <div class=\"mb-2 border-0 text-muted\" title=\"Localisation installation\">
                                        <svg class=\"bi pt\" width=\"20\" height=\"20\" fill=\"#6d0d2b\">
                                            <use xlink:href=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#geo-alt"), "html", null, true);
                echo "\"></use>
                                        </svg>
                                        ";
                // line 133
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 133))) {
                    // line 134
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 134), "departement", [], "any", false, false, false, 134), "nom", [], "any", false, false, false, 134), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 134), "nom", [], "any", false, false, false, 134), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 136
                    echo "                                            <span class=\"text-danger\">-</span>
                                        ";
                }
                // line 138
                echo "                                    </div>
                                    <p class=\"ms-2 fs-7\">
                                        ";
                // line 140
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "typeconstruction", [], "any", false, false, false, 140))) {
                    // line 141
                    echo "                                            [<span class=\"text-dark fw-bold\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "typeconstruction", [], "any", false, false, false, 141), "nom", [], "any", false, false, false, 141), "html", null, true);
                    echo "]</span>
                                            ";
                    // line 143
                    echo "                                        ";
                } else {
                    // line 144
                    echo "                                            <span class=\"text-danger\">-</span>
                                        ";
                }
                // line 146
                echo "                                    </p>
                                    ";
                // line 147
                if (twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 147)) {
                    // line 148
                    echo "                                        <div class=\"mt-2 pt-2 border-top border-secondary text-dark\">
                                            <div class=\"row\">
                                                <div class=\"col-5\">
                                                    <svg class=\"bi pt\" width=\"20\" height=\"20\" fill=\"orange\">
                                                        <use xlink:href=\"";
                    // line 152
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightning-charge"), "html", null, true);
                    echo "\"></use>
                                                    </svg>
                                                    ";
                    // line 154
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 154), "puissance", [], "any", false, false, false, 154), "html", null, true);
                    echo " kW
                                                </div>
                                                <div class=\"col-7\">
                                                    <svg class=\"bi pt\" width=\"20\" height=\"20\" fill=\"blue\">
                                                        <use xlink:href=\"";
                    // line 158
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#cash"), "html", null, true);
                    echo "\"></use>
                                                    </svg>
                                                    ";
                    // line 160
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 160), "cout", [], "any", false, false, false, 160), 0, ",", " "), "html", null, true);
                    echo " FCFA
                                                </div>
                                            </div>
                                        </div>
                                    ";
                }
                // line 165
                echo "                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "            </div>

                ";
            // line 171
            twig_get_attribute($this->env, $this->source, ($context["les_installation"] ?? null), "setPageRange", [0 => 1], "method", false, false, false, 171);
            // line 172
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["les_installation"] ?? null), "pagination.html.twig");
            echo "

            ";
        }
        // line 175
        echo "        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "installation/_index0_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 175,  442 => 172,  440 => 171,  436 => 169,  427 => 165,  419 => 160,  414 => 158,  407 => 154,  402 => 152,  396 => 148,  394 => 147,  391 => 146,  387 => 144,  384 => 143,  379 => 141,  377 => 140,  373 => 138,  369 => 136,  361 => 134,  359 => 133,  354 => 131,  350 => 129,  344 => 126,  339 => 124,  335 => 122,  332 => 121,  326 => 118,  321 => 116,  317 => 114,  315 => 113,  309 => 109,  303 => 107,  298 => 105,  294 => 104,  290 => 103,  286 => 102,  278 => 101,  273 => 98,  265 => 95,  260 => 94,  253 => 90,  248 => 88,  241 => 86,  236 => 85,  234 => 84,  230 => 83,  226 => 81,  223 => 80,  220 => 79,  217 => 78,  214 => 77,  211 => 76,  208 => 75,  205 => 74,  202 => 73,  199 => 72,  196 => 71,  193 => 70,  190 => 69,  186 => 68,  182 => 66,  176 => 63,  159 => 48,  157 => 47,  150 => 43,  142 => 40,  138 => 38,  123 => 36,  119 => 35,  112 => 30,  97 => 28,  93 => 27,  86 => 22,  71 => 20,  67 => 19,  52 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/_index0_card.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/_index0_card.html.twig");
    }
}
