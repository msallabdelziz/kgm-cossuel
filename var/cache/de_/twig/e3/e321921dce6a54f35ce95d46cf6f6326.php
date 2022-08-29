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

/* installation/new6.html.twig */
class __TwigTemplate_1261f38c1c16461edeb28adeae4a449f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new6.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/new6.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "installation/new6.html.twig", 1);
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
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Soumission de demandes </span>
            </a>
        </header>
        <div class=\"row\">
        ";
        // line 20
        $context["offset"] = "offset-md-1";
        echo "            
            <div class=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " col-lg-10 mb-2  p-3\">

                <div class=\"\">
                    <nav class=\"navbar shadow bg-warning border border-dark my-2 mb-2 p-0\">
                        <div class=\"container-fluid ps-4\">
                            <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                                <div class=\"col\">
                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                        <use xlink:href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#lightbulb"), "html", null, true);
        echo "\"></use>
                                    </svg>
                                    Saisie Nouvelle demande
                                </div>
                                <div class=\"col\" align=\"right\">
                                        <span class=\"text-danger\">[Etape 6 sur 6]</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class=\"\">
                        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["id" => "formInstall"]]);
        echo "
                            <div class=\"row\">
                                <!-- progressbar -->
                                ";
        // line 43
        $context["curr_etat"] = 6;
        // line 44
        echo "                                ";
        echo twig_include($this->env, $context, "installation/_progress_bar.html.twig");
        echo "

                            \t<fieldset id=\"synthese_demande\">
                                ";
        // line 47
        $this->loadTemplate("installation/_actions_new.html.twig", "installation/new6.html.twig", 47)->display($context);
        // line 48
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Puissance demandée et tarif ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 49, $this->source); })()), "demandecourante", [], "any", false, false, false, 49) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 49, $this->source); })()), "demandecourante", [], "any", false, false, false, 49), "numeroPassage", [], "any", false, false, false, 49) == 2))) {
            echo " <span class=\"badge bg-danger\">2e VISITE</span> ";
        }
        echo "</h2>
                                    <div class=\"row col-6 offset-3\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 53, $this->source); })()), "puissance", [], "any", false, false, false, 53), 'row');
        echo "
                                        </div>
                                        <div class=\"col-lg-6\">
                                            <label for=\"form_tarif\" >Tarif en FCFA</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm is-valid fs-5 py-2 fw-bold text-success\" value=\"\" id=\"form_tarif\">
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 62
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Données de base de la demande</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_usage\" >Usage Installation</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 68, $this->source); })()), "usages", [], "any", false, false, false, 68), "html", null, true);
        echo "\" id=\"form_usage\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_alimente\" >Installation déja alimentée ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 72
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 72, $this->source); })()), "alimente", [], "any", false, false, false, 72)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_alimente\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_compteur\" >Numéro Compteur</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 76, $this->source); })()), "compteur", [], "any", false, false, false, 76), "html", null, true);
        echo "\" id=\"form_compteur\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_abonnement\" >Numéro Abonnement</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 80, $this->source); })()), "abonnement", [], "any", false, false, false, 80), "html", null, true);
        echo "\" id=\"form_abonnement\">
                                        </div>
                                        <div class=\"col-lg-4 alimente1\">
                                            <label for=\"form_grstReseau\" >Gestionnaire Réseau</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 84, $this->source); })()), "grstReseau", [], "any", false, false, false, 84), "html", null, true);
        echo "\" id=\"form_grstReseau\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_localite\" >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 89, $this->source); })()), "localite", [], "any", false, false, false, 89), "html", null, true);
        echo "\" id=\"form_localite\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_adresse\" >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 93, $this->source); })()), "adresse", [], "any", false, false, false, 93), "html", null, true);
        echo "\" id=\"form_adresse\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label for=\"form_habitation\" >Complément Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 97, $this->source); })()), "habitation", [], "any", false, false, false, 97), "html", null, true);
        echo "\" id=\"form_habitation\">
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <label for=\"form_lattitude\" >Latitude</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 101, $this->source); })()), "lattitude", [], "any", false, false, false, 101), "html", null, true);
        echo "\" id=\"form_lattitude\">
                                        </div>
                                        <div class=\"col-lg-2\">
                                            <label for=\"form_longitude\" >Longitude</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 105, $this->source); })()), "longitude", [], "any", false, false, false, 105), "html", null, true);
        echo "\" id=\"form_longitude\">
                                        </div>
                                    </div>
                                </div>
                                
                                ";
        // line 111
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Caractéristiques du site</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-4\">
                                            <label for=\"form_collectif collectif1\" >Bien Collectif ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 117
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 117, $this->source); })()), "collectif", [], "any", false, false, false, 117)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "\" id=\"form_collectif\">
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            <label for=\"form_nomSite\" >Nom du site</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 121, $this->source); })()), "nomSite", [], "any", false, false, false, 121), "html", null, true);
        echo "\" id=\"form_nomSite\">
                                        </div>
                                        <div class=\"col-lg-4 collectif1\">
                                            <label for=\"form_logement\" >Nombre de logements</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 125, $this->source); })()), "logement", [], "any", false, false, false, 125), "html", null, true);
        echo "\" id=\"form_logement\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-6\">
                                            <label for=\"form_typeConstruction\" >Type de construction</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 130, $this->source); })()), "typeConstruction", [], "any", false, false, false, 130), "nom", [], "any", false, false, false, 130), "html", null, true);
        echo "\" id=\"form_typeConstruction\">
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1\">
                                            <label for=\"form_niveau\" >Nombre de niveaux</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 134, $this->source); })()), "niveau", [], "any", false, false, false, 134), "html", null, true);
        echo "\" id=\"form_niveau\">
                                        </div>
                                        <div class=\"col-lg-6 typeConstruction3\">
                                            <label for=\"form_activite\" >Activités</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 138, $this->source); })()), "activite", [], "any", false, false, false, 138), "html", null, true);
        echo "\" id=\"form_activite\">
                                        </div>
                                        <div class=\"col-lg-3 typeConstruction1 typeConstruction2\">
                                            <label for=\"form_priece\" >Nombre de pièces</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 142, $this->source); })()), "priece", [], "any", false, false, false, 142), "html", null, true);
        echo "\" id=\"form_priece\">
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 148
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Caractéristiques de l'installation</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                            <label for=\"form_natureTravaux\" >Nature des travaux</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 154, $this->source); })()), "natureTravaux", [], "any", false, false, false, 154), "html", null, true);
        echo "\" id=\"form_natureTravaux\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neuf15\" >Neufs_15</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 158, $this->source); })()), "neuf15", [], "any", false, false, false, 158), "html", null, true);
        echo "\" id=\"form_neufs_15\">
                                            <label for=\"form_existant15\" >Existants_15</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 160, $this->source); })()), "existant15", [], "any", false, false, false, 160), "html", null, true);
        echo "\" id=\"form_existant15\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neuf25\" >Neufs_25</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 164, $this->source); })()), "neuf25", [], "any", false, false, false, 164), "html", null, true);
        echo "\" id=\"form_neuf25\">
                                            <label for=\"form_existant25\" >Existants_25</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 166, $this->source); })()), "existant25", [], "any", false, false, false, 166), "html", null, true);
        echo "\" id=\"form_existant25\">
                                        </div>
                                        <div class=\"col-lg-2 natureTravaux1\">
                                            <label for=\"form_neufAutre\" >Neufs_Autres</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 170, $this->source); })()), "neufAutre", [], "any", false, false, false, 170), "html", null, true);
        echo "\" id=\"form_neufAutre\">
                                            <label for=\"form_existantAutre\" >Existants_Autres</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 172, $this->source); })()), "existantAutre", [], "any", false, false, false, 172), "html", null, true);
        echo "\" id=\"form_existantAutre\">
                                        </div>
                                        <hr class=\"my-3\" />
                                        <div class=\"col-lg-4 intervenantAutre1\">
                                            <label for=\"form_intervenantAutre\" >Autres intervenants ?</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 177, $this->source); })()), "intervenantAutre", [], "any", false, false, false, 177), "html", null, true);
        echo "\" id=\"form_intervenantAutre\">
                                        </div>
                                        <div class=\"col-lg-8 intervenantAutre1\">
                                            <label for=\"form_intervenant\" >Intervenants</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 181, $this->source); })()), "intervenant", [], "any", false, false, false, 181), "html", null, true);
        echo "\" id=\"form_intervenant\">
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 187
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Informations sur l'électricien</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                            <label >Nom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 193
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 193, $this->source); })()), "electricien", [], "any", false, false, false, 193), "nom", [], "any", false, false, false, 193), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-5\">
                                            <label >Prénom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 197, $this->source); })()), "electricien", [], "any", false, false, false, 197), "prenom", [], "any", false, false, false, 197), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 201, $this->source); })()), "electricien", [], "any", false, false, false, 201), "localite", [], "any", false, false, false, 201), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 205, $this->source); })()), "electricien", [], "any", false, false, false, 205), "adresse", [], "any", false, false, false, 205), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Téléphone</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 209, $this->source); })()), "electricien", [], "any", false, false, false, 209), "telephone", [], "any", false, false, false, 209), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 209, $this->source); })()), "electricien", [], "any", false, false, false, 209), "autreNumTelephone", [], "any", false, false, false, 209), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Email</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 213
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 213, $this->source); })()), "electricien", [], "any", false, false, false, 213), "email", [], "any", false, false, false, 213), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Type de pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 217, $this->source); })()), "electricien", [], "any", false, false, false, 217), "typePiece", [], "any", false, false, false, 217), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Numéro Pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 221, $this->source); })()), "electricien", [], "any", false, false, false, 221), "numPiece", [], "any", false, false, false, 221), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4 mt-2\">
                                            <label >Scan CNI Electricien</label><br />
                                        ";
        // line 225
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 225, $this->source); })()), "PJElectricien", [], "any", false, false, false, 225)) {
            // line 226
            echo "                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
            echo "\"></use>
                                                </svg>
                                                <span onclick=\"window.open('";
            // line 229
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 229, $this->source); })()), "id", [], "any", false, false, false, 229), "type" => "electricien"]), "html", null, true);
            echo "')\" class=\"text-success pt fs-7\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 229, $this->source); })()), "PJElectricien", [], "any", false, false, false, 229), "fichier", [], "any", false, false, false, 229), "html", null, true);
            echo " </span>
                                        ";
        } else {
            // line 231
            echo "                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        ";
        }
        // line 233
        echo "                                        </div>
                                    </div>
                                </div>

                                ";
        // line 238
        echo "                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Informations sur le propriétaire de l'installation</h2>
                                    <div class=\"row\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-3\">
                                            <label >Nom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 244, $this->source); })()), "proprietaire", [], "any", false, false, false, 244), "nom", [], "any", false, false, false, 244), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-5\">
                                            <label >Prénom</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 248, $this->source); })()), "proprietaire", [], "any", false, false, false, 248), "prenom", [], "any", false, false, false, 248), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Localité</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 252
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 252, $this->source); })()), "proprietaire", [], "any", false, false, false, 252), "localite", [], "any", false, false, false, 252), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-8\">
                                            <label >Adresse</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 256
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 256, $this->source); })()), "proprietaire", [], "any", false, false, false, 256), "adresse", [], "any", false, false, false, 256), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Téléphone</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 260, $this->source); })()), "proprietaire", [], "any", false, false, false, 260), "telephone", [], "any", false, false, false, 260), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Email</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 264
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 264, $this->source); })()), "proprietaire", [], "any", false, false, false, 264), "email", [], "any", false, false, false, 264), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Type de pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 268
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 268, $this->source); })()), "proprietaire", [], "any", false, false, false, 268), "typePiece", [], "any", false, false, false, 268), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <label >Numéro Pièce</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 272, $this->source); })()), "proprietaire", [], "any", false, false, false, 272), "numPiece", [], "any", false, false, false, 272), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-lg-4 mt-2\">
                                            <label >Scan CNI Propriétaire</label><br />
                                        ";
        // line 276
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 276, $this->source); })()), "PJProprietaire", [], "any", false, false, false, 276)) {
            // line 277
            echo "                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
            echo "\"></use>
                                                </svg>
                                                <span onclick=\"window.open('";
            // line 280
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 280, $this->source); })()), "id", [], "any", false, false, false, 280), "type" => "proprietaire"]), "html", null, true);
            echo "')\" class=\"text-success pt fs-7\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 280, $this->source); })()), "PJProprietaire", [], "any", false, false, false, 280), "fichier", [], "any", false, false, false, 280), "html", null, true);
            echo " </span>
                                        ";
        } else {
            // line 282
            echo "                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        ";
        }
        // line 284
        echo "                                        </div>

                                        <div class=\"col-lg-4 mt-2\">
                                            <label >";
        // line 287
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 287, $this->source); })()), "usages", [], "any", false, false, false, 287) != "erp_ert")) {
            echo "Titre de propriété";
        } else {
            echo "Documents Techniques";
        }
        echo "</label><br />
                                        ";
        // line 288
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 288, $this->source); })()), "PJDossierTechnique", [], "any", false, false, false, 288)) {
            // line 289
            echo "                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                    <use xlink:href=\"";
            // line 290
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#file-pdf"), "html", null, true);
            echo "\"></use>
                                                </svg>
                                                <span onclick=\"window.open('";
            // line 292
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_downloadpj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 292, $this->source); })()), "id", [], "any", false, false, false, 292), "type" => "dosstech"]), "html", null, true);
            echo "')\" class=\"text-success pt fs-7\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 292, $this->source); })()), "PJDossierTechnique", [], "any", false, false, false, 292), "fichier", [], "any", false, false, false, 292), "html", null, true);
            echo " </span>
                                        ";
        } else {
            // line 294
            echo "                                                <span class=\"text-danger pt fs-8\">N/D</span>
                                        ";
        }
        // line 296
        echo "                                        </div>
                                    </div>
                                </div>
                                ";
        // line 299
        $this->loadTemplate("installation/_actions_new.html.twig", "installation/new6.html.twig", 299)->display($context);
        // line 300
        echo "                                </fieldset>
                            </div>
                        ";
        // line 302
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["installationForm"]) || array_key_exists("installationForm", $context) ? $context["installationForm"] : (function () { throw new RuntimeError('Variable "installationForm" does not exist.', 302, $this->source); })()), 'form_end');
        echo "            
                        ";
        // line 303
        $this->loadTemplate("installation/_delete_form.html.twig", "installation/new6.html.twig", 303)->display($context);
        // line 304
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 311
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 312
        echo "<script>
    \$(document).ready(function() {

        // Bloc 1
        \$('.alimente0').show(); \$('.alimente1').hide();
        optSel=\$('#form_alimente'); valSel=optSel.val();
        if (valSel==1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (valSel==1) {
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
        if (valSel==1) {
            \$('.intervenantAutre1').show(); 
        }
        optSel=\$('#form_natureTravaux');
        valSel=optSel.val();
        if (valSel == \"Rénovation Partielle\") {
            \$('.natureTravaux1').show(); 
        }

        ";
        // line 355
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 355, $this->source); })()), "usages", [], "any", false, false, false, 355) == "domestique")) {
            // line 356
            echo "            \$(\"#form_puissance\").attr(\"max\", 34);
        ";
        }
        // line 358
        echo "        
        \$(\"#form_puissance\").keypress(function(event){
            getTarif();
        });

        \$(\"#form_puissance\").keydown(function(event){
            getTarif();
        });

        \$(\"#form_puissance\").keyup(function(event){
            getTarif();
        });

        \$(\"#form_puissance\").change(function(event){
            getTarif();
        });

        ";
        // line 375
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 375, $this->source); })()), "demandeCourante", [], "any", false, false, false, 375)) {
            echo " getTarif() ";
        }
        // line 376
        echo "    });
    function getTarif() {
        // Tarif
        val_usage=\$(\"#form_usage\").val();
        val_puissance=\$(\"#form_puissance\").val();
        val_passage=1;
        ";
        // line 382
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 382, $this->source); })()), "demandeCourante", [], "any", false, false, false, 382) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 382, $this->source); })()), "demandeCourante", [], "any", false, false, false, 382), "demandeParente", [], "any", false, false, false, 382))) {
            echo " 
            val_passage=2;
        ";
        }
        // line 385
        echo "
        if ( ( val_puissance == 0 ) || (val_puissance == '' ) || (val_puissance == null ) || (!val_puissance)  ) result=0;
        if(val_usage==\"domestique\") {
            if ( (val_puissance>0) && (val_puissance <= 6 )  ) result=\"10000\";
            if ( (val_puissance>6) && (val_puissance<=17) )   result=\"30000\";
            if (val_puissance>17)  result=\"100000\";
        }
        else {
            if ( (val_puissance>0) && (val_puissance <= 6 )  ) result=\"12000\";
            if ( (val_puissance>6) && (val_puissance<=17) ) result=\"150000\";
            if (val_puissance>17)  result=\"250000\";
        } 

        if(val_passage==2) {
            result=parseFloat(result*80/100);
        }

        result=addCommas(result);

        \$(\"#form_tarif\").val(result+\" FCFA\");
    }

    function addCommas(nStr) {
        nStr += '';
        var x = nStr.split('.');
        var x1 = x[0];
        var x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\\d+)(\\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '\$1' + ' ' + '\$2');
        }
        return x1 + x2;
    }
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "installation/new6.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  731 => 385,  725 => 382,  717 => 376,  713 => 375,  694 => 358,  690 => 356,  688 => 355,  643 => 312,  633 => 311,  618 => 304,  616 => 303,  612 => 302,  608 => 300,  606 => 299,  601 => 296,  597 => 294,  590 => 292,  585 => 290,  582 => 289,  580 => 288,  572 => 287,  567 => 284,  563 => 282,  556 => 280,  551 => 278,  548 => 277,  546 => 276,  539 => 272,  532 => 268,  525 => 264,  518 => 260,  511 => 256,  504 => 252,  497 => 248,  490 => 244,  482 => 238,  476 => 233,  472 => 231,  465 => 229,  460 => 227,  457 => 226,  455 => 225,  448 => 221,  441 => 217,  434 => 213,  425 => 209,  418 => 205,  411 => 201,  404 => 197,  397 => 193,  389 => 187,  381 => 181,  374 => 177,  366 => 172,  361 => 170,  354 => 166,  349 => 164,  342 => 160,  337 => 158,  330 => 154,  322 => 148,  314 => 142,  307 => 138,  300 => 134,  293 => 130,  285 => 125,  278 => 121,  267 => 117,  259 => 111,  251 => 105,  244 => 101,  237 => 97,  230 => 93,  223 => 89,  215 => 84,  208 => 80,  201 => 76,  190 => 72,  183 => 68,  175 => 62,  164 => 53,  155 => 49,  152 => 48,  150 => 47,  143 => 44,  141 => 43,  135 => 40,  121 => 29,  110 => 21,  106 => 20,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
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
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Soumission de demandes </span>
            </a>
        </header>
        <div class=\"row\">
        {% set offset=\"offset-md-1\" %}            
            <div class=\"{{ offset }} col-lg-10 mb-2  p-3\">

                <div class=\"\">
                    <nav class=\"navbar shadow bg-warning border border-dark my-2 mb-2 p-0\">
                        <div class=\"container-fluid ps-4\">
                            <div class=\"navbar-brand mb-0 fs-4 fw-400 row col\">
                                <div class=\"col\">
                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#lightbulb') }}\"></use>
                                    </svg>
                                    Saisie Nouvelle demande
                                </div>
                                <div class=\"col\" align=\"right\">
                                        <span class=\"text-danger\">[Etape 6 sur 6]</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class=\"\">
                        {{ form_start(installationForm, {'attr': {'id': 'formInstall'}}) }}
                            <div class=\"row\">
                                <!-- progressbar -->
                                {% set curr_etat = 6 %}
                                {{ include('installation/_progress_bar.html.twig') }}

                            \t<fieldset id=\"synthese_demande\">
                                {% include \"installation/_actions_new.html.twig\" %}
                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Puissance demandée et tarif {% if installation.demandecourante and installation.demandecourante.numeroPassage==2 %} <span class=\"badge bg-danger\">2e VISITE</span> {% endif %}</h2>
                                    <div class=\"row col-6 offset-3\">
                                        <hr class=\"mb-3\" />
                                        <div class=\"col-lg-6\">
                                        {{ form_row(installationForm.puissance) }}
                                        </div>
                                        <div class=\"col-lg-6\">
                                            <label for=\"form_tarif\" >Tarif en FCFA</label>
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm is-valid fs-5 py-2 fw-bold text-success\" value=\"\" id=\"form_tarif\">
                                        </div>
                                    </div>
                                </div>
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

                                {# BLOC 3 #}
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

                                {# BLOC 4 #}
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
                                            <input type=\"text\" disabled readonly class=\"form-control form-control-sm py-1\" value=\"{{ installation.electricien.telephone }} / {{ installation.electricien.autreNumTelephone }}\">
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

                                {# BLOC 5 #}
                                <div class=\"card mb-2\">
                                    <h2 class=\"fs-title\">Informations sur le propriétaire de l'installation</h2>
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
                                </div>
                                {% include \"installation/_actions_new.html.twig\" %}
                                </fieldset>
                            </div>
                        {{ form_end(installationForm) }}            
                        {% include \"installation/_delete_form.html.twig\" %}
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
        if (valSel==1) {
            \$('.alimente1').show(); \$('.alimente0').hide();
        }

        // Bloc 2
        \$('.collectif0').show(); \$('.collectif1').hide();
        optSel=\$('#form_collectif');
        valSel=optSel.val();
        if (valSel==1) {
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
        if (valSel==1) {
            \$('.intervenantAutre1').show(); 
        }
        optSel=\$('#form_natureTravaux');
        valSel=optSel.val();
        if (valSel == \"Rénovation Partielle\") {
            \$('.natureTravaux1').show(); 
        }

        {% if installation.usages == \"domestique\" %}
            \$(\"#form_puissance\").attr(\"max\", 34);
        {% endif %}
        
        \$(\"#form_puissance\").keypress(function(event){
            getTarif();
        });

        \$(\"#form_puissance\").keydown(function(event){
            getTarif();
        });

        \$(\"#form_puissance\").keyup(function(event){
            getTarif();
        });

        \$(\"#form_puissance\").change(function(event){
            getTarif();
        });

        {% if installation.demandeCourante %} getTarif() {% endif %}
    });
    function getTarif() {
        // Tarif
        val_usage=\$(\"#form_usage\").val();
        val_puissance=\$(\"#form_puissance\").val();
        val_passage=1;
        {% if installation.demandeCourante and installation.demandeCourante.demandeParente %} 
            val_passage=2;
        {% endif %}

        if ( ( val_puissance == 0 ) || (val_puissance == '' ) || (val_puissance == null ) || (!val_puissance)  ) result=0;
        if(val_usage==\"domestique\") {
            if ( (val_puissance>0) && (val_puissance <= 6 )  ) result=\"10000\";
            if ( (val_puissance>6) && (val_puissance<=17) )   result=\"30000\";
            if (val_puissance>17)  result=\"100000\";
        }
        else {
            if ( (val_puissance>0) && (val_puissance <= 6 )  ) result=\"12000\";
            if ( (val_puissance>6) && (val_puissance<=17) ) result=\"150000\";
            if (val_puissance>17)  result=\"250000\";
        } 

        if(val_passage==2) {
            result=parseFloat(result*80/100);
        }

        result=addCommas(result);

        \$(\"#form_tarif\").val(result+\" FCFA\");
    }

    function addCommas(nStr) {
        nStr += '';
        var x = nStr.split('.');
        var x1 = x[0];
        var x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\\d+)(\\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '\$1' + ' ' + '\$2');
        }
        return x1 + x2;
    }
</script>
{% endblock %}
", "installation/new6.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/new6.html.twig");
    }
}
