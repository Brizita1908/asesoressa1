<?php

/* AsesoresSAMainBundle:Default:aseguradora.php.twig */
class __TwigTemplate_31be55a3fdd962a81b92987e9f9a86940c06af71b4ad52e9eb2cd02d46ed8c27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSAMainBundle:Default:aseguradora.php.twig", 1);
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
        $__internal_a74741982b43f416e23f289c88a02fc80b3f64083691e4ee7256a30779889fb0 = $this->env->getExtension("native_profiler");
        $__internal_a74741982b43f416e23f289c88a02fc80b3f64083691e4ee7256a30779889fb0->enter($__internal_a74741982b43f416e23f289c88a02fc80b3f64083691e4ee7256a30779889fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSAMainBundle:Default:aseguradora.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a74741982b43f416e23f289c88a02fc80b3f64083691e4ee7256a30779889fb0->leave($__internal_a74741982b43f416e23f289c88a02fc80b3f64083691e4ee7256a30779889fb0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_992fac13602c41d8621c28ccbb1d075314023e4f6862b2cd8b68440ec4d66128 = $this->env->getExtension("native_profiler");
        $__internal_992fac13602c41d8621c28ccbb1d075314023e4f6862b2cd8b68440ec4d66128->enter($__internal_992fac13602c41d8621c28ccbb1d075314023e4f6862b2cd8b68440ec4d66128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Aseguradora";
        
        $__internal_992fac13602c41d8621c28ccbb1d075314023e4f6862b2cd8b68440ec4d66128->leave($__internal_992fac13602c41d8621c28ccbb1d075314023e4f6862b2cd8b68440ec4d66128_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_256ad161beb97cf5a587ceb719b50fadd7feb09501d2545f9fc7c6d05ddb2e9b = $this->env->getExtension("native_profiler");
        $__internal_256ad161beb97cf5a587ceb719b50fadd7feb09501d2545f9fc7c6d05ddb2e9b->enter($__internal_256ad161beb97cf5a587ceb719b50fadd7feb09501d2545f9fc7c6d05ddb2e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h3 class=\"text-center\">Registro de Aseguradora</h3>
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglaaseguradora", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglaaseguradora", array()), 'label', array("label_attr" => array("for" => "siglaaseguradora"), "label" => "Sigla"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglaaseguradora", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Sigla")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreaseguradora", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreaseguradora", array()), 'label', array("label_attr" => array("for" => "nombreaseguradora"), "label" => "Nombre"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreaseguradora", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-btn\">
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-style", "id" => "btn-guardar")));
        echo "
                        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("asesores_sa_listarAseguradora");
        echo "\" class=\"btn btn-primary\" role=\"button\">Ver Aseguradoras</a>
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
        
        $__internal_256ad161beb97cf5a587ceb719b50fadd7feb09501d2545f9fc7c6d05ddb2e9b->leave($__internal_256ad161beb97cf5a587ceb719b50fadd7feb09501d2545f9fc7c6d05ddb2e9b_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSAMainBundle:Default:aseguradora.php.twig";
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
/* {% block title %}Registro de Aseguradora{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-6 col-md-offset-3">*/
/*                     <h3 class="text-center">Registro de Aseguradora</h3>*/
/*                     {{ form_start(form)}}*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.siglaaseguradora)}}</div>*/
/*                         <div class="form_label">{{form_label(form.siglaaseguradora, 'Sigla', {'label_attr': {'for': 'siglaaseguradora'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.siglaaseguradora, { 'attr': {'class': 'form-control', 'placeholder':'Sigla'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.nombreaseguradora)}}</div>*/
/*                         <div class="form_label">{{form_label(form.nombreaseguradora, 'Nombre', {'label_attr': {'for': 'nombreaseguradora'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.nombreaseguradora, { 'attr': {'class': 'form-control', 'placeholder':'Nombre'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-btn">*/
/*                         {{form_widget(form.Guardar, { 'attr': {'class': 'btn btn-primary btn-style', 'id':'btn-guardar'} })}}*/
/*                         <a href="{{ path('asesores_sa_listarAseguradora') }}" class="btn btn-primary" role="button">Ver Aseguradoras</a>*/
/*                     </div>*/
/*                     {{form_end(form)}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
