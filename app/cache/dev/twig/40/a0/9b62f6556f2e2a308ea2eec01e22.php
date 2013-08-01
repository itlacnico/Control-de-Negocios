<?php

/* TimsaControlFletesBundle::layout.html.twig */
class __TwigTemplate_40a09b62f6556f2e2a308ea2eec01e22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navigationBar' => array($this, 'block_navigationBar'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "\t";
        $this->displayBlock('navigationBar', $context, $blocks);
        // line 51
        echo "
\t";
        // line 52
        $this->displayBlock('header', $context, $blocks);
        // line 54
        echo "
\t";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "
\t";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "
";
    }

    // line 11
    public function block_navigationBar($context, array $blocks = array())
    {
        // line 12
        echo "
\t\t<div class=\"navbar navbar-inverse\">

\t\t\t<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
\t\t\t  <span class=\"icon-bar\"> </span>
\t\t\t  <span class=\"icon-bar\"> </span>
\t\t\t  <span class=\"icon-bar\"> </span>
\t\t\t</button>

\t\t  <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\">  <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" height=\"20\" width=\"40\"> </a>

\t\t  <div class=\"navbar-responsive-collapse\">
\t\t\t  <ul class=\"nav navbar-nav\">
\t\t\t    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("_operadores");
        echo "\">Operadores</a></li>
\t\t\t    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("_socios");
        echo "\">Socios</a></li>
\t\t\t    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("_economicos");
        echo "\">Economicos</a></li>
\t\t\t    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("_clientes");
        echo "\">Clientes</a></li>
\t\t\t    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("_cuotas");
        echo "\">Cuotas</a></li>
\t\t\t    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("_fletes");
        echo "\">Fletes</a></li>
\t\t\t  </ul>

\t\t\t  <ul class=\"nav navbar-nav pull-right\">
                <li><button type=\"button\" class=\"btn btn-default navbar-btn\">Log out</button></li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Preferencias <b class=\"caret\"></b></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Operadores</a></li>
                    <li><a href=\"#\">Economicos</a></li>
                    <li><a href=\"#\">Socios</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a></li>
                  </ul>
                </li>
              </ul>
\t\t</div>
\t\t</div>

\t";
    }

    // line 52
    public function block_header($context, array $blocks = array())
    {
        // line 53
        echo "\t";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        // line 56
        echo "\t";
    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        // line 59
        echo "
\t";
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        // line 65
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "TimsaControlFletesBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 66,  170 => 65,  167 => 64,  162 => 59,  159 => 58,  155 => 56,  152 => 55,  148 => 53,  145 => 52,  121 => 31,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  92 => 22,  80 => 12,  77 => 11,  72 => 61,  70 => 58,  67 => 57,  65 => 55,  62 => 54,  60 => 52,  57 => 51,  54 => 11,  51 => 10,  44 => 6,  40 => 5,  37 => 4,  34 => 3,);
    }
}
