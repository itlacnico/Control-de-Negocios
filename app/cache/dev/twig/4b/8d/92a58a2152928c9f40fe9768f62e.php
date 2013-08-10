<?php

/* TimsaControlFletesBundle:Operador:operadores.html.twig */
class __TwigTemplate_4b8d92a58a2152928c9f40fe9768f62e extends Twig_Template
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
        echo "\tOperadores
";
    }

    // line 7
    public function block_cabecera($context, array $blocks = array())
    {
        // line 8
        echo "Operadores
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"col-lg-4\">
\t\t<ul class=\"nav nav-pills nav-stacked\" style=\"max-width: 300px;\">
\t\t  <li class=\"active\"><a href=\"\">Operadores</a></li>
\t\t  <li><a href=\"\">Operadores Libres</a></li>
\t\t  <li><a href=\"\">Operadores Ocupados</a></li>
\t\t  <li><a href=\"\">Crear Operador</a></li>
\t\t</ul>

\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("_crearOperador");
        echo "\"><button class=\"btn\">Crear Operador</button></a>
\t</div>

\t<div class=\"col-lg-8\">
\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operadores"]) ? $context["operadores"] : $this->getContext($context, "operadores")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["operador"]) {
            // line 25
            echo "\t\t\t<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operador"]) ? $context["operador"] : $this->getContext($context, "operador")), "nombre"), "html", null, true);
            echo "</h1>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "\t\t\t<h1>No existen Operadores</h1>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t</div>

\t\t
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
        return array (  86 => 29,  79 => 27,  71 => 25,  66 => 24,  59 => 20,  49 => 12,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
