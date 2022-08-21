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
class __TwigTemplate_30c0fe415c5a8042e7211cf52efb7309 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <main class=\"login-page bg-yellow\" style=\"min-height:100%\">
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "                    <div class=\"mb-3\">
                        Vous êtes connecté en tant que ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "login", [], "any", false, false, false, 16), "html", null, true);
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
                        <h3 class=\"text-center mb-4 fw-bold\">CONNEXION</h3>
                        <form class=\"row g-4 needs-validation\" method=\"post\">
                            <div class=\"col-md-12\">
                                <label for=\"validationDefault01\" class=\"form-label\">Identifiant <span class=\"text-danger\">*</span></label>
                                <input type=\"text\" class=\"form-control\" id=\"inputUsername\" name=\"login\" autocomplete=\"login\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
                            ";
        // line 58
        echo "                        </form>
                    </div>
                </div>
            </div>
            ";
        // line 62
        if (($context["error"] ?? null)) {
            // line 63
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 63), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 65
        echo "
        </div>
    </main>



";
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
        return array (  134 => 65,  128 => 63,  126 => 62,  120 => 58,  114 => 48,  109 => 36,  102 => 32,  93 => 26,  84 => 19,  76 => 16,  73 => 15,  71 => 14,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/security/login.html.twig");
    }
}
