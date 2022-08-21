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
class __TwigTemplate_b03f70a5b0176062af2c411328e5d038 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index_public.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index_public.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index_public.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "isverified", [], "any", false, false, false, 7))) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 16, $this->source); })()), "All", [], "array", false, false, false, 16), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 31, $this->source); })()), "Domestiques", [], "array", false, false, false, 31), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 44, $this->source); })()), "Professionnelles", [], "array", false, false, false, 44), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 57, $this->source); })()), "ERP - ERT", [], "array", false, false, false, 57), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["les_etat"]) || array_key_exists("les_etat", $context) ? $context["les_etat"] : (function () { throw new RuntimeError('Variable "les_etat" does not exist.', 106, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
                // line 107
                echo "\t\t\t\t\t";
                $context["col"] = twig_get_attribute($this->env, $this->source, (isset($context["les_col"]) || array_key_exists("les_col", $context) ? $context["les_col"] : (function () { throw new RuntimeError('Variable "les_col" does not exist.', 107, $this->source); })()), (isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 107, $this->source); })()), [], "array", false, false, false, 107);
                // line 108
                echo "\t\t\t\t\t<div class=\"col-md-4 mt-2\">
\t\t\t\t\t\t<div class=\"card bg-";
                // line 109
                echo twig_escape_filter($this->env, (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 109, $this->source); })()), "html", null, true);
                echo " p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => $context["etat"]]), "html", null, true);
                echo "\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_stat"]) || array_key_exists("les_stat", $context) ? $context["les_stat"] : (function () { throw new RuntimeError('Variable "les_stat" does not exist.', 113, $this->source); })()), $context["etat"], [], "array", false, false, false, 113), "html", null, true);
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
                $context["ix"] = ((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 121, $this->source); })()) + 1);
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
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_install"]) || array_key_exists("les_install", $context) ? $context["les_install"] : (function () { throw new RuntimeError('Variable "les_install" does not exist.', 131, $this->source); })())), "html", null, true);
                echo ")</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
            \t";
                // line 135
                if ((twig_length_filter($this->env, (isset($context["les_install"]) || array_key_exists("les_install", $context) ? $context["les_install"] : (function () { throw new RuntimeError('Variable "les_install" does not exist.', 135, $this->source); })())) == 0)) {
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
                    $context['_seq'] = twig_ensure_traversable((isset($context["les_install"]) || array_key_exists("les_install", $context) ? $context["les_install"] : (function () { throw new RuntimeError('Variable "les_install" does not exist.', 163, $this->source); })()));
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
                $context['_seq'] = twig_ensure_traversable((isset($context["last_client"]) || array_key_exists("last_client", $context) ? $context["last_client"] : (function () { throw new RuntimeError('Variable "last_client" does not exist.', 218, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  558 => 255,  551 => 250,  545 => 246,  538 => 241,  522 => 234,  518 => 232,  512 => 230,  510 => 229,  503 => 227,  495 => 222,  490 => 219,  486 => 218,  475 => 209,  470 => 206,  463 => 204,  461 => 197,  456 => 194,  452 => 192,  448 => 190,  442 => 188,  440 => 187,  436 => 185,  432 => 183,  426 => 181,  424 => 180,  419 => 178,  416 => 177,  410 => 175,  404 => 173,  402 => 172,  398 => 170,  395 => 169,  392 => 168,  389 => 167,  386 => 166,  383 => 165,  380 => 164,  376 => 163,  371 => 160,  369 => 159,  359 => 150,  343 => 136,  341 => 135,  334 => 131,  328 => 127,  326 => 126,  321 => 123,  315 => 122,  313 => 121,  303 => 114,  299 => 113,  295 => 112,  289 => 109,  286 => 108,  283 => 107,  278 => 106,  276 => 105,  273 => 104,  270 => 103,  267 => 102,  264 => 101,  262 => 100,  259 => 99,  256 => 98,  253 => 97,  250 => 96,  248 => 95,  245 => 94,  242 => 93,  239 => 92,  236 => 91,  234 => 90,  231 => 89,  228 => 88,  225 => 87,  222 => 86,  220 => 85,  217 => 84,  214 => 83,  211 => 82,  208 => 81,  206 => 80,  203 => 79,  200 => 78,  197 => 77,  194 => 76,  192 => 75,  189 => 74,  186 => 73,  184 => 72,  166 => 57,  162 => 56,  147 => 44,  143 => 43,  128 => 31,  124 => 30,  107 => 16,  103 => 15,  94 => 8,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}
{% block body %}

\t{% if app.user and app.user.isverified %}
\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper pt-10\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 mt-2\">
\t\t\t\t\t<div class=\"card bg-dark p-2 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'All'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-warning\">{{ les_stat[\"All\"] }}</span>
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
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'Domestiques'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ les_stat[\"Domestiques\"] }}</span>
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
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'Professionnelles'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ les_stat[\"Professionnelles\"] }}</span>
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
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': 'ERP - ERT'}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-success\">{{ les_stat[\"ERP - ERT\"] }}</span>
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
\t\t\t\t{% set les_etat = [\"Soumis, en attente paiement\"] %}
\t\t\t\t{% set les_col = [\"danger\"] %}
\t\t\t\t
\t\t\t\t{% if is_granted('ROLE_CAISSIER') %}
\t\t\t\t\t{% set les_etat = [\"Payé, en attente confirmation paiement\", \"Payé, en attente validation\"] %}
\t\t\t\t\t{% set les_col = [\"primary bg-opacity-25\", \"success bg-opacity-25\"] %}
\t\t\t\t{% endif %}

\t\t\t\t{% if is_granted('ROLE_DAF') %}
\t\t\t\t\t{% set les_etat = [\"Payé, en attente confirmation paiement\", \"Payé, en attente validation\"] %}
\t\t\t\t\t{% set les_col = [\"primary bg-opacity-25\", \"success bg-opacity-25\"] %}
\t\t\t\t{% endif %}

\t\t\t\t{% if is_granted('ROLE_RFO') %}
\t\t\t\t\t{% set les_etat = [\"Dossier Validé, En Attente Affectation\"] %}
\t\t\t\t\t{% set les_col = [\"success bg-opacity-25\", ] %}
\t\t\t\t{% endif %}

\t\t\t\t{% if is_granted('ROLE_CONTROLEUR') %}
\t\t\t\t\t{% set les_etat = [\"Dossier Affecté, En Attente Visite\", \"Visite Planifiée, En Attente de Rapport\", \"Visite Réalisée, En Attente de validation Rapport\", \"Rapport validé, dossier clôturé\"] %}
\t\t\t\t\t{% set les_col = [ \"light\", \"red\", \"primary bg-opacity-75\", \"green\"] %}
\t\t\t\t{% endif %}

\t\t\t\t{% if is_granted('ROLE_REFERENT') %}
\t\t\t\t\t{% set les_etat = [\"Payé, en attente validation\", \"Dossier Validé, En Attente Affectation\", \"Dossier Affecté, En Attente Visite\", \"Visite Planifiée, En Attente de Rapport\", \"Visite Réalisée, En Attente de validation Rapport\", \"Rapport validé, dossier clôturé\"] %}
\t\t\t\t\t{% set les_col = [\"info\", \"dark bg-opacity-50\", \"red\", \"primary bg-opacity-75\", \"green\"] %}
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t{% set les_etat = [\"Soumis, en attente paiement\", \"Payé, en attente confirmation paiement\", \"Payé, en attente validation\", \"Dossier Validé, En Attente Affectation\", \"Dossier Affecté, En Attente Visite\", \"Visite Planifiée, En Attente de Rapport\", \"Visite Réalisée, En Attente de validation Rapport\", \"Rapport validé, dossier clôturé\"] %}
\t\t\t\t\t{% set les_col = [\"danger\", \"primary bg-opacity-25\", \"success bg-opacity-25\", \"info\", \"dark bg-opacity-50\", \"red\", \"primary bg-opacity-75\", \"green\"] %}
\t\t\t\t{% endif %}

\t\t\t\t{% set ix = 0 %}
\t\t\t\t{% for etat in les_etat  %}
\t\t\t\t\t{% set col = les_col[ix] %}
\t\t\t\t\t<div class=\"col-md-4 mt-2\">
\t\t\t\t\t\t<div class=\"card bg-{{col}} p-2 card-stat\">
\t\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-1 pt\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('main_demandepop', {'restr': etat}) }}\" title=\"Afficher la liste des demandes\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number mb-0 fs-7 badge badge-danger\">{{ les_stat[etat] }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-light\">{{etat}}</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% set ix = ix+1 %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_ACCUEIL') or is_granted('ROLE_RFO') %}
\t\t\t<div class=\"row mt-50\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Demandes en préparation ({{ les_install|length }})</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
            \t{% if les_install|length == 0 %}
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
\t\t\t\t\t\t<th class=\"priority-3\">Usage</th> 
\t\t\t\t\t\t<th>Localité</th>
\t\t\t\t\t\t<th>Type Construction</th>
\t\t\t\t\t\t<th>Statut demande</th>
\t\t\t\t\t\t{# <th scope=\"col\">Agence</th> #}
\t\t\t\t\t\t{# <th class=\"text-center\" scope=\"col\">Départements</th>  #}
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for ag in les_install %}
\t\t\t\t\t\t{% if ag.step < 7 %}
\t\t\t\t\t\t\t{% set badge_etat = \"danger\" %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if ag.step <= 7 %}
\t\t\t\t\t\t\t{% set badge_etat = \"warning\" %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\" class=\"fw-bold\">
\t\t\t\t\t\t\t\t{% if ag.demandeCourante %}
\t\t\t\t\t\t\t\t\t\t{{ ag.demandeCourante.numero }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span>[{{ ag.createdAt|date(\"d/m/y_H:i:s\") }}]</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ ag.usages }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if ag.localite is not null %}
\t\t\t\t\t\t\t\t\t{{ ag.localite.nom }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if ag.typeconstruction is not null %}
\t\t\t\t\t\t\t\t\t{{ ag.typeconstruction.nom }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"pt badge badge-info fs-8\">{{ ag.etat }}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{# <td>{{ ag.agence }}</td> #}
\t\t\t\t\t\t\t{# <td class=\"text-center\">
\t\t\t\t\t\t\t\t{% if reg.departement.count >0 %}
\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success text-light rounded-pill fw-normal\">{{ reg.departement.count }}</span>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<code class=\"text-danger text-opacity-50\">Aucun département</code>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td> #}
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-clients\">
\t\t\t\t\t\t<h4 class=\"fw-bold\">Derniers clients enregistrés</h4>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
\t\t\t\t\t\t<ul class=\"pl-0\">
\t\t\t\t\t\t\t{% for ag in last_client %}
\t\t\t\t\t\t\t<li class=\"un-client d-flex align-items-center mt-3\">
\t\t\t\t\t\t\t\t<div style=\"position:relative; top:-2px\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"gray\" class=\"bi bi-plus-lg\" viewBox=\"0 0 32 32\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-person') }}\"></use>
                                </svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-2 d-flex flex-wrap align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">{{ ag.prenom }} {{ ag.nom }}</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t{% if ag.localite %}
\t\t\t\t\t\t\t\t\t\t\t{{ ag.localite.nom }}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t, {{ ag.adresse }}, {{ ag.telephone }}
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning\">Electricien</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endif %}

\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
\t{% else %}
\t\t<div class=\"col-8 mt-5 offset-2 alert alert-danger fs-4 text-center\">
\t\t\tVotre adresse email n'a pas encore été confirmée !
\t\t\tVeuillez cliquer sur le lien envoyé sur votre boite mail pour valider votre inscription !
\t\t</div>
\t{% endif %}

{% endblock %}
", "main/index_public.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/index_public.html.twig");
    }
}
