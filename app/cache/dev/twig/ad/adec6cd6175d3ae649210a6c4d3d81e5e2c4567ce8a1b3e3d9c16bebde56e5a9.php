<?php

/* ::base.html.twig */
class __TwigTemplate_2f024a63c6782758e6ab04d82647c6d8b6e9b83cf9eebe0044312e4dbc88d678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2380ca2e0d4bd8dfdd8428daecbdbd942bb9feb60eb1ff5dac777b84351a89d7 = $this->env->getExtension("native_profiler");
        $__internal_2380ca2e0d4bd8dfdd8428daecbdbd942bb9feb60eb1ff5dac777b84351a89d7->enter($__internal_2380ca2e0d4bd8dfdd8428daecbdbd942bb9feb60eb1ff5dac777b84351a89d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 8
        $this->displayBlock('sidebar', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_2380ca2e0d4bd8dfdd8428daecbdbd942bb9feb60eb1ff5dac777b84351a89d7->leave($__internal_2380ca2e0d4bd8dfdd8428daecbdbd942bb9feb60eb1ff5dac777b84351a89d7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_583c75883941e09a1b41bfcbf63f98545b88ca0b184a6e56289e4e62daa5e722 = $this->env->getExtension("native_profiler");
        $__internal_583c75883941e09a1b41bfcbf63f98545b88ca0b184a6e56289e4e62daa5e722->enter($__internal_583c75883941e09a1b41bfcbf63f98545b88ca0b184a6e56289e4e62daa5e722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_583c75883941e09a1b41bfcbf63f98545b88ca0b184a6e56289e4e62daa5e722->leave($__internal_583c75883941e09a1b41bfcbf63f98545b88ca0b184a6e56289e4e62daa5e722_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ba661ce905fe8a12a76372ae572ffccee7b7e6909551976b823376db5d54258 = $this->env->getExtension("native_profiler");
        $__internal_8ba661ce905fe8a12a76372ae572ffccee7b7e6909551976b823376db5d54258->enter($__internal_8ba661ce905fe8a12a76372ae572ffccee7b7e6909551976b823376db5d54258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8ba661ce905fe8a12a76372ae572ffccee7b7e6909551976b823376db5d54258->leave($__internal_8ba661ce905fe8a12a76372ae572ffccee7b7e6909551976b823376db5d54258_prof);

    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_460637e1f584e8fa516f18465726af1585d9931ebdc551483cf7edfa501e02ef = $this->env->getExtension("native_profiler");
        $__internal_460637e1f584e8fa516f18465726af1585d9931ebdc551483cf7edfa501e02ef->enter($__internal_460637e1f584e8fa516f18465726af1585d9931ebdc551483cf7edfa501e02ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_460637e1f584e8fa516f18465726af1585d9931ebdc551483cf7edfa501e02ef->leave($__internal_460637e1f584e8fa516f18465726af1585d9931ebdc551483cf7edfa501e02ef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ae637b94817705a4a6f49b3ee3e27467bd77c366b51f6779a20bfda0f457996 = $this->env->getExtension("native_profiler");
        $__internal_1ae637b94817705a4a6f49b3ee3e27467bd77c366b51f6779a20bfda0f457996->enter($__internal_1ae637b94817705a4a6f49b3ee3e27467bd77c366b51f6779a20bfda0f457996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ae637b94817705a4a6f49b3ee3e27467bd77c366b51f6779a20bfda0f457996->leave($__internal_1ae637b94817705a4a6f49b3ee3e27467bd77c366b51f6779a20bfda0f457996_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7badbaf1bfab81dcd7a070fd94fad70414fc953da0daa14dd378945cdcf20d4c = $this->env->getExtension("native_profiler");
        $__internal_7badbaf1bfab81dcd7a070fd94fad70414fc953da0daa14dd378945cdcf20d4c->enter($__internal_7badbaf1bfab81dcd7a070fd94fad70414fc953da0daa14dd378945cdcf20d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7badbaf1bfab81dcd7a070fd94fad70414fc953da0daa14dd378945cdcf20d4c->leave($__internal_7badbaf1bfab81dcd7a070fd94fad70414fc953da0daa14dd378945cdcf20d4c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 12,  98 => 11,  87 => 8,  76 => 6,  64 => 5,  55 => 13,  52 => 12,  50 => 11,  46 => 9,  44 => 8,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% block sidebar %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
