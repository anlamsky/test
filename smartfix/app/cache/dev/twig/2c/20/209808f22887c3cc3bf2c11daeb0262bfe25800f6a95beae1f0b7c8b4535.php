<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2c20209808f22887c3cc3bf2c11daeb0262bfe25800f6a95beae1f0b7c8b4535 extends Twig_Template
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
        $__internal_4f2bb294b6abb3a1d4ad04873351cc21380bddacea2d65ac7e77d94a6aadf8ca = $this->env->getExtension("native_profiler");
        $__internal_4f2bb294b6abb3a1d4ad04873351cc21380bddacea2d65ac7e77d94a6aadf8ca->enter($__internal_4f2bb294b6abb3a1d4ad04873351cc21380bddacea2d65ac7e77d94a6aadf8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4f2bb294b6abb3a1d4ad04873351cc21380bddacea2d65ac7e77d94a6aadf8ca->leave($__internal_4f2bb294b6abb3a1d4ad04873351cc21380bddacea2d65ac7e77d94a6aadf8ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
