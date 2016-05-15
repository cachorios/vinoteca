<?php

/* AppBundle:admin/Inicio:index.html.twig */
class __TwigTemplate_9f20ef4bcf19cb8f80334fa8a3620038b4d20b048eaee64fc657db73c1c0436b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:admin:layout.html.twig", "AppBundle:admin/Inicio:index.html.twig", 1);
        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a3dc9ee8a43270c5218ef67958a4a65ac38181d9b4ce84820488e81b51e06a1 = $this->env->getExtension("native_profiler");
        $__internal_1a3dc9ee8a43270c5218ef67958a4a65ac38181d9b4ce84820488e81b51e06a1->enter($__internal_1a3dc9ee8a43270c5218ef67958a4a65ac38181d9b4ce84820488e81b51e06a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin/Inicio:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a3dc9ee8a43270c5218ef67958a4a65ac38181d9b4ce84820488e81b51e06a1->leave($__internal_1a3dc9ee8a43270c5218ef67958a4a65ac38181d9b4ce84820488e81b51e06a1_prof);

    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        $__internal_abbb3b2ea3d4c933d376efbd01d9c36ce2a90e2763efd930bbe9eebb7eb3052a = $this->env->getExtension("native_profiler");
        $__internal_abbb3b2ea3d4c933d376efbd01d9c36ce2a90e2763efd930bbe9eebb7eb3052a->enter($__internal_abbb3b2ea3d4c933d376efbd01d9c36ce2a90e2763efd930bbe9eebb7eb3052a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "inicio";
        
        $__internal_abbb3b2ea3d4c933d376efbd01d9c36ce2a90e2763efd930bbe9eebb7eb3052a->leave($__internal_abbb3b2ea3d4c933d376efbd01d9c36ce2a90e2763efd930bbe9eebb7eb3052a_prof);

    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_880c32c2757964e1113936f4e4878c85e7292c4068370f99dfd17754a238776a = $this->env->getExtension("native_profiler");
        $__internal_880c32c2757964e1113936f4e4878c85e7292c4068370f99dfd17754a238776a->enter($__internal_880c32c2757964e1113936f4e4878c85e7292c4068370f99dfd17754a238776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 6
        echo "<div class=\"layout layout-stack-sm layout-main-left\">
            <div class=\"col-sm-7 col-md-8 layout-main\">
                ";
        // line 8
        $this->loadTemplate("AppBundle:admin/Inicio:index.html.twig", "AppBundle:admin/Inicio:index.html.twig", 8, "446782890")->display(array_merge($context, array("titulo" => "Ordenes ")));
        // line 14
        echo "
                ";
        // line 16
        echo "                    ";
        // line 17
        echo "                        ";
        // line 18
        echo "                            ";
        // line 19
        echo "

                            ";
        // line 22
        echo "                        ";
        // line 23
        echo "                    ";
        // line 24
        echo "                    ";
        // line 25
        echo "                        ";
        // line 26
        echo "                            ";
        // line 27
        echo "

                            ";
        // line 30
        echo "                        ";
        // line 31
        echo "                    ";
        // line 32
        echo "                ";
        // line 33
        echo "
            </div>

            <div class=\"col-sm-5 col-md-4 layout-sidebar\">

                <div class=\"portlet\">
                    <a class=\"btn btn-primary btn-jumbo btn-block \" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("producto_new");
        echo "\">Nuevo Producto</a>
                    <br>
                    <a class=\"btn btn-secondary btn-lg btn-block \" href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("proveedor_new");
        echo "\">Nuevo Proveedor</a>
                    <br>
                    <a class=\"btn btn-secondary btn-lg btn-block \" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("reposicion_new");
        echo "\">Reposición de productos</a>

                </div>
                <!-- /.portlet -->


                <h4>Actividad reciente Log</h4>

                <div class=\"well\">

                    <ul class=\"icons-list text-md\">
                    </ul>
                </div>
                <!-- /.well -->

            </div>

        </div>
    ";
        
        $__internal_880c32c2757964e1113936f4e4878c85e7292c4068370f99dfd17754a238776a->leave($__internal_880c32c2757964e1113936f4e4878c85e7292c4068370f99dfd17754a238776a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:admin/Inicio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 43,  105 => 41,  100 => 39,  92 => 33,  90 => 32,  88 => 31,  86 => 30,  82 => 27,  80 => 26,  78 => 25,  76 => 24,  74 => 23,  72 => 22,  68 => 19,  66 => 18,  64 => 17,  62 => 16,  59 => 14,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}


/* AppBundle:admin/Inicio:index.html.twig */
class __TwigTemplate_9f20ef4bcf19cb8f80334fa8a3620038b4d20b048eaee64fc657db73c1c0436b_446782890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("::portlet.html.twig", "AppBundle:admin/Inicio:index.html.twig", 8);
        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::portlet.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a015d5a52b049ec26122c544881e5d609a13dadf21c7e84b2ae7e4f8b4929e58 = $this->env->getExtension("native_profiler");
        $__internal_a015d5a52b049ec26122c544881e5d609a13dadf21c7e84b2ae7e4f8b4929e58->enter($__internal_a015d5a52b049ec26122c544881e5d609a13dadf21c7e84b2ae7e4f8b4929e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin/Inicio:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a015d5a52b049ec26122c544881e5d609a13dadf21c7e84b2ae7e4f8b4929e58->leave($__internal_a015d5a52b049ec26122c544881e5d609a13dadf21c7e84b2ae7e4f8b4929e58_prof);

    }

    // line 9
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_65ba642d7758ef36a07ac8d3477531045eafcb7d2f2490dec0b395c4356cb95c = $this->env->getExtension("native_profiler");
        $__internal_65ba642d7758ef36a07ac8d3477531045eafcb7d2f2490dec0b395c4356cb95c->enter($__internal_65ba642d7758ef36a07ac8d3477531045eafcb7d2f2490dec0b395c4356cb95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 10
        echo "                    <span >Sin Ordenes</span>

                    ";
        
        $__internal_65ba642d7758ef36a07ac8d3477531045eafcb7d2f2490dec0b395c4356cb95c->leave($__internal_65ba642d7758ef36a07ac8d3477531045eafcb7d2f2490dec0b395c4356cb95c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:admin/Inicio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 10,  183 => 9,  160 => 8,  110 => 43,  105 => 41,  100 => 39,  92 => 33,  90 => 32,  88 => 31,  86 => 30,  82 => 27,  80 => 26,  78 => 25,  76 => 24,  74 => 23,  72 => 22,  68 => 19,  66 => 18,  64 => 17,  62 => 16,  59 => 14,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle:admin:layout.html.twig' %}*/
/* */
/* {% block id 'inicio' %}*/
/* */
/*     {% block contenido -%}*/
/*         <div class="layout layout-stack-sm layout-main-left">*/
/*             <div class="col-sm-7 col-md-8 layout-main">*/
/*                 {% embed '::portlet.html.twig' with {'titulo': 'Ordenes ' } %}*/
/*                     {% block cuerpo %}*/
/*                     <span >Sin Ordenes</span>*/
/* */
/*                     {% endblock %}*/
/*                 {% endembed %}*/
/* */
/*                 {#<div class="row">#}*/
/*                     {#<div class="col-md-6">#}*/
/*                         {#{% embed '::portlet.html.twig' with {'titulo': 'Otros ' } %}#}*/
/*                             {#{% block cuerpo %}#}*/
/* */
/* */
/*                             {#{% endblock %}#}*/
/*                         {#{% endembed %}#}*/
/*                     {#</div>#}*/
/*                     {#<div class="col-md-6">#}*/
/*                         {#{% embed '::portlet.html.twig' with {'titulo': 'Otros ' } %}#}*/
/*                             {#{% block cuerpo %}#}*/
/* */
/* */
/*                             {#{% endblock %}#}*/
/*                         {#{% endembed %}#}*/
/*                     {#</div>#}*/
/*                 {#</div>#}*/
/* */
/*             </div>*/
/* */
/*             <div class="col-sm-5 col-md-4 layout-sidebar">*/
/* */
/*                 <div class="portlet">*/
/*                     <a class="btn btn-primary btn-jumbo btn-block " href="{{ path('producto_new') }}">Nuevo Producto</a>*/
/*                     <br>*/
/*                     <a class="btn btn-secondary btn-lg btn-block " href="{{ path('proveedor_new') }}">Nuevo Proveedor</a>*/
/*                     <br>*/
/*                     <a class="btn btn-secondary btn-lg btn-block " href="{{ path('reposicion_new') }}">Reposición de productos</a>*/
/* */
/*                 </div>*/
/*                 <!-- /.portlet -->*/
/* */
/* */
/*                 <h4>Actividad reciente Log</h4>*/
/* */
/*                 <div class="well">*/
/* */
/*                     <ul class="icons-list text-md">*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- /.well -->*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*     {% endblock contenido %}*/
/* */
