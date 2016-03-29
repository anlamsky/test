<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_77431204ccde5d5a43595b21d11723ed4890ab831d62c020d4a77994fa5b3771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0742a2eb610be2125ccf8ae41e2a6a7fe20fca8de9b729464386ae0b56b24b57 = $this->env->getExtension("native_profiler");
        $__internal_0742a2eb610be2125ccf8ae41e2a6a7fe20fca8de9b729464386ae0b56b24b57->enter($__internal_0742a2eb610be2125ccf8ae41e2a6a7fe20fca8de9b729464386ae0b56b24b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0742a2eb610be2125ccf8ae41e2a6a7fe20fca8de9b729464386ae0b56b24b57->leave($__internal_0742a2eb610be2125ccf8ae41e2a6a7fe20fca8de9b729464386ae0b56b24b57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bab7d99201d5177fddc60a23e331399dd21e44376d2dd47144a280bdfe7f74d0 = $this->env->getExtension("native_profiler");
        $__internal_bab7d99201d5177fddc60a23e331399dd21e44376d2dd47144a280bdfe7f74d0->enter($__internal_bab7d99201d5177fddc60a23e331399dd21e44376d2dd47144a280bdfe7f74d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bab7d99201d5177fddc60a23e331399dd21e44376d2dd47144a280bdfe7f74d0->leave($__internal_bab7d99201d5177fddc60a23e331399dd21e44376d2dd47144a280bdfe7f74d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_793f752816fb759a1914c55b670d51da63ada2a52064541d596805b0cb6e15f5 = $this->env->getExtension("native_profiler");
        $__internal_793f752816fb759a1914c55b670d51da63ada2a52064541d596805b0cb6e15f5->enter($__internal_793f752816fb759a1914c55b670d51da63ada2a52064541d596805b0cb6e15f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_793f752816fb759a1914c55b670d51da63ada2a52064541d596805b0cb6e15f5->leave($__internal_793f752816fb759a1914c55b670d51da63ada2a52064541d596805b0cb6e15f5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_718eb1e458ff75197d4d2bec6735a794ec8e65038b2f903b159d717ecc0eb8aa = $this->env->getExtension("native_profiler");
        $__internal_718eb1e458ff75197d4d2bec6735a794ec8e65038b2f903b159d717ecc0eb8aa->enter($__internal_718eb1e458ff75197d4d2bec6735a794ec8e65038b2f903b159d717ecc0eb8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_718eb1e458ff75197d4d2bec6735a794ec8e65038b2f903b159d717ecc0eb8aa->leave($__internal_718eb1e458ff75197d4d2bec6735a794ec8e65038b2f903b159d717ecc0eb8aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
