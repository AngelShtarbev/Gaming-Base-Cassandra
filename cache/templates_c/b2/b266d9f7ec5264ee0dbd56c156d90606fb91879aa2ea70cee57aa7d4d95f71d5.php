<?php

/* reviews/review_content.twig */
class __TwigTemplate_c299bcf7b0eeb9e4abfca153de6d1866b4e1f34936c8ae215fb7da96ff3c9520 extends Twig_Template
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
        echo "<!-- Page Content -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"container-fluid customRow\">
        </div>
        <!--</div>-->
        ";
        // line 7
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 8
            echo "        <h3 class=\"reviewSingleHeading\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</h3>
        ";
        } elseif (twig_test_empty(        // line 9
(isset($context["message"]) ? $context["message"] : null))) {
            // line 10
            echo "        <div class=\"col-lg-12\">
            <div class=\"col-lg-9\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h3 class=\"reviewSingleHeading\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["review"]) ? $context["review"] : null), 0, array(), "array"), "release_name", array(), "array"), "html", null, true);
            echo "</h3>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12 \">
                        <div class=\"col-lg-12\" style=\"background-color:#6d666a;\">";
            // line 19
            echo $this->getAttribute($this->getAttribute((isset($context["review"]) ? $context["review"] : null), 0, array(), "array"), "description", array(), "array");
            echo " </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 platforms\">
                <h2>Review Details</h2>
                <ul>
                    <li><span>&nbsp</span>Game</li>
                    <li><span></span><a href=\"\" style=\"font-size:17px;\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["review"]) ? $context["review"] : null), 0, array(), "array"), "release_name", array(), "array"), "html", null, true);
            echo "</a></li>
                    <li style=\"font-size:17px;\"><span >&nbsp;&nbsp;</span>Publish Date</li>
                    <li style=\"font-size:17px;color:#555555;font-weight: 400;\"><span>&nbsp;";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["review"]) ? $context["review"] : null), 0, array(), "array"), "publish_date", array(), "array"), "m/d/Y"), "html", null, true);
            echo "</span> </li>
                    <li style=\"font-size:17px;font-weight: 500;color:#333333;\"><span>&nbsp;&nbsp;</span>Rating</li>
                    <li class=\"ratingStars\">
                        <span style=\"margin-right:8px;\"></span>
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["review"]) ? $context["review"] : null), 0, array(), "array"), "score", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                // line 34
                echo "                        <span class=\"glyphicon glyphicon-star\"></span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                    </li>
                </ul>
            </div>
        </div>
        ";
        }
        // line 41
        echo "        <div class=\"col-lg-12\">
            <div class=\"col-lg-9\">
                <div class=\"row\">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->";
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
        return array (  91 => 41,  84 => 36,  77 => 34,  73 => 33,  66 => 29,  61 => 27,  50 => 19,  42 => 14,  36 => 10,  34 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
/* <!-- Page Content -->*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="container-fluid customRow">*/
/*         </div>*/
/*         <!--</div>-->*/
/*         {% if message %}*/
/*         <h3 class="reviewSingleHeading">{{message}}</h3>*/
/*         {% elseif message is empty %}*/
/*         <div class="col-lg-12">*/
/*             <div class="col-lg-9">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <h3 class="reviewSingleHeading">{{review[0]['release_name']}}</h3>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12 ">*/
/*                         <div class="col-lg-12" style="background-color:#6d666a;">{{review[0]['description']|raw}} </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3 platforms">*/
/*                 <h2>Review Details</h2>*/
/*                 <ul>*/
/*                     <li><span>&nbsp</span>Game</li>*/
/*                     <li><span></span><a href="" style="font-size:17px;">{{review[0]['release_name']}}</a></li>*/
/*                     <li style="font-size:17px;"><span >&nbsp;&nbsp;</span>Publish Date</li>*/
/*                     <li style="font-size:17px;color:#555555;font-weight: 400;"><span>&nbsp;{{ review[0]['publish_date']|date("m/d/Y") }}</span> </li>*/
/*                     <li style="font-size:17px;font-weight: 500;color:#333333;"><span>&nbsp;&nbsp;</span>Rating</li>*/
/*                     <li class="ratingStars">*/
/*                         <span style="margin-right:8px;"></span>*/
/*                         {% for rating in review[0]['score'] %}*/
/*                         <span class="glyphicon glyphicon-star"></span>*/
/*                         {% endfor %}*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="col-lg-12">*/
/*             <div class="col-lg-9">*/
/*                 <div class="row">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- /.container -->*/
