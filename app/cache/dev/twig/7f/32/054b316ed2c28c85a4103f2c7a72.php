<?php

/* TimsaControlFletesBundle:Operador:form_operador.html.twig */
class __TwigTemplate_7f32054b316ed2c28c85a4103f2c7a72 extends Twig_Template
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
  <h1>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "</h1>
</div>

 ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"container\">

\t\t";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "well col-lg-5")));
        echo "
\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'label', array("label" => "Nombre"));
        echo "
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'label', array("label" => "Telefono"));
        echo "
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "CURP"), 'label', array("label" => "CURP"));
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "CURP"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>


\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "RC"), 'label', array("label" => "R.C."));
        echo "
\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "RC"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>



\t\t\t ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t <button type=\"submit\" class=\"btn btn-default\">Submit</button>
\t\t\t <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("_operadores");
        echo "\"><button type=\"reset\" class=\"btn btn-danger\"> Volver</button></a>
\t\t";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t</div>

";
    }

    public function getTemplateName()
    {
        return "TimsaControlFletesBundle:Operador:form_operador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  112 => 42,  107 => 40,  99 => 35,  95 => 34,  87 => 29,  83 => 28,  76 => 24,  72 => 23,  65 => 19,  61 => 18,  55 => 15,  51 => 14,  47 => 12,  44 => 11,  36 => 6,  32 => 4,  29 => 3,);
    }
}
