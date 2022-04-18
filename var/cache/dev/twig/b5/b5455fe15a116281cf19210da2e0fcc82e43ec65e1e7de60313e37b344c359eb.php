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
class __TwigTemplate_0d44c5c536b7698f46cd31a58ba1e49367138f8232c7d5dfc9d27dca8a91377a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t<!-- Styles CSS -->
\t\t";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
\t\t<title>
\t\t\t";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        // line 19
        echo "\t\t</title>
\t</head>
\t<body>
\t    ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "\t\t\t";
            $this->loadTemplate("include/_menu.html.twig", "base.html.twig", 23)->display($context);
            // line 24
            echo "\t\t\t<!-- ======== main-wrapper start =========== -->
\t\t\t<main class=\"main-wrapper\">
\t\t\t";
            // line 26
            $this->loadTemplate("include/_header.html.twig", "base.html.twig", 26)->display($context);
            // line 27
            echo "\t\t\t\t<!-- ========== section start ========== -->
\t\t\t\t<section class=\"section\">
\t\t\t\t\t<div class=\"container-fluid pt-4\">
\t\t";
        }
        // line 31
        echo "
\t\t";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
\t    ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34)) {
            // line 35
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
\t\t\t\t\t\t\t\t\t\t&copy; 2022 -
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
            echo "\" rel=\"nofollow\" target=\"_blank\"> KGM </a>
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
            // line 59
            $this->loadTemplate("include/_footer.html.twig", "base.html.twig", 59)->display($context);
            // line 60
            echo "\t\t";
        }
        // line 61
        echo "
\t\t";
        // line 63
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

\t\t";
        // line 75
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "flashes", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 76
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 77
                echo "\t\t\t";
                if (($context["label"] == "notice")) {
                    echo " 
\t\t\t\t";
                    // line 78
                    $context["label"] = "warning";
                    // line 79
                    echo "\t\t\t";
                }
                // line 80
                echo "\t\t\t\t<div class=\"col-4 p-2 m-2 right alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " alert-dismissible fade show position-absolute top-0 end-0\" role=\"alert\">
\t\t\t\t\t";
                // line 81
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
\t\t\t\t<button type=\"button\" class=\"btn-close my-1 py-2\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t</body>
</html>
";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome! ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  275 => 88,  257 => 32,  238 => 18,  220 => 15,  210 => 88,  206 => 86,  200 => 85,  190 => 81,  185 => 80,  182 => 79,  180 => 78,  175 => 77,  170 => 76,  165 => 75,  152 => 63,  149 => 61,  146 => 60,  144 => 59,  128 => 46,  115 => 35,  113 => 34,  110 => 33,  108 => 32,  105 => 31,  99 => 27,  97 => 26,  93 => 24,  90 => 23,  88 => 22,  83 => 19,  81 => 18,  77 => 16,  75 => 15,  70 => 13,  66 => 12,  62 => 11,  55 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t{# <link rel=\"shortcut icon\" href=\"{{ asset('assets/img/favicon.svg') }}\" type=\"image/x-icon\" /> #}
\t\t<link rel=\"shortcut icon\" href=\"{{ asset('assets/img/bootstrap-icons.svg') }}\" type=\"image/x-icon\" />

\t\t<!-- Bootstrap CSS -->
\t\t<link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/lineicons.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\" />
\t\t<!-- Styles CSS -->
\t\t{% block stylesheets %}{% endblock %}

\t\t<title>
\t\t\t{% block title %}Welcome! {% endblock %}
\t\t</title>
\t</head>
\t<body>
\t    {% if app.user %}
\t\t\t{% include \"include/_menu.html.twig\" %}
\t\t\t<!-- ======== main-wrapper start =========== -->
\t\t\t<main class=\"main-wrapper\">
\t\t\t{% include \"include/_header.html.twig\" %}
\t\t\t\t<!-- ========== section start ========== -->
\t\t\t\t<section class=\"section\">
\t\t\t\t\t<div class=\"container-fluid pt-4\">
\t\t{% endif %}

\t\t{% block body %}{% endblock %}

\t    {% if app.user %}
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<!-- ========== section end ========== -->
\t\t\t\t<!-- ========== footer start =========== -->
\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 order-last order-md-first\">
\t\t\t\t\t\t\t\t<div class=\"copyright text-center text-md-start\">
\t\t\t\t\t\t\t\t\t<p class=\"small\">
\t\t\t\t\t\t\t\t\t\t&copy; 2022 -
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('main') }}\" rel=\"nofollow\" target=\"_blank\"> KGM </a>
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
\t\t\t{% include \"include/_footer.html.twig\" %}
\t\t{% endif %}

\t\t{# Modal Dialog #}
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"modal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t...
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>

\t\t{# read and display all flash messages #}
\t\t{% for label, messages in app.flashes %}
\t\t\t{% for message in messages %}
\t\t\t{% if label==\"notice\" %} 
\t\t\t\t{% set label=\"warning\" %}
\t\t\t{% endif %}
\t\t\t\t<div class=\"col-4 p-2 m-2 right alert alert-{{ label }} alert-dismissible fade show position-absolute top-0 end-0\" role=\"alert\">
\t\t\t\t\t{{ message }}
\t\t\t\t<button type=\"button\" class=\"btn-close my-1 py-2\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t{% endfor %}
\t</body>
</html>
{% block javascripts %}{% endblock %}
", "base.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/base.html.twig");
    }
}
