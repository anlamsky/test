<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_998fe1a1f94f2b07b895cd2051ef9f5c558c567f4953a377666bf845ac951999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cddb2e4a69ed400695d06fa26206025c6e7fa113f82910593c518d4270704197 = $this->env->getExtension("native_profiler");
        $__internal_cddb2e4a69ed400695d06fa26206025c6e7fa113f82910593c518d4270704197->enter($__internal_cddb2e4a69ed400695d06fa26206025c6e7fa113f82910593c518d4270704197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_cddb2e4a69ed400695d06fa26206025c6e7fa113f82910593c518d4270704197->leave($__internal_cddb2e4a69ed400695d06fa26206025c6e7fa113f82910593c518d4270704197_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
