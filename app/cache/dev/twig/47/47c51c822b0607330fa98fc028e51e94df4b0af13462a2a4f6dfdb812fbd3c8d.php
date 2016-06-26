<?php

/* AsesoresSAMainBundle:Default:ramo.html.twig */
class __TwigTemplate_dbeb19a86d39c0d531d400ab7eb10fec4b1fcba7b10917f9b2aebf38f86a8edd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSAMainBundle:Default:ramo.html.twig", 1);
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
        $__internal_34126d3a2d363c9dd1b690e4a6b3d2c259d3662900b6fcd05a61dd064e0b3c14 = $this->env->getExtension("native_profiler");
        $__internal_34126d3a2d363c9dd1b690e4a6b3d2c259d3662900b6fcd05a61dd064e0b3c14->enter($__internal_34126d3a2d363c9dd1b690e4a6b3d2c259d3662900b6fcd05a61dd064e0b3c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSAMainBundle:Default:ramo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34126d3a2d363c9dd1b690e4a6b3d2c259d3662900b6fcd05a61dd064e0b3c14->leave($__internal_34126d3a2d363c9dd1b690e4a6b3d2c259d3662900b6fcd05a61dd064e0b3c14_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_47c61e531dc62aaf21fc8f2979190c37cf751ceed0b2251199365900e4f57730 = $this->env->getExtension("native_profiler");
        $__internal_47c61e531dc62aaf21fc8f2979190c37cf751ceed0b2251199365900e4f57730->enter($__internal_47c61e531dc62aaf21fc8f2979190c37cf751ceed0b2251199365900e4f57730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Ramo";
        
        $__internal_47c61e531dc62aaf21fc8f2979190c37cf751ceed0b2251199365900e4f57730->leave($__internal_47c61e531dc62aaf21fc8f2979190c37cf751ceed0b2251199365900e4f57730_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0de679ef79e6036a341ef426f57e2e885fdb2035ade4fec48aa846ae1ebfd19e = $this->env->getExtension("native_profiler");
        $__internal_0de679ef79e6036a341ef426f57e2e885fdb2035ade4fec48aa846ae1ebfd19e->enter($__internal_0de679ef79e6036a341ef426f57e2e885fdb2035ade4fec48aa846ae1ebfd19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-5 col-md-offset-3\">
                    <h3>Registro de Ramo</h3>
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "GET", "id" => "ramo"));
        echo "
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglaramo", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglaramo", array()), 'label', array("label_attr" => array("for" => "sigla"), "label" => "Sigla"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglaramo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Sigla")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreramo", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreramo", array()), 'label', array("label_attr" => array("for" => "nombre"), "label" => "Nombre"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreramo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiporamo", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiporamo", array()), 'label', array("label_attr" => array("for" => "tipo"), "label" => "Tipo"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiporamo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tipo")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque\">
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "id" => "btn-guardar")));
        echo "
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cancelar", array()), 'widget', array("attr" => array("class" => "btn btn-default", "id" => "btn-cancelar")));
        echo "
                    </div>
                    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_0de679ef79e6036a341ef426f57e2e885fdb2035ade4fec48aa846ae1ebfd19e->leave($__internal_0de679ef79e6036a341ef426f57e2e885fdb2035ade4fec48aa846ae1ebfd19e_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSAMainBundle:Default:ramo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 31,  111 => 29,  107 => 28,  101 => 25,  97 => 24,  93 => 23,  87 => 20,  83 => 19,  79 => 18,  73 => 15,  69 => 14,  65 => 13,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Registro de Ramo{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-5 col-md-offset-3">*/
/*                     <h3>Registro de Ramo</h3>*/
/*                     {{ form_start(form, {'method': 'GET', 'id':'ramo'})}}*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.siglaramo)}}</div>*/
/*                         <div class="form_label">{{form_label(form.siglaramo, 'Sigla', {'label_attr': {'for': 'sigla'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.siglaramo, { 'attr': {'class': 'form-control', 'placeholder':'Sigla'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.nombreramo)}}</div>*/
/*                         <div class="form_label">{{form_label(form.nombreramo, 'Nombre', {'label_attr': {'for': 'nombre'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.nombreramo, { 'attr': {'class': 'form-control', 'placeholder':'Nombre'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.tiporamo)}}</div>*/
/*                         <div class="form_label">{{form_label(form.tiporamo, 'Tipo', {'label_attr': {'for': 'tipo'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.tiporamo, { 'attr': {'class': 'form-control', 'placeholder':'Tipo'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque">*/
/*                         {{form_widget(form.Guardar, { 'attr': {'class': 'btn btn-primary', 'id':'btn-guardar'} })}}*/
/*                         {{form_widget(form.Cancelar, { 'attr': {'class': 'btn btn-default', 'id':'btn-cancelar'} })}}*/
/*                     </div>*/
/*                     {{form_end(form)}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
