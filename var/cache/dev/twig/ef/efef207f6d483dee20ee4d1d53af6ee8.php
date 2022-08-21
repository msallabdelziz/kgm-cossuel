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

/* agent/show.html.twig */
class __TwigTemplate_f6b131a9d561bc9dae1b2715197f75e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agent/show.html.twig", 1);
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
        echo "    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/agent\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des agents</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Agents</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4 priority-4\">
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des agents (";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["les_agent"]) || array_key_exists("les_agent", $context) ? $context["les_agent"] : (function () { throw new RuntimeError('Variable "les_agent" does not exist.', 18, $this->source); })())), "html", null, true);
        echo ")
                            ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_add");
            echo "\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#plus"), "html", null, true);
            echo "\"></use>
                                </svg>Ajout Agent
                            </a>
                            ";
        }
        // line 26
        echo "                        </caption>
                        ";
        // line 27
        if ((isset($context["les_agent"]) || array_key_exists("les_agent", $context) ? $context["les_agent"] : (function () { throw new RuntimeError('Variable "les_agent" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                ";
            // line 33
            echo "                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["les_agent"]) || array_key_exists("les_agent", $context) ? $context["les_agent"] : (function () { throw new RuntimeError('Variable "les_agent" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 37
                echo "                                ";
                $context["cur"] = "";
                // line 38
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 38))) {
                    // line 39
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 40
                    echo "                                ";
                }
                // line 41
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["cur"]) || array_key_exists("cur", $context) ? $context["cur"] : (function () { throw new RuntimeError('Variable "cur" does not exist.', 41, $this->source); })()), "html", null, true);
                echo "\">
                                    <td scope=\"row\"><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "matricule", [], "any", false, false, false, 42), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "nom", [], "any", false, false, false, 43), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "prenom", [], "any", false, false, false, 43), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" class=\"text-dark fw-normal fs-8 text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "profil", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
                echo "</a></td>
";
                // line 53
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                        </tbody>
                        ";
        } else {
            // line 57
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun agent !</span></td></tr>
                        ";
        }
        // line 59
        echo "                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de l'agent ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Matricule</label>
                            <div class=\"ms-4\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 74, $this->source); })()), "matricule", [], "any", false, false, false, 74), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Agence</label>
                            <div class=\"ms-4\">
                                ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 79, $this->source); })()), "agence", [], "any", false, false, false, 79)) {
            // line 80
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 80, $this->source); })()), "agence", [], "any", false, false, false, 80), "nom", [], "any", false, false, false, 80), "html", null, true);
            echo "
                                ";
        } else {
            // line 82
            echo "                                    <span class=\"text-danger\">-</span>
                                ";
        }
        // line 84
        echo "                                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 85
            echo "                                    <a class=\"ms-2\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_affect", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\" title=\"Nouvelle affectation\">
                                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                            <use xlink:href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                        </svg>
                                    </a>
                                    ";
            // line 90
            if (twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 90, $this->source); })()), "idagence", [], "any", false, false, false, 90)) {
                // line 91
                echo "                                    <a class=\"ms-2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_desaffect", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
                echo "\" title=\"Supprimer affectation\">
                                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                            <use xlink:href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x-square"), "html", null, true);
                echo "\"></use>
                                        </svg>
                                    </a>
                                    ";
            }
            // line 97
            echo "                                ";
        }
        // line 98
        echo "                            </div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 102, $this->source); })()), "nom", [], "any", false, false, false, 102), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Prénom</label>
                            <div class=\"ms-4\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 106, $this->source); })()), "prenom", [], "any", false, false, false, 106), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Fonction</label>
                            <div class=\"ms-4\">
                                ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 111, $this->source); })()), "profil", [], "any", false, false, false, 111)) {
            // line 112
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 112, $this->source); })()), "profil", [], "any", false, false, false, 112), "html", null, true);
            echo "
                                ";
        } else {
            // line 114
            echo "                                    <span class=\"text-danger fs-7\">Non défini</span>
                                ";
        }
        // line 116
        echo "                            </div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Adresse</label>
                            <div class=\"ms-4\">";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 120, $this->source); })()), "adresse", [], "any", false, false, false, 120), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Téléphone</label>
                            <div class=\"ms-4\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 124, $this->source); })()), "telephone", [], "any", false, false, false, 124), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Email</label>
                            <div class=\"ms-4\">";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 128, $this->source); })()), "email", [], "any", false, false, false, 128), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col pt-2\" align=\"left\">
                        ";
        // line 133
        if ((isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 133, $this->source); })())) {
            // line 134
            echo "                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"green\">
                                        <use xlink:href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check"), "html", null, true);
            echo "\"></use>
                                </svg>
                                <span class=\"text-success\">Compte utilisateur créé (<span class=\"fw-bold\">";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 137, $this->source); })()), "login", [], "any", false, false, false, 137), "html", null, true);
            echo "</span>)</span>
                                </a>
                        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 139
(isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 139, $this->source); })()), "profil", [], "any", false, false, false, 139) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 140
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_createuser", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 140, $this->source); })()), "id", [], "any", false, false, false, 140)]), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-sm\" title=\"Créer un compte utilisateur\">
                                    <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"orange\">
                                        <use xlink:href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person-badge"), "html", null, true);
            echo "\"></use>
                                    </svg> Créer compte utilisateur
                                </a>
                        ";
        }
        // line 146
        echo "                        </div>
                        <div class=\"col pt-2\" align=\"right\">
                                <a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_index");
        echo "\" class=\"mx-2\" title=\"Retour\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                        <use xlink:href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-return-left"), "html", null, true);
        echo "\"></use>
                                    </svg>
                                </a>
                                <a href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 153, $this->source); })()), "id", [], "any", false, false, false, 153)]), "html", null, true);
        echo "\" class=\"mx-2\" title=\"Modifier\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                        <use xlink:href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
        echo "\"></use>
                                    </svg>
                                </a>
                                <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                        <use xlink:href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
        echo "\"></use>
                                    </svg>
                                </a>
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
        return "agent/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 160,  381 => 155,  376 => 153,  370 => 150,  365 => 148,  361 => 146,  354 => 142,  348 => 140,  346 => 139,  341 => 137,  336 => 135,  333 => 134,  331 => 133,  323 => 128,  316 => 124,  309 => 120,  303 => 116,  299 => 114,  293 => 112,  291 => 111,  283 => 106,  276 => 102,  270 => 98,  267 => 97,  260 => 93,  254 => 91,  252 => 90,  246 => 87,  240 => 85,  237 => 84,  233 => 82,  227 => 80,  225 => 79,  217 => 74,  207 => 67,  197 => 59,  193 => 57,  189 => 55,  182 => 53,  176 => 44,  168 => 43,  162 => 42,  157 => 41,  154 => 40,  151 => 39,  148 => 38,  145 => 37,  141 => 36,  136 => 33,  130 => 28,  128 => 27,  125 => 26,  118 => 22,  112 => 20,  110 => 19,  106 => 18,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/agent\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des agents</span>
            </a>
            <a href=\"{{ path('app_agent_index') }}\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Agents</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4 priority-4\">
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des agents ({{ les_agent|length }})
                            {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('app_agent_add') }}\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#plus') }}\"></use>
                                </svg>Ajout Agent
                            </a>
                            {% endif %}
                        </caption>
                        {% if les_agent  %}
                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                {# <th scope=\"col\" width=\"1%\" align=\"center\">Localités</th>  #}
                            </tr>
                        </thead>
                        <tbody>
                            {% for dep in les_agent %}
                                {% set cur='' %}
                                {% if agent.id==dep.id %}
                                    {% set cur='bg-warning text-dark bg-opacity-25' %}
                                {% endif %}
                                <tr class=\"{{ cur }}\">
                                    <td scope=\"row\"><a href=\"{{ path('app_agent_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none fw-bold\">{{ dep.matricule }}</a></td>
                                    <td><a href=\"{{ path('app_agent_show', {'id': dep.id }) }}\" class=\"text-dark text-decoration-none\">{{ dep.nom }}  {{ dep.prenom }}</a></td>
                                    <td><a href=\"{{ path('app_agent_show', {'id': dep.id }) }}\" class=\"text-dark fw-normal fs-8 text-decoration-none\">{{ dep.profil.nom }}</a></td>
{#                                     
                                    <td align=\"center\">
                                    {% if dep.localite.count >0 %}
                                        <a href=\"{{ path('app_agent_show', {'id': dep.id }) }}\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">{{ dep.localite.count }}</a>
                                    {% else %}
                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    {% endif %}
                                    </td> #}
                                </tr>
                            {% endfor %}
                        </tbody>
                        {% else %}
                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun agent !</span></td></tr>
                        {% endif %}
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de l'agent {{ agent }}</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Matricule</label>
                            <div class=\"ms-4\">{{ agent.matricule }}</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Agence</label>
                            <div class=\"ms-4\">
                                {% if agent.agence %}
                                    {{ agent.agence.nom }}
                                {% else %}
                                    <span class=\"text-danger\">-</span>
                                {% endif %}
                                {% if is_granted('ROLE_ADMIN') %}
                                    <a class=\"ms-2\" href=\"{{ path('app_agent_affect', { 'id' : agent.id}) }}\" title=\"Nouvelle affectation\">
                                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                        </svg>
                                    </a>
                                    {% if agent.idagence %}
                                    <a class=\"ms-2\" href=\"{{ path('app_agent_desaffect', { 'id' : agent.id}) }}\" title=\"Supprimer affectation\">
                                        <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#x-square') }}\"></use>
                                        </svg>
                                    </a>
                                    {% endif %}
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">{{ agent.nom }}</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Prénom</label>
                            <div class=\"ms-4\">{{ agent.prenom }}</div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Fonction</label>
                            <div class=\"ms-4\">
                                {% if agent.profil %}
                                    {{ agent.profil }}
                                {% else %}
                                    <span class=\"text-danger fs-7\">Non défini</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Adresse</label>
                            <div class=\"ms-4\">{{ agent.adresse }}</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Téléphone</label>
                            <div class=\"ms-4\">{{ agent.telephone }}</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Email</label>
                            <div class=\"ms-4\">{{ agent.email }}</div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col pt-2\" align=\"left\">
                        {% if utilisateur %}
                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"green\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check') }}\"></use>
                                </svg>
                                <span class=\"text-success\">Compte utilisateur créé (<span class=\"fw-bold\">{{ utilisateur.login }}</span>)</span>
                                </a>
                        {% elseif(agent.profil) and (is_granted('ROLE_ADMIN')) %}
                                <a href=\"{{ path('app_agent_createuser', {'id': agent.id }) }}\" class=\"btn btn-secondary btn-sm\" title=\"Créer un compte utilisateur\">
                                    <svg class=\"bi\" width=\"20\" height=\"20\" fill=\"orange\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person-badge') }}\"></use>
                                    </svg> Créer compte utilisateur
                                </a>
                        {% endif %}
                        </div>
                        <div class=\"col pt-2\" align=\"right\">
                                <a href=\"{{ path('app_agent_index') }}\" class=\"mx-2\" title=\"Retour\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#arrow-return-left') }}\"></use>
                                    </svg>
                                </a>
                                <a href=\"{{ path('app_agent_edit', {'id': agent.id }) }}\" class=\"mx-2\" title=\"Modifier\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#pencil-square') }}\"></use>
                                    </svg>
                                </a>
                                <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#trash') }}\"></use>
                                    </svg>
                                </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
{% endblock %}


", "agent/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/agent/show.html.twig");
    }
}
