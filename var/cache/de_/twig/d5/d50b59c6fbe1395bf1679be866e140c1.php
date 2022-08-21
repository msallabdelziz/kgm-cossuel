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

/* electricien/show.html.twig */
class __TwigTemplate_09f0a0386a4f6e51cc59533321ff16fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "electricien/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "electricien/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "electricien/show.html.twig", 1);
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
        echo "    <div class=\"row-fluid\">
        <ul class=\"nav nav-pills mb-4 pb-2 border-bottom border-dark\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Electriciens installateurs</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_index");
        echo "\">Propriétaires d'installation</a>
            </li>
        </ul>
    </div>
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/electricien\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des Electriciens</span>
            </a>
            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Electriciens</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4 priority-4\">
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des Electriciens (";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 28, $this->source); })())), "html", null, true);
        echo ")
                        </caption>
                        ";
        // line 30
        if ((isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Téléphone</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\">Prénom</th> 
                                ";
            // line 37
            echo "                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_electricien"]) || array_key_exists("les_electricien", $context) ? $context["les_electricien"] : (function () { throw new RuntimeError('Variable "les_electricien" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 41
                echo "                                ";
                $context["cur"] = "";
                // line 42
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 42))) {
                    // line 43
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 44
                    echo "                                ";
                }
                // line 45
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 45, $this->source); })()), "html", null, true);
                echo "\">
                                    <td scope=\"row\"><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "telephone", [], "any", false, false, false, 46), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "nom", [], "any", false, false, false, 47), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "prenom", [], "any", false, false, false, 48), "html", null, true);
                echo "</a></td>
";
                // line 57
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                        </tbody>
                        ";
        } else {
            // line 61
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun electricien !</span></td></tr>
                        ";
        }
        // line 63
        echo "                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails du electricien ";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Localité</label>
                            <div class=\"ms-4\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 78, $this->source); })()), "localite", [], "any", false, false, false, 78), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 82, $this->source); })()), "nom", [], "any", false, false, false, 82), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Prénom</label>
                            <div class=\"ms-4\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 86, $this->source); })()), "prenom", [], "any", false, false, false, 86), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Adresse</label>
                            <div class=\"ms-4\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 90, $this->source); })()), "adresse", [], "any", false, false, false, 90), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Téléphone</label>
                            <div class=\"ms-4\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 94, $this->source); })()), "telephone", [], "any", false, false, false, 94), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Email</label>
                            <div class=\"ms-4\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 98, $this->source); })()), "email", [], "any", false, false, false, 98), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Type Pièce</label>
                            <div class=\"ms-4\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 102, $this->source); })()), "typePiece", [], "any", false, false, false, 102), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Numéro Pièce</label>
                            <div class=\"ms-4\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 106, $this->source); })()), "numPiece", [], "any", false, false, false, 106), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_index");
        echo "\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-return-left"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            ";
        // line 115
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 116
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116)]), "html", null, true);
            echo "\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 122
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 123
            echo "                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 129
        echo "                    </div>

                    <div class=\"row mt-30\">
                        <div class=\"col-md-12 p-0\">
                            <div class=\"card m-0 p-4\">
                                <div class=\"d-flex align-items-center justify-content-between\">
                                    <h4 class=\"fw-bold\">Demandes initiées (";
        // line 135
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_install"]) || array_key_exists("les_install", $context) ? $context["les_install"] : (function () { throw new RuntimeError('Variable "les_install" does not exist.', 135, $this->source); })())), "html", null, true);
        echo ")</h4>
                                </div>
                                    ";
        // line 137
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
            // line 138
            echo "                                    <div class=\"float-end\" align=\"right\">
                                            <a class=\"btn btn-small py-0 px-1 fs-7 btn-warning me-2\" href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_addfromE", ["id" => 0, "idE" => twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 139, $this->source); })()), "getId", [], "method", false, false, false, 139)]), "html", null, true);
            echo "\" title=\"Nouvelle demande\">
                                                <svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#plus"), "html", null, true);
            echo "\"></use></svg>
                                                Nouvelle demande
                                            </a>
                                    </div>
                                    ";
        }
        // line 145
        echo "                                <span class=\"divider\">
                                    <hr></span>
                        ";
        // line 147
        if ((twig_length_filter($this->env, (isset($context["les_install"]) || array_key_exists("les_install", $context) ? $context["les_install"] : (function () { throw new RuntimeError('Variable "les_install" does not exist.', 147, $this->source); })())) == 0)) {
            // line 148
            echo "                        <div class=\"row pt-10\">
                            <div class=\"col-12\">
                                <div class=\"alert alert-warning d-flex align-items-center p-1\" role=\"alert\">
                                    <div>
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 24 24\">
                                            <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
                                        </svg>
                                        Aucun enregistrement trouvé !
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        } else {
            // line 161
            echo "                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <thead>
                            <tr>
                                <th scope=\"col\">N° demande</th> 
                                <th class=\"priority-3\">Usage</th> 
                                <th class=\"priority-3\">Date Demande</th>
                                <th>Statut demande</th>
                                <th width=\"60\"></th>
                                ";
            // line 170
            echo "                                ";
            // line 171
            echo "                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_install"]) || array_key_exists("les_install", $context) ? $context["les_install"] : (function () { throw new RuntimeError('Variable "les_install" does not exist.', 174, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 175
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 175) < 7)) {
                    // line 176
                    echo "                                    ";
                    $context["badge_etat"] = "danger";
                    // line 177
                    echo "                                ";
                }
                // line 178
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 178) <= 7)) {
                    // line 179
                    echo "                                    ";
                    $context["badge_etat"] = "warning";
                    // line 180
                    echo "                                ";
                }
                // line 181
                echo "                                <tr>
                                    <td scope=\"row\" class=\"fw-bold\">
                                        ";
                // line 183
                if (twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 183)) {
                    // line 184
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 184), "numero", [], "any", false, false, false, 184), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 186
                    echo "                                                <span>[";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdAt", [], "any", false, false, false, 186), "d/m/y_H:i:s"), "html", null, true);
                    echo "]</span>
                                        ";
                }
                // line 188
                echo "                                    </td>
                                    <td class=\"priority-3\">";
                // line 189
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "usages", [], "any", false, false, false, 189), "html", null, true);
                echo "</td>
                                    <td>
                                            <span class=\"badge badge-warning fs-8\">";
                // line 191
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdAt", [], "any", false, false, false, 191), "d-m-Y"), "html", null, true);
                echo "</span>
                                    </td>
                                    <td>

                                ";
                // line 195
                $context["renew"] = 0;
                // line 196
                echo "                                
                                ";
                // line 197
                $context["etat"] = twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 197);
                echo " 
                                ";
                // line 198
                $context["label_etat"] = "danger";
                echo " 
                                ";
                // line 199
                $context["link"] = "app_installation_showpop";
                // line 200
                echo "                                ";
                $context["id_ent"] = twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 200);
                // line 201
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 201)) {
                    // line 202
                    echo "                                    ";
                    $context["paiement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 202), "paiement", [], "any", false, false, false, 202);
                    echo " 
                                    ";
                    // line 203
                    $context["dossier"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 203), "dossier", [], "any", false, false, false, 203);
                    echo " 
                                    ";
                    // line 204
                    if ((isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 204, $this->source); })())) {
                        // line 205
                        echo "                                        ";
                        $context["etat"] = "Paiement enregistré";
                        // line 206
                        echo "                                        ";
                        if (twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 206, $this->source); })()), "paiementEffectue", [], "any", false, false, false, 206)) {
                            // line 207
                            echo "                                            ";
                            $context["etat"] = "Paiement validé";
                            // line 208
                            echo "                                        ";
                        }
                        // line 209
                        echo "                                        ";
                        $context["label_etat"] = "warning";
                        echo " 
                                    ";
                    }
                    // line 211
                    echo "                                    ";
                    if ((isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 211, $this->source); })())) {
                        // line 212
                        echo "                                        ";
                        $context["link"] = "app_dossier_showpop";
                        // line 213
                        echo "                                        ";
                        $context["id_ent"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 213, $this->source); })()), "id", [], "any", false, false, false, 213);
                        // line 214
                        echo "                                        ";
                        $context["etat"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 214, $this->source); })()), "etat", [], "any", false, false, false, 214);
                        // line 215
                        echo "                                        ";
                        if ( !twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 215, $this->source); })()), "attestation", [], "any", false, false, false, 215)) {
                            // line 216
                            echo "                                            ";
                            $context["etat"] = ("En attente " . twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 216, $this->source); })()), "etat", [], "any", false, false, false, 216));
                            // line 217
                            echo "                                        ";
                        }
                        // line 218
                        echo "                                        ";
                        $context["label_etat"] = "success";
                        echo " 

                                        ";
                        // line 220
                        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 220, $this->source); })()), "attestation", [], "any", false, false, false, 220)) {
                            // line 221
                            echo "                                            ";
                            if ((twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 221, $this->source); })()), "visiteCourante", [], "any", false, false, false, 221) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 221, $this->source); })()), "visiteCourante", [], "any", false, false, false, 221), "conclusion", [], "any", false, false, false, 221))) {
                                // line 222
                                echo "                                                ";
                                $context["label_etat"] = " bg-vertf bg-success p-1";
                                // line 223
                                echo "                                            ";
                            } else {
                                // line 224
                                echo "                                                ";
                                $context["label_etat"] = " bg-danger p-1";
                                // line 225
                                echo "                                                ";
                                $context["renew"] = 1;
                                // line 226
                                echo "                                            ";
                            }
                            // line 227
                            echo "                                        ";
                        }
                        // line 228
                        echo "                                    ";
                    }
                    // line 229
                    echo "                                ";
                }
                // line 230
                echo "
\t\t\t\t\t\t\t\t\t<span class=\"fs-8 badge badge-";
                // line 231
                echo twig_escape_filter($this->env, (isset($context["label_etat"]) || array_key_exists("label_etat", $context) ? $context["label_etat"] : (function () { throw new RuntimeError('Variable "label_etat" does not exist.', 231, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 231, $this->source); })()), "html", null, true);
                echo "</span>
                                    </td>
                                    <td>
                                        <a class=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpop", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 234)]), "html", null, true);
                echo "\" title=\"Détails de la demande\">
                                            <svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"";
                // line 235
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                echo "\"></use></svg>
                                        </a>
                                        ";
                // line 237
                if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")) && (isset($context["renew"]) || array_key_exists("renew", $context) ? $context["renew"] : (function () { throw new RuntimeError('Variable "renew" does not exist.', 237, $this->source); })()))) {
                    // line 238
                    echo "                                        <a class=\"me-2\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_renew", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 238)]), "html", null, true);
                    echo "\" title=\"Nouvelle demande\">
                                            <svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"";
                    // line 239
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#plus"), "html", null, true);
                    echo "\"></use></svg>
                                        </a>
                                        ";
                } else {
                    // line 242
                    echo "                                        <a class=\"\" href=\"\" title=\"\">
                                            <svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"";
                    // line 243
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#reception-0"), "html", null, true);
                    echo "\"></use></svg>
                                        </a>
                                        ";
                }
                // line 246
                echo "                                    </td>
                                    ";
                // line 248
                echo "                                    ";
                // line 255
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 257
            echo "                        </tbody>
                        </table>
                        ";
        }
        // line 260
        echo "                            </div>

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
        return "electricien/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  596 => 260,  591 => 257,  584 => 255,  582 => 248,  579 => 246,  573 => 243,  570 => 242,  564 => 239,  559 => 238,  557 => 237,  552 => 235,  548 => 234,  540 => 231,  537 => 230,  534 => 229,  531 => 228,  528 => 227,  525 => 226,  522 => 225,  519 => 224,  516 => 223,  513 => 222,  510 => 221,  508 => 220,  502 => 218,  499 => 217,  496 => 216,  493 => 215,  490 => 214,  487 => 213,  484 => 212,  481 => 211,  475 => 209,  472 => 208,  469 => 207,  466 => 206,  463 => 205,  461 => 204,  457 => 203,  452 => 202,  449 => 201,  446 => 200,  444 => 199,  440 => 198,  436 => 197,  433 => 196,  431 => 195,  424 => 191,  419 => 189,  416 => 188,  410 => 186,  404 => 184,  402 => 183,  398 => 181,  395 => 180,  392 => 179,  389 => 178,  386 => 177,  383 => 176,  380 => 175,  376 => 174,  371 => 171,  369 => 170,  359 => 161,  344 => 148,  342 => 147,  338 => 145,  330 => 140,  326 => 139,  323 => 138,  321 => 137,  316 => 135,  308 => 129,  301 => 125,  297 => 123,  294 => 122,  287 => 118,  281 => 116,  279 => 115,  273 => 112,  268 => 110,  261 => 106,  254 => 102,  247 => 98,  240 => 94,  233 => 90,  226 => 86,  219 => 82,  212 => 78,  202 => 71,  192 => 63,  188 => 61,  184 => 59,  177 => 57,  171 => 48,  165 => 47,  159 => 46,  154 => 45,  151 => 44,  148 => 43,  145 => 42,  142 => 41,  138 => 40,  133 => 37,  126 => 31,  124 => 30,  119 => 28,  108 => 20,  96 => 11,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <div class=\"row-fluid\">
        <ul class=\"nav nav-pills mb-4 pb-2 border-bottom border-dark\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Electriciens installateurs</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_proprietaire_index') }}\">Propriétaires d'installation</a>
            </li>
        </ul>
    </div>
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/electricien\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des Electriciens</span>
            </a>
            <a href=\"{{ path('app_electricien_index') }}\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Electriciens</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4 priority-4\">
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des Electriciens ({{ les_electricien|length }})
                        </caption>
                        {% if les_electricien  %}
                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Téléphone</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\">Prénom</th> 
                                {# <th scope=\"col\" width=\"1%\" align=\"center\">Localités</th>  #}
                            </tr>
                        </thead>
                        <tbody>
                            {% for dep in les_electricien %}
                                {% set cur='' %}
                                {% if electricien.id==dep.id %}
                                    {% set cur='bg-warning text-dark bg-opacity-25' %}
                                {% endif %}
                                <tr class=\"{{ cur }}\">
                                    <td scope=\"row\"><a href=\"{{ path('app_electricien_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ dep.telephone }}</a></td>
                                    <td><a href=\"{{ path('app_electricien_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none\">{{ dep.nom }}</a></td>
                                    <td><a href=\"{{ path('app_electricien_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none\">{{ dep.prenom }}</a></td>
{#                                     
                                    <td align=\"center\">
                                    {% if dep.localite.count >0 %}
                                        <a href=\"{{ path('app_electricien_show', {'id': dep.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ dep.localite.count }}</a>
                                    {% else %}
                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    {% endif %}
                                    </td> #}
                                </tr>
                            {% endfor %}
                        </tbody>
                        {% else %}
                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun electricien !</span></td></tr>
                        {% endif %}
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails du electricien {{ electricien }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Localité</label>
                            <div class=\"ms-4\">{{ electricien.localite }}</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ electricien.nom }}</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Prénom</label>
                            <div class=\"ms-4\">{{ electricien.prenom }}</div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Adresse</label>
                            <div class=\"ms-4\">{{ electricien.adresse }}</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Téléphone</label>
                            <div class=\"ms-4\">{{ electricien.telephone }}</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Email</label>
                            <div class=\"ms-4\">{{ electricien.email }}</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Type Pièce</label>
                            <div class=\"ms-4\">{{ electricien.typePiece }}</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Numéro Pièce</label>
                            <div class=\"ms-4\">{{ electricien.numPiece }}</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"{{ path('app_electricien_index') }}\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#arrow-return-left') }}\"></use>
                                </svg>
                            </a>
                            {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('app_electricien_edit', {'id': electricien.id }) }}\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                </svg>
                            </a>
                            {% endif %}
                            {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#trash') }}\"></use>
                                </svg>
                            </a>
                            {% endif %}
                    </div>

                    <div class=\"row mt-30\">
                        <div class=\"col-md-12 p-0\">
                            <div class=\"card m-0 p-4\">
                                <div class=\"d-flex align-items-center justify-content-between\">
                                    <h4 class=\"fw-bold\">Demandes initiées ({{ les_install|length }})</h4>
                                </div>
                                    {% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_ACCUEIL') or is_granted('ROLE_RFO')) %}
                                    <div class=\"float-end\" align=\"right\">
                                            <a class=\"btn btn-small py-0 px-1 fs-7 btn-warning me-2\" href=\"{{ path('app_installation_addfromE', {'id': 0, 'idE': electricien.getId()}) }}\" title=\"Nouvelle demande\">
                                                <svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#plus\") }}\"></use></svg>
                                                Nouvelle demande
                                            </a>
                                    </div>
                                    {% endif %}
                                <span class=\"divider\">
                                    <hr></span>
                        {% if les_install|length == 0 %}
                        <div class=\"row pt-10\">
                            <div class=\"col-12\">
                                <div class=\"alert alert-warning d-flex align-items-center p-1\" role=\"alert\">
                                    <div>
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 24 24\">
                                            <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
                                        </svg>
                                        Aucun enregistrement trouvé !
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% else %}
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <thead>
                            <tr>
                                <th scope=\"col\">N° demande</th> 
                                <th class=\"priority-3\">Usage</th> 
                                <th class=\"priority-3\">Date Demande</th>
                                <th>Statut demande</th>
                                <th width=\"60\"></th>
                                {# <th scope=\"col\">Agence</th> #}
                                {# <th class=\"text-center\" scope=\"col\">Départements</th>  #}
                            </tr>
                        </thead>
                        <tbody>
                            {% for ag in les_install %}
                                {% if ag.step < 7 %}
                                    {% set badge_etat = \"danger\" %}
                                {% endif %}
                                {% if ag.step <= 7 %}
                                    {% set badge_etat = \"warning\" %}
                                {% endif %}
                                <tr>
                                    <td scope=\"row\" class=\"fw-bold\">
                                        {% if ag.demandeCourante %}
                                                {{ ag.demandeCourante.numero }}
                                        {% else %}
                                                <span>[{{ ag.createdAt|date(\"d/m/y_H:i:s\") }}]</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"priority-3\">{{ ag.usages }}</td>
                                    <td>
                                            <span class=\"badge badge-warning fs-8\">{{ ag.createdAt | date(\"d-m-Y\") }}</span>
                                    </td>
                                    <td>

                                {% set renew = 0 %}
                                
                                {% set etat = ag.etat %} 
                                {% set label_etat = 'danger' %} 
                                {% set link = 'app_installation_showpop' %}
                                {% set id_ent = ag.id %}
                                {% if ag.demandeCourante %}
                                    {% set paiement = ag.demandeCourante.paiement %} 
                                    {% set dossier = ag.demandeCourante.dossier %} 
                                    {% if paiement %}
                                        {% set etat = 'Paiement enregistré' %}
                                        {% if paiement.paiementEffectue %}
                                            {% set etat = 'Paiement validé' %}
                                        {% endif %}
                                        {% set label_etat = 'warning' %} 
                                    {% endif %}
                                    {% if dossier %}
                                        {% set link = 'app_dossier_showpop' %}
                                        {% set id_ent = dossier.id %}
                                        {% set etat = dossier.etat %}
                                        {% if not dossier.attestation %}
                                            {% set etat = 'En attente ' ~ dossier.etat %}
                                        {% endif %}
                                        {% set label_etat = 'success' %} 

                                        {% if dossier.attestation %}
                                            {% if dossier.visiteCourante and dossier.visiteCourante.conclusion %}
                                                {% set label_etat = \" bg-vertf bg-success p-1\" %}
                                            {% else %}
                                                {% set label_etat = \" bg-danger p-1\" %}
                                                {% set renew = 1 %}
                                            {% endif %}
                                        {% endif %}
                                    {% endif %}
                                {% endif %}

\t\t\t\t\t\t\t\t\t<span class=\"fs-8 badge badge-{{label_etat}}\">{{ etat }}</span>
                                    </td>
                                    <td>
                                        <a class=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"{{ path('app_installation_showpop', {'id': ag.id}) }}\" title=\"Détails de la demande\">
                                            <svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#search\") }}\"></use></svg>
                                        </a>
                                        {% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_ACCUEIL') or is_granted('ROLE_RFO')) and renew %}
                                        <a class=\"me-2\" href=\"{{ path('app_installation_renew', {'id': ag.id}) }}\" title=\"Nouvelle demande\">
                                            <svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#plus\") }}\"></use></svg>
                                        </a>
                                        {% else %}
                                        <a class=\"\" href=\"\" title=\"\">
                                            <svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"{{ asset(\"assets/img/bootstrap-icons.svg#reception-0\") }}\"></use></svg>
                                        </a>
                                        {% endif %}
                                    </td>
                                    {# <td>{{ ag.agence }}</td> #}
                                    {# <td class=\"text-center\">
                                        {% if reg.departement.count >0 %}
                                            <span class=\"badge bg-success text-light rounded-pill fw-normal\">{{ reg.departement.count }}</span>
                                        {% else %}
                                            <code class=\"text-danger text-opacity-50\">Aucun département</code>
                                        {% endif %}
                                    </td> #}
                                </tr>
                            {% endfor %}
                        </tbody>
                        </table>
                        {% endif %}
                            </div>

                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </section>
{% endblock %}


", "electricien/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/electricien/show.html.twig");
    }
}
