<?php

/* RBSoftCartBundle:Cart:displaySmallCart.html.twig */
class __TwigTemplate_bfde0a13fad9ecbde998b07541eca086f576c6972bb88c687099d23189bba355 extends Twig_Template
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
        echo "<button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-block btn-lg dropdown-toggle\">
    <i class=\"fa fa-shopping-cart\"></i>
    <span class=\"hidden-md\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Carro"), "html", null, true);
        echo ":</span>
    <span id=\"cart-total\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "cantidad", array()), "html", null, true);
        echo " item(s) - \$ ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total", array()), "html", null, true);
        echo "</span>
    <i class=\"fa fa-caret-down\"></i>
</button>
<ul class=\"dropdown-menu pull-right\">
    <li>
        <table class=\"table table-striped hcart\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cartModel"]) ? $context["cartModel"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "
            <tr>
                <td class=\"text-center\">
                    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productofull", array("id" => $this->getAttribute($this->getAttribute($context["item"], "producto", array()), "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 16
            echo "                             ";
            // line 17
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image(("uploads/productos/" . $this->getAttribute($this->getAttribute($context["item"], "producto", array()), "imagenActiva", array()))), "zoomCrop", array(0 => 70, 1 => 45, 2 => "#ffffff", 3 => "center", 4 => "center"), "method"), "html", null, true);
            echo "\" class=\"img-responsive\" />
                    </a>
                </td>
                <td class=\"text-left\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productofull", array("id" => $this->getAttribute($this->getAttribute($context["item"], "producto", array()), "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "producto", array()), "nombre", array()), "html", null, true);
            echo "
                    </a>
                </td>
                <td class=\"text-right\">x ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cantidad", array()), "html", null, true);
            echo "</td>
                <td class=\"text-right\">\$";
            // line 26
            echo twig_escape_filter($this->env, ($this->getAttribute($context["item"], "cantidad", array()) * $this->getAttribute($this->getAttribute($context["item"], "producto", array()), "precio", array())), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <a href=\"#\">
                        <i class=\"fa fa-times\"></i>
                    </a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
        </table>
    </li>
    <li>
        <table class=\"table table-bordered total\">
            <tbody>
            <tr>
                <td class=\"text-right\"><strong>Sub-Total</strong></td>
                <td class=\"text-left\">\$ ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <td class=\"text-right\"><strong>Total</strong></td>
                <td class=\"text-left\">\$ ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total", array()), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>
        <p class=\"text-right btn-block1\">
            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("cartdisplay");
        echo "\">
                ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ver Carro"), "html", null, true);
        echo "
            </a>
            <a href=\"#\">
                ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Pagar"), "html", null, true);
        echo "
            </a>
        </p>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "RBSoftCartBundle:Cart:displaySmallCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 56,  119 => 53,  115 => 52,  107 => 47,  99 => 42,  89 => 34,  75 => 26,  71 => 25,  65 => 22,  61 => 21,  53 => 17,  51 => 16,  47 => 14,  42 => 11,  38 => 10,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <button type="button" data-toggle="dropdown" class="btn btn-block btn-lg dropdown-toggle">*/
/*     <i class="fa fa-shopping-cart"></i>*/
/*     <span class="hidden-md">{{ 'Carro' | trans }}:</span>*/
/*     <span id="cart-total">{{ cart.cantidad }} item(s) - $ {{ cart.total }}</span>*/
/*     <i class="fa fa-caret-down"></i>*/
/* </button>*/
/* <ul class="dropdown-menu pull-right">*/
/*     <li>*/
/*         <table class="table table-striped hcart">*/
/*             {% for item in cartModel.items %}*/
/* */
/*             <tr>*/
/*                 <td class="text-center">*/
/*                     <a href="{{ path('productofull',{'id': item.producto.id }) }}">*/
/*                         {#<img src="{{ image('uploads/productos/' ~ item.producto.imagenActiva) }}"#}*/
/*                              {#alt="product" class="img-thumbnail img-responsive">#}*/
/*                         <img src="{{ image('uploads/productos/'~item.producto.imagenActiva).zoomCrop(70,45,"#ffffff",'center','center') }}" class="img-responsive" />*/
/*                     </a>*/
/*                 </td>*/
/*                 <td class="text-left">*/
/*                     <a href="{{ path('productofull',{'id': item.producto.id }) }}">*/
/*                         {{ item.producto.nombre }}*/
/*                     </a>*/
/*                 </td>*/
/*                 <td class="text-right">x {{ item.cantidad }}</td>*/
/*                 <td class="text-right">${{ item.cantidad * item.producto.precio }}</td>*/
/*                 <td class="text-center">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-times"></i>*/
/*                     </a>*/
/*                 </td>*/
/*             </tr>*/
/*             {% endfor %}*/
/* */
/*         </table>*/
/*     </li>*/
/*     <li>*/
/*         <table class="table table-bordered total">*/
/*             <tbody>*/
/*             <tr>*/
/*                 <td class="text-right"><strong>Sub-Total</strong></td>*/
/*                 <td class="text-left">$ {{ cart.total }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <td class="text-right"><strong>Total</strong></td>*/
/*                 <td class="text-left">$ {{ cart.total }}</td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/*         <p class="text-right btn-block1">*/
/*             <a href="{{ path("cartdisplay") }}">*/
/*                 {{ 'Ver Carro' | trans }}*/
/*             </a>*/
/*             <a href="#">*/
/*                 {{ 'Pagar' | trans }}*/
/*             </a>*/
/*         </p>*/
/*     </li>*/
/* </ul>*/
/* */
