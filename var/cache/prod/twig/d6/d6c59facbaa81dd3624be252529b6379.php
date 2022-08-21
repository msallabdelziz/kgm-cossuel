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

/* rapport/showpdf.html.twig */
class __TwigTemplate_bcdf90e912cf7d5f34d0e392b81234fa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "rapport/showpdf.html.twig", 1);
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
            <a href=\"/rapport\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des rapports</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des rapports</a>
        </header>
        <div class=\"row\">
            <div class=\"mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Aperçu Rapport ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rapport"] ?? null), "libelle", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
                        <div class=\"float-end\">
                                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rapport_show", ["id" => twig_get_attribute($this->env, $this->source, ($context["rapport"] ?? null), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" class=\"action-button2 btn-secondary py-0 btn-sm fs-7\" title=\"Retour\">
                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"orange\">
                                        <use xlink:href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-return-left"), "html", null, true);
        echo "\"></use>
                                    </svg> Retour
                                </a>
                        </div>
                    </div>
                </nav>

                <div class=\"container mt-4\">
                    <div class=\"row\">
                        ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rapport"] ?? null), "rubriques", [], "any", false, false, false, 29), "count", [], "any", false, false, false, 29)) {
            // line 30
            echo "                        <div>
                        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["rapport"] ?? null), "rubriques", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["rub"]) {
                // line 32
                echo "                            <div class=\"mb-3\">
                                <h5 class=\"p-2 bg-dark text-light shadow border-bottom\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rub"], "numero", [], "any", false, false, false, 33), "html", null, true);
                echo "- ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rub"], "libelle", [], "any", false, false, false, 33), "html", null, true);
                echo "</h5>
                                ";
                // line 34
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rub"], "pointverification", [], "any", false, false, false, 34), "count", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "                                    <div class=\"p-2 ps-4 border shadow border-dark\">
                                    ";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["rub"], "pointverification", [], "any", false, false, false, 36));
                    foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
                        // line 37
                        echo "                                        <div class=\"py-2 border-bottom mb-2\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "numero", [], "any", false, false, false, 37), "html", null, true);
                        echo "- ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "objetVerification", [], "any", false, false, false, 37), "html", null, true);
                        echo "</div>
                                        <div class=\"row p-2 ps-4\">
                                            <div class=\"col-5 border fw-light border-light shadow p-2\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"green\">
                                                    <use xlink:href=\"";
                        // line 41
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check"), "html", null, true);
                        echo "\"></use>
                                                </svg>
                                                ";
                        // line 43
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "libelleConclusion1", [], "any", false, false, false, 43), "html", null, true);
                        echo "
                                                <div class=\"float-end\">
                                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                        <use xlink:href=\"";
                        // line 46
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#square"), "html", null, true);
                        echo "\"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class=\"col-5 offset-1 fw-light border border-light shadow p-2\">
                                                <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"red\">
                                                    <use xlink:href=\"";
                        // line 52
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#x"), "html", null, true);
                        echo "\"></use>
                                                </svg>
                                                ";
                        // line 54
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pt"], "libelleConclusion2", [], "any", false, false, false, 54), "html", null, true);
                        echo "
                                                <div class=\"float-end\">
                                                    <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"gray\">
                                                        <use xlink:href=\"";
                        // line 57
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#square"), "html", null, true);
                        echo "\"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class=\"col-11 mt-2 border fw-light border-light shadow border-opacity-25 pb-5 pt-1 ps-2 fs-8 text-secondary\">
                                                Commentaire: 
                                            </div>
                                        </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "                                    </div>
                                ";
                } else {
                    // line 68
                    echo "                                    <div class=\" text-center\"><span class=\"text-danger fs-7\">Aucun point de vérification !</span></div>
                                ";
                }
                // line 70
                echo "                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                        </div>
                        ";
        } else {
            // line 74
            echo "                            <div class=\" text-center\"><span class=\"text-danger fs-7\">Aucune rubrique !</span></div>
                        ";
        }
        // line 76
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "rapport/showpdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 76,  198 => 74,  194 => 72,  187 => 70,  183 => 68,  179 => 66,  164 => 57,  158 => 54,  153 => 52,  144 => 46,  138 => 43,  133 => 41,  123 => 37,  119 => 36,  116 => 35,  114 => 34,  108 => 33,  105 => 32,  101 => 31,  98 => 30,  96 => 29,  84 => 20,  79 => 18,  74 => 16,  65 => 10,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "rapport/showpdf.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/rapport/showpdf.html.twig");
    }
}
