<?php

/* AppBundle:frontend:includes/copyright.html.twig */
class __TwigTemplate_3ed0031fd9e104ebe0edfcec9e0576467edefd9df0263326df9fe8ab41eec321 extends Twig_Template
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
        // line 2
        echo "<div class=\"container\">
    ";
        // line 4
        echo "    <p class=\"pull-left\">
        &nbsp; ";
        // line 5
        echo $this->env->getExtension('translator')->trans("copyright.derechos", array(), "vista");
        echo "
    </p>
    ";
        // line 8
        echo "    ";
        // line 9
        echo "    <ul class=\"pull-right list-inline\">
        <li>
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/payment-icon/cirrus.png"), "html", null, true);
        echo "\" alt=\"PaymentGateway\"/>
        </li>
        <li>
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/payment-icon/paypal.png"), "html", null, true);
        echo "\" alt=\"PaymentGateway\"/>
        </li>
        <li>
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/payment-icon/visa.png"), "html", null, true);
        echo "\" alt=\"PaymentGateway\"/>
        </li>
        <li>
            <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/payment-icon/mastercard.png"), "html", null, true);
        echo "\" alt=\"PaymentGateway\"/>
        </li>
        <li>
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/payment-icon/americanexpress.png"), "html", null, true);
        echo "\" alt=\"PaymentGateway\"/>
        </li>
    </ul>
    ";
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:frontend:includes/copyright.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 27,  60 => 23,  54 => 20,  48 => 17,  42 => 14,  36 => 11,  32 => 9,  30 => 8,  25 => 5,  22 => 4,  19 => 2,);
    }
}
/* {#<!-- Container Starts -->#}*/
/* <div class="container">*/
/*     {#<!-- Starts -->#}*/
/*     <p class="pull-left">*/
/*         &nbsp; {{ "copyright.derechos" | trans({},'vista') | raw }}*/
/*     </p>*/
/*     {#<!-- Ends -->#}*/
/*     {#<!-- Payment Gateway Links Starts -->#}*/
/*     <ul class="pull-right list-inline">*/
/*         <li>*/
/*             <img src="{{ asset("images/payment-icon/cirrus.png") }}" alt="PaymentGateway"/>*/
/*         </li>*/
/*         <li>*/
/*             <img src="{{ asset("images/payment-icon/paypal.png") }}" alt="PaymentGateway"/>*/
/*         </li>*/
/*         <li>*/
/*             <img src="{{ asset("images/payment-icon/visa.png") }}" alt="PaymentGateway"/>*/
/*         </li>*/
/*         <li>*/
/*             <img src="{{ asset("images/payment-icon/mastercard.png") }}" alt="PaymentGateway"/>*/
/*         </li>*/
/*         <li>*/
/*             <img src="{{ asset("images/payment-icon/americanexpress.png") }}" alt="PaymentGateway"/>*/
/*         </li>*/
/*     </ul>*/
/*     {#<!-- Payment Gateway Links Ends -->#}*/
/* </div>*/
/* {#<!-- Container Ends -->#}*/
