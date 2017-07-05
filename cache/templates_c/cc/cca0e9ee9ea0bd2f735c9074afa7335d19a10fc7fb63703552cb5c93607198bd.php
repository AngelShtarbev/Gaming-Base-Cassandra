<?php

/* games/games_date_added_desc.twig */
class __TwigTemplate_9186c69f03d40a37a8dfa4b8d44400fe17ba46e71b9f6c5ebe74f4648e8baab2 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "games/games_date_added_desc.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("games/games_date_added_desc_content.twig", "games/games_date_added_desc.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "games/games_date_added_desc.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "games/games_date_added_desc.twig";
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
/* {% include 'games/games_date_added_desc_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
