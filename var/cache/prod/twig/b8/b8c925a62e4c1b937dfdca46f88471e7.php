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

/* region/add.html.twig */
class __TwigTemplate_090319dd4918f03139cd00e703a1c69b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "region/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "COSSUEL";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/region\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des régions</span>
            </a>
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Régions</a>
        </header>
        <div class=\"row\">
        ";
        // line 14
        if (twig_length_filter($this->env, ($context["les_region"] ?? null))) {
            // line 15
            echo "            <div class=\"col-lg-5 mb-2 shadow bg-light card0 me-4 p-3 priority-4\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des régions (";
            // line 18
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["les_region"] ?? null)), "html", null, true);
            echo ")
                </caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Code</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\" width=\"1%\" align=\"center\">Départements</th> 
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_region"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
                // line 29
                echo "                        ";
                $context["cur"] = "";
                // line 30
                echo "                        <tr class=\"";
                echo twig_escape_filter($this->env, ($context["cur"] ?? null), "html", null, true);
                echo "\">
                            <td scope=\"row\"><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "code", [], "any", false, false, false, 31), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "nom", [], "any", false, false, false, 32), "html", null, true);
                echo "</a></td>
                            <td align=\"center\">
                            ";
                // line 34
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reg"], "departement", [], "any", false, false, false, 34), "count", [], "any", false, false, false, 34) > 0)) {
                    // line 35
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                    echo "\" class=\"badge bg-success text-decoration-none text-light rounded-pill fw-normal\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reg"], "departement", [], "any", false, false, false, 35), "count", [], "any", false, false, false, 35), "html", null, true);
                    echo "</a>
                            ";
                } else {
                    // line 37
                    echo "                                <code class=\"text-danger text-opacity-50\">-</code>
                            ";
                }
                // line 39
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                </tbody>
                </table>
            </div>
        ";
        }
        // line 46
        echo "            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Ajout de région</span>
                    </div>
                </nav>
                <div class=\"container\">
                    ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["regionForm"] ?? null), 'form_start');
        echo "
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["regionForm"] ?? null), "code", [], "any", false, false, false, 54), 'row');
        echo "
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["regionForm"] ?? null), "nom", [], "any", false, false, false, 55), 'row');
        echo "
                        <div align=\"center\">
                            <a type=\"button\" class=\"btn btn-secondary\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_index");
        echo "\">Annuler</a>
                            <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                        </div>
                    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["regionForm"] ?? null), 'form_end');
        echo "            
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "region/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 60,  167 => 57,  162 => 55,  158 => 54,  154 => 53,  145 => 46,  139 => 42,  131 => 39,  127 => 37,  119 => 35,  117 => 34,  110 => 32,  104 => 31,  99 => 30,  96 => 29,  92 => 28,  79 => 18,  74 => 15,  72 => 14,  66 => 11,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "region/add.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/region/add.html.twig");
    }
}
