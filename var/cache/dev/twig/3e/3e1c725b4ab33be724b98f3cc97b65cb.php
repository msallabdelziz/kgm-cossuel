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

/* @BazingaGeocoder/Collector/geocoder.html.twig */
class __TwigTemplate_fb79d988d7ed05d5a055f45be580324e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BazingaGeocoder/Collector/geocoder.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BazingaGeocoder/Collector/geocoder.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@BazingaGeocoder/Collector/geocoder.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["queryLabel"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "queries", [], "any", false, false, false, 4)) == 1)) ? ("query") : ("queries"));
        // line 5
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 5, $this->source); })()), "queries", [], "any", false, false, false, 5)) > 0)) {
            // line 6
            echo "        ";
            ob_start();
            // line 7
            echo "            ";
            echo twig_include($this->env, $context, "@BazingaGeocoder/Collector/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 8
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "queries", [], "any", false, false, false, 8)), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["queryLabel"]) || array_key_exists("queryLabel", $context) ? $context["queryLabel"] : (function () { throw new RuntimeError('Variable "queryLabel" does not exist.', 9, $this->source); })()), "html", null, true);
            echo " in</span>
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "totalDuration", [], "any", false, false, false, 10)), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">ms</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            echo "        ";
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "queries", [], "any", false, false, false, 15)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["queryLabel"]) || array_key_exists("queryLabel", $context) ? $context["queryLabel"] : (function () { throw new RuntimeError('Variable "queryLabel" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Provider</th>
                        <th>Query</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "queries", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 28
                echo "                        <tr>
                            <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "providerName", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "queryString", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                (((twig_get_attribute($this->env, $this->source, $context["query"], "duration", [], "any", false, false, false, 31) == 0)) ? (print ("n/a")) : (print (twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "duration", [], "any", false, false, false, 31)) . " ms"), "html", null, true))));
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    </tbody>
                </table>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            echo "
        ";
            // line 39
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@BazingaGeocoder/Collector/geocoder.html.twig", 39)->display(twig_array_merge($context, ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 39, $this->source); })())]));
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 44
        echo "    ";
        // line 45
        echo "    <span class=\"label ";
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 45, $this->source); })()), "queries", [], "any", false, false, false, 45)) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 47
        echo twig_include($this->env, $context, "@BazingaGeocoder/Collector/icon.svg");
        echo "
        </span>
        <strong>Geocoder</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 54
        echo "    <style>
        .sf-toggle-content.sf-toggle-visible {
            display: table-row;
        }
    </style>
    <h2>Geocoder</h2>

    <div class=\"sf-tabs\">
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 62, $this->source); })()), "providers", [], "any", false, false, false, 62));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 63
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">";
            // line 64
            echo twig_escape_filter($this->env, $context["provider"], "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "providerQueries", [0 => $context["provider"]], "method", false, false, false, 64)), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These queries are executed by a provider named \"";
            // line 68
            echo twig_escape_filter($this->env, $context["provider"], "html", null, true);
            echo "\".
                </p>

            <table>
                <thead>
                    <tr>
                        <th style=\"min-width: 2rem;\"></th>
                        <th style=\"width: 40%\">Query</th>
                        <th style=\"min-width: 3rem;\">Locale</th>
                        <th style=\"width: 60%\">Result</th>
                        <th style=\"min-width: 4rem;\">Duration</th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 82, $this->source); })()), "providerQueries", [0 => $context["provider"]], "method", false, false, false, 82));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 83
                echo "                    <tr>
                        <td class=\"font-normal text-small\" nowrap=\"\">
                            <span class=\"colored text-bold\"># ";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 85), "html", null, true);
                echo "</span>
                        </td>
                        <td class=\"font-normal\">
                            <span class=\"dump-inline\">
                                ";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "queryString", [], "any", false, false, false, 89), "html", null, true);
                echo "
                            </span>
                        </td>
                        <td class=\"font-normal\">
                            <span class=\"dump-inline\">
                                ";
                // line 94
                (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "query", [], "any", false, false, false, 94), "locale", [], "any", false, false, false, 94))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "query", [], "any", false, false, false, 94), "locale", [], "any", false, false, false, 94), "html", null, true))) : (print ("null")));
                echo "
                            </span>
                        </td>
                        <td class=\"font-normal\">
                            <span class=\"dump-inline\">
                                ";
                // line 99
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "result", [], "any", false, true, false, 99), "message", [], "any", true, true, false, 99)) {
                    // line 100
                    echo "                                    Exception
                                ";
                } else {
                    // line 102
                    echo "                                    ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, $context["query"], "resultCount", [], "any", false, false, false, 102));
                    echo " Result(s)
                                ";
                }
                // line 104
                echo "                            </span>
                            <span class=\"metadata\">
                                <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#geocoder-";
                // line 106
                echo twig_escape_filter($this->env, $context["provider"], "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 106), "html", null, true);
                echo "-details\" data-toggle-alt-content=\"Hide\">Show</a>
                            </span>
                        </td>
                        <td class=\"font-normal text-small\" nowrap=\"\">
                            ";
                // line 110
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "duration", [], "any", false, false, false, 110)), "html", null, true);
                echo " ms
                        </td>
                    </tr>
                    <tr id=\"geocoder-";
                // line 113
                echo twig_escape_filter($this->env, $context["provider"], "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 113), "html", null, true);
                echo "-details\" class=\"context sf-toggle-content sf-toggle-hidden\">
                        <td></td>
                        <td>";
                // line 115
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "query", [], "any", false, false, false, 115), 1);
                echo "</td>
                        <td></td>
                        ";
                // line 117
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "result", [], "any", false, true, false, 117), "message", [], "any", true, true, false, 117)) {
                    // line 118
                    echo "                        <td>";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "result", [], "any", false, false, false, 118), 1);
                    echo "</td>
                        ";
                } else {
                    // line 120
                    echo "                        <td>";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "result", [], "any", false, false, false, 120), 3);
                    echo "</td>
                        ";
                }
                // line 122
                echo "                        <td></td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                </tbody>
            </table>

            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 131
            echo "        <div class=\"empty\">
            <p>No queries were executed.</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@BazingaGeocoder/Collector/geocoder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 135,  379 => 131,  369 => 125,  353 => 122,  347 => 120,  341 => 118,  339 => 117,  334 => 115,  327 => 113,  321 => 110,  312 => 106,  308 => 104,  302 => 102,  298 => 100,  296 => 99,  288 => 94,  280 => 89,  273 => 85,  269 => 83,  252 => 82,  235 => 68,  226 => 64,  223 => 63,  218 => 62,  208 => 54,  198 => 53,  183 => 47,  177 => 45,  175 => 44,  165 => 43,  154 => 39,  151 => 38,  145 => 34,  136 => 31,  132 => 30,  128 => 29,  125 => 28,  121 => 27,  104 => 15,  101 => 14,  98 => 13,  92 => 10,  88 => 9,  84 => 8,  79 => 7,  76 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set queryLabel = collector.queries|length == 1 ? 'query' : 'queries' %}
    {% if collector.queries|length > 0 %}
        {% set icon %}
            {{ include('@BazingaGeocoder/Collector/icon.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.queries|length }}</span>
            <span class=\"sf-toolbar-label\">{{ queryLabel }} in</span>
            <span class=\"sf-toolbar-value\">{{ collector.totalDuration|number_format }}</span>
            <span class=\"sf-toolbar-label\">ms</span>
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>{{ collector.queries|length }} {{ queryLabel }}</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Provider</th>
                        <th>Query</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                    {% for query in collector.queries %}
                        <tr>
                            <td>{{ query.providerName }}</td>
                            <td>{{ query.queryString }}</td>
                            <td>{{ query.duration == 0 ? 'n/a' : query.duration|number_format ~ ' ms'}}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endset %}

        {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endif %}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label {{ collector.queries|length == 0 ? 'disabled' }}\">
        <span class=\"icon\">
            {{ include('@BazingaGeocoder/Collector/icon.svg') }}
        </span>
        <strong>Geocoder</strong>
    </span>
{% endblock %}

{% block panel %}
    <style>
        .sf-toggle-content.sf-toggle-visible {
            display: table-row;
        }
    </style>
    <h2>Geocoder</h2>

    <div class=\"sf-tabs\">
        {% for provider in collector.providers %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">{{ provider }} <span class=\"badge\">{{ collector.providerQueries(provider)|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These queries are executed by a provider named \"{{ provider }}\".
                </p>

            <table>
                <thead>
                    <tr>
                        <th style=\"min-width: 2rem;\"></th>
                        <th style=\"width: 40%\">Query</th>
                        <th style=\"min-width: 3rem;\">Locale</th>
                        <th style=\"width: 60%\">Result</th>
                        <th style=\"min-width: 4rem;\">Duration</th>
                    </tr>
                </thead>
                <tbody>
                {% for query in collector.providerQueries(provider) %}
                    <tr>
                        <td class=\"font-normal text-small\" nowrap=\"\">
                            <span class=\"colored text-bold\"># {{ loop.index }}</span>
                        </td>
                        <td class=\"font-normal\">
                            <span class=\"dump-inline\">
                                {{ query.queryString }}
                            </span>
                        </td>
                        <td class=\"font-normal\">
                            <span class=\"dump-inline\">
                                {{ query.query.locale is not null ? query.query.locale : 'null' }}
                            </span>
                        </td>
                        <td class=\"font-normal\">
                            <span class=\"dump-inline\">
                                {% if query.result.message is defined %}
                                    Exception
                                {% else %}
                                    {{ dump(query.resultCount) }} Result(s)
                                {% endif %}
                            </span>
                            <span class=\"metadata\">
                                <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#geocoder-{{ provider }}-{{ loop.index }}-details\" data-toggle-alt-content=\"Hide\">Show</a>
                            </span>
                        </td>
                        <td class=\"font-normal text-small\" nowrap=\"\">
                            {{ query.duration|number_format }} ms
                        </td>
                    </tr>
                    <tr id=\"geocoder-{{ provider }}-{{ loop.index }}-details\" class=\"context sf-toggle-content sf-toggle-hidden\">
                        <td></td>
                        <td>{{ profiler_dump(query.query, maxDepth=1) }}</td>
                        <td></td>
                        {% if query.result.message is defined %}
                        <td>{{ profiler_dump(query.result, maxDepth=1) }}</td>
                        {% else %}
                        <td>{{ profiler_dump(query.result, maxDepth=3) }}</td>
                        {% endif %}
                        <td></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>

            </div>
        </div>
        {% else %}
        <div class=\"empty\">
            <p>No queries were executed.</p>
        </div>
        {% endfor %}
    </div>
{% endblock %}
", "@BazingaGeocoder/Collector/geocoder.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/vendor/willdurand/geocoder-bundle/Resources/views/Collector/geocoder.html.twig");
    }
}
