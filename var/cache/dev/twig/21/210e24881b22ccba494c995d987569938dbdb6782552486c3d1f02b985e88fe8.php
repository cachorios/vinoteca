<?php

/* AppBundle:frontend:layout.html.twig */
class __TwigTemplate_ca6b830fd92d55a5518c60df31117f185f900c206d19b191467f9db948fc77e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:frontend:base.html.twig", "AppBundle:frontend:layout.html.twig", 1);
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
        $__internal_db7ace619acf247d1a4ef68401b69021ecd33d38f0f74142c08c4670698218e1 = $this->env->getExtension("native_profiler");
        $__internal_db7ace619acf247d1a4ef68401b69021ecd33d38f0f74142c08c4670698218e1->enter($__internal_db7ace619acf247d1a4ef68401b69021ecd33d38f0f74142c08c4670698218e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:frontend:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db7ace619acf247d1a4ef68401b69021ecd33d38f0f74142c08c4670698218e1->leave($__internal_db7ace619acf247d1a4ef68401b69021ecd33d38f0f74142c08c4670698218e1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d63264f62013e3763c118d7b4ae83035178efa81915e5a859a5d844331440ed4 = $this->env->getExtension("native_profiler");
        $__internal_d63264f62013e3763c118d7b4ae83035178efa81915e5a859a5d844331440ed4->enter($__internal_d63264f62013e3763c118d7b4ae83035178efa81915e5a859a5d844331440ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"content\">
    <div class=\"container\">
        ";
        // line 5
        $this->displayBlock('container', $context, $blocks);
        // line 13
        echo "    </div><!-- /.container -->
</div><!-- .content -->


";
        // line 17
        if (array_key_exists("logout", $context)) {
            // line 18
            echo "    ";
            $context["logout_path"] = $this->env->getExtension('routing')->getPath("usuario_logout");
        }
        // line 20
        echo "
";
        
        $__internal_d63264f62013e3763c118d7b4ae83035178efa81915e5a859a5d844331440ed4->leave($__internal_d63264f62013e3763c118d7b4ae83035178efa81915e5a859a5d844331440ed4_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_bebad2ebfd2159d1c42bb054f780875ff4ffe44fd459a2ff04e6ab114d494ffa = $this->env->getExtension("native_profiler");
        $__internal_bebad2ebfd2159d1c42bb054f780875ff4ffe44fd459a2ff04e6ab114d494ffa->enter($__internal_bebad2ebfd2159d1c42bb054f780875ff4ffe44fd459a2ff04e6ab114d494ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "        <div class=\"row\">
            <div class=\"col-md-12\" id=\"";
        // line 7
        $this->displayBlock('contentId', $context, $blocks);
        echo "\">
                ";
        // line 8
        $this->displayBlock('workarea', $context, $blocks);
        // line 9
        echo "                ";
        $this->displayBlock('contenido', $context, $blocks);
        // line 10
        echo "            </div><!-- /.col -->
        </div><!-- /.row -->
        ";
        
        $__internal_bebad2ebfd2159d1c42bb054f780875ff4ffe44fd459a2ff04e6ab114d494ffa->leave($__internal_bebad2ebfd2159d1c42bb054f780875ff4ffe44fd459a2ff04e6ab114d494ffa_prof);

    }

    // line 7
    public function block_contentId($context, array $blocks = array())
    {
        $__internal_0b0e98db3418bfaf9018d89129eaefb50f56e33e4cf741dba66cd157588b052c = $this->env->getExtension("native_profiler");
        $__internal_0b0e98db3418bfaf9018d89129eaefb50f56e33e4cf741dba66cd157588b052c->enter($__internal_0b0e98db3418bfaf9018d89129eaefb50f56e33e4cf741dba66cd157588b052c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentId"));

        echo "";
        
        $__internal_0b0e98db3418bfaf9018d89129eaefb50f56e33e4cf741dba66cd157588b052c->leave($__internal_0b0e98db3418bfaf9018d89129eaefb50f56e33e4cf741dba66cd157588b052c_prof);

    }

    // line 8
    public function block_workarea($context, array $blocks = array())
    {
        $__internal_4127c62d461225b10671d30453b86d7b4c1e6e6d52af78cac38faca40f674211 = $this->env->getExtension("native_profiler");
        $__internal_4127c62d461225b10671d30453b86d7b4c1e6e6d52af78cac38faca40f674211->enter($__internal_4127c62d461225b10671d30453b86d7b4c1e6e6d52af78cac38faca40f674211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "workarea"));

        
        $__internal_4127c62d461225b10671d30453b86d7b4c1e6e6d52af78cac38faca40f674211->leave($__internal_4127c62d461225b10671d30453b86d7b4c1e6e6d52af78cac38faca40f674211_prof);

    }

    // line 9
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_5ec187f45723c010cd6ed61ea7a947e289848500de1bf70c2a6b31a7b19f9557 = $this->env->getExtension("native_profiler");
        $__internal_5ec187f45723c010cd6ed61ea7a947e289848500de1bf70c2a6b31a7b19f9557->enter($__internal_5ec187f45723c010cd6ed61ea7a947e289848500de1bf70c2a6b31a7b19f9557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        
        $__internal_5ec187f45723c010cd6ed61ea7a947e289848500de1bf70c2a6b31a7b19f9557->leave($__internal_5ec187f45723c010cd6ed61ea7a947e289848500de1bf70c2a6b31a7b19f9557_prof);

    }

    // line 23
    public function block_javascript_footer($context, array $blocks = array())
    {
        $__internal_29b0aa7d88f301c6732cfcf4077ba95b9d0cb83125cf887948e02700d511366a = $this->env->getExtension("native_profiler");
        $__internal_29b0aa7d88f301c6732cfcf4077ba95b9d0cb83125cf887948e02700d511366a->enter($__internal_29b0aa7d88f301c6732cfcf4077ba95b9d0cb83125cf887948e02700d511366a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript_footer"));

        // line 24
        echo "    ";
        $this->displayParentBlock("javascript_footer", $context, $blocks);
        echo "
    ";
        // line 26
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rbsoftabmgenerador/fileupload//js/fileinput.min.js"), "html", null, true);
        echo " \"></script>
";
        
        $__internal_29b0aa7d88f301c6732cfcf4077ba95b9d0cb83125cf887948e02700d511366a->leave($__internal_29b0aa7d88f301c6732cfcf4077ba95b9d0cb83125cf887948e02700d511366a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:frontend:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 26,  138 => 24,  132 => 23,  121 => 9,  110 => 8,  98 => 7,  89 => 10,  86 => 9,  84 => 8,  80 => 7,  77 => 6,  71 => 5,  63 => 20,  59 => 18,  57 => 17,  51 => 13,  49 => 5,  45 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends "AppBundle:frontend:base.html.twig" %}*/
/* {% block body %}*/
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
