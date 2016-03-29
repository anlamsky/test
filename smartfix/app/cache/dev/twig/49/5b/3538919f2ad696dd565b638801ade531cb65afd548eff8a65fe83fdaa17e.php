<?php

/* ::base.html.twig */
class __TwigTemplate_495b3538919f2ad696dd565b638801ade531cb65afd548eff8a65fe83fdaa17e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75cf1f553f8c4d190939ac75aab902eb52cfdd63b10e5ff34bd01713d3f1688b = $this->env->getExtension("native_profiler");
        $__internal_75cf1f553f8c4d190939ac75aab902eb52cfdd63b10e5ff34bd01713d3f1688b->enter($__internal_75cf1f553f8c4d190939ac75aab902eb52cfdd63b10e5ff34bd01713d3f1688b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_75cf1f553f8c4d190939ac75aab902eb52cfdd63b10e5ff34bd01713d3f1688b->leave($__internal_75cf1f553f8c4d190939ac75aab902eb52cfdd63b10e5ff34bd01713d3f1688b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2a31ef02074b3220ee6e6020eca083c2b4ccf88d2d2af6fa70beb1c8d056278 = $this->env->getExtension("native_profiler");
        $__internal_b2a31ef02074b3220ee6e6020eca083c2b4ccf88d2d2af6fa70beb1c8d056278->enter($__internal_b2a31ef02074b3220ee6e6020eca083c2b4ccf88d2d2af6fa70beb1c8d056278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b2a31ef02074b3220ee6e6020eca083c2b4ccf88d2d2af6fa70beb1c8d056278->leave($__internal_b2a31ef02074b3220ee6e6020eca083c2b4ccf88d2d2af6fa70beb1c8d056278_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_75f0e02d57c860ffc07c11aec7152e397c8d7a6942453bc986601a89425d12f1 = $this->env->getExtension("native_profiler");
        $__internal_75f0e02d57c860ffc07c11aec7152e397c8d7a6942453bc986601a89425d12f1->enter($__internal_75f0e02d57c860ffc07c11aec7152e397c8d7a6942453bc986601a89425d12f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_75f0e02d57c860ffc07c11aec7152e397c8d7a6942453bc986601a89425d12f1->leave($__internal_75f0e02d57c860ffc07c11aec7152e397c8d7a6942453bc986601a89425d12f1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec1ce627d87b48de0ee78b52639a0bf39708ed1d869c3cf6187a5f34900fef7a = $this->env->getExtension("native_profiler");
        $__internal_ec1ce627d87b48de0ee78b52639a0bf39708ed1d869c3cf6187a5f34900fef7a->enter($__internal_ec1ce627d87b48de0ee78b52639a0bf39708ed1d869c3cf6187a5f34900fef7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec1ce627d87b48de0ee78b52639a0bf39708ed1d869c3cf6187a5f34900fef7a->leave($__internal_ec1ce627d87b48de0ee78b52639a0bf39708ed1d869c3cf6187a5f34900fef7a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_68a156a198171593d6c4df7eb44569bf29d3db3b7faea6b1231f4b29ca95c170 = $this->env->getExtension("native_profiler");
        $__internal_68a156a198171593d6c4df7eb44569bf29d3db3b7faea6b1231f4b29ca95c170->enter($__internal_68a156a198171593d6c4df7eb44569bf29d3db3b7faea6b1231f4b29ca95c170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_68a156a198171593d6c4df7eb44569bf29d3db3b7faea6b1231f4b29ca95c170->leave($__internal_68a156a198171593d6c4df7eb44569bf29d3db3b7faea6b1231f4b29ca95c170_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
