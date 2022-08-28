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

/* main/demandepop.html.twig */
class __TwigTemplate_d94f6e6bd5f9b2364a08c2d5dd3dcaea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/demandepop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/demandepop.html.twig"));

        $this->parent = $this->loadTemplate("base_modal.html.twig", "main/demandepop.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "
\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper pt-0\">
\t\t\t";
        // line 8
        echo "\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 9
            echo "\t\t\t<div class=\"row mt-2\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t<h4 class=\"fw-bold\">Demandes ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 12, $this->source); })()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_demande"]) || array_key_exists("les_demande", $context) ? $context["les_demande"] : (function () { throw new RuntimeError('Variable "les_demande" does not exist.', 12, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 12), "html", null, true);
            echo ") </h4>
\t\t\t\t\t\t<a data-bs-dismiss=\"modal\" class=\"closeModal float-end next action-button btn btn-sm btn-secondary \">Fermer</a>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"divider\"><hr></span>

            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"\">
\t\t\t\t<div class=\"col-3 fs-7 priority-3\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-6\"><span class=\"fw-light fs-7\">Page ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_demande"]) || array_key_exists("les_demande", $context) ? $context["les_demande"] : (function () { throw new RuntimeError('Variable "les_demande" does not exist.', 20, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 20), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_demande"]) || array_key_exists("les_demande", $context) ? $context["les_demande"] : (function () { throw new RuntimeError('Variable "les_demande" does not exist.', 20, $this->source); })()), "getPageCount", [], "any", false, false, false, 20), "html", null, true);
            echo "</span></div>
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t";
            // line 22
            twig_get_attribute($this->env, $this->source, (isset($context["les_demande"]) || array_key_exists("les_demande", $context) ? $context["les_demande"] : (function () { throw new RuntimeError('Variable "les_demande" does not exist.', 22, $this->source); })()), "setPageRange", [0 => 1], "method", false, false, false, 22);
            // line 23
            echo "\t\t\t\t\t\t\t\t";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["les_demande"]) || array_key_exists("les_demande", $context) ? $context["les_demande"] : (function () { throw new RuntimeError('Variable "les_demande" does not exist.', 23, $this->source); })()), "paginationpop.html.twig");
            echo "
\t\t\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col-lg-2 offset-lg-6 col-6 offset-5 fs-6\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rechm0\" name=\"val_rechm0\" 
\t\t\t\tvalue=\"";
        // line 30
        if (array_key_exists("val_rech", $context)) {
            echo twig_escape_filter($this->env, (isset($context["val_rech"]) || array_key_exists("val_rech", $context) ? $context["val_rech"] : (function () { throw new RuntimeError('Variable "val_rech" does not exist.', 30, $this->source); })()), "html", null, true);
        }
        echo "\" 
\t\t\t\tonkeydown=\"if (event.keyCode == 13) { \$('#val_rechm').val(\$('#val_rechm0').val()); \$('#form_rech_listm').on('submit',function(){ url='";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => ((isset($context["restr"]) || array_key_exists("restr", $context) ? $context["restr"] : (function () { throw new RuntimeError('Variable "restr" does not exist.', 31, $this->source); })()) . "|val_rech")]), "html", null, true);
        echo "'; url = url.replace('val_rech', \$('#val_rechm').val()); \$('#modal2').find('.modal-body').load(url); return false; }); \$('#form_rech_listm').submit(); }\"
\t\t\t\t/></div>

            </div>
\t\t\t<div class=\"col-1\"></div>
            <div class=\"clear\"></div>
            \t";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["les_demande"]) || array_key_exists("les_demande", $context) ? $context["les_demande"] : (function () { throw new RuntimeError('Variable "les_demande" does not exist.', 37, $this->source); })())) == 0)) {
            // line 38
            echo "                <div class=\"row pt-20\">
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
\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t<table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">N° demande</th> 
\t\t\t\t\t\t<th class=\"priority-3\" scope=\"col\">Date Demande</th> 
\t\t\t\t\t\t<th class=\"priority-3\" scope=\"col\">Usage</th> 
\t\t\t\t\t\t<th class=\"priority-4\">Agence</th>
\t\t\t\t\t\t<th class=\"priority-5\">Localité</th>
\t\t\t\t\t\t<th class=\"priority-4\">Electricien</th>
\t\t\t\t\t\t<th class=\"priority-2\">Statut demande</th>
\t\t\t\t\t\t";
            // line 63
            echo "\t\t\t\t\t\t";
            // line 64
            echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_demande"]) || array_key_exists("les_demande", $context) ? $context["les_demande"] : (function () { throw new RuntimeError('Variable "les_demande" does not exist.', 67, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dem"]) {
                // line 68
                echo "\t\t\t\t\t\t";
                $context["ag"] = twig_get_attribute($this->env, $this->source, $context["dem"], "installation", [], "any", false, false, false, 68);
                // line 69
                echo "\t\t\t\t\t\t";
                $context["paiement"] = twig_get_attribute($this->env, $this->source, $context["dem"], "paiement", [], "any", false, false, false, 69);
                // line 70
                echo "\t\t\t\t\t\t";
                $context["dossier"] = twig_get_attribute($this->env, $this->source, $context["dem"], "dossier", [], "any", false, false, false, 70);
                // line 71
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 71, $this->source); })()), "step", [], "any", false, false, false, 71) < 7)) {
                    // line 72
                    echo "\t\t\t\t\t\t\t";
                    $context["badge_etat"] = "danger";
                    // line 73
                    echo "\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 74, $this->source); })()), "step", [], "any", false, false, false, 74) <= 7)) {
                    // line 75
                    echo "\t\t\t\t\t\t\t";
                    $context["badge_etat"] = "warning";
                    // line 76
                    echo "\t\t\t\t\t\t";
                }
                // line 77
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\" class=\"fw-bold\">
\t\t\t\t\t\t\t\t";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dem"], "numero", [], "any", false, false, false, 79), "html", null, true);
                echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-3\">
\t\t\t\t\t\t\t\t";
                // line 82
                if (((twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 82, $this->source); })()), "step", [], "any", false, false, false, 82) >= 7) && (twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 82, $this->source); })()), "etat", [], "any", false, false, false, 82) != "Saisie"))) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t<span class=\"badge text-secondary fs-8\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 83, $this->source); })()), "demandeCourante", [], "any", false, false, false, 83), "dateCreation", [], "any", false, false, false, 83), "d-m-Y"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t<span class=\"badge text-secondary fs-8\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 85, $this->source); })()), "createdAt", [], "any", false, false, false, 85), "d-m-Y"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-3\">
\t\t\t\t\t\t\t\t";
                // line 89
                if ((twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 89, $this->source); })()), "usages", [], "any", false, false, false, 89) == "domestique")) {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"text-warning fs-8 fw-bold\">Domestique</span>
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 91
(isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 91, $this->source); })()), "usages", [], "any", false, false, false, 91) == "non_domestique")) {
                    // line 92
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 93
(isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 93, $this->source); })()), "usages", [], "any", false, false, false, 93) == "erp_ert")) {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
\t\t\t\t\t\t\t\t";
                }
                // line 96
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-4\">
\t\t\t\t\t\t\t\t";
                // line 98
                if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 98, $this->source); })()), "localite", [], "any", false, false, false, 98)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 98, $this->source); })()), "localite", [], "any", false, false, false, 98), "agence", [], "any", false, false, false, 98)))) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 99, $this->source); })()), "localite", [], "any", false, false, false, 99), "agence", [], "any", false, false, false, 99), "nom", [], "any", false, false, false, 99), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                }
                // line 103
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-5\">
\t\t\t\t\t\t\t\t";
                // line 105
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 105, $this->source); })()), "localite", [], "any", false, false, false, 105))) {
                    // line 106
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 106, $this->source); })()), "localite", [], "any", false, false, false, 106), "nom", [], "any", false, false, false, 106), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                }
                // line 110
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-4\">
\t\t\t\t\t\t\t\t";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 112, $this->source); })()), "electricien", [], "any", false, false, false, 112), "nomComplet", [], "any", false, false, false, 112), "html", null, true);
                echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-2\">
\t\t\t\t\t\t\t\t";
                // line 115
                $context["etat"] = twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 115, $this->source); })()), "etat", [], "any", false, false, false, 115);
                echo " 
\t\t\t\t\t\t\t\t";
                // line 116
                $context["label_etat"] = "danger";
                echo " 
\t\t\t\t\t\t\t\t";
                // line 117
                $context["link"] = "app_installation_showpop";
                // line 118
                echo "\t\t\t\t\t\t\t\t";
                $context["id_ent"] = twig_get_attribute($this->env, $this->source, (isset($context["ag"]) || array_key_exists("ag", $context) ? $context["ag"] : (function () { throw new RuntimeError('Variable "ag" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118);
                // line 119
                echo "\t\t\t\t\t\t\t\t";
                if ((isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 119, $this->source); })())) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["etat"] = "Paiement enregistré";
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 121, $this->source); })()), "paiementEffectue", [], "any", false, false, false, 121)) {
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["etat"] = "Paiement validé";
                        // line 123
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 123, $this->source); })()), "etatRembousement", [], "any", false, false, false, 123)) {
                            // line 124
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            $context["etat"] = "Paiement validé - Remboursé";
                            // line 125
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 126
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["label_etat"] = "warning";
                    echo " 
\t\t\t\t\t\t\t\t";
                }
                // line 129
                echo "\t\t\t\t\t\t\t\t";
                if ((isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 129, $this->source); })())) {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["link"] = "app_dossier_showpop";
                    // line 131
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["id_ent"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131);
                    // line 132
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["etat"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 132, $this->source); })()), "etat", [], "any", false, false, false, 132);
                    // line 133
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 133, $this->source); })()), "attestation", [], "any", false, false, false, 133)) {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["etat"] = ("En attente " . twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 134, $this->source); })()), "etat", [], "any", false, false, false, 134));
                        // line 135
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 136
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["label_etat"] = "success";
                    echo " 
\t\t\t\t\t\t\t\t";
                }
                // line 138
                echo "\t\t\t\t\t\t\t\t\t<span class=\"fs-8 badge badge-";
                echo twig_escape_filter($this->env, (isset($context["label_etat"]) || array_key_exists("label_etat", $context) ? $context["label_etat"] : (function () { throw new RuntimeError('Variable "label_etat" does not exist.', 138, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 138, $this->source); })()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td align=\"right\">

\t\t\t\t\t\t\t";
                // line 145
                echo "\t\t\t\t\t\t\t<a class=\"me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 145, $this->source); })()), ["id" => (isset($context["id_ent"]) || array_key_exists("id_ent", $context) ? $context["id_ent"] : (function () { throw new RuntimeError('Variable "id_ent" does not exist.', 145, $this->source); })())]), "html", null, true);
                echo "\" title=\"Détails de la demande\">
\t\t\t\t\t\t\t\t<svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                echo "\"></use></svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "\t\t\t\t</tbody>
\t\t\t\t</table>

                ";
            // line 157
            echo "\t\t\t\t\t</div>

\t\t\t</div>
\t\t\t";
        }
        // line 161
        echo "
\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 166
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/demandepop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 166,  393 => 161,  387 => 157,  382 => 151,  371 => 146,  366 => 145,  356 => 138,  350 => 136,  347 => 135,  344 => 134,  341 => 133,  338 => 132,  335 => 131,  332 => 130,  329 => 129,  323 => 127,  320 => 126,  317 => 125,  314 => 124,  311 => 123,  308 => 122,  305 => 121,  302 => 120,  299 => 119,  296 => 118,  294 => 117,  290 => 116,  286 => 115,  280 => 112,  276 => 110,  272 => 108,  266 => 106,  264 => 105,  260 => 103,  256 => 101,  250 => 99,  248 => 98,  244 => 96,  240 => 94,  238 => 93,  235 => 92,  233 => 91,  230 => 90,  228 => 89,  224 => 87,  218 => 85,  212 => 83,  210 => 82,  204 => 79,  200 => 77,  197 => 76,  194 => 75,  191 => 74,  188 => 73,  185 => 72,  182 => 71,  179 => 70,  176 => 69,  173 => 68,  169 => 67,  164 => 64,  162 => 63,  150 => 52,  134 => 38,  132 => 37,  123 => 31,  117 => 30,  110 => 25,  104 => 23,  102 => 22,  95 => 20,  82 => 12,  77 => 9,  74 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_modal.html.twig' %}

{% block body %}

\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper pt-0\">
\t\t\t{# {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_PUBLIC') %} #}
\t\t\t{% if is_granted('ROLE_USER') %}
\t\t\t<div class=\"row mt-2\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t<h4 class=\"fw-bold\">Demandes {{titre}} ({{ les_demande.getTotalItemCount }}) </h4>
\t\t\t\t\t\t<a data-bs-dismiss=\"modal\" class=\"closeModal float-end next action-button btn btn-sm btn-secondary \">Fermer</a>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"divider\"><hr></span>

            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"\">
\t\t\t\t<div class=\"col-3 fs-7 priority-3\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-6\"><span class=\"fw-light fs-7\">Page {{les_demande.getCurrentPageNumber}} / {{les_demande.getPageCount}}</span></div>
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t{% do les_demande.setPageRange(1)%}
\t\t\t\t\t\t\t\t{{ knp_pagination_render(les_demande, 'paginationpop.html.twig')}}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col-lg-2 offset-lg-6 col-6 offset-5 fs-6\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rechm0\" name=\"val_rechm0\" 
\t\t\t\tvalue=\"{% if val_rech is defined %}{{ val_rech }}{% endif %}\" 
\t\t\t\tonkeydown=\"if (event.keyCode == 13) { \$('#val_rechm').val(\$('#val_rechm0').val()); \$('#form_rech_listm').on('submit',function(){ url='{{ path('main_demandepop', {'restr': restr ~ '|val_rech'}) }}'; url = url.replace('val_rech', \$('#val_rechm').val()); \$('#modal2').find('.modal-body').load(url); return false; }); \$('#form_rech_listm').submit(); }\"
\t\t\t\t/></div>

            </div>
\t\t\t<div class=\"col-1\"></div>
            <div class=\"clear\"></div>
            \t{% if les_demande|length == 0 %}
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
\t\t\t\t{% else %}
\t\t\t\t<table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">N° demande</th> 
\t\t\t\t\t\t<th class=\"priority-3\" scope=\"col\">Date Demande</th> 
\t\t\t\t\t\t<th class=\"priority-3\" scope=\"col\">Usage</th> 
\t\t\t\t\t\t<th class=\"priority-4\">Agence</th>
\t\t\t\t\t\t<th class=\"priority-5\">Localité</th>
\t\t\t\t\t\t<th class=\"priority-4\">Electricien</th>
\t\t\t\t\t\t<th class=\"priority-2\">Statut demande</th>
\t\t\t\t\t\t{# <th scope=\"col\">Agence</th> #}
\t\t\t\t\t\t{# <th class=\"text-center\" scope=\"col\">Départements</th>  #}
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for dem in les_demande %}
\t\t\t\t\t\t{% set ag = dem.installation %}
\t\t\t\t\t\t{% set paiement = dem.paiement %}
\t\t\t\t\t\t{% set dossier = dem.dossier %}
\t\t\t\t\t\t{% if ag.step < 7 %}
\t\t\t\t\t\t\t{% set badge_etat = \"danger\" %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if ag.step <= 7 %}
\t\t\t\t\t\t\t{% set badge_etat = \"warning\" %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\" class=\"fw-bold\">
\t\t\t\t\t\t\t\t{{ dem.numero }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-3\">
\t\t\t\t\t\t\t\t{% if ag.step>=7 and ag.etat!=\"Saisie\" %}
\t\t\t\t\t\t\t\t<span class=\"badge text-secondary fs-8\">{{ ag.demandeCourante.dateCreation | date(\"d-m-Y\") }}</span>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"badge text-secondary fs-8\">{{ ag.createdAt | date(\"d-m-Y\") }}</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-3\">
\t\t\t\t\t\t\t\t{% if ag.usages == \"domestique\" %}
\t\t\t\t\t\t\t\t\t<span class=\"text-warning fs-8 fw-bold\">Domestique</span>
\t\t\t\t\t\t\t\t{% elseif ag.usages == \"non_domestique\" %}
\t\t\t\t\t\t\t\t\t<span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
\t\t\t\t\t\t\t\t{% elseif ag.usages == \"erp_ert\" %}
\t\t\t\t\t\t\t\t\t<span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-4\">
\t\t\t\t\t\t\t\t{% if ag.localite is not null and ag.localite.agence is not null %}
\t\t\t\t\t\t\t\t\t{{ ag.localite.agence.nom }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-5\">
\t\t\t\t\t\t\t\t{% if ag.localite is not null %}
\t\t\t\t\t\t\t\t\t{{ ag.localite.nom }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-4\">
\t\t\t\t\t\t\t\t{{ ag.electricien.nomComplet }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-2\">
\t\t\t\t\t\t\t\t{% set etat = ag.etat %} 
\t\t\t\t\t\t\t\t{% set label_etat = 'danger' %} 
\t\t\t\t\t\t\t\t{% set link = 'app_installation_showpop' %}
\t\t\t\t\t\t\t\t{% set id_ent = ag.id %}
\t\t\t\t\t\t\t\t{% if paiement %}
\t\t\t\t\t\t\t\t\t{% set etat = 'Paiement enregistré' %}
\t\t\t\t\t\t\t\t\t{% if paiement.paiementEffectue %}
\t\t\t\t\t\t\t\t\t\t{% set etat = 'Paiement validé' %}
\t\t\t\t\t\t\t\t\t\t{% if paiement.etatRembousement %}
\t\t\t\t\t\t\t\t\t\t\t{% set etat = 'Paiement validé - Remboursé' %}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% set label_etat = 'warning' %} 
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if dossier %}
\t\t\t\t\t\t\t\t\t{% set link = 'app_dossier_showpop' %}
\t\t\t\t\t\t\t\t\t{% set id_ent = dossier.id %}
\t\t\t\t\t\t\t\t\t{% set etat = dossier.etat %}
\t\t\t\t\t\t\t\t\t{% if not dossier.attestation %}
\t\t\t\t\t\t\t\t\t\t{% set etat = 'En attente ' ~ dossier.etat %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% set label_etat = 'success' %} 
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<span class=\"fs-8 badge badge-{{label_etat}}\">{{ etat }}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td align=\"right\">

\t\t\t\t\t\t\t{# <a class=\"me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('app_installation_showpdf', {'id': ag.id}) }}\" title=\"Formulaire de demande\">
\t\t\t\t\t\t\t\t<svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"red\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#file-pdf\") }}\"></use></svg>
\t\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t\t<a class=\"me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path(link, {'id': id_ent}) }}\" title=\"Détails de la demande\">
\t\t\t\t\t\t\t\t<svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#search\") }}\"></use></svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t\t</table>

                {# {% do les_demande.setPageRange(1)%}
\t                {{ knp_pagination_render(les_demande, 'paginationpop.html.twig')}}
\t\t\t\t{% endif %} #}
\t\t\t\t\t</div>

\t\t\t</div>
\t\t\t{% endif %}

\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
{% endblock %}

{% block javascripts %}
{% endblock %}

", "main/demandepop.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/demandepop.html.twig");
    }
}
