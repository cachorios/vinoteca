<?php

/* AppBundle:frontend\Default:index.html.twig */
class __TwigTemplate_b520fa0e0cfdf8d30b80e41589f174cf3ebf4cb4534013df9ee4c199e453e252 extends Twig_Template
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
        $__internal_cdf60c040ad9139327e551b1953e89664fb9f12e8ec1c9bdba7bd1c4b2653802 = $this->env->getExtension("native_profiler");
        $__internal_cdf60c040ad9139327e551b1953e89664fb9f12e8ec1c9bdba7bd1c4b2653802->enter($__internal_cdf60c040ad9139327e551b1953e89664fb9f12e8ec1c9bdba7bd1c4b2653802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:frontend\\Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf60c040ad9139327e551b1953e89664fb9f12e8ec1c9bdba7bd1c4b2653802->leave($__internal_cdf60c040ad9139327e551b1953e89664fb9f12e8ec1c9bdba7bd1c4b2653802_prof);

    }

    // line 3
    public function block_pre_body($context, array $blocks = array())
    {
        $__internal_1cb76f9efaef9488c77fc3177376ea1737a15f7e984d74973d7ad1339d6f388c = $this->env->getExtension("native_profiler");
        $__internal_1cb76f9efaef9488c77fc3177376ea1737a15f7e984d74973d7ad1339d6f388c->enter($__internal_1cb76f9efaef9488c77fc3177376ea1737a15f7e984d74973d7ad1339d6f388c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_body"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        echo (isset($context["myContent"]) ? $context["myContent"] : $this->getContext($context, "myContent"));
        echo "
    ";
        // line 7
        echo "    ";
        
        $__internal_1cb76f9efaef9488c77fc3177376ea1737a15f7e984d74973d7ad1339d6f388c->leave($__internal_1cb76f9efaef9488c77fc3177376ea1737a15f7e984d74973d7ad1339d6f388c_prof);

    }

    // line 11
    public function block_workarea($context, array $blocks = array())
    {
        $__internal_826ffaa77f180427187f22e15456bb7f8d7323f3cfaf47da0c3da68a120b3a80 = $this->env->getExtension("native_profiler");
        $__internal_826ffaa77f180427187f22e15456bb7f8d7323f3cfaf47da0c3da68a120b3a80->enter($__internal_826ffaa77f180427187f22e15456bb7f8d7323f3cfaf47da0c3da68a120b3a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "workarea"));

        
        $__internal_826ffaa77f180427187f22e15456bb7f8d7323f3cfaf47da0c3da68a120b3a80->leave($__internal_826ffaa77f180427187f22e15456bb7f8d7323f3cfaf47da0c3da68a120b3a80_prof);

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
        return array (  55 => 11,  48 => 7,  43 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
