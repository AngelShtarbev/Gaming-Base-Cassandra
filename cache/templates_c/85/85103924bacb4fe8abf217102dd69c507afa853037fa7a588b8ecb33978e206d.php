<?php

/* games/game.twig */
class __TwigTemplate_1f3e01b84fdfee85fa6d2d6c524880175c2e8020773be42d4a492464f4a926d3 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "games/game.twig", 1)->display($context);
        // line 2
        echo "<div class=\"row\">
    <div class=\"container-fluid\">
        <div class=\"col-lg-2 pusturva\">

       </div>
        <div class=\"col-lg-8 singleGamePanel\">
            <div class=\"container-fluid\">
                <!--date_added,deck,id,description,image,name-->
                <div class=\"col-lg-12\">
                    <h2>Information</h2>
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : null), "name", array(), "array"), "html", null, true);
        echo "</a></li>
                        <li><a data-toggle=\"tab\" href=\"#menu1\">Summary</a></li>
                        <li><a data-toggle=\"tab\" href=\"#menu2\">Images</a></li>
                        <li><a data-toggle=\"tab\" href=\"#menu3\">Comments</a></li>
                    </ul>
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["game"]) ? $context["game"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["game_id"]) {
            // line 19
            echo "                    <div class=\"tab-content\">
                        <div id=\"home\" class=\"tab-pane fade in active\">
                            <h3>HOME</h3>
                        </div>
                        <div id=\"menu1\" class=\"tab-pane fade\">
                            <div class=\"col-lg-12\">
                                <h3>Summary</h3>
                                <p>";
            // line 26
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["game_id"], "description", array(), "array")), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                        <div id=\"menu2\" class=\"tab-pane fade\">
                            <h3>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["game_id"], "name", array(), "array"), "html", null, true);
            echo "</h3>
                                <img class=\"img img-responsive\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["game_id"], "image_screen_url", array(), "array"), "html", null, true);
            echo "\" alt=\"\">
                            <hr>
                        </div>
                        <div id=\"menu3\" class=\"tab-pane fade\">
                            <h3>Menu 3</h3>
                            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game_id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 45
        $this->loadTemplate("common/footer.twig", "games/game.twig", 45)->display($context);
        // line 46
        echo "
";
    }

    public function getTemplateName()
    {
        return "games/game.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 46,  88 => 45,  81 => 40,  66 => 31,  62 => 30,  55 => 26,  46 => 19,  42 => 18,  34 => 13,  21 => 2,  19 => 1,);
    }
}
/* {% include 'common/header.twig' %}*/
/* <div class="row">*/
/*     <div class="container-fluid">*/
/*         <div class="col-lg-2 pusturva">*/
/* */
/*        </div>*/
/*         <div class="col-lg-8 singleGamePanel">*/
/*             <div class="container-fluid">*/
/*                 <!--date_added,deck,id,description,image,name-->*/
/*                 <div class="col-lg-12">*/
/*                     <h2>Information</h2>*/
/*                     <ul class="nav nav-tabs">*/
/*                         <li class="active"><a data-toggle="tab" href="#home">{{ game['name'] }}</a></li>*/
/*                         <li><a data-toggle="tab" href="#menu1">Summary</a></li>*/
/*                         <li><a data-toggle="tab" href="#menu2">Images</a></li>*/
/*                         <li><a data-toggle="tab" href="#menu3">Comments</a></li>*/
/*                     </ul>*/
/*                     {% for game_id in game %}*/
/*                     <div class="tab-content">*/
/*                         <div id="home" class="tab-pane fade in active">*/
/*                             <h3>HOME</h3>*/
/*                         </div>*/
/*                         <div id="menu1" class="tab-pane fade">*/
/*                             <div class="col-lg-12">*/
/*                                 <h3>Summary</h3>*/
/*                                 <p>{{ game_id['description']|striptags }}</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div id="menu2" class="tab-pane fade">*/
/*                             <h3>{{ game_id['name'] }}</h3>*/
/*                                 <img class="img img-responsive" src="{{ game_id['image_screen_url'] }}" alt="">*/
/*                             <hr>*/
/*                         </div>*/
/*                         <div id="menu3" class="tab-pane fade">*/
/*                             <h3>Menu 3</h3>*/
/*                             <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% include 'common/footer.twig' %}*/
/* */
/* */
