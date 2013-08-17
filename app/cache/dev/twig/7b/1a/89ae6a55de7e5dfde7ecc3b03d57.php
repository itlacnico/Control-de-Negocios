<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_7b1a89ae6a55de7e5dfde7ecc3b03d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        <table class=\"table table-bordered table-striped sonata-ba-list\">
            <thead>
                <tr>
                    <th colspan=\"3\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
            echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                // line 25
                echo "                    ";
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")))) {
                    // line 26
                    echo "                        <tr>
                            <td class=\"sonata-ba-list-label\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</td>
                            <td>
                                <div class=\"btn-group\">
                                    ";
                    // line 30
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 31
                        echo "                                        ";
                        if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                            // line 32
                            echo "                                            <a class=\"btn btn-small\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                            echo "\">
                                                <i class=\"icon-plus\"></i>
                                                ";
                            // line 34
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                            // line 35
                            echo "                                            </a>
                                        ";
                        } else {
                            // line 37
                            echo "                                            <a class=\"btn btn-small dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"icon-plus\"></i>
                                                ";
                            // line 39
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                            // line 40
                            echo "                                                <span class=\"caret\"></span>
                                            </a>
                                            <ul class=\"dropdown-menu\">
                                                ";
                            // line 43
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                // line 44
                                echo "                                                <li>
                                                    <a href=\"";
                                // line 45
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), "html", null, true);
                                echo "</a>
                                                </li>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 48
                            echo "                                            </ul>
                                        ";
                        }
                        // line 50
                        echo "                                    ";
                    }
                    // line 51
                    echo "                                    ";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                        // line 52
                        echo "                                        <a class=\"btn btn-small\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                        echo "\">
                                            <i class=\"icon-list\"></i>
                                            ";
                        // line 54
                        echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                        // line 55
                        echo "</a>
                                    ";
                    }
                    // line 57
                    echo "                                </div>
                            </td>
                        </tr>
                    ";
                }
                // line 61
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 62,  139 => 61,  133 => 57,  129 => 55,  127 => 54,  121 => 52,  118 => 51,  115 => 50,  100 => 45,  97 => 44,  93 => 43,  86 => 39,  78 => 35,  70 => 32,  67 => 31,  56 => 26,  49 => 24,  41 => 19,  31 => 15,  647 => 215,  644 => 214,  639 => 209,  632 => 205,  626 => 202,  622 => 200,  620 => 199,  617 => 198,  611 => 196,  609 => 195,  606 => 194,  600 => 192,  598 => 191,  595 => 190,  589 => 188,  587 => 187,  584 => 186,  578 => 184,  576 => 183,  573 => 182,  570 => 181,  565 => 169,  561 => 138,  555 => 137,  546 => 134,  541 => 133,  536 => 132,  533 => 131,  528 => 130,  525 => 129,  519 => 119,  515 => 118,  512 => 117,  504 => 114,  498 => 113,  490 => 111,  487 => 110,  483 => 109,  478 => 107,  475 => 106,  470 => 105,  467 => 104,  464 => 103,  458 => 102,  452 => 120,  449 => 119,  446 => 103,  444 => 102,  440 => 100,  437 => 99,  430 => 95,  424 => 94,  419 => 93,  416 => 92,  409 => 56,  403 => 55,  399 => 54,  394 => 52,  389 => 50,  385 => 49,  381 => 48,  375 => 45,  371 => 43,  365 => 42,  361 => 40,  358 => 39,  352 => 36,  348 => 35,  342 => 32,  338 => 31,  333 => 29,  330 => 28,  327 => 27,  320 => 221,  318 => 214,  313 => 211,  311 => 181,  307 => 180,  304 => 179,  298 => 176,  295 => 175,  293 => 174,  287 => 170,  285 => 169,  280 => 166,  276 => 164,  270 => 162,  267 => 161,  264 => 160,  250 => 159,  244 => 157,  239 => 154,  233 => 152,  225 => 150,  223 => 149,  220 => 148,  217 => 147,  199 => 146,  196 => 145,  194 => 144,  191 => 143,  189 => 142,  184 => 139,  182 => 129,  175 => 124,  172 => 123,  170 => 99,  167 => 98,  165 => 92,  158 => 90,  156 => 89,  144 => 79,  138 => 77,  134 => 75,  131 => 74,  128 => 73,  111 => 48,  107 => 69,  104 => 68,  87 => 67,  84 => 66,  81 => 65,  75 => 63,  68 => 60,  64 => 58,  62 => 39,  57 => 27,  48 => 20,  44 => 18,  40 => 16,  38 => 15,  36 => 16,  32 => 12,  30 => 11,  88 => 40,  82 => 37,  76 => 34,  73 => 62,  69 => 26,  65 => 30,  59 => 27,  53 => 25,  50 => 20,  46 => 19,  42 => 17,  39 => 16,  34 => 13,  28 => 14,);
    }
}
