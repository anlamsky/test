<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_b5085fcc96aa85f0cfb02b81dfe6aa7b0ffaa05d7e15b86b144c94ea2d396e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "AcmeDemoBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7524447625e37be9db6cdd33ff2b629f3613d66066fa35bc66ad0bcbcb1c1eb0 = $this->env->getExtension("native_profiler");
        $__internal_7524447625e37be9db6cdd33ff2b629f3613d66066fa35bc66ad0bcbcb1c1eb0->enter($__internal_7524447625e37be9db6cdd33ff2b629f3613d66066fa35bc66ad0bcbcb1c1eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7524447625e37be9db6cdd33ff2b629f3613d66066fa35bc66ad0bcbcb1c1eb0->leave($__internal_7524447625e37be9db6cdd33ff2b629f3613d66066fa35bc66ad0bcbcb1c1eb0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49a227b439dca45673f859c87471ceeb92d5e507866a4a1f7dd94128713b3f47 = $this->env->getExtension("native_profiler");
        $__internal_49a227b439dca45673f859c87471ceeb92d5e507866a4a1f7dd94128713b3f47->enter($__internal_49a227b439dca45673f859c87471ceeb92d5e507866a4a1f7dd94128713b3f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_49a227b439dca45673f859c87471ceeb92d5e507866a4a1f7dd94128713b3f47->leave($__internal_49a227b439dca45673f859c87471ceeb92d5e507866a4a1f7dd94128713b3f47_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_338567b435e12493697fb98fc38a89f45a396d2d4614f65de603c5e06738e1f2 = $this->env->getExtension("native_profiler");
        $__internal_338567b435e12493697fb98fc38a89f45a396d2d4614f65de603c5e06738e1f2->enter($__internal_338567b435e12493697fb98fc38a89f45a396d2d4614f65de603c5e06738e1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_338567b435e12493697fb98fc38a89f45a396d2d4614f65de603c5e06738e1f2->leave($__internal_338567b435e12493697fb98fc38a89f45a396d2d4614f65de603c5e06738e1f2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_689666e9dd126366623495adc246a9fcb9fa69897adc42c4e132ae7f3f150038 = $this->env->getExtension("native_profiler");
        $__internal_689666e9dd126366623495adc246a9fcb9fa69897adc42c4e132ae7f3f150038->enter($__internal_689666e9dd126366623495adc246a9fcb9fa69897adc42c4e132ae7f3f150038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_689666e9dd126366623495adc246a9fcb9fa69897adc42c4e132ae7f3f150038->leave($__internal_689666e9dd126366623495adc246a9fcb9fa69897adc42c4e132ae7f3f150038_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_b5fddfa8e3d1d1cd94de7231dd35b549bf598230d1dc74df8fbd6f25c193af0f = $this->env->getExtension("native_profiler");
        $__internal_b5fddfa8e3d1d1cd94de7231dd35b549bf598230d1dc74df8fbd6f25c193af0f->enter($__internal_b5fddfa8e3d1d1cd94de7231dd35b549bf598230d1dc74df8fbd6f25c193af0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_b5fddfa8e3d1d1cd94de7231dd35b549bf598230d1dc74df8fbd6f25c193af0f->leave($__internal_b5fddfa8e3d1d1cd94de7231dd35b549bf598230d1dc74df8fbd6f25c193af0f_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_2dbc0c9e27dd0d5fda97d3bc2df975980816bf5e6563c6f60b3269daca131904 = $this->env->getExtension("native_profiler");
        $__internal_2dbc0c9e27dd0d5fda97d3bc2df975980816bf5e6563c6f60b3269daca131904->enter($__internal_2dbc0c9e27dd0d5fda97d3bc2df975980816bf5e6563c6f60b3269daca131904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_2dbc0c9e27dd0d5fda97d3bc2df975980816bf5e6563c6f60b3269daca131904->leave($__internal_2dbc0c9e27dd0d5fda97d3bc2df975980816bf5e6563c6f60b3269daca131904_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_74f6579c92aaee3af0434a2921c53287385aa31742c1ac08dddcc2edab131012 = $this->env->getExtension("native_profiler");
        $__internal_74f6579c92aaee3af0434a2921c53287385aa31742c1ac08dddcc2edab131012->enter($__internal_74f6579c92aaee3af0434a2921c53287385aa31742c1ac08dddcc2edab131012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_74f6579c92aaee3af0434a2921c53287385aa31742c1ac08dddcc2edab131012->leave($__internal_74f6579c92aaee3af0434a2921c53287385aa31742c1ac08dddcc2edab131012_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 28,  153 => 20,  147 => 19,  137 => 22,  135 => 19,  132 => 18,  126 => 17,  115 => 34,  111 => 32,  109 => 31,  105 => 29,  103 => 28,  99 => 26,  97 => 17,  94 => 16,  85 => 13,  82 => 12,  77 => 11,  71 => 10,  59 => 8,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
