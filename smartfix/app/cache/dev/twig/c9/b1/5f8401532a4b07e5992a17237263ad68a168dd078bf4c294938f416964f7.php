<?php

/* knp_menu.html.twig */
class __TwigTemplate_c9b15f8401532a4b07e5992a17237263ad68a168dd078bf4c294938f416964f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4b57898a5b86079ab5257db31465b8dd91c6d7d0273ea34c2acade521f03a84 = $this->env->getExtension("native_profiler");
        $__internal_b4b57898a5b86079ab5257db31465b8dd91c6d7d0273ea34c2acade521f03a84->enter($__internal_b4b57898a5b86079ab5257db31465b8dd91c6d7d0273ea34c2acade521f03a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4b57898a5b86079ab5257db31465b8dd91c6d7d0273ea34c2acade521f03a84->leave($__internal_b4b57898a5b86079ab5257db31465b8dd91c6d7d0273ea34c2acade521f03a84_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_d28d6500ff5a935d64295ec319970c011d6d4f181fbbe5d2e798380a0e824d44 = $this->env->getExtension("native_profiler");
        $__internal_d28d6500ff5a935d64295ec319970c011d6d4f181fbbe5d2e798380a0e824d44->enter($__internal_d28d6500ff5a935d64295ec319970c011d6d4f181fbbe5d2e798380a0e824d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d28d6500ff5a935d64295ec319970c011d6d4f181fbbe5d2e798380a0e824d44->leave($__internal_d28d6500ff5a935d64295ec319970c011d6d4f181fbbe5d2e798380a0e824d44_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_4d37f59cf0988f89f137e4364dc9cdcff16844e3d44ab577994736cf08f78212 = $this->env->getExtension("native_profiler");
        $__internal_4d37f59cf0988f89f137e4364dc9cdcff16844e3d44ab577994736cf08f78212->enter($__internal_4d37f59cf0988f89f137e4364dc9cdcff16844e3d44ab577994736cf08f78212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_4d37f59cf0988f89f137e4364dc9cdcff16844e3d44ab577994736cf08f78212->leave($__internal_4d37f59cf0988f89f137e4364dc9cdcff16844e3d44ab577994736cf08f78212_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_0ae360d4c7f6065d518fe2166ad9d82ccfebc92251d5c539fe28ddb26a23ffed = $this->env->getExtension("native_profiler");
        $__internal_0ae360d4c7f6065d518fe2166ad9d82ccfebc92251d5c539fe28ddb26a23ffed->enter($__internal_0ae360d4c7f6065d518fe2166ad9d82ccfebc92251d5c539fe28ddb26a23ffed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_0ae360d4c7f6065d518fe2166ad9d82ccfebc92251d5c539fe28ddb26a23ffed->leave($__internal_0ae360d4c7f6065d518fe2166ad9d82ccfebc92251d5c539fe28ddb26a23ffed_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_08429ff4d4730963326d5ffe16adff0f7e69a8c47e02206c9305379f3459609d = $this->env->getExtension("native_profiler");
        $__internal_08429ff4d4730963326d5ffe16adff0f7e69a8c47e02206c9305379f3459609d->enter($__internal_08429ff4d4730963326d5ffe16adff0f7e69a8c47e02206c9305379f3459609d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
        
        $__internal_08429ff4d4730963326d5ffe16adff0f7e69a8c47e02206c9305379f3459609d->leave($__internal_08429ff4d4730963326d5ffe16adff0f7e69a8c47e02206c9305379f3459609d_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_098e4d4a83421c570623b3d2984f482761e49c71a41e0e25b104e762fbe2ede2 = $this->env->getExtension("native_profiler");
        $__internal_098e4d4a83421c570623b3d2984f482761e49c71a41e0e25b104e762fbe2ede2->enter($__internal_098e4d4a83421c570623b3d2984f482761e49c71a41e0e25b104e762fbe2ede2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method") || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_098e4d4a83421c570623b3d2984f482761e49c71a41e0e25b104e762fbe2ede2->leave($__internal_098e4d4a83421c570623b3d2984f482761e49c71a41e0e25b104e762fbe2ede2_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_b6a47630e8bcbd5867b0fb68b8fd2e68823b3680efea1b4ac9af05f8a21a799f = $this->env->getExtension("native_profiler");
        $__internal_b6a47630e8bcbd5867b0fb68b8fd2e68823b3680efea1b4ac9af05f8a21a799f->enter($__internal_b6a47630e8bcbd5867b0fb68b8fd2e68823b3680efea1b4ac9af05f8a21a799f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_b6a47630e8bcbd5867b0fb68b8fd2e68823b3680efea1b4ac9af05f8a21a799f->leave($__internal_b6a47630e8bcbd5867b0fb68b8fd2e68823b3680efea1b4ac9af05f8a21a799f_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_652941af4c7bc51702c9ea22a612038094476765919a7c4ff08352d9cc1f72a6 = $this->env->getExtension("native_profiler");
        $__internal_652941af4c7bc51702c9ea22a612038094476765919a7c4ff08352d9cc1f72a6->enter($__internal_652941af4c7bc51702c9ea22a612038094476765919a7c4ff08352d9cc1f72a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_652941af4c7bc51702c9ea22a612038094476765919a7c4ff08352d9cc1f72a6->leave($__internal_652941af4c7bc51702c9ea22a612038094476765919a7c4ff08352d9cc1f72a6_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_e3750d58304cd0cb5efab1e13846aa180a5d4549867149992396e6bff086ce2d = $this->env->getExtension("native_profiler");
        $__internal_e3750d58304cd0cb5efab1e13846aa180a5d4549867149992396e6bff086ce2d->enter($__internal_e3750d58304cd0cb5efab1e13846aa180a5d4549867149992396e6bff086ce2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_e3750d58304cd0cb5efab1e13846aa180a5d4549867149992396e6bff086ce2d->leave($__internal_e3750d58304cd0cb5efab1e13846aa180a5d4549867149992396e6bff086ce2d_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_075e03e1e0aa46ff95c161c79307189306c507d15f1e265114cfcffca55c0b14 = $this->env->getExtension("native_profiler");
            $__internal_075e03e1e0aa46ff95c161c79307189306c507d15f1e265114cfcffca55c0b14->enter($__internal_075e03e1e0aa46ff95c161c79307189306c507d15f1e265114cfcffca55c0b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_075e03e1e0aa46ff95c161c79307189306c507d15f1e265114cfcffca55c0b14->leave($__internal_075e03e1e0aa46ff95c161c79307189306c507d15f1e265114cfcffca55c0b14_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 6,  325 => 5,  321 => 4,  307 => 3,  291 => 101,  274 => 99,  255 => 97,  243 => 92,  241 => 91,  239 => 90,  237 => 89,  233 => 86,  229 => 84,  227 => 83,  223 => 82,  220 => 81,  217 => 78,  215 => 77,  213 => 76,  210 => 73,  207 => 72,  204 => 71,  202 => 70,  199 => 69,  196 => 68,  193 => 66,  190 => 64,  188 => 63,  185 => 61,  183 => 60,  180 => 58,  178 => 57,  176 => 56,  174 => 55,  172 => 54,  170 => 52,  164 => 51,  157 => 48,  155 => 47,  138 => 44,  121 => 43,  118 => 41,  116 => 40,  113 => 37,  111 => 36,  109 => 34,  107 => 33,  101 => 31,  90 => 26,  85 => 25,  82 => 24,  80 => 23,  74 => 22,  67 => 19,  65 => 18,  59 => 17,  49 => 13,  47 => 12,  41 => 11,  11 => 1,);
    }
}
