<?php

/* games/game.twig */
class __TwigTemplate_c902db67f73f18a716cbe5d86e68bf729a4bcfc143636da5d257354d102b9472 extends Twig_Template
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
