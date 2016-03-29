<?php

/* StudentBundle:Student:index.html.twig */
class __TwigTemplate_966b343e70f2272ae33033eaf98e12348cf3e4c702a592f5aedb06cf349037d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudentBundle::layout.html.twig", "StudentBundle:Student:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StudentBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef8bbbc56ef995f05b15280abe76dac35a1e05c84498eeb7f65fc3142eb41d31 = $this->env->getExtension("native_profiler");
        $__internal_ef8bbbc56ef995f05b15280abe76dac35a1e05c84498eeb7f65fc3142eb41d31->enter($__internal_ef8bbbc56ef995f05b15280abe76dac35a1e05c84498eeb7f65fc3142eb41d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudentBundle:Student:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef8bbbc56ef995f05b15280abe76dac35a1e05c84498eeb7f65fc3142eb41d31->leave($__internal_ef8bbbc56ef995f05b15280abe76dac35a1e05c84498eeb7f65fc3142eb41d31_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7e03db176dbb4a2e6bd6e4faf745d664090e4eab8f1328146b80c2d89a27895 = $this->env->getExtension("native_profiler");
        $__internal_e7e03db176dbb4a2e6bd6e4faf745d664090e4eab8f1328146b80c2d89a27895->enter($__internal_e7e03db176dbb4a2e6bd6e4faf745d664090e4eab8f1328146b80c2d89a27895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_e7e03db176dbb4a2e6bd6e4faf745d664090e4eab8f1328146b80c2d89a27895->leave($__internal_e7e03db176dbb4a2e6bd6e4faf745d664090e4eab8f1328146b80c2d89a27895_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_165ad5987a0c1400a3a789b64e7aa026cc7eb2624d5628610858555002572023 = $this->env->getExtension("native_profiler");
        $__internal_165ad5987a0c1400a3a789b64e7aa026cc7eb2624d5628610858555002572023->enter($__internal_165ad5987a0c1400a3a789b64e7aa026cc7eb2624d5628610858555002572023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Student list</h1>
    ";
        // line 7
        $this->displayBlock('form', $context, $blocks);
        // line 13
        echo "    <table class=\"records_list\" width=\"100%\">
        <thead>
            <tr style=\"background: #E6E6E6; \">
                <th style=\"padding:3px 5px;\">Id</th>
                <th>School</th>
                <th>Name</th>
                <th>Image</th>
                <th>Age</th>
                <th>Render</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "            <tr style=\"border-bottom: solid 1px #D3D3D3;\">
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "school", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td><img src=\"/uploads/images/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "image", array()), "html", null, true);
            echo "\" width=\"70\" height=\"50\"></td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "age", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "render", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
        <div class=\"navigation\" style=\"float: right\">
                ";
        // line 49
        echo $this->env->getExtension('knp_pagination')->render((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        echo "
            </div>
        <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_165ad5987a0c1400a3a789b64e7aa026cc7eb2624d5628610858555002572023->leave($__internal_165ad5987a0c1400a3a789b64e7aa026cc7eb2624d5628610858555002572023_prof);

    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
        $__internal_e7e282e8293597d2b9adf4062c4008925b428eaaa24a8815972ae1e47b06b02c = $this->env->getExtension("native_profiler");
        $__internal_e7e282e8293597d2b9adf4062c4008925b428eaaa24a8815972ae1e47b06b02c->enter($__internal_e7e282e8293597d2b9adf4062c4008925b428eaaa24a8815972ae1e47b06b02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 8
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget');
        echo "
            ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        ";
        
        $__internal_e7e282e8293597d2b9adf4062c4008925b428eaaa24a8815972ae1e47b06b02c->leave($__internal_e7e282e8293597d2b9adf4062c4008925b428eaaa24a8815972ae1e47b06b02c_prof);

    }

    public function getTemplateName()
    {
        return "StudentBundle:Student:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 11,  168 => 10,  164 => 9,  159 => 8,  153 => 7,  140 => 53,  133 => 49,  128 => 46,  116 => 40,  110 => 37,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  81 => 28,  78 => 27,  74 => 26,  59 => 13,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
