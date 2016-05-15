<?php

/* AppBundle:frontend\Default:index.html.twig */
class __TwigTemplate_d4fabcb89608ad8fd563ae2f05e584f2046ed1e98b16d74c3f37a417cfa142b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:frontend:layout_with_sidebar.html.twig", "AppBundle:frontend\\Default:index.html.twig", 1);
        $this->blocks = array(
            'pre_body' => array($this, 'block_pre_body'),
            'workarea' => array($this, 'block_workarea'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:frontend:layout_with_sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pre_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        echo (isset($context["myContent"]) ? $context["myContent"] : null);
        echo "
    ";
        // line 7
        echo "    ";
    }

    // line 11
    public function block_workarea($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AppBundle:frontend\\Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  39 => 7,  34 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle:frontend:layout_with_sidebar.html.twig' %}*/
/* */
/* {% block pre_body %}*/
/*     {#{% include "@App/frontend/includes/carrusel.html.twig" %}#}*/
/*     {{ myContent | raw }}*/
/*     {#{{ myContent  }}#}*/
/*     {#{{ render(path("ultimosproductos")) }}#}*/
/* {% endblock pre_body %}*/
/* */
/* */
/* {% block workarea -%}*/
/* */
/*     {#<h2>Area Job</h2>#}*/
/* {% endblock %}*/
/* */
