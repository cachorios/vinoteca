<?php

/* AppBundle:frontend:layout_with_sidebar.html.twig */
class __TwigTemplate_1542e781412920ce9c85c1869381cfaeff8aceb24d7cab83d946eae364147013 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
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
    }

    // line 8
    public function block_contentId($context, array $blocks = array())
    {
        echo "";
    }

    // line 9
    public function block_workarea($context, array $blocks = array())
    {
    }

    // line 10
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 24
    public function block_javascript_footer($context, array $blocks = array())
    {
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
        return array (  105 => 27,  100 => 25,  97 => 24,  92 => 10,  87 => 9,  81 => 8,  75 => 11,  72 => 10,  70 => 9,  66 => 8,  63 => 7,  60 => 6,  55 => 21,  51 => 19,  49 => 18,  43 => 14,  41 => 6,  36 => 3,  33 => 2,  11 => 1,);
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
