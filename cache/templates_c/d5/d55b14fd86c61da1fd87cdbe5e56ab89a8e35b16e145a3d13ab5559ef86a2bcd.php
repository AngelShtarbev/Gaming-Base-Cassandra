<?php

/* games/game_content.twig */
class __TwigTemplate_3819f053521966f12b0e8350d4322b0c8705ecff79061e657656afcfd0bdd3d3 extends Twig_Template
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
        if (twig_test_empty($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"))) {
            // line 2
            echo "<h4 align=\"center\">Page not found</h4>
";
        } elseif ($this->getAttribute(        // line 3
(isset($context["game"]) ? $context["game"] : null), 0, array(), "array")) {
            // line 4
            echo "<!-- Page Content -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 gameHeadingPanel\" style=\"background: url(";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["game_additional"]) ? $context["game_additional"] : null), 0, array(), "array"), "images", array(), "array"), 4, array(), "array"), "html", null, true);
            echo "); background-repeat: no-repeat;
    -webkit-background-size:cover;
    background-size:cover;
    opacity: 0.9;\">
            <div class=\"col-lg-9\">
                <div class=\"row\">
                    <div class=\"col-lg-12 \">
                        <h2>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "name", array(), "array"), "html", null, true);
            echo "</h2>
                        <hr class=\"customDivider\">
                        <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "deck", array(), "array"), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
            </div>
        </div>
        <div class=\"col-lg-12\">
            <div class=\"col-lg-9\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                    </div>
                </div>
                <hr class=\"customDivider\">
                <div class=\"row\">
                    <div class=\"col-lg-12 \">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">Summary</a></li>
                            <li><a data-toggle=\"tab\" href=\"#menu1\">Images</a></li>
                            <li><a data-toggle=\"tab\" href=\"#menu2\">Comments</a></li>
                            <li><a data-toggle=\"tab\" href=\"#menu3\">Videos</a></li>
                            <li><a data-toggle=\"tab\" href=\"#menu5\">Reviews</a></li>
                            <li><a data-toggle=\"tab\" href=\"#menu4\">Simmilar Games</a></li>
                        </ul>
                        <div class=\"tab-content\">
                            ";
            // line 41
            if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "description", array(), "array"))) {
                // line 42
                echo "                            <div id=\"home\" class=\"tab-pane fade in active\">
                                <h3>Summary</h3>
                                <hr class=\"customDivider\">
                            </div>
                            ";
            } elseif ($this->getAttribute($this->getAttribute(            // line 46
(isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "description", array(), "array")) {
                // line 47
                echo "                            <div id=\"home\" class=\"tab-pane fade in active\" style=\"background-color:#b5bbce;\">
                                <h3>Summary</h3>
                                <hr class=\"customDivider\">
                                <p>";
                // line 50
                echo $this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "description", array(), "array");
                echo "</p>
                            </div>
                            ";
            }
            // line 53
            echo "                            <div id=\"menu1\" class=\"tab-pane fade\">
                                <h3>Images</h3>
                                <hr class=\"customDivider\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 pictureClass\">
                                            ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "images_super_url", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["small"]) {
                // line 60
                echo "                                             ";
                if (twig_test_empty($context["small"])) {
                    // line 61
                    echo "                                             ";
                } elseif ( !twig_test_empty($context["small"])) {
                    // line 62
                    echo "                                            <div class=\"col-lg-3 \">
                                                <a class=\"fancybox\" rel=\"gallery1\"  href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $context["small"], "html", null, true);
                    echo "\" title=\"\">
                                                    <img width=\"190\" height=\"153\" src=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $context["small"], "html", null, true);
                    echo "\" alt=\"\" />
                                                </a>
                                            </div>
                                              ";
                }
                // line 68
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['small'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"menu2\" class=\"tab-pane fade\">
                                <h3>Comments</h3>
                                <hr class=\"customDivider\">
                                <p>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "comments", array(), "array"), "html", null, true);
            echo "</p>
                            </div>
                            <div id=\"menu3\" class=\"tab-pane fade\">
                                <h3>Videos</h3>
                                <hr class=\"customDivider\">
                                <ul class=\"gameTabVideosList\">
                                    ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "videos", array(), "array"));
            foreach ($context['_seq'] as $context["id"] => $context["video"]) {
                // line 83
                echo "                                     ";
                if (twig_test_empty($context["video"])) {
                    // line 84
                    echo "                                      ";
                } elseif ( !twig_test_empty($context["video"])) {
                    // line 85
                    echo "                                <li><a href=\"/video/";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "/\"><i class=\"glyphicon glyphicon-arrow-right\"></i><span class=\"spanTab\">";
                    echo twig_escape_filter($this->env, $context["video"], "html", null, true);
                    echo "</span></a></li>
                                      ";
                }
                // line 87
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                                </ul>
                            </div>
                            <div id=\"menu5\" class=\"tab-pane fade\">
                                <h3>Reviews</h3>
                                <hr class=\"customDivider\">
                                <ul class=\"gameTabVideosList\">
                                    ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "reviews", array(), "array"));
            foreach ($context['_seq'] as $context["id"] => $context["review"]) {
                // line 95
                echo "                                        ";
                if (twig_test_empty($context["review"])) {
                    // line 96
                    echo "                                        ";
                } elseif ( !twig_test_empty($context["review"])) {
                    // line 97
                    echo "                                            <li><a href=\"/review/";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $context["review"], "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-arrow-right\"></i><span class=\"spanTab\">";
                    echo twig_escape_filter($this->env, $context["review"], "html", null, true);
                    echo "</span></a></li>
                                        ";
                }
                // line 99
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                                </ul>
                            </div>
                            <div id=\"menu4\" class=\"tab-pane fade\">
                                <h3>Simmilar Games</h3>
                                <hr class=\"customDivider\">
                                <ul class=\"gameTabVideosList\">
                                    ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "similar_games", array(), "array"));
            foreach ($context['_seq'] as $context["id"] => $context["similar_game_name"]) {
                // line 107
                echo "                                     ";
                if (twig_test_empty($context["similar_game_name"])) {
                    // line 108
                    echo "                                     ";
                } elseif ( !twig_test_empty($context["similar_game_name"])) {
                    // line 109
                    echo "                                     <li><a href=\"/game/similar/";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-play\"></i><span class=\"spanTab\">";
                    echo twig_escape_filter($this->env, $context["similar_game_name"], "html", null, true);
                    echo "</span></a></li>
                                     ";
                }
                // line 111
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['similar_game_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 gameDetailsPanel\">
                <h2>Game Details</h2>
                <div class=\"col-lg-12\">
                    <img class=\"img-responsive\"
                     src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["game_additional"]) ? $context["game_additional"] : null), 0, array(), "array"), "images", array(), "array"), 3, array(), "array"), "html", null, true);
            echo "\" alt=\"\">
                </div>
                <div class=\"col-lg-12\">
                    <ul class=\"gameDetailsPanelList\">
                        <li class=\"gameDetailsPanelListHeadings\">Name</li>
                        <li class=\"gameDetailsPanelListDescription\">";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "name", array(), "array"), "html", null, true);
            echo "</li>
                        <li class=\"gameDetailsPanelListHeadings\">Date Added</li>
                        <li class=\"gameDetailsPanelListDescription\">";
            // line 129
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "date_added", array(), "array"), "m/d/Y"), "html", null, true);
            echo "</li>
                        <li class=\"gameDetailsPanelListHeadings\">Platforms</li>
                        ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "platforms_name", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                // line 132
                echo "                        <li class=\"gameDetailsPanelListDescription\">";
                echo twig_escape_filter($this->env, $context["platform"], "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                    </ul>
                </div>
            </div>
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
    }

    public function getTemplateName()
    {
        return "games/game_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 134,  275 => 132,  271 => 131,  266 => 129,  261 => 127,  253 => 122,  241 => 112,  235 => 111,  227 => 109,  224 => 108,  221 => 107,  217 => 106,  209 => 100,  203 => 99,  193 => 97,  190 => 96,  187 => 95,  183 => 94,  175 => 88,  169 => 87,  161 => 85,  158 => 84,  155 => 83,  151 => 82,  142 => 76,  133 => 69,  127 => 68,  120 => 64,  116 => 63,  113 => 62,  110 => 61,  107 => 60,  103 => 59,  95 => 53,  89 => 50,  84 => 47,  82 => 46,  76 => 42,  74 => 41,  46 => 16,  41 => 14,  31 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if game[0] is empty %}*/
/* <h4 align="center">Page not found</h4>*/
/* {% elseif game[0] %}*/
/* <!-- Page Content -->*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-lg-12 gameHeadingPanel" style="background: url({{game_additional[0]['images'][4]}}); background-repeat: no-repeat;*/
/*     -webkit-background-size:cover;*/
/*     background-size:cover;*/
/*     opacity: 0.9;">*/
/*             <div class="col-lg-9">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12 ">*/
/*                         <h2>{{game[0]['name']}}</h2>*/
/*                         <hr class="customDivider">*/
/*                         <p>{{game[0]['deck']}}</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3">*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-12">*/
/*             <div class="col-lg-9">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                     </div>*/
/*                 </div>*/
/*                 <hr class="customDivider">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12 ">*/
/*                         <ul class="nav nav-tabs">*/
/*                             <li class="active"><a data-toggle="tab" href="#home">Summary</a></li>*/
/*                             <li><a data-toggle="tab" href="#menu1">Images</a></li>*/
/*                             <li><a data-toggle="tab" href="#menu2">Comments</a></li>*/
/*                             <li><a data-toggle="tab" href="#menu3">Videos</a></li>*/
/*                             <li><a data-toggle="tab" href="#menu5">Reviews</a></li>*/
/*                             <li><a data-toggle="tab" href="#menu4">Simmilar Games</a></li>*/
/*                         </ul>*/
/*                         <div class="tab-content">*/
/*                             {% if game[0]['description'] is empty %}*/
/*                             <div id="home" class="tab-pane fade in active">*/
/*                                 <h3>Summary</h3>*/
/*                                 <hr class="customDivider">*/
/*                             </div>*/
/*                             {% elseif game[0]['description'] %}*/
/*                             <div id="home" class="tab-pane fade in active" style="background-color:#b5bbce;">*/
/*                                 <h3>Summary</h3>*/
/*                                 <hr class="customDivider">*/
/*                                 <p>{{game[0]['description']|raw}}</p>*/
/*                             </div>*/
/*                             {% endif %}*/
/*                             <div id="menu1" class="tab-pane fade">*/
/*                                 <h3>Images</h3>*/
/*                                 <hr class="customDivider">*/
/*                                 <div class="col-lg-12">*/
/*                                     <div class="row">*/
/*                                         <div class="col-lg-12 pictureClass">*/
/*                                             {% for small in game[0]['images_super_url'] %}*/
/*                                              {% if small is empty %}*/
/*                                              {% elseif small is not empty %}*/
/*                                             <div class="col-lg-3 ">*/
/*                                                 <a class="fancybox" rel="gallery1"  href="{{small}}" title="">*/
/*                                                     <img width="190" height="153" src="{{small}}" alt="" />*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                               {% endif %}*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div id="menu2" class="tab-pane fade">*/
/*                                 <h3>Comments</h3>*/
/*                                 <hr class="customDivider">*/
/*                                 <p>{{game[0]['comments']}}</p>*/
/*                             </div>*/
/*                             <div id="menu3" class="tab-pane fade">*/
/*                                 <h3>Videos</h3>*/
/*                                 <hr class="customDivider">*/
/*                                 <ul class="gameTabVideosList">*/
/*                                     {% for id, video in game[0]['videos'] %}*/
/*                                      {% if video is empty %}*/
/*                                       {% elseif video is not empty %}*/
/*                                 <li><a href="/video/{{id}}/"><i class="glyphicon glyphicon-arrow-right"></i><span class="spanTab">{{video}}</span></a></li>*/
/*                                       {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div id="menu5" class="tab-pane fade">*/
/*                                 <h3>Reviews</h3>*/
/*                                 <hr class="customDivider">*/
/*                                 <ul class="gameTabVideosList">*/
/*                                     {% for id, review in game[0]['reviews'] %}*/
/*                                         {% if review is empty %}*/
/*                                         {% elseif review is not empty %}*/
/*                                             <li><a href="/review/{{id}}/{{review}}"><i class="glyphicon glyphicon-arrow-right"></i><span class="spanTab">{{review}}</span></a></li>*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div id="menu4" class="tab-pane fade">*/
/*                                 <h3>Simmilar Games</h3>*/
/*                                 <hr class="customDivider">*/
/*                                 <ul class="gameTabVideosList">*/
/*                                     {% for id, similar_game_name in game[0]['similar_games'] %}*/
/*                                      {% if similar_game_name is empty %}*/
/*                                      {% elseif similar_game_name is not empty %}*/
/*                                      <li><a href="/game/similar/{{id}}"><i class="glyphicon glyphicon-play"></i><span class="spanTab">{{similar_game_name}}</span></a></li>*/
/*                                      {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3 gameDetailsPanel">*/
/*                 <h2>Game Details</h2>*/
/*                 <div class="col-lg-12">*/
/*                     <img class="img-responsive"*/
/*                      src="{{game_additional[0]['images'][3]}}" alt="">*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <ul class="gameDetailsPanelList">*/
/*                         <li class="gameDetailsPanelListHeadings">Name</li>*/
/*                         <li class="gameDetailsPanelListDescription">{{game[0]['name']}}</li>*/
/*                         <li class="gameDetailsPanelListHeadings">Date Added</li>*/
/*                         <li class="gameDetailsPanelListDescription">{{game[0]['date_added']|date("m/d/Y")}}</li>*/
/*                         <li class="gameDetailsPanelListHeadings">Platforms</li>*/
/*                         {% for platform in game[0]['platforms_name'] %}*/
/*                         <li class="gameDetailsPanelListDescription">{{platform}}</li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
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
/* {% endif %}*/
