<?php

/* platforms/games_platform_id_desc.twig */
class __TwigTemplate_941527246be5728ea3efa72150c6c17314af7244ab40202da74d735686755e6f extends Twig_Template
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
        $this->loadTemplate("common/header.twig", "platforms/games_platform_id_desc.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("platforms/games_platform_id_desc_content.twig", "platforms/games_platform_id_desc.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("common/footer.twig", "platforms/games_platform_id_desc.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "platforms/games_platform_id_desc.twig";
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
/* {% include 'platforms/games_platform_id_desc_content.twig' %}*/
/* {% include 'common/footer.twig' %}*/
