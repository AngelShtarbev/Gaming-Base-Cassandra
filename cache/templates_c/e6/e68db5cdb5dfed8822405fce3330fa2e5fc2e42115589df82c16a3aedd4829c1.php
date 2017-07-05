<?php

/* games/games_title_asc.twig */
class __TwigTemplate_50bde15054caed2ad003798eaae030ef600ef56a7a729c22adc3452cc55d5ce2 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "games/games_title_asc.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("games/games_title_asc_content.twig", "games/games_title_asc.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "games/games_title_asc.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "games/games_title_asc.twig";
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
/* {% include 'games/games_title_asc_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
