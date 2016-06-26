<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ee69b51e2dde7aded54767435313ec9dd02ec822587aee8eb655376698df0643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e875c8ecf3ce8bc19ff280f649717b89e160bc0cb27273a89e3422da5b048c0 = $this->env->getExtension("native_profiler");
        $__internal_3e875c8ecf3ce8bc19ff280f649717b89e160bc0cb27273a89e3422da5b048c0->enter($__internal_3e875c8ecf3ce8bc19ff280f649717b89e160bc0cb27273a89e3422da5b048c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e875c8ecf3ce8bc19ff280f649717b89e160bc0cb27273a89e3422da5b048c0->leave($__internal_3e875c8ecf3ce8bc19ff280f649717b89e160bc0cb27273a89e3422da5b048c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d17a0831b9a57fcde03063e7a272de46dec9d640201488e1e949ec377841a2a = $this->env->getExtension("native_profiler");
        $__internal_7d17a0831b9a57fcde03063e7a272de46dec9d640201488e1e949ec377841a2a->enter($__internal_7d17a0831b9a57fcde03063e7a272de46dec9d640201488e1e949ec377841a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d17a0831b9a57fcde03063e7a272de46dec9d640201488e1e949ec377841a2a->leave($__internal_7d17a0831b9a57fcde03063e7a272de46dec9d640201488e1e949ec377841a2a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e54d7a23ad2076cfb50b2d446b803c2e5835652e40824404d57aaa4144a583d = $this->env->getExtension("native_profiler");
        $__internal_8e54d7a23ad2076cfb50b2d446b803c2e5835652e40824404d57aaa4144a583d->enter($__internal_8e54d7a23ad2076cfb50b2d446b803c2e5835652e40824404d57aaa4144a583d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e54d7a23ad2076cfb50b2d446b803c2e5835652e40824404d57aaa4144a583d->leave($__internal_8e54d7a23ad2076cfb50b2d446b803c2e5835652e40824404d57aaa4144a583d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00363e7a11b9049287f60640b9c48712ee4640d50d8755b82c8ce6a5e84b7f40 = $this->env->getExtension("native_profiler");
        $__internal_00363e7a11b9049287f60640b9c48712ee4640d50d8755b82c8ce6a5e84b7f40->enter($__internal_00363e7a11b9049287f60640b9c48712ee4640d50d8755b82c8ce6a5e84b7f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00363e7a11b9049287f60640b9c48712ee4640d50d8755b82c8ce6a5e84b7f40->leave($__internal_00363e7a11b9049287f60640b9c48712ee4640d50d8755b82c8ce6a5e84b7f40_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
