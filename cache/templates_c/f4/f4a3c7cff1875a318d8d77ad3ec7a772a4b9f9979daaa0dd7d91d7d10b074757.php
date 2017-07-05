<?php

/* reviews/review.twig */
class __TwigTemplate_d5efa75060f44251f9e2a9c99b95afcc9568bf2ba36d6a78f038382ac540fd7c extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "reviews/review.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("reviews/review_content.twig", "reviews/review.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "reviews/review.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "reviews/review.twig";
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
/* {% include 'reviews/review_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
