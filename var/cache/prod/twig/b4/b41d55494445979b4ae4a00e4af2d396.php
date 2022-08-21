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
class __TwigTemplate_1920c01ad5e119ca0b4a09185a3fb603 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14), "prenom", [], "any", false, false, false, 14), "html", null, true);
        echo "</div>
                         </div>
                         <div class=\"col-5 mb-2\">
                             <label class=\"fw-light fs-7\">Role</label>
                             <div class=\"ms-4\">";
        // line 18
        echo twig_escape_filter($this->env, twig_replace_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18), "roles", [], "any", false, false, false, 18)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), ["ROLE_" => ""]), "html", null, true);
        echo "</div>
                         </div>
                         <div class=\"col-12 mb-2\">
                             <label class=\"fw-light fs-7\">Adresse</label>
                             <div class=\"ms-4\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "adresse", [], "any", false, false, false, 22), "html", null, true);
        echo "</div>
                         </div>
                         <div class=\"col-5 mb-2\">
                             <label class=\"fw-light fs-7\">Type</label>
                             <div class=\"ms-4\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "type", [], "any", false, false, false, 26), "html", null, true);
        echo "</div>
                         </div>
                         <div class=\"col-7 mb-2\">
                             <label class=\"fw-light fs-7\">Email</label>
                             <div class=\"ms-4\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 30), "email", [], "any", false, false, false, 30), "html", null, true);
        echo "</div>
                         </div>
                         <div class=\"col-12 mb-2\">
                             <label class=\"fw-light fs-7\">Telephone</label>
                             <div class=\"ms-4\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34), "Telephone", [], "any", false, false, false, 34), "html", null, true);
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
        return array (  118 => 57,  111 => 48,  108 => 47,  104 => 40,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  62 => 14,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "utilisateur/user.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/utilisateur/user.html.twig");
    }
}
