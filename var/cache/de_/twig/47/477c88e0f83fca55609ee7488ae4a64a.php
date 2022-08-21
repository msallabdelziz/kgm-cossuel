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

/* utilisateur/editPassword.html.twig */
class __TwigTemplate_320d8145292e8c5f459847ca3c55429f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/editPassword.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/editPassword.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/editPassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modification du mot de passe de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "nom", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "prenom", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo " \t<div class=\"grix xs4 container\">
 \t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo " \t\t\t<div class=\"col-xs4\">
 \t\t\t\t<div class=\"offset-4 col-4 p-2 my-2 rounded-2 alert alert-danger\">";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
 \t\t\t</div>
 \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <div class=\"offset-3 col-lg-6 mb-2 shadow border border-light card p-3\">
        <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
            <div class=\"container-fluid\">
                <span class=\"navbar-brand mb-0 h1\">Modification du mot de passe</span>
            </div>
        </nav>
        <div class=\"container\">
             <form method=\"post\">
                 <div class=\"col-6 form-field\">
                     <label for=\"pass0\">Mot de passe Actuel</label>
                     <input required=\"required\" type=\"password\" id=\"pass0\" name=\"pass0\" class=\"form-control\">
                 </div>
                 <div class=\"clear\"></div>
                 <hr class=\"my-4\">
                 <div class=\"row mt-4\">
                    <div class=\"col-6 form-field\">
                        <label for=\"pass\">Nouveau Mot de passe</label>
                        <input required=\"required\" type=\"password\" id=\"pass1\" name=\"pass1\" class=\"form-control\">
                    </div>
                    <div class=\"col-6 form-field\">
                        <label for=\"pass2\">Confirmer le mot de passe</label>
                        <input required=\"required\" type=\"password\" id=\"pass2\" name=\"pass2\" class=\"form-control\">
                    </div>
                </div>
                 <div align=\"right\" class='m-2 mt-4'>
                    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_moncompte");
        echo "\" class=\"btn btn-secondary \">Annuler</a>
                    <button class=\"btn btn-primary \">Valider les modifications</button>
                </div>

             </form>
 \t\t</div>
    </div>

 \t</div>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/editPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 38,  110 => 13,  101 => 10,  98 => 9,  94 => 8,  91 => 7,  81 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

 {# {% block title %}COSSUEL{% endblock %} #}
 {% block title %}Modification du mot de passe de {{ app.user.nom }} {{ app.user.prenom }}{% endblock %}

 {% block body %}
 \t<div class=\"grix xs4 container\">
 \t\t{% for message in app.flashes('error') %}
 \t\t\t<div class=\"col-xs4\">
 \t\t\t\t<div class=\"offset-4 col-4 p-2 my-2 rounded-2 alert alert-danger\">{{message}}</div>
 \t\t\t</div>
 \t\t{% endfor %}
    <div class=\"offset-3 col-lg-6 mb-2 shadow border border-light card p-3\">
        <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
            <div class=\"container-fluid\">
                <span class=\"navbar-brand mb-0 h1\">Modification du mot de passe</span>
            </div>
        </nav>
        <div class=\"container\">
             <form method=\"post\">
                 <div class=\"col-6 form-field\">
                     <label for=\"pass0\">Mot de passe Actuel</label>
                     <input required=\"required\" type=\"password\" id=\"pass0\" name=\"pass0\" class=\"form-control\">
                 </div>
                 <div class=\"clear\"></div>
                 <hr class=\"my-4\">
                 <div class=\"row mt-4\">
                    <div class=\"col-6 form-field\">
                        <label for=\"pass\">Nouveau Mot de passe</label>
                        <input required=\"required\" type=\"password\" id=\"pass1\" name=\"pass1\" class=\"form-control\">
                    </div>
                    <div class=\"col-6 form-field\">
                        <label for=\"pass2\">Confirmer le mot de passe</label>
                        <input required=\"required\" type=\"password\" id=\"pass2\" name=\"pass2\" class=\"form-control\">
                    </div>
                </div>
                 <div align=\"right\" class='m-2 mt-4'>
                    <a href=\"{{ path('app_utilisateur_moncompte') }}\" class=\"btn btn-secondary \">Annuler</a>
                    <button class=\"btn btn-primary \">Valider les modifications</button>
                </div>

             </form>
 \t\t</div>
    </div>

 \t</div>
 {% endblock %} ", "utilisateur/editPassword.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/utilisateur/editPassword.html.twig");
    }
}
