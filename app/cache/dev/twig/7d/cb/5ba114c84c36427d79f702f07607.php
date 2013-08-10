<?php

/* TimsaControlFletesBundle:Socio:socios.html.twig */
class __TwigTemplate_7dcb5ba114c84c36427d79f702f07607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TimsaControlFletesBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_cabecera($context, array $blocks = array())
    {
        // line 4
        echo "Socios
<div>
</div>

";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "\t<div class=\"col-lg-4\">
\t\t<ul class=\"nav nav-pills nav-stacked\" style=\"max-width: 300px;\">
\t\t  <li class=\"active\"><a href=\"\">Socios</a></li>
\t\t  <li><a href=\"\">Crear Socio</a></li>
\t\t</ul>

\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("_crearOperador");
        echo "\"><button class=\"btn\">Crear Operador</button></a>
\t</div>

\t<div>
\t\t
\t</div>

\t\t
";
    }

    public function getTemplateName()
    {
        return "TimsaControlFletesBundle:Socio:socios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  43 => 11,  40 => 10,  32 => 4,  29 => 3,);
    }
}
