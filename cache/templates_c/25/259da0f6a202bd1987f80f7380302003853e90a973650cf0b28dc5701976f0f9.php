<?php

/* home/home.twig */
class __TwigTemplate_b434a7a8d26a4ddfd0300e9b677c7e1dd67db2915bf5b0e4e652abb364879600 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "home/home.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("home/home_content.twig", "home/home.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "home/home.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "home/home.twig";
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
/* {% include 'home/home_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
/* */
