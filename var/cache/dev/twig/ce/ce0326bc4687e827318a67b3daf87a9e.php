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

/* paiement/show.html.twig */
class __TwigTemplate_f4d8c6bf01f02b27a096ee527e6f528a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paiement/show.html.twig", 1);
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
        echo "    <style>
    input[disabled] {
        background-color:#f1f5f9;
        border: 1px solid #7a7b7c;
        color: gray;
        font-weight:normal;
    }
    #synthese_demande .card {
        background-color:#ffffff;
    }
    #synthese_demande label, #synthese_demande .fs-title {
        color:gray;
        font-weight:normal;
    }

    #paiement_demande .card {
        background-color:#fff;
        box-shadow: 0 0 0 2px white, 0 0 0 3px #000
    }
    
    </style>
    ";
        // line 25
        $context["action_demande"] = "Paiement";
        // line 26
        echo "    ";
        $context["link_liste"] = "app_installation_index2";
        // line 27
        echo "
    ";
        // line 28
        $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 28, $this->source); })()), "demande", [], "any", false, false, false, 28);
        // line 29
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 29, $this->source); })()), "installation", [], "any", false, false, false, 29);
        // line 30
        echo "    ";
        $context["remboursement"] = twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 30, $this->source); })()), "remboursement", [], "any", false, false, false, 30);
        // line 31
        echo "    
    ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 32, $this->source); })()), "installation", [], "any", false, false, false, 32), "step", [], "any", false, false, false, 32) == 9)) {
            // line 33
            echo "        ";
            $context["link_liste"] = "app_installation_index3";
            // line 34
            echo "    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 36), "get", [0 => "page_liste_demande"], "method", true, true, false, 36) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "session", [], "any", false, false, false, 36), "get", [0 => "page_liste_demande"], "method", false, false, false, 36))) {
            // line 37
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "session", [], "any", false, false, false, 37), "get", [0 => "page_liste_demande"], "method", false, false, false, 37);
            // line 38
            echo "    ";
        }
        // line 39
        echo "

    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["action_demande"]) || array_key_exists("action_demande", $context) ? $context["action_demande"] : (function () { throw new RuntimeError('Variable "action_demande" does not exist.', 44, $this->source); })()), "html", null, true);
        echo " de demandes </span>
            </a>
        </header>

        <div class=\"container\">
            <nav class=\"navbar shadow bg-warning border border-dark mt-2 p-0\">
                <div class=\"container-fluid ps-4\">
                        <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                            <div class=\"col\">
                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                </svg>
                                Détails de la demande 
                            </div>
                            <div class=\"col\" align=\"right\">
                                <span class=\"text-success\">[";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 59, $this->source); })()), "demandeCourante", [], "any", false, false, false, 59), "etat", [], "any", false, false, false, 59), "html", null, true);
        echo "]</span>
                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 69, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 69, $this->source); })()), "createdBy", [], "any", false, false, false, 69)], "method", false, false, false, 69)) {
            // line 70
            echo "                    ";
            $context["creator"] = twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 70, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 70, $this->source); })()), "createdBy", [], "any", false, false, false, 70)], "method", false, false, false, 70);
            // line 71
            echo "                    <div align=\"left\" class=\"float-start mt-2 border border-warning shadow p-2 fs-8 fw-light\">
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
        echo "                <div align=\"right\">
                    <a target=\"_blank\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 77, $this->source); })()), "installation", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Demande</a>
                    
                    ";
        // line 79
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DAF"))) {
            // line 80
            echo "                        <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_facturepdf", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 80, $this->source); })()), "installation", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Facture</a>
                        ";
            // line 81
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 81, $this->source); })()), "installation", [], "any", false, false, false, 81), "step", [], "any", false, false, false, 81) == 9)) {
                // line 82
                echo "                        <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_recupdf", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 82, $this->source); })()), "installation", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-warning btn my-3\">PDF Reçu</a>
                        ";
            }
            // line 84
            echo "                    ";
        }
        // line 85
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 85, $this->source); })()), "paiementeffectue", [], "any", false, false, false, 85) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DAF")))) {
            // line 86
            echo "                        ";
            // line 87
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 87, $this->source); })()), "etatRembousement", [], "any", false, false, false, 87)) {
                // line 88
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remboursement_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-danger btn my-3\">Créer Remboursement</a>
                        ";
            }
            // line 90
            echo "                    ";
        }
        // line 91
        echo "                </div>
                <fieldset id=\"synthese_demande\">
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif ";
        // line 94
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 94, $this->source); })()), "demandecourante", [], "any", false, false, false, 94) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 94, $this->source); })()), "demandecourante", [], "any", false, false, false, 94), "numeroPassage", [], "any", false, false, false, 94) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
        }
        // line 95
        echo "                            ";
        if ((((0 && (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 95, $this->source); })()), "step", [], "any", false, false, false, 95) >= 7)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 95, $this->source); })()), "demandeCourante", [], "any", false, false, false, 95), "numeroPassage", [], "any", false, false, false, 95) == 1)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")))) {
            // line 96
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_clone", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\" class=\"next action-button btn btn-warning py-0 border-dark btn ms-5 float-end\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#files"), "html", null, true);
            echo "\"></use>
                                </svg>
                                Cloner la Demande</a>
                            ";
        }
        // line 102
        echo "                        </h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Numéro Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 107, $this->source); })()), "installation", [], "any", false, false, false, 107), "demandeCourante", [], "any", false, false, false, 107), "numero", [], "any", false, false, false, 107), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 111, $this->source); })()), "installation", [], "any", false, false, false, 111), "demandeCourante", [], "any", false, false, false, 111), "dateCreation", [], "any", false, false, false, 111), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 115, $this->source); })()), "installation", [], "any", false, false, false, 115), "demandeCourante", [], "any", false, false, false, 115), "puissance", [], "any", false, false, false, 115), "html", null, true);
        echo " kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 119, $this->source); })()), "installation", [], "any", false, false, false, 119), "demandeCourante", [], "any", false, false, false, 119), "cout", [], "any", false, false, false, 119), "html", null, true);
        echo " FCFA\">
                            </div>
                        </div>  
                    </div>

                    
                ";
        // line 126
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 126, $this->source); })()), "installation", [], "any", false, false, false, 126), "electricien", [], "any", false, false, false, 126)) {
            // line 127
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black titre_bloc_4\">
                            Informations sur l'électricien
                            ";
            // line 130
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 131
                echo "                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit2", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131)]), "html", null, true);
                echo "\" class=\" pt fs-8 text-dark\">
                                <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                    <use xlink:href=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                </svg>
                                </a>
                            ";
            }
            // line 137
            echo "                        </h2>
                        <div class=\"row bloc_4\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Nom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 142, $this->source); })()), "installation", [], "any", false, false, false, 142), "electricien", [], "any", false, false, false, 142), "nom", [], "any", false, false, false, 142), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 146, $this->source); })()), "installation", [], "any", false, false, false, 146), "electricien", [], "any", false, false, false, 146), "prenom", [], "any", false, false, false, 146), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 150, $this->source); })()), "installation", [], "any", false, false, false, 150), "electricien", [], "any", false, false, false, 150), "localite", [], "any", false, false, false, 150), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 154, $this->source); })()), "installation", [], "any", false, false, false, 154), "electricien", [], "any", false, false, false, 154), "adresse", [], "any", false, false, false, 154), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 158, $this->source); })()), "installation", [], "any", false, false, false, 158), "electricien", [], "any", false, false, false, 158), "telephone", [], "any", false, false, false, 158), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 158, $this->source); })()), "installation", [], "any", false, false, false, 158), "electricien", [], "any", false, false, false, 158), "autreNumTelephone", [], "any", false, false, false, 158), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 162, $this->source); })()), "installation", [], "any", false, false, false, 162), "electricien", [], "any", false, false, false, 162), "email", [], "any", false, false, false, 162), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 166, $this->source); })()), "installation", [], "any", false, false, false, 166), "electricien", [], "any", false, false, false, 166), "typePiece", [], "any", false, false, false, 166), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 170, $this->source); })()), "installation", [], "any", false, false, false, 170), "electricien", [], "any", false, false, false, 170), "numPiece", [], "any", false, false, false, 170), "html", null, true);
            echo "\">
                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Electricien</label><br />
                                ";
            // line 175
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 175, $this->source); })()), "installation", [], "any", false, false, false, 175), "PJElectricien", [], "any", false, false, false, 175)) {
                // line 176
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 177
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 179
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 179, $this->source); })()), "installation", [], "any", false, false, false, 179), "id", [], "any", false, false, false, 179), "type" => "electricien"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 179, $this->source); })()), "installation", [], "any", false, false, false, 179), "PJElectricien", [], "any", false, false, false, 179), "fichier", [], "any", false, false, false, 179), "html", null, true);
                echo " </span>
                                ";
            } else {
                // line 181
                echo "                                    <span class=\"text-danger pt fs-8\">N/D</span>
                                ";
            }
            // line 183
            echo "                            </div>

                        </div>
                    </div>
                    ";
        }
        // line 187
        echo "                                

                    ";
        // line 190
        echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_1\">
                        Données de base de la demande
                        ";
        // line 193
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 194
            echo "                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit1", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 194, $this->source); })()), "id", [], "any", false, false, false, 194)]), "html", null, true);
            echo "\" class=\" pt fs-8 text-dark\">
                            <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                <use xlink:href=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                            </svg>
                            </a>
                        ";
        }
        // line 200
        echo "                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_1\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
        echo "\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_1\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-8\">
                                <label for=\"form_usage\" >Usage Installation</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 210, $this->source); })()), "usages", [], "any", false, false, false, 210), "html", null, true);
        echo "\" id=\"form_usage\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 214
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 214, $this->source); })()), "alimente", [], "any", false, false, false, 214)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_alimente\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_compteur\" >Numéro Compteur</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 218, $this->source); })()), "compteur", [], "any", false, false, false, 218), "html", null, true);
        echo "\" id=\"form_compteur\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 222, $this->source); })()), "abonnement", [], "any", false, false, false, 222), "html", null, true);
        echo "\" id=\"form_abonnement\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 226, $this->source); })()), "grstReseau", [], "any", false, false, false, 226), "html", null, true);
        echo "\" id=\"form_grstReseau\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4\">
                                <label for=\"form_localite\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 231, $this->source); })()), "localite", [], "any", false, false, false, 231), "html", null, true);
        echo "\" id=\"form_localite\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_adresse\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 235, $this->source); })()), "adresse", [], "any", false, false, false, 235), "html", null, true);
        echo "\" id=\"form_adresse\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_habitation\" >Complément Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 239
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 239, $this->source); })()), "habitation", [], "any", false, false, false, 239), "html", null, true);
        echo "\" id=\"form_habitation\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_lattitude\" >Latitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 243, $this->source); })()), "lattitude", [], "any", false, false, false, 243), "html", null, true);
        echo "\" id=\"form_lattitude\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_longitude\" >Longitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 247, $this->source); })()), "longitude", [], "any", false, false, false, 247), "html", null, true);
        echo "\" id=\"form_longitude\">
                            </div>
                        </div>
                    </div>

                    ";
        // line 253
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 253, $this->source); })()), "typeConstruction", [], "any", false, false, false, 253)) {
            // line 254
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_2\">
                            Caractéristiques du site
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_2\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 259
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
            echo "\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_2\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-4\">
                                <label for=\"form_collectif collectif1\" >Bien Collectif ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 267
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 267, $this->source); })()), "collectif", [], "any", false, false, false, 267)) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "\" id=\"form_collectif\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_nomSite\" >Nom du site</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 271
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 271, $this->source); })()), "nomSite", [], "any", false, false, false, 271), "html", null, true);
            echo "\" id=\"form_nomSite\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_logement\" >Nombre de logements</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 275, $this->source); })()), "logement", [], "any", false, false, false, 275), "html", null, true);
            echo "\" id=\"form_logement\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-6\">
                                <label for=\"form_typeConstruction\" >Type de construction</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 280, $this->source); })()), "typeConstruction", [], "any", false, false, false, 280), "nom", [], "any", false, false, false, 280), "html", null, true);
            echo "\" id=\"form_typeConstruction\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1\">
                                <label for=\"form_niveau\" >Nombre de niveaux</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 284
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 284, $this->source); })()), "niveau", [], "any", false, false, false, 284), "html", null, true);
            echo "\" id=\"form_niveau\">
                            </div>
                            <div class=\"col-lg-6 typeConstruction3\">
                                <label for=\"form_activite\" >Activités</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 288, $this->source); })()), "activite", [], "any", false, false, false, 288), "html", null, true);
            echo "\" id=\"form_activite\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                <label for=\"form_priece\" >Nombre de pièces</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 292
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 292, $this->source); })()), "priece", [], "any", false, false, false, 292), "html", null, true);
            echo "\" id=\"form_priece\">
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 297
        echo "
                    ";
        // line 299
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 299, $this->source); })()), "natureTravaux", [], "any", false, false, false, 299)) {
            // line 300
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_3\">
                            Caractéristiques de l'installation
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_3\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 305
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
            echo "\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_3\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-6\">
                                <label for=\"form_natureTravaux\" >Nature des travaux</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 313, $this->source); })()), "natureTravaux", [], "any", false, false, false, 313), "html", null, true);
            echo "\" id=\"form_natureTravaux\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf15\" >Neufs_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 317, $this->source); })()), "neuf15", [], "any", false, false, false, 317), "html", null, true);
            echo "\" id=\"form_neufs_15\">
                                <label for=\"form_existant15\" >Existants_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 319
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 319, $this->source); })()), "existant15", [], "any", false, false, false, 319), "html", null, true);
            echo "\" id=\"form_existant15\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf25\" >Neufs_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 323
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 323, $this->source); })()), "neuf25", [], "any", false, false, false, 323), "html", null, true);
            echo "\" id=\"form_neuf25\">
                                <label for=\"form_existant25\" >Existants_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 325
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 325, $this->source); })()), "existant25", [], "any", false, false, false, 325), "html", null, true);
            echo "\" id=\"form_existant25\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neufAutre\" >Neufs_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 329
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 329, $this->source); })()), "neufAutre", [], "any", false, false, false, 329), "html", null, true);
            echo "\" id=\"form_neufAutre\">
                                <label for=\"form_existantAutre\" >Existants_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 331
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 331, $this->source); })()), "existantAutre", [], "any", false, false, false, 331), "html", null, true);
            echo "\" id=\"form_existantAutre\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4 intervenantAutre1\">
                                <label for=\"form_intervenantAutre\" >Autres intervenants ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 336
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 336, $this->source); })()), "intervenantAutre", [], "any", false, false, false, 336), "html", null, true);
            echo "\" id=\"form_intervenantAutre\">
                            </div>
                            <div class=\"col-lg-8 intervenantAutre1\">
                                <label for=\"form_intervenant\" >Intervenants</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 340
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 340, $this->source); })()), "intervenant", [], "any", false, false, false, 340), "html", null, true);
            echo "\" id=\"form_intervenant\">
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 345
        echo "
                    ";
        // line 347
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 347, $this->source); })()), "proprietaire", [], "any", false, false, false, 347)) {
            // line 348
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_5\">
                            Informations sur le propriétaire de l'installation
                            ";
            // line 351
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 352
                echo "                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit3", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 352, $this->source); })()), "id", [], "any", false, false, false, 352)]), "html", null, true);
                echo "\" class=\" pt fs-8 text-dark\">
                                <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                    <use xlink:href=\"";
                // line 354
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                </svg>
                                </a>
                            ";
            }
            // line 358
            echo "                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_5\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 360
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
            echo "\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_5\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Nom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 368
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 368, $this->source); })()), "proprietaire", [], "any", false, false, false, 368), "nom", [], "any", false, false, false, 368), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 372
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 372, $this->source); })()), "proprietaire", [], "any", false, false, false, 372), "prenom", [], "any", false, false, false, 372), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 376
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 376, $this->source); })()), "proprietaire", [], "any", false, false, false, 376), "localite", [], "any", false, false, false, 376), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 380
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 380, $this->source); })()), "proprietaire", [], "any", false, false, false, 380), "adresse", [], "any", false, false, false, 380), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 384
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 384, $this->source); })()), "proprietaire", [], "any", false, false, false, 384), "telephone", [], "any", false, false, false, 384), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 388
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 388, $this->source); })()), "proprietaire", [], "any", false, false, false, 388), "email", [], "any", false, false, false, 388), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 392
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 392, $this->source); })()), "proprietaire", [], "any", false, false, false, 392), "typePiece", [], "any", false, false, false, 392), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 396
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 396, $this->source); })()), "proprietaire", [], "any", false, false, false, 396), "numPiece", [], "any", false, false, false, 396), "html", null, true);
            echo "\">
                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Propriétaire</label><br />
                                ";
            // line 401
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 401, $this->source); })()), "PJProprietaire", [], "any", false, false, false, 401)) {
                // line 402
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 403
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 405
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 405, $this->source); })()), "id", [], "any", false, false, false, 405), "type" => "proprietaire"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 405, $this->source); })()), "PJProprietaire", [], "any", false, false, false, 405), "fichier", [], "any", false, false, false, 405), "html", null, true);
                echo " </span>
                                ";
            } else {
                // line 407
                echo "                                    <span class=\"text-danger pt fs-8\">N/D</span>
                                ";
            }
            // line 409
            echo "                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >";
            // line 412
            if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 412, $this->source); })()), "usages", [], "any", false, false, false, 412) != "erp_ert")) {
                echo "Titre de propriété";
            } else {
                echo "Documents Techniques";
            }
            echo "</label><br />
                                ";
            // line 413
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 413, $this->source); })()), "PJDossierTechnique", [], "any", false, false, false, 413)) {
                // line 414
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 415
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 417
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 417, $this->source); })()), "id", [], "any", false, false, false, 417), "type" => "dosstech"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 417, $this->source); })()), "PJDossierTechnique", [], "any", false, false, false, 417), "fichier", [], "any", false, false, false, 417), "html", null, true);
                echo " </span>
                                ";
            } else {
                // line 419
                echo "                                    <span class=\"text-danger pt fs-8\">N/D</span>
                                ";
            }
            // line 421
            echo "                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 425
        echo "                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2\" id=\"paiement_demande\">
                <div align=\"right\">
                        ";
        // line 430
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 430, $this->source); })()), "installation", [], "any", false, false, false, 430), "step", [], "any", false, false, false, 430) == 9) && (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 430, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 430, $this->source); })()), "valide", [], "any", false, false, false, 430))) {
            // line 431
            echo "                            <span class=\"badge bg-success p-2 fs-6\">Demande de remboursement validée</span>
                        ";
        }
        // line 433
        echo "                    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link_liste"]) || array_key_exists("link_liste", $context) ? $context["link_liste"] : (function () { throw new RuntimeError('Variable "link_liste" does not exist.', 433, $this->source); })()));
        echo "\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour</a>
                    ";
        // line 434
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 434, $this->source); })()), "installation", [], "any", false, false, false, 434), "step", [], "any", false, false, false, 434) == 8)) {
            // line 435
            echo "                        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE"))) {
                // line 436
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_modif", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 436, $this->source); })()), "id", [], "any", false, false, false, 436)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-danger btn my-3 ms-2\">Modifier</a>
                        ";
            }
            // line 438
            echo "                        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAISSIER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPTABLE"))) {
                // line 439
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_add2", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 439, $this->source); })()), "id", [], "any", false, false, false, 439)]), "html", null, true);
                echo "\" class=\"next action-button btn btn-success btn my-3 ms-2\">Confirmer Paiement</a>
                        ";
            }
            // line 441
            echo "                    ";
        }
        // line 442
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 442, $this->source); })()), "installation", [], "any", false, false, false, 442), "step", [], "any", false, false, false, 442) == 9)) {
            // line 443
            echo "                        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO") &&  !twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 443, $this->source); })()), "etatRembousement", [], "any", false, false, false, 443))) {
                // line 444
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_valid", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 444, $this->source); })()), "id", [], "any", false, false, false, 444)]), "html", null, true);
                echo "\" type=\"button\" class=\"next action-button btn btn-success btn my-3 ms-2\">Valider la Demande</a>
                        ";
            }
            // line 446
            echo "                    ";
        }
        // line 447
        echo "                </div>                                
                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Données sur le paiement
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_histo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 451, $this->source); })()), "id", [], "any", false, false, false, 451)]), "html", null, true);
        echo "\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#hourglass-split"), "html", null, true);
        echo "\"></use></svg>
                            </a>
                        </div>
                    </h2>
                    <div class=\"row\">
                        <hr class=\"mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Statut Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
        // line 460
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 460, $this->source); })()), "demande", [], "any", false, false, false, 460), "etat", [], "any", false, false, false, 460), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Mode Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"";
        // line 464
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 464, $this->source); })()), "mode", [], "any", false, false, false, 464), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 reference\">
                            <label >Référence Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"";
        // line 468
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 468, $this->source); })()), "reference", [], "any", false, false, false, 468), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Observations</label>
                            <textarea type=\"text\" rows=\"4\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\">";
        // line 472
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 472, $this->source); })()), "observation", [], "any", false, false, false, 472), "html", null, true);
        echo "</textarea>
                        </div>

                    
                    ";
        // line 476
        if (((isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 476, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 476, $this->source); })()), "rejete", [], "any", false, false, false, 476) || twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 476, $this->source); })()), "valide", [], "any", false, false, false, 476)))) {
            // line 477
            echo "                        <hr class=\"mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Statut Remboursement</label>
                            ";
            // line 480
            if (twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 480, $this->source); })()), "rejete", [], "any", false, false, false, 480)) {
                // line 481
                echo "                                <input type=\"text\" disabled readonly class=\"form-control text-danger bg-danger bg-opacity-25 form-control py-1 fw-bold fs-6\" value=\"Rejeté\">
                            ";
            }
            // line 483
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 483, $this->source); })()), "valide", [], "any", false, false, false, 483)) {
                // line 484
                echo "                                <input type=\"text\" disabled readonly class=\"form-control text-success bg-success bg-opacity-25 form-control py-1 fw-bold fs-6\" value=\"Validé\">
                            ";
            }
            // line 486
            echo "                        </div>
                        ";
            // line 487
            if (twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 487, $this->source); })()), "rejete", [], "any", false, false, false, 487)) {
                // line 488
                echo "                            <div class=\"mb-3 \">
                                <label class=\"\">Motif Rejet</label>
                                <textarea type=\"text\" rows=\"4\" disabled readonly class=\"form-control form-control-sm py-1 bg-danger bg-opacity-25 border-secondary text-danger fs-7\">";
                // line 490
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 490, $this->source); })()), "motifRejet", [], "any", false, false, false, 490), "html", null, true);
                echo "</textarea>
                            </div>
                        ";
            }
            // line 493
            echo "                    ";
        }
        // line 494
        echo "
                    </div>  
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 502
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 503
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 503, $this->source); })()), "demande", [], "any", false, false, false, 503);
        // line 504
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 504, $this->source); })()), "installation", [], "any", false, false, false, 504);
        // line 505
        echo "<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"";
        // line 509
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 509, $this->source); })()), "mode", [], "any", false, false, false, 509), "html", null, true);
        echo "\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        if (\"";
        // line 515
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 515, $this->source); })()), "alimente", [], "any", false, false, false, 515), "html", null, true);
        echo "\" == 1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (\"";
        // line 523
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 523, $this->source); })()), "collectif", [], "any", false, false, false, 523), "html", null, true);
        echo "\" == 1) {
            \$('.collectif1').show(); \$('.collectif0').hide();
        }
        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        valSel=\"";
        // line 527
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 527, $this->source); })()), "typeConstruction", [], "any", false, false, false, 527), "html", null, true);
        echo "\";
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
        valSel=\"";
        // line 540
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 540, $this->source); })()), "intervenantAutre", [], "any", false, false, false, 540), "html", null, true);
        echo "\";
        if (valSel==\"Oui\") {
            \$('.intervenantAutre1').show(); 
        }
        valSel=\"";
        // line 544
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 544, $this->source); })()), "natureTravaux", [], "any", false, false, false, 544), "html", null, true);
        echo "\";
        if (valSel == \"Rénovation Partielle\") {
            \$('.natureTravaux1').show(); 
        }

        \$(\".bloc_1\").hide(); 
        \$(\".bloc_2\").hide();
        \$(\".bloc_3\").hide();
        \$(\".bloc_5\").hide();

        \$(\".btn_bloc_1\").on('click', function(){ showhide_bloc(1); });  
        \$(\".btn_bloc_2\").on('click', function(){ showhide_bloc(2); });  
        \$(\".btn_bloc_3\").on('click', function(){ showhide_bloc(3); });  
        \$(\".btn_bloc_5\").on('click', function(){ showhide_bloc(5); });  

        function showhide_bloc(x) {
            le_bloc=\".bloc_\"+x
            le_btn_bloc=\".btn_bloc_\"+x
            le_titre_bloc=\".titre_bloc_\"+x
            
            if(\$(le_btn_bloc).prop('title')==\"Afficher les détails\") {
                \$(le_bloc).show();
                \$(le_titre_bloc).addClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-up"), "html", null, true);
        echo "\"></use></svg>Cacher ...'); 
                \$(le_btn_bloc).prop('title', 'Cacher les détails');
                \$(le_btn_bloc).addClass(\"text-danger\");
                \$(le_btn_bloc).removeClass(\"text-warning\");
            } else {
                \$(le_bloc).hide();
                \$(le_titre_bloc).removeClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-down"), "html", null, true);
        echo "\"></use></svg>Afficher ...'); 
                \$(le_btn_bloc).prop('title', 'Afficher les détails');
                \$(le_btn_bloc).removeClass(\"text-danger\");
                \$(le_btn_bloc).addClass(\"text-warning\");
            }
        }
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "paiement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1131 => 574,  1121 => 567,  1095 => 544,  1088 => 540,  1072 => 527,  1065 => 523,  1054 => 515,  1045 => 509,  1039 => 505,  1036 => 504,  1033 => 503,  1023 => 502,  1007 => 494,  1004 => 493,  998 => 490,  994 => 488,  992 => 487,  989 => 486,  985 => 484,  982 => 483,  978 => 481,  976 => 480,  971 => 477,  969 => 476,  962 => 472,  955 => 468,  948 => 464,  941 => 460,  930 => 452,  926 => 451,  920 => 447,  917 => 446,  911 => 444,  908 => 443,  905 => 442,  902 => 441,  896 => 439,  893 => 438,  887 => 436,  884 => 435,  882 => 434,  877 => 433,  873 => 431,  871 => 430,  864 => 425,  858 => 421,  854 => 419,  847 => 417,  842 => 415,  839 => 414,  837 => 413,  829 => 412,  824 => 409,  820 => 407,  813 => 405,  808 => 403,  805 => 402,  803 => 401,  795 => 396,  788 => 392,  781 => 388,  774 => 384,  767 => 380,  760 => 376,  753 => 372,  746 => 368,  735 => 360,  731 => 358,  724 => 354,  718 => 352,  716 => 351,  711 => 348,  708 => 347,  705 => 345,  697 => 340,  690 => 336,  682 => 331,  677 => 329,  670 => 325,  665 => 323,  658 => 319,  653 => 317,  646 => 313,  635 => 305,  628 => 300,  625 => 299,  622 => 297,  614 => 292,  607 => 288,  600 => 284,  593 => 280,  585 => 275,  578 => 271,  567 => 267,  556 => 259,  549 => 254,  546 => 253,  538 => 247,  531 => 243,  524 => 239,  517 => 235,  510 => 231,  502 => 226,  495 => 222,  488 => 218,  477 => 214,  470 => 210,  459 => 202,  455 => 200,  448 => 196,  442 => 194,  440 => 193,  435 => 190,  431 => 187,  424 => 183,  420 => 181,  413 => 179,  408 => 177,  405 => 176,  403 => 175,  395 => 170,  388 => 166,  381 => 162,  372 => 158,  365 => 154,  358 => 150,  351 => 146,  344 => 142,  337 => 137,  330 => 133,  324 => 131,  322 => 130,  317 => 127,  314 => 126,  305 => 119,  298 => 115,  291 => 111,  284 => 107,  277 => 102,  270 => 98,  264 => 96,  261 => 95,  257 => 94,  252 => 91,  249 => 90,  243 => 88,  240 => 87,  238 => 86,  235 => 85,  232 => 84,  226 => 82,  224 => 81,  219 => 80,  217 => 79,  212 => 77,  209 => 76,  203 => 73,  199 => 72,  196 => 71,  193 => 70,  191 => 69,  178 => 59,  170 => 54,  157 => 44,  150 => 39,  147 => 38,  144 => 37,  142 => 36,  139 => 35,  136 => 34,  133 => 33,  131 => 32,  128 => 31,  125 => 30,  122 => 29,  120 => 28,  117 => 27,  114 => 26,  112 => 25,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}COSSUEL{% endblock %}
{% block body %}
    <style>
    input[disabled] {
        background-color:#f1f5f9;
        border: 1px solid #7a7b7c;
        color: gray;
        font-weight:normal;
    }
    #synthese_demande .card {
        background-color:#ffffff;
    }
    #synthese_demande label, #synthese_demande .fs-title {
        color:gray;
        font-weight:normal;
    }

    #paiement_demande .card {
        background-color:#fff;
        box-shadow: 0 0 0 2px white, 0 0 0 3px #000
    }
    
    </style>
    {% set action_demande = \"Paiement\" %}
    {% set link_liste = 'app_installation_index2' %}

    {% set demande = paiement.demande %}
    {% set installation = demande.installation %}
    {% set remboursement = paiement.remboursement %}
    
    {% if demande.installation.step == 9 %}
        {% set link_liste = 'app_installation_index3' %}
    {% endif %}

    {% if app.session.get('page_liste_demande') is defined and app.session.get('page_liste_demande') %}
        {% set link_liste = app.session.get('page_liste_demande') %}
    {% endif %}


    <section class=\"container\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">{{ action_demande }} de demandes </span>
            </a>
        </header>

        <div class=\"container\">
            <nav class=\"navbar shadow bg-warning border border-dark mt-2 p-0\">
                <div class=\"container-fluid ps-4\">
                        <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                            <div class=\"col\">
                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#lightbulb') }}\"></use>
                                </svg>
                                Détails de la demande 
                            </div>
                            <div class=\"col\" align=\"right\">
                                <span class=\"text-success\">[{{ installation.demandeCourante.etat }}]</span>
                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                {% if tools.getUtilisateur(installation.createdBy) %}
                    {% set creator = tools.getUtilisateur(installation.createdBy) %}
                    <div align=\"left\" class=\"float-start mt-2 border border-warning shadow p-2 fs-8 fw-light\">
                        <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">{{creator.nomComplet}}</span></div>
                        <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">{{installation.createdAt|date(\"d-m-Y à H:i:s\")}}</span></div>
                    </div>
                {% endif %}
                <div align=\"right\">
                    <a target=\"_blank\" href=\"{{ path('app_installation_showpdf', {'id': demande.installation.id}) }}\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Demande</a>
                    
                    {% if is_granted('ROLE_CAISSIER') or  is_granted('ROLE_COMPTABLE') or  is_granted('ROLE_DAF') %}
                        <a target=\"_blank\" href=\"{{ path('app_installation_facturepdf', {'id': demande.installation.id}) }}\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Facture</a>
                        {% if demande.installation.step == 9 %}
                        <a target=\"_blank\" href=\"{{ path('app_installation_recupdf', {'id': demande.installation.id}) }}\" class=\"next action-button btn btn-warning btn my-3\">PDF Reçu</a>
                        {% endif %}
                    {% endif %}
                    {% if paiement.paiementeffectue and (is_granted('ROLE_COMPTABLE') or  is_granted('ROLE_DAF')) %}
                        {# {% if not paiement.demande.dossier and not paiement.etatRembousement %} #}
                        {% if not paiement.etatRembousement %}
                            <a href=\"{{ path('app_remboursement_add', {'id': paiement.id}) }}\" class=\"next action-button btn btn-danger btn my-3\">Créer Remboursement</a>
                        {% endif %}
                    {% endif %}
                </div>
                <fieldset id=\"synthese_demande\">
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif {% if installation.demandecourante and installation.demandecourante.numeroPassage==2 %} <span class=\"badge bg-danger\">2e VISITE</span> {% endif %}
                            {% if 0 and installation.step>=7 and installation.demandeCourante.numeroPassage==1 and (is_granted('ROLE_ACCUEIL') or is_granted('ROLE_RFO')) %}
                                <a href=\"{{ path('app_installation_clone', {'id': installation.id}) }}\" class=\"next action-button btn btn-warning py-0 border-dark btn ms-5 float-end\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#files') }}\"></use>
                                </svg>
                                Cloner la Demande</a>
                            {% endif %}
                        </h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Numéro Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"{{ demande.installation.demandeCourante.numero }}\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"{{ demande.installation.demandeCourante.dateCreation | date('d-m-Y') }}\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"{{ demande.installation.demandeCourante.puissance }} kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"{{ demande.installation.demandeCourante.cout }} FCFA\">
                            </div>
                        </div>  
                    </div>

                    
                {# BLOC 4 #}
                    {% if demande.installation.electricien %}
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black titre_bloc_4\">
                            Informations sur l'électricien
                            {% if (is_granted('ROLE_ADMIN')) %}
                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{path('app_installation_edit2', {'id': installation.id})}}\" class=\" pt fs-8 text-dark\">
                                <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                </svg>
                                </a>
                            {% endif %}
                        </h2>
                        <div class=\"row bloc_4\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Nom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.nom }}\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.prenom }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.localite }}\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.adresse }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.telephone }} / {{ demande.installation.electricien.autreNumTelephone }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.email }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.typePiece }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ demande.installation.electricien.numPiece }}\">
                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Electricien</label><br />
                                {% if demande.installation.PJElectricien %}
                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#file-pdf') }}\"></use>
                                    </svg>
                                    <span onclick=\"window.open('{{path('app_installation_downloadpj', {'id': demande.installation.id, 'type':'electricien'})}}')\" class=\"text-success pt fs-7\">{{demande.installation.PJElectricien.fichier}} </span>
                                {% else %}
                                    <span class=\"text-danger pt fs-8\">N/D</span>
                                {% endif %}
                            </div>

                        </div>
                    </div>
                    {% endif %}                                

                    {# BLOC 1 #}
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_1\">
                        Données de base de la demande
                        {% if (is_granted('ROLE_ADMIN')) %}
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{path('app_installation_edit1', {'id': installation.id})}}\" class=\" pt fs-8 text-dark\">
                            <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                            </svg>
                            </a>
                        {% endif %}
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_1\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#caret-down\") }}\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_1\">
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
                        <h2 class=\"fs-title titre_bloc_2\">
                            Caractéristiques du site
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_2\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#caret-down\") }}\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_2\">
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
                        <h2 class=\"fs-title titre_bloc_3\">
                            Caractéristiques de l'installation
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_3\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#caret-down\") }}\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_3\">
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

                    {# BLOC 5 #}
                    {% if installation.proprietaire %}
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_5\">
                            Informations sur le propriétaire de l'installation
                            {% if (is_granted('ROLE_ADMIN')) %}
                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{path('app_installation_edit3', {'id': installation.id})}}\" class=\" pt fs-8 text-dark\">
                                <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                </svg>
                                </a>
                            {% endif %}
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_5\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#caret-down\") }}\"></use></svg>
                                Afficher ...</a>
                            </div>
                        </h2>
                        <div class=\"row bloc_5\">
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
                    </div>
                    {% endif %}
                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2\" id=\"paiement_demande\">
                <div align=\"right\">
                        {% if demande.installation.step == 9 and remboursement and remboursement.valide %}
                            <span class=\"badge bg-success p-2 fs-6\">Demande de remboursement validée</span>
                        {% endif %}
                    <a href=\"{{ path(link_liste) }}\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour</a>
                    {% if demande.installation.step == 8 %}
                        {% if is_granted('ROLE_CAISSIER') or  is_granted('ROLE_COMPTABLE') %}
                        <a href=\"{{ path('app_paiement_modif', {'id': demande.id}) }}\" class=\"next action-button btn btn-danger btn my-3 ms-2\">Modifier</a>
                        {% endif %}
                        {% if is_granted('ROLE_CAISSIER') or  is_granted('ROLE_COMPTABLE') %}
                        <a href=\"{{ path('app_paiement_add2', {'id': demande.id}) }}\" class=\"next action-button btn btn-success btn my-3 ms-2\">Confirmer Paiement</a>
                        {% endif %}
                    {% endif %}
                    {% if demande.installation.step == 9 %}
                        {% if is_granted('ROLE_RFO') and not paiement.etatRembousement %}
                        <a href=\"{{ path('app_demande_valid', {'id': demande.id}) }}\" type=\"button\" class=\"next action-button btn btn-success btn my-3 ms-2\">Valider la Demande</a>
                        {% endif %}
                    {% endif %}
                </div>                                
                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Données sur le paiement
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"{{ path('app_demande_histo', {'id': demande.id}) }}\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#hourglass-split\") }}\"></use></svg>
                            </a>
                        </div>
                    </h2>
                    <div class=\"row\">
                        <hr class=\"mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Statut Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control text-success form-control py-1 fw-bold fs-6\" value=\"{{ paiement.demande.etat }}\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Mode Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"{{ paiement.mode }}\">
                        </div>
                        <div class=\"mb-3 reference\">
                            <label >Référence Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"{{ paiement.reference }}\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Observations</label>
                            <textarea type=\"text\" rows=\"4\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\">{{ paiement.observation }}</textarea>
                        </div>

                    
                    {% if remboursement and (remboursement.rejete or remboursement.valide) %}
                        <hr class=\"mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Statut Remboursement</label>
                            {% if remboursement.rejete %}
                                <input type=\"text\" disabled readonly class=\"form-control text-danger bg-danger bg-opacity-25 form-control py-1 fw-bold fs-6\" value=\"Rejeté\">
                            {% endif %}
                            {% if remboursement.valide %}
                                <input type=\"text\" disabled readonly class=\"form-control text-success bg-success bg-opacity-25 form-control py-1 fw-bold fs-6\" value=\"Validé\">
                            {% endif %}
                        </div>
                        {% if remboursement.rejete %}
                            <div class=\"mb-3 \">
                                <label class=\"\">Motif Rejet</label>
                                <textarea type=\"text\" rows=\"4\" disabled readonly class=\"form-control form-control-sm py-1 bg-danger bg-opacity-25 border-secondary text-danger fs-7\">{{ remboursement.motifRejet }}</textarea>
                            </div>
                        {% endif %}
                    {% endif %}

                    </div>  
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
    {% set demande = paiement.demande %}
    {% set installation = demande.installation %}
<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"{{ paiement.mode }}\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        if (\"{{ installation.alimente }}\" == 1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (\"{{ installation.collectif }}\" == 1) {
            \$('.collectif1').show(); \$('.collectif0').hide();
        }
        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        valSel=\"{{ installation.typeConstruction }}\";
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
        valSel=\"{{ installation.intervenantAutre }}\";
        if (valSel==\"Oui\") {
            \$('.intervenantAutre1').show(); 
        }
        valSel=\"{{ installation.natureTravaux }}\";
        if (valSel == \"Rénovation Partielle\") {
            \$('.natureTravaux1').show(); 
        }

        \$(\".bloc_1\").hide(); 
        \$(\".bloc_2\").hide();
        \$(\".bloc_3\").hide();
        \$(\".bloc_5\").hide();

        \$(\".btn_bloc_1\").on('click', function(){ showhide_bloc(1); });  
        \$(\".btn_bloc_2\").on('click', function(){ showhide_bloc(2); });  
        \$(\".btn_bloc_3\").on('click', function(){ showhide_bloc(3); });  
        \$(\".btn_bloc_5\").on('click', function(){ showhide_bloc(5); });  

        function showhide_bloc(x) {
            le_bloc=\".bloc_\"+x
            le_btn_bloc=\".btn_bloc_\"+x
            le_titre_bloc=\".titre_bloc_\"+x
            
            if(\$(le_btn_bloc).prop('title')==\"Afficher les détails\") {
                \$(le_bloc).show();
                \$(le_titre_bloc).addClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#dc3545\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#caret-up\") }}\"></use></svg>Cacher ...'); 
                \$(le_btn_bloc).prop('title', 'Cacher les détails');
                \$(le_btn_bloc).addClass(\"text-danger\");
                \$(le_btn_bloc).removeClass(\"text-warning\");
            } else {
                \$(le_bloc).hide();
                \$(le_titre_bloc).removeClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#caret-down\") }}\"></use></svg>Afficher ...'); 
                \$(le_btn_bloc).prop('title', 'Afficher les détails');
                \$(le_btn_bloc).removeClass(\"text-danger\");
                \$(le_btn_bloc).addClass(\"text-warning\");
            }
        }
    });
</script>
{% endblock %}
", "paiement/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/paiement/show.html.twig");
    }
}
