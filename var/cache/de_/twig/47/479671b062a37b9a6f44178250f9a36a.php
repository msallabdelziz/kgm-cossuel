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
class __TwigTemplate_af5b80e782699ba4b6f0d535f647c1e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/_index0_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/_index0_card.html.twig"));

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
        // line 15
        if (array_key_exists("agence", $context)) {
            // line 16
            echo "                        <div class=\"col-2 fs-6\">
                            <select name=\"val_agence0\" id=\"val_agence0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Toutes les Agences ...</option>
                                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_agence"]) || array_key_exists("les_agence", $context) ? $context["les_agence"] : (function () { throw new RuntimeError('Variable "les_agence" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 20
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 20), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 20) == (isset($context["val_agence"]) || array_key_exists("val_agence", $context) ? $context["val_agence"] : (function () { throw new RuntimeError('Variable "val_agence" does not exist.', 20, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["les_passage"]) || array_key_exists("les_passage", $context) ? $context["les_passage"] : (function () { throw new RuntimeError('Variable "les_passage" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 29
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == (isset($context["val_passage"]) || array_key_exists("val_passage", $context) ? $context["val_passage"] : (function () { throw new RuntimeError('Variable "val_passage" does not exist.', 29, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["les_usage"]) || array_key_exists("les_usage", $context) ? $context["les_usage"] : (function () { throw new RuntimeError('Variable "les_usage" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 37
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == (isset($context["val_usage"]) || array_key_exists("val_usage", $context) ? $context["val_usage"] : (function () { throw new RuntimeError('Variable "val_usage" does not exist.', 37, $this->source); })()))) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 41), "roles", [], "any", false, true, false, 41), 0, [], "array", true, true, false, 41) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "roles", [], "any", false, false, false, 41), 0, [], "array", false, false, false, 41) == "ROLE_ADMIN"))) {
            // line 42
            echo "                        <div class=\"col-2 fs-6\">
                            <select name=\"val_referent0\" id=\"val_referent0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les referents ...</option>
                                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_referent"]) || array_key_exists("les_referent", $context) ? $context["les_referent"] : (function () { throw new RuntimeError('Variable "les_referent" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 46
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 46), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 46) == (isset($context["val_referent"]) || array_key_exists("val_referent", $context) ? $context["val_referent"] : (function () { throw new RuntimeError('Variable "val_referent" does not exist.', 46, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["les_controleur"]) || array_key_exists("les_controleur", $context) ? $context["les_controleur"] : (function () { throw new RuntimeError('Variable "les_controleur" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 55
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 55) == (isset($context["val_controleur"]) || array_key_exists("val_controleur", $context) ? $context["val_controleur"] : (function () { throw new RuntimeError('Variable "val_controleur" does not exist.', 55, $this->source); })()))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["les_statut"]) || array_key_exists("les_statut", $context) ? $context["les_statut"] : (function () { throw new RuntimeError('Variable "les_statut" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 64
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
                echo "\" ";
                if (($context["obj"] == (isset($context["val_statut"]) || array_key_exists("val_statut", $context) ? $context["val_statut"] : (function () { throw new RuntimeError('Variable "val_statut" does not exist.', 64, $this->source); })()))) {
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
            echo twig_escape_filter($this->env, (isset($context["val_rech"]) || array_key_exists("val_rech", $context) ? $context["val_rech"] : (function () { throw new RuntimeError('Variable "val_rech" does not exist.', 75, $this->source); })()), "html", null, true);
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
        if ((twig_length_filter($this->env, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 82, $this->source); })())) == 0)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 98, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 98), "html", null, true);
            echo ")</div>

            ";
            // line 101
            echo "
            <div class=\"row mt-4\">
                ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 103, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["doss"]) {
                // line 104
                echo "                    ";
                $context["demande"] = twig_get_attribute($this->env, $this->source, $context["doss"], "demande", [], "any", false, false, false, 104);
                // line 105
                echo "                    ";
                $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 105, $this->source); })()), "installation", [], "any", false, false, false, 105);
                // line 106
                echo "                    ";
                $context["electricien"] = twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 106, $this->source); })()), "electricien", [], "any", false, false, false, 106);
                // line 107
                echo "                    ";
                $context["proprietaire"] = twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 107, $this->source); })()), "proprietaire", [], "any", false, false, false, 107);
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
                if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 119, $this->source); })()), "usages", [], "any", false, false, false, 119) != "domestique")) {
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
                echo twig_escape_filter($this->env, (isset($context["badge_usage"]) || array_key_exists("badge_usage", $context) ? $context["badge_usage"] : (function () { throw new RuntimeError('Variable "badge_usage" does not exist.', 125, $this->source); })()), "html", null, true);
                echo " py-1 px-2 pt\">
                                    <a title=\"Afficher les détails la demande\" class=\"text-decoration-none\" href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doss"], "id", [], "any", false, false, false, 126)]), "html", null, true);
                echo "\">
                                        <span class=\"";
                // line 127
                echo twig_escape_filter($this->env, (isset($context["text_usage"]) || array_key_exists("text_usage", $context) ? $context["text_usage"] : (function () { throw new RuntimeError('Variable "text_usage" does not exist.', 127, $this->source); })()), "html", null, true);
                echo "\">Dossier n° ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 127, $this->source); })()), "numero", [], "any", false, false, false, 127), "html", null, true);
                echo "</span>
                                    </a>
                                    <a target=\"_blank\" title=\"Générer la demande en pdf\" class=\"text-decoration-none float-end p-0 m-0\" href=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129)]), "html", null, true);
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
                echo twig_escape_filter($this->env, (isset($context["badge_etat"]) || array_key_exists("badge_etat", $context) ? $context["badge_etat"] : (function () { throw new RuntimeError('Variable "badge_etat" does not exist.', 139, $this->source); })()), "html", null, true);
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
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 167, $this->source); })()), "localite", [], "any", false, false, false, 167))) {
                    // line 168
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 168, $this->source); })()), "localite", [], "any", false, false, false, 168), "departement", [], "any", false, false, false, 168), "nom", [], "any", false, false, false, 168), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 168, $this->source); })()), "localite", [], "any", false, false, false, 168), "nom", [], "any", false, false, false, 168), "html", null, true);
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
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 174, $this->source); })()), "typeconstruction", [], "any", false, false, false, 174))) {
                    // line 175
                    echo "                                            [<span class=\"text-dark fw-bold\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 175, $this->source); })()), "typeconstruction", [], "any", false, false, false, 175), "nom", [], "any", false, false, false, 175), "html", null, true);
                    echo "]</span>
                                            ";
                    // line 176
                    echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 176, $this->source); })()), "adresse", [], "any", false, false, false, 176)) < 15)) ? (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 176, $this->source); })()), "adresse", [], "any", false, false, false, 176)) : ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 176, $this->source); })()), "adresse", [], "any", false, false, false, 176), 0, 12) . "..."))), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 187, $this->source); })()), "puissance", [], "any", false, false, false, 187), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 193, $this->source); })()), "cout", [], "any", false, false, false, 193), 0, ",", " "), "html", null, true);
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
            twig_get_attribute($this->env, $this->source, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 203, $this->source); })()), "setPageRange", [0 => 1], "method", false, false, false, 203);
            // line 204
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 204, $this->source); })()), "pagination.html.twig");
            echo "

            ";
        }
        // line 207
        echo "        </div>
    </section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  539 => 207,  532 => 204,  530 => 203,  526 => 201,  512 => 193,  507 => 191,  500 => 187,  495 => 185,  488 => 180,  484 => 178,  479 => 176,  474 => 175,  472 => 174,  468 => 172,  464 => 170,  456 => 168,  454 => 167,  449 => 165,  444 => 162,  440 => 160,  434 => 158,  432 => 157,  427 => 155,  423 => 153,  417 => 150,  412 => 148,  408 => 146,  406 => 145,  398 => 140,  394 => 139,  389 => 138,  380 => 131,  375 => 129,  368 => 127,  364 => 126,  360 => 125,  356 => 123,  353 => 122,  350 => 121,  347 => 120,  344 => 119,  341 => 118,  338 => 117,  335 => 116,  332 => 115,  329 => 114,  326 => 113,  323 => 112,  320 => 111,  317 => 110,  315 => 109,  312 => 108,  309 => 107,  306 => 106,  303 => 105,  300 => 104,  296 => 103,  292 => 101,  286 => 98,  269 => 83,  267 => 82,  260 => 78,  252 => 75,  244 => 69,  239 => 66,  224 => 64,  220 => 63,  215 => 60,  213 => 59,  209 => 57,  194 => 55,  190 => 54,  185 => 51,  180 => 48,  165 => 46,  161 => 45,  156 => 42,  154 => 41,  150 => 39,  135 => 37,  131 => 36,  124 => 31,  109 => 29,  105 => 28,  100 => 25,  95 => 22,  80 => 20,  76 => 19,  71 => 16,  69 => 15,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <h4 class=\"fw-bold\">Tous les Dossiers </h4>
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
                <div class=\"col-9\"></div>
                <div class=\"col-6 col-lg-2 fs-6\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"{% if val_rech is defined %}{{ val_rech }}{% endif %}\" /></div>
                <div class=\"col-lg-1 priority-3\" align=\"center\">
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
                        </div>
                    </div>
                {% endfor %}
            </div>

                {% do les_dossier.setPageRange(1)%}
                {{ knp_pagination_render(les_dossier, 'pagination.html.twig')}}

            {% endif %}
        </div>
    </section>
", "dossier/_index0_card.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/_index0_card.html.twig");
    }
}
