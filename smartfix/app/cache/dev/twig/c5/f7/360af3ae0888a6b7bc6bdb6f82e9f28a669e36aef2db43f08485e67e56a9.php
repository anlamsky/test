<?php

/* StudentBundle:Student:show.html.twig */
class __TwigTemplate_c5f7360af3ae0888a6b7bc6bdb6f82e9f28a669e36aef2db43f08485e67e56a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudentBundle::layout.html.twig", "StudentBundle:Student:show.html.twig", 1);
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
        $__internal_63d1367abff5900bc8632c079ef0544b3601aff9acf1f673caa58470db93c155 = $this->env->getExtension("native_profiler");
        $__internal_63d1367abff5900bc8632c079ef0544b3601aff9acf1f673caa58470db93c155->enter($__internal_63d1367abff5900bc8632c079ef0544b3601aff9acf1f673caa58470db93c155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudentBundle:Student:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63d1367abff5900bc8632c079ef0544b3601aff9acf1f673caa58470db93c155->leave($__internal_63d1367abff5900bc8632c079ef0544b3601aff9acf1f673caa58470db93c155_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8c0c074a1a16a8aae5268208b2db8d3691bc9fb14bff20361f0ca287398f843 = $this->env->getExtension("native_profiler");
        $__internal_b8c0c074a1a16a8aae5268208b2db8d3691bc9fb14bff20361f0ca287398f843->enter($__internal_b8c0c074a1a16a8aae5268208b2db8d3691bc9fb14bff20361f0ca287398f843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_b8c0c074a1a16a8aae5268208b2db8d3691bc9fb14bff20361f0ca287398f843->leave($__internal_b8c0c074a1a16a8aae5268208b2db8d3691bc9fb14bff20361f0ca287398f843_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_87b97f4e2c482f03758fe2976db6bc6c7b1723c17fc30719657680e463799d02 = $this->env->getExtension("native_profiler");
        $__internal_87b97f4e2c482f03758fe2976db6bc6c7b1723c17fc30719657680e463799d02->enter($__internal_87b97f4e2c482f03758fe2976db6bc6c7b1723c17fc30719657680e463799d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Student</h1>
    <div style=\"float: left\">
    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id: </th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name: </th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age: </th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "age", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Render: </th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "render", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>School: </th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "school", array()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
            <li>
                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("student");
        echo "\">
                    Back to the list
                </a>
            </li>
            <li>
                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                    Edit
                </a>
            </li>
            <li>";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
        </ul>
        </div>
        <div style=\"float: right;\">
            <img src=\"/uploads/images/";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "html", null, true);
        echo "\" width=\"170\" height=\"150\">
            ";
        // line 49
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "brochure", array())) {
            // line 50
            echo "            <div><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/brochures/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "brochure", array()))), "html", null, true);
            echo "\">View brochure (PDF)</a></div>
            ";
        }
        // line 52
        echo "            </div>
";
        
        $__internal_87b97f4e2c482f03758fe2976db6bc6c7b1723c17fc30719657680e463799d02->leave($__internal_87b97f4e2c482f03758fe2976db6bc6c7b1723c17fc30719657680e463799d02_prof);

    }

    public function getTemplateName()
    {
        return "StudentBundle:Student:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 52,  127 => 50,  125 => 49,  121 => 48,  114 => 44,  107 => 40,  99 => 35,  89 => 28,  82 => 24,  75 => 20,  68 => 16,  61 => 12,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
