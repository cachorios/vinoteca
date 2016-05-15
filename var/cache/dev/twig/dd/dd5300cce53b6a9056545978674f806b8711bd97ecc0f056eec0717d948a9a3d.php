<?php

/* :includes:navbar.html.twig */
class __TwigTemplate_f3e0794e59def294fa9b601ced66b2dcfd573080c55f2cd3c287e0e803f898d4 extends Twig_Template
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
        $__internal_953191ca9af6336e5fbea02e85bcbc2bfdfafd2620678d1a83f63d72b4b5b985 = $this->env->getExtension("native_profiler");
        $__internal_953191ca9af6336e5fbea02e85bcbc2bfdfafd2620678d1a83f63d72b4b5b985->enter($__internal_953191ca9af6336e5fbea02e85bcbc2bfdfafd2620678d1a83f63d72b4b5b985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":includes:navbar.html.twig"));

        // line 1
        echo "<nav role=\"navigation\" class=\"collapse navbar-collapse\">

    <ul class=\"nav navbar-nav noticebar navbar-left\">

        <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"./page-notifications.html\">
                <i class=\"fa fa-bell\"></i>
                <span class=\"navbar-visible-collapsed\">&nbsp;Notifications&nbsp;</span>
                <span class=\"badge badge-primary\">0</span>
            </a>

            <ul role=\"menu\" class=\"dropdown-menu noticebar-menu noticebar-hoverable\">
                <li class=\"nav-header\">
                    <div class=\"pull-left\">
                        Notifications
                    </div>

                    <div class=\"pull-right\">
                        <a href=\"javascript:;\">Mark as Read</a>
                    </div>
                </li>

                <li>
                    ";
        // line 25
        echo "                  ";
        // line 26
        echo "                    ";
        // line 27
        echo "                  ";
        // line 28
        echo "                  ";
        // line 29
        echo "                    ";
        // line 30
        echo "                    ";
        // line 31
        echo "                    ";
        // line 32
        echo "                  ";
        // line 33
        echo "                    ";
        // line 34
        echo "                </li>

                <li>
                    ";
        // line 38
        echo "                  ";
        // line 39
        echo "                    ";
        // line 40
        echo "                  ";
        // line 41
        echo "                  ";
        // line 42
        echo "                    ";
        // line 43
        echo "                    ";
        // line 44
        echo "                    ";
        // line 45
        echo "                  ";
        // line 46
        echo "                    ";
        // line 47
        echo "                </li>

                <li class=\"noticebar-menu-view-all\">
                    <a href=\"./page-notifications.html\">View All Notifications</a>
                </li>
            </ul>
        </li>



        <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"./page-notifications.html\">
                <i class=\"fa fa-envelope\"></i>
                <span class=\"navbar-visible-collapsed\">&nbsp;Messages&nbsp;</span>
            </a>

            <ul role=\"menu\" class=\"dropdown-menu noticebar-menu noticebar-hoverable\">


                <li class=\"noticebar-menu-view-all\">
                    <a href=\"./page-notifications.html\">View All Messages</a>
                </li>
            </ul>
        </li>

        <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"javascript:;\">
                <i class=\"fa fa-exclamation-triangle\"></i>
                <span class=\"navbar-visible-collapsed\">&nbsp;Alerts&nbsp;</span>
            </a>

            <ul role=\"menu\" class=\"dropdown-menu noticebar-menu noticebar-hoverable\">
                <li class=\"nav-header\">
                    <div class=\"pull-left\">
                        Alerts
                    </div>
                </li>

            </ul>
        </li>

    </ul>



    <ul class=\"nav navbar-nav navbar-right\">

        <li>
            <a href=\"javsacript:;\">Acerca de...</a>
        </li>

        <li>
            <a href=\"javascript:;\">Resources</a>
        </li>



        <li class=\"dropdown navbar-profile\">
            <a href=\"javascript:;\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
                ";
        // line 106
        $context["imagen"] = ((($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "foto", array()) == "")) ? ("images/profile.png") : ((("uploads/usuarios/" . $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "foto", array())) . ".jpg")));
        // line 107
        echo "
                <img alt=\"\" class=\"navbar-profile-avatar\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen"))), "resize", array(0 => 20, 1 => 20, 2 => "#ffffff", 3 => "center", 4 => "center"), "method"), "html", null, true);
        echo "\">
                ";
        // line 110
        echo "                <i class=\"fa fa-caret-down\"></i>
            </a>

            <ul role=\"menu\" class=\"dropdown-menu\">

                <li>
                    <a href=\"#\" id=\"user-perfil\" data-target=\"#modal-load\" title=\"Perfil\" data-tooltip>
                        <i class=\"fa fa-user\"></i>
                        &nbsp;&nbsp;My Perfil
                    </a>
                </li>
                <li>
                    <a href=\"#\" id=\"user-cambiar-contrasena\" data-target=\"#modal-load\" title=\"Cambiar contraseña\" data-tooltip>
                        <i class=\"fa fa-cogs\"></i>
                        &nbsp;&nbsp;Cambiar contraseña
                    </a>
                </li>

                <li class=\"divider\"></li>

                <li>
                    <a href=\" ";
        // line 131
        echo $this->env->getExtension('routing')->getPath("usuario_logout");
        echo " \">

                        <i class=\"fa fa-sign-out\"></i>
                        &nbsp;&nbsp;Logout
                    </a>
                </li>

            </ul>

        </li>

    </ul>

</nav>";
        
        $__internal_953191ca9af6336e5fbea02e85bcbc2bfdfafd2620678d1a83f63d72b4b5b985->leave($__internal_953191ca9af6336e5fbea02e85bcbc2bfdfafd2620678d1a83f63d72b4b5b985_prof);

    }

    public function getTemplateName()
    {
        return ":includes:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 131,  158 => 110,  154 => 108,  151 => 107,  149 => 106,  88 => 47,  86 => 46,  84 => 45,  82 => 44,  80 => 43,  78 => 42,  76 => 41,  74 => 40,  72 => 39,  70 => 38,  65 => 34,  63 => 33,  61 => 32,  59 => 31,  57 => 30,  55 => 29,  53 => 28,  51 => 27,  49 => 26,  47 => 25,  22 => 1,);
    }
}
/* <nav role="navigation" class="collapse navbar-collapse">*/
/* */
/*     <ul class="nav navbar-nav noticebar navbar-left">*/
/* */
/*         <li class="dropdown">*/
/*             <a data-toggle="dropdown" class="dropdown-toggle" href="./page-notifications.html">*/
/*                 <i class="fa fa-bell"></i>*/
/*                 <span class="navbar-visible-collapsed">&nbsp;Notifications&nbsp;</span>*/
/*                 <span class="badge badge-primary">0</span>*/
/*             </a>*/
/* */
/*             <ul role="menu" class="dropdown-menu noticebar-menu noticebar-hoverable">*/
/*                 <li class="nav-header">*/
/*                     <div class="pull-left">*/
/*                         Notifications*/
/*                     </div>*/
/* */
/*                     <div class="pull-right">*/
/*                         <a href="javascript:;">Mark as Read</a>*/
/*                     </div>*/
/*                 </li>*/
/* */
/*                 <li>*/
/*                     {#<a class="noticebar-item" href="./page-notifications.html">#}*/
/*                   {#<span class="noticebar-item-image">#}*/
/*                     {#<i class="fa fa-cloud-upload text-success"></i>#}*/
/*                   {#</span>#}*/
/*                   {#<span class="noticebar-item-body">#}*/
/*                     {#<strong class="noticebar-item-title">Templates Synced</strong>#}*/
/*                     {#<span class="noticebar-item-text">20 Templates have been synced to the Mashon Demo instance.</span>#}*/
/*                     {#<span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 12 minutes ago</span>#}*/
/*                   {#</span>#}*/
/*                     {#</a>#}*/
/*                 </li>*/
/* */
/*                 <li>*/
/*                     {#<a class="noticebar-item" href="./page-notifications.html">#}*/
/*                   {#<span class="noticebar-item-image">#}*/
/*                     {#<i class="fa fa-ban text-danger"></i>#}*/
/*                   {#</span>#}*/
/*                   {#<span class="noticebar-item-body">#}*/
/*                     {#<strong class="noticebar-item-title">Sync Error</strong>#}*/
/*                     {#<span class="noticebar-item-text">5 Designs have been failed to be synced to the Mashon Demo instance.</span>#}*/
/*                     {#<span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 minutes ago</span>#}*/
/*                   {#</span>#}*/
/*                     {#</a>#}*/
/*                 </li>*/
/* */
/*                 <li class="noticebar-menu-view-all">*/
/*                     <a href="./page-notifications.html">View All Notifications</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/* */
/* */
/* */
/*         <li class="dropdown">*/
/*             <a data-toggle="dropdown" class="dropdown-toggle" href="./page-notifications.html">*/
/*                 <i class="fa fa-envelope"></i>*/
/*                 <span class="navbar-visible-collapsed">&nbsp;Messages&nbsp;</span>*/
/*             </a>*/
/* */
/*             <ul role="menu" class="dropdown-menu noticebar-menu noticebar-hoverable">*/
/* */
/* */
/*                 <li class="noticebar-menu-view-all">*/
/*                     <a href="./page-notifications.html">View All Messages</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/* */
/*         <li class="dropdown">*/
/*             <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">*/
/*                 <i class="fa fa-exclamation-triangle"></i>*/
/*                 <span class="navbar-visible-collapsed">&nbsp;Alerts&nbsp;</span>*/
/*             </a>*/
/* */
/*             <ul role="menu" class="dropdown-menu noticebar-menu noticebar-hoverable">*/
/*                 <li class="nav-header">*/
/*                     <div class="pull-left">*/
/*                         Alerts*/
/*                     </div>*/
/*                 </li>*/
/* */
/*             </ul>*/
/*         </li>*/
/* */
/*     </ul>*/
/* */
/* */
/* */
/*     <ul class="nav navbar-nav navbar-right">*/
/* */
/*         <li>*/
/*             <a href="javsacript:;">Acerca de...</a>*/
/*         </li>*/
/* */
/*         <li>*/
/*             <a href="javascript:;">Resources</a>*/
/*         </li>*/
/* */
/* */
/* */
/*         <li class="dropdown navbar-profile">*/
/*             <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">*/
/*                 {% set imagen = usuario.foto == '' ? 'images/profile.png' : 'uploads/usuarios/'~ usuario.foto ~'.jpg' %}*/
/* */
/*                 <img alt="" class="navbar-profile-avatar" src="{{ image(imagen).resize(20,20,"#ffffff",'center','center') }}">*/
/*                 {#<span class="navbar-profile-label">{{ usuario.nombre }} &nbsp;</span>#}*/
/*                 <i class="fa fa-caret-down"></i>*/
/*             </a>*/
/* */
/*             <ul role="menu" class="dropdown-menu">*/
/* */
/*                 <li>*/
/*                     <a href="#" id="user-perfil" data-target="#modal-load" title="Perfil" data-tooltip>*/
/*                         <i class="fa fa-user"></i>*/
/*                         &nbsp;&nbsp;My Perfil*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#" id="user-cambiar-contrasena" data-target="#modal-load" title="Cambiar contraseña" data-tooltip>*/
/*                         <i class="fa fa-cogs"></i>*/
/*                         &nbsp;&nbsp;Cambiar contraseña*/
/*                     </a>*/
/*                 </li>*/
/* */
/*                 <li class="divider"></li>*/
/* */
/*                 <li>*/
/*                     <a href=" {{ path('usuario_logout')  }} ">*/
/* */
/*                         <i class="fa fa-sign-out"></i>*/
/*                         &nbsp;&nbsp;Logout*/
/*                     </a>*/
/*                 </li>*/
/* */
/*             </ul>*/
/* */
/*         </li>*/
/* */
/*     </ul>*/
/* */
/* </nav>*/
