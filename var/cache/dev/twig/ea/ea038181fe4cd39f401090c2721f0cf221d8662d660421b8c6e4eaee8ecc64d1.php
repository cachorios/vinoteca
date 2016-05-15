<?php

/* AppBundle:frontend:includes/contacto.html.twig */
class __TwigTemplate_7604d867e8aa3e9aa9ce97d40ac5fe6899fff471e6fc3277e764b1c0ec20cb8e extends Twig_Template
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
        $__internal_1c925ce06263d460bb8c3df0fbf431b193f74a03c42ad11cb1845c4d00bf86d9 = $this->env->getExtension("native_profiler");
        $__internal_1c925ce06263d460bb8c3df0fbf431b193f74a03c42ad11cb1845c4d00bf86d9->enter($__internal_1c925ce06263d460bb8c3df0fbf431b193f74a03c42ad11cb1845c4d00bf86d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:frontend:includes/contacto.html.twig"));

        // line 1
        echo "<h5>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contacto.label_contacto", array(), "vista"), "html", null, true);
        echo "</h5>
<ul>
    <li>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("empresa.leyenda", array(), "vista"), "html", null, true);
        echo "</li>
    <li>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("empresa.direcccion", array(), "vista"), "html", null, true);
        echo "
    </li>
    <li>
        Email: <a href=\"#\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("empresa.email", array(), "vista"), "html", null, true);
        echo "</a>
    </li>
</ul>
<h4 class=\"lead\">
    Tel: <span>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("empresa.tel", array(), "vista"), "html", null, true);
        echo "</span>
</h4>";
        
        $__internal_1c925ce06263d460bb8c3df0fbf431b193f74a03c42ad11cb1845c4d00bf86d9->leave($__internal_1c925ce06263d460bb8c3df0fbf431b193f74a03c42ad11cb1845c4d00bf86d9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:frontend:includes/contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  38 => 7,  32 => 4,  28 => 3,  22 => 1,);
    }
}
/* <h5>{{ "contacto.label_contacto" | trans({},"vista") }}</h5>*/
/* <ul>*/
/*     <li>{{ "empresa.leyenda" | trans({},"vista") }}</li>*/
/*     <li>{{ "empresa.direcccion" | trans({},"vista") }}*/
/*     </li>*/
/*     <li>*/
/*         Email: <a href="#">{{ "empresa.email" | trans({},"vista") }}</a>*/
/*     </li>*/
/* </ul>*/
/* <h4 class="lead">*/
/*     Tel: <span>{{ "empresa.tel" | trans({},"vista") }}</span>*/
/* </h4>*/
