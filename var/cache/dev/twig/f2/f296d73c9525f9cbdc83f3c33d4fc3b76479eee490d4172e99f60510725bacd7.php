<?php

/* AppBundle:frontend:includes/copyright.html.twig */
class __TwigTemplate_cf70e765dd8540bf5290f5ffe713f12ad92057bc0d6c412ab297332a5586529c extends Twig_Template
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
        $__internal_b4f48fc9d27ae2148ad8271cd58a991370abb765dd94c83f78e3c21ac7ff262b = $this->env->getExtension("native_profiler");
        $__internal_b4f48fc9d27ae2148ad8271cd58a991370abb765dd94c83f78e3c21ac7ff262b->enter($__internal_b4f48fc9d27ae2148ad8271cd58a991370abb765dd94c83f78e3c21ac7ff262b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:frontend:includes/copyright.html.twig"));

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
        
        $__internal_b4f48fc9d27ae2148ad8271cd58a991370abb765dd94c83f78e3c21ac7ff262b->leave($__internal_b4f48fc9d27ae2148ad8271cd58a991370abb765dd94c83f78e3c21ac7ff262b_prof);

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
        return array (  69 => 27,  63 => 23,  57 => 20,  51 => 17,  45 => 14,  39 => 11,  35 => 9,  33 => 8,  28 => 5,  25 => 4,  22 => 2,);
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
