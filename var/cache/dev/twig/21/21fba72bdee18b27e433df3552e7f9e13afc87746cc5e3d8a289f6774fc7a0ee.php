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

/* main/index.html.twig */
class __TwigTemplate_04db489d5a27f2e3d990025890ac223652f0e463de2ea76ebd853cd2ee7099fb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper pt-30\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card bg-red p-4 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"icone\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/demandes.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Total des demandes</p>
\t\t\t\t\t\t\t\t<h5 class=\"number mb-0\">1234</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card bg-green p-4 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"icone\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/demandes.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Demandes domestiques</p>
\t\t\t\t\t\t\t\t<h5 class=\"number mb-0\">703</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card bg-blue card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"icone\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/demandes.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Demandes domestiques</p>
\t\t\t\t\t\t\t\t<h5 class=\"number mb-0\">531</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t<div class=\"row mt-50\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Nouvelles demandes</h4>
\t\t\t\t\t\t\t<a href=\"#\" class=\"link\">Voir toutes
\t\t\t\t\t\t\t\t<img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/yellow-arrow-right.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
\t\t\t\t\t\t<table class=\"table table-hover table-striped\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">N° Demande</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Type</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Etat</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Soumise</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Eye.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/doc.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\">Annulée</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Eye.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/doc.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Soumise</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Eye.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/doc.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Soumise</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Eye.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/doc.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-info\">Enregistrée</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Eye.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/doc.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Soumise</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Eye.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/doc.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\">Annulée</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Eye.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/doc.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Soumise</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Eye.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/doc.svg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-clients\">
\t\t\t\t\t\t<h4 class=\"fw-bold\">Nouveaux clients</h4>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
\t\t\t\t\t\t<ul class=\"pl-0\">
\t\t\t\t\t\t\t<li class=\"un-client d-flex align-items-center mt-3\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatar1.jpg"), "html", null, true);
            echo "\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-2 d-flex flex-wrap align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Abdoulaye Diao</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Grand Yoff</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Valide</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"un-client d-flex align-items-center mt-3\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatar2.jpg"), "html", null, true);
            echo "\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-2 d-flex flex-wrap align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Jean Mendy</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Grand Yoff</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Valide</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"un-client d-flex align-items-center mt-3\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 259
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatar3.jpg"), "html", null, true);
            echo "\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-2 d-flex flex-wrap align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Aissatou Gueye</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Grand Yoff</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Valide</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"un-client d-flex align-items-center mt-3\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 271
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatar.jpg"), "html", null, true);
            echo "\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-2 d-flex flex-wrap align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Mamadou Ndaw Diop</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Grand Yoff</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Valide</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"un-client d-flex align-items-center mt-3\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 283
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatar4.jpg"), "html", null, true);
            echo "\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-2 d-flex flex-wrap align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Abdoulaye Diao</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Grand Yoff</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Valide</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"\">Voir tous
\t\t\t\t\t\t\t\t<img src=\"";
            // line 296
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/yellow-arrow-right.svg"), "html", null, true);
            echo "\" alt=\"\" srcset=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
\t";
        }
        // line 305
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 305,  459 => 296,  443 => 283,  428 => 271,  413 => 259,  398 => 247,  383 => 235,  362 => 217,  356 => 214,  338 => 199,  332 => 196,  314 => 181,  308 => 178,  290 => 163,  284 => 160,  266 => 145,  260 => 142,  242 => 127,  236 => 124,  218 => 109,  212 => 106,  194 => 91,  188 => 88,  159 => 62,  137 => 43,  120 => 29,  103 => 15,  94 => 8,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}
{% block body %}

\t{% if app.user %}
\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper pt-30\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card bg-red p-4 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"icone\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/demandes.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Total des demandes</p>
\t\t\t\t\t\t\t\t<h5 class=\"number mb-0\">1234</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card bg-green p-4 card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"icone\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/demandes.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Demandes domestiques</p>
\t\t\t\t\t\t\t\t<h5 class=\"number mb-0\">703</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card bg-blue card-stat\">
\t\t\t\t\t\t<div class=\"un-stat d-flex\">
\t\t\t\t\t\t\t<div class=\"icone\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/demandes.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<p class=\"mb-2\">Demandes domestiques</p>
\t\t\t\t\t\t\t\t<h5 class=\"number mb-0\">531</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end col -->
\t\t\t</div>
\t\t\t<!-- end row -->

\t\t\t<div class=\"row mt-50\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Nouvelles demandes</h4>
\t\t\t\t\t\t\t<a href=\"#\" class=\"link\">Voir toutes
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/yellow-arrow-right.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
\t\t\t\t\t\t<table class=\"table table-hover table-striped\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">N° Demande</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Type</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Etat</th>
\t\t\t\t\t\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Soumise</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/Eye.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/doc.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\">Annulée</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/Eye.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/doc.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Soumise</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/Eye.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/doc.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Soumise</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/Eye.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/doc.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-info\">Enregistrée</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/Eye.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/doc.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Soumise</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/Eye.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/doc.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\">Annulée</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/Eye.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/doc.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">676013034</th>
\t\t\t\t\t\t\t\t\t<td>Non Domestique</td>
\t\t\t\t\t\t\t\t\t<td>12/02/2022 à 23:25</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Soumise</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/Eye.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mx-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/doc.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card card-clients\">
\t\t\t\t\t\t<h4 class=\"fw-bold\">Nouveaux clients</h4>
\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t<hr></span>
\t\t\t\t\t\t<ul class=\"pl-0\">
\t\t\t\t\t\t\t<li class=\"un-client d-flex align-items-center mt-3\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/avatar1.jpg') }}\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-2 d-flex flex-wrap align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Abdoulaye Diao</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Grand Yoff</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Valide</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"un-client d-flex align-items-center mt-3\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/avatar2.jpg') }}\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-2 d-flex flex-wrap align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Jean Mendy</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Grand Yoff</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Valide</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"un-client d-flex align-items-center mt-3\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/avatar3.jpg') }}\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-2 d-flex flex-wrap align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Aissatou Gueye</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Grand Yoff</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Valide</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"un-client d-flex align-items-center mt-3\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/avatar.jpg') }}\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-2 d-flex flex-wrap align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Mamadou Ndaw Diop</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Grand Yoff</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Valide</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"un-client d-flex align-items-center mt-3\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/avatar4.jpg') }}\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-2 d-flex flex-wrap align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Abdoulaye Diao</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Grand Yoff</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Valide</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"\">Voir tous
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/yellow-arrow-right.svg') }}\" alt=\"\" srcset=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
\t{% endif %}

{% endblock %}
", "main/index.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/main/index.html.twig");
    }
}
