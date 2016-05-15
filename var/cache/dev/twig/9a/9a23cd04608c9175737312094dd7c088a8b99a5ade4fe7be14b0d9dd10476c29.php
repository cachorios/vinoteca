<?php

/* AppBundle:admin:layout.html.twig */
class __TwigTemplate_97e7e1f17b32c4db13e4ec1a441ed24271c5bb8d2748c2eef2a579cb54ac62d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:admin:base.html.twig", "AppBundle:admin:layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'workarea' => array($this, 'block_workarea'),
            'contenido' => array($this, 'block_contenido'),
            'navbar' => array($this, 'block_navbar'),
            'topbar' => array($this, 'block_topbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:admin:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7de8e23a4f8fcf3d7b9c6c4181d6f4482e8b0b73baf707f033faa4702e98fa70 = $this->env->getExtension("native_profiler");
        $__internal_7de8e23a4f8fcf3d7b9c6c4181d6f4482e8b0b73baf707f033faa4702e98fa70->enter($__internal_7de8e23a4f8fcf3d7b9c6c4181d6f4482e8b0b73baf707f033faa4702e98fa70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7de8e23a4f8fcf3d7b9c6c4181d6f4482e8b0b73baf707f033faa4702e98fa70->leave($__internal_7de8e23a4f8fcf3d7b9c6c4181d6f4482e8b0b73baf707f033faa4702e98fa70_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_afb4caa567f97ff6565f55be7f739c0bccc5b5c60f405de5c45ac32dd3f8f49a = $this->env->getExtension("native_profiler");
        $__internal_afb4caa567f97ff6565f55be7f739c0bccc5b5c60f405de5c45ac32dd3f8f49a->enter($__internal_afb4caa567f97ff6565f55be7f739c0bccc5b5c60f405de5c45ac32dd3f8f49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"content\">
        <div class=\"container\">
            ";
        // line 6
        $this->displayBlock('container', $context, $blocks);
        // line 15
        echo "        </div>
        <!-- /.container -->
    </div><!-- .content -->

";
        
        $__internal_afb4caa567f97ff6565f55be7f739c0bccc5b5c60f405de5c45ac32dd3f8f49a->leave($__internal_afb4caa567f97ff6565f55be7f739c0bccc5b5c60f405de5c45ac32dd3f8f49a_prof);

    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        $__internal_7ad5a22c09c9b692b6c704def36231475873c56b56948cd31d82a0ff1b5d605e = $this->env->getExtension("native_profiler");
        $__internal_7ad5a22c09c9b692b6c704def36231475873c56b56948cd31d82a0ff1b5d605e->enter($__internal_7ad5a22c09c9b692b6c704def36231475873c56b56948cd31d82a0ff1b5d605e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 9
        $this->displayBlock('workarea', $context, $blocks);
        // line 10
        echo "                        ";
        $this->displayBlock('contenido', $context, $blocks);
        // line 11
        echo "                    </div>
                    <!-- /.col -->
                </div><!-- /.row -->
            ";
        
        $__internal_7ad5a22c09c9b692b6c704def36231475873c56b56948cd31d82a0ff1b5d605e->leave($__internal_7ad5a22c09c9b692b6c704def36231475873c56b56948cd31d82a0ff1b5d605e_prof);

    }

    // line 9
    public function block_workarea($context, array $blocks = array())
    {
        $__internal_a88632b4d192f714ce9c89c9699dc256d6bd5279296480f186474555ce9325ec = $this->env->getExtension("native_profiler");
        $__internal_a88632b4d192f714ce9c89c9699dc256d6bd5279296480f186474555ce9325ec->enter($__internal_a88632b4d192f714ce9c89c9699dc256d6bd5279296480f186474555ce9325ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "workarea"));

        
        $__internal_a88632b4d192f714ce9c89c9699dc256d6bd5279296480f186474555ce9325ec->leave($__internal_a88632b4d192f714ce9c89c9699dc256d6bd5279296480f186474555ce9325ec_prof);

    }

    // line 10
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_afe536921f0150e519df672b72c5b7085d830e0447a146b5661a09a1910258a2 = $this->env->getExtension("native_profiler");
        $__internal_afe536921f0150e519df672b72c5b7085d830e0447a146b5661a09a1910258a2->enter($__internal_afe536921f0150e519df672b72c5b7085d830e0447a146b5661a09a1910258a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        
        $__internal_afe536921f0150e519df672b72c5b7085d830e0447a146b5661a09a1910258a2->leave($__internal_afe536921f0150e519df672b72c5b7085d830e0447a146b5661a09a1910258a2_prof);

    }

    // line 21
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_998c7c392a17333632c5a819cfc55837b8a1269959ab91d80dd3dfde1ed4fea8 = $this->env->getExtension("native_profiler");
        $__internal_998c7c392a17333632c5a819cfc55837b8a1269959ab91d80dd3dfde1ed4fea8->enter($__internal_998c7c392a17333632c5a819cfc55837b8a1269959ab91d80dd3dfde1ed4fea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 22
        echo "    ";
        $this->loadTemplate(":includes:navbar.html.twig", "AppBundle:admin:layout.html.twig", 22)->display($context);
        
        $__internal_998c7c392a17333632c5a819cfc55837b8a1269959ab91d80dd3dfde1ed4fea8->leave($__internal_998c7c392a17333632c5a819cfc55837b8a1269959ab91d80dd3dfde1ed4fea8_prof);

    }

    // line 25
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_c60088507392a65466035cbb062fcabe3805279bbea737c4b95d9880a94b6e4c = $this->env->getExtension("native_profiler");
        $__internal_c60088507392a65466035cbb062fcabe3805279bbea737c4b95d9880a94b6e4c->enter($__internal_c60088507392a65466035cbb062fcabe3805279bbea737c4b95d9880a94b6e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 26
        echo "    ";
        $this->loadTemplate("AppBundle:admin/Includes:menu.html.twig", "AppBundle:admin:layout.html.twig", 26)->display($context);
        
        $__internal_c60088507392a65466035cbb062fcabe3805279bbea737c4b95d9880a94b6e4c->leave($__internal_c60088507392a65466035cbb062fcabe3805279bbea737c4b95d9880a94b6e4c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:admin:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 26,  123 => 25,  115 => 22,  109 => 21,  98 => 10,  87 => 9,  77 => 11,  74 => 10,  72 => 9,  68 => 7,  62 => 6,  51 => 15,  49 => 6,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:admin:base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <div class="content">*/
/*         <div class="container">*/
/*             {% block container %}*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         {% block workarea %}{% endblock %}*/
/*                         {% block contenido %}{% endblock %}*/
/*                     </div>*/
/*                     <!-- /.col -->*/
/*                 </div><!-- /.row -->*/
/*             {% endblock container %}*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </div><!-- .content -->*/
/* */
/* {% endblock body %}*/
/* */
/* {% block navbar %}*/
/*     {% include ':includes:navbar.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block topbar %}*/
/*     {% include 'AppBundle:admin/Includes:menu.html.twig' %}*/
/* {% endblock %}*/
/* */
/* */
/* {#{% block javascript_footer %}#}*/
/*     {#{{ parent() }}#}*/
/* */
/*     {#&#123;&#35;Para upload&#35;&#125;#}*/
/*     {#<script src="{{ asset('admin/admin.js')}} "></script>#}*/
/* {#{% endblock %}#}*/
