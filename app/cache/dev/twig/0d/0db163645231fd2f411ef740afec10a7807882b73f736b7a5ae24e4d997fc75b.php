<?php

/* AsesoresSAMainBundle:Default:cliente.php.twig */
class __TwigTemplate_492c1f61550d1f73b36b6dec0cbd805625f2f53880542896082034021a64e6ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSAMainBundle:Default:cliente.php.twig", 1);
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
        $__internal_692854bfed9e0689816703636775ad303c40f185ae3dfe992409028b33d4b177 = $this->env->getExtension("native_profiler");
        $__internal_692854bfed9e0689816703636775ad303c40f185ae3dfe992409028b33d4b177->enter($__internal_692854bfed9e0689816703636775ad303c40f185ae3dfe992409028b33d4b177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSAMainBundle:Default:cliente.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_692854bfed9e0689816703636775ad303c40f185ae3dfe992409028b33d4b177->leave($__internal_692854bfed9e0689816703636775ad303c40f185ae3dfe992409028b33d4b177_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_18a6e0f281f9d223df861b347f6da734e509f528399bf4ce7cfc3d9826f47d3e = $this->env->getExtension("native_profiler");
        $__internal_18a6e0f281f9d223df861b347f6da734e509f528399bf4ce7cfc3d9826f47d3e->enter($__internal_18a6e0f281f9d223df861b347f6da734e509f528399bf4ce7cfc3d9826f47d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Cliente";
        
        $__internal_18a6e0f281f9d223df861b347f6da734e509f528399bf4ce7cfc3d9826f47d3e->leave($__internal_18a6e0f281f9d223df861b347f6da734e509f528399bf4ce7cfc3d9826f47d3e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7946b6fc2db278f8fe3dacc8ff009ec710444f4e954434192aa96d67b18bfe2 = $this->env->getExtension("native_profiler");
        $__internal_d7946b6fc2db278f8fe3dacc8ff009ec710444f4e954434192aa96d67b18bfe2->enter($__internal_d7946b6fc2db278f8fe3dacc8ff009ec710444f4e954434192aa96d67b18bfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h3 class=\"text-center\">Registro de Cliente</h3>
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filecliente", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filecliente", array()), 'label', array("label_attr" => array("for" => "filecliente"), "label" => "File"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filecliente", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "File")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idcliente", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idcliente", array()), 'label', array("label_attr" => array("for" => "idcliente"), "label" => "Numero de Cedula o RUC"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idcliente", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero de Cedula o RUC")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrescliente", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrescliente", array()), 'label', array("label_attr" => array("for" => "nombrescliente"), "label" => "Nombres"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrescliente", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombres")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoscliente", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoscliente", array()), 'label', array("label_attr" => array("for" => "apellidoscliente"), "label" => "Apellidos"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoscliente", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Apellidos")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrelegalcliente", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrelegalcliente", array()), 'label', array("label_attr" => array("for" => "nombrelegalcliente"), "label" => "Nombre Legal"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrelegalcliente", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre Legal")));
        echo "</div>
                    </div>
                    <div class=\"form-group\">
                        <label>Nota: 
                            <br> - Se debe llenar en Nombre Legal e ingresar un RUC en caso de que el cliente sea una empresa
                            <br> - Se debe llenar en Nombres y Apellidos e ingresar Número de Cédula en caso de que el cliente sea una persona natural.
                        </label>
                    </div>
                    <div class=\"form_bloque form-btn\">
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-style", "id" => "btn-guardar")));
        echo "
                        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("asesores_sa_listarCliente");
        echo "\" class=\"btn btn-primary\" role=\"button\">Ver Clientes</a>
                    </div>
                    ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d7946b6fc2db278f8fe3dacc8ff009ec710444f4e954434192aa96d67b18bfe2->leave($__internal_d7946b6fc2db278f8fe3dacc8ff009ec710444f4e954434192aa96d67b18bfe2_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSAMainBundle:Default:cliente.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 47,  145 => 45,  141 => 44,  129 => 35,  125 => 34,  121 => 33,  115 => 30,  111 => 29,  107 => 28,  101 => 25,  97 => 24,  93 => 23,  87 => 20,  83 => 19,  79 => 18,  73 => 15,  69 => 14,  65 => 13,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Registro de Cliente{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-6 col-md-offset-3">*/
/*                     <h3 class="text-center">Registro de Cliente</h3>*/
/*                     {{ form_start(form)}}*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.filecliente)}}</div>*/
/*                         <div class="form_label">{{form_label(form.filecliente, 'File', {'label_attr': {'for': 'filecliente'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.filecliente, { 'attr': {'class': 'form-control', 'placeholder':'File'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.idcliente)}}</div>*/
/*                         <div class="form_label">{{form_label(form.idcliente, 'Numero de Cedula o RUC', {'label_attr': {'for': 'idcliente'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.idcliente, { 'attr': {'class': 'form-control', 'placeholder':'Numero de Cedula o RUC'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.nombrescliente)}}</div>*/
/*                         <div class="form_label">{{form_label(form.nombrescliente, 'Nombres', {'label_attr': {'for': 'nombrescliente'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.nombrescliente, { 'attr': {'class': 'form-control', 'placeholder':'Nombres'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.apellidoscliente)}}</div>*/
/*                         <div class="form_label">{{form_label(form.apellidoscliente, 'Apellidos', {'label_attr': {'for': 'apellidoscliente'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.apellidoscliente, { 'attr': {'class': 'form-control', 'placeholder':'Apellidos'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.nombrelegalcliente)}}</div>*/
/*                         <div class="form_label">{{form_label(form.nombrelegalcliente, 'Nombre Legal', {'label_attr': {'for': 'nombrelegalcliente'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.nombrelegalcliente, { 'attr': {'class': 'form-control', 'placeholder':'Nombre Legal'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label>Nota: */
/*                             <br> - Se debe llenar en Nombre Legal e ingresar un RUC en caso de que el cliente sea una empresa*/
/*                             <br> - Se debe llenar en Nombres y Apellidos e ingresar Número de Cédula en caso de que el cliente sea una persona natural.*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="form_bloque form-btn">*/
/*                         {{form_widget(form.Guardar, { 'attr': {'class': 'btn btn-primary btn-style', 'id':'btn-guardar'} })}}*/
/*                         <a href="{{ path('asesores_sa_listarCliente') }}" class="btn btn-primary" role="button">Ver Clientes</a>*/
/*                     </div>*/
/*                     {{form_end(form)}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
