<?php

/* videos/videos.twig */
class __TwigTemplate_bdf8ac2257aefa7dda818058a1c7edfbd84cf41fd626a2b602cb0e6e631f2c6a extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "videos/videos.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("videos/videos_content.twig", "videos/videos.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "videos/videos.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "videos/videos.twig";
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
/* {% include 'videos/videos_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
