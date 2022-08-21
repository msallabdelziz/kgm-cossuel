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

/* include/_footer.html.twig */
class __TwigTemplate_32cb2c41f393279e6e0bbd80f4b49902 extends Template
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
        echo "
\t\t<!-- Fichiers JS -->
\t\t<!-- JavaScript: Bootstrap Bundle with Popper -->
\t\t<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\" defer></script>
\t\t<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.6.0.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 7
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ajaxload.js"), "html", null, true);
        echo "\"></script>

\t\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/d3.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/d3Pie.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/c3.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 27
        echo "\t\t<script>

\t\t";
        // line 32
        echo "
\t\t\$(document).ready(function() {
\t\t\t\$(window).keydown(function(event) {
\t\t\t\tif(event.keyCode == 13) {
\t\t\t\tevent.preventDefault();
\t\t\t\treturn false;
\t\t\t\t}
\t\t\t});

\t\t\tif(\$(\"#val_rech0\").length) {
\t\t\t\t\$(\"#val_rech0\").keydown(function(event) {
\t\t\t\t\tif(event.keyCode == 13) {
\t\t\t\t\t\t\$(\"#val_rech\").val(\$(\"#val_rech0\").val());
\t\t\t\t\t\t\$(\"#form_rech_list\").submit();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\t// Fill modal with content from link href
\t\t\t\$(\"#modal\").on(\"show.bs.modal\", function(e) {
\t\t\t\tvar link = \$(e.relatedTarget); 
\t\t\t\t\$(this).find(\".modal-body\").load(link.attr(\"href\"));
\t\t\t\t\$(\".modal-backdrop\").remove();

\t\t\t});\t

\t\t\t// Fill modal with content from link href
\t\t\t\$(\"#modal2\").on(\"show.bs.modal\", function(e) {
\t\t\t\tvar link = \$(e.relatedTarget); 
\t\t\t\t\$(this).find(\".modal-body\").load(link.attr(\"href\"));
\t\t\t\t\$(\".modal-backdrop\").remove();

\t\t\t});\t


\t\t});

\t\tfunction convert_date(today) {
\t\t\ttoday=new Date(today)
\t\t\tvar dd = today.getDate();

\t\t\tvar mm = today.getMonth()+1; 
\t\t\tvar yyyy = today.getFullYear();
\t\t\tif(dd<10) 
\t\t\t{
\t\t\t\tdd='0'+dd;
\t\t\t} 

\t\t\tif(mm<10) 
\t\t\t{
\t\t\t\tmm='0'+mm;
\t\t\t} 
\t\t\ttoday = yyyy+'-'+mm+'-'+dd;\t
\t\t\treturn today;\t
\t\t}
\t\t</script>
";
    }

    public function getTemplateName()
    {
        return "include/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 32,  72 => 27,  68 => 12,  64 => 11,  60 => 10,  55 => 8,  50 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "include/_footer.html.twig", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/templates/include/_footer.html.twig");
    }
}
