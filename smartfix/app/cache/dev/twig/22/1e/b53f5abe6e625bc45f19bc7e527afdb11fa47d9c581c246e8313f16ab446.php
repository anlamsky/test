<?php

/* SmartfixBundle:Client:index.html.twig */
class __TwigTemplate_221eb53f5abe6e625bc45f19bc7e527afdb11fa47d9c581c246e8313f16ab446 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SmartfixBundle:Client:index.html.twig", 1);
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
        $__internal_c49c3583cc373db8d43daec7b8027ed15dad845eac1f2db3fc3e17018755e071 = $this->env->getExtension("native_profiler");
        $__internal_c49c3583cc373db8d43daec7b8027ed15dad845eac1f2db3fc3e17018755e071->enter($__internal_c49c3583cc373db8d43daec7b8027ed15dad845eac1f2db3fc3e17018755e071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmartfixBundle:Client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c49c3583cc373db8d43daec7b8027ed15dad845eac1f2db3fc3e17018755e071->leave($__internal_c49c3583cc373db8d43daec7b8027ed15dad845eac1f2db3fc3e17018755e071_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b84c4f5c034cb2aa1890360eb0255207e5f54ca7b0555c93dcaf7cfd2f62f360 = $this->env->getExtension("native_profiler");
        $__internal_b84c4f5c034cb2aa1890360eb0255207e5f54ca7b0555c93dcaf7cfd2f62f360->enter($__internal_b84c4f5c034cb2aa1890360eb0255207e5f54ca7b0555c93dcaf7cfd2f62f360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Client list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Avatar</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Creditcart</th>
                <th>Datereeate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lastName", array()), "html", null, true);
            echo "</td>
                <td><img src=\"/uploads/images/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "avatar", array()), "html", null, true);
            echo "\" width=\"70\" height=\"50\"></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "mobile", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "creditCart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["entity"], "dateReeate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateReeate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 45
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("client_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_b84c4f5c034cb2aa1890360eb0255207e5f54ca7b0555c93dcaf7cfd2f62f360->leave($__internal_b84c4f5c034cb2aa1890360eb0255207e5f54ca7b0555c93dcaf7cfd2f62f360_prof);

    }

    public function getTemplateName()
    {
        return "SmartfixBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 50,  128 => 45,  116 => 39,  110 => 36,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
