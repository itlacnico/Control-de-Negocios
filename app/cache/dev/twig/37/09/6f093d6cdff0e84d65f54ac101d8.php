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
        return array (  65 => 11,  60 => 7,  54 => 6,  48 => 13,  45 => 12,  36 => 8,  30 => 6,  23 => 1,  206 => 87,  203 => 86,  193 => 78,  186 => 75,  171 => 68,  168 => 67,  165 => 66,  137 => 41,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  108 => 32,  93 => 21,  88 => 83,  86 => 78,  83 => 77,  81 => 75,  76 => 66,  73 => 65,  70 => 12,  67 => 20,  51 => 7,  43 => 11,  38 => 4,  35 => 3,  265 => 112,  262 => 111,  252 => 104,  248 => 103,  243 => 101,  235 => 96,  231 => 95,  227 => 94,  219 => 89,  215 => 88,  211 => 88,  204 => 83,  200 => 82,  196 => 79,  189 => 76,  185 => 76,  181 => 75,  175 => 72,  170 => 69,  163 => 67,  152 => 61,  148 => 60,  143 => 57,  138 => 56,  133 => 40,  126 => 51,  115 => 45,  111 => 44,  106 => 41,  101 => 40,  96 => 22,  89 => 35,  78 => 74,  74 => 28,  69 => 25,  64 => 24,  50 => 12,  47 => 6,  42 => 8,  39 => 7,  34 => 7,  31 => 3,);
    }
}
