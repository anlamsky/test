<?php

/* StudentBundle:User:new.html.twig */
class __TwigTemplate_dcad13ca67ceebc2cbbb61f203db719f546a9129d5eb0927bd2227475e2cf962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudentBundle::layout.html.twig", "StudentBundle:User:new.html.twig", 1);
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
        $__internal_b45170eea7a250d1d8f3d2a1a2a9a187bd503b8966e20e0d8d39578cf1962058 = $this->env->getExtension("native_profiler");
        $__internal_b45170eea7a250d1d8f3d2a1a2a9a187bd503b8966e20e0d8d39578cf1962058->enter($__internal_b45170eea7a250d1d8f3d2a1a2a9a187bd503b8966e20e0d8d39578cf1962058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudentBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45170eea7a250d1d8f3d2a1a2a9a187bd503b8966e20e0d8d39578cf1962058->leave($__internal_b45170eea7a250d1d8f3d2a1a2a9a187bd503b8966e20e0d8d39578cf1962058_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4421c24647928338b1f3374fa46a967d51e8ac4c1331d081d28bd4dc801f6b6 = $this->env->getExtension("native_profiler");
        $__internal_f4421c24647928338b1f3374fa46a967d51e8ac4c1331d081d28bd4dc801f6b6->enter($__internal_f4421c24647928338b1f3374fa46a967d51e8ac4c1331d081d28bd4dc801f6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_f4421c24647928338b1f3374fa46a967d51e8ac4c1331d081d28bd4dc801f6b6->leave($__internal_f4421c24647928338b1f3374fa46a967d51e8ac4c1331d081d28bd4dc801f6b6_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_6eaf817f7fe3ad478ce5abbea81e63a76bf9b4c519ca70353fa824d6c6f7dd19 = $this->env->getExtension("native_profiler");
        $__internal_6eaf817f7fe3ad478ce5abbea81e63a76bf9b4c519ca70353fa824d6c6f7dd19->enter($__internal_6eaf817f7fe3ad478ce5abbea81e63a76bf9b4c519ca70353fa824d6c6f7dd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1>User creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_6eaf817f7fe3ad478ce5abbea81e63a76bf9b4c519ca70353fa824d6c6f7dd19->leave($__internal_6eaf817f7fe3ad478ce5abbea81e63a76bf9b4c519ca70353fa824d6c6f7dd19_prof);

    }

    public function getTemplateName()
    {
        return "StudentBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  57 => 7,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
