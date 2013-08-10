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
            'javascripts' => array($this, 'block_javascripts'),
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
\t\t<ul class=\"nav nav-pills nav-stacked\" style=\"max-width: 300px;\" id=\"myTab\">
\t\t  <li class=\"active\"><a href=\"#mostrar_operadores\" data-toggle=\"tab\">Operadores</a></li>
\t\t  <li><a href=\"\" data-toggle=\"tab\">Operadores Libres</a></li>
\t\t  <li><a href=\"\" data-toggle=\"tab\">Operadores Ocupados</a></li>
\t\t  <li><a href=\"#crear\" data-toggle=\"tab\">Crear Operador</a></li>
\t\t</ul>

\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("_crearOperador");
        echo "\"><button class=\"btn\">Crear Operador</button></a>
\t</div>

\t<div class=\"tab-content\">
\t\t<div class=\"tab-pane\" id=\"crear\">
\t\t\tCrear
\t\t</div>
\t\t<div class=\"tab-pane\" id=\"mostrar_operadores\">
\t\t\tMostrar
\t\t</div>
\t</div>

\t<div class=\"col-lg-8\">
\t\t\t";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operadores"]) ? $context["operadores"] : $this->getContext($context, "operadores")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["operador"]) {
            // line 34
            echo "\t\t\t\t<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operador"]) ? $context["operador"] : $this->getContext($context, "operador")), "nombre"), "html", null, true);
            echo "</h1>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "\t\t\t\t<h1>No existen Operadores</h1>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t</div>

\t\t
";
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
\t  \$(function (e) {
\t  \te.preventDefault();
\t    \$('#myTab a:last').tab('show');
\t  })
\t</script>

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
        return array (  106 => 44,  103 => 43,  96 => 38,  89 => 36,  81 => 34,  76 => 33,  60 => 20,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
