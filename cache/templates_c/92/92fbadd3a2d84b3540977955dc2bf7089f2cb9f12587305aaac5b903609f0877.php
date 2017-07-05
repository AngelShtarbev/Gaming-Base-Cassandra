<?php

/* home/home.twig */
class __TwigTemplate_ac85d356172e115a42196d1512bdd0a771596a5d1034441ad8927712d9c05719 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "home/home.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("home/home_content.twig", "home/home.twig", 2)->display($context);
        // line 3
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('#Carousel').carousel({
            interval: 3000
        });

        \$('.carousel').carousel('cycle');
    });
</script>
";
        // line 12
        $this->loadTemplate("common/footer.twig", "home/home.twig", 12)->display($context);
    }

    public function getTemplateName()
    {
        return "home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 12,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'common/header.twig' %}*/
/* {% include 'home/home_content.twig' %}*/
/* <script type="text/javascript">*/
/*     $(document).ready(function () {*/
/*         $('#Carousel').carousel({*/
/*             interval: 3000*/
/*         });*/
/* */
/*         $('.carousel').carousel('cycle');*/
/*     });*/
/* </script>*/
/* {% include 'common/footer.twig' %}*/
/* */
