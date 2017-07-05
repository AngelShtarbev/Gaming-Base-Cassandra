<?php

/* games/games.twig */
class __TwigTemplate_1ab3530a0d7c30620ac3f4f6941b973630e7142cfe3adf1b759ef61945dc628d extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"container-fluid\">
        <div class=\"col-lg-2\">

        </div>
        <div class=\"col-lg-8 gamesContainer\">
            <div class=\"game\">
                <h3>All Games Available</h3>
                <div class=\"row\">
                    <div class=\"col-lg-12 dropdownPlatform\">
                        <div class=\"dropdown\">
                            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Sort Games By
                                <span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"/games/asc\">Newest First</a></li>
                                <li><a href=\"/games\">Oldest First</a></li>
                                <li><a href=\"/games/reviews/asc\">Most Reviewed</a></li>
                                <li><a href=\"/games/reviews/desc\">Least Reviewed</a></li>
                                <li><a href=\"/games/title/asc\">Title A-Z</a></li>
                                <li><a href=\"/games/title\">Title Z-A</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"singleGameContainer\">
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["games"]) ? $context["games"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 28
            echo "                        <hr>
                        <div class=\"game col-lg-6\">
                            <img class=\"img img-responsive gamePicture img-thumbnail\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "image_screen_url", array(), "array"), "html", null, true);
            echo "\" alt=\"\">
                        </div>
                        <div class=\"col-lg-6\">
                            <a href=\"/game/";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "game_api_id", array(), "array"), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array(), "array"), "html", null, true);
            echo "</h3></a>
                            <p class=\"description\">";
            // line 34
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["game"], "description", array(), "array")), "html", null, true);
            echo "</p>
                            <span class=\"badge\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "platforms_name", array(), "array"), "html", null, true);
            echo "</span>
                            <p>Date added : ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["game"], "date_added", array(), "array"), "m/d/Y"), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"clearfix visible-lg\"></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </div>
            </div>
        </div>
        <div class=\"col-lg-2\">
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"container\">
        <h3>About</h3>
    </div>

</div>

<script src=\"/assets/js/readmore.js\"></script>
<script src=\"/assets/js/readmore.min.js\"></script>
<script>
    \$('.description').readmore();
</script>
";
        // line 59
        $this->loadTemplate("common/footer.twig", "games/games.twig", 59)->display($context);
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
        return array (  107 => 59,  86 => 40,  76 => 36,  72 => 35,  68 => 34,  62 => 33,  56 => 30,  52 => 28,  48 => 27,  21 => 2,  19 => 1,);
    }
}
/* {% include 'common/header.twig' %}*/
/* <div class="row">*/
/*     <div class="container-fluid">*/
/*         <div class="col-lg-2">*/
/* */
/*         </div>*/
/*         <div class="col-lg-8 gamesContainer">*/
/*             <div class="game">*/
/*                 <h3>All Games Available</h3>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12 dropdownPlatform">*/
/*                         <div class="dropdown">*/
/*                             <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sort Games By*/
/*                                 <span class="caret"></span></button>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="/games/asc">Newest First</a></li>*/
/*                                 <li><a href="/games">Oldest First</a></li>*/
/*                                 <li><a href="/games/reviews/asc">Most Reviewed</a></li>*/
/*                                 <li><a href="/games/reviews/desc">Least Reviewed</a></li>*/
/*                                 <li><a href="/games/title/asc">Title A-Z</a></li>*/
/*                                 <li><a href="/games/title">Title Z-A</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="singleGameContainer">*/
/*                     {% for game in games %}*/
/*                         <hr>*/
/*                         <div class="game col-lg-6">*/
/*                             <img class="img img-responsive gamePicture img-thumbnail" src="{{ game['image_screen_url'] }}" alt="">*/
/*                         </div>*/
/*                         <div class="col-lg-6">*/
/*                             <a href="/game/{{ game['game_api_id'] }}"><h3>{{ game['name'] }}</h3></a>*/
/*                             <p class="description">{{ game['description']|striptags}}</p>*/
/*                             <span class="badge">{{ game['platforms_name']}}</span>*/
/*                             <p>Date added : {{ game['date_added']|date("m/d/Y") }}</p>*/
/*                         </div>*/
/*                         <div class="clearfix visible-lg"></div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-2">*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="row">*/
/*     <div class="container">*/
/*         <h3>About</h3>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <script src="/assets/js/readmore.js"></script>*/
/* <script src="/assets/js/readmore.min.js"></script>*/
/* <script>*/
/*     $('.description').readmore();*/
/* </script>*/
/* {% include 'common/footer.twig' %}*/
