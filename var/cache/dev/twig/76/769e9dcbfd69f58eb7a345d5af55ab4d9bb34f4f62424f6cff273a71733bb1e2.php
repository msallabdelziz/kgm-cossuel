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

/* installation/index.html.twig */
class __TwigTemplate_870bd702c8e61c7a62df5beb3fb2d7ae37f71d97f579d0126a774c1183a799a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "installation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Installation index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Installation index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Etat</th>
                <th>CompteurVoisin</th>
                <th>Compteur</th>
                <th>Abonnement</th>
                <th>Bp</th>
                <th>Adresse</th>
                <th>NomSite</th>
                <th>Lattitude</th>
                <th>Longitude</th>
                <th>DateInstallation</th>
                <th>GrstReseau</th>
                <th>Neuf15</th>
                <th>Existant15</th>
                <th>Neuf25</th>
                <th>Existant25</th>
                <th>NeufAutre</th>
                <th>ExistantAutre</th>
                <th>TitreProp</th>
                <th>Intervenant</th>
                <th>IntervenantAutre</th>
                <th>Collectif</th>
                <th>Logement</th>
                <th>Priece</th>
                <th>Puissance</th>
                <th>Created_at</th>
                <th>Created_by</th>
                <th>Updated_at</th>
                <th>Updated_by</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["installations"]) || array_key_exists("installations", $context) ? $context["installations"] : (function () { throw new RuntimeError('Variable "installations" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["installation"]) {
            // line 45
            echo "            <tr>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "etat", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "compteurVoisin", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "compteur", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "abonnement", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "bp", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "adresse", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "nomSite", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "lattitude", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "longitude", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            ((twig_get_attribute($this->env, $this->source, $context["installation"], "dateInstallation", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "dateInstallation", [], "any", false, false, false, 56), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "grstReseau", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "neuf15", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "existant15", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "neuf25", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "existant25", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "neufAutre", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "existantAutre", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "titreProp", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "intervenant", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "intervenantAutre", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "collectif", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "logement", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "priece", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "puissance", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            ((twig_get_attribute($this->env, $this->source, $context["installation"], "createdAt", [], "any", false, false, false, 71)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "createdAt", [], "any", false, false, false, 71), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "createdBy", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            ((twig_get_attribute($this->env, $this->source, $context["installation"], "updatedAt", [], "any", false, false, false, 73)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "updatedAt", [], "any", false, false, false, 73), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["installation"], "updatedBy", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["installation"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["installation"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "            <tr>
                <td colspan=\"30\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['installation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_add");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "installation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 88,  275 => 85,  266 => 81,  257 => 77,  253 => 76,  248 => 74,  244 => 73,  240 => 72,  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  204 => 63,  200 => 62,  196 => 61,  192 => 60,  188 => 59,  184 => 58,  180 => 57,  176 => 56,  172 => 55,  168 => 54,  164 => 53,  160 => 52,  156 => 51,  152 => 50,  148 => 49,  144 => 48,  140 => 47,  136 => 46,  133 => 45,  128 => 44,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Installation index{% endblock %}

{% block body %}
    <h1>Installation index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Etat</th>
                <th>CompteurVoisin</th>
                <th>Compteur</th>
                <th>Abonnement</th>
                <th>Bp</th>
                <th>Adresse</th>
                <th>NomSite</th>
                <th>Lattitude</th>
                <th>Longitude</th>
                <th>DateInstallation</th>
                <th>GrstReseau</th>
                <th>Neuf15</th>
                <th>Existant15</th>
                <th>Neuf25</th>
                <th>Existant25</th>
                <th>NeufAutre</th>
                <th>ExistantAutre</th>
                <th>TitreProp</th>
                <th>Intervenant</th>
                <th>IntervenantAutre</th>
                <th>Collectif</th>
                <th>Logement</th>
                <th>Priece</th>
                <th>Puissance</th>
                <th>Created_at</th>
                <th>Created_by</th>
                <th>Updated_at</th>
                <th>Updated_by</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for installation in installations %}
            <tr>
                <td>{{ installation.id }}</td>
                <td>{{ installation.etat }}</td>
                <td>{{ installation.compteurVoisin }}</td>
                <td>{{ installation.compteur }}</td>
                <td>{{ installation.abonnement }}</td>
                <td>{{ installation.bp }}</td>
                <td>{{ installation.adresse }}</td>
                <td>{{ installation.nomSite }}</td>
                <td>{{ installation.lattitude }}</td>
                <td>{{ installation.longitude }}</td>
                <td>{{ installation.dateInstallation ? installation.dateInstallation|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ installation.grstReseau }}</td>
                <td>{{ installation.neuf15 }}</td>
                <td>{{ installation.existant15 }}</td>
                <td>{{ installation.neuf25 }}</td>
                <td>{{ installation.existant25 }}</td>
                <td>{{ installation.neufAutre }}</td>
                <td>{{ installation.existantAutre }}</td>
                <td>{{ installation.titreProp }}</td>
                <td>{{ installation.intervenant }}</td>
                <td>{{ installation.intervenantAutre }}</td>
                <td>{{ installation.collectif }}</td>
                <td>{{ installation.logement }}</td>
                <td>{{ installation.priece }}</td>
                <td>{{ installation.puissance }}</td>
                <td>{{ installation.createdAt ? installation.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ installation.createdBy }}</td>
                <td>{{ installation.updatedAt ? installation.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ installation.updatedBy }}</td>
                <td>
                    <a href=\"{{ path('app_installation_show', {'id': installation.id}) }}\">show</a>
                    <a href=\"{{ path('app_installation_edit', {'id': installation.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"30\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_installation_add') }}\">Create new</a>
{% endblock %}
", "installation/index.html.twig", "/Applications/MAMP/htdocs/cossuelapp2/kgm-cossuel/templates/installation/index.html.twig");
    }
}
