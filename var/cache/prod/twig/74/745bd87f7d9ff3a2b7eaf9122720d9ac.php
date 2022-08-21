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

/* agence/show.html.twig */
class __TwigTemplate_da8e273dc0d84919268faf56b6bdc6aa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "agence/show.html.twig", 1);
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
            <a href=\"/agence\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des agences</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Agences</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4 priority-4\">
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des agences (";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["les_agence"] ?? null)), "html", null, true);
        echo ")
                            <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_add");
        echo "\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#plus"), "html", null, true);
        echo "\"></use>
                                </svg>Ajout Agence
                            </a>
                        </caption>
                        ";
        // line 25
        if (($context["les_agence"] ?? null)) {
            // line 26
            echo "                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                ";
            // line 31
            echo "                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_agence"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 35
                echo "                                ";
                $context["cur"] = "";
                // line 36
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "id", [], "any", false, false, false, 36) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 36))) {
                    // line 37
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 38
                    echo "                                ";
                }
                // line 39
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, ($context["cur"] ?? null), "html", null, true);
                echo "\">
                                    <td scope=\"row\"><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "code", [], "any", false, false, false, 40), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "nom", [], "any", false, false, false, 41), "html", null, true);
                echo "</a></td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                        </tbody>
                        ";
        } else {
            // line 46
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun agence !</span></td></tr>
                        ";
        }
        // line 48
        echo "                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails de l'agence ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "nom", [], "any", false, false, false, 56), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Code</label>
                            <div class=\"ms-4\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "code", [], "any", false, false, false, 63), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "nom", [], "any", false, false, false, 67), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Adresse</label>
                            <div class=\"ms-4\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "adresse", [], "any", false, false, false, 71), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Téléphone</label>
                            <div class=\"ms-4\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "telephone", [], "any", false, false, false, 75), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <label class=\"fw-light fs-7\">Email</label>
                            <div class=\"ms-4\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "email", [], "any", false, false, false, 79), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_index");
        echo "\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-return-left"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            ";
        // line 88
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 89
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 95
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 96
            echo "                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 102
        echo "                    </div>
                </div>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Localités couvertes par ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "nom", [], "any", false, false, false, 109), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "localite", [], "any", false, false, false, 109)), "html", null, true);
        echo ")
                            <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_localite", ["id" => twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "id", [], "any", false, false, false, 110)]), "html", null, true);
        echo "\"  class=\"btn btn-sm py-0 mt-1 fs-7 btn-primary float-end\">Ajout Localité</a>
                        </caption>
                        ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "localite", [], "any", false, false, false, 112), "count", [], "any", false, false, false, 112)) {
            // line 113
            echo "                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Code</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\">Département</th> 
                                <th width=\"20\"></th> 
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "localite", [], "any", false, false, false, 122));
            foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
                // line 123
                echo "                                <tr>
                                    <td scope=\"row\"><a href=\"\" class=\"text-dark text-decoration-none fw-bold\">";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "code", [], "any", false, false, false, 124), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"\" class=\"text-dark text-decoration-none\">";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "nom", [], "any", false, false, false, 125), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"\" class=\"text-dark text-decoration-none\">";
                // line 126
                if (twig_get_attribute($this->env, $this->source, $context["loc"], "departement", [], "any", false, false, false, 126)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loc"], "departement", [], "any", false, false, false, 126), "nom", [], "any", false, false, false, 126), "html", null, true);
                    echo " ";
                }
                echo "</a></td>
                                    <td>
                                        <a onclick=\"return confirm('Confirmer !')\" href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_localitedel", ["id" => twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "id", [], "any", false, false, false, 128), "idL" => twig_get_attribute($this->env, $this->source, $context["loc"], "id", [], "any", false, false, false, 128)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">
                                            <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                                <use xlink:href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x-circle"), "html", null, true);
                echo "\"></use>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "                        </tbody>
                        ";
        } else {
            // line 138
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucune localité !</span></td></tr>
                        ";
        }
        // line 140
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
        return "agence/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 140,  324 => 138,  320 => 136,  308 => 130,  303 => 128,  294 => 126,  290 => 125,  286 => 124,  283 => 123,  279 => 122,  268 => 113,  266 => 112,  261 => 110,  255 => 109,  246 => 102,  239 => 98,  235 => 96,  232 => 95,  225 => 91,  219 => 89,  217 => 88,  211 => 85,  206 => 83,  199 => 79,  192 => 75,  185 => 71,  178 => 67,  171 => 63,  161 => 56,  151 => 48,  147 => 46,  143 => 44,  132 => 41,  126 => 40,  121 => 39,  118 => 38,  115 => 37,  112 => 36,  109 => 35,  105 => 34,  100 => 31,  94 => 26,  92 => 25,  85 => 21,  80 => 19,  76 => 18,  65 => 10,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agence/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/agence/show.html.twig");
    }
}
