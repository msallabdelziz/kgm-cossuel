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

/* dossier/_index0_list.html.twig */
class __TwigTemplate_5a70a1aaa5c8996a42601ce5188f9c38 extends Template
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
                        <h4 class=\"fw-bold\">Tous les Dossiers</h4>
                        ";
        // line 11
        echo "                    </div>

                    <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light priority-4\" style=\"\">
                        <div class=\"col-1\"></div>
                        ";
        // line 15
        if (array_key_exists("agence", $context)) {
            // line 16
            echo "                        <div class=\"col-2 fs-6\">
                            <select name=\"val_agence0\" id=\"val_agence0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Toutes les Agences ...</option>
                                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_agence"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 20
                echo "                                    <option value=\"";
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
            echo "                            </select>
                        </div>
                        ";
        }
        // line 25
        echo "                        <div class=\"col-2 fs-6\">
                            <select name=\"val_passage0\" id=\"val_passage0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les passages ...</option>
                                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_passage"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 29
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == ($context["val_passage"] ?? null))) {
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
        // line 31
        echo "                            </select>
                        </div>
                        <div class=\"col-2 fs-6\">
                            <select name=\"val_usage0\" id=\"val_usage0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les usages ...</option>
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_usage"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 37
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == ($context["val_usage"] ?? null))) {
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
        // line 39
        echo "                            </select>
                        </div>
                        <div class=\"col-2 fs-6\">
                            <select name=\"val_referent0\" id=\"val_referent0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les referents ...</option>
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_referent"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 45
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 45) == ($context["val_referent"] ?? null))) {
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
        // line 47
        echo "                            </select>
                        </div>
                        <div class=\"col-2 fs-6\">
                            <select name=\"val_controleur0\" id=\"val_controleur0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les controleurs ...</option>
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_controleur"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 53
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 53) == ($context["val_controleur"] ?? null))) {
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
        // line 55
        echo "                            </select>
                        </div>
                        ";
        // line 57
        if (array_key_exists("les_statut", $context)) {
            // line 58
            echo "                        <div class=\"col-2 fs-6\">
                            <select name=\"val_statut0\" id=\"val_statut0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les statuts ...</option>
                                ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_statut"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 62
                echo "                                    <option value=\"";
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
            // line 64
            echo "                            </select>
                        </div>
                        ";
        }
        // line 67
        echo "                    </div>
                </div>
                <span class=\"divider\">
                    <hr></span>
            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"height:0px; position:relative; top:4px;\">
                <div class=\"col-6 offset-6 col-lg-3 offset-lg-7 fs-6\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"";
        // line 72
        if (array_key_exists("val_rech", $context)) {
            echo twig_escape_filter($this->env, ($context["val_rech"] ?? null), "html", null, true);
        }
        echo "\" /></div>
                <div class=\"col-lg-2 col-2 priority-3\" align=\"right\">
                    ";
        // line 77
        echo "                    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_excel");
        echo "\" class=\"ms-1\">
                        <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"green\">
                            <use xlink:href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-xls"), "html", null, true);
        echo "\"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class=\"clear\"></div>
            ";
        // line 85
        if ((twig_length_filter($this->env, ($context["les_dossier"] ?? null)) == 0)) {
            // line 86
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
            // line 101
            echo "            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des Dossiers (";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_dossier"] ?? null), "getTotalItemCount", [], "any", false, false, false, 102), "html", null, true);
            echo ")</caption>
            <thead>
                <tr>
                    <th scope=\"col\">N° Dossier</th> 
                    <th class=\"priority-2\" scope=\"col\">Date Dossier</th> 
                    <th class=\"priority-3\">Usage</th> 
                    <th class=\"priority-5\">Localité</th>
                    <th class=\"priority-4\">Agence</th>
                    <th class=\"priority-2\">Electricien</th>
                    <th class=\"priority-4\">Référent</th>
                    <th class=\"priority-3\">Controleur</th>
                    <th>Statut demande</th>
                    ";
            // line 115
            echo "                    ";
            // line 116
            echo "                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_dossier"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["doss"]) {
                // line 121
                echo "                    ";
                $context["demande"] = twig_get_attribute($this->env, $this->source, $context["doss"], "demande", [], "any", false, false, false, 121);
                // line 122
                echo "                    ";
                $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 122);
                // line 123
                echo "                    ";
                $context["electricien"] = twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 123);
                // line 124
                echo "                    ";
                $context["proprietaire"] = twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 124);
                // line 125
                echo "
                    ";
                // line 126
                $context["badge_etat"] = "danger";
                // line 127
                echo "                    ";
                if (((twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 127) == "Attestation") || (twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 127) == "Clôturé"))) {
                    // line 128
                    echo "                        ";
                    $context["badge_etat"] = "success";
                    // line 129
                    echo "                    ";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 129) == "Visite") || (twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 129) == "Rapport"))) {
                    // line 130
                    echo "                        ";
                    $context["badge_etat"] = "warning";
                    // line 131
                    echo "                    ";
                }
                // line 132
                echo "                    ";
                $context["badge_usage"] = "warning";
                // line 133
                echo "                    ";
                $context["text_usage"] = "text-dark";
                // line 134
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 134) != "domestique")) {
                    // line 135
                    echo "                        ";
                    $context["badge_usage"] = "primary text-light";
                    // line 136
                    echo "                        ";
                    $context["text_usage"] = "text-light";
                    // line 137
                    echo "                    ";
                }
                // line 138
                echo "
                    ";
                // line 139
                if (twig_get_attribute($this->env, $this->source, $context["doss"], "attestation", [], "any", false, false, false, 139)) {
                    // line 140
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["doss"], "visiteCourante", [], "any", false, false, false, 140) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doss"], "visiteCourante", [], "any", false, false, false, 140), "conclusion", [], "any", false, false, false, 140))) {
                        // line 141
                        echo "                            ";
                        $context["badge_etat"] = " bg-success p-1";
                        // line 142
                        echo "                        ";
                    } else {
                        // line 143
                        echo "                            ";
                        $context["badge_etat"] = " bg-danger p-1";
                        // line 144
                        echo "                        ";
                    }
                    // line 145
                    echo "                    ";
                }
                // line 146
                echo "
                    <tr>
                        <td scope=\"row\">
                            <a href=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 149)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">
                                ";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "numero", [], "any", false, false, false, 150), "html", null, true);
                echo "
                            </a>
                        </td>
                        <td class=\"priority-3\">
                            <span class=\"badge text-secondary fs-8\">";
                // line 154
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doss"], "createdAt", [], "any", false, false, false, 154), "d-m-Y"), "html", null, true);
                echo "</span>
                        </td>
                        <td class=\"priority-3\"><a href=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 156)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 156), "html", null, true);
                echo "</a></td>
                        <td class=\"priority-5\">
                            ";
                // line 158
                if ( !(null === twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 158))) {
                    // line 159
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 159), "nom", [], "any", false, false, false, 159), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 161
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 163
                echo "                        </td>
                        <td class=\"priority-4\">
                            ";
                // line 165
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 165), "agence", [], "any", false, false, false, 165)) {
                    // line 166
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 166), "agence", [], "any", false, false, false, 166), "code", [], "any", false, false, false, 166), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 168
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 170
                echo "                        </td>
                        <td class=\"priority-2\">
                            ";
                // line 172
                if ( !(null === ($context["electricien"] ?? null))) {
                    // line 173
                    echo "                                ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "nom", [], "any", false, false, false, 173) . " ") . twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "prenom", [], "any", false, false, false, 173)), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 175
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 177
                echo "                        </td>
                        <td class=\"priority-4\">
                            ";
                // line 179
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "dossier", [], "any", false, false, false, 179), "referent", [], "any", false, false, false, 179)) {
                    // line 180
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "dossier", [], "any", false, false, false, 180), "referent", [], "any", false, false, false, 180), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 182
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 184
                echo "                        </td>
                        <td class=\"priority-3\">
                            ";
                // line 186
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "dossier", [], "any", false, false, false, 186), "controleur", [], "any", false, false, false, 186)) {
                    // line 187
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "dossier", [], "any", false, false, false, 187), "controleur", [], "any", false, false, false, 187), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 189
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 191
                echo "                        </td>
                        <td>
                            <a  href=\"";
                // line 193
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 193)]), "html", null, true);
                echo "\">
                                ";
                // line 194
                if (twig_get_attribute($this->env, $this->source, $context["doss"], "cloture", [], "any", false, false, false, 194)) {
                    // line 195
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["doss"], "conforme", [], "any", false, false, false, 195)) {
                        // line 196
                        echo "                                        ";
                        $context["badge_etat"] = " bg-success";
                        // line 197
                        echo "                                    ";
                    } else {
                        // line 198
                        echo "                                        ";
                        $context["badge_etat"] = " bg-danger bg-opacity-75 text-light";
                        // line 199
                        echo "                                    ";
                    }
                    // line 200
                    echo "                                ";
                }
                // line 201
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["doss"], "visiteCourante", [], "any", false, false, false, 201) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doss"], "visiteCourante", [], "any", false, false, false, 201), "rejetRapport", [], "any", false, false, false, 201))) {
                    // line 202
                    echo "                                    <span class=\"text-light badge bg-danger fs-8 me-0\">Rapport rejeté</span>
                                ";
                } else {
                    // line 204
                    echo "                                    <span class=\"badge badge-";
                    echo twig_escape_filter($this->env, ($context["badge_etat"] ?? null), "html", null, true);
                    echo " fs-8\">";
                    if ( !twig_get_attribute($this->env, $this->source, $context["doss"], "attestation", [], "any", false, false, false, 204)) {
                        echo "Attente";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 204), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 206
                echo "                            </a>
                        </td>
                        ";
                // line 209
                echo "                        ";
                // line 216
                echo "                        <td class=\"text-end\">
                                <a href=\"";
                // line 217
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 217)]), "html", null, true);
                echo "\" class=\"mx-1\" title=\"Afficher les détails\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                        <use xlink:href=\"";
                // line 219
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                </a>
                            ";
                // line 227
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doss'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo "            </tbody>
            </table>

                ";
            // line 233
            twig_get_attribute($this->env, $this->source, ($context["les_dossier"] ?? null), "setPageRange", [0 => 1], "method", false, false, false, 233);
            // line 234
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["les_dossier"] ?? null), "pagination.html.twig");
            echo "

            ";
        }
        // line 237
        echo "        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "dossier/_index0_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 237,  556 => 234,  554 => 233,  549 => 230,  541 => 227,  535 => 219,  530 => 217,  527 => 216,  525 => 209,  521 => 206,  509 => 204,  505 => 202,  502 => 201,  499 => 200,  496 => 199,  493 => 198,  490 => 197,  487 => 196,  484 => 195,  482 => 194,  478 => 193,  474 => 191,  470 => 189,  464 => 187,  462 => 186,  458 => 184,  454 => 182,  448 => 180,  446 => 179,  442 => 177,  438 => 175,  432 => 173,  430 => 172,  426 => 170,  422 => 168,  416 => 166,  414 => 165,  410 => 163,  406 => 161,  400 => 159,  398 => 158,  391 => 156,  386 => 154,  379 => 150,  375 => 149,  370 => 146,  367 => 145,  364 => 144,  361 => 143,  358 => 142,  355 => 141,  352 => 140,  350 => 139,  347 => 138,  344 => 137,  341 => 136,  338 => 135,  335 => 134,  332 => 133,  329 => 132,  326 => 131,  323 => 130,  320 => 129,  317 => 128,  314 => 127,  312 => 126,  309 => 125,  306 => 124,  303 => 123,  300 => 122,  297 => 121,  293 => 120,  287 => 116,  285 => 115,  270 => 102,  267 => 101,  250 => 86,  248 => 85,  239 => 79,  233 => 77,  226 => 72,  219 => 67,  214 => 64,  199 => 62,  195 => 61,  190 => 58,  188 => 57,  184 => 55,  169 => 53,  165 => 52,  158 => 47,  143 => 45,  139 => 44,  132 => 39,  117 => 37,  113 => 36,  106 => 31,  91 => 29,  87 => 28,  82 => 25,  77 => 22,  62 => 20,  58 => 19,  53 => 16,  51 => 15,  45 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/_index0_list.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/_index0_list.html.twig");
    }
}
