<?php

/* games/games.twig */
class __TwigTemplate_24bbcb4fb5d9a036ebda5ad510ce8071b1be63ef2cad73e7fe252a007c1a9761 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "games/games.twig", 1)->display($context);
        // line 2
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
                    <li><a href=\"/games\">Newest First</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"/games/asc\">Oldest First</a></li>
                    <li><a href=\"/games/reviews/desc\">Most Reviewed</a></li>
                    <li><a href=\"/games/reviews/asc\">Least Reviewed</a></li>
                    <li><a href=\"/games/title/asc\">Title A-Z</a></li>
                    <li><a href=\"/games/title/desc\">Title Z-A</a></li>
                </ul>
            </div>
            <div class=\"games_background\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["games"]) ? $context["games"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 24
            echo "                    <hr>
                    <div class=\"col-lg-4 games_content\">
                        ";
            // line 26
            if (twig_test_empty($this->getAttribute($this->getAttribute($context["game"], "images", array(), "array"), 4, array(), "array"))) {
                // line 27
                echo "                            <img class=\"img img-responsive images_games\" src=\"/images/no-image.png\" alt=\"\" width=\"315\" height=\"190\">
                        ";
            } elseif ($this->getAttribute(            // line 28
$context["game"], "images", array(), "array")) {
                // line 29
                echo "                            <img class=\"img img-responsive images_games\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["game"], "images", array(), "array"), 4, array(), "array"), "html", null, true);
                echo "\" alt=\"\" width=\"315\" height=\"190\">
                        ";
            }
            // line 31
            echo "                    </div>
                    <div class=\"col-lg-8   \">
                        <a href=\"/game/";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array(), "array"), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array(), "array"), "html", null, true);
            echo "</h3></a>
                        ";
            // line 34
            if (twig_test_empty($this->getAttribute($context["game"], "description", array(), "array"))) {
                // line 35
                echo "                            <p>There is no available description</p>
                        ";
            } elseif ($this->getAttribute(            // line 36
$context["game"], "description", array(), "array")) {
                // line 37
                echo "                            <p class=\"description\">";
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["game"], "description", array(), "array")), "html", null, true);
                echo "</p>
                        ";
            }
            // line 39
            echo "                        ";
            if (twig_test_empty($this->getAttribute($context["game"], "platforms_name", array(), "array"))) {
                // line 40
                echo "                            <p>There are no available platforms</p>
                        ";
            } elseif ($this->getAttribute(            // line 41
$context["game"], "platforms_name", array(), "array")) {
                // line 42
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["game"], "platforms_name", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                    // line 43
                    echo "                            <span class=\"badge\">";
                    echo twig_escape_filter($this->env, $context["platform"], "html", null, true);
                    echo "</span>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                        ";
            }
            // line 46
            echo "                        <p>Date added:";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["game"], "date_added", array(), "array"), "m/d/Y"), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"clearfix visible-lg\"></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
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
        // line 61
        $this->loadTemplate("common/footer.twig", "games/games.twig", 61)->display($context);
    }

    public function getTemplateName()
    {
        return "games/games.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 61,  126 => 50,  115 => 46,  112 => 45,  103 => 43,  98 => 42,  96 => 41,  93 => 40,  90 => 39,  84 => 37,  82 => 36,  79 => 35,  77 => 34,  69 => 33,  65 => 31,  59 => 29,  57 => 28,  54 => 27,  52 => 26,  48 => 24,  44 => 23,  21 => 2,  19 => 1,);
    }
}
/* {% include 'common/header.twig' %}*/
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
/*                     <li><a href="/games">Newest First</a></li>*/
/*                     <li role="separator" class="divider"></li>*/
/*                     <li><a href="/games/asc">Oldest First</a></li>*/
/*                     <li><a href="/games/reviews/desc">Most Reviewed</a></li>*/
/*                     <li><a href="/games/reviews/asc">Least Reviewed</a></li>*/
/*                     <li><a href="/games/title/asc">Title A-Z</a></li>*/
/*                     <li><a href="/games/title/desc">Title Z-A</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="games_background">*/
/*                 {% for game in games %}*/
/*                     <hr>*/
/*                     <div class="col-lg-4 games_content">*/
/*                         {% if game['images'][4] is empty %}*/
/*                             <img class="img img-responsive images_games" src="/images/no-image.png" alt="" width="315" height="190">*/
/*                         {% elseif game['images'] %}*/
/*                             <img class="img img-responsive images_games" src="{{game['images'][4]}}" alt="" width="315" height="190">*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="col-lg-8   ">*/
/*                         <a href="/game/{{ game['game_id'] }}/{{ game['name'] }}"><h3>{{ game['name'] }}</h3></a>*/
/*                         {% if game['description'] is empty %}*/
/*                             <p>There is no available description</p>*/
/*                         {% elseif game['description'] %}*/
/*                             <p class="description">{{ game['description']|striptags }}</p>*/
/*                         {% endif %}*/
/*                         {% if game['platforms_name'] is empty %}*/
/*                             <p>There are no available platforms</p>*/
/*                         {% elseif game['platforms_name'] %}*/
/*                             {% for platform in game.platforms_name %}*/
/*                             <span class="badge">{{platform}}</span>*/
/*                             {% endfor %}*/
/*                         {% endif %}*/
/*                         <p>Date added:{{ game['date_added']|date("m/d/Y") }}</p>*/
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
/* {% include 'common/footer.twig' %}*/
