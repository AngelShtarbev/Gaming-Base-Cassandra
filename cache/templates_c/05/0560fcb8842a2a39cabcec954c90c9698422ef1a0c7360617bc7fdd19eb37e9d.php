<?php

/* reviews/reviews_score_desc.twig */
class __TwigTemplate_e8162afffe5e92461bcf62a9f3812fa33fe8b103a0ab84bf92b3ca09d611da2e extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "reviews/reviews_score_desc.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("reviews/reviews_content_score_desc.twig", "reviews/reviews_score_desc.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "reviews/reviews_score_desc.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "reviews/reviews_score_desc.twig";
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
/* {% include 'reviews/reviews_content_score_desc.twig' %}*/
/* {% include 'common/footer.twig' %}*/
