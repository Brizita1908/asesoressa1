<?php

/* AsesoresSAMainBundle:Default:listarClientes.php.twig */
class __TwigTemplate_22a4a9121606bd2636ae428252239e528d04dc2e15aa6fad044117a8c5bc620c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSAMainBundle:Default:listarClientes.php.twig", 1);
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
        $__internal_cd45a6138033024c3cda34136a4baacbd52c2dc9b66e7a4e5fb1069d548ed5ac = $this->env->getExtension("native_profiler");
        $__internal_cd45a6138033024c3cda34136a4baacbd52c2dc9b66e7a4e5fb1069d548ed5ac->enter($__internal_cd45a6138033024c3cda34136a4baacbd52c2dc9b66e7a4e5fb1069d548ed5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSAMainBundle:Default:listarClientes.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd45a6138033024c3cda34136a4baacbd52c2dc9b66e7a4e5fb1069d548ed5ac->leave($__internal_cd45a6138033024c3cda34136a4baacbd52c2dc9b66e7a4e5fb1069d548ed5ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62e2c3fa47783888b35fd6716688df92a54b90a2db45c09353fbfa5a6eb0e170 = $this->env->getExtension("native_profiler");
        $__internal_62e2c3fa47783888b35fd6716688df92a54b90a2db45c09353fbfa5a6eb0e170->enter($__internal_62e2c3fa47783888b35fd6716688df92a54b90a2db45c09353fbfa5a6eb0e170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clientes";
        
        $__internal_62e2c3fa47783888b35fd6716688df92a54b90a2db45c09353fbfa5a6eb0e170->leave($__internal_62e2c3fa47783888b35fd6716688df92a54b90a2db45c09353fbfa5a6eb0e170_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1ee59deee44a3a22e5da879d7e54fd489d3203325a2a107db02607c24899168 = $this->env->getExtension("native_profiler");
        $__internal_e1ee59deee44a3a22e5da879d7e54fd489d3203325a2a107db02607c24899168->enter($__internal_e1ee59deee44a3a22e5da879d7e54fd489d3203325a2a107db02607c24899168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-8 col-md-offset-2\">
                    <h3 class=\"text-center\">Clientes</h3>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>File</td>
                                <td>CI / RUC</td>
                                <td>Nombres</td>
                                <td>Apellidos</td>
                                <td>Nombre Legal</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cli"]) {
            // line 23
            echo "                                <tr>
                                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "filecliente", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "idcliente", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "nombrescliente", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "apellidoscliente", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "nombrelegalcliente", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"link-btn\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asesores_sa_editarCliente", array("filecliente" => $this->getAttribute($context["cli"], "filecliente", array()))), "html", null, true);
            echo "\">Modificar</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cli'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </tbody>
                    </table>
                        
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("asesores_sa_nuevoCliente");
        echo "\" class=\"btn btn-primary\" role=\"button\">Nuevo</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e1ee59deee44a3a22e5da879d7e54fd489d3203325a2a107db02607c24899168->leave($__internal_e1ee59deee44a3a22e5da879d7e54fd489d3203325a2a107db02607c24899168_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSAMainBundle:Default:listarClientes.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  107 => 32,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  75 => 23,  71 => 22,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Clientes{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-8 col-md-offset-2">*/
/*                     <h3 class="text-center">Clientes</h3>*/
/*                     <table class="table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <td>File</td>*/
/*                                 <td>CI / RUC</td>*/
/*                                 <td>Nombres</td>*/
/*                                 <td>Apellidos</td>*/
/*                                 <td>Nombre Legal</td>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for cli in clientes %}*/
/*                                 <tr>*/
/*                                     <td>{{ cli.filecliente }}</td>*/
/*                                     <td>{{ cli.idcliente }}</td>*/
/*                                     <td>{{ cli.nombrescliente }}</td>*/
/*                                     <td>{{ cli.apellidoscliente }}</td>*/
/*                                     <td>{{ cli.nombrelegalcliente }}</td>*/
/*                                     <td><a class="link-btn" href="{{ path('asesores_sa_editarCliente', {'filecliente': cli.filecliente}) }}">Modificar</a></td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                         */
/*                     <a href="{{ path('asesores_sa_nuevoCliente') }}" class="btn btn-primary" role="button">Nuevo</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
