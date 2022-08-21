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
class __TwigTemplate_7da0d01250ee7315cea0ffd75ee3b3dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_header.html.twig"));

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
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15), 0, [], "array", false, false, false, 15) && (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15), 0, [], "array", false, false, false, 15) == "ROLE_CAISSIER") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15), 0, [], "array", false, false, false, 15) == "ROLE_COMPTABLE")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15), 0, [], "array", false, false, false, 15) == "ROLE_CONTROLEUR")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15), 0, [], "array", false, false, false, 15) == "ROLE_USER")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15), 0, [], "array", false, false, false, 15) == "ROLE_REFERENT"))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "get", [0 => "agence"], "method", false, false, false, 15)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "get", [0 => "menu"], "method", false, false, false, 15) != "statistiques"))) {
            // line 16
            echo "\t\t\t\t\t<label class=\"badge bg-warning border shadow text-dark fs-5\">AGENCE</label><label class=\"badge bg-dark border shadow text-warning fs-5\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "session", [], "any", false, false, false, 16), "get", [0 => "agence"], "method", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "prenom", [], "any", false, false, false, 124), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "nom", [], "any", false, false, false, 124), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  110 => 160,  107 => 159,  98 => 135,  87 => 127,  79 => 124,  72 => 119,  67 => 18,  61 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ========== header start ========== -->
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
\t\t\t\t{% if app.user.roles[0] and (app.user.roles[0]==\"ROLE_CAISSIER\" or app.user.roles[0]==\"ROLE_COMPTABLE\" or app.user.roles[0]==\"ROLE_CONTROLEUR\" or app.user.roles[0]==\"ROLE_USER\" or app.user.roles[0]==\"ROLE_REFERENT\") and app.session.get('agence') and app.session.get(\"menu\")!=\"statistiques\" %}
\t\t\t\t\t<label class=\"badge bg-warning border shadow text-dark fs-5\">AGENCE</label><label class=\"badge bg-dark border shadow text-warning fs-5\">{{app.session.get('agence').nom}}</label>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"col-lg-5 col-md-5 col-5\">
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
\t\t\t\t\t\t\t\t\t<div class=\"fs-8 text-warning bg-black border px-2 py-0\">{{ app.user.prenom }} {{ app.user.nom }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"image ms-2 border-0\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"#333\" class=\"bi bi-plus-lg\" viewBox=\"0 0 32 32\">
\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person-badge') }}\"></use>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"profile\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_utilisateur_moncompte') }}\">
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
", "include/_header.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/include/_header.html.twig");
    }
}
