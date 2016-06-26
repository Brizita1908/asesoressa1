<?php

/* base.html.twig */
class __TwigTemplate_1005bde5ad948f14a220dbc495a69e706b9975c3796349de95946259386982f9 extends Twig_Template
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
        $__internal_fb35016897b01c52669c9ed3aeeb24c09ec02f14b8ec2077581ab1014ae8f8b9 = $this->env->getExtension("native_profiler");
        $__internal_fb35016897b01c52669c9ed3aeeb24c09ec02f14b8ec2077581ab1014ae8f8b9->enter($__internal_fb35016897b01c52669c9ed3aeeb24c09ec02f14b8ec2077581ab1014ae8f8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fb35016897b01c52669c9ed3aeeb24c09ec02f14b8ec2077581ab1014ae8f8b9->leave($__internal_fb35016897b01c52669c9ed3aeeb24c09ec02f14b8ec2077581ab1014ae8f8b9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5271cde94f6de21c829df2587b3136c876f4593c889b6b258bf35eaceb272170 = $this->env->getExtension("native_profiler");
        $__internal_5271cde94f6de21c829df2587b3136c876f4593c889b6b258bf35eaceb272170->enter($__internal_5271cde94f6de21c829df2587b3136c876f4593c889b6b258bf35eaceb272170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5271cde94f6de21c829df2587b3136c876f4593c889b6b258bf35eaceb272170->leave($__internal_5271cde94f6de21c829df2587b3136c876f4593c889b6b258bf35eaceb272170_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f188b2090130c4c5a4ad04537126f04a8e3cb97b189ed47a86c37d0560d62e3f = $this->env->getExtension("native_profiler");
        $__internal_f188b2090130c4c5a4ad04537126f04a8e3cb97b189ed47a86c37d0560d62e3f->enter($__internal_f188b2090130c4c5a4ad04537126f04a8e3cb97b189ed47a86c37d0560d62e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f188b2090130c4c5a4ad04537126f04a8e3cb97b189ed47a86c37d0560d62e3f->leave($__internal_f188b2090130c4c5a4ad04537126f04a8e3cb97b189ed47a86c37d0560d62e3f_prof);

    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6d86773f8d8a87c762a1183a2b595d8aa348efffce688eaa59e28ee23a9177c5 = $this->env->getExtension("native_profiler");
        $__internal_6d86773f8d8a87c762a1183a2b595d8aa348efffce688eaa59e28ee23a9177c5->enter($__internal_6d86773f8d8a87c762a1183a2b595d8aa348efffce688eaa59e28ee23a9177c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_6d86773f8d8a87c762a1183a2b595d8aa348efffce688eaa59e28ee23a9177c5->leave($__internal_6d86773f8d8a87c762a1183a2b595d8aa348efffce688eaa59e28ee23a9177c5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0507ebe24648168cff627ce4e1ebdcce4235b53cfc69ac8649c15bee7ec2a41 = $this->env->getExtension("native_profiler");
        $__internal_c0507ebe24648168cff627ce4e1ebdcce4235b53cfc69ac8649c15bee7ec2a41->enter($__internal_c0507ebe24648168cff627ce4e1ebdcce4235b53cfc69ac8649c15bee7ec2a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0507ebe24648168cff627ce4e1ebdcce4235b53cfc69ac8649c15bee7ec2a41->leave($__internal_c0507ebe24648168cff627ce4e1ebdcce4235b53cfc69ac8649c15bee7ec2a41_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6473eb0b220d682d1569fcb09e1c9d26a5507192442486daf5e70d485ee9e9ec = $this->env->getExtension("native_profiler");
        $__internal_6473eb0b220d682d1569fcb09e1c9d26a5507192442486daf5e70d485ee9e9ec->enter($__internal_6473eb0b220d682d1569fcb09e1c9d26a5507192442486daf5e70d485ee9e9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6473eb0b220d682d1569fcb09e1c9d26a5507192442486daf5e70d485ee9e9ec->leave($__internal_6473eb0b220d682d1569fcb09e1c9d26a5507192442486daf5e70d485ee9e9ec_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
