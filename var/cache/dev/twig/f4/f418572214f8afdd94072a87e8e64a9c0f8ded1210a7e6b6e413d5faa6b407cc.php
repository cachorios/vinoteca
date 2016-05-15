<?php

/* ::portlet.html.twig */
class __TwigTemplate_6053b952edf36bf9a5d3c0a7de4ca1d72325c98724214f49dce5ee032dfde329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'in_header' => array($this, 'block_in_header'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09aa5c7e151ae9acebbbb07af25f9228e5d7825be6df71ed05f53f08052ff413 = $this->env->getExtension("native_profiler");
        $__internal_09aa5c7e151ae9acebbbb07af25f9228e5d7825be6df71ed05f53f08052ff413->enter($__internal_09aa5c7e151ae9acebbbb07af25f9228e5d7825be6df71ed05f53f08052ff413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::portlet.html.twig"));

        // line 1
        echo "<div class=\"portlet \">

    <h3 class=\"portlet-title \">
        <u>";
        // line 4
        echo (isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo"));
        echo "</u>
        ";
        // line 5
        $this->displayBlock('in_header', $context, $blocks);
        // line 6
        echo "    </h3>

    <div class=\"portlet-body \">
        ";
        // line 9
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 10
        echo "    </div> <!-- /.portlet-body -->

</div>";
        
        $__internal_09aa5c7e151ae9acebbbb07af25f9228e5d7825be6df71ed05f53f08052ff413->leave($__internal_09aa5c7e151ae9acebbbb07af25f9228e5d7825be6df71ed05f53f08052ff413_prof);

    }

    // line 5
    public function block_in_header($context, array $blocks = array())
    {
        $__internal_328e30242eaaf52fc69a1f5813b004d5eb7f356cb960ace58702f65b1d434a80 = $this->env->getExtension("native_profiler");
        $__internal_328e30242eaaf52fc69a1f5813b004d5eb7f356cb960ace58702f65b1d434a80->enter($__internal_328e30242eaaf52fc69a1f5813b004d5eb7f356cb960ace58702f65b1d434a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "in_header"));

        
        $__internal_328e30242eaaf52fc69a1f5813b004d5eb7f356cb960ace58702f65b1d434a80->leave($__internal_328e30242eaaf52fc69a1f5813b004d5eb7f356cb960ace58702f65b1d434a80_prof);

    }

    // line 9
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_9c3d517e996a229e29fd59d13646464c922fa4b49c6be1871248c2558ec4b6f1 = $this->env->getExtension("native_profiler");
        $__internal_9c3d517e996a229e29fd59d13646464c922fa4b49c6be1871248c2558ec4b6f1->enter($__internal_9c3d517e996a229e29fd59d13646464c922fa4b49c6be1871248c2558ec4b6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        echo "Contenido";
        
        $__internal_9c3d517e996a229e29fd59d13646464c922fa4b49c6be1871248c2558ec4b6f1->leave($__internal_9c3d517e996a229e29fd59d13646464c922fa4b49c6be1871248c2558ec4b6f1_prof);

    }

    public function getTemplateName()
    {
        return "::portlet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  51 => 5,  42 => 10,  40 => 9,  35 => 6,  33 => 5,  29 => 4,  24 => 1,);
    }
}
/* <div class="portlet ">*/
/* */
/*     <h3 class="portlet-title ">*/
/*         <u>{{ titulo | raw }}</u>*/
/*         {% block in_header %}{% endblock %}*/
/*     </h3>*/
/* */
/*     <div class="portlet-body ">*/
/*         {% block cuerpo %}Contenido{% endblock %}*/
/*     </div> <!-- /.portlet-body -->*/
/* */
/* </div>*/
