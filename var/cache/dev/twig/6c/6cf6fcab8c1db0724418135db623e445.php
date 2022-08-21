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

/* installation/facturepdf.html.twig */
class __TwigTemplate_e2a05cad47add6dd4f7dccb71a023eee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/facturepdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation/facturepdf.html.twig"));

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

    <title>Facture</title>

    <style>
        
    </style>
  </head>
  <body style=\"border:0px; background-color:#fff; padding:0px; margin:0px;\">
    <div class=\"container\" style=\"width:850px; margin-left:auto; margin-right:auto;\">
      <div class=\"invoice\" style=\"\">
        <div class=\"row\" style=\"border:0px; padding:0px; margin:0px;\">
            <div class=\"col-7\" style=\"border:0px; padding:0px; margin:2px; float:left; width:500\">
            <img width=\"340\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Logo_COSSUEL.png")), "html", null, true);
        echo "\" />
          </div>
          <div class=\"col-5\" style=\"float:right; width:200px\">
            <p class=\"text-center attest-conform text-dark\">
              <a href=\"\">
                <strong
                  >Demande d'attestation de conformité a usage ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 33, $this->source); })()), "usages", [], "any", false, false, false, 33), "html", null, true);
        echo "</strong
                ></a
              >
            </p>
          </div>
        </div>
        <div style=\"clear:both\"></div>
        <div class=\"row mt-4\">
          <div class=\"col-12 mt-4\">
            <h4 class=\"document-type\" style=\"padding:4px;border-top:2px solid #000; border-bottom:2px solid #000;\" align=\"center\">FACTURE N° ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 42, $this->source); })()), "demandeCourante", [], "any", false, false, false, 42), "numero", [], "any", false, false, false, 42), "html", null, true);
        echo "</h4>
          </div>
        </div>
        <br />
        <br />
        <br />
        <div class=\"\" style=\" padding:0px; \">
          <div class=\"col-6\" style=\"width:400px; float:left;\">
            <p class=\"cadre\" style=\"border-bottom:1px solid #000;\">Doit</p>
            <!-- <div class=\"\">
              <span class=\"\">Nom :</span>
              <span class=\"font-weight-bold\"> mamadou.dione@cossuel.co</span>
            </div> -->

            <table style=\"font-size: 14px\">
              <tr class=\"\">
                <td width=\"90\">Nom :</td>
                <td class=\"font-weight-bold\">";
        // line 59
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 59, $this->source); })()), "electricien", [], "any", false, false, false, 59), "prenom", [], "any", false, false, false, 59) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 59, $this->source); })()), "electricien", [], "any", false, false, false, 59), "nom", [], "any", false, false, false, 59)), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <td class=\"\">Adresse :</td>
                <td class=\"\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 63, $this->source); })()), "electricien", [], "any", false, false, false, 63), "adresse", [], "any", false, false, false, 63), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <td class=\"\">Téléphone:</td>
                <td class=\"\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 67, $this->source); })()), "electricien", [], "any", false, false, false, 67), "telephone", [], "any", false, false, false, 67), "html", null, true);
        echo "</td>
              </tr>
              <tr>
                <td class=\"\">Email :</td>
                <td class=\"\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 71, $this->source); })()), "electricien", [], "any", false, false, false, 71), "email", [], "any", false, false, false, 71), "html", null, true);
        echo "</td>
              </tr>
            </table>
          </div>
          <div class=\"col-6\" style=\"width:400px; margin-left:20px; float:left;\">
            <p class=\"cadre\" style=\"border-bottom:1px solid #000;\">Pour</p>
            <div>
              <table style=\"font-size: 14px\">
                <tr>
                  <td width=\"90\">Nom :</td>
                  <td class=\"\">";
        // line 81
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 81, $this->source); })()), "proprietaire", [], "any", false, false, false, 81), "prenom", [], "any", false, false, false, 81) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 81, $this->source); })()), "proprietaire", [], "any", false, false, false, 81), "nom", [], "any", false, false, false, 81)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                  <td class=\"\">Adresse :</td>
                  <td class=\"\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 85, $this->source); })()), "proprietaire", [], "any", false, false, false, 85), "adresse", [], "any", false, false, false, 85), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                  <td class=\"\">Téléphone:</td>
                  <td class=\"\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 89, $this->source); })()), "proprietaire", [], "any", false, false, false, 89), "telephone", [], "any", false, false, false, 89), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                  <td class=\"\">Email:</td>
                  <td class=\"\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 93, $this->source); })()), "proprietaire", [], "any", false, false, false, 93), "email", [], "any", false, false, false, 93), "html", null, true);
        echo "</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div style=\"clear:both\"></div>
        <div class=\"row\" style=\"margin-top:50px;\">
          <div class=\"container text-center table-responsive pt-5\">
            <table class=\"table table-bordered table-hover\"width=\"700\">
              <thead class=\"\">
                <tr>
                  <td width=\"300\">Puissance Demandée</td>
                  <th>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 106, $this->source); })()), "demandeCourante", [], "any", false, false, false, 106), "puissance", [], "any", false, false, false, 106), "html", null, true);
        echo " Kw</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Type de visite</td>
                  <th scope=\"row\">";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 112, $this->source); })()), "demandeCourante", [], "any", false, false, false, 112), "numeroPassage", [], "any", false, false, false, 112), "html", null, true);
        echo "e visite</th>
                </tr>
                <tr>
                  <td>Montant a payer</td>
                  <th scope=\"row\">";
        // line 116
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 116, $this->source); })()), "demandeCourante", [], "any", false, false, false, 116), "cout", [], "any", false, false, false, 116), 0, ",", " "), "html", null, true);
        echo " FCFA</th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class=\"row\" style=\"margin-top:100px;\">
          <div class=\"col-8\" style=\"float:left;\">

            <div class=\"text-right code-qr\" style=\"margin-left:150px; width:180px; height:180px;\">
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
          <div class=\"col-4\" style=\"float:left; width:300px\">
            <p class=\"date\">Fait a Dakar, le ";
        // line 374
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["installation"]) || array_key_exists("installation", $context) ? $context["installation"] : (function () { throw new RuntimeError('Variable "installation" does not exist.', 374, $this->source); })()), "demandeCourante", [], "any", false, false, false, 374), "dateCreation", [], "any", false, false, false, 374), "d/m/Y"), "html", null, true);
        echo "</p>
            <h6 class=\"font-weight-bold comptable\">Le comptable</h6>
            <img width=\"150\" src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/visa_compta.jpg")), "html", null, true);
        echo "\" />
          </div>
        </div>
        <br />
        <br />
        <br />
        <br />
        <p class=\"bottom-page text-center\">
          Comité Sénégalais pour la Sécurité des Usagers de l'Electricité
          (COSSUEL) Organisme agréé par le Ministère chargé de l'Energie
          suivant le decret No 0022609 du 22 Août 2019 Adresse: 2 Rue Wagane
          Diouf, Immeuble Mame Alassane FALL, 7ème étage DAKAR SENEGAL
          Téléphone: (+221) 76 644 76 02/ 33 842 01 81 Email: cossuel@cossuel.sn
        </p>
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
        return "installation/facturepdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  468 => 376,  463 => 374,  202 => 116,  195 => 112,  186 => 106,  170 => 93,  163 => 89,  156 => 85,  149 => 81,  136 => 71,  129 => 67,  122 => 63,  115 => 59,  95 => 42,  83 => 33,  74 => 27,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
    <link rel=\"stylesheet\" href=\"{{absolute_url(asset('assets/css/facture-pdf.css'))}}\" />

    <title>Facture</title>

    <style>
        
    </style>
  </head>
  <body style=\"border:0px; background-color:#fff; padding:0px; margin:0px;\">
    <div class=\"container\" style=\"width:850px; margin-left:auto; margin-right:auto;\">
      <div class=\"invoice\" style=\"\">
        <div class=\"row\" style=\"border:0px; padding:0px; margin:0px;\">
            <div class=\"col-7\" style=\"border:0px; padding:0px; margin:2px; float:left; width:500\">
            <img width=\"340\" src=\"{{absolute_url(asset('assets/img/Logo_COSSUEL.png'))}}\" />
          </div>
          <div class=\"col-5\" style=\"float:right; width:200px\">
            <p class=\"text-center attest-conform text-dark\">
              <a href=\"\">
                <strong
                  >Demande d'attestation de conformité a usage {{ installation.usages }}</strong
                ></a
              >
            </p>
          </div>
        </div>
        <div style=\"clear:both\"></div>
        <div class=\"row mt-4\">
          <div class=\"col-12 mt-4\">
            <h4 class=\"document-type\" style=\"padding:4px;border-top:2px solid #000; border-bottom:2px solid #000;\" align=\"center\">FACTURE N° {{installation.demandeCourante.numero}}</h4>
          </div>
        </div>
        <br />
        <br />
        <br />
        <div class=\"\" style=\" padding:0px; \">
          <div class=\"col-6\" style=\"width:400px; float:left;\">
            <p class=\"cadre\" style=\"border-bottom:1px solid #000;\">Doit</p>
            <!-- <div class=\"\">
              <span class=\"\">Nom :</span>
              <span class=\"font-weight-bold\"> mamadou.dione@cossuel.co</span>
            </div> -->

            <table style=\"font-size: 14px\">
              <tr class=\"\">
                <td width=\"90\">Nom :</td>
                <td class=\"font-weight-bold\">{{ installation.electricien.prenom ~ ' ' ~ installation.electricien.nom }}</td>
              </tr>
              <tr>
                <td class=\"\">Adresse :</td>
                <td class=\"\">{{ installation.electricien.adresse }}</td>
              </tr>
              <tr>
                <td class=\"\">Téléphone:</td>
                <td class=\"\">{{ installation.electricien.telephone }}</td>
              </tr>
              <tr>
                <td class=\"\">Email :</td>
                <td class=\"\">{{ installation.electricien.email }}</td>
              </tr>
            </table>
          </div>
          <div class=\"col-6\" style=\"width:400px; margin-left:20px; float:left;\">
            <p class=\"cadre\" style=\"border-bottom:1px solid #000;\">Pour</p>
            <div>
              <table style=\"font-size: 14px\">
                <tr>
                  <td width=\"90\">Nom :</td>
                  <td class=\"\">{{ installation.proprietaire.prenom ~ ' ' ~ installation.proprietaire.nom }}</td>
                </tr>
                <tr>
                  <td class=\"\">Adresse :</td>
                  <td class=\"\">{{ installation.proprietaire.adresse }}</td>
                </tr>
                <tr>
                  <td class=\"\">Téléphone:</td>
                  <td class=\"\">{{ installation.proprietaire.telephone }}</td>
                </tr>
                <tr>
                  <td class=\"\">Email:</td>
                  <td class=\"\">{{ installation.proprietaire.email }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div style=\"clear:both\"></div>
        <div class=\"row\" style=\"margin-top:50px;\">
          <div class=\"container text-center table-responsive pt-5\">
            <table class=\"table table-bordered table-hover\"width=\"700\">
              <thead class=\"\">
                <tr>
                  <td width=\"300\">Puissance Demandée</td>
                  <th>{{ installation.demandeCourante.puissance }} Kw</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Type de visite</td>
                  <th scope=\"row\">{{ installation.demandeCourante.numeroPassage }}e visite</th>
                </tr>
                <tr>
                  <td>Montant a payer</td>
                  <th scope=\"row\">{{ installation.demandeCourante.cout|number_format(0, ',', ' ') }} FCFA</th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class=\"row\" style=\"margin-top:100px;\">
          <div class=\"col-8\" style=\"float:left;\">

            <div class=\"text-right code-qr\" style=\"margin-left:150px; width:180px; height:180px;\">
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
          <div class=\"col-4\" style=\"float:left; width:300px\">
            <p class=\"date\">Fait a Dakar, le {{ installation.demandeCourante.dateCreation | date(\"d/m/Y\") }}</p>
            <h6 class=\"font-weight-bold comptable\">Le comptable</h6>
            <img width=\"150\" src=\"{{absolute_url(asset('assets/img/visa_compta.jpg'))}}\" />
          </div>
        </div>
        <br />
        <br />
        <br />
        <br />
        <p class=\"bottom-page text-center\">
          Comité Sénégalais pour la Sécurité des Usagers de l'Electricité
          (COSSUEL) Organisme agréé par le Ministère chargé de l'Energie
          suivant le decret No 0022609 du 22 Août 2019 Adresse: 2 Rue Wagane
          Diouf, Immeuble Mame Alassane FALL, 7ème étage DAKAR SENEGAL
          Téléphone: (+221) 76 644 76 02/ 33 842 01 81 Email: cossuel@cossuel.sn
        </p>
      </div>
    </div>


  </body>
</html>
", "installation/facturepdf.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/installation/facturepdf.html.twig");
    }
}
