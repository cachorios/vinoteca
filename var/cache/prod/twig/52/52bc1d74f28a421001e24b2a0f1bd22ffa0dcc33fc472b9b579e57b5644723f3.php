<?php

/* AppBundle:frontend:includes/contacto.html.twig */
class __TwigTemplate_a82f217aacc83a67373f34bfe9e054eb43ea65d13a97c6c777e181e6cf6c7446 extends Twig_Template
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
        return array (  42 => 11,  35 => 7,  29 => 4,  25 => 3,  19 => 1,);
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
