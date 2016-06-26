<?php

/* AsesoresSAMainBundle:Default:index.html.twig */
class __TwigTemplate_7f1fb0d669529c0865b314b47b37df2dbb308951d39444f7adbfb092e68f51cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSAMainBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ef9dce97942f6059663d98f5aa3cf6bcbfa683642c1305c0548d8ca2b022731 = $this->env->getExtension("native_profiler");
        $__internal_2ef9dce97942f6059663d98f5aa3cf6bcbfa683642c1305c0548d8ca2b022731->enter($__internal_2ef9dce97942f6059663d98f5aa3cf6bcbfa683642c1305c0548d8ca2b022731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSAMainBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ef9dce97942f6059663d98f5aa3cf6bcbfa683642c1305c0548d8ca2b022731->leave($__internal_2ef9dce97942f6059663d98f5aa3cf6bcbfa683642c1305c0548d8ca2b022731_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2dc8ac7688e46199f2506d77f20cf1c48799474519190a8d3148a45866267e9 = $this->env->getExtension("native_profiler");
        $__internal_e2dc8ac7688e46199f2506d77f20cf1c48799474519190a8d3148a45866267e9->enter($__internal_e2dc8ac7688e46199f2506d77f20cf1c48799474519190a8d3148a45866267e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asesores S.A.";
        
        $__internal_e2dc8ac7688e46199f2506d77f20cf1c48799474519190a8d3148a45866267e9->leave($__internal_e2dc8ac7688e46199f2506d77f20cf1c48799474519190a8d3148a45866267e9_prof);

    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a1ad4de2ff9a37b97140db94a20a2dfdae4fcba829566a1acfaf01415eca5d52 = $this->env->getExtension("native_profiler");
        $__internal_a1ad4de2ff9a37b97140db94a20a2dfdae4fcba829566a1acfaf01415eca5d52->enter($__internal_a1ad4de2ff9a37b97140db94a20a2dfdae4fcba829566a1acfaf01415eca5d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_a1ad4de2ff9a37b97140db94a20a2dfdae4fcba829566a1acfaf01415eca5d52->leave($__internal_a1ad4de2ff9a37b97140db94a20a2dfdae4fcba829566a1acfaf01415eca5d52_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ad0e4315b435863238033e6a99e433803d321cd9190e01965531144cea2977c = $this->env->getExtension("native_profiler");
        $__internal_7ad0e4315b435863238033e6a99e433803d321cd9190e01965531144cea2977c->enter($__internal_7ad0e4315b435863238033e6a99e433803d321cd9190e01965531144cea2977c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div>
                    <div class=\"col-md-4 img-logo\"><br>
                        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressamain/images/asesoresI.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Responsive image\" />

                    </div>
                    <div class=\"col-md-2 col-md-offset-6 img-logo\"><br>
                        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressamain/images/asesoresII.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Responsive image\" />
                    </div>
                </div>
                
                <div class=\"col-md-6 col-md-offset-3\">
                    
                    <h1 class=\"text-center\">Bienvenido al Sistema</h1>
                    <h3 class=\"text-center\">Inicia Sesion</h3>
                    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "GET", "id" => "usuario"));
        echo "
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idusuario", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idusuario", array()), 'label', array("label_attr" => array("for" => "idusuario"), "label" => "Nombre de Usuario"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idusuario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Usuario")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        <div class=\"form_error\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasenausuario", array()), 'errors');
        echo "</div>
                        <div class=\"form_label\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasenausuario", array()), 'label', array("label_attr" => array("for" => "contrasenausuario"), "label" => "Contraseña"));
        echo "</div>
                        <div class=\"form_input\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasenausuario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Contraseña")));
        echo "</div>
                    </div>
                    <div class=\"form_bloque form-group\">
                        
                       
                    </div>
                    <div class=\"form_bloque form-btn\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Ingresar", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-style", "id" => "btn-ingresar")));
        echo "
                        
                    </div>
                    ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_7ad0e4315b435863238033e6a99e433803d321cd9190e01965531144cea2977c->leave($__internal_7ad0e4315b435863238033e6a99e433803d321cd9190e01965531144cea2977c_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSAMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 43,  127 => 40,  117 => 33,  113 => 32,  109 => 31,  103 => 28,  99 => 27,  95 => 26,  90 => 24,  79 => 16,  72 => 12,  65 => 7,  59 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Asesores S.A.{% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div>*/
/*                     <div class="col-md-4 img-logo"><br>*/
/*                         <img src="{{ asset('bundles/asesoressamain/images/asesoresI.jpg') }}" class="img-responsive img-thumbnail" alt="Responsive image" />*/
/* */
/*                     </div>*/
/*                     <div class="col-md-2 col-md-offset-6 img-logo"><br>*/
/*                         <img src="{{ asset('bundles/asesoressamain/images/asesoresII.jpg') }}" class="img-responsive img-thumbnail" alt="Responsive image" />*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="col-md-6 col-md-offset-3">*/
/*                     */
/*                     <h1 class="text-center">Bienvenido al Sistema</h1>*/
/*                     <h3 class="text-center">Inicia Sesion</h3>*/
/*                     {{ form_start(form, {'method': 'GET', 'id':'usuario'})}}*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.idusuario)}}</div>*/
/*                         <div class="form_label">{{form_label(form.idusuario, 'Nombre de Usuario', {'label_attr': {'for': 'idusuario'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.idusuario, { 'attr': {'class': 'form-control', 'placeholder':'Usuario'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         <div class="form_error">{{form_errors(form.contrasenausuario)}}</div>*/
/*                         <div class="form_label">{{form_label(form.contrasenausuario, 'Contraseña', {'label_attr': {'for': 'contrasenausuario'}})}}</div>*/
/*                         <div class="form_input">{{form_widget(form.contrasenausuario, { 'attr': {'class': 'form-control', 'placeholder':'Contraseña'} })}}</div>*/
/*                     </div>*/
/*                     <div class="form_bloque form-group">*/
/*                         */
/*                        */
/*                     </div>*/
/*                     <div class="form_bloque form-btn">*/
/*                         {{form_widget(form.Ingresar, { 'attr': {'class': 'btn btn-primary btn-style', 'id':'btn-ingresar'} })}}*/
/*                         */
/*                     </div>*/
/*                     {{form_end(form)}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
