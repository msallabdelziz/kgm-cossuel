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

/* remboursement/show.html.twig */
class __TwigTemplate_a8f40aabf6650550c0afbc0547bf015a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "remboursement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "remboursement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "remboursement/show.html.twig", 1);
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
        $context["paiement"] = twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 25, $this->source); })()), "paiement", [], "any", false, false, false, 25);
        // line 26
        echo "    ";
        $context["action_demande"] = "Paiement";
        // line 27
        echo "    ";
        $context["link_liste"] = "app_installation_index2";
        // line 28
        echo "
    ";
        // line 29
        $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 29, $this->source); })()), "demande", [], "any", false, false, false, 29);
        // line 30
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 30, $this->source); })()), "installation", [], "any", false, false, false, 30);
        // line 31
        echo "    
    ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 32), "get", [0 => "page_liste_demande"], "method", true, true, false, 32) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "session", [], "any", false, false, false, 32), "get", [0 => "page_liste_demande"], "method", false, false, false, 32))) {
            // line 33
            echo "        ";
            $context["link_liste"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "session", [], "any", false, false, false, 33), "get", [0 => "page_liste_demande"], "method", false, false, false, 33);
            // line 34
            echo "    ";
        }
        // line 35
        echo "

    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Demandes de remboursement </span>
            </a>
        </header>

        <div class=\"container\">
            <nav class=\"navbar shadow bg-warning border border-dark mt-2 p-0\">
                <div class=\"container-fluid ps-4\">
                        <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                            <div class=\"col\">
                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                </svg>
                                Détails de la demande 
                            </div>
                            <div class=\"col\" align=\"right\">
                                ";
        // line 56
        echo "                            </div>
                        </div>

                </div>
            </nav>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 65, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 65, $this->source); })()), "createdBy", [], "any", false, false, false, 65)], "method", false, false, false, 65)) {
            // line 66
            echo "                    ";
            $context["creator"] = twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 66, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 66, $this->source); })()), "createdBy", [], "any", false, false, false, 66)], "method", false, false, false, 66);
            // line 67
            echo "                    <div align=\"left\" class=\"float-start mt-2 border border-warning shadow p-2 fs-8 fw-light\">
                        <div><label class=\"text-warning\">Créée par:</label> <span class=\"\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["creator"]) || array_key_exists("creator", $context) ? $context["creator"] : (function () { throw new RuntimeError('Variable "creator" does not exist.', 68, $this->source); })()), "nomComplet", [], "any", false, false, false, 68), "html", null, true);
            echo "</span></div>
                        <div><label class=\"text-warning\">Créée le:</label> <span class=\"\">";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 69, $this->source); })()), "createdAt", [], "any", false, false, false, 69), "d-m-Y à H:i:s"), "html", null, true);
            echo "</span></div>
                    </div>
                ";
        }
        // line 72
        echo "                <div align=\"right\">
                    <a target=\"_blank\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpdf", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 73, $this->source); })()), "installation", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-outline-warning btn my-3\">PDF Demande</a>
                    <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link_liste"]) || array_key_exists("link_liste", $context) ? $context["link_liste"] : (function () { throw new RuntimeError('Variable "link_liste" does not exist.', 74, $this->source); })()));
        echo "\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour à la liste</a>
                </div>
                <fieldset id=\"synthese_demande\">
                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 78, $this->source); })()), "demandecourante", [], "any", false, false, false, 78) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 78, $this->source); })()), "demandecourante", [], "any", false, false, false, 78), "numeroPassage", [], "any", false, false, false, 78) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
        }
        echo "</h2>
                        <div class=\"row bloc_0\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Numéro Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 83, $this->source); })()), "installation", [], "any", false, false, false, 83), "demandeCourante", [], "any", false, false, false, 83), "numero", [], "any", false, false, false, 83), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Date Demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 87, $this->source); })()), "installation", [], "any", false, false, false, 87), "demandeCourante", [], "any", false, false, false, 87), "dateCreation", [], "any", false, false, false, 87), "d-m-Y"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Puissance</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 91, $this->source); })()), "installation", [], "any", false, false, false, 91), "demandeCourante", [], "any", false, false, false, 91), "puissance", [], "any", false, false, false, 91), "html", null, true);
        echo " kW\">
                            </div>
                            <div class=\"col-lg-3\">
                                <label >Cout de la demande</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 95, $this->source); })()), "installation", [], "any", false, false, false, 95), "demandeCourante", [], "any", false, false, false, 95), "cout", [], "any", false, false, false, 95), "html", null, true);
        echo " FCFA\">
                            </div>
                        </div>  
                    </div>

                    
                ";
        // line 102
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 102, $this->source); })()), "installation", [], "any", false, false, false, 102), "electricien", [], "any", false, false, false, 102)) {
            // line 103
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title text-black titre_bloc_4\">
                            Informations sur l'électricien
                            ";
            // line 106
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 107
                echo "                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit2", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107)]), "html", null, true);
                echo "\" class=\" pt fs-8 text-dark\">
                                <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                    <use xlink:href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                </svg>
                                </a>
                            ";
            }
            // line 113
            echo "                        </h2>
                        <div class=\"row bloc_4\">
                            <hr class=\"mb-3\" />
                            <div class=\"col-lg-3\">
                                <label >Nom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 118, $this->source); })()), "installation", [], "any", false, false, false, 118), "electricien", [], "any", false, false, false, 118), "nom", [], "any", false, false, false, 118), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 122, $this->source); })()), "installation", [], "any", false, false, false, 122), "electricien", [], "any", false, false, false, 122), "prenom", [], "any", false, false, false, 122), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 126, $this->source); })()), "installation", [], "any", false, false, false, 126), "electricien", [], "any", false, false, false, 126), "localite", [], "any", false, false, false, 126), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 130, $this->source); })()), "installation", [], "any", false, false, false, 130), "electricien", [], "any", false, false, false, 130), "adresse", [], "any", false, false, false, 130), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 134, $this->source); })()), "installation", [], "any", false, false, false, 134), "electricien", [], "any", false, false, false, 134), "telephone", [], "any", false, false, false, 134), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 134, $this->source); })()), "installation", [], "any", false, false, false, 134), "electricien", [], "any", false, false, false, 134), "autreNumTelephone", [], "any", false, false, false, 134), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 138, $this->source); })()), "installation", [], "any", false, false, false, 138), "electricien", [], "any", false, false, false, 138), "email", [], "any", false, false, false, 138), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 142, $this->source); })()), "installation", [], "any", false, false, false, 142), "electricien", [], "any", false, false, false, 142), "typePiece", [], "any", false, false, false, 142), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 146, $this->source); })()), "installation", [], "any", false, false, false, 146), "electricien", [], "any", false, false, false, 146), "numPiece", [], "any", false, false, false, 146), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Electricien</label><br />
                            ";
            // line 150
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 150, $this->source); })()), "installation", [], "any", false, false, false, 150), "PJElectricien", [], "any", false, false, false, 150)) {
                // line 151
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 154, $this->source); })()), "installation", [], "any", false, false, false, 154), "id", [], "any", false, false, false, 154), "type" => "electricien"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 154, $this->source); })()), "installation", [], "any", false, false, false, 154), "PJElectricien", [], "any", false, false, false, 154), "fichier", [], "any", false, false, false, 154), "html", null, true);
                echo " </span>
                            ";
            } else {
                // line 156
                echo "                                    <span class=\"text-danger pt fs-8\">N/D</span>
                            ";
            }
            // line 158
            echo "                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 161
        echo "                                

                    ";
        // line 164
        echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_1\">
                        Données de base de la demande
                        ";
        // line 167
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 168
            echo "                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit1", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 168, $this->source); })()), "id", [], "any", false, false, false, 168)]), "html", null, true);
            echo "\" class=\" pt fs-8 text-dark\">
                            <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                <use xlink:href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                            </svg>
                            </a>
                        ";
        }
        // line 174
        echo "                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_1\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 176
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
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 184, $this->source); })()), "usages", [], "any", false, false, false, 184), "html", null, true);
        echo "\" id=\"form_usage\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 188
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 188, $this->source); })()), "alimente", [], "any", false, false, false, 188)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_alimente\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_compteur\" >Numéro Compteur</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 192, $this->source); })()), "compteur", [], "any", false, false, false, 192), "html", null, true);
        echo "\" id=\"form_compteur\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 196
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 196, $this->source); })()), "abonnement", [], "any", false, false, false, 196), "html", null, true);
        echo "\" id=\"form_abonnement\">
                            </div>
                            <div class=\"col-lg-4 alimente1\">
                                <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 200, $this->source); })()), "grstReseau", [], "any", false, false, false, 200), "html", null, true);
        echo "\" id=\"form_grstReseau\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4\">
                                <label for=\"form_localite\" >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 205, $this->source); })()), "localite", [], "any", false, false, false, 205), "html", null, true);
        echo "\" id=\"form_localite\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_adresse\" >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 209, $this->source); })()), "adresse", [], "any", false, false, false, 209), "html", null, true);
        echo "\" id=\"form_adresse\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label for=\"form_habitation\" >Complément Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 213
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 213, $this->source); })()), "habitation", [], "any", false, false, false, 213), "html", null, true);
        echo "\" id=\"form_habitation\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_lattitude\" >Latitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 217, $this->source); })()), "lattitude", [], "any", false, false, false, 217), "html", null, true);
        echo "\" id=\"form_lattitude\">
                            </div>
                            <div class=\"col-lg-2\">
                                <label for=\"form_longitude\" >Longitude</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 221, $this->source); })()), "longitude", [], "any", false, false, false, 221), "html", null, true);
        echo "\" id=\"form_longitude\">
                            </div>
                        </div>
                    </div>

                    ";
        // line 227
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 227, $this->source); })()), "typeConstruction", [], "any", false, false, false, 227)) {
            // line 228
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_2\">
                            Caractéristiques du site
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_2\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 233
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
            // line 241
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 241, $this->source); })()), "collectif", [], "any", false, false, false, 241)) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "\" id=\"form_collectif\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_nomSite\" >Nom du site</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 245, $this->source); })()), "nomSite", [], "any", false, false, false, 245), "html", null, true);
            echo "\" id=\"form_nomSite\">
                            </div>
                            <div class=\"col-lg-4 collectif1\">
                                <label for=\"form_logement\" >Nombre de logements</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 249, $this->source); })()), "logement", [], "any", false, false, false, 249), "html", null, true);
            echo "\" id=\"form_logement\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-6\">
                                <label for=\"form_typeConstruction\" >Type de construction</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 254, $this->source); })()), "typeConstruction", [], "any", false, false, false, 254), "nom", [], "any", false, false, false, 254), "html", null, true);
            echo "\" id=\"form_typeConstruction\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1\">
                                <label for=\"form_niveau\" >Nombre de niveaux</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 258, $this->source); })()), "niveau", [], "any", false, false, false, 258), "html", null, true);
            echo "\" id=\"form_niveau\">
                            </div>
                            <div class=\"col-lg-6 typeConstruction3\">
                                <label for=\"form_activite\" >Activités</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 262, $this->source); })()), "activite", [], "any", false, false, false, 262), "html", null, true);
            echo "\" id=\"form_activite\">
                            </div>
                            <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                <label for=\"form_priece\" >Nombre de pièces</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 266, $this->source); })()), "priece", [], "any", false, false, false, 266), "html", null, true);
            echo "\" id=\"form_priece\">
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 271
        echo "
                    ";
        // line 273
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 273, $this->source); })()), "natureTravaux", [], "any", false, false, false, 273)) {
            // line 274
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_3\">
                            Caractéristiques de l'installation
                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_3\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 279
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
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 287, $this->source); })()), "natureTravaux", [], "any", false, false, false, 287), "html", null, true);
            echo "\" id=\"form_natureTravaux\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf15\" >Neufs_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 291, $this->source); })()), "neuf15", [], "any", false, false, false, 291), "html", null, true);
            echo "\" id=\"form_neufs_15\">
                                <label for=\"form_existant15\" >Existants_15</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 293
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 293, $this->source); })()), "existant15", [], "any", false, false, false, 293), "html", null, true);
            echo "\" id=\"form_existant15\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neuf25\" >Neufs_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 297
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 297, $this->source); })()), "neuf25", [], "any", false, false, false, 297), "html", null, true);
            echo "\" id=\"form_neuf25\">
                                <label for=\"form_existant25\" >Existants_25</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 299
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 299, $this->source); })()), "existant25", [], "any", false, false, false, 299), "html", null, true);
            echo "\" id=\"form_existant25\">
                            </div>
                            <div class=\"col-lg-2 natureTravaux1\">
                                <label for=\"form_neufAutre\" >Neufs_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 303
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 303, $this->source); })()), "neufAutre", [], "any", false, false, false, 303), "html", null, true);
            echo "\" id=\"form_neufAutre\">
                                <label for=\"form_existantAutre\" >Existants_Autres</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 305, $this->source); })()), "existantAutre", [], "any", false, false, false, 305), "html", null, true);
            echo "\" id=\"form_existantAutre\">
                            </div>
                            <hr class=\"my-3\" />
                            <div class=\"col-lg-4 intervenantAutre1\">
                                <label for=\"form_intervenantAutre\" >Autres intervenants ?</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 310, $this->source); })()), "intervenantAutre", [], "any", false, false, false, 310), "html", null, true);
            echo "\" id=\"form_intervenantAutre\">
                            </div>
                            <div class=\"col-lg-8 intervenantAutre1\">
                                <label for=\"form_intervenant\" >Intervenants</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 314
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 314, $this->source); })()), "intervenant", [], "any", false, false, false, 314), "html", null, true);
            echo "\" id=\"form_intervenant\">
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 319
        echo "
                    ";
        // line 321
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 321, $this->source); })()), "proprietaire", [], "any", false, false, false, 321)) {
            // line 322
            echo "                    <div class=\"card mb-2\">
                        <h2 class=\"fs-title titre_bloc_5\">
                            Informations sur le propriétaire de l'installation
                            ";
            // line 325
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 326
                echo "                                <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit3", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 326, $this->source); })()), "id", [], "any", false, false, false, 326)]), "html", null, true);
                echo "\" class=\" pt fs-8 text-dark\">
                                <svg class=\"bi mb-1 ms-2\" width=\"16\" height=\"16\" fill=\"red\" title=\"Modifier les informations\">
                                    <use xlink:href=\"";
                // line 328
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                echo "\"></use>
                                </svg>
                                </a>
                            ";
            }
            // line 332
            echo "                            <div class=\"float-end\">
                                <a class=\"pt fs-7 text-warning btn_bloc_5\" title=\"Afficher les détails\">
                                <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
            // line 334
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
            // line 342
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 342, $this->source); })()), "proprietaire", [], "any", false, false, false, 342), "nom", [], "any", false, false, false, 342), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-5\">
                                <label >Prénom</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 346
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 346, $this->source); })()), "proprietaire", [], "any", false, false, false, 346), "prenom", [], "any", false, false, false, 346), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Localité</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 350, $this->source); })()), "proprietaire", [], "any", false, false, false, 350), "localite", [], "any", false, false, false, 350), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-8\">
                                <label >Adresse</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 354, $this->source); })()), "proprietaire", [], "any", false, false, false, 354), "adresse", [], "any", false, false, false, 354), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Téléphone</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 358
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 358, $this->source); })()), "proprietaire", [], "any", false, false, false, 358), "telephone", [], "any", false, false, false, 358), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Email</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 362
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 362, $this->source); })()), "proprietaire", [], "any", false, false, false, 362), "email", [], "any", false, false, false, 362), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Type de pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 366
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 366, $this->source); })()), "proprietaire", [], "any", false, false, false, 366), "typePiece", [], "any", false, false, false, 366), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label >Numéro Pièce</label>
                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 370
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 370, $this->source); })()), "proprietaire", [], "any", false, false, false, 370), "numPiece", [], "any", false, false, false, 370), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"col-lg-4 mt-2\">
                                <label >Scan CNI Propriétaire</label><br />
                            ";
            // line 374
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 374, $this->source); })()), "PJProprietaire", [], "any", false, false, false, 374)) {
                // line 375
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 376
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 378
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 378, $this->source); })()), "id", [], "any", false, false, false, 378), "type" => "proprietaire"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 378, $this->source); })()), "PJProprietaire", [], "any", false, false, false, 378), "fichier", [], "any", false, false, false, 378), "html", null, true);
                echo " </span>
                            ";
            } else {
                // line 380
                echo "                                    <span class=\"text-danger pt fs-8\">N/D</span>
                            ";
            }
            // line 382
            echo "                            </div>

                            <div class=\"col-lg-4 mt-2\">
                                <label >";
            // line 385
            if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 385, $this->source); })()), "usages", [], "any", false, false, false, 385) != "erp_ert")) {
                echo "Titre de propriété";
            } else {
                echo "Documents Techniques";
            }
            echo "</label><br />
                            ";
            // line 386
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 386, $this->source); })()), "PJDossierTechnique", [], "any", false, false, false, 386)) {
                // line 387
                echo "                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                        <use xlink:href=\"";
                // line 388
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                    </svg>
                                    <span onclick=\"window.open('";
                // line 390
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 390, $this->source); })()), "id", [], "any", false, false, false, 390), "type" => "dosstech"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 390, $this->source); })()), "PJDossierTechnique", [], "any", false, false, false, 390), "fichier", [], "any", false, false, false, 390), "html", null, true);
                echo " </span>
                            ";
            } else {
                // line 392
                echo "                                    <span class=\"text-danger pt fs-8\">N/D</span>
                            ";
            }
            // line 394
            echo "                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 398
        echo "                </fieldset>
            </div>

            <div class=\"col-lg-4 mb-2\" id=\"paiement_demande\">
                <div align=\"right\">
                        ";
        // line 403
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DAF") &&  !twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 403, $this->source); })()), "rejete", [], "any", false, false, false, 403)) &&  !twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 403, $this->source); })()), "valide", [], "any", false, false, false, 403))) {
            // line 404
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remboursement_rejet", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 404, $this->source); })()), "id", [], "any", false, false, false, 404)]), "html", null, true);
            echo "\" type=\"button\" class=\"next action-button btn btn-danger btn my-3 ms-2\">Rejeter</a>
                        <a href=\"";
            // line 405
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remboursement_add2", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 405, $this->source); })()), "id", [], "any", false, false, false, 405)]), "html", null, true);
            echo "\" type=\"button\" class=\"next action-button btn btn-success btn my-3 ms-2\">Valider Remboursement</a>
                        ";
            // line 407
            echo "                        ";
        } else {
            // line 408
            echo "                        <div class=\"my-4 mb-3\">
                            ";
            // line 409
            if (twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 409, $this->source); })()), "rejete", [], "any", false, false, false, 409)) {
                // line 410
                echo "                                <span class=\"badge bg-danger p-2 fs-6\">Demande de remboursement rejetée</span>
                            ";
            }
            // line 412
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 412, $this->source); })()), "valide", [], "any", false, false, false, 412)) {
                // line 413
                echo "                                <span class=\"badge bg-success p-2 fs-6\">Demande de remboursement validée</span>
                            ";
            }
            // line 415
            echo "                        </div>
                        ";
        }
        // line 417
        echo "                </div>                                
                <div class=\"card mb-2 pb-0\">
                    <h2 class=\"fs-title\">Données sur le paiement
                        <div class=\"float-end\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal\" href=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_histo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 421, $this->source); })()), "id", [], "any", false, false, false, 421)]), "html", null, true);
        echo "\" title=\"Historique du traitement\">
                                <svg class=\"bi pt\" width=\"24\" height=\"24\" fill=\"#dc3545\"><use xlink:href=\"";
        // line 422
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
        // line 430
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 430, $this->source); })()), "demande", [], "any", false, false, false, 430), "etat", [], "any", false, false, false, 430), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Mode Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"";
        // line 434
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 434, $this->source); })()), "mode", [], "any", false, false, false, 434), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3 \">
                            <label >Montant Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"";
        // line 438
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 438, $this->source); })()), "cout", [], "any", false, false, false, 438), 0, "", " "), "html", null, true);
        echo " FCFA\">
                        </div>
                        <div class=\"mb-3 reference\">
                            <label >Référence Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"";
        // line 442
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 442, $this->source); })()), "reference", [], "any", false, false, false, 442), "html", null, true);
        echo "\">
                        </div>
                        ";
        // line 444
        if (twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 444, $this->source); })()), "observation", [], "any", false, false, false, 444)) {
            // line 445
            echo "                        <div class=\"mb-3 \">
                            <label >Observations sur Paiement</label>
                            <textarea type=\"text\" rows=\"4\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\">";
            // line 447
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 447, $this->source); })()), "observation", [], "any", false, false, false, 447), "html", null, true);
            echo "</textarea>
                        </div>
                        ";
        }
        // line 450
        echo "                        <div class=\"mb-3\">
                            <label class=\"text-danger\" >Date remboursement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6 bg-warning bg-opacity-50\" value=\"";
        // line 452
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 452, $this->source); })()), "dateDemande", [], "any", false, false, false, 452), "d-m-Y"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"text-danger\" >Montant remboursement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6 bg-warning bg-opacity-50\" value=\"";
        // line 456
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 456, $this->source); })()), "montant", [], "any", false, false, false, 456), 0, "", " "), "html", null, true);
        echo " FCFA\">
                        </div>
                        <div class=\"mb-3 \">
                            <label class=\"text-danger\">Motif Remboursement</label>
                            <textarea type=\"text\" rows=\"4\" disabled readonly class=\"form-control form-control-sm py-1 border-secondary bg-warning bg-opacity-50 fs-7\">";
        // line 460
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 460, $this->source); })()), "motif", [], "any", false, false, false, 460), "html", null, true);
        echo "</textarea>
                        </div>
                    ";
        // line 462
        if ((twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 462, $this->source); })()), "rejete", [], "any", false, false, false, 462) || twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 462, $this->source); })()), "valide", [], "any", false, false, false, 462))) {
            // line 463
            echo "                        <hr class=\"mb-3\" />
                        <div class=\"mb-3 \">
                            <label >Statut Remboursement</label>
                            ";
            // line 466
            if (twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 466, $this->source); })()), "rejete", [], "any", false, false, false, 466)) {
                // line 467
                echo "                                <input type=\"text\" disabled readonly class=\"form-control text-danger bg-danger bg-opacity-25 form-control py-1 fw-bold fs-6\" value=\"Rejeté\">
                            ";
            }
            // line 469
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 469, $this->source); })()), "valide", [], "any", false, false, false, 469)) {
                // line 470
                echo "                                <input type=\"text\" disabled readonly class=\"form-control text-success bg-success bg-opacity-25 form-control py-1 fw-bold fs-6\" value=\"Validé\">
                            ";
            }
            // line 472
            echo "                        </div>
                        ";
            // line 473
            if (twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 473, $this->source); })()), "rejete", [], "any", false, false, false, 473)) {
                // line 474
                echo "                            <div class=\"mb-3 \">
                                <label class=\"\">Motif Rejet</label>
                                <textarea type=\"text\" rows=\"4\" disabled readonly class=\"form-control form-control-sm py-1 bg-danger bg-opacity-25 border-secondary text-danger fs-7\">";
                // line 476
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 476, $this->source); })()), "motifRejet", [], "any", false, false, false, 476), "html", null, true);
                echo "</textarea>
                            </div>
                        ";
            }
            // line 479
            echo "                    ";
        }
        // line 480
        echo "                    </div>  
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 487
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 488
        echo "    ";
        $context["paiement"] = twig_get_attribute($this->env, $this->source, (isset($context["remboursement"]) || array_key_exists("remboursement", $context) ? $context["remboursement"] : (function () { throw new RuntimeError('Variable "remboursement" does not exist.', 488, $this->source); })()), "paiement", [], "any", false, false, false, 488);
        // line 489
        echo "    ";
        $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 489, $this->source); })()), "demande", [], "any", false, false, false, 489);
        // line 490
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 490, $this->source); })()), "installation", [], "any", false, false, false, 490);
        // line 491
        echo "<script>
    \$(document).ready(function() {

        \$('.reference').hide();
        if (\"";
        // line 495
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 495, $this->source); })()), "mode", [], "any", false, false, false, 495), "html", null, true);
        echo "\"!=\"Espèce\") {
            \$('.reference').show(); 
        }

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        if (\"";
        // line 501
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 501, $this->source); })()), "alimente", [], "any", false, false, false, 501), "html", null, true);
        echo "\" == 1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (\"";
        // line 509
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 509, $this->source); })()), "collectif", [], "any", false, false, false, 509), "html", null, true);
        echo "\" == 1) {
            \$('.collectif1').show(); \$('.collectif0').hide();
        }
        \$('.typeConstruction1').hide(); \$('.typeConstruction2').hide();  \$('.typeConstruction3').hide();
        valSel=\"";
        // line 513
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 513, $this->source); })()), "typeConstruction", [], "any", false, false, false, 513), "html", null, true);
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
        // line 526
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 526, $this->source); })()), "intervenantAutre", [], "any", false, false, false, 526), "html", null, true);
        echo "\";
        if (valSel==\"Oui\") {
            \$('.intervenantAutre1').show(); 
        }
        valSel=\"";
        // line 530
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 530, $this->source); })()), "natureTravaux", [], "any", false, false, false, 530), "html", null, true);
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
        // line 553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#caret-up"), "html", null, true);
        echo "\"></use></svg>Cacher ...'); 
                \$(le_btn_bloc).prop('title', 'Cacher les détails');
                \$(le_btn_bloc).addClass(\"text-danger\");
                \$(le_btn_bloc).removeClass(\"text-warning\");
            } else {
                \$(le_bloc).hide();
                \$(le_titre_bloc).removeClass(\"text-black\");
                \$(le_btn_bloc).html('<svg class=\"bi\" width=\"20\" height=\"20\" fill=\"#FFC329\"><use xlink:href=\"";
        // line 560
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
        return "remboursement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1081 => 560,  1071 => 553,  1045 => 530,  1038 => 526,  1022 => 513,  1015 => 509,  1004 => 501,  995 => 495,  989 => 491,  986 => 490,  983 => 489,  980 => 488,  970 => 487,  955 => 480,  952 => 479,  946 => 476,  942 => 474,  940 => 473,  937 => 472,  933 => 470,  930 => 469,  926 => 467,  924 => 466,  919 => 463,  917 => 462,  912 => 460,  905 => 456,  898 => 452,  894 => 450,  888 => 447,  884 => 445,  882 => 444,  877 => 442,  870 => 438,  863 => 434,  856 => 430,  845 => 422,  841 => 421,  835 => 417,  831 => 415,  827 => 413,  824 => 412,  820 => 410,  818 => 409,  815 => 408,  812 => 407,  808 => 405,  803 => 404,  801 => 403,  794 => 398,  788 => 394,  784 => 392,  777 => 390,  772 => 388,  769 => 387,  767 => 386,  759 => 385,  754 => 382,  750 => 380,  743 => 378,  738 => 376,  735 => 375,  733 => 374,  726 => 370,  719 => 366,  712 => 362,  705 => 358,  698 => 354,  691 => 350,  684 => 346,  677 => 342,  666 => 334,  662 => 332,  655 => 328,  649 => 326,  647 => 325,  642 => 322,  639 => 321,  636 => 319,  628 => 314,  621 => 310,  613 => 305,  608 => 303,  601 => 299,  596 => 297,  589 => 293,  584 => 291,  577 => 287,  566 => 279,  559 => 274,  556 => 273,  553 => 271,  545 => 266,  538 => 262,  531 => 258,  524 => 254,  516 => 249,  509 => 245,  498 => 241,  487 => 233,  480 => 228,  477 => 227,  469 => 221,  462 => 217,  455 => 213,  448 => 209,  441 => 205,  433 => 200,  426 => 196,  419 => 192,  408 => 188,  401 => 184,  390 => 176,  386 => 174,  379 => 170,  373 => 168,  371 => 167,  366 => 164,  362 => 161,  356 => 158,  352 => 156,  345 => 154,  340 => 152,  337 => 151,  335 => 150,  328 => 146,  321 => 142,  314 => 138,  305 => 134,  298 => 130,  291 => 126,  284 => 122,  277 => 118,  270 => 113,  263 => 109,  257 => 107,  255 => 106,  250 => 103,  247 => 102,  238 => 95,  231 => 91,  224 => 87,  217 => 83,  207 => 78,  200 => 74,  196 => 73,  193 => 72,  187 => 69,  183 => 68,  180 => 67,  177 => 66,  175 => 65,  164 => 56,  156 => 50,  139 => 35,  136 => 34,  133 => 33,  131 => 32,  128 => 31,  125 => 30,  123 => 29,  120 => 28,  117 => 27,  114 => 26,  112 => 25,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
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
    {% set paiement = remboursement.paiement %}
    {% set action_demande = \"Paiement\" %}
    {% set link_liste = 'app_installation_index2' %}

    {% set demande = paiement.demande %}
    {% set installation = demande.installation %}
    
    {% if app.session.get('page_liste_demande') is defined and app.session.get('page_liste_demande') %}
        {% set link_liste = app.session.get('page_liste_demande') %}
    {% endif %}


    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Demandes de remboursement </span>
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
                                {# <span class=\"text-success\">[{{ installation.demandeCourante.etat }}]</span> #}
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
                    <a href=\"{{ path(link_liste) }}\" class=\"next action-button btn btn-outline-secondary btn my-3\">Retour à la liste</a>
                </div>
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
                        {% if is_granted('ROLE_DAF') and not remboursement.rejete and not remboursement.valide %}
                        <a href=\"{{ path('app_remboursement_rejet', {'id': remboursement.id}) }}\" type=\"button\" class=\"next action-button btn btn-danger btn my-3 ms-2\">Rejeter</a>
                        <a href=\"{{ path('app_remboursement_add2', {'id': remboursement.id}) }}\" type=\"button\" class=\"next action-button btn btn-success btn my-3 ms-2\">Valider Remboursement</a>
                        {# <a href=\"\" type=\"button\" class=\"next action-button btn btn-success btn my-3 ms-2\">Valider Remboursement</a> #}
                        {% else %}
                        <div class=\"my-4 mb-3\">
                            {% if remboursement.rejete %}
                                <span class=\"badge bg-danger p-2 fs-6\">Demande de remboursement rejetée</span>
                            {% endif %}
                            {% if remboursement.valide %}
                                <span class=\"badge bg-success p-2 fs-6\">Demande de remboursement validée</span>
                            {% endif %}
                        </div>
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
                        <div class=\"mb-3 \">
                            <label >Montant Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"{{ demande.cout | number_format(0, '', ' ') }} FCFA\">
                        </div>
                        <div class=\"mb-3 reference\">
                            <label >Référence Paiement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6\" value=\"{{ paiement.reference }}\">
                        </div>
                        {% if paiement.observation %}
                        <div class=\"mb-3 \">
                            <label >Observations sur Paiement</label>
                            <textarea type=\"text\" rows=\"4\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\">{{ paiement.observation }}</textarea>
                        </div>
                        {% endif %}
                        <div class=\"mb-3\">
                            <label class=\"text-danger\" >Date remboursement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6 bg-warning bg-opacity-50\" value=\"{{ remboursement.dateDemande|date(\"d-m-Y\") }}\">
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"text-danger\" >Montant remboursement</label>
                            <input type=\"text\" disabled readonly class=\"form-control form-control py-1 fw-bold fs-6 bg-warning bg-opacity-50\" value=\"{{ remboursement.montant | number_format(0, '', ' ') }} FCFA\">
                        </div>
                        <div class=\"mb-3 \">
                            <label class=\"text-danger\">Motif Remboursement</label>
                            <textarea type=\"text\" rows=\"4\" disabled readonly class=\"form-control form-control-sm py-1 border-secondary bg-warning bg-opacity-50 fs-7\">{{ remboursement.motif }}</textarea>
                        </div>
                    {% if remboursement.rejete or remboursement.valide %}
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
    {% set paiement = remboursement.paiement %}
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
", "remboursement/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/remboursement/show.html.twig");
    }
}
