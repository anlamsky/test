<?php

/* SmartfixBundle:Client:new.html.twig */
class __TwigTemplate_eea891b05b7266633eeec1ef877c8ff2218a3ba94b42e0699c40ce99ccf32a77 extends Twig_Template
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
        $__internal_8af9456188867186303289e3ca4b9d81488d35cb5ae37573b41565a7bbd2a421 = $this->env->getExtension("native_profiler");
        $__internal_8af9456188867186303289e3ca4b9d81488d35cb5ae37573b41565a7bbd2a421->enter($__internal_8af9456188867186303289e3ca4b9d81488d35cb5ae37573b41565a7bbd2a421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmartfixBundle:Client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8af9456188867186303289e3ca4b9d81488d35cb5ae37573b41565a7bbd2a421->leave($__internal_8af9456188867186303289e3ca4b9d81488d35cb5ae37573b41565a7bbd2a421_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8eb4031493a7d980d28995073816512f86f489a7d7c3f8f212634c00348f117c = $this->env->getExtension("native_profiler");
        $__internal_8eb4031493a7d980d28995073816512f86f489a7d7c3f8f212634c00348f117c->enter($__internal_8eb4031493a7d980d28995073816512f86f489a7d7c3f8f212634c00348f117c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8eb4031493a7d980d28995073816512f86f489a7d7c3f8f212634c00348f117c->leave($__internal_8eb4031493a7d980d28995073816512f86f489a7d7c3f8f212634c00348f117c_prof);

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
