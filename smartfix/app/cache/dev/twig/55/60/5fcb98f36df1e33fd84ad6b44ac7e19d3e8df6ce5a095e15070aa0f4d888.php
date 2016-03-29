<?php

/* StudentBundle:School:add.html.twig */
class __TwigTemplate_55605fcb98f36df1e33fd84ad6b44ac7e19d3e8df6ce5a095e15070aa0f4d888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudentBundle::layout.html.twig", "StudentBundle:School:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StudentBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d1158ed50b2644f7c31eea44cce5c2ddb7abaf31020d306b13968987c18cac6 = $this->env->getExtension("native_profiler");
        $__internal_2d1158ed50b2644f7c31eea44cce5c2ddb7abaf31020d306b13968987c18cac6->enter($__internal_2d1158ed50b2644f7c31eea44cce5c2ddb7abaf31020d306b13968987c18cac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudentBundle:School:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d1158ed50b2644f7c31eea44cce5c2ddb7abaf31020d306b13968987c18cac6->leave($__internal_2d1158ed50b2644f7c31eea44cce5c2ddb7abaf31020d306b13968987c18cac6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c093bae157e1729b9062af8aef1503a1eadb1af85f8df5c4ee9df8cfb60b6d6f = $this->env->getExtension("native_profiler");
        $__internal_c093bae157e1729b9062af8aef1503a1eadb1af85f8df5c4ee9df8cfb60b6d6f->enter($__internal_c093bae157e1729b9062af8aef1503a1eadb1af85f8df5c4ee9df8cfb60b6d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_c093bae157e1729b9062af8aef1503a1eadb1af85f8df5c4ee9df8cfb60b6d6f->leave($__internal_c093bae157e1729b9062af8aef1503a1eadb1af85f8df5c4ee9df8cfb60b6d6f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_6dcb8d2c9c70a5e045d8db0383e5910ac2aaa6a8792724abb9895703625bd109 = $this->env->getExtension("native_profiler");
        $__internal_6dcb8d2c9c70a5e045d8db0383e5910ac2aaa6a8792724abb9895703625bd109->enter($__internal_6dcb8d2c9c70a5e045d8db0383e5910ac2aaa6a8792724abb9895703625bd109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div style=\"width: 100%;\" class=\"title\">
        <h1 style=\"float: left; width: 90%\" >Add School</h1>
        <h1 style=\"float: right; \"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("school");
        echo "\">list</a></h1><br>
    </div>
    <div></div><br><br><br>
    <div>
    ";
        // line 13
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    </div>
";
        
        $__internal_6dcb8d2c9c70a5e045d8db0383e5910ac2aaa6a8792724abb9895703625bd109->leave($__internal_6dcb8d2c9c70a5e045d8db0383e5910ac2aaa6a8792724abb9895703625bd109_prof);

    }

    // line 13
    public function block_form($context, array $blocks = array())
    {
        $__internal_7ecd90bd20cbaa0d7ed800f4c851c9ba8cd2f76760f80257a665c61308820974 = $this->env->getExtension("native_profiler");
        $__internal_7ecd90bd20cbaa0d7ed800f4c851c9ba8cd2f76760f80257a665c61308820974->enter($__internal_7ecd90bd20cbaa0d7ed800f4c851c9ba8cd2f76760f80257a665c61308820974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 14
        echo "
        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        
        $__internal_7ecd90bd20cbaa0d7ed800f4c851c9ba8cd2f76760f80257a665c61308820974->leave($__internal_7ecd90bd20cbaa0d7ed800f4c851c9ba8cd2f76760f80257a665c61308820974_prof);

    }

    public function getTemplateName()
    {
        return "StudentBundle:School:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 17,  88 => 16,  84 => 15,  81 => 14,  75 => 13,  67 => 19,  65 => 13,  58 => 9,  54 => 7,  48 => 6,  36 => 3,  11 => 1,);
    }
}
