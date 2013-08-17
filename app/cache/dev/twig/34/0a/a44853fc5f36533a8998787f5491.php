<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_340aa44853fc5f36533a8998787f5491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
            'list_table' => array($this, 'block_list_table'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayBlock('preview', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 17
        echo "
    <div class=\"row-fluid\">
        <div class=\"sonata-ba-list span10\">
            ";
        // line 20
        $this->displayBlock('list_table', $context, $blocks);
        // line 21
        echo "        </div>

        <div class=\"sonata-ba-filter span2\">
            ";
        // line 24
        $this->displayBlock('list_filters', $context, $blocks);
        // line 25
        echo "        </div>
    </div>
";
    }

    // line 13
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
    }

    // line 15
    public function block_list($context, array $blocks = array())
    {
    }

    // line 16
    public function block_show($context, array $blocks = array())
    {
    }

    // line 20
    public function block_list_table($context, array $blocks = array())
    {
    }

    // line 24
    public function block_list_filters($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  87 => 20,  82 => 16,  77 => 15,  72 => 14,  67 => 13,  61 => 25,  59 => 24,  54 => 21,  52 => 20,  47 => 17,  44 => 16,  41 => 15,  38 => 14,  35 => 13,  29 => 12,  26 => 11,);
    }
}
