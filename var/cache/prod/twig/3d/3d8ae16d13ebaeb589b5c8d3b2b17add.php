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

/* installation/_index_list.html.twig */
class __TwigTemplate_4f428607179c558e2e6fb90faae25052 extends Template
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
                        <h4 class=\"fw-bold\">Demandes ";
        // line 6
        echo twig_escape_filter($this->env, ($context["etatDemande"] ?? null), "html", null, true);
        echo "</h4>
                        ";
        // line 11
        echo "                    </div>
                    ";
        // line 12
        if (((($context["modif"] ?? null) == 1) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PUBLIC") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")))) {
            // line 13
            echo "                    <div>
                        <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_add", ["id" => 0]);
            echo "\" class=\"btn btn-primary btn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 16 16\">
                                <path fill-rule=\"evenodd\" d=\"M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z\"></path>
                            </svg>
                            Nouvelle Demande
                        </a>
                    </div>
                    ";
        }
        // line 22
        echo "                </div>
                    <div>
                        <div align=\"right\" class=\"row fs-5 mt-0 pt-0 fw-light priority-4\" style=\"\">
                            <div class=\"offset-2 col-2 fs-6\">
                                <select name=\"val_agence0\" id=\"val_agence0\" class=\"form-select form-select-sm border-warning py-1\">
                                    <option value=\"\">Toutes les Agences ...</option>
                                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_agence"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 29
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 29) == ($context["val_agence"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                                </select>
                            </div>
                            <div class=\"col-2 fs-6\">
                                <select name=\"val_usage0\" id=\"val_usage0\" class=\"form-select form-select-sm border-warning py-1\">
                                    <option value=\"\">Tous les Usages ...</option>
                                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_usage"] ?? null));
        foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
            // line 37
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
        // line 39
        echo "                                </select>
                            </div>
                            <div class=\"col-2 fs-6\">
                                <select name=\"val_passage0\" id=\"val_passage0\" class=\"form-select form-select-sm border-warning py-1\">
                                    <option value=\"\">Tous les Passages ...</option>
                                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_passage"] ?? null));
        foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
            // line 45
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
        // line 47
        echo "                                </select>
                            </div>
                            <div class=\"col-2 fs-6\">
                                <select name=\"val_statut0\" id=\"val_statut0\" class=\"form-select form-select-sm border-success py-1\">
                                    <option value=\"\">Tous les statuts ...</option>
                                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_statut"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 53
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
        // line 55
        echo "                                </select>
                            </div>
                            <div class=\"col-2\"></div>
                        </div>
                    </div>
                <span class=\"divider\">
                    <hr></span>
                <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"height:0px; position:relative; top:4px;\">
                    <div class=\"col-6 col-lg-3 fs-6 offset-6 offset-lg-7\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"";
        // line 63
        if (array_key_exists("val_rech", $context)) {
            echo twig_escape_filter($this->env, ($context["val_rech"] ?? null), "html", null, true);
        }
        echo "\" /></div>
                    <div class=\"col-lg-2 col-2 priority-3\" align=\"right\">
                        ";
        // line 68
        echo "                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_excel");
        echo "\" class=\"ms-1\">
                            <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"green\">
                                <use xlink:href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-xls"), "html", null, true);
        echo "\"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class=\"clear\"></div>
            ";
        // line 76
        if ((twig_length_filter($this->env, ($context["les_installation"] ?? null)) == 0)) {
            // line 77
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
            // line 92
            echo "            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des Demandes (";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_installation"] ?? null), "getTotalItemCount", [], "any", false, false, false, 93), "html", null, true);
            echo ")</caption>
            <thead>
                <tr>
                    <th scope=\"col\">N° demande</th> 
                    <th class=\"priority-3\">Date Demande</th>
                    <th class=\"priority-3\">Usage</th> 
                    <th class=\"priority-4\">Agence</th>
                    <th class=\"priority-5\">Localité</th>
                    ";
            // line 102
            echo "                    <th class=\"priority-3\">Type Construction</th>
                    <th class=\"priority-4\">Electricien</th>
                    <th>Statut demande</th>
                    ";
            // line 106
            echo "                    ";
            // line 107
            echo "                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_installation"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 112
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 112) < 7)) {
                    // line 113
                    echo "                        ";
                    $context["badge_etat"] = "danger";
                    // line 114
                    echo "                    ";
                }
                // line 115
                echo "                    ";
                if (((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 115) >= 7) && (twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 115) < 9))) {
                    // line 116
                    echo "                        ";
                    $context["badge_etat"] = "warning";
                    // line 117
                    echo "                    ";
                }
                // line 118
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 118) >= 9)) {
                    // line 119
                    echo "                        ";
                    $context["badge_etat"] = "success";
                    // line 120
                    echo "                    ";
                }
                // line 121
                echo "
                    ";
                // line 122
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 122), "get", [0 => "sousmenu"], "method", false, false, false, 122) == "demande_soumission")) {
                    // line 123
                    echo "                        ";
                    if ((((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 123) == 7) && twig_get_attribute($this->env, $this->source, $context["ag"], "demandecourante", [], "any", false, false, false, 123)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandecourante", [], "any", false, false, false, 123), "accepte", [], "any", false, false, false, 123) == 0))) {
                        // line 124
                        echo "                            ";
                        $context["badge_etat"] = "warning";
                        // line 125
                        echo "                        ";
                    }
                    // line 126
                    echo "                        ";
                    if ((((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 126) == 7) && twig_get_attribute($this->env, $this->source, $context["ag"], "demandecourante", [], "any", false, false, false, 126)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandecourante", [], "any", false, false, false, 126), "accepte", [], "any", false, false, false, 126) == 1))) {
                        // line 127
                        echo "                            ";
                        $context["badge_etat"] = "success";
                        // line 128
                        echo "                        ";
                    }
                    // line 129
                    echo "                    ";
                }
                // line 130
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 130), "get", [0 => "sousmenu"], "method", false, false, false, 130) == "demande_paiement")) {
                    // line 131
                    echo "                        ";
                    if ((((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 131) == 7) && twig_get_attribute($this->env, $this->source, $context["ag"], "demandecourante", [], "any", false, false, false, 131)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandecourante", [], "any", false, false, false, 131), "accepte", [], "any", false, false, false, 131) == 1))) {
                        // line 132
                        echo "                            ";
                        $context["badge_etat"] = "danger";
                        // line 133
                        echo "                        ";
                    }
                    // line 134
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 134) == 8)) {
                        // line 135
                        echo "                            ";
                        $context["badge_etat"] = "warning";
                        // line 136
                        echo "                        ";
                    }
                    // line 137
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 137) == 9)) {
                        // line 138
                        echo "                            ";
                        $context["badge_etat"] = "success";
                        // line 139
                        echo "                        ";
                    }
                    // line 140
                    echo "                    ";
                }
                // line 141
                echo "
                    <tr>
                        <td scope=\"row\">
                            ";
                // line 144
                if ((((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 144) >= 7) && (twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 144) != "Saisie")) || (twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 144) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 144), "rejet", [], "any", false, false, false, 144)))) {
                    // line 145
                    echo "                                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 145) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 145), "valide", [], "any", false, false, false, 145)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 145), "dossier", [], "any", false, false, false, 145))) {
                        // line 146
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 146), "dossier", [], "any", false, false, false, 146), "id", [], "any", false, false, false, 146)]), "html", null, true);
                        echo "\" class=\"text-dark text-decoration-none fw-bold\">
                                    ";
                        // line 147
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 147), "numero", [], "any", false, false, false, 147), "html", null, true);
                        echo "
                                </a>
                                ";
                    } else {
                        // line 150
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 150)]), "html", null, true);
                        echo "\" class=\"text-dark text-decoration-none fw-bold\">
                                    ";
                        // line 151
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 151), "numero", [], "any", false, false, false, 151), "html", null, true);
                        echo "
                                </a>
                                ";
                    }
                    // line 154
                    echo "                            ";
                } else {
                    // line 155
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 155)]), "html", null, true);
                    echo "\" class=\"text-dark text-decoration-none fw-bold\">
                                    <span class=\"text-red fs-9 fw-light\">[";
                    // line 156
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdAt", [], "any", false, false, false, 156), "d/m/y_H:i:s"), "html", null, true);
                    echo "]</span>
                                </a>
                            ";
                }
                // line 159
                echo "                        </td>
                        <td class=\"priority-3\">
                            ";
                // line 161
                if (((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 161) >= 7) && (twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 161) != "Saisie"))) {
                    // line 162
                    echo "                            <span class=\"badge text-secondary fs-8\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 162), "dateCreation", [], "any", false, false, false, 162), "d-m-Y"), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 164
                    echo "                            <span class=\"badge text-secondary fs-8\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdAt", [], "any", false, false, false, 164), "d-m-Y"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 166
                echo "                        </td>
                        <td class=\"priority-3\">
                            ";
                // line 168
                if (((twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 168) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 168), "valide", [], "any", false, false, false, 168)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 168), "dossier", [], "any", false, false, false, 168))) {
                    // line 169
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 169), "dossier", [], "any", false, false, false, 169), "id", [], "any", false, false, false, 169)]), "html", null, true);
                    echo "\" class=\"text-dark text-decoration-none\">
                            ";
                } else {
                    // line 171
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 171)]), "html", null, true);
                    echo "\" class=\"text-dark text-decoration-none\">
                            ";
                }
                // line 173
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "usages", [], "any", false, false, false, 173) == "domestique")) {
                    // line 174
                    echo "                                <span class=\"text-warning fs-8 fw-bold\">Domestique</span>
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 175
$context["ag"], "usages", [], "any", false, false, false, 175) == "non_domestique")) {
                    // line 176
                    echo "                                <span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 177
$context["ag"], "usages", [], "any", false, false, false, 177) == "erp_ert")) {
                    // line 178
                    echo "                                <span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
                            ";
                }
                // line 180
                echo "                        </a></td>
                        <td class=\"priority-4\">
                            ";
                // line 182
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 182)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 182), "agence", [], "any", false, false, false, 182)))) {
                    // line 183
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 183), "agence", [], "any", false, false, false, 183), "nom", [], "any", false, false, false, 183), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 185
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 187
                echo "                        </td>
                        <td class=\"priority-5\">
                            ";
                // line 189
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 189))) {
                    // line 190
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 190), "nom", [], "any", false, false, false, 190), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 192
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 194
                echo "                        </td>
                        ";
                // line 196
                echo "                        <td class=\"priority-3\">
                            ";
                // line 197
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "typeconstruction", [], "any", false, false, false, 197))) {
                    // line 198
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "typeconstruction", [], "any", false, false, false, 198), "nom", [], "any", false, false, false, 198), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 200
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 202
                echo "                        </td>
                        <td class=\"priority-4\">
                            ";
                // line 204
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "electricien", [], "any", false, false, false, 204))) {
                    // line 205
                    echo "                                ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "electricien", [], "any", false, false, false, 205), "nom", [], "any", false, false, false, 205) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "electricien", [], "any", false, false, false, 205), "prenom", [], "any", false, false, false, 205)), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 207
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 209
                echo "                        </td>
                        <td>
                            ";
                // line 211
                if (((twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 211) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 211), "valide", [], "any", false, false, false, 211)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 211), "dossier", [], "any", false, false, false, 211))) {
                    // line 212
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 212), "dossier", [], "any", false, false, false, 212), "id", [], "any", false, false, false, 212)]), "html", null, true);
                    echo "\">
                            ";
                } else {
                    // line 214
                    echo "                                <a  href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 214)]), "html", null, true);
                    echo "\">
                            ";
                }
                // line 216
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 216) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 216), "rejet", [], "any", false, false, false, 216))) {
                    // line 217
                    echo "                                    <span class=\"text-light badge bg-danger fs-8 me-0\">Soumission Rejetée</span>
                                ";
                } else {
                    // line 219
                    echo "                                    ";
                    if (((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 219) >= 7) && (twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 219) != "Saisie"))) {
                        // line 220
                        echo "                                        ";
                        $context["etat"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 220), "etat", [], "any", false, false, false, 220);
                        // line 221
                        echo "                                    ";
                    } else {
                        // line 222
                        echo "                                        ";
                        $context["etat"] = twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 222);
                        // line 223
                        echo "                                    ";
                    }
                    // line 224
                    echo "                                    ";
                    if (((($context["etat"] ?? null) == "Accepté") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 224), "get", [0 => "sousmenu"], "method", false, false, false, 224) == "demande_paiement"))) {
                        echo " ";
                        $context["etat"] = "Attente Paiement";
                    }
                    // line 225
                    echo "                                    ";
                    if (((($context["etat"] ?? null) == "Accepté") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 225), "get", [0 => "sousmenu"], "method", false, false, false, 225) == "demande_soumission"))) {
                        echo " ";
                        $context["etat"] = "Soumis, Validé";
                    }
                    // line 226
                    echo "                                    ";
                    if ((($context["etat"] ?? null) == "Soumis")) {
                        echo " ";
                        $context["etat"] = "Soumis, Attente validation";
                    }
                    // line 227
                    echo "                                    ";
                    if (((($context["etat"] ?? null) == "Paiement validé") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 227), "get", [0 => "sousmenu"], "method", false, false, false, 227) == "demande_validation"))) {
                        echo " ";
                        $context["etat"] = "Payé, Attente validation";
                        echo " ";
                        $context["badge_etat"] = "danger";
                    }
                    // line 228
                    echo "                                    <span class=\"badge badge-";
                    echo twig_escape_filter($this->env, ($context["badge_etat"] ?? null), "html", null, true);
                    echo " fs-8\">";
                    echo twig_escape_filter($this->env, ($context["etat"] ?? null), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 230
                echo "                            </a>
                        </td>
                        ";
                // line 233
                echo "                        ";
                // line 240
                echo "                        <td class=\"text-end\">
                            ";
                // line 241
                if (((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 241) > 7) && (twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 241) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 241), "paiement", [], "any", false, false, false, 241)))) {
                    echo " 
                                ";
                    // line 242
                    if (((twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 242) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 242), "valide", [], "any", false, false, false, 242)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 242), "dossier", [], "any", false, false, false, 242))) {
                        // line 243
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 243), "dossier", [], "any", false, false, false, 243), "id", [], "any", false, false, false, 243)]), "html", null, true);
                        echo "\" class=\"mx-1\" title=\"Afficher les détails\">
                                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                            <use xlink:href=\"";
                        // line 245
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                        echo "\"></use>
                                        </svg>
                                    </a>
                                ";
                    } else {
                        // line 249
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 249), "idPaiement", [], "any", false, false, false, 249)]), "html", null, true);
                        echo "\" class=\"mx-1\" title=\"Afficher les détails\">
                                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                            <use xlink:href=\"";
                        // line 251
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                        echo "\"></use>
                                        </svg>
                                    </a>
                                ";
                    }
                    // line 255
                    echo "                            ";
                } else {
                    // line 256
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 256)]), "html", null, true);
                    echo "\" class=\"mx-1\" title=\"Afficher les détails\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                        <use xlink:href=\"";
                    // line 258
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                    echo "\"></use>
                                    </svg>
                                </a>
                            ";
                }
                // line 262
                echo "                            ";
                if (((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 262) < 7) && (($context["modif"] ?? null) == 1))) {
                    echo " 
                                ";
                    // line 263
                    $context["link_edit"] = "app_installation_add";
                    // line 264
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 264) > 1)) {
                        // line 265
                        echo "                                    ";
                        $context["link_edit"] = ("app_installation_add" . twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 265));
                        // line 266
                        echo "                                ";
                    }
                    // line 267
                    echo "                                ";
                    if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PUBLIC") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
                        // line 268
                        echo "                                    ";
                        if (twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "gdroit_de", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 268), "id", [], "any", false, false, false, 268), 1 => "installation", 2 => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 268)], "method", false, false, false, 268)) {
                            // line 269
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link_edit"] ?? null), ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 269)]), "html", null, true);
                            echo "\" class=\"mx-1\" title=\"Modifier\">
                                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                            <use xlink:href=\"";
                            // line 271
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                            echo "\"></use>
                                        </svg>
                                    </a>
                                    ";
                        } else {
                            // line 275
                            echo "                                        <a href=\"#\" class=\"mx-1\" title=\"Modification non autorisée\">
                                            <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"gray\">
                                                <use xlink:href=\"";
                            // line 277
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#reception-0"), "html", null, true);
                            echo "\"></use>
                                            </svg>
                                        </a>
                                    ";
                        }
                        // line 281
                        echo "                                ";
                    }
                    // line 282
                    echo "                            ";
                } else {
                    // line 283
                    echo "                                <a href=\"#\" class=\"mx-1\" title=\"Modification non autorisée\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"gray\">
                                        <use xlink:href=\"";
                    // line 285
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#reception-0"), "html", null, true);
                    echo "\"></use>
                                    </svg>
                                </a>
                            ";
                }
                // line 289
                echo "                            ";
                // line 294
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo "            </tbody>
            </table>

                ";
            // line 300
            twig_get_attribute($this->env, $this->source, ($context["les_installation"] ?? null), "setPageRange", [0 => 1], "method", false, false, false, 300);
            // line 301
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["les_installation"] ?? null), "pagination.html.twig");
            echo "

            ";
        }
        // line 304
        echo "        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "installation/_index_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 304,  716 => 301,  714 => 300,  709 => 297,  701 => 294,  699 => 289,  692 => 285,  688 => 283,  685 => 282,  682 => 281,  675 => 277,  671 => 275,  664 => 271,  658 => 269,  655 => 268,  652 => 267,  649 => 266,  646 => 265,  643 => 264,  641 => 263,  636 => 262,  629 => 258,  623 => 256,  620 => 255,  613 => 251,  607 => 249,  600 => 245,  594 => 243,  592 => 242,  588 => 241,  585 => 240,  583 => 233,  579 => 230,  571 => 228,  563 => 227,  557 => 226,  551 => 225,  545 => 224,  542 => 223,  539 => 222,  536 => 221,  533 => 220,  530 => 219,  526 => 217,  523 => 216,  517 => 214,  511 => 212,  509 => 211,  505 => 209,  501 => 207,  495 => 205,  493 => 204,  489 => 202,  485 => 200,  479 => 198,  477 => 197,  474 => 196,  471 => 194,  467 => 192,  461 => 190,  459 => 189,  455 => 187,  451 => 185,  445 => 183,  443 => 182,  439 => 180,  435 => 178,  433 => 177,  430 => 176,  428 => 175,  425 => 174,  422 => 173,  416 => 171,  410 => 169,  408 => 168,  404 => 166,  398 => 164,  392 => 162,  390 => 161,  386 => 159,  380 => 156,  375 => 155,  372 => 154,  366 => 151,  361 => 150,  355 => 147,  350 => 146,  347 => 145,  345 => 144,  340 => 141,  337 => 140,  334 => 139,  331 => 138,  328 => 137,  325 => 136,  322 => 135,  319 => 134,  316 => 133,  313 => 132,  310 => 131,  307 => 130,  304 => 129,  301 => 128,  298 => 127,  295 => 126,  292 => 125,  289 => 124,  286 => 123,  284 => 122,  281 => 121,  278 => 120,  275 => 119,  272 => 118,  269 => 117,  266 => 116,  263 => 115,  260 => 114,  257 => 113,  254 => 112,  250 => 111,  244 => 107,  242 => 106,  237 => 102,  226 => 93,  223 => 92,  206 => 77,  204 => 76,  195 => 70,  189 => 68,  182 => 63,  172 => 55,  157 => 53,  153 => 52,  146 => 47,  131 => 45,  127 => 44,  120 => 39,  105 => 37,  101 => 36,  94 => 31,  79 => 29,  75 => 28,  67 => 22,  56 => 14,  53 => 13,  51 => 12,  48 => 11,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/_index_list.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/_index_list.html.twig");
    }
}
