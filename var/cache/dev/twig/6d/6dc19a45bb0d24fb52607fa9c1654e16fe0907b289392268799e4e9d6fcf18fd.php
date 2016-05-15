<?php

/* AppBundle:admin:base.html.twig */
class __TwigTemplate_b87709a17a36abfaac077ea62091e1e4a4c780f84a95a311614979a54806746b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'navbar' => array($this, 'block_navbar'),
            'topbar' => array($this, 'block_topbar'),
            'body' => array($this, 'block_body'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15e63a27f78f7a56b517a6e8fbea02d0c3f07755c9854d195caaf17f21852d00 = $this->env->getExtension("native_profiler");
        $__internal_15e63a27f78f7a56b517a6e8fbea02d0c3f07755c9854d195caaf17f21852d00->enter($__internal_15e63a27f78f7a56b517a6e8fbea02d0c3f07755c9854d195caaf17f21852d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:admin:base.html.twig"));

        // line 1
        $context["usuario"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array());
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"es\"> <!--<![endif]-->
<head>
    <title>Cabañas Wanfried - BackEnd !!</title>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Google Font: Open Sans -->
    <link rel=\"stylesheet\"
          href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic\">
    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Oswald:400,300,700\">

    ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a30bb4e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a30bb4e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/a30bb4e_part_1.css");
            // line 25
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "a30bb4e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a30bb4e") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/a30bb4e.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "
    ";
        // line 29
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/admin/admin.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/plugins/select2/select2.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/plugins/select2/select2-bootstrap.css"), "html", null, true);
        echo "\">
    <!-- <link href=\"./css/custom.css\" rel=\"stylesheet\">-->
    ";
        // line 35
        echo "
    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\">


    <!-- Limitar IE anteriores -->
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\">
            <img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\"
                 height=\"42\" width=\"820\"
                 alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"/>
        </a>
    </div>
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/plugins/modernizr/modernizr.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/plugins/modernizr/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 60
        echo "    ";
        // line 61
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/libs/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>



    ";
        // line 65
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1e643b1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1e643b1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1e643b1_part_1.js");
            // line 66
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "1e643b1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1e643b1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1e643b1.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 68
        echo "


    <script src=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>


</head>

<body class=\"";
        // line 76
        $this->displayBlock('id', $context, $blocks);
        echo " \">

<div id=\"wrapper\">
    <header class=\"navbar navbar-inverse\" role=\"banner\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Cambiar Navegaci&ocute;n</span>
                    <i class=\"fa fa-cog\"></i>
                </button>

                <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"navbar-brand navbar-brand-img\">
                    <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/winfried_logo_tras.png"), "html", null, true);
        echo "\" alt=\"Winfried\">
                </a>
            </div>
            ";
        // line 91
        $this->displayBlock('navbar', $context, $blocks);
        // line 94
        echo "        </div>
        <!-- /.container -->
    </header>
    ";
        // line 97
        $this->displayBlock('topbar', $context, $blocks);
        // line 100
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "</div>
<!-- /#wrapper -->

<footer class=\"footer\">
    <div class=\"container\">
        <p class=\"pull-left\">";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("base.footer.derechos"), "html", null, true);
        echo "</p>
    </div>
</footer>

<!-- Modal -->
<div class=\"modal fade\" id=\"modal-load\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
</div>
<!-- /.modal -->

<!--[if lt IE 9]>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/libs/excanvas.compiled.js"), "html", null, true);
        echo " \"></script>
<![endif]-->

";
        // line 121
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f10a762_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f10a762_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/f10a762_part_1.js");
            // line 122
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "f10a762"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f10a762") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/f10a762.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 124
        echo "


";
        // line 128
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rbsoftabmgenerador/fileupload/js/fileinput.min.js"), "html", null, true);
        echo " \"></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/plugins/select2/select2.js"), "html", null, true);
        echo " \"></script>

";
        // line 131
        $this->displayBlock('javascript_footer', $context, $blocks);
        // line 133
        echo "
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/admin/admin.js"), "html", null, true);
        echo " \"></script>

</body>
</html>
";
        
        $__internal_15e63a27f78f7a56b517a6e8fbea02d0c3f07755c9854d195caaf17f21852d00->leave($__internal_15e63a27f78f7a56b517a6e8fbea02d0c3f07755c9854d195caaf17f21852d00_prof);

    }

    // line 76
    public function block_id($context, array $blocks = array())
    {
        $__internal_5a097300583a4689fbc7075a8832343673dd31ce500c13df5aa935f921c36e71 = $this->env->getExtension("native_profiler");
        $__internal_5a097300583a4689fbc7075a8832343673dd31ce500c13df5aa935f921c36e71->enter($__internal_5a097300583a4689fbc7075a8832343673dd31ce500c13df5aa935f921c36e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_5a097300583a4689fbc7075a8832343673dd31ce500c13df5aa935f921c36e71->leave($__internal_5a097300583a4689fbc7075a8832343673dd31ce500c13df5aa935f921c36e71_prof);

    }

    // line 91
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_56e8811e5ec38ca532bc4f5471cc2054b093ced486c2bacabc878ec32544f9fe = $this->env->getExtension("native_profiler");
        $__internal_56e8811e5ec38ca532bc4f5471cc2054b093ced486c2bacabc878ec32544f9fe->enter($__internal_56e8811e5ec38ca532bc4f5471cc2054b093ced486c2bacabc878ec32544f9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 92
        echo "                ";
        $this->loadTemplate("includes/navbar.html.twig", "AppBundle:admin:base.html.twig", 92)->display($context);
        // line 93
        echo "            ";
        
        $__internal_56e8811e5ec38ca532bc4f5471cc2054b093ced486c2bacabc878ec32544f9fe->leave($__internal_56e8811e5ec38ca532bc4f5471cc2054b093ced486c2bacabc878ec32544f9fe_prof);

    }

    // line 97
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_72e052d26ce3d97f81a23a331ca6ca1568925fb2cd99c2b3ed68c99555028174 = $this->env->getExtension("native_profiler");
        $__internal_72e052d26ce3d97f81a23a331ca6ca1568925fb2cd99c2b3ed68c99555028174->enter($__internal_72e052d26ce3d97f81a23a331ca6ca1568925fb2cd99c2b3ed68c99555028174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 98
        echo "        ";
        $this->loadTemplate("AppBundle:admin/Includes:menu.html.twig", "AppBundle:admin:base.html.twig", 98)->display($context);
        // line 99
        echo "    ";
        
        $__internal_72e052d26ce3d97f81a23a331ca6ca1568925fb2cd99c2b3ed68c99555028174->leave($__internal_72e052d26ce3d97f81a23a331ca6ca1568925fb2cd99c2b3ed68c99555028174_prof);

    }

    // line 100
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b19e81e486ce1fdc51e2d6e11098478820c06acb518c5031c72a47283b64583 = $this->env->getExtension("native_profiler");
        $__internal_6b19e81e486ce1fdc51e2d6e11098478820c06acb518c5031c72a47283b64583->enter($__internal_6b19e81e486ce1fdc51e2d6e11098478820c06acb518c5031c72a47283b64583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 101
        echo "        cuerpo
    ";
        
        $__internal_6b19e81e486ce1fdc51e2d6e11098478820c06acb518c5031c72a47283b64583->leave($__internal_6b19e81e486ce1fdc51e2d6e11098478820c06acb518c5031c72a47283b64583_prof);

    }

    // line 131
    public function block_javascript_footer($context, array $blocks = array())
    {
        $__internal_4cb9fc741ddb3247681f3dd509ca0c3ab02ceb4f7c511aa6d8ed1b070a7c6382 = $this->env->getExtension("native_profiler");
        $__internal_4cb9fc741ddb3247681f3dd509ca0c3ab02ceb4f7c511aa6d8ed1b070a7c6382->enter($__internal_4cb9fc741ddb3247681f3dd509ca0c3ab02ceb4f7c511aa6d8ed1b070a7c6382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript_footer"));

        
        $__internal_4cb9fc741ddb3247681f3dd509ca0c3ab02ceb4f7c511aa6d8ed1b070a7c6382->leave($__internal_4cb9fc741ddb3247681f3dd509ca0c3ab02ceb4f7c511aa6d8ed1b070a7c6382_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:admin:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 131,  324 => 101,  318 => 100,  311 => 99,  308 => 98,  302 => 97,  295 => 93,  292 => 92,  286 => 91,  274 => 76,  262 => 134,  259 => 133,  257 => 131,  252 => 129,  247 => 128,  242 => 124,  228 => 122,  224 => 121,  218 => 118,  205 => 108,  198 => 103,  195 => 100,  193 => 97,  188 => 94,  186 => 91,  180 => 88,  176 => 87,  162 => 76,  154 => 71,  149 => 68,  135 => 66,  131 => 65,  123 => 61,  121 => 60,  117 => 58,  113 => 57,  89 => 35,  84 => 32,  80 => 31,  74 => 29,  71 => 27,  57 => 25,  53 => 24,  29 => 2,  27 => 1,);
    }
}
/* {% set usuario = app.user %}*/
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>*/
/* <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>*/
/* <html class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>*/
/* <html class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!-->*/
/* <html lang="es"> <!--<![endif]-->*/
/* <head>*/
/*     <title>Cabañas Wanfried - BackEnd !!</title>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <!-- Google Font: Open Sans -->*/
/*     <link rel="stylesheet"*/
/*           href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic">*/
/*     <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">*/
/* */
/*     {% stylesheets '@stylesheets' %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset_url }}"/>*/
/*     {% endstylesheets %}*/
/* */
/*     {# se coloca temporalmente #}*/
/*     <link rel="stylesheet" href="{{ asset( 'bundles/app/css/admin/admin.css') }}">*/
/* */
/*     <link rel="stylesheet" href="{{ asset( 'assets/js/plugins/select2/select2.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset( 'assets/js/plugins/select2/select2-bootstrap.css') }}">*/
/*     <!-- <link href="./css/custom.css" rel="stylesheet">-->*/
/*     {#<link href="{{ asset('bundles/autogestion/css/jquery.msgbox.css') }}" media="screen" rel="stylesheet"          type="text/css"/>#}*/
/* */
/*     <!-- Favicon -->*/
/*     <link rel="shortcut icon" href="favicon.ico">*/
/* */
/* */
/*     <!-- Limitar IE anteriores -->*/
/*     <!--[if lt IE 8]>*/
/*     <div style=' clear: both; text-align:center; position: relative;'>*/
/*         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">*/
/*             <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"*/
/*                  height="42" width="820"*/
/*                  alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>*/
/*         </a>*/
/*     </div>*/
/*     <![endif]-->*/
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <script src="{{ asset("assets/js/plugins/modernizr/modernizr.js") }}"></script>*/
/*     <script src="{{ asset("assets/js/plugins/modernizr/modernizr.custom.js") }}"></script>*/
/*     {#<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>#}*/
/*     {#<script>window.jQuery || document.write('{{ asset("bundles/app/js/libs/jquery-2.1.3.min.js") }}')</script>#}*/
/*     <script src="{{ asset("assets/js/libs/jquery-2.1.3.min.js") }}"></script>*/
/* */
/* */
/* */
/*     {% javascripts '@javascripts_header' %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/* */
/* */
/*     <script src="{{ path('fos_js_routing_js', {"callback": "fos.Router.setData"}) }}"></script>*/
/* */
/* */
/* </head>*/
/* */
/* <body class="{% block id '' %} ">*/
/* */
/* <div id="wrapper">*/
/*     <header class="navbar navbar-inverse" role="banner">*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="sr-only">Cambiar Navegaci&ocute;n</span>*/
/*                     <i class="fa fa-cog"></i>*/
/*                 </button>*/
/* */
/*                 <a href="{{ path('homepage') }}" class="navbar-brand navbar-brand-img">*/
/*                     <img src="{{ asset("images/winfried_logo_tras.png") }}" alt="Winfried">*/
/*                 </a>*/
/*             </div>*/
/*             {% block navbar %}*/
/*                 {% include 'includes/navbar.html.twig' %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </header>*/
/*     {% block topbar %}*/
/*         {% include 'AppBundle:admin/Includes:menu.html.twig' %}*/
/*     {% endblock %}*/
/*     {% block body %}*/
/*         cuerpo*/
/*     {% endblock body %}*/
/* </div>*/
/* <!-- /#wrapper -->*/
/* */
/* <footer class="footer">*/
/*     <div class="container">*/
/*         <p class="pull-left">{{ "base.footer.derechos" | trans }}</p>*/
/*     </div>*/
/* </footer>*/
/* */
/* <!-- Modal -->*/
/* <div class="modal fade" id="modal-load" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* </div>*/
/* <!-- /.modal -->*/
/* */
/* <!--[if lt IE 9]>*/
/* <script src="{{ asset('assets/js/libs/excanvas.compiled.js')}} "></script>*/
/* <![endif]-->*/
/* */
/* {% javascripts '@javascripts_footer' %}*/
/* <script type="text/javascript" src="{{ asset_url }}"></script>*/
/* {% endjavascripts %}*/
/* */
/* */
/* */
/* {#Para upload#}*/
/* <script src="{{ asset('bundles/rbsoftabmgenerador/fileupload/js/fileinput.min.js')}} "></script>*/
/* <script src="{{ asset('assets/js/plugins/select2/select2.js')}} "></script>*/
/* */
/* {% block javascript_footer %}*/
/* {% endblock %}*/
/* */
/* <script src="{{ asset('bundles/app/js/admin/admin.js')}} "></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
