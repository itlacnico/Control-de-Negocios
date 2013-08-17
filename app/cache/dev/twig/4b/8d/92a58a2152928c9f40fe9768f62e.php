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
\t\t<ul class=\"nav nav-tabs nav-pills nav-stacked\" style=\"max-width: 300px;\" id=\"myTab\">
\t\t  <li class=\"active\"><a href=\"#mostrar_operadores\" data-toggle=\"tab\">Operadores</a></li>
\t\t  <li><a href=\"#operadores_libres\" data-toggle=\"tab\">Operadores Libres</a></li>
\t\t  <li><a href=\"#operadores_ocupados\" data-toggle=\"tab\">Operadores Ocupados</a></li>
\t\t  ";
        // line 18
        echo "\t\t</ul>

\t</div>

\t<div class=\"tab-content\">
\t\t<div class=\"tab-pane active col-lg-8\" id=\"mostrar_operadores\">
\t\t\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operadores"]) ? $context["operadores"] : $this->getContext($context, "operadores")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["operador"]) {
            // line 25
            echo "\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t<li class=\"col-lg-3\">
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t<img width=\"100\" height=\"100\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["operador"]) ? $context["operador"] : $this->getContext($context, "operador")), "imagen"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<h5><span class=\"label label-info\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operador"]) ? $context["operador"] : $this->getContext($context, "operador")), "nombre"), "html", null, true);
            echo "</span></h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "\t\t\t\t\t<h1>No existen Operadores</h1>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t</div>

\t\t<div class=\"tab-pane col-lg-8\" id=\"operadores_libres\">
\t\t\t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operadores_libres"]) ? $context["operadores_libres"] : $this->getContext($context, "operadores_libres")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["operador"]) {
            // line 41
            echo "\t\t\t<ul class=\"list-inline\">
\t\t\t\t<li class=\"col-lg-3\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<img width=\"100\" height=\"100\" src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["operador"]) ? $context["operador"] : $this->getContext($context, "operador")), "imagen"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<h5><span class=\"label label-info\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operador"]) ? $context["operador"] : $this->getContext($context, "operador")), "nombre"), "html", null, true);
            echo "</span></h5>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "\t\t\t\t<h1>No existen Operadores Libres</h1>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t</div>

\t\t<div class=\"tab-pane col-lg-8\" id=\"operadores_ocupados\">
\t\t\t";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operadores_ocupados"]) ? $context["operadores_ocupados"] : $this->getContext($context, "operadores_ocupados")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["operador"]) {
            // line 57
            echo "\t\t\t<ul class=\"list-inline\">
\t\t\t\t<li class=\"col-lg-3\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<img width=\"100\" height=\"100\" src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["operador"]) ? $context["operador"] : $this->getContext($context, "operador")), "imagen"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<h5><span class=\"label label-warning\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operador"]) ? $context["operador"] : $this->getContext($context, "operador")), "nombre"), "html", null, true);
            echo "</span></h5>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "\t\t\t\t<h1>No existen Operadores Ocupados</h1>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t</div>
";
        // line 107
        echo "\t</div>

\t\t
";
    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        // line 113
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
\t\t\$('#myTab').click(function(event) {
\t\t\t\$('#myTab a').tab('show');
\t\t});

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
        return array (  184 => 113,  181 => 112,  174 => 107,  171 => 69,  164 => 67,  153 => 61,  149 => 60,  144 => 57,  139 => 56,  134 => 53,  127 => 51,  116 => 45,  112 => 44,  107 => 41,  102 => 40,  97 => 37,  90 => 35,  79 => 29,  75 => 28,  70 => 25,  65 => 24,  57 => 18,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
