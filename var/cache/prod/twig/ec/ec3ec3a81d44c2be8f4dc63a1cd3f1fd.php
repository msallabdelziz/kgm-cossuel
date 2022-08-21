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

/* proprietaire/edit.html.twig */
class __TwigTemplate_72891f6d98cfd725aaac66d3bc5fe770 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "proprietaire/edit.html.twig", 1);
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
        echo "    <div class=\"row-fluid\">
        <ul class=\"nav nav-pills mb-4 pb-2 border-bottom border-dark\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_index");
        echo "\">Electriciens installateurs</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Propriétaires d'installation</a>
            </li>
        </ul>
    </div>
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/proprietaire\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des propriétaires</span>
            </a>
            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Propriétaires</a>
        </header>
        <div class=\"row\">
        ";
        // line 23
        $context["offset"] = "offset-md-3";
        echo "            
        ";
        // line 24
        if (twig_length_filter($this->env, ($context["les_proprietaire"] ?? null))) {
            // line 25
            echo "        ";
            $context["offset"] = "";
            echo "            
            <div class=\"col-5 bg-body shadow bg-light card0 me-4 p-3 priority-4\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des propriétaires (";
            // line 29
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["les_proprietaire"] ?? null)), "html", null, true);
            echo ")
                </caption>
                <thead>
                    <tr>
                        <th>Téléphone</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\">Prénom</th> 
                        ";
            // line 37
            echo "                    </tr>
                </thead>
                <tbody>
                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_proprietaire"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
                // line 41
                echo "                        ";
                $context["cur"] = "";
                // line 42
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["proprietaire"] ?? null), "id", [], "any", false, false, false, 42) == twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 42))) {
                    // line 43
                    echo "                            ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 44
                    echo "                        ";
                }
                // line 45
                echo "                        <tr class=\"";
                echo twig_escape_filter($this->env, ($context["cur"] ?? null), "html", null, true);
                echo "\">
                            <td scope=\"row\"><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "telephone", [], "any", false, false, false, 46), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "nom", [], "any", false, false, false, 47), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "prenom", [], "any", false, false, false, 48), "html", null, true);
                echo "</a></td>
                            ";
                // line 56
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                </tbody>
                </table>
            </div>
        ";
        }
        // line 62
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, ($context["offset"] ?? null), "html", null, true);
        echo " col-lg-6 mb-2 shadow border border-light card p-3\">

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Edition Proprietaire</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                            ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["proprietaireForm"] ?? null), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col-5\">
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["proprietaireForm"] ?? null), "nom", [], "any", false, false, false, 74), 'row');
        echo "
                                </div>
                                <div class=\"col-7\">
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["proprietaireForm"] ?? null), "prenom", [], "any", false, false, false, 77), 'row');
        echo "
                                </div>
                                <div class=\"col-5\">
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["proprietaireForm"] ?? null), "localite", [], "any", false, false, false, 80), 'row');
        echo "
                                </div>
                                <div class=\"col-7\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["proprietaireForm"] ?? null), "adresse", [], "any", false, false, false, 83), 'row');
        echo "
                                </div>
                                <div class=\"col-5\">
                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["proprietaireForm"] ?? null), "telephone", [], "any", false, false, false, 86), 'row');
        echo "
                                </div>
                                <div class=\"col-7\">
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["proprietaireForm"] ?? null), "email", [], "any", false, false, false, 89), 'row');
        echo "
                                </div>
                                <div class=\"col-5\">
                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["proprietaireForm"] ?? null), "typePiece", [], "any", false, false, false, 92), 'row');
        echo "
                                </div>
                                <div class=\"col-7\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["proprietaireForm"] ?? null), "numPiece", [], "any", false, false, false, 95), 'row');
        echo "
                                </div>
                            </div>
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_index");
        echo "\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["proprietaireForm"] ?? null), 'form_end');
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
        return "proprietaire/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 102,  233 => 99,  226 => 95,  220 => 92,  214 => 89,  208 => 86,  202 => 83,  196 => 80,  190 => 77,  184 => 74,  178 => 71,  165 => 62,  159 => 58,  152 => 56,  146 => 48,  140 => 47,  134 => 46,  129 => 45,  126 => 44,  123 => 43,  120 => 42,  117 => 41,  113 => 40,  108 => 37,  98 => 29,  90 => 25,  88 => 24,  84 => 23,  78 => 20,  63 => 8,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "proprietaire/edit.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/proprietaire/edit.html.twig");
    }
}
