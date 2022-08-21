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

/* installation/index.html.twig */
class __TwigTemplate_d2cd77b54693d72a0fa9e90000164e8f extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "installation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "COSSUEL - Demandes";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <form method=\"post\" id=\"form_affichage_demande\" action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["page_list"] ?? null));
        echo "\">
            <input type=\"hidden\" id=\"affichage_demande\" type=\"text\" name=\"affichage_demande\" value=\"\">
    </form>

    ";
        // line 9
        if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 9), "get", [0 => "affichage_demande"], "method", true, true, false, 9) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 9), "get", [0 => "affichage_demande"], "method", false, false, false, 9)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 9), "get", [0 => "affichage_demande"], "method", false, false, false, 9) == "listing"))) {
            // line 10
            echo "        ";
            $this->loadTemplate("installation/_index_list.html.twig", "installation/index.html.twig", 10)->display($context);
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "        ";
            $this->loadTemplate("installation/_index_card.html.twig", "installation/index.html.twig", 12)->display($context);
            // line 13
            echo "    ";
        }
        // line 14
        echo "
";
    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "<script>
    \$(document).ready(function() {

        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "agence", 1 => "usage", 2 => "statut", 3 => "passage"]);
        foreach ($context['_seq'] as $context["_key"] => $context["filtre"]) {
            // line 22
            echo "            \$('#val_";
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "').val(\$('#val_";
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').val())
            \$('#val_";
            // line 23
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').on('change', function() {
                optSel=\$('#val_";
            // line 24
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "0').find(\"option:selected\");
                valSel=optSel.val();
                \$('#val_";
            // line 26
            echo twig_escape_filter($this->env, $context["filtre"], "html", null, true);
            echo "').val(valSel);
                \$('#form_rech_list').submit();
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filtre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
        \$('#val_affichage_demande').on('change', function() {
            optSel=\$('#val_affichage_demande').find(\"option:selected\");
            valSel=optSel.val();
            \$(\"#affichage_demande\").val(valSel);
            \$(\"#form_affichage_demande\").submit();
        });
    });

</script>
";
    }

    public function getTemplateName()
    {
        return "installation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 30,  117 => 26,  112 => 24,  108 => 23,  101 => 22,  97 => 21,  92 => 18,  88 => 17,  83 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  69 => 9,  62 => 5,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/index.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/index.html.twig");
    }
}
