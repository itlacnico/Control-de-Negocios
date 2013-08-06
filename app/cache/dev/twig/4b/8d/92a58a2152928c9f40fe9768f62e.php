<?php

/* TimsaControlFletesBundle:Operador:operadores.html.twig */
class __TwigTemplate_4b8d92a58a2152928c9f40fe9768f62e extends Twig_Template
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
  <h1 >Operadores</h1>
</div>

<div>
\t<img class=\"col-lg-3 col-lg-offset-4\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
</div>

";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "\t<div class=\"container\">
\t\t
\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_crearOperador");
        echo "\"><button class=\"btn btn-default btn-large\">Crear Operador</button></a>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "TimsaControlFletesBundle:Operador:operadores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 18,  51 => 16,  48 => 15,  40 => 10,  32 => 4,  29 => 3,);
    }
}
