<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_db1dece60af473d062f6e20a60182e609787af4461df4423a8df468042c21d84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fded62068919e7597c80e588d6e21e9fd1a04951e04457db106d333c58b4568 = $this->env->getExtension("native_profiler");
        $__internal_2fded62068919e7597c80e588d6e21e9fd1a04951e04457db106d333c58b4568->enter($__internal_2fded62068919e7597c80e588d6e21e9fd1a04951e04457db106d333c58b4568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fded62068919e7597c80e588d6e21e9fd1a04951e04457db106d333c58b4568->leave($__internal_2fded62068919e7597c80e588d6e21e9fd1a04951e04457db106d333c58b4568_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06faba6e1daac94dcb69017a227a73dac9551a232d99d1cb3d15020a44410c02 = $this->env->getExtension("native_profiler");
        $__internal_06faba6e1daac94dcb69017a227a73dac9551a232d99d1cb3d15020a44410c02->enter($__internal_06faba6e1daac94dcb69017a227a73dac9551a232d99d1cb3d15020a44410c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_06faba6e1daac94dcb69017a227a73dac9551a232d99d1cb3d15020a44410c02->leave($__internal_06faba6e1daac94dcb69017a227a73dac9551a232d99d1cb3d15020a44410c02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3faaed14e9023ca366b63eebe332dcc515f6761223191633e9b92d849a65fe4 = $this->env->getExtension("native_profiler");
        $__internal_e3faaed14e9023ca366b63eebe332dcc515f6761223191633e9b92d849a65fe4->enter($__internal_e3faaed14e9023ca366b63eebe332dcc515f6761223191633e9b92d849a65fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e3faaed14e9023ca366b63eebe332dcc515f6761223191633e9b92d849a65fe4->leave($__internal_e3faaed14e9023ca366b63eebe332dcc515f6761223191633e9b92d849a65fe4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_47361ba3af64f743238dcae2ed0a73ecf07ccdf9d1870a88072f153abfb4befb = $this->env->getExtension("native_profiler");
        $__internal_47361ba3af64f743238dcae2ed0a73ecf07ccdf9d1870a88072f153abfb4befb->enter($__internal_47361ba3af64f743238dcae2ed0a73ecf07ccdf9d1870a88072f153abfb4befb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_47361ba3af64f743238dcae2ed0a73ecf07ccdf9d1870a88072f153abfb4befb->leave($__internal_47361ba3af64f743238dcae2ed0a73ecf07ccdf9d1870a88072f153abfb4befb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
