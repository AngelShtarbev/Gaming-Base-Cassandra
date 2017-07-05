<?php

/* reviews/reviews.twig */
class __TwigTemplate_b30af141622f1f7cb09aae7148a1dab6dcf9895b297093977932ebca08e35947 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "reviews/reviews.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("reviews/reviews_content_desc.twig", "reviews/reviews.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "reviews/reviews.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "reviews/reviews.twig";
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
/* {% include 'reviews/reviews_content_desc.twig' %}*/
/* {% include 'common/footer.twig' %}*/
