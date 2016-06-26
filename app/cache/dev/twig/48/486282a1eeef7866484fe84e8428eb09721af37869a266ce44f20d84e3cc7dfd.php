<?php

/* ::layout.html.twig */
class __TwigTemplate_698d2d936f6afc2f5504542c4b79d6f39b5ea39c0111a8664a8efebf9567468a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b8bb93742954f1a20dd2bc6e5bcd101c5c74987d764ed29e30c69be7cd0b86a = $this->env->getExtension("native_profiler");
        $__internal_2b8bb93742954f1a20dd2bc6e5bcd101c5c74987d764ed29e30c69be7cd0b86a->enter($__internal_2b8bb93742954f1a20dd2bc6e5bcd101c5c74987d764ed29e30c69be7cd0b86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b8bb93742954f1a20dd2bc6e5bcd101c5c74987d764ed29e30c69be7cd0b86a->leave($__internal_2b8bb93742954f1a20dd2bc6e5bcd101c5c74987d764ed29e30c69be7cd0b86a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_693cae152434e4174662ae3852e087ea238961c15ed71e56a5db47fbf0941e26 = $this->env->getExtension("native_profiler");
        $__internal_693cae152434e4174662ae3852e087ea238961c15ed71e56a5db47fbf0941e26->enter($__internal_693cae152434e4174662ae3852e087ea238961c15ed71e56a5db47fbf0941e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido Asesores SA";
        
        $__internal_693cae152434e4174662ae3852e087ea238961c15ed71e56a5db47fbf0941e26->leave($__internal_693cae152434e4174662ae3852e087ea238961c15ed71e56a5db47fbf0941e26_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6cfe1814e079ffa7109bdd71f8650f416902ce76725a401c062eb8af2f04c72 = $this->env->getExtension("native_profiler");
        $__internal_d6cfe1814e079ffa7109bdd71f8650f416902ce76725a401c062eb8af2f04c72->enter($__internal_d6cfe1814e079ffa7109bdd71f8650f416902ce76725a401c062eb8af2f04c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressamain/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressamain/css/estilos.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d6cfe1814e079ffa7109bdd71f8650f416902ce76725a401c062eb8af2f04c72->leave($__internal_d6cfe1814e079ffa7109bdd71f8650f416902ce76725a401c062eb8af2f04c72_prof);

    }

    // line 11
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f06f0c2770451196cca3949e437813c890bcadc36bde4b395df9faa607e64d4e = $this->env->getExtension("native_profiler");
        $__internal_f06f0c2770451196cca3949e437813c890bcadc36bde4b395df9faa607e64d4e->enter($__internal_f06f0c2770451196cca3949e437813c890bcadc36bde4b395df9faa607e64d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 12
        echo "    <nav class=\"navbar navbar-inverse\">
\t  <div class=\"container-fluid\">
\t    <!-- Brand and toggle get grouped for better mobile display -->
\t    <div class=\"navbar-header\">
\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t        <span class=\"sr-only\">Toggle navigation</span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t      </button>
\t      <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("asesores_sa_inicio");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressamain/images/asesoresSA1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail brand\" alt=\"Brand Responsive image\" /></a>
\t    </div>
\t
\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t      <ul class=\"nav navbar-nav navbar-right\">
\t        <li class=\"active\"><a href=\"#\">Inicio</a></li>
\t        <li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Gestión de Datos <span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("asesores_sa_listarAseguradora");
        echo "\">Aseguradoras</a></li>
\t            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("asesores_sa_listarCliente");
        echo "\">Clientes</a></li>
\t            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("asesores_sa_listarMovimiento");
        echo "\">Movimientos</a></li>
\t            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("asesores_sa_listarRamo");
        echo "\">Ramos</a></li>
\t          </ul>
\t        </li>
\t      </ul>
\t    </div><!-- /.navbar-collapse -->
\t  </div><!-- /.container-fluid -->
\t</nav>
";
        
        $__internal_f06f0c2770451196cca3949e437813c890bcadc36bde4b395df9faa607e64d4e->leave($__internal_f06f0c2770451196cca3949e437813c890bcadc36bde4b395df9faa607e64d4e_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_90ba0458600a7fe0fe0c3e7ae581ac163ea6b83db47d1769856ed167af872fdc = $this->env->getExtension("native_profiler");
        $__internal_90ba0458600a7fe0fe0c3e7ae581ac163ea6b83db47d1769856ed167af872fdc->enter($__internal_90ba0458600a7fe0fe0c3e7ae581ac163ea6b83db47d1769856ed167af872fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "\t
";
        
        $__internal_90ba0458600a7fe0fe0c3e7ae581ac163ea6b83db47d1769856ed167af872fdc->leave($__internal_90ba0458600a7fe0fe0c3e7ae581ac163ea6b83db47d1769856ed167af872fdc_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe529eba7b249c7ec0fda7236fb578cab864cd3a4fe8d12a2d9b092c77854ef6 = $this->env->getExtension("native_profiler");
        $__internal_fe529eba7b249c7ec0fda7236fb578cab864cd3a4fe8d12a2d9b092c77854ef6->enter($__internal_fe529eba7b249c7ec0fda7236fb578cab864cd3a4fe8d12a2d9b092c77854ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressamain/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressamain/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressamain/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asesoressamain/js/additional-methods.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fe529eba7b249c7ec0fda7236fb578cab864cd3a4fe8d12a2d9b092c77854ef6->leave($__internal_fe529eba7b249c7ec0fda7236fb578cab864cd3a4fe8d12a2d9b092c77854ef6_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 57,  159 => 56,  155 => 55,  150 => 54,  144 => 53,  136 => 47,  130 => 46,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  88 => 22,  76 => 12,  70 => 11,  61 => 7,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}Bienvenido Asesores SA{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/asesoressamain/css/bootstrap.min.css') }}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/asesoressamain/css/estilos.css') }}" />*/
/* {% endblock %}*/
/* */
/* */
/* {% block sidebar %}*/
/*     <nav class="navbar navbar-inverse">*/
/* 	  <div class="container-fluid">*/
/* 	    <!-- Brand and toggle get grouped for better mobile display -->*/
/* 	    <div class="navbar-header">*/
/* 	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/* 	        <span class="sr-only">Toggle navigation</span>*/
/* 	        <span class="icon-bar"></span>*/
/* 	        <span class="icon-bar"></span>*/
/* 	        <span class="icon-bar"></span>*/
/* 	      </button>*/
/* 	      <a class="navbar-brand" href="{{ path('asesores_sa_inicio') }}"><img src="{{ asset('bundles/asesoressamain/images/asesoresSA1.jpg') }}" class="img-responsive img-thumbnail brand" alt="Brand Responsive image" /></a>*/
/* 	    </div>*/
/* 	*/
/* 	    <!-- Collect the nav links, forms, and other content for toggling -->*/
/* 	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 	      <ul class="nav navbar-nav navbar-right">*/
/* 	        <li class="active"><a href="#">Inicio</a></li>*/
/* 	        <li class="dropdown">*/
/* 	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestión de Datos <span class="caret"></span></a>*/
/* 	          <ul class="dropdown-menu">*/
/*                     <li><a href="{{ path('asesores_sa_listarAseguradora') }}">Aseguradoras</a></li>*/
/* 	            <li><a href="{{ path('asesores_sa_listarCliente') }}">Clientes</a></li>*/
/* 	            <li><a href="{{ path('asesores_sa_listarMovimiento') }}">Movimientos</a></li>*/
/* 	            <li><a href="{{ path('asesores_sa_listarRamo') }}">Ramos</a></li>*/
/* 	          </ul>*/
/* 	        </li>*/
/* 	      </ul>*/
/* 	    </div><!-- /.navbar-collapse -->*/
/* 	  </div><!-- /.container-fluid -->*/
/* 	</nav>*/
/* {% endblock %}*/
/*         */
/* */
/* */
/* {% block body %}*/
/* 	*/
/* {% endblock %}*/
/* */
/*         */
/*         */
/*     */
/* {% block javascripts %}*/
/*     <script type="text/javascript" src="{{ asset('bundles/asesoressamain/js/jquery.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/asesoressamain/js/bootstrap.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/asesoressamain/js/jquery.validate.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/asesoressamain/js/additional-methods.js') }}"></script>*/
/* {% endblock %}*/
