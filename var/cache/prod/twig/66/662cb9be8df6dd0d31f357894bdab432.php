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

/* dossier/_index_card.html.twig */
class __TwigTemplate_6c3e6d4f6b53cc949956def1d9a4b747 extends Template
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
                        <h4 class=\"fw-bold\">Dossiers en attente de ";
        // line 6
        echo twig_escape_filter($this->env, ($context["etatDossier"] ?? null), "html", null, true);
        echo "</h4>
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
                <div class=\"col-lg-7 col-4\"></div>
                <div class=\"col-6 col-lg-3 fs-6 border-bottom\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"";
        // line 74
        if (array_key_exists("val_rech", $context)) {
            echo twig_escape_filter($this->env, ($context["val_rech"] ?? null), "html", null, true);
        }
        echo "\" /></div>
                <div class=\"col-lg-2 col-2 priority-3\" align=\"center\">
                    <svg class=\"bi pt\" width=\"28\" height=\"28\" fill=\"#c32424\">
                        <use xlink:href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-pdf"), "html", null, true);
        echo "\"></use>
                    </svg>
                </div>
            </div>
            ";
        // line 81
        if ((twig_length_filter($this->env, ($context["les_dossier"] ?? null)) == 0)) {
            // line 82
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
            // line 97
            echo "            <div align=\"top\" class=\"caption fs-5 mt-0 pt-0\">Liste des Dossiers (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_dossier"] ?? null), "getTotalItemCount", [], "any", false, false, false, 97), "html", null, true);
            echo ")</div>

            ";
            // line 100
            echo "
            <div class=\"row mt-4\">
                ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_dossier"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["doss"]) {
                // line 103
                echo "                    ";
                $context["demande"] = twig_get_attribute($this->env, $this->source, $context["doss"], "demande", [], "any", false, false, false, 103);
                // line 104
                echo "                    ";
                $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 104);
                // line 105
                echo "                    ";
                $context["electricien"] = twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 105);
                // line 106
                echo "                    ";
                $context["proprietaire"] = twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 106);
                // line 107
                echo "
                    ";
                // line 108
                $context["badge_etat"] = "danger";
                // line 109
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 109) == "Visite")) {
                    // line 110
                    echo "                        ";
                    $context["badge_etat"] = "warning";
                    // line 111
                    echo "                    ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 111) == "Rapport")) {
                    // line 112
                    echo "                        ";
                    $context["badge_etat"] = "warning";
                    // line 113
                    echo "                    ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 113) == "Attestation")) {
                    // line 114
                    echo "                        ";
                    $context["badge_etat"] = "success";
                    // line 115
                    echo "                    ";
                }
                // line 116
                echo "                    ";
                $context["badge_usage"] = "warning";
                // line 117
                echo "                    ";
                $context["text_usage"] = "text-dark";
                // line 118
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 118) != "domestique")) {
                    // line 119
                    echo "                        ";
                    $context["badge_usage"] = "primary text-light";
                    // line 120
                    echo "                        ";
                    $context["text_usage"] = "text-light";
                    // line 121
                    echo "                    ";
                }
                // line 122
                echo "                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"card-orig border-dark mb-3\">
                            <h5 class=\"card-header border-dark bg-";
                // line 124
                echo twig_escape_filter($this->env, ($context["badge_usage"] ?? null), "html", null, true);
                echo " py-1 px-2 pt\">
                                    <a title=\"Afficher les détails la demande\" class=\"text-decoration-none\" href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 125)]), "html", null, true);
                echo "\">
                                        <span class=\"";
                // line 126
                echo twig_escape_filter($this->env, ($context["text_usage"] ?? null), "html", null, true);
                echo "\">Dossier n° ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "numero", [], "any", false, false, false, 126), "html", null, true);
                echo "</span>
                                    </a>
                                    <a target=\"_blank\" title=\"Générer la demande en pdf\" class=\"text-decoration-none float-end p-0 m-0\" href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 128)]), "html", null, true);
                echo "\">
                                    <svg class=\"bi pt\" width=\"22\" height=\"22\" fill=\"white\">
                                        <use xlink:href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    </a>
                            </h5>
                            <div class=\"card-body\">
                                <h6 class=\"card-title\" align=\"right\">
                                    ";
                // line 137
                echo "                                    <a class=\"\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 137)]), "html", null, true);
                echo "\">
                                        <span class=\"badge badge-";
                // line 138
                echo twig_escape_filter($this->env, ($context["badge_etat"] ?? null), "html", null, true);
                echo " fs-7 px-1\">
                                            En Attente de ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doss"], "etat", [], "any", false, false, false, 139), "html", null, true);
                echo "
                                        </span>
                                    </a>
                                </h6>
                                <p class=\"card-text fs-7\">
                                    ";
                // line 144
                if (twig_get_attribute($this->env, $this->source, $context["doss"], "referent", [], "any", false, false, false, 144)) {
                    // line 145
                    echo "                                    <div class=\"mb-2 border-0 text-muted\" title=\"Référent\">
                                        <svg class=\"bi pt\" width=\"22\" height=\"22\" fill=\"gray\">
                                            <use xlink:href=\"";
                    // line 147
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person-workspace"), "html", null, true);
                    echo "\"></use>
                                        </svg>
                                        ";
                    // line 149
                    echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doss"], "referent", [], "any", false, false, false, 149)) < 30)) ? (twig_get_attribute($this->env, $this->source, $context["doss"], "referent", [], "any", false, false, false, 149)) : ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["doss"], "referent", [], "any", false, false, false, 149), 0, 27) . "..."))), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
                                    ";
                }
                // line 152
                echo "                                    <div class=\"mb-2 border-0 text-muted\" title=\"Controleur\">
                                        <svg class=\"bi pt\" width=\"22\" height=\"22\" fill=\"red\">
                                            <use xlink:href=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person-rolodex"), "html", null, true);
                echo "\"></use>
                                        </svg>
                                    ";
                // line 156
                if (twig_get_attribute($this->env, $this->source, $context["doss"], "controleur", [], "any", false, false, false, 156)) {
                    // line 157
                    echo "                                        ";
                    echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doss"], "controleur", [], "any", false, false, false, 157)) < 30)) ? (twig_get_attribute($this->env, $this->source, $context["doss"], "controleur", [], "any", false, false, false, 157)) : ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["doss"], "controleur", [], "any", false, false, false, 157), 0, 27) . "..."))), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 159
                    echo "                                        <span class=\"text-danger\">Non affecté à controleur</span>
                                    ";
                }
                // line 161
                echo "\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"mb-2 border-0 text-muted\" title=\"Localisation installation\">
                                        <svg class=\"bi pt\" width=\"20\" height=\"20\" fill=\"#6d0d2b\">
                                            <use xlink:href=\"";
                // line 164
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#geo-alt"), "html", null, true);
                echo "\"></use>
                                        </svg>
                                        ";
                // line 166
                if ( !(null === twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 166))) {
                    // line 167
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 167), "departement", [], "any", false, false, false, 167), "nom", [], "any", false, false, false, 167), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 167), "nom", [], "any", false, false, false, 167), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 169
                    echo "                                            <span class=\"text-danger\">-</span>
                                        ";
                }
                // line 171
                echo "                                    </div>
                                    <p class=\"ms-2 fs-7\">
                                        ";
                // line 173
                if ( !(null === twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeconstruction", [], "any", false, false, false, 173))) {
                    // line 174
                    echo "                                            [<span class=\"text-dark fw-bold\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeconstruction", [], "any", false, false, false, 174), "nom", [], "any", false, false, false, 174), "html", null, true);
                    echo "]</span>
                                            ";
                    // line 175
                    echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "adresse", [], "any", false, false, false, 175)) < 15)) ? (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "adresse", [], "any", false, false, false, 175)) : ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "adresse", [], "any", false, false, false, 175), 0, 12) . "..."))), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 177
                    echo "                                            <span class=\"text-danger\">-</span>
                                        ";
                }
                // line 179
                echo "                                    </p>
                                        <div class=\"mt-2 pt-2 border-top border-secondary text-dark\">
                                            <div class=\"row\">
                                                <div class=\"col-5\">
                                                    <svg class=\"bi pt\" width=\"20\" height=\"20\" fill=\"orange\">
                                                        <use xlink:href=\"";
                // line 184
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightning-charge"), "html", null, true);
                echo "\"></use>
                                                    </svg>
                                                    ";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "puissance", [], "any", false, false, false, 186), "html", null, true);
                echo " kW
                                                </div>
                                                <div class=\"col-7\">
                                                    <svg class=\"bi pt\" width=\"20\" height=\"20\" fill=\"blue\">
                                                        <use xlink:href=\"";
                // line 190
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#cash"), "html", null, true);
                echo "\"></use>
                                                    </svg>
                                                    ";
                // line 192
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "cout", [], "any", false, false, false, 192), 0, ",", " "), "html", null, true);
                echo " FCFA
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            <div class=\"card-footer text-muted text-end\">
                            ";
                // line 198
                if ( !twig_get_attribute($this->env, $this->source, $context["doss"], "affecte", [], "any", false, false, false, 198)) {
                    // line 199
                    echo "                                ";
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                        // line 200
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_affecter", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 200)]), "html", null, true);
                        echo "\" class=\"next action-button btn btn-success btn-sm\">Affecter à un contrôleur</a>
                                ";
                    }
                    // line 202
                    echo "                            ";
                } elseif ( !twig_get_attribute($this->env, $this->source, $context["doss"], "visite", [], "any", false, false, false, 202)) {
                    // line 203
                    echo "                                ";
                    if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT"))) {
                        // line 204
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_visiter", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 204)]), "html", null, true);
                        echo "\" class=\"next action-button btn btn-success btn-sm\">Planifier une visite</a>
                                ";
                    }
                    // line 206
                    echo "                            ";
                } elseif ( !twig_get_attribute($this->env, $this->source, $context["doss"], "rapport", [], "any", false, false, false, 206)) {
                    // line 207
                    echo "                                ";
                    if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT"))) {
                        // line 208
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_rapporter", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 208)]), "html", null, true);
                        echo "\" class=\"next action-button btn btn-success btn-sm\">Elaborer rapport de visite</a>
                                ";
                    }
                    // line 210
                    echo "                            ";
                } elseif ( !twig_get_attribute($this->env, $this->source, $context["doss"], "attestation", [], "any", false, false, false, 210)) {
                    // line 211
                    echo "                                ";
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                        // line 212
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_attester", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 212)]), "html", null, true);
                        echo "\" class=\"next action-button btn btn-success btn-sm\">Etablir Résultats Inspection</a>
                                ";
                    }
                    // line 214
                    echo "                            ";
                }
                // line 215
                echo "                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doss'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "            </div>

                ";
            // line 221
            twig_get_attribute($this->env, $this->source, ($context["les_dossier"] ?? null), "setPageRange", [0 => 1], "method", false, false, false, 221);
            // line 222
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["les_dossier"] ?? null), "pagination.html.twig");
            echo "

            ";
        }
        // line 225
        echo "        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "dossier/_index_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 225,  582 => 222,  580 => 221,  576 => 219,  567 => 215,  564 => 214,  558 => 212,  555 => 211,  552 => 210,  546 => 208,  543 => 207,  540 => 206,  534 => 204,  531 => 203,  528 => 202,  522 => 200,  519 => 199,  517 => 198,  508 => 192,  503 => 190,  496 => 186,  491 => 184,  484 => 179,  480 => 177,  475 => 175,  470 => 174,  468 => 173,  464 => 171,  460 => 169,  452 => 167,  450 => 166,  445 => 164,  440 => 161,  436 => 159,  430 => 157,  428 => 156,  423 => 154,  419 => 152,  413 => 149,  408 => 147,  404 => 145,  402 => 144,  394 => 139,  390 => 138,  385 => 137,  376 => 130,  371 => 128,  364 => 126,  360 => 125,  356 => 124,  352 => 122,  349 => 121,  346 => 120,  343 => 119,  340 => 118,  337 => 117,  334 => 116,  331 => 115,  328 => 114,  325 => 113,  322 => 112,  319 => 111,  316 => 110,  313 => 109,  311 => 108,  308 => 107,  305 => 106,  302 => 105,  299 => 104,  296 => 103,  292 => 102,  288 => 100,  282 => 97,  265 => 82,  263 => 81,  256 => 77,  248 => 74,  240 => 68,  235 => 65,  220 => 63,  216 => 62,  211 => 59,  209 => 58,  205 => 56,  190 => 54,  186 => 53,  181 => 50,  176 => 47,  161 => 45,  157 => 44,  152 => 41,  150 => 40,  146 => 38,  131 => 36,  127 => 35,  120 => 30,  105 => 28,  101 => 27,  96 => 24,  91 => 21,  76 => 19,  72 => 18,  67 => 15,  65 => 14,  55 => 9,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/_index_card.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/_index_card.html.twig");
    }
}
