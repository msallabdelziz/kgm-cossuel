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

/* agent/edit.html.twig */
class __TwigTemplate_42a7ba15c2f858413744d1dd5927fa99 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "agent/edit.html.twig", 1);
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
        echo "    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/agent\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des agents</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Agents</a>
        </header>
        <div class=\"row\">
        ";
        // line 13
        $context["offset"] = "offset-md-3";
        echo "            
        ";
        // line 14
        if (twig_length_filter($this->env, ($context["les_agent"] ?? null))) {
            // line 15
            echo "        ";
            $context["offset"] = "";
            echo "            
            <div class=\"col-5 shadow bg-light card0 me-4 p-3 priority-4\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des agents (";
            // line 19
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["les_agent"] ?? null)), "html", null, true);
            echo ")
                </caption>
                <thead>
                    <tr>
                        <th width=\"20%\" scope=\"col\">Code</th> 
                        <th scope=\"col\">Nom</th> 
                        ";
            // line 26
            echo "                    </tr>
                </thead>
                <tbody>
                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_agent"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
                // line 30
                echo "                        ";
                $context["cur"] = "";
                // line 31
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "id", [], "any", false, false, false, 31) == twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 31))) {
                    // line 32
                    echo "                            ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 33
                    echo "                        ";
                }
                // line 34
                echo "                        <tr class=\"";
                echo twig_escape_filter($this->env, ($context["cur"] ?? null), "html", null, true);
                echo "\">
                            <td scope=\"row\"><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "matricule", [], "any", false, false, false, 35), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "nom", [], "any", false, false, false, 36), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "prenom", [], "any", false, false, false, 36), "html", null, true);
                echo "</a></td>
                            ";
                // line 44
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                </tbody>
                </table>
            </div>
        ";
        }
        // line 50
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, ($context["offset"] ?? null), "html", null, true);
        echo " col-lg-6 mb-2 shadow border border-light card p-3\">

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Edition Agent de ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "nom", [], "any", false, false, false, 55), "html", null, true);
        echo "</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                        ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["agentForm"] ?? null), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["agentForm"] ?? null), "matricule", [], "any", false, false, false, 62), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-5\">
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["agentForm"] ?? null), "nom", [], "any", false, false, false, 65), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-7\">
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["agentForm"] ?? null), "prenom", [], "any", false, false, false, 68), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-12\">
                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["agentForm"] ?? null), "profil", [], "any", false, false, false, 71), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-12\">
                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["agentForm"] ?? null), "adresse", [], "any", false, false, false, 74), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-5\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["agentForm"] ?? null), "telephone", [], "any", false, false, false, 77), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-7\">
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["agentForm"] ?? null), "email", [], "any", false, false, false, 80), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-12\">
                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["agentForm"] ?? null), "photo", [], "any", false, false, false, 83), 'row');
        echo "
                                </div>
                            </div>
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_show", ["id" => twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "id", [], "any", false, false, false, 87)]), "html", null, true);
        echo "\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["agentForm"] ?? null), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "agent/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 90,  218 => 87,  211 => 83,  205 => 80,  199 => 77,  193 => 74,  187 => 71,  181 => 68,  175 => 65,  169 => 62,  163 => 59,  156 => 55,  147 => 50,  141 => 46,  134 => 44,  126 => 36,  120 => 35,  115 => 34,  112 => 33,  109 => 32,  106 => 31,  103 => 30,  99 => 29,  94 => 26,  85 => 19,  77 => 15,  75 => 14,  71 => 13,  65 => 10,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agent/edit.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/agent/edit.html.twig");
    }
}
