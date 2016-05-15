<?php

/* AppBundle:admin/Includes:menu.html.twig */
class __TwigTemplate_23ea366bd30cb619942945610c24c70ac5967657e6b4b50e73944236f3123c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f8a3dcfff4e623e35339f20dabd069a717441469d04da0d11604f924c15f87e = $this->env->getExtension("native_profiler");
        $__internal_3f8a3dcfff4e623e35339f20dabd069a717441469d04da0d11604f924c15f87e->enter($__internal_3f8a3dcfff4e623e35339f20dabd069a717441469d04da0d11604f924c15f87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin/Includes:menu.html.twig"));

        // line 1
        $context["menu"] = $this->loadTemplate(":includes:gen_menu.html.twig", "AppBundle:admin/Includes:menu.html.twig", 1);
        // line 2
        echo "
<div class=\"mainnav\">
    <div class=\"container\">

        <a data-target=\".mainnav-collapse\" data-toggle=\"collapse\" class=\"mainnav-toggle\">
            <span class=\"sr-only\">Toggle navigation</span>
            <i class=\"fa fa-bars\"></i>
        </a>

        <nav role=\"navigation\" class=\"collapse mainnav-collapse\">
            ";
        // line 13
        echo "                ";
        // line 14
        echo "                ";
        // line 15
        echo "            ";
        // line 16
        echo "            ";
        echo $context["menu"]->getmenu("Inicio", $this->env->getExtension('routing')->getPath("homepage_admin"));
        echo "
                ";
        // line 17
        echo $context["menu"]->getitem("Panel", "fa-dashboard", $this->env->getExtension('routing')->getPath("homepage_admin"));
        echo "
            ";
        // line 18
        echo $context["menu"]->getfinmenu();
        echo "

                ";
        // line 20
        echo $context["menu"]->getmenu("Catalogo", "#");
        echo "
                    ";
        // line 21
        echo $context["menu"]->getitem("Categorías", "fa-dashboard", $this->env->getExtension('routing')->getPath("categoria"));
        echo "
                    ";
        // line 23
        echo "                        ";
        // line 24
        echo "                        ";
        // line 25
        echo "                    ";
        // line 26
        echo "                    ";
        // line 27
        echo "                    ";
        // line 28
        echo "                    ";
        // line 29
        echo "                    ";
        // line 30
        echo "
                    ";
        // line 32
        echo "                        ";
        // line 33
        echo "                        ";
        // line 34
        echo "
                    ";
        // line 36
        echo "
                    ";
        // line 37
        echo $context["menu"]->getitem("Productos", "fa-dashboard", $this->env->getExtension('routing')->getPath("producto"));
        echo "
                    ";
        // line 38
        echo $context["menu"]->getitem("Reposiciones", "fa-dashboard", $this->env->getExtension('routing')->getPath("reposicion"));
        echo "
                ";
        // line 39
        echo $context["menu"]->getfinmenu();
        echo "

                ";
        // line 41
        echo $context["menu"]->getmenu("Configuración", "#");
        echo "
                    ";
        // line 42
        echo $context["menu"]->getitem("Contenidos", "fa-dashboard", $this->env->getExtension('routing')->getPath("contenido"));
        echo "
                    ";
        // line 43
        echo $context["menu"]->getitem("Proveedores", "fa-dashboard", $this->env->getExtension('routing')->getPath("proveedor"));
        echo "

                ";
        // line 45
        echo $context["menu"]->getfinmenu();
        echo "

                ";
        // line 47
        echo $context["menu"]->getmenu("Seguridad", "#");
        echo "
                    ";
        // line 48
        echo $context["menu"]->getitem("Usuarios", "fa-dashboard", "#");
        echo "
                    ";
        // line 50
        echo "                    ";
        // line 51
        echo "                        ";
        // line 52
        echo "                        ";
        // line 53
        echo "                    ";
        // line 54
        echo "                ";
        echo $context["menu"]->getfinmenu();
        echo "




        </nav>
    </div> <!-- /.container -->
</div>



";
        
        $__internal_3f8a3dcfff4e623e35339f20dabd069a717441469d04da0d11604f924c15f87e->leave($__internal_3f8a3dcfff4e623e35339f20dabd069a717441469d04da0d11604f924c15f87e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:admin/Includes:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  136 => 53,  134 => 52,  132 => 51,  130 => 50,  126 => 48,  122 => 47,  117 => 45,  112 => 43,  108 => 42,  104 => 41,  99 => 39,  95 => 38,  91 => 37,  88 => 36,  85 => 34,  83 => 33,  81 => 32,  78 => 30,  76 => 29,  74 => 28,  72 => 27,  70 => 26,  68 => 25,  66 => 24,  64 => 23,  60 => 21,  56 => 20,  51 => 18,  47 => 17,  42 => 16,  40 => 15,  38 => 14,  36 => 13,  24 => 2,  22 => 1,);
    }
}
/* {% import ':includes:gen_menu.html.twig' as menu %}*/
/* */
/* <div class="mainnav">*/
/*     <div class="container">*/
/* */
/*         <a data-target=".mainnav-collapse" data-toggle="collapse" class="mainnav-toggle">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <i class="fa fa-bars"></i>*/
/*         </a>*/
/* */
/*         <nav role="navigation" class="collapse mainnav-collapse">*/
/*             {#<form role="search" class="mainnav-form pull-right">#}*/
/*                 {#<input type="text" placeholder="Search" class="form-control input-md mainnav-search-query">#}*/
/*                 {#<button class="btn btn-sm mainnav-form-btn"><i class="fa fa-search"></i></button>#}*/
/*             {#</form>#}*/
/*             {{ menu.menu('Inicio',path('homepage_admin')) }}*/
/*                 {{ menu.item('Panel', 'fa-dashboard', path('homepage_admin'))  }}*/
/*             {{ menu.finmenu() }}*/
/* */
/*                 {{ menu.menu('Catalogo','#') }}*/
/*                     {{ menu.item('Categorías', 'fa-dashboard', path('categoria'))  }}*/
/*                     {#{{ menu.submenu('Comercio', 'fa-dashboard')  }}#}*/
/*                         {#{{ menu.item('Comercio', 'fa-dashboard', '#')  }}#}*/
/*                         {#{{ menu.item('Espectaculo Público', 'fa-dashboard', path('escomercio'))  }}#}*/
/*                     {#{{ menu.finsubmenu() }}#}*/
/*                     {#{{ menu.item('Convenio', 'fa-dashboard', path('convenio'))  }}#}*/
/*                     {#{{ menu.item('Intimación y Boleta de deuda', 'fa-dashboard', '#')  }}#}*/
/*                     {#{{ menu.item('Carnet Sanitario', 'fa-dashboard', '#')  }}#}*/
/*                     {#{{ menu.item('Cementerio', 'fa-dashboard', path('unidad'))  }}#}*/
/* */
/*                     {#{{ menu.submenu('Dominio Público', 'fa-dashboard')  }}#}*/
/*                         {#{{ menu.item('Administración Dominio Público','fa-dashboard', path('dominio') ) }}#}*/
/*                         {#{{ menu.item('Administración DDJJ','fa-dashboard', path('ddjj_new') ) }}#}*/
/* */
/*                     {#{{ menu.finsubmenu() }}#}*/
/* */
/*                     {{ menu.item('Productos', 'fa-dashboard', path("producto"))  }}*/
/*                     {{ menu.item('Reposiciones', 'fa-dashboard', path("reposicion"))  }}*/
/*                 {{ menu.finmenu() }}*/
/* */
/*                 {{ menu.menu('Configuración','#') }}*/
/*                     {{ menu.item('Contenidos','fa-dashboard',path('contenido')) }}*/
/*                     {{ menu.item('Proveedores','fa-dashboard',path('proveedor')) }}*/
/* */
/*                 {{ menu.finmenu() }}*/
/* */
/*                 {{ menu.menu('Seguridad','#') }}*/
/*                     {{ menu.item('Usuarios','fa-dashboard','#') }}*/
/*                     {#{{ menu.item('Solicitudes de Adhesión','fa-dashboard',path('solicitud')) }}#}*/
/*                     {#{{ menu.submenu('Parametros','fa-dashboard') }}#}*/
/*                         {#{{ menu.item('Entes Recaudadores','fa-dashboard',path('enterecaudador')) }}#}*/
/*                         {#{{ menu.item('Tasas por Ente Recaudador','fa-dashboard',path('tasaporente')) }}#}*/
/*                     {#{{ menu.finsubmenu() }}#}*/
/*                 {{ menu.finmenu() }}*/
/* */
/* */
/* */
/* */
/*         </nav>*/
/*     </div> <!-- /.container -->*/
/* </div>*/
/* */
/* */
/* */
/* */
