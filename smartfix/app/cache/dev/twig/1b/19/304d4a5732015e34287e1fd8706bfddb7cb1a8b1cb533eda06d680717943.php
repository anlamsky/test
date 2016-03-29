<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_1b19304d4a5732015e34287e1fd8706bfddb7cb1a8b1cb533eda06d680717943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Secured:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4be13f59e933e54977ac13baa29f95ac6fcb1d612c9d3561ef517b301291eec4 = $this->env->getExtension("native_profiler");
        $__internal_4be13f59e933e54977ac13baa29f95ac6fcb1d612c9d3561ef517b301291eec4->enter($__internal_4be13f59e933e54977ac13baa29f95ac6fcb1d612c9d3561ef517b301291eec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:login.html.twig"));

        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4be13f59e933e54977ac13baa29f95ac6fcb1d612c9d3561ef517b301291eec4->leave($__internal_4be13f59e933e54977ac13baa29f95ac6fcb1d612c9d3561ef517b301291eec4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c257451fab4c6237f434e298b031c6d0ecd87e1e3ae565f6f883461b51605c4c = $this->env->getExtension("native_profiler");
        $__internal_c257451fab4c6237f434e298b031c6d0ecd87e1e3ae565f6f883461b51605c4c->enter($__internal_c257451fab4c6237f434e298b031c6d0ecd87e1e3ae565f6f883461b51605c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
        
        $__internal_c257451fab4c6237f434e298b031c6d0ecd87e1e3ae565f6f883461b51605c4c->leave($__internal_c257451fab4c6237f434e298b031c6d0ecd87e1e3ae565f6f883461b51605c4c_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  62 => 14,  59 => 13,  53 => 11,  51 => 10,  43 => 4,  37 => 3,  30 => 1,  28 => 35,  11 => 1,);
    }
}
