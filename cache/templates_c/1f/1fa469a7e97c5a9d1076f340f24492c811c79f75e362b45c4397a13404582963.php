<?php

/* games/games_date_added_asc.twig */
class __TwigTemplate_6844c67dc48f42381285fa4b16456090966cb5c7a1ff5567b53ec45b578d4db8 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "games/games_date_added_asc.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("games/games_date_added_asc_content.twig", "games/games_date_added_asc.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "games/games_date_added_asc.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "games/games_date_added_asc.twig";
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
/* {% include 'games/games_date_added_asc_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
