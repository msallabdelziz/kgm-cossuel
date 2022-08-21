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

/* base_modal.html.twig */
class __TwigTemplate_7ec41e1d7184685f8b0b1401e7e420aa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<body>
\t    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "\t\t\t\t<!-- ========== section start ========== -->
\t\t\t\t<section class=\"section\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t";
        }
        // line 9
        echo "
\t\t";
        // line 10
        if (array_key_exists("val_rech", $context)) {
            // line 11
            echo "\t\t\t";
            $this->loadTemplate("include/_search_listem.html.twig", "base_modal.html.twig", 11)->display($context);
            // line 12
            echo "\t\t";
        }
        // line 13
        echo "
\t\t";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "
\t    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<!-- ========== section end ========== -->
\t\t\t</main>
\t\t\t<!-- ======== main-wrapper end =========== -->
\t\t";
        }
        // line 23
        echo "
\t\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ajaxload.js"), "html", null, true);
        echo "\"></script>
\t</body>
</html>
";
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  87 => 25,  83 => 24,  80 => 23,  72 => 17,  70 => 16,  67 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  54 => 10,  51 => 9,  45 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base_modal.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/base_modal.html.twig");
    }
}
