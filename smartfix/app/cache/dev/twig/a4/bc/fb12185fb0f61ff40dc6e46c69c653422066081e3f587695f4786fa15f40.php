<?php

/* StudentBundle:School:index.html.twig */
class __TwigTemplate_a4bcfb12185fb0f61ff40dc6e46c69c653422066081e3f587695f4786fa15f40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudentBundle::layout.html.twig", "StudentBundle:School:index.html.twig", 1);
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
        $__internal_e07dc5b51ea976e94c6abcc47abbff15d9efe95a12a2a2b28c54420162b34acb = $this->env->getExtension("native_profiler");
        $__internal_e07dc5b51ea976e94c6abcc47abbff15d9efe95a12a2a2b28c54420162b34acb->enter($__internal_e07dc5b51ea976e94c6abcc47abbff15d9efe95a12a2a2b28c54420162b34acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudentBundle:School:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e07dc5b51ea976e94c6abcc47abbff15d9efe95a12a2a2b28c54420162b34acb->leave($__internal_e07dc5b51ea976e94c6abcc47abbff15d9efe95a12a2a2b28c54420162b34acb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb935fa920067819465f6701f1e612604d53503f5db2608860bd5f11f29e9b6e = $this->env->getExtension("native_profiler");
        $__internal_fb935fa920067819465f6701f1e612604d53503f5db2608860bd5f11f29e9b6e->enter($__internal_fb935fa920067819465f6701f1e612604d53503f5db2608860bd5f11f29e9b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_fb935fa920067819465f6701f1e612604d53503f5db2608860bd5f11f29e9b6e->leave($__internal_fb935fa920067819465f6701f1e612604d53503f5db2608860bd5f11f29e9b6e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_bbab217eaf363380425f7141d7737a184f7203a9219d26136be42f451e7a71cd = $this->env->getExtension("native_profiler");
        $__internal_bbab217eaf363380425f7141d7737a184f7203a9219d26136be42f451e7a71cd->enter($__internal_bbab217eaf363380425f7141d7737a184f7203a9219d26136be42f451e7a71cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
    <div style=\"width: 100%;\">
        <h1 style=\"float: left; width: 90%\" class=\"title\">Available demos</h1>
        <h1 style=\"float: right; width: 10%\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("school_add");
        echo "\">Add</a></h1>
    </div>
        <table width=\"100%\">
            <tr style=\"background: #E6E6E6; \">
                <td style=\"padding:3px 5px;\">No.</td>
                <td>Name</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Position</td>
                <td>Action</td>
            </tr>

            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schools"]) ? $context["schools"] : $this->getContext($context, "schools")));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 23
            echo "             <tr style=\"border-bottom: solid 1px #D3D3D3;\">
                <td style=\"padding:3px 5px;\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_by_school", array("id" => $this->getAttribute($context["school"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "phone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "address", array()), "html", null, true);
            echo "</td>
                <td align=\"center\">
                    ";
            // line 29
            if (((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")) == $this->getAttribute($context["school"], "position", array()))) {
                // line 30
                echo "                        <a href=\"javascript:void()\" onclick=\"functionDown('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array()), "html", null, true);
                echo "');\" id=\"down\">down</a>
                    ";
            }
            // line 32
            echo "                    ";
            if ((((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")) != $this->getAttribute($context["school"], "position", array())) && ((isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")) != $this->getAttribute($context["school"], "position", array())))) {
                // line 33
                echo "                        <a href=\"javascript:void()\" onclick=\"functionUp('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array()), "html", null, true);
                echo "');\" id=\"up\">up</a> | <a href=\"javascript:void()\" onclick=\"functionDown('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array()), "html", null, true);
                echo "');\" id=\"down\">down</a>
                    ";
            }
            // line 35
            echo "                    ";
            if (((isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")) == $this->getAttribute($context["school"], "position", array()))) {
                // line 36
                echo "                        <a href=\"javascript:void()\" onclick=\"functionUp('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array()), "html", null, true);
                echo "');\" id=\"up\">up</a>
                    ";
            }
            // line 38
            echo "                </td>
                <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_update", array("id" => $this->getAttribute($context["school"], "id", array()))), "html", null, true);
            echo "\">Edit</a> | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_remove", array("id" => $this->getAttribute($context["school"], "id", array()))), "html", null, true);
            echo "\">Remove</a></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </table>

        <div  class=\"navigation\">
                ";
        // line 45
        echo $this->env->getExtension('knp_pagination')->render((isset($context["schools"]) ? $context["schools"] : $this->getContext($context, "schools")));
        echo "
            </div>
<script src=\"http://code.jquery.com/jquery-1.11.3.min.js\"></script>
<script type=\"text/javascript\">
       function functionUp (id){
            \$.ajax({
                type: 'POST',
                url: \"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("school_up_position");
        echo "\",
                data: {id:id},
                success: function (data) {
                    },
                     complete: function(){ //A function to be called when the request finishes (after success and error callbacks are executed) - from jquery docs
                        //do smth if you need
                        document.location.reload();
                      }
            });
        };
        function functionDown (id){
            \$.ajax({
                type: 'POST',
                url: \"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("school_down_position");
        echo "\",
                data: {id:id},
                success: function (data) {
                    },
                    complete: function(){ //A function to be called when the request finishes (after success and error callbacks are executed) - from jquery docs
                        //do smth if you need
                        document.location.reload();
                      }
            });
        };
</script>
";
        
        $__internal_bbab217eaf363380425f7141d7737a184f7203a9219d26136be42f451e7a71cd->leave($__internal_bbab217eaf363380425f7141d7737a184f7203a9219d26136be42f451e7a71cd_prof);

    }

    public function getTemplateName()
    {
        return "StudentBundle:School:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 65,  156 => 52,  146 => 45,  141 => 42,  130 => 39,  127 => 38,  121 => 36,  118 => 35,  110 => 33,  107 => 32,  101 => 30,  99 => 29,  94 => 27,  90 => 26,  84 => 25,  80 => 24,  77 => 23,  73 => 22,  58 => 10,  53 => 7,  47 => 6,  35 => 3,  11 => 1,);
    }
}
