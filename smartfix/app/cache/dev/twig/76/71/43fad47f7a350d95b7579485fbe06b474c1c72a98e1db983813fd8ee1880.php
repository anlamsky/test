<?php

/* StudentBundle:User:index.html.twig */
class __TwigTemplate_767143fad47f7a350d95b7579485fbe06b474c1c72a98e1db983813fd8ee1880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudentBundle::layout.html.twig", "StudentBundle:User:index.html.twig", 1);
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
        $__internal_6b97776055ba33d5e142ca54bb8469f77ba170d49d94c380a552763e18f00027 = $this->env->getExtension("native_profiler");
        $__internal_6b97776055ba33d5e142ca54bb8469f77ba170d49d94c380a552763e18f00027->enter($__internal_6b97776055ba33d5e142ca54bb8469f77ba170d49d94c380a552763e18f00027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudentBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b97776055ba33d5e142ca54bb8469f77ba170d49d94c380a552763e18f00027->leave($__internal_6b97776055ba33d5e142ca54bb8469f77ba170d49d94c380a552763e18f00027_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e06b0510c9876b4ada1e2c0ba4e2987a1ec70716bbbe5b60718acd3549bce84d = $this->env->getExtension("native_profiler");
        $__internal_e06b0510c9876b4ada1e2c0ba4e2987a1ec70716bbbe5b60718acd3549bce84d->enter($__internal_e06b0510c9876b4ada1e2c0ba4e2987a1ec70716bbbe5b60718acd3549bce84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_e06b0510c9876b4ada1e2c0ba4e2987a1ec70716bbbe5b60718acd3549bce84d->leave($__internal_e06b0510c9876b4ada1e2c0ba4e2987a1ec70716bbbe5b60718acd3549bce84d_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_5fe9864f5eafcd21393b3316c05b843ccc9edd8a2c83981ee5ac7a6b4ec4f344 = $this->env->getExtension("native_profiler");
        $__internal_5fe9864f5eafcd21393b3316c05b843ccc9edd8a2c83981ee5ac7a6b4ec4f344->enter($__internal_5fe9864f5eafcd21393b3316c05b843ccc9edd8a2c83981ee5ac7a6b4ec4f344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1>User list</h1>
    <table width=\"100%\">
        <thead>
            <tr style=\"background: #E6E6E6;\">
                <th style=\"padding:3px 5px;\">Username</th>
                <th>Email</th>
                <th>Isactive</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "            <tr style=\"border-bottom: solid 1px #D3D3D3;\">
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "isActive", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 33
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("admin_user_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_5fe9864f5eafcd21393b3316c05b843ccc9edd8a2c83981ee5ac7a6b4ec4f344->leave($__internal_5fe9864f5eafcd21393b3316c05b843ccc9edd8a2c83981ee5ac7a6b4ec4f344_prof);

    }

    public function getTemplateName()
    {
        return "StudentBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 38,  108 => 33,  96 => 27,  90 => 24,  83 => 20,  79 => 19,  73 => 18,  70 => 17,  66 => 16,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
