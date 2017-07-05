<?php

/* platforms/platforms.twig */
class __TwigTemplate_aac477602b2d455b0f81ff93837bee9e789bcc88aeecff223e3895a445ecbf83 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "platforms/platforms.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("platforms/platforms_content.twig", "platforms/platforms.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "platforms/platforms.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "platforms/platforms.twig";
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
/* {% include 'platforms/platforms_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
