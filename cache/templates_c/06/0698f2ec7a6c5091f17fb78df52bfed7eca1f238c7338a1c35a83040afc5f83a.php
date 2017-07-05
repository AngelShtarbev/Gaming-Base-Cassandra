<?php

/* videos/video_content.twig */
class __TwigTemplate_6cb988fc971aef93346303fbfadb7573ac0b900357c6b14e9e7a662771e33a89 extends Twig_Template
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
        <div class=\"col-lg-12\">
            <div class=\"col-lg-8\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h3 class=\"reviewHeadingLink singleVideoHeading\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), 0, array(), "array"), "name", array(), "array"), "html", null, true);
        echo "</h3>
                        <p style=\"color:#333333;\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), 0, array(), "array"), "deck", array(), "array"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"embed-responsive embed-responsive-16by9\">
                            <iframe class=\"embed-responsive-item\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), 0, array(), "array"), "embed_player", array(), "array"), "html", null, true);
        echo "\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"col-lg-12\">
                    <img class=\"img img-responsive\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), 0, array(), "array"), "images", array(), "array"), 3, array(), "array"), "html", null, true);
        echo "\" height=\"168\" alt=\"\">
                    <div class=\"col-lg-12 videoDetailsHeading\">
                        <h3 class=\"videoHeading\">Video Details</h3>
                    </div>
                    <div class=\"col-lg-12 videosDescriptionScreen\">
                        <h4>Title</h4>
                        <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), 0, array(), "array"), "name", array(), "array"), "html", null, true);
        echo "</p>
                        <h4>Release Date </h4>
                        <span>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), 0, array(), "array"), "publish_date", array(), "array"), "m/d/Y"), "html", null, true);
        echo "</span>
                        <h4>Video Type </h4>
                        <span>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), 0, array(), "array"), "video_type", array(), "array"), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-12\">
            <div class=\"col-lg-9\">
                <div class=\"row\">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "videos/video_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 35,  68 => 33,  63 => 31,  54 => 25,  44 => 18,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!-- Page Content -->*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="container-fluid customRow">*/
/*         </div>*/
/*         <!--</div>-->*/
/*         <div class="col-lg-12">*/
/*             <div class="col-lg-8">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <h3 class="reviewHeadingLink singleVideoHeading">{{video[0]['name']}}</h3>*/
/*                         <p style="color:#333333;">{{video[0]['deck']}}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <div class="embed-responsive embed-responsive-16by9">*/
/*                             <iframe class="embed-responsive-item" src="{{video[0]['embed_player']}}"></iframe>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-4">*/
/*                 <div class="col-lg-12">*/
/*                     <img class="img img-responsive" src="{{video[0]['images'][3]}}" height="168" alt="">*/
/*                     <div class="col-lg-12 videoDetailsHeading">*/
/*                         <h3 class="videoHeading">Video Details</h3>*/
/*                     </div>*/
/*                     <div class="col-lg-12 videosDescriptionScreen">*/
/*                         <h4>Title</h4>*/
/*                         <p>{{video[0]['name']}}</p>*/
/*                         <h4>Release Date </h4>*/
/*                         <span>{{video[0]['publish_date']|date("m/d/Y")}}</span>*/
/*                         <h4>Video Type </h4>*/
/*                         <span>{{video[0]['video_type']}}</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-12">*/
/*             <div class="col-lg-9">*/
/*                 <div class="row">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- /.container -->*/
/* */
