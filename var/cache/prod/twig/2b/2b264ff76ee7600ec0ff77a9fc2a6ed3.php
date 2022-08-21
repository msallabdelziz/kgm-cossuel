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

/* @BazingaGeocoder/Collector/icon.svg */
class __TwigTemplate_81d3b4bb8e595f953306ad6fd40b9d9a extends Template
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
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\">
    <g transform=\"matrix(1,0,0,-1,364.47458,1270.2373)\">
        <path class=\"st0\" d=\"M-349,1261.7c0,0.9-0.3,1.8-1,2.4s-1.5,1-2.4,1s-1.8-0.3-2.4-1s-1-1.5-1-2.4s0.3-1.8,1-2.4 c0.7-0.7,1.5-1,2.4-1s1.8,0.3,2.4,1C-349.4,1259.9-349,1260.7-349,1261.7z M-345.6,1261.7c0-1-0.1-1.8-0.4-2.4l-4.9-10.4 c-0.1-0.3-0.4-0.5-0.6-0.7s-0.6-0.3-0.9-0.3s-0.6,0.1-0.9,0.3s-0.5,0.4-0.6,0.7l-4.9,10.4c-0.3,0.6-0.4,1.4-0.4,2.4 c0,1.9,0.7,3.5,2,4.8c1.3,1.3,3,2,4.8,2s3.5-0.7,4.8-2C-346.3,1265.2-345.6,1263.6-345.6,1261.7z\" style=\"fill:#aaaaaa\"/>
    </g>
</svg>";
    }

    public function getTemplateName()
    {
        return "@BazingaGeocoder/Collector/icon.svg";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@BazingaGeocoder/Collector/icon.svg", "/Users/msallabdelaziz/Desktop/CossuelAppV2/kgm-cossuel-master-3/vendor/willdurand/geocoder-bundle/Resources/views/Collector/icon.svg");
    }
}
