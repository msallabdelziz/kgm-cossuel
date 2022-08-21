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
class __TwigTemplate_4fba03bdf6c50ad4499f7aedc8ad8527 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/_index_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/_index_card.html.twig"));

        // line 1
        echo "    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <h4 class=\"fw-bold\">Dossiers en attente de ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["etatDossier"]) || array_key_exists("etatDossier", $context) ? $context["etatDossier"] : (function () { throw new RuntimeError('Variable "etatDossier" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h4>
                        <select name=\"val_affichage_demande\" id=\"val_affichage_demande\" class=\"bg-warning bg-opacity-50 form-select-sm\">
                            <option ";
        // line 8
        if (((isset($context["affichage"]) || array_key_exists("affichage", $context) ? $context["affichage"] : (function () { throw new RuntimeError('Variable "affichage" does not exist.', 8, $this->source); })()) == "listing")) {
            echo " selected=\"selected\" ";
        }
        echo " value=\"listing\">Affichage en Listing</option>
                            <option ";
        // line 9
        if (((isset($context["affichage"]) || array_key_exists("affichage", $context) ? $context["affichage"] : (function () { throw new RuntimeError('Variable "affichage" does not exist.', 9, $this->source); })()) == "bloc")) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["les_agence"]) || array_key_exists("les_agence", $context) ? $context["les_agence"] : (function () { throw new RuntimeError('Variable "les_agence" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 19
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 19), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 19) == (isset($context["val_agence"]) || array_key_exists("val_agence", $context) ? $context["val_agence"] : (function () { throw new RuntimeError('Variable "val_agence" does not exist.', 19, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["les_passage"]) || array_key_exists("les_passage", $context) ? $context["les_passage"] : (function () { throw new RuntimeError('Variable "les_passage" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 28
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == (isset($context["val_passage"]) || array_key_exists("val_passage", $context) ? $context["val_passage"] : (function () { throw new RuntimeError('Variable "val_passage" does not exist.', 28, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["les_usage"]) || array_key_exists("les_usage", $context) ? $context["les_usage"] : (function () { throw new RuntimeError('Variable "les_usage" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 36
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == (isset($context["val_usage"]) || array_key_exists("val_usage", $context) ? $context["val_usage"] : (function () { throw new RuntimeError('Variable "val_usage" does not exist.', 36, $this->source); })()))) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 40), "roles", [], "any", false, true, false, 40), 0, [], "array", true, true, false, 40) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "roles", [], "any", false, false, false, 40), 0, [], "array", false, false, false, 40) == "ROLE_ADMIN"))) {
            // line 41
            echo "                        <div class=\"col-2 fs-6\">
                            <select name=\"val_referent0\" id=\"val_referent0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les referents ...</option>
                                ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_referent"]) || array_key_exists("les_referent", $context) ? $context["les_referent"] : (function () { throw new RuntimeError('Variable "les_referent" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 45
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 45) == (isset($context["val_referent"]) || array_key_exists("val_referent", $context) ? $context["val_referent"] : (function () { throw new RuntimeError('Variable "val_referent" does not exist.', 45, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["les_controleur"]) || array_key_exists("les_controleur", $context) ? $context["les_controleur"] : (function () { throw new RuntimeError('Variable "les_controleur" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 54
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 54) == (isset($context["val_controleur"]) || array_key_exists("val_controleur", $context) ? $context["val_controleur"] : (function () { throw new RuntimeError('Variable "val_controleur" does not exist.', 54, $this->source); })()))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["les_statut"]) || array_key_exists("les_statut", $context) ? $context["les_statut"] : (function () { throw new RuntimeError('Variable "les_statut" does not exist.', 62, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 63
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
                echo "\" ";
                if (($context["obj"] == (isset($context["val_statut"]) || array_key_exists("val_statut", $context) ? $context["val_statut"] : (function () { throw new RuntimeError('Variable "val_statut" does not exist.', 63, $this->source); })()))) {
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
            echo twig_escape_filter($this->env, (isset($context["val_rech"]) || array_key_exists("val_rech", $context) ? $context["val_rech"] : (function () { throw new RuntimeError('Variable "val_rech" does not exist.', 74, $this->source); })()), "html", null, true);
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
        if ((twig_length_filter($this->env, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 81, $this->source); })())) == 0)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 97, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 97), "html", null, true);
            echo ")</div>

            ";
            // line 100
            echo "
            <div class=\"row mt-4\">
                ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 102, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["doss"]) {
                // line 103
                echo "                    ";
                $context["demande"] = twig_get_attribute($this->env, $this->source, $context["doss"], "demande", [], "any", false, false, false, 103);
                // line 104
                echo "                    ";
                $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 104, $this->source); })()), "installation", [], "any", false, false, false, 104);
                // line 105
                echo "                    ";
                $context["electricien"] = twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 105, $this->source); })()), "electricien", [], "any", false, false, false, 105);
                // line 106
                echo "                    ";
                $context["proprietaire"] = twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 106, $this->source); })()), "proprietaire", [], "any", false, false, false, 106);
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
                if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 118, $this->source); })()), "usages", [], "any", false, false, false, 118) != "domestique")) {
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
                echo twig_escape_filter($this->env, (isset($context["badge_usage"]) || array_key_exists("badge_usage", $context) ? $context["badge_usage"] : (function () { throw new RuntimeError('Variable "badge_usage" does not exist.', 124, $this->source); })()), "html", null, true);
                echo " py-1 px-2 pt\">
                                    <a title=\"Afficher les détails la demande\" class=\"text-decoration-none\" href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 125)]), "html", null, true);
                echo "\">
                                        <span class=\"";
                // line 126
                echo twig_escape_filter($this->env, (isset($context["text_usage"]) || array_key_exists("text_usage", $context) ? $context["text_usage"] : (function () { throw new RuntimeError('Variable "text_usage" does not exist.', 126, $this->source); })()), "html", null, true);
                echo "\">Dossier n° ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 126, $this->source); })()), "numero", [], "any", false, false, false, 126), "html", null, true);
                echo "</span>
                                    </a>
                                    <a target=\"_blank\" title=\"Générer la demande en pdf\" class=\"text-decoration-none float-end p-0 m-0\" href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128)]), "html", null, true);
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
                echo twig_escape_filter($this->env, (isset($context["badge_etat"]) || array_key_exists("badge_etat", $context) ? $context["badge_etat"] : (function () { throw new RuntimeError('Variable "badge_etat" does not exist.', 138, $this->source); })()), "html", null, true);
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
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 166, $this->source); })()), "localite", [], "any", false, false, false, 166))) {
                    // line 167
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 167, $this->source); })()), "localite", [], "any", false, false, false, 167), "departement", [], "any", false, false, false, 167), "nom", [], "any", false, false, false, 167), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 167, $this->source); })()), "localite", [], "any", false, false, false, 167), "nom", [], "any", false, false, false, 167), "html", null, true);
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
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 173, $this->source); })()), "typeconstruction", [], "any", false, false, false, 173))) {
                    // line 174
                    echo "                                            [<span class=\"text-dark fw-bold\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 174, $this->source); })()), "typeconstruction", [], "any", false, false, false, 174), "nom", [], "any", false, false, false, 174), "html", null, true);
                    echo "]</span>
                                            ";
                    // line 175
                    echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 175, $this->source); })()), "adresse", [], "any", false, false, false, 175)) < 15)) ? (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 175, $this->source); })()), "adresse", [], "any", false, false, false, 175)) : ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 175, $this->source); })()), "adresse", [], "any", false, false, false, 175), 0, 12) . "..."))), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 186, $this->source); })()), "puissance", [], "any", false, false, false, 186), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 192, $this->source); })()), "cout", [], "any", false, false, false, 192), 0, ",", " "), "html", null, true);
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
            twig_get_attribute($this->env, $this->source, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 221, $this->source); })()), "setPageRange", [0 => 1], "method", false, false, false, 221);
            // line 222
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 222, $this->source); })()), "pagination.html.twig");
            echo "

            ";
        }
        // line 225
        echo "        </div>
    </section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  595 => 225,  588 => 222,  586 => 221,  582 => 219,  573 => 215,  570 => 214,  564 => 212,  561 => 211,  558 => 210,  552 => 208,  549 => 207,  546 => 206,  540 => 204,  537 => 203,  534 => 202,  528 => 200,  525 => 199,  523 => 198,  514 => 192,  509 => 190,  502 => 186,  497 => 184,  490 => 179,  486 => 177,  481 => 175,  476 => 174,  474 => 173,  470 => 171,  466 => 169,  458 => 167,  456 => 166,  451 => 164,  446 => 161,  442 => 159,  436 => 157,  434 => 156,  429 => 154,  425 => 152,  419 => 149,  414 => 147,  410 => 145,  408 => 144,  400 => 139,  396 => 138,  391 => 137,  382 => 130,  377 => 128,  370 => 126,  366 => 125,  362 => 124,  358 => 122,  355 => 121,  352 => 120,  349 => 119,  346 => 118,  343 => 117,  340 => 116,  337 => 115,  334 => 114,  331 => 113,  328 => 112,  325 => 111,  322 => 110,  319 => 109,  317 => 108,  314 => 107,  311 => 106,  308 => 105,  305 => 104,  302 => 103,  298 => 102,  294 => 100,  288 => 97,  271 => 82,  269 => 81,  262 => 77,  254 => 74,  246 => 68,  241 => 65,  226 => 63,  222 => 62,  217 => 59,  215 => 58,  211 => 56,  196 => 54,  192 => 53,  187 => 50,  182 => 47,  167 => 45,  163 => 44,  158 => 41,  156 => 40,  152 => 38,  137 => 36,  133 => 35,  126 => 30,  111 => 28,  107 => 27,  102 => 24,  97 => 21,  82 => 19,  78 => 18,  73 => 15,  71 => 14,  61 => 9,  55 => 8,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <h4 class=\"fw-bold\">Dossiers en attente de {{ etatDossier }}</h4>
                        <select name=\"val_affichage_demande\" id=\"val_affichage_demande\" class=\"bg-warning bg-opacity-50 form-select-sm\">
                            <option {% if affichage == 'listing' %} selected=\"selected\" {% endif %} value=\"listing\">Affichage en Listing</option>
                            <option {% if affichage == 'bloc' %} selected=\"selected\" {% endif %} value=\"bloc\">Affichage en Blocs</option>
                        </select>
                    </div>
                    <div align=\"right\" class=\"col-10 row fs-5 mt-0 pt-0 caption fw-light priority-4\" style=\"\">
                        <div class=\"col-1\"></div>
                        {% if agence is defined %}
                        <div class=\"col-2 fs-6\">
                            <select name=\"val_agence0\" id=\"val_agence0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Toutes les Agences ...</option>
                                {% for obj in les_agence %}
                                    <option value=\"{{obj.id}}\" {% if obj.id == val_agence %} selected=\"selected\"{% endif %}>{{obj.nom}}</option>
                                {% endfor %}
                            </select>
                        </div>
                        {% endif %}
                        <div class=\"col-2 fs-6\">
                            <select name=\"val_passage0\" id=\"val_passage0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les passages ...</option>
                                {% for obj in les_passage %}
                                    <option value=\"{{obj}}\" {% if obj == val_passage %} selected=\"selected\"{% endif %}>{{obj}}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"col-2 fs-6\">
                            <select name=\"val_usage0\" id=\"val_usage0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les usages ...</option>
                                {% for obj in les_usage %}
                                    <option value=\"{{obj}}\" {% if obj == val_usage %} selected=\"selected\"{% endif %}>{{obj}}</option>
                                {% endfor %}
                            </select>
                        </div>
                        {% if app.user.roles[0] is defined and app.user.roles[0]==\"ROLE_ADMIN\" %}
                        <div class=\"col-2 fs-6\">
                            <select name=\"val_referent0\" id=\"val_referent0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les referents ...</option>
                                {% for obj in les_referent %}
                                    <option value=\"{{obj.id}}\" {% if obj.id == val_referent %} selected=\"selected\"{% endif %}>{{obj}}</option>
                                {% endfor %}
                            </select>
                        </div>
                        {% endif %}
                        <div class=\"col-2 fs-6\">
                            <select name=\"val_controleur0\" id=\"val_controleur0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les controleurs ...</option>
                                {% for obj in les_controleur %}
                                    <option value=\"{{obj.id}}\" {% if obj.id == val_controleur %} selected=\"selected\"{% endif %}>{{obj}}</option>
                                {% endfor %}
                            </select>
                        </div>
                        {% if les_statut is defined %}
                        <div class=\"col-2 fs-6\">
                            <select name=\"val_statut0\" id=\"val_statut0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les statuts ...</option>
                                {% for obj in les_statut %}
                                    <option value=\"{{obj}}\" {% if obj == val_statut %} selected=\"selected\"{% endif %}>{{obj}}</option>
                                {% endfor %}
                            </select>
                        </div>
                        {% endif %}
                    </div>
                </div>
                <span class=\"divider\">
                    <hr></span>
            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"height:0px; position:relative; top:4px;\">
                <div class=\"col-lg-7 col-4\"></div>
                <div class=\"col-6 col-lg-3 fs-6 border-bottom\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"{% if val_rech is defined %}{{ val_rech }}{% endif %}\" /></div>
                <div class=\"col-lg-2 col-2 priority-3\" align=\"center\">
                    <svg class=\"bi pt\" width=\"28\" height=\"28\" fill=\"#c32424\">
                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#filetype-pdf') }}\"></use>
                    </svg>
                </div>
            </div>
            {% if les_dossier|length == 0 %}
                <br />
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
            {% else %}
            <div align=\"top\" class=\"caption fs-5 mt-0 pt-0\">Liste des Dossiers ({{ les_dossier.getTotalItemCount }})</div>

            {# Affichage des dossiers en format card #}

            <div class=\"row mt-4\">
                {% for doss in les_dossier %}
                    {% set demande = doss.demande %}
                    {% set installation = demande.installation %}
                    {% set electricien = installation.electricien %}
                    {% set proprietaire = installation.proprietaire %}

                    {% set badge_etat = \"danger\" %}
                    {% if doss.etat == \"Visite\" %}
                        {% set badge_etat = \"warning\" %}
                    {% elseif doss.etat == \"Rapport\" %}
                        {% set badge_etat = \"warning\" %}
                    {% elseif doss.etat == \"Attestation\" %}
                        {% set badge_etat = \"success\" %}
                    {% endif %}
                    {% set badge_usage = \"warning\" %}
                    {% set text_usage = \"text-dark\" %}
                    {% if installation.usages != \"domestique\" %}
                        {% set badge_usage = \"primary text-light\" %}
                        {% set text_usage = \"text-light\" %}
                    {% endif %}
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"card-orig border-dark mb-3\">
                            <h5 class=\"card-header border-dark bg-{{badge_usage}} py-1 px-2 pt\">
                                    <a title=\"Afficher les détails la demande\" class=\"text-decoration-none\" href=\"{{ path('app_dossier_show', {'id': doss.id }) }}\">
                                        <span class=\"{{text_usage}}\">Dossier n° {{ demande.numero }}</span>
                                    </a>
                                    <a target=\"_blank\" title=\"Générer la demande en pdf\" class=\"text-decoration-none float-end p-0 m-0\" href=\"{{ path('app_installation_showpdf', {'id': installation.id }) }}\">
                                    <svg class=\"bi pt\" width=\"22\" height=\"22\" fill=\"white\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#filetype-pdf') }}\"></use>
                                    </svg>
                                    </a>
                            </h5>
                            <div class=\"card-body\">
                                <h6 class=\"card-title\" align=\"right\">
                                    {# <a href=\"{{ path('app_dossier_show', {'id': doss.id }) }}\"><span class=\"badge fs-7 bg-{{badge_usage}}\">{{ installation.usages }}</span></a> #}
                                    <a class=\"\" href=\"{{ path('app_dossier_show', {'id': doss.id }) }}\">
                                        <span class=\"badge badge-{{ badge_etat }} fs-7 px-1\">
                                            En Attente de {{ doss.etat }}
                                        </span>
                                    </a>
                                </h6>
                                <p class=\"card-text fs-7\">
                                    {% if doss.referent %}
                                    <div class=\"mb-2 border-0 text-muted\" title=\"Référent\">
                                        <svg class=\"bi pt\" width=\"22\" height=\"22\" fill=\"gray\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person-workspace') }}\"></use>
                                        </svg>
                                        {{ doss.referent  | length < 30 ? doss.referent : doss.referent|slice(0, 27) ~ '...'}}
\t\t\t\t\t\t\t\t\t</div>
                                    {% endif %}
                                    <div class=\"mb-2 border-0 text-muted\" title=\"Controleur\">
                                        <svg class=\"bi pt\" width=\"22\" height=\"22\" fill=\"red\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person-rolodex') }}\"></use>
                                        </svg>
                                    {% if doss.controleur %}
                                        {{ doss.controleur  | length < 30 ? doss.controleur : doss.controleur|slice(0, 27) ~ '...'}}
                                    {% else %}
                                        <span class=\"text-danger\">Non affecté à controleur</span>
                                    {% endif %}
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"mb-2 border-0 text-muted\" title=\"Localisation installation\">
                                        <svg class=\"bi pt\" width=\"20\" height=\"20\" fill=\"#6d0d2b\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#geo-alt') }}\"></use>
                                        </svg>
                                        {% if installation.localite is not null %}
                                            {{ installation.localite.departement.nom }} - {{ installation.localite.nom }}
                                        {% else %}
                                            <span class=\"text-danger\">-</span>
                                        {% endif %}
                                    </div>
                                    <p class=\"ms-2 fs-7\">
                                        {% if installation.typeconstruction is not null %}
                                            [<span class=\"text-dark fw-bold\">{{ installation.typeconstruction.nom }}]</span>
                                            {{ installation.adresse | length < 15 ? installation.adresse : installation.adresse|slice(0, 12) ~ '...' }}
                                        {% else %}
                                            <span class=\"text-danger\">-</span>
                                        {% endif %}
                                    </p>
                                        <div class=\"mt-2 pt-2 border-top border-secondary text-dark\">
                                            <div class=\"row\">
                                                <div class=\"col-5\">
                                                    <svg class=\"bi pt\" width=\"20\" height=\"20\" fill=\"orange\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#lightning-charge') }}\"></use>
                                                    </svg>
                                                    {{ demande.puissance }} kW
                                                </div>
                                                <div class=\"col-7\">
                                                    <svg class=\"bi pt\" width=\"20\" height=\"20\" fill=\"blue\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#cash') }}\"></use>
                                                    </svg>
                                                    {{ demande.cout|number_format(0, ',', ' ') }} FCFA
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            <div class=\"card-footer text-muted text-end\">
                            {% if not doss.affecte %}
                                {% if is_granted('ROLE_REFERENT') %}
                                <a href=\"{{ path('app_dossier_affecter', {'id': doss.id}) }}\" class=\"next action-button btn btn-success btn-sm\">Affecter à un contrôleur</a>
                                {% endif %}
                            {% elseif not doss.visite %}
                                {% if is_granted('ROLE_CONTROLEUR') and not is_granted('ROLE_REFERENT') %}
                                <a href=\"{{ path('app_dossier_visiter', {'id': doss.id}) }}\" class=\"next action-button btn btn-success btn-sm\">Planifier une visite</a>
                                {% endif %}
                            {% elseif not doss.rapport %}
                                {% if is_granted('ROLE_CONTROLEUR') and not is_granted('ROLE_REFERENT') %}
                                <a href=\"{{ path('app_dossier_rapporter', {'id': doss.id}) }}\" class=\"next action-button btn btn-success btn-sm\">Elaborer rapport de visite</a>
                                {% endif %}
                            {% elseif not doss.attestation %}
                                {% if is_granted('ROLE_REFERENT') %}
                                <a href=\"{{ path('app_dossier_attester', {'id': doss.id}) }}\" class=\"next action-button btn btn-success btn-sm\">Etablir Résultats Inspection</a>
                                {% endif %}
                            {% endif %}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>

                {% do les_dossier.setPageRange(1)%}
                {{ knp_pagination_render(les_dossier, 'pagination.html.twig')}}

            {% endif %}
        </div>
    </section>
", "dossier/_index_card.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/_index_card.html.twig");
    }
}
