<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_b65227e2ff15fd7282c87bb105bca654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name") == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")))), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")), "method"))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 25
        echo "</td>
";
    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  47 => 25,  41 => 23,  35 => 20,  23 => 12,  20 => 11,  34 => 16,  31 => 19,  29 => 13,  26 => 14,  22 => 12,  19 => 11,  564 => 178,  553 => 176,  549 => 175,  541 => 172,  536 => 170,  530 => 168,  528 => 167,  522 => 163,  513 => 160,  509 => 159,  503 => 158,  500 => 157,  496 => 156,  491 => 154,  484 => 152,  476 => 150,  473 => 149,  470 => 148,  466 => 134,  463 => 133,  459 => 132,  456 => 131,  453 => 130,  449 => 123,  445 => 122,  442 => 121,  437 => 104,  426 => 102,  422 => 101,  415 => 97,  411 => 96,  406 => 95,  403 => 94,  391 => 83,  388 => 82,  384 => 106,  382 => 94,  378 => 92,  376 => 82,  373 => 81,  370 => 80,  365 => 135,  363 => 130,  357 => 126,  353 => 124,  351 => 121,  348 => 120,  343 => 117,  329 => 116,  320 => 115,  303 => 114,  298 => 113,  296 => 112,  292 => 110,  287 => 108,  284 => 107,  281 => 80,  278 => 79,  276 => 78,  271 => 76,  268 => 75,  265 => 74,  260 => 71,  245 => 69,  242 => 68,  239 => 67,  222 => 66,  219 => 65,  216 => 64,  210 => 60,  204 => 59,  201 => 58,  197 => 56,  193 => 55,  188 => 54,  182 => 53,  170 => 52,  168 => 51,  165 => 50,  162 => 49,  159 => 48,  156 => 47,  153 => 46,  150 => 45,  147 => 44,  144 => 43,  141 => 42,  138 => 41,  136 => 40,  132 => 38,  126 => 34,  123 => 33,  119 => 32,  115 => 30,  112 => 29,  104 => 143,  101 => 142,  98 => 141,  94 => 139,  92 => 138,  89 => 137,  87 => 74,  84 => 73,  82 => 64,  79 => 63,  77 => 29,  74 => 28,  68 => 26,  65 => 25,  62 => 24,  59 => 23,  56 => 22,  50 => 20,  45 => 17,  43 => 16,  40 => 15,  37 => 21,);
    }
}
