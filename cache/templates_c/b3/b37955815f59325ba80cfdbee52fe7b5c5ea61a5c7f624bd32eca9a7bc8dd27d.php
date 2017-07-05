<?php

/* videos/videos_content.twig */
class __TwigTemplate_f274a3ac04363a7e1a1bf76a4b5589aaea7a02645507f8dd9ca520db8649e7b4 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"col-lg-12\">
        <div class=\"col-lg-12\">
            <div class=\"all_games_heading\">
                <h3>All Videos Available</h3>
            </div>
        <div class=\"col-lg-12 platform_background\">
            <div class=\"row\">
                <div class=\"col-lg-12 dropdownPlatform\">
                    <div class=\"dropdown\">
                        <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Sort Videos By
                            <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"/videos\">Newest First</a></li>
                            <li><a href=\"/videos/asc\">Oldest First</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 22
            echo "                <hr>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <a href=\"/video/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "video_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array(), "array"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "image_super_url", array(), "array"), "html", null, true);
            echo "\" alt=\"\" class=\"img img-responsive\"></a>
                    </div>
                    <div class=\"col-lg-8\">
                        <a href=\"/video/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "video_id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array(), "array"), "html", null, true);
            echo "\"> <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array(), "array"), "html", null, true);
            echo "</p></a>
                        <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "publish_date", array(), "array"), "html", null, true);
            echo "</p>
                        <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "deck", array(), "array"), "html", null, true);
            echo "</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "videos/videos_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 34,  72 => 30,  68 => 29,  60 => 28,  50 => 25,  45 => 22,  41 => 21,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="col-lg-12">*/
/*         <div class="col-lg-12">*/
/*             <div class="all_games_heading">*/
/*                 <h3>All Videos Available</h3>*/
/*             </div>*/
/*         <div class="col-lg-12 platform_background">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 dropdownPlatform">*/
/*                     <div class="dropdown">*/
/*                         <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sort Videos By*/
/*                             <span class="caret"></span></button>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="/videos">Newest First</a></li>*/
/*                             <li><a href="/videos/asc">Oldest First</a></li>*/
/* */
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% for video in videos %}*/
/*                 <hr>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-4">*/
/*                         <a href="/video/{{video['video_id']}}/{{video['name']}}"><img src="{{ video['image_super_url'] }}" alt="" class="img img-responsive"></a>*/
/*                     </div>*/
/*                     <div class="col-lg-8">*/
/*                         <a href="/video/{{video['video_id']}}/{{video['name']}}"> <p>{{ video['name'] }}</p></a>*/
/*                         <p>{{ video['publish_date']}}</p>*/
/*                         <p>{{video['deck']}}</p>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
