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

/* security/login.html.twig */
class __TwigTemplate_2f3e6560e2d33517b54502fdbc2a9041c725ff315dcaac0a291fe492af5cf882 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Connexion";
        
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
        echo "
    <main class=\"login-page h-100 bg-yellow\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-12 mb-4\">
                    <div class=\"text-center logo-intro\">
                        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-cossuel-black.png"), "html", null, true);
        echo "\" alt=\"LOGO COSSUEL\">
                    </div>
                ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "                    <div class=\"mb-3\">
                        Vous êtes connecté en tant que ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "login", [], "any", false, false, false, 16), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a>
                    </div>
                ";
        }
        // line 19
        echo "                </div>
                <div class=\"col-md-6 offset-md-3\">
                    <div class=\"form-signin card\">
                        <h3 class=\"text-center mb-4 fw-bold\">ESPACE CLIENT</h3>
                        <form class=\"row g-4 needs-validation\" method=\"post\">
                            <div class=\"col-md-12\">
                                <label for=\"validationDefault01\" class=\"form-label\">Identifiant <span class=\"text-danger\">*</span></label>
                                <input type=\"text\" class=\"form-control\" id=\"inputUsername\" name=\"login\" autocomplete=\"login\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\" required autofocus>
                            </div>
                            <div class=\"col-md-12\">
                                <label for=\"validationDefault02\" class=\"form-label\">Mot de passe <span class=\"text-danger\">*</span></label>
                                <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"password\" autocomplete=\"current-password\" required>
                                <input type=\"hidden\" name=\"_csrf_token\"
                                    value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                >
                            </div>
                            <div class=\"col-12 my-2\">
                                <div class=\"text-end\"><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Mot de passe oublié ?</a></div>
                            </div>
                            ";
        // line 48
        echo "
                            <div class=\"col-12 mb-2 d-grid\">
                                <button class=\"btn btn-lg btn-secondary\" type=\"submit\">Se connecter</button>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"text-center\">
                                    <p class=\"mb-0\">Vous n’avez pas de compte? <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">S’inscrire</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            ";
        // line 62
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 62, $this->source); })())) {
            // line 63
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 63, $this->source); })()), "messageKey", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 63, $this->source); })()), "messageData", [], "any", false, false, false, 63), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 65
        echo "
        </div>
    </main>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 65,  165 => 63,  163 => 62,  152 => 54,  144 => 48,  139 => 36,  132 => 32,  123 => 26,  114 => 19,  106 => 16,  103 => 15,  101 => 14,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}

    <main class=\"login-page h-100 bg-yellow\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-12 mb-4\">
                    <div class=\"text-center logo-intro\">
                        <img src=\"{{ asset('assets/img/logo-cossuel-black.png') }}\" alt=\"LOGO COSSUEL\">
                    </div>
                {% if app.user %}
                    <div class=\"mb-3\">
                        Vous êtes connecté en tant que {{ app.user.login }}, <a href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                    </div>
                {% endif %}
                </div>
                <div class=\"col-md-6 offset-md-3\">
                    <div class=\"form-signin card\">
                        <h3 class=\"text-center mb-4 fw-bold\">ESPACE CLIENT</h3>
                        <form class=\"row g-4 needs-validation\" method=\"post\">
                            <div class=\"col-md-12\">
                                <label for=\"validationDefault01\" class=\"form-label\">Identifiant <span class=\"text-danger\">*</span></label>
                                <input type=\"text\" class=\"form-control\" id=\"inputUsername\" name=\"login\" autocomplete=\"login\" value=\"{{ last_username }}\" required autofocus>
                            </div>
                            <div class=\"col-md-12\">
                                <label for=\"validationDefault02\" class=\"form-label\">Mot de passe <span class=\"text-danger\">*</span></label>
                                <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"password\" autocomplete=\"current-password\" required>
                                <input type=\"hidden\" name=\"_csrf_token\"
                                    value=\"{{ csrf_token('authenticate') }}\"
                                >
                            </div>
                            <div class=\"col-12 my-2\">
                                <div class=\"text-end\"><a href=\"{{ path('app_forgot_password_request') }}\">Mot de passe oublié ?</a></div>
                            </div>
                            {#
                                Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                                See https://symfony.com/doc/current/security/remember_me.html

                                <div class=\"checkbox mb-3\">
                                    <label>
                                        <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                                    </label>
                                </div>
                            #}

                            <div class=\"col-12 mb-2 d-grid\">
                                <button class=\"btn btn-lg btn-secondary\" type=\"submit\">Se connecter</button>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"text-center\">
                                    <p class=\"mb-0\">Vous n’avez pas de compte? <a href=\"{{ path('app_register') }}\">S’inscrire</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {% if error %}
                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}

        </div>
    </main>



{% endblock %}
", "security/login.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/security/login.html.twig");
    }
}
