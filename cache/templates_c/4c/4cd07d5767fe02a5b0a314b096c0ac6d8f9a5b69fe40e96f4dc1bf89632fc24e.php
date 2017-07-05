<?php

/* videos/videos.twig */
class __TwigTemplate_8dec43692a0e516078c59aa1eb0310326ebfed9defdf31f2ecb17de675d6a05f extends Twig_Template
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
