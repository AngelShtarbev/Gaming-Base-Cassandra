<?php

/* reviews/review_content.twig */
class __TwigTemplate_c74dd2dac18639f6f070b39f1728744e0ca7f6295c706eb63eebf925218772dd extends Twig_Template
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
    <div class=\"col-lg-12 review_content\">
        <div class=\"col-lg-10\">

            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <h3>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["review"]) ? $context["review"] : null), 0, array(), "array"), "game_name", array(), "array"), "html", null, true);
        echo " Review</h3>
                    <hr>
                </div>
                <div class=\"col-lg-6 review_description\">
                    <h3 class=\"rev_deck\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["review"]) ? $context["review"] : null), 0, array(), "array"), "deck", array(), "array"), "html", null, true);
        echo "</h3>
                    <p class=\"rev_description\">";
        // line 13
        echo twig_escape_filter($this->env, strip_tags($this->getAttribute($this->getAttribute((isset($context["review"]) ? $context["review"] : null), 0, array(), "array"), "description", array(), "array")), "html", null, true);
        echo "</p>
                </div>
            </div>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "reviews/review_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  35 => 12,  28 => 8,  19 => 1,);
    }
}
/* */
/* <div class="container">*/
/*     <div class="col-lg-12 review_content">*/
/*         <div class="col-lg-10">*/
/* */
/*             <div class="row">*/
/*                 <div class="col-lg-6">*/
/*                     <h3>{{review[0]['game_name']}} Review</h3>*/
/*                     <hr>*/
/*                 </div>*/
/*                 <div class="col-lg-6 review_description">*/
/*                     <h3 class="rev_deck">{{ review[0]['deck'] }}</h3>*/
/*                     <p class="rev_description">{{ review[0]['description']|striptags }}</p>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
