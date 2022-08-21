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

/* registration/register_ok.html.twig */
class __TwigTemplate_8f3544e50d9e7eaa12dfa3f0e6ea4d64 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register_ok.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "COSSUEL:: Inscription";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <main class=\"login-page bg-yellow\">
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
                    <div class=\"form-signup card text-center\">
                        <h4 class=\"fw-bold text-success text-uppercase mb-5\">Votre inscription a été effectuée avec
                            succès !</h4>
                        <h3 class=\"fw-bold mb-1\">Encore une étape :</h3>
                        <p class=\"small text-black-50 fw-light mb-5\">Veuillez valider votre compte. Un mail vous vous a été envoyé
                            avec le lien d'activation</p>
                        <div class=\"d-flex align-items-center justify-content-center\">
                            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-primary mx-2\">Se connecter</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

";
    }

    public function getTemplateName()
    {
        return "registration/register_ok.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/register_ok.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/registration/register_ok.html.twig");
    }
}
