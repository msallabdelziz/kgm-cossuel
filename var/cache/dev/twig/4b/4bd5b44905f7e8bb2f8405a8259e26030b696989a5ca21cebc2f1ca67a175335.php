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
class __TwigTemplate_e72533f4c1e54fddd7f4cd768e24e0bb4e3165d955f1e341f46bbf512b22a5b2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_footer.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
</div>", "include/_footer.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/include/_footer.html.twig");
    }
}
