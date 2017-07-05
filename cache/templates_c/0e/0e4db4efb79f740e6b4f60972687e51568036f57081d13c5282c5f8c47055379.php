<?php

/* videos/videos_asc.twig */
class __TwigTemplate_91069246f3d7dd3ff6f2349c3e9b55fc9d29fbb00c953a4067d6f91b4d2a3272 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "videos/videos_asc.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("videos/videos_content_asc.twig", "videos/videos_asc.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "videos/videos_asc.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "videos/videos_asc.twig";
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
/* {% include 'videos/videos_content_asc.twig' %}*/
/* {% include 'common/footer.twig' %}*/
