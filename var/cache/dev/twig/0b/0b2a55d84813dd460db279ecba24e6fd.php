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

/* installation/_progress_bar.html.twig */
class __TwigTemplate_9f6893edfa08981179dde478c6aa853a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/_progress_bar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/_progress_bar.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context["les_etat"] = [];
        // line 3
        $context["les_link"] = [];
        // line 4
        $context["les_coul"] = [];
        // line 5
        $context["les_lib"] = [0 => "Données de base", 1 => "Données sur le Site", 2 => "Données Installation", 3 => "Données Electricien", 4 => "Données Propriétaire", 5 => "Soumission demande"];
        // line 6
        $context["les_icon"] = [0 => "lightbulb", 1 => "house-door", 2 => "gear", 3 => "person", 4 => "person-check", 5 => "check"];
        // line 7
        $context["coul0"] = "gray";
        // line 8
        $context["coulX"] = "";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 10, $this->source); })()), "step", [], "any", false, false, false, 10) >= $context["i"])) {
                // line 11
                echo "        ";
                if (($context["i"] == 1)) {
                    // line 12
                    echo "            ";
                    $context["les_link"] = twig_array_merge((isset($context["les_link"]) || array_key_exists("les_link", $context) ? $context["les_link"] : (function () { throw new RuntimeError('Variable "les_link" does not exist.', 12, $this->source); })()), [0 => "app_installation_add"]);
                    // line 13
                    echo "        ";
                } else {
                    // line 14
                    echo "            ";
                    $context["les_link"] = twig_array_merge((isset($context["les_link"]) || array_key_exists("les_link", $context) ? $context["les_link"] : (function () { throw new RuntimeError('Variable "les_link" does not exist.', 14, $this->source); })()), [0 => ("app_installation_add" . $context["i"])]);
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "        ";
                $context["les_etat"] = twig_array_merge((isset($context["les_etat"]) || array_key_exists("les_etat", $context) ? $context["les_etat"] : (function () { throw new RuntimeError('Variable "les_etat" does not exist.', 16, $this->source); })()), [0 => "active"]);
                // line 17
                echo "    ";
            } else {
                // line 18
                echo "        ";
                $context["les_link"] = twig_array_merge((isset($context["les_link"]) || array_key_exists("les_link", $context) ? $context["les_link"] : (function () { throw new RuntimeError('Variable "les_link" does not exist.', 18, $this->source); })()), [0 => ""]);
                // line 19
                echo "        ";
                $context["les_etat"] = twig_array_merge((isset($context["les_etat"]) || array_key_exists("les_etat", $context) ? $context["les_etat"] : (function () { throw new RuntimeError('Variable "les_etat" does not exist.', 19, $this->source); })()), [0 => ""]);
                // line 20
                echo "    ";
            }
            // line 21
            echo "
    ";
            // line 22
            $context["coul0"] = "gray";
            // line 23
            echo "    
    ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 24, $this->source); })()), "step", [], "any", false, false, false, 24) >= $context["i"])) {
                // line 25
                echo "        ";
                $context["coul0"] = "#fff";
                // line 26
                echo "    ";
            }
            // line 27
            echo "
    ";
            // line 28
            if (($context["i"] == (isset($context["curr_etat"]) || array_key_exists("curr_etat", $context) ? $context["curr_etat"] : (function () { throw new RuntimeError('Variable "curr_etat" does not exist.', 28, $this->source); })()))) {
                // line 29
                echo "        ";
                $context["coul0"] = "#ffc328";
                // line 30
                echo "        ";
                $context["coulX"] = "#ffc328";
                // line 31
                echo "    ";
            }
            // line 32
            echo "
    ";
            // line 33
            $context["les_coul"] = twig_array_merge((isset($context["les_coul"]) || array_key_exists("les_coul", $context) ? $context["les_coul"] : (function () { throw new RuntimeError('Variable "les_coul" does not exist.', 33, $this->source); })()), [0 => (isset($context["coul0"]) || array_key_exists("coul0", $context) ? $context["coul0"] : (function () { throw new RuntimeError('Variable "coul0" does not exist.', 33, $this->source); })())]);
            // line 34
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "<div>
    <!-- progressbar -->
    <ul id=\"progressbar\" class=\"row priority-3\">
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 41
            echo "        ";
            $context["id_install"] = 0;
            // line 42
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)) {
                // line 43
                echo "            ";
                $context["id_install"] = twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43);
                // line 44
                echo "        ";
            }
            // line 45
            echo "        <li class=\"step ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_etat"]) || array_key_exists("les_etat", $context) ? $context["les_etat"] : (function () { throw new RuntimeError('Variable "les_etat" does not exist.', 45, $this->source); })()), $context["i"], [], "array", false, false, false, 45), "html", null, true);
            echo "\">
        ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, (isset($context["les_link"]) || array_key_exists("les_link", $context) ? $context["les_link"] : (function () { throw new RuntimeError('Variable "les_link" does not exist.', 46, $this->source); })()), $context["i"], [], "array", false, false, false, 46)) {
                // line 47
                echo "            <svg onclick=\"location.href = '";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["les_link"]) || array_key_exists("les_link", $context) ? $context["les_link"] : (function () { throw new RuntimeError('Variable "les_link" does not exist.', 47, $this->source); })()), $context["i"], [], "array", false, false, false, 47), ["id" => (isset($context["id_install"]) || array_key_exists("id_install", $context) ? $context["id_install"] : (function () { throw new RuntimeError('Variable "id_install" does not exist.', 47, $this->source); })())]), "html", null, true);
                echo "'\" class=\"pt bi\" width=\"16%\" height=\"24\" fill=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_coul"]) || array_key_exists("les_coul", $context) ? $context["les_coul"] : (function () { throw new RuntimeError('Variable "les_coul" does not exist.', 47, $this->source); })()), $context["i"], [], "array", false, false, false, 47), "html", null, true);
                echo "\" style=\"position:relative; left:42%; top:-48px;\">
                <use xlink:href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/bootstrap-icons.svg#" . twig_get_attribute($this->env, $this->source, (isset($context["les_icon"]) || array_key_exists("les_icon", $context) ? $context["les_icon"] : (function () { throw new RuntimeError('Variable "les_icon" does not exist.', 48, $this->source); })()), $context["i"], [], "array", false, false, false, 48))), "html", null, true);
                echo "\"></use>
            </svg>
        ";
            } else {
                // line 51
                echo "            <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_coul"]) || array_key_exists("les_coul", $context) ? $context["les_coul"] : (function () { throw new RuntimeError('Variable "les_coul" does not exist.', 51, $this->source); })()), $context["i"], [], "array", false, false, false, 51), "html", null, true);
                echo "\" style=\"position:relative; left:43%; top:-48px;\">
                <use xlink:href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/bootstrap-icons.svg#" . twig_get_attribute($this->env, $this->source, (isset($context["les_icon"]) || array_key_exists("les_icon", $context) ? $context["les_icon"] : (function () { throw new RuntimeError('Variable "les_icon" does not exist.', 52, $this->source); })()), $context["i"], [], "array", false, false, false, 52))), "html", null, true);
                echo "\"></use>
            </svg>
        ";
            }
            // line 55
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["les_lib"]) || array_key_exists("les_lib", $context) ? $context["les_lib"] : (function () { throw new RuntimeError('Variable "les_lib" does not exist.', 55, $this->source); })()), $context["i"], [], "array", false, false, false, 55), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "installation/_progress_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 58,  191 => 55,  185 => 52,  180 => 51,  174 => 48,  167 => 47,  165 => 46,  160 => 45,  157 => 44,  154 => 43,  151 => 42,  148 => 41,  144 => 40,  139 => 37,  132 => 34,  130 => 33,  127 => 32,  124 => 31,  121 => 30,  118 => 29,  116 => 28,  113 => 27,  110 => 26,  107 => 25,  105 => 24,  102 => 23,  100 => 22,  97 => 21,  94 => 20,  91 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  70 => 12,  67 => 11,  64 => 10,  60 => 9,  58 => 8,  56 => 7,  54 => 6,  52 => 5,  50 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% set les_etat = [] %}
{% set les_link = [] %}
{% set les_coul = [] %}
{% set les_lib = [\"Données de base\", \"Données sur le Site\", \"Données Installation\", \"Données Electricien\", \"Données Propriétaire\", \"Soumission demande\"] %}
{% set les_icon = [\"lightbulb\", \"house-door\", \"gear\", \"person\", \"person-check\", \"check\"] %}
{% set coul0=\"gray\" %}
{% set coulX=\"\" %}
{% for i in 1..6 %}
    {% if installation.step >= i %}
        {% if i==1 %}
            {% set les_link = les_link|merge([\"app_installation_add\"]) %}
        {% else %}
            {% set les_link = les_link|merge([\"app_installation_add\" ~ i]) %}
        {% endif %}
        {% set les_etat = les_etat|merge([\"active\"]) %}
    {% else %}
        {% set les_link = les_link|merge([\"\"]) %}
        {% set les_etat = les_etat|merge([\"\"]) %}
    {% endif %}

    {% set coul0=\"gray\" %}
    
    {% if installation.step >= i %}
        {% set coul0=\"#fff\" %}
    {% endif %}

    {% if i == curr_etat %}
        {% set coul0=\"#ffc328\" %}
        {% set coulX=\"#ffc328\" %}
    {% endif %}

    {% set les_coul = les_coul|merge([coul0]) %}

{% endfor %}
{# Etape: {{ installation.step }} - Courant: {{ curr_etat }} : Couleur: {{ coulX }} #}
<div>
    <!-- progressbar -->
    <ul id=\"progressbar\" class=\"row priority-3\">
    {% for i in 0..5 %}
        {% set id_install = 0 %}
        {% if installation.id %}
            {% set id_install = installation.id %}
        {% endif %}
        <li class=\"step {{ les_etat[i] }}\">
        {% if les_link[i] %}
            <svg onclick=\"location.href = '{{ path(les_link[i] , {'id': id_install}) }}'\" class=\"pt bi\" width=\"16%\" height=\"24\" fill=\"{{ les_coul[i] }}\" style=\"position:relative; left:42%; top:-48px;\">
                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#' ~ les_icon[i]) }}\"></use>
            </svg>
        {% else %}
            <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"{{ les_coul[i] }}\" style=\"position:relative; left:43%; top:-48px;\">
                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#' ~ les_icon[i]) }}\"></use>
            </svg>
        {% endif %}
            {{les_lib[i]}}
        </li>
    {% endfor %}
    </ul>
", "installation/_progress_bar.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/_progress_bar.html.twig");
    }
}
