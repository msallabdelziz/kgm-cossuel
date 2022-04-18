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

/* registration/register.html.twig */
class __TwigTemplate_563c3e3b13eb63611d1c186d3cbc55bbc88b822e8e7e7c284892295d0e72e6a5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "COSSUEL:: Inscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <main class=\"login-page h-100 bg-yellow\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-12 mb-4\">
                    <div class=\"text-center logo-intro\">
                        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-cossuel-black.png"), "html", null, true);
        echo "\" alt=\"LOGO COSSUEL\">
                    </div>
                </div>
                <div class=\"col-md-6 offset-md-3\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 16
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    <div class=\"form-signup card\">
                        <h3 class=\"text-center mb-4 fw-bold\">INSCRIVEZ-VOUS</h3>
                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
                    <div class=\"col-md-6\">
                        <label for=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "html", null, true);
        echo "\" class=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "label", [], "any", false, false, false, 22), "html", null, true);
        echo "</label>
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "\" class=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "label", [], "any", false, false, false, 26), "html", null, true);
        echo "</label>
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-6 m-0 text-danger\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-6 m-0 text-danger\">
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'errors');
        echo "
                    </div>
                        ";
        // line 36
        echo "                    <div class=\"col-md-6\">
                        <label for=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
        echo "\" class=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "label", [], "any", false, false, false, 37), "html", null, true);
        echo "</label>
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "telephone", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
        echo "\" class=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "telephone", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "label", [], "any", false, false, false, 41), "html", null, true);
        echo "</label>
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "telephone", [], "any", false, false, false, 42), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-6 m-0 text-danger\">
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-6 m-0 text-danger\">
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "telephone", [], "any", false, false, false, 48), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
        echo "\" class=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "label", [], "any", false, false, false, 51), "html", null, true);
        echo "</label>
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "type", [], "any", false, false, false, 52), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "type_login", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "\" class=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "type_login", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "label", [], "any", false, false, false, 55), "html", null, true);
        echo "</label>
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "type_login", [], "any", false, false, false, 56), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "plainPassword", [], "any", false, false, false, 59), "first", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
        echo "\" class=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "plainPassword", [], "any", false, false, false, 59), "first", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "label", [], "any", false, false, false, 59), "html", null, true);
        echo "</label>
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "plainPassword", [], "any", false, false, false, 60), "first", [], "any", false, false, false, 60), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "plainPassword", [], "any", false, false, false, 63), "second", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
        echo "\" class=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "plainPassword", [], "any", false, false, false, 63), "second", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "label", [], "any", false, false, false, 63), "html", null, true);
        echo "</label>
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "plainPassword", [], "any", false, false, false, 64), "second", [], "any", false, false, false, 64), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-6 m-0 text-danger\">
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "plainPassword", [], "any", false, false, false, 67), "first", [], "any", false, false, false, 67), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-6 m-0 text-danger\">
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "plainPassword", [], "any", false, false, false, 70), "second", [], "any", false, false, false, 70), 'errors');
        echo "
                    </div>
                    ";
        // line 75
        echo "                    <div class=\"col-12 my-2\">
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "agreeTerms", [], "any", false, false, false, 76), 'widget');
        echo "
                        <label for=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "agreeTerms", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77), "html", null, true);
        echo "\" class=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "agreeTerms", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "label", [], "any", false, false, false, 77), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"col-12 mb-0 text-center\">
                        <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-secondary btn-lg my-2 me-3\">Annuler</a>
                        <button type=\"submit\" class=\"btn btn-primary btn-lg my-2\">S'inscrire</button>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"text-end\">
                            <p class=\"mb-0\">Vous avez déjà un compte? <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Se connecter</a>
                            </p>
                        </div>
                    </div>
                    ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 89, $this->source); })()), 'form_end');
        echo "            
            </div>
        </div>
    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 89,  280 => 85,  272 => 80,  264 => 77,  260 => 76,  257 => 75,  252 => 70,  246 => 67,  240 => 64,  234 => 63,  228 => 60,  222 => 59,  216 => 56,  210 => 55,  204 => 52,  198 => 51,  192 => 48,  186 => 45,  180 => 42,  174 => 41,  168 => 38,  162 => 37,  159 => 36,  154 => 33,  148 => 30,  142 => 27,  136 => 26,  130 => 23,  124 => 22,  119 => 20,  115 => 18,  106 => 16,  102 => 15,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}COSSUEL:: Inscription{% endblock %}

{% block body %}
    <main class=\"login-page h-100 bg-yellow\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-12 mb-4\">
                    <div class=\"text-center logo-intro\">
                        <img src=\"{{ asset('assets/img/logo-cossuel-black.png') }}\" alt=\"LOGO COSSUEL\">
                    </div>
                </div>
                <div class=\"col-md-6 offset-md-3\">
                    {% for flash_error in app.flashes('verify_email_error') %}
                        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
                    {% endfor %}
                    <div class=\"form-signup card\">
                        <h3 class=\"text-center mb-4 fw-bold\">INSCRIVEZ-VOUS</h3>
                {{ form_start(registrationForm) }}
                    <div class=\"col-md-6\">
                        <label for=\"{{ registrationForm.nom.vars.id }}\" class=\"\">{{ registrationForm.nom.vars.label }}</label>
                        {{ form_widget(registrationForm.nom) }}
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"{{ registrationForm.prenom.vars.id }}\" class=\"\">{{ registrationForm.prenom.vars.label }}</label>
                        {{ form_widget(registrationForm.prenom) }}
                    </div>
                    <div class=\"col-md-6 m-0 text-danger\">
                        {{ form_errors(registrationForm.nom) }}
                    </div>
                    <div class=\"col-md-6 m-0 text-danger\">
                        {{ form_errors(registrationForm.prenom) }}
                    </div>
                        {# {{ form_row(registrationForm.login) }} #}
                    <div class=\"col-md-6\">
                        <label for=\"{{ registrationForm.email.vars.id }}\" class=\"\">{{ registrationForm.email.vars.label }}</label>
                        {{ form_widget(registrationForm.email) }}
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"{{ registrationForm.telephone.vars.id }}\" class=\"\">{{ registrationForm.telephone.vars.label }}</label>
                        {{ form_widget(registrationForm.telephone) }}
                    </div>
                    <div class=\"col-md-6 m-0 text-danger\">
                        {{ form_errors(registrationForm.email) }}
                    </div>
                    <div class=\"col-md-6 m-0 text-danger\">
                        {{ form_errors(registrationForm.telephone) }}
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"{{ registrationForm.type.vars.id }}\" class=\"\">{{ registrationForm.type.vars.label }}</label>
                        {{ form_widget(registrationForm.type) }}
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"{{ registrationForm.type_login.vars.id }}\" class=\"\">{{ registrationForm.type_login.vars.label }}</label>
                        {{ form_widget(registrationForm.type_login) }}
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"{{ registrationForm.plainPassword.first.vars.id }}\" class=\"\">{{ registrationForm.plainPassword.first.vars.label }}</label>
                        {{ form_widget(registrationForm.plainPassword.first) }}
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"{{ registrationForm.plainPassword.second.vars.id }}\" class=\"\">{{ registrationForm.plainPassword.second.vars.label }}</label>
                        {{ form_widget(registrationForm.plainPassword.second) }}
                    </div>
                    <div class=\"col-md-6 m-0 text-danger\">
                        {{ form_errors(registrationForm.plainPassword.first) }}
                    </div>
                    <div class=\"col-md-6 m-0 text-danger\">
                        {{ form_errors(registrationForm.plainPassword.second) }}
                    </div>
                    {# <div class=\"col-md-12\">
                        {{ form_row(registrationForm.adresse) }}
                    </div> #}
                    <div class=\"col-12 my-2\">
                        {{ form_widget(registrationForm.agreeTerms) }}
                        <label for=\"{{ registrationForm.agreeTerms.vars.id }}\" class=\"\">{{ registrationForm.agreeTerms.vars.label }}</label>
                    </div>
                    <div class=\"col-12 mb-0 text-center\">
                        <a href=\"{{ path('app_login') }}\" class=\"btn btn-secondary btn-lg my-2 me-3\">Annuler</a>
                        <button type=\"submit\" class=\"btn btn-primary btn-lg my-2\">S'inscrire</button>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"text-end\">
                            <p class=\"mb-0\">Vous avez déjà un compte? <a href=\"{{ path('app_login') }}\">Se connecter</a>
                            </p>
                        </div>
                    </div>
                    {{ form_end(registrationForm) }}            
            </div>
        </div>
    </main>

{% endblock %}
", "registration/register.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/registration/register.html.twig");
    }
}
