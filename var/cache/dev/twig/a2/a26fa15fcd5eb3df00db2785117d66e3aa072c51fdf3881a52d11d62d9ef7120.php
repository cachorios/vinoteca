<?php

/* AppBundle:frontend:layout_with_sidebar.html.twig */
class __TwigTemplate_24f60b58fe6f0e6f5a8756b01c3e8fe21018461b848c5e482bc68af5a4ac84cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:frontend:base.html.twig", "AppBundle:frontend:layout_with_sidebar.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'contentId' => array($this, 'block_contentId'),
            'workarea' => array($this, 'block_workarea'),
            'contenido' => array($this, 'block_contenido'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:frontend:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2feb1069901b25f5df19997cc430d4f35fd8687a4e1a2b7b6950d4de961f37d4 = $this->env->getExtension("native_profiler");
        $__internal_2feb1069901b25f5df19997cc430d4f35fd8687a4e1a2b7b6950d4de961f37d4->enter($__internal_2feb1069901b25f5df19997cc430d4f35fd8687a4e1a2b7b6950d4de961f37d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:frontend:layout_with_sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2feb1069901b25f5df19997cc430d4f35fd8687a4e1a2b7b6950d4de961f37d4->leave($__internal_2feb1069901b25f5df19997cc430d4f35fd8687a4e1a2b7b6950d4de961f37d4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_25e12f20232d50d0bb11dd98f17eeaebc50fb4221dae8c12fc1c38d71a946e82 = $this->env->getExtension("native_profiler");
        $__internal_25e12f20232d50d0bb11dd98f17eeaebc50fb4221dae8c12fc1c38d71a946e82->enter($__internal_25e12f20232d50d0bb11dd98f17eeaebc50fb4221dae8c12fc1c38d71a946e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"content\">
    <div class=\"container\">
        ";
        // line 6
        $this->displayBlock('container', $context, $blocks);
        // line 14
        echo "    </div><!-- /.container -->
</div><!-- .content -->


";
        // line 18
        if (array_key_exists("logout", $context)) {
            // line 19
            echo "    ";
            $context["logout_path"] = $this->env->getExtension('routing')->getPath("usuario_logout");
        }
        // line 21
        echo "
";
        
        $__internal_25e12f20232d50d0bb11dd98f17eeaebc50fb4221dae8c12fc1c38d71a946e82->leave($__internal_25e12f20232d50d0bb11dd98f17eeaebc50fb4221dae8c12fc1c38d71a946e82_prof);

    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        $__internal_0829da18fd33922e3d2f6bdce480c7ff24f4fbb828ec93c6967ec032bd50a26f = $this->env->getExtension("native_profiler");
        $__internal_0829da18fd33922e3d2f6bdce480c7ff24f4fbb828ec93c6967ec032bd50a26f->enter($__internal_0829da18fd33922e3d2f6bdce480c7ff24f4fbb828ec93c6967ec032bd50a26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "        <div class=\"row\">
            <div class=\"col-md-12\" id=\"";
        // line 8
        $this->displayBlock('contentId', $context, $blocks);
        echo "\">
                ";
        // line 9
        $this->displayBlock('workarea', $context, $blocks);
        // line 10
        echo "                ";
        $this->displayBlock('contenido', $context, $blocks);
        // line 11
        echo "            </div><!-- /.col -->
        </div><!-- /.row -->
        ";
        
        $__internal_0829da18fd33922e3d2f6bdce480c7ff24f4fbb828ec93c6967ec032bd50a26f->leave($__internal_0829da18fd33922e3d2f6bdce480c7ff24f4fbb828ec93c6967ec032bd50a26f_prof);

    }

    // line 8
    public function block_contentId($context, array $blocks = array())
    {
        $__internal_b8c6858b83b446e5f8b9d78fec82d2bc6878c207b38b3351d02d0d3df430fb35 = $this->env->getExtension("native_profiler");
        $__internal_b8c6858b83b446e5f8b9d78fec82d2bc6878c207b38b3351d02d0d3df430fb35->enter($__internal_b8c6858b83b446e5f8b9d78fec82d2bc6878c207b38b3351d02d0d3df430fb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentId"));

        echo "";
        
        $__internal_b8c6858b83b446e5f8b9d78fec82d2bc6878c207b38b3351d02d0d3df430fb35->leave($__internal_b8c6858b83b446e5f8b9d78fec82d2bc6878c207b38b3351d02d0d3df430fb35_prof);

    }

    // line 9
    public function block_workarea($context, array $blocks = array())
    {
        $__internal_89692b33aae5f7bcfd25abd988847d22cc4fda9f51b4873315cd18458754160c = $this->env->getExtension("native_profiler");
        $__internal_89692b33aae5f7bcfd25abd988847d22cc4fda9f51b4873315cd18458754160c->enter($__internal_89692b33aae5f7bcfd25abd988847d22cc4fda9f51b4873315cd18458754160c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "workarea"));

        
        $__internal_89692b33aae5f7bcfd25abd988847d22cc4fda9f51b4873315cd18458754160c->leave($__internal_89692b33aae5f7bcfd25abd988847d22cc4fda9f51b4873315cd18458754160c_prof);

    }

    // line 10
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_96fca3d713ae2a82e64a47c722b681ea631bf9fc612baf45720d7268d48d4ede = $this->env->getExtension("native_profiler");
        $__internal_96fca3d713ae2a82e64a47c722b681ea631bf9fc612baf45720d7268d48d4ede->enter($__internal_96fca3d713ae2a82e64a47c722b681ea631bf9fc612baf45720d7268d48d4ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        
        $__internal_96fca3d713ae2a82e64a47c722b681ea631bf9fc612baf45720d7268d48d4ede->leave($__internal_96fca3d713ae2a82e64a47c722b681ea631bf9fc612baf45720d7268d48d4ede_prof);

    }

    // line 24
    public function block_javascript_footer($context, array $blocks = array())
    {
        $__internal_1a3a8cf43501356ef1813a27c82c66ca8707e5420f294ea92dec637091539e9e = $this->env->getExtension("native_profiler");
        $__internal_1a3a8cf43501356ef1813a27c82c66ca8707e5420f294ea92dec637091539e9e->enter($__internal_1a3a8cf43501356ef1813a27c82c66ca8707e5420f294ea92dec637091539e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript_footer"));

        // line 25
        echo "    ";
        $this->displayParentBlock("javascript_footer", $context, $blocks);
        echo "
    ";
        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rbsoftabmgenerador/fileupload//js/fileinput.min.js"), "html", null, true);
        echo " \"></script>
";
        
        $__internal_1a3a8cf43501356ef1813a27c82c66ca8707e5420f294ea92dec637091539e9e->leave($__internal_1a3a8cf43501356ef1813a27c82c66ca8707e5420f294ea92dec637091539e9e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:frontend:layout_with_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 27,  139 => 25,  133 => 24,  122 => 10,  111 => 9,  99 => 8,  90 => 11,  87 => 10,  85 => 9,  81 => 8,  78 => 7,  72 => 6,  64 => 21,  60 => 19,  58 => 18,  52 => 14,  50 => 6,  45 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends "AppBundle:frontend:base.html.twig" %}*/
/* {% block body %}*/
/* */
/* <div class="content">*/
/*     <div class="container">*/
/*         {% block container %}*/
/*         <div class="row">*/
/*             <div class="col-md-12" id="{% block contentId "" %}">*/
/*                 {% block workarea %}{% endblock %}*/
/*                 {% block contenido %}{% endblock %}*/
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/*         {% endblock container %}*/
/*     </div><!-- /.container -->*/
/* </div><!-- .content -->*/
/* */
/* */
/* {% if logout is defined %}*/
/*     {% set logout_path = path('usuario_logout') %}*/
/* {% endif %}*/
/* */
/* {% endblock body %}*/
/* */
/* {% block javascript_footer %}*/
/*     {{ parent() }}*/
/*     {#Para upload#}*/
/*     <script src="{{ asset('bundles/rbsoftabmgenerador/fileupload//js/fileinput.min.js')}} "></script>*/
/* {% endblock %}*/
