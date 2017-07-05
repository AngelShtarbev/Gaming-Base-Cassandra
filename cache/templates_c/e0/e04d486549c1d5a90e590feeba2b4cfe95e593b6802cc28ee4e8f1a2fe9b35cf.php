<?php

/* platforms/platforms_content.twig */
class __TwigTemplate_4d3f961398f3de62ae0a6e3f4a54c3ecb8969226e36aad6c865db4eff0140114 extends Twig_Template
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
        if (twig_test_empty((isset($context["message"]) ? $context["message"] : null))) {
            // line 2
            echo "<!-- Page Content -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"container-fluid customRow\">
        </div>
        <!--</div>-->
        <div class=\"col-lg-12\">
            <div class=\"col-lg-9\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h4 class=\"latestVideosHeading\">Platforms</h4>
                    </div>
                </div>
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["platforms"]) ? $context["platforms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                // line 16
                echo "                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"col-lg-12 platformsList\">
                            <div class=\"col-lg-3\"><a href=\"/platform/";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platform_id", array(), "array"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                echo "/\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "image_small_url", array(), "array"), "html", null, true);
                echo "\" height=\"172\" width=\"172\" alt=\"\"></a></div>
                            <div class=\"col-lg-9 gamesRenderList\">
                                <a href=\"/platform/";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platform_id", array(), "array"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                echo "/\" class=\"platformsNameLink\"><h4>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                echo "</h4></a>
                                <i class=\"glyphicon glyphicon-calendar\"></i><span class=\"gamesDate\">";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["platform"], "date_added", array(), "array"), "m/d/Y"), "html", null, true);
                echo "</span>
                                <p class=\"gameDescription\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "deck", array(), "array"), "html", null, true);
                echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </div>
            <div class=\"col-lg-3 platforms\">
                <h2>Popular Platforms</h2>
                <ul>
                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["popular_platforms"]) ? $context["popular_platforms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                // line 34
                echo "                        <li>
                            <a href=\"/platform/";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platform_id", array(), "array"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                echo "/\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "image_tiny_url", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                </ul>
            </div>

           <div class=\"col-lg-12\">
              <div class=\"col-lg-9 pagination\">
             ";
            // line 45
            if (((isset($context["previous"]) ? $context["previous"] : null) > 0)) {
                // line 46
                echo "                <a href=\"/platforms/";
                echo twig_escape_filter($this->env, (isset($context["previous"]) ? $context["previous"] : null), "html", null, true);
                echo "\">
                    <button class=\"btn btn-medium btn-primary pull-left\">Previous</button>
                </a>
            ";
            }
            // line 50
            echo "            ";
            if ( !twig_test_empty((isset($context["next"]) ? $context["next"] : null))) {
                // line 51
                echo "                <a href=\"/platforms/";
                echo twig_escape_filter($this->env, (isset($context["next"]) ? $context["next"] : null), "html", null, true);
                echo "\">
                    <button class=\"btn btn-medium btn-primary pull-right\">Next</button>
                </a>
              ";
            }
            // line 55
            echo "            </div>
       </div>

       ";
            // line 58
            if (twig_test_empty((isset($context["next"]) ? $context["next"] : null))) {
                // line 59
                echo "

        </div>
        <div class=\"col-lg-12\">
            <div class=\"col-lg-9\">
                <div class=\"row\">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->

";
            }
        } elseif ( !twig_test_empty(        // line 73
(isset($context["message"]) ? $context["message"] : null))) {
            // line 74
            echo "    <h4 align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</h4>
";
        }
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
        return array (  164 => 74,  162 => 73,  146 => 59,  144 => 58,  139 => 55,  131 => 51,  128 => 50,  120 => 46,  118 => 45,  111 => 40,  99 => 36,  91 => 35,  88 => 34,  84 => 33,  78 => 29,  66 => 23,  62 => 22,  54 => 21,  45 => 19,  40 => 16,  36 => 15,  21 => 2,  19 => 1,);
    }
}
/* {% if message is empty %}*/
/* <!-- Page Content -->*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="container-fluid customRow">*/
/*         </div>*/
/*         <!--</div>-->*/
/*         <div class="col-lg-12">*/
/*             <div class="col-lg-9">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <h4 class="latestVideosHeading">Platforms</h4>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% for platform in platforms %}*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <div class="col-lg-12 platformsList">*/
/*                             <div class="col-lg-3"><a href="/platform/{{platform['platform_id']}}/{{platform['name']}}/"><img src="{{platform['image_small_url']}}" height="172" width="172" alt=""></a></div>*/
/*                             <div class="col-lg-9 gamesRenderList">*/
/*                                 <a href="/platform/{{platform['platform_id']}}/{{platform['name']}}/" class="platformsNameLink"><h4>{{platform['name']}}</h4></a>*/
/*                                 <i class="glyphicon glyphicon-calendar"></i><span class="gamesDate">{{platform['date_added']|date("m/d/Y")}}</span>*/
/*                                 <p class="gameDescription">{{platform['deck']}}</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="col-lg-3 platforms">*/
/*                 <h2>Popular Platforms</h2>*/
/*                 <ul>*/
/*                     {% for platform in popular_platforms %}*/
/*                         <li>*/
/*                             <a href="/platform/{{ platform['platform_id'] }}/{{ platform['name'] }}/" title="{{ platform['name'] }}">*/
/*                                 <img src="{{ platform['image_tiny_url'] }}">{{ platform['name'] }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/* */
/*            <div class="col-lg-12">*/
/*               <div class="col-lg-9 pagination">*/
/*              {% if previous > 0 %}*/
/*                 <a href="/platforms/{{ previous }}">*/
/*                     <button class="btn btn-medium btn-primary pull-left">Previous</button>*/
/*                 </a>*/
/*             {% endif %}*/
/*             {% if next is not empty  %}*/
/*                 <a href="/platforms/{{ next }}">*/
/*                     <button class="btn btn-medium btn-primary pull-right">Next</button>*/
/*                 </a>*/
/*               {% endif %}*/
/*             </div>*/
/*        </div>*/
/* */
/*        {% if next is empty  %}*/
/* */
/* */
/*         </div>*/
/*         <div class="col-lg-12">*/
/*             <div class="col-lg-9">*/
/*                 <div class="row">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- /.container -->*/
/* */
/* {% endif %}*/
/* {% elseif message is not empty %}*/
/*     <h4 align="center">{{ message }}</h4>*/
/* {% endif %}*/
