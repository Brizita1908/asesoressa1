<?php

/* AsesoresSAMainBundle:Default:movimiento.php.twig */
class __TwigTemplate_7751cba3a59a8a02c473c5e8c5d262c0f79a6b2ea28c2f7d38f8010616ad3032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSAMainBundle:Default:movimiento.php.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efadc062d8ca76a4133d90b47c1e4be2f43d4e0785e602a71c74bf65833fe475 = $this->env->getExtension("native_profiler");
        $__internal_efadc062d8ca76a4133d90b47c1e4be2f43d4e0785e602a71c74bf65833fe475->enter($__internal_efadc062d8ca76a4133d90b47c1e4be2f43d4e0785e602a71c74bf65833fe475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSAMainBundle:Default:movimiento.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efadc062d8ca76a4133d90b47c1e4be2f43d4e0785e602a71c74bf65833fe475->leave($__internal_efadc062d8ca76a4133d90b47c1e4be2f43d4e0785e602a71c74bf65833fe475_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f55587c03c637c023ab11022f36b41d68e10f94831ef2ce5fd21fae32de71077 = $this->env->getExtension("native_profiler");
        $__internal_f55587c03c637c023ab11022f36b41d68e10f94831ef2ce5fd21fae32de71077->enter($__internal_f55587c03c637c023ab11022f36b41d68e10f94831ef2ce5fd21fae32de71077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Movimiento";
        
        $__internal_f55587c03c637c023ab11022f36b41d68e10f94831ef2ce5fd21fae32de71077->leave($__internal_f55587c03c637c023ab11022f36b41d68e10f94831ef2ce5fd21fae32de71077_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2474425dd972b2014e20f1ada68012296079710c5ca42ba897baa99d288907ac = $this->env->getExtension("native_profiler");
        $__internal_2474425dd972b2014e20f1ada68012296079710c5ca42ba897baa99d288907ac->enter($__internal_2474425dd972b2014e20f1ada68012296079710c5ca42ba897baa99d288907ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h3 class=\"text-center\">Registro de Movimiento</h3>
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglamovimiento", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglamovimiento", array()), 'label', array("label_attr" => array("for" => "sigla"), "label" => "Sigla"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglamovimiento", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Sigla")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadomovimiento", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadomovimiento", array()), 'label', array("label_attr" => array("for" => "estado"), "label" => "Estado"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadomovimiento", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Estado")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-btn\">
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-style", "id" => "btn-guardar")));
        echo "
                        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("asesores_sa_listarMovimiento");
        echo "\" class=\"btn btn-primary\" role=\"button\">Ver Movimientos</a>
                    </div>
                    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_2474425dd972b2014e20f1ada68012296079710c5ca42ba897baa99d288907ac->leave($__internal_2474425dd972b2014e20f1ada68012296079710c5ca42ba897baa99d288907ac_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSAMainBundle:Default:movimiento.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  97 => 24,  93 => 23,  87 => 20,  83 => 19,  79 => 18,  73 => 15,  69 => 14,  65 => 13,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Registro de Movimiento{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-6 col-md-offset-3">*/
/*                     <h3 class="text-center">Registro de Movimiento</h3>*/
/*                     {{ form_start(form)}}*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.siglamovimiento)}}</div>*/
/*                         <div class="form_label">{{form_label(form.siglamovimiento, 'Sigla', {'label_attr': {'for': 'sigla'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.siglamovimiento, { 'attr': {'class': 'form-control', 'placeholder':'Sigla'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.estadomovimiento)}}</div>*/
/*                         <div class="form_label">{{form_label(form.estadomovimiento, 'Estado', {'label_attr': {'for': 'estado'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.estadomovimiento, { 'attr': {'class': 'form-control', 'placeholder':'Estado'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-btn">*/
/*                         {{form_widget(form.Guardar, { 'attr': {'class': 'btn btn-primary btn-style', 'id':'btn-guardar'} })}}*/
/*                         <a href="{{ path('asesores_sa_listarMovimiento') }}" class="btn btn-primary" role="button">Ver Movimientos</a>*/
/*                     </div>*/
/*                     {{form_end(form)}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
