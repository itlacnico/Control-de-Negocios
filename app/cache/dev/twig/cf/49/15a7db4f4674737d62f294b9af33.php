<?php

/* TimsaControlFletesBundle:Cuota:cuotas.html.twig */
class __TwigTemplate_cf4915a7db4f4674737d62f294b9af33 extends Twig_Template
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
  <h1>Fletes</h1>
</div>

 ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t<table class=\"table table-bordered\">
\t  <thead>
\t    <tr>
\t      <th rowspan=2> Num. Cuota </th>
\t      <th rowspan=2> Nombre </th>
\t      <th colspan=3 > Sencillo </th>
\t      <th colspan=3> Full</th>
\t      </tr>
\t      <tr>
\t        <th> Importacion </th>
\t        <th> Exportacion </th>
\t        <th> Reutilizado </th>

\t        <th> Importacion </th>
\t        <th> Exportacion </th>
\t        <th> Reutilizado </th>
\t      </tr>      
\t    
\t  </thead>
\t  <tbody>
\t  \t<tr>
\t  \t\t<td>askdjbaskjdsakj</td>
\t  \t</tr>
\t  </tbody>
\t</table>

";
    }

    public function getTemplateName()
    {
        return "TimsaControlFletesBundle:Cuota:cuotas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  41 => 11,  32 => 4,  29 => 3,);
    }
}
