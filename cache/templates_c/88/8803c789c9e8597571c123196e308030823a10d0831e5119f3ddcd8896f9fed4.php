<?php

/* platforms/game_content.twig */
class __TwigTemplate_8312fdc99244cfdf2e6e5b60fd676d5f0b48f7e876c458be4014fc6be1358c09 extends Twig_Template
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
                <h3>Platform</h3>
            </div>
            <div class=\" dropdownPlatform\">
                <div class=\"dropdown\">
                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Sort Games
                        By Platforms
                        <span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"/platform/asc/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["platforms"]) ? $context["platforms"] : null), 0, array(), "array"), "platforms_id", array(), "array"), "html", null, true);
        echo "/\">Newest First</a></li>
                        <li><a href=\"/platform/desc/";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["platforms"]) ? $context["platforms"] : null), 0, array(), "array"), "platforms_id", array(), "array"), "html", null, true);
        echo "/\">Oldest First</a></li>
                    </ul>
                </div>
            </div>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["platforms"]) ? $context["platforms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 19
            echo "            <div class=\"col-lg-12 game_platform_background game_platform_bg\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <img class=\"img game_platform_image\" width=\"330\" height=\"180\"  src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "image_super_url", array(), "array"), "html", null, true);
            echo "\" alt=\"\">
                        </div>
                        <div class=\"col-lg-6\">
                            <h4><a href=\"/game/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "game_api_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
            echo "</a></h4>
                            <span class=\"glyphicon glyphicon-time datePublished\"></span> Date Released:";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "date_added", array(), "array"), "html", null, true);
            echo "
                            <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "deck", array(), "array"), "html", null, true);
            echo "</p>
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["platform"], "platforms", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["platform_type"]) {
                // line 29
                echo "                                <span class=\"badge\">";
                echo twig_escape_filter($this->env, $context["platform_type"], "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                        </div>
                    </div>
                    <div class=\"horizontal2\"></div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "platforms/game_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  88 => 31,  79 => 29,  75 => 28,  71 => 27,  67 => 26,  59 => 25,  53 => 22,  48 => 19,  44 => 18,  37 => 14,  33 => 13,  19 => 1,);
    }
}
/* <div class="container ">*/
/*     <div class="col-lg-12">*/
/*         <div class="col-lg-12">*/
/*             <div class="all_games_heading">*/
/*                 <h3>Platform</h3>*/
/*             </div>*/
/*             <div class=" dropdownPlatform">*/
/*                 <div class="dropdown">*/
/*                     <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sort Games*/
/*                         By Platforms*/
/*                         <span class="caret"></span></button>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="/platform/asc/{{platforms[0]['platforms_id']}}/">Newest First</a></li>*/
/*                         <li><a href="/platform/desc/{{platforms[0]['platforms_id']}}/">Oldest First</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             {% for platform in platforms %}*/
/*             <div class="col-lg-12 game_platform_background game_platform_bg">*/
/*                     <div class="row">*/
/*                         <div class="col-lg-6">*/
/*                             <img class="img game_platform_image" width="330" height="180"  src="{{ platform['image_super_url'] }}" alt="">*/
/*                         </div>*/
/*                         <div class="col-lg-6">*/
/*                             <h4><a href="/game/{{platform['game_api_id']}}/{{platform['name']}}/">{{platform['name']}}</a></h4>*/
/*                             <span class="glyphicon glyphicon-time datePublished"></span> Date Released:{{ platform['date_added']}}*/
/*                             <p>{{ platform['deck'] }}</p>*/
/*                             {% for platform_type in platform.platforms %}*/
/*                                 <span class="badge">{{ platform_type }}</span>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="horizontal2"></div>*/
/*             </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
