<?php

/* platforms/platforms.twig */
class __TwigTemplate_5a948c11efdd90c414d4345deb86b63cea8677101125c02bb4ef9f4626c9c905 extends Twig_Template
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
