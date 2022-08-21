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
class __TwigTemplate_ffa9ed6cbd08bb0d1167799955af1bd2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/_index0_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/_index0_list.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["les_agence"]) || array_key_exists("les_agence", $context) ? $context["les_agence"] : (function () { throw new RuntimeError('Variable "les_agence" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 18
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 18) == (isset($context["val_agence"]) || array_key_exists("val_agence", $context) ? $context["val_agence"] : (function () { throw new RuntimeError('Variable "val_agence" does not exist.', 18, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["les_usage"]) || array_key_exists("les_usage", $context) ? $context["les_usage"] : (function () { throw new RuntimeError('Variable "les_usage" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
            // line 26
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == (isset($context["val_usage"]) || array_key_exists("val_usage", $context) ? $context["val_usage"] : (function () { throw new RuntimeError('Variable "val_usage" does not exist.', 26, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["les_passage"]) || array_key_exists("les_passage", $context) ? $context["les_passage"] : (function () { throw new RuntimeError('Variable "les_passage" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
            // line 34
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == (isset($context["val_passage"]) || array_key_exists("val_passage", $context) ? $context["val_passage"] : (function () { throw new RuntimeError('Variable "val_passage" does not exist.', 34, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["les_statut"]) || array_key_exists("les_statut", $context) ? $context["les_statut"] : (function () { throw new RuntimeError('Variable "les_statut" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 42
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == (isset($context["val_statut"]) || array_key_exists("val_statut", $context) ? $context["val_statut"] : (function () { throw new RuntimeError('Variable "val_statut" does not exist.', 42, $this->source); })()))) {
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
            echo twig_escape_filter($this->env, (isset($context["val_rech"]) || array_key_exists("val_rech", $context) ? $context["val_rech"] : (function () { throw new RuntimeError('Variable "val_rech" does not exist.', 53, $this->source); })()), "html", null, true);
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
        if ((twig_length_filter($this->env, (isset($context["les_installation"]) || array_key_exists("les_installation", $context) ? $context["les_installation"] : (function () { throw new RuntimeError('Variable "les_installation" does not exist.', 68, $this->source); })())) == 0)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_installation"]) || array_key_exists("les_installation", $context) ? $context["les_installation"] : (function () { throw new RuntimeError('Variable "les_installation" does not exist.', 85, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 85), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["les_installation"]) || array_key_exists("les_installation", $context) ? $context["les_installation"] : (function () { throw new RuntimeError('Variable "les_installation" does not exist.', 103, $this->source); })()));
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
                if (((isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 181, $this->source); })()) && (twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 181) != "Saisie"))) {
                    // line 182
                    echo "                                    ";
                    $context["paiement"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 182, $this->source); })()), "paiement", [], "any", false, false, false, 182);
                    echo " 
                                    ";
                    // line 183
                    $context["dossier"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 183, $this->source); })()), "dossier", [], "any", false, false, false, 183);
                    echo " 
                                    ";
                    // line 184
                    if ((isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 184, $this->source); })())) {
                        // line 185
                        echo "                                        ";
                        $context["etat"] = "Paiement enregistré";
                        // line 186
                        echo "                                        ";
                        if (twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 186, $this->source); })()), "paiementEffectue", [], "any", false, false, false, 186)) {
                            // line 187
                            echo "                                            ";
                            $context["etat"] = "Paiement validé";
                            // line 188
                            echo "                                            ";
                            if (twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 188, $this->source); })()), "etatRembousement", [], "any", false, false, false, 188)) {
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
                    if ((isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 194, $this->source); })())) {
                        // line 195
                        echo "                                        ";
                        $context["link"] = "app_dossier_showpop";
                        // line 196
                        echo "                                        ";
                        $context["id_ent"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 196, $this->source); })()), "id", [], "any", false, false, false, 196);
                        // line 197
                        echo "                                        ";
                        $context["etat"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 197, $this->source); })()), "etat", [], "any", false, false, false, 197);
                        // line 198
                        echo "                                        ";
                        if ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 198, $this->source); })()), "attestation", [], "any", false, false, false, 198)) {
                            // line 199
                            echo "                                            ";
                            $context["etat"] = ("En attente " . twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 199, $this->source); })()), "etat", [], "any", false, false, false, 199));
                            // line 200
                            echo "                                        ";
                        }
                        // line 201
                        echo "                                        ";
                        $context["label_etat"] = "success";
                        echo " 

                                        ";
                        // line 203
                        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 203, $this->source); })()), "attestation", [], "any", false, false, false, 203)) {
                            // line 204
                            echo "                                            ";
                            if ((twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 204, $this->source); })()), "visiteCourante", [], "any", false, false, false, 204) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 204, $this->source); })()), "visiteCourante", [], "any", false, false, false, 204), "conclusion", [], "any", false, false, false, 204))) {
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
                    if (((isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 246, $this->source); })()) == "Accepté")) {
                        echo " ";
                        $context["etat"] = "Attente Paiement";
                    }
                    // line 247
                    echo "                                    ";
                    if (((isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 247, $this->source); })()) == "Soumis")) {
                        echo " ";
                        $context["etat"] = "Soumis, Attente validation";
                    }
                    // line 248
                    echo "                                    <span class=\"badge badge-";
                    echo twig_escape_filter($this->env, (isset($context["badge_etat"]) || array_key_exists("badge_etat", $context) ? $context["badge_etat"] : (function () { throw new RuntimeError('Variable "badge_etat" does not exist.', 248, $this->source); })()), "html", null, true);
                    echo " fs-8\">";
                    echo twig_escape_filter($this->env, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 248, $this->source); })()), "html", null, true);
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
            twig_get_attribute($this->env, $this->source, (isset($context["les_installation"]) || array_key_exists("les_installation", $context) ? $context["les_installation"] : (function () { throw new RuntimeError('Variable "les_installation" does not exist.', 294, $this->source); })()), "setPageRange", [0 => 1], "method", false, false, false, 294);
            // line 295
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["les_installation"]) || array_key_exists("les_installation", $context) ? $context["les_installation"] : (function () { throw new RuntimeError('Variable "les_installation" does not exist.', 295, $this->source); })()), "pagination.html.twig");
            echo "

            ";
        }
        // line 298
        echo "        </div>
    </section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  691 => 298,  684 => 295,  682 => 294,  677 => 291,  669 => 288,  667 => 283,  660 => 279,  654 => 277,  651 => 276,  644 => 272,  638 => 270,  631 => 266,  625 => 264,  623 => 263,  619 => 262,  616 => 261,  614 => 254,  609 => 250,  601 => 248,  595 => 247,  589 => 246,  586 => 245,  583 => 244,  580 => 243,  577 => 242,  574 => 241,  571 => 240,  568 => 239,  565 => 238,  562 => 237,  559 => 236,  556 => 235,  553 => 234,  550 => 233,  547 => 232,  544 => 231,  541 => 230,  538 => 229,  535 => 228,  532 => 227,  529 => 226,  525 => 224,  523 => 223,  520 => 222,  517 => 212,  514 => 211,  511 => 210,  508 => 209,  505 => 208,  502 => 207,  499 => 206,  496 => 205,  493 => 204,  491 => 203,  485 => 201,  482 => 200,  479 => 199,  476 => 198,  473 => 197,  470 => 196,  467 => 195,  464 => 194,  458 => 192,  455 => 191,  452 => 190,  449 => 189,  446 => 188,  443 => 187,  440 => 186,  437 => 185,  435 => 184,  431 => 183,  426 => 182,  424 => 181,  419 => 180,  416 => 179,  414 => 178,  411 => 177,  407 => 171,  403 => 169,  399 => 167,  393 => 165,  391 => 164,  387 => 162,  383 => 160,  377 => 158,  375 => 157,  372 => 156,  369 => 154,  365 => 152,  359 => 150,  357 => 149,  353 => 147,  349 => 145,  343 => 143,  341 => 142,  337 => 140,  333 => 138,  331 => 137,  328 => 136,  326 => 135,  323 => 134,  321 => 133,  317 => 132,  314 => 131,  308 => 129,  302 => 127,  300 => 126,  296 => 124,  288 => 121,  283 => 120,  277 => 117,  272 => 116,  270 => 115,  266 => 113,  263 => 112,  260 => 111,  257 => 110,  254 => 109,  251 => 108,  248 => 107,  245 => 106,  242 => 105,  239 => 104,  235 => 103,  229 => 99,  227 => 98,  222 => 94,  211 => 85,  208 => 84,  191 => 69,  189 => 68,  180 => 62,  174 => 60,  167 => 53,  156 => 44,  141 => 42,  137 => 41,  130 => 36,  115 => 34,  111 => 33,  104 => 28,  89 => 26,  85 => 25,  78 => 20,  63 => 18,  59 => 17,  51 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <h4 class=\"fw-bold mt-4\">Toutes les Demandes</h4>
                        {# <select name=\"val_affichage_demande\" id=\"val_affichage_demande\" class=\"bg-warning bg-opacity-50 form-select-sm\">
                            <option {% if affichage == 'listing' %} selected=\"selected\" {% endif %} value=\"listing\">Affichage en Listing</option>
                            <option {% if affichage == 'bloc' %} selected=\"selected\" {% endif %} value=\"bloc\">Affichage en Blocs</option>
                        </select> #}
                    </div>
                    <div>
                        <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light priority-4\" style=\"height:0px; position:relative; top:4px;\">
                            <div class=\"col-3  fs-6\">
                                <select name=\"val_agence0\" id=\"val_agence0\" class=\"form-select form-select-sm border-warning py-1\">
                                    <option value=\"\">Toutes les Agences ...</option>
                                    {% for obj in les_agence %}
                                        <option value=\"{{obj.id}}\" {% if obj.id == val_agence %} selected=\"selected\"{% endif %}>{{obj.nom}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-3 fs-6\">
                                <select name=\"val_usage0\" id=\"val_usage0\" class=\"form-select form-select-sm border-warning py-1\">
                                    <option value=\"\">Tous les Usages ...</option>
                                    {% for obj,lib_obj in les_usage %}
                                        <option value=\"{{obj}}\" {% if obj == val_usage %} selected=\"selected\"{% endif %}>{{lib_obj}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-3 fs-6\">
                                <select name=\"val_passage0\" id=\"val_passage0\" class=\"form-select form-select-sm border-warning py-1\">
                                    <option value=\"\">Tous les Passages ...</option>
                                    {% for obj,lib_obj in les_passage %}
                                        <option value=\"{{obj}}\" {% if obj == val_passage %} selected=\"selected\"{% endif %}>{{lib_obj}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-3 fs-6\">
                                <select name=\"val_statut0\" id=\"val_statut0\" class=\"form-select form-select-sm border-success py-1\">
                                    <option value=\"\">Tous les statuts ...</option>
                                    {% for obj in les_statut %}
                                        <option value=\"{{obj}}\" {% if obj == val_statut %} selected=\"selected\"{% endif %}>{{obj}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <span class=\"divider\">
                    <hr></span>
            <div class=\"clear\"></div>
            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"height:0px; z-index:999\">
                    <div class=\"col-6 col-lg-3 fs-6 offset-6 offset-lg-8\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"{% if val_rech is defined %}{{ val_rech }}{% endif %}\" /></div>
                    <div class=\"col-lg-1 col-1 priority-3\" align=\"right\">
                    {# <a href=\"{{path('app_installation_pdf1')}}\" class=\"ms-1\">
                        <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"#c32424\">
                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#filetype-pdf') }}\"></use>
                        </svg>
                    </a> #}
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
                    <tr>
                        <td scope=\"row\">
                            {% if ag.step>=7 and ag.etat!=\"Saisie\" %}
                                <a href=\"{{ path('app_installation_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">
                                    {{ ag.demandeCourante.numero }}
                                </a>
                            {% else %}
                                <a href=\"{{ path('app_installation_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">
                                    <span>[{{ ag.id|strpad_left(9, '0') }}-{{ ag.createdAt|date(\"d/m/y\") }}]</span>
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
                        <td class=\"priority-3\"><a href=\"{{ path('app_installation_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none\">
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
                            <a  href=\"{{ path('app_installation_show', {'id': ag.id }) }}\">
                                {# {% if ag.step>=7 %}
                                    <span class=\"badge badge-{{ badge_etat }} fs-8\">{{ ag.demandeCourante.etat }}</span>
                                {% else %}
                                    <span class=\"badge badge-{{ badge_etat }} fs-8\">{{ ag.etat }}</span>
                                {% endif %} #}

                                {% set label_etat = \"warning\" %}
                                {% set etat = \"Soumis\" %}
                                {% set demande = ag.demandeCourante %} 
                                {% if demande and ag.etat!=\"Saisie\" %}
                                    {% set paiement = demande.paiement %} 
                                    {% set dossier = demande.dossier %} 
                                    {% if paiement %}
                                        {% set etat = 'Paiement enregistré' %}
                                        {% if paiement.paiementEffectue %}
                                            {% set etat = 'Paiement validé' %}
                                            {% if paiement.etatRembousement %}
                                                {% set etat = 'Paiement validé - Remboursé' %}
                                            {% endif %}
                                        {% endif %}
                                        {% set label_etat = 'warning' %} 
                                    {% endif %}
                                    {% if dossier %}
                                        {% set link = 'app_dossier_showpop' %}
                                        {% set id_ent = dossier.id %}
                                        {% set etat = dossier.etat %}
                                        {% if not dossier.attestation %}
                                            {% set etat = 'En attente ' ~ dossier.etat %}
                                        {% endif %}
                                        {% set label_etat = 'success' %} 

                                        {% if dossier.attestation %}
                                            {% if dossier.visiteCourante and dossier.visiteCourante.conclusion %}
                                                {% set label_etat = \" bg-vertf bg-success p-1\" %}
                                            {% else %}
                                                {% set label_etat = \" bg-danger p-1\" %}
                                            {% endif %}
                                        {% endif %}
                                    {% endif %}
                                {% endif %}
                                
                                {# {% if ag.demandeCourante and ag.demandeCourante.rejet %}
                                    <span class=\"text-light badge bg-danger fs-8 me-0\">Soumission Rejetée</span>
                                {% else %}
                                    {% if not demande or ag.step<7 %}
                                        {% set etat = ag.etat %}
                                        {% set label_etat = \" text-danger p-1\" %}
                                    {% endif %}
                                    <span class=\"fs-8 badge badge-{{label_etat}}\">{{etat}}</span>
                                {% endif %}                                 #}

                                {% if ag.demandeCourante and ag.demandeCourante.rejet %}
                                    <span class=\"text-light badge bg-danger fs-8 me-0\">Soumission Rejetée</span>
                                {% else %}
                                    {% if ag.step>=7 and ag.etat != \"Saisie\" %}
                                        {% if ag.demandeCourante and not ag.demandeCourante.dossier %}
                                            {% set etat = ag.demandeCourante.etat %}
                                        {% endif %}
                                        {% if ag.demandeCourante and ag.demandeCourante.dossier %}
                                            {% set etat = ag.demandeCourante.dossier.etat %}
                                            {% if ag.demandeCourante.dossier.cloture == 0 %}
                                                {% set etat = \"Attente \" ~ ag.demandeCourante.dossier.etat %}
                                            {% endif %}
                                            {% if ag.demandeCourante.dossier.cloture %}
                                                {% if ag.demandeCourante.dossier.conforme %}
                                                    {% set badge_etat = \" bg-success\" %}
                                                {% else %}
                                                    {% set badge_etat = \" bg-danger bg-opacity-25 text-red\" %}
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}
                                    {% else %}
                                        {% set etat = ag.etat %}
                                    {% endif %}
                                    {% if etat == \"Accepté\" %} {% set etat = \"Attente Paiement\" %}{% endif %}
                                    {% if etat == \"Soumis\" %} {% set etat = \"Soumis, Attente validation\" %}{% endif %}
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
                            {% if ag.step>7 and (ag.demandeCourante and ag.demandeCourante.paiement ) %} 
                                {% if ag.demandeCourante.dossier %}
                                    <a href=\"{{ path('app_dossier_show', {'id': ag.demandeCourante.dossier.id }) }}\" class=\"mx-1\" title=\"Afficher les détails\">
                                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#search') }}\"></use>
                                        </svg>
                                    </a>
                                {% else %}
                                    <a href=\"{{ path('app_paiement_show', {'id': ag.demandeCourante.paiement.id }) }}\" class=\"mx-1\" title=\"Afficher les détails\">
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
", "installation/_index0_list.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/_index0_list.html.twig");
    }
}
