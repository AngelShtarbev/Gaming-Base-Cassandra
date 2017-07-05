<?php

/* reviews/reviews_asc.twig */
class __TwigTemplate_ad0b55aa6809c85ce41eee65a367532842a5ecf76daf011772e7af3bd60e3eab extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "reviews/reviews_asc.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("reviews/reviews_content_asc.twig", "reviews/reviews_asc.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "reviews/reviews_asc.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "reviews/reviews_asc.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'common/header.twig' %}*/
/* {% include 'reviews/reviews_content_asc.twig' %}*/
/* {% include 'common/footer.twig' %}*/
