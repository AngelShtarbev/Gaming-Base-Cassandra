<?php

/* platforms/platforms_content.twig */
class __TwigTemplate_6ba186877119d24606eae6d88f5f5204bc4e56ab3f6c0893c03a744c9930f850 extends Twig_Template
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
        echo "<div class=\"container \">
    <div class=\"col-lg-12\">
        <div class=\"col-lg-12\">
            <div class=\"all_games_heading\">
                <h3>All Platforms Available</h3>
            </div>
        <div class=\"col-lg-12 platform_background\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["platforms"]) ? $context["platforms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 9
            echo "                <div class=\"col-lg-12\">
                    <div class=\"row\">
                        <div class=\"horizontal2\"></div>
                        <div class=\"col-lg-5\">
                            <div class=\"platform_image\">
                                <a href=\"/platform/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platform_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"));
            echo "\">
                                    <img class=\"img img-responsive\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "image_screen_url", array(), "array"), "html", null, true);
            echo "\"  alt=\"\"></a>
                            </div>
                        </div>
                        <div class=\"col-lg-7 platform_info\">
                            <a href=\"/platform/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platform_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"));
            echo "\">
                                <h3>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
            echo "</h3></a>
                            <p><span class=\"glyphicon glyphicon-time datePublished\"></span> Date
                                Published: ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["platform"], "date_added", array(), "array"), "m/d/Y"), "html", null, true);
            echo "</p>
                            <p>";
            // line 23
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["platform"], "deck", array(), "array")), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "platforms/platforms_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  67 => 23,  63 => 22,  58 => 20,  52 => 19,  45 => 15,  39 => 14,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <div class="container ">*/
/*     <div class="col-lg-12">*/
/*         <div class="col-lg-12">*/
/*             <div class="all_games_heading">*/
/*                 <h3>All Platforms Available</h3>*/
/*             </div>*/
/*         <div class="col-lg-12 platform_background">*/
/*             {% for platform in platforms %}*/
/*                 <div class="col-lg-12">*/
/*                     <div class="row">*/
/*                         <div class="horizontal2"></div>*/
/*                         <div class="col-lg-5">*/
/*                             <div class="platform_image">*/
/*                                 <a href="/platform/{{ platform['platform_id'] }}/{{ platform['name']|escape }}">*/
/*                                     <img class="img img-responsive" src="{{ platform['image_screen_url'] }}"  alt=""></a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-lg-7 platform_info">*/
/*                             <a href="/platform/{{ platform['platform_id'] }}/{{ platform['name']|escape }}">*/
/*                                 <h3>{{ platform['name'] }}</h3></a>*/
/*                             <p><span class="glyphicon glyphicon-time datePublished"></span> Date*/
/*                                 Published: {{ platform['date_added']|date("m/d/Y") }}</p>*/
/*                             <p>{{ platform['deck']|striptags }}</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </div>*/
