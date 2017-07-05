<?php

/* home/home_content.twig */
class __TwigTemplate_cbf7c92fa0d85ec0c136a370ffa3c50f4c78c184b4168c1a6c16918607c86562 extends Twig_Template
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
        echo "
<div class=\"container-fluid carousel_container visible-lg visible-md\">
    <div class=\"container\">
        <div class=\"col-lg-12\">
            <div class=\"col-lg-12\">
                <h3>Featured Games</h3>
            </div>
            <div class=\"col-lg-12\">

                <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\" role=\"listbox\">
                        <div class=\"item active col-lg-12 col-md-12\">z
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["carouselGames"]) ? $context["carouselGames"] : null), 1, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 22
            echo "                                <div class=\"col-lg-3 col-md-3\">
                                        ";
            // line 23
            if (twig_test_empty($this->getAttribute($context["game"], "image_super_url", array(), "array"))) {
                // line 24
                echo "                                            <img class=\"img\" src=\"/images/no-image.png\" alt=\"Chania\" width=\"230\" height=\"300\">
                                        ";
            } elseif ($this->getAttribute(            // line 25
$context["game"], "image_super_url", array(), "array")) {
                // line 26
                echo "                                            <a href=\"/game/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_api_id", array(), "array"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array(), "array"), "html", null, true);
                echo "\">
                                                <img class=\"img\" src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "image_super_url", array(), "array"), "html", null, true);
                echo "\" alt=\"Chania\" width=\"230\" height=\"300\"></a>
                                        ";
            }
            // line 29
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </div>
                        <div class=\"item col-lg-12 col-md-12\">
                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["carouselGames"]) ? $context["carouselGames"] : null), 6, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 35
            echo "                                <div class=\"col-lg-3 col-md-3\">
                                    <a href=\"/game/";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_api_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array(), "array"), "html", null, true);
            echo "\">
                                        <img class=\"img\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "image_super_url", array(), "array"), "html", null, true);
            echo "\" alt=\"Chania\" width=\"230\" height=\"300\"></a>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </div>
                        <div class=\"item col-lg-12 col-md-12\">
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["carouselGames"]) ? $context["carouselGames"] : null), 10, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 43
            echo "                                <div class=\"col-lg-3 col-md-3\">
                                    <a href=\"/game/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_api_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array(), "array"), "html", null, true);
            echo "\">
                                        <img class=\"img\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "image_super_url", array(), "array"), "html", null, true);
            echo "\" alt=\"Chania\" width=\"230\" height=\"300\"></a>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </div>
                        <div class=\"item col-lg-12 col-md-12\">
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["carouselGames"]) ? $context["carouselGames"] : null), 14, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 51
            echo "                                <div class=\"col-lg-3 col-md-3\">
                                    <a href=\"/game/";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_api_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array(), "array"), "html", null, true);
            echo "\">
                                        <img class=\"img\" src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "image_super_url", array(), "array"), "html", null, true);
            echo "\" alt=\"Chania\" width=\"230\" height=\"300\"></a>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </div>
                        <a class=\"left carousel-control \" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                        <a class=\"right carousel-control \" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </div>
                    <!-- Left and right controls -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid visible-sm visible-xs\">
    <h3 class=\"visible-sm visible-xs\">Featured Games</h3>
    <div class=\"row\">
        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["carouselGames"]) ? $context["carouselGames"] : null), 6, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 76
            echo "            <div class=\"container\">
                <div class=\"col-sm-3 col-xs-3\"></div>
                <div class=\"col-sm-6 col-xs-6\">
                    <div class=\"line_game\"></div>
                    <a href=\"/game/";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_api_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array(), "array"), "html", null, true);
            echo "\">
                        <img class=\"img img-responsive img-rounded\" src=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "image_super_url", array(), "array"), "html", null, true);
            echo "\" alt=\"Chania\" width=\"\" height=\"300\"></a>
                </div>
                <div class=\"col-sm-3 col-xs-3\"></div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    </div>
</div>
<div class=\"container\">
    <div class=\"col-lg-12\">
        <div class=\"col-lg-8\">
            <h3>Videos</h3>
            <hr>
            <div class=\"col-lg-12 videos_div\">
               ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 95
            echo "                <div class=\"col-lg-4 video_frame\">
                    <a href=\"/video/";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "video_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array(), "array"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "image_screen_url", array(), "array"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"Cinque Terre\"></a>
                    <h4 class=\"video_name\">";
            // line 97
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["video"], "name", array(), "array"), 0, 30), "html", null, true);
            echo "</h4>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "            </div>
        </div>
        <div class=\"col-lg-4\">
            <h3>Platforms</h3>
            <hr>
                <div class=\"platforms_div\">
                <ul class=\"platform_list\">
                    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["platforms"]) ? $context["platforms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 108
            echo "                    <li>
                        <a href=\"/platform/";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platform_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "image_tiny_url", array(), "array"), "html", null, true);
            echo "\" width=\"24\" height=\"24\" border=\"0\">
                            ";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
            echo "
                        </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                      </ul>
                </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <h3>Reviews</h3>
        <hr>
        <div class=\"col-lg-12 videos_div\">
            ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 123
            echo "                <div class=\"col-lg-4 video_frame\">
                    <a href=\"/review/";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "reviews_ids", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
            echo "</h3></a>
                    <p class=\"description\">Read More</p>
                    <p><span class=\"badge\">";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "publish_date", array(), "array"), "html", null, true);
            echo "</span><span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "platforms", array(), "array"), "html", null, true);
            echo "</span></p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "        </div>
    </div>
    </div>
</div>";
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
        return array (  308 => 129,  297 => 126,  288 => 124,  285 => 123,  281 => 122,  271 => 114,  261 => 110,  251 => 109,  248 => 108,  244 => 107,  235 => 100,  226 => 97,  218 => 96,  215 => 95,  211 => 94,  201 => 86,  190 => 81,  184 => 80,  178 => 76,  174 => 75,  153 => 56,  144 => 53,  138 => 52,  135 => 51,  131 => 50,  127 => 48,  118 => 45,  112 => 44,  109 => 43,  105 => 42,  101 => 40,  92 => 37,  86 => 36,  83 => 35,  79 => 34,  75 => 32,  67 => 29,  62 => 27,  55 => 26,  53 => 25,  50 => 24,  48 => 23,  45 => 22,  41 => 21,  19 => 1,);
    }
}
/* */
/* <div class="container-fluid carousel_container visible-lg visible-md">*/
/*     <div class="container">*/
/*         <div class="col-lg-12">*/
/*             <div class="col-lg-12">*/
/*                 <h3>Featured Games</h3>*/
/*             </div>*/
/*             <div class="col-lg-12">*/
/* */
/*                 <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*                     <!-- Indicators -->*/
/*                     <ol class="carousel-indicators">*/
/*                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*                         <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*                         <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*                         <li data-target="#myCarousel" data-slide-to="3"></li>*/
/*                     </ol>*/
/*                     <!-- Wrapper for slides -->*/
/*                     <div class="carousel-inner" role="listbox">*/
/*                         <div class="item active col-lg-12 col-md-12">z*/
/*                             {% for game in carouselGames|slice(1,4) %}*/
/*                                 <div class="col-lg-3 col-md-3">*/
/*                                         {% if game['image_super_url'] is empty %}*/
/*                                             <img class="img" src="/images/no-image.png" alt="Chania" width="230" height="300">*/
/*                                         {% elseif game['image_super_url'] %}*/
/*                                             <a href="/game/{{game['game_api_id']}}/{{game['name']}}">*/
/*                                                 <img class="img" src="{{ game['image_super_url'] }}" alt="Chania" width="230" height="300"></a>*/
/*                                         {% endif %}*/
/* */
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                         <div class="item col-lg-12 col-md-12">*/
/*                             {% for game in carouselGames|slice(6,4) %}*/
/*                                 <div class="col-lg-3 col-md-3">*/
/*                                     <a href="/game/{{game['game_api_id']}}/{{game['name']}}">*/
/*                                         <img class="img" src="{{ game['image_super_url'] }}" alt="Chania" width="230" height="300"></a>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                         <div class="item col-lg-12 col-md-12">*/
/*                             {% for game in carouselGames|slice(10,4) %}*/
/*                                 <div class="col-lg-3 col-md-3">*/
/*                                     <a href="/game/{{game['game_api_id']}}/{{game['name']}}">*/
/*                                         <img class="img" src="{{ game['image_super_url'] }}" alt="Chania" width="230" height="300"></a>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                         <div class="item col-lg-12 col-md-12">*/
/*                             {% for game in carouselGames|slice(14,4) %}*/
/*                                 <div class="col-lg-3 col-md-3">*/
/*                                     <a href="/game/{{game['game_api_id']}}/{{game['name']}}">*/
/*                                         <img class="img" src="{{ game['image_super_url'] }}" alt="Chania" width="230" height="300"></a>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                         <a class="left carousel-control " href="#myCarousel" role="button" data-slide="prev">*/
/*                             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*                             <span class="sr-only">Previous</span>*/
/*                         </a>*/
/*                         <a class="right carousel-control " href="#myCarousel" role="button" data-slide="next">*/
/*                             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*                             <span class="sr-only">Next</span>*/
/*                         </a>*/
/*                     </div>*/
/*                     <!-- Left and right controls -->*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="container-fluid visible-sm visible-xs">*/
/*     <h3 class="visible-sm visible-xs">Featured Games</h3>*/
/*     <div class="row">*/
/*         {% for game in carouselGames|slice(6,4) %}*/
/*             <div class="container">*/
/*                 <div class="col-sm-3 col-xs-3"></div>*/
/*                 <div class="col-sm-6 col-xs-6">*/
/*                     <div class="line_game"></div>*/
/*                     <a href="/game/{{game['game_api_id']}}/{{game['name']}}">*/
/*                         <img class="img img-responsive img-rounded" src="{{ game['image_super_url'] }}" alt="Chania" width="" height="300"></a>*/
/*                 </div>*/
/*                 <div class="col-sm-3 col-xs-3"></div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* <div class="container">*/
/*     <div class="col-lg-12">*/
/*         <div class="col-lg-8">*/
/*             <h3>Videos</h3>*/
/*             <hr>*/
/*             <div class="col-lg-12 videos_div">*/
/*                {% for video in videos %}*/
/*                 <div class="col-lg-4 video_frame">*/
/*                     <a href="/video/{{ video['video_id']}}/{{video['name']}}"><img src="{{ video['image_screen_url'] }}" class="img-responsive" alt="Cinque Terre"></a>*/
/*                     <h4 class="video_name">{{ video['name']|slice(0, 30) }}</h4>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-4">*/
/*             <h3>Platforms</h3>*/
/*             <hr>*/
/*                 <div class="platforms_div">*/
/*                 <ul class="platform_list">*/
/*                     {% for platform in platforms %}*/
/*                     <li>*/
/*                         <a href="/platform/{{platform['platform_id']}}/{{platform['name']}}" title="{{platform['name']}}"><img src="{{platform['image_tiny_url']}}" width="24" height="24" border="0">*/
/*                             {{platform['name']}}*/
/*                         </a>*/
/*                     </li>*/
/*                     {% endfor %}*/
/*                       </ul>*/
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-lg-12">*/
/*         <h3>Reviews</h3>*/
/*         <hr>*/
/*         <div class="col-lg-12 videos_div">*/
/*             {% for review in reviews %}*/
/*                 <div class="col-lg-4 video_frame">*/
/*                     <a href="/review/{{review['reviews_ids']}}/{{review['game_name']}}"><h3>{{review['game_name']}}</h3></a>*/
/*                     <p class="description">Read More</p>*/
/*                     <p><span class="badge">{{review['publish_date']}}</span><span class="badge">{{review['platforms']}}</span></p>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/*     </div>*/
/* </div>*/
