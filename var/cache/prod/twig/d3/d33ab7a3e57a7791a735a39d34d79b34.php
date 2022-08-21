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

/* include/_header.html.twig */
class __TwigTemplate_48bfd8dc6c087de4c851bdfed7363607 extends Template
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
        // line 1
        echo "<!-- ========== header start ========== -->
<header class=\"header\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t<div class=\"header-left d-flex align-items-center\">
\t\t\t\t\t<div class=\"menu-toggle-btn mr-20\">
\t\t\t\t\t\t<button id=\"menu-toggle\" class=\"main-btn primary-btn btn-hover\">
\t\t\t\t\t\t\t<i class=\"lni lni-menu me-2\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-3 col-3 rounded m-0 p-0 float-end\" style=\"\" align=\"center\">
\t\t\t\t";
        // line 15
        if (((((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) && ((((((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null) == "ROLE_CAISSIER") || ((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null) == "ROLE_COMPTABLE")) || ((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null) == "ROLE_CONTROLEUR")) || ((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null) == "ROLE_USER")) || ((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null) == "ROLE_REFERENT"))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 15), "get", [0 => "agence"], "method", false, false, false, 15)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 15), "get", [0 => "menu"], "method", false, false, false, 15) != "statistiques"))) {
            // line 16
            echo "\t\t\t\t\t<label class=\"badge bg-warning border shadow text-dark fs-5\">AGENCE</label><label class=\"badge bg-dark border shadow text-warning fs-5\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 16), "get", [0 => "agence"], "method", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
            echo "</label>
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t</div>
\t\t\t<div class=\"col-lg-5 col-md-5 col-5\">
\t\t\t\t<div class=\"header-right\">
";
        // line 119
        echo "\t\t\t\t\t<!-- profile start -->
\t\t\t\t\t<div class=\"profile-box ml-15\">
\t\t\t\t\t\t<button class=\"dropdown-toggle bg-transparent border-0\" type=\"button\" id=\"profile\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<div class=\"profile-info\">
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-8 text-warning bg-black border px-2 py-0\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 124), "prenom", [], "any", false, false, false, 124), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 124), "nom", [], "any", false, false, false, 124), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"image ms-2 border-0\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"#333\" class=\"bi bi-plus-lg\" viewBox=\"0 0 32 32\">
\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person-badge"), "html", null, true);
        echo "\"></use>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"profile\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_moncompte");
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"lni lni-user\"></i>
\t\t\t\t\t\t\t\t\tMon Profil
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t";
        // line 159
        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"lni lni-exit\"></i>
\t\t\t\t\t\t\t\t\tDéconnexion
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- profile end -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
<!-- ========== header end ========== -->
";
    }

    public function getTemplateName()
    {
        return "include/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 160,  101 => 159,  92 => 135,  81 => 127,  73 => 124,  66 => 119,  61 => 18,  55 => 16,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "include/_header.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/include/_header.html.twig");
    }
}
