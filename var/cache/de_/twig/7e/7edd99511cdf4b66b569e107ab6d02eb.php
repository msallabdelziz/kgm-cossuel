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

/* utilisateur/user.html.twig */
class __TwigTemplate_d43fdef784976e390e690066189da749 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " <div class=\"offset-3 col-lg-6 mb-2 shadow border border-light card p-3\">
                 <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                     <div class=\"container-fluid\">
                         <span class=\"navbar-brand mb-0 h1\">Informations Compte Utilisateur</span>
                     </div>
                 </nav>
                 <div class=\"container\">
                     <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                         <div class=\"col-7 mb-2\">
                             <label class=\"fw-light fs-7\">Nom</label>
                             <div class=\"ms-4\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "prenom", [], "any", false, false, false, 14), "html", null, true);
        echo "</div>
                         </div>
                         <div class=\"col-5 mb-2\">
                             <label class=\"fw-light fs-7\">Role</label>
                             <div class=\"ms-4\">";
        // line 18
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "roles", [], "any", false, false, false, 18), 0, [], "array", false, false, false, 18), ["ROLE_" => ""]), "html", null, true);
        echo "</div>
                         </div>
                         <div class=\"col-12 mb-2\">
                             <label class=\"fw-light fs-7\">Adresse</label>
                             <div class=\"ms-4\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "adresse", [], "any", false, false, false, 22), "html", null, true);
        echo "</div>
                         </div>
                         <div class=\"col-5 mb-2\">
                             <label class=\"fw-light fs-7\">Type</label>
                             <div class=\"ms-4\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "type", [], "any", false, false, false, 26), "html", null, true);
        echo "</div>
                         </div>
                         <div class=\"col-7 mb-2\">
                             <label class=\"fw-light fs-7\">Email</label>
                             <div class=\"ms-4\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "email", [], "any", false, false, false, 30), "html", null, true);
        echo "</div>
                         </div>
                         <div class=\"col-12 mb-2\">
                             <label class=\"fw-light fs-7\">Telephone</label>
                             <div class=\"ms-4\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "Telephone", [], "any", false, false, false, 34), "html", null, true);
        echo "</div>
                         </div>
                         ";
        // line 40
        echo "                     </div>
                      <div class=\"col pt-2\" align=\"right\">
                             ";
        // line 47
        echo "
                             <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_password");
        echo "\" class=\"btn btn-primary\">

                                 Modifier le mot de passe 
                             </a>
                             ";
        // line 57
        echo "                     </div> 
                 </div>

             </div>

 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 57,  129 => 48,  126 => 47,  122 => 40,  117 => 34,  110 => 30,  103 => 26,  96 => 22,  89 => 18,  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

 {% block body %}
 <div class=\"offset-3 col-lg-6 mb-2 shadow border border-light card p-3\">
                 <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                     <div class=\"container-fluid\">
                         <span class=\"navbar-brand mb-0 h1\">Informations Compte Utilisateur</span>
                     </div>
                 </nav>
                 <div class=\"container\">
                     <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                         <div class=\"col-7 mb-2\">
                             <label class=\"fw-light fs-7\">Nom</label>
                             <div class=\"ms-4\">{{ app.user.nom}} {{ app.user.prenom }}</div>
                         </div>
                         <div class=\"col-5 mb-2\">
                             <label class=\"fw-light fs-7\">Role</label>
                             <div class=\"ms-4\">{{ app.user.roles[0] | replace({'ROLE_':''}) }}</div>
                         </div>
                         <div class=\"col-12 mb-2\">
                             <label class=\"fw-light fs-7\">Adresse</label>
                             <div class=\"ms-4\">{{ app.user.adresse }}</div>
                         </div>
                         <div class=\"col-5 mb-2\">
                             <label class=\"fw-light fs-7\">Type</label>
                             <div class=\"ms-4\">{{ app.user.type }}</div>
                         </div>
                         <div class=\"col-7 mb-2\">
                             <label class=\"fw-light fs-7\">Email</label>
                             <div class=\"ms-4\">{{ app.user.email }}</div>
                         </div>
                         <div class=\"col-12 mb-2\">
                             <label class=\"fw-light fs-7\">Telephone</label>
                             <div class=\"ms-4\">{{ app.user.Telephone }}</div>
                         </div>
                         {# <div class=\"col-7 mb-2\">
                             <label class=\"fw-light fs-7\">Création</label>
                              <div class=\"ms-4\">{{ app.user.created_at }}</div> 
                         </div> #}
                     </div>
                      <div class=\"col pt-2\" align=\"right\">
                             {# <a href=\"{{ path('app_electricien_index') }}\" class=\"mx-2\" title=\"Retour\">
                                 <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                     <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#arrow-counterclockwise') }}\"></use>
                                 </svg>
                             </a> #}

                             <a href=\"{{path('app_utilisateur_password')}}\" class=\"btn btn-primary\">

                                 Modifier le mot de passe 
                             </a>
                             {# <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                 <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                     <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#trash') }}\"></use>
                                 </svg>
                             </a> #}
                     </div> 
                 </div>

             </div>

 {% endblock %}", "utilisateur/user.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/utilisateur/user.html.twig");
    }
}
