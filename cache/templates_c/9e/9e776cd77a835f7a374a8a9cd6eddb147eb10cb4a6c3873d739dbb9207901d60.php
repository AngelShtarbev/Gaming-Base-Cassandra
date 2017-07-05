<?php

/* search/search_content.twig */
class __TwigTemplate_4a6302297e21c5167e35a670c191001ae5732e28f9aee45c014992c6bd54e2ef extends Twig_Template
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
    <div class=\"col-lg-12\">
    <div class=\"col-lg-9\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["games"]) ? $context["games"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
                // line 8
                echo "            <div class=\"row\">
                <div class=\"col-lg-12 \">
                    <div class=\"col-lg-3\">
                        ";
                // line 11
                if (twig_test_empty($this->getAttribute($this->getAttribute($context["game"], "images", array(), "array"), 3, array(), "array"))) {
                    // line 12
                    echo "                            <a href=\"/search/game/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_id", array(), "array"), "html", null, true);
                    echo "/\">
                                <img src=\"/assets/images/no-image.png\" width=\"172\" height=\"243\">
                            </a>
                        ";
                } elseif ($this->getAttribute(                // line 15
$context["game"], "images", array(), "array")) {
                    // line 16
                    echo "                            <a href=\"/search/game/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_id", array(), "array"), "html", null, true);
                    echo "/\">
                                <img src=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["game"], "images", array(), "array"), 3, array(), "array"), "html", null, true);
                    echo "\" width=\"172\" height=\"243\" alt=\"\">
                            </a>
                        ";
                }
                // line 20
                echo "                    </div>
                    <div class=\"col-lg-9 gamesRenderList\">
                        <a href=\"/search/game/";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_id", array(), "array"), "html", null, true);
                echo "/\"><h4>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array(), "array"), "html", null, true);
                echo "</h4></a>
                        <i class=\"glyphicon glyphicon-calendar\"></i><span class=\"gamesDate\">";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["game"], "date_added", array(), "array"), "m/d/Y"), "html", null, true);
                echo "</span>
                        <p class=\"gameDescription\">
                            ";
                // line 25
                if (twig_test_empty($this->getAttribute($context["game"], "deck", array(), "array"))) {
                    // line 26
                    echo "                                There is no available description
                            ";
                } elseif ($this->getAttribute(                // line 27
$context["game"], "deck", array(), "array")) {
                    // line 28
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "deck", array(), "array"), "html", null, true);
                    echo "
                            ";
                }
                // line 30
                echo "                        </p>
                        ";
                // line 31
                if (twig_test_empty($this->getAttribute($context["game"], "platforms_name", array(), "array"))) {
                    // line 32
                    echo "                            <p>There are no available platforms</p>
                        ";
                } elseif ($this->getAttribute(                // line 33
$context["game"], "platforms_name", array(), "array")) {
                    // line 34
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["game"], "platforms_name", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                        // line 35
                        echo "                                <span class=\"badge\">";
                        echo twig_escape_filter($this->env, $context["platform"], "html", null, true);
                        echo "</span>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "                        ";
                }
                // line 38
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
            // line 44
            echo "
    </div>
    <div class=\"col-lg-3 platforms\">
        <h2>Popular Platforms</h2>
        <ul>
            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["popular_platforms"]) ? $context["popular_platforms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                // line 50
                echo "                <li>
                    <a href=\"/platform/";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platform_id", array(), "array"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                echo "/\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 52
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
            // line 56
            echo "        </ul>
    </div>

    <div class=\"col-lg-12\">
        <div class=\"col-lg-9 pagination\">
            ";
            // line 61
            if (((isset($context["previous"]) ? $context["previous"] : null) > 0)) {
                // line 62
                echo "                <a href=\"/search/";
                echo twig_escape_filter($this->env, (isset($context["previous"]) ? $context["previous"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["last_uri"]) ? $context["last_uri"] : null), 0, array(), "array"), "html", null, true);
                echo "\">
                    <button class=\"btn btn-medium btn-primary pull-left\">Previous</button>
                </a>
            ";
            }
            // line 66
            echo "            ";
            if (((isset($context["next"]) ? $context["next"] : null) > 0)) {
                // line 67
                echo "                <a href=\"/search/";
                echo twig_escape_filter($this->env, (isset($context["next"]) ? $context["next"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["last_uri"]) ? $context["last_uri"] : null), 0, array(), "array"), "html", null, true);
                echo "\">
                    <button class=\"btn btn-medium btn-primary pull-right\">Next</button>
                </a>
            ";
            }
            // line 71
            echo "        </div>
    </div>

    ";
            // line 74
            if (twig_test_empty((isset($context["next"]) ? $context["next"] : null))) {
                // line 75
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
        } elseif ( !twig_test_empty(        // line 88
(isset($context["message"]) ? $context["message"] : null))) {
            // line 89
            echo "    <h4 align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</h4>
";
        }
    }

    public function getTemplateName()
    {
        return "search/search_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 89,  213 => 88,  198 => 75,  196 => 74,  191 => 71,  181 => 67,  178 => 66,  168 => 62,  166 => 61,  159 => 56,  147 => 52,  139 => 51,  136 => 50,  132 => 49,  125 => 44,  114 => 38,  111 => 37,  102 => 35,  97 => 34,  95 => 33,  92 => 32,  90 => 31,  87 => 30,  81 => 28,  79 => 27,  76 => 26,  74 => 25,  69 => 23,  63 => 22,  59 => 20,  53 => 17,  48 => 16,  46 => 15,  39 => 12,  37 => 11,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% if message is empty %}*/
/*     <!-- Page Content -->*/
/*     <div class="container">*/
/*     <div class="row">*/
/*     <div class="col-lg-12">*/
/*     <div class="col-lg-9">*/
/*         {% for game in games %}*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 ">*/
/*                     <div class="col-lg-3">*/
/*                         {% if game['images'][3] is empty %}*/
/*                             <a href="/search/game/{{game['game_id']}}/">*/
/*                                 <img src="/assets/images/no-image.png" width="172" height="243">*/
/*                             </a>*/
/*                         {% elseif game['images'] %}*/
/*                             <a href="/search/game/{{game['game_id']}}/">*/
/*                                 <img src="{{game['images'][3]}}" width="172" height="243" alt="">*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="col-lg-9 gamesRenderList">*/
/*                         <a href="/search/game/{{game['game_id']}}/"><h4>{{ game['name'] }}</h4></a>*/
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
/*                 <a href="/search/{{previous}}/{{last_uri[0]}}">*/
/*                     <button class="btn btn-medium btn-primary pull-left">Previous</button>*/
/*                 </a>*/
/*             {% endif %}*/
/*             {% if next > 0 %}*/
/*                 <a href="/search/{{next}}/{{last_uri[0]}}">*/
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
/*          </div>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
/* */
/*     {% endif %}*/
/* {% elseif message is not empty %}*/
/*     <h4 align="center">{{ message }}</h4>*/
/* {% endif %}*/
