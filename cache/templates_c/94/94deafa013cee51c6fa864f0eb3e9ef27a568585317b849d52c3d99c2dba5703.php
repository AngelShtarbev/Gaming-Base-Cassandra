<?php

/* games/games_title_desc.twig */
class __TwigTemplate_55721d383cb9cabdb32c2ba3b9678eb3f6f5a26f972b7207ad5ca361d6e2f106 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "games/games_title_desc.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("games/games_title_desc_content.twig", "games/games_title_desc.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "games/games_title_desc.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "games/games_title_desc.twig";
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
/* {% include 'games/games_title_desc_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
