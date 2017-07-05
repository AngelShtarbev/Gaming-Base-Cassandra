<?php

/* videos/videos_content.twig */
class __TwigTemplate_b9d13fefee952369b938ec98bce0cc79c2e13bcc8314d26a78a9a06b3a26da84 extends Twig_Template
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
            echo "    <!-- Page Content -->
    <div class=\"container\">
    <div class=\"row\">
    <div class=\"container-fluid customRow\">
    </div>
    <!--</div>-->
    <div class=\"col-lg-12\">
    <div class=\"col-lg-9\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2  class=\"reviewHeadingLink\"><a href=\"\">Videos</a></h2>
                <div class=\"col-lg-12 dropdownMenuContainer\">
                    <div class=\"dropdown\">
                        <button  class=\"buttonDropdownMenuContainer btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Sort Videos By
                            <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"/videos/\">Newest First</a></li>
                            <li><a href=\"/videos/asc/\">Oldest First</a></li>
                        </ul>
                    </div>
                </div>
                <hr class=\"customHR\">
            </div>
        </div>
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                // line 27
                echo "            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-12 videosList\">
                        <div class=\"col-lg-3\">
                            <a  href=\"/video/";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "video_id", array(), "array"), "html", null, true);
                echo "/\"><img class=\"img img-responsive\" height=\"97\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["video"], "images", array(), "array"), 3, array(), "array"), "html", null, true);
                echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-lg-9\">
                            <h4  class=\"reviewHeadingLink\"><a href=\"/video/";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "video_id", array(), "array"), "html", null, true);
                echo "/\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array(), "array"), "html", null, true);
                echo "</a></h4>
                            <i class=\"glyphicon glyphicon-calendar\"></i><span class=\"gamesDate\">";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["video"], "publish_date", array(), "array"), "m/d/Y"), "html", null, true);
                echo "</span>
                            <span>&nbsp;</span>
                            <i class=\"glyphicon glyphicon-eye-open\"></i><span class=\"gamesDate\">";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "video_type", array(), "array"), "html", null, true);
                echo "</span>
                            <p class=\"videosDescription\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "deck", array(), "array"), "html", null, true);
                echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
    </div>

    <div class=\"col-lg-3 platforms\">
        <h2>Popular Platforms</h2>
        <ul>
            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["popular_platforms"]) ? $context["popular_platforms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                // line 52
                echo "                <li>
                    <a href=\"/platform/";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platform_id", array(), "array"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                echo "/\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 54
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
            // line 58
            echo "        </ul>
    </div>

    <div class=\"col-lg-12\">
        <div class=\"col-lg-9 pagination\">
            ";
            // line 63
            if (((isset($context["previous"]) ? $context["previous"] : null) > 0)) {
                // line 64
                echo "                <a href=\"/videos/";
                echo twig_escape_filter($this->env, (isset($context["previous"]) ? $context["previous"] : null), "html", null, true);
                echo "\">
                    <button class=\"btn btn-medium btn-primary pull-left\">Previous</button>
                </a>
            ";
            }
            // line 68
            echo "            ";
            if (((isset($context["next"]) ? $context["next"] : null) > 0)) {
                // line 69
                echo "                <a href=\"/videos/";
                echo twig_escape_filter($this->env, (isset($context["next"]) ? $context["next"] : null), "html", null, true);
                echo "\">
                    <button class=\"btn btn-medium btn-primary pull-right\">Next</button>
                </a>
            ";
            }
            // line 73
            echo "        </div>
    </div>

    ";
            // line 76
            if (twig_test_empty((isset($context["next"]) ? $context["next"] : null))) {
                // line 77
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
        } elseif ( !twig_test_empty(        // line 89
(isset($context["message"]) ? $context["message"] : null))) {
            // line 90
            echo "    <h4 align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</h4>
";
        }
    }

    public function getTemplateName()
    {
        return "videos/videos_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 90,  177 => 89,  163 => 77,  161 => 76,  156 => 73,  148 => 69,  145 => 68,  137 => 64,  135 => 63,  128 => 58,  116 => 54,  108 => 53,  105 => 52,  101 => 51,  93 => 45,  81 => 39,  77 => 38,  72 => 36,  66 => 35,  57 => 31,  51 => 27,  47 => 26,  21 => 2,  19 => 1,);
    }
}
/* {% if message is empty %}*/
/*     <!-- Page Content -->*/
/*     <div class="container">*/
/*     <div class="row">*/
/*     <div class="container-fluid customRow">*/
/*     </div>*/
/*     <!--</div>-->*/
/*     <div class="col-lg-12">*/
/*     <div class="col-lg-9">*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h2  class="reviewHeadingLink"><a href="">Videos</a></h2>*/
/*                 <div class="col-lg-12 dropdownMenuContainer">*/
/*                     <div class="dropdown">*/
/*                         <button  class="buttonDropdownMenuContainer btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sort Videos By*/
/*                             <span class="caret"></span></button>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="/videos/">Newest First</a></li>*/
/*                             <li><a href="/videos/asc/">Oldest First</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <hr class="customHR">*/
/*             </div>*/
/*         </div>*/
/*         {% for video in videos %}*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <div class="col-lg-12 videosList">*/
/*                         <div class="col-lg-3">*/
/*                             <a  href="/video/{{video['video_id']}}/"><img class="img img-responsive" height="97" src="{{video['images'][3]}}" alt="">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="col-lg-9">*/
/*                             <h4  class="reviewHeadingLink"><a href="/video/{{video['video_id']}}/">{{video['name']}}</a></h4>*/
/*                             <i class="glyphicon glyphicon-calendar"></i><span class="gamesDate">{{ video['publish_date']|date("m/d/Y")}}</span>*/
/*                             <span>&nbsp;</span>*/
/*                             <i class="glyphicon glyphicon-eye-open"></i><span class="gamesDate">{{ video['video_type']}}</span>*/
/*                             <p class="videosDescription">{{video['deck']}}</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*     </div>*/
/* */
/*     <div class="col-lg-3 platforms">*/
/*         <h2>Popular Platforms</h2>*/
/*         <ul>*/
/*             {% for platform in popular_platforms %}*/
/*                 <li>*/
/*                     <a href="/platform/{{ platform['platform_id'] }}/{{ platform['name'] }}/" title="{{ platform['name'] }}">*/
/*                         <img src="{{ platform['image_tiny_url'] }}">{{ platform['name'] }}*/
/*                     </a>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="col-lg-12">*/
/*         <div class="col-lg-9 pagination">*/
/*             {% if previous > 0 %}*/
/*                 <a href="/videos/{{ previous }}">*/
/*                     <button class="btn btn-medium btn-primary pull-left">Previous</button>*/
/*                 </a>*/
/*             {% endif %}*/
/*             {% if next > 0 %}*/
/*                 <a href="/videos/{{ next }}">*/
/*                     <button class="btn btn-medium btn-primary pull-right">Next</button>*/
/*                 </a>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% if next is empty  %}*/
/* */
/*         </div>*/
/*         <div class="col-lg-12">*/
/*             <div class="col-lg-9">*/
/*                 <div class="row">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     {% endif %}*/
/* {% elseif message is not empty %}*/
/*     <h4 align="center">{{ message }}</h4>*/
/* {% endif %}*/
