<?php

/* reviews/reviews.twig */
class __TwigTemplate_e68f6e8482e25ecb634f4a29faa35ced48bdd0954c27d762364fcd842f783cad extends Twig_Template
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
        $this->loadTemplate("reviews/reviews_content.twig", "reviews/reviews.twig", 2)->display($context);
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
/* {% include 'reviews/reviews_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
