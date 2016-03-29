<?php

/* StudentBundle:Student:new.html.twig */
class __TwigTemplate_d12a6c6aa7169625c7cdc3ebb2da448893c23e9e937d30036ef36ea6fdeabb84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudentBundle::layout.html.twig", "StudentBundle:Student:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StudentBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b164f79cb51d02d882ebb560dda66d37ee42806be13c35ac8a8b052949a1fb25 = $this->env->getExtension("native_profiler");
        $__internal_b164f79cb51d02d882ebb560dda66d37ee42806be13c35ac8a8b052949a1fb25->enter($__internal_b164f79cb51d02d882ebb560dda66d37ee42806be13c35ac8a8b052949a1fb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudentBundle:Student:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b164f79cb51d02d882ebb560dda66d37ee42806be13c35ac8a8b052949a1fb25->leave($__internal_b164f79cb51d02d882ebb560dda66d37ee42806be13c35ac8a8b052949a1fb25_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_918f59958de8bddfa7f47a86f45042ebdddd14b7a1e09f58ec4888557450e554 = $this->env->getExtension("native_profiler");
        $__internal_918f59958de8bddfa7f47a86f45042ebdddd14b7a1e09f58ec4888557450e554->enter($__internal_918f59958de8bddfa7f47a86f45042ebdddd14b7a1e09f58ec4888557450e554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_918f59958de8bddfa7f47a86f45042ebdddd14b7a1e09f58ec4888557450e554->leave($__internal_918f59958de8bddfa7f47a86f45042ebdddd14b7a1e09f58ec4888557450e554_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_4a734b47f3dd9df303ba0c928a88c656bf68933def100231d98d7dc797e0b28e = $this->env->getExtension("native_profiler");
        $__internal_4a734b47f3dd9df303ba0c928a88c656bf68933def100231d98d7dc797e0b28e->enter($__internal_4a734b47f3dd9df303ba0c928a88c656bf68933def100231d98d7dc797e0b28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Student creation</h1>
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">
            Back to the list
        </a>
    </li>
</ul><script src=\"http://code.jquery.com/jquery-1.11.3.min.js\"></script>
        <script>
            \$('#student_school_id').val(\$('#student_school').val());
            \$('#student_school').change(function (){
                var id = \$('#student_school').val();
                \$('#student_school_id').val(id);
            })
        </script>
";
        
        $__internal_4a734b47f3dd9df303ba0c928a88c656bf68933def100231d98d7dc797e0b28e->leave($__internal_4a734b47f3dd9df303ba0c928a88c656bf68933def100231d98d7dc797e0b28e_prof);

    }

    public function getTemplateName()
    {
        return "StudentBundle:Student:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
