<?php

/* AsesoresSAMainBundle:Default:listarUsuario.php.twig */
class __TwigTemplate_f5c59422fdd7408fa66f06ce15bb723b89099201c149a8d86fde3887aecbbd4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSAMainBundle:Default:listarUsuario.php.twig", 1);
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
        $__internal_36967695ffd2b6ee968afc8f54b622aff3cdbb5d55956e7afeab79f963739709 = $this->env->getExtension("native_profiler");
        $__internal_36967695ffd2b6ee968afc8f54b622aff3cdbb5d55956e7afeab79f963739709->enter($__internal_36967695ffd2b6ee968afc8f54b622aff3cdbb5d55956e7afeab79f963739709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSAMainBundle:Default:listarUsuario.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36967695ffd2b6ee968afc8f54b622aff3cdbb5d55956e7afeab79f963739709->leave($__internal_36967695ffd2b6ee968afc8f54b622aff3cdbb5d55956e7afeab79f963739709_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54f1e6f46981d5c735004f174015017024cf6797e7b332255c707387ec730182 = $this->env->getExtension("native_profiler");
        $__internal_54f1e6f46981d5c735004f174015017024cf6797e7b332255c707387ec730182->enter($__internal_54f1e6f46981d5c735004f174015017024cf6797e7b332255c707387ec730182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ramos";
        
        $__internal_54f1e6f46981d5c735004f174015017024cf6797e7b332255c707387ec730182->leave($__internal_54f1e6f46981d5c735004f174015017024cf6797e7b332255c707387ec730182_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d20a90d782744ceba08f9497d9abb26d8306747c4c794b1f39fffa6364de1863 = $this->env->getExtension("native_profiler");
        $__internal_d20a90d782744ceba08f9497d9abb26d8306747c4c794b1f39fffa6364de1863->enter($__internal_d20a90d782744ceba08f9497d9abb26d8306747c4c794b1f39fffa6364de1863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h3 class=\"text-center\">Ramos</h3>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>Sigla</td>
                                <td>Nombre</td>
                                <td>Tipo</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 21
            echo "                                <tr>
                                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "idusuario", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "rolperfil", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                        </tbody>
                    </table>
                        
                    <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("asesores_sa_nuevoUsuario");
        echo "\" class=\"btn btn-primary\" role=\"button\">Nuevo</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d20a90d782744ceba08f9497d9abb26d8306747c4c794b1f39fffa6364de1863->leave($__internal_d20a90d782744ceba08f9497d9abb26d8306747c4c794b1f39fffa6364de1863_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSAMainBundle:Default:listarUsuario.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 29,  89 => 26,  80 => 23,  76 => 22,  73 => 21,  69 => 20,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Ramos{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-6 col-md-offset-3">*/
/*                     <h3 class="text-center">Ramos</h3>*/
/*                     <table class="table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <td>Sigla</td>*/
/*                                 <td>Nombre</td>*/
/*                                 <td>Tipo</td>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for usuario in usuarios %}*/
/*                                 <tr>*/
/*                                     <td>{{ usuario.idusuario }}</td>*/
/*                                     <td>{{ usuario.rolperfil }}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                         */
/*                     <a href="{{ path('asesores_sa_nuevoUsuario') }}" class="btn btn-primary" role="button">Nuevo</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
