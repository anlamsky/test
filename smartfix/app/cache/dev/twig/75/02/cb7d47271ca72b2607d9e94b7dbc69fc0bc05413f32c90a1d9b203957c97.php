<?php

/* StudentBundle:User:show.html.twig */
class __TwigTemplate_7502cb7d47271ca72b2607d9e94b7dbc69fc0bc05413f32c90a1d9b203957c97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudentBundle::layout.html.twig", "StudentBundle:User:show.html.twig", 1);
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
        $__internal_78a8138ed5a44ff054a7d9da9c5d88ce2e53152aa492416eb2846a6313fae784 = $this->env->getExtension("native_profiler");
        $__internal_78a8138ed5a44ff054a7d9da9c5d88ce2e53152aa492416eb2846a6313fae784->enter($__internal_78a8138ed5a44ff054a7d9da9c5d88ce2e53152aa492416eb2846a6313fae784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudentBundle:User:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78a8138ed5a44ff054a7d9da9c5d88ce2e53152aa492416eb2846a6313fae784->leave($__internal_78a8138ed5a44ff054a7d9da9c5d88ce2e53152aa492416eb2846a6313fae784_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_10ec8f241e96e60cf27e56d75103bdf02c0c581eb7b31ab7c0b9bb303e8b1a89 = $this->env->getExtension("native_profiler");
        $__internal_10ec8f241e96e60cf27e56d75103bdf02c0c581eb7b31ab7c0b9bb303e8b1a89->enter($__internal_10ec8f241e96e60cf27e56d75103bdf02c0c581eb7b31ab7c0b9bb303e8b1a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_10ec8f241e96e60cf27e56d75103bdf02c0c581eb7b31ab7c0b9bb303e8b1a89->leave($__internal_10ec8f241e96e60cf27e56d75103bdf02c0c581eb7b31ab7c0b9bb303e8b1a89_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_2410aa4d7523456891290c4d02f6d458825ae3f9d104fa0349ba8a327ae22cbf = $this->env->getExtension("native_profiler");
        $__internal_2410aa4d7523456891290c4d02f6d458825ae3f9d104fa0349ba8a327ae22cbf->enter($__internal_2410aa4d7523456891290c4d02f6d458825ae3f9d104fa0349ba8a327ae22cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1>User</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Username: </th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email: </th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isactive: </th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isActive", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 24
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "name", array()), "html", null, true);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_2410aa4d7523456891290c4d02f6d458825ae3f9d104fa0349ba8a327ae22cbf->leave($__internal_2410aa4d7523456891290c4d02f6d458825ae3f9d104fa0349ba8a327ae22cbf_prof);

    }

    public function getTemplateName()
    {
        return "StudentBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  111 => 37,  103 => 32,  95 => 26,  86 => 24,  82 => 23,  75 => 19,  68 => 15,  61 => 11,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
