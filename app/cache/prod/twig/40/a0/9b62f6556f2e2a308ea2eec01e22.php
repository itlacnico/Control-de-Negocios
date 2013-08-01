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
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "\t";
        $this->displayBlock('navigationBar', $context, $blocks);
        // line 43
        echo "
\t";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "
\t";
        // line 46
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "
";
    }

    // line 9
    public function block_navigationBar($context, array $blocks = array())
    {
        // line 10
        echo "\t\t<div class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t  <div class=\"navbar-inner\">
\t\t           <div class=\"container\">
\t\t      <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t      </button>
\t\t      <a class=\"brand\" href=\"TIMSA.php\"><img height=\"35\" width=\"35\" src=\"../img/logo.png\"> </a>

\t\t      <div class=\"nav-collapse collapse\">
\t\t        <ul class=\"nav\">
\t\t          <li class=\"\">
\t\t            <a href=\"operadores.php\">Operadores <i class=\"icon-user icon-white\"></i> </a>
\t\t          </li>
\t\t          <li class=\"\">
\t\t            <a href=\"#\">Economicos <i class=\"icon-road icon-white\"> </i> </a>
\t\t          </li>
\t\t          <li class=\"\">
\t\t            <a href=\"./clientes.php\">Clientes <i class=\"icon-list icon-white\"> </i> </a>
\t\t          </li>
\t\t          <li class=\"\">
\t\t            <a href=\"./socios.php\">Socios <i class=\"icon-bookmark icon-white\"> </i> </a>
\t\t          </li>
\t\t          <li >
\t\t            <a href=\"./cuotas.php\">Cuotas <i class=\"icon-fire icon-white\"> </i> </a>
\t\t          </li>
\t\t             <li class=\"\">
\t\t            <a href=\"./fletes.php\">Fletes <i class=\"icon-th-large icon-white\"> </i> </a>
\t\t          </li>
\t\t        </ul>
\t\t</div>
\t";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
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
        return array (  112 => 46,  106 => 44,  70 => 10,  67 => 9,  62 => 47,  60 => 46,  57 => 45,  55 => 44,  52 => 43,  49 => 9,  46 => 8,  40 => 5,  35 => 4,  32 => 3,  31 => 4,  28 => 3,);
    }
}
