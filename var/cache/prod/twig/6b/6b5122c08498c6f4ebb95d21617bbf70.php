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

/* electricien/show.html.twig */
class __TwigTemplate_a50a580f8839aa63c4f4662adcefbe6a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "electricien/show.html.twig", 1);
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
                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Electriciens installateurs</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proprietaire_index");
        echo "\">Propriétaires d'installation</a>
            </li>
        </ul>
    </div>
    <section class=\"\">
        <header class=\"hstack pb-2 mb-2 border-bottom\">
            <a href=\"/electricien\" class=\"align-items-center text-dark text-decoration-none\">
                <span class=\"fs-4\">Gestion des Electriciens</span>
            </a>
            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_index");
        echo "\" class=\"btn btn-sm fs-7 btn-secondary ms-auto\">Liste des Electriciens</a>
        </header>
        <div class=\"row\">
            <div class=\"col-lg-5 mb-2 shadow border border-light card0 p-3 me-4 priority-4\">
                <div class=\"container mt-4\">
                    <div class=\"row\">
                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <caption align=\"top\" class=\"fs-5 mt-0 pt-0\">
                            Liste des Electriciens (";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["les_electricien"] ?? null)), "html", null, true);
        echo ")
                        </caption>
                        ";
        // line 30
        if (($context["les_electricien"] ?? null)) {
            // line 31
            echo "                        <thead>
                            <tr>
                                <th width=\"20%\" scope=\"col\">Téléphone</th> 
                                <th scope=\"col\">Nom</th> 
                                <th scope=\"col\">Prénom</th> 
                                ";
            // line 37
            echo "                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_electricien"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 41
                echo "                                ";
                $context["cur"] = "";
                // line 42
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "id", [], "any", false, false, false, 42) == twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 42))) {
                    // line 43
                    echo "                                    ";
                    $context["cur"] = "bg-warning text-dark bg-opacity-25";
                    // line 44
                    echo "                                ";
                }
                // line 45
                echo "                                <tr class=\"";
                echo twig_escape_filter($this->env, ($context["cur"] ?? null), "html", null, true);
                echo "\">
                                    <td scope=\"row\"><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "telephone", [], "any", false, false, false, 46), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "nom", [], "any", false, false, false, 47), "html", null, true);
                echo "</a></td>
                                    <td><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"text-dark text-decoration-none\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "prenom", [], "any", false, false, false, 48), "html", null, true);
                echo "</a></td>
";
                // line 57
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                        </tbody>
                        ";
        } else {
            // line 61
            echo "                            <tr class=\"\"><td colspan=\"2\" class=\" text-center\"><span class=\"text-danger fs-7\">Aucun electricien !</span></td></tr>
                        ";
        }
        // line 63
        echo "                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 mb-2 shadow border border-light card p-3\">
                <nav class=\"navbar bg-warning text-black border border-dark my-2 p-1\">
                    <div class=\"container-fluid\">
                        <span class=\"navbar-brand mb-0 h1\">Détails du electricien ";
        // line 71
        echo twig_escape_filter($this->env, ($context["electricien"] ?? null), "html", null, true);
        echo "</span>
                    </div>
                </nav>
                <div class=\"container\">
                    <div class=\"row p-2 bg-light bg-opacity-25 border rounded\">
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Localité</label>
                            <div class=\"ms-4\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "localite", [], "any", false, false, false, 78), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Nom</label>
                            <div class=\"ms-4\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "nom", [], "any", false, false, false, 82), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Prénom</label>
                            <div class=\"ms-4\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "prenom", [], "any", false, false, false, 86), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-12 mb-2\">
                            <label class=\"fw-light fs-7\">Adresse</label>
                            <div class=\"ms-4\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "adresse", [], "any", false, false, false, 90), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Téléphone</label>
                            <div class=\"ms-4\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "telephone", [], "any", false, false, false, 94), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Email</label>
                            <div class=\"ms-4\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "email", [], "any", false, false, false, 98), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-5 mb-2\">
                            <label class=\"fw-light fs-7\">Type Pièce</label>
                            <div class=\"ms-4\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "typePiece", [], "any", false, false, false, 102), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-7 mb-2\">
                            <label class=\"fw-light fs-7\">Numéro Pièce</label>
                            <div class=\"ms-4\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "numPiece", [], "any", false, false, false, 106), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                    <div class=\"col pt-2\" align=\"right\">
                            <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_index");
        echo "\" class=\"mx-2\" title=\"Retour\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#arrow-return-left"), "html", null, true);
        echo "\"></use>
                                </svg>
                            </a>
                            ";
        // line 115
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 116
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_electricien_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "id", [], "any", false, false, false, 116)]), "html", null, true);
            echo "\" class=\"mx-2\" title=\"Modifier\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"black\">
                                    <use xlink:href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#pencil-square"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 122
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 123
            echo "                            <a href=\"\" class=\"mx-2\" title=\"Supprimer\">
                                <svg class=\"bi\" width=\"16\" height=\"16\" fill=\"red\">
                                    <use xlink:href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#trash"), "html", null, true);
            echo "\"></use>
                                </svg>
                            </a>
                            ";
        }
        // line 129
        echo "                    </div>

                    <div class=\"row mt-30\">
                        <div class=\"col-md-12 p-0\">
                            <div class=\"card m-0 p-4\">
                                <div class=\"d-flex align-items-center justify-content-between\">
                                    <h4 class=\"fw-bold\">Demandes initiées (";
        // line 135
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["les_install"] ?? null)), "html", null, true);
        echo ")</h4>
                                </div>
                                    ";
        // line 137
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO"))) {
            // line 138
            echo "                                    <div class=\"float-end\" align=\"right\">
                                            <a class=\"btn btn-small py-0 px-1 fs-7 btn-warning me-2\" href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_addfromE", ["id" => 0, "idE" => twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "getId", [], "method", false, false, false, 139)]), "html", null, true);
            echo "\" title=\"Nouvelle demande\">
                                                <svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#plus"), "html", null, true);
            echo "\"></use></svg>
                                                Nouvelle demande
                                            </a>
                                    </div>
                                    ";
        }
        // line 145
        echo "                                <span class=\"divider\">
                                    <hr></span>
                        ";
        // line 147
        if ((twig_length_filter($this->env, ($context["les_install"] ?? null)) == 0)) {
            // line 148
            echo "                        <div class=\"row pt-10\">
                            <div class=\"col-12\">
                                <div class=\"alert alert-warning d-flex align-items-center p-1\" role=\"alert\">
                                    <div>
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 24 24\">
                                            <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
                                        </svg>
                                        Aucun enregistrement trouvé !
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        } else {
            // line 161
            echo "                        <table class=\"table table-striped table-hover table-sm pt-0 mt-0\">
                        <thead>
                            <tr>
                                <th scope=\"col\">N° demande</th> 
                                <th class=\"priority-3\">Usage</th> 
                                <th class=\"priority-3\">Date Demande</th>
                                <th>Statut demande</th>
                                <th width=\"60\"></th>
                                ";
            // line 170
            echo "                                ";
            // line 171
            echo "                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["les_install"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
                // line 175
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 175) < 7)) {
                    // line 176
                    echo "                                    ";
                    $context["badge_etat"] = "danger";
                    // line 177
                    echo "                                ";
                }
                // line 178
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["ag"], "step", [], "any", false, false, false, 178) <= 7)) {
                    // line 179
                    echo "                                    ";
                    $context["badge_etat"] = "warning";
                    // line 180
                    echo "                                ";
                }
                // line 181
                echo "                                <tr>
                                    <td scope=\"row\" class=\"fw-bold\">
                                        ";
                // line 183
                if (twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 183)) {
                    // line 184
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 184), "numero", [], "any", false, false, false, 184), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 186
                    echo "                                                <span>[";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdAt", [], "any", false, false, false, 186), "d/m/y_H:i:s"), "html", null, true);
                    echo "]</span>
                                        ";
                }
                // line 188
                echo "                                    </td>
                                    <td class=\"priority-3\">";
                // line 189
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "usages", [], "any", false, false, false, 189), "html", null, true);
                echo "</td>
                                    <td>
                                            <span class=\"badge badge-warning fs-8\">";
                // line 191
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "createdAt", [], "any", false, false, false, 191), "d-m-Y"), "html", null, true);
                echo "</span>
                                    </td>
                                    <td>

                                ";
                // line 195
                $context["renew"] = 0;
                // line 196
                echo "                                
                                ";
                // line 197
                $context["etat"] = twig_get_attribute($this->env, $this->source, $context["ag"], "etat", [], "any", false, false, false, 197);
                echo " 
                                ";
                // line 198
                $context["label_etat"] = "danger";
                echo " 
                                ";
                // line 199
                $context["link"] = "app_installation_showpop";
                // line 200
                echo "                                ";
                $context["id_ent"] = twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 200);
                // line 201
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 201)) {
                    // line 202
                    echo "                                    ";
                    $context["paiement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 202), "paiement", [], "any", false, false, false, 202);
                    echo " 
                                    ";
                    // line 203
                    $context["dossier"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "demandeCourante", [], "any", false, false, false, 203), "dossier", [], "any", false, false, false, 203);
                    echo " 
                                    ";
                    // line 204
                    if (($context["paiement"] ?? null)) {
                        // line 205
                        echo "                                        ";
                        $context["etat"] = "Paiement enregistré";
                        // line 206
                        echo "                                        ";
                        if (twig_get_attribute($this->env, $this->source, ($context["paiement"] ?? null), "paiementEffectue", [], "any", false, false, false, 206)) {
                            // line 207
                            echo "                                            ";
                            $context["etat"] = "Paiement validé";
                            // line 208
                            echo "                                        ";
                        }
                        // line 209
                        echo "                                        ";
                        $context["label_etat"] = "warning";
                        echo " 
                                    ";
                    }
                    // line 211
                    echo "                                    ";
                    if (($context["dossier"] ?? null)) {
                        // line 212
                        echo "                                        ";
                        $context["link"] = "app_dossier_showpop";
                        // line 213
                        echo "                                        ";
                        $context["id_ent"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "id", [], "any", false, false, false, 213);
                        // line 214
                        echo "                                        ";
                        $context["etat"] = twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "etat", [], "any", false, false, false, 214);
                        // line 215
                        echo "                                        ";
                        if ( !twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 215)) {
                            // line 216
                            echo "                                            ";
                            $context["etat"] = ("En attente " . twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "etat", [], "any", false, false, false, 216));
                            // line 217
                            echo "                                        ";
                        }
                        // line 218
                        echo "                                        ";
                        $context["label_etat"] = "success";
                        echo " 

                                        ";
                        // line 220
                        if (twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "attestation", [], "any", false, false, false, 220)) {
                            // line 221
                            echo "                                            ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 221) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "visiteCourante", [], "any", false, false, false, 221), "conclusion", [], "any", false, false, false, 221))) {
                                // line 222
                                echo "                                                ";
                                $context["label_etat"] = " bg-vertf bg-success p-1";
                                // line 223
                                echo "                                            ";
                            } else {
                                // line 224
                                echo "                                                ";
                                $context["label_etat"] = " bg-danger p-1";
                                // line 225
                                echo "                                                ";
                                $context["renew"] = 1;
                                // line 226
                                echo "                                            ";
                            }
                            // line 227
                            echo "                                        ";
                        }
                        // line 228
                        echo "                                    ";
                    }
                    // line 229
                    echo "                                ";
                }
                // line 230
                echo "
\t\t\t\t\t\t\t\t\t<span class=\"fs-8 badge badge-";
                // line 231
                echo twig_escape_filter($this->env, ($context["label_etat"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["etat"] ?? null), "html", null, true);
                echo "</span>
                                    </td>
                                    <td>
                                        <a class=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#modal2\" href=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_showpop", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 234)]), "html", null, true);
                echo "\" title=\"Détails de la demande\">
                                            <svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"";
                // line 235
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#search"), "html", null, true);
                echo "\"></use></svg>
                                        </a>
                                        ";
                // line 237
                if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCUEIL")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RFO")) && ($context["renew"] ?? null))) {
                    // line 238
                    echo "                                        <a class=\"me-2\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_installation_renew", ["id" => twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 238)]), "html", null, true);
                    echo "\" title=\"Nouvelle demande\">
                                            <svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"";
                    // line 239
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#plus"), "html", null, true);
                    echo "\"></use></svg>
                                        </a>
                                        ";
                } else {
                    // line 242
                    echo "                                        <a class=\"\" href=\"\" title=\"\">
                                            <svg class=\"bi pt\" width=\"16\" height=\"16\" fill=\"black\"><use xlink:href=\"";
                    // line 243
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bootstrap-icons.svg#reception-0"), "html", null, true);
                    echo "\"></use></svg>
                                        </a>
                                        ";
                }
                // line 246
                echo "                                    </td>
                                    ";
                // line 248
                echo "                                    ";
                // line 255
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 257
            echo "                        </tbody>
                        </table>
                        ";
        }
        // line 260
        echo "                            </div>

                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "electricien/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 260,  561 => 257,  554 => 255,  552 => 248,  549 => 246,  543 => 243,  540 => 242,  534 => 239,  529 => 238,  527 => 237,  522 => 235,  518 => 234,  510 => 231,  507 => 230,  504 => 229,  501 => 228,  498 => 227,  495 => 226,  492 => 225,  489 => 224,  486 => 223,  483 => 222,  480 => 221,  478 => 220,  472 => 218,  469 => 217,  466 => 216,  463 => 215,  460 => 214,  457 => 213,  454 => 212,  451 => 211,  445 => 209,  442 => 208,  439 => 207,  436 => 206,  433 => 205,  431 => 204,  427 => 203,  422 => 202,  419 => 201,  416 => 200,  414 => 199,  410 => 198,  406 => 197,  403 => 196,  401 => 195,  394 => 191,  389 => 189,  386 => 188,  380 => 186,  374 => 184,  372 => 183,  368 => 181,  365 => 180,  362 => 179,  359 => 178,  356 => 177,  353 => 176,  350 => 175,  346 => 174,  341 => 171,  339 => 170,  329 => 161,  314 => 148,  312 => 147,  308 => 145,  300 => 140,  296 => 139,  293 => 138,  291 => 137,  286 => 135,  278 => 129,  271 => 125,  267 => 123,  264 => 122,  257 => 118,  251 => 116,  249 => 115,  243 => 112,  238 => 110,  231 => 106,  224 => 102,  217 => 98,  210 => 94,  203 => 90,  196 => 86,  189 => 82,  182 => 78,  172 => 71,  162 => 63,  158 => 61,  154 => 59,  147 => 57,  141 => 48,  135 => 47,  129 => 46,  124 => 45,  121 => 44,  118 => 43,  115 => 42,  112 => 41,  108 => 40,  103 => 37,  96 => 31,  94 => 30,  89 => 28,  78 => 20,  66 => 11,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "electricien/show.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/electricien/show.html.twig");
    }
}
