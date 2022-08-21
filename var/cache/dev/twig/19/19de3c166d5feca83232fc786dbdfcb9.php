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
class __TwigTemplate_d491101a8f415a8bb9a978f06fa5dfdf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44) || twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "get", [0 => "_route"], "method", false, false, false, 44), (isset($context["les_route0"]) || array_key_exists("les_route0", $context) ? $context["les_route0"] : (function () { throw new RuntimeError('Variable "les_route0" does not exist.', 44, $this->source); })())))) {
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) {
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "flashes", [], "any", false, false, false, 83));
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome! ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  312 => 122,  294 => 49,  275 => 19,  257 => 16,  247 => 122,  221 => 98,  217 => 95,  211 => 94,  200 => 89,  195 => 88,  192 => 87,  190 => 86,  185 => 85,  180 => 84,  175 => 83,  170 => 79,  167 => 78,  165 => 77,  139 => 53,  137 => 52,  134 => 51,  131 => 50,  129 => 49,  126 => 48,  123 => 47,  120 => 46,  117 => 45,  114 => 44,  112 => 33,  109 => 32,  103 => 28,  101 => 27,  97 => 25,  94 => 24,  92 => 23,  87 => 20,  85 => 19,  81 => 17,  79 => 16,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  55 => 8,  47 => 1,);
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
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/c3.min.css') }}\" />
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

\t\t{% set les_route0 = [
\t\t\t\"app_login\",
\t\t\t\"app_resetpass\",
\t\t\t\"app_forgot_password_request\",
\t\t\t\"app_register\",
\t\t\t\"app_reset_password\",
\t\t\t\"app_verify_email\",
\t\t\t\"app_register_ok\",
\t\t\t\"app_register_confirm\",
\t\t\t\"app_register_confirm2\",
\t\t] %}
\t\t{% if app.user or (app.request.get('_route') in les_route0) %}
\t\t\t{% if val_rech is defined %}
\t\t\t\t{% include \"include/_search_liste.html.twig\" %}
\t\t\t{% endif %}
\t\t\t
\t\t\t{% block body %}{% endblock %}
\t\t{% endif %}

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
\t\t\t{% include \"include/_footer.html.twig\" %}
\t\t{% endif %}

\t\t<div class=\"row\">
\t\t\t<div class=\"offset-6 col-lg-6 position-fixed bottom-0 end-0 m-2 me-4\">
\t\t\t{# read and display all flash messages #}
\t\t\t{% for label, messages in app.flashes %}
\t\t\t\t{% for message in messages %}
\t\t\t\t{% if label==\"notice\" %} 
\t\t\t\t\t{% set label=\"warning\" %}
\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"col-lg-12 right alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\" style=\"padding :10px; padding-right:50px;\">
\t\t\t\t\t\t{{ message }}
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close my-1 py-2\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t{% endfor %}
\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
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
{% block javascripts %}{% endblock %}
", "base.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/base.html.twig");
    }
}
