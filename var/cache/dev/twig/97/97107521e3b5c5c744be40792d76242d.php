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

/* installation/_actions_new.html.twig */
class __TwigTemplate_2b3eb36cc1bda2b9dd7ebc5a7866d0be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/_actions_new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/_actions_new.html.twig"));

        // line 1
        echo "    ";
        $context["link_prev"] = "app_installation_add";
        // line 2
        echo "    ";
        if (((isset($context["curr_etat"]) || array_key_exists("curr_etat", $context) ? $context["curr_etat"] : (function () { throw new RuntimeError('Variable "curr_etat" does not exist.', 2, $this->source); })()) > 2)) {
            // line 3
            echo "        ";
            $context["prev_etat"] = ((isset($context["curr_etat"]) || array_key_exists("curr_etat", $context) ? $context["curr_etat"] : (function () { throw new RuntimeError('Variable "curr_etat" does not exist.', 3, $this->source); })()) - 1);
            // line 4
            echo "        ";
            $context["link_prev"] = ("app_installation_add" . (isset($context["prev_etat"]) || array_key_exists("prev_etat", $context) ? $context["prev_etat"] : (function () { throw new RuntimeError('Variable "prev_etat" does not exist.', 4, $this->source); })()));
            // line 5
            echo "    ";
        }
        // line 6
        echo "    <div class=\"row mt-2\">
        <div class=\"col-6\">
                ";
        // line 8
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PUBLIC") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
            // line 9
            echo "                <button type=\"button\" onclick=\"\$('#form_installation_del').submit()\" class=\"next action-button btn btn-outline-danger btn my-2\">Supprimer la demande</button>
                ";
        }
        // line 11
        echo "        </div>
        <div class=\"col-6\" align=\"right\">
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-warning btn my-2\">Enregistrer et sortir</a>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["link_prev"]) || array_key_exists("link_prev", $context) ? $context["link_prev"] : (function () { throw new RuntimeError('Variable "link_prev" does not exist.', 14, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-secondary btn my-2\">Etape Précédente</a>
            ";
        // line 15
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PUBLIC") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
            // line 16
            echo "                ";
            if (((isset($context["curr_etat"]) || array_key_exists("curr_etat", $context) ? $context["curr_etat"] : (function () { throw new RuntimeError('Variable "curr_etat" does not exist.', 16, $this->source); })()) == "6")) {
                // line 17
                echo "                    <button type=\"submit\" class=\"next action-button btn btn-primary btn my-2\">Soumettre la demande</button>
                ";
            } else {
                // line 19
                echo "                    <button type=\"submit\" class=\"next action-button btn btn-primary btn my-2\">Etape Suivante</button>
                ";
            }
            // line 21
            echo "            ";
        }
        // line 22
        echo "        </div>
    </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "installation/_actions_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  93 => 21,  89 => 19,  85 => 17,  82 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 11,  64 => 9,  62 => 8,  58 => 6,  55 => 5,  52 => 4,  49 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {% set link_prev = 'app_installation_add' %}
    {% if curr_etat > 2 %}
        {% set prev_etat = curr_etat - 1 %}
        {% set link_prev = 'app_installation_add' ~ prev_etat %}
    {% endif %}
    <div class=\"row mt-2\">
        <div class=\"col-6\">
                {% if is_granted('ROLE_PUBLIC') or is_granted('ROLE_RFO') %}
                <button type=\"button\" onclick=\"\$('#form_installation_del').submit()\" class=\"next action-button btn btn-outline-danger btn my-2\">Supprimer la demande</button>
                {% endif %}
        </div>
        <div class=\"col-6\" align=\"right\">
                <a href=\"{{ path('app_installation_index', {'id': installation.id}) }}\" class=\"next action-button btn btn-warning btn my-2\">Enregistrer et sortir</a>
            <a href=\"{{ path(link_prev , {'id': installation.id}) }}\" class=\"next action-button btn btn-secondary btn my-2\">Etape Précédente</a>
            {% if is_granted('ROLE_PUBLIC') or is_granted('ROLE_RFO') %}
                {% if curr_etat == \"6\" %}
                    <button type=\"submit\" class=\"next action-button btn btn-primary btn my-2\">Soumettre la demande</button>
                {% else %}
                    <button type=\"submit\" class=\"next action-button btn btn-primary btn my-2\">Etape Suivante</button>
                {% endif %}
            {% endif %}
        </div>
    </div>", "installation/_actions_new.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/_actions_new.html.twig");
    }
}
