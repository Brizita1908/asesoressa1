<?php

/* AsesoresSAMainBundle:Default:listarMovimiento.php.twig */
class __TwigTemplate_f35150d311e6f2432fb75b9bd238fb057131a5b75c26235971939d249d64c1d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSAMainBundle:Default:listarMovimiento.php.twig", 1);
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
        $__internal_f8a12d030a5d8f9a5ede8d1669aab37b0d4782c8d518e465bd3cddc9206d8dfa = $this->env->getExtension("native_profiler");
        $__internal_f8a12d030a5d8f9a5ede8d1669aab37b0d4782c8d518e465bd3cddc9206d8dfa->enter($__internal_f8a12d030a5d8f9a5ede8d1669aab37b0d4782c8d518e465bd3cddc9206d8dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSAMainBundle:Default:listarMovimiento.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a12d030a5d8f9a5ede8d1669aab37b0d4782c8d518e465bd3cddc9206d8dfa->leave($__internal_f8a12d030a5d8f9a5ede8d1669aab37b0d4782c8d518e465bd3cddc9206d8dfa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_896a4409267f2c163580cf16f9041749f535a271afcd8cffcf468f2756323d04 = $this->env->getExtension("native_profiler");
        $__internal_896a4409267f2c163580cf16f9041749f535a271afcd8cffcf468f2756323d04->enter($__internal_896a4409267f2c163580cf16f9041749f535a271afcd8cffcf468f2756323d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Movimientos";
        
        $__internal_896a4409267f2c163580cf16f9041749f535a271afcd8cffcf468f2756323d04->leave($__internal_896a4409267f2c163580cf16f9041749f535a271afcd8cffcf468f2756323d04_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e3291eed77cbb797f126faf570462756f28b0fd3836f09da0ce47af6739639f = $this->env->getExtension("native_profiler");
        $__internal_7e3291eed77cbb797f126faf570462756f28b0fd3836f09da0ce47af6739639f->enter($__internal_7e3291eed77cbb797f126faf570462756f28b0fd3836f09da0ce47af6739639f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h3 class=\"text-center\">Movimientos</h3>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["movimientos"]) ? $context["movimientos"] : $this->getContext($context, "movimientos")));
        foreach ($context['_seq'] as $context["_key"] => $context["mov"]) {
            // line 20
            echo "                                <tr>
                                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "siglamovimiento", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], "estadomovimiento", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"link-btn\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asesores_sa_editarMovimiento", array("siglamovimiento" => $this->getAttribute($context["mov"], "siglamovimiento", array()))), "html", null, true);
            echo "\">Modificar</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mov'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                        </tbody>
                    </table>
                        
                    <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("asesores_sa_nuevoMovimiento");
        echo "\" class=\"btn btn-primary\" role=\"button\">Nuevo</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_7e3291eed77cbb797f126faf570462756f28b0fd3836f09da0ce47af6739639f->leave($__internal_7e3291eed77cbb797f126faf570462756f28b0fd3836f09da0ce47af6739639f_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSAMainBundle:Default:listarMovimiento.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  92 => 26,  83 => 23,  79 => 22,  75 => 21,  72 => 20,  68 => 19,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Movimientos{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-4 col-md-offset-4">*/
/*                     <h3 class="text-center">Movimientos</h3>*/
/*                     <table class="table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <td>Sigla</td>*/
/*                                 <td>Nombre</td>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for mov in movimientos %}*/
/*                                 <tr>*/
/*                                     <td>{{ mov.siglamovimiento }}</td>*/
/*                                     <td>{{ mov.estadomovimiento }}</td>*/
/*                                     <td><a class="link-btn" href="{{ path('asesores_sa_editarMovimiento', {'siglamovimiento': mov.siglamovimiento}) }}">Modificar</a></td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                         */
/*                     <a href="{{ path('asesores_sa_nuevoMovimiento') }}" class="btn btn-primary" role="button">Nuevo</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
