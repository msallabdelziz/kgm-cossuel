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
class __TwigTemplate_78266270fa166d258c472033d968e8bb extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "agent/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "COSSUEL";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["les_agent"] ?? null)), "html", null, true);
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
        if (($context["les_agent"] ?? null)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["les_agent"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 37
                echo "                                ";
                $context["cur"] = "";
                // line 38
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "id", [], "any", false, false, false, 38) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 38))) {
                    // line 39
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 40
                    echo "                                ";
                }
                // line 41
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, ($context["cur"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["agent"] ?? null), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Matricule</label>
                            <div class=\"ms-4\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "matricule", [], "any", false, false, false, 74), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Agence</label>
                            <div class=\"ms-4\">
                                ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "agence", [], "any", false, false, false, 79)) {
            // line 80
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "agence", [], "any", false, false, false, 80), "nom", [], "any", false, false, false, 80), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_affect", ["id" => twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "id", [], "any", false, false, false, 85)]), "html", null, true);
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
            if (twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "idagence", [], "any", false, false, false, 90)) {
                // line 91
                echo "                                    <a class=\"ms-2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_desaffect", ["id" => twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "id", [], "any", false, false, false, 91)]), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "nom", [], "any", false, false, false, 102), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Prénom</label>
                            <div class=\"ms-4\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "prenom", [], "any", false, false, false, 106), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Fonction</label>
                            <div class=\"ms-4\">
                                ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "profil", [], "any", false, false, false, 111)) {
            // line 112
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "profil", [], "any", false, false, false, 112), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "adresse", [], "any", false, false, false, 120), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Téléphone</label>
                            <div class=\"ms-4\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "telephone", [], "any", false, false, false, 124), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Email</label>
                            <div class=\"ms-4\">";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "email", [], "any", false, false, false, 128), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col pt-2\" align=\"left\">
                        ";
        // line 133
        if (($context["utilisateur"] ?? null)) {
            // line 134
            echo "                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"green\">
                                        <use xlink:href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check"), "html", null, true);
            echo "\"></use>
                                </svg>
                                <span class=\"text-success\">Compte utilisateur créé (<span class=\"fw-bold\">";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "login", [], "any", false, false, false, 137), "html", null, true);
            echo "</span>)</span>
                                </a>
                        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 139
($context["agent"] ?? null), "profil", [], "any", false, false, false, 139) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 140
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_createuser", ["id" => twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "id", [], "any", false, false, false, 140)]), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "id", [], "any", false, false, false, 153)]), "html", null, true);
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
        return array (  359 => 160,  351 => 155,  346 => 153,  340 => 150,  335 => 148,  331 => 146,  324 => 142,  318 => 140,  316 => 139,  311 => 137,  306 => 135,  303 => 134,  301 => 133,  293 => 128,  286 => 124,  279 => 120,  273 => 116,  269 => 114,  263 => 112,  261 => 111,  253 => 106,  246 => 102,  240 => 98,  237 => 97,  230 => 93,  224 => 91,  222 => 90,  216 => 87,  210 => 85,  207 => 84,  203 => 82,  197 => 80,  195 => 79,  187 => 74,  177 => 67,  167 => 59,  163 => 57,  159 => 55,  152 => 53,  146 => 44,  138 => 43,  132 => 42,  127 => 41,  124 => 40,  121 => 39,  118 => 38,  115 => 37,  111 => 36,  106 => 33,  100 => 28,  98 => 27,  95 => 26,  88 => 22,  82 => 20,  80 => 19,  76 => 18,  65 => 10,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agent/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/agent/show.html.twig");
    }
}
