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

/* utilisateur/show.html.twig */
class __TwigTemplate_ea567eb484259826e8efedb2d7df52bf extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/show.html.twig", 1);
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
            <a href=\"/utilisateur\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des utilisateurs</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Utilisateurs</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4 priority-4\">
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des utilisateurs (";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["les_utilisateur"] ?? null)), "html", null, true);
        echo ")
                            ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_add");
            echo "\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#plus"), "html", null, true);
            echo "\"></use>
                                </svg>Ajout Utilisateur
                            </a>
                            ";
        }
        // line 26
        echo "                        </caption>
                        ";
        // line 27
        if (($context["les_utilisateur"] ?? null)) {
            // line 28
            echo "                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Type</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\">Prénom</th> 
                                ";
            // line 34
            echo "                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_utilisateur"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 38
                echo "                                ";
                $context["cur"] = "";
                // line 39
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "id", [], "any", false, false, false, 39) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 39))) {
                    // line 40
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 41
                    echo "                                ";
                }
                // line 42
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, ($context["cur"] ?? null), "html", null, true);
                echo "\">
                                    <td scope=\"row\"><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "type", [], "any", false, false, false, 43), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "nom", [], "any", false, false, false, 44), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "prenom", [], "any", false, false, false, 45), "html", null, true);
                echo "</a></td>
";
                // line 54
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                        </tbody>
                        ";
        } else {
            // line 58
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun utilisateur !</span></td></tr>
                        ";
        }
        // line 60
        echo "                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de l'utilisateur ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "nom", [], "any", false, false, false, 68), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "prenom", [], "any", false, false, false, 68), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Type</label>
                            <div class=\"ms-4\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "type", [], "any", false, false, false, 75), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Identifiant</label>
                            <div class=\"ms-4\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "login", [], "any", false, false, false, 79), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "nom", [], "any", false, false, false, 83), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Prénom</label>
                            <div class=\"ms-4\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "prenom", [], "any", false, false, false, 87), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Adresse</label>
                            <div class=\"ms-4\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "adresse", [], "any", false, false, false, 91), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Téléphone</label>
                            <div class=\"ms-4\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "telephone", [], "any", false, false, false, 95), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Email</label>
                            <div class=\"ms-4\">";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "email", [], "any", false, false, false, 99), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            ";
        // line 103
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 104
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_resetpass", ["id" => twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "id", [], "any", false, false, false, 104)]), "html", null, true);
            echo "\" class=\"mx-2 float-start btn btn-secondary btn-sm\" title=\"Reset mot de passe\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"white\">
                                    <use xlink:href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-clockwise"), "html", null, true);
            echo "\"></use>
                                </svg> Réinitialiser mot de passe
                            </a>
                                ";
            // line 109
            if ((twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "id", [], "any", false, false, false, 109) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 109), "id", [], "any", false, false, false, 109))) {
                // line 110
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_activer", ["id" => twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "id", [], "any", false, false, false, 110)]), "html", null, true);
                echo "\" class=\"mx-2 float-start btn btn-danger btn-sm\" title=\"Activer/Désavtiver le compte\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"white\">
                                        <use xlink:href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check"), "html", null, true);
                echo "\"></use>
                                    </svg> 
                                    ";
                // line 114
                if ( !twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "isActif", [], "any", false, false, false, 114)) {
                    // line 115
                    echo "                                        Activer le compte
                                    ";
                } else {
                    // line 117
                    echo "                                        Désactiver le compte
                                    ";
                }
                // line 119
                echo "                                    
                                </a>
                                ";
            }
            // line 122
            echo "                            ";
        }
        // line 123
        echo "
                            <a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        echo "\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-return-left"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            ";
        // line 129
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 130
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "id", [], "any", false, false, false, 130)]), "html", null, true);
            echo "\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 136
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 137
            echo "                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 143
        echo "                    </div>
                </div>

            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "utilisateur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 143,  318 => 139,  314 => 137,  311 => 136,  304 => 132,  298 => 130,  296 => 129,  290 => 126,  285 => 124,  282 => 123,  279 => 122,  274 => 119,  270 => 117,  266 => 115,  264 => 114,  259 => 112,  253 => 110,  251 => 109,  245 => 106,  239 => 104,  237 => 103,  230 => 99,  223 => 95,  216 => 91,  209 => 87,  202 => 83,  195 => 79,  188 => 75,  176 => 68,  166 => 60,  162 => 58,  158 => 56,  151 => 54,  145 => 45,  139 => 44,  133 => 43,  128 => 42,  125 => 41,  122 => 40,  119 => 39,  116 => 38,  112 => 37,  107 => 34,  100 => 28,  98 => 27,  95 => 26,  88 => 22,  82 => 20,  80 => 19,  76 => 18,  65 => 10,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "utilisateur/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/utilisateur/show.html.twig");
    }
}
