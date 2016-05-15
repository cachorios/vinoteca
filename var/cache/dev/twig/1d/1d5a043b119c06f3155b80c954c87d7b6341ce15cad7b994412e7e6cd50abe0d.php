<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b1dd0ecfb3282e6f00b85b1c9a67c214d7196b8919a7bd2c1c0c33643bc7dc97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ca4447138980030aca9b682dc2837883ee05cb6ecabecb5c71891f424b448b5 = $this->env->getExtension("native_profiler");
        $__internal_4ca4447138980030aca9b682dc2837883ee05cb6ecabecb5c71891f424b448b5->enter($__internal_4ca4447138980030aca9b682dc2837883ee05cb6ecabecb5c71891f424b448b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ca4447138980030aca9b682dc2837883ee05cb6ecabecb5c71891f424b448b5->leave($__internal_4ca4447138980030aca9b682dc2837883ee05cb6ecabecb5c71891f424b448b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2d127c86b78bb3f2441919059841d7dbec4ccc7a9678be182b5a7ab7564cba5 = $this->env->getExtension("native_profiler");
        $__internal_f2d127c86b78bb3f2441919059841d7dbec4ccc7a9678be182b5a7ab7564cba5->enter($__internal_f2d127c86b78bb3f2441919059841d7dbec4ccc7a9678be182b5a7ab7564cba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f2d127c86b78bb3f2441919059841d7dbec4ccc7a9678be182b5a7ab7564cba5->leave($__internal_f2d127c86b78bb3f2441919059841d7dbec4ccc7a9678be182b5a7ab7564cba5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e72a6d95f7905a19dc869afa465fdb0692df699ea1eb93dfcc4bbf258f2b384e = $this->env->getExtension("native_profiler");
        $__internal_e72a6d95f7905a19dc869afa465fdb0692df699ea1eb93dfcc4bbf258f2b384e->enter($__internal_e72a6d95f7905a19dc869afa465fdb0692df699ea1eb93dfcc4bbf258f2b384e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e72a6d95f7905a19dc869afa465fdb0692df699ea1eb93dfcc4bbf258f2b384e->leave($__internal_e72a6d95f7905a19dc869afa465fdb0692df699ea1eb93dfcc4bbf258f2b384e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_76bfb9b9410f1b1b4058457e4071832c70606f4b95f68f126d2d515029cc29fb = $this->env->getExtension("native_profiler");
        $__internal_76bfb9b9410f1b1b4058457e4071832c70606f4b95f68f126d2d515029cc29fb->enter($__internal_76bfb9b9410f1b1b4058457e4071832c70606f4b95f68f126d2d515029cc29fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_76bfb9b9410f1b1b4058457e4071832c70606f4b95f68f126d2d515029cc29fb->leave($__internal_76bfb9b9410f1b1b4058457e4071832c70606f4b95f68f126d2d515029cc29fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
