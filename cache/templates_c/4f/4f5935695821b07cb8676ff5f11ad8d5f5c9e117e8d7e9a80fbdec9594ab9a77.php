<?php

/* search/search.twig */
class __TwigTemplate_e2c4033d24bf5f7cca4a40f0dc52086ef4436a49c198a8b798f74e52c64bd3ec extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "search/search.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("search/search_content.twig", "search/search.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "search/search.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "search/search.twig";
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
/* {% include 'search/search_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
