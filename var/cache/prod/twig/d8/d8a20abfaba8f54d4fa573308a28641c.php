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

/* departement/show.html.twig */
class __TwigTemplate_c4bf5fc764334aebc6c7ba990c2b2140 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "departement/show.html.twig", 1);
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
            <a href=\"/region\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des départements</span>
            </a>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "region", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Départements de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "region", [], "any", false, false, false, 10), "nom", [], "any", false, false, false, 10), "html", null, true);
        echo "</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4 priority-4\">
                <nav class=\"navbar text-secondary  my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Région de ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "region", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-4\">
                            <label class=\"fw-light fs-7\">Code</label>
                            <div class=\"ms-4\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "region", [], "any", false, false, false, 23), "code", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-8\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "region", [], "any", false, false, false, 27), "nom", [], "any", false, false, false, 27), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des départements de ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "region", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "region", [], "any", false, false, false, 36), "departement", [], "any", false, false, false, 36)), "html", null, true);
        echo ")
                        </caption>
                        ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "region", [], "any", false, false, false, 38), "departement", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38)) {
            // line 39
            echo "                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\" width=\"1%\" align=\"center\">Localités</th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "region", [], "any", false, false, false, 47), "departement", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 48
                echo "                                ";
                $context["cur"] = "";
                // line 49
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "id", [], "any", false, false, false, 49) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 49))) {
                    // line 50
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 51
                    echo "                                ";
                }
                // line 52
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, ($context["cur"] ?? null), "html", null, true);
                echo "\">
                                    <td scope=\"row\"><a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "code", [], "any", false, false, false, 53), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "nom", [], "any", false, false, false, 54), "html", null, true);
                echo "</a></td>
                                    <td align=\"center\">
                                    ";
                // line 56
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "localite", [], "any", false, false, false, 56), "count", [], "any", false, false, false, 56) > 0)) {
                    // line 57
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                    echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dep"], "localite", [], "any", false, false, false, 57), "count", [], "any", false, false, false, 57), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 59
                    echo "                                        <code class=\"text-danger text-opacity-50\">-</code>
                                    ";
                }
                // line 61
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                        </tbody>
                        ";
        } else {
            // line 66
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun département !</span></td></tr>
                        ";
        }
        // line 68
        echo "                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Département de ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "nom", [], "any", false, false, false, 76), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-3\">
                            <label class=\"fw-light fs-7\">Code</label>
                            <div class=\"ms-4\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "code", [], "any", false, false, false, 83), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-9\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "nom", [], "any", false, false, false, 87), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "region", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91)]), "html", null, true);
        echo "\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-return-left"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            ";
        // line 96
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 97
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 103
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 104
            echo "                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 110
        echo "                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des localités de ";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "nom", [], "any", false, false, false, 117), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "localite", [], "any", false, false, false, 117)), "html", null, true);
        echo ")
                            ";
        // line 118
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 119
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_add", ["id" => twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "id", [], "any", false, false, false, 119)]), "html", null, true);
            echo "\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Localité</a>
                            ";
        }
        // line 121
        echo "                        </caption>
                        ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "localite", [], "any", false, false, false, 122), "count", [], "any", false, false, false, 122)) {
            // line 123
            echo "                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\">Agence</th> 
                                <th width=\"60\"></th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["departement"] ?? null), "localite", [], "any", false, false, false, 132));
            foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
                // line 133
                echo "                                <tr>
                                    <td scope=\"row\"><a href=\"\" class=\"text-dark text-decoration-none fw-bold\">";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "code", [], "any", false, false, false, 134), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"\" class=\"text-dark text-decoration-none\">";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "nom", [], "any", false, false, false, 135), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"\" class=\"text-dark text-decoration-none\">";
                // line 136
                if (twig_get_attribute($this->env, $this->source, $context["loc"], "agence", [], "any", false, false, false, 136)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loc"], "agence", [], "any", false, false, false, 136), "nom", [], "any", false, false, false, 136), "html", null, true);
                    echo " ";
                }
                echo "</a></td>
                                    <td>
                                        ";
                // line 138
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 139
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["loc"], "id", [], "any", false, false, false, 139)]), "html", null, true);
                    echo "\" class=\"mx-1\" title=\"Modifier\">
                                            <svg class=\"bi\" width=\"12\" height=\"12\" fill=\"black\">
                                                <use xlink:href=\"";
                    // line 141
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
                    echo "\"></use>
                                            </svg>
                                        </a>
                                        ";
                }
                // line 145
                echo "                                        ";
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && 0)) {
                    // line 146
                    echo "                                        <a href=\"\" class=\"mx-1\" title=\"Supprimer\">
                                            <svg class=\"bi\" width=\"12\" height=\"12\" fill=\"red\">
                                                <use xlink:href=\"";
                    // line 148
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
                    echo "\"></use>
                                            </svg>
                                        </a>
                                        ";
                }
                // line 152
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "                        </tbody>
                        ";
        } else {
            // line 157
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucune localité !</span></td></tr>
                        ";
        }
        // line 159
        echo "                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "departement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 159,  366 => 157,  362 => 155,  354 => 152,  347 => 148,  343 => 146,  340 => 145,  333 => 141,  327 => 139,  325 => 138,  316 => 136,  312 => 135,  308 => 134,  305 => 133,  301 => 132,  290 => 123,  288 => 122,  285 => 121,  279 => 119,  277 => 118,  271 => 117,  262 => 110,  255 => 106,  251 => 104,  248 => 103,  241 => 99,  235 => 97,  233 => 96,  227 => 93,  222 => 91,  215 => 87,  208 => 83,  198 => 76,  188 => 68,  184 => 66,  180 => 64,  172 => 61,  168 => 59,  160 => 57,  158 => 56,  151 => 54,  145 => 53,  140 => 52,  137 => 51,  134 => 50,  131 => 49,  128 => 48,  124 => 47,  114 => 39,  112 => 38,  105 => 36,  93 => 27,  86 => 23,  76 => 16,  65 => 10,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "departement/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/departement/show.html.twig");
    }
}
