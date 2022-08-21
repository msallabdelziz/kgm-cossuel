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

/* installation/_index0_list.html.twig */
class __TwigTemplate_743b991ebf342164c3b77d5843ce4fe5 extends Template
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
                        <h4 class=\"fw-bold mt-4\">Toutes les Demandes</h4>
                        ";
        // line 11
        echo "                    </div>
                    <div>
                        <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light priority-4\" style=\"height:0px; position:relative; top:4px;\">
                            <div class=\"col-3  fs-6\">
                                <select name=\"val_agence0\" id=\"val_agence0\" class=\"form-select form-select-sm border-warning py-1\">
                                    <option value=\"\">Toutes les Agences ...</option>
                                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_agence"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 18
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 18) == ($context["val_agence"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "nom", [], "any", false, false, false, 18), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                                </select>
                            </div>
                            <div class=\"col-3 fs-6\">
                                <select name=\"val_usage0\" id=\"val_usage0\" class=\"form-select form-select-sm border-warning py-1\">
                                    <option value=\"\">Tous les Usages ...</option>
                                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_usage"] ?? null));
        foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
            // line 26
            echo "                                        <option value=\"";
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
        // line 28
        echo "                                </select>
                            </div>
                            <div class=\"col-3 fs-6\">
                                <select name=\"val_passage0\" id=\"val_passage0\" class=\"form-select form-select-sm border-warning py-1\">
                                    <option value=\"\">Tous les Passages ...</option>
                                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_passage"] ?? null));
        foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
            // line 34
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == ($context["val_passage"] ?? null))) {
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
        // line 36
        echo "                                </select>
                            </div>
                            <div class=\"col-3 fs-6\">
                                <select name=\"val_statut0\" id=\"val_statut0\" class=\"form-select form-select-sm border-success py-1\">
                                    <option value=\"\">Tous les statuts ...</option>
                                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_statut"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 42
            echo "                                        <option value=\"";
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
        // line 44
        echo "                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <span class=\"divider\">
                    <hr></span>
            <div class=\"clear\"></div>
            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"height:0px; z-index:999\">
                    <div class=\"col-6 col-lg-3 fs-6 offset-6 offset-lg-8\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"";
        // line 53
        if (array_key_exists("val_rech", $context)) {
            echo twig_escape_filter($this->env, ($context["val_rech"] ?? null), "html", null, true);
        }
        echo "\" /></div>
                    <div class=\"col-lg-1 col-1 priority-3\" align=\"right\">
                    ";
        // line 60
        echo "                    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_excel");
        echo "\" class=\"ms-1\">
                        <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"green\">
                            <use xlink:href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-xls"), "html", null, true);
        echo "\"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class=\"clear\"></div>
            ";
        // line 68
        if ((twig_length_filter($this->env, ($context["les_installation"] ?? null)) == 0)) {
            // line 69
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
            // line 84
            echo "            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des Demandes (";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_installation"] ?? null), "getTotalItemCount", [], "any", false, false, false, 85), "html", null, true);
            echo ")</caption>
            <thead>
                <tr>
                    <th scope=\"col\">N° demande</th> 
                    <th class=\"priority-3\">Date Demande</th> 
                    <th class=\"priority-3\">Usage</th> 
                    <th class=\"priority-4\">Agence</th>
                    <th class=\"priority-5\">Localité</th>
                    ";
            // line 94
            echo "                    <th class=\"priority-3\">Type Construction</th>
                    <th class=\"priority-4\">Electricien</th>
                    <th>Statut demande</th>
                    ";
            // line 98
            echo "                    ";
            // line 99
            echo "                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_installation"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 104
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 104) < 7)) {
                    // line 105
                    echo "                        ";
                    $context["badge_etat"] = "danger";
                    // line 106
                    echo "                    ";
                }
                // line 107
                echo "                    ";
                if (((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 107) >= 7) && (twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 107) < 9))) {
                    // line 108
                    echo "                        ";
                    $context["badge_etat"] = "warning";
                    // line 109
                    echo "                    ";
                }
                // line 110
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 110) >= 9)) {
                    // line 111
                    echo "                        ";
                    $context["badge_etat"] = "success";
                    // line 112
                    echo "                    ";
                }
                // line 113
                echo "                    <tr>
                        <td scope=\"row\">
                            ";
                // line 115
                if (((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 115) >= 7) && (twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 115) != "Saisie"))) {
                    // line 116
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                    echo "\" class=\"text-dark text-decoration-none fw-bold\">
                                    ";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 117), "numero", [], "any", false, false, false, 117), "html", null, true);
                    echo "
                                </a>
                            ";
                } else {
                    // line 120
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 120)]), "html", null, true);
                    echo "\" class=\"text-dark text-decoration-none fw-bold\">
                                    <span>[";
                    // line 121
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->strpad_left(twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 121), 9, "0"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdAt", [], "any", false, false, false, 121), "d/m/y"), "html", null, true);
                    echo "]</span>
                                </a>
                            ";
                }
                // line 124
                echo "                        </td>
                        <td class=\"priority-3\">
                            ";
                // line 126
                if (((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 126) >= 7) && (twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 126) != "Saisie"))) {
                    // line 127
                    echo "                            <span class=\"badge text-secondary fs-8\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 127), "dateCreation", [], "any", false, false, false, 127), "d-m-Y"), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 129
                    echo "                            <span class=\"badge text-secondary fs-8\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdAt", [], "any", false, false, false, 129), "d-m-Y"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 131
                echo "                        </td>
                        <td class=\"priority-3\"><a href=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 132)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">
                            ";
                // line 133
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "usages", [], "any", false, false, false, 133) == "domestique")) {
                    // line 134
                    echo "                                <span class=\"text-warning fs-8 fw-bold\">Domestique</span>
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 135
$context["ag"], "usages", [], "any", false, false, false, 135) == "non_domestique")) {
                    // line 136
                    echo "                                <span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 137
$context["ag"], "usages", [], "any", false, false, false, 137) == "erp_ert")) {
                    // line 138
                    echo "                                <span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
                            ";
                }
                // line 140
                echo "                        </a></td>
                        <td class=\"priority-4\">
                            ";
                // line 142
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 142)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 142), "agence", [], "any", false, false, false, 142)))) {
                    // line 143
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 143), "agence", [], "any", false, false, false, 143), "nom", [], "any", false, false, false, 143), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 145
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 147
                echo "                        </td>
                        <td class=\"priority-5\">
                            ";
                // line 149
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 149))) {
                    // line 150
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 150), "nom", [], "any", false, false, false, 150), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 152
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 154
                echo "                        </td>
                        ";
                // line 156
                echo "                        <td class=\"priority-3\">
                            ";
                // line 157
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "typeconstruction", [], "any", false, false, false, 157))) {
                    // line 158
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "typeconstruction", [], "any", false, false, false, 158), "nom", [], "any", false, false, false, 158), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 160
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 162
                echo "                        </td>
                        <td class=\"priority-4\">
                            ";
                // line 164
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "electricien", [], "any", false, false, false, 164))) {
                    // line 165
                    echo "                                ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "electricien", [], "any", false, false, false, 165), "nom", [], "any", false, false, false, 165) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "electricien", [], "any", false, false, false, 165), "prenom", [], "any", false, false, false, 165)), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 167
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 169
                echo "                        </td>
                        <td>
                            <a  href=\"";
                // line 171
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 171)]), "html", null, true);
                echo "\">
                                ";
                // line 177
                echo "
                                ";
                // line 178
                $context["label_etat"] = "warning";
                // line 179
                echo "                                ";
                $context["etat"] = "Soumis";
                // line 180
                echo "                                ";
                $context["demande"] = twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 180);
                echo " 
                                ";
                // line 181
                if ((($context["demande"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 181) != "Saisie"))) {
                    // line 182
                    echo "                                    ";
                    $context["paiement"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "paiement", [], "any", false, false, false, 182);
                    echo " 
                                    ";
                    // line 183
                    $context["dossier"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "dossier", [], "any", false, false, false, 183);
                    echo " 
                                    ";
                    // line 184
                    if (($context["paiement"] ?? null)) {
                        // line 185
                        echo "                                        ";
                        $context["etat"] = "Paiement enregistré";
                        // line 186
                        echo "                                        ";
                        if (twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "paiementEffectue", [], "any", false, false, false, 186)) {
                            // line 187
                            echo "                                            ";
                            $context["etat"] = "Paiement validé";
                            // line 188
                            echo "                                            ";
                            if (twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "etatRembousement", [], "any", false, false, false, 188)) {
                                // line 189
                                echo "                                                ";
                                $context["etat"] = "Paiement validé - Remboursé";
                                // line 190
                                echo "                                            ";
                            }
                            // line 191
                            echo "                                        ";
                        }
                        // line 192
                        echo "                                        ";
                        $context["label_etat"] = "warning";
                        echo " 
                                    ";
                    }
                    // line 194
                    echo "                                    ";
                    if (($context["dossier"] ?? null)) {
                        // line 195
                        echo "                                        ";
                        $context["link"] = "app_dossier_showpop";
                        // line 196
                        echo "                                        ";
                        $context["id_ent"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 196);
                        // line 197
                        echo "                                        ";
                        $context["etat"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "etat", [], "any", false, false, false, 197);
                        // line 198
                        echo "                                        ";
                        if ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 198)) {
                            // line 199
                            echo "                                            ";
                            $context["etat"] = ("En attente " . twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "etat", [], "any", false, false, false, 199));
                            // line 200
                            echo "                                        ";
                        }
                        // line 201
                        echo "                                        ";
                        $context["label_etat"] = "success";
                        echo " 

                                        ";
                        // line 203
                        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 203)) {
                            // line 204
                            echo "                                            ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 204) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 204), "conclusion", [], "any", false, false, false, 204))) {
                                // line 205
                                echo "                                                ";
                                $context["label_etat"] = " bg-vertf bg-success p-1";
                                // line 206
                                echo "                                            ";
                            } else {
                                // line 207
                                echo "                                                ";
                                $context["label_etat"] = " bg-danger p-1";
                                // line 208
                                echo "                                            ";
                            }
                            // line 209
                            echo "                                        ";
                        }
                        // line 210
                        echo "                                    ";
                    }
                    // line 211
                    echo "                                ";
                }
                // line 212
                echo "                                
                                ";
                // line 222
                echo "
                                ";
                // line 223
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 223) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 223), "rejet", [], "any", false, false, false, 223))) {
                    // line 224
                    echo "                                    <span class=\"text-light badge bg-danger fs-8 me-0\">Soumission Rejetée</span>
                                ";
                } else {
                    // line 226
                    echo "                                    ";
                    if (((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 226) >= 7) && (twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 226) != "Saisie"))) {
                        // line 227
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 227) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 227), "dossier", [], "any", false, false, false, 227))) {
                            // line 228
                            echo "                                            ";
                            $context["etat"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 228), "etat", [], "any", false, false, false, 228);
                            // line 229
                            echo "                                        ";
                        }
                        // line 230
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 230) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 230), "dossier", [], "any", false, false, false, 230))) {
                            // line 231
                            echo "                                            ";
                            $context["etat"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 231), "dossier", [], "any", false, false, false, 231), "etat", [], "any", false, false, false, 231);
                            // line 232
                            echo "                                            ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 232), "dossier", [], "any", false, false, false, 232), "cloture", [], "any", false, false, false, 232) == 0)) {
                                // line 233
                                echo "                                                ";
                                $context["etat"] = ("Attente " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 233), "dossier", [], "any", false, false, false, 233), "etat", [], "any", false, false, false, 233));
                                // line 234
                                echo "                                            ";
                            }
                            // line 235
                            echo "                                            ";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 235), "dossier", [], "any", false, false, false, 235), "cloture", [], "any", false, false, false, 235)) {
                                // line 236
                                echo "                                                ";
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 236), "dossier", [], "any", false, false, false, 236), "conforme", [], "any", false, false, false, 236)) {
                                    // line 237
                                    echo "                                                    ";
                                    $context["badge_etat"] = " bg-success";
                                    // line 238
                                    echo "                                                ";
                                } else {
                                    // line 239
                                    echo "                                                    ";
                                    $context["badge_etat"] = " bg-danger bg-opacity-25 text-red";
                                    // line 240
                                    echo "                                                ";
                                }
                                // line 241
                                echo "                                            ";
                            }
                            // line 242
                            echo "                                        ";
                        }
                        // line 243
                        echo "                                    ";
                    } else {
                        // line 244
                        echo "                                        ";
                        $context["etat"] = twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 244);
                        // line 245
                        echo "                                    ";
                    }
                    // line 246
                    echo "                                    ";
                    if ((($context["etat"] ?? null) == "Accepté")) {
                        echo " ";
                        $context["etat"] = "Attente Paiement";
                    }
                    // line 247
                    echo "                                    ";
                    if ((($context["etat"] ?? null) == "Soumis")) {
                        echo " ";
                        $context["etat"] = "Soumis, Attente validation";
                    }
                    // line 248
                    echo "                                    <span class=\"badge badge-";
                    echo twig_escape_filter($this->env, ($context["badge_etat"] ?? null), "html", null, true);
                    echo " fs-8\">";
                    echo twig_escape_filter($this->env, ($context["etat"] ?? null), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 250
                echo "
                            </a>
                        </td>
                        ";
                // line 254
                echo "                        ";
                // line 261
                echo "                        <td class=\"text-end\">
                            ";
                // line 262
                if (((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 262) > 7) && (twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 262) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 262), "paiement", [], "any", false, false, false, 262)))) {
                    echo " 
                                ";
                    // line 263
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 263), "dossier", [], "any", false, false, false, 263)) {
                        // line 264
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 264), "dossier", [], "any", false, false, false, 264), "id", [], "any", false, false, false, 264)]), "html", null, true);
                        echo "\" class=\"mx-1\" title=\"Afficher les détails\">
                                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                            <use xlink:href=\"";
                        // line 266
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                        echo "\"></use>
                                        </svg>
                                    </a>
                                ";
                    } else {
                        // line 270
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 270), "paiement", [], "any", false, false, false, 270), "id", [], "any", false, false, false, 270)]), "html", null, true);
                        echo "\" class=\"mx-1\" title=\"Afficher les détails\">
                                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                            <use xlink:href=\"";
                        // line 272
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                        echo "\"></use>
                                        </svg>
                                    </a>
                                ";
                    }
                    // line 276
                    echo "                            ";
                } else {
                    // line 277
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 277)]), "html", null, true);
                    echo "\" class=\"mx-1\" title=\"Afficher les détails\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                        <use xlink:href=\"";
                    // line 279
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                    echo "\"></use>
                                    </svg>
                                </a>
                            ";
                }
                // line 283
                echo "                            ";
                // line 288
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 291
            echo "            </tbody>
            </table>

                ";
            // line 294
            twig_get_attribute($this->env, $this->source, ($context["les_installation"] ?? null), "setPageRange", [0 => 1], "method", false, false, false, 294);
            // line 295
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["les_installation"] ?? null), "pagination.html.twig");
            echo "

            ";
        }
        // line 298
        echo "        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "installation/_index0_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  685 => 298,  678 => 295,  676 => 294,  671 => 291,  663 => 288,  661 => 283,  654 => 279,  648 => 277,  645 => 276,  638 => 272,  632 => 270,  625 => 266,  619 => 264,  617 => 263,  613 => 262,  610 => 261,  608 => 254,  603 => 250,  595 => 248,  589 => 247,  583 => 246,  580 => 245,  577 => 244,  574 => 243,  571 => 242,  568 => 241,  565 => 240,  562 => 239,  559 => 238,  556 => 237,  553 => 236,  550 => 235,  547 => 234,  544 => 233,  541 => 232,  538 => 231,  535 => 230,  532 => 229,  529 => 228,  526 => 227,  523 => 226,  519 => 224,  517 => 223,  514 => 222,  511 => 212,  508 => 211,  505 => 210,  502 => 209,  499 => 208,  496 => 207,  493 => 206,  490 => 205,  487 => 204,  485 => 203,  479 => 201,  476 => 200,  473 => 199,  470 => 198,  467 => 197,  464 => 196,  461 => 195,  458 => 194,  452 => 192,  449 => 191,  446 => 190,  443 => 189,  440 => 188,  437 => 187,  434 => 186,  431 => 185,  429 => 184,  425 => 183,  420 => 182,  418 => 181,  413 => 180,  410 => 179,  408 => 178,  405 => 177,  401 => 171,  397 => 169,  393 => 167,  387 => 165,  385 => 164,  381 => 162,  377 => 160,  371 => 158,  369 => 157,  366 => 156,  363 => 154,  359 => 152,  353 => 150,  351 => 149,  347 => 147,  343 => 145,  337 => 143,  335 => 142,  331 => 140,  327 => 138,  325 => 137,  322 => 136,  320 => 135,  317 => 134,  315 => 133,  311 => 132,  308 => 131,  302 => 129,  296 => 127,  294 => 126,  290 => 124,  282 => 121,  277 => 120,  271 => 117,  266 => 116,  264 => 115,  260 => 113,  257 => 112,  254 => 111,  251 => 110,  248 => 109,  245 => 108,  242 => 107,  239 => 106,  236 => 105,  233 => 104,  229 => 103,  223 => 99,  221 => 98,  216 => 94,  205 => 85,  202 => 84,  185 => 69,  183 => 68,  174 => 62,  168 => 60,  161 => 53,  150 => 44,  135 => 42,  131 => 41,  124 => 36,  109 => 34,  105 => 33,  98 => 28,  83 => 26,  79 => 25,  72 => 20,  57 => 18,  53 => 17,  45 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/_index0_list.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/_index0_list.html.twig");
    }
}
