<?php

/* AppBundle:frontend/includes:login.html.twig */
class __TwigTemplate_4b8002bfefde74b622f6a8bca2843c5d5ef192c8aed231ebebd63f6b9df16b9a extends Twig_Template
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
        $__internal_1c7a6a24ab4cb402d7e764fceaba54a1f41090779e6603eae817c18b1c78d945 = $this->env->getExtension("native_profiler");
        $__internal_1c7a6a24ab4cb402d7e764fceaba54a1f41090779e6603eae817c18b1c78d945->enter($__internal_1c7a6a24ab4cb402d7e764fceaba54a1f41090779e6603eae817c18b1c78d945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:frontend/includes:login.html.twig"));

        // line 1
        echo "<h2 class=\"main-heading text-center\"> Ingresar o crear una nueva cuenta </h2>

<section class=\"login-area\" style=\"margin-bottom: 35px;\">
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <!-- Login Panel Starts -->
            <div class=\"panel panel-smart\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Ingresar</h3>
                </div>
                <div class=\"panel-body\">

                    ";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "                        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 16
        echo "                    <p>
                        Por favor, iniciar sesión, su cuenta debe existir
                    </p>
                    <!-- Login Form Starts -->
                    <form role=\"form\" class=\"form-inline\" method=\"POST\" action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" >
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                        ";
        // line 24
        echo "
                        <div class=\"form-group\">
                            <label for=\"login-username\" class=\"sr-only\">Usuario</label>
                            <input type=\"text\" class=\"form-control\" id=\"login-username\" placeholder=\"Usuario\" tabindex=\"1\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required>
                        </div> <!-- /.form-group -->

                        <div class=\"form-group\">
                            <label for=\"login-password\" class=\"sr-only\">Clave</label>
                            <input type=\"password\" class=\"form-control\" id=\"login-password\" placeholder=\"Clave\" tabindex=\"2\" name=\"_password\" required>
                        </div> <!-- /.form-group -->

                        <button class=\"btn btn-warning\" type=\"submit\" id=\"_submit\" name=\"_submit\">
                            Ingresar
                        </button>

                        <div class=\"form-group clearfix\">
                            <small><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Perdio su clave?</a></small>
                        </div> <!-- /.form-group -->
                    </form>
                    <!-- Login Form Ends -->
                </div>
            </div>
            <!-- Login Panel Ends -->
        </div>


        <div class=\"col-sm-6\">
            <!-- Account Panel Starts -->
            <div class=\"panel panel-smart\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">
                        Crear una nueva cuenta
                    </h3>
                </div>
                <div class=\"panel-body\">
                    <p>
                        Registro le permite evitar el llenado de formularios de facturación y envío cada vez que usted pago y envío
                        en este sitio web
                    </p>
                    <a class=\"btn btn-warning\" href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">
                        Registrarse
                    </a>
                </div>
            </div>
            <!-- Account Panel Ends -->
        </div>
    </div>
</section>";
        
        $__internal_1c7a6a24ab4cb402d7e764fceaba54a1f41090779e6603eae817c18b1c78d945->leave($__internal_1c7a6a24ab4cb402d7e764fceaba54a1f41090779e6603eae817c18b1c78d945_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:frontend/includes:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 63,  80 => 40,  64 => 27,  59 => 24,  54 => 21,  50 => 20,  44 => 16,  38 => 14,  36 => 13,  22 => 1,);
    }
}
/* <h2 class="main-heading text-center"> Ingresar o crear una nueva cuenta </h2>*/
/* */
/* <section class="login-area" style="margin-bottom: 35px;">*/
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <!-- Login Panel Starts -->*/
/*             <div class="panel panel-smart">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title">Ingresar</h3>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/* */
/*                     {% if error %}*/
/*                         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                     {% endif %}*/
/*                     <p>*/
/*                         Por favor, iniciar sesión, su cuenta debe existir*/
/*                     </p>*/
/*                     <!-- Login Form Starts -->*/
/*                     <form role="form" class="form-inline" method="POST" action="{{ path('fos_user_security_check') }}" >*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/* */
/*                         {#<input type="hidden" name="_target_path" value="/" />#}*/
/* */
/*                         <div class="form-group">*/
/*                             <label for="login-username" class="sr-only">Usuario</label>*/
/*                             <input type="text" class="form-control" id="login-username" placeholder="Usuario" tabindex="1" name="_username" value="{{ last_username }}" required>*/
/*                         </div> <!-- /.form-group -->*/
/* */
/*                         <div class="form-group">*/
/*                             <label for="login-password" class="sr-only">Clave</label>*/
/*                             <input type="password" class="form-control" id="login-password" placeholder="Clave" tabindex="2" name="_password" required>*/
/*                         </div> <!-- /.form-group -->*/
/* */
/*                         <button class="btn btn-warning" type="submit" id="_submit" name="_submit">*/
/*                             Ingresar*/
/*                         </button>*/
/* */
/*                         <div class="form-group clearfix">*/
/*                             <small><a href="{{ path('fos_user_resetting_request') }}">Perdio su clave?</a></small>*/
/*                         </div> <!-- /.form-group -->*/
/*                     </form>*/
/*                     <!-- Login Form Ends -->*/
/*                 </div>*/
/*             </div>*/
/*             <!-- Login Panel Ends -->*/
/*         </div>*/
/* */
/* */
/*         <div class="col-sm-6">*/
/*             <!-- Account Panel Starts -->*/
/*             <div class="panel panel-smart">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title">*/
/*                         Crear una nueva cuenta*/
/*                     </h3>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <p>*/
/*                         Registro le permite evitar el llenado de formularios de facturación y envío cada vez que usted pago y envío*/
/*                         en este sitio web*/
/*                     </p>*/
/*                     <a class="btn btn-warning" href="{{ path('fos_user_registration_register') }}">*/
/*                         Registrarse*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- Account Panel Ends -->*/
/*         </div>*/
/*     </div>*/
/* </section>*/
