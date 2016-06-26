<?php

/* AsesoresSAMainBundle:Default:anexo.php.twig */
class __TwigTemplate_b38691e227eb3eb7efe65700a89505ebd8de26e798c4d649808a9d74c9b4cc10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSAMainBundle:Default:anexo.php.twig", 1);
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
        $__internal_3ace6529c4bfa917c4c083d93c5f9f74f26092ad72e8c46023806e6b2618cf67 = $this->env->getExtension("native_profiler");
        $__internal_3ace6529c4bfa917c4c083d93c5f9f74f26092ad72e8c46023806e6b2618cf67->enter($__internal_3ace6529c4bfa917c4c083d93c5f9f74f26092ad72e8c46023806e6b2618cf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSAMainBundle:Default:anexo.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ace6529c4bfa917c4c083d93c5f9f74f26092ad72e8c46023806e6b2618cf67->leave($__internal_3ace6529c4bfa917c4c083d93c5f9f74f26092ad72e8c46023806e6b2618cf67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_047b4b1ff0679475245d283bb18d666c97e71427997260c8a634be47b1ea9560 = $this->env->getExtension("native_profiler");
        $__internal_047b4b1ff0679475245d283bb18d666c97e71427997260c8a634be47b1ea9560->enter($__internal_047b4b1ff0679475245d283bb18d666c97e71427997260c8a634be47b1ea9560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Anexo";
        
        $__internal_047b4b1ff0679475245d283bb18d666c97e71427997260c8a634be47b1ea9560->leave($__internal_047b4b1ff0679475245d283bb18d666c97e71427997260c8a634be47b1ea9560_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d022c401db2e18a5f2f7a111e383648f8f1ef6128e270ce8b392dbd2017033c = $this->env->getExtension("native_profiler");
        $__internal_0d022c401db2e18a5f2f7a111e383648f8f1ef6128e270ce8b392dbd2017033c->enter($__internal_0d022c401db2e18a5f2f7a111e383648f8f1ef6128e270ce8b392dbd2017033c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-5 col-md-offset-3\">
                    <h3>Registro de Anexo</h3>
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "GET", "id" => "anexo"));
        echo "
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroanexo", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroanexo", array()), 'label', array("label_attr" => array("for" => "numeroanexo"), "label" => "Numero Anexo"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroanexo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero Anexo")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeropoliza", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeropoliza", array()), 'label', array("label_attr" => array("for" => "numeropoliza"), "label" => "Numero Poliza"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeropoliza", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero Poliza")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglaramo", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglaramo", array()), 'label', array("label_attr" => array("for" => "siglaramo"), "label" => "Ramo"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglaramo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ramo")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iniciovigenciaanexo", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iniciovigenciaanexo", array()), 'label', array("label_attr" => array("for" => "iniciovigenciaanexo"), "label" => "Inicio de Vigencia Anexo"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iniciovigenciaanexo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Inicio de Vigencia Anexo")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "finvigenciaanexo", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "finvigenciaanexo", array()), 'label', array("label_attr" => array("for" => "finvigenciaanexo"), "label" => "Fin de Vigencia Anexo"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "finvigenciaanexo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fin de Vigencia Anexo")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valortotalaseguradoanexo", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valortotalaseguradoanexo", array()), 'label', array("label_attr" => array("for" => "valortotalaseguradoanexo"), "label" => "Valor Total Asegurado en el Anexo"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valortotalaseguradoanexo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Valor Total Asegurado en el Anexo")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idpago", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idpago", array()), 'label', array("label_attr" => array("for" => "idpago"), "label" => "Pago Anexo"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idpago", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Pago Anexo")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque\">
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "id" => "btn-guardar")));
        echo "
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cancelar", array()), 'widget', array("attr" => array("class" => "btn btn-default", "id" => "btn-cancelar")));
        echo "
                    </div>
                    ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_0d022c401db2e18a5f2f7a111e383648f8f1ef6128e270ce8b392dbd2017033c->leave($__internal_0d022c401db2e18a5f2f7a111e383648f8f1ef6128e270ce8b392dbd2017033c_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSAMainBundle:Default:anexo.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 51,  167 => 49,  163 => 48,  157 => 45,  153 => 44,  149 => 43,  143 => 40,  139 => 39,  135 => 38,  129 => 35,  125 => 34,  121 => 33,  115 => 30,  111 => 29,  107 => 28,  101 => 25,  97 => 24,  93 => 23,  87 => 20,  83 => 19,  79 => 18,  73 => 15,  69 => 14,  65 => 13,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Registro de Anexo{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-5 col-md-offset-3">*/
/*                     <h3>Registro de Anexo</h3>*/
/*                     {{ form_start(form, {'method': 'GET', 'id':'anexo'})}}*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.numeroanexo)}}</div>*/
/*                         <div class="form_label">{{form_label(form.numeroanexo, 'Numero Anexo', {'label_attr': {'for': 'numeroanexo'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.numeroanexo, { 'attr': {'class': 'form-control', 'placeholder':'Numero Anexo'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.numeropoliza)}}</div>*/
/*                         <div class="form_label">{{form_label(form.numeropoliza, 'Numero Poliza', {'label_attr': {'for': 'numeropoliza'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.numeropoliza, { 'attr': {'class': 'form-control', 'placeholder':'Numero Poliza'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.siglaramo)}}</div>*/
/*                         <div class="form_label">{{form_label(form.siglaramo, 'Ramo', {'label_attr': {'for': 'siglaramo'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.siglaramo, { 'attr': {'class': 'form-control', 'placeholder':'Ramo'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.iniciovigenciaanexo)}}</div>*/
/*                         <div class="form_label">{{form_label(form.iniciovigenciaanexo, 'Inicio de Vigencia Anexo', {'label_attr': {'for': 'iniciovigenciaanexo'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.iniciovigenciaanexo, { 'attr': {'class': 'form-control', 'placeholder':'Inicio de Vigencia Anexo'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.finvigenciaanexo)}}</div>*/
/*                         <div class="form_label">{{form_label(form.finvigenciaanexo, 'Fin de Vigencia Anexo', {'label_attr': {'for': 'finvigenciaanexo'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.finvigenciaanexo, { 'attr': {'class': 'form-control', 'placeholder':'Fin de Vigencia Anexo'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.valortotalaseguradoanexo)}}</div>*/
/*                         <div class="form_label">{{form_label(form.valortotalaseguradoanexo, 'Valor Total Asegurado en el Anexo', {'label_attr': {'for': 'valortotalaseguradoanexo'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.valortotalaseguradoanexo, { 'attr': {'class': 'form-control', 'placeholder':'Valor Total Asegurado en el Anexo'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.idpago)}}</div>*/
/*                         <div class="form_label">{{form_label(form.idpago, 'Pago Anexo', {'label_attr': {'for': 'idpago'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.idpago, { 'attr': {'class': 'form-control', 'placeholder':'Pago Anexo'} })}}</div>*/
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
