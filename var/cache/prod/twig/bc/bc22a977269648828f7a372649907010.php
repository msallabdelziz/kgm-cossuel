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
class __TwigTemplate_029756bc202426fc5e227a7dcdd5d3c0 extends Template
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
        // line 1
        $context["proprietaire"] = twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 1);
        // line 2
        $context["electricien"] = twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 2);
        // line 3
        $context["typeConstruction"] = twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "typeConstruction", [], "any", false, false, false, 3);
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
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 16), "get", [0 => "menu"], "method", true, true, false, 16) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 16), "get", [0 => "menu"], "method", false, false, false, 16) == "statistiques"))) {
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
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 24) == "domestique")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 33), "get", [0 => "menu"], "method", true, true, false, 33) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 33), "get", [0 => "menu"], "method", false, false, false, 33) == "statistiques"))) {
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
        if ((twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 45) != "domestique")) {
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 54), "agence", [], "any", false, false, false, 54)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "localite", [], "any", false, false, false, 54), "agence", [], "any", false, false, false, 54), "nom", [], "any", false, false, false, 54), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 60), "numero", [], "any", false, false, false, 60), "html", null, true);
        echo "</span>
              </div>
        </div>
        <div class=\"col-4\">
            <div class=\"d-flex justify-content-between\">
                Du:
                <span class=\"indentif\">";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 66), "dateCreation", [], "any", false, false, false, 66), "d/m/Y h:i"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "prenom", [], "any", false, false, false, 79), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "nom", [], "any", false, false, false, 79), "html", null, true);
        echo "</span>
            </div>
          </div>
          <div class=\"col-6\"></div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Adresse:
              <span class=\"indentif\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "adresse", [], "any", false, false, false, 86), "html", null, true);
        echo "</span>
            </div>
          </div>
          <div class=\"col-6\"></div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Ville:
              <span class=\"indentif\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "localite", [], "any", false, false, false, 93), "html", null, true);
        echo "</span>
            </div>
          </div>
          <div class=\"col-6\"></div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Téléphone:
              <span class=\"indentif\">";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "telephone", [], "any", false, false, false, 100), "html", null, true);
        echo "</span>
            </div>
          </div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              E-Mail:
              <span class=\"indentif\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "email", [], "any", false, false, false, 106), "html", null, true);
        echo "</span>
            </div>
          </div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Type Pièce :
              <span class=\"indentif\">";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "typePiece", [], "any", false, false, false, 112), "html", null, true);
        echo "</span>
            </div>
          </div>
          <div class=\"col-6\">
              <div class=\"d-flex justify-content-between mb-1\">
              Numéro Pièce:
              <span class=\"indentif\">";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electricien"] ?? null), "numPiece", [], "any", false, false, false, 118), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "alimente", [], "any", false, false, false, 132)) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "alimente", [], "any", false, false, false, 138)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "compteur", [], "any", false, false, false, 138), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proprietaire"] ?? null), "prenom", [], "any", false, false, false, 144), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proprietaire"] ?? null), "nom", [], "any", false, false, false, 144), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-6\"></div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>Type Pièce:</span>
                  <span class=\"indentif\">";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proprietaire"] ?? null), "typePiece", [], "any", false, false, false, 151), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>
                    Num Piece:</span>
                  <span class=\"indentif\">";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proprietaire"] ?? null), "numPiece", [], "any", false, false, false, 158), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <div>Type Batiment:</div>
                  <div class=\"indentif\">";
        // line 164
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "collectif", [], "any", false, false, false, 164)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proprietaire"] ?? null), "adresse", [], "any", false, false, false, 170), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>
                    Téléphone:</span>
                  <span class=\"indentif\">";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proprietaire"] ?? null), "telephone", [], "any", false, false, false, 177), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proprietaire"] ?? null), "localite", [], "any", false, false, false, 185), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-6\"></div>
              <div class=\"col-6\">
                  <div class=\"row\">
                        <div class=\"col-6\">
                            <span> Latitude:</span> <span class=\"indentif\">";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "lattitude", [], "any", false, false, false, 192), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"col-6\">
                            <span>Longitude:</span> <span class=\"indentif\">";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "longitude", [], "any", false, false, false, 195), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["typeConstruction"] ?? null), "nom", [], "any", false, false, false, 209), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-5\">
                <div class=\"d-flex justify-content-between mb-1\">
                  <span>Nombre de pièces principales:</span>
                  <span class=\"indentif\">";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "priece", [], "any", false, false, false, 215), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 235)) {
            // line 236
            echo "                  <span class=\"indentif\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "natureTravaux", [], "any", false, false, false, 236), "nom", [], "any", false, false, false, 236), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenantAutre", [], "any", false, false, false, 241)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "intervenant", [], "any", false, false, false, 241), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 259), "numeroPassage", [], "any", false, false, false, 259), "html", null, true);
        echo "e Visite</span>
                     </div>
                   </div>
                   <div class=\"col-6\"></div>
                   <div class=\"col-6\">
                    <div class=\"d-flex justify-content-between mb-1\">
                        <span>Puissance Demandée</span>
                        <span class=\"indentif\">";
        // line 266
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 266), "puissance", [], "any", false, false, false, 266), "html", null, true);
        echo " Kw</span>
                      </div>
                   </div>
                   <div class=\"col-4\">
                    <div class=\"d-flex justify-content-between mb-1\">
                        <span>Tarif</span>
                        <span class=\"indentif\">";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 272), "cout", [], "any", false, false, false, 272), "html", null, true);
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
        return array (  455 => 272,  446 => 266,  436 => 259,  409 => 241,  404 => 238,  401 => 237,  395 => 236,  393 => 235,  370 => 215,  361 => 209,  344 => 195,  338 => 192,  328 => 185,  317 => 177,  307 => 170,  294 => 164,  285 => 158,  275 => 151,  263 => 144,  250 => 138,  237 => 132,  220 => 118,  211 => 112,  202 => 106,  193 => 100,  183 => 93,  173 => 86,  161 => 79,  145 => 66,  136 => 60,  123 => 54,  109 => 45,  102 => 41,  95 => 36,  91 => 34,  89 => 33,  83 => 29,  77 => 27,  71 => 25,  68 => 24,  59 => 17,  57 => 16,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/showpdf.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/showpdf.html.twig");
    }
}
