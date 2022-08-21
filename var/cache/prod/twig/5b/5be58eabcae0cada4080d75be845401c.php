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

/* main/index_public.html.twig */
class __TwigTemplate_0ef84c792c8a715b3e735c1d18d0abaf extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/index_public.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil
";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
\t";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7), "isverified", [], "any", false, false, false, 7))) {
            // line 8
            echo "\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper pt-10\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 mt-2\">
\t\t\t\t\t<div class=\"card bg-dark p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "All"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">";
            // line 16
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["All"] ?? null) : null), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-light fw-light\">Total des demandes</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t\t<div class=\"col-md-8 mt-2\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card bg-warning p-2 card-stat\">
\t\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Domestiques"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 31
            echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["Domestiques"] ?? null) : null), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light\">Demandes domestiques</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card bg-primary bg-opacity-75 p-2 card-stat\">
\t\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "Professionnelles"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 44
            echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["Professionnelles"] ?? null) : null), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-dark\">Demandes professionnelles</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card bg-primary p-2 card-stat\">
\t\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => "ERP - ERT"]);
            echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">";
            // line 57
            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["ERP - ERT"] ?? null) : null), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light text-light\">Demandes ERP - ERT</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t\t<div class=\"row m-1 mt-4 pt-2\">
\t\t\t\t\t<h5 class=\"text-dark fw-light pb-2 border-bottom border-secondary border-2\">Demandes par état de traitement</h5>
\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t\t
\t\t\t\t";
            // line 72
            $context["les_etat"] = [0 => "Soumis, en attente paiement"];
            // line 73
            echo "\t\t\t\t";
            $context["les_col"] = [0 => "danger"];
            // line 74
            echo "\t\t\t\t
\t\t\t\t";
            // line 75
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER")) {
                // line 76
                echo "\t\t\t\t\t";
                $context["les_etat"] = [0 => "Payé, en attente confirmation paiement", 1 => "Payé, en attente validation"];
                // line 77
                echo "\t\t\t\t\t";
                $context["les_col"] = [0 => "primary bg-opacity-25", 1 => "success bg-opacity-25"];
                // line 78
                echo "\t\t\t\t";
            }
            // line 79
            echo "
\t\t\t\t";
            // line 80
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DAF")) {
                // line 81
                echo "\t\t\t\t\t";
                $context["les_etat"] = [0 => "Payé, en attente confirmation paiement", 1 => "Payé, en attente validation"];
                // line 82
                echo "\t\t\t\t\t";
                $context["les_col"] = [0 => "primary bg-opacity-25", 1 => "success bg-opacity-25"];
                // line 83
                echo "\t\t\t\t";
            }
            // line 84
            echo "
\t\t\t\t";
            // line 85
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")) {
                // line 86
                echo "\t\t\t\t\t";
                $context["les_etat"] = [0 => "Dossier Validé, En Attente Affectation"];
                // line 87
                echo "\t\t\t\t\t";
                $context["les_col"] = [0 => "success bg-opacity-25"];
                // line 88
                echo "\t\t\t\t";
            }
            // line 89
            echo "
\t\t\t\t";
            // line 90
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR")) {
                // line 91
                echo "\t\t\t\t\t";
                $context["les_etat"] = [0 => "Dossier Affecté, En Attente Visite", 1 => "Visite Planifiée, En Attente de Rapport", 2 => "Visite Réalisée, En Attente de validation Rapport", 3 => "Rapport validé, dossier clôturé"];
                // line 92
                echo "\t\t\t\t\t";
                $context["les_col"] = [0 => "light", 1 => "red", 2 => "primary bg-opacity-75", 3 => "green"];
                // line 93
                echo "\t\t\t\t";
            }
            // line 94
            echo "
\t\t\t\t";
            // line 95
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                // line 96
                echo "\t\t\t\t\t";
                $context["les_etat"] = [0 => "Payé, en attente validation", 1 => "Dossier Validé, En Attente Affectation", 2 => "Dossier Affecté, En Attente Visite", 3 => "Visite Planifiée, En Attente de Rapport", 4 => "Visite Réalisée, En Attente de validation Rapport", 5 => "Rapport validé, dossier clôturé"];
                // line 97
                echo "\t\t\t\t\t";
                $context["les_col"] = [0 => "info", 1 => "dark bg-opacity-50", 2 => "red", 3 => "primary bg-opacity-75", 4 => "green"];
                // line 98
                echo "\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t
\t\t\t\t";
            // line 100
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 101
                echo "\t\t\t\t\t";
                $context["les_etat"] = [0 => "Soumis, en attente paiement", 1 => "Payé, en attente confirmation paiement", 2 => "Payé, en attente validation", 3 => "Dossier Validé, En Attente Affectation", 4 => "Dossier Affecté, En Attente Visite", 5 => "Visite Planifiée, En Attente de Rapport", 6 => "Visite Réalisée, En Attente de validation Rapport", 7 => "Rapport validé, dossier clôturé"];
                // line 102
                echo "\t\t\t\t\t";
                $context["les_col"] = [0 => "danger", 1 => "primary bg-opacity-25", 2 => "success bg-opacity-25", 3 => "info", 4 => "dark bg-opacity-50", 5 => "red", 6 => "primary bg-opacity-75", 7 => "green"];
                // line 103
                echo "\t\t\t\t";
            }
            // line 104
            echo "
\t\t\t\t";
            // line 105
            $context["ix"] = 0;
            // line 106
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_etat"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
                // line 107
                echo "\t\t\t\t\t";
                $context["col"] = (($__internal_compile_4 = ($context["les_col"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["ix"] ?? null)] ?? null) : null);
                // line 108
                echo "\t\t\t\t\t<div class=\"col-md-4 mt-2\">
\t\t\t\t\t\t<div class=\"card bg-";
                // line 109
                echo twig_escape_filter($this->env, ($context["col"] ?? null), "html", null, true);
                echo " p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => $context["etat"]]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">";
                // line 113
                echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["les_stat"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["etat"]] ?? null) : null), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light\">";
                // line 114
                echo twig_escape_filter($this->env, $context["etat"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 121
                $context["ix"] = (($context["ix"] ?? null) + 1);
                // line 122
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t";
            // line 126
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
                // line 127
                echo "\t\t\t<div class=\"row mt-50\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Demandes en préparation (";
                // line 131
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["les_install"] ?? null)), "html", null, true);
                echo ")</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
            \t";
                // line 135
                if ((twig_length_filter($this->env, ($context["les_install"] ?? null)) == 0)) {
                    // line 136
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
                    // line 150
                    echo "\t\t\t\t<table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">N° demande</th> 
\t\t\t\t\t\t<th class=\"priority-3\">Usage</th> 
\t\t\t\t\t\t<th>Localité</th>
\t\t\t\t\t\t<th>Type Construction</th>
\t\t\t\t\t\t<th>Statut demande</th>
\t\t\t\t\t\t";
                    // line 159
                    echo "\t\t\t\t\t\t";
                    // line 160
                    echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
                    // line 163
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["les_install"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                        // line 164
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 164) < 7)) {
                            // line 165
                            echo "\t\t\t\t\t\t\t";
                            $context["badge_etat"] = "danger";
                            // line 166
                            echo "\t\t\t\t\t\t";
                        }
                        // line 167
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 167) <= 7)) {
                            // line 168
                            echo "\t\t\t\t\t\t\t";
                            $context["badge_etat"] = "warning";
                            // line 169
                            echo "\t\t\t\t\t\t";
                        }
                        // line 170
                        echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\" class=\"fw-bold\">
\t\t\t\t\t\t\t\t";
                        // line 172
                        if (twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 172)) {
                            // line 173
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 173), "numero", [], "any", false, false, false, 173), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 175
                            echo "\t\t\t\t\t\t\t\t\t\t<span>[";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdAt", [], "any", false, false, false, 175), "d/m/y_H:i:s"), "html", null, true);
                            echo "]</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 177
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                        // line 178
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "usages", [], "any", false, false, false, 178), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                        // line 180
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 180))) {
                            // line 181
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 181), "nom", [], "any", false, false, false, 181), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 183
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 185
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                        // line 187
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["ag"], "typeconstruction", [], "any", false, false, false, 187))) {
                            // line 188
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "typeconstruction", [], "any", false, false, false, 188), "nom", [], "any", false, false, false, 188), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 190
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 192
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"pt badge badge-info fs-8\">";
                        // line 194
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 194), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                        // line 197
                        echo "\t\t\t\t\t\t\t";
                        // line 204
                        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 206
                    echo "\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t";
                }
                // line 209
                echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-clients\">
\t\t\t\t\t\t<h4 class=\"fw-bold\">Derniers clients enregistrés</h4>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
\t\t\t\t\t\t<ul class=\"pl-0\">
\t\t\t\t\t\t\t";
                // line 218
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["last_client"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                    // line 219
                    echo "\t\t\t\t\t\t\t<li class=\"un-client d-flex align-items-center mt-3\">
\t\t\t\t\t\t\t\t<div style=\"position:relative; top:-2px\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"gray\" class=\"bi bi-plus-lg\" viewBox=\"0 0 32 32\">
                                    <use xlink:href=\"";
                    // line 222
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-person"), "html", null, true);
                    echo "\"></use>
                                </svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-2 d-flex flex-wrap align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">";
                    // line 227
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "prenom", [], "any", false, false, false, 227), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "nom", [], "any", false, false, false, 227), "html", null, true);
                    echo "</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 229
                    if (twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 229)) {
                        // line 230
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "localite", [], "any", false, false, false, 230), "nom", [], "any", false, false, false, 230), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 232
                        echo "\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 234
                    echo "\t\t\t\t\t\t\t\t\t\t, ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "adresse", [], "any", false, false, false, 234), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "telephone", [], "any", false, false, false, 234), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning\">Electricien</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 241
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 246
            echo "
\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
\t";
        } else {
            // line 250
            echo "\t\t<div class=\"col-8 mt-5 offset-2 alert alert-danger fs-4 text-center\">
\t\t\tVotre adresse email n'a pas encore été confirmée !
\t\t\tVeuillez cliquer sur le lien envoyé sur votre boite mail pour valider votre inscription !
\t\t</div>
\t";
        }
        // line 255
        echo "
";
    }

    public function getTemplateName()
    {
        return "main/index_public.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 255,  521 => 250,  515 => 246,  508 => 241,  492 => 234,  488 => 232,  482 => 230,  480 => 229,  473 => 227,  465 => 222,  460 => 219,  456 => 218,  445 => 209,  440 => 206,  433 => 204,  431 => 197,  426 => 194,  422 => 192,  418 => 190,  412 => 188,  410 => 187,  406 => 185,  402 => 183,  396 => 181,  394 => 180,  389 => 178,  386 => 177,  380 => 175,  374 => 173,  372 => 172,  368 => 170,  365 => 169,  362 => 168,  359 => 167,  356 => 166,  353 => 165,  350 => 164,  346 => 163,  341 => 160,  339 => 159,  329 => 150,  313 => 136,  311 => 135,  304 => 131,  298 => 127,  296 => 126,  291 => 123,  285 => 122,  283 => 121,  273 => 114,  269 => 113,  265 => 112,  259 => 109,  256 => 108,  253 => 107,  248 => 106,  246 => 105,  243 => 104,  240 => 103,  237 => 102,  234 => 101,  232 => 100,  229 => 99,  226 => 98,  223 => 97,  220 => 96,  218 => 95,  215 => 94,  212 => 93,  209 => 92,  206 => 91,  204 => 90,  201 => 89,  198 => 88,  195 => 87,  192 => 86,  190 => 85,  187 => 84,  184 => 83,  181 => 82,  178 => 81,  176 => 80,  173 => 79,  170 => 78,  167 => 77,  164 => 76,  162 => 75,  159 => 74,  156 => 73,  154 => 72,  136 => 57,  132 => 56,  117 => 44,  113 => 43,  98 => 31,  94 => 30,  77 => 16,  73 => 15,  64 => 8,  62 => 7,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/index_public.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/index_public.html.twig");
    }
}
