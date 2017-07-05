<?php

/* platforms/platforms.twig */
class __TwigTemplate_bb2794c91e1c462246a5564a9228ffb08aae3b61e0e923526f511f8251846611 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "platforms/platforms.twig", 1)->display($context);
        // line 2
        echo "<div class=\"container\">
    <div class=\"row\" style=\"background-color: black\">
        <div class=\"col-lg-2\"><h3>TEST</h3></div>
        <div class=\"col-lg-8\">
            <div class=\"row\">
                <div class=\"col-lg-12 platform\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <h3>Platform name</h3>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-5\">
                            <img src=\"http://placehold.it/320x200\" alt=\"\">
                        </div>
                        <div class=\"col-lg-7\">
                            <p><span class=\"glyphicon glyphicon-time datePublished\"></span> Date Published: 12/12/16</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa error fugiat in ipsa itaque libero molestiae nisi
                                perferendis placeat porro quaerat quasi reiciendis, reprehenderit sit temporibus totam vitae voluptate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-2\"><h3>TEST</h3></div>
        
    </div>
</div>
";
        // line 30
        $this->loadTemplate("common/footer.twig", "platforms/platforms.twig", 30)->display($context);
    }

    public function getTemplateName()
    {
        return "platforms/platforms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 30,  21 => 2,  19 => 1,);
    }
}
/* {% include 'common/header.twig' %}*/
/* <div class="container">*/
/*     <div class="row" style="background-color: black">*/
/*         <div class="col-lg-2"><h3>TEST</h3></div>*/
/*         <div class="col-lg-8">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 platform">*/
/*                     <div class="row">*/
/*                         <div class="col-lg-6">*/
/*                             <h3>Platform name</h3>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-lg-5">*/
/*                             <img src="http://placehold.it/320x200" alt="">*/
/*                         </div>*/
/*                         <div class="col-lg-7">*/
/*                             <p><span class="glyphicon glyphicon-time datePublished"></span> Date Published: 12/12/16</p>*/
/*                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa error fugiat in ipsa itaque libero molestiae nisi*/
/*                                 perferendis placeat porro quaerat quasi reiciendis, reprehenderit sit temporibus totam vitae voluptate.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-2"><h3>TEST</h3></div>*/
/*         */
/*     </div>*/
/* </div>*/
/* {% include 'common/footer.twig' %}*/
