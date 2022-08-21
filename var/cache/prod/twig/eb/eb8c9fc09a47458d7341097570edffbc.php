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
class __TwigTemplate_d5c09f9e4171e191f4a32bea8e5c0da5 extends Template
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
            if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 10) >= $context["i"])) {
                // line 11
                echo "        ";
                if (($context["i"] == 1)) {
                    // line 12
                    echo "            ";
                    $context["les_link"] = twig_array_merge(($context["les_link"] ?? null), [0 => "app_installation_add"]);
                    // line 13
                    echo "        ";
                } else {
                    // line 14
                    echo "            ";
                    $context["les_link"] = twig_array_merge(($context["les_link"] ?? null), [0 => ("app_installation_add" . $context["i"])]);
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "        ";
                $context["les_etat"] = twig_array_merge(($context["les_etat"] ?? null), [0 => "active"]);
                // line 17
                echo "    ";
            } else {
                // line 18
                echo "        ";
                $context["les_link"] = twig_array_merge(($context["les_link"] ?? null), [0 => ""]);
                // line 19
                echo "        ";
                $context["les_etat"] = twig_array_merge(($context["les_etat"] ?? null), [0 => ""]);
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
            if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "step", [], "any", false, false, false, 24) >= $context["i"])) {
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
            if (($context["i"] == ($context["curr_etat"] ?? null))) {
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
            $context["les_coul"] = twig_array_merge(($context["les_coul"] ?? null), [0 => ($context["coul0"] ?? null)]);
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
            if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 42)) {
                // line 43
                echo "            ";
                $context["id_install"] = twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "id", [], "any", false, false, false, 43);
                // line 44
                echo "        ";
            }
            // line 45
            echo "        <li class=\"step ";
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["les_etat"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "html", null, true);
            echo "\">
        ";
            // line 46
            if ((($__internal_compile_1 = ($context["les_link"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null)) {
                // line 47
                echo "            <svg onclick=\"location.href = '";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((($__internal_compile_2 = ($context["les_link"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), ["id" => ($context["id_install"] ?? null)]), "html", null, true);
                echo "'\" class=\"pt bi\" width=\"16%\" height=\"24\" fill=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["les_coul"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "html", null, true);
                echo "\" style=\"position:relative; left:42%; top:-48px;\">
                <use xlink:href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/bootstrap-icons.svg#" . (($__internal_compile_4 = ($context["les_icon"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["i"]] ?? null) : null))), "html", null, true);
                echo "\"></use>
            </svg>
        ";
            } else {
                // line 51
                echo "            <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["les_coul"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["i"]] ?? null) : null), "html", null, true);
                echo "\" style=\"position:relative; left:43%; top:-48px;\">
                <use xlink:href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/bootstrap-icons.svg#" . (($__internal_compile_6 = ($context["les_icon"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["i"]] ?? null) : null))), "html", null, true);
                echo "\"></use>
            </svg>
        ";
            }
            // line 55
            echo "            ";
            echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["les_lib"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["i"]] ?? null) : null), "html", null, true);
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
        return array (  195 => 58,  185 => 55,  179 => 52,  174 => 51,  168 => 48,  161 => 47,  159 => 46,  154 => 45,  151 => 44,  148 => 43,  145 => 42,  142 => 41,  138 => 40,  133 => 37,  126 => 34,  124 => 33,  121 => 32,  118 => 31,  115 => 30,  112 => 29,  110 => 28,  107 => 27,  104 => 26,  101 => 25,  99 => 24,  96 => 23,  94 => 22,  91 => 21,  88 => 20,  85 => 19,  82 => 18,  79 => 17,  76 => 16,  73 => 15,  70 => 14,  67 => 13,  64 => 12,  61 => 11,  58 => 10,  54 => 9,  52 => 8,  50 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/_progress_bar.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/_progress_bar.html.twig");
    }
}
