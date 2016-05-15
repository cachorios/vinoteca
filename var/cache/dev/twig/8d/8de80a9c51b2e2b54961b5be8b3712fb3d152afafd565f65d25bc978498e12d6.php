<?php

/* :includes:gen_menu.html.twig */
class __TwigTemplate_4d461b24ed01362fdaad85cd6f6edec3e942d011039c15d8bd2c886fe86e7677 extends Twig_Template
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
        $__internal_7f2eefabf54f10451e7e2d57fe969483f74d9a76e415274f241286f3b87847d2 = $this->env->getExtension("native_profiler");
        $__internal_7f2eefabf54f10451e7e2d57fe969483f74d9a76e415274f241286f3b87847d2->enter($__internal_7f2eefabf54f10451e7e2d57fe969483f74d9a76e415274f241286f3b87847d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":includes:gen_menu.html.twig"));

        // line 4
        echo "


";
        // line 15
        echo "
";
        // line 21
        echo "

";
        // line 31
        echo "
";
        // line 37
        echo "
";
        
        $__internal_7f2eefabf54f10451e7e2d57fe969483f74d9a76e415274f241286f3b87847d2->leave($__internal_7f2eefabf54f10451e7e2d57fe969483f74d9a76e415274f241286f3b87847d2_prof);

    }

    // line 1
    public function getcampo($__nombre__ = null, $__requerido__ = null, $__valor__ = null, $__tipo__ = null, $__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "nombre" => $__nombre__,
            "requerido" => $__requerido__,
            "valor" => $__valor__,
            "tipo" => $__tipo__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2f8311c1af80faad4c7b5806304f6e47da12b6c45293b999f82bae247231f082 = $this->env->getExtension("native_profiler");
            $__internal_2f8311c1af80faad4c7b5806304f6e47da12b6c45293b999f82bae247231f082->enter($__internal_2f8311c1af80faad4c7b5806304f6e47da12b6c45293b999f82bae247231f082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "campo"));

            // line 2
            echo "    <input type=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("tipo", $context)) ? (_twig_default_filter((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "text")) : ("text")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")))) : ((isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")))), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "\" ";
            echo (((isset($context["requerido"]) ? $context["requerido"] : $this->getContext($context, "requerido"))) ? ("required=\"required\"") : (""));
            echo " />
";
            
            $__internal_2f8311c1af80faad4c7b5806304f6e47da12b6c45293b999f82bae247231f082->leave($__internal_2f8311c1af80faad4c7b5806304f6e47da12b6c45293b999f82bae247231f082_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 7
    public function getmenu($__label__ = null, $__ref__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "ref" => $__ref__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3830a050828a23cafe6530ab32b69081133d60b70da6cb5faf136e3d0b8c8c41 = $this->env->getExtension("native_profiler");
            $__internal_3830a050828a23cafe6530ab32b69081133d60b70da6cb5faf136e3d0b8c8c41->enter($__internal_3830a050828a23cafe6530ab32b69081133d60b70da6cb5faf136e3d0b8c8c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu"));

            // line 8
            echo "<ul class=\"mainnav-menu\">
    <li class=\"dropdown \">
        <a data-hover=\"dropdown\" data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["ref"]) ? $context["ref"] : $this->getContext($context, "ref")), "html", null, true);
            echo "\">
            ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo " <i class=\"mainnav-caret\"></i>
        </a>
        <ul role=\"menu\" class=\"dropdown-menu\">
";
            
            $__internal_3830a050828a23cafe6530ab32b69081133d60b70da6cb5faf136e3d0b8c8c41->leave($__internal_3830a050828a23cafe6530ab32b69081133d60b70da6cb5faf136e3d0b8c8c41_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function getfinmenu(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1fcceceac66ea71e84c26ed02dd8cb8a23a4ff09a0603066b5ae78dd5bd018a5 = $this->env->getExtension("native_profiler");
            $__internal_1fcceceac66ea71e84c26ed02dd8cb8a23a4ff09a0603066b5ae78dd5bd018a5->enter($__internal_1fcceceac66ea71e84c26ed02dd8cb8a23a4ff09a0603066b5ae78dd5bd018a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "finmenu"));

            // line 17
            echo "        </ul>
    </li>
</ul>
";
            
            $__internal_1fcceceac66ea71e84c26ed02dd8cb8a23a4ff09a0603066b5ae78dd5bd018a5->leave($__internal_1fcceceac66ea71e84c26ed02dd8cb8a23a4ff09a0603066b5ae78dd5bd018a5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getsubmenu($__label__ = null, $__icon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_840778a80949f8516e54cbcc0f6d9d94925736dc4752a094093cda8d1f37b512 = $this->env->getExtension("native_profiler");
            $__internal_840778a80949f8516e54cbcc0f6d9d94925736dc4752a094093cda8d1f37b512->enter($__internal_840778a80949f8516e54cbcc0f6d9d94925736dc4752a094093cda8d1f37b512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "submenu"));

            // line 24
            echo "<li class=\"dropdown-submenu\">
    <a href=\"#\" tabindex=\"-1\">
        <i class=\"fa ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "\"></i>
        &nbsp;&nbsp;";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "
    </a>
    <ul class=\"dropdown-menu\">
";
            
            $__internal_840778a80949f8516e54cbcc0f6d9d94925736dc4752a094093cda8d1f37b512->leave($__internal_840778a80949f8516e54cbcc0f6d9d94925736dc4752a094093cda8d1f37b512_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function getfinsubmenu(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_743b472c3b1163ee8859d8353e78111b2e2a6d132610e604a0feb891e446cbac = $this->env->getExtension("native_profiler");
            $__internal_743b472c3b1163ee8859d8353e78111b2e2a6d132610e604a0feb891e446cbac->enter($__internal_743b472c3b1163ee8859d8353e78111b2e2a6d132610e604a0feb891e446cbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "finsubmenu"));

            // line 33
            echo "    </ul>
</li>

";
            
            $__internal_743b472c3b1163ee8859d8353e78111b2e2a6d132610e604a0feb891e446cbac->leave($__internal_743b472c3b1163ee8859d8353e78111b2e2a6d132610e604a0feb891e446cbac_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function getitem($__label__ = null, $__icon__ = null, $__ref__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "icon" => $__icon__,
            "ref" => $__ref__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_508d418039b0a7d684435910b17e0aa76bac5947feb2050e48d218c014cbe532 = $this->env->getExtension("native_profiler");
            $__internal_508d418039b0a7d684435910b17e0aa76bac5947feb2050e48d218c014cbe532->enter($__internal_508d418039b0a7d684435910b17e0aa76bac5947feb2050e48d218c014cbe532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "item"));

            // line 39
            echo "    <li>
        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["ref"]) ? $context["ref"] : $this->getContext($context, "ref")), "html", null, true);
            echo "\">
            <i class=\"fa ";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "\"></i>
            &nbsp;&nbsp;";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "
        </a>
    </li>
";
            
            $__internal_508d418039b0a7d684435910b17e0aa76bac5947feb2050e48d218c014cbe532->leave($__internal_508d418039b0a7d684435910b17e0aa76bac5947feb2050e48d218c014cbe532_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return ":includes:gen_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 42,  259 => 41,  255 => 40,  252 => 39,  235 => 38,  218 => 33,  204 => 32,  186 => 27,  182 => 26,  178 => 24,  162 => 23,  145 => 17,  131 => 16,  113 => 11,  109 => 10,  105 => 8,  89 => 7,  64 => 2,  45 => 1,  37 => 37,  34 => 31,  30 => 21,  27 => 15,  22 => 4,);
    }
}
/* {% macro campo(nombre, requerido, valor, tipo, id) %}*/
/*     <input type="{{ tipo|default('text') }}" name="{{ nombre }}" id="{{ id | default(nombre)}}" value="{{ valor }}" {{ requerido ? 'required="required"' : '' }} />*/
/* {% endmacro %}*/
/* */
/* */
/* */
/* {% macro  menu(label, ref) %}*/
/* <ul class="mainnav-menu">*/
/*     <li class="dropdown ">*/
/*         <a data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="{{ ref }}">*/
/*             {{ label }} <i class="mainnav-caret"></i>*/
/*         </a>*/
/*         <ul role="menu" class="dropdown-menu">*/
/* {% endmacro %}*/
/* */
/* {% macro finmenu() %}*/
/*         </ul>*/
/*     </li>*/
/* </ul>*/
/* {% endmacro %}*/
/* */
/* */
/* {% macro submenu(label,icon) %}*/
/* <li class="dropdown-submenu">*/
/*     <a href="#" tabindex="-1">*/
/*         <i class="fa {{ icon }}"></i>*/
/*         &nbsp;&nbsp;{{ label }}*/
/*     </a>*/
/*     <ul class="dropdown-menu">*/
/* {% endmacro %}*/
/* */
/* {% macro finsubmenu() %}*/
/*     </ul>*/
/* </li>*/
/* */
/* {% endmacro %}*/
/* */
/* {% macro item(label, icon, ref) %}*/
/*     <li>*/
/*         <a href="{{ ref }}">*/
/*             <i class="fa {{ icon }}"></i>*/
/*             &nbsp;&nbsp;{{ label }}*/
/*         </a>*/
/*     </li>*/
/* {% endmacro %}*/
