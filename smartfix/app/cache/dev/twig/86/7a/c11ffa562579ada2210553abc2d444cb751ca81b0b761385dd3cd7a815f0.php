<?php

/* StudentBundle::layout.html.twig */
class __TwigTemplate_867ac11ffa562579ada2210553abc2d444cb751ca81b0b761385dd3cd7a815f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "StudentBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'left' => array($this, 'block_left'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b24ae91ba0a593194d7782c35dd0c85a1cac2de74d1a9958269d073d055e5eb = $this->env->getExtension("native_profiler");
        $__internal_4b24ae91ba0a593194d7782c35dd0c85a1cac2de74d1a9958269d073d055e5eb->enter($__internal_4b24ae91ba0a593194d7782c35dd0c85a1cac2de74d1a9958269d073d055e5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudentBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b24ae91ba0a593194d7782c35dd0c85a1cac2de74d1a9958269d073d055e5eb->leave($__internal_4b24ae91ba0a593194d7782c35dd0c85a1cac2de74d1a9958269d073d055e5eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8037cc675809aa33c8256a170ec4b6ff4b279ff152cab44fdb0af682743e7ce3 = $this->env->getExtension("native_profiler");
        $__internal_8037cc675809aa33c8256a170ec4b6ff4b279ff152cab44fdb0af682743e7ce3->enter($__internal_8037cc675809aa33c8256a170ec4b6ff4b279ff152cab44fdb0af682743e7ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8037cc675809aa33c8256a170ec4b6ff4b279ff152cab44fdb0af682743e7ce3->leave($__internal_8037cc675809aa33c8256a170ec4b6ff4b279ff152cab44fdb0af682743e7ce3_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_038ee75f1af391e111c2fd6d181177b3295e96996cad03e3908660022c2fa475 = $this->env->getExtension("native_profiler");
        $__internal_038ee75f1af391e111c2fd6d181177b3295e96996cad03e3908660022c2fa475->enter($__internal_038ee75f1af391e111c2fd6d181177b3295e96996cad03e3908660022c2fa475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_038ee75f1af391e111c2fd6d181177b3295e96996cad03e3908660022c2fa475->leave($__internal_038ee75f1af391e111c2fd6d181177b3295e96996cad03e3908660022c2fa475_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_581d9e6412344cb34ab6fbbfdc73389c68ef3d7739e426c4c3c7a6820fdfe890 = $this->env->getExtension("native_profiler");
        $__internal_581d9e6412344cb34ab6fbbfdc73389c68ef3d7739e426c4c3c7a6820fdfe890->enter($__internal_581d9e6412344cb34ab6fbbfdc73389c68ef3d7739e426c4c3c7a6820fdfe890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 25
        echo "
        ";
        // line 26
        $this->displayBlock('left', $context, $blocks);
        // line 34
        echo "
    <div class=\"block\" style=\"float: right; width: 62%\">
        ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "    </div>

    ";
        // line 39
        if (array_key_exists("code", $context)) {
            // line 40
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 42
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_581d9e6412344cb34ab6fbbfdc73389c68ef3d7739e426c4c3c7a6820fdfe890->leave($__internal_581d9e6412344cb34ab6fbbfdc73389c68ef3d7739e426c4c3c7a6820fdfe890_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_e3d06efc9ff9eda1c10a34a4cf0c9b83815e2529d76bf9cf574876a6e08f7d8e = $this->env->getExtension("native_profiler");
        $__internal_e3d06efc9ff9eda1c10a34a4cf0c9b83815e2529d76bf9cf574876a6e08f7d8e->enter($__internal_e3d06efc9ff9eda1c10a34a4cf0c9b83815e2529d76bf9cf574876a6e08f7d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>
        <div style=\"clear: both\"></div>
    ";
        
        $__internal_e3d06efc9ff9eda1c10a34a4cf0c9b83815e2529d76bf9cf574876a6e08f7d8e->leave($__internal_e3d06efc9ff9eda1c10a34a4cf0c9b83815e2529d76bf9cf574876a6e08f7d8e_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_1c2ff34a573ad07b97dc3fcd1c518785aeacee363978eb641eb5aeaa8359ae9e = $this->env->getExtension("native_profiler");
        $__internal_1c2ff34a573ad07b97dc3fcd1c518785aeacee363978eb641eb5aeaa8359ae9e->enter($__internal_1c2ff34a573ad07b97dc3fcd1c518785aeacee363978eb641eb5aeaa8359ae9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_logout");
        echo "\">Logout</a></li>
            ";
        
        $__internal_1c2ff34a573ad07b97dc3fcd1c518785aeacee363978eb641eb5aeaa8359ae9e->leave($__internal_1c2ff34a573ad07b97dc3fcd1c518785aeacee363978eb641eb5aeaa8359ae9e_prof);

    }

    // line 26
    public function block_left($context, array $blocks = array())
    {
        $__internal_33a921a4b52c96db0d369eefb750f76f23e46199bcc02fa617e4fd4ca6b89472 = $this->env->getExtension("native_profiler");
        $__internal_33a921a4b52c96db0d369eefb750f76f23e46199bcc02fa617e4fd4ca6b89472->enter($__internal_33a921a4b52c96db0d369eefb750f76f23e46199bcc02fa617e4fd4ca6b89472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        // line 27
        echo "            <div class=\"block\" style=\"float: left; width: 15%\">
            <h3>Menu</h3><br>
            ";
        // line 29
        echo $this->env->getExtension('knp_menu')->render("main");
        echo "
            <hr>
            ";
        // line 31
        echo $this->env->getExtension('knp_menu')->render("side");
        echo "
            </div>
        ";
        
        $__internal_33a921a4b52c96db0d369eefb750f76f23e46199bcc02fa617e4fd4ca6b89472->leave($__internal_33a921a4b52c96db0d369eefb750f76f23e46199bcc02fa617e4fd4ca6b89472_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_062beb92917e54ff587cd3ae9ffa713062783ab8503ddd2f400106b6d2090da3 = $this->env->getExtension("native_profiler");
        $__internal_062beb92917e54ff587cd3ae9ffa713062783ab8503ddd2f400106b6d2090da3->enter($__internal_062beb92917e54ff587cd3ae9ffa713062783ab8503ddd2f400106b6d2090da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_062beb92917e54ff587cd3ae9ffa713062783ab8503ddd2f400106b6d2090da3->leave($__internal_062beb92917e54ff587cd3ae9ffa713062783ab8503ddd2f400106b6d2090da3_prof);

    }

    public function getTemplateName()
    {
        return "StudentBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 36,  183 => 31,  178 => 29,  174 => 27,  168 => 26,  158 => 20,  152 => 19,  143 => 22,  141 => 19,  138 => 18,  132 => 17,  121 => 42,  117 => 40,  115 => 39,  111 => 37,  109 => 36,  105 => 34,  103 => 26,  100 => 25,  98 => 17,  95 => 16,  86 => 13,  83 => 12,  78 => 11,  72 => 10,  60 => 8,  51 => 5,  46 => 4,  40 => 3,  11 => 1,);
    }
}
