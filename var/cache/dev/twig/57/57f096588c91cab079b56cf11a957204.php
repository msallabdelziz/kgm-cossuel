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

/* installation/showpop.html.twig */
class __TwigTemplate_e80a335cdaec94597a52898e0aa5d583 extends Template
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
        return "base_modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/showpop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/showpop.html.twig"));

        $this->parent = $this->loadTemplate("base_modal.html.twig", "installation/showpop.html.twig", 1);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 14, $this->source); })()), "step", [], "any", false, false, false, 14) < 7)) {
            // line 15
            echo "        ";
            $context["action_demande"] = "Soumission";
            // line 16
            echo "    ";
        } elseif (((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 16, $this->source); })()), "step", [], "any", false, false, false, 16) == 7) || (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 16, $this->source); })()), "step", [], "any", false, false, false, 16) == 8))) {
            // line 17
            echo "        ";
            $context["action_demande"] = "Paiement";
            // line 18
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 18, $this->source); })()), "step", [], "any", false, false, false, 18) == 9)) {
            // line 19
            echo "        ";
            $context["action_demande"] = "Validation";
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        $context["link_liste"] = "stat";
        // line 23
        echo "
    <section class=\"\">
        <a data-bs-dismiss=\"modal\" class=\"closeModal float-end next action-button btn btn-sm btn-secondary \">Fermer</a>
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["action_demande"]) || array_key_exists("action_demande", $context) ? $context["action_demande"] : (function () { throw new RuntimeError('Variable "action_demande" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " de demandes </span>
                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-success btn my-0 ms-5 py-0 fs-7\">Plus de détails sur la demande ...</a>
            </a>
        </header>
        <div class=\"row\">
        ";
        // line 33
        $context["offset"] = "offset-md-1";
        echo "            
        ";
        // line 34
        $context["badge_etat"] = "text-danger";
        // line 35
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 35, $this->source); })()), "step", [], "any", false, false, false, 35) == 7)) {
            // line 36
            echo "            ";
            $context["badge_etat"] = "text-danger";
            // line 37
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 37, $this->source); })()), "step", [], "any", false, false, false, 37) > 7)) {
            // line 38
            echo "            ";
            $context["badge_etat"] = "text-success";
            // line 39
            echo "        ";
        }
        // line 40
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 40, $this->source); })()), "html", null, true);
        echo " col-lg-10 mb-2  p-3\">
                <div class=\"\">
                    <nav class=\"navbar shadow bg-warning border border-dark my-2 mb-2 p-0\">
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
                                    ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 52, $this->source); })()), "step", [], "any", false, false, false, 52) >= 7)) {
            // line 53
            echo "                                        <span class=\"";
            echo twig_escape_filter($this->env, (isset($context["badge_etat"]) || array_key_exists("badge_etat", $context) ? $context["badge_etat"] : (function () { throw new RuntimeError('Variable "badge_etat" does not exist.', 53, $this->source); })()), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 53, $this->source); })()), "demandeCourante", [], "any", false, false, false, 53), "etat", [], "any", false, false, false, 53), "html", null, true);
            echo "]</span>
                                    ";
        } else {
            // line 55
            echo "                                        <span class=\"";
            echo twig_escape_filter($this->env, (isset($context["badge_etat"]) || array_key_exists("badge_etat", $context) ? $context["badge_etat"] : (function () { throw new RuntimeError('Variable "badge_etat" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "\">[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 55, $this->source); })()), "etat", [], "any", false, false, false, 55), "html", null, true);
            echo "]</span>
                                    ";
        }
        // line 57
        echo "                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class=\"\">
                            <div class=\"row\">
                            \t<fieldset id=\"synthese_demande\">
                                ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 64, $this->source); })()), "demandeCourante", [], "any", false, false, false, 64)) {
            // line 65
            echo "                                    <div class=\"card mb-2\">
                                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 66, $this->source); })()), "demandeCourante", [], "any", false, false, false, 66) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 66, $this->source); })()), "demandeCourante", [], "any", false, false, false, 66), "numeroPassage", [], "any", false, false, false, 66) == 2))) {
                echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
            }
            echo "</h2>
                                        <div class=\"row\">
                                            <hr class=\"mb-3\" />
                                            <div class=\"col-lg-3\">
                                                <label >Numéro Demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 71, $this->source); })()), "demandeCourante", [], "any", false, false, false, 71), "numero", [], "any", false, false, false, 71), "html", null, true);
            echo "\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Date Demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 75, $this->source); })()), "demandeCourante", [], "any", false, false, false, 75), "dateCreation", [], "any", false, false, false, 75), "d-m-Y"), "html", null, true);
            echo "\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Puissance demandée</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 79, $this->source); })()), "demandeCourante", [], "any", false, false, false, 79), "puissance", [], "any", false, false, false, 79), "html", null, true);
            echo " kW\">
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label >Cout de la demande</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1 fw-bold fs-6\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 83, $this->source); })()), "demandeCourante", [], "any", false, false, false, 83), "cout", [], "any", false, false, false, 83), "html", null, true);
            echo " FCFA\">
                                            </div>
                                        </div>  
                                    </div>
                                ";
        }
        // line 88
        echo "                                ";
        // line 89
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Données de base de la demande</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_usage\" >Usage Installation</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 95, $this->source); })()), "usages", [], "any", false, false, false, 95), "html", null, true);
        echo "\" id=\"form_usage\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 99
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 99, $this->source); })()), "alimente", [], "any", false, false, false, 99)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_alimente\">
                                        </div>
                                        ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 101, $this->source); })()), "compteur", [], "any", false, false, false, 101)) {
            // line 102
            echo "                                            <div class=\"col-lg-4 alimente1\">
                                                <label for=\"form_compteur\" >Numéro Compteur</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 104, $this->source); })()), "compteur", [], "any", false, false, false, 104), "html", null, true);
            echo "\" id=\"form_compteur\">
                                            </div>
                                            <div class=\"col-lg-4 alimente1\">
                                                <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 108, $this->source); })()), "abonnement", [], "any", false, false, false, 108), "html", null, true);
            echo "\" id=\"form_abonnement\">
                                            </div>
                                            <div class=\"col-lg-4 alimente1\">
                                                <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 112, $this->source); })()), "grstReseau", [], "any", false, false, false, 112), "html", null, true);
            echo "\" id=\"form_grstReseau\">
                                            </div>
                                        ";
        }
        // line 115
        echo "                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_localite\" >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 118, $this->source); })()), "localite", [], "any", false, false, false, 118), "html", null, true);
        echo "\" id=\"form_localite\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_adresse\" >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 122, $this->source); })()), "adresse", [], "any", false, false, false, 122), "html", null, true);
        echo "\" id=\"form_adresse\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_habitation\" >Complément Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 126, $this->source); })()), "habitation", [], "any", false, false, false, 126), "html", null, true);
        echo "\" id=\"form_habitation\">
                                        </div>
                                        ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 128, $this->source); })()), "lattitude", [], "any", false, false, false, 128)) {
            // line 129
            echo "                                            <div class=\"col-lg-2\">
                                                <label for=\"form_lattitude\" >Latitude</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 131, $this->source); })()), "lattitude", [], "any", false, false, false, 131), "html", null, true);
            echo "\" id=\"form_lattitude\">
                                            </div>
                                            <div class=\"col-lg-2\">
                                                <label for=\"form_longitude\" >Longitude</label>
                                                <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 135, $this->source); })()), "longitude", [], "any", false, false, false, 135), "html", null, true);
            echo "\" id=\"form_longitude\">
                                            </div>
                                        ";
        }
        // line 138
        echo "                                    </div>
                                </div>
                            
                                ";
        // line 142
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 142, $this->source); })()), "electricien", [], "any", false, false, false, 142)) {
            // line 143
            echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Informations sur l'électricien</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                            <label >Nom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 149, $this->source); })()), "electricien", [], "any", false, false, false, 149), "nom", [], "any", false, false, false, 149), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-5\">
                                            <label >Prénom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 153, $this->source); })()), "electricien", [], "any", false, false, false, 153), "prenom", [], "any", false, false, false, 153), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 157, $this->source); })()), "electricien", [], "any", false, false, false, 157), "localite", [], "any", false, false, false, 157), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 161, $this->source); })()), "electricien", [], "any", false, false, false, 161), "adresse", [], "any", false, false, false, 161), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Téléphone</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 165, $this->source); })()), "electricien", [], "any", false, false, false, 165), "telephone", [], "any", false, false, false, 165), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 165, $this->source); })()), "electricien", [], "any", false, false, false, 165), "autreNumTelephone", [], "any", false, false, false, 165), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Email</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 169, $this->source); })()), "electricien", [], "any", false, false, false, 169), "email", [], "any", false, false, false, 169), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Type de pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 173, $this->source); })()), "electricien", [], "any", false, false, false, 173), "typePiece", [], "any", false, false, false, 173), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Numéro Pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 177, $this->source); })()), "electricien", [], "any", false, false, false, 177), "numPiece", [], "any", false, false, false, 177), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-lg-4 mt-2\">
                                            <label >Scan CNI Electricien</label><br />
                                        ";
            // line 181
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 181, $this->source); })()), "PJElectricien", [], "any", false, false, false, 181)) {
                // line 182
                echo "                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
                // line 183
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                                <span onclick=\"window.open('";
                // line 185
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 185, $this->source); })()), "id", [], "any", false, false, false, 185), "type" => "electricien"]), "html", null, true);
                echo "')\" class=\"text-success pt fs-7\">{.installation.PJElectricien.fichier}} </span>
                                        ";
            } else {
                // line 187
                echo "                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        ";
            }
            // line 189
            echo "                                        </div>
                                    </div>
                                </div>
                                ";
        }
        // line 192
        echo "                                

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

    public function getTemplateName()
    {
        return "installation/showpop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 192,  443 => 189,  439 => 187,  434 => 185,  429 => 183,  426 => 182,  424 => 181,  417 => 177,  410 => 173,  403 => 169,  394 => 165,  387 => 161,  380 => 157,  373 => 153,  366 => 149,  358 => 143,  355 => 142,  350 => 138,  344 => 135,  337 => 131,  333 => 129,  331 => 128,  326 => 126,  319 => 122,  312 => 118,  307 => 115,  301 => 112,  294 => 108,  287 => 104,  283 => 102,  281 => 101,  272 => 99,  265 => 95,  257 => 89,  255 => 88,  247 => 83,  240 => 79,  233 => 75,  226 => 71,  216 => 66,  213 => 65,  211 => 64,  202 => 57,  194 => 55,  186 => 53,  184 => 52,  176 => 47,  165 => 40,  162 => 39,  159 => 38,  156 => 37,  153 => 36,  150 => 35,  148 => 34,  144 => 33,  137 => 29,  133 => 28,  126 => 23,  124 => 22,  121 => 21,  118 => 20,  115 => 19,  112 => 18,  109 => 17,  106 => 16,  103 => 15,  100 => 14,  98 => 13,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_modal.html.twig' %}

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
    {% if (installation.step < 7) %}
        {% set action_demande = \"Soumission\" %}
    {% elseif (installation.step == 7 or installation.step == 8) %}
        {% set action_demande = \"Paiement\" %}
    {% elseif (installation.step == 9) %}
        {% set action_demande = \"Validation\" %}
    {% endif %}

    {% set link_liste = 'stat' %}

    <section class=\"\">
        <a data-bs-dismiss=\"modal\" class=\"closeModal float-end next action-button btn btn-sm btn-secondary \">Fermer</a>
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">{{ action_demande }} de demandes </span>
                <a href=\"{{ path('app_installation_show', {'id': installation.id}) }}\" class=\"next action-button btn btn-success btn my-0 ms-5 py-0 fs-7\">Plus de détails sur la demande ...</a>
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
                                {% if installation.demandeCourante %}
                                    <div class=\"card mb-2\">
                                        <h2 class=\"fs-title text-black\">Puissance demandée et tarif {% if installation.demandeCourante and installation.demandeCourante.numeroPassage==2 %} <span class=\"badge bg-danger\">2e VISITE</span> {% endif %}</h2>
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
                                    <h2 class=\"fs-title\">Données de base de la demande</h2>
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
                            
                                {# BLOC 4 #}
                                {% if installation.electricien %}
                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Informations sur l'électricien</h2>
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
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.electricien.telephone }} / {{installation.electricien.autreNumTelephone}}\">
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
                                                <span onclick=\"window.open('{{path('app_installation_downloadpj', {'id': installation.id, 'type':'electricien'})}}')\" class=\"text-success pt fs-7\">{.installation.PJElectricien.fichier}} </span>
                                        {% else %}
                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        {% endif %}
                                        </div>
                                    </div>
                                </div>
                                {% endif %}                                

                                </fieldset>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "installation/showpop.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/showpop.html.twig");
    }
}
