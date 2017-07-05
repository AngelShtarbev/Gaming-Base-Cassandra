<?php

/* reviews/review.twig */
class __TwigTemplate_5abe4fec063a9a1031fd907ba0fc19d8f827dd4f3337d6e28b187b86e7152517 extends Twig_Template
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
