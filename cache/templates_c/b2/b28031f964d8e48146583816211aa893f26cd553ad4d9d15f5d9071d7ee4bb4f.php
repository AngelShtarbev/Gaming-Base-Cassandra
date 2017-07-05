<?php

/* games/game.twig */
class __TwigTemplate_4dd479c44f53661aebb57cd629eb7fedfe357379d2b3b38093ce188adb3c8fd1 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "games/game.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("games/game_content.twig", "games/game.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "games/game.twig", 3)->display($context);
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "games/game.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'common/header.twig' %}*/
/* {% include 'games/game_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
/* */
/* */
