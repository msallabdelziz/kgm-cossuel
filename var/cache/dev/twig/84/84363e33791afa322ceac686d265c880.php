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

/* include/_footer.html.twig */
class __TwigTemplate_871e9e2a53ec4560a67a21bc9ba7b3cb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_footer.html.twig"));

        // line 1
        echo "<div class=\"container-fluid mt-auto py-3\">
  <footer class=\"d-flex flex-wrap justify-content-between align-items-center my-4 border-top\">
    <div class=\"col-md-4 d-flex align-items-center\">
      <a href=\"/\" class=\"mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1\">
        <svg class=\"bi\" width=\"30\" height=\"24\"><use xlink:href=\"#bootstrap\"></use></svg>
      </a>
      
      <div class=\"\"><span class=\"text-muted\">©</span>&nbsp;<span class=\"\">KGM Consulting</span> <span class=\"text-muted\">  - Avril 2022</span></div>
    </div>

    <ul class=\"nav col-md-4 justify-content-end list-unstyled d-flex\">
      <li class=\"ms-3\"><a class=\"text-muted\" href=\"#\"><i class=\"icon\">AA</i></a></li>
      <li class=\"ms-3\"><a class=\"text-muted\" href=\"#\"><i class=\"icon\">BB</i></a></li>
      <li class=\"ms-3\"><a class=\"text-muted\" href=\"#\"><i class=\"icon\">CC</i></a></li>
    </ul>
  </footer>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "include/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid mt-auto py-3\">
  <footer class=\"d-flex flex-wrap justify-content-between align-items-center my-4 border-top\">
    <div class=\"col-md-4 d-flex align-items-center\">
      <a href=\"/\" class=\"mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1\">
        <svg class=\"bi\" width=\"30\" height=\"24\"><use xlink:href=\"#bootstrap\"></use></svg>
      </a>
      
      <div class=\"\"><span class=\"text-muted\">©</span>&nbsp;<span class=\"\">KGM Consulting</span> <span class=\"text-muted\">  - Avril 2022</span></div>
    </div>

    <ul class=\"nav col-md-4 justify-content-end list-unstyled d-flex\">
      <li class=\"ms-3\"><a class=\"text-muted\" href=\"#\"><i class=\"icon\">AA</i></a></li>
      <li class=\"ms-3\"><a class=\"text-muted\" href=\"#\"><i class=\"icon\">BB</i></a></li>
      <li class=\"ms-3\"><a class=\"text-muted\" href=\"#\"><i class=\"icon\">CC</i></a></li>
    </ul>
  </footer>
</div>", "include/_footer.html.twig", "E:\\symfony\\kgm-cossuel-master\\templates\\include\\_footer.html.twig");
    }
}
