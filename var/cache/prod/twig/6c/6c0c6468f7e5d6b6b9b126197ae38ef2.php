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

/* dossier/_index_list.html.twig */
class __TwigTemplate_d2a05102c1ebeb5601110f4c9b01ed67 extends Template
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
                        <h4 class=\"fw-bold\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["etatDossier"] ?? null), "html", null, true);
        echo "</h4>
                        ";
        // line 11
        echo "                    </div>
                    <div align=\"right\" class=\"col-10 row fs-5 mt-0 pt-0 caption fw-light priority-4\" style=\"\">
                        <div class=\"col-1\"></div>
                        ";
        // line 14
        if (array_key_exists("agence", $context)) {
            // line 15
            echo "                        <div class=\"col-2 fs-6\">
                            <select name=\"val_agence0\" id=\"val_agence0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Toutes les Agences ...</option>
                                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_agence"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 19
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 19), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 19) == ($context["val_agence"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "nom", [], "any", false, false, false, 19), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                            </select>
                        </div>
                        ";
        }
        // line 24
        echo "                        <div class=\"col-2 fs-6\">
                            <select name=\"val_passage0\" id=\"val_passage0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les passages ...</option>
                                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_passage"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 28
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
        // line 30
        echo "                            </select>
                        </div>
                        <div class=\"col-2 fs-6\">
                            <select name=\"val_usage0\" id=\"val_usage0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les usages ...</option>
                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_usage"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 36
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
        // line 38
        echo "                            </select>
                        </div>
                        ";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 40), "roles", [], "any", false, true, false, 40), 0, [], "array", true, true, false, 40) && ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 40), "roles", [], "any", false, false, false, 40)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) == "ROLE_ADMIN"))) {
            // line 41
            echo "                        <div class=\"col-2 fs-6\">
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
                        ";
        }
        // line 50
        echo "                        <div class=\"col-2 fs-6\">
                            <select name=\"val_controleur0\" id=\"val_controleur0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les controleurs ...</option>
                                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_controleur"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 54
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 54) == ($context["val_controleur"] ?? null))) {
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
        // line 56
        echo "                            </select>
                        </div>
                        ";
        // line 58
        if (array_key_exists("les_statut", $context)) {
            // line 59
            echo "                        <div class=\"col-2 fs-6\">
                            <select name=\"val_statut0\" id=\"val_statut0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les statuts ...</option>
                                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_statut"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 63
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
            // line 65
            echo "                            </select>
                        </div>
                        ";
        }
        // line 68
        echo "                    </div>
                </div>
                <span class=\"divider\">
                    <hr></span>
            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"height:0px; position:relative; top:4px;\">
                <div class=\"col-6 offset-6 col-lg-3 offset-lg-7 fs-6\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"";
        // line 73
        if (array_key_exists("val_rech", $context)) {
            echo twig_escape_filter($this->env, ($context["val_rech"] ?? null), "html", null, true);
        }
        echo "\" /></div>
                <div class=\"col-2 priority-3\" align=\"right\">
                    ";
        // line 78
        echo "                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_excel");
        echo "\" class=\"ms-1\">
                            <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"green\">
                                <use xlink:href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-xls"), "html", null, true);
        echo "\"></use>
                            </svg>
                        </a>
                </div>
            </div>
            <div class=\"clear\"></div>
            ";
        // line 86
        if ((twig_length_filter($this->env, ($context["les_dossier"] ?? null)) == 0)) {
            // line 87
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
            // line 102
            echo "            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des Dossiers (";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_dossier"] ?? null), "getTotalItemCount", [], "any", false, false, false, 103), "html", null, true);
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
            // line 116
            echo "                    ";
            // line 117
            echo "                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_dossier"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["doss"]) {
                // line 122
                echo "                    ";
                $context["demande"] = twig_get_attribute($this->env, $this->source, $context["doss"], "demande", [], "any", false, false, false, 122);
                // line 123
                echo "                    ";
                $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 123);
                // line 124
                echo "                    ";
                $context["electricien"] = twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 124);
                // line 125
                echo "                    ";
                $context["proprietaire"] = twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 125);
                // line 126
                echo "
                    ";
                // line 127
                $context["badge_etat"] = "danger";
                // line 128
                echo "                    ";
                if (((twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 128) == "Attestation") || (twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 128) == "Clôturé"))) {
                    // line 129
                    echo "                        ";
                    $context["badge_etat"] = "success";
                    // line 130
                    echo "                    ";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 130) == "Visite") || (twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 130) == "Rapport"))) {
                    // line 131
                    echo "                        ";
                    $context["badge_etat"] = "warning";
                    // line 132
                    echo "                    ";
                }
                // line 133
                echo "                    ";
                $context["badge_usage"] = "warning";
                // line 134
                echo "                    ";
                $context["text_usage"] = "text-dark";
                // line 135
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 135) != "domestique")) {
                    // line 136
                    echo "                        ";
                    $context["badge_usage"] = "primary text-light";
                    // line 137
                    echo "                        ";
                    $context["text_usage"] = "text-light";
                    // line 138
                    echo "                    ";
                }
                // line 139
                echo "
                    ";
                // line 140
                if (twig_get_attribute($this->env, $this->source, $context["doss"], "attestation", [], "any", false, false, false, 140)) {
                    // line 141
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["doss"], "visiteCourante", [], "any", false, false, false, 141) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doss"], "visiteCourante", [], "any", false, false, false, 141), "conclusion", [], "any", false, false, false, 141))) {
                        // line 142
                        echo "                            ";
                        $context["badge_etat"] = " bg-success p-1";
                        // line 143
                        echo "                        ";
                    } else {
                        // line 144
                        echo "                            ";
                        $context["badge_etat"] = " bg-danger p-1";
                        // line 145
                        echo "                        ";
                    }
                    // line 146
                    echo "                    ";
                }
                // line 147
                echo "                    
                    <tr>
                        <td scope=\"row\">
                            <a href=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 150)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">
                                ";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "numero", [], "any", false, false, false, 151), "html", null, true);
                echo "
                            </a>
                        </td>
                        <td class=\"priority-2\">
                            <span class=\"badge text-secondary fs-8\">";
                // line 155
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doss"], "createdAt", [], "any", false, false, false, 155), "d-m-Y"), "html", null, true);
                echo "</span>
                        </td>
                        <td class=\"priority-3\"><a href=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 157)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 157), "html", null, true);
                echo "</a></td>
                        <td class=\"priority-5\">
                            ";
                // line 159
                if ( !(null === twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 159))) {
                    // line 160
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 160), "nom", [], "any", false, false, false, 160), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 162
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 164
                echo "                        </td>
                        <td class=\"priority-4\">
                            ";
                // line 166
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 166), "agence", [], "any", false, false, false, 166)) {
                    // line 167
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 167), "agence", [], "any", false, false, false, 167), "code", [], "any", false, false, false, 167), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 169
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 171
                echo "                        </td>
                        <td class=\"priority-2\">
                            ";
                // line 173
                if ( !(null === ($context["electricien"] ?? null))) {
                    // line 174
                    echo "                                ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "nom", [], "any", false, false, false, 174) . " ") . twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "prenom", [], "any", false, false, false, 174)), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 176
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 178
                echo "                        </td>
                        <td class=\"priority-4\">
                            ";
                // line 180
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "dossier", [], "any", false, false, false, 180), "referent", [], "any", false, false, false, 180)) {
                    // line 181
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "dossier", [], "any", false, false, false, 181), "referent", [], "any", false, false, false, 181), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 183
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 185
                echo "                        </td>
                        <td class=\"priority-3\">
                            ";
                // line 187
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "dossier", [], "any", false, false, false, 187), "controleur", [], "any", false, false, false, 187)) {
                    // line 188
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "dossier", [], "any", false, false, false, 188), "controleur", [], "any", false, false, false, 188), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 190
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 192
                echo "                        </td>
                        <td>
                            ";
                // line 194
                if (twig_get_attribute($this->env, $this->source, $context["doss"], "cloture", [], "any", false, false, false, 194)) {
                    // line 195
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["doss"], "conforme", [], "any", false, false, false, 195)) {
                        // line 196
                        echo "                                    ";
                        $context["badge_etat"] = " bg-success";
                        // line 197
                        echo "                                ";
                    } else {
                        // line 198
                        echo "                                    ";
                        $context["badge_etat"] = " bg-danger bg-opacity-25 text-red";
                        // line 199
                        echo "                                ";
                    }
                    // line 200
                    echo "                            ";
                }
                // line 201
                echo "                        
                            <a  href=\"";
                // line 202
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 202)]), "html", null, true);
                echo "\">
                                ";
                // line 203
                if ((twig_get_attribute($this->env, $this->source, $context["doss"], "visiteCourante", [], "any", false, false, false, 203) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doss"], "visiteCourante", [], "any", false, false, false, 203), "rejetRapport", [], "any", false, false, false, 203))) {
                    // line 204
                    echo "                                    <span class=\"text-light badge bg-danger fs-8 me-0\">Rapport Rejeté</span>
                                ";
                } else {
                    // line 206
                    echo "                                    ";
                    $context["etat"] = twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 206);
                    // line 207
                    echo "                                    ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["doss"], "attestation", [], "any", false, false, false, 207)) {
                        // line 208
                        echo "                                        ";
                        $context["etat"] = ("Attente " . twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 208));
                        // line 209
                        echo "                                    ";
                    }
                    // line 210
                    echo "                                    ";
                    if (((($context["etat"] ?? null) == "Attente Visite") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 210), "get", [0 => "sousmenu"], "method", false, false, false, 210) == "dossier_affectation"))) {
                        echo " 
                                        ";
                        // line 211
                        $context["etat"] = "Dossier Affecté";
                        echo " 
                                        ";
                        // line 212
                        $context["badge_etat"] = "success";
                        echo " 
                                    ";
                    }
                    // line 214
                    echo "                                    ";
                    if (((($context["etat"] ?? null) == "Attente Rapport") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 214), "get", [0 => "sousmenu"], "method", false, false, false, 214) == "dossier_visite"))) {
                        echo " 
                                        ";
                        // line 215
                        $context["etat"] = "Visite Planifiée";
                        echo " 
                                        ";
                        // line 216
                        $context["badge_etat"] = "success";
                        echo " 
                                    ";
                    }
                    // line 218
                    echo "                                    <span class=\"badge badge-";
                    echo twig_escape_filter($this->env, ($context["badge_etat"] ?? null), "html", null, true);
                    echo " fs-8\">";
                    echo twig_escape_filter($this->env, ($context["etat"] ?? null), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 220
                echo "                                
                            </a>
                        </td>
                        ";
                // line 224
                echo "                        ";
                // line 231
                echo "                        <td class=\"text-end\">
                                <a href=\"";
                // line 232
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 232)]), "html", null, true);
                echo "\" class=\"mx-1\" title=\"Afficher les détails\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                        <use xlink:href=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                </a>
                            ";
                // line 242
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doss'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "            </tbody>
            </table>

                ";
            // line 248
            twig_get_attribute($this->env, $this->source, ($context["les_dossier"] ?? null), "setPageRange", [0 => 1], "method", false, false, false, 248);
            // line 249
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["les_dossier"] ?? null), "pagination.html.twig");
            echo "

            ";
        }
        // line 252
        echo "        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "dossier/_index_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 252,  604 => 249,  602 => 248,  597 => 245,  589 => 242,  583 => 234,  578 => 232,  575 => 231,  573 => 224,  568 => 220,  560 => 218,  555 => 216,  551 => 215,  546 => 214,  541 => 212,  537 => 211,  532 => 210,  529 => 209,  526 => 208,  523 => 207,  520 => 206,  516 => 204,  514 => 203,  510 => 202,  507 => 201,  504 => 200,  501 => 199,  498 => 198,  495 => 197,  492 => 196,  489 => 195,  487 => 194,  483 => 192,  479 => 190,  473 => 188,  471 => 187,  467 => 185,  463 => 183,  457 => 181,  455 => 180,  451 => 178,  447 => 176,  441 => 174,  439 => 173,  435 => 171,  431 => 169,  425 => 167,  423 => 166,  419 => 164,  415 => 162,  409 => 160,  407 => 159,  400 => 157,  395 => 155,  388 => 151,  384 => 150,  379 => 147,  376 => 146,  373 => 145,  370 => 144,  367 => 143,  364 => 142,  361 => 141,  359 => 140,  356 => 139,  353 => 138,  350 => 137,  347 => 136,  344 => 135,  341 => 134,  338 => 133,  335 => 132,  332 => 131,  329 => 130,  326 => 129,  323 => 128,  321 => 127,  318 => 126,  315 => 125,  312 => 124,  309 => 123,  306 => 122,  302 => 121,  296 => 117,  294 => 116,  279 => 103,  276 => 102,  259 => 87,  257 => 86,  248 => 80,  242 => 78,  235 => 73,  228 => 68,  223 => 65,  208 => 63,  204 => 62,  199 => 59,  197 => 58,  193 => 56,  178 => 54,  174 => 53,  169 => 50,  164 => 47,  149 => 45,  145 => 44,  140 => 41,  138 => 40,  134 => 38,  119 => 36,  115 => 35,  108 => 30,  93 => 28,  89 => 27,  84 => 24,  79 => 21,  64 => 19,  60 => 18,  55 => 15,  53 => 14,  48 => 11,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/_index_list.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/_index_list.html.twig");
    }
}
