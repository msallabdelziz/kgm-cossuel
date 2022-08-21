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

/* include/_search_liste.html.twig */
class __TwigTemplate_ce89e335ee4b11c465e6787f1a3511d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "    <form method=\"post\" id=\"form_rech_list\">
            <input type=\"hidden\" id=\"val_rech\" type=\"text\" name=\"val_rech\" value=\"\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "localite", 1 => "agence", 2 => "usage", 3 => "passage", 4 => "statut", 5 => "controleur", 6 => "referent", 7 => "profil", 8 => "modep", 9 => "typep"]);
        foreach ($context['_seq'] as $context["_key"] => $context["inp"]) {
            // line 4
            echo "            <input type=\"hidden\" id=\"val_";
            echo twig_escape_filter($this->env, $context["inp"], "html", null, true);
            echo "\" name=\"val_";
            echo twig_escape_filter($this->env, $context["inp"], "html", null, true);
            echo "\" value=\"\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "        <input type=\"hidden\" id=\"val_deb\" type=\"text\" name=\"val_deb\" value=\"\">
        <input type=\"hidden\" id=\"val_fin\" type=\"text\" name=\"val_fin\" value=\"\">

    </form>
";
    }

    public function getTemplateName()
    {
        return "include/_search_liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "include/_search_liste.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/include/_search_liste.html.twig");
    }
}
