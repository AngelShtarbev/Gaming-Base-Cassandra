<?php

/* videos/video.twig */
class __TwigTemplate_860f7496514505637d007b2110039e5e6cbe85b6f137cfb478b2f2e496417a03 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "videos/video.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("videos/video_content.twig", "videos/video.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "videos/video.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "videos/video.twig";
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
/* {% include 'videos/video_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
