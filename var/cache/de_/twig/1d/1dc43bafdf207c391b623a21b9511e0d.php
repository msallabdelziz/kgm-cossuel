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

/* dossier/showtime.html.twig */
class __TwigTemplate_1dbae4a579c3524597a72d028b3415ef extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/showtime.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/showtime.html.twig"));

        $this->parent = $this->loadTemplate("base_modal.html.twig", "dossier/showtime.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "COSSUEL";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <style>

#tm ul, #tm li{
  list-style: none;
  padding: 0;
}

#tm .container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 1rem;
}
#tm .wrapper{
}
#tm h1{
  font-size: 1.1rem;
}
#tm .sessions{
  position: relative;
  width:400px;
}
#tm li{
  padding-top:0px;
  padding-bottom: 1.5rem;
  border-left: 1px solid black;
  position: relative;
  padding-left: 25px;
  margin-left: 10px;
}
  #tm li:last-child{
    ";
        // line 38
        echo "  }
  #tm li:before{
    content: '';
    width: 20px;
    height: 20px;
    background: black;
    border: 2px solid orange;
    border-radius: 50%;
    position: absolute;
    left: -10px;
    top: 0px;
  }

#tm .time{
  color: #2a2839;
  font-weight: 500;
  font-size:14px;
  @include mobile-and-up{
    font-size: .9rem;
  }
  @include mobile-only{
    margin-bottom: .3rem;
    font-size: 0.85rem;
  }

}

#tm .delai {
    float: left;
    position:relative; 
    left:-70px;
    top:-20px;
    font-style:italic;
    color:red;
    padding:1px 4px;
    line-height:14px;
    font-size:12px;

}

#tm p{
  color: #4f4f4f;
  font-size:12px;
  margin-top:1px;
  margin-left:4px;
  @include mobile-only{
    font-size: .9rem;
  }
}
    </style>

    ";
        // line 89
        $context["action_demande"] = "Validation";
        // line 90
        echo "    ";
        if (( !array_key_exists("demande", $context) && array_key_exists("dossier", $context))) {
            // line 91
            echo "        ";
            $context["demande"] = twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 91, $this->source); })()), "demande", [], "any", false, false, false, 91);
            // line 92
            echo "    ";
        }
        // line 93
        echo "    ";
        $context["paiement"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 93, $this->source); })()), "paiement", [], "any", false, false, false, 93);
        // line 94
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 94, $this->source); })()), "installation", [], "any", false, false, false, 94);
        // line 95
        echo "    
    <section class=\"\">
         <div class=\"row\">

            <div class=\"mb-2\">
                <div class=\"p-1\" id=\"tm\">
                    <h2 class=\"fs-title\">Historique Demande
                        <a data-bs-dismiss=\"modal\" class=\"float-end next action-button btn btn-sm btn-secondary \">Fermer</a>
                    </h2>
                    <hr />
                    ";
        // line 106
        echo "
                    <div class=\"container\">
                        <div class=\"wrapper\">
                            <ul class=\"sessions\" align=\"left\">
                                <li>
                                    <div class=\"time\">";
        // line 111
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 111, $this->source); })()), "createdAt", [], "any", false, false, false, 111), "d-m-Y à H:i:s"), "html", null, true);
        echo "
                                    </div>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check2"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                        Création de la demande</p>
                                    ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 118, $this->source); })()), "createdBy", [], "any", false, false, false, 118)) {
            // line 119
            echo "                                        <div class=\"float-end fw-light fs-8\">
                                            ";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 120, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 120, $this->source); })()), "createdBy", [], "any", false, false, false, 120)], "method", false, false, false, 120), "nomComplet", [], "any", false, false, false, 120), "html", null, true);
            echo "
                                            <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                <use xlink:href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person"), "html", null, true);
            echo "\"></use>
                                            </svg>
                                        </div>
                                        <div class=\"clear mb-2\"></div>
                                    ";
        }
        // line 127
        echo "                                </li>
                                <li>
                                    <div class=\"time\">";
        // line 129
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 129, $this->source); })()), "dateCreation", [], "any", false, false, false, 129), "d-m-Y à H:i:s"), "html", null, true);
        echo "</div>
                                    <p class=\"delai\" >";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 130, $this->source); })()), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 130, $this->source); })()), "createdAt", [], "any", false, false, false, 130), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 130, $this->source); })()), "dateCreation", [], "any", false, false, false, 130), "d-m-Y")], "method", false, false, false, 130), "html", null, true);
        echo " j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check2"), "html", null, true);
        echo "\"></use>
                                        </svg>
                                        Soumission de la demande</p>
                                        ";
        // line 136
        if (twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 136, $this->source); })()), "createdBy", [], "any", false, false, false, 136)) {
            // line 137
            echo "                                            <div class=\"float-end fw-light fs-8\">
                                                ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 138, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 138, $this->source); })()), "createdBy", [], "any", false, false, false, 138)], "method", false, false, false, 138), "nomComplet", [], "any", false, false, false, 138), "html", null, true);
            echo "
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                    <use xlink:href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person"), "html", null, true);
            echo "\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"clear mb-2\"></div>
                                        ";
        }
        // line 145
        echo "                                </li>
                                ";
        // line 146
        if ((array_key_exists("paiement", $context) &&  !(null === (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 146, $this->source); })())))) {
            // line 147
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 147, $this->source); })()), "dateSaisie", [], "any", false, false, false, 147)) {
                // line 148
                echo "                                <li>
                                    <div class=\"time\">";
                // line 149
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 149, $this->source); })()), "dateSaisie", [], "any", false, false, false, 149), "d-m-Y à H:i:s"), "html", null, true);
                echo "</div>
                                    <p class=\"delai\" >";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 150, $this->source); })()), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 150, $this->source); })()), "dateCreation", [], "any", false, false, false, 150), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 150, $this->source); })()), "dateSaisie", [], "any", false, false, false, 150), "d-m-Y")], "method", false, false, false, 150), "html", null, true);
                echo " j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check2"), "html", null, true);
                echo "\"></use>
                                        </svg>
                                        Enregistrement du Paiement de la demande</p>
                                        ";
                // line 156
                if (twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 156, $this->source); })()), "createdBy", [], "any", false, false, false, 156)) {
                    // line 157
                    echo "                                            <div class=\"float-end fw-light fs-8\">
                                                ";
                    // line 158
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 158, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 158, $this->source); })()), "createdBy", [], "any", false, false, false, 158)], "method", false, false, false, 158), "nomComplet", [], "any", false, false, false, 158), "html", null, true);
                    echo "
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                    <use xlink:href=\"";
                    // line 160
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person"), "html", null, true);
                    echo "\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"clear mb-2\"></div>
                                        ";
                }
                // line 165
                echo "                                </li>
                                ";
            }
            // line 167
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 167, $this->source); })()), "datePaiement", [], "any", false, false, false, 167)) {
                // line 168
                echo "                                <li>
                                    <div class=\"time\">";
                // line 169
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 169, $this->source); })()), "datePaiement", [], "any", false, false, false, 169), "d-m-Y à H:i:s"), "html", null, true);
                echo "</div>
                                    <p class=\"delai\" >";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 170, $this->source); })()), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 170, $this->source); })()), "dateSaisie", [], "any", false, false, false, 170), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 170, $this->source); })()), "datePaiement", [], "any", false, false, false, 170), "d-m-Y")], "method", false, false, false, 170), "html", null, true);
                echo " j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"";
                // line 173
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check2"), "html", null, true);
                echo "\"></use>
                                        </svg>
                                        Validation du Paiement de la demande</p>
                                        ";
                // line 176
                if (twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 176, $this->source); })()), "createdBy", [], "any", false, false, false, 176)) {
                    // line 177
                    echo "                                            <div class=\"float-end fw-light fs-8\">
                                                ";
                    // line 178
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 178, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 178, $this->source); })()), "createdBy", [], "any", false, false, false, 178)], "method", false, false, false, 178), "nomComplet", [], "any", false, false, false, 178), "html", null, true);
                    echo "
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                    <use xlink:href=\"";
                    // line 180
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person"), "html", null, true);
                    echo "\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"clear mb-2\"></div>
                                        ";
                }
                // line 185
                echo "                                </li>
                                ";
            }
            // line 187
            echo "                                ";
        }
        // line 188
        echo "                                ";
        if (array_key_exists("dossier", $context)) {
            // line 189
            echo "                                <li>
                                    <div class=\"time\">";
            // line 190
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 190, $this->source); })()), "dateCreation", [], "any", false, false, false, 190), "d-m-Y à H:i:s"), "html", null, true);
            echo "</div>
                                    <p class=\"delai\" >";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 191, $this->source); })()), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 191, $this->source); })()), "dateSaisie", [], "any", false, false, false, 191), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 191, $this->source); })()), "dateCreation", [], "any", false, false, false, 191), "d-m-Y")], "method", false, false, false, 191), "html", null, true);
            echo " j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check2"), "html", null, true);
            echo "\"></use>
                                        </svg>
                                        Création du dossier et affectation</p>
                                        ";
            // line 197
            if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 197, $this->source); })()), "createdBy", [], "any", false, false, false, 197)) {
                // line 198
                echo "                                            <div class=\"float-end fw-light fs-8\">
                                                ";
                // line 199
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 199, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 199, $this->source); })()), "createdBy", [], "any", false, false, false, 199)], "method", false, false, false, 199), "nomComplet", [], "any", false, false, false, 199), "html", null, true);
                echo "
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                    <use xlink:href=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person"), "html", null, true);
                echo "\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"clear mb-2\"></div>
                                        ";
            }
            // line 206
            echo "                                </li>
                                ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 207, $this->source); })()), "visites", [], "any", false, false, false, 207));
            foreach ($context['_seq'] as $context["_key"] => $context["vv"]) {
                // line 208
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["vv"], "id", [], "any", false, false, false, 208) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 208, $this->source); })()), "visiteCourante", [], "any", false, false, false, 208), "id", [], "any", false, false, false, 208))) {
                    // line 209
                    echo "                                    <li>
                                        <div class=\"time\">";
                    // line 210
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vv"], "createdAt", [], "any", false, false, false, 210), "d-m-Y à H:i:s"), "html", null, true);
                    echo "</div>
                                        <p class=\"delai\" >";
                    // line 211
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 211, $this->source); })()), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 211, $this->source); })()), "dateCreation", [], "any", false, false, false, 211), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vv"], "createdAt", [], "any", false, false, false, 211), "d-m-Y")], "method", false, false, false, 211), "html", null, true);
                    echo " j</p>
                                        <p class=\"fw-light fs-7\">
                                            <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                                <use xlink:href=\"";
                    // line 214
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check2"), "html", null, true);
                    echo "\"></use>
                                            </svg>
                                            Planification inspection installation <font style=\"font-size:11px; color:green\">(";
                    // line 216
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vv"], "datePlanifie", [], "any", false, false, false, 216), "d/m/Y"), "html", null, true);
                    echo ")</font> <br /><span style=\"font-size:11px; color:red\">[Reporté]</span>
                                            <span style=\"font-size:11px; font-style:italic; color:#900\">";
                    // line 217
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vv"], "commentaire", [], "any", false, false, false, 217), "html", null, true);
                    echo "</span>
                                            </p>
                                            ";
                    // line 219
                    if (twig_get_attribute($this->env, $this->source, $context["vv"], "createdBy", [], "any", false, false, false, 219)) {
                        // line 220
                        echo "                                                <div class=\"float-end fw-light fs-8\">
                                                    ";
                        // line 221
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 221, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, $context["vv"], "createdBy", [], "any", false, false, false, 221)], "method", false, false, false, 221), "nomComplet", [], "any", false, false, false, 221), "html", null, true);
                        echo "
                                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                        <use xlink:href=\"";
                        // line 223
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person"), "html", null, true);
                        echo "\"></use>
                                                    </svg>
                                                </div>
                                                <div class=\"clear mb-2\"></div>
                                            ";
                    }
                    // line 228
                    echo "                                    </li>
                                    ";
                }
                // line 230
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "
                                ";
            // line 232
            if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 232, $this->source); })()), "visiteCourante", [], "any", false, false, false, 232)) {
                // line 233
                echo "                                <li>
                                    <div class=\"time\">";
                // line 234
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 234, $this->source); })()), "visiteCourante", [], "any", false, false, false, 234), "createdAt", [], "any", false, false, false, 234), "d-m-Y à H:i:s"), "html", null, true);
                echo "</div>
                                    <p class=\"delai\" >";
                // line 235
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 235, $this->source); })()), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 235, $this->source); })()), "dateCreation", [], "any", false, false, false, 235), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 235, $this->source); })()), "visiteCourante", [], "any", false, false, false, 235), "createdAt", [], "any", false, false, false, 235), "d-m-Y")], "method", false, false, false, 235), "html", null, true);
                echo " j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check2"), "html", null, true);
                echo "\"></use>
                                        </svg>
                                        Planification inspection installation  <span style=\"font-size:11px; color:green\">(";
                // line 240
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 240, $this->source); })()), "visiteCourante", [], "any", false, false, false, 240), "datePlanifie", [], "any", false, false, false, 240), "d/m/Y"), "html", null, true);
                echo ")</span></p>
                                        ";
                // line 241
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 241, $this->source); })()), "visiteCourante", [], "any", false, false, false, 241), "createdBy", [], "any", false, false, false, 241)) {
                    // line 242
                    echo "                                            <div class=\"float-end fw-light fs-8\">
                                                ";
                    // line 243
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 243, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 243, $this->source); })()), "visiteCourante", [], "any", false, false, false, 243), "createdBy", [], "any", false, false, false, 243)], "method", false, false, false, 243), "nomComplet", [], "any", false, false, false, 243), "html", null, true);
                    echo "
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                    <use xlink:href=\"";
                    // line 245
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person"), "html", null, true);
                    echo "\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"clear mb-2\"></div>
                                        ";
                }
                // line 250
                echo "                                </li>
                                ";
                // line 251
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 251, $this->source); })()), "visiteCourante", [], "any", false, false, false, 251), "dateRealise", [], "any", false, false, false, 251)) {
                    // line 252
                    echo "                                <li>
                                    <div class=\"time\">";
                    // line 253
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 253, $this->source); })()), "visiteCourante", [], "any", false, false, false, 253), "dateRealise", [], "any", false, false, false, 253), "d-m-Y à H:i:s"), "html", null, true);
                    echo "</div>
                                    <p class=\"delai\" >";
                    // line 254
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 254, $this->source); })()), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 254, $this->source); })()), "visiteCourante", [], "any", false, false, false, 254), "datePlanifie", [], "any", false, false, false, 254), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 254, $this->source); })()), "visiteCourante", [], "any", false, false, false, 254), "dateRealise", [], "any", false, false, false, 254), "d-m-Y")], "method", false, false, false, 254), "html", null, true);
                    echo " j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"";
                    // line 257
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check2"), "html", null, true);
                    echo "\"></use>
                                        </svg>
                                        Réalisation de l'inspection de l'installation</p>
                                        ";
                    // line 260
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 260, $this->source); })()), "visiteCourante", [], "any", false, false, false, 260), "createdBy", [], "any", false, false, false, 260)) {
                        // line 261
                        echo "                                            <div class=\"float-end fw-light fs-8\">
                                                ";
                        // line 262
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 262, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 262, $this->source); })()), "visiteCourante", [], "any", false, false, false, 262), "createdBy", [], "any", false, false, false, 262)], "method", false, false, false, 262), "nomComplet", [], "any", false, false, false, 262), "html", null, true);
                        echo "
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                    <use xlink:href=\"";
                        // line 264
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person"), "html", null, true);
                        echo "\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"clear mb-2\"></div>
                                        ";
                    }
                    // line 269
                    echo "                                </li>
                                ";
                }
                // line 271
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 271, $this->source); })()), "visiteCourante", [], "any", false, false, false, 271), "dateRapporte", [], "any", false, false, false, 271)) {
                    // line 272
                    echo "                                <li>
                                    <div class=\"time\">";
                    // line 273
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 273, $this->source); })()), "visiteCourante", [], "any", false, false, false, 273), "dateRapporte", [], "any", false, false, false, 273), "d-m-Y à H:i:s"), "html", null, true);
                    echo "</div>
                                    <p class=\"delai\" >";
                    // line 274
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 274, $this->source); })()), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 274, $this->source); })()), "visiteCourante", [], "any", false, false, false, 274), "dateRealise", [], "any", false, false, false, 274), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 274, $this->source); })()), "visiteCourante", [], "any", false, false, false, 274), "dateRapporte", [], "any", false, false, false, 274), "d-m-Y")], "method", false, false, false, 274), "html", null, true);
                    echo " j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"";
                    // line 277
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check2"), "html", null, true);
                    echo "\"></use>
                                        </svg>
                                        Elaboration du rapport de l'inspection</p>
                                        ";
                    // line 280
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 280, $this->source); })()), "visiteCourante", [], "any", false, false, false, 280), "createdBy", [], "any", false, false, false, 280)) {
                        // line 281
                        echo "                                            <div class=\"float-end fw-light fs-8\">
                                                ";
                        // line 282
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 282, $this->source); })()), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 282, $this->source); })()), "visiteCourante", [], "any", false, false, false, 282), "createdBy", [], "any", false, false, false, 282)], "method", false, false, false, 282), "nomComplet", [], "any", false, false, false, 282), "html", null, true);
                        echo "
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                    <use xlink:href=\"";
                        // line 284
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#person"), "html", null, true);
                        echo "\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"clear mb-2\"></div>
                                        ";
                    }
                    // line 289
                    echo "                                </li>
                                ";
                }
                // line 291
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 291, $this->source); })()), "visiteCourante", [], "any", false, false, false, 291), "dateAtteste", [], "any", false, false, false, 291)) {
                    // line 292
                    echo "                                <li>
                                    <div class=\"time\">";
                    // line 293
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 293, $this->source); })()), "visiteCourante", [], "any", false, false, false, 293), "dateAtteste", [], "any", false, false, false, 293), "d-m-Y à H:i:s"), "html", null, true);
                    echo "</div>
                                    <p class=\"delai\" >";
                    // line 294
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 294, $this->source); })()), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 294, $this->source); })()), "visiteCourante", [], "any", false, false, false, 294), "dateRapporte", [], "any", false, false, false, 294), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 294, $this->source); })()), "visiteCourante", [], "any", false, false, false, 294), "dateAtteste", [], "any", false, false, false, 294), "d-m-Y")], "method", false, false, false, 294), "html", null, true);
                    echo " j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"";
                    // line 297
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#check2"), "html", null, true);
                    echo "\"></use>
                                        </svg>
                                        Attestation et Cloture de la demande</p>
                                </li>
                                ";
                }
                // line 302
                echo "                                ";
            }
            // line 303
            echo "                                ";
        }
        // line 304
        echo "                            </ul>
                        </div>
                    </div>                     

                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 314
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 315
        echo "<script>
    \$(document).ready(function() {
            
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dossier/showtime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  674 => 315,  664 => 314,  646 => 304,  643 => 303,  640 => 302,  632 => 297,  626 => 294,  622 => 293,  619 => 292,  616 => 291,  612 => 289,  604 => 284,  599 => 282,  596 => 281,  594 => 280,  588 => 277,  582 => 274,  578 => 273,  575 => 272,  572 => 271,  568 => 269,  560 => 264,  555 => 262,  552 => 261,  550 => 260,  544 => 257,  538 => 254,  534 => 253,  531 => 252,  529 => 251,  526 => 250,  518 => 245,  513 => 243,  510 => 242,  508 => 241,  504 => 240,  499 => 238,  493 => 235,  489 => 234,  486 => 233,  484 => 232,  481 => 231,  475 => 230,  471 => 228,  463 => 223,  458 => 221,  455 => 220,  453 => 219,  448 => 217,  444 => 216,  439 => 214,  433 => 211,  429 => 210,  426 => 209,  423 => 208,  419 => 207,  416 => 206,  408 => 201,  403 => 199,  400 => 198,  398 => 197,  392 => 194,  386 => 191,  382 => 190,  379 => 189,  376 => 188,  373 => 187,  369 => 185,  361 => 180,  356 => 178,  353 => 177,  351 => 176,  345 => 173,  339 => 170,  335 => 169,  332 => 168,  329 => 167,  325 => 165,  317 => 160,  312 => 158,  309 => 157,  307 => 156,  301 => 153,  295 => 150,  291 => 149,  288 => 148,  285 => 147,  283 => 146,  280 => 145,  272 => 140,  267 => 138,  264 => 137,  262 => 136,  256 => 133,  250 => 130,  246 => 129,  242 => 127,  234 => 122,  229 => 120,  226 => 119,  224 => 118,  218 => 115,  211 => 111,  204 => 106,  192 => 95,  189 => 94,  186 => 93,  183 => 92,  180 => 91,  177 => 90,  175 => 89,  122 => 38,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_modal.html.twig' %}

{% block title %}COSSUEL{% endblock %}
{% block body %}
    <style>

#tm ul, #tm li{
  list-style: none;
  padding: 0;
}

#tm .container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 1rem;
}
#tm .wrapper{
}
#tm h1{
  font-size: 1.1rem;
}
#tm .sessions{
  position: relative;
  width:400px;
}
#tm li{
  padding-top:0px;
  padding-bottom: 1.5rem;
  border-left: 1px solid black;
  position: relative;
  padding-left: 25px;
  margin-left: 10px;
}
  #tm li:last-child{
    {# border: 0px;
    padding-bottom: 0; #}
  }
  #tm li:before{
    content: '';
    width: 20px;
    height: 20px;
    background: black;
    border: 2px solid orange;
    border-radius: 50%;
    position: absolute;
    left: -10px;
    top: 0px;
  }

#tm .time{
  color: #2a2839;
  font-weight: 500;
  font-size:14px;
  @include mobile-and-up{
    font-size: .9rem;
  }
  @include mobile-only{
    margin-bottom: .3rem;
    font-size: 0.85rem;
  }

}

#tm .delai {
    float: left;
    position:relative; 
    left:-70px;
    top:-20px;
    font-style:italic;
    color:red;
    padding:1px 4px;
    line-height:14px;
    font-size:12px;

}

#tm p{
  color: #4f4f4f;
  font-size:12px;
  margin-top:1px;
  margin-left:4px;
  @include mobile-only{
    font-size: .9rem;
  }
}
    </style>

    {% set action_demande = \"Validation\" %}
    {% if demande is not defined and dossier is defined %}
        {% set demande = dossier.demande %}
    {% endif %}
    {% set paiement = demande.paiement %}
    {% set installation = demande.installation %}
    
    <section class=\"\">
         <div class=\"row\">

            <div class=\"mb-2\">
                <div class=\"p-1\" id=\"tm\">
                    <h2 class=\"fs-title\">Historique Demande
                        <a data-bs-dismiss=\"modal\" class=\"float-end next action-button btn btn-sm btn-secondary \">Fermer</a>
                    </h2>
                    <hr />
                    {# TIMELINE #}

                    <div class=\"container\">
                        <div class=\"wrapper\">
                            <ul class=\"sessions\" align=\"left\">
                                <li>
                                    <div class=\"time\">{{ demande.createdAt | date('d-m-Y à H:i:s') }}
                                    </div>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check2') }}\"></use>
                                        </svg>
                                        Création de la demande</p>
                                    {% if demande.createdBy %}
                                        <div class=\"float-end fw-light fs-8\">
                                            {{ tools.getUtilisateur(demande.createdBy).nomComplet}}
                                            <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person') }}\"></use>
                                            </svg>
                                        </div>
                                        <div class=\"clear mb-2\"></div>
                                    {% endif %}
                                </li>
                                <li>
                                    <div class=\"time\">{{ demande.dateCreation | date('d-m-Y à H:i:s') }}</div>
                                    <p class=\"delai\" >{{ tools.nbjours_entre((demande.createdAt | date('d-m-Y')), (demande.dateCreation | date('d-m-Y'))) }} j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check2') }}\"></use>
                                        </svg>
                                        Soumission de la demande</p>
                                        {% if demande.createdBy %}
                                            <div class=\"float-end fw-light fs-8\">
                                                {{ tools.getUtilisateur(demande.createdBy).nomComplet}}
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person') }}\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"clear mb-2\"></div>
                                        {% endif %}
                                </li>
                                {% if paiement is defined and paiement is not null %}
                                {% if paiement.dateSaisie %}
                                <li>
                                    <div class=\"time\">{{ paiement.dateSaisie | date('d-m-Y à H:i:s') }}</div>
                                    <p class=\"delai\" >{{ tools.nbjours_entre((demande.dateCreation | date('d-m-Y')), (paiement.dateSaisie | date('d-m-Y'))) }} j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check2') }}\"></use>
                                        </svg>
                                        Enregistrement du Paiement de la demande</p>
                                        {% if paiement.createdBy %}
                                            <div class=\"float-end fw-light fs-8\">
                                                {{ tools.getUtilisateur(paiement.createdBy).nomComplet}}
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person') }}\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"clear mb-2\"></div>
                                        {% endif %}
                                </li>
                                {% endif %}
                                {% if paiement.datePaiement %}
                                <li>
                                    <div class=\"time\">{{ paiement.datePaiement | date('d-m-Y à H:i:s') }}</div>
                                    <p class=\"delai\" >{{ tools.nbjours_entre((paiement.dateSaisie | date('d-m-Y')), (paiement.datePaiement | date('d-m-Y'))) }} j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check2') }}\"></use>
                                        </svg>
                                        Validation du Paiement de la demande</p>
                                        {% if paiement.createdBy %}
                                            <div class=\"float-end fw-light fs-8\">
                                                {{ tools.getUtilisateur(paiement.createdBy).nomComplet}}
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person') }}\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"clear mb-2\"></div>
                                        {% endif %}
                                </li>
                                {% endif %}
                                {% endif %}
                                {% if dossier is defined %}
                                <li>
                                    <div class=\"time\">{{ dossier.dateCreation | date('d-m-Y à H:i:s') }}</div>
                                    <p class=\"delai\" >{{ tools.nbjours_entre((paiement.dateSaisie | date('d-m-Y')), (dossier.dateCreation | date('d-m-Y'))) }} j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check2') }}\"></use>
                                        </svg>
                                        Création du dossier et affectation</p>
                                        {% if dossier.createdBy %}
                                            <div class=\"float-end fw-light fs-8\">
                                                {{ tools.getUtilisateur(dossier.createdBy).nomComplet}}
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person') }}\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"clear mb-2\"></div>
                                        {% endif %}
                                </li>
                                {% for vv in dossier.visites %}
                                    {% if vv.id != dossier.visiteCourante.id %}
                                    <li>
                                        <div class=\"time\">{{ vv.createdAt | date('d-m-Y à H:i:s') }}</div>
                                        <p class=\"delai\" >{{ tools.nbjours_entre((dossier.dateCreation | date('d-m-Y')), (vv.createdAt | date('d-m-Y'))) }} j</p>
                                        <p class=\"fw-light fs-7\">
                                            <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                                <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check2') }}\"></use>
                                            </svg>
                                            Planification inspection installation <font style=\"font-size:11px; color:green\">({{vv.datePlanifie|date('d/m/Y')}})</font> <br /><span style=\"font-size:11px; color:red\">[Reporté]</span>
                                            <span style=\"font-size:11px; font-style:italic; color:#900\">{{vv.commentaire}}</span>
                                            </p>
                                            {% if vv.createdBy %}
                                                <div class=\"float-end fw-light fs-8\">
                                                    {{ tools.getUtilisateur(vv.createdBy).nomComplet}}
                                                    <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                        <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person') }}\"></use>
                                                    </svg>
                                                </div>
                                                <div class=\"clear mb-2\"></div>
                                            {% endif %}
                                    </li>
                                    {% endif %}
                                {% endfor %}

                                {% if dossier.visiteCourante %}
                                <li>
                                    <div class=\"time\">{{ dossier.visiteCourante.createdAt | date('d-m-Y à H:i:s') }}</div>
                                    <p class=\"delai\" >{{ tools.nbjours_entre((dossier.dateCreation | date('d-m-Y')), (dossier.visiteCourante.createdAt | date('d-m-Y'))) }} j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check2') }}\"></use>
                                        </svg>
                                        Planification inspection installation  <span style=\"font-size:11px; color:green\">({{dossier.visiteCourante.datePlanifie|date('d/m/Y')}})</span></p>
                                        {% if dossier.visiteCourante.createdBy %}
                                            <div class=\"float-end fw-light fs-8\">
                                                {{ tools.getUtilisateur(dossier.visiteCourante.createdBy).nomComplet}}
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person') }}\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"clear mb-2\"></div>
                                        {% endif %}
                                </li>
                                {% if dossier.visiteCourante.dateRealise %}
                                <li>
                                    <div class=\"time\">{{ dossier.visiteCourante.dateRealise | date('d-m-Y à H:i:s') }}</div>
                                    <p class=\"delai\" >{{ tools.nbjours_entre((dossier.visiteCourante.datePlanifie | date('d-m-Y')), (dossier.visiteCourante.dateRealise | date('d-m-Y'))) }} j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check2') }}\"></use>
                                        </svg>
                                        Réalisation de l'inspection de l'installation</p>
                                        {% if dossier.visiteCourante.createdBy %}
                                            <div class=\"float-end fw-light fs-8\">
                                                {{ tools.getUtilisateur(dossier.visiteCourante.createdBy).nomComplet}}
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person') }}\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"clear mb-2\"></div>
                                        {% endif %}
                                </li>
                                {% endif %}
                                {% if dossier.visiteCourante.dateRapporte %}
                                <li>
                                    <div class=\"time\">{{ dossier.visiteCourante.dateRapporte | date('d-m-Y à H:i:s') }}</div>
                                    <p class=\"delai\" >{{ tools.nbjours_entre((dossier.visiteCourante.dateRealise | date('d-m-Y')), (dossier.visiteCourante.dateRapporte | date('d-m-Y'))) }} j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check2') }}\"></use>
                                        </svg>
                                        Elaboration du rapport de l'inspection</p>
                                        {% if dossier.visiteCourante.createdBy %}
                                            <div class=\"float-end fw-light fs-8\">
                                                {{ tools.getUtilisateur(dossier.visiteCourante.createdBy).nomComplet}}
                                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"green\">
                                                    <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#person') }}\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"clear mb-2\"></div>
                                        {% endif %}
                                </li>
                                {% endif %}
                                {% if dossier.visiteCourante.dateAtteste %}
                                <li>
                                    <div class=\"time\">{{ dossier.visiteCourante.dateAtteste | date('d-m-Y à H:i:s') }}</div>
                                    <p class=\"delai\" >{{ tools.nbjours_entre((dossier.visiteCourante.dateRapporte | date('d-m-Y')), (dossier.visiteCourante.dateAtteste | date('d-m-Y'))) }} j</p>
                                    <p class=\"fw-light fs-7\">
                                        <svg class=\"bi\" width=\"24\" height=\"24\" fill=\"black\">
                                            <use xlink:href=\"{{ asset('assets/img/bootstrap-icons.svg#check2') }}\"></use>
                                        </svg>
                                        Attestation et Cloture de la demande</p>
                                </li>
                                {% endif %}
                                {% endif %}
                                {% endif %}
                            </ul>
                        </div>
                    </div>                     

                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
<script>
    \$(document).ready(function() {
            
    });
</script>
{% endblock %}
", "dossier/showtime.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/showtime.html.twig");
    }
}
