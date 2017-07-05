<?php

/* games/search.twig */
class __TwigTemplate_972262f6ab605e00f12480807da85fbcfae853d8b310053b07ebe301c7665ae2 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "games/search.twig", 1)->display($context);
        // line 2
        echo "<div class=\"row\">
    <div class=\"container-fluid\">
        <div class=\"col-lg-2\">

        </div>
        <div class=\"col-lg-8 gamesContainer\">
            <div class=\"game\">
                <h3>Search Results</h3>
                 
                <div class=\" \">

                        <hr>
                        <div class=\"game col-lg-6\">
                            <img class=\"img img-responsive gamePicture img-thumbnail\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "image", array(), "array"), "screen_url", array(), "array"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"col-lg-6\">
                            <a href=\"/game/";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["results"]) ? $context["results"] : null), "id", array(), "array"), "html", null, true);
        echo "\"><h3>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["results"]) ? $context["results"] : null), "name", array(), "array"), "html", null, true);
        echo "</h3></a>
                            <p class=\"description\">";
        // line 19
        echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "description", array(), "array")), "html", null, true);
        echo "</p>
                            <p>Date added : ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["results"]) ? $context["results"] : null), "date_added", array(), "array"), "m/d/Y"), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"clearfix visible-lg\"></div>
                        <div class=\"col-lg-12\">
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "platforms", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 25
            echo "
                            <span class=\"badge\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array(), "array"), "html", null, true);
            echo "</span>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                        </div>

                </div>
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
        // line 51
        $this->loadTemplate("common/footer.twig", "games/search.twig", 51)->display($context);
    }

    public function getTemplateName()
    {
        return "games/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 51,  75 => 29,  66 => 26,  63 => 25,  59 => 24,  52 => 20,  48 => 19,  42 => 18,  36 => 15,  21 => 2,  19 => 1,);
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
/*                 <h3>Search Results</h3>*/
/*                  */
/*                 <div class=" ">*/
/* */
/*                         <hr>*/
/*                         <div class="game col-lg-6">*/
/*                             <img class="img img-responsive gamePicture img-thumbnail" src="{{ results['image']['screen_url'] }}" alt="">*/
/*                         </div>*/
/*                         <div class="col-lg-6">*/
/*                             <a href="/game/{{ results['id'] }}"><h3>{{ results['name'] }}</h3></a>*/
/*                             <p class="description">{{ results['description']|striptags}}</p>*/
/*                             <p>Date added : {{ results['date_added']|date("m/d/Y") }}</p>*/
/*                         </div>*/
/*                         <div class="clearfix visible-lg"></div>*/
/*                         <div class="col-lg-12">*/
/*                             {% for platform in results['platforms'] %}*/
/* */
/*                             <span class="badge">{{ platform['name'] }}</span>*/
/* */
/*                             {% endfor %}*/
/*                         </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-2">*/
/* */
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
