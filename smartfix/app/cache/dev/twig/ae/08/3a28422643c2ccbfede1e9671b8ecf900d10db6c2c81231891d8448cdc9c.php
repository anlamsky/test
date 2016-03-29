<?php

/* StudentBundle:Secured:login.html.twig */
class __TwigTemplate_ae083a28422643c2ccbfede1e9671b8ecf900d10db6c2c81231891d8448cdc9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudentBundle::layout.html.twig", "StudentBundle:Secured:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'left' => array($this, 'block_left'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StudentBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5cc6ace19eb1fe3d96962165ab049b44186b1fc4991f850793928c97ce7bfe2 = $this->env->getExtension("native_profiler");
        $__internal_f5cc6ace19eb1fe3d96962165ab049b44186b1fc4991f850793928c97ce7bfe2->enter($__internal_f5cc6ace19eb1fe3d96962165ab049b44186b1fc4991f850793928c97ce7bfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudentBundle:Secured:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5cc6ace19eb1fe3d96962165ab049b44186b1fc4991f850793928c97ce7bfe2->leave($__internal_f5cc6ace19eb1fe3d96962165ab049b44186b1fc4991f850793928c97ce7bfe2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_57f355e5b385b9433583a302c38d1dd3cf73ed28da15eb904d9cdb11b4483959 = $this->env->getExtension("native_profiler");
        $__internal_57f355e5b385b9433583a302c38d1dd3cf73ed28da15eb904d9cdb11b4483959->enter($__internal_57f355e5b385b9433583a302c38d1dd3cf73ed28da15eb904d9cdb11b4483959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_57f355e5b385b9433583a302c38d1dd3cf73ed28da15eb904d9cdb11b4483959->leave($__internal_57f355e5b385b9433583a302c38d1dd3cf73ed28da15eb904d9cdb11b4483959_prof);

    }

    // line 4
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_6fb88549f748658dde35d94f19a170f643bfb630070821b3ed70a558c3f46e67 = $this->env->getExtension("native_profiler");
        $__internal_6fb88549f748658dde35d94f19a170f643bfb630070821b3ed70a558c3f46e67->enter($__internal_6fb88549f748658dde35d94f19a170f643bfb630070821b3ed70a558c3f46e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_6fb88549f748658dde35d94f19a170f643bfb630070821b3ed70a558c3f46e67->leave($__internal_6fb88549f748658dde35d94f19a170f643bfb630070821b3ed70a558c3f46e67_prof);

    }

    // line 5
    public function block_left($context, array $blocks = array())
    {
        $__internal_2ad093c7cc7199af398a6b0c3b70838df9c2d37796ec9568a89669aefff6f401 = $this->env->getExtension("native_profiler");
        $__internal_2ad093c7cc7199af398a6b0c3b70838df9c2d37796ec9568a89669aefff6f401->enter($__internal_2ad093c7cc7199af398a6b0c3b70838df9c2d37796ec9568a89669aefff6f401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        echo "";
        
        $__internal_2ad093c7cc7199af398a6b0c3b70838df9c2d37796ec9568a89669aefff6f401->leave($__internal_2ad093c7cc7199af398a6b0c3b70838df9c2d37796ec9568a89669aefff6f401_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_0165a458ffe8bea83d36c7c5f2cbc71a2c886d46ab3be70aec7f43b340ec9f43 = $this->env->getExtension("native_profiler");
        $__internal_0165a458ffe8bea83d36c7c5f2cbc71a2c886d46ab3be70aec7f43b340ec9f43->enter($__internal_0165a458ffe8bea83d36c7c5f2cbc71a2c886d46ab3be70aec7f43b340ec9f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <h1 class=\"title\">Login</h1>

    ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 12
        echo "
    <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
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
        
        $__internal_0165a458ffe8bea83d36c7c5f2cbc71a2c886d46ab3be70aec7f43b340ec9f43->leave($__internal_0165a458ffe8bea83d36c7c5f2cbc71a2c886d46ab3be70aec7f43b340ec9f43_prof);

    }

    public function getTemplateName()
    {
        return "StudentBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 16,  94 => 13,  91 => 12,  85 => 10,  83 => 9,  79 => 7,  73 => 6,  61 => 5,  49 => 4,  37 => 2,  11 => 1,);
    }
}
