<?php

/* SmartfixBundle:Client:new.html.twig */
class __TwigTemplate_996aa7f9b66a93b6da1a22b2721bcc59d4c4e85507014c1a30e0ace444e46020 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SmartfixBundle:Client:new.html.twig", 1);
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
        $__internal_f287eb076fc90bdfe34941cb2165ecc33ee857254edaf9eefb092f6f4ba42fb4 = $this->env->getExtension("native_profiler");
        $__internal_f287eb076fc90bdfe34941cb2165ecc33ee857254edaf9eefb092f6f4ba42fb4->enter($__internal_f287eb076fc90bdfe34941cb2165ecc33ee857254edaf9eefb092f6f4ba42fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmartfixBundle:Client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f287eb076fc90bdfe34941cb2165ecc33ee857254edaf9eefb092f6f4ba42fb4->leave($__internal_f287eb076fc90bdfe34941cb2165ecc33ee857254edaf9eefb092f6f4ba42fb4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a16984b6fcfdaa559dee377c3c8e7776ba915ab3b493a60284673aba09b6b44 = $this->env->getExtension("native_profiler");
        $__internal_6a16984b6fcfdaa559dee377c3c8e7776ba915ab3b493a60284673aba09b6b44->enter($__internal_6a16984b6fcfdaa559dee377c3c8e7776ba915ab3b493a60284673aba09b6b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Client creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_6a16984b6fcfdaa559dee377c3c8e7776ba915ab3b493a60284673aba09b6b44->leave($__internal_6a16984b6fcfdaa559dee377c3c8e7776ba915ab3b493a60284673aba09b6b44_prof);

    }

    public function getTemplateName()
    {
        return "SmartfixBundle:Client:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
