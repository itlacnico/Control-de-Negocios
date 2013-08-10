<?php

/* TimsaControlFletesBundle:Economico:economicos.html.twig */
class __TwigTemplate_fd0fc0e971f37b494c165741882ffc3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TimsaControlFletesBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cabecera' => array($this, 'block_cabecera'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Economicos
";
    }

    // line 7
    public function block_cabecera($context, array $blocks = array())
    {
        // line 8
        echo "Economicos
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"col-lg-4\">
\t\t<ul class=\"nav nav-pills nav-stacked\" style=\"max-width: 300px;\">
\t\t  <li class=\"active\"><a href=\"\">Roberto Medina Rincon</a></li>
\t\t  <li><a href=\"\">Crear Economico</a></li>
\t\t</ul>

\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_crearOperador");
        echo "\"><button class=\"btn\">Crear Operador</button></a>
\t</div>

\t<div>

\t</div>

\t\t
";
    }

    public function getTemplateName()
    {
        return "TimsaControlFletesBundle:Economico:economicos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  49 => 12,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
