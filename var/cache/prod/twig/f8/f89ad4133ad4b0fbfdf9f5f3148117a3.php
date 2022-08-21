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

/* main/demandepop.html.twig */
class __TwigTemplate_03ee71f18699ef39df5ba75273f78585 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base_modal.html.twig", "main/demandepop.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
\t\t<!-- ========== title-wrapper start ========== -->
\t\t<div class=\"title-wrapper pt-0\">
\t\t\t";
        // line 8
        echo "\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 9
            echo "\t\t\t<div class=\"row mt-2\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t<h4 class=\"fw-bold\">Demandes ";
            // line 12
            echo twig_escape_filter($this->env, ($context["titre"] ?? null), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_demande"] ?? null), "getTotalItemCount", [], "any", false, false, false, 12), "html", null, true);
            echo ") </h4>
\t\t\t\t\t\t<a data-bs-dismiss=\"modal\" class=\"closeModal float-end next action-button btn btn-sm btn-secondary \">Fermer</a>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"divider\"><hr></span>

            <div align=\"right\" class=\"row fs-5 mt-0 pt-0 caption fw-light\" style=\"\">
\t\t\t\t<div class=\"col-3 fs-7 priority-3\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-6\"><span class=\"fw-light fs-7\">Page ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_demande"] ?? null), "getCurrentPageNumber", [], "any", false, false, false, 20), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["les_demande"] ?? null), "getPageCount", [], "any", false, false, false, 20), "html", null, true);
            echo "</span></div>
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t";
            // line 22
            twig_get_attribute($this->env, $this->source, ($context["les_demande"] ?? null), "setPageRange", [0 => 1], "method", false, false, false, 22);
            // line 23
            echo "\t\t\t\t\t\t\t\t";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["les_demande"] ?? null), "paginationpop.html.twig");
            echo "
\t\t\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col-lg-2 offset-lg-6 col-6 offset-5 fs-6\"><input class=\"py-1 border-dark bg-light mb-1 form-control form-control-sm\" type=\"text\" placeholder=\"Rechercher ...\" id=\"val_rechm0\" name=\"val_rechm0\" 
\t\t\t\tvalue=\"";
        // line 30
        if (array_key_exists("val_rech", $context)) {
            echo twig_escape_filter($this->env, ($context["val_rech"] ?? null), "html", null, true);
        }
        echo "\" 
\t\t\t\tonkeydown=\"if (event.keyCode == 13) { \$('#val_rechm').val(\$('#val_rechm0').val()); \$('#form_rech_listm').on('submit',function(){ url='";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_demandepop", ["restr" => (($context["restr"] ?? null) . "|val_rech")]), "html", null, true);
        echo "'; url = url.replace('val_rech', \$('#val_rechm').val()); \$('#modal2').find('.modal-body').load(url); return false; }); \$('#form_rech_listm').submit(); }\"
\t\t\t\t/></div>

            </div>
\t\t\t<div class=\"col-1\"></div>
            <div class=\"clear\"></div>
            \t";
        // line 37
        if ((twig_length_filter($this->env, ($context["les_demande"] ?? null)) == 0)) {
            // line 38
            echo "                <div class=\"row pt-20\">
                    <div class=\"col-3\"></div>
                    <div class=\"col-6\">
                        <div class=\"alert alert-warning d-flex align-items-center\" role=\"alert\">
                            <div>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 24 24\">
                                    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
                                </svg>
                                Aucun enregistrement trouvé !
                            </div>
                        </div>
                    </div>
                </div>
\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t<table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">N° demande</th> 
\t\t\t\t\t\t<th class=\"priority-3\" scope=\"col\">Date Demande</th> 
\t\t\t\t\t\t<th class=\"priority-3\" scope=\"col\">Usage</th> 
\t\t\t\t\t\t<th class=\"priority-4\">Agence</th>
\t\t\t\t\t\t<th class=\"priority-5\">Localité</th>
\t\t\t\t\t\t<th class=\"priority-4\">Electricien</th>
\t\t\t\t\t\t<th class=\"priority-2\">Statut demande</th>
\t\t\t\t\t\t";
            // line 63
            echo "\t\t\t\t\t\t";
            // line 64
            echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_demande"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dem"]) {
                // line 68
                echo "\t\t\t\t\t\t";
                $context["ag"] = twig_get_attribute($this->env, $this->source, $context["dem"], "installation", [], "any", false, false, false, 68);
                // line 69
                echo "\t\t\t\t\t\t";
                $context["paiement"] = twig_get_attribute($this->env, $this->source, $context["dem"], "paiement", [], "any", false, false, false, 69);
                // line 70
                echo "\t\t\t\t\t\t";
                $context["dossier"] = twig_get_attribute($this->env, $this->source, $context["dem"], "dossier", [], "any", false, false, false, 70);
                // line 71
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "step", [], "any", false, false, false, 71) < 7)) {
                    // line 72
                    echo "\t\t\t\t\t\t\t";
                    $context["badge_etat"] = "danger";
                    // line 73
                    echo "\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "step", [], "any", false, false, false, 74) <= 7)) {
                    // line 75
                    echo "\t\t\t\t\t\t\t";
                    $context["badge_etat"] = "warning";
                    // line 76
                    echo "\t\t\t\t\t\t";
                }
                // line 77
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\" class=\"fw-bold\">
\t\t\t\t\t\t\t\t";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dem"], "numero", [], "any", false, false, false, 79), "html", null, true);
                echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-3\">
\t\t\t\t\t\t\t\t";
                // line 82
                if (((twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "step", [], "any", false, false, false, 82) >= 7) && (twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "etat", [], "any", false, false, false, 82) != "Saisie"))) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t<span class=\"badge text-secondary fs-8\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "demandeCourante", [], "any", false, false, false, 83), "dateCreation", [], "any", false, false, false, 83), "d-m-Y"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t<span class=\"badge text-secondary fs-8\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "createdAt", [], "any", false, false, false, 85), "d-m-Y"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-3\">
\t\t\t\t\t\t\t\t";
                // line 89
                if ((twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "usages", [], "any", false, false, false, 89) == "domestique")) {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"text-warning fs-8 fw-bold\">Domestique</span>
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 91
($context["ag"] ?? null), "usages", [], "any", false, false, false, 91) == "non_domestique")) {
                    // line 92
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"text-primary fs-8 fw-bold\">Professionnel</span>
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 93
($context["ag"] ?? null), "usages", [], "any", false, false, false, 93) == "erp_ert")) {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"text-primary fs-8 fw-bold\">ERP - ERT</span>
\t\t\t\t\t\t\t\t";
                }
                // line 96
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-4\">
\t\t\t\t\t\t\t\t";
                // line 98
                if (( !(null === twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "localite", [], "any", false, false, false, 98)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "localite", [], "any", false, false, false, 98), "agence", [], "any", false, false, false, 98)))) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "localite", [], "any", false, false, false, 99), "agence", [], "any", false, false, false, 99), "nom", [], "any", false, false, false, 99), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                }
                // line 103
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-5\">
\t\t\t\t\t\t\t\t";
                // line 105
                if ( !(null === twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "localite", [], "any", false, false, false, 105))) {
                    // line 106
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "localite", [], "any", false, false, false, 106), "nom", [], "any", false, false, false, 106), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">-</span>
\t\t\t\t\t\t\t\t";
                }
                // line 110
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-4\">
\t\t\t\t\t\t\t\t";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "electricien", [], "any", false, false, false, 112), "nomComplet", [], "any", false, false, false, 112), "html", null, true);
                echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"priority-2\">
\t\t\t\t\t\t\t\t";
                // line 115
                $context["etat"] = twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "etat", [], "any", false, false, false, 115);
                echo " 
\t\t\t\t\t\t\t\t";
                // line 116
                $context["label_etat"] = "danger";
                echo " 
\t\t\t\t\t\t\t\t";
                // line 117
                $context["link"] = "app_installation_showpop";
                // line 118
                echo "\t\t\t\t\t\t\t\t";
                $context["id_ent"] = twig_get_attribute($this->env, $this->source, ($context["ag"] ?? null), "id", [], "any", false, false, false, 118);
                // line 119
                echo "\t\t\t\t\t\t\t\t";
                if (($context["paiement"] ?? null)) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["etat"] = "Paiement enregistré";
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "paiementEffectue", [], "any", false, false, false, 121)) {
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["etat"] = "Paiement validé";
                        // line 123
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "etatRembousement", [], "any", false, false, false, 123)) {
                            // line 124
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            $context["etat"] = "Paiement validé - Remboursé";
                            // line 125
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 126
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["label_etat"] = "warning";
                    echo " 
\t\t\t\t\t\t\t\t";
                }
                // line 129
                echo "\t\t\t\t\t\t\t\t";
                if (($context["dossier"] ?? null)) {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["link"] = "app_dossier_showpop";
                    // line 131
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["id_ent"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 131);
                    // line 132
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["etat"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "etat", [], "any", false, false, false, 132);
                    // line 133
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 133)) {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["etat"] = ("En attente " . twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "etat", [], "any", false, false, false, 134));
                        // line 135
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 136
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["label_etat"] = "success";
                    echo " 
\t\t\t\t\t\t\t\t";
                }
                // line 138
                echo "\t\t\t\t\t\t\t\t\t<span class=\"fs-8 badge badge-";
                echo twig_escape_filter($this->env, ($context["label_etat"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["etat"] ?? null), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td align=\"right\">

\t\t\t\t\t\t\t";
                // line 145
                echo "\t\t\t\t\t\t\t<a class=\"me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["link"] ?? null), ["id" => ($context["id_ent"] ?? null)]), "html", null, true);
                echo "\" title=\"Détails de la demande\">
\t\t\t\t\t\t\t\t<svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                echo "\"></use></svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "\t\t\t\t</tbody>
\t\t\t\t</table>

                ";
            // line 157
            echo "\t\t\t\t\t</div>

\t\t\t</div>
\t\t\t";
        }
        // line 161
        echo "
\t\t</div>
\t\t<!-- ========== title-wrapper end ========== -->
";
    }

    // line 166
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "main/demandepop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 166,  375 => 161,  369 => 157,  364 => 151,  353 => 146,  348 => 145,  338 => 138,  332 => 136,  329 => 135,  326 => 134,  323 => 133,  320 => 132,  317 => 131,  314 => 130,  311 => 129,  305 => 127,  302 => 126,  299 => 125,  296 => 124,  293 => 123,  290 => 122,  287 => 121,  284 => 120,  281 => 119,  278 => 118,  276 => 117,  272 => 116,  268 => 115,  262 => 112,  258 => 110,  254 => 108,  248 => 106,  246 => 105,  242 => 103,  238 => 101,  232 => 99,  230 => 98,  226 => 96,  222 => 94,  220 => 93,  217 => 92,  215 => 91,  212 => 90,  210 => 89,  206 => 87,  200 => 85,  194 => 83,  192 => 82,  186 => 79,  182 => 77,  179 => 76,  176 => 75,  173 => 74,  170 => 73,  167 => 72,  164 => 71,  161 => 70,  158 => 69,  155 => 68,  151 => 67,  146 => 64,  144 => 63,  132 => 52,  116 => 38,  114 => 37,  105 => 31,  99 => 30,  92 => 25,  86 => 23,  84 => 22,  77 => 20,  64 => 12,  59 => 9,  56 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/demandepop.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/main/demandepop.html.twig");
    }
}
