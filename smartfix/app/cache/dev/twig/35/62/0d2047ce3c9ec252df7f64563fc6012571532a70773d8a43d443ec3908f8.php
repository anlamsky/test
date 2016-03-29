<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_35620d2047ce3c9ec252df7f64563fc6012571532a70773d8a43d443ec3908f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Demo:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bd06fd2520820088bff18a96651b7bcac0032adaaf425014452d374361c05ba = $this->env->getExtension("native_profiler");
        $__internal_5bd06fd2520820088bff18a96651b7bcac0032adaaf425014452d374361c05ba->enter($__internal_5bd06fd2520820088bff18a96651b7bcac0032adaaf425014452d374361c05ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd06fd2520820088bff18a96651b7bcac0032adaaf425014452d374361c05ba->leave($__internal_5bd06fd2520820088bff18a96651b7bcac0032adaaf425014452d374361c05ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_400e1d50627d948c0539e883d40bcd32aa5cee73a6820756ec0e9253aed3c68e = $this->env->getExtension("native_profiler");
        $__internal_400e1d50627d948c0539e883d40bcd32aa5cee73a6820756ec0e9253aed3c68e->enter($__internal_400e1d50627d948c0539e883d40bcd32aa5cee73a6820756ec0e9253aed3c68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_400e1d50627d948c0539e883d40bcd32aa5cee73a6820756ec0e9253aed3c68e->leave($__internal_400e1d50627d948c0539e883d40bcd32aa5cee73a6820756ec0e9253aed3c68e_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_b7eff0e97e075049f217097f05c329f7482cb03f7dd3b948a52384e5e31f78a3 = $this->env->getExtension("native_profiler");
        $__internal_b7eff0e97e075049f217097f05c329f7482cb03f7dd3b948a52384e5e31f78a3->enter($__internal_b7eff0e97e075049f217097f05c329f7482cb03f7dd3b948a52384e5e31f78a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_b7eff0e97e075049f217097f05c329f7482cb03f7dd3b948a52384e5e31f78a3->leave($__internal_b7eff0e97e075049f217097f05c329f7482cb03f7dd3b948a52384e5e31f78a3_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_05a35eb78e93b7704532b1857ec1e847f1b95c3e87778e50b7b0de1f1987f5d3 = $this->env->getExtension("native_profiler");
        $__internal_05a35eb78e93b7704532b1857ec1e847f1b95c3e87778e50b7b0de1f1987f5d3->enter($__internal_05a35eb78e93b7704532b1857ec1e847f1b95c3e87778e50b7b0de1f1987f5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
        
        $__internal_05a35eb78e93b7704532b1857ec1e847f1b95c3e87778e50b7b0de1f1987f5d3->leave($__internal_05a35eb78e93b7704532b1857ec1e847f1b95c3e87778e50b7b0de1f1987f5d3_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  74 => 11,  70 => 10,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
