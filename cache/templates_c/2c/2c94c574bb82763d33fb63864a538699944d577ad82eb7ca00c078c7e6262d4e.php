<?php

/* platforms/platform_game_desc.twig */
class __TwigTemplate_a0ed65a39cdf53c9e4915514f1d68f5b0f7791b06b46ce1c1a7b5e64fc44872b extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "platforms/platform_game_desc.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"container\">
    <div class=\"col-lg-12\">
        <div class=\"col-lg-10 gbox\">

            <ul class=\"nav nav-tabs  \">
                <li class=\"active  col-lg-5 col-xs-12\"><a data-toggle=\"tab\" href=\"#home\">";
        // line 8
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
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "name", array(), "array"), "html", null, true);
        echo "</h3>
                </div>
                <div id=\"menu1\" class=\"tab-pane fade \">
                    <div class=\"col-lg-12\">
                        <h3>Summary</h3>
                        ";
        // line 21
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "description", array(), "array"))) {
            // line 22
            echo "                            <p>There is no available description</p>
                        ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 23
(isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "description", array(), "array")) {
            // line 24
            echo "                            <p class=\"paragraph_background\">";
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "description", array(), "array")), "html", null, true);
            echo "</p>
                        ";
        }
        // line 26
        echo "                    </div>
                </div>
                <div id=\"menu2\" class=\"tab-pane fade\">
                    <h3>Images</h3>
                    <div class=\"col-lg-6 image_holder\">
                        <img class=\"img img-responsive\" width=\"250px\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "images", array(), "array"), 4, array(), "array"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
                <div id=\"menu3\" class=\"tab-pane fade col-lg-6\">
                    <h3>Comments</h3>
                    ";
        // line 36
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "comments", array(), "array"))) {
            // line 37
            echo "                        <p>There are no available comments</p>
                    ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 38
(isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "comments", array(), "array")) {
            // line 39
            echo "                        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : null), 0, array(), "array"), "comments", array(), "array"), "html", null, true);
            echo "</p>
                    ";
        }
        // line 41
        echo "                </div>
            </div>

        </div>

    </div>

</div>

<script src=\"/assets/js/readmore.js\"></script>
<script src=\"/assets/js/readmore.min.js\"></script>
<script>
    \$('.description').readmore();
</script>
";
        // line 55
        $this->loadTemplate("common/footer.twig", "platforms/platform_game_desc.twig", 55)->display($context);
    }

    public function getTemplateName()
    {
        return "platforms/platform_game_desc.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 55,  89 => 41,  83 => 39,  81 => 38,  78 => 37,  76 => 36,  68 => 31,  61 => 26,  55 => 24,  53 => 23,  50 => 22,  48 => 21,  40 => 16,  29 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% include 'common/header.twig' %}*/
/* */
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
/*                     <h3>{{ game[0]['name'] }}</h3>*/
/*                 </div>*/
/*                 <div id="menu1" class="tab-pane fade ">*/
/*                     <div class="col-lg-12">*/
/*                         <h3>Summary</h3>*/
/*                         {% if game[0]['description'] is empty %}*/
/*                             <p>There is no available description</p>*/
/*                         {% elseif game[0]['description'] %}*/
/*                             <p class="paragraph_background">{{ game[0]['description']|striptags }}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="menu2" class="tab-pane fade">*/
/*                     <h3>Images</h3>*/
/*                     <div class="col-lg-6 image_holder">*/
/*                         <img class="img img-responsive" width="250px" src="{{game[0]['images'][4]}}" alt="">*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="menu3" class="tab-pane fade col-lg-6">*/
/*                     <h3>Comments</h3>*/
/*                     {% if game[0]['comments'] is empty %}*/
/*                         <p>There are no available comments</p>*/
/*                     {% elseif game[0]['comments'] %}*/
/*                         <p>{{ game[0]['comments'] }}</p>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
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
