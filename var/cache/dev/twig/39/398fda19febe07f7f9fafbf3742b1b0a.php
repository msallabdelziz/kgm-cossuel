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
class __TwigTemplate_8a32106e3529e85d237169fb9e7f51da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_modal.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<body>
\t    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
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
        return array (  107 => 14,  93 => 25,  89 => 24,  86 => 23,  78 => 17,  76 => 16,  73 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  60 => 10,  57 => 9,  51 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<body>
\t    {% if app.user %}
\t\t\t\t<!-- ========== section start ========== -->
\t\t\t\t<section class=\"section\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t{% endif %}

\t\t{% if val_rech is defined %}
\t\t\t{% include \"include/_search_listem.html.twig\" %}
\t\t{% endif %}

\t\t{% block body %}{% endblock %}

\t    {% if app.user %}
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<!-- ========== section end ========== -->
\t\t\t</main>
\t\t\t<!-- ======== main-wrapper end =========== -->
\t\t{% endif %}

\t\t<script src=\"{{ asset('assets/js/bootstrap.bundle.min.js') }}\"></script>
\t\t<script src=\"{{ asset('assets/js/ajaxload.js') }}\"></script>
\t</body>
</html>
", "base_modal.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/base_modal.html.twig");
    }
}
