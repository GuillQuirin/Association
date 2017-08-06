<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_010742bacd7922f8c0ef3868b50c1fd85132c12a1b910d45f0522f422e756bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38960b3db5749ab9a6299cf835f74169a556e533ba3c8a1e6be428ef8d80124d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38960b3db5749ab9a6299cf835f74169a556e533ba3c8a1e6be428ef8d80124d->enter($__internal_38960b3db5749ab9a6299cf835f74169a556e533ba3c8a1e6be428ef8d80124d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1e051bf6900f005410a69ba1a14422bbb6ca766c0377767b828fb42b4815c963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e051bf6900f005410a69ba1a14422bbb6ca766c0377767b828fb42b4815c963->enter($__internal_1e051bf6900f005410a69ba1a14422bbb6ca766c0377767b828fb42b4815c963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38960b3db5749ab9a6299cf835f74169a556e533ba3c8a1e6be428ef8d80124d->leave($__internal_38960b3db5749ab9a6299cf835f74169a556e533ba3c8a1e6be428ef8d80124d_prof);

        
        $__internal_1e051bf6900f005410a69ba1a14422bbb6ca766c0377767b828fb42b4815c963->leave($__internal_1e051bf6900f005410a69ba1a14422bbb6ca766c0377767b828fb42b4815c963_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ddeb0b6486fceb23fad7e4987ed9caa77d2d28c5a1e7a5887e0dc1e6ee766c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddeb0b6486fceb23fad7e4987ed9caa77d2d28c5a1e7a5887e0dc1e6ee766c8a->enter($__internal_ddeb0b6486fceb23fad7e4987ed9caa77d2d28c5a1e7a5887e0dc1e6ee766c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b149a745f14d7bbf76714fbc5b895994881e2b705cdf9788380f84aec7c1f279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b149a745f14d7bbf76714fbc5b895994881e2b705cdf9788380f84aec7c1f279->enter($__internal_b149a745f14d7bbf76714fbc5b895994881e2b705cdf9788380f84aec7c1f279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b149a745f14d7bbf76714fbc5b895994881e2b705cdf9788380f84aec7c1f279->leave($__internal_b149a745f14d7bbf76714fbc5b895994881e2b705cdf9788380f84aec7c1f279_prof);

        
        $__internal_ddeb0b6486fceb23fad7e4987ed9caa77d2d28c5a1e7a5887e0dc1e6ee766c8a->leave($__internal_ddeb0b6486fceb23fad7e4987ed9caa77d2d28c5a1e7a5887e0dc1e6ee766c8a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c194e95f24c0b0c9dfb6851b23033b2db91e5615b0fe57df8d5fc16e3e781638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c194e95f24c0b0c9dfb6851b23033b2db91e5615b0fe57df8d5fc16e3e781638->enter($__internal_c194e95f24c0b0c9dfb6851b23033b2db91e5615b0fe57df8d5fc16e3e781638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ecce6fe1733c66276c62badc9278676ab82dcfbe4b1d89034e5910d734f8d66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecce6fe1733c66276c62badc9278676ab82dcfbe4b1d89034e5910d734f8d66f->enter($__internal_ecce6fe1733c66276c62badc9278676ab82dcfbe4b1d89034e5910d734f8d66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ecce6fe1733c66276c62badc9278676ab82dcfbe4b1d89034e5910d734f8d66f->leave($__internal_ecce6fe1733c66276c62badc9278676ab82dcfbe4b1d89034e5910d734f8d66f_prof);

        
        $__internal_c194e95f24c0b0c9dfb6851b23033b2db91e5615b0fe57df8d5fc16e3e781638->leave($__internal_c194e95f24c0b0c9dfb6851b23033b2db91e5615b0fe57df8d5fc16e3e781638_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_914f6f9d19ca39de80c14052beed6d7bb22f02dd0bfede27837e8be21e45540e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914f6f9d19ca39de80c14052beed6d7bb22f02dd0bfede27837e8be21e45540e->enter($__internal_914f6f9d19ca39de80c14052beed6d7bb22f02dd0bfede27837e8be21e45540e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bb7f6e008e0ac2d72b1c6d31d42cc4f73a4454e9d8203c08eae7a40a6ad5a569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7f6e008e0ac2d72b1c6d31d42cc4f73a4454e9d8203c08eae7a40a6ad5a569->enter($__internal_bb7f6e008e0ac2d72b1c6d31d42cc4f73a4454e9d8203c08eae7a40a6ad5a569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bb7f6e008e0ac2d72b1c6d31d42cc4f73a4454e9d8203c08eae7a40a6ad5a569->leave($__internal_bb7f6e008e0ac2d72b1c6d31d42cc4f73a4454e9d8203c08eae7a40a6ad5a569_prof);

        
        $__internal_914f6f9d19ca39de80c14052beed6d7bb22f02dd0bfede27837e8be21e45540e->leave($__internal_914f6f9d19ca39de80c14052beed6d7bb22f02dd0bfede27837e8be21e45540e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/guillaumequirin/Sourcetree/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
