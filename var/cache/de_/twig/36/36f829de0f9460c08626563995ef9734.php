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
class __TwigTemplate_57357826077548bc25f52c415d745ec3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/_index0_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/_index0_list.html.twig"));

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
                        <div class=\"col-2 fs-6\">
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
                        <div class=\"col-2 fs-6\">
                            <select name=\"val_controleur0\" id=\"val_controleur0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les controleurs ...</option>
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["les_controleur"]) || array_key_exists("les_controleur", $context) ? $context["les_controleur"] : (function () { throw new RuntimeError('Variable "les_controleur" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 53
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 53) == (isset($context["val_controleur"]) || array_key_exists("val_controleur", $context) ? $context["val_controleur"] : (function () { throw new RuntimeError('Variable "val_controleur" does not exist.', 53, $this->source); })()))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["les_statut"]) || array_key_exists("les_statut", $context) ? $context["les_statut"] : (function () { throw new RuntimeError('Variable "les_statut" does not exist.', 61, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 62
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
                echo "\" ";
                if (($context["obj"] == (isset($context["val_statut"]) || array_key_exists("val_statut", $context) ? $context["val_statut"] : (function () { throw new RuntimeError('Variable "val_statut" does not exist.', 62, $this->source); })()))) {
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
            echo twig_escape_filter($this->env, (isset($context["val_rech"]) || array_key_exists("val_rech", $context) ? $context["val_rech"] : (function () { throw new RuntimeError('Variable "val_rech" does not exist.', 72, $this->source); })()), "html", null, true);
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
        if ((twig_length_filter($this->env, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 85, $this->source); })())) == 0)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 102, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 102), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 120, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["doss"]) {
                // line 121
                echo "                    ";
                $context["demande"] = twig_get_attribute($this->env, $this->source, $context["doss"], "demande", [], "any", false, false, false, 121);
                // line 122
                echo "                    ";
                $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 122, $this->source); })()), "installation", [], "any", false, false, false, 122);
                // line 123
                echo "                    ";
                $context["electricien"] = twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 123, $this->source); })()), "electricien", [], "any", false, false, false, 123);
                // line 124
                echo "                    ";
                $context["proprietaire"] = twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 124, $this->source); })()), "proprietaire", [], "any", false, false, false, 124);
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
                if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 134, $this->source); })()), "usages", [], "any", false, false, false, 134) != "domestique")) {
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 150, $this->source); })()), "numero", [], "any", false, false, false, 150), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 156, $this->source); })()), "usages", [], "any", false, false, false, 156), "html", null, true);
                echo "</a></td>
                        <td class=\"priority-5\">
                            ";
                // line 158
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 158, $this->source); })()), "localite", [], "any", false, false, false, 158))) {
                    // line 159
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 159, $this->source); })()), "localite", [], "any", false, false, false, 159), "nom", [], "any", false, false, false, 159), "html", null, true);
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
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 165, $this->source); })()), "localite", [], "any", false, false, false, 165), "agence", [], "any", false, false, false, 165)) {
                    // line 166
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 166, $this->source); })()), "localite", [], "any", false, false, false, 166), "agence", [], "any", false, false, false, 166), "code", [], "any", false, false, false, 166), "html", null, true);
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
                if ( !(null === (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 172, $this->source); })()))) {
                    // line 173
                    echo "                                ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 173, $this->source); })()), "nom", [], "any", false, false, false, 173) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 173, $this->source); })()), "prenom", [], "any", false, false, false, 173)), "html", null, true);
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
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 179, $this->source); })()), "dossier", [], "any", false, false, false, 179), "referent", [], "any", false, false, false, 179)) {
                    // line 180
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 180, $this->source); })()), "dossier", [], "any", false, false, false, 180), "referent", [], "any", false, false, false, 180), "html", null, true);
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
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 186, $this->source); })()), "dossier", [], "any", false, false, false, 186), "controleur", [], "any", false, false, false, 186)) {
                    // line 187
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 187, $this->source); })()), "dossier", [], "any", false, false, false, 187), "controleur", [], "any", false, false, false, 187), "html", null, true);
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
                    echo twig_escape_filter($this->env, (isset($context["badge_etat"]) || array_key_exists("badge_etat", $context) ? $context["badge_etat"] : (function () { throw new RuntimeError('Variable "badge_etat" does not exist.', 204, $this->source); })()), "html", null, true);
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
            twig_get_attribute($this->env, $this->source, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 233, $this->source); })()), "setPageRange", [0 => 1], "method", false, false, false, 233);
            // line 234
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 234, $this->source); })()), "pagination.html.twig");
            echo "

            ";
        }
        // line 237
        echo "        </div>
    </section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  569 => 237,  562 => 234,  560 => 233,  555 => 230,  547 => 227,  541 => 219,  536 => 217,  533 => 216,  531 => 209,  527 => 206,  515 => 204,  511 => 202,  508 => 201,  505 => 200,  502 => 199,  499 => 198,  496 => 197,  493 => 196,  490 => 195,  488 => 194,  484 => 193,  480 => 191,  476 => 189,  470 => 187,  468 => 186,  464 => 184,  460 => 182,  454 => 180,  452 => 179,  448 => 177,  444 => 175,  438 => 173,  436 => 172,  432 => 170,  428 => 168,  422 => 166,  420 => 165,  416 => 163,  412 => 161,  406 => 159,  404 => 158,  397 => 156,  392 => 154,  385 => 150,  381 => 149,  376 => 146,  373 => 145,  370 => 144,  367 => 143,  364 => 142,  361 => 141,  358 => 140,  356 => 139,  353 => 138,  350 => 137,  347 => 136,  344 => 135,  341 => 134,  338 => 133,  335 => 132,  332 => 131,  329 => 130,  326 => 129,  323 => 128,  320 => 127,  318 => 126,  315 => 125,  312 => 124,  309 => 123,  306 => 122,  303 => 121,  299 => 120,  293 => 116,  291 => 115,  276 => 102,  273 => 101,  256 => 86,  254 => 85,  245 => 79,  239 => 77,  232 => 72,  225 => 67,  220 => 64,  205 => 62,  201 => 61,  196 => 58,  194 => 57,  190 => 55,  175 => 53,  171 => 52,  164 => 47,  149 => 45,  145 => 44,  138 => 39,  123 => 37,  119 => 36,  112 => 31,  97 => 29,  93 => 28,  88 => 25,  83 => 22,  68 => 20,  64 => 19,  59 => 16,  57 => 15,  51 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <h4 class=\"fw-bold\">Tous les Dossiers</h4>
                        {# <select name=\"val_affichage_demande\" id=\"val_affichage_demande\" class=\"bg-warning bg-opacity-50 form-select-sm\">
                            <option {% if affichage == 'listing' %} selected=\"selected\" {% endif %} value=\"listing\">Affichage en Listing</option>
                            <option {% if affichage == 'bloc' %} selected=\"selected\" {% endif %} value=\"bloc\">Affichage en Blocs</option>
                        </select> #}
                    </div>

                    <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light priority-4\" style=\"\">
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
                        <div class=\"col-2 fs-6\">
                            <select name=\"val_referent0\" id=\"val_referent0\" class=\"form-select form-select-sm border-warning py-1\">
                                <option value=\"\">Tous les referents ...</option>
                                {% for obj in les_referent %}
                                    <option value=\"{{obj.id}}\" {% if obj.id == val_referent %} selected=\"selected\"{% endif %}>{{obj}}</option>
                                {% endfor %}
                            </select>
                        </div>
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
                <div class=\"col-6 offset-6 col-lg-3 offset-lg-7 fs-6\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"{% if val_rech is defined %}{{ val_rech }}{% endif %}\" /></div>
                <div class=\"col-lg-2 col-2 priority-3\" align=\"right\">
                    {# <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"#c32424\">
                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#filetype-pdf') }}\"></use>
                    </svg> #}
                    <a href=\"{{path('app_dossier_excel')}}\" class=\"ms-1\">
                        <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"green\">
                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#filetype-xls') }}\"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class=\"clear\"></div>
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
            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des Dossiers ({{ les_dossier.getTotalItemCount }})</caption>
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
                    {# <th scope=\"col\">Agence</th> #}
                    {# <th class=\"text-center\" scope=\"col\">Départements</th>  #}
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                {% for doss in les_dossier %}
                    {% set demande = doss.demande %}
                    {% set installation = demande.installation %}
                    {% set electricien = installation.electricien %}
                    {% set proprietaire = installation.proprietaire %}

                    {% set badge_etat = \"danger\" %}
                    {% if doss.etat == \"Attestation\" or doss.etat == \"Clôturé\" %}
                        {% set badge_etat = \"success\" %}
                    {% elseif doss.etat == \"Visite\" or doss.etat == \"Rapport\" %}
                        {% set badge_etat = \"warning\" %}
                    {% endif %}
                    {% set badge_usage = \"warning\" %}
                    {% set text_usage = \"text-dark\" %}
                    {% if installation.usages != \"domestique\" %}
                        {% set badge_usage = \"primary text-light\" %}
                        {% set text_usage = \"text-light\" %}
                    {% endif %}

                    {% if doss.attestation %}
                        {% if doss.visiteCourante and doss.visiteCourante.conclusion %}
                            {% set badge_etat = \" bg-success p-1\" %}
                        {% else %}
                            {% set badge_etat = \" bg-danger p-1\" %}
                        {% endif %}
                    {% endif %}

                    <tr>
                        <td scope=\"row\">
                            <a href=\"{{ path('app_dossier_show', {'id': doss.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">
                                {{ demande.numero }}
                            </a>
                        </td>
                        <td class=\"priority-3\">
                            <span class=\"badge text-secondary fs-8\">{{ doss.createdAt | date(\"d-m-Y\") }}</span>
                        </td>
                        <td class=\"priority-3\"><a href=\"{{ path('app_dossier_show', {'id': doss.id }) }}\" class=\"text-dark text-decoration-none\">{{ installation.usages }}</a></td>
                        <td class=\"priority-5\">
                            {% if installation.localite is not null %}
                                {{ installation.localite.nom }}
                            {% else %}
                                <span class=\"text-danger\">-</span>
                            {% endif %}
                        </td>
                        <td class=\"priority-4\">
                            {% if installation.localite.agence %}
                                {{ installation.localite.agence.code }}
                            {% else %}
                                <span class=\"text-danger\">-</span>
                            {% endif %}
                        </td>
                        <td class=\"priority-2\">
                            {% if electricien is not null %}
                                {{ electricien.nom ~ \" \" ~ electricien.prenom }}
                            {% else %}
                                <span class=\"text-danger\">-</span>
                            {% endif %}
                        </td>
                        <td class=\"priority-4\">
                            {% if demande.dossier.referent %}
                                {{ demande.dossier.referent }}
                            {% else %}
                                <span class=\"text-danger\">-</span>
                            {% endif %}
                        </td>
                        <td class=\"priority-3\">
                            {% if demande.dossier.controleur %}
                                {{ demande.dossier.controleur }}
                            {% else %}
                                <span class=\"text-danger\">-</span>
                            {% endif %}
                        </td>
                        <td>
                            <a  href=\"{{ path('app_dossier_show', {'id': doss.id }) }}\">
                                {% if doss.cloture %}
                                    {% if doss.conforme %}
                                        {% set badge_etat = \" bg-success\" %}
                                    {% else %}
                                        {% set badge_etat = \" bg-danger bg-opacity-75 text-light\" %}
                                    {% endif %}
                                {% endif %}
                                {% if doss.visiteCourante and doss.visiteCourante.rejetRapport %}
                                    <span class=\"text-light badge bg-danger fs-8 me-0\">Rapport rejeté</span>
                                {% else %}
                                    <span class=\"badge badge-{{ badge_etat }} fs-8\">{% if not doss.attestation %}Attente{% endif %} {{ doss.etat }}</span>
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
                                <a href=\"{{ path('app_dossier_show', {'id': doss.id }) }}\" class=\"mx-1\" title=\"Afficher les détails\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#search') }}\"></use>
                                    </svg>
                                </a>
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

                {% do les_dossier.setPageRange(1)%}
                {{ knp_pagination_render(les_dossier, 'pagination.html.twig')}}

            {% endif %}
        </div>
    </section>
", "dossier/_index0_list.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/_index0_list.html.twig");
    }
}
