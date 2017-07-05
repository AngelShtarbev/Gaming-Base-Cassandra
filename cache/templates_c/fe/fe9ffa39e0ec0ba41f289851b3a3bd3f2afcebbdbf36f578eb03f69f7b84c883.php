<?php

/* games/games.twig */
class __TwigTemplate_3361c2e4a5dd63b64360099d7cc21da00acf26188f08975ab28b23cac02fd4b3 extends Twig_Template
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
                    <li><a href=\"/games/asc\">Newest First</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"/games/desc\">Oldest First</a></li>
                    <li><a href=\"/games/reviews/asc\">Most Reviewed</a></li>
                    <li><a href=\"/games/reviews/desc\">Least Reviewed</a></li>
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
                        <img class=\"img img-responsive images_games\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "image_super_url", array(), "array"), "html", null, true);
            echo "\" alt=\"\" width=\"315\" height=\"190\">
                    </div>

                    <div class=\"col-lg-8   \">
                        <a href=\"/game/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_api_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array(), "array"), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array(), "array"), "html", null, true);
            echo "</h3></a>
                        ";
            // line 31
            if (twig_test_empty($this->getAttribute($context["game"], "deck", array(), "array"))) {
                // line 32
                echo "                            <p>There is no available description</p>
                        ";
            } elseif ($this->getAttribute(            // line 33
$context["game"], "deck", array(), "array")) {
                // line 34
                echo "                            <p class=\"description\">";
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["game"], "deck", array(), "array")), "html", null, true);
                echo "</p>
                        ";
            }
            // line 36
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["game"], "platforms", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["game_type"]) {
                // line 37
                echo "                            <span class=\"badge\">";
                echo twig_escape_filter($this->env, $context["game_type"], "html", null, true);
                echo "</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                        <p>Date added : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["game"], "date_added", array(), "array"), "m/d/Y"), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"clearfix visible-lg\"></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
        // line 54
        $this->loadTemplate("common/footer.twig", "games/games.twig", 54)->display($context);
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
        return array (  118 => 54,  105 => 43,  94 => 39,  85 => 37,  80 => 36,  74 => 34,  72 => 33,  69 => 32,  67 => 31,  59 => 30,  52 => 26,  48 => 24,  44 => 23,  21 => 2,  19 => 1,);
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
/*                     <li><a href="/games/asc">Newest First</a></li>*/
/*                     <li role="separator" class="divider"></li>*/
/*                     <li><a href="/games/desc">Oldest First</a></li>*/
/*                     <li><a href="/games/reviews/asc">Most Reviewed</a></li>*/
/*                     <li><a href="/games/reviews/desc">Least Reviewed</a></li>*/
/*                     <li><a href="/games/title/asc">Title A-Z</a></li>*/
/*                     <li><a href="/games/title/desc">Title Z-A</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="games_background">*/
/*                 {% for game in games %}*/
/*                     <hr>*/
/*                     <div class="col-lg-4 games_content">*/
/*                         <img class="img img-responsive images_games" src="{{game['image_super_url']}}" alt="" width="315" height="190">*/
/*                     </div>*/
/* */
/*                     <div class="col-lg-8   ">*/
/*                         <a href="/game/{{ game['game_api_id'] }}/{{ game['name'] }}"><h3>{{ game['name'] }}</h3></a>*/
/*                         {% if game['deck'] is empty %}*/
/*                             <p>There is no available description</p>*/
/*                         {% elseif game['deck'] %}*/
/*                             <p class="description">{{ game['deck']|striptags }}</p>*/
/*                         {% endif %}*/
/*                         {% for game_type in game.platforms %}*/
/*                             <span class="badge">{{ game_type }}</span>*/
/*                         {% endfor %}*/
/*                         <p>Date added : {{ game['date_added']|date("m/d/Y") }}</p>*/
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
