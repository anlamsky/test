<?php

/* StudentBundle:Student:edit.html.twig */
class __TwigTemplate_ea096f803e775ece479a894d4daff252848d5862c9045f7d9594cc0928c1d5cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudentBundle::layout.html.twig", "StudentBundle:Student:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StudentBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79605463b6e53bc090d0b89f7aa1a285ca0f7b0bd8bee28c1c0fc7ec792192be = $this->env->getExtension("native_profiler");
        $__internal_79605463b6e53bc090d0b89f7aa1a285ca0f7b0bd8bee28c1c0fc7ec792192be->enter($__internal_79605463b6e53bc090d0b89f7aa1a285ca0f7b0bd8bee28c1c0fc7ec792192be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudentBundle:Student:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79605463b6e53bc090d0b89f7aa1a285ca0f7b0bd8bee28c1c0fc7ec792192be->leave($__internal_79605463b6e53bc090d0b89f7aa1a285ca0f7b0bd8bee28c1c0fc7ec792192be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa0809014cdcdfd47e62b3c46c39a517540ca2d9148e90252170201b3ae6f158 = $this->env->getExtension("native_profiler");
        $__internal_fa0809014cdcdfd47e62b3c46c39a517540ca2d9148e90252170201b3ae6f158->enter($__internal_fa0809014cdcdfd47e62b3c46c39a517540ca2d9148e90252170201b3ae6f158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_fa0809014cdcdfd47e62b3c46c39a517540ca2d9148e90252170201b3ae6f158->leave($__internal_fa0809014cdcdfd47e62b3c46c39a517540ca2d9148e90252170201b3ae6f158_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ff8101f0a758fe96dbb89bed64b8faa8bfb09c48224e41d9621314894eaefe3f = $this->env->getExtension("native_profiler");
        $__internal_ff8101f0a758fe96dbb89bed64b8faa8bfb09c48224e41d9621314894eaefe3f->enter($__internal_ff8101f0a758fe96dbb89bed64b8faa8bfb09c48224e41d9621314894eaefe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div style=\"float: left; clear: both\">
    <h1>Student edit</h1>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
        <ul class=\"record_actions\">
            <li>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">
                    Back to the list
                </a>
            </li>
            <li>";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
        </ul>
    </div>

    <div style=\"float: right;\">
    <img src=\"/uploads/images/";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "html", null, true);
        echo "\" width=\"170\" height=\"150\">
    <div id=\"hide\"><a id=\"edit_image\" href=\"javascript:void()\">Edit image</a> | <a id=\"edit_bro\" href=\"javascript:void()\">Edit brochure</a></div>
    <div id=\"show_edit_image\" style=\"display: none;\">
    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_image_form"]) ? $context["edit_image_form"] : $this->getContext($context, "edit_image_form")), 'form');
        echo "
    </div>
    <div id=\"show_edit_bpo\" style=\"display: none;\">
    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_brochure_form"]) ? $context["edit_brochure_form"] : $this->getContext($context, "edit_brochure_form")), 'form');
        echo "
    <div>
    </div>
    <script src=\"http://code.jquery.com/jquery-1.11.3.min.js\"></script>
    <script>
        \$('#edit_image').click(function() {
            \$('#hide').hide();
            \$('#show_edit_image').show();
        });
        \$('#edit_bro').click(function() {
            \$('#hide').hide();
            \$('#show_edit_bpo').show();
        });
    </script>
";
        
        $__internal_ff8101f0a758fe96dbb89bed64b8faa8bfb09c48224e41d9621314894eaefe3f->leave($__internal_ff8101f0a758fe96dbb89bed64b8faa8bfb09c48224e41d9621314894eaefe3f_prof);

    }

    public function getTemplateName()
    {
        return "StudentBundle:Student:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  84 => 23,  78 => 20,  70 => 15,  63 => 11,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
