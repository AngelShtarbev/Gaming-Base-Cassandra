<?php

/* platforms/game_by_platform.twig */
class __TwigTemplate_3f59e448dc9e9dcd93c5b903dccdbabe7c97bcecd100546ae97417f5e64173c0 extends Twig_Template
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
