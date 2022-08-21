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
class __TwigTemplate_a710bb4fd8b929ee09b34510cbe7725d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/_index_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/_index_list.html.twig"));

        // line 1
        echo "    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <h4 class=\"fw-bold\">Demandes ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["etatDemande"]) || array_key_exists("etatDemande", $context) ? $context["etatDemande"] : (function () { throw new RuntimeError('Variable "etatDemande" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h4>
                        ";
        // line 11
        echo "                    </div>
                    ";
        // line 12
        if ((((isset($context["modif"]) || array_key_exists("modif", $context) ? $context["modif"] : (function () { throw new RuntimeError('Variable "modif" does not exist.', 12, $this->source); })()) == 1) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PUBLIC") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["les_agence"]) || array_key_exists("les_agence", $context) ? $context["les_agence"] : (function () { throw new RuntimeError('Variable "les_agence" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 29
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 29) == (isset($context["val_agence"]) || array_key_exists("val_agence", $context) ? $context["val_agence"] : (function () { throw new RuntimeError('Variable "val_agence" does not exist.', 29, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["les_usage"]) || array_key_exists("les_usage", $context) ? $context["les_usage"] : (function () { throw new RuntimeError('Variable "les_usage" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
            // line 37
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == (isset($context["val_usage"]) || array_key_exists("val_usage", $context) ? $context["val_usage"] : (function () { throw new RuntimeError('Variable "val_usage" does not exist.', 37, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["les_passage"]) || array_key_exists("les_passage", $context) ? $context["les_passage"] : (function () { throw new RuntimeError('Variable "les_passage" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
            // line 45
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == (isset($context["val_passage"]) || array_key_exists("val_passage", $context) ? $context["val_passage"] : (function () { throw new RuntimeError('Variable "val_passage" does not exist.', 45, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["les_statut"]) || array_key_exists("les_statut", $context) ? $context["les_statut"] : (function () { throw new RuntimeError('Variable "les_statut" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 53
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == (isset($context["val_statut"]) || array_key_exists("val_statut", $context) ? $context["val_statut"] : (function () { throw new RuntimeError('Variable "val_statut" does not exist.', 53, $this->source); })()))) {
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
            echo twig_escape_filter($this->env, (isset($context["val_rech"]) || array_key_exists("val_rech", $context) ? $context["val_rech"] : (function () { throw new RuntimeError('Variable "val_rech" does not exist.', 63, $this->source); })()), "html", null, true);
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
        if ((twig_length_filter($this->env, (isset($context["les_installation"]) || array_key_exists("les_installation", $context) ? $context["les_installation"] : (function () { throw new RuntimeError('Variable "les_installation" does not exist.', 76, $this->source); })())) == 0)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_installation"]) || array_key_exists("les_installation", $context) ? $context["les_installation"] : (function () { throw new RuntimeError('Variable "les_installation" does not exist.', 93, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 93), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["les_installation"]) || array_key_exists("les_installation", $context) ? $context["les_installation"] : (function () { throw new RuntimeError('Variable "les_installation" does not exist.', 111, $this->source); })()));
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
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "session", [], "any", false, false, false, 122), "get", [0 => "sousmenu"], "method", false, false, false, 122) == "demande_soumission")) {
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
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "session", [], "any", false, false, false, 130), "get", [0 => "sousmenu"], "method", false, false, false, 130) == "demande_paiement")) {
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
                    if ((((isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 224, $this->source); })()) == "Accepté") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 224, $this->source); })()), "session", [], "any", false, false, false, 224), "get", [0 => "sousmenu"], "method", false, false, false, 224) == "demande_paiement"))) {
                        echo " ";
                        $context["etat"] = "Attente Paiement";
                    }
                    // line 225
                    echo "                                    ";
                    if ((((isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 225, $this->source); })()) == "Accepté") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 225, $this->source); })()), "session", [], "any", false, false, false, 225), "get", [0 => "sousmenu"], "method", false, false, false, 225) == "demande_soumission"))) {
                        echo " ";
                        $context["etat"] = "Soumis, Validé";
                    }
                    // line 226
                    echo "                                    ";
                    if (((isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 226, $this->source); })()) == "Soumis")) {
                        echo " ";
                        $context["etat"] = "Soumis, Attente validation";
                    }
                    // line 227
                    echo "                                    ";
                    if ((((isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 227, $this->source); })()) == "Paiement validé") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 227, $this->source); })()), "session", [], "any", false, false, false, 227), "get", [0 => "sousmenu"], "method", false, false, false, 227) == "demande_validation"))) {
                        echo " ";
                        $context["etat"] = "Payé, Attente validation";
                        echo " ";
                        $context["badge_etat"] = "danger";
                    }
                    // line 228
                    echo "                                    <span class=\"badge badge-";
                    echo twig_escape_filter($this->env, (isset($context["badge_etat"]) || array_key_exists("badge_etat", $context) ? $context["badge_etat"] : (function () { throw new RuntimeError('Variable "badge_etat" does not exist.', 228, $this->source); })()), "html", null, true);
                    echo " fs-8\">";
                    echo twig_escape_filter($this->env, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 228, $this->source); })()), "html", null, true);
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
                if (((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 262) < 7) && ((isset($context["modif"]) || array_key_exists("modif", $context) ? $context["modif"] : (function () { throw new RuntimeError('Variable "modif" does not exist.', 262, $this->source); })()) == 1))) {
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
                        if (twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 268, $this->source); })()), "gdroit_de", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "user", [], "any", false, false, false, 268), "id", [], "any", false, false, false, 268), 1 => "installation", 2 => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 268)], "method", false, false, false, 268)) {
                            // line 269
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link_edit"]) || array_key_exists("link_edit", $context) ? $context["link_edit"] : (function () { throw new RuntimeError('Variable "link_edit" does not exist.', 269, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 269)]), "html", null, true);
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
            twig_get_attribute($this->env, $this->source, (isset($context["les_installation"]) || array_key_exists("les_installation", $context) ? $context["les_installation"] : (function () { throw new RuntimeError('Variable "les_installation" does not exist.', 300, $this->source); })()), "setPageRange", [0 => 1], "method", false, false, false, 300);
            // line 301
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["les_installation"]) || array_key_exists("les_installation", $context) ? $context["les_installation"] : (function () { throw new RuntimeError('Variable "les_installation" does not exist.', 301, $this->source); })()), "pagination.html.twig");
            echo "

            ";
        }
        // line 304
        echo "        </div>
    </section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  729 => 304,  722 => 301,  720 => 300,  715 => 297,  707 => 294,  705 => 289,  698 => 285,  694 => 283,  691 => 282,  688 => 281,  681 => 277,  677 => 275,  670 => 271,  664 => 269,  661 => 268,  658 => 267,  655 => 266,  652 => 265,  649 => 264,  647 => 263,  642 => 262,  635 => 258,  629 => 256,  626 => 255,  619 => 251,  613 => 249,  606 => 245,  600 => 243,  598 => 242,  594 => 241,  591 => 240,  589 => 233,  585 => 230,  577 => 228,  569 => 227,  563 => 226,  557 => 225,  551 => 224,  548 => 223,  545 => 222,  542 => 221,  539 => 220,  536 => 219,  532 => 217,  529 => 216,  523 => 214,  517 => 212,  515 => 211,  511 => 209,  507 => 207,  501 => 205,  499 => 204,  495 => 202,  491 => 200,  485 => 198,  483 => 197,  480 => 196,  477 => 194,  473 => 192,  467 => 190,  465 => 189,  461 => 187,  457 => 185,  451 => 183,  449 => 182,  445 => 180,  441 => 178,  439 => 177,  436 => 176,  434 => 175,  431 => 174,  428 => 173,  422 => 171,  416 => 169,  414 => 168,  410 => 166,  404 => 164,  398 => 162,  396 => 161,  392 => 159,  386 => 156,  381 => 155,  378 => 154,  372 => 151,  367 => 150,  361 => 147,  356 => 146,  353 => 145,  351 => 144,  346 => 141,  343 => 140,  340 => 139,  337 => 138,  334 => 137,  331 => 136,  328 => 135,  325 => 134,  322 => 133,  319 => 132,  316 => 131,  313 => 130,  310 => 129,  307 => 128,  304 => 127,  301 => 126,  298 => 125,  295 => 124,  292 => 123,  290 => 122,  287 => 121,  284 => 120,  281 => 119,  278 => 118,  275 => 117,  272 => 116,  269 => 115,  266 => 114,  263 => 113,  260 => 112,  256 => 111,  250 => 107,  248 => 106,  243 => 102,  232 => 93,  229 => 92,  212 => 77,  210 => 76,  201 => 70,  195 => 68,  188 => 63,  178 => 55,  163 => 53,  159 => 52,  152 => 47,  137 => 45,  133 => 44,  126 => 39,  111 => 37,  107 => 36,  100 => 31,  85 => 29,  81 => 28,  73 => 22,  62 => 14,  59 => 13,  57 => 12,  54 => 11,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <h4 class=\"fw-bold\">Demandes {{ etatDemande }}</h4>
                        {# <select name=\"val_affichage_demande\" id=\"val_affichage_demande\" class=\"bg-warning bg-opacity-50 form-select-sm\">
                            <option {% if affichage == 'listing' %} selected=\"selected\" {% endif %} value=\"listing\">Affichage en Listing</option>
                            <option {% if affichage == 'bloc' %} selected=\"selected\" {% endif %} value=\"bloc\">Affichage en Blocs</option>
                        </select> #}
                    </div>
                    {% if modif == 1 and (is_granted('ROLE_PUBLIC') or is_granted('ROLE_RFO')) %}
                    <div>
                        <a href=\"{{ path('app_installation_add', { 'id': 0}) }}\" class=\"btn btn-primary btn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 16 16\">
                                <path fill-rule=\"evenodd\" d=\"M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z\"></path>
                            </svg>
                            Nouvelle Demande
                        </a>
                    </div>
                    {% endif %}
                </div>
                    <div>
                        <div align=\"right\" class=\"row fs-5 mt-0 pt-0 fw-light priority-4\" style=\"\">
                            <div class=\"offset-2 col-2 fs-6\">
                                <select name=\"val_agence0\" id=\"val_agence0\" class=\"form-select form-select-sm border-warning py-1\">
                                    <option value=\"\">Toutes les Agences ...</option>
                                    {% for obj in les_agence %}
                                        <option value=\"{{obj.id}}\" {% if obj.id == val_agence %} selected=\"selected\"{% endif %}>{{obj.nom}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-2 fs-6\">
                                <select name=\"val_usage0\" id=\"val_usage0\" class=\"form-select form-select-sm border-warning py-1\">
                                    <option value=\"\">Tous les Usages ...</option>
                                    {% for obj,lib_obj in les_usage %}
                                        <option value=\"{{obj}}\" {% if obj == val_usage %} selected=\"selected\"{% endif %}>{{lib_obj}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-2 fs-6\">
                                <select name=\"val_passage0\" id=\"val_passage0\" class=\"form-select form-select-sm border-warning py-1\">
                                    <option value=\"\">Tous les Passages ...</option>
                                    {% for obj,lib_obj in les_passage %}
                                        <option value=\"{{obj}}\" {% if obj == val_passage %} selected=\"selected\"{% endif %}>{{lib_obj}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-2 fs-6\">
                                <select name=\"val_statut0\" id=\"val_statut0\" class=\"form-select form-select-sm border-success py-1\">
                                    <option value=\"\">Tous les statuts ...</option>
                                    {% for obj in les_statut %}
                                        <option value=\"{{obj}}\" {% if obj == val_statut %} selected=\"selected\"{% endif %}>{{obj}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-2\"></div>
                        </div>
                    </div>
                <span class=\"divider\">
                    <hr></span>
                <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"height:0px; position:relative; top:4px;\">
                    <div class=\"col-6 col-lg-3 fs-6 offset-6 offset-lg-7\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"{% if val_rech is defined %}{{ val_rech }}{% endif %}\" /></div>
                    <div class=\"col-lg-2 col-2 priority-3\" align=\"right\">
                        {# <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"#c32424\">
                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#filetype-pdf') }}\"></use>
                        </svg> #}
                        <a href=\"{{path('app_installation_excel')}}\" class=\"ms-1\">
                            <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"green\">
                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#filetype-xls') }}\"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class=\"clear\"></div>
            {% if les_installation|length == 0 %}
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
            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des Demandes ({{ les_installation.getTotalItemCount }})</caption>
            <thead>
                <tr>
                    <th scope=\"col\">N° demande</th> 
                    <th class=\"priority-3\">Date Demande</th>
                    <th class=\"priority-3\">Usage</th> 
                    <th class=\"priority-4\">Agence</th>
                    <th class=\"priority-5\">Localité</th>
                    {# <th class=\"priority-5\">Adresse</th> #}
                    <th class=\"priority-3\">Type Construction</th>
                    <th class=\"priority-4\">Electricien</th>
                    <th>Statut demande</th>
                    {# <th scope=\"col\">Agence</th> #}
                    {# <th class=\"text-center\" scope=\"col\">Départements</th>  #}
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                {% for ag in les_installation %}
                    {% if ag.step < 7 %}
                        {% set badge_etat = \"danger\" %}
                    {% endif %}
                    {% if ag.step >= 7 and ag.step <9 %}
                        {% set badge_etat = \"warning\" %}
                    {% endif %}
                    {% if ag.step >= 9 %}
                        {% set badge_etat = \"success\" %}
                    {% endif %}

                    {% if app.session.get('sousmenu')=='demande_soumission' %}
                        {% if ag.step == 7 and ag.demandecourante and ag.demandecourante.accepte == 0 %}
                            {% set badge_etat = \"warning\" %}
                        {% endif %}
                        {% if ag.step == 7 and ag.demandecourante and ag.demandecourante.accepte == 1 %}
                            {% set badge_etat = \"success\" %}
                        {% endif %}
                    {% endif %}
                    {% if app.session.get('sousmenu')=='demande_paiement' %}
                        {% if ag.step == 7 and ag.demandecourante and ag.demandecourante.accepte == 1 %}
                            {% set badge_etat = \"danger\" %}
                        {% endif %}
                        {% if ag.step == 8 %}
                            {% set badge_etat = \"warning\" %}
                        {% endif %}
                        {% if ag.step == 9 %}
                            {% set badge_etat = \"success\" %}
                        {% endif %}
                    {% endif %}

                    <tr>
                        <td scope=\"row\">
                            {% if (ag.step>=7 and ag.etat!=\"Saisie\") or (ag.demandeCourante and ag.demandeCourante.rejet) %}
                                {% if ag.demandeCourante and ag.demandeCourante.valide and ag.demandeCourante.dossier %}
                                <a href=\"{{ path('app_dossier_show', {'id': ag.demandeCourante.dossier.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">
                                    {{ ag.demandeCourante.numero }}
                                </a>
                                {% else %}
                                <a href=\"{{ path('app_installation_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">
                                    {{ ag.demandeCourante.numero }}
                                </a>
                                {% endif %}
                            {% else %}
                                <a href=\"{{ path('app_installation_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">
                                    <span class=\"text-red fs-9 fw-light\">[{{ ag.createdAt|date(\"d/m/y_H:i:s\") }}]</span>
                                </a>
                            {% endif %}
                        </td>
                        <td class=\"priority-3\">
                            {% if ag.step>=7 and ag.etat!=\"Saisie\" %}
                            <span class=\"badge text-secondary fs-8\">{{ ag.demandeCourante.dateCreation | date(\"d-m-Y\") }}</span>
                            {% else %}
                            <span class=\"badge text-secondary fs-8\">{{ ag.createdAt | date(\"d-m-Y\") }}</span>
                            {% endif %}
                        </td>
                        <td class=\"priority-3\">
                            {% if ag.demandeCourante and  ag.demandeCourante.valide and ag.demandeCourante.dossier %}
                                <a href=\"{{ path('app_dossier_show', {'id': ag.demandeCourante.dossier.id }) }}\" class=\"text-dark text-decoration-none\">
                            {% else %}
                                <a href=\"{{ path('app_installation_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none\">
                            {% endif %}
                            {% if ag.usages == \"domestique\" %}
                                <span class=\"text-warning fs-8 fw-bold\">Domestique</span>
                            {% elseif ag.usages == \"non_domestique\" %}
                                <span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
                            {% elseif ag.usages == \"erp_ert\" %}
                                <span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
                            {% endif %}
                        </a></td>
                        <td class=\"priority-4\">
                            {% if ag.localite is not null and ag.localite.agence is not null %}
                                {{ ag.localite.agence.nom }}
                            {% else %}
                                <span class=\"text-danger\">-</span>
                            {% endif %}
                        </td>
                        <td class=\"priority-5\">
                            {% if ag.localite is not null %}
                                {{ ag.localite.nom }}
                            {% else %}
                                <span class=\"text-danger\">-</span>
                            {% endif %}
                        </td>
                        {# <td class=\"priority-5\">{{ ag.adresse }}</td> #}
                        <td class=\"priority-3\">
                            {% if ag.typeconstruction is not null %}
                                {{ ag.typeconstruction.nom }}
                            {% else %}
                                <span class=\"text-danger\">-</span>
                            {% endif %}
                        </td>
                        <td class=\"priority-4\">
                            {% if ag.electricien is not null %}
                                {{ ag.electricien.nom ~ \" \" ~ ag.electricien.prenom }}
                            {% else %}
                                <span class=\"text-danger\">-</span>
                            {% endif %}
                        </td>
                        <td>
                            {% if ag.demandeCourante and  ag.demandeCourante.valide and ag.demandeCourante.dossier %}
                                <a href=\"{{ path('app_dossier_show', {'id': ag.demandeCourante.dossier.id }) }}\">
                            {% else %}
                                <a  href=\"{{ path('app_installation_show', {'id': ag.id }) }}\">
                            {% endif %}
                                {% if ag.demandeCourante and ag.demandeCourante.rejet %}
                                    <span class=\"text-light badge bg-danger fs-8 me-0\">Soumission Rejetée</span>
                                {% else %}
                                    {% if ag.step>=7 and ag.etat != \"Saisie\" %}
                                        {% set etat = ag.demandeCourante.etat %}
                                    {% else %}
                                        {% set etat = ag.etat %}
                                    {% endif %}
                                    {% if etat == \"Accepté\" and app.session.get('sousmenu')=='demande_paiement' %} {% set etat = \"Attente Paiement\" %}{% endif %}
                                    {% if etat == \"Accepté\" and app.session.get('sousmenu')=='demande_soumission' %} {% set etat = \"Soumis, Validé\" %}{% endif %}
                                    {% if etat == \"Soumis\" %} {% set etat = \"Soumis, Attente validation\" %}{% endif %}
                                    {% if etat == \"Paiement validé\" and app.session.get('sousmenu')=='demande_validation' %} {% set etat = \"Payé, Attente validation\" %} {% set badge_etat = \"danger\" %}{% endif %}
                                    <span class=\"badge badge-{{ badge_etat }} fs-8\">{{ etat }}</span>
                                {% endif %}
                            </a>
                        </td>
                        {# <td>{{ ag.agence }}</td> #}
                        {# <td class=\"text-center\">
                            {% if reg.departement.count >0 %}
                                <span class=\"badge bg-success text-light rounded-pill fw-normal\">{{ reg.departement.count }}</span>
                            {% else %}
                                <code class=\"text-danger text-opacity-50\">Aucun département</code>
                            {% endif %}
                        </td> #}
                        <td class=\"text-end\">
                            {% if ag.step>7 and (ag.demandeCourante and ag.demandeCourante.paiement) %} 
                                {% if ag.demandeCourante and ag.demandeCourante.valide and ag.demandeCourante.dossier %}
                                    <a href=\"{{ path('app_dossier_show', {'id': ag.demandeCourante.dossier.id }) }}\" class=\"mx-1\" title=\"Afficher les détails\">
                                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#search') }}\"></use>
                                        </svg>
                                    </a>
                                {% else %}
                                    <a href=\"{{ path('app_paiement_show', {'id': ag.demandeCourante.idPaiement }) }}\" class=\"mx-1\" title=\"Afficher les détails\">
                                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#search') }}\"></use>
                                        </svg>
                                    </a>
                                {% endif %}
                            {% else %}
                                <a href=\"{{ path('app_installation_show', {'id': ag.id }) }}\" class=\"mx-1\" title=\"Afficher les détails\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#search') }}\"></use>
                                    </svg>
                                </a>
                            {% endif %}
                            {% if ag.step<7 and modif == 1 %} 
                                {% set link_edit = 'app_installation_add' %}
                                {% if ag.step > 1 %}
                                    {% set link_edit = 'app_installation_add' ~ ag.step %}
                                {% endif %}
                                {% if is_granted('ROLE_PUBLIC') or  is_granted('ROLE_RFO') %}
                                    {% if tools.gdroit_de(app.user.id, 'installation', ag.id ) %}
                                    <a href=\"{{ path(link_edit, {'id': ag.id }) }}\" class=\"mx-1\" title=\"Modifier\">
                                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                        </svg>
                                    </a>
                                    {% else %}
                                        <a href=\"#\" class=\"mx-1\" title=\"Modification non autorisée\">
                                            <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"gray\">
                                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#reception-0') }}\"></use>
                                            </svg>
                                        </a>
                                    {% endif %}
                                {% endif %}
                            {% else %}
                                <a href=\"#\" class=\"mx-1\" title=\"Modification non autorisée\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"gray\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#reception-0') }}\"></use>
                                    </svg>
                                </a>
                            {% endif %}
                            {# <a href=\"\" class=\"mx-1\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#trash') }}\"></use>
                                </svg>
                            </a> #}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
            </table>

                {% do les_installation.setPageRange(1)%}
                {{ knp_pagination_render(les_installation, 'pagination.html.twig')}}

            {% endif %}
        </div>
    </section>
", "installation/_index_list.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/_index_list.html.twig");
    }
}
