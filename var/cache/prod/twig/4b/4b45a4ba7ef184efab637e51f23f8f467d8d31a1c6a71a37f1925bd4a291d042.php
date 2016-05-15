<?php

/* AppBundle:frontend/Menu:menufrontend.html.twig */
class __TwigTemplate_0a3aaeda136cd5761513c85c0d3d69f80835751cc7a9701b8143289388b2a64b extends Twig_Template
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
        echo (isset($context["menu"]) ? $context["menu"] : null);
    }

    public function getTemplateName()
    {
        return "AppBundle:frontend/Menu:menufrontend.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ menu | raw }}*/
