<?php

/* TimsaControlFletesBundle:Principal:principal.html.twig */
class __TwigTemplate_fa4afd0f846dd5c1e6f1d37690afbf06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TimsaControlFletesBundle::layout.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TimsaControlFletesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"page-header\">
  <h1>Actividades Diarias <small>Dia </small></h1>
</div>

 ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"container\">
\t\t<img class=\"col-6 col-lg-4\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"> <br>
\t\t<a href=\"\"><button class=\"btn btn-default btn-large clearfix\">Crear Flete</button></a>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "TimsaControlFletesBundle:Principal:principal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  44 => 12,  41 => 11,  32 => 4,  29 => 3,);
    }
}
