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

/* installation/recupdf.html.twig */
class __TwigTemplate_1e7033c9f974952e51d178ca8a35af80 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />

    <!-- Bootstrap CSS -->
    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css\"
      integrity=\"sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn\"
      crossorigin=\"anonymous\"
    />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/facture-pdf.css")), "html", null, true);
        echo "\" />

    <title>Recu Paiement</title>

    <style>
        
    </style>
  </head>
  <body style=\"border:0px; background-color:#fff; padding:0px; margin:0px;\">
    <div class=\"container\" style=\"width:850px; margin-left:auto; margin-right:auto;\">
      <div class=\"invoice\" style=\"\">
        <div class=\"row\" style=\"border:0px; padding:0px; margin:0px;\">
            <div class=\"col-5\" style=\"border:0px; padding:0px; margin:2px; float:left; width:400px\">
            <img width=\"300\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Logo_COSSUEL.png")), "html", null, true);
        echo "\" />
          </div>
          <div class=\"col-6\" style=\"border-left:2px solid #ccc; padding:0px; margin:2px; margin-left:50px; float:left;\">
            <p class=\"text-center attest-conform text-dark\" style=\"font-size:12px;margin-top:10px;\">
          Comité Sénégalais pour la Sécurité des Usagers de l'Electricité
          (COSSUEL) - Adresse: 2 Rue Wagane
          Diouf, Immeuble Mame Alassane FALL, 7ème étage DAKAR SENEGAL
          Téléphone: (+221) 76 644 76 02/ 33 842 01 81 Email: cossuel@cossuel.sn              
            </p>
          </div>
        </div>
        <div style=\"clear:both\"></div>
        <div class=\"row\">
          <div class=\"col-12\">
            <h4 class=\"document-type\" style=\"padding:4px;border-top:2px solid #000; border-bottom:2px solid #000;\" align=\"center\">RECU DE PAIEMENT N° ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 41), "numero", [], "any", false, false, false, 41), "html", null, true);
        echo "</h4>
          </div>
        </div>
        <div class=\"\" style=\" padding:0px; margin-top:10px;\">
          <div class=\"col-6\" style=\"width:400px; float:left;\">
            <p class=\"cadre\" style=\"border-bottom:1px solid #000;\">Client / Installateur</p>
            <!-- <div class=\"\">
              <span class=\"\">Nom :</span>
              <span class=\"font-weight-bold\"> mamadou.dione@cossuel.co</span>
            </div> -->

            <table style=\"font-size: 14px\">
              <tr class=\"\">
                <td colspan=\"2\" class=\"font-weight-bold\">";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 54), "prenom", [], "any", false, false, false, 54) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 54), "nom", [], "any", false, false, false, 54)), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                  <td>Adresse: </td>
                  <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 58), "adresse", [], "any", false, false, false, 58), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 58), "telephone", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
              </tr>
            </table>
          </div>
          <div class=\"col-6\" style=\"width:400px; margin-left:20px; float:left;\">
            <p class=\"cadre\" style=\"border-bottom:1px solid #000;\">Demande de conformité n° ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 63), "numero", [], "any", false, false, false, 63), "html", null, true);
        echo "</p>
            <div>
              <table style=\"font-size: 14px\">
                <tr>
                  <td colspan=\"2\">Demande d'attestation de conformité - Installateur à usage ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 67), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                  <td width=\"90\">Propriétaire :</td>
                  <td class=\"font-weight-bold\">";
        // line 71
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 71), "prenom", [], "any", false, false, false, 71) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 71), "nom", [], "any", false, false, false, 71)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                  <td>Adresse: </td>
                  <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 75), "adresse", [], "any", false, false, false, 75), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 75), "telephone", [], "any", false, false, false, 75), "html", null, true);
        echo "</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div style=\"clear:both\"></div>
        <div class=\"row\" style=\"margin-top:20px;\">
        <div class=\"col-6\">
            <div class=\"row\" style=\"margin-top:10px; float:left;\">
              <div class=\"container text-center table-responsive\">
                <table class=\"table table-bordered table-sm table-hover\" cellpadding=\"1\" width=\"350\">
                  <thead class=\"\">
                    <tr>
                      <td align=\"left\" style=\"padding-left:10px;\" width=\"200\">Puissance Demandée</td>
                      <th width=\"180\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 90), "puissance", [], "any", false, false, false, 90), "html", null, true);
        echo " Kw</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td align=\"left\" style=\"padding-left:10px;\">Type de visite</td>
                      <th scope=\"row\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 96), "numeroPassage", [], "any", false, false, false, 96), "html", null, true);
        echo "e visite</th>
                    </tr>
                    <tr>
                      <td align=\"left\" style=\"padding-left:10px;\">Total payé</td>
                      <th scope=\"row\">";
        // line 100
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 100), "cout", [], "any", false, false, false, 100), 0, ",", " "), "html", null, true);
        echo " FCFA</th>
                    </tr>
                    <tr>
                      <td align=\"left\" style=\"padding-left:10px;\">Mode Paiement</td>
                      <th scope=\"row\">";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 104), "paiement", [], "any", false, false, false, 104), "mode", [], "any", false, false, false, 104), "html", null, true);
        echo " </th>
                    </tr>
                    <tr>
                      <td align=\"left\" style=\"padding-left:10px;\">Réf. Paiement</td>
                      <th scope=\"row\">";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 108), "paiement", [], "any", false, false, false, 108), "reference", [], "any", false, false, false, 108), "html", null, true);
        echo " </th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <div class=\"col-6\"  style=\"margin-top:10px; float:left;\">
        <div class=\"row\" style=\"margin-top:10px; margin-bottom:20px;\">
          <div class=\"col-5\" style=\"float:left;\">

            <div class=\"text-right code-qr\" style=\"margin-left:50px; width:80px; height:80px;\">
              <svg
                id=\"Calque_1\"
                data-name=\"Calque 1\"
                xmlns=\"http://www.w3.org/2000/svg\"
                viewBox=\"0 0 400 400\"
              >
                <defs>
                  <style>
                    .cls-1 {
                      opacity: 0;
                    }
                    .cls-2 {
                      fill: #fff;
                    }
                  </style>
                </defs>
                <rect class=\"cls-1\" width=\"400\" height=\"400\" />
                <rect class=\"cls-2\" width=\"399\" height=\"399\" />
                <rect width=\"19.05\" height=\"19.05\" />
                <rect x=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"19.05\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"95.24\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"133.33\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"133.33\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" y=\"133.33\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"19.05\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"95.24\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"19.05\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"95.24\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"133.33\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"209.52\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"133.33\" y=\"209.52\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"209.52\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"209.52\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"19.05\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"95.24\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"133.33\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"247.62\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"247.62\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"247.62\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"247.62\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"247.62\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"19.05\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"95.24\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"285.71\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"285.71\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"285.71\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"285.71\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"285.71\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"285.71\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"19.05\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"95.24\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
              </svg>
            </div>

          </div>
          <div class=\"col-7\" style=\"float:left; width:300px\">
            <p class=\"date\">Fait a Dakar, le ";
        // line 367
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 367), "dateCreation", [], "any", false, false, false, 367), "d/m/Y"), "html", null, true);
        echo "</p>
            <h6 class=\"font-weight-bold comptable\">Le comptable</h6>
            <img width=\"150\" src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/visa_compta.jpg")), "html", null, true);
        echo "\" />
          </div>
          </div>
        </div>
        </div>
      </div>
    </div>

    <div class=\"container\" style=\"width:850px; margin-top:40px; margin-left:auto; margin-right:auto;\">
      <div class=\"invoice\" style=\"\">
        <div class=\"row\" style=\"border:0px; padding:0px; margin:0px;\">
            <div class=\"col-5\" style=\"border:0px; padding:0px; margin:2px; float:left; width:400px\">
            <img width=\"300\" src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Logo_COSSUEL.png")), "html", null, true);
        echo "\" />
          </div>
          <div class=\"col-6\" style=\"border-left:2px solid #ccc; padding:0px; margin:2px; margin-left:50px; float:left;\">
            <p class=\"text-center attest-conform text-dark\" style=\"font-size:12px;margin-top:10px;\">
          Comité Sénégalais pour la Sécurité des Usagers de l'Electricité
          (COSSUEL) - Adresse: 2 Rue Wagane
          Diouf, Immeuble Mame Alassane FALL, 7ème étage DAKAR SENEGAL
          Téléphone: (+221) 76 644 76 02/ 33 842 01 81 Email: cossuel@cossuel.sn              
            </p>
          </div>
        </div>
        <div style=\"clear:both\"></div>
        <div class=\"row\">
          <div class=\"col-12\">
            <h4 class=\"document-type\" style=\"padding:4px;border-top:2px solid #000; border-bottom:2px solid #000;\" align=\"center\">RECU DE PAIEMENT N° ";
        // line 395
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 395), "numero", [], "any", false, false, false, 395), "html", null, true);
        echo "</h4>
          </div>
        </div>
        <div class=\"\" style=\" padding:0px; margin-top:10px;\">
          <div class=\"col-6\" style=\"width:400px; float:left;\">
            <p class=\"cadre\" style=\"border-bottom:1px solid #000;\">Client / Installateur</p>
            <!-- <div class=\"\">
              <span class=\"\">Nom :</span>
              <span class=\"font-weight-bold\"> mamadou.dione@cossuel.co</span>
            </div> -->

            <table style=\"font-size: 14px\">
              <tr class=\"\">
                <td colspan=\"2\" class=\"font-weight-bold\">";
        // line 408
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 408), "prenom", [], "any", false, false, false, 408) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 408), "nom", [], "any", false, false, false, 408)), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                  <td>Adresse: </td>
                  <td>";
        // line 412
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 412), "adresse", [], "any", false, false, false, 412), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "electricien", [], "any", false, false, false, 412), "telephone", [], "any", false, false, false, 412), "html", null, true);
        echo "</td>
              </tr>
            </table>
          </div>
          <div class=\"col-6\" style=\"width:400px; margin-left:20px; float:left;\">
            <p class=\"cadre\" style=\"border-bottom:1px solid #000;\">Demande de conformité n° ";
        // line 417
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 417), "numero", [], "any", false, false, false, 417), "html", null, true);
        echo "</p>
            <div>
              <table style=\"font-size: 14px\">
                <tr>
                  <td colspan=\"2\">Demande d'attestation de conformité - Installateur à usage ";
        // line 421
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "usages", [], "any", false, false, false, 421), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                  <td width=\"90\">Propriétaire :</td>
                  <td class=\"font-weight-bold\">";
        // line 425
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 425), "prenom", [], "any", false, false, false, 425) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 425), "nom", [], "any", false, false, false, 425)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                  <td>Adresse: </td>
                  <td>";
        // line 429
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 429), "adresse", [], "any", false, false, false, 429), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "proprietaire", [], "any", false, false, false, 429), "telephone", [], "any", false, false, false, 429), "html", null, true);
        echo "</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div style=\"clear:both\"></div>
        <div class=\"row\" style=\"margin-top:20px;\">
        <div class=\"col-6\">
            <div class=\"row\" style=\"margin-top:10px; float:left;\">
              <div class=\"container text-center table-responsive\">
                <table class=\"table table-bordered table-sm table-hover\" cellpadding=\"1\" width=\"350\">
                  <thead class=\"\">
                    <tr>
                      <td align=\"left\" style=\"padding-left:10px;\" width=\"200\">Puissance Demandée</td>
                      <th width=\"180\">";
        // line 444
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 444), "puissance", [], "any", false, false, false, 444), "html", null, true);
        echo " Kw</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td align=\"left\" style=\"padding-left:10px;\">Type de visite</td>
                      <th scope=\"row\">";
        // line 450
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 450), "numeroPassage", [], "any", false, false, false, 450), "html", null, true);
        echo "e visite</th>
                    </tr>
                    <tr>
                      <td align=\"left\" style=\"padding-left:10px;\">Total payé</td>
                      <th scope=\"row\">";
        // line 454
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 454), "cout", [], "any", false, false, false, 454), 0, ",", " "), "html", null, true);
        echo " FCFA</th>
                    </tr>
                    <tr>
                      <td align=\"left\" style=\"padding-left:10px;\">Mode Paiement</td>
                      <th scope=\"row\">";
        // line 458
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 458), "paiement", [], "any", false, false, false, 458), "mode", [], "any", false, false, false, 458), "html", null, true);
        echo " </th>
                    </tr>
                    <tr>
                      <td align=\"left\" style=\"padding-left:10px;\">Réf. Paiement</td>
                      <th scope=\"row\">";
        // line 462
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 462), "paiement", [], "any", false, false, false, 462), "reference", [], "any", false, false, false, 462), "html", null, true);
        echo " </th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <div class=\"col-6\"  style=\"margin-top:10px; float:left;\">
        <div class=\"row\" style=\"margin-top:10px;\">
          <div class=\"col-5\" style=\"float:left;\">

            <div class=\"text-right code-qr\" style=\"margin-left:50px; width:80px; height:80px;\">
              <svg
                id=\"Calque_1\"
                data-name=\"Calque 1\"
                xmlns=\"http://www.w3.org/2000/svg\"
                viewBox=\"0 0 400 400\"
              >
                <defs>
                  <style>
                    .cls-1 {
                      opacity: 0;
                    }
                    .cls-2 {
                      fill: #fff;
                    }
                  </style>
                </defs>
                <rect class=\"cls-1\" width=\"400\" height=\"400\" />
                <rect class=\"cls-2\" width=\"399\" height=\"399\" />
                <rect width=\"19.05\" height=\"19.05\" />
                <rect x=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"19.05\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"38.1\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"57.14\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"76.19\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"95.24\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"19.05\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"95.24\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"114.29\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"133.33\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"133.33\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" y=\"133.33\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"19.05\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"95.24\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"152.38\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"19.05\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"95.24\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"171.43\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"133.33\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"190.48\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"209.52\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"133.33\" y=\"209.52\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"209.52\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"209.52\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"19.05\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"95.24\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"133.33\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"228.57\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"247.62\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"247.62\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"247.62\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"247.62\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"247.62\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"19.05\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"95.24\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"266.67\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"285.71\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"285.71\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"285.71\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"285.71\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"285.71\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"285.71\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"361.9\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"304.76\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"209.52\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"342.86\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"323.81\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"266.67\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"342.86\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"171.43\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"247.62\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"285.71\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"361.9\" width=\"19.05\" height=\"19.05\" />
                <rect y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"19.05\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"38.1\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"57.14\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"76.19\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"95.24\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"114.29\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"152.38\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"190.48\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"228.57\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"304.76\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"323.81\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
                <rect x=\"380.95\" y=\"380.95\" width=\"19.05\" height=\"19.05\" />
              </svg>
            </div>

          </div>
          <div class=\"col-7\" style=\"float:left; width:300px\">
            <p class=\"date\">Fait a Dakar, le ";
        // line 721
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["installation"] ?? null), "demandeCourante", [], "any", false, false, false, 721), "dateCreation", [], "any", false, false, false, 721), "d/m/Y"), "html", null, true);
        echo "</p>
            <h6 class=\"font-weight-bold comptable\">Le comptable</h6>
            <img width=\"150\" src=\"";
        // line 723
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/visa_compta.jpg")), "html", null, true);
        echo "\" />
          </div>
          </div>
        </div>
        </div>
      </div>
    </div>

  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "installation/recupdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  859 => 723,  854 => 721,  592 => 462,  585 => 458,  578 => 454,  571 => 450,  562 => 444,  542 => 429,  535 => 425,  528 => 421,  521 => 417,  511 => 412,  504 => 408,  488 => 395,  471 => 381,  456 => 369,  451 => 367,  189 => 108,  182 => 104,  175 => 100,  168 => 96,  159 => 90,  139 => 75,  132 => 71,  125 => 67,  118 => 63,  108 => 58,  101 => 54,  85 => 41,  68 => 27,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "installation/recupdf.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/recupdf.html.twig");
    }
}
