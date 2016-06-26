<?php

/* AsesoresSAMainBundle:Default:usuario.php.twig */
class __TwigTemplate_190fd590a5772b7f05db870ebfdb516829f47d6f7dde98cfa40be7072d3d2345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSAMainBundle:Default:usuario.php.twig", 1);
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
        $__internal_3aee36ac3c90a929adaefd78fda7613506f45a36aeeee30aa9e5f75f4795b0ad = $this->env->getExtension("native_profiler");
        $__internal_3aee36ac3c90a929adaefd78fda7613506f45a36aeeee30aa9e5f75f4795b0ad->enter($__internal_3aee36ac3c90a929adaefd78fda7613506f45a36aeeee30aa9e5f75f4795b0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSAMainBundle:Default:usuario.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aee36ac3c90a929adaefd78fda7613506f45a36aeeee30aa9e5f75f4795b0ad->leave($__internal_3aee36ac3c90a929adaefd78fda7613506f45a36aeeee30aa9e5f75f4795b0ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_71329f1132f5724237dba01f65f9533129cea3f1c9de78de1081d2de85bc4f11 = $this->env->getExtension("native_profiler");
        $__internal_71329f1132f5724237dba01f65f9533129cea3f1c9de78de1081d2de85bc4f11->enter($__internal_71329f1132f5724237dba01f65f9533129cea3f1c9de78de1081d2de85bc4f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Usuarios";
        
        $__internal_71329f1132f5724237dba01f65f9533129cea3f1c9de78de1081d2de85bc4f11->leave($__internal_71329f1132f5724237dba01f65f9533129cea3f1c9de78de1081d2de85bc4f11_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_78a5d82b16396e94d46a74421b031ec7dd604fb29e8fc2ea75bc7f052e58fd7b = $this->env->getExtension("native_profiler");
        $__internal_78a5d82b16396e94d46a74421b031ec7dd604fb29e8fc2ea75bc7f052e58fd7b->enter($__internal_78a5d82b16396e94d46a74421b031ec7dd604fb29e8fc2ea75bc7f052e58fd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h3 class=\"text-center\">Registro de Usuarios</h3>
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idusuario", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idusuario", array()), 'label', array("label_attr" => array("for" => "idusuario"), "label" => "Usuario"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idusuario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Usuario")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasenausuario", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasenausuario", array()), 'label', array("label_attr" => array("for" => "contrasenausuario"), "label" => "Contraseña"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasenausuario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Contraseña")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rolperfil", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rolperfil", array()), 'label', array("label_attr" => array("for" => "rolperfil"), "label" => "Rol de Usuario"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rolperfil", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                        
                    </div>
                    <div class=\"form_bloque form-btn\">
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Ingresar", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-style", "id" => "btn-guardar")));
        echo "
                       
                    </div>
                    ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_78a5d82b16396e94d46a74421b031ec7dd604fb29e8fc2ea75bc7f052e58fd7b->leave($__internal_78a5d82b16396e94d46a74421b031ec7dd604fb29e8fc2ea75bc7f052e58fd7b_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSAMainBundle:Default:usuario.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  108 => 29,  101 => 25,  97 => 24,  93 => 23,  87 => 20,  83 => 19,  79 => 18,  73 => 15,  69 => 14,  65 => 13,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Registro de Usuarios{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-6 col-md-offset-3">*/
/*                     <h3 class="text-center">Registro de Usuarios</h3>*/
/*                     {{ form_start(form)}}*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.idusuario)}}</div>*/
/*                         <div class="form_label">{{form_label(form.idusuario, 'Usuario', {'label_attr': {'for': 'idusuario'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.idusuario, { 'attr': {'class': 'form-control', 'placeholder':'Usuario'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.contrasenausuario)}}</div>*/
/*                         <div class="form_label">{{form_label(form.contrasenausuario, 'Contraseña', {'label_attr': {'for': 'contrasenausuario'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.contrasenausuario, { 'attr': {'class': 'form-control', 'placeholder':'Contraseña'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.rolperfil)}}</div>*/
/*                         <div class="form_label">{{form_label(form.rolperfil, 'Rol de Usuario', {'label_attr': {'for': 'rolperfil'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.rolperfil, { 'attr': {'class': 'form-control'} })}}</div>*/
/*                         */
/*                     </div>*/
/*                     <div class="form_bloque form-btn">*/
/*                         {{form_widget(form.Ingresar, { 'attr': {'class': 'btn btn-primary btn-style', 'id':'btn-guardar'} })}}*/
/*                        */
/*                     </div>*/
/*                     {{form_end(form)}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
