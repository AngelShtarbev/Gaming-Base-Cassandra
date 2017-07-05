<?php

/* reviews/review_content_score_desc.twig */
class __TwigTemplate_8279d679f2cfb1dec4e715dd982d06504f0c59e4c3a40dd517b839917c41ae19 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "reviews/review_content_score_desc.twig", 1)->display($context);
        // line 2
        if (twig_test_empty((isset($context["message"]) ? $context["message"] : null))) {
            // line 3
            echo "
    ";
            // line 4
            if (((isset($context["previous"]) ? $context["previous"] : null) > 0)) {
                // line 5
                echo "        <ul class=\"pagination\">
            <li><a href=\"/reviews/score/desc/";
                // line 6
                echo twig_escape_filter($this->env, (isset($context["previous"]) ? $context["previous"] : null), "html", null, true);
                echo "\">Previous</a></li>
        </ul>
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            if (twig_test_empty((isset($context["next"]) ? $context["next"] : null))) {
                // line 11
                echo "
    ";
            } elseif ( !twig_test_empty(            // line 12
(isset($context["next"]) ? $context["next"] : null))) {
                // line 13
                echo "        <ul class=\"pagination\">
            <li><a href=\"/reviews/score/desc/";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["next"]) ? $context["next"] : null), "html", null, true);
                echo "\">Next</a></li>
        </ul>

        <div class=\"container\">
            <div class=\"col-lg-12\">
                <div class=\"col-lg-12\">
                    <div class=\"all_games_heading\">
                        <h3>All Reviews Available</h3>
                    </div>
                    <div class=\"dropdown\">
                        <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Sort Reviews By
                            <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu custom_drop_down\">
                            <li><a href=\"/reviews/\">Newest First</a></li>
                            <li><a href=\"/reviews/asc/\">Oldest First</a></li>
                            <li><a href=\"/reviews/score/desc/\">Score (High-Low)</a></li>
                            <li><a href=\"/reviews/score/asc/\">Score (Low-High)</a></li>
                        </ul>
                    </div>
                    <div class=\"games_background\">
                        ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 35
                    echo "                            <div class=\"col-lg-8\">
                                <a href=\"/review/";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "review_id", array(), "array"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
                    echo "\"><h3>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
                    echo "</h3></a>
                                ";
                    // line 37
                    if (twig_test_empty($this->getAttribute($context["review"], "description", array(), "array"))) {
                        // line 38
                        echo "                                    <p>There is no available description</p>
                                ";
                    } elseif ($this->getAttribute(                    // line 39
$context["review"], "description", array(), "array")) {
                        // line 40
                        echo "                                    <p class=\"description\">";
                        echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["review"], "description", array(), "array")), "html", null, true);
                        echo "</p>
                                ";
                    }
                    // line 42
                    echo "                                <p>Date added:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "publish_date", array(), "array"), "html", null, true);
                    echo "</p>
                                ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["review"], "platforms", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["platforms"]) {
                        // line 44
                        echo "                                    <span class=\"badge\">";
                        echo twig_escape_filter($this->env, $context["platforms"], "html", null, true);
                        echo "</span>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platforms'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "                            </div>
                            <div class=\"clearfix visible-lg\"></div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                    </div>
                </div>
            </div>
        </div>
    ";
            }
        } elseif ( !twig_test_empty(        // line 54
(isset($context["message"]) ? $context["message"] : null))) {
            // line 55
            echo "    <h4 align=\"center\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</h4>
";
        }
        // line 57
        echo "<script src=\"/assets/js/readmore.js\"></script>
<script src=\"/assets/js/readmore.min.js\"></script>
<script>
    \$('.description').readmore();
</script>
";
        // line 62
        $this->loadTemplate("common/footer.twig", "reviews/review_content_score_desc.twig", 62)->display($context);
    }

    public function getTemplateName()
    {
        return "reviews/review_content_score_desc.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 62,  142 => 57,  136 => 55,  134 => 54,  127 => 49,  119 => 46,  110 => 44,  106 => 43,  101 => 42,  95 => 40,  93 => 39,  90 => 38,  88 => 37,  80 => 36,  77 => 35,  73 => 34,  50 => 14,  47 => 13,  45 => 12,  42 => 11,  40 => 10,  37 => 9,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'common/header.twig' %}*/
/* {% if message is empty %}*/
/* */
/*     {% if previous > 0 %}*/
/*         <ul class="pagination">*/
/*             <li><a href="/reviews/score/desc/{{ previous }}">Previous</a></li>*/
/*         </ul>*/
/*     {% endif %}*/
/* */
/*     {% if next is empty  %}*/
/* */
/*     {% elseif next is not empty %}*/
/*         <ul class="pagination">*/
/*             <li><a href="/reviews/score/desc/{{ next }}">Next</a></li>*/
/*         </ul>*/
/* */
/*         <div class="container">*/
/*             <div class="col-lg-12">*/
/*                 <div class="col-lg-12">*/
/*                     <div class="all_games_heading">*/
/*                         <h3>All Reviews Available</h3>*/
/*                     </div>*/
/*                     <div class="dropdown">*/
/*                         <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sort Reviews By*/
/*                             <span class="caret"></span></button>*/
/*                         <ul class="dropdown-menu custom_drop_down">*/
/*                             <li><a href="/reviews/">Newest First</a></li>*/
/*                             <li><a href="/reviews/asc/">Oldest First</a></li>*/
/*                             <li><a href="/reviews/score/desc/">Score (High-Low)</a></li>*/
/*                             <li><a href="/reviews/score/asc/">Score (Low-High)</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="games_background">*/
/*                         {% for review in reviews %}*/
/*                             <div class="col-lg-8">*/
/*                                 <a href="/review/{{review['review_id']}}/{{review['game_name']}}"><h3>{{review['game_name']}}</h3></a>*/
/*                                 {% if review['description'] is empty %}*/
/*                                     <p>There is no available description</p>*/
/*                                 {% elseif review['description'] %}*/
/*                                     <p class="description">{{review['description']|striptags}}</p>*/
/*                                 {% endif %}*/
/*                                 <p>Date added:{{review['publish_date']}}</p>*/
/*                                 {% for platforms in review.platforms %}*/
/*                                     <span class="badge">{{platforms}}</span>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                             <div class="clearfix visible-lg"></div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% elseif message is not empty %}*/
/*     <h4 align="center">{{ message }}</h4>*/
/* {% endif %}*/
/* <script src="/assets/js/readmore.js"></script>*/
/* <script src="/assets/js/readmore.min.js"></script>*/
/* <script>*/
/*     $('.description').readmore();*/
/* </script>*/
/* {% include 'common/footer.twig' %}*/
