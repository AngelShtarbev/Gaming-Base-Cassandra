<?php

/* games/games_date_added_asc_content.twig */
class __TwigTemplate_e3980687abac048cc546c84bd4cefa7bb46aa3fcbf2d0b030c88df448160120b extends Twig_Template
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
    <div class=\"col-lg-12\">
    <div class=\"col-lg-9\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h4 class=\"latestVideosHeading\">Latest Games</h4>
                <div class=\"col-lg-12 dropdownMenuContainer\">
                    <div class=\"dropdown\">
                        <button  class=\"buttonDropdownMenuContainer btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Sort Games By
                            <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"/games/\">Newest First</a></li>
                            <li><a href=\"/games/asc/\">Oldest First</a></li>
                            <li><a href=\"/games/reviews/desc/\">Most Reviewed</a></li>
                            <li><a href=\"/games/reviews/asc/\">Least Reviewed</a></li>
                            <li><a href=\"/games/title/asc/\">Title A-Z</a></li>
                            <li><a href=\"/games/title/desc/\">Title Z-A</a></li>
                        </ul>
                    </div>
                </div>
                <hr class=\"customHR\">
            </div>
        </div>
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["games"]) ? $context["games"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
                // line 30
                echo "            <div class=\"row\">
                <div class=\"col-lg-12 \">
                    <div class=\"col-lg-3\">
                        ";
                // line 33
                if (twig_test_empty($this->getAttribute($this->getAttribute($context["game"], "images", array(), "array"), 3, array(), "array"))) {
                    // line 34
                    echo "                            <a href=\"/game/date/asc/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_id", array(), "array"), "html", null, true);
                    echo "\">
                                <img src=\"/assets/images/no-image.png\" width=\"172\" height=\"243\">
                            </a>
                        ";
                } elseif ($this->getAttribute(                // line 37
$context["game"], "images", array(), "array")) {
                    // line 38
                    echo "                            <a href=\"/game/date/asc/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_id", array(), "array"), "html", null, true);
                    echo "\">
                                <img src=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["game"], "images", array(), "array"), 3, array(), "array"), "html", null, true);
                    echo "\" width=\"172\" height=\"243\" alt=\"\">
                            </a>
                        ";
                }
                // line 42
                echo "                    </div>
                    <div class=\"col-lg-9 gamesRenderList\">
                        <a href=\"/game/date/asc/";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_id", array(), "array"), "html", null, true);
                echo "\"><h4>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array(), "array"), "html", null, true);
                echo "</h4></a>
                        <i class=\"glyphicon glyphicon-calendar\"></i><span class=\"gamesDate\">";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["game"], "date_added", array(), "array"), "m/d/Y"), "html", null, true);
                echo "</span>
                        <p class=\"gameDescription\">
                            ";
                // line 47
                if (twig_test_empty($this->getAttribute($context["game"], "deck", array(), "array"))) {
                    // line 48
                    echo "                                There is no available description
                            ";
                } elseif ($this->getAttribute(                // line 49
$context["game"], "deck", array(), "array")) {
                    // line 50
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "deck", array(), "array"), "html", null, true);
                    echo "
                            ";
                }
                // line 52
                echo "                        </p>
                        ";
                // line 53
                if (twig_test_empty($this->getAttribute($context["game"], "platforms_name", array(), "array"))) {
                    // line 54
                    echo "                            <p>There are no available platforms</p>
                        ";
                } elseif ($this->getAttribute(                // line 55
$context["game"], "platforms_name", array(), "array")) {
                    // line 56
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["game"], "platforms_name", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                        // line 57
                        echo "                                <span class=\"badge\">";
                        echo twig_escape_filter($this->env, $context["platform"], "html", null, true);
                        echo "</span>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "                        ";
                }
                // line 60
                echo "                    </div>
                    <hr>
                </div>
            </div>
            <hr class=\"customDivider\">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "
    </div>
    <div class=\"col-lg-3 platforms\">
        <h2>Popular Platforms</h2>
        <ul>
            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["platforms"]) ? $context["platforms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                // line 72
                echo "                <li>
                    <a href=\"/platform/";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platform_id", array(), "array"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                echo "/\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 74
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
            // line 78
            echo "        </ul>
    </div>

    <div class=\"col-lg-12\">
        <div class=\"col-lg-9 pagination\">
            ";
            // line 83
            if (((isset($context["previous"]) ? $context["previous"] : null) > 0)) {
                // line 84
                echo "                <a href=\"/games/asc/";
                echo twig_escape_filter($this->env, (isset($context["previous"]) ? $context["previous"] : null), "html", null, true);
                echo "\">
                    <button class=\"btn btn-medium btn-primary pull-left\">Previous</button>
                </a>
            ";
            }
            // line 88
            echo "            ";
            if (((isset($context["next"]) ? $context["next"] : null) > 0)) {
                // line 89
                echo "                <a href=\"/games/asc/";
                echo twig_escape_filter($this->env, (isset($context["next"]) ? $context["next"] : null), "html", null, true);
                echo "\">
                    <button class=\"btn btn-medium btn-primary pull-right\">Next</button>
                </a>
            ";
            }
            // line 93
            echo "        </div>
    </div>

    ";
            // line 96
            if (twig_test_empty((isset($context["next"]) ? $context["next"] : null))) {
                // line 97
                echo "

        <div class=\"col-lg-12\">
            <div class=\"col-lg-9\">
                <div class=\"row\">
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>

    ";
            }
        } elseif ( !twig_test_empty(        // line 110
(isset($context["message"]) ? $context["message"] : null))) {
            // line 111
            echo "    <h4 align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</h4>
";
        }
    }

    public function getTemplateName()
    {
        return "games/games_date_added_asc_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 111,  231 => 110,  216 => 97,  214 => 96,  209 => 93,  201 => 89,  198 => 88,  190 => 84,  188 => 83,  181 => 78,  169 => 74,  161 => 73,  158 => 72,  154 => 71,  147 => 66,  136 => 60,  133 => 59,  124 => 57,  119 => 56,  117 => 55,  114 => 54,  112 => 53,  109 => 52,  103 => 50,  101 => 49,  98 => 48,  96 => 47,  91 => 45,  85 => 44,  81 => 42,  75 => 39,  70 => 38,  68 => 37,  61 => 34,  59 => 33,  54 => 30,  50 => 29,  21 => 2,  19 => 1,);
    }
}
/* {% if message is empty %}*/
/*     <!-- Page Content -->*/
/*     <div class="container">*/
/*     <div class="row">*/
/*     <div class="container-fluid customRow">*/
/*     </div>*/
/*     <div class="col-lg-12">*/
/*     <div class="col-lg-9">*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h4 class="latestVideosHeading">Latest Games</h4>*/
/*                 <div class="col-lg-12 dropdownMenuContainer">*/
/*                     <div class="dropdown">*/
/*                         <button  class="buttonDropdownMenuContainer btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sort Games By*/
/*                             <span class="caret"></span></button>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="/games/">Newest First</a></li>*/
/*                             <li><a href="/games/asc/">Oldest First</a></li>*/
/*                             <li><a href="/games/reviews/desc/">Most Reviewed</a></li>*/
/*                             <li><a href="/games/reviews/asc/">Least Reviewed</a></li>*/
/*                             <li><a href="/games/title/asc/">Title A-Z</a></li>*/
/*                             <li><a href="/games/title/desc/">Title Z-A</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <hr class="customHR">*/
/*             </div>*/
/*         </div>*/
/*         {% for game in games %}*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 ">*/
/*                     <div class="col-lg-3">*/
/*                         {% if game['images'][3] is empty %}*/
/*                             <a href="/game/date/asc/{{ game['game_id'] }}">*/
/*                                 <img src="/assets/images/no-image.png" width="172" height="243">*/
/*                             </a>*/
/*                         {% elseif game['images'] %}*/
/*                             <a href="/game/date/asc/{{ game['game_id'] }}">*/
/*                                 <img src="{{game['images'][3]}}" width="172" height="243" alt="">*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="col-lg-9 gamesRenderList">*/
/*                         <a href="/game/date/asc/{{ game['game_id'] }}"><h4>{{ game['name'] }}</h4></a>*/
/*                         <i class="glyphicon glyphicon-calendar"></i><span class="gamesDate">{{ game['date_added']|date("m/d/Y") }}</span>*/
/*                         <p class="gameDescription">*/
/*                             {% if game['deck'] is empty %}*/
/*                                 There is no available description*/
/*                             {% elseif game['deck'] %}*/
/*                                 {{ game['deck']}}*/
/*                             {% endif %}*/
/*                         </p>*/
/*                         {% if game['platforms_name'] is empty %}*/
/*                             <p>There are no available platforms</p>*/
/*                         {% elseif game['platforms_name'] %}*/
/*                             {% for platform in game.platforms_name %}*/
/*                                 <span class="badge">{{platform}}</span>*/
/*                             {% endfor %}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <hr>*/
/*                 </div>*/
/*             </div>*/
/*             <hr class="customDivider">*/
/*         {% endfor %}*/
/* */
/*     </div>*/
/*     <div class="col-lg-3 platforms">*/
/*         <h2>Popular Platforms</h2>*/
/*         <ul>*/
/*             {% for platform in platforms %}*/
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
/*                 <a href="/games/asc/{{ previous }}">*/
/*                     <button class="btn btn-medium btn-primary pull-left">Previous</button>*/
/*                 </a>*/
/*             {% endif %}*/
/*             {% if next > 0 %}*/
/*                 <a href="/games/asc/{{ next }}">*/
/*                     <button class="btn btn-medium btn-primary pull-right">Next</button>*/
/*                 </a>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% if next is empty  %}*/
/* */
/* */
/*         <div class="col-lg-12">*/
/*             <div class="col-lg-9">*/
/*                 <div class="row">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/*         </div>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* {% elseif message is not empty %}*/
/*     <h4 align="center">{{ message }}</h4>*/
/* {% endif %}*/
