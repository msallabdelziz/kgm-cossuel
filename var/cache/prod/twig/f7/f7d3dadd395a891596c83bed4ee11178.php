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

/* paiement/histo.html.twig */
class __TwigTemplate_41a006998e3e00e72b6ca9adcade5fb0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "paiement/histo.html.twig", 1);
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
        echo "    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <h4 class=\"fw-bold\">Historique Paiements enregistrés</h4>
                    </div>
                </div>
                <span class=\"divider\">
                    <hr></span>
            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light priority-4\" style=\"\">
                <div class=\"col-4 fs-6 border-bottom py-1\">
                    <span class=\"float-start fs-6 me-2\">Période du </span> <input type=\"date\" name=\"val_deb0\" id=\"val_deb0\" style=\"width:160px;\" class=\"form-control float-start border-warning p-1 fs-7\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["val_deb"] ?? null), "html", null, true);
        echo "\" />
                    <input type=\"date\" name=\"val_fin0\" max=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" id=\"val_fin0\" style=\"width:160px;\" class=\"form-control float-start border-warning p-1 fs-7 ms-2\" value=\"";
        echo twig_escape_filter($this->env, ($context["val_fin"] ?? null), "html", null, true);
        echo "\" />
                </div>
                <div class=\"col-8 fs-6 border-bottom py-1\" align=\"right\">
                    <span class=\"fs-6 me-2\">Situation de </span>
                    <button id=\"perio_all\" class=\"btn btn-outline-primary btn-sm me-2 px-4 pt\">Tout</button>
                    <button id=\"perio_demb\" class=\"btn btn-outline-primary btn-sm me-2 px-4 pt\">Hier</button>
                    <button id=\"perio_tey\" class=\"btn btn-outline-primary btn-sm me-2 pt\">Aujourd'hui</button>
                    <button id=\"perio_week\" class=\"btn btn-outline-primary btn-sm me-2 pt\">Cette semaine</button>
                    <button id=\"perio_mois0\" class=\"btn btn-outline-primary btn-sm me-2 pt\">Mois passé</button>
                    <button id=\"perio_mois\" class=\"btn btn-outline-primary btn-sm me-2 pt\">Ce mois</button>
                </div>
            </div>
            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"\">
                <div class=\"clear my-1\"></div>
                <div class=\"col-2 offset-lg-3 fs-6 border-bottom priority-4\">
                    <select name=\"val_agence0\" id=\"val_agence0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Toutes les Agences ...</option>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_agence"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 35
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 35) == ($context["val_agence"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "nom", [], "any", false, false, false, 35), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </select>
                </div>
                <div class=\"col-2 fs-6 border-bottom priority-4\">
                    <select name=\"val_modep0\" id=\"val_modep0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Tous les Modes ...</option>
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_modep"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 43
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == ($context["val_modep"] ?? null))) {
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
        // line 45
        echo "                    </select>
                </div>
                <div class=\"col-2 fs-6 border-bottom priority-4\">
                    <select name=\"val_usage0\" id=\"val_usage0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Tous les Usages ...</option>
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_usage"] ?? null));
        foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
            // line 51
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
        // line 53
        echo "                    </select>
                </div>
                <div class=\"col-lg-2 offset-5 offset-lg-0 col-6 fs-6 border-bottom\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"";
        // line 55
        if (array_key_exists("val_rech", $context)) {
            echo twig_escape_filter($this->env, ($context["val_rech"] ?? null), "html", null, true);
        }
        echo "\" /></div>
                <div class=\"col-1 col-lg-1 priority-3\" align=\"center\">
                    <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"#c32424\">
                        <use xlink:href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-pdf"), "html", null, true);
        echo "\"></use>
                    </svg>
                </div>
            </div>
            <div class=\"clear\"></div>
            ";
        // line 63
        if ((twig_length_filter($this->env, ($context["les_demande"] ?? null)) == 0)) {
            // line 64
            echo "                <div class=\"clear pt-2\"></div>
                <div class=\"row pt-2\">
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
            // line 79
            echo "            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Historique des paiements (";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_demande"] ?? null), "getTotalItemCount", [], "any", false, false, false, 80), "html", null, true);
            echo ")</caption>
            <thead>
                <tr>
                    <th scope=\"col\">N° demande</th> 
                    <th class=\"priority-3\">Usage</th> 
                    <th class=\"priority-5\">Agence</th>
                    <th class=\"priority-4\">Date Paiement</th>
                    <th class=\"priority-3\">Montant</th>
                    <th class=\"priority-4\">Mode Paiement</th>
                    <th class=\"priority-5\">Enregistré par</th>
                    <th class=\"priority-5\">Validé par</th>
                    <th>Statut paiement</th>
                    ";
            // line 93
            echo "                    ";
            // line 94
            echo "                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_demande"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 99
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 99) != "Paiement validé")) {
                    // line 100
                    echo "                        ";
                    $context["badge_etat"] = "danger";
                    // line 101
                    echo "                    ";
                } else {
                    // line 102
                    echo "                        ";
                    $context["badge_etat"] = "success";
                    // line 103
                    echo "                    ";
                }
                // line 104
                echo "                    <tr>
                        <td scope=\"row\">
                                <a href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">
                                    ";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "numero", [], "any", false, false, false, 107), "html", null, true);
                echo "
                                </a>
                        </td>
                        <td>
                        <a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 111)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">
                            ";
                // line 112
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "installation", [], "any", false, false, false, 112), "usages", [], "any", false, false, false, 112) == "domestique")) {
                    // line 113
                    echo "                                <span class=\"text-warning fs-8 fw-bold\">Domestique</span>
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 114
$context["ag"], "installation", [], "any", false, false, false, 114), "usages", [], "any", false, false, false, 114) == "non_domestique")) {
                    // line 115
                    echo "                                <span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 116
$context["ag"], "installation", [], "any", false, false, false, 116), "usages", [], "any", false, false, false, 116) == "erp_ert")) {
                    // line 117
                    echo "                                <span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
                            ";
                }
                // line 119
                echo "                        </a></td>
                        <td class=\"priority-4\">
                            ";
                // line 121
                if (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "installation", [], "any", false, false, false, 121), "localite", [], "any", false, false, false, 121)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "installation", [], "any", false, false, false, 121), "localite", [], "any", false, false, false, 121), "agence", [], "any", false, false, false, 121)))) {
                    // line 122
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "installation", [], "any", false, false, false, 122), "localite", [], "any", false, false, false, 122), "agence", [], "any", false, false, false, 122), "nom", [], "any", false, false, false, 122), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 124
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 126
                echo "                        </td>
                        <td class=\"priority-4\">
                                ";
                // line 128
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 128), "datePaiement", [], "any", false, false, false, 128), "d-m-Y"), "html", null, true);
                echo "
                        </td>
                        ";
                // line 131
                echo "                        <td class=\"priority-3\" align=\"right\" style=\"padding-right:30px;\">
                                <span class=\"badge bg-info bg-opacity-25 fs-8 text-dark p-1\">";
                // line 132
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "cout", [], "any", false, false, false, 132), 0, ",", " "), "html", null, true);
                echo " FCFA</span>
                        </td>
                        <td class=\"priority-4\">
                                ";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 135), "mode", [], "any", false, false, false, 135), "html", null, true);
                echo "
                        </td>
                        <td class=\"priority-5\">
                                ";
                // line 138
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 138), "createdBy", [], "any", false, false, false, 138)) {
                    // line 139
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 139), "createdBy", [], "any", false, false, false, 139)], "method", false, false, false, 139)) {
                        // line 140
                        echo "                                        ";
                        $context["creator"] = twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 140), "createdBy", [], "any", false, false, false, 140)], "method", false, false, false, 140);
                        // line 141
                        echo "                                        <span class=\"text-dark fs-8\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["creator"] ?? null), "nomComplet", [], "any", false, false, false, 141), "html", null, true);
                        echo "</span>
                                    ";
                    }
                    // line 143
                    echo "                                ";
                } else {
                    // line 144
                    echo "                                    -
                                ";
                }
                // line 146
                echo "                        </td>
                        <td class=\"priority-5\">
                                ";
                // line 148
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 148), "updatedBy", [], "any", false, false, false, 148)) {
                    // line 149
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 149), "updatedBy", [], "any", false, false, false, 149)], "method", false, false, false, 149)) {
                        // line 150
                        echo "                                        ";
                        $context["creator"] = twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 150), "updatedBy", [], "any", false, false, false, 150)], "method", false, false, false, 150);
                        // line 151
                        echo "                                        <span class=\"text-danger fs-8\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["creator"] ?? null), "nomComplet", [], "any", false, false, false, 151), "html", null, true);
                        echo "</span>
                                    ";
                    }
                    // line 153
                    echo "                                ";
                } else {
                    // line 154
                    echo "                                    -
                                ";
                }
                // line 156
                echo "                        </td>
                        <td>
                            <a  href=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 158), "id", [], "any", false, false, false, 158)]), "html", null, true);
                echo "\">
                                ";
                // line 159
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "installation", [], "any", false, false, false, 159), "step", [], "any", false, false, false, 159) == 8)) {
                    // line 160
                    echo "                                    <span class=\"badge badge-success fs-8\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 160), "html", null, true);
                    echo "</span>
                                ";
                } else {
                    // line 162
                    echo "                                    <span class=\"badge bg-green fs-8\">Paiement validé</span>
                                ";
                }
                // line 164
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 164) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 164), "etatRembousement", [], "any", false, false, false, 164))) {
                    // line 165
                    echo "                                    <span class=\"text-danger fs-8\">Remboursé</span>
                                ";
                }
                // line 167
                echo "                            </a>
                        </td>
                        <td class=\"text-end\">
                                <a href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 170), "id", [], "any", false, false, false, 170)]), "html", null, true);
                echo "\" class=\"mx-1\" title=\"Afficher les détails\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                        <use xlink:href=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "            </tbody>
            </table>

                ";
            // line 181
            twig_get_attribute($this->env, $this->source, ($context["les_demande"] ?? null), "setPageRange", [0 => 1], "method", false, false, false, 181);
            // line 182
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["les_demande"] ?? null), "pagination.html.twig");
            echo "

            ";
        }
        // line 185
        echo "        </div>
    </section>
";
    }

    // line 189
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "<script>
    \$(document).ready(function() {

        ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "agence", 1 => "usage", 2 => "statut", 3 => "modep"]);
        foreach ($context['_seq'] as $context["_key"] => $context["filtre"]) {
            // line 194
            echo "            \$('#val_";
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "').val(\$('#val_";
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').val())
            \$('#val_";
            // line 195
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').on('change', function() {
                optSel=\$('#val_";
            // line 196
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').find(\"option:selected\");
                valSel=optSel.val();
                \$('#val_";
            // line 198
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "').val(valSel);
                \$('#form_rech_list').submit();
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filtre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "
            \$('#val_deb').val(\$('#val_deb0').val())
            \$('#val_deb0').on('change', function() {
                valSel=\$('#val_deb0').val();
                \$('#val_deb').val(valSel);
                \$('#form_rech_list').submit();
            });

            \$('#val_fin').val(\$('#val_fin0').val())
            \$('#val_fin0').on('change', function() {
                valSel=\$('#val_fin0').val();
                \$('#val_fin').val(valSel);
                \$('#form_rech_list').submit();
            });

            var val_deb=\$('#val_deb').val();
            var val_fin=\$('#val_fin').val();

            var date = new Date();
            var tey = date.setDate(date.getDate());
            var demb = date.setDate(date.getDate() - 1);

            var sem1 = new Date(date.setDate(date.getDate()-6)).toUTCString();
            var sem2 = new Date(date.setDate(date.getDate()+7)).toUTCString();

            var mois1 = new Date(date.getFullYear(), date.getMonth(), 1);
            var mois2 = new Date(date.getFullYear(), date.getMonth()+1, 0);

            var mois01 = new Date(date.getFullYear(), date.getMonth()-1, 1);
            var mois02 = new Date(date.getFullYear(), date.getMonth(), 0);

            perio_demb=\$(\"#perio_demb\"); perio_tey=\$(\"#perio_tey\");
            perio_week=\$(\"#perio_week\"); perio_mois=\$(\"#perio_mois\");
            perio_mois0=\$(\"#perio_mois0\"); perio_all=\$(\"#perio_all\");

            perio_all.on('click', function() {
                \$('#val_deb').val(\"\");
                \$('#val_fin').val(convert_date(tey));
                \$('#form_rech_list').submit();
            });
            if(val_deb==\"\" && val_fin==convert_date(tey)) { perio_all.removeClass(\"btn-outline-primary\"); perio_all.addClass(\"btn-outline-dark fw-bold btn-warning\"); }

            perio_demb.on('click', function() {
                \$('#val_deb').val(convert_date(demb));
                \$('#val_fin').val(convert_date(demb));
                \$('#form_rech_list').submit();
            });
            if(val_deb==convert_date(demb) && val_fin==convert_date(demb)) { perio_demb.removeClass(\"btn-outline-primary\"); perio_demb.addClass(\"btn-outline-dark fw-bold btn-warning\"); }

            perio_tey.on('click', function() {
                \$('#val_deb').val(convert_date(tey));
                \$('#val_fin').val(convert_date(tey));
                \$('#form_rech_list').submit();
            });
            if(val_deb==convert_date(tey) && val_fin==convert_date(tey)) { perio_tey.removeClass(\"btn-outline-primary\"); perio_tey.addClass(\"btn-outline-dark fw-bold btn-warning\"); }

            perio_week.on('click', function() {
                \$('#val_deb').val(convert_date(sem1));
                \$('#val_fin').val(convert_date(sem2));
                \$('#form_rech_list').submit();
            });
            if(val_deb==convert_date(sem1) && val_fin==convert_date(sem2)) { perio_week.removeClass(\"btn-outline-primary\"); perio_week.addClass(\"btn-outline-dark fw-bold btn-warning\"); }

            perio_mois.on('click', function() {
                \$('#val_deb').val(convert_date(mois1));
                \$('#val_fin').val(convert_date(mois2));
                \$('#form_rech_list').submit();
            });
            if(val_deb==convert_date(mois1) && val_fin==convert_date(mois2)) { perio_mois.removeClass(\"btn-outline-primary\"); perio_mois.addClass(\"btn-outline-dark fw-bold btn-warning\"); }

            perio_mois0.on('click', function() {
                \$('#val_deb').val(convert_date(mois01));
                \$('#val_fin').val(convert_date(mois02));
                \$('#form_rech_list').submit();
            });
            if(val_deb==convert_date(mois01) && val_fin==convert_date(mois02)) { perio_mois0.removeClass(\"btn-outline-primary\"); perio_mois0.addClass(\"btn-outline-dark fw-bold btn-warning\"); }

    });

</script>
";
    }

    public function getTemplateName()
    {
        return "paiement/histo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 202,  473 => 198,  468 => 196,  464 => 195,  457 => 194,  453 => 193,  448 => 190,  444 => 189,  438 => 185,  431 => 182,  429 => 181,  424 => 178,  412 => 172,  407 => 170,  402 => 167,  398 => 165,  395 => 164,  391 => 162,  385 => 160,  383 => 159,  379 => 158,  375 => 156,  371 => 154,  368 => 153,  362 => 151,  359 => 150,  356 => 149,  354 => 148,  350 => 146,  346 => 144,  343 => 143,  337 => 141,  334 => 140,  331 => 139,  329 => 138,  323 => 135,  317 => 132,  314 => 131,  309 => 128,  305 => 126,  301 => 124,  295 => 122,  293 => 121,  289 => 119,  285 => 117,  283 => 116,  280 => 115,  278 => 114,  275 => 113,  273 => 112,  269 => 111,  262 => 107,  258 => 106,  254 => 104,  251 => 103,  248 => 102,  245 => 101,  242 => 100,  239 => 99,  235 => 98,  229 => 94,  227 => 93,  212 => 80,  209 => 79,  192 => 64,  190 => 63,  182 => 58,  174 => 55,  170 => 53,  155 => 51,  151 => 50,  144 => 45,  129 => 43,  125 => 42,  118 => 37,  103 => 35,  99 => 34,  77 => 17,  73 => 16,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paiement/histo.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/paiement/histo.html.twig");
    }
}
