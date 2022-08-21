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

/* base.html.twig */
class __TwigTemplate_a30dbcc390bafc52c4df86a3d1883567 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t";
        // line 8
        echo "\t\t<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg"), "html", null, true);
        echo "\" type=\"image/x-icon\" />

\t\t<!-- Bootstrap CSS -->
\t\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lineicons.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/c3.min.css"), "html", null, true);
        echo "\" />
\t\t<!-- Styles CSS -->
\t\t";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
\t\t<title>
\t\t\t";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        // line 20
        echo "\t\t</title>
\t</head>
\t<body>
\t    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "\t\t\t";
            $this->loadTemplate("include/_menu.html.twig", "base.html.twig", 24)->display($context);
            // line 25
            echo "\t\t\t<!-- ======== main-wrapper start =========== -->
\t\t\t<main class=\"main-wrapper\">
\t\t\t";
            // line 27
            $this->loadTemplate("include/_header.html.twig", "base.html.twig", 27)->display($context);
            // line 28
            echo "\t\t\t\t<!-- ========== section start ========== -->
\t\t\t\t<section class=\"section\">
\t\t\t\t\t<div class=\"container-fluid pt-4\">
\t\t";
        }
        // line 32
        echo "
\t\t";
        // line 33
        $context["les_route0"] = [0 => "app_login", 1 => "app_resetpass", 2 => "app_forgot_password_request", 3 => "app_register", 4 => "app_reset_password", 5 => "app_verify_email", 6 => "app_register_ok", 7 => "app_register_confirm", 8 => "app_register_confirm2"];
        // line 44
        echo "\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 44) || twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 44), "get", [0 => "_route"], "method", false, false, false, 44), ($context["les_route0"] ?? null)))) {
            // line 45
            echo "\t\t\t";
            if (array_key_exists("val_rech", $context)) {
                // line 46
                echo "\t\t\t\t";
                $this->loadTemplate("include/_search_liste.html.twig", "base.html.twig", 46)->display($context);
                // line 47
                echo "\t\t\t";
            }
            // line 48
            echo "\t\t\t
\t\t\t";
            // line 49
            $this->displayBlock('body', $context, $blocks);
            // line 50
            echo "\t\t";
        }
        // line 51
        echo "
\t    ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 52)) {
            // line 53
            echo "\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<!-- ========== section end ========== -->
\t\t\t\t<!-- ========== footer start =========== -->
\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 order-last order-md-first\">
\t\t\t\t\t\t\t\t<div class=\"copyright text-center text-md-start\">
\t\t\t\t\t\t\t\t\t<p class=\"small\">
\t\t\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t\t\t\t<a href=\"https://kangameconsulting.com\" rel=\"nofollow\" target=\"_blank\"> KGM Consulting </a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end col-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end container -->
\t\t\t\t</footer>
\t\t\t\t<!-- ========== footer end =========== -->
\t\t\t</main>
\t\t\t<!-- ======== main-wrapper end =========== -->
\t\t\t";
            // line 77
            $this->loadTemplate("include/_footer.html.twig", "base.html.twig", 77)->display($context);
            // line 78
            echo "\t\t";
        }
        // line 79
        echo "
\t\t<div class=\"row\">
\t\t\t<div class=\"offset-6 col-lg-6 position-fixed bottom-0 end-0 m-2 me-4\">
\t\t\t";
        // line 83
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 83));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 84
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 85
                echo "\t\t\t\t";
                if (($context["label"] == "notice")) {
                    echo " 
\t\t\t\t\t";
                    // line 86
                    $context["label"] = "warning";
                    // line 87
                    echo "\t\t\t\t";
                }
                // line 88
                echo "\t\t\t\t\t<div class=\"col-lg-12 right alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " alert-dismissible fade show\" role=\"alert\" style=\"padding :10px; padding-right:50px;\">
\t\t\t\t\t\t";
                // line 89
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close my-1 py-2\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t</div>
\t\t</div>
\t\t";
        // line 98
        echo "\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"modal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t...
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>

\t\t<!-- Modal -->
\t\t<div class=\"modal fade modalXX\" id=\"modal2\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t...
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>

\t</body>
</html>
";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome! ";
    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 122
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 122,  258 => 49,  251 => 19,  245 => 16,  241 => 122,  215 => 98,  211 => 95,  205 => 94,  194 => 89,  189 => 88,  186 => 87,  184 => 86,  179 => 85,  174 => 84,  169 => 83,  164 => 79,  161 => 78,  159 => 77,  133 => 53,  131 => 52,  128 => 51,  125 => 50,  123 => 49,  120 => 48,  117 => 47,  114 => 46,  111 => 45,  108 => 44,  106 => 33,  103 => 32,  97 => 28,  95 => 27,  91 => 25,  88 => 24,  86 => 23,  81 => 20,  79 => 19,  75 => 17,  73 => 16,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  49 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/base.html.twig");
    }
}
