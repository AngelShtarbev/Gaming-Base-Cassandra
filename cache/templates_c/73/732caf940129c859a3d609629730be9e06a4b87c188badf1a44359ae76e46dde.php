<?php

/* movies/movies.twig */
class __TwigTemplate_0d147a9969423996df220952dc0926d1f66b8982a313ba41fc4cf05cdd5329d9 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>

    <h4>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movies"]) ? $context["movies"] : null), "name", array(), "array"), "html", null, true);
        echo "</h4>
    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["movies"]) ? $context["movies"] : null), "image", array(), "array"), "icon_url", array(), "array"), "html", null, true);
        echo "\" alt=\"\">
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "movies/movies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  32 => 12,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="viewport"*/
/*           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">*/
/*     <meta http-equiv="X-UA-Compatible" content="ie=edge">*/
/*     <title>Document</title>*/
/* </head>*/
/* <body>*/
/* */
/*     <h4>{{ movies['name'] }}</h4>*/
/*     <img src="{{ movies['image']['icon_url'] }}" alt="">*/
/* </body>*/
/* </html>*/
