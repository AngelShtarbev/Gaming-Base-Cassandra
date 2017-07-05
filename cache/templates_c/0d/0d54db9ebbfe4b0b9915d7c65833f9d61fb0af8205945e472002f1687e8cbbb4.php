<?php

/* reviews/reviews_content.twig */
class __TwigTemplate_bc228a9f46d075c34374a9b180f3d1fa5f1d216466708f4aba02c3779acea32c extends Twig_Template
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
<div class=\"container\">
    <div class=\"col-lg-12\">
        <div class=\"col-lg-12\">
            <div class=\"all_games_heading\">
                <h3>All Games Available</h3>
            </div>
            <div class=\"dropdown\">
                <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Sort Games By
                    <span class=\"caret\"></span></button>
                <ul class=\"dropdown-menu custom_drop_down\">
                    <li><a href=\"/reviews\">Newest First</a></li>
                    <li><a href=\"/reviews/asc\">Oldest First</a></li>
                    <li><a href=\"/reviews/score/desc\">Score (High-Low)</a></li>
                    <li><a href=\"/reviews/score/asc\">Score (Low-High)</a></li>
                </ul>
            </div>
            <div class=\"games_background\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 20
            echo "                    <div class=\"col-lg-8   \">
                        <a href=\"/review/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "reviews_ids", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "game_name", array(), "array"), "html", null, true);
            echo "</h3></a>
                        ";
            // line 22
            if (twig_test_empty($this->getAttribute($context["review"], "description", array(), "array"))) {
                // line 23
                echo "                            <p>There is no available description</p>
                        ";
            } elseif ($this->getAttribute(            // line 24
$context["review"], "description", array(), "array")) {
                // line 25
                echo "                            <p class=\"description\">";
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["review"], "description", array(), "array")), "html", null, true);
                echo "</p>
                        ";
            }
            // line 27
            echo "                        <p>Date added:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "publish_date", array(), "array"), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "platforms", array(), "array"), "html", null, true);
            echo "</span></p>
                    </div>
                    <div class=\"clearfix visible-lg\"></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </div>
        </div>
    </div>
</div>


<script src=\"/assets/js/readmore.js\"></script>
<script src=\"/assets/js/readmore.min.js\"></script>
<script>
    \$('.description').readmore();
</script>
";
    }

    public function getTemplateName()
    {
        return "reviews/reviews_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  67 => 27,  61 => 25,  59 => 24,  56 => 23,  54 => 22,  46 => 21,  43 => 20,  39 => 19,  19 => 1,);
    }
}
/* */
/* <div class="container">*/
/*     <div class="col-lg-12">*/
/*         <div class="col-lg-12">*/
/*             <div class="all_games_heading">*/
/*                 <h3>All Games Available</h3>*/
/*             </div>*/
/*             <div class="dropdown">*/
/*                 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sort Games By*/
/*                     <span class="caret"></span></button>*/
/*                 <ul class="dropdown-menu custom_drop_down">*/
/*                     <li><a href="/reviews">Newest First</a></li>*/
/*                     <li><a href="/reviews/asc">Oldest First</a></li>*/
/*                     <li><a href="/reviews/score/desc">Score (High-Low)</a></li>*/
/*                     <li><a href="/reviews/score/asc">Score (Low-High)</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="games_background">*/
/*                 {% for review in reviews %}*/
/*                     <div class="col-lg-8   ">*/
/*                         <a href="/review/{{review['reviews_ids']}}/{{review['game_name']}}"><h3>{{review['game_name']}}</h3></a>*/
/*                         {% if review['description'] is empty %}*/
/*                             <p>There is no available description</p>*/
/*                         {% elseif review['description'] %}*/
/*                             <p class="description">{{review['description']|striptags}}</p>*/
/*                         {% endif %}*/
/*                         <p>Date added:{{review['publish_date']}} <span class="badge">{{review['platforms']}}</span></p>*/
/*                     </div>*/
/*                     <div class="clearfix visible-lg"></div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <script src="/assets/js/readmore.js"></script>*/
/* <script src="/assets/js/readmore.min.js"></script>*/
/* <script>*/
/*     $('.description').readmore();*/
/* </script>*/
/* */
