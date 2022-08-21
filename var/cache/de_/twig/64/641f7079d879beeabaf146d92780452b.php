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
class __TwigTemplate_03172307c201921fa56c8e52e81f370e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_search_listem.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_search_listem.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  62 => 6,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <form method=\"post\" id=\"form_rech_listm\" onsubmit=\" return false;\">
            <input type=\"hidden\" id=\"val_rechm\" type=\"text\" name=\"val_rechm\" value=\"\">
        {% for inp in [\"localite\", \"agence\", \"usage\", \"passage\", \"statut\", \"controleur\", \"referent\", \"profil\", \"modep\" ] %}
            <input type=\"hidden\" id=\"val_{{inp}}m\" name=\"val_{{inp}}m\" value=\"\">
        {% endfor %}
        <input type=\"hidden\" id=\"val_debm\" type=\"text\" name=\"val_debm\" value=\"\">
        <input type=\"hidden\" id=\"val_finm\" type=\"text\" name=\"val_finm\" value=\"\">

    </form>
", "include/_search_listem.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/include/_search_listem.html.twig");
    }
}
