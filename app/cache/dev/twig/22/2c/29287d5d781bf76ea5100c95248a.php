<?php

/* TimsaControlFletesBundle::layout.html.twig */
class __TwigTemplate_222c29287d5d781bf76ea5100c95248a extends Twig_Template
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
            'cabecera' => array($this, 'block_cabecera'),
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-glyphicons.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/docs.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

    <style type=\"text/css\">
    \tfooter {
    \t   position:absolute;
    \t   bottom:0;
    \t   width:100%;
    \t   height:60px;   /* Height of the footer */
    \t   background:#6cf;
    \t}
    </style>
";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "\t";
        $this->displayBlock('navigationBar', $context, $blocks);
        // line 65
        echo "
\t";
        // line 66
        $this->displayBlock('header', $context, $blocks);
        // line 74
        echo "
\t";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "
\t";
        // line 78
        $this->displayBlock('footer', $context, $blocks);
        // line 83
        echo "
";
    }

    // line 21
    public function block_navigationBar($context, array $blocks = array())
    {
        // line 22
        echo "
\t\t<div class=\"navbar navbar-inverse\">

\t\t\t<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
\t\t\t  <span class=\"icon-bar\"> </span>
\t\t\t  <span class=\"icon-bar\"> </span>
\t\t\t  <span class=\"icon-bar\"> </span>
\t\t\t</button>

\t\t  <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\">  <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" height=\"20\" width=\"40\"> </a>

\t\t  <div class=\"navbar-responsive-collapse\">
\t\t\t  <ul class=\"nav navbar-nav\">
\t\t\t    <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("_operadores");
        echo "\">Operadores</a></li>
\t\t\t    <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("_socios");
        echo "\">Socios</a></li>
\t\t\t    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("_economicos");
        echo "\">Economicos</a></li>
\t\t\t    <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("_clientes");
        echo "\">Clientes</a></li>
\t\t\t    <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("_cuotas");
        echo "\">Tarifario</a></li>
\t\t\t    <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("_fletes");
        echo "\">Fletes</a></li>
\t\t\t  </ul>

\t\t\t  <form class=\"navbar-form pull-right\">
\t\t\t  \t<input type=\"text\" class=\"form-control\" placeholder=\"Buscar..\" id=\"search\" style=\"width: 200px;\">
\t\t\t  \t<button type=\"submit\" class=\"btn\">Buscar</button>
\t\t\t  </form>

\t\t\t  <ul class=\"nav navbar-nav pull-left\">
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Preferencias <b class=\"caret\"></b></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Operadores</a></li>
                    <li><a href=\"#\">Economicos</a></li>
                    <li><a href=\"#\">Socios</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\" class=\"glyphicon glyphicon-off\"> Log out</a></li>
                  </ul>
                </li>
              </ul>
\t\t</div>
\t\t</div>

\t";
    }

    // line 66
    public function block_header($context, array $blocks = array())
    {
        // line 67
        echo "\t\t<div class=\"page-header\">
\t\t  <h1>  ";
        // line 68
        $this->displayBlock('cabecera', $context, $blocks);
        echo "</h1>
\t\t</div>

\t\t<div>
\t\t</div>
\t";
    }

    public function block_cabecera($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        // line 76
        echo "\t";
    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        // line 79
        echo "\t\t<footer class=\"well\">
\t\t\t<h4 class=\"col-lg-6\"><span class=\"badge primary\">Transportes Integrados de Michoacan SA de CV</span></h4>
\t\t</footer>
\t";
    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        // line 87
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t\$('ul.nav.nav-pills.nav-stacked li a').click(function(a) { 
\t\t\ta.preventDefault();          
\t\t    \$(this).parent().addClass('active').siblings().removeClass('active');           
\t\t});
\t</script>
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
        return array (  211 => 88,  206 => 87,  203 => 86,  196 => 79,  193 => 78,  189 => 76,  186 => 75,  171 => 68,  168 => 67,  165 => 66,  137 => 41,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  108 => 32,  96 => 22,  93 => 21,  88 => 83,  86 => 78,  83 => 77,  81 => 75,  78 => 74,  76 => 66,  73 => 65,  70 => 21,  67 => 20,  51 => 7,  47 => 6,  43 => 5,  38 => 4,  35 => 3,);
    }
}
