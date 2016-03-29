<?php

/* SmartfixBundle:Client:edit.html.twig */
class __TwigTemplate_97772e17ab70fff92ff4d245e4044d6fb9175a4c57fe8b4c81499540a60124cf extends Twig_Template
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
        $__internal_e050bbf952f1eed111a9d5d88b7c0ca97908927314de89d587b6826de6948d53 = $this->env->getExtension("native_profiler");
        $__internal_e050bbf952f1eed111a9d5d88b7c0ca97908927314de89d587b6826de6948d53->enter($__internal_e050bbf952f1eed111a9d5d88b7c0ca97908927314de89d587b6826de6948d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmartfixBundle:Client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e050bbf952f1eed111a9d5d88b7c0ca97908927314de89d587b6826de6948d53->leave($__internal_e050bbf952f1eed111a9d5d88b7c0ca97908927314de89d587b6826de6948d53_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28b73f287315aa99ce73393f50905954bc55806ec1b193b6702ff409b3a074cd = $this->env->getExtension("native_profiler");
        $__internal_28b73f287315aa99ce73393f50905954bc55806ec1b193b6702ff409b3a074cd->enter($__internal_28b73f287315aa99ce73393f50905954bc55806ec1b193b6702ff409b3a074cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_28b73f287315aa99ce73393f50905954bc55806ec1b193b6702ff409b3a074cd->leave($__internal_28b73f287315aa99ce73393f50905954bc55806ec1b193b6702ff409b3a074cd_prof);

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
