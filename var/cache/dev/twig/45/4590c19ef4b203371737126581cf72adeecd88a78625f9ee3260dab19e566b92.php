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
class __TwigTemplate_47852060c8081f0645f1373302abc1616605f7f820676521f2aab298329508ad extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_header.html.twig"));

        // line 1
        echo "<!-- ========== header start ========== -->
<header class=\"header\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-5 col-md-5 col-6\">
\t\t\t\t<div class=\"header-left d-flex align-items-center\">
\t\t\t\t\t<div class=\"menu-toggle-btn mr-20\">
\t\t\t\t\t\t<button id=\"menu-toggle\" class=\"main-btn primary-btn btn-hover\">
\t\t\t\t\t\t\t<i class=\"lni lni-menu me-2\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-7 col-md-7 col-6\">
\t\t\t\t<div class=\"header-right\">
";
        // line 114
        echo "\t\t\t\t\t<!-- profile start -->
\t\t\t\t\t<div class=\"profile-box ml-15\">
\t\t\t\t\t\t<button class=\"dropdown-toggle bg-transparent border-0\" type=\"button\" id=\"profile\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<div class=\"profile-info\">
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-8 text-warning bg-black border px-2 py-0\">";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "prenom", [], "any", false, false, false, 119), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "nom", [], "any", false, false, false, 119), "html", null, true);
        echo " ( ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "login", [], "any", false, false, false, 119), "html", null, true);
        echo ")</div>
\t\t\t\t\t\t\t\t\t<div class=\"image ms-2 border-0\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/none.png"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"profile\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#0\">
\t\t\t\t\t\t\t\t\t<i class=\"lni lni-user\"></i>
\t\t\t\t\t\t\t\t\tMon Profil
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t";
        // line 152
        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 153
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  95 => 153,  92 => 152,  76 => 121,  67 => 119,  60 => 114,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ========== header start ========== -->
<header class=\"header\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-5 col-md-5 col-6\">
\t\t\t\t<div class=\"header-left d-flex align-items-center\">
\t\t\t\t\t<div class=\"menu-toggle-btn mr-20\">
\t\t\t\t\t\t<button id=\"menu-toggle\" class=\"main-btn primary-btn btn-hover\">
\t\t\t\t\t\t\t<i class=\"lni lni-menu me-2\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-7 col-md-7 col-6\">
\t\t\t\t<div class=\"header-right\">
{#                     
\t\t\t\t\t<!-- notification start -->
\t\t\t\t\t<div class=\"notification-box ml-15 d-none d-md-flex\">
\t\t\t\t\t\t<button class=\"dropdown-toggle\" type=\"button\" id=\"notification\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"lni lni-alarm\"></i>
\t\t\t\t\t\t\t<span>2</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"notification\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#0\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/avatar1.jpg') }}\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t\t\tMarieme
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-regular\">
\t\t\t\t\t\t\t\t\t\t\t\tcomment on a product.
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consect etur adipiscing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            elit Vivamus tortor.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span>10 mins ago</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#0\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/avatar2.jpg') }}\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t\t\tAbasse
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-regular\">
\t\t\t\t\t\t\t\t\t\t\t\tlike on a product.
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consect etur adipiscing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            elit Vivamus tortor.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<span>10 mins ago</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- notification end -->
\t\t\t\t\t<!-- message start -->
\t\t\t\t\t<div class=\"header-message-box ml-15 d-none d-md-flex\">
\t\t\t\t\t\t<button class=\"dropdown-toggle\" type=\"button\" id=\"message\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"lni lni-envelope\"></i>
\t\t\t\t\t\t\t<span>3</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"message\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#0\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/avatar3.jpg') }}\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<h6>Samuel Koly</h6>
\t\t\t\t\t\t\t\t\t\t<p>Hey!I can across your profile and ...</p>
\t\t\t\t\t\t\t\t\t\t<span>10 mins ago</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#0\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/avatar.jpg') }}\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<h6>Issa Diop</h6>
\t\t\t\t\t\t\t\t\t\t<p>Would you mind please checking out</p>
\t\t\t\t\t\t\t\t\t\t<span>12 mins ago</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#0\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/avatar4.jpg') }}\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<h6>Awa Diallo</h6>
\t\t\t\t\t\t\t\t\t\t<p>Hey! are you available for freelance?</p>
\t\t\t\t\t\t\t\t\t\t<span>1h ago</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- message end --> 
                    #}
\t\t\t\t\t<!-- profile start -->
\t\t\t\t\t<div class=\"profile-box ml-15\">
\t\t\t\t\t\t<button class=\"dropdown-toggle bg-transparent border-0\" type=\"button\" id=\"profile\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<div class=\"profile-info\">
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-8 text-warning bg-black border px-2 py-0\">{{ app.user.prenom }} {{ app.user.nom }} ( {{ app.user.login }})</div>
\t\t\t\t\t\t\t\t\t<div class=\"image ms-2 border-0\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/none.png') }}\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"profile\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#0\">
\t\t\t\t\t\t\t\t\t<i class=\"lni lni-user\"></i>
\t\t\t\t\t\t\t\t\tMon Profil
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t{# <li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-alarm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNotifications
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-inbox\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMessages
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-cog\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tReglages
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">
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
", "include/_header.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/include/_header.html.twig");
    }
}
