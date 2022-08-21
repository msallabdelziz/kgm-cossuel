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
class __TwigTemplate_3eabec50bc0b0b2593f7dcbf266f9bea extends Template
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
        $this->parent = $this->loadTemplate("base_modal.html.twig", "dossier/showtime.html.twig", 1);
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
            $context["demande"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "demande", [], "any", false, false, false, 91);
            // line 92
            echo "    ";
        }
        // line 93
        echo "    ";
        $context["paiement"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "paiement", [], "any", false, false, false, 93);
        // line 94
        echo "    ";
        $context["installation"] = twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "installation", [], "any", false, false, false, 94);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "createdAt", [], "any", false, false, false, 111), "d-m-Y à H:i:s"), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "createdBy", [], "any", false, false, false, 118)) {
            // line 119
            echo "                                        <div class=\"float-end fw-light fs-8\">
                                            ";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "createdBy", [], "any", false, false, false, 120)], "method", false, false, false, 120), "nomComplet", [], "any", false, false, false, 120), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "dateCreation", [], "any", false, false, false, 129), "d-m-Y à H:i:s"), "html", null, true);
        echo "</div>
                                    <p class=\"delai\" >";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "createdAt", [], "any", false, false, false, 130), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "dateCreation", [], "any", false, false, false, 130), "d-m-Y")], "method", false, false, false, 130), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "createdBy", [], "any", false, false, false, 136)) {
            // line 137
            echo "                                            <div class=\"float-end fw-light fs-8\">
                                                ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "createdBy", [], "any", false, false, false, 138)], "method", false, false, false, 138), "nomComplet", [], "any", false, false, false, 138), "html", null, true);
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
        if ((array_key_exists("paiement", $context) &&  !(null === ($context["paiement"] ?? null)))) {
            // line 147
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "dateSaisie", [], "any", false, false, false, 147)) {
                // line 148
                echo "                                <li>
                                    <div class=\"time\">";
                // line 149
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "dateSaisie", [], "any", false, false, false, 149), "d-m-Y à H:i:s"), "html", null, true);
                echo "</div>
                                    <p class=\"delai\" >";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demande"] ?? null), "dateCreation", [], "any", false, false, false, 150), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "dateSaisie", [], "any", false, false, false, 150), "d-m-Y")], "method", false, false, false, 150), "html", null, true);
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
                if (twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "createdBy", [], "any", false, false, false, 156)) {
                    // line 157
                    echo "                                            <div class=\"float-end fw-light fs-8\">
                                                ";
                    // line 158
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "createdBy", [], "any", false, false, false, 158)], "method", false, false, false, 158), "nomComplet", [], "any", false, false, false, 158), "html", null, true);
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
            if (twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "datePaiement", [], "any", false, false, false, 167)) {
                // line 168
                echo "                                <li>
                                    <div class=\"time\">";
                // line 169
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "datePaiement", [], "any", false, false, false, 169), "d-m-Y à H:i:s"), "html", null, true);
                echo "</div>
                                    <p class=\"delai\" >";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "dateSaisie", [], "any", false, false, false, 170), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "datePaiement", [], "any", false, false, false, 170), "d-m-Y")], "method", false, false, false, 170), "html", null, true);
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
                if (twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "createdBy", [], "any", false, false, false, 176)) {
                    // line 177
                    echo "                                            <div class=\"float-end fw-light fs-8\">
                                                ";
                    // line 178
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "createdBy", [], "any", false, false, false, 178)], "method", false, false, false, 178), "nomComplet", [], "any", false, false, false, 178), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "dateCreation", [], "any", false, false, false, 190), "d-m-Y à H:i:s"), "html", null, true);
            echo "</div>
                                    <p class=\"delai\" >";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "dateSaisie", [], "any", false, false, false, 191), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "dateCreation", [], "any", false, false, false, 191), "d-m-Y")], "method", false, false, false, 191), "html", null, true);
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
            if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "createdBy", [], "any", false, false, false, 197)) {
                // line 198
                echo "                                            <div class=\"float-end fw-light fs-8\">
                                                ";
                // line 199
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "createdBy", [], "any", false, false, false, 199)], "method", false, false, false, 199), "nomComplet", [], "any", false, false, false, 199), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visites", [], "any", false, false, false, 207));
            foreach ($context['_seq'] as $context["_key"] => $context["vv"]) {
                // line 208
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["vv"], "id", [], "any", false, false, false, 208) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 208), "id", [], "any", false, false, false, 208))) {
                    // line 209
                    echo "                                    <li>
                                        <div class=\"time\">";
                    // line 210
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vv"], "createdAt", [], "any", false, false, false, 210), "d-m-Y à H:i:s"), "html", null, true);
                    echo "</div>
                                        <p class=\"delai\" >";
                    // line 211
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "dateCreation", [], "any", false, false, false, 211), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vv"], "createdAt", [], "any", false, false, false, 211), "d-m-Y")], "method", false, false, false, 211), "html", null, true);
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
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, $context["vv"], "createdBy", [], "any", false, false, false, 221)], "method", false, false, false, 221), "nomComplet", [], "any", false, false, false, 221), "html", null, true);
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
            if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 232)) {
                // line 233
                echo "                                <li>
                                    <div class=\"time\">";
                // line 234
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 234), "createdAt", [], "any", false, false, false, 234), "d-m-Y à H:i:s"), "html", null, true);
                echo "</div>
                                    <p class=\"delai\" >";
                // line 235
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "dateCreation", [], "any", false, false, false, 235), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 235), "createdAt", [], "any", false, false, false, 235), "d-m-Y")], "method", false, false, false, 235), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 240), "datePlanifie", [], "any", false, false, false, 240), "d/m/Y"), "html", null, true);
                echo ")</span></p>
                                        ";
                // line 241
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 241), "createdBy", [], "any", false, false, false, 241)) {
                    // line 242
                    echo "                                            <div class=\"float-end fw-light fs-8\">
                                                ";
                    // line 243
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 243), "createdBy", [], "any", false, false, false, 243)], "method", false, false, false, 243), "nomComplet", [], "any", false, false, false, 243), "html", null, true);
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
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 251), "dateRealise", [], "any", false, false, false, 251)) {
                    // line 252
                    echo "                                <li>
                                    <div class=\"time\">";
                    // line 253
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 253), "dateRealise", [], "any", false, false, false, 253), "d-m-Y à H:i:s"), "html", null, true);
                    echo "</div>
                                    <p class=\"delai\" >";
                    // line 254
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 254), "datePlanifie", [], "any", false, false, false, 254), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 254), "dateRealise", [], "any", false, false, false, 254), "d-m-Y")], "method", false, false, false, 254), "html", null, true);
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
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 260), "createdBy", [], "any", false, false, false, 260)) {
                        // line 261
                        echo "                                            <div class=\"float-end fw-light fs-8\">
                                                ";
                        // line 262
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 262), "createdBy", [], "any", false, false, false, 262)], "method", false, false, false, 262), "nomComplet", [], "any", false, false, false, 262), "html", null, true);
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
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 271), "dateRapporte", [], "any", false, false, false, 271)) {
                    // line 272
                    echo "                                <li>
                                    <div class=\"time\">";
                    // line 273
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 273), "dateRapporte", [], "any", false, false, false, 273), "d-m-Y à H:i:s"), "html", null, true);
                    echo "</div>
                                    <p class=\"delai\" >";
                    // line 274
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 274), "dateRealise", [], "any", false, false, false, 274), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 274), "dateRapporte", [], "any", false, false, false, 274), "d-m-Y")], "method", false, false, false, 274), "html", null, true);
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
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 280), "createdBy", [], "any", false, false, false, 280)) {
                        // line 281
                        echo "                                            <div class=\"float-end fw-light fs-8\">
                                                ";
                        // line 282
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "getUtilisateur", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 282), "createdBy", [], "any", false, false, false, 282)], "method", false, false, false, 282), "nomComplet", [], "any", false, false, false, 282), "html", null, true);
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
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 291), "dateAtteste", [], "any", false, false, false, 291)) {
                    // line 292
                    echo "                                <li>
                                    <div class=\"time\">";
                    // line 293
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 293), "dateAtteste", [], "any", false, false, false, 293), "d-m-Y à H:i:s"), "html", null, true);
                    echo "</div>
                                    <p class=\"delai\" >";
                    // line 294
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tools"] ?? null), "nbjours_entre", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 294), "dateRapporte", [], "any", false, false, false, 294), "d-m-Y"), 1 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 294), "dateAtteste", [], "any", false, false, false, 294), "d-m-Y")], "method", false, false, false, 294), "html", null, true);
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
    }

    // line 314
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 315
        echo "<script>
    \$(document).ready(function() {
            
    });
</script>
";
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
        return array (  632 => 315,  628 => 314,  616 => 304,  613 => 303,  610 => 302,  602 => 297,  596 => 294,  592 => 293,  589 => 292,  586 => 291,  582 => 289,  574 => 284,  569 => 282,  566 => 281,  564 => 280,  558 => 277,  552 => 274,  548 => 273,  545 => 272,  542 => 271,  538 => 269,  530 => 264,  525 => 262,  522 => 261,  520 => 260,  514 => 257,  508 => 254,  504 => 253,  501 => 252,  499 => 251,  496 => 250,  488 => 245,  483 => 243,  480 => 242,  478 => 241,  474 => 240,  469 => 238,  463 => 235,  459 => 234,  456 => 233,  454 => 232,  451 => 231,  445 => 230,  441 => 228,  433 => 223,  428 => 221,  425 => 220,  423 => 219,  418 => 217,  414 => 216,  409 => 214,  403 => 211,  399 => 210,  396 => 209,  393 => 208,  389 => 207,  386 => 206,  378 => 201,  373 => 199,  370 => 198,  368 => 197,  362 => 194,  356 => 191,  352 => 190,  349 => 189,  346 => 188,  343 => 187,  339 => 185,  331 => 180,  326 => 178,  323 => 177,  321 => 176,  315 => 173,  309 => 170,  305 => 169,  302 => 168,  299 => 167,  295 => 165,  287 => 160,  282 => 158,  279 => 157,  277 => 156,  271 => 153,  265 => 150,  261 => 149,  258 => 148,  255 => 147,  253 => 146,  250 => 145,  242 => 140,  237 => 138,  234 => 137,  232 => 136,  226 => 133,  220 => 130,  216 => 129,  212 => 127,  204 => 122,  199 => 120,  196 => 119,  194 => 118,  188 => 115,  181 => 111,  174 => 106,  162 => 95,  159 => 94,  156 => 93,  153 => 92,  150 => 91,  147 => 90,  145 => 89,  92 => 38,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/showtime.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/dossier/showtime.html.twig");
    }
}
