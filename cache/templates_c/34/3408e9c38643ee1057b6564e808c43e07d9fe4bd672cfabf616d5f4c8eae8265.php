<?php

/* games/games_reviews_asc.twig */
class __TwigTemplate_5086bb350c82659a897af2b7eafbd70dad4d0a519507827c211001580ceb3aac extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "games/games_reviews_asc.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("games/games_reviews_asc_content.twig", "games/games_reviews_asc.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "games/games_reviews_asc.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "games/games_reviews_asc.twig";
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
/* {% include 'games/games_reviews_asc_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
