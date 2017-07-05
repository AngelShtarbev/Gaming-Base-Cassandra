<?php

/* home/home_content.twig */
class __TwigTemplate_2a0d1228dce9caedafaf9c8971c970b16a4e3f30af6a77a365d07b1abbfc4f54 extends Twig_Template
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
        echo "<!-- Page Content -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"row carousel-holder \">
                <div class=\"col-md-12 \">
                    <div id=\"carousel-example-generic\" class=\"carousel slide effect2\" data-ride=\"carousel\">
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"5\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"6\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"7\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"8\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"9\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"10\"></li>

                        </ol>
                        <div class=\"carousel-inner\">
                            <div class=\"item active\">
                                <img class=\"slide-image img-responsive\" src=\"assets/images/battlerite-bb.jpg\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"slide-image\" src=\"assets/images/gears-of-war-4-bb.jpg\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"slide-image\" src=\"assets/images/BF1_BB_759x286_lastchance.jpg\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"slide-image img-responsive\" src=\"assets/images/battlerite-bb.jpg\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"slide-image\" src=\"assets/images/gears-of-war-4-bb.jpg\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"slide-image\" src=\"assets/images/BF1_BB_759x286_lastchance.jpg\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"slide-image img-responsive\" src=\"assets/images/battlerite-bb.jpg\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"slide-image\" src=\"assets/images/gears-of-war-4-bb.jpg\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"slide-image\" src=\"assets/images/BF1_BB_759x286_lastchance.jpg\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"slide-image img-responsive\" src=\"assets/images/battlerite-bb.jpg\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"slide-image\" src=\"assets/images/gears-of-war-4-bb.jpg\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"slide-image\" src=\"assets/images/BF1_BB_759x286_lastchance.jpg\" alt=\"\">
                            </div>
                        </div>
                        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                            <span class=\"glyphicon glyphicon-chevron-left\"></span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                            <span class=\"glyphicon glyphicon-chevron-right\"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <div class=\"col-lg-12\">
        <div class=\"col-lg-9\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h2 class=\"latestVideosHeading\">Latest Videos</h2>
                </div>
            </div>
            <div class=\"row\">
                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["videos"]) ? $context["videos"] : null), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 79
            echo "                    <div class=\"col-sm-4 col-lg-4 col-md-4\">
                        <div class=\"thumbnail effect1\">
                            <a href=\"/video/";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "video_id", array(), "array"), "html", null, true);
            echo "/\" class=\"videoHoverThumbnail\">
                                <img src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["video"], "images", array(), "array"), 4, array(), "array"), "html", null, true);
            echo "\">
                            </a>
                            <div class=\"caption\">
                                <p class=\"videoHeadingCaption\">
                                    <a href=\"/video/";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "video_id", array(), "array"), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array(), "array"), "html", null, true);
            echo "</a>
                                </p>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "            </div>
            <div class=\"row\">
                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["videos"]) ? $context["videos"] : null), 3, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 95
            echo "                    <div class=\"col-sm-4 col-lg-4 col-md-4\">
                        <div class=\"thumbnail effect1\">
                            <a href=\"/video/";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "video_id", array(), "array"), "html", null, true);
            echo "/\" class=\"videoHoverThumbnail\">
                                <img src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["video"], "images", array(), "array"), 4, array(), "array"), "html", null, true);
            echo "\">
                            </a>
                            <div class=\"caption\">
                                <p class=\"videoHeadingCaption\">
                                    <a href=\"/video/";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "video_id", array(), "array"), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array(), "array"), "html", null, true);
            echo "</a>
                                </p>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "            </div>
            <div class=\"row\">
                ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["videos"]) ? $context["videos"] : null), 6, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 111
            echo "                    <div class=\"col-sm-4 col-lg-4 col-md-4\">
                        <div class=\"thumbnail effect1\">
                            <a href=\"/video/";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "video_id", array(), "array"), "html", null, true);
            echo "/\" class=\"videoHoverThumbnail\">
                                <img src=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["video"], "images", array(), "array"), 4, array(), "array"), "html", null, true);
            echo "\">
                            </a>
                            <div class=\"caption\">
                                <p class=\"videoHeadingCaption\">
                                    <a href=\"/video/";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "video_id", array(), "array"), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array(), "array"), "html", null, true);
            echo "</a>
                                </p>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "            </div>
        </div>
        <div class=\"col-lg-3 platforms\">
            <h2>Popular Platforms</h2>
            <ul>
                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popular_platforms"]) ? $context["popular_platforms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 130
            echo "                    <li>
                        <a href=\"/platform/";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platform_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
            echo "/\"
                           title=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 133
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
        // line 137
        echo "            </ul>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"col-lg-9\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h2 class=\"latestVideosHeading\">Latest Reviews</h2>
                </div>
            </div>
            <div class=\"row\">
                ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["reviews"]) ? $context["reviews"] : null), 0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 149
            echo "                    <div class=\"col-sm-6 col-lg-6 col-md-6\">
                        <div class=\"thumbnail effect1\">
                            <div class=\"col-lg-12\">
                                <h4 class=\"reviewHeadingLink\"><a href=\"/review/";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "review_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
            echo "</a></h4>
                                <div class=\"ratings\">
                                    <p class=\"pull-right\"></p>
                                    <p class=\"customRating\">
                                        ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["review"], "score", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                // line 157
                echo "                                            <span class=\"glyphicon glyphicon-star\"></span>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                                    </p>
                                </div>
                                <div class=\"caption\">
                                    <p class=\"reviewIndexDescription\">";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "deck", array(), "array"), "html", null, true);
            echo "</p>
                                    <span class=\"tag tag-default\"><i class=\"glyphicon glyphicon-calendar\"></i>";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "publish_date", array(), "array"), "html", null, true);
            echo "</span>
                                    <span class=\"tag tag-default\"><i class=\"fa fa-gamepad fa-lg \"></i>";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "platforms", array()), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "            </div>
            <div class=\"row\">
                ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["reviews"]) ? $context["reviews"] : null), 2, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 173
            echo "                    <div class=\"col-sm-6 col-lg-6 col-md-6\">
                        <div class=\"thumbnail effect1\">
                            <div class=\"col-lg-12\">
                                <h4  class=\"reviewHeadingLink\"><a href=\"/review/";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "review_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
            echo "</a></h4>
                                <div class=\"ratings \">
                                    <p class=\"pull-right\"></p>
                                    <p class=\"customRating\">
                                        ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["review"], "score", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                // line 181
                echo "                                            <span class=\"glyphicon glyphicon-star\"></span>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                                    </p>
                                </div>
                                <div class=\"caption\">
                                    <p class=\"reviewIndexDescription\">";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "deck", array(), "array"), "html", null, true);
            echo "</p>
                                    <span class=\"tag tag-default\"><i class=\"glyphicon glyphicon-calendar\"></i>";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "publish_date", array(), "array"), "html", null, true);
            echo "</span>
                                    <span class=\"tag tag-default\"><i class=\"fa fa-gamepad fa-lg \"></i>";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "platforms", array()), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "            </div>
            <div class=\"row\">
                ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["reviews"]) ? $context["reviews"] : null), 4, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 197
            echo "                    <div class=\"col-sm-6 col-lg-6 col-md-6\">
                        <div class=\"thumbnail effect1\">
                            <div class=\"col-lg-12\">
                                <h4  class=\"reviewHeadingLink\"><a href=\"/review/";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "review_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
            echo "</a></h4>
                                <div class=\"ratings \">
                                    <p class=\"pull-right\"></p>
                                    <p class=\"customRating\">
                                        ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["review"], "score", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                // line 205
                echo "                                            <span class=\"glyphicon glyphicon-star\"></span>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "                                    </p>
                                </div>
                                <div class=\"caption\">
                                    <p class=\"reviewIndexDescription\">";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "deck", array(), "array"), "html", null, true);
            echo "</p>
                                    <span class=\"tag tag-default\"><i class=\"glyphicon glyphicon-calendar\"></i>";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "publish_date", array(), "array"), "html", null, true);
            echo "</span>
                                    <span class=\"tag tag-default\"><i class=\"fa fa-gamepad fa-lg \"></i>";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "platforms", array()), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "            </div>
            <div class=\"row\">
                ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["reviews"]) ? $context["reviews"] : null), 6, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 221
            echo "                    <div class=\"col-sm-6 col-lg-6 col-md-6\">
                        <div class=\"thumbnail effect1\">
                            <div class=\"col-lg-12\">
                                <h4 class=\"reviewHeadingLink\"><a href=\"/review/";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "review_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
            echo "</a></h4>
                                <div class=\"ratings \">
                                    <p class=\"pull-right\"></p>
                                    <p class=\"customRating\">
                                        ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["review"], "score", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                // line 229
                echo "                                            <span class=\"glyphicon glyphicon-star\"></span>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "                                    </p>
                                </div>
                                <div class=\"caption\">
                                    <p class=\"reviewIndexDescription\">";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "deck", array(), "array"), "html", null, true);
            echo "</p>
                                    <span class=\"tag tag-default\"><i class=\"glyphicon glyphicon-calendar\"></i>";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "publish_date", array(), "array"), "html", null, true);
            echo "</span>
                                    <span class=\"tag tag-default\"><i class=\"fa fa-gamepad fa-lg \"></i>";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "platforms", array()), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "            </div>
        </div>
    </div>
</div>
</div>
<!-- /.container -->";
    }

    public function getTemplateName()
    {
        return "home/home_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 242,  478 => 236,  474 => 235,  470 => 234,  465 => 231,  458 => 229,  454 => 228,  443 => 224,  438 => 221,  434 => 220,  430 => 218,  418 => 212,  414 => 211,  410 => 210,  405 => 207,  398 => 205,  394 => 204,  383 => 200,  378 => 197,  374 => 196,  370 => 194,  358 => 188,  354 => 187,  350 => 186,  345 => 183,  338 => 181,  334 => 180,  323 => 176,  318 => 173,  314 => 172,  310 => 170,  298 => 164,  294 => 163,  290 => 162,  285 => 159,  278 => 157,  274 => 156,  263 => 152,  258 => 149,  254 => 148,  241 => 137,  229 => 133,  225 => 132,  219 => 131,  216 => 130,  212 => 129,  205 => 124,  191 => 118,  184 => 114,  180 => 113,  176 => 111,  172 => 110,  168 => 108,  154 => 102,  147 => 98,  143 => 97,  139 => 95,  135 => 94,  131 => 92,  117 => 86,  110 => 82,  106 => 81,  102 => 79,  98 => 78,  19 => 1,);
    }
}
/* <!-- Page Content -->*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="row carousel-holder ">*/
/*                 <div class="col-md-12 ">*/
/*                     <div id="carousel-example-generic" class="carousel slide effect2" data-ride="carousel">*/
/*                         <ol class="carousel-indicators">*/
/*                             <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*                             <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*                             <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*                             <li data-target="#carousel-example-generic" data-slide-to="3"></li>*/
/*                             <li data-target="#carousel-example-generic" data-slide-to="4"></li>*/
/*                             <li data-target="#carousel-example-generic" data-slide-to="5"></li>*/
/*                             <li data-target="#carousel-example-generic" data-slide-to="6"></li>*/
/*                             <li data-target="#carousel-example-generic" data-slide-to="7"></li>*/
/*                             <li data-target="#carousel-example-generic" data-slide-to="8"></li>*/
/*                             <li data-target="#carousel-example-generic" data-slide-to="9"></li>*/
/*                             <li data-target="#carousel-example-generic" data-slide-to="10"></li>*/
/* */
/*                         </ol>*/
/*                         <div class="carousel-inner">*/
/*                             <div class="item active">*/
/*                                 <img class="slide-image img-responsive" src="assets/images/battlerite-bb.jpg" alt="">*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img class="slide-image" src="assets/images/gears-of-war-4-bb.jpg" alt="">*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img class="slide-image" src="assets/images/BF1_BB_759x286_lastchance.jpg" alt="">*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img class="slide-image img-responsive" src="assets/images/battlerite-bb.jpg" alt="">*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img class="slide-image" src="assets/images/gears-of-war-4-bb.jpg" alt="">*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img class="slide-image" src="assets/images/BF1_BB_759x286_lastchance.jpg" alt="">*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img class="slide-image img-responsive" src="assets/images/battlerite-bb.jpg" alt="">*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img class="slide-image" src="assets/images/gears-of-war-4-bb.jpg" alt="">*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img class="slide-image" src="assets/images/BF1_BB_759x286_lastchance.jpg" alt="">*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img class="slide-image img-responsive" src="assets/images/battlerite-bb.jpg" alt="">*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img class="slide-image" src="assets/images/gears-of-war-4-bb.jpg" alt="">*/
/*                             </div>*/
/*                             <div class="item">*/
/*                                 <img class="slide-image" src="assets/images/BF1_BB_759x286_lastchance.jpg" alt="">*/
/*                             </div>*/
/*                         </div>*/
/*                         <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">*/
/*                             <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                         </a>*/
/*                         <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">*/
/*                             <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     <div class="col-lg-12">*/
/*         <div class="col-lg-9">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <h2 class="latestVideosHeading">Latest Videos</h2>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 {% for video in videos[0:3] %}*/
/*                     <div class="col-sm-4 col-lg-4 col-md-4">*/
/*                         <div class="thumbnail effect1">*/
/*                             <a href="/video/{{ video['video_id'] }}/" class="videoHoverThumbnail">*/
/*                                 <img src="{{ video['images'][4] }}">*/
/*                             </a>*/
/*                             <div class="caption">*/
/*                                 <p class="videoHeadingCaption">*/
/*                                     <a href="/video/{{ video['video_id'] }}/">{{ video['name'] }}</a>*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 {% for video in videos[3:3] %}*/
/*                     <div class="col-sm-4 col-lg-4 col-md-4">*/
/*                         <div class="thumbnail effect1">*/
/*                             <a href="/video/{{ video['video_id'] }}/" class="videoHoverThumbnail">*/
/*                                 <img src="{{ video['images'][4] }}">*/
/*                             </a>*/
/*                             <div class="caption">*/
/*                                 <p class="videoHeadingCaption">*/
/*                                     <a href="/video/{{ video['video_id'] }}/">{{ video['name'] }}</a>*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 {% for video in videos[6:3] %}*/
/*                     <div class="col-sm-4 col-lg-4 col-md-4">*/
/*                         <div class="thumbnail effect1">*/
/*                             <a href="/video/{{ video['video_id'] }}/" class="videoHoverThumbnail">*/
/*                                 <img src="{{ video['images'][4] }}">*/
/*                             </a>*/
/*                             <div class="caption">*/
/*                                 <p class="videoHeadingCaption">*/
/*                                     <a href="/video/{{ video['video_id'] }}/">{{ video['name'] }}</a>*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-3 platforms">*/
/*             <h2>Popular Platforms</h2>*/
/*             <ul>*/
/*                 {% for platform in popular_platforms %}*/
/*                     <li>*/
/*                         <a href="/platform/{{ platform['platform_id'] }}/{{ platform['name'] }}/"*/
/*                            title="{{ platform['name'] }}">*/
/*                             <img src="{{ platform['image_tiny_url'] }}">{{ platform['name'] }}*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-lg-12">*/
/*         <div class="col-lg-9">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <h2 class="latestVideosHeading">Latest Reviews</h2>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 {% for review in reviews[0:2] %}*/
/*                     <div class="col-sm-6 col-lg-6 col-md-6">*/
/*                         <div class="thumbnail effect1">*/
/*                             <div class="col-lg-12">*/
/*                                 <h4 class="reviewHeadingLink"><a href="/review/{{review['review_id']}}/{{review['game_name']}}"> {{review['game_name']}}</a></h4>*/
/*                                 <div class="ratings">*/
/*                                     <p class="pull-right"></p>*/
/*                                     <p class="customRating">*/
/*                                         {% for rating in review['score'] %}*/
/*                                             <span class="glyphicon glyphicon-star"></span>*/
/*                                         {% endfor %}*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <div class="caption">*/
/*                                     <p class="reviewIndexDescription">{{ review['deck'] }}</p>*/
/*                                     <span class="tag tag-default"><i class="glyphicon glyphicon-calendar"></i>{{ review['publish_date'] }}</span>*/
/*                                     <span class="tag tag-default"><i class="fa fa-gamepad fa-lg "></i>{{ review.platforms }}</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 {% for review in reviews[2:2] %}*/
/*                     <div class="col-sm-6 col-lg-6 col-md-6">*/
/*                         <div class="thumbnail effect1">*/
/*                             <div class="col-lg-12">*/
/*                                 <h4  class="reviewHeadingLink"><a href="/review/{{review['review_id']}}/{{review['game_name']}}"> {{review['game_name']}}</a></h4>*/
/*                                 <div class="ratings ">*/
/*                                     <p class="pull-right"></p>*/
/*                                     <p class="customRating">*/
/*                                         {% for rating in review['score'] %}*/
/*                                             <span class="glyphicon glyphicon-star"></span>*/
/*                                         {% endfor %}*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <div class="caption">*/
/*                                     <p class="reviewIndexDescription">{{ review['deck'] }}</p>*/
/*                                     <span class="tag tag-default"><i class="glyphicon glyphicon-calendar"></i>{{ review['publish_date'] }}</span>*/
/*                                     <span class="tag tag-default"><i class="fa fa-gamepad fa-lg "></i>{{ review.platforms }}</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 {% for review in reviews[4:2] %}*/
/*                     <div class="col-sm-6 col-lg-6 col-md-6">*/
/*                         <div class="thumbnail effect1">*/
/*                             <div class="col-lg-12">*/
/*                                 <h4  class="reviewHeadingLink"><a href="/review/{{review['review_id']}}/{{review['game_name']}}"> {{review['game_name']}}</a></h4>*/
/*                                 <div class="ratings ">*/
/*                                     <p class="pull-right"></p>*/
/*                                     <p class="customRating">*/
/*                                         {% for rating in review['score'] %}*/
/*                                             <span class="glyphicon glyphicon-star"></span>*/
/*                                         {% endfor %}*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <div class="caption">*/
/*                                     <p class="reviewIndexDescription">{{ review['deck'] }}</p>*/
/*                                     <span class="tag tag-default"><i class="glyphicon glyphicon-calendar"></i>{{ review['publish_date'] }}</span>*/
/*                                     <span class="tag tag-default"><i class="fa fa-gamepad fa-lg "></i>{{ review.platforms }}</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 {% for review in reviews[6:2] %}*/
/*                     <div class="col-sm-6 col-lg-6 col-md-6">*/
/*                         <div class="thumbnail effect1">*/
/*                             <div class="col-lg-12">*/
/*                                 <h4 class="reviewHeadingLink"><a href="/review/{{review['review_id']}}/{{review['game_name']}}"> {{review['game_name']}}</a></h4>*/
/*                                 <div class="ratings ">*/
/*                                     <p class="pull-right"></p>*/
/*                                     <p class="customRating">*/
/*                                         {% for rating in review['score'] %}*/
/*                                             <span class="glyphicon glyphicon-star"></span>*/
/*                                         {% endfor %}*/
/*                                     </p>*/
/*                                 </div>*/
/*                                 <div class="caption">*/
/*                                     <p class="reviewIndexDescription">{{ review['deck'] }}</p>*/
/*                                     <span class="tag tag-default"><i class="glyphicon glyphicon-calendar"></i>{{ review['publish_date'] }}</span>*/
/*                                     <span class="tag tag-default"><i class="fa fa-gamepad fa-lg "></i>{{ review.platforms }}</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* <!-- /.container -->*/
