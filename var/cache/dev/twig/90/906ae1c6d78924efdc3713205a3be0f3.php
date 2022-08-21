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

/* remboursement/index.html.twig */
class __TwigTemplate_347751835998076e8780e5e0b8f7cf71 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "remboursement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "remboursement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "remboursement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "COSSUEL";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <h4 class=\"fw-bold\">Remboursements</h4>
                    </div>
                </div>
                <span class=\"divider\">
                    <hr></span>
            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"height:0px; position:relative; top:4px;\">
                <div class=\"col-lg-2 col-2 offset-lg-5 fs-6 border-bottom priority-4\">
                    <select name=\"val_agence0\" id=\"val_agence0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Toutes les Agences ...</option>
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["les_agence"]) || array_key_exists("les_agence", $context) ? $context["les_agence"] : (function () { throw new RuntimeError('Variable "les_agence" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 19
            echo "                            <option value=\"";
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
        echo "                    </select>
                </div>
                <div class=\"col-lg-2 col-2 fs-6 border-bottom priority-4\">
                    <select name=\"val_usage0\" id=\"val_usage0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Tous les Usages ...</option>
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["les_usage"]) || array_key_exists("les_usage", $context) ? $context["les_usage"] : (function () { throw new RuntimeError('Variable "les_usage" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["obj"] => $context["lib_obj"]) {
            // line 27
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["obj"], "html", null, true);
            echo "\" ";
            if (($context["obj"] == (isset($context["val_usage"]) || array_key_exists("val_usage", $context) ? $context["val_usage"] : (function () { throw new RuntimeError('Variable "val_usage" does not exist.', 27, $this->source); })()))) {
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
        // line 29
        echo "                    </select>
                </div>
                <div class=\" col-6 col-lg-2 offset-6 offset-lg-0 fs-6 border-bottom\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"";
        // line 31
        if (array_key_exists("val_rech", $context)) {
            echo twig_escape_filter($this->env, (isset($context["val_rech"]) || array_key_exists("val_rech", $context) ? $context["val_rech"] : (function () { throw new RuntimeError('Variable "val_rech" does not exist.', 31, $this->source); })()), "html", null, true);
        }
        echo "\" /></div>
                <div class=\"col-lg-1 col-1 priority-3\" align=\"center\">
                    <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"#c32424\">
                        <use xlink:href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#filetype-pdf"), "html", null, true);
        echo "\"></use>
                    </svg>
                </div>
            </div>
            <div class=\"clear\"></div>
            ";
        // line 39
        if ((twig_length_filter($this->env, (isset($context["les_remboursement"]) || array_key_exists("les_remboursement", $context) ? $context["les_remboursement"] : (function () { throw new RuntimeError('Variable "les_remboursement" does not exist.', 39, $this->source); })())) == 0)) {
            // line 40
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
            // line 55
            echo "            <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des Remboursements (";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_remboursement"]) || array_key_exists("les_remboursement", $context) ? $context["les_remboursement"] : (function () { throw new RuntimeError('Variable "les_remboursement" does not exist.', 56, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 56), "html", null, true);
            echo ")</caption>
            <thead>
                <tr>
                    <th scope=\"col\">N° demande</th> 
                    <th class=\"priority-3\">Usage</th> 
                    <th class=\"priority-4\">Agence</th>
                    <th class=\"priority-5\">Date Demande</th>
                    ";
            // line 64
            echo "                    <th class=\"priority-3\">Montant Remb</th>
                    <th>Statut remboursement</th>
                    ";
            // line 67
            echo "                    ";
            // line 68
            echo "                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_remboursement"]) || array_key_exists("les_remboursement", $context) ? $context["les_remboursement"] : (function () { throw new RuntimeError('Variable "les_remboursement" does not exist.', 72, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 73
                echo "                    ";
                if ( !twig_get_attribute($this->env, $this->source, $context["ag"], "valide", [], "any", false, false, false, 73)) {
                    // line 74
                    echo "                        ";
                    $context["badge_etat"] = "danger";
                    // line 75
                    echo "                    ";
                } else {
                    // line 76
                    echo "                        ";
                    $context["badge_etat"] = "success";
                    // line 77
                    echo "                    ";
                }
                // line 78
                echo "                    <tr>
                        <td scope=\"row\">
                                <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remboursement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">
                                    ";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 81), "demande", [], "any", false, false, false, 81), "numero", [], "any", false, false, false, 81), "html", null, true);
                echo "
                                </a>
                        </td>
                        <td class=\"priority-3\">
                        <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remboursement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">
                            ";
                // line 86
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 86), "demande", [], "any", false, false, false, 86), "installation", [], "any", false, false, false, 86), "usages", [], "any", false, false, false, 86) == "domestique")) {
                    // line 87
                    echo "                                <span class=\"text-warning fs-8 fw-bold\">Domestique</span>
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 88
$context["ag"], "paiement", [], "any", false, false, false, 88), "demande", [], "any", false, false, false, 88), "installation", [], "any", false, false, false, 88), "usages", [], "any", false, false, false, 88) == "non_domestique")) {
                    // line 89
                    echo "                                <span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 90
$context["ag"], "paiement", [], "any", false, false, false, 90), "demande", [], "any", false, false, false, 90), "installation", [], "any", false, false, false, 90), "usages", [], "any", false, false, false, 90) == "erp_ert")) {
                    // line 91
                    echo "                                <span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
                            ";
                }
                // line 93
                echo "                        </a></td>
                        <td class=\"priority-4\">
                            ";
                // line 95
                if (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 95), "demande", [], "any", false, false, false, 95), "installation", [], "any", false, false, false, 95), "localite", [], "any", false, false, false, 95)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 95), "demande", [], "any", false, false, false, 95), "installation", [], "any", false, false, false, 95), "localite", [], "any", false, false, false, 95), "agence", [], "any", false, false, false, 95)))) {
                    // line 96
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "paiement", [], "any", false, false, false, 96), "demande", [], "any", false, false, false, 96), "installation", [], "any", false, false, false, 96), "localite", [], "any", false, false, false, 96), "agence", [], "any", false, false, false, 96), "nom", [], "any", false, false, false, 96), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 98
                    echo "                                <span class=\"text-danger\">-</span>
                            ";
                }
                // line 100
                echo "                        </td>
                        <td class=\"priority-4\">
                                ";
                // line 102
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "dateDemande", [], "any", false, false, false, 102), "d-m-Y"), "html", null, true);
                echo "
                        </td>
                        ";
                // line 105
                echo "                        <td class=\"priority-3\">
                                ";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "montant", [], "any", false, false, false, 106), "html", null, true);
                echo " FCFA
                        </td>
                        <td class=\"priority-4\">
                            ";
                // line 109
                if (twig_get_attribute($this->env, $this->source, $context["ag"], "valide", [], "any", false, false, false, 109)) {
                    // line 110
                    echo "                                <span class=\"text-success\">Validé le ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "dateValidation", [], "any", false, false, false, 110), "d-m-Y"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 112
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["ag"], "rejete", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "                                <span class=\"text-danger\">Rejeté le ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "updatedAt", [], "any", false, false, false, 113), "d-m-Y"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 115
                echo "                        </td>
                        <td>
                            <a  href=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remboursement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 117)]), "html", null, true);
                echo "\">
                                ";
                // line 118
                if (twig_get_attribute($this->env, $this->source, $context["ag"], "valide", [], "any", false, false, false, 118)) {
                    // line 119
                    echo "                                    <span class=\"badge bg-success fs-8\">Validé</span>
                                ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 120
$context["ag"], "rejete", [], "any", false, false, false, 120)) {
                    // line 121
                    echo "                                    <span class=\"badge bg-danger fs-8\">Rejeté</span>
                                ";
                } else {
                    // line 123
                    echo "                                    <span class=\"badge bg-warning fs-8\">En Attente Validation</span>
                                ";
                }
                // line 125
                echo "                            </a>
                        </td>
                        <td class=\"text-end\">
                                <a href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remboursement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 128)]), "html", null, true);
                echo "\" class=\"mx-1\" title=\"Afficher les détails\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                        <use xlink:href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "            </tbody>
            </table>

                ";
            // line 139
            twig_get_attribute($this->env, $this->source, (isset($context["les_remboursement"]) || array_key_exists("les_remboursement", $context) ? $context["les_remboursement"] : (function () { throw new RuntimeError('Variable "les_remboursement" does not exist.', 139, $this->source); })()), "setPageRange", [0 => 1], "method", false, false, false, 139);
            // line 140
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["les_remboursement"]) || array_key_exists("les_remboursement", $context) ? $context["les_remboursement"] : (function () { throw new RuntimeError('Variable "les_remboursement" does not exist.', 140, $this->source); })()), "pagination.html.twig");
            echo "

            ";
        }
        // line 143
        echo "        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 147
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 148
        echo "<script>
    \$(document).ready(function() {

        ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "agence", 1 => "usage"]);
        foreach ($context['_seq'] as $context["_key"] => $context["filtre"]) {
            // line 152
            echo "            \$('#val_";
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "').val(\$('#val_";
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').val())
            \$('#val_";
            // line 153
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').on('change', function() {
                optSel=\$('#val_";
            // line 154
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').find(\"option:selected\");
                valSel=optSel.val();
                \$('#val_";
            // line 156
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "').val(valSel);
                \$('#form_rech_list').submit();
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filtre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "
    });

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "remboursement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 160,  425 => 156,  420 => 154,  416 => 153,  409 => 152,  405 => 151,  400 => 148,  390 => 147,  378 => 143,  371 => 140,  369 => 139,  364 => 136,  352 => 130,  347 => 128,  342 => 125,  338 => 123,  334 => 121,  332 => 120,  329 => 119,  327 => 118,  323 => 117,  319 => 115,  313 => 113,  310 => 112,  304 => 110,  302 => 109,  296 => 106,  293 => 105,  288 => 102,  284 => 100,  280 => 98,  274 => 96,  272 => 95,  268 => 93,  264 => 91,  262 => 90,  259 => 89,  257 => 88,  254 => 87,  252 => 86,  248 => 85,  241 => 81,  237 => 80,  233 => 78,  230 => 77,  227 => 76,  224 => 75,  221 => 74,  218 => 73,  214 => 72,  208 => 68,  206 => 67,  202 => 64,  192 => 56,  189 => 55,  172 => 40,  170 => 39,  162 => 34,  154 => 31,  150 => 29,  135 => 27,  131 => 26,  124 => 21,  109 => 19,  105 => 18,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}COSSUEL{% endblock %}
{% block body %}
    <section class=\"\">
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <h4 class=\"fw-bold\">Remboursements</h4>
                    </div>
                </div>
                <span class=\"divider\">
                    <hr></span>
            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"height:0px; position:relative; top:4px;\">
                <div class=\"col-lg-2 col-2 offset-lg-5 fs-6 border-bottom priority-4\">
                    <select name=\"val_agence0\" id=\"val_agence0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Toutes les Agences ...</option>
                        {% for obj in les_agence %}
                            <option value=\"{{obj.id}}\" {% if obj.id == val_agence %} selected=\"selected\"{% endif %}>{{obj.nom}}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-lg-2 col-2 fs-6 border-bottom priority-4\">
                    <select name=\"val_usage0\" id=\"val_usage0\" class=\"form-select form-select-sm border-warning py-1\">
                        <option value=\"\">Tous les Usages ...</option>
                        {% for obj,lib_obj in les_usage %}
                            <option value=\"{{obj}}\" {% if obj == val_usage %} selected=\"selected\"{% endif %}>{{lib_obj}}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\" col-6 col-lg-2 offset-6 offset-lg-0 fs-6 border-bottom\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rech0\" name=\"val_rech0\" value=\"{% if val_rech is defined %}{{ val_rech }}{% endif %}\" /></div>
                <div class=\"col-lg-1 col-1 priority-3\" align=\"center\">
                    <svg class=\"bi\" width=\"28\" height=\"28\" fill=\"#c32424\">
                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#filetype-pdf') }}\"></use>
                    </svg>
                </div>
            </div>
            <div class=\"clear\"></div>
            {% if les_remboursement|length == 0 %}
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
            <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">Liste des Remboursements ({{ les_remboursement.getTotalItemCount }})</caption>
            <thead>
                <tr>
                    <th scope=\"col\">N° demande</th> 
                    <th class=\"priority-3\">Usage</th> 
                    <th class=\"priority-4\">Agence</th>
                    <th class=\"priority-5\">Date Demande</th>
                    {# <th class=\"priority-5\">Adresse</th> #}
                    <th class=\"priority-3\">Montant Remb</th>
                    <th>Statut remboursement</th>
                    {# <th scope=\"col\">Agence</th> #}
                    {# <th class=\"text-center\" scope=\"col\">Départements</th>  #}
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                {% for ag in les_remboursement %}
                    {% if not ag.valide %}
                        {% set badge_etat = \"danger\" %}
                    {% else %}
                        {% set badge_etat = \"success\" %}
                    {% endif %}
                    <tr>
                        <td scope=\"row\">
                                <a href=\"{{ path('app_remboursement_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">
                                    {{ ag.paiement.demande.numero }}
                                </a>
                        </td>
                        <td class=\"priority-3\">
                        <a href=\"{{ path('app_remboursement_show', {'id': ag.id }) }}\" class=\"text-dark text-decoration-none\">
                            {% if ag.paiement.demande.installation.usages == \"domestique\" %}
                                <span class=\"text-warning fs-8 fw-bold\">Domestique</span>
                            {% elseif ag.paiement.demande.installation.usages == \"non_domestique\" %}
                                <span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
                            {% elseif ag.paiement.demande.installation.usages == \"erp_ert\" %}
                                <span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
                            {% endif %}
                        </a></td>
                        <td class=\"priority-4\">
                            {% if ag.paiement.demande.installation.localite is not null and ag.paiement.demande.installation.localite.agence is not null %}
                                {{ ag.paiement.demande.installation.localite.agence.nom }}
                            {% else %}
                                <span class=\"text-danger\">-</span>
                            {% endif %}
                        </td>
                        <td class=\"priority-4\">
                                {{ ag.dateDemande|date(\"d-m-Y\") }}
                        </td>
                        {# <td class=\"priority-5\">{{ ag.adresse }}</td> #}
                        <td class=\"priority-3\">
                                {{ ag.montant }} FCFA
                        </td>
                        <td class=\"priority-4\">
                            {% if ag.valide %}
                                <span class=\"text-success\">Validé le {{ ag.dateValidation|date(\"d-m-Y\") }}</span>
                            {% endif %}
                            {% if ag.rejete %}
                                <span class=\"text-danger\">Rejeté le {{ ag.updatedAt|date(\"d-m-Y\") }}</span>
                            {% endif %}
                        </td>
                        <td>
                            <a  href=\"{{ path('app_remboursement_show', {'id': ag.id }) }}\">
                                {% if ag.valide %}
                                    <span class=\"badge bg-success fs-8\">Validé</span>
                                {% elseif ag.rejete %}
                                    <span class=\"badge bg-danger fs-8\">Rejeté</span>
                                {% else %}
                                    <span class=\"badge bg-warning fs-8\">En Attente Validation</span>
                                {% endif %}
                            </a>
                        </td>
                        <td class=\"text-end\">
                                <a href=\"{{ path('app_remboursement_show', {'id': ag.id }) }}\" class=\"mx-1\" title=\"Afficher les détails\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#search') }}\"></use>
                                    </svg>
                                </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
            </table>

                {% do les_remboursement.setPageRange(1)%}
                {{ knp_pagination_render(les_remboursement, 'pagination.html.twig')}}

            {% endif %}
        </div>
    </section>
{% endblock %}

{% block javascripts %}
<script>
    \$(document).ready(function() {

        {% for filtre in [\"agence\", \"usage\"] %}
            \$('#val_{{filtre}}').val(\$('#val_{{filtre}}0').val())
            \$('#val_{{filtre}}0').on('change', function() {
                optSel=\$('#val_{{filtre}}0').find(\"option:selected\");
                valSel=optSel.val();
                \$('#val_{{filtre}}').val(valSel);
                \$('#form_rech_list').submit();
            });
        {% endfor %}

    });

</script>
{% endblock %}
", "remboursement/index.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/remboursement/index.html.twig");
    }
}
