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
        return array (  48 => 13,  45 => 12,  43 => 11,  36 => 8,  30 => 6,  23 => 1,  175 => 66,  170 => 65,  167 => 64,  162 => 59,  159 => 58,  155 => 56,  152 => 55,  148 => 53,  145 => 52,  121 => 31,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  92 => 22,  80 => 12,  77 => 11,  72 => 61,  70 => 12,  67 => 57,  65 => 11,  62 => 54,  60 => 7,  57 => 51,  54 => 6,  51 => 10,  40 => 5,  37 => 4,  34 => 7,  47 => 13,  44 => 6,  41 => 11,  32 => 4,  29 => 3,);
    }
}
