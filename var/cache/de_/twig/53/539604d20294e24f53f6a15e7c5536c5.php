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

/* remboursement/showpop.html.twig */
class __TwigTemplate_87cb3e332b9f102e057bf2a79548ae16 extends Template
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
        return "base_modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "remboursement/showpop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "remboursement/showpop.html.twig"));

        $this->parent = $this->loadTemplate("base_modal.html.twig", "remboursement/showpop.html.twig", 1);
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
        echo "
    ";
        // line 27
        $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 27, $this->source); })()), "demande", [], "any", false, false, false, 27);
        // line 28
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 28, $this->source); })()), "installation", [], "any", false, false, false, 28);
        // line 29
        echo "    
    ";
        // line 30
        $context["link_liste"] = "stat";
        // line 31
        echo "

    <section class=\"\">
        <a data-bs-dismiss=\"modal\" class=\"closeModal float-end next action-button btn btn-sm btn-secondary \">Fermer</a>
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["action_demande"]) || array_key_exists("action_demande", $context) ? $context["action_demande"] : (function () { throw new RuntimeError('Variable "action_demande" does not exist.', 37, $this->source); })()), "html", null, true);
        echo " de demandes </span>
            </a>
        </header>

        <div class=\"container\">
            <nav class=\"navbar shadow bg-warning border border-dark my-2 p-0\">
                <div class=\"container-fluid ps-4\">
                        <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                            <div class=\"col\">
                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                </svg>
                                Détails de la demande 
                            </div>
                            <div class=\"col\" align=\"right\">
                                <span class=\"text-success\">[";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 52, $this->source); })()), "demandeCourante", [], "any", false, false, false, 52), "etat", [], "any", false, false, false, 52), "html", null, true);
        echo "]</span>
                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                <fieldset id=\"synthese_demande\">
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title\">Puissance demandée et tarif ";
        // line 64
        if (((isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 64, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 64, $this->source); })()), "numeroPassage", [], "any", false, false, false, 64) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span>";
        }
        echo "</h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Numéro Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 69, $this->source); })()), "installation", [], "any", false, false, false, 69), "demandeCourante", [], "any", false, false, false, 69), "numero", [], "any", false, false, false, 69), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 73, $this->source); })()), "installation", [], "any", false, false, false, 73), "demandeCourante", [], "any", false, false, false, 73), "dateCreation", [], "any", false, false, false, 73), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 77, $this->source); })()), "installation", [], "any", false, false, false, 77), "demandeCourante", [], "any", false, false, false, 77), "puissance", [], "any", false, false, false, 77), "html", null, true);
        echo " kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 81, $this->source); })()), "installation", [], "any", false, false, false, 81), "demandeCourante", [], "any", false, false, false, 81), "cout", [], "any", false, false, false, 81), "html", null, true);
        echo " FCFA\">
                            </div>
                        </div>  
                    </div>

                    
                ";
        // line 88
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 88, $this->source); })()), "installation", [], "any", false, false, false, 88), "electricien", [], "any", false, false, false, 88)) {
            // line 89
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black titre_bloc_4\">
                            Informations sur l'électricien
                        </h2>
                        <div class=\"row bloc_4\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Nom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 97, $this->source); })()), "installation", [], "any", false, false, false, 97), "electricien", [], "any", false, false, false, 97), "nom", [], "any", false, false, false, 97), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 101, $this->source); })()), "installation", [], "any", false, false, false, 101), "electricien", [], "any", false, false, false, 101), "prenom", [], "any", false, false, false, 101), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 105, $this->source); })()), "installation", [], "any", false, false, false, 105), "electricien", [], "any", false, false, false, 105), "localite", [], "any", false, false, false, 105), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 109, $this->source); })()), "installation", [], "any", false, false, false, 109), "electricien", [], "any", false, false, false, 109), "adresse", [], "any", false, false, false, 109), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 113, $this->source); })()), "installation", [], "any", false, false, false, 113), "electricien", [], "any", false, false, false, 113), "telephone", [], "any", false, false, false, 113), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 113, $this->source); })()), "installation", [], "any", false, false, false, 113), "electricien", [], "any", false, false, false, 113), "autreNumTelephone", [], "any", false, false, false, 113), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 117, $this->source); })()), "installation", [], "any", false, false, false, 117), "electricien", [], "any", false, false, false, 117), "email", [], "any", false, false, false, 117), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 121, $this->source); })()), "installation", [], "any", false, false, false, 121), "electricien", [], "any", false, false, false, 121), "typePiece", [], "any", false, false, false, 121), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 125, $this->source); })()), "installation", [], "any", false, false, false, 125), "electricien", [], "any", false, false, false, 125), "numPiece", [], "any", false, false, false, 125), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Electricien</label><br />
                            ";
            // line 129
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 129, $this->source); })()), "installation", [], "any", false, false, false, 129), "PJElectricien", [], "any", false, false, false, 129)) {
                // line 130
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 133
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 133, $this->source); })()), "installation", [], "any", false, false, false, 133), "id", [], "any", false, false, false, 133), "type" => "electricien"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 133, $this->source); })()), "installation", [], "any", false, false, false, 133), "PJElectricien", [], "any", false, false, false, 133), "fichier", [], "any", false, false, false, 133), "html", null, true);
                echo " </span>
                            ";
            } else {
                // line 135
                echo "                                    <span class=\"text-danger pt fs-8\">N/D</span>
                            ";
            }
            // line 137
            echo "                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 140
        echo "                                

                    ";
        // line 143
        echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_1\">
                        Données de base de la demande
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_1\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 148
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
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 156, $this->source); })()), "usages", [], "any", false, false, false, 156), "html", null, true);
        echo "\" id=\"form_usage\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 160
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 160, $this->source); })()), "alimente", [], "any", false, false, false, 160)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_alimente\">
                            </div>
                            ";
        // line 162
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 162, $this->source); })()), "compteur", [], "any", false, false, false, 162)) {
            // line 163
            echo "                                <div class=\"col-lg-4 alimente1\">
                                    <label for=\"form_compteur\" >Numéro Compteur</label>
                                    <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 165, $this->source); })()), "compteur", [], "any", false, false, false, 165), "html", null, true);
            echo "\" id=\"form_compteur\">
                                </div>
                                <div class=\"col-lg-4 alimente1\">
                                    <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                    <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 169, $this->source); })()), "abonnement", [], "any", false, false, false, 169), "html", null, true);
            echo "\" id=\"form_abonnement\">
                                </div>
                                <div class=\"col-lg-4 alimente1\">
                                    <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                    <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 173, $this->source); })()), "grstReseau", [], "any", false, false, false, 173), "html", null, true);
            echo "\" id=\"form_grstReseau\">
                                </div>
                            ";
        }
        // line 176
        echo "                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4\">
                                <label for=\"form_localite\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 179, $this->source); })()), "localite", [], "any", false, false, false, 179), "html", null, true);
        echo "\" id=\"form_localite\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_adresse\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 183, $this->source); })()), "adresse", [], "any", false, false, false, 183), "html", null, true);
        echo "\" id=\"form_adresse\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_habitation\" >Complément Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 187, $this->source); })()), "habitation", [], "any", false, false, false, 187), "html", null, true);
        echo "\" id=\"form_habitation\">
                            </div>
                            ";
        // line 189
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 189, $this->source); })()), "lattitude", [], "any", false, false, false, 189)) {
            // line 190
            echo "                                <div class=\"col-lg-2\">
                                    <label for=\"form_lattitude\" >Latitude</label>
                                    <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 192, $this->source); })()), "lattitude", [], "any", false, false, false, 192), "html", null, true);
            echo "\" id=\"form_lattitude\">
                                </div>
                                <div class=\"col-lg-2\">
                                    <label for=\"form_longitude\" >Longitude</label>
                                    <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 196, $this->source); })()), "longitude", [], "any", false, false, false, 196), "html", null, true);
            echo "\" id=\"form_longitude\">
                                </div>
                            ";
        }
        // line 199
        echo "                        </div>
                    </div>

                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2\" id=\"paiement_demande\">
                    ";
        // line 206
        if (twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 206, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 206, $this->source); })()), "createdBy", [], "any", false, false, false, 206)], "method", false, false, false, 206)) {
            // line 207
            echo "                        ";
            $context["creator"] = twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 207, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 207, $this->source); })()), "createdBy", [], "any", false, false, false, 207)], "method", false, false, false, 207);
            // line 208
            echo "                        <div align=\"left\" class=\"border border-warning shadow p-2 fs-8 mb-3 fw-light\">
                            <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["creator"]) || array_key_exists("creator", $context) ? $context["creator"] : (function () { throw new RuntimeError('Variable "creator" does not exist.', 209, $this->source); })()), "nomComplet", [], "any", false, false, false, 209), "html", null, true);
            echo "</span></div>
                            <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">";
            // line 210
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 210, $this->source); })()), "createdAt", [], "any", false, false, false, 210), "d-m-Y à H:i:s"), "html", null, true);
            echo "</span></div>
                        </div>
                    ";
        }
        // line 213
        echo "                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Données sur le paiement
                    </h2>
                    <div class=\"row\">
                        <hr class=\"mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Statut Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control text-success form-control py-1 fw-bold fs-6\" value=\"";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 220, $this->source); })()), "demande", [], "any", false, false, false, 220), "etat", [], "any", false, false, false, 220), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Mode Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"";
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 224, $this->source); })()), "mode", [], "any", false, false, false, 224), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 reference\">
                            <label >Référence Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 228, $this->source); })()), "reference", [], "any", false, false, false, 228), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Observations</label>
                            <textarea type=\"text\" rows=\"4\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\">";
        // line 232
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 232, $this->source); })()), "observation", [], "any", false, false, false, 232), "html", null, true);
        echo "</textarea>
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

    // line 241
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 242
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 242, $this->source); })()), "demande", [], "any", false, false, false, 242);
        // line 243
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 243, $this->source); })()), "installation", [], "any", false, false, false, 243);
        // line 244
        echo "<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 248, $this->source); })()), "mode", [], "any", false, false, false, 248), "html", null, true);
        echo "\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        if (\"";
        // line 254
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 254, $this->source); })()), "alimente", [], "any", false, false, false, 254), "html", null, true);
        echo "\" == 1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (\"";
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 262, $this->source); })()), "collectif", [], "any", false, false, false, 262), "html", null, true);
        echo "\" == 1) {
            \$('.collectif1').show(); \$('.collectif0').hide();
        }
        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        valSel=\"";
        // line 266
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 266, $this->source); })()), "typeConstruction", [], "any", false, false, false, 266), "html", null, true);
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
        // line 279
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 279, $this->source); })()), "intervenantAutre", [], "any", false, false, false, 279), "html", null, true);
        echo "\";
        if (valSel==\"Oui\") {
            \$('.intervenantAutre1').show(); 
        }
        valSel=\"";
        // line 283
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 283, $this->source); })()), "natureTravaux", [], "any", false, false, false, 283), "html", null, true);
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
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-up"), "html", null, true);
        echo "\"></use></svg>Cacher ...'); 
                \$(le_btn_bloc).prop('title', 'Cacher les détails');
                \$(le_btn_bloc).addClass(\"text-danger\");
                \$(le_btn_bloc).removeClass(\"text-warning\");
            } else {
                \$(le_bloc).hide();
                \$(le_titre_bloc).removeClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 313
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
        return "remboursement/showpop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  599 => 313,  589 => 306,  563 => 283,  556 => 279,  540 => 266,  533 => 262,  522 => 254,  513 => 248,  507 => 244,  504 => 243,  501 => 242,  491 => 241,  473 => 232,  466 => 228,  459 => 224,  452 => 220,  443 => 213,  437 => 210,  433 => 209,  430 => 208,  427 => 207,  425 => 206,  416 => 199,  410 => 196,  403 => 192,  399 => 190,  397 => 189,  392 => 187,  385 => 183,  378 => 179,  373 => 176,  367 => 173,  360 => 169,  353 => 165,  349 => 163,  347 => 162,  338 => 160,  331 => 156,  320 => 148,  313 => 143,  309 => 140,  303 => 137,  299 => 135,  292 => 133,  287 => 131,  284 => 130,  282 => 129,  275 => 125,  268 => 121,  261 => 117,  252 => 113,  245 => 109,  238 => 105,  231 => 101,  224 => 97,  214 => 89,  211 => 88,  202 => 81,  195 => 77,  188 => 73,  181 => 69,  171 => 64,  156 => 52,  148 => 47,  135 => 37,  127 => 31,  125 => 30,  122 => 29,  119 => 28,  117 => 27,  114 => 26,  112 => 25,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_modal.html.twig' %}
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

    {% set demande = paiement.demande %}
    {% set installation = demande.installation %}
    
    {% set link_liste = 'stat' %}


    <section class=\"\">
        <a data-bs-dismiss=\"modal\" class=\"closeModal float-end next action-button btn btn-sm btn-secondary \">Fermer</a>
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">{{ action_demande }} de demandes </span>
            </a>
        </header>

        <div class=\"container\">
            <nav class=\"navbar shadow bg-warning border border-dark my-2 p-0\">
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
                <fieldset id=\"synthese_demande\">
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title\">Puissance demandée et tarif {% if demande and demande.numeroPassage == 2 %} <span class=\"badge bg-danger\">2e VISITE</span>{% endif %}</h2>
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
                            {% if installation.compteur %}
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
                            {% endif %}
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
                            {% if installation.lattitude %}
                                <div class=\"col-lg-2\">
                                    <label for=\"form_lattitude\" >Latitude</label>
                                    <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.lattitude }}\" id=\"form_lattitude\">
                                </div>
                                <div class=\"col-lg-2\">
                                    <label for=\"form_longitude\" >Longitude</label>
                                    <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.longitude }}\" id=\"form_longitude\">
                                </div>
                            {% endif %}
                        </div>
                    </div>

                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2\" id=\"paiement_demande\">
                    {% if tools.getUtilisateur(installation.createdBy) %}
                        {% set creator = tools.getUtilisateur(installation.createdBy) %}
                        <div align=\"left\" class=\"border border-warning shadow p-2 fs-8 mb-3 fw-light\">
                            <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">{{creator.nomComplet}}</span></div>
                            <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">{{installation.createdAt|date(\"d-m-Y à H:i:s\")}}</span></div>
                        </div>
                    {% endif %}
                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Données sur le paiement
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
", "remboursement/showpop.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/remboursement/showpop.html.twig");
    }
}
