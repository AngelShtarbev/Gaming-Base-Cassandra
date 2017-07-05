<?php

/* platforms/game_by_platform.twig */
class __TwigTemplate_5f7139e62b7f49e1eb4b2838802a6bb0db348b24f3631a201a18061443458666 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "platforms/game_by_platform.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("platforms/game_content.twig", "platforms/game_by_platform.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "platforms/game_by_platform.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "platforms/game_by_platform.twig";
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
/* {% include 'platforms/game_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
