<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_2b727135b89855d8737bcc217ed7d2f99eccaeacd664b97a7413c4f001f2c8f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig", "AcmeDemoBundle:Secured:hello.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87f61ac5124327eed025696fa93ae8859bad7b737d02d794060e450e60eb6b6b = $this->env->getExtension("native_profiler");
        $__internal_87f61ac5124327eed025696fa93ae8859bad7b737d02d794060e450e60eb6b6b->enter($__internal_87f61ac5124327eed025696fa93ae8859bad7b737d02d794060e450e60eb6b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:hello.html.twig"));

        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f61ac5124327eed025696fa93ae8859bad7b737d02d794060e450e60eb6b6b->leave($__internal_87f61ac5124327eed025696fa93ae8859bad7b737d02d794060e450e60eb6b6b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39de9d2019812dd488100903014e819bcff2e7d7c3e8f0a4739ce662f8874a7b = $this->env->getExtension("native_profiler");
        $__internal_39de9d2019812dd488100903014e819bcff2e7d7c3e8f0a4739ce662f8874a7b->enter($__internal_39de9d2019812dd488100903014e819bcff2e7d7c3e8f0a4739ce662f8874a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_39de9d2019812dd488100903014e819bcff2e7d7c3e8f0a4739ce662f8874a7b->leave($__internal_39de9d2019812dd488100903014e819bcff2e7d7c3e8f0a4739ce662f8874a7b_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c558c395cadfce356804411dcb7499678fff961c5f7bf533792893ae0b3f758e = $this->env->getExtension("native_profiler");
        $__internal_c558c395cadfce356804411dcb7499678fff961c5f7bf533792893ae0b3f758e->enter($__internal_c558c395cadfce356804411dcb7499678fff961c5f7bf533792893ae0b3f758e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
        
        $__internal_c558c395cadfce356804411dcb7499678fff961c5f7bf533792893ae0b3f758e->leave($__internal_c558c395cadfce356804411dcb7499678fff961c5f7bf533792893ae0b3f758e_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  56 => 6,  50 => 5,  38 => 3,  31 => 1,  29 => 11,  11 => 1,);
    }
}
