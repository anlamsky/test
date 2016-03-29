<?php

/* SmartfixBundle:Client:show.html.twig */
class __TwigTemplate_1727a81598a85b44061456788aef50d35d23ef820ab9aca9be37675e0d5d3063 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SmartfixBundle:Client:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d91ab527aad87075ca4f2d3e4251f7233d217d81573fec1a6ee3cd8c5738d524 = $this->env->getExtension("native_profiler");
        $__internal_d91ab527aad87075ca4f2d3e4251f7233d217d81573fec1a6ee3cd8c5738d524->enter($__internal_d91ab527aad87075ca4f2d3e4251f7233d217d81573fec1a6ee3cd8c5738d524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmartfixBundle:Client:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d91ab527aad87075ca4f2d3e4251f7233d217d81573fec1a6ee3cd8c5738d524->leave($__internal_d91ab527aad87075ca4f2d3e4251f7233d217d81573fec1a6ee3cd8c5738d524_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_785470ab59fa99c5f9c18dcf447bc1b0e1ba45a505940a157ed4e330593906d0 = $this->env->getExtension("native_profiler");
        $__internal_785470ab59fa99c5f9c18dcf447bc1b0e1ba45a505940a157ed4e330593906d0->enter($__internal_785470ab59fa99c5f9c18dcf447bc1b0e1ba45a505940a157ed4e330593906d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Client</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Avatar</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "avatar", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mobile", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Creditcart</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "creditCart", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datereeate</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateReeate", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("client");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_785470ab59fa99c5f9c18dcf447bc1b0e1ba45a505940a157ed4e330593906d0->leave($__internal_785470ab59fa99c5f9c18dcf447bc1b0e1ba45a505940a157ed4e330593906d0_prof);

    }

    public function getTemplateName()
    {
        return "SmartfixBundle:Client:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 62,  129 => 58,  121 => 53,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
