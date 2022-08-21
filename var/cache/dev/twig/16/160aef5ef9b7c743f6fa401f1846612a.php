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
class __TwigTemplate_1fcc4752504ab6199352eca43b525276 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/_index_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/_index_list.html.twig"));

        // line 1
        echo "    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <h4 class=\"fw-bold\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["etatDossier"]) || array_key_exists("etatDossier", $context) ? $context["etatDossier"] : (function () { throw new RuntimeError('Variable "etatDossier" does not exist.', 6, $this->source); })()), "html", null, true);
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
                <div class=\"col-6 offset-6 col-lg-3 offset-lg-7 fs-6\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"";
        // line 73
        if (array_key_exists("val_rech", $context)) {
            echo twig_escape_filter($this->env, (isset($context["val_rech"]) || array_key_exists("val_rech", $context) ? $context["val_rech"] : (function () { throw new RuntimeError('Variable "val_rech" does not exist.', 73, $this->source); })()), "html", null, true);
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
        if ((twig_length_filter($this->env, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 86, $this->source); })())) == 0)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 103, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 103), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 121, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["doss"]) {
                // line 122
                echo "                    ";
                $context["demande"] = twig_get_attribute($this->env, $this->source, $context["doss"], "demande", [], "any", false, false, false, 122);
                // line 123
                echo "                    ";
                $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 123, $this->source); })()), "installation", [], "any", false, false, false, 123);
                // line 124
                echo "                    ";
                $context["electricien"] = twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 124, $this->source); })()), "electricien", [], "any", false, false, false, 124);
                // line 125
                echo "                    ";
                $context["proprietaire"] = twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 125, $this->source); })()), "proprietaire", [], "any", false, false, false, 125);
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
                if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 135, $this->source); })()), "usages", [], "any", false, false, false, 135) != "domestique")) {
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 151, $this->source); })()), "numero", [], "any", false, false, false, 151), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 157, $this->source); })()), "usages", [], "any", false, false, false, 157), "html", null, true);
                echo "</a></td>
                        <td class=\"priority-5\">
                            ";
                // line 159
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 159, $this->source); })()), "localite", [], "any", false, false, false, 159))) {
                    // line 160
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 160, $this->source); })()), "localite", [], "any", false, false, false, 160), "nom", [], "any", false, false, false, 160), "html", null, true);
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
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 166, $this->source); })()), "localite", [], "any", false, false, false, 166), "agence", [], "any", false, false, false, 166)) {
                    // line 167
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 167, $this->source); })()), "localite", [], "any", false, false, false, 167), "agence", [], "any", false, false, false, 167), "code", [], "any", false, false, false, 167), "html", null, true);
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
                if ( !(null === (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 173, $this->source); })()))) {
                    // line 174
                    echo "                                ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 174, $this->source); })()), "nom", [], "any", false, false, false, 174) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 174, $this->source); })()), "prenom", [], "any", false, false, false, 174)), "html", null, true);
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
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 180, $this->source); })()), "dossier", [], "any", false, false, false, 180), "referent", [], "any", false, false, false, 180)) {
                    // line 181
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 181, $this->source); })()), "dossier", [], "any", false, false, false, 181), "referent", [], "any", false, false, false, 181), "html", null, true);
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
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 187, $this->source); })()), "dossier", [], "any", false, false, false, 187), "controleur", [], "any", false, false, false, 187)) {
                    // line 188
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 188, $this->source); })()), "dossier", [], "any", false, false, false, 188), "controleur", [], "any", false, false, false, 188), "html", null, true);
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
                    if ((((isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 210, $this->source); })()) == "Attente Visite") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "session", [], "any", false, false, false, 210), "get", [0 => "sousmenu"], "method", false, false, false, 210) == "dossier_affectation"))) {
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
                    if ((((isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 214, $this->source); })()) == "Attente Rapport") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "session", [], "any", false, false, false, 214), "get", [0 => "sousmenu"], "method", false, false, false, 214) == "dossier_visite"))) {
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
                    echo twig_escape_filter($this->env, (isset($context["badge_etat"]) || array_key_exists("badge_etat", $context) ? $context["badge_etat"] : (function () { throw new RuntimeError('Variable "badge_etat" does not exist.', 218, $this->source); })()), "html", null, true);
                    echo " fs-8\">";
                    echo twig_escape_filter($this->env, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 218, $this->source); })()), "html", null, true);
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
            twig_get_attribute($this->env, $this->source, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 248, $this->source); })()), "setPageRange", [0 => 1], "method", false, false, false, 248);
            // line 249
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["les_dossier"]) || array_key_exists("les_dossier", $context) ? $context["les_dossier"] : (function () { throw new RuntimeError('Variable "les_dossier" does not exist.', 249, $this->source); })()), "pagination.html.twig");
            echo "

            ";
        }
        // line 252
        echo "        </div>
    </section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  617 => 252,  610 => 249,  608 => 248,  603 => 245,  595 => 242,  589 => 234,  584 => 232,  581 => 231,  579 => 224,  574 => 220,  566 => 218,  561 => 216,  557 => 215,  552 => 214,  547 => 212,  543 => 211,  538 => 210,  535 => 209,  532 => 208,  529 => 207,  526 => 206,  522 => 204,  520 => 203,  516 => 202,  513 => 201,  510 => 200,  507 => 199,  504 => 198,  501 => 197,  498 => 196,  495 => 195,  493 => 194,  489 => 192,  485 => 190,  479 => 188,  477 => 187,  473 => 185,  469 => 183,  463 => 181,  461 => 180,  457 => 178,  453 => 176,  447 => 174,  445 => 173,  441 => 171,  437 => 169,  431 => 167,  429 => 166,  425 => 164,  421 => 162,  415 => 160,  413 => 159,  406 => 157,  401 => 155,  394 => 151,  390 => 150,  385 => 147,  382 => 146,  379 => 145,  376 => 144,  373 => 143,  370 => 142,  367 => 141,  365 => 140,  362 => 139,  359 => 138,  356 => 137,  353 => 136,  350 => 135,  347 => 134,  344 => 133,  341 => 132,  338 => 131,  335 => 130,  332 => 129,  329 => 128,  327 => 127,  324 => 126,  321 => 125,  318 => 124,  315 => 123,  312 => 122,  308 => 121,  302 => 117,  300 => 116,  285 => 103,  282 => 102,  265 => 87,  263 => 86,  254 => 80,  248 => 78,  241 => 73,  234 => 68,  229 => 65,  214 => 63,  210 => 62,  205 => 59,  203 => 58,  199 => 56,  184 => 54,  180 => 53,  175 => 50,  170 => 47,  155 => 45,  151 => 44,  146 => 41,  144 => 40,  140 => 38,  125 => 36,  121 => 35,  114 => 30,  99 => 28,  95 => 27,  90 => 24,  85 => 21,  70 => 19,  66 => 18,  61 => 15,  59 => 14,  54 => 11,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <h4 class=\"fw-bold\">{{ etatDossier }}</h4>
                        {# <select name=\"val_affichage_demande\" id=\"val_affichage_demande\" class=\"bg-warning bg-opacity-50 form-select-sm\">
                            <option {% if affichage == 'listing' %} selected=\"selected\" {% endif %} value=\"listing\">Affichage en Listing</option>
                            <option {% if affichage == 'bloc' %} selected=\"selected\" {% endif %} value=\"bloc\">Affichage en Blocs</option>
                        </select> #}
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
                <div class=\"col-6 offset-6 col-lg-3 offset-lg-7 fs-6\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"{% if val_rech is defined %}{{ val_rech }}{% endif %}\" /></div>
                <div class=\"col-2 priority-3\" align=\"right\">
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
                        <td class=\"priority-2\">
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
                            {% if doss.cloture %}
                                {% if doss.conforme %}
                                    {% set badge_etat = \" bg-success\" %}
                                {% else %}
                                    {% set badge_etat = \" bg-danger bg-opacity-25 text-red\" %}
                                {% endif %}
                            {% endif %}
                        
                            <a  href=\"{{ path('app_dossier_show', {'id': doss.id }) }}\">
                                {% if doss.visiteCourante and doss.visiteCourante.rejetRapport %}
                                    <span class=\"text-light badge bg-danger fs-8 me-0\">Rapport Rejeté</span>
                                {% else %}
                                    {% set etat = doss.etat %}
                                    {% if not doss.attestation %}
                                        {% set etat = 'Attente ' ~ doss.etat %}
                                    {% endif %}
                                    {% if etat == 'Attente Visite' and app.session.get('sousmenu') == \"dossier_affectation\" %} 
                                        {% set etat = 'Dossier Affecté' %} 
                                        {% set badge_etat = 'success' %} 
                                    {% endif %}
                                    {% if etat == 'Attente Rapport' and app.session.get('sousmenu') == \"dossier_visite\" %} 
                                        {% set etat = 'Visite Planifiée' %} 
                                        {% set badge_etat = 'success' %} 
                                    {% endif %}
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
", "dossier/_index_list.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/_index_list.html.twig");
    }
}
