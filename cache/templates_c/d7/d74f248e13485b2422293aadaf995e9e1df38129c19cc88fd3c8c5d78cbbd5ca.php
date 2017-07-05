<?php

/* platforms/games_platform_id_asc_content.twig */
class __TwigTemplate_35681724cbbd82a6fa7ad353bef1b6e7fb97568d7bfec88864866d3865b6360a extends Twig_Template
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
        if (twig_test_empty((isset($context["platforms"]) ? $context["platforms"] : null))) {
            // line 2
            echo "<h4 align=\"center\">Page not found</h4>
 ";
        } elseif (        // line 3
(isset($context["platforms"]) ? $context["platforms"] : null)) {
            // line 4
            echo "  ";
            if (twig_test_empty((isset($context["message"]) ? $context["message"] : null))) {
                // line 5
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
                            <li><a href=\"/platform/";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "/\">Newest First</a></li>
                            <li><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["uri"]) ? $context["uri"] : null), "html", null, true);
                echo "\">Oldest First</a></li>
                        </ul>
                    </div>
                </div>
                <hr class=\"customHR\">
            </div>
        </div>
        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["platforms"]) ? $context["platforms"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
                    // line 29
                    echo "            <div class=\"row\">
                <div class=\"col-lg-12 \">
                    <div class=\"col-lg-3\">
                        ";
                    // line 32
                    if (twig_test_empty($this->getAttribute($this->getAttribute($context["game"], "images", array(), "array"), 3, array(), "array"))) {
                        // line 33
                        echo "                            <a href=\"/platform/game/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_id", array(), "array"), "html", null, true);
                        echo "/asc/\">
                                <img src=\"/assets/images/no-image.png\" width=\"172\" height=\"243\">
                            </a>
                        ";
                    } elseif ($this->getAttribute(                    // line 36
$context["game"], "images", array(), "array")) {
                        // line 37
                        echo "                            <a href=\"/platform/game/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_id", array(), "array"), "html", null, true);
                        echo "/asc/\">
                                <img src=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["game"], "images", array(), "array"), 3, array(), "array"), "html", null, true);
                        echo "\" width=\"172\" height=\"243\" alt=\"\">
                            </a>
                        ";
                    }
                    // line 41
                    echo "                    </div>
                    <div class=\"col-lg-9 gamesRenderList\">
                        <a href=\"/platform/game/";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_id", array(), "array"), "html", null, true);
                    echo "/asc/\"><h4>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array(), "array"), "html", null, true);
                    echo "</h4></a>
                        <i class=\"glyphicon glyphicon-calendar\"></i><span class=\"gamesDate\">";
                    // line 44
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["game"], "date_added", array(), "array"), "m/d/Y"), "html", null, true);
                    echo "</span>
                        <p class=\"gameDescription\">
                            ";
                    // line 46
                    if (twig_test_empty($this->getAttribute($context["game"], "deck", array(), "array"))) {
                        // line 47
                        echo "                                There is no available description
                            ";
                    } elseif ($this->getAttribute(                    // line 48
$context["game"], "deck", array(), "array")) {
                        // line 49
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "deck", array(), "array"), "html", null, true);
                        echo "
                            ";
                    }
                    // line 51
                    echo "                        </p>
                        ";
                    // line 52
                    if (twig_test_empty($this->getAttribute($context["game"], "platforms_name", array(), "array"))) {
                        // line 53
                        echo "                            <p>There are no available platforms</p>
                        ";
                    } elseif ($this->getAttribute(                    // line 54
$context["game"], "platforms_name", array(), "array")) {
                        // line 55
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["game"], "platforms_name", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                            // line 56
                            echo "                                <span class=\"badge\">";
                            echo twig_escape_filter($this->env, $context["platform"], "html", null, true);
                            echo "</span>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 58
                        echo "                        ";
                    }
                    // line 59
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
                // line 65
                echo "
    </div>
    <div class=\"col-lg-3 platforms\">
        <h2>Popular Platforms</h2>
        <ul>
            ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["popular_platforms"]) ? $context["popular_platforms"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                    // line 71
                    echo "                <li>
                    <a href=\"/platform/";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platform_id", array(), "array"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                    echo "/\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                    echo "\">
                        <img src=\"";
                    // line 73
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
                // line 77
                echo "        </ul>
    </div>

    <div class=\"col-lg-12\">
        <div class=\"col-lg-9 pagination\">
            ";
                // line 82
                if (((isset($context["previous"]) ? $context["previous"] : null) > 0)) {
                    // line 83
                    echo "                <a href=\"/platform/";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "/asc/";
                    echo twig_escape_filter($this->env, (isset($context["previous"]) ? $context["previous"] : null), "html", null, true);
                    echo "\">
                    <button class=\"btn btn-medium btn-primary pull-left\">Previous</button>
                </a>
            ";
                }
                // line 87
                echo "            ";
                if ( !twig_test_empty((isset($context["next"]) ? $context["next"] : null))) {
                    // line 88
                    echo "                <a href=\"/platform/";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "/asc/";
                    echo twig_escape_filter($this->env, (isset($context["next"]) ? $context["next"] : null), "html", null, true);
                    echo "\">
                    <button class=\"btn btn-medium btn-primary pull-right\">Next</button>
                </a>
            ";
                }
                // line 92
                echo "        </div>
    </div>

    ";
                // line 95
                if (twig_test_empty((isset($context["next"]) ? $context["next"] : null))) {
                    // line 96
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
                // line 109
                echo "    ";
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
        return "platforms/games_platform_id_asc_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 111,  254 => 110,  251 => 109,  236 => 96,  234 => 95,  229 => 92,  217 => 88,  214 => 87,  202 => 83,  200 => 82,  193 => 77,  181 => 73,  173 => 72,  170 => 71,  166 => 70,  159 => 65,  148 => 59,  145 => 58,  136 => 56,  131 => 55,  129 => 54,  126 => 53,  124 => 52,  121 => 51,  115 => 49,  113 => 48,  110 => 47,  108 => 46,  103 => 44,  97 => 43,  93 => 41,  87 => 38,  82 => 37,  80 => 36,  73 => 33,  71 => 32,  66 => 29,  62 => 28,  52 => 21,  46 => 20,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if platforms is empty %}*/
/* <h4 align="center">Page not found</h4>*/
/*  {% elseif platforms %}*/
/*   {% if message is empty %}*/
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
/*                             <li><a href="/platform/{{id}}/{{name}}/">Newest First</a></li>*/
/*                             <li><a href="{{uri}}">Oldest First</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <hr class="customHR">*/
/*             </div>*/
/*         </div>*/
/*         {% for game in platforms %}*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 ">*/
/*                     <div class="col-lg-3">*/
/*                         {% if game['images'][3] is empty %}*/
/*                             <a href="/platform/game/{{ game['game_id']}}/asc/">*/
/*                                 <img src="/assets/images/no-image.png" width="172" height="243">*/
/*                             </a>*/
/*                         {% elseif game['images'] %}*/
/*                             <a href="/platform/game/{{ game['game_id']}}/asc/">*/
/*                                 <img src="{{game['images'][3]}}" width="172" height="243" alt="">*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="col-lg-9 gamesRenderList">*/
/*                         <a href="/platform/game/{{ game['game_id']}}/asc/"><h4>{{ game['name'] }}</h4></a>*/
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
/*                 <a href="/platform/{{id}}/{{name}}/asc/{{previous}}">*/
/*                     <button class="btn btn-medium btn-primary pull-left">Previous</button>*/
/*                 </a>*/
/*             {% endif %}*/
/*             {% if next is not empty %}*/
/*                 <a href="/platform/{{id}}/{{name}}/asc/{{next}}">*/
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
/* */
/*             </div>*/
/*         </div>*/
/*         </div>*/
/*         </div>*/
/*         </div>*/
/*       {% endif %}*/
/*     {% endif %}*/
/* {% elseif message is not empty %}*/
/*     <h4 align="center">{{ message }}</h4>*/
/* {% endif %}*/
