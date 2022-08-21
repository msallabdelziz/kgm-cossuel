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

/* dossier/rejetrapport.html.twig */
class __TwigTemplate_454af1fc998aeb80f833bbaf44997137 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/rejetrapport.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/rejetrapport.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dossier/rejetrapport.html.twig", 1);
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
    
    #validation_dossier .card {
        background-color:#ffc328;
        box-shadow: 0 0 0 2px white, 0 0 0 3px #000
    }
    
    </style>
    ";
        // line 31
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 31, $this->source); })()), "affecte", [], "any", false, false, false, 31)) {
            // line 32
            echo "        ";
            $context["action_demande"] = "Affectation";
            // line 33
            echo "        ";
            $context["link_liste"] = "app_dossier_affectation";
            // line 34
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                // line 35
                echo "            ";
                $context["link_action"] = "app_dossier_affecter";
                // line 36
                echo "        ";
            }
            // line 37
            echo "        ";
            $context["libelle_action"] = "Affecter à un contrôleur";
            // line 38
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 38, $this->source); })()), "visite", [], "any", false, false, false, 38)) {
            // line 39
            echo "        ";
            $context["action_demande"] = "Planification Visite";
            // line 40
            echo "        ";
            $context["link_liste"] = "app_dossier_visite";
            // line 41
            echo "        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT"))) {
                // line 42
                echo "            ";
                $context["link_action"] = "app_dossier_visiter";
                // line 43
                echo "        ";
            }
            // line 44
            echo "        ";
            $context["libelle_action"] = "Planifier une visite";
            // line 45
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 45, $this->source); })()), "rapport", [], "any", false, false, false, 45)) {
            // line 46
            echo "        ";
            $context["action_demande"] = "Rapport de Visite";
            // line 47
            echo "        ";
            $context["link_liste"] = "app_dossier_rapport";
            // line 48
            echo "        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT"))) {
                // line 49
                echo "            ";
                $context["link_action"] = "app_dossier_rapporter";
                // line 50
                echo "        ";
            }
            // line 51
            echo "        ";
            $context["libelle_action"] = "Elaborer le rapport de visite";
            // line 52
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 52, $this->source); })()), "attestation", [], "any", false, false, false, 52)) {
            // line 53
            echo "        ";
            $context["action_demande"] = "Résultat Inspection";
            // line 54
            echo "        ";
            $context["link_liste"] = "app_dossier_attestation";
            // line 55
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REFERENT")) {
                // line 56
                echo "            ";
                $context["link_action"] = "app_dossier_attestation";
                // line 57
                echo "        ";
            }
            // line 58
            echo "        ";
            $context["libelle_action"] = "Confirmer Résultats Inspection";
            // line 59
            echo "    ";
        }
        // line 60
        echo "
    ";
        // line 61
        $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 61, $this->source); })()), "demande", [], "any", false, false, false, 61);
        // line 62
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 62, $this->source); })()), "installation", [], "any", false, false, false, 62);
        // line 63
        echo "    
    ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 64), "get", [0 => "page_liste_dossier"], "method", true, true, false, 64) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "session", [], "any", false, false, false, 64), "get", [0 => "page_liste_dossier"], "method", false, false, false, 64))) {
            // line 65
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "session", [], "any", false, false, false, 65), "get", [0 => "page_liste_dossier"], "method", false, false, false, 65);
            // line 66
            echo "    ";
        }
        // line 67
        echo "
    ";
        // line 68
        $context["link_liste"] = "app_dossier_showrapp";
        // line 69
        echo "
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["action_demande"]) || array_key_exists("action_demande", $context) ? $context["action_demande"] : (function () { throw new RuntimeError('Variable "action_demande" does not exist.', 73, $this->source); })()), "html", null, true);
        echo " de dossiers </span>
            </a>
        </header>

        <div class=\"container\">
            <nav class=\"navbar shadow bg-warning border border-dark mt-2 p-0\">
                <div class=\"container-fluid ps-4\">
                        <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                            <div class=\"col\">
                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                </svg>
                                Détails du dossier
                            </div>
                            <div class=\"col\" align=\"right\">
                                <span class=\"text-success\">[En attente de ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 88, $this->source); })()), "Etat", [], "any", false, false, false, 88), "html", null, true);
        echo "]</span>
                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row pt-4\">
            <div class=\"col-lg-8 mb-2\">
                <fieldset id=\"synthese_demande\">
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif ";
        // line 100
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 100, $this->source); })()), "demandecourante", [], "any", false, false, false, 100) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 100, $this->source); })()), "demandecourante", [], "any", false, false, false, 100), "numeroPassage", [], "any", false, false, false, 100) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
        }
        echo "</h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Numéro Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 105, $this->source); })()), "installation", [], "any", false, false, false, 105), "demandeCourante", [], "any", false, false, false, 105), "numero", [], "any", false, false, false, 105), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 109, $this->source); })()), "installation", [], "any", false, false, false, 109), "demandeCourante", [], "any", false, false, false, 109), "dateCreation", [], "any", false, false, false, 109), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 113, $this->source); })()), "installation", [], "any", false, false, false, 113), "demandeCourante", [], "any", false, false, false, 113), "puissance", [], "any", false, false, false, 113), "html", null, true);
        echo " kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 117, $this->source); })()), "installation", [], "any", false, false, false, 117), "demandeCourante", [], "any", false, false, false, 117), "cout", [], "any", false, false, false, 117), "html", null, true);
        echo " FCFA\">
                            </div>
                        </div>  
                    </div>

                    <div class=\"container mt-4\">
                        <div class=\"row\">
                            <div>
                        ";
        // line 125
        $context["rub"] = "";
        // line 126
        echo "                        ";
        $context["ix"] = 0;
        // line 127
        echo "                        ";
        $context["les_detailverif"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 127, $this->source); })()), "visiteCourante", [], "any", false, false, false, 127), "detailVerification", [], "any", false, false, false, 127);
        // line 128
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["les_detailverif"]) || array_key_exists("les_detailverif", $context) ? $context["les_detailverif"] : (function () { throw new RuntimeError('Variable "les_detailverif" does not exist.', 128, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
            // line 129
            echo "                                ";
            if (((isset($context["rub"]) || array_key_exists("rub", $context) ? $context["rub"] : (function () { throw new RuntimeError('Variable "rub" does not exist.', 129, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 129), "rubrique", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129))) {
                // line 130
                echo "                                    ";
                if ((isset($context["rub"]) || array_key_exists("rub", $context) ? $context["rub"] : (function () { throw new RuntimeError('Variable "rub" does not exist.', 130, $this->source); })())) {
                    // line 131
                    echo "                                        </div>
                                    ";
                }
                // line 133
                echo "                                    <div id=\"zrub_";
                echo twig_escape_filter($this->env, (isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 133, $this->source); })()), "html", null, true);
                echo "\">
                                        <h5 class=\"p-2 bg-dark text-light shadow border-bottom\"> ";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 134), "rubrique", [], "any", false, false, false, 134), "numero", [], "any", false, false, false, 134), "html", null, true);
                echo "- ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 134), "rubrique", [], "any", false, false, false, 134), "libelle", [], "any", false, false, false, 134), "html", null, true);
                echo "</h5>
                                    ";
                // line 135
                $context["rub"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointverification", [], "any", false, false, false, 135), "rubrique", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135);
                // line 136
                echo "                                    ";
                $context["ix"] = ((isset($context["ix"]) || array_key_exists("ix", $context) ? $context["ix"] : (function () { throw new RuntimeError('Variable "ix" does not exist.', 136, $this->source); })()) + 1);
                // line 137
                echo "                                ";
            }
            // line 138
            echo "                                <div class=\"shadow p-4 pt-2 mb-3\">
                                    <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                        <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                            <use xlink:href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
            echo "\"></use>
                                        </svg> ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 142), "objetVerification", [], "any", false, false, false, 142), "html", null, true);
            echo "
                                        <div class=\"float-end fw-bold\">
                                        ";
            // line 144
            if (twig_get_attribute($this->env, $this->source, $context["pt"], "sansobjet", [], "any", false, false, false, 144)) {
                // line 145
                echo "                                                <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"black\">
                                                    <use xlink:href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x-octagon-fill"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                Sans Objet
                                        ";
            } else {
                // line 150
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["pt"], "conclusion", [], "any", false, false, false, 150)) {
                    // line 151
                    echo "                                                    <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"green\">
                                                        <use xlink:href=\"";
                    // line 152
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check"), "html", null, true);
                    echo "\"></use>
                                                    </svg>
                                                    <span class=\"text-success\">";
                    // line 154
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 154), "libelleConclusion1", [], "any", false, false, false, 154), "html", null, true);
                    echo "</span>
                                            ";
                } else {
                    // line 156
                    echo "                                                    <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"red\">
                                                        <use xlink:href=\"";
                    // line 157
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x"), "html", null, true);
                    echo "\"></use>
                                                    </svg>
                                                    <span class=\"text-danger\">";
                    // line 159
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pt"], "pointVerification", [], "any", false, false, false, 159), "libelleConclusion2", [], "any", false, false, false, 159), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 161
                echo "                                        ";
            }
            // line 162
            echo "                                        </div>
                                    </div>
                                        ";
            // line 164
            if (( !twig_get_attribute($this->env, $this->source, $context["pt"], "conclusion", [], "any", false, false, false, 164) &&  !twig_get_attribute($this->env, $this->source, $context["pt"], "sansobjet", [], "any", false, false, false, 164))) {
                // line 165
                echo "                                                <div class=\"fw-light ms-4 fs-8\">
                                                Commentaire: <span class=\"text-danger\">";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "commentaire", [], "any", false, false, false, 166), "html", null, true);
                echo "</span>
                                                </div>
                                        ";
            }
            // line 169
            echo "                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "
                                <div>
                                    <h5 class=\"p-2 bg-dark text-light shadow border-bottom\">Tableau 2: Mesures des prises de terre </h5>
                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Mesures des prises de terre
                                                <div class=\"float-end fw-bold\">
                                                </div>
                                            </div>
                                            <div class=\"fw-light ms-4 fs-7\">
                                                <span class=\"text-dark\">";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 184, $this->source); })()), "visiteCourante", [], "any", false, false, false, 184), "mesurePriseTerre", [], "any", false, false, false, 184), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Barrette
                                                <div class=\"float-end fw-bold\">
                                                </div>
                                            </div>
                                            <div class=\"fw-light ms-4 fs-7\">
                                                <span class=\"text-dark\">";
        // line 196
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 196, $this->source); })()), "visiteCourante", [], "any", false, false, false, 196), "barrette", [], "any", false, false, false, 196), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h5 class=\"p-2 bg-dark text-light shadow border-bottom\">Autres observations </h5>
                                    <div class=\"shadow p-4 pt-2 mb-3\">
                                        <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                            <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                <use xlink:href=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                            </svg> Commentaire sur l'inspection
                                            <div class=\"float-end fw-bold\">
                                            </div>
                                        </div>
                                        <div class=\"fw-light ms-4 fs-8\">
                                            <span class=\"text-danger\">";
        // line 213
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 213, $this->source); })()), "visiteCourante", [], "any", false, false, false, 213), "commentaire2", [], "any", false, false, false, 213), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 1
                                                <div class=\"\">
                                                ";
        // line 224
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 224, $this->source); })()), "PJPhoto1", [], "any", false, false, false, 224)) {
            // line 225
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 225, $this->source); })()), "PJPhoto1", [], "any", false, false, false, 225), "fichier", [], "any", false, false, false, 225))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 227
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 2
                                                <div class=\"\">
                                                ";
        // line 236
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 236, $this->source); })()), "PJPhoto2", [], "any", false, false, false, 236)) {
            // line 237
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 237, $this->source); })()), "PJPhoto2", [], "any", false, false, false, 237), "fichier", [], "any", false, false, false, 237))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 239
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 3
                                                <div class=\"\">
                                                ";
        // line 248
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 248, $this->source); })()), "PJPhoto3", [], "any", false, false, false, 248)) {
            // line 249
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 249, $this->source); })()), "PJPhoto3", [], "any", false, false, false, 249), "fichier", [], "any", false, false, false, 249))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 251
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Photo 4
                                                <div class=\"\">
                                                ";
        // line 260
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 260, $this->source); })()), "PJPhoto4", [], "any", false, false, false, 260)) {
            // line 261
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 261, $this->source); })()), "PJPhoto4", [], "any", false, false, false, 261), "fichier", [], "any", false, false, false, 261))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 263
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Signature Controleur
                                                <div class=\"\">
                                                ";
        // line 275
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 275, $this->source); })()), "visiteCourante", [], "any", false, false, false, 275), "signcontroleur", [], "any", false, false, false, 275)) {
            // line 276
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 276, $this->source); })()), "visiteCourante", [], "any", false, false, false, 276), "signcontroleur", [], "any", false, false, false, 276), "fichier", [], "any", false, false, false, 276))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 278
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-right"), "html", null, true);
        echo "\"></use>
                                                </svg> Signature Electricien
                                                <div class=\"\">
                                                ";
        // line 287
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 287, $this->source); })()), "visiteCourante", [], "any", false, false, false, 287), "signelectricien", [], "any", false, false, false, 287)) {
            // line 288
            echo "                                                    <img width=\"100%\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/photo/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 288, $this->source); })()), "visiteCourante", [], "any", false, false, false, 288), "signelectricien", [], "any", false, false, false, 288), "fichier", [], "any", false, false, false, 288))), "html", null, true);
            echo "\" />
                                                ";
        }
        // line 290
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2\" id=\"paiement_demande\">
                <div id=\"validation_dossier\" class=\"mb-4\">
                    ";
        // line 303
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 303, $this->source); })()), 'form_start');
        echo "
                    <div class=\"card mb-2 pb-0\">
                        <h2 class=\"fs-title\">Rejet du rapport d'inspection</h2>
                        <div class=\"row\">
                            <hr class=\"mb-3\" />
                            <div class=\"\">
                                ";
        // line 309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 309, $this->source); })()), "commentaire", [], "any", false, false, false, 309), 'label');
        echo "<br />
                                ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 310, $this->source); })()), "commentaire", [], "any", false, false, false, 310), 'widget');
        echo "<br />
                            </div>
                        </div>  
                        <div align=\"right\">
                            <a href=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link_liste"]) || array_key_exists("link_liste", $context) ? $context["link_liste"] : (function () { throw new RuntimeError('Variable "link_liste" does not exist.', 314, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 314, $this->source); })()), "id", [], "any", false, false, false, 314)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-secondary btn my-3\">Annuler</a>
                            <button type=\"submit\" class=\"next action-button btn btn-success btn my-3 ms-2\">Valider et rejeter le dossier</button>
                        </div>
                    </div>
                    ";
        // line 318
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dossierForm"]) || array_key_exists("dossierForm", $context) ? $context["dossierForm"] : (function () { throw new RuntimeError('Variable "dossierForm" does not exist.', 318, $this->source); })()), 'form_end');
        echo "
                </div>

                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Traitement du dossier
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_histo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 324, $this->source); })()), "id", [], "any", false, false, false, 324)]), "html", null, true);
        echo "\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#hourglass-split"), "html", null, true);
        echo "\"></use></svg>
                            </a>
                        </div>
                    </h2>
                    <div class=\"row\">
                        <hr class=\"mb-3\" />
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >N° Dossier</label>
                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-0 fw-bold fs-6\" value=\"";
        // line 334
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 334, $this->source); })()), "demande", [], "any", false, false, false, 334), "numero", [], "any", false, false, false, 334), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Date création dossier</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-success form-control py-0 fw-bold fs-6\" value=\"";
        // line 340
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 340, $this->source); })()), "dateCreation", [], "any", false, false, false, 340), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" class=\"fs-7\" >Usage</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fw-bold fs-6\" value=\"";
        // line 346
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 346, $this->source); })()), "demande", [], "any", false, false, false, 346), "installation", [], "any", false, false, false, 346), "usages", [], "any", false, false, false, 346), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Puissance</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fs-6\" value=\"";
        // line 352
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 352, $this->source); })()), "demande", [], "any", false, false, false, 352), "puissance", [], "any", false, false, false, 352), "html", null, true);
        echo " kW\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 358
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 358, $this->source); })()), "demande", [], "any", false, false, false, 358), "installation", [], "any", false, false, false, 358), "localite", [], "any", false, false, false, 358), "nom", [], "any", false, false, false, 358), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Agence</label>
                                <input type=\"text\" disabled readonly class=\"form-control fw-bold text-black form-control py-0 fs-6\" value=\"";
        // line 364
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 364, $this->source); })()), "demande", [], "any", false, false, false, 364), "installation", [], "any", false, false, false, 364), "localite", [], "any", false, false, false, 364), "agence", [], "any", false, false, false, 364)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 364, $this->source); })()), "demande", [], "any", false, false, false, 364), "installation", [], "any", false, false, false, 364), "localite", [], "any", false, false, false, 364), "agence", [], "any", false, false, false, 364), "code", [], "any", false, false, false, 364), "html", null, true);
        } else {
            echo " - ";
        }
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-1\">
                            <label class=\"fs-7\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 369
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 369, $this->source); })()), "demande", [], "any", false, false, false, 369), "installation", [], "any", false, false, false, 369), "adresse", [], "any", false, false, false, 369), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"";
        // line 374
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 374, $this->source); })()), "demande", [], "any", false, false, false, 374), "installation", [], "any", false, false, false, 374), "electricien", [], "any", false, false, false, 374), "nom", [], "any", false, false, false, 374), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 374, $this->source); })()), "demande", [], "any", false, false, false, 374), "installation", [], "any", false, false, false, 374), "electricien", [], "any", false, false, false, 374), "prenom", [], "any", false, false, false, 374), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Tél Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control fw-bold py-0 fs-6\" value=\"";
        // line 380
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 380, $this->source); })()), "demande", [], "any", false, false, false, 380), "installation", [], "any", false, false, false, 380), "electricien", [], "any", false, false, false, 380), "telephone", [], "any", false, false, false, 380), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <hr class=\"my-2 mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Référent chargé du dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
        // line 386
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 386, $this->source); })()), "referent", [], "any", false, false, false, 386), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Contrôleur chargé du traitement</label>
                            ";
        // line 390
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 390, $this->source); })()), "controleur", [], "any", false, false, false, 390)) {
            // line 391
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 391, $this->source); })()), "controleur", [], "any", false, false, false, 391), "html", null, true);
            echo "\">
                            ";
        } else {
            // line 393
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 395
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Visite du site pour inspection</label>
                            ";
        // line 398
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 398, $this->source); })()), "visite", [], "any", false, false, false, 398)) {
            // line 399
            echo "                                <div class=\"row\">
                                    <div class=\"col-5\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Planifiée\">
                                    </div>
                                    <div class=\"col-7\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
            // line 404
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 404, $this->source); })()), "visiteCourante", [], "any", false, false, false, 404), "datePlanifie", [], "any", false, false, false, 404), "d-m-Y à H:i"), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"col-12 mb-2\">
                                        Modèle Rapport d'inspection
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-1 fw-bold fs-6\" value=\"";
            // line 408
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 408, $this->source); })()), "visiteCourante", [], "any", false, false, false, 408), "rapport", [], "any", false, false, false, 408), "libelle", [], "any", false, false, false, 408), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 408, $this->source); })()), "visiteCourante", [], "any", false, false, false, 408), "rapport", [], "any", false, false, false, 408), "PointVerification", [], "any", false, false, false, 408), "count", [], "any", false, false, false, 408), "html", null, true);
            echo " points de vérification\">
                                    </div>
                                </div>
                            ";
        } else {
            // line 412
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 414
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Rapport de visite</label>
                            ";
        // line 417
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 417, $this->source); })()), "rapport", [], "any", false, false, false, 417)) {
            // line 418
            echo "                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Visite réalisée et Rapport élaboré\">
                            ";
        } else {
            // line 420
            echo "                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non finalisé\">
                            ";
        }
        // line 422
        echo "                        </div>
                        <div class=\"mb-3 \">
                            <label >Résultat de conformité</label>
                            ";
        // line 425
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 425, $this->source); })()), "attestation", [], "any", false, false, false, 425)) {
            // line 426
            echo "                                <input type=\"text\" disabled readonly class=\"bg-success bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Résultat inspection disponile\">
                            ";
        } else {
            // line 428
            echo "                                <input type=\"text\" disabled readonly class=\"bg-success  form-control text-light form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            ";
        }
        // line 430
        echo "                        </div>
                    </div>  
                </div>

            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 439
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 440
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 440, $this->source); })()), "demande", [], "any", false, false, false, 440);
        // line 441
        echo "    ";
        $context["paiement"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 441, $this->source); })()), "paiement", [], "any", false, false, false, 441);
        // line 442
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 442, $this->source); })()), "installation", [], "any", false, false, false, 442);
        // line 443
        echo "<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"";
        // line 447
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 447, $this->source); })()), "mode", [], "any", false, false, false, 447), "html", null, true);
        echo "\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

        function showhide_bloc(x) {
            le_bloc=\".bloc_\"+x
            le_btn_bloc=\".btn_bloc_\"+x
            le_titre_bloc=\".titre_bloc_\"+x
            
            if(\$(le_btn_bloc).prop('title')==\"Afficher les détails\") {
                \$(le_bloc).show();
                \$(le_titre_bloc).addClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-up"), "html", null, true);
        echo "\"></use></svg>Cacher ...'); 
                \$(le_btn_bloc).prop('title', 'Cacher les détails');
                \$(le_btn_bloc).addClass(\"text-danger\");
                \$(le_btn_bloc).removeClass(\"text-warning\");
            } else {
                \$(le_bloc).hide();
                \$(le_titre_bloc).removeClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 466
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
        return "dossier/rejetrapport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  933 => 466,  923 => 459,  908 => 447,  902 => 443,  899 => 442,  896 => 441,  893 => 440,  883 => 439,  866 => 430,  862 => 428,  858 => 426,  856 => 425,  851 => 422,  847 => 420,  843 => 418,  841 => 417,  836 => 414,  832 => 412,  823 => 408,  816 => 404,  809 => 399,  807 => 398,  802 => 395,  798 => 393,  792 => 391,  790 => 390,  783 => 386,  774 => 380,  763 => 374,  755 => 369,  742 => 364,  733 => 358,  724 => 352,  715 => 346,  706 => 340,  697 => 334,  685 => 325,  681 => 324,  672 => 318,  665 => 314,  658 => 310,  654 => 309,  645 => 303,  630 => 290,  624 => 288,  622 => 287,  616 => 284,  608 => 278,  602 => 276,  600 => 275,  594 => 272,  583 => 263,  577 => 261,  575 => 260,  569 => 257,  561 => 251,  555 => 249,  553 => 248,  547 => 245,  539 => 239,  533 => 237,  531 => 236,  525 => 233,  517 => 227,  511 => 225,  509 => 224,  503 => 221,  492 => 213,  483 => 207,  469 => 196,  460 => 190,  451 => 184,  442 => 178,  433 => 171,  426 => 169,  420 => 166,  417 => 165,  415 => 164,  411 => 162,  408 => 161,  403 => 159,  398 => 157,  395 => 156,  390 => 154,  385 => 152,  382 => 151,  379 => 150,  372 => 146,  369 => 145,  367 => 144,  362 => 142,  358 => 141,  353 => 138,  350 => 137,  347 => 136,  345 => 135,  339 => 134,  334 => 133,  330 => 131,  327 => 130,  324 => 129,  319 => 128,  316 => 127,  313 => 126,  311 => 125,  300 => 117,  293 => 113,  286 => 109,  279 => 105,  269 => 100,  254 => 88,  246 => 83,  233 => 73,  227 => 69,  225 => 68,  222 => 67,  219 => 66,  216 => 65,  214 => 64,  211 => 63,  208 => 62,  206 => 61,  203 => 60,  200 => 59,  197 => 58,  194 => 57,  191 => 56,  188 => 55,  185 => 54,  182 => 53,  179 => 52,  176 => 51,  173 => 50,  170 => 49,  167 => 48,  164 => 47,  161 => 46,  158 => 45,  155 => 44,  152 => 43,  149 => 42,  146 => 41,  143 => 40,  140 => 39,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  125 => 34,  122 => 33,  119 => 32,  117 => 31,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <style>
    #synthese_demande input[disabled] {
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
    
    #validation_dossier .card {
        background-color:#ffc328;
        box-shadow: 0 0 0 2px white, 0 0 0 3px #000
    }
    
    </style>
    {% if not dossier.affecte %}
        {% set action_demande = \"Affectation\" %}
        {% set link_liste = 'app_dossier_affectation' %}
        {% if is_granted('ROLE_REFERENT') %}
            {% set link_action = 'app_dossier_affecter' %}
        {% endif %}
        {% set libelle_action = 'Affecter à un contrôleur' %}
    {% elseif not dossier.visite %}
        {% set action_demande = \"Planification Visite\" %}
        {% set link_liste = 'app_dossier_visite' %}
        {% if is_granted('ROLE_CONTROLEUR') and not is_granted('ROLE_REFERENT') %}
            {% set link_action = 'app_dossier_visiter' %}
        {% endif %}
        {% set libelle_action = 'Planifier une visite' %}
    {% elseif not dossier.rapport %}
        {% set action_demande = \"Rapport de Visite\" %}
        {% set link_liste = 'app_dossier_rapport' %}
        {% if is_granted('ROLE_CONTROLEUR') and not is_granted('ROLE_REFERENT') %}
            {% set link_action = 'app_dossier_rapporter' %}
        {% endif %}
        {% set libelle_action = 'Elaborer le rapport de visite' %}
    {% elseif not dossier.attestation %}
        {% set action_demande = \"Résultat Inspection\" %}
        {% set link_liste = 'app_dossier_attestation' %}
        {% if is_granted('ROLE_REFERENT') %}
            {% set link_action = 'app_dossier_attestation' %}
        {% endif %}
        {% set libelle_action = 'Confirmer Résultats Inspection' %}
    {% endif %}

    {% set demande = dossier.demande %}
    {% set installation = demande.installation %}
    
    {% if app.session.get('page_liste_dossier') is defined and app.session.get('page_liste_dossier') %}
        {% set link_liste = app.session.get('page_liste_dossier') %}
    {% endif %}

    {% set link_liste = 'app_dossier_showrapp' %}

    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">{{ action_demande }} de dossiers </span>
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
                                Détails du dossier
                            </div>
                            <div class=\"col\" align=\"right\">
                                <span class=\"text-success\">[En attente de {{ dossier.Etat }}]</span>
                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row pt-4\">
            <div class=\"col-lg-8 mb-2\">
                <fieldset id=\"synthese_demande\">
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif {% if installation.demandecourante and installation.demandecourante.numeroPassage==2 %} <span class=\"badge bg-danger\">2e VISITE</span> {% endif %}</h2>
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

                    <div class=\"container mt-4\">
                        <div class=\"row\">
                            <div>
                        {% set rub = \"\" %}
                        {% set ix = 0 %}
                        {% set les_detailverif = dossier.visiteCourante.detailVerification %}
                            {% for pt in les_detailverif %}
                                {% if rub != pt.pointverification.rubrique.id %}
                                    {% if rub %}
                                        </div>
                                    {% endif %}
                                    <div id=\"zrub_{{ ix }}\">
                                        <h5 class=\"p-2 bg-dark text-light shadow border-bottom\"> {{ pt.pointverification.rubrique.numero }}- {{ pt.pointverification.rubrique.libelle }}</h5>
                                    {% set rub = pt.pointverification.rubrique.id %}
                                    {% set ix = ix + 1 %}
                                {% endif %}
                                <div class=\"shadow p-4 pt-2 mb-3\">
                                    <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                        <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                        </svg> {{ pt.pointVerification.objetVerification }}
                                        <div class=\"float-end fw-bold\">
                                        {% if pt.sansobjet %}
                                                <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"black\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#x-octagon-fill') }}\"></use>
                                                </svg>
                                                Sans Objet
                                        {% else %}
                                            {% if pt.conclusion %}
                                                    <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"green\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check') }}\"></use>
                                                    </svg>
                                                    <span class=\"text-success\">{{ pt.pointVerification.libelleConclusion1 }}</span>
                                            {% else %}
                                                    <svg class=\"bi\" width=\"32\" height=\"32\" fill=\"red\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#x') }}\"></use>
                                                    </svg>
                                                    <span class=\"text-danger\">{{ pt.pointVerification.libelleConclusion2 }}</span>
                                            {% endif %}
                                        {% endif %}
                                        </div>
                                    </div>
                                        {% if not pt.conclusion and not pt.sansobjet %}
                                                <div class=\"fw-light ms-4 fs-8\">
                                                Commentaire: <span class=\"text-danger\">{{pt.commentaire}}</span>
                                                </div>
                                        {% endif %}
                                </div>
                            {% endfor %}

                                <div>
                                    <h5 class=\"p-2 bg-dark text-light shadow border-bottom\">Tableau 2: Mesures des prises de terre </h5>
                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Mesures des prises de terre
                                                <div class=\"float-end fw-bold\">
                                                </div>
                                            </div>
                                            <div class=\"fw-light ms-4 fs-7\">
                                                <span class=\"text-dark\">{{dossier.visiteCourante.mesurePriseTerre}}</span>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Barrette
                                                <div class=\"float-end fw-bold\">
                                                </div>
                                            </div>
                                            <div class=\"fw-light ms-4 fs-7\">
                                                <span class=\"text-dark\">{{dossier.visiteCourante.barrette}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h5 class=\"p-2 bg-dark text-light shadow border-bottom\">Autres observations </h5>
                                    <div class=\"shadow p-4 pt-2 mb-3\">
                                        <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                            <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                            </svg> Commentaire sur l'inspection
                                            <div class=\"float-end fw-bold\">
                                            </div>
                                        </div>
                                        <div class=\"fw-light ms-4 fs-8\">
                                            <span class=\"text-danger\">{{dossier.visiteCourante.commentaire2}}</span>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Photo 1
                                                <div class=\"\">
                                                {% if installation.PJPhoto1 %}
                                                    <img width=\"100%\" src=\"{{ asset('upload/photo/' ~ installation.PJPhoto1.fichier) }}\" />
                                                {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Photo 2
                                                <div class=\"\">
                                                {% if installation.PJPhoto2 %}
                                                    <img width=\"100%\" src=\"{{ asset('upload/photo/' ~ installation.PJPhoto2.fichier) }}\" />
                                                {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Photo 3
                                                <div class=\"\">
                                                {% if installation.PJPhoto3 %}
                                                    <img width=\"100%\" src=\"{{ asset('upload/photo/' ~ installation.PJPhoto3.fichier) }}\" />
                                                {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Photo 4
                                                <div class=\"\">
                                                {% if installation.PJPhoto4 %}
                                                    <img width=\"100%\" src=\"{{ asset('upload/photo/' ~ installation.PJPhoto4.fichier) }}\" />
                                                {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Signature Controleur
                                                <div class=\"\">
                                                {% if dossier.visiteCourante.signcontroleur %}
                                                    <img width=\"100%\" src=\"{{ asset('upload/photo/' ~ dossier.visiteCourante.signcontroleur.fichier) }}\" />
                                                {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"shadow p-4 pt-2 mb-3 col-lg-6\">
                                            <div class=\"border-bottom p-2 m-2 ms-0 ps-0 fs-6\">
                                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#333\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#caret-right') }}\"></use>
                                                </svg> Signature Electricien
                                                <div class=\"\">
                                                {% if dossier.visiteCourante.signelectricien %}
                                                    <img width=\"100%\" src=\"{{ asset('upload/photo/' ~ dossier.visiteCourante.signelectricien.fichier) }}\" />
                                                {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2\" id=\"paiement_demande\">
                <div id=\"validation_dossier\" class=\"mb-4\">
                    {{ form_start(dossierForm) }}
                    <div class=\"card mb-2 pb-0\">
                        <h2 class=\"fs-title\">Rejet du rapport d'inspection</h2>
                        <div class=\"row\">
                            <hr class=\"mb-3\" />
                            <div class=\"\">
                                {{ form_label(dossierForm.commentaire) }}<br />
                                {{ form_widget(dossierForm.commentaire) }}<br />
                            </div>
                        </div>  
                        <div align=\"right\">
                            <a href=\"{{ path(link_liste, {'id': dossier.id}) }}\" class=\"next action-button btn btn-secondary btn my-3\">Annuler</a>
                            <button type=\"submit\" class=\"next action-button btn btn-success btn my-3 ms-2\">Valider et rejeter le dossier</button>
                        </div>
                    </div>
                    {{ form_end(dossierForm) }}
                </div>

                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Traitement du dossier
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"{{ path('app_dossier_histo', {'id': dossier.id}) }}\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#hourglass-split\") }}\"></use></svg>
                            </a>
                        </div>
                    </h2>
                    <div class=\"row\">
                        <hr class=\"mb-3\" />
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >N° Dossier</label>
                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-0 fw-bold fs-6\" value=\"{{ dossier.demande.numero }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Date création dossier</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-success form-control py-0 fw-bold fs-6\" value=\"{{ dossier.dateCreation | date('d-m-Y') }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" class=\"fs-7\" >Usage</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fw-bold fs-6\" value=\"{{ dossier.demande.installation.usages }}\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-1 \">
                                <label class=\"fs-7\" >Puissance</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-black form-control py-0 fs-6\" value=\"{{ dossier.demande.puissance }} kW\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"{{ dossier.demande.installation.localite.nom }}\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Agence</label>
                                <input type=\"text\" disabled readonly class=\"form-control fw-bold text-black form-control py-0 fs-6\" value=\"{% if dossier.demande.installation.localite.agence %} {{ dossier.demande.installation.localite.agence.code }}{% else %} - {% endif %}\">
                            </div>
                        </div>
                        <div class=\"mb-1\">
                            <label class=\"fs-7\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"{{ dossier.demande.installation.adresse }}\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control py-0 fs-6\" value=\"{{ dossier.demande.installation.electricien.nom }} {{ dossier.demande.installation.electricien.prenom }}\">
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"mb-1\">
                                <label class=\"fs-7\" >Tél Electricien</label>
                                <input type=\"text\" disabled readonly class=\" form-control text-dark form-control fw-bold py-0 fs-6\" value=\"{{ dossier.demande.installation.electricien.telephone }}\">
                            </div>
                        </div>
                        <hr class=\"my-2 mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Référent chargé du dossier</label>
                            <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"{{ dossier.referent }}\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Contrôleur chargé du traitement</label>
                            {% if dossier.controleur %}
                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"{{ dossier.controleur }}\">
                            {% else %}
                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            {% endif %}
                        </div>
                        <div class=\"mb-3 \">
                            <label >Visite du site pour inspection</label>
                            {% if dossier.visite %}
                                <div class=\"row\">
                                    <div class=\"col-5\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Planifiée\">
                                    </div>
                                    <div class=\"col-7\">
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-success form-control py-1 fw-bold fs-6\" value=\"{{ dossier.visiteCourante.datePlanifie | date('d-m-Y à H:i') }}\">
                                    </div>
                                    <div class=\"col-12 mb-2\">
                                        Modèle Rapport d'inspection
                                        <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-dark form-control py-1 fw-bold fs-6\" value=\"{{ dossier.visiteCourante.rapport.libelle }} - {{ dossier.visiteCourante.rapport.PointVerification.count }} points de vérification\">
                                    </div>
                                </div>
                            {% else %}
                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            {% endif %}
                        </div>
                        <div class=\"mb-3 \">
                            <label >Rapport de visite</label>
                            {% if dossier.rapport %}
                                <input type=\"text\" disabled readonly class=\"bg-warning bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Visite réalisée et Rapport élaboré\">
                            {% else %}
                                <input type=\"text\" disabled readonly class=\"bg-light border-light bg-opacity-25 form-control text-danger form-control py-1 fw-bold fs-6\" value=\"Non finalisé\">
                            {% endif %}
                        </div>
                        <div class=\"mb-3 \">
                            <label >Résultat de conformité</label>
                            {% if dossier.attestation %}
                                <input type=\"text\" disabled readonly class=\"bg-success bg-opacity-25 form-control text-black form-control py-1 fw-bold fs-6\" value=\"Résultat inspection disponile\">
                            {% else %}
                                <input type=\"text\" disabled readonly class=\"bg-success  form-control text-light form-control py-1 fw-bold fs-6\" value=\"Non défini\">
                            {% endif %}
                        </div>
                    </div>  
                </div>

            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
    {% set demande = dossier.demande %}
    {% set paiement = demande.paiement %}
    {% set installation = demande.installation %}
<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"{{ paiement.mode }}\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

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
", "dossier/rejetrapport.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/rejetrapport.html.twig");
    }
}
