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
class __TwigTemplate_fdf180078640097311c3714b77ae1eb3 extends Template
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
        echo "    ";
        $context["link_prev"] = "app_installation_add";
        // line 2
        echo "    ";
        if ((($context["curr_etat"] ?? null) > 2)) {
            // line 3
            echo "        ";
            $context["prev_etat"] = (($context["curr_etat"] ?? null) - 1);
            // line 4
            echo "        ";
            $context["link_prev"] = ("app_installation_add" . ($context["prev_etat"] ?? null));
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_index", ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-warning btn my-2\">Enregistrer et sortir</a>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link_prev"] ?? null), ["id" => twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" class=\"next action-button btn btn-secondary btn my-2\">Etape Précédente</a>
            ";
        // line 15
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PUBLIC") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
            // line 16
            echo "                ";
            if ((($context["curr_etat"] ?? null) == "6")) {
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
        return array (  90 => 22,  87 => 21,  83 => 19,  79 => 17,  76 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 11,  58 => 9,  56 => 8,  52 => 6,  49 => 5,  46 => 4,  43 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/_actions_new.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/_actions_new.html.twig");
    }
}
