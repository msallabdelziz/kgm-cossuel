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

/* registration/register_confirm.html.twig */
class __TwigTemplate_104cd2c42589c7c3589e9e463e8f5202 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register_confirm.html.twig", 1);
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
        echo "    <main class=\"login-page\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6 offset-md-3\">
                    <div class=\"form-signup card text-center\">
                        <h4 class=\"text-danger fw-bold mb-5 text-uppercase\">
                        Le lien d'activation du compte a expiré ! 
                        </h4>
                        <div class=\"d-flex align-items-center justify-content-center\">
                            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_confirm2");
        echo "\" class=\"btn btn-primary mx-2\">Envoyer un nouveau lien d'activation</a>
                        </div>
                        <div class=\"fs-7 text-black-50 mt-3\">
                        Cliquez sur le bouton pour recevoir un nouveau lien d'activation par mail.
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
        return "registration/register_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/register_confirm.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/registration/register_confirm.html.twig");
    }
}
