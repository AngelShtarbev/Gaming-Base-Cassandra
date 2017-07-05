<?php

/* reviews/reviews_content_asc.twig */
class __TwigTemplate_9df772980c2b3a9c1d4ca9524611283c814d64769c815bf6eb26b1ccb3dd1c4e extends Twig_Template
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
                <h4  class=\"reviewHeadingLink\"><a href=\"/review/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "review_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "game_name", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["review"]) ? $context["review"] : null), "game_name", array(), "array"), "html", null, true);
            echo "</a></h4>
                <div class=\"col-lg-12 dropdownMenuContainer\">
                    <div class=\"dropdown\">
                        <button  class=\"buttonDropdownMenuContainer btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Sort Reviews By
                            <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"/reviews/\">Newest First</a></li>
                            <li><a href=\"/reviews/asc/\">Oldest First</a></li>
                            <li><a href=\"/reviews/score/desc/\">Score (High-Low)</a></li>
                            <li><a href=\"/reviews/score/asc/\">Score (Low-High)</a></li>
                        </ul>
                    </div>
                </div>
                <hr class=\"customHR\">
            </div>
        </div>
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 29
                echo "            <div class=\"row\">
                <div class=\"col-lg-12 \">
                    <div class=\"col-lg-12\">
                        <h4  class=\"reviewHeadingLink\"><a href=\"/review/";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "review_id", array(), "array"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
                echo "</a></h4>
                        <div class=\"ratingsReviews col-lg-2\">
                            <p class=\"ratingStars\">
                                ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["review"], "score", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                    // line 36
                    echo "                                    <span class=\"glyphicon glyphicon-star\"></span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                            </p>
                        </div>
                        <div class=\"col-lg-10\">
                            <i class=\"glyphicon glyphicon-calendar\"></i><span class=\"gamesDate\">";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "date_added", array(), "array"), "m/d/Y"), "html", null, true);
                echo "</span>
                            <span>&nbsp;</span>
                            ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["review"], "platforms", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["platforms"]) {
                    // line 44
                    echo "                                <i class=\"glyphicon glyphicon-th-large\"></i><span class=\"gamesDate\">";
                    echo twig_escape_filter($this->env, $context["platforms"], "html", null, true);
                    echo "</span>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platforms'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                        </div>
                    </div>
                    <div class=\"col-lg-12 \">
                        ";
                // line 49
                if (twig_test_empty($this->getAttribute($context["review"], "deck", array(), "array"))) {
                    // line 50
                    echo "                        ";
                } elseif ($this->getAttribute($context["review"], "deck", array(), "array")) {
                    // line 51
                    echo "                            <p class=\"reviewDescription\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "deck", array(), "array"), "html", null, true);
                    echo "</p>
                        ";
                }
                // line 53
                echo "                    </div>
                </div>
            </div>
            <hr class=\"customDivider\">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    </div>

    <div class=\"col-lg-3 platforms\">
        <h2>Popular Platforms</h2>
        <ul>
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["popular_platforms"]) ? $context["popular_platforms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                // line 64
                echo "                <li>
                    <a href=\"/platform/";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platform_id", array(), "array"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                echo "/\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 66
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
            // line 70
            echo "        </ul>
    </div>

    <div class=\"col-lg-12\">
        <div class=\"col-lg-9 pagination\">
            ";
            // line 75
            if (((isset($context["previous"]) ? $context["previous"] : null) > 0)) {
                // line 76
                echo "                <a href=\"/reviews/asc/";
                echo twig_escape_filter($this->env, (isset($context["previous"]) ? $context["previous"] : null), "html", null, true);
                echo "\">
                    <button class=\"btn btn-medium btn-primary pull-left\">Previous</button>
                </a>
            ";
            }
            // line 80
            echo "            ";
            if (((isset($context["next"]) ? $context["next"] : null) > 0)) {
                // line 81
                echo "                <a href=\"/reviews/asc/";
                echo twig_escape_filter($this->env, (isset($context["next"]) ? $context["next"] : null), "html", null, true);
                echo "\">
                    <button class=\"btn btn-medium btn-primary pull-right\">Next</button>
                </a>
            ";
            }
            // line 85
            echo "        </div>
    </div>

    ";
            // line 88
            if (twig_test_empty((isset($context["next"]) ? $context["next"] : null))) {
                // line 89
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
        } elseif ( !twig_test_empty(        // line 101
(isset($context["message"]) ? $context["message"] : null))) {
            // line 102
            echo "    <h4 align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</h4>
";
        }
    }

    public function getTemplateName()
    {
        return "reviews/reviews_content_asc.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 102,  218 => 101,  204 => 89,  202 => 88,  197 => 85,  189 => 81,  186 => 80,  178 => 76,  176 => 75,  169 => 70,  157 => 66,  149 => 65,  146 => 64,  142 => 63,  135 => 58,  125 => 53,  119 => 51,  116 => 50,  114 => 49,  109 => 46,  100 => 44,  96 => 43,  91 => 41,  86 => 38,  79 => 36,  75 => 35,  65 => 32,  60 => 29,  56 => 28,  33 => 12,  21 => 2,  19 => 1,);
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
/*                 <h4  class="reviewHeadingLink"><a href="/review/{{review['review_id']}}/{{review['game_name']}}">{{review['game_name']}}</a></h4>*/
/*                 <div class="col-lg-12 dropdownMenuContainer">*/
/*                     <div class="dropdown">*/
/*                         <button  class="buttonDropdownMenuContainer btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sort Reviews By*/
/*                             <span class="caret"></span></button>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="/reviews/">Newest First</a></li>*/
/*                             <li><a href="/reviews/asc/">Oldest First</a></li>*/
/*                             <li><a href="/reviews/score/desc/">Score (High-Low)</a></li>*/
/*                             <li><a href="/reviews/score/asc/">Score (Low-High)</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <hr class="customHR">*/
/*             </div>*/
/*         </div>*/
/*         {% for review in reviews %}*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 ">*/
/*                     <div class="col-lg-12">*/
/*                         <h4  class="reviewHeadingLink"><a href="/review/{{review['review_id']}}/{{review['game_name']}}">{{review['game_name']}}</a></h4>*/
/*                         <div class="ratingsReviews col-lg-2">*/
/*                             <p class="ratingStars">*/
/*                                 {% for rating in review['score'] %}*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                 {% endfor %}*/
/*                             </p>*/
/*                         </div>*/
/*                         <div class="col-lg-10">*/
/*                             <i class="glyphicon glyphicon-calendar"></i><span class="gamesDate">{{ review['date_added']|date("m/d/Y") }}</span>*/
/*                             <span>&nbsp;</span>*/
/*                             {% for platforms in review.platforms %}*/
/*                                 <i class="glyphicon glyphicon-th-large"></i><span class="gamesDate">{{platforms}}</span>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-12 ">*/
/*                         {% if review['deck'] is empty %}*/
/*                         {% elseif review['deck'] %}*/
/*                             <p class="reviewDescription">{{review['deck']}}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <hr class="customDivider">*/
/*         {% endfor %}*/
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
/*                 <a href="/reviews/asc/{{previous}}">*/
/*                     <button class="btn btn-medium btn-primary pull-left">Previous</button>*/
/*                 </a>*/
/*             {% endif %}*/
/*             {% if next > 0 %}*/
/*                 <a href="/reviews/asc/{{next}}">*/
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
/* */
