<?php

/* AppBundle:frontend:base.html.twig */
class __TwigTemplate_25208a941dbcc36fe905667ec4f2d998c0dcb4d1a4727863ea2e5fc366e14c70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'navbar' => array($this, 'block_navbar'),
            'topbar' => array($this, 'block_topbar'),
            'pre_body' => array($this, 'block_pre_body'),
            'body' => array($this, 'block_body'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["usuario"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array());
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"es\" xmlns=\"http://www.w3.org/1999/html\"> <!--<![endif]-->
<head>
    <title>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("empresa.leyenda", array(), "vista"), "html", null, true);
        echo "!!</title>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"RBSoft\">


    <!-- Google Web Fonts -->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\">

    ";
        // line 25
        echo "    <link href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/frontend/bootstrap.min.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    ";
        // line 27
        echo "    <link href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>

    ";
        // line 29
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "929f201_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_929f201_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/929f201_part_1.css");
            // line 30
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "929f201"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_929f201") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/929f201.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 32
        echo "

    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/plugins/modernizr/modernizr.js"), "html", null, true);
        echo "\"></script>

    <script src=\"http://code.jquery.com/jquery-2.1.3.min.js\"></script>
    <script>window.jQuery || document.write('";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/libs/jquery-2.1.3.min.js"), "html", null, true);
        echo "')</script>

    <script src=\"https://code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>

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


    ";
        // line 62
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1e643b1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1e643b1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1e643b1_part_1.js");
            // line 63
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "1e643b1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1e643b1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1e643b1.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 65
        echo "
    <script src=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>


</head>

<body class=\"";
        // line 71
        $this->displayBlock('id', $context, $blocks);
        echo " \">

<!-- Header Section Starts -->
<header id=\"header-area\">
<!-- Header Top Starts -->
";
        // line 76
        $this->displayBlock('navbar', $context, $blocks);
        // line 192
        echo "<!-- Header Top Ends -->
<!-- Starts -->
";
        // line 194
        $this->displayBlock('topbar', $context, $blocks);
        // line 242
        echo "</header>
<!-- Header Section Ends -->

";
        // line 245
        $this->displayBlock('pre_body', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('body', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "<footer id=\"footer-area\">
    ";
        // line 255
        echo "    <div class=\"footer-links\">
        ";
        // line 257
        echo "        <div class=\"container\">
            ";
        // line 259
        echo "            <div class=\"col-md-2 col-sm-6\">
                ";
        // line 261
        echo "                ";
        // line 262
        echo "                    ";
        // line 263
        echo "                    ";
        // line 264
        echo "                    ";
        // line 265
        echo "                    ";
        // line 266
        echo "                ";
        // line 267
        echo "            </div>
            ";
        // line 269
        echo "            ";
        // line 270
        echo "            <div class=\"col-md-2 col-sm-6\">
                ";
        // line 272
        echo "                ";
        // line 273
        echo "                    ";
        // line 274
        echo "                    ";
        // line 275
        echo "                    ";
        // line 276
        echo "                    ";
        // line 277
        echo "                    ";
        // line 278
        echo "                ";
        // line 279
        echo "            </div>
            ";
        // line 281
        echo "            ";
        // line 282
        echo "            <div class=\"col-md-2 col-sm-6\">
                ";
        // line 284
        echo "                ";
        // line 285
        echo "                    ";
        // line 286
        echo "                    ";
        // line 287
        echo "                    ";
        // line 288
        echo "                    ";
        // line 289
        echo "                    ";
        // line 290
        echo "                ";
        // line 291
        echo "            </div>
            ";
        // line 293
        echo "            ";
        // line 294
        echo "            <div class=\"col-md-2 col-sm-6\">
                ";
        // line 296
        echo "                ";
        // line 297
        echo "                    ";
        // line 298
        echo "                    ";
        // line 299
        echo "                    ";
        // line 300
        echo "                    ";
        // line 301
        echo "                ";
        // line 302
        echo "            </div>
            ";
        // line 304
        echo "            ";
        // line 305
        echo "            <div class=\"col-md-4 col-sm-12 last\">
                ";
        // line 306
        $this->loadTemplate("AppBundle:frontend:includes/contacto.html.twig", "AppBundle:frontend:base.html.twig", 306)->display($context);
        // line 307
        echo "
            </div>
            ";
        // line 310
        echo "        </div>
        ";
        // line 312
        echo "    </div>
    ";
        // line 314
        echo "    ";
        // line 315
        echo "    <div class=\"copyright\">
        ";
        // line 316
        $this->loadTemplate("AppBundle:frontend:includes/copyright.html.twig", "AppBundle:frontend:base.html.twig", 316)->display($context);
        // line 317
        echo "    </div>
    ";
        // line 319
        echo "</footer>
";
        // line 321
        echo "
";
        // line 323
        echo "
<!--[if lt IE 9]>
<script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/libs/excanvas.compiled.js"), "html", null, true);
        echo " \"></script>
<![endif]-->

";
        // line 328
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "57ea7aa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57ea7aa_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/57ea7aa_part_1.js");
            // line 329
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "57ea7aa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57ea7aa") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/57ea7aa.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 331
        echo "

";
        // line 333
        $this->displayBlock('javascript_footer', $context, $blocks);
        // line 335
        echo "
<div id=\"veil\"></div>
<div id=\"prLoading\">Cargando...</div>

</body>
</html>
";
    }

    // line 71
    public function block_id($context, array $blocks = array())
    {
        echo "";
    }

    // line 76
    public function block_navbar($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        // line 78
        echo "    <div class=\"header-top\">
        <div class=\"container\">
            <!-- Header Links Starts -->
            <div class=\"col-sm-8 col-xs-12\">
                <div class=\"header-links\">
                    <ul class=\"nav navbar-nav pull-left\">
                        <li>
                            <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                                <i class=\"fa fa-home\" title=\"Home\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-sm hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inicio"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
                            </a>
                        </li>
                        ";
        // line 93
        echo "                            ";
        // line 94
        echo "                                ";
        // line 95
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 96
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 97
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 98
        echo "                            ";
        // line 99
        echo "                        ";
        // line 100
        echo "                        <li>
                            <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("cartdisplay");
        echo "\">
                                <i class=\"fa fa-shopping-cart\" title=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Carro de Compra"), "html", null, true);
        echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-sm hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Carro de Compra"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
                            </a>
                        </li>

                        ";
        // line 110
        echo "                        ";
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 111
            echo "                        <li>
                            <a href=\"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">
                                <i class=\"fa fa-unlock\" title=\"Register\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-sm hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Registrarse"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
                            </a>
                        </li>
                        ";
        } else {
            // line 120
            echo "                        <li>
                            <a href=\"";
            // line 121
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">
                                <i class=\"fa fa-user\" title=\"My Account\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-sm hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Perfil"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
                            </a>
                        </li>
                        ";
        }
        // line 129
        echo "
                        <li>
                            ";
        // line 131
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 132
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                    <i class=\"fa fa-sign-out\" title=\"salir\"></i>
                                    <span class=\"hidden-sm hidden-xs\"> ";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</span>
                                </a>
                            ";
        } else {
            // line 137
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-lock\" title=\"Ingresar\"></i><span class=\"hidden-sm hidden-xs\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</span></a>
                            ";
        }
        // line 139
        echo "                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header Links Ends -->
            <!-- Currency & Languages Starts -->
            ";
        // line 145
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 146
            echo "
            <div class=\"col-sm-4 col-xs-12\">
                <div class=\"pull-right\">
                    ";
            // line 150
            echo "
                    <a class=\"button_nuevo btn btn-sm btn-primary\" href=\"";
            // line 151
            echo $this->env->getExtension('routing')->getPath("homepage_admin");
            echo "\">
                        Ingresar al área de Administración
                    </a>

                    ";
            // line 156
            echo "                    ";
            // line 157
            echo "                        ";
            // line 158
            echo "                            ";
            // line 159
            echo "                            ";
            // line 160
            echo "                        ";
            // line 161
            echo "                        ";
            // line 162
            echo "                            ";
            // line 163
            echo "                            ";
            // line 164
            echo "                            ";
            // line 165
            echo "                        ";
            // line 166
            echo "                    ";
            // line 167
            echo "                    ";
            // line 168
            echo "                    ";
            // line 169
            echo "                    ";
            // line 170
            echo "                        ";
            // line 171
            echo "                            ";
            // line 172
            echo "                            ";
            // line 173
            echo "                        ";
            // line 174
            echo "                        ";
            // line 175
            echo "                            ";
            // line 176
            echo "                                ";
            // line 177
            echo "                            ";
            // line 178
            echo "                            ";
            // line 179
            echo "                                ";
            // line 180
            echo "                            ";
            // line 181
            echo "                        ";
            // line 182
            echo "                    ";
            // line 183
            echo "                    ";
            // line 184
            echo "                </div>

            </div>
            ";
        }
        // line 188
        echo "            <!-- Currency & Languages Ends -->
        </div>
    </div>
";
    }

    // line 194
    public function block_topbar($context, array $blocks = array())
    {
        // line 195
        echo "
    <div class=\"container\">
        <!-- Main Header Starts -->
        <div class=\"main-header\">
            <div class=\"row\">
                <!-- Logo Starts -->
                <div class=\"col-md-6\">
                    <div id=\"logo\">
                        <a href=\"";
        // line 203
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/wnfried_logo_frontend.png"), "html", null, true);
        echo "\"
                                                  title=\"Cabañas Banfried\" alt=\"Cabañas Banfried\" class=\"img-responsive\"/></a>
                    </div>
                </div>
                <!-- Logo Starts -->
                <!-- Search Starts -->
                <div class=\"col-md-3\">
                    <div id=\"search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-lg\" type=\"button\">
                                        <i class=\"fa fa-search\"></i>
                                    </button>
\t\t\t\t\t\t\t\t  </span>
                        </div>
                    </div>
                </div>
                <!-- Search Ends -->
                <!-- Shopping Cart Starts -->
                <div class=\"col-md-3\">
                    <div id=\"cart\" class=\"btn-group btn-block\">
                        ";
        // line 225
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("cartdisplay", array("size" => "small")));
        echo "
                    </div>
                </div>
                <!-- Shopping Cart Ends -->
            </div>
        </div>
        <!-- Main Header Ends -->
        ";
        // line 233
        echo "

        ";
        // line 235
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:frontend/Default:menufrontend"));
        echo "


        ";
        // line 239
        echo "    </div>
    <!-- Ends -->
";
    }

    // line 245
    public function block_pre_body($context, array $blocks = array())
    {
    }

    // line 247
    public function block_body($context, array $blocks = array())
    {
        // line 248
        echo "

";
    }

    // line 333
    public function block_javascript_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AppBundle:frontend:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  653 => 333,  647 => 248,  644 => 247,  639 => 245,  633 => 239,  627 => 235,  623 => 233,  613 => 225,  586 => 203,  576 => 195,  573 => 194,  566 => 188,  560 => 184,  558 => 183,  556 => 182,  554 => 181,  552 => 180,  550 => 179,  548 => 178,  546 => 177,  544 => 176,  542 => 175,  540 => 174,  538 => 173,  536 => 172,  534 => 171,  532 => 170,  530 => 169,  528 => 168,  526 => 167,  524 => 166,  522 => 165,  520 => 164,  518 => 163,  516 => 162,  514 => 161,  512 => 160,  510 => 159,  508 => 158,  506 => 157,  504 => 156,  497 => 151,  494 => 150,  489 => 146,  487 => 145,  479 => 139,  471 => 137,  465 => 134,  459 => 132,  457 => 131,  453 => 129,  445 => 124,  439 => 121,  436 => 120,  428 => 115,  422 => 112,  419 => 111,  416 => 110,  408 => 104,  403 => 102,  399 => 101,  396 => 100,  394 => 99,  392 => 98,  390 => 97,  388 => 96,  386 => 95,  384 => 94,  382 => 93,  375 => 88,  369 => 85,  360 => 78,  358 => 77,  355 => 76,  349 => 71,  339 => 335,  337 => 333,  333 => 331,  319 => 329,  315 => 328,  309 => 325,  305 => 323,  302 => 321,  299 => 319,  296 => 317,  294 => 316,  291 => 315,  289 => 314,  286 => 312,  283 => 310,  279 => 307,  277 => 306,  274 => 305,  272 => 304,  269 => 302,  267 => 301,  265 => 300,  263 => 299,  261 => 298,  259 => 297,  257 => 296,  254 => 294,  252 => 293,  249 => 291,  247 => 290,  245 => 289,  243 => 288,  241 => 287,  239 => 286,  237 => 285,  235 => 284,  232 => 282,  230 => 281,  227 => 279,  225 => 278,  223 => 277,  221 => 276,  219 => 275,  217 => 274,  215 => 273,  213 => 272,  210 => 270,  208 => 269,  205 => 267,  203 => 266,  201 => 265,  199 => 264,  197 => 263,  195 => 262,  193 => 261,  190 => 259,  187 => 257,  184 => 255,  181 => 253,  178 => 251,  176 => 247,  173 => 246,  171 => 245,  166 => 242,  164 => 194,  160 => 192,  158 => 76,  150 => 71,  142 => 66,  139 => 65,  125 => 63,  121 => 62,  93 => 37,  87 => 34,  83 => 32,  69 => 30,  65 => 29,  59 => 27,  54 => 25,  39 => 12,  27 => 2,  25 => 1,);
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
/* <html lang="es" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->*/
/* <head>*/
/*     <title>{{ "empresa.leyenda" | trans({}, "vista") }}!!</title>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="RBSoft">*/
/* */
/* */
/*     <!-- Google Web Fonts -->*/
/*     <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700">*/
/*     <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">*/
/* */
/*     {##-- Bootstrap CSS --##}*/
/*     <link href='{{ asset("bundles/app/css/frontend/bootstrap.min.css") }}' rel='stylesheet' type='text/css'>*/
/*     {##-- Font Awesome CSS --##}*/
/*     <link href='{{ asset("assets/css/font-awesome.min.css") }}' rel='stylesheet' type='text/css'>*/
/* */
/*     {% stylesheets '@stylesheets_frontend' %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset_url }}"/>*/
/*     {% endstylesheets %}*/
/* */
/* */
/*     <script src="{{ asset("assets/js/plugins/modernizr/modernizr.js") }}"></script>*/
/* */
/*     <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>*/
/*     <script>window.jQuery || document.write('{{ asset("assets/js/libs/jquery-2.1.3.min.js") }}')</script>*/
/* */
/*     <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>*/
/* */
/*     <!-- Favicon -->*/
/*     <link rel="shortcut icon" href="favicon.ico">*/
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
/* */
/*     {% javascripts '@javascripts_header' %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*     <script src="{{ path('fos_js_routing_js', {"callback": "fos.Router.setData"}) }}"></script>*/
/* */
/* */
/* </head>*/
/* */
/* <body class="{% block id '' %} ">*/
/* */
/* <!-- Header Section Starts -->*/
/* <header id="header-area">*/
/* <!-- Header Top Starts -->*/
/* {% block navbar %}*/
/*     {#{% include 'includes/navbar.html.twig' %}#}*/
/*     <div class="header-top">*/
/*         <div class="container">*/
/*             <!-- Header Links Starts -->*/
/*             <div class="col-sm-8 col-xs-12">*/
/*                 <div class="header-links">*/
/*                     <ul class="nav navbar-nav pull-left">*/
/*                         <li>*/
/*                             <a href="{{ path("homepage") }}">*/
/*                                 <i class="fa fa-home" title="Home"></i>*/
/* 											<span class="hidden-sm hidden-xs">*/
/* 												{{ "Inicio" | trans }}*/
/* 											</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         {#<li>#}*/
/*                             {#<a href="#">#}*/
/*                                 {#<i class="fa fa-heart" title="Wish List"></i>#}*/
/* 											{#<span class="hidden-sm hidden-xs">#}*/
/* 												{#{{ "Desos" | trans }}#}*/
/* 											{#</span>#}*/
/*                             {#</a>#}*/
/*                         {#</li>#}*/
/*                         <li>*/
/*                             <a href="{{ path("cartdisplay") }}">*/
/*                                 <i class="fa fa-shopping-cart" title="{{ "Carro de Compra" | trans }}"></i>*/
/* 											<span class="hidden-sm hidden-xs">*/
/* 												{{ "Carro de Compra" | trans }}*/
/* 											</span>*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                         {#Verfifica si esta logeado en el sistema y quita register y avilita profile#}*/
/*                         {% if not app.user %}*/
/*                         <li>*/
/*                             <a href="{{ path('fos_user_registration_register') }}">*/
/*                                 <i class="fa fa-unlock" title="Register"></i>*/
/* 											<span class="hidden-sm hidden-xs">*/
/* 												{{ "Registrarse" | trans }}*/
/* 											</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         {% else %}*/
/*                         <li>*/
/*                             <a href="{{ path('fos_user_profile_show') }}">*/
/*                                 <i class="fa fa-user" title="My Account"></i>*/
/* 											<span class="hidden-sm hidden-xs">*/
/* 												{{ "Perfil" | trans }}*/
/* 											</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         {% endif %}*/
/* */
/*                         <li>*/
/*                             {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                                     <i class="fa fa-sign-out" title="salir"></i>*/
/*                                     <span class="hidden-sm hidden-xs"> {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</span>*/
/*                                 </a>*/
/*                             {% else %}*/
/*                                 <a href="{{ path('fos_user_security_login') }}"><i class="fa fa-lock" title="Ingresar"></i><span class="hidden-sm hidden-xs"> {{ 'layout.login'|trans({}, 'FOSUserBundle') }}</span></a>*/
/*                             {% endif %}*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- Header Links Ends -->*/
/*             <!-- Currency & Languages Starts -->*/
/*             {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*             <div class="col-sm-4 col-xs-12">*/
/*                 <div class="pull-right">*/
/*                     {#área de Administración#}*/
/* */
/*                     <a class="button_nuevo btn btn-sm btn-primary" href="{{ path('homepage_admin') }}">*/
/*                         Ingresar al área de Administración*/
/*                     </a>*/
/* */
/*                     {#<!-- Currency Starts -->#}*/
/*                     {#<div class="btn-group">#}*/
/*                         {#<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">#}*/
/*                             {#Currency#}*/
/*                             {#<i class="fa fa-caret-down"></i>#}*/
/*                         {#</button>#}*/
/*                         {#<ul class="pull-right dropdown-menu">#}*/
/*                             {#<li><a tabindex="-1" href="#">Pound </a></li>#}*/
/*                             {#<li><a tabindex="-1" href="#">US Dollar</a></li>#}*/
/*                             {#<li><a tabindex="-1" href="#">Euro</a></li>#}*/
/*                         {#</ul>#}*/
/*                     {#</div>#}*/
/*                     {#<!-- Currency Ends -->#}*/
/*                     {#<!-- Languages Starts -->#}*/
/*                     {#<div class="btn-group">#}*/
/*                         {#<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">#}*/
/*                             {#Language#}*/
/*                             {#<i class="fa fa-caret-down"></i>#}*/
/*                         {#</button>#}*/
/*                         {#<ul class="pull-right dropdown-menu">#}*/
/*                             {#<li>#}*/
/*                                 {#<a tabindex="-1" href="#">English</a>#}*/
/*                             {#</li>#}*/
/*                             {#<li>#}*/
/*                                 {#<a tabindex="-1" href="#">French</a>#}*/
/*                             {#</li>#}*/
/*                         {#</ul>#}*/
/*                     {#</div>#}*/
/*                     {#<!-- Languages Ends -->#}*/
/*                 </div>*/
/* */
/*             </div>*/
/*             {% endif %}*/
/*             <!-- Currency & Languages Ends -->*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* <!-- Header Top Ends -->*/
/* <!-- Starts -->*/
/* {% block topbar %}*/
/* */
/*     <div class="container">*/
/*         <!-- Main Header Starts -->*/
/*         <div class="main-header">*/
/*             <div class="row">*/
/*                 <!-- Logo Starts -->*/
/*                 <div class="col-md-6">*/
/*                     <div id="logo">*/
/*                         <a href="{{ path("homepage") }}"><img src="{{ asset("images/wnfried_logo_frontend.png") }}"*/
/*                                                   title="Cabañas Banfried" alt="Cabañas Banfried" class="img-responsive"/></a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- Logo Starts -->*/
/*                 <!-- Search Starts -->*/
/*                 <div class="col-md-3">*/
/*                     <div id="search">*/
/*                         <div class="input-group">*/
/*                             <input type="text" class="form-control input-lg" placeholder="Search">*/
/* 								  <span class="input-group-btn">*/
/* 									<button class="btn btn-lg" type="button">*/
/*                                         <i class="fa fa-search"></i>*/
/*                                     </button>*/
/* 								  </span>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- Search Ends -->*/
/*                 <!-- Shopping Cart Starts -->*/
/*                 <div class="col-md-3">*/
/*                     <div id="cart" class="btn-group btn-block">*/
/*                         {{ render(path("cartdisplay",{'size': 'small'})) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- Shopping Cart Ends -->*/
/*             </div>*/
/*         </div>*/
/*         <!-- Main Header Ends -->*/
/*         {#<!-- Main Menu Starts -->#}*/
/* */
/* */
/*         {{ render(controller("AppBundle:frontend/Default:menufrontend")) }}*/
/* */
/* */
/*         {#<!-- Main Menu Ends -->#}*/
/*     </div>*/
/*     <!-- Ends -->*/
/* {% endblock %}*/
/* </header>*/
/* <!-- Header Section Ends -->*/
/* */
/* {% block pre_body %}{% endblock pre_body %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* {% endblock body %}*/
/* */
/* {#<!-- Footer Section Starts -->#}*/
/* <footer id="footer-area">*/
/*     {#<!-- Footer Links Starts -->#}*/
/*     <div class="footer-links">*/
/*         {#<!-- Container Starts -->#}*/
/*         <div class="container">*/
/*             {#<!-- Information Links Starts -->#}*/
/*             <div class="col-md-2 col-sm-6">*/
/*                 {#<h5>Information</h5>#}*/
/*                 {#<ul>#}*/
/*                     {#<li><a href="about.html">About Us</a></li>#}*/
/*                     {#<li><a href="#">Delivery Information</a></li>#}*/
/*                     {#<li><a href="#">Privacy Policy</a></li>#}*/
/*                     {#<li><a href="#">Terms &amp; Conditions</a></li>#}*/
/*                 {#</ul>#}*/
/*             </div>*/
/*             {#<!-- Information Links Ends -->#}*/
/*             {#<!-- My Account Links Starts -->#}*/
/*             <div class="col-md-2 col-sm-6">*/
/*                 {#<h5>My Account</h5>#}*/
/*                 {#<ul>#}*/
/*                     {#<li><a href="#">My orders</a></li>#}*/
/*                     {#<li><a href="#">My merchandise returns</a></li>#}*/
/*                     {#<li><a href="#">My credit slips</a></li>#}*/
/*                     {#<li><a href="#">My addresses</a></li>#}*/
/*                     {#<li><a href="#">My personal info</a></li>#}*/
/*                 {#</ul>#}*/
/*             </div>*/
/*             {#<!-- My Account Links Ends -->#}*/
/*             {#<!-- Customer Service Links Starts -->#}*/
/*             <div class="col-md-2 col-sm-6">*/
/*                 {#<h5>Service</h5>#}*/
/*                 {#<ul>#}*/
/*                     {#<li><a href="contact.html">Contact Us</a></li>#}*/
/*                     {#<li><a href="#">Returns</a></li>#}*/
/*                     {#<li><a href="#">Site Map</a></li>#}*/
/*                     {#<li><a href="#">Affiliates</a></li>#}*/
/*                     {#<li><a href="#">Specials</a></li>#}*/
/*                 {#</ul>#}*/
/*             </div>*/
/*             {#<!-- Customer Service Links Ends -->#}*/
/*             {#<!-- Follow Us Links Starts -->#}*/
/*             <div class="col-md-2 col-sm-6">*/
/*                 {#<h5>Follow Us</h5>#}*/
/*                 {#<ul>#}*/
/*                     {#<li><a href="#">Facebook</a></li>#}*/
/*                     {#<li><a href="#">Twitter</a></li>#}*/
/*                     {#<li><a href="#">RSS</a></li>#}*/
/*                     {#<li><a href="#">YouTube</a></li>#}*/
/*                 {#</ul>#}*/
/*             </div>*/
/*             {#<!-- Follow Us Links Ends -->#}*/
/*             {#<!-- Contact Us Starts -->#}*/
/*             <div class="col-md-4 col-sm-12 last">*/
/*                 {% include "AppBundle:frontend:includes/contacto.html.twig" %}*/
/* */
/*             </div>*/
/*             {#<!-- Contact Us Ends -->#}*/
/*         </div>*/
/*         {#<!-- Container Ends -->#}*/
/*     </div>*/
/*     {#<!-- Footer Links Ends -->#}*/
/*     {#<!-- Copyright Area Starts -->#}*/
/*     <div class="copyright">*/
/*         {% include "AppBundle:frontend:includes/copyright.html.twig" %}*/
/*     </div>*/
/*     {#<!-- Copyright Area Ends -->#}*/
/* </footer>*/
/* {#<!-- Footer Section Ends -->#}*/
/* */
/* {#<!-- JavaScript Files -->#}*/
/* */
/* <!--[if lt IE 9]>*/
/* <script src="{{ asset('assets/js/libs/excanvas.compiled.js')}} "></script>*/
/* <![endif]-->*/
/* */
/* {% javascripts '@javascripts_footer_frontend' %}*/
/* <script type="text/javascript" src="{{ asset_url }}"></script>*/
/* {% endjavascripts %}*/
/* */
/* */
/* {% block javascript_footer %}*/
/* {% endblock %}*/
/* */
/* <div id="veil"></div>*/
/* <div id="prLoading">Cargando...</div>*/
/* */
/* </body>*/
/* </html>*/
/* */
