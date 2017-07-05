<?php

/* games/game_content.twig */
class __TwigTemplate_5b25d04efcde2bf831890617f3c47bc6ec2d499e7eb30f8aa6c09b9f83ef331f extends Twig_Template
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
        <div class=\"col-lg-10 gbox\">

            <ul class=\"nav nav-tabs  \">
                <li class=\"active  col-lg-5 col-xs-12\"><a data-toggle=\"tab\" href=\"#home\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : null), "name", array(), "array"), "html", null, true);
        echo "</a></li>
                <li class=\"col-lg-2 col-xs-12\"><a data-toggle=\"tab\" href=\"#menu1\">Summary</a></li>
                <li class=\"col-lg-2 col-xs-12\"><a data-toggle=\"tab\" href=\"#menu2\">Images</a></li>
                <li class=\"col-lg-2 col-xs-12\"><a data-toggle=\"tab\" href=\"#menu3\">Comments</a></li>
                <li class=\"col-xs-12\">&nbsp;</li>
            </ul>
            <div class=\"tab-content\">
                <div id=\"home\" class=\"tab-pane fade in active col-lg-6\">
                    <h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : null), "name", array(), "array"), "html", null, true);
        echo "</h3>
                </div>
                <div id=\"menu1\" class=\"tab-pane fade \">
                    <div class=\"col-lg-12\">
                        <h3>Summary</h3>
                        ";
        // line 19
        if (twig_test_empty($this->getAttribute((isset($context["game"]) ? $context["game"] : null), "description", array(), "array"))) {
            // line 20
            echo "                            <p>There is no available description</p>
                        ";
        } elseif ($this->getAttribute(        // line 21
(isset($context["game"]) ? $context["game"] : null), "description", array(), "array")) {
            // line 22
            echo "                            <p class=\"paragraph_background\">";
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["game"]) ? $context["game"] : null), "description", array(), "array")), "html", null, true);
            echo "</p>
                        ";
        }
        // line 24
        echo "                    </div>
                </div>
                <div id=\"menu2\" class=\"tab-pane fade\">
                    <h3>Images</h3>
                    <div class=\"col-lg-6 image_holder\">
                        <img class=\"img img-responsive\" width=\"250px\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), "images", array(), "array"), 0, array(), "array"), "super_url", array(), "array"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
                <div id=\"menu3\" class=\"tab-pane fade col-lg-6\">
                    <h3>Comments</h3>
                    ";
        // line 34
        if (twig_test_empty($this->getAttribute((isset($context["game"]) ? $context["game"] : null), "comments", array(), "array"))) {
            // line 35
            echo "                        <p>There are no available comments</p>
                    ";
        } elseif ($this->getAttribute(        // line 36
(isset($context["game"]) ? $context["game"] : null), "comments", array(), "array")) {
            // line 37
            echo "                        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : null), "comments", array(), "array"), "html", null, true);
            echo "</p>
                    ";
        }
        // line 39
        echo "                </div>
            </div>

        </div>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "games/game_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 39,  80 => 37,  78 => 36,  75 => 35,  73 => 34,  65 => 29,  58 => 24,  52 => 22,  50 => 21,  47 => 20,  45 => 19,  37 => 14,  26 => 6,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="col-lg-12">*/
/*         <div class="col-lg-10 gbox">*/
/* */
/*             <ul class="nav nav-tabs  ">*/
/*                 <li class="active  col-lg-5 col-xs-12"><a data-toggle="tab" href="#home">{{ game['name'] }}</a></li>*/
/*                 <li class="col-lg-2 col-xs-12"><a data-toggle="tab" href="#menu1">Summary</a></li>*/
/*                 <li class="col-lg-2 col-xs-12"><a data-toggle="tab" href="#menu2">Images</a></li>*/
/*                 <li class="col-lg-2 col-xs-12"><a data-toggle="tab" href="#menu3">Comments</a></li>*/
/*                 <li class="col-xs-12">&nbsp;</li>*/
/*             </ul>*/
/*             <div class="tab-content">*/
/*                 <div id="home" class="tab-pane fade in active col-lg-6">*/
/*                     <h3>{{ game['name'] }}</h3>*/
/*                 </div>*/
/*                 <div id="menu1" class="tab-pane fade ">*/
/*                     <div class="col-lg-12">*/
/*                         <h3>Summary</h3>*/
/*                         {% if game['description'] is empty %}*/
/*                             <p>There is no available description</p>*/
/*                         {% elseif game['description'] %}*/
/*                             <p class="paragraph_background">{{ game['description']|striptags }}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="menu2" class="tab-pane fade">*/
/*                     <h3>Images</h3>*/
/*                     <div class="col-lg-6 image_holder">*/
/*                         <img class="img img-responsive" width="250px" src="{{ game['images'][0]['super_url'] }}" alt="">*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="menu3" class="tab-pane fade col-lg-6">*/
/*                     <h3>Comments</h3>*/
/*                     {% if game['comments'] is empty %}*/
/*                         <p>There are no available comments</p>*/
/*                     {% elseif game['comments'] %}*/
/*                         <p>{{ game['comments'] }}</p>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </div>*/
