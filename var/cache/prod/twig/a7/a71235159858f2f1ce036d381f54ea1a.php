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

/* dossier/_index0_card.html.twig */
class __TwigTemplate_754a6ea2b22c22213893ecdfafa69e29 extends Template
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
                        <h4 class=\"fw-bold\">Tous les Dossiers </h4>
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

                    <div align=\"right\" class=\"col-10 row fs-5 mt-0 pt-0 caption fw-light priority-4\" style=\"\">
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
                        ";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 41), "roles", [], "any", false, true, false, 41), 0, [], "array", true, true, false, 41) && ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 41), "roles", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) == "ROLE_ADMIN"))) {
            // line 42
            echo "                        <div class=\"col-2 fs-6\">
                            <select name=\"val_referent0\" id=\"val_referent0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les referents ...</option>
                                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_referent"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 46
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 46), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 46) == ($context["val_referent"] ?? null))) {
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
            // line 48
            echo "                            </select>
                        </div>
                        ";
        }
        // line 51
        echo "                        <div class=\"col-2 fs-6\">
                            <select name=\"val_controleur0\" id=\"val_controleur0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les controleurs ...</option>
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["les_controleur"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 55
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 55) == ($context["val_controleur"] ?? null))) {
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
        // line 57
        echo "                            </select>
                        </div>
                        ";
        // line 59
        if (array_key_exists("les_statut", $context)) {
            // line 60
            echo "                        <div class=\"col-2 fs-6\">
                            <select name=\"val_statut0\" id=\"val_statut0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les statuts ...</option>
                                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_statut"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 64
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
            // line 66
            echo "                            </select>
                        </div>
                        ";
        }
        // line 69
        echo "                    </div>
                </div>
                <span class=\"divider\">
                    <hr></span>
            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"height:0px; position:relative; top:4px;\">
                <div class=\"col-9\"></div>
                <div class=\"col-6 col-lg-2 fs-6\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"";
        // line 75
        if (array_key_exists("val_rech", $context)) {
            echo twig_escape_filter($this->env, ($context["val_rech"] ?? null), "html", null, true);
        }
        echo "\" /></div>
                <div class=\"col-lg-1 priority-3\" align=\"center\">
                    <svg class=\"bi pt\" width=\"28\" height=\"28\" fill=\"#c32424\">
                        <use xlink:href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-pdf"), "html", null, true);
        echo "\"></use>
                    </svg>
                </div>
            </div>
            ";
        // line 82
        if ((twig_length_filter($this->env, ($context["les_dossier"] ?? null)) == 0)) {
            // line 83
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
            // line 98
            echo "            <div align=\"top\" class=\"caption fs-5 mt-0 pt-0\">Liste des Dossiers (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_dossier"] ?? null), "getTotalItemCount", [], "any", false, false, false, 98), "html", null, true);
            echo ")</div>

            ";
            // line 101
            echo "
            <div class=\"row mt-4\">
                ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_dossier"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["doss"]) {
                // line 104
                echo "                    ";
                $context["demande"] = twig_get_attribute($this->env, $this->source, $context["doss"], "demande", [], "any", false, false, false, 104);
                // line 105
                echo "                    ";
                $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 105);
                // line 106
                echo "                    ";
                $context["electricien"] = twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 106);
                // line 107
                echo "                    ";
                $context["proprietaire"] = twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 107);
                // line 108
                echo "
                    ";
                // line 109
                $context["badge_etat"] = "danger";
                // line 110
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 110) == "Visite")) {
                    // line 111
                    echo "                        ";
                    $context["badge_etat"] = "warning";
                    // line 112
                    echo "                    ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 112) == "Rapport")) {
                    // line 113
                    echo "                        ";
                    $context["badge_etat"] = "warning";
                    // line 114
                    echo "                    ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 114) == "Attestation")) {
                    // line 115
                    echo "                        ";
                    $context["badge_etat"] = "success";
                    // line 116
                    echo "                    ";
                }
                // line 117
                echo "                    ";
                $context["badge_usage"] = "warning";
                // line 118
                echo "                    ";
                $context["text_usage"] = "text-dark";
                // line 119
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 119) != "domestique")) {
                    // line 120
                    echo "                        ";
                    $context["badge_usage"] = "primary text-light";
                    // line 121
                    echo "                        ";
                    $context["text_usage"] = "text-light";
                    // line 122
                    echo "                    ";
                }
                // line 123
                echo "                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"card-orig border-dark mb-3\">
                            <h5 class=\"card-header border-dark bg-";
                // line 125
                echo twig_escape_filter($this->env, ($context["badge_usage"] ?? null), "html", null, true);
                echo " py-1 px-2 pt\">
                                    <a title=\"Afficher les détails la demande\" class=\"text-decoration-none\" href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 126)]), "html", null, true);
                echo "\">
                                        <span class=\"";
                // line 127
                echo twig_escape_filter($this->env, ($context["text_usage"] ?? null), "html", null, true);
                echo "\">Dossier n° ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "numero", [], "any", false, false, false, 127), "html", null, true);
                echo "</span>
                                    </a>
                                    <a target=\"_blank\" title=\"Générer la demande en pdf\" class=\"text-decoration-none float-end p-0 m-0\" href=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 129)]), "html", null, true);
                echo "\">
                                    <svg class=\"bi pt\" width=\"22\" height=\"22\" fill=\"white\">
                                        <use xlink:href=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    </a>
                            </h5>
                            <div class=\"card-body\">
                                <h6 class=\"card-title\" align=\"right\">
                                    ";
                // line 138
                echo "                                    <a class=\"\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 138)]), "html", null, true);
                echo "\">
                                        <span class=\"badge badge-";
                // line 139
                echo twig_escape_filter($this->env, ($context["badge_etat"] ?? null), "html", null, true);
                echo " fs-7 px-1\">
                                            En Attente de ";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 140), "html", null, true);
                echo "
                                        </span>
                                    </a>
                                </h6>
                                <p class=\"card-text fs-7\">
                                    ";
                // line 145
                if (twig_get_attribute($this->env, $this->source, $context["doss"], "referent", [], "any", false, false, false, 145)) {
                    // line 146
                    echo "                                    <div class=\"mb-2 border-0 text-muted\" title=\"Référent\">
                                        <svg class=\"bi pt\" width=\"22\" height=\"22\" fill=\"gray\">
                                            <use xlink:href=\"";
                    // line 148
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person-workspace"), "html", null, true);
                    echo "\"></use>
                                        </svg>
                                        ";
                    // line 150
                    echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doss"], "referent", [], "any", false, false, false, 150)) < 30)) ? (twig_get_attribute($this->env, $this->source, $context["doss"], "referent", [], "any", false, false, false, 150)) : ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["doss"], "referent", [], "any", false, false, false, 150), 0, 27) . "..."))), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
                                    ";
                }
                // line 153
                echo "                                    <div class=\"mb-2 border-0 text-muted\" title=\"Controleur\">
                                        <svg class=\"bi pt\" width=\"22\" height=\"22\" fill=\"red\">
                                            <use xlink:href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person-rolodex"), "html", null, true);
                echo "\"></use>
                                        </svg>
                                    ";
                // line 157
                if (twig_get_attribute($this->env, $this->source, $context["doss"], "controleur", [], "any", false, false, false, 157)) {
                    // line 158
                    echo "                                        ";
                    echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doss"], "controleur", [], "any", false, false, false, 158)) < 30)) ? (twig_get_attribute($this->env, $this->source, $context["doss"], "controleur", [], "any", false, false, false, 158)) : ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["doss"], "controleur", [], "any", false, false, false, 158), 0, 27) . "..."))), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 160
                    echo "                                        <span class=\"text-danger\">Non affecté à controleur</span>
                                    ";
                }
                // line 162
                echo "\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"mb-2 border-0 text-muted\" title=\"Localisation installation\">
                                        <svg class=\"bi pt\" width=\"20\" height=\"20\" fill=\"#6d0d2b\">
                                            <use xlink:href=\"";
                // line 165
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#geo-alt"), "html", null, true);
                echo "\"></use>
                                        </svg>
                                        ";
                // line 167
                if ( !(null === twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 167))) {
                    // line 168
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 168), "departement", [], "any", false, false, false, 168), "nom", [], "any", false, false, false, 168), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 168), "nom", [], "any", false, false, false, 168), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 170
                    echo "                                            <span class=\"text-danger\">-</span>
                                        ";
                }
                // line 172
                echo "                                    </div>
                                    <p class=\"ms-2 fs-7\">
                                        ";
                // line 174
                if ( !(null === twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeconstruction", [], "any", false, false, false, 174))) {
                    // line 175
                    echo "                                            [<span class=\"text-dark fw-bold\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeconstruction", [], "any", false, false, false, 175), "nom", [], "any", false, false, false, 175), "html", null, true);
                    echo "]</span>
                                            ";
                    // line 176
                    echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "adresse", [], "any", false, false, false, 176)) < 15)) ? (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "adresse", [], "any", false, false, false, 176)) : ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "adresse", [], "any", false, false, false, 176), 0, 12) . "..."))), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 178
                    echo "                                            <span class=\"text-danger\">-</span>
                                        ";
                }
                // line 180
                echo "                                    </p>
                                        <div class=\"mt-2 pt-2 border-top border-secondary text-dark\">
                                            <div class=\"row\">
                                                <div class=\"col-5\">
                                                    <svg class=\"bi pt\" width=\"20\" height=\"20\" fill=\"orange\">
                                                        <use xlink:href=\"";
                // line 185
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightning-charge"), "html", null, true);
                echo "\"></use>
                                                    </svg>
                                                    ";
                // line 187
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "puissance", [], "any", false, false, false, 187), "html", null, true);
                echo " kW
                                                </div>
                                                <div class=\"col-7\">
                                                    <svg class=\"bi pt\" width=\"20\" height=\"20\" fill=\"blue\">
                                                        <use xlink:href=\"";
                // line 191
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#cash"), "html", null, true);
                echo "\"></use>
                                                    </svg>
                                                    ";
                // line 193
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "cout", [], "any", false, false, false, 193), 0, ",", " "), "html", null, true);
                echo " FCFA
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doss'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "            </div>

                ";
            // line 203
            twig_get_attribute($this->env, $this->source, ($context["les_dossier"] ?? null), "setPageRange", [0 => 1], "method", false, false, false, 203);
            // line 204
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["les_dossier"] ?? null), "pagination.html.twig");
            echo "

            ";
        }
        // line 207
        echo "        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "dossier/_index0_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 207,  526 => 204,  524 => 203,  520 => 201,  506 => 193,  501 => 191,  494 => 187,  489 => 185,  482 => 180,  478 => 178,  473 => 176,  468 => 175,  466 => 174,  462 => 172,  458 => 170,  450 => 168,  448 => 167,  443 => 165,  438 => 162,  434 => 160,  428 => 158,  426 => 157,  421 => 155,  417 => 153,  411 => 150,  406 => 148,  402 => 146,  400 => 145,  392 => 140,  388 => 139,  383 => 138,  374 => 131,  369 => 129,  362 => 127,  358 => 126,  354 => 125,  350 => 123,  347 => 122,  344 => 121,  341 => 120,  338 => 119,  335 => 118,  332 => 117,  329 => 116,  326 => 115,  323 => 114,  320 => 113,  317 => 112,  314 => 111,  311 => 110,  309 => 109,  306 => 108,  303 => 107,  300 => 106,  297 => 105,  294 => 104,  290 => 103,  286 => 101,  280 => 98,  263 => 83,  261 => 82,  254 => 78,  246 => 75,  238 => 69,  233 => 66,  218 => 64,  214 => 63,  209 => 60,  207 => 59,  203 => 57,  188 => 55,  184 => 54,  179 => 51,  174 => 48,  159 => 46,  155 => 45,  150 => 42,  148 => 41,  144 => 39,  129 => 37,  125 => 36,  118 => 31,  103 => 29,  99 => 28,  94 => 25,  89 => 22,  74 => 20,  70 => 19,  65 => 16,  63 => 15,  52 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/_index0_card.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/_index0_card.html.twig");
    }
}
