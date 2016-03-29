<?php

/* SmartfixBundle:Client:edit.html.twig */
class __TwigTemplate_eef37d919c1e2e37b173afaab9a377accbeb32f31d7a1406dad0451af4b5e2f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SmartfixBundle:Client:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c63569794c63951e0a3350810a10d6ce6754154fb1edad46a0386cf3361d3603 = $this->env->getExtension("native_profiler");
        $__internal_c63569794c63951e0a3350810a10d6ce6754154fb1edad46a0386cf3361d3603->enter($__internal_c63569794c63951e0a3350810a10d6ce6754154fb1edad46a0386cf3361d3603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmartfixBundle:Client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c63569794c63951e0a3350810a10d6ce6754154fb1edad46a0386cf3361d3603->leave($__internal_c63569794c63951e0a3350810a10d6ce6754154fb1edad46a0386cf3361d3603_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9697ed38819eb23dcb0f2efdfa158999457d590ffe2a74a32a8995bf3c80033 = $this->env->getExtension("native_profiler");
        $__internal_b9697ed38819eb23dcb0f2efdfa158999457d590ffe2a74a32a8995bf3c80033->enter($__internal_b9697ed38819eb23dcb0f2efdfa158999457d590ffe2a74a32a8995bf3c80033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Client edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("client");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_b9697ed38819eb23dcb0f2efdfa158999457d590ffe2a74a32a8995bf3c80033->leave($__internal_b9697ed38819eb23dcb0f2efdfa158999457d590ffe2a74a32a8995bf3c80033_prof);

    }

    public function getTemplateName()
    {
        return "SmartfixBundle:Client:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
