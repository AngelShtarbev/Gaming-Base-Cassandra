<?php

/* videos/video_content.twig */
class __TwigTemplate_eecd166e82dfbbab8a94fbd4ba6914372ac264c36b81227bf4691a3affda7626 extends Twig_Template
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
        echo "<div class=\"container platform_background\">
    <div class=\"row\">
       <div class=\"col-lg-12\">
           <div class=\"col-lg-8\">
               <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), 0, array(), "array"), "name", array(), "array"), "html", null, true);
        echo "</h2>
               <hr>
               <h4 class=\"video_deck\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), 0, array(), "array"), "deck", array(), "array"), "html", null, true);
        echo "</h4>
               <!-- 16:9 aspect ratio -->
               <div class=\"embed-responsive embed-responsive-16by9\">
                   <iframe class=\"embed-responsive-item\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), 0, array(), "array"), "embed_player", array(), "array"), "html", null, true);
        echo "\"></iframe>
               </div>
               <hr>
           </div>
           <div class=\"col-lg-4\">
               <h3>Video Details</h3>
               <div class=\"row\">
                   <div class=\"col-lg-12 videosDetailPanel\">
                       <h4>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), 0, array(), "array"), "name", array(), "array"), "html", null, true);
        echo "</h4>
                       <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), 0, array(), "array"), "publish_date", array(), "array"), "html", null, true);
        echo "</p>
                       <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), 0, array(), "array"), "video_type", array(), "array"), "html", null, true);
        echo "</p>
                       <hr>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>";
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
        return array (  55 => 20,  51 => 19,  47 => 18,  36 => 10,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <div class="container platform_background">*/
/*     <div class="row">*/
/*        <div class="col-lg-12">*/
/*            <div class="col-lg-8">*/
/*                <h2>{{video[0]['name']}}</h2>*/
/*                <hr>*/
/*                <h4 class="video_deck">{{video[0]['deck']}}</h4>*/
/*                <!-- 16:9 aspect ratio -->*/
/*                <div class="embed-responsive embed-responsive-16by9">*/
/*                    <iframe class="embed-responsive-item" src="{{ video[0]['embed_player'] }}"></iframe>*/
/*                </div>*/
/*                <hr>*/
/*            </div>*/
/*            <div class="col-lg-4">*/
/*                <h3>Video Details</h3>*/
/*                <div class="row">*/
/*                    <div class="col-lg-12 videosDetailPanel">*/
/*                        <h4>{{video[0]['name']}}</h4>*/
/*                        <p>{{video[0]['publish_date']}}</p>*/
/*                        <p>{{video[0]['video_type']}}</p>*/
/*                        <hr>*/
/*                    </div>*/
/*                </div>*/
/*            </div>*/
/*        </div>*/
/*     </div>*/
/* </div>*/
