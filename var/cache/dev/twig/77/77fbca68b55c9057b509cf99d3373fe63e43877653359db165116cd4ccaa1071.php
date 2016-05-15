<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_11da766ea44cafe1b68d5bfc2f43f2e1396980275b3cac90b077969e5a3d156c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f45588a68a80ea7de1d272e1f739fb4147e8bafdbd7c6c7ae881513051180e09 = $this->env->getExtension("native_profiler");
        $__internal_f45588a68a80ea7de1d272e1f739fb4147e8bafdbd7c6c7ae881513051180e09->enter($__internal_f45588a68a80ea7de1d272e1f739fb4147e8bafdbd7c6c7ae881513051180e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f45588a68a80ea7de1d272e1f739fb4147e8bafdbd7c6c7ae881513051180e09->leave($__internal_f45588a68a80ea7de1d272e1f739fb4147e8bafdbd7c6c7ae881513051180e09_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_007d037ed6384d883532372cb6d656b3e500c5fa0d5e22cfdc8ef64c7ca00ee1 = $this->env->getExtension("native_profiler");
        $__internal_007d037ed6384d883532372cb6d656b3e500c5fa0d5e22cfdc8ef64c7ca00ee1->enter($__internal_007d037ed6384d883532372cb6d656b3e500c5fa0d5e22cfdc8ef64c7ca00ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_007d037ed6384d883532372cb6d656b3e500c5fa0d5e22cfdc8ef64c7ca00ee1->leave($__internal_007d037ed6384d883532372cb6d656b3e500c5fa0d5e22cfdc8ef64c7ca00ee1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b74473501806054051a04485bdfe38200488e21276f3e74bd149aee662950ea0 = $this->env->getExtension("native_profiler");
        $__internal_b74473501806054051a04485bdfe38200488e21276f3e74bd149aee662950ea0->enter($__internal_b74473501806054051a04485bdfe38200488e21276f3e74bd149aee662950ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b74473501806054051a04485bdfe38200488e21276f3e74bd149aee662950ea0->leave($__internal_b74473501806054051a04485bdfe38200488e21276f3e74bd149aee662950ea0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df3854d4471056a6eb2afd3a3728587ad3ebf5c6c3bfe35b3278dd23f6355f73 = $this->env->getExtension("native_profiler");
        $__internal_df3854d4471056a6eb2afd3a3728587ad3ebf5c6c3bfe35b3278dd23f6355f73->enter($__internal_df3854d4471056a6eb2afd3a3728587ad3ebf5c6c3bfe35b3278dd23f6355f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_df3854d4471056a6eb2afd3a3728587ad3ebf5c6c3bfe35b3278dd23f6355f73->leave($__internal_df3854d4471056a6eb2afd3a3728587ad3ebf5c6c3bfe35b3278dd23f6355f73_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
