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

/* include/_search_listem.html.twig */
class __TwigTemplate_f2a4cf37851f8430cd0540bc92436e52 extends Template
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
        echo "    <form method=\"post\" id=\"form_rech_listm\" onsubmit=\" return false;\">
            <input type=\"hidden\" id=\"val_rechm\" type=\"text\" name=\"val_rechm\" value=\"\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "localite", 1 => "agence", 2 => "usage", 3 => "passage", 4 => "statut", 5 => "controleur", 6 => "referent", 7 => "profil", 8 => "modep"]);
        foreach ($context['_seq'] as $context["_key"] => $context["inp"]) {
            // line 4
            echo "            <input type=\"hidden\" id=\"val_";
            echo twig_escape_filter($this->env, $context["inp"], "html", null, true);
            echo "m\" name=\"val_";
            echo twig_escape_filter($this->env, $context["inp"], "html", null, true);
            echo "m\" value=\"\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "        <input type=\"hidden\" id=\"val_debm\" type=\"text\" name=\"val_debm\" value=\"\">
        <input type=\"hidden\" id=\"val_finm\" type=\"text\" name=\"val_finm\" value=\"\">

    </form>
";
    }

    public function getTemplateName()
    {
        return "include/_search_listem.html.twig";
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
        return new Source("", "include/_search_listem.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/include/_search_listem.html.twig");
    }
}
