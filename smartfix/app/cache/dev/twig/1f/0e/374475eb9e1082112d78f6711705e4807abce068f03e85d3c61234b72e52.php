<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_1f0e374475eb9e1082112d78f6711705e4807abce068f03e85d3c61234b72e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Secured:layout.html.twig", 1);
        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a52f16f2931f81faa38cc5a721fdbde67583e6c37f944073ef60227c76176c96 = $this->env->getExtension("native_profiler");
        $__internal_a52f16f2931f81faa38cc5a721fdbde67583e6c37f944073ef60227c76176c96->enter($__internal_a52f16f2931f81faa38cc5a721fdbde67583e6c37f944073ef60227c76176c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a52f16f2931f81faa38cc5a721fdbde67583e6c37f944073ef60227c76176c96->leave($__internal_a52f16f2931f81faa38cc5a721fdbde67583e6c37f944073ef60227c76176c96_prof);

    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_daa194f790540d4b478307d3a91bf2a6f4d80eebd2b043f57847372313361eb9 = $this->env->getExtension("native_profiler");
        $__internal_daa194f790540d4b478307d3a91bf2a6f4d80eebd2b043f57847372313361eb9->enter($__internal_daa194f790540d4b478307d3a91bf2a6f4d80eebd2b043f57847372313361eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_logout");
        echo "\">Logout</a></li>
";
        
        $__internal_daa194f790540d4b478307d3a91bf2a6f4d80eebd2b043f57847372313361eb9->leave($__internal_daa194f790540d4b478307d3a91bf2a6f4d80eebd2b043f57847372313361eb9_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
