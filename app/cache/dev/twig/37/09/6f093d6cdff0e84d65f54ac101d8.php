<?php

/* ::base.html.twig */
class __TwigTemplate_37096f093d6cdff0e84d65f54ac101d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 13,  45 => 12,  36 => 8,  30 => 6,  23 => 1,  185 => 76,  180 => 75,  177 => 74,  170 => 67,  167 => 66,  163 => 64,  160 => 63,  156 => 61,  153 => 60,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  100 => 30,  88 => 20,  85 => 19,  80 => 71,  78 => 66,  75 => 65,  73 => 63,  70 => 12,  68 => 60,  65 => 11,  62 => 19,  59 => 18,  44 => 6,  40 => 5,  37 => 4,  145 => 90,  141 => 89,  136 => 88,  133 => 87,  63 => 19,  60 => 7,  53 => 14,  49 => 13,  46 => 12,  43 => 11,  34 => 7,  31 => 3,);
    }
}
