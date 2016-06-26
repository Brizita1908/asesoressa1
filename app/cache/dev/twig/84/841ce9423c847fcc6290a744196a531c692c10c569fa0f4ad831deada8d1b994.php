<?php

/* AsesoresSAMainBundle:Default:listarAseguradora.php.twig */
class __TwigTemplate_a69ec8c95636cc9e8f8c4632aa404e327a646958249248e8fbfddbedf1b329fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSAMainBundle:Default:listarAseguradora.php.twig", 1);
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
        $__internal_a47fdb85d4909a987f1bee16b61f00cc5febd3729ca513ae6f79aa74a11ed616 = $this->env->getExtension("native_profiler");
        $__internal_a47fdb85d4909a987f1bee16b61f00cc5febd3729ca513ae6f79aa74a11ed616->enter($__internal_a47fdb85d4909a987f1bee16b61f00cc5febd3729ca513ae6f79aa74a11ed616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSAMainBundle:Default:listarAseguradora.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a47fdb85d4909a987f1bee16b61f00cc5febd3729ca513ae6f79aa74a11ed616->leave($__internal_a47fdb85d4909a987f1bee16b61f00cc5febd3729ca513ae6f79aa74a11ed616_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_283c1d0a7a15dfed68d3a8d88b6c7f85ab2cd60f5d7e12e3d92dea4bfa61e92e = $this->env->getExtension("native_profiler");
        $__internal_283c1d0a7a15dfed68d3a8d88b6c7f85ab2cd60f5d7e12e3d92dea4bfa61e92e->enter($__internal_283c1d0a7a15dfed68d3a8d88b6c7f85ab2cd60f5d7e12e3d92dea4bfa61e92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Aseguradoras";
        
        $__internal_283c1d0a7a15dfed68d3a8d88b6c7f85ab2cd60f5d7e12e3d92dea4bfa61e92e->leave($__internal_283c1d0a7a15dfed68d3a8d88b6c7f85ab2cd60f5d7e12e3d92dea4bfa61e92e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e20d74573709bb4c64b4a39bf457da56f47aab8ab727c64852f8f2afbd3efd84 = $this->env->getExtension("native_profiler");
        $__internal_e20d74573709bb4c64b4a39bf457da56f47aab8ab727c64852f8f2afbd3efd84->enter($__internal_e20d74573709bb4c64b4a39bf457da56f47aab8ab727c64852f8f2afbd3efd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h3 class=\"text-center\">Aseguradoras</h3>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>Sigla</td>
                                <td>Nombre</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aseguradoras"]) ? $context["aseguradoras"] : $this->getContext($context, "aseguradoras")));
        foreach ($context['_seq'] as $context["_key"] => $context["aseg"]) {
            // line 20
            echo "                                <tr>
                                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["aseg"], "siglaaseguradora", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["aseg"], "nombreaseguradora", array()), "html", null, true);
            echo "</td>
                                    
                                    <td><a class=\"link-btn\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asesores_sa_editarAseguradora", array("siglaaseguradora" => $this->getAttribute($context["aseg"], "siglaaseguradora", array()))), "html", null, true);
            echo "\">Modificar</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aseg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                        </tbody>
                    </table>
                        
                    <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("asesores_sa_nuevaAseguradora");
        echo "\" class=\"btn btn-primary\" role=\"button\">Nuevo</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e20d74573709bb4c64b4a39bf457da56f47aab8ab727c64852f8f2afbd3efd84->leave($__internal_e20d74573709bb4c64b4a39bf457da56f47aab8ab727c64852f8f2afbd3efd84_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSAMainBundle:Default:listarAseguradora.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  93 => 27,  84 => 24,  79 => 22,  75 => 21,  72 => 20,  68 => 19,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Aseguradoras{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-4 col-md-offset-4">*/
/*                     <h3 class="text-center">Aseguradoras</h3>*/
/*                     <table class="table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <td>Sigla</td>*/
/*                                 <td>Nombre</td>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for aseg in aseguradoras %}*/
/*                                 <tr>*/
/*                                     <td>{{ aseg.siglaaseguradora }}</td>*/
/*                                     <td>{{ aseg.nombreaseguradora }}</td>*/
/*                                     */
/*                                     <td><a class="link-btn" href="{{ path('asesores_sa_editarAseguradora', {'siglaaseguradora': aseg.siglaaseguradora}) }}">Modificar</a></td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                         */
/*                     <a href="{{ path('asesores_sa_nuevaAseguradora') }}" class="btn btn-primary" role="button">Nuevo</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
