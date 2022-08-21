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

/* departement/localite/show.html.twig */
class __TwigTemplate_b6b6197da61126e09ee7494fc6dc3948 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "departement/localite/show.html.twig", 1);
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
        echo "
    <section>
        <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
            <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                <div class=\"container-fluid\">
                    <span class=\"navbar-brand mb-0 h1\">Détails localité de ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["localite"] ?? null), "nom", [], "any", false, false, false, 10), "html", null, true);
        echo "</span>
                </div>
            </nav>
            <div class=\"container\">
                <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                    <div class=\"col-4\">
                        <label class=\"fw-light fs-7\">Code</label>
                        <div class=\"ms-4\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["localite"] ?? null), "code", [], "any", false, false, false, 17), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"col-8\">
                        <label class=\"fw-light fs-7\">Nom</label>
                        <div class=\"ms-4\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["localite"] ?? null), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</div>
                    </div>
                </div>
                <div class=\"col pt-2\" align=\"right\">
                        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_departement_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["localite"] ?? null), "departement", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\" class=\"mx-2\" title=\"Retour\">
                            <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                <use xlink:href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-return-left"), "html", null, true);
        echo "\"></use>
                            </svg>
                        </a>
                        ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["localite"] ?? null), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"mx-2\" title=\"Modifier\">
                            <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                <use xlink:href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                            </svg>
                        </a>
                        ";
        }
        // line 37
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 38
            echo "                        <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                            <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                <use xlink:href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
            echo "\"></use>
                            </svg>
                        </a>
                        ";
        }
        // line 44
        echo "                </div>
            </div>

        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "departement/localite/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 44,  122 => 40,  118 => 38,  115 => 37,  108 => 33,  102 => 31,  100 => 30,  94 => 27,  89 => 25,  82 => 21,  75 => 17,  65 => 10,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "departement/localite/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/departement/localite/show.html.twig");
    }
}
