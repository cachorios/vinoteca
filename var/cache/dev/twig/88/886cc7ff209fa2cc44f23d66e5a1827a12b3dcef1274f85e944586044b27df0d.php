<?php

/* UsuarioBundle:Security:login.html.twig */
class __TwigTemplate_9e86d9e36cfacb7c40c8a18e642ebffdd5c5bf71de64330da8e5eef312f1411b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:frontend:layout.html.twig", "UsuarioBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:frontend:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c36b68068898b216c9081b68c9b54ae6327f9b752629c3e0c22b7b58b3b0209 = $this->env->getExtension("native_profiler");
        $__internal_0c36b68068898b216c9081b68c9b54ae6327f9b752629c3e0c22b7b58b3b0209->enter($__internal_0c36b68068898b216c9081b68c9b54ae6327f9b752629c3e0c22b7b58b3b0209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuarioBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c36b68068898b216c9081b68c9b54ae6327f9b752629c3e0c22b7b58b3b0209->leave($__internal_0c36b68068898b216c9081b68c9b54ae6327f9b752629c3e0c22b7b58b3b0209_prof);

    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_efbb27d3ad5744e31470e57081042ca68687839b90c93e094131561d5a036c22 = $this->env->getExtension("native_profiler");
        $__internal_efbb27d3ad5744e31470e57081042ca68687839b90c93e094131561d5a036c22->enter($__internal_efbb27d3ad5744e31470e57081042ca68687839b90c93e094131561d5a036c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 6
        $this->loadTemplate("AppBundle:frontend/includes:login.html.twig", "UsuarioBundle:Security:login.html.twig", 6)->display($context);
        // line 7
        echo "
    ";
        
        $__internal_efbb27d3ad5744e31470e57081042ca68687839b90c93e094131561d5a036c22->leave($__internal_efbb27d3ad5744e31470e57081042ca68687839b90c93e094131561d5a036c22_prof);

    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  40 => 6,  34 => 4,  11 => 1,);
    }
}
/* {% extends "AppBundle:frontend:layout.html.twig" %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*     {% block contenido -%}*/
/* */
/*                {% include "AppBundle:frontend/includes:login.html.twig" %}*/
/* */
/*     {% endblock contenido %}*/
/* */
/* */
