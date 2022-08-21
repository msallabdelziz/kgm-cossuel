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

/* utilisateur/new.html.twig */
class __TwigTemplate_9eab6759db5c603d3a52e228f445352c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/new.html.twig", 1);
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
            <a href=\"/utilisateur\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des utilisateurs</span>
            </a>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Utilisateurs</a>
        </header>
        <div class=\"row\">
        ";
        // line 13
        $context["offset"] = "offset-md-3";
        echo "            
        ";
        // line 14
        if (twig_length_filter($this->env, ($context["les_utilisateur"] ?? null))) {
            // line 15
            echo "        ";
            $context["offset"] = "";
            echo "            
            <div class=\"col-5 bg-body shadow bg-light card0 me-4 p-3 priority-4\">
                <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                    Liste des utilisateurs (";
            // line 19
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["les_utilisateur"] ?? null)), "html", null, true);
            echo ")
                </caption>
                <thead>
                    <tr>
                        <th>Type</th> 
                        <th scope=\"col\">Nom</th> 
                        <th scope=\"col\">Prénom</th> 
                        ";
            // line 27
            echo "                    </tr>
                </thead>
                <tbody>
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_utilisateur"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
                // line 31
                echo "                        ";
                $context["cur"] = "";
                // line 32
                echo "                        ";
                if ((array_key_exists("utilisateur", $context) && (twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "id", [], "any", false, false, false, 32) == twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 32)))) {
                    // line 33
                    echo "                            ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 34
                    echo "                        ";
                }
                // line 35
                echo "                        <tr class=\"";
                echo twig_escape_filter($this->env, ($context["cur"] ?? null), "html", null, true);
                echo "\">
                            <td scope=\"row\"><a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "type", [], "any", false, false, false, 36), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "nom", [], "any", false, false, false, 37), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reg"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reg"], "prenom", [], "any", false, false, false, 38), "html", null, true);
                echo "</a></td>
                            ";
                // line 46
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </tbody>
                </table>
            </div>
        ";
        }
        // line 52
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, ($context["offset"] ?? null), "html", null, true);
        echo " col-lg-6 mb-2 shadow border border-light card p-3\">

                <div class=\"container\">
                    <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                        <div class=\"container-fluid\">
                            <span class=\"navbar-brand mb-0 h1\">Ajout Utilisateur</span>
                        </div>
                    </nav>
                    <div class=\"container\">
                            ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["utilisateurForm"] ?? null), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["utilisateurForm"] ?? null), "type", [], "any", false, false, false, 64), 'row');
        echo "
                                </div>
                                <div class=\"col-5\">
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["utilisateurForm"] ?? null), "nom", [], "any", false, false, false, 67), 'row');
        echo "
                                </div>
                                <div class=\"col-7\">
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["utilisateurForm"] ?? null), "prenom", [], "any", false, false, false, 70), 'row');
        echo "
                                </div>
                                <div class=\"col-12\">
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["utilisateurForm"] ?? null), "adresse", [], "any", false, false, false, 73), 'row');
        echo "
                                </div>
                                <div class=\"col-5\">
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["utilisateurForm"] ?? null), "telephone", [], "any", false, false, false, 76), 'row');
        echo "
                                </div>
                                <div class=\"col-7\">
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["utilisateurForm"] ?? null), "email", [], "any", false, false, false, 79), 'row');
        echo "
                                </div>
                                <hr class=\"my-4\" />
                                <div class=\"col-5\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["utilisateurForm"] ?? null), "typePiece", [], "any", false, false, false, 83), 'row');
        echo "
                                </div>
                                <div class=\"col-7\">
                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["utilisateurForm"] ?? null), "numPiece", [], "any", false, false, false, 86), 'row');
        echo "
                                </div>
                                <hr class=\"my-4\" />
                                <div class=\"col-12\">
                                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["utilisateurForm"] ?? null), "type_login", [], "any", false, false, false, 90), 'row');
        echo "
                                </div>
                                <div class=\"col-12\">
                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["utilisateurForm"] ?? null), "plainPassword", [], "any", false, false, false, 93), 'row');
        echo "
                                </div>
                            </div>
                            <div align=\"center\">
                                <a class=\"btn btn-secondary\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        echo "\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-primary btn my-3\">Enregistrer</button>
                            </div>
                        ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["utilisateurForm"] ?? null), 'form_end');
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
        return "utilisateur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 100,  234 => 97,  227 => 93,  221 => 90,  214 => 86,  208 => 83,  201 => 79,  195 => 76,  189 => 73,  183 => 70,  177 => 67,  171 => 64,  165 => 61,  152 => 52,  146 => 48,  139 => 46,  133 => 38,  127 => 37,  121 => 36,  116 => 35,  113 => 34,  110 => 33,  107 => 32,  104 => 31,  100 => 30,  95 => 27,  85 => 19,  77 => 15,  75 => 14,  71 => 13,  65 => 10,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "utilisateur/new.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/utilisateur/new.html.twig");
    }
}
