<?php

/* NelmioApiDocBundle:Components:version.html.twig */
class __TwigTemplate_a7051127e958aaeb78cfd3cbe658e3f8730ca958698167134a61430869a0bb23 extends Twig_Template
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
        $__internal_ce2e88cf80f77f5717e306d568b8b597dc85f30a2b340b0ccc3761b6ec9bfda4 = $this->env->getExtension("native_profiler");
        $__internal_ce2e88cf80f77f5717e306d568b8b597dc85f30a2b340b0ccc3761b6ec9bfda4->enter($__internal_ce2e88cf80f77f5717e306d568b8b597dc85f30a2b340b0ccc3761b6ec9bfda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:version.html.twig"));

        // line 1
        if ((twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion"))) && twig_test_empty((isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion"))))) {
            // line 2
            echo "*
";
        } else {
            // line 4
            echo "    ";
            if ( !twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion")))) {
                echo "&gt;=";
                echo twig_escape_filter($this->env, (isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion")), "html", null, true);
            }
            // line 5
            echo "    ";
            if ( !twig_test_empty((isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion")))) {
                // line 6
                echo "        ";
                if ( !twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion")))) {
                    echo ",";
                }
                echo "&lt;=";
                echo twig_escape_filter($this->env, (isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion")), "html", null, true);
                echo "
    ";
            }
        }
        
        $__internal_ce2e88cf80f77f5717e306d568b8b597dc85f30a2b340b0ccc3761b6ec9bfda4->leave($__internal_ce2e88cf80f77f5717e306d568b8b597dc85f30a2b340b0ccc3761b6ec9bfda4_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
