<?php

/* platforms/platforms.twig */
class __TwigTemplate_3ac63089ccea8298c893fd99eb404ae3243bbd9f8c366a9f2090a62a23420036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("common/header.twig", "platforms/platforms.twig", 1)->display($context);
        // line 2
        echo "<div class=\"container platformBg\">
    <div class=\"row\">
        <div class=\"col-lg-2\">
            <h4 class=\"pageNumber\">Page 1</h4>

        </div>
        <div class=\"col-lg-8\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["platforms"]) ? $context["platforms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 10
            echo "            <div class=\"row\">
                <div class=\"col-lg-12 platform\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <a href=\"/platform/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platform_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
            echo "\"><h3 >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
            echo "</h3></a>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-5\">
                            <img class=\"img img-responsive\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "image_screen_url", array(), "array"), "html", null, true);
            echo "\" alt=\"\">
                        </div>
                        <div class=\"col-lg-7\">
                            <p><span class=\"glyphicon glyphicon-time datePublished\"></span> Date Published: 12/12/16</p>
                            <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "deck", array(), "array"), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"col-lg-12\">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>
        <div class=\"col-lg-2\"><h3>TEST</h3></div>
        
    </div>
</div>
";
        // line 37
        $this->loadTemplate("common/footer.twig", "platforms/platforms.twig", 37)->display($context);
    }

    public function getTemplateName()
    {
        return "platforms/platforms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 37,  74 => 32,  59 => 23,  52 => 19,  40 => 14,  34 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% include 'common/header.twig' %}*/
/* <div class="container platformBg">*/
/*     <div class="row">*/
/*         <div class="col-lg-2">*/
/*             <h4 class="pageNumber">Page 1</h4>*/
/* */
/*         </div>*/
/*         <div class="col-lg-8">*/
/*             {% for platform in platforms %}*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 platform">*/
/*                     <div class="row">*/
/*                         <div class="col-lg-6">*/
/*                             <a href="/platform/{{platform['platform_id']}}/{{platform['name']}}"><h3 >{{ platform['name'] }}</h3></a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-lg-5">*/
/*                             <img class="img img-responsive" src="{{platform['image_screen_url']}}" alt="">*/
/*                         </div>*/
/*                         <div class="col-lg-7">*/
/*                             <p><span class="glyphicon glyphicon-time datePublished"></span> Date Published: 12/12/16</p>*/
/*                             <p>{{platform['deck']}}</p>*/
/*                         </div>*/
/*                         <div class="col-lg-12">*/
/*                             <hr>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <div class="col-lg-2"><h3>TEST</h3></div>*/
/*         */
/*     </div>*/
/* </div>*/
/* {% include 'common/footer.twig' %}*/
