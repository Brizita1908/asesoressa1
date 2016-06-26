<?php

/* AsesoresSAMainBundle:Default:listarRamo.php.twig */
class __TwigTemplate_50f175af08133d0412d30adf4d7004f6f74692441605132868b38d5d5b5829ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AsesoresSAMainBundle:Default:listarRamo.php.twig", 1);
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
        $__internal_3aacfd43b3c6bacbea38e7ed4e692c8dd02fb0f564ee2e311810f7d2c7451d62 = $this->env->getExtension("native_profiler");
        $__internal_3aacfd43b3c6bacbea38e7ed4e692c8dd02fb0f564ee2e311810f7d2c7451d62->enter($__internal_3aacfd43b3c6bacbea38e7ed4e692c8dd02fb0f564ee2e311810f7d2c7451d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsesoresSAMainBundle:Default:listarRamo.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aacfd43b3c6bacbea38e7ed4e692c8dd02fb0f564ee2e311810f7d2c7451d62->leave($__internal_3aacfd43b3c6bacbea38e7ed4e692c8dd02fb0f564ee2e311810f7d2c7451d62_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f83079a900ddcae8e0415429c6f89f446dbeccd0224212b91299e85f9e77c2f = $this->env->getExtension("native_profiler");
        $__internal_6f83079a900ddcae8e0415429c6f89f446dbeccd0224212b91299e85f9e77c2f->enter($__internal_6f83079a900ddcae8e0415429c6f89f446dbeccd0224212b91299e85f9e77c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ramos";
        
        $__internal_6f83079a900ddcae8e0415429c6f89f446dbeccd0224212b91299e85f9e77c2f->leave($__internal_6f83079a900ddcae8e0415429c6f89f446dbeccd0224212b91299e85f9e77c2f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e56ed191f63230db4118f57ab6365fe962aa9a1e672962b549ffaf16a67ecc08 = $this->env->getExtension("native_profiler");
        $__internal_e56ed191f63230db4118f57ab6365fe962aa9a1e672962b549ffaf16a67ecc08->enter($__internal_e56ed191f63230db4118f57ab6365fe962aa9a1e672962b549ffaf16a67ecc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["ramos"]) ? $context["ramos"] : $this->getContext($context, "ramos")));
        foreach ($context['_seq'] as $context["_key"] => $context["ramo"]) {
            // line 21
            echo "                                <tr>
                                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["ramo"], "siglaramo", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["ramo"], "nombreramo", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["ramo"], "tiporamo", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"link-btn\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asesores_sa_editarRamo", array("siglaramo" => $this->getAttribute($context["ramo"], "siglaramo", array()))), "html", null, true);
            echo "\">Modificar</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ramo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </tbody>
                    </table>
                        
                    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("asesores_sa_nuevoRamo");
        echo "\" class=\"btn btn-primary\" role=\"button\">Nuevo</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e56ed191f63230db4118f57ab6365fe962aa9a1e672962b549ffaf16a67ecc08->leave($__internal_e56ed191f63230db4118f57ab6365fe962aa9a1e672962b549ffaf16a67ecc08_prof);

    }

    public function getTemplateName()
    {
        return "AsesoresSAMainBundle:Default:listarRamo.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  97 => 28,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  73 => 21,  69 => 20,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/*                             {% for ramo in ramos %}*/
/*                                 <tr>*/
/*                                     <td>{{ ramo.siglaramo }}</td>*/
/*                                     <td>{{ ramo.nombreramo }}</td>*/
/*                                     <td>{{ ramo.tiporamo }}</td>*/
/*                                     <td><a class="link-btn" href="{{ path('asesores_sa_editarRamo', {'siglaramo': ramo.siglaramo}) }}">Modificar</a></td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                         */
/*                     <a href="{{ path('asesores_sa_nuevoRamo') }}" class="btn btn-primary" role="button">Nuevo</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
