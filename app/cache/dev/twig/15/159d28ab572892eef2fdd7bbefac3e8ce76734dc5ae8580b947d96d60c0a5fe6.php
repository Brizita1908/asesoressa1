<?php

/* AsesoresSAMainBundle:Default:ramo.php.twig */
class __TwigTemplate_0c9ddf11468d220d587109e55da632e1c7dfc13eed058b4ae93d448a3c228076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSAMainBundle:Default:ramo.php.twig", 1);
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
        $__internal_e6228400a33ee98e574ec13884a232150a6d29c52eb63b99507d83632f3f45f8 = $this->env->getExtension("native_profiler");
        $__internal_e6228400a33ee98e574ec13884a232150a6d29c52eb63b99507d83632f3f45f8->enter($__internal_e6228400a33ee98e574ec13884a232150a6d29c52eb63b99507d83632f3f45f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSAMainBundle:Default:ramo.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6228400a33ee98e574ec13884a232150a6d29c52eb63b99507d83632f3f45f8->leave($__internal_e6228400a33ee98e574ec13884a232150a6d29c52eb63b99507d83632f3f45f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_baaeaf468c8a9f278b8fd3cfbb5c2121b2e4973816c010825e7ba025cac615f3 = $this->env->getExtension("native_profiler");
        $__internal_baaeaf468c8a9f278b8fd3cfbb5c2121b2e4973816c010825e7ba025cac615f3->enter($__internal_baaeaf468c8a9f278b8fd3cfbb5c2121b2e4973816c010825e7ba025cac615f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registro de Ramo";
        
        $__internal_baaeaf468c8a9f278b8fd3cfbb5c2121b2e4973816c010825e7ba025cac615f3->leave($__internal_baaeaf468c8a9f278b8fd3cfbb5c2121b2e4973816c010825e7ba025cac615f3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f18cd338835b6848de861356f951cb67d81ee51c6a00c6933ceb7b2cd56f993 = $this->env->getExtension("native_profiler");
        $__internal_4f18cd338835b6848de861356f951cb67d81ee51c6a00c6933ceb7b2cd56f993->enter($__internal_4f18cd338835b6848de861356f951cb67d81ee51c6a00c6933ceb7b2cd56f993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h3 class=\"text-center\">Registro de Ramo</h3>
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
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
                    <div class=\"form_bloque form-btn\">
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-style", "id" => "btn-guardar")));
        echo "
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("asesores_sa_listarRamo");
        echo "\" class=\"btn btn-primary\" role=\"button\">Ver Ramos</a>
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
        
        $__internal_4f18cd338835b6848de861356f951cb67d81ee51c6a00c6933ceb7b2cd56f993->leave($__internal_4f18cd338835b6848de861356f951cb67d81ee51c6a00c6933ceb7b2cd56f993_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSAMainBundle:Default:ramo.php.twig";
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
/*                 <div class="col-md-6 col-md-offset-3">*/
/*                     <h3 class="text-center">Registro de Ramo</h3>*/
/*                     {{ form_start(form)}}*/
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
/*                     <div class="form_bloque form-btn">*/
/*                         {{form_widget(form.Guardar, { 'attr': {'class': 'btn btn-primary btn-style', 'id':'btn-guardar'} })}}*/
/*                         <a href="{{ path('asesores_sa_listarRamo') }}" class="btn btn-primary" role="button">Ver Ramos</a>*/
/*                     </div>*/
/*                     {{form_end(form)}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
