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

/* installation/show.html.twig */
class __TwigTemplate_543d491abb6e58d749fce261c9e7f454 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "installation/show.html.twig", 1);
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

        echo "COSSUEL";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <style>
    #synthese_demande input[disabled] {
        background-color:#fff7e3;
        border: 1px solid #7a7b7c;
        color: black;
        font-weight:500;
    }
    </style>
    ";
        // line 13
        $context["action_demande"] = "Soumission";
        // line 14
        echo "    ";
        $context["link_liste"] = "app_installation_index";
        // line 15
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 15, $this->source); })()), "step", [], "any", false, false, false, 15) < 7)) {
            // line 16
            echo "        ";
            $context["action_demande"] = "Soumission";
            // line 17
            echo "        ";
            $context["link_liste"] = "app_installation_index";
            // line 18
            echo "    ";
        } elseif (((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 18, $this->source); })()), "step", [], "any", false, false, false, 18) == 7) || (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 18, $this->source); })()), "step", [], "any", false, false, false, 18) == 8))) {
            // line 19
            echo "        ";
            $context["action_demande"] = "Paiement";
            // line 20
            echo "        ";
            $context["link_liste"] = "app_installation_index2";
            // line 21
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 21, $this->source); })()), "step", [], "any", false, false, false, 21) == 9)) {
            // line 22
            echo "        ";
            $context["action_demande"] = "Validation";
            // line 23
            echo "        ";
            $context["link_liste"] = "app_installation_index3";
            // line 24
            echo "    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 26), "get", [0 => "page_liste_demande"], "method", true, true, false, 26) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "session", [], "any", false, false, false, 26), "get", [0 => "page_liste_demande"], "method", false, false, false, 26))) {
            // line 27
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "session", [], "any", false, false, false, 27), "get", [0 => "page_liste_demande"], "method", false, false, false, 27);
            // line 28
            echo "    ";
        }
        // line 29
        echo "
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["action_demande"]) || array_key_exists("action_demande", $context) ? $context["action_demande"] : (function () { throw new RuntimeError('Variable "action_demande" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " de demandes </span>
            </a>
        </header>
        <div class=\"row\">
        ";
        // line 37
        $context["offset"] = "offset-md-1";
        echo "            
        ";
        // line 38
        $context["badge_etat"] = "text-danger";
        // line 39
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 39, $this->source); })()), "step", [], "any", false, false, false, 39) == 7)) {
            // line 40
            echo "            ";
            $context["badge_etat"] = "text-danger";
            // line 41
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 41, $this->source); })()), "step", [], "any", false, false, false, 41) > 7)) {
            // line 42
            echo "            ";
            $context["badge_etat"] = "text-success";
            // line 43
            echo "        ";
        }
        // line 44
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 44, $this->source); })()), "html", null, true);
        echo " col-lg-10 mb-2  p-3\">

                <div class=\"\">
                    <nav class=\"navbar shadow bg-warning border border-dark my-2 mb-2 p-0\">
                        <div class=\"container-fluid ps-4\">
                            <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                                <div class=\"col\">
                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                        <use xlink:href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                    </svg>
                                    Détails de la demande 
                                </div>
                                <div class=\"col\" align=\"right\">
                                    ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 57, $this->source); })()), "step", [], "any", false, false, false, 57) >= 7)) {
            // line 58
            echo "                                        <span class=\"";
            echo twig_escape_filter($this->env, (isset($context["badge_etat"]) || array_key_exists("badge_etat", $context) ? $context["badge_etat"] : (function () { throw new RuntimeError('Variable "badge_etat" does not exist.', 58, $this->source); })()), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 58, $this->source); })()), "demandeCourante", [], "any", false, false, false, 58), "etat", [], "any", false, false, false, 58), "html", null, true);
            echo "]</span>
                                    ";
        } else {
            // line 60
            echo "                                        <span class=\"";
            echo twig_escape_filter($this->env, (isset($context["badge_etat"]) || array_key_exists("badge_etat", $context) ? $context["badge_etat"] : (function () { throw new RuntimeError('Variable "badge_etat" does not exist.', 60, $this->source); })()), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 60, $this->source); })()), "etat", [], "any", false, false, false, 60), "html", null, true);
            echo "]</span>
                                    ";
        }
        // line 62
        echo "                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class=\"\">
                            <div class=\"row\">
                            \t<fieldset id=\"synthese_demande\">
                                    ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 69, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 69, $this->source); })()), "createdBy", [], "any", false, false, false, 69)], "method", false, false, false, 69)) {
            // line 70
            echo "                                        ";
            $context["creator"] = twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 70, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 70, $this->source); })()), "createdBy", [], "any", false, false, false, 70)], "method", false, false, false, 70);
            // line 71
            echo "                                        <div align=\"left\" class=\"float-start border border-warning shadow p-2 fs-8 fw-light\">
                                            <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["creator"]) || array_key_exists("creator", $context) ? $context["creator"] : (function () { throw new RuntimeError('Variable "creator" does not exist.', 72, $this->source); })()), "nomComplet", [], "any", false, false, false, 72), "html", null, true);
            echo "</span></div>
                                            <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 73, $this->source); })()), "createdAt", [], "any", false, false, false, 73), "d-m-Y à H:i:s"), "html", null, true);
            echo "</span></div>
                                        </div>
                                    ";
        }
        // line 76
        echo "                                    <div align=\"right\">
                                        ";
        // line 77
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 77, $this->source); })()), "step", [], "any", false, false, false, 77) < 7)) {
            // line 78
            echo "                                            ";
            $context["link_edit"] = "app_installation_add";
            // line 79
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 79, $this->source); })()), "step", [], "any", false, false, false, 79) > 1)) {
                // line 80
                echo "                                                ";
                $context["link_edit"] = ("app_installation_add" . twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 80, $this->source); })()), "step", [], "any", false, false, false, 80));
                // line 81
                echo "                                            ";
            }
            // line 82
            echo "                                            ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PUBLIC") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
                // line 83
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 83, $this->source); })()), "gdroit_de", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83), 1 => "installation", 2 => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)], "method", false, false, false, 83)) {
                    // line 84
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link_edit"]) || array_key_exists("link_edit", $context) ? $context["link_edit"] : (function () { throw new RuntimeError('Variable "link_edit" does not exist.', 84, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
                    echo "\" class=\"next action-button btn btn-success btn my-3\">Finaliser la saisie</a>
                                                ";
                }
                // line 86
                echo "                                            ";
            }
            // line 87
            echo "                                        ";
        } else {
            // line 88
            echo "                                            <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-outline-warning btn my-2\">PDF Demande</a>
                                            ";
            // line 89
            if ((((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 89, $this->source); })()), "step", [], "any", false, false, false, 89) >= 7) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 89, $this->source); })()), "demandeCourante", [], "any", false, false, false, 89), "accepte", [], "any", false, false, false, 89)) && (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DAF")))) {
                // line 90
                echo "                                                <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_facturepdf", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 90, $this->source); })()), "demandeCourante", [], "any", false, false, false, 90), "installation", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Facture</a>
                                            ";
            }
            // line 92
            echo "                                            ";
            if (((((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 92, $this->source); })()), "step", [], "any", false, false, false, 92) == 7) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 92, $this->source); })()), "demandeCourante", [], "any", false, false, false, 92), "accepte", [], "any", false, false, false, 92)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 92, $this->source); })()), "demandeCourante", [], "any", false, false, false, 92), "rejet", [], "any", false, false, false, 92)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
                // line 93
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_accepte0", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 93, $this->source); })()), "demandeCourante", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-danger btn my-2 ms-5\">Rejeter Demande soumise</a>
                                                <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_accepte1", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 94, $this->source); })()), "demandeCourante", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-success btn my-2 ms-2\">Valider Demande soumise</a>
                                                ";
                // line 99
                echo "                                            ";
            }
            // line 100
            echo "                                            ";
            if ((((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 100, $this->source); })()), "step", [], "any", false, false, false, 100) == 7) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 100, $this->source); })()), "demandeCourante", [], "any", false, false, false, 100), "accepte", [], "any", false, false, false, 100)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE")))) {
                // line 101
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 101, $this->source); })()), "demandeCourante", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-success btn my-2 ms-5\">Enregistrer Paiement</a>
                                                ";
                // line 106
                echo "                                            ";
            }
            // line 107
            echo "                                        ";
        }
        // line 108
        echo "                                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link_liste"]) || array_key_exists("link_liste", $context) ? $context["link_liste"] : (function () { throw new RuntimeError('Variable "link_liste" does not exist.', 108, $this->source); })()));
        echo "\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour à la liste</a>
                                    </div>                                
                                ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 110, $this->source); })()), "demandeCourante", [], "any", false, false, false, 110)) {
            // line 111
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 111, $this->source); })()), "demandeCourante", [], "any", false, false, false, 111), "rejet", [], "any", false, false, false, 111)) {
                // line 112
                echo "                                        <div class=\"alert alert-danger py-2 fs-6\"><span class=\"text-danger\">Demande rejetée:  </span> <span class=\"fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 112, $this->source); })()), "demandeCourante", [], "any", false, false, false, 112), "motifRejet", [], "any", false, false, false, 112), "html", null, true);
                echo "</span></div>
                                    ";
            }
            // line 114
            echo "                                    <div class=\"card mb-2\">
                                        <h2 class=\"fs-title\">Puissance demandée et tarif ";
            // line 115
            if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 115, $this->source); })()), "demandecourante", [], "any", false, false, false, 115) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 115, $this->source); })()), "demandecourante", [], "any", false, false, false, 115), "numeroPassage", [], "any", false, false, false, 115) == 2))) {
                echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
            }
            // line 116
            echo "                                            ";
            if ((((0 && (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 116, $this->source); })()), "step", [], "any", false, false, false, 116) >= 7)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 116, $this->source); })()), "demandeCourante", [], "any", false, false, false, 116), "numeroPassage", [], "any", false, false, false, 116) == 1)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")))) {
                // line 117
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_clone", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 117, $this->source); })()), "id", [], "any", false, false, false, 117)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-warning py-0 border-dark btn ms-5 float-end\">
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                                    <use xlink:href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#files"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                Cloner la Demande</a>
                                            ";
            }
            // line 123
            echo "                                        </h2>
                                        <div class=\"row\">
                                            <hr class=\"mb-3\" />
                                            <div class=\"col-lg-3\">
                                                <label >Numéro Demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 128, $this->source); })()), "demandeCourante", [], "any", false, false, false, 128), "numero", [], "any", false, false, false, 128), "html", null, true);
            echo "\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Date Demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 132
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 132, $this->source); })()), "demandeCourante", [], "any", false, false, false, 132), "dateCreation", [], "any", false, false, false, 132), "d-m-Y"), "html", null, true);
            echo "\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Puissance demandée</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 136, $this->source); })()), "demandeCourante", [], "any", false, false, false, 136), "puissance", [], "any", false, false, false, 136), "html", null, true);
            echo " kW\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Cout de la demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 140, $this->source); })()), "demandeCourante", [], "any", false, false, false, 140), "cout", [], "any", false, false, false, 140), "html", null, true);
            echo " FCFA\">
                                            </div>
                                        </div>  
                                    </div>
                                ";
        }
        // line 145
        echo "                                ";
        // line 146
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">
                                    Données de base de la demande
                                    ";
        // line 149
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 150
            echo "                                        <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit1", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 150, $this->source); })()), "id", [], "any", false, false, false, 150)]), "html", null, true);
            echo "\" class=\" pt fs-8 text-dark\">
                                        <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                            <use xlink:href=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                        </svg>
                                        </a>
                                    ";
        }
        // line 156
        echo "                                    </h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_usage\" >Usage Installation</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 161, $this->source); })()), "usages", [], "any", false, false, false, 161), "html", null, true);
        echo "\" id=\"form_usage\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 165
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 165, $this->source); })()), "alimente", [], "any", false, false, false, 165)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_alimente\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_compteur\" >Numéro Compteur</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 169, $this->source); })()), "compteur", [], "any", false, false, false, 169), "html", null, true);
        echo "\" id=\"form_compteur\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 173, $this->source); })()), "abonnement", [], "any", false, false, false, 173), "html", null, true);
        echo "\" id=\"form_abonnement\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 177, $this->source); })()), "grstReseau", [], "any", false, false, false, 177), "html", null, true);
        echo "\" id=\"form_grstReseau\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_localite\" >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 182, $this->source); })()), "localite", [], "any", false, false, false, 182), "html", null, true);
        echo "\" id=\"form_localite\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_adresse\" >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 186, $this->source); })()), "adresse", [], "any", false, false, false, 186), "html", null, true);
        echo "\" id=\"form_adresse\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_habitation\" >Complément Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 190, $this->source); })()), "habitation", [], "any", false, false, false, 190), "html", null, true);
        echo "\" id=\"form_habitation\">
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <label for=\"form_lattitude\" >Latitude</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 194, $this->source); })()), "lattitude", [], "any", false, false, false, 194), "html", null, true);
        echo "\" id=\"form_lattitude\">
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <label for=\"form_longitude\" >Longitude</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 198, $this->source); })()), "longitude", [], "any", false, false, false, 198), "html", null, true);
        echo "\" id=\"form_longitude\">
                                        </div>
                                    </div>
                                </div>
                                
                                ";
        // line 204
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 204, $this->source); })()), "typeConstruction", [], "any", false, false, false, 204)) {
            // line 205
            echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Caractéristiques du site</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_collectif collectif1\" >Bien Collectif ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 211
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 211, $this->source); })()), "collectif", [], "any", false, false, false, 211)) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "\" id=\"form_collectif\">
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            <label for=\"form_nomSite\" >Nom du site</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 215, $this->source); })()), "nomSite", [], "any", false, false, false, 215), "html", null, true);
            echo "\" id=\"form_nomSite\">
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            <label for=\"form_logement\" >Nombre de logements</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 219, $this->source); })()), "logement", [], "any", false, false, false, 219), "html", null, true);
            echo "\" id=\"form_logement\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-6\">
                                            <label for=\"form_typeConstruction\" >Type de construction</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 224, $this->source); })()), "typeConstruction", [], "any", false, false, false, 224), "nom", [], "any", false, false, false, 224), "html", null, true);
            echo "\" id=\"form_typeConstruction\">
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1\">
                                            <label for=\"form_niveau\" >Nombre de niveaux</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 228, $this->source); })()), "niveau", [], "any", false, false, false, 228), "html", null, true);
            echo "\" id=\"form_niveau\">
                                        </div>
                                        <div class=\"col-lg-6 typeConstruction3\">
                                            <label for=\"form_activite\" >Activités</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 232, $this->source); })()), "activite", [], "any", false, false, false, 232), "html", null, true);
            echo "\" id=\"form_activite\">
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                            <label for=\"form_priece\" >Nombre de pièces</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 236, $this->source); })()), "priece", [], "any", false, false, false, 236), "html", null, true);
            echo "\" id=\"form_priece\">
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        // line 241
        echo "
                                ";
        // line 243
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 243, $this->source); })()), "natureTravaux", [], "any", false, false, false, 243)) {
            // line 244
            echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Caractéristiques de l'installation</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                            <label for=\"form_natureTravaux\" >Nature des travaux</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 250
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 250, $this->source); })()), "natureTravaux", [], "any", false, false, false, 250), "html", null, true);
            echo "\" id=\"form_natureTravaux\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neuf15\" >Neufs_15</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 254, $this->source); })()), "neuf15", [], "any", false, false, false, 254), "html", null, true);
            echo "\" id=\"form_neufs_15\">
                                            <label for=\"form_existant15\" >Existants_15</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 256
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 256, $this->source); })()), "existant15", [], "any", false, false, false, 256), "html", null, true);
            echo "\" id=\"form_existant15\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neuf25\" >Neufs_25</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 260, $this->source); })()), "neuf25", [], "any", false, false, false, 260), "html", null, true);
            echo "\" id=\"form_neuf25\">
                                            <label for=\"form_existant25\" >Existants_25</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 262, $this->source); })()), "existant25", [], "any", false, false, false, 262), "html", null, true);
            echo "\" id=\"form_existant25\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neufAutre\" >Neufs_Autres</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 266, $this->source); })()), "neufAutre", [], "any", false, false, false, 266), "html", null, true);
            echo "\" id=\"form_neufAutre\">
                                            <label for=\"form_existantAutre\" >Existants_Autres</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 268
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 268, $this->source); })()), "existantAutre", [], "any", false, false, false, 268), "html", null, true);
            echo "\" id=\"form_existantAutre\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4 intervenantAutre1\">
                                            <label for=\"form_intervenantAutre\" >Autres intervenants ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 273, $this->source); })()), "intervenantAutre", [], "any", false, false, false, 273), "html", null, true);
            echo "\" id=\"form_intervenantAutre\">
                                        </div>
                                        <div class=\"col-lg-8 intervenantAutre1\">
                                            <label for=\"form_intervenant\" >Intervenants</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 277, $this->source); })()), "intervenant", [], "any", false, false, false, 277), "html", null, true);
            echo "\" id=\"form_intervenant\">
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        // line 282
        echo "
                                ";
        // line 284
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 284, $this->source); })()), "electricien", [], "any", false, false, false, 284)) {
            // line 285
            echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">
                                    Informations sur l'électricien
                                    ";
            // line 288
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 289
                echo "                                        <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit2", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 289, $this->source); })()), "id", [], "any", false, false, false, 289)]), "html", null, true);
                echo "\" class=\" pt fs-8 text-dark\">
                                        <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                            <use xlink:href=\"";
                // line 291
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                        </svg>
                                        </a>
                                    ";
            }
            // line 295
            echo "                                    </h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                            <label >Nom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 300
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 300, $this->source); })()), "electricien", [], "any", false, false, false, 300), "nom", [], "any", false, false, false, 300), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-5\">
                                            <label >Prénom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 304
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 304, $this->source); })()), "electricien", [], "any", false, false, false, 304), "prenom", [], "any", false, false, false, 304), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 308
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 308, $this->source); })()), "electricien", [], "any", false, false, false, 308), "localite", [], "any", false, false, false, 308), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 312
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 312, $this->source); })()), "electricien", [], "any", false, false, false, 312), "adresse", [], "any", false, false, false, 312), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Téléphone</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 316, $this->source); })()), "electricien", [], "any", false, false, false, 316), "telephone", [], "any", false, false, false, 316), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Email</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 320
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 320, $this->source); })()), "electricien", [], "any", false, false, false, 320), "email", [], "any", false, false, false, 320), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Type de pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 324
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 324, $this->source); })()), "electricien", [], "any", false, false, false, 324), "typePiece", [], "any", false, false, false, 324), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Numéro Pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 328
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 328, $this->source); })()), "electricien", [], "any", false, false, false, 328), "numPiece", [], "any", false, false, false, 328), "html", null, true);
            echo "\">
                                        </div>

                                        <div class=\"col-lg-4 mt-2\">
                                        <label >Scan CNI Electricien</label><br />
                                        ";
            // line 333
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 333, $this->source); })()), "PJElectricien", [], "any", false, false, false, 333)) {
                // line 334
                echo "                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
                // line 335
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                <span onclick=\"window.open('";
                // line 337
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 337, $this->source); })()), "id", [], "any", false, false, false, 337), "type" => "electricien"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 337, $this->source); })()), "PJElectricien", [], "any", false, false, false, 337), "fichier", [], "any", false, false, false, 337), "html", null, true);
                echo " </span>
                                        ";
            } else {
                // line 339
                echo "                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        ";
            }
            // line 341
            echo "                                        </div>

                                    </div>
                                </div>
                                ";
        }
        // line 345
        echo "                                

                                ";
        // line 348
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 348, $this->source); })()), "proprietaire", [], "any", false, false, false, 348)) {
            // line 349
            echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">
                                    Informations sur le propriétaire de l'installation
                                    ";
            // line 352
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 353
                echo "                                        <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit3", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 353, $this->source); })()), "id", [], "any", false, false, false, 353)]), "html", null, true);
                echo "\" class=\" pt fs-8 text-dark\">
                                        <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                            <use xlink:href=\"";
                // line 355
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                        </svg>
                                        </a>
                                    ";
            }
            // line 359
            echo "                                    </h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                            <label >Nom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 364
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 364, $this->source); })()), "proprietaire", [], "any", false, false, false, 364), "nom", [], "any", false, false, false, 364), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-5\">
                                            <label >Prénom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 368
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 368, $this->source); })()), "proprietaire", [], "any", false, false, false, 368), "prenom", [], "any", false, false, false, 368), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 372
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 372, $this->source); })()), "proprietaire", [], "any", false, false, false, 372), "localite", [], "any", false, false, false, 372), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 376
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 376, $this->source); })()), "proprietaire", [], "any", false, false, false, 376), "adresse", [], "any", false, false, false, 376), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Téléphone</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 380
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 380, $this->source); })()), "proprietaire", [], "any", false, false, false, 380), "telephone", [], "any", false, false, false, 380), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Email</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 384
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 384, $this->source); })()), "proprietaire", [], "any", false, false, false, 384), "email", [], "any", false, false, false, 384), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Type de pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 388
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 388, $this->source); })()), "proprietaire", [], "any", false, false, false, 388), "typePiece", [], "any", false, false, false, 388), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Numéro Pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 392
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 392, $this->source); })()), "proprietaire", [], "any", false, false, false, 392), "numPiece", [], "any", false, false, false, 392), "html", null, true);
            echo "\">
                                        </div>

                                        <div class=\"col-lg-4 mt-2\">
                                            <label >Scan CNI Propriétaire</label><br />
                                        ";
            // line 397
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 397, $this->source); })()), "PJProprietaire", [], "any", false, false, false, 397)) {
                // line 398
                echo "                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
                // line 399
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                <span onclick=\"window.open('";
                // line 401
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 401, $this->source); })()), "id", [], "any", false, false, false, 401), "type" => "proprietaire"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 401, $this->source); })()), "PJProprietaire", [], "any", false, false, false, 401), "fichier", [], "any", false, false, false, 401), "html", null, true);
                echo " </span>
                                        ";
            } else {
                // line 403
                echo "                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        ";
            }
            // line 405
            echo "                                        </div>

                                        <div class=\"col-lg-4 mt-2\">
                                        <label >";
            // line 408
            if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 408, $this->source); })()), "usages", [], "any", false, false, false, 408) != "erp_ert")) {
                echo "Titre de propriété";
            } else {
                echo "Documents Techniques";
            }
            echo "</label><br />
                                        ";
            // line 409
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 409, $this->source); })()), "PJDossierTechnique", [], "any", false, false, false, 409)) {
                // line 410
                echo "                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
                // line 411
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                <span onclick=\"window.open('";
                // line 413
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 413, $this->source); })()), "id", [], "any", false, false, false, 413), "type" => "dosstech"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 413, $this->source); })()), "PJDossierTechnique", [], "any", false, false, false, 413), "fichier", [], "any", false, false, false, 413), "html", null, true);
                echo " </span>
                                        ";
            } else {
                // line 415
                echo "                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        ";
            }
            // line 417
            echo "                                        </div>

                                    </div>
                                ";
        }
        // line 421
        echo "                                </div>
                                </fieldset>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 431
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 432
        echo "<script>
    \$(document).ready(function() {

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        optSel=\$('#form_alimente'); valSel=optSel.val();
        if (valSel==\"Oui\") {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (valSel==\"Oui\") {
            \$('.collectif1').show(); \$('.collectif0').hide();
        }
        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        optSel=\$('#form_typeConstruction');
        valSel=optSel.val();
        if (valSel == \"Maison\" || valSel == \"IGH (Immeuble de Grande Hauteur)\") {
            \$('.typeConstruction1').show(); 
        }
        else if (valSel == \"Appartement\" || valSel == \"Foyer Logement\" || valSel == \"Dépendance\") {
            \$('.typeConstruction2').show();
        }
        else if (valSel == \"Etablissement Public\") {
            \$('.typeConstruction3').show(); 
        }

        // Bloc 3
        \$('.intervenantAutre1').hide(); \$('.natureTravaux1').hide();
        optSel=\$('#form_intervenantAutre');
        valSel=optSel.val();
        if (valSel==\"Oui\") {
            \$('.intervenantAutre1').show(); 
        }
        optSel=\$('#form_natureTravaux');
        valSel=optSel.val();
        if (valSel == \"Rénovation Partielle\") {
            \$('.natureTravaux1').show(); 
        }

        // Bloc 4

        // Bloc 5

    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "installation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  939 => 432,  929 => 431,  911 => 421,  905 => 417,  901 => 415,  894 => 413,  889 => 411,  886 => 410,  884 => 409,  876 => 408,  871 => 405,  867 => 403,  860 => 401,  855 => 399,  852 => 398,  850 => 397,  842 => 392,  835 => 388,  828 => 384,  821 => 380,  814 => 376,  807 => 372,  800 => 368,  793 => 364,  786 => 359,  779 => 355,  773 => 353,  771 => 352,  766 => 349,  763 => 348,  759 => 345,  752 => 341,  748 => 339,  741 => 337,  736 => 335,  733 => 334,  731 => 333,  723 => 328,  716 => 324,  709 => 320,  702 => 316,  695 => 312,  688 => 308,  681 => 304,  674 => 300,  667 => 295,  660 => 291,  654 => 289,  652 => 288,  647 => 285,  644 => 284,  641 => 282,  633 => 277,  626 => 273,  618 => 268,  613 => 266,  606 => 262,  601 => 260,  594 => 256,  589 => 254,  582 => 250,  574 => 244,  571 => 243,  568 => 241,  560 => 236,  553 => 232,  546 => 228,  539 => 224,  531 => 219,  524 => 215,  513 => 211,  505 => 205,  502 => 204,  494 => 198,  487 => 194,  480 => 190,  473 => 186,  466 => 182,  458 => 177,  451 => 173,  444 => 169,  433 => 165,  426 => 161,  419 => 156,  412 => 152,  406 => 150,  404 => 149,  399 => 146,  397 => 145,  389 => 140,  382 => 136,  375 => 132,  368 => 128,  361 => 123,  354 => 119,  348 => 117,  345 => 116,  341 => 115,  338 => 114,  332 => 112,  329 => 111,  327 => 110,  321 => 108,  318 => 107,  315 => 106,  310 => 101,  307 => 100,  304 => 99,  300 => 94,  295 => 93,  292 => 92,  286 => 90,  284 => 89,  279 => 88,  276 => 87,  273 => 86,  267 => 84,  264 => 83,  261 => 82,  258 => 81,  255 => 80,  252 => 79,  249 => 78,  247 => 77,  244 => 76,  238 => 73,  234 => 72,  231 => 71,  228 => 70,  226 => 69,  217 => 62,  209 => 60,  201 => 58,  199 => 57,  191 => 52,  179 => 44,  176 => 43,  173 => 42,  170 => 41,  167 => 40,  164 => 39,  162 => 38,  158 => 37,  151 => 33,  145 => 29,  142 => 28,  139 => 27,  137 => 26,  134 => 25,  131 => 24,  128 => 23,  125 => 22,  122 => 21,  119 => 20,  116 => 19,  113 => 18,  110 => 17,  107 => 16,  104 => 15,  101 => 14,  99 => 13,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <style>
    #synthese_demande input[disabled] {
        background-color:#fff7e3;
        border: 1px solid #7a7b7c;
        color: black;
        font-weight:500;
    }
    </style>
    {% set action_demande = \"Soumission\" %}
    {% set link_liste = 'app_installation_index' %}
    {% if (installation.step < 7) %}
        {% set action_demande = \"Soumission\" %}
        {% set link_liste = 'app_installation_index' %}
    {% elseif (installation.step == 7 or installation.step == 8) %}
        {% set action_demande = \"Paiement\" %}
        {% set link_liste = 'app_installation_index2' %}
    {% elseif (installation.step == 9) %}
        {% set action_demande = \"Validation\" %}
        {% set link_liste = 'app_installation_index3' %}
    {% endif %}

    {% if app.session.get('page_liste_demande') is defined and app.session.get('page_liste_demande') %}
        {% set link_liste = app.session.get('page_liste_demande') %}
    {% endif %}

    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">{{ action_demande }} de demandes </span>
            </a>
        </header>
        <div class=\"row\">
        {% set offset=\"offset-md-1\" %}            
        {% set badge_etat = \"text-danger\" %}
        {% if installation.step == 7 %}
            {% set badge_etat = \"text-danger\" %}
        {% elseif installation.step > 7 %}
            {% set badge_etat = \"text-success\" %}
        {% endif %}
            <div class=\"{{ offset }} col-lg-10 mb-2  p-3\">

                <div class=\"\">
                    <nav class=\"navbar shadow bg-warning border border-dark my-2 mb-2 p-0\">
                        <div class=\"container-fluid ps-4\">
                            <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                                <div class=\"col\">
                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#lightbulb') }}\"></use>
                                    </svg>
                                    Détails de la demande 
                                </div>
                                <div class=\"col\" align=\"right\">
                                    {% if installation.step>=7 %}
                                        <span class=\"{{ badge_etat }}\">[{{ installation.demandeCourante.etat }}]</span>
                                    {% else %}
                                        <span class=\"{{ badge_etat }}\">[{{ installation.etat }}]</span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class=\"\">
                            <div class=\"row\">
                            \t<fieldset id=\"synthese_demande\">
                                    {% if tools.getUtilisateur(installation.createdBy) %}
                                        {% set creator = tools.getUtilisateur(installation.createdBy) %}
                                        <div align=\"left\" class=\"float-start border border-warning shadow p-2 fs-8 fw-light\">
                                            <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">{{creator.nomComplet}}</span></div>
                                            <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">{{installation.createdAt|date(\"d-m-Y à H:i:s\")}}</span></div>
                                        </div>
                                    {% endif %}
                                    <div align=\"right\">
                                        {% if installation.step<7 %}
                                            {% set link_edit = 'app_installation_add' %}
                                            {% if installation.step > 1 %}
                                                {% set link_edit = 'app_installation_add' ~ installation.step %}
                                            {% endif %}
                                            {% if is_granted('ROLE_PUBLIC') or is_granted('ROLE_RFO') %}
                                                {% if tools.gdroit_de(app.user.id, 'installation', installation.id ) %}
                                                <a href=\"{{ path(link_edit, {'id': installation.id}) }}\" class=\"next action-button btn btn-success btn my-3\">Finaliser la saisie</a>
                                                {% endif %}
                                            {% endif %}
                                        {% else %}
                                            <a target=\"_blank\" href=\"{{ path('app_installation_showpdf', {'id': installation.id}) }}\" class=\"next action-button btn btn-outline-warning btn my-2\">PDF Demande</a>
                                            {% if installation.step>=7 and installation.demandeCourante.accepte and (is_granted('ROLE_ACCUEIL') or  is_granted('ROLE_RFO') or is_granted('ROLE_CAISSIER') or  is_granted('ROLE_COMPTABLE') or  is_granted('ROLE_DAF')) %}
                                                <a target=\"_blank\" href=\"{{ path('app_installation_facturepdf', {'id': installation.demandeCourante.installation.id}) }}\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Facture</a>
                                            {% endif %}
                                            {% if installation.step==7 and not installation.demandeCourante.accepte and not installation.demandeCourante.rejet and (is_granted('ROLE_RFO')) %}
                                                <a href=\"{{ path('app_installation_accepte0', {'id': installation.demandeCourante.id}) }}\" class=\"next action-button btn btn-danger btn my-2 ms-5\">Rejeter Demande soumise</a>
                                                <a href=\"{{ path('app_installation_accepte1', {'id': installation.demandeCourante.id}) }}\" class=\"next action-button btn btn-success btn my-2 ms-2\">Valider Demande soumise</a>
                                                {# {% elseif installation.step==8 %}
                                                <a href=\"{{ path('app_paiement_add2', {'id': installation.demandeCourante.id}) }}\" class=\"next action-button btn btn-success btn my-3 ms-5\">Confirmer Paiement</a>
                                                {% elseif installation.step==9 %}
                                                <a href=\"#\" class=\"next action-button btn btn-success btn my-3 ms-5\">Valider la demande</a> #}
                                            {% endif %}
                                            {% if installation.step==7 and installation.demandeCourante.accepte and (is_granted('ROLE_CAISSIER') or is_granted(\"ROLE_COMPTABLE\")) %}
                                                <a href=\"{{ path('app_paiement_add', {'id': installation.demandeCourante.id}) }}\" class=\"next action-button btn btn-success btn my-2 ms-5\">Enregistrer Paiement</a>
                                                {# {% elseif installation.step==8 %}
                                                <a href=\"{{ path('app_paiement_add2', {'id': installation.demandeCourante.id}) }}\" class=\"next action-button btn btn-success btn my-3 ms-5\">Confirmer Paiement</a>
                                                {% elseif installation.step==9 %}
                                                <a href=\"#\" class=\"next action-button btn btn-success btn my-3 ms-5\">Valider la demande</a> #}
                                            {% endif %}
                                        {% endif %}
                                        <a href=\"{{ path(link_liste) }}\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour à la liste</a>
                                    </div>                                
                                {% if installation.demandeCourante %}
                                    {% if installation.demandeCourante.rejet %}
                                        <div class=\"alert alert-danger py-2 fs-6\"><span class=\"text-danger\">Demande rejetée:  </span> <span class=\"fs-7\">{{installation.demandeCourante.motifRejet}}</span></div>
                                    {% endif %}
                                    <div class=\"card mb-2\">
                                        <h2 class=\"fs-title\">Puissance demandée et tarif {% if installation.demandecourante and installation.demandecourante.numeroPassage==2 %} <span class=\"badge bg-danger\">2e VISITE</span> {% endif %}
                                            {% if 0 and installation.step>=7 and installation.demandeCourante.numeroPassage==1 and (is_granted('ROLE_ACCUEIL') or is_granted('ROLE_RFO')) %}
                                                <a href=\"{{ path('app_installation_clone', {'id': installation.id}) }}\" class=\"next action-button btn btn-warning py-0 border-dark btn ms-5 float-end\">
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#files') }}\"></use>
                                                </svg>
                                                Cloner la Demande</a>
                                            {% endif %}
                                        </h2>
                                        <div class=\"row\">
                                            <hr class=\"mb-3\" />
                                            <div class=\"col-lg-3\">
                                                <label >Numéro Demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"{{ installation.demandeCourante.numero }}\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Date Demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"{{ installation.demandeCourante.dateCreation | date('d-m-Y') }}\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Puissance demandée</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"{{ installation.demandeCourante.puissance }} kW\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Cout de la demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"{{ installation.demandeCourante.cout }} FCFA\">
                                            </div>
                                        </div>  
                                    </div>
                                {% endif %}
                                {# BLOC 1 #}
                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">
                                    Données de base de la demande
                                    {% if (is_granted('ROLE_ADMIN')) %}
                                        <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{path('app_installation_edit1', {'id': installation.id})}}\" class=\" pt fs-8 text-dark\">
                                        <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                        </svg>
                                        </a>
                                    {% endif %}
                                    </h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_usage\" >Usage Installation</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.usages }}\" id=\"form_usage\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{% if installation.alimente %}Oui{% else %}Non{% endif %}\" id=\"form_alimente\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_compteur\" >Numéro Compteur</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.compteur }}\" id=\"form_compteur\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.abonnement }}\" id=\"form_abonnement\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.grstReseau }}\" id=\"form_grstReseau\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_localite\" >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.localite }}\" id=\"form_localite\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_adresse\" >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.adresse }}\" id=\"form_adresse\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_habitation\" >Complément Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.habitation }}\" id=\"form_habitation\">
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <label for=\"form_lattitude\" >Latitude</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.lattitude }}\" id=\"form_lattitude\">
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <label for=\"form_longitude\" >Longitude</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.longitude }}\" id=\"form_longitude\">
                                        </div>
                                    </div>
                                </div>
                                
                                {# BLOC 2 #}
                                {% if installation.typeConstruction %}
                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Caractéristiques du site</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_collectif collectif1\" >Bien Collectif ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{% if installation.collectif %}Oui{% else %}Non{% endif %}\" id=\"form_collectif\">
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            <label for=\"form_nomSite\" >Nom du site</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.nomSite }}\" id=\"form_nomSite\">
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            <label for=\"form_logement\" >Nombre de logements</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.logement }}\" id=\"form_logement\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-6\">
                                            <label for=\"form_typeConstruction\" >Type de construction</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.typeConstruction.nom }}\" id=\"form_typeConstruction\">
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1\">
                                            <label for=\"form_niveau\" >Nombre de niveaux</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.niveau }}\" id=\"form_niveau\">
                                        </div>
                                        <div class=\"col-lg-6 typeConstruction3\">
                                            <label for=\"form_activite\" >Activités</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.activite }}\" id=\"form_activite\">
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                            <label for=\"form_priece\" >Nombre de pièces</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.priece }}\" id=\"form_priece\">
                                        </div>
                                    </div>
                                </div>
                                {% endif %}

                                {# BLOC 3 #}
                                {% if installation.natureTravaux %}
                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Caractéristiques de l'installation</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                            <label for=\"form_natureTravaux\" >Nature des travaux</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.natureTravaux }}\" id=\"form_natureTravaux\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neuf15\" >Neufs_15</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.neuf15 }}\" id=\"form_neufs_15\">
                                            <label for=\"form_existant15\" >Existants_15</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.existant15 }}\" id=\"form_existant15\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neuf25\" >Neufs_25</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.neuf25 }}\" id=\"form_neuf25\">
                                            <label for=\"form_existant25\" >Existants_25</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.existant25 }}\" id=\"form_existant25\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neufAutre\" >Neufs_Autres</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.neufAutre }}\" id=\"form_neufAutre\">
                                            <label for=\"form_existantAutre\" >Existants_Autres</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.existantAutre }}\" id=\"form_existantAutre\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4 intervenantAutre1\">
                                            <label for=\"form_intervenantAutre\" >Autres intervenants ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.intervenantAutre }}\" id=\"form_intervenantAutre\">
                                        </div>
                                        <div class=\"col-lg-8 intervenantAutre1\">
                                            <label for=\"form_intervenant\" >Intervenants</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.intervenant }}\" id=\"form_intervenant\">
                                        </div>
                                    </div>
                                </div>
                                {% endif %}

                                {# BLOC 4 #}
                                {% if installation.electricien %}
                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">
                                    Informations sur l'électricien
                                    {% if (is_granted('ROLE_ADMIN')) %}
                                        <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{path('app_installation_edit2', {'id': installation.id})}}\" class=\" pt fs-8 text-dark\">
                                        <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                        </svg>
                                        </a>
                                    {% endif %}
                                    </h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                            <label >Nom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.electricien.nom }}\">
                                        </div>
                                        <div class=\"col-lg-5\">
                                            <label >Prénom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.electricien.prenom }}\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.electricien.localite }}\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.electricien.adresse }}\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Téléphone</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.electricien.telephone }}\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Email</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.electricien.email }}\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Type de pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.electricien.typePiece }}\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Numéro Pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.electricien.numPiece }}\">
                                        </div>

                                        <div class=\"col-lg-4 mt-2\">
                                        <label >Scan CNI Electricien</label><br />
                                        {% if installation.PJElectricien %}
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                                                </svg>
                                                <span onclick=\"window.open('{{path('app_installation_downloadpj', {'id': installation.id, 'type':'electricien'})}}')\" class=\"text-success pt fs-7\">{{installation.PJElectricien.fichier}} </span>
                                        {% else %}
                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        {% endif %}
                                        </div>

                                    </div>
                                </div>
                                {% endif %}                                

                                {# BLOC 5 #}
                                {% if installation.proprietaire %}
                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">
                                    Informations sur le propriétaire de l'installation
                                    {% if (is_granted('ROLE_ADMIN')) %}
                                        <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{path('app_installation_edit3', {'id': installation.id})}}\" class=\" pt fs-8 text-dark\">
                                        <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                        </svg>
                                        </a>
                                    {% endif %}
                                    </h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                            <label >Nom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.nom }}\">
                                        </div>
                                        <div class=\"col-lg-5\">
                                            <label >Prénom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.prenom }}\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.localite }}\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.adresse }}\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Téléphone</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.telephone }}\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Email</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.email }}\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Type de pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.typePiece }}\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Numéro Pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.proprietaire.numPiece }}\">
                                        </div>

                                        <div class=\"col-lg-4 mt-2\">
                                            <label >Scan CNI Propriétaire</label><br />
                                        {% if installation.PJProprietaire %}
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                                                </svg>
                                                <span onclick=\"window.open('{{path('app_installation_downloadpj', {'id': installation.id, 'type':'proprietaire'})}}')\" class=\"text-success pt fs-7\">{{installation.PJProprietaire.fichier}} </span>
                                        {% else %}
                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        {% endif %}
                                        </div>

                                        <div class=\"col-lg-4 mt-2\">
                                        <label >{% if installation.usages!='erp_ert' %}Titre de propriété{% else %}Documents Techniques{% endif %}</label><br />
                                        {% if installation.PJDossierTechnique %}
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                                                </svg>
                                                <span onclick=\"window.open('{{path('app_installation_downloadpj', {'id': installation.id, 'type':'dosstech'})}}')\" class=\"text-success pt fs-7\">{{installation.PJDossierTechnique.fichier}} </span>
                                        {% else %}
                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        {% endif %}
                                        </div>

                                    </div>
                                {% endif %}
                                </div>
                                </fieldset>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
<script>
    \$(document).ready(function() {

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        optSel=\$('#form_alimente'); valSel=optSel.val();
        if (valSel==\"Oui\") {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (valSel==\"Oui\") {
            \$('.collectif1').show(); \$('.collectif0').hide();
        }
        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        optSel=\$('#form_typeConstruction');
        valSel=optSel.val();
        if (valSel == \"Maison\" || valSel == \"IGH (Immeuble de Grande Hauteur)\") {
            \$('.typeConstruction1').show(); 
        }
        else if (valSel == \"Appartement\" || valSel == \"Foyer Logement\" || valSel == \"Dépendance\") {
            \$('.typeConstruction2').show();
        }
        else if (valSel == \"Etablissement Public\") {
            \$('.typeConstruction3').show(); 
        }

        // Bloc 3
        \$('.intervenantAutre1').hide(); \$('.natureTravaux1').hide();
        optSel=\$('#form_intervenantAutre');
        valSel=optSel.val();
        if (valSel==\"Oui\") {
            \$('.intervenantAutre1').show(); 
        }
        optSel=\$('#form_natureTravaux');
        valSel=optSel.val();
        if (valSel == \"Rénovation Partielle\") {
            \$('.natureTravaux1').show(); 
        }

        // Bloc 4

        // Bloc 5

    });
</script>
{% endblock %}
", "installation/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/show.html.twig");
    }
}