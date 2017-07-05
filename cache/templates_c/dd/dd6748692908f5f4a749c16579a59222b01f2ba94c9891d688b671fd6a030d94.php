<?php

/* platforms/games_platform_id_asc.twig */
class __TwigTemplate_76d384b51fc5d233bd83376b87c76e151b8b53e315e3568bf45a019e01915bd7 extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "platforms/games_platform_id_asc.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("platforms/games_platform_id_asc_content.twig", "platforms/games_platform_id_asc.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "platforms/games_platform_id_asc.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "platforms/games_platform_id_asc.twig";
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
/* {% include 'platforms/games_platform_id_asc_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
