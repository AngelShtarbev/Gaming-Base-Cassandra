<?php

/* games/games_reviews_desc.twig */
class __TwigTemplate_a6404a6c01a70fafeb123fc52f5f93b1083c6ca289e13458826827636c8649b5 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "games/games_reviews_desc.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("games/games_reviews_desc_content.twig", "games/games_reviews_desc.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "games/games_reviews_desc.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "games/games_reviews_desc.twig";
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
/* {% include 'games/games_reviews_desc_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
