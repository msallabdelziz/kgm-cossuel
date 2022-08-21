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

/* installation/showpdf.html.twig */
class __TwigTemplate_983d31812c069cb4be264ab5bef7583e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/showpdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/showpdf.html.twig"));

        // line 1
        $context["proprietaire"] = twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 1, $this->source); })()), "proprietaire", [], "any", false, false, false, 1);
        // line 2
        $context["electricien"] = twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 2, $this->source); })()), "electricien", [], "any", false, false, false, 2);
        // line 3
        $context["typeConstruction"] = twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 3, $this->source); })()), "typeConstruction", [], "any", false, false, false, 3);
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
    />

    <!-- Bootstrap CSS -->

    ";
        // line 16
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 16), "get", [0 => "menu"], "method", true, true, false, 16) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "session", [], "any", false, false, false, 16), "get", [0 => "menu"], "method", false, false, false, 16) == "statistiques"))) {
            // line 17
            echo "    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css\"
      integrity=\"sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn\"
      crossorigin=\"anonymous\"
    />
    ";
        }
        // line 24
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 24, $this->source); })()), "usages", [], "any", false, false, false, 24) == "domestique")) {
            // line 25
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demande-A.css")), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 27
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demande-B.css")), "html", null, true);
            echo "\" />
    ";
        }
        // line 29
        echo "
    <title>Formulaire de Demande COSSUEL</title>
  </head>
  <body style=\"border:0px; background-color:#fff; padding:0px; margin:0px;\">
    ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 33), "get", [0 => "menu"], "method", true, true, false, 33) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "session", [], "any", false, false, false, 33), "get", [0 => "menu"], "method", false, false, false, 33) == "statistiques"))) {
            // line 34
            echo "        <a data-bs-dismiss=\"modal\" class=\"closeModal float-end next action-button btn btn-sm btn-secondary \">Fermer</a>
    ";
        }
        // line 36
        echo "    <div id=\"demande\">
    <div class=\"container\" style=\"width:850px; margin-left:auto; margin-right:auto;\">
      <div class=\"invoice\">
        <div class=\"row \">
          <div class=\"col-6 logo \">
            <img width=\"340\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Logo_COSSUEL.png")), "html", null, true);
        echo "\" />
          </div>
          <div class=\"col-6\">
            <h3 class=\"text-center text-demande\">DEMANDE D'ATTESTATION DE CONFORMITE</h3> 
            <p class=\"document-type\">Installation à usage ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 45, $this->source); })()), "usages", [], "any", false, false, false, 45) != "domestique")) {
            echo " non ";
        }
        echo "domestique</p>

          </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"row mt-0 mb-1 font-size:16px;\">
          <div class=\"col-4\">
            <div class=\"d-flex justify-content-between\">
                Agence:
                <span class=\"indentif\">";
        // line 54
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 54, $this->source); })()), "localite", [], "any", false, false, false, 54), "agence", [], "any", false, false, false, 54)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 54, $this->source); })()), "localite", [], "any", false, false, false, 54), "agence", [], "any", false, false, false, 54), "nom", [], "any", false, false, false, 54), "html", null, true);
            echo " ";
        }
        echo "</span>
              </div>
          </div>
          <div class=\"col-4\">
            <div class=\"d-flex  justify-content-between\">
                Demande Num:
                <span class=\"indentif\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 60, $this->source); })()), "demandeCourante", [], "any", false, false, false, 60), "numero", [], "any", false, false, false, 60), "html", null, true);
        echo "</span>
              </div>
        </div>
        <div class=\"col-4\">
            <div class=\"d-flex justify-content-between\">
                Du:
                <span class=\"indentif\">";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 66, $this->source); })()), "demandeCourante", [], "any", false, false, false, 66), "dateCreation", [], "any", false, false, false, 66), "d/m/Y h:i"), "html", null, true);
        echo "</span>
              </div>
        </div>
        <div class=\"clear\"></div>
        </div>
        <div class=\"clear\"></div>
            <div class=\"row border\">
          <div class=\"col-12\">
            <div class=\"bg-orange\">INFORMATIONS INSTALLATEUR</div>
          </div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Nom du contact:
              <span class=\"indentif\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 79, $this->source); })()), "prenom", [], "any", false, false, false, 79), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 79, $this->source); })()), "nom", [], "any", false, false, false, 79), "html", null, true);
        echo "</span>
            </div>
          </div>
          <div class=\"col-6\"></div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Adresse:
              <span class=\"indentif\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 86, $this->source); })()), "adresse", [], "any", false, false, false, 86), "html", null, true);
        echo "</span>
            </div>
          </div>
          <div class=\"col-6\"></div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Ville:
              <span class=\"indentif\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 93, $this->source); })()), "localite", [], "any", false, false, false, 93), "html", null, true);
        echo "</span>
            </div>
          </div>
          <div class=\"col-6\"></div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Téléphone:
              <span class=\"indentif\">";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 100, $this->source); })()), "telephone", [], "any", false, false, false, 100), "html", null, true);
        echo "</span>
            </div>
          </div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              E-Mail:
              <span class=\"indentif\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 106, $this->source); })()), "email", [], "any", false, false, false, 106), "html", null, true);
        echo "</span>
            </div>
          </div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Type Pièce :
              <span class=\"indentif\">";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 112, $this->source); })()), "typePiece", [], "any", false, false, false, 112), "html", null, true);
        echo "</span>
            </div>
          </div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Numéro Pièce:
              <span class=\"indentif\">";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["electricien"]) || array_key_exists("electricien", $context) ? $context["electricien"] : (function () { throw new RuntimeError('Variable "electricien" does not exist.', 118, $this->source); })()), "numPiece", [], "any", false, false, false, 118), "html", null, true);
        echo "</span>
            </div>
          </div>
         
       </div>
        <div class=\"clear\"></div>

        <div class=\"row border\">
            <div class=\"col-12\">
              <div class=\"bg-orange\">INSTALLATION ELECTRIQUE</div>
            </div>
            <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
                <span>Etat Installation:</span>
                <span class=\"indentif\">";
        // line 132
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 132, $this->source); })()), "alimente", [], "any", false, false, false, 132)) {
            echo " Alimentée ";
        } else {
            echo " Non alimenté ";
        }
        echo "</span>
              </div>
            </div>
            <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                    <span>Num Compteur:</span>
                    <span class=\"indentif\">";
        // line 138
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 138, $this->source); })()), "alimente", [], "any", false, false, false, 138)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 138, $this->source); })()), "compteur", [], "any", false, false, false, 138), "html", null, true);
            echo " ";
        }
        echo "</span>
                  </div>
            </div>
            <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>Propriètaire Installation:</span>
                  <span class=\"indentif\">";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 144, $this->source); })()), "prenom", [], "any", false, false, false, 144), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 144, $this->source); })()), "nom", [], "any", false, false, false, 144), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-6\"></div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>Type Pièce:</span>
                  <span class=\"indentif\">";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 151, $this->source); })()), "typePiece", [], "any", false, false, false, 151), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>
                    Num Piece:</span>
                  <span class=\"indentif\">";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 158, $this->source); })()), "numPiece", [], "any", false, false, false, 158), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <div>Type Batiment:</div>
                  <div class=\"indentif\">";
        // line 164
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 164, $this->source); })()), "collectif", [], "any", false, false, false, 164)) {
            echo " Collectif ";
        } else {
            echo " Non collectif ";
        }
        echo "</div>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>Adresse:</span>
                  <span class=\"indentif\">";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 170, $this->source); })()), "adresse", [], "any", false, false, false, 170), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>
                    Téléphone:</span>
                  <span class=\"indentif\">";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 177, $this->source); })()), "telephone", [], "any", false, false, false, 177), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>
                    Ville:</span>
                  <span class=\"indentif\">
                    ";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 185, $this->source); })()), "localite", [], "any", false, false, false, 185), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-6\"></div>
              <div class=\"col-6\">
                  <div class=\"row\">
                        <div class=\"col-6\">
                            <span> Latitude:</span> <span class=\"indentif\">";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 192, $this->source); })()), "lattitude", [], "any", false, false, false, 192), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"col-6\">
                            <span>Longitude:</span> <span class=\"indentif\">";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 195, $this->source); })()), "longitude", [], "any", false, false, false, 195), "html", null, true);
        echo "</span>
                        </div>
                    </div>                    
              </div>
       </div>

        <div class=\"clear\"></div>
           <div class=\"row border\">
            <div class=\"col-12\">
                <div class=\"bg-orange\">TYPE DE CONSTRUCTION A USAGE DOMESTIQUE</div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>Type de Construction:</span>
                  <span class=\"indentif\">";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["typeConstruction"]) || array_key_exists("typeConstruction", $context) ? $context["typeConstruction"] : (function () { throw new RuntimeError('Variable "typeConstruction" does not exist.', 209, $this->source); })()), "nom", [], "any", false, false, false, 209), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-5\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>Nombre de pièces principales:</span>
                  <span class=\"indentif\">";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 215, $this->source); })()), "priece", [], "any", false, false, false, 215), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-1\"></div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>Type Opération:</span>
                  <span class=\"indentif\">Opération non collective</span>
                </div>
              </div>
       </div>

        <div class=\"clear\"></div>
        <div class=\"row border\">
         <div class=\"col-12\">
             <div class=\"bg-orange\">TRAVAUX</div>
           </div>
           <div class=\"col-6\">
             <div class=\"d-flex justify-content-between mb-1\">
               Nature Travaux:
               ";
        // line 235
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 235, $this->source); })()), "natureTravaux", [], "any", false, false, false, 235)) {
            // line 236
            echo "                  <span class=\"indentif\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 236, $this->source); })()), "natureTravaux", [], "any", false, false, false, 236), "nom", [], "any", false, false, false, 236), "html", null, true);
            echo "</span>
               ";
        } else {
            // line 237
            echo " - ";
        }
        // line 238
        echo "             </div>
             <div class=\"d-flex justify-content-between mb-1\">
                <span>Autres Intervenants:</span>
                <span class=\"indentif\">";
        // line 241
        if (twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 241, $this->source); })()), "intervenantAutre", [], "any", false, false, false, 241)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 241, $this->source); })()), "intervenant", [], "any", false, false, false, 241), "html", null, true);
            echo " ";
        } else {
            echo " - ";
        }
        echo "</span>
              </div>
           </div>
           <div class=\"col-6\">
           </div>
             
    </div>

    <div class=\"clear\"></div>
    <div class=\"row\">
        <div class=\"col-9\">
                <div class=\"row border\">
                 <div class=\"col-12\">
                     <div class=\"bg-orange\">TARIFICATION</div>
                   </div>
                   <div class=\"col-6\">
                     <div class=\"d-flex justify-content-between mb-1\">
                       <span>Info Visite:</span>
                       <span class=\"indentif\">";
        // line 259
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 259, $this->source); })()), "demandeCourante", [], "any", false, false, false, 259), "numeroPassage", [], "any", false, false, false, 259), "html", null, true);
        echo "e Visite</span>
                     </div>
                   </div>
                   <div class=\"col-6\"></div>
                   <div class=\"col-6\">
                    <div class=\"d-flex justify-content-between mb-1\">
                        <span>Puissance Demandée</span>
                        <span class=\"indentif\">";
        // line 266
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 266, $this->source); })()), "demandeCourante", [], "any", false, false, false, 266), "puissance", [], "any", false, false, false, 266), "html", null, true);
        echo " Kw</span>
                      </div>
                   </div>
                   <div class=\"col-4\">
                    <div class=\"d-flex justify-content-between mb-1\">
                        <span>Tarif</span>
                        <span class=\"indentif\">";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 272, $this->source); })()), "demandeCourante", [], "any", false, false, false, 272), "cout", [], "any", false, false, false, 272), "html", null, true);
        echo " FCFA</span>
                      </div>
                   </div>
                   <div class=\"col-2\"></div>
                     
                </div>
        </div>
        <div class=\"col-3 signature\" align=\"center\">Signature</div>
    </div>
    <div class=\"clear\"></div>
    
        <p class=\"bottom-page text-center\">
          <div class=\"text \">Comité Sénégalais pour la Sécurité des Usagers de l'Electricité
            (COSSUEL) Organisme agréé par le Ministère chargé de l'Energie
            suivant le decret No 0022609 du 22 Août 2019 Adresse: 2 Rue Wagane
            Diouf, Immeuble Mame Alassane FALL, 7ème étage DAKAR SENEGAL
            Téléphone: (+221) 76 644 76 02/ 33 842 01 81 Email: cossuel@cossuel.sn</div>
        </p>
      </div>
    </div>
  </div>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "installation/showpdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 272,  452 => 266,  442 => 259,  415 => 241,  410 => 238,  407 => 237,  401 => 236,  399 => 235,  376 => 215,  367 => 209,  350 => 195,  344 => 192,  334 => 185,  323 => 177,  313 => 170,  300 => 164,  291 => 158,  281 => 151,  269 => 144,  256 => 138,  243 => 132,  226 => 118,  217 => 112,  208 => 106,  199 => 100,  189 => 93,  179 => 86,  167 => 79,  151 => 66,  142 => 60,  129 => 54,  115 => 45,  108 => 41,  101 => 36,  97 => 34,  95 => 33,  89 => 29,  83 => 27,  77 => 25,  74 => 24,  65 => 17,  63 => 16,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set proprietaire = installation.proprietaire %}
{% set electricien = installation.electricien %}
{% set typeConstruction = installation.typeConstruction %}
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
    />

    <!-- Bootstrap CSS -->

    {% if not (app.session.get('menu') is defined and app.session.get('menu') == \"statistiques\") %}
    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css\"
      integrity=\"sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn\"
      crossorigin=\"anonymous\"
    />
    {% endif %}
    {% if installation.usages == \"domestique\" %}
      <link rel=\"stylesheet\" href=\"{{absolute_url(asset('assets/css/demande-A.css'))}}\" />
    {% else %}
      <link rel=\"stylesheet\" href=\"{{absolute_url(asset('assets/css/demande-B.css'))}}\" />
    {% endif %}

    <title>Formulaire de Demande COSSUEL</title>
  </head>
  <body style=\"border:0px; background-color:#fff; padding:0px; margin:0px;\">
    {% if app.session.get('menu') is defined and app.session.get('menu') == \"statistiques\" %}
        <a data-bs-dismiss=\"modal\" class=\"closeModal float-end next action-button btn btn-sm btn-secondary \">Fermer</a>
    {% endif %}
    <div id=\"demande\">
    <div class=\"container\" style=\"width:850px; margin-left:auto; margin-right:auto;\">
      <div class=\"invoice\">
        <div class=\"row \">
          <div class=\"col-6 logo \">
            <img width=\"340\" src=\"{{absolute_url(asset('assets/img/Logo_COSSUEL.png'))}}\" />
          </div>
          <div class=\"col-6\">
            <h3 class=\"text-center text-demande\">DEMANDE D'ATTESTATION DE CONFORMITE</h3> 
            <p class=\"document-type\">Installation à usage {% if installation.usages != \"domestique\" %} non {% endif %}domestique</p>

          </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"row mt-0 mb-1 font-size:16px;\">
          <div class=\"col-4\">
            <div class=\"d-flex justify-content-between\">
                Agence:
                <span class=\"indentif\">{% if installation.localite.agence %} {{installation.localite.agence.nom}} {% endif %}</span>
              </div>
          </div>
          <div class=\"col-4\">
            <div class=\"d-flex  justify-content-between\">
                Demande Num:
                <span class=\"indentif\">{{installation.demandeCourante.numero}}</span>
              </div>
        </div>
        <div class=\"col-4\">
            <div class=\"d-flex justify-content-between\">
                Du:
                <span class=\"indentif\">{{installation.demandeCourante.dateCreation | date(\"d/m/Y h:i\")}}</span>
              </div>
        </div>
        <div class=\"clear\"></div>
        </div>
        <div class=\"clear\"></div>
            <div class=\"row border\">
          <div class=\"col-12\">
            <div class=\"bg-orange\">INFORMATIONS INSTALLATEUR</div>
          </div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Nom du contact:
              <span class=\"indentif\">{{electricien.prenom}} {{electricien.nom}}</span>
            </div>
          </div>
          <div class=\"col-6\"></div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Adresse:
              <span class=\"indentif\">{{electricien.adresse}}</span>
            </div>
          </div>
          <div class=\"col-6\"></div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Ville:
              <span class=\"indentif\">{{electricien.localite}}</span>
            </div>
          </div>
          <div class=\"col-6\"></div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Téléphone:
              <span class=\"indentif\">{{electricien.telephone}}</span>
            </div>
          </div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              E-Mail:
              <span class=\"indentif\">{{electricien.email}}</span>
            </div>
          </div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Type Pièce :
              <span class=\"indentif\">{{electricien.typePiece}}</span>
            </div>
          </div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Numéro Pièce:
              <span class=\"indentif\">{{electricien.numPiece}}</span>
            </div>
          </div>
         
       </div>
        <div class=\"clear\"></div>

        <div class=\"row border\">
            <div class=\"col-12\">
              <div class=\"bg-orange\">INSTALLATION ELECTRIQUE</div>
            </div>
            <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
                <span>Etat Installation:</span>
                <span class=\"indentif\">{% if installation.alimente %} Alimentée {% else %} Non alimenté {% endif %}</span>
              </div>
            </div>
            <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                    <span>Num Compteur:</span>
                    <span class=\"indentif\">{% if installation.alimente %} {{installation.compteur}} {% endif %}</span>
                  </div>
            </div>
            <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>Propriètaire Installation:</span>
                  <span class=\"indentif\">{{proprietaire.prenom}} {{proprietaire.nom}}</span>
                </div>
              </div>
              <div class=\"col-6\"></div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>Type Pièce:</span>
                  <span class=\"indentif\">{{proprietaire.typePiece}}</span>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>
                    Num Piece:</span>
                  <span class=\"indentif\">{{proprietaire.numPiece}}</span>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <div>Type Batiment:</div>
                  <div class=\"indentif\">{% if installation.collectif %} Collectif {% else %} Non collectif {% endif %}</div>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>Adresse:</span>
                  <span class=\"indentif\">{{proprietaire.adresse}}</span>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>
                    Téléphone:</span>
                  <span class=\"indentif\">{{proprietaire.telephone}}</span>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>
                    Ville:</span>
                  <span class=\"indentif\">
                    {{proprietaire.localite}}</span>
                </div>
              </div>
              <div class=\"col-6\"></div>
              <div class=\"col-6\">
                  <div class=\"row\">
                        <div class=\"col-6\">
                            <span> Latitude:</span> <span class=\"indentif\">{{installation.lattitude}}</span>
                        </div>
                        <div class=\"col-6\">
                            <span>Longitude:</span> <span class=\"indentif\">{{installation.longitude}}</span>
                        </div>
                    </div>                    
              </div>
       </div>

        <div class=\"clear\"></div>
           <div class=\"row border\">
            <div class=\"col-12\">
                <div class=\"bg-orange\">TYPE DE CONSTRUCTION A USAGE DOMESTIQUE</div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>Type de Construction:</span>
                  <span class=\"indentif\">{{typeConstruction.nom}}</span>
                </div>
              </div>
              <div class=\"col-5\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>Nombre de pièces principales:</span>
                  <span class=\"indentif\">{{installation.priece}}</span>
                </div>
              </div>
              <div class=\"col-1\"></div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>Type Opération:</span>
                  <span class=\"indentif\">Opération non collective</span>
                </div>
              </div>
       </div>

        <div class=\"clear\"></div>
        <div class=\"row border\">
         <div class=\"col-12\">
             <div class=\"bg-orange\">TRAVAUX</div>
           </div>
           <div class=\"col-6\">
             <div class=\"d-flex justify-content-between mb-1\">
               Nature Travaux:
               {% if installation.natureTravaux %}
                  <span class=\"indentif\">{{installation.natureTravaux.nom}}</span>
               {% else %} - {% endif %}
             </div>
             <div class=\"d-flex justify-content-between mb-1\">
                <span>Autres Intervenants:</span>
                <span class=\"indentif\">{% if installation.intervenantAutre %} {{installation.intervenant}} {% else %} - {% endif %}</span>
              </div>
           </div>
           <div class=\"col-6\">
           </div>
             
    </div>

    <div class=\"clear\"></div>
    <div class=\"row\">
        <div class=\"col-9\">
                <div class=\"row border\">
                 <div class=\"col-12\">
                     <div class=\"bg-orange\">TARIFICATION</div>
                   </div>
                   <div class=\"col-6\">
                     <div class=\"d-flex justify-content-between mb-1\">
                       <span>Info Visite:</span>
                       <span class=\"indentif\">{{installation.demandeCourante.numeroPassage}}e Visite</span>
                     </div>
                   </div>
                   <div class=\"col-6\"></div>
                   <div class=\"col-6\">
                    <div class=\"d-flex justify-content-between mb-1\">
                        <span>Puissance Demandée</span>
                        <span class=\"indentif\">{{installation.demandeCourante.puissance}} Kw</span>
                      </div>
                   </div>
                   <div class=\"col-4\">
                    <div class=\"d-flex justify-content-between mb-1\">
                        <span>Tarif</span>
                        <span class=\"indentif\">{{installation.demandeCourante.cout}} FCFA</span>
                      </div>
                   </div>
                   <div class=\"col-2\"></div>
                     
                </div>
        </div>
        <div class=\"col-3 signature\" align=\"center\">Signature</div>
    </div>
    <div class=\"clear\"></div>
    
        <p class=\"bottom-page text-center\">
          <div class=\"text \">Comité Sénégalais pour la Sécurité des Usagers de l'Electricité
            (COSSUEL) Organisme agréé par le Ministère chargé de l'Energie
            suivant le decret No 0022609 du 22 Août 2019 Adresse: 2 Rue Wagane
            Diouf, Immeuble Mame Alassane FALL, 7ème étage DAKAR SENEGAL
            Téléphone: (+221) 76 644 76 02/ 33 842 01 81 Email: cossuel@cossuel.sn</div>
        </p>
      </div>
    </div>
  </div>
  </body>
</html>
", "installation/showpdf.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/showpdf.html.twig");
    }
}
