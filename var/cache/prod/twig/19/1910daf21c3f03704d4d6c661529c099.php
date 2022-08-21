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

/* paginationpop.html.twig */
class __TwigTemplate_c9b404641d9984a56739c8dae8e8244c extends Template
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
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 3
            echo "    <nav>
        ";
            // line 4
            $context["classAlign"] = (( !array_key_exists("align", $context)) ? ("") : ((((($context["align"] ?? null) == "center")) ? (" justify-content-center") : ((((($context["align"] ?? null) == "right")) ? (" justify-content-end") : (""))))));
            // line 5
            echo "        ";
            $context["classSize"] = (( !array_key_exists("size", $context)) ? ("") : ((((($context["size"] ?? null) == "large")) ? (" pagination-lg") : ((((($context["size"] ?? null) == "small")) ? (" pagination-sm") : (""))))));
            // line 6
            echo "        <ul class=\"pagination";
            echo twig_escape_filter($this->env, ($context["classAlign"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["classSize"] ?? null), "html", null, true);
            echo "\">

            ";
            // line 8
            if (array_key_exists("previous", $context)) {
                // line 9
                echo "                <li class=\"page-item\">
                    <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" class=\"page-link\" rel=\"prev\" href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 13
                echo "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">&laquo;&nbsp;";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</span>
                </li>
            ";
            }
            // line 17
            echo "
            ";
            // line 18
            if ((($context["startPage"] ?? null) > 1)) {
                // line 19
                echo "                <li class=\"page-item\">
                    <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" class=\"page-link\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 22
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 23
                    echo "                    <li class=\"page-item\">
                        <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" class=\"page-link\" href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif ((                // line 26
($context["startPage"] ?? null) != 2)) {
                    // line 27
                    echo "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">&hellip;</span>
                    </li>
                ";
                }
                // line 31
                echo "            ";
            }
            // line 32
            echo "
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 34
                echo "                ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 35
                    echo "                    <li class=\"page-item\">
                        <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" class=\"page-link\" href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 39
                    echo "                    <li class=\"page-item active\">
                        <span class=\"page-link\">";
                    // line 40
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                    </li>
                ";
                }
                // line 43
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
            ";
            // line 46
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 47
                echo "                ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 48
                    echo "                    ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 49
                        echo "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\">&hellip;</span>
                        </li>
                    ";
                    } else {
                        // line 53
                        echo "                        <li class=\"page-item\">
                            <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" class=\"page-link\" href=\"";
                        // line 54
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 57
                    echo "                ";
                }
                // line 58
                echo "                <li class=\"page-item\">
                    <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" class=\"page-link\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["pageCount"] ?? null), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 62
            echo "
            ";
            // line 63
            if (array_key_exists("next", $context)) {
                // line 64
                echo "                <li class=\"page-item\">
                    <a data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" class=\"page-link\" rel=\"next\" href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
                </li>
            ";
            } else {
                // line 68
                echo "                <li  class=\"page-item disabled\">
                    <span class=\"page-link\">";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</span>
                </li>
            ";
            }
            // line 72
            echo "        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "paginationpop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 72,  211 => 69,  208 => 68,  200 => 65,  197 => 64,  195 => 63,  192 => 62,  184 => 59,  181 => 58,  178 => 57,  170 => 54,  167 => 53,  161 => 49,  158 => 48,  155 => 47,  153 => 46,  150 => 45,  143 => 43,  137 => 40,  134 => 39,  126 => 36,  123 => 35,  120 => 34,  116 => 33,  113 => 32,  110 => 31,  104 => 27,  102 => 26,  97 => 24,  94 => 23,  92 => 22,  87 => 20,  84 => 19,  82 => 18,  79 => 17,  73 => 14,  70 => 13,  62 => 10,  59 => 9,  57 => 8,  50 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paginationpop.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/paginationpop.html.twig");
    }
}
