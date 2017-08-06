<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ff745af4c9785908df5f50f3220a611a7a8150c8acb4b2d4fa58002236a15742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0a06c305e42d109c9c816f496cd71a2bf630dc55fdc1cac5947d04a03e523aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a06c305e42d109c9c816f496cd71a2bf630dc55fdc1cac5947d04a03e523aba->enter($__internal_0a06c305e42d109c9c816f496cd71a2bf630dc55fdc1cac5947d04a03e523aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ed807b516eaeb36c24777cf203fe35768084718cd1af73f89d9505eef479cd01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed807b516eaeb36c24777cf203fe35768084718cd1af73f89d9505eef479cd01->enter($__internal_ed807b516eaeb36c24777cf203fe35768084718cd1af73f89d9505eef479cd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a06c305e42d109c9c816f496cd71a2bf630dc55fdc1cac5947d04a03e523aba->leave($__internal_0a06c305e42d109c9c816f496cd71a2bf630dc55fdc1cac5947d04a03e523aba_prof);

        
        $__internal_ed807b516eaeb36c24777cf203fe35768084718cd1af73f89d9505eef479cd01->leave($__internal_ed807b516eaeb36c24777cf203fe35768084718cd1af73f89d9505eef479cd01_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb63115c017d7fbc376bbb5cb3a171be3787e4f566de507137356bc223601848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb63115c017d7fbc376bbb5cb3a171be3787e4f566de507137356bc223601848->enter($__internal_eb63115c017d7fbc376bbb5cb3a171be3787e4f566de507137356bc223601848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a8244cc80bf7057534b1ca9fa7ea98c9d5286c155766ff221eb2abfda3eeeda2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8244cc80bf7057534b1ca9fa7ea98c9d5286c155766ff221eb2abfda3eeeda2->enter($__internal_a8244cc80bf7057534b1ca9fa7ea98c9d5286c155766ff221eb2abfda3eeeda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a8244cc80bf7057534b1ca9fa7ea98c9d5286c155766ff221eb2abfda3eeeda2->leave($__internal_a8244cc80bf7057534b1ca9fa7ea98c9d5286c155766ff221eb2abfda3eeeda2_prof);

        
        $__internal_eb63115c017d7fbc376bbb5cb3a171be3787e4f566de507137356bc223601848->leave($__internal_eb63115c017d7fbc376bbb5cb3a171be3787e4f566de507137356bc223601848_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14c8126514a957f73caacea7450a09273ef4e81afedb0589a5647cd435de96c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c8126514a957f73caacea7450a09273ef4e81afedb0589a5647cd435de96c4->enter($__internal_14c8126514a957f73caacea7450a09273ef4e81afedb0589a5647cd435de96c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d5b46614ef49ec399224b4f340ced5db72269c9c1d7a81d4d8380601e3982e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b46614ef49ec399224b4f340ced5db72269c9c1d7a81d4d8380601e3982e71->enter($__internal_d5b46614ef49ec399224b4f340ced5db72269c9c1d7a81d4d8380601e3982e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d5b46614ef49ec399224b4f340ced5db72269c9c1d7a81d4d8380601e3982e71->leave($__internal_d5b46614ef49ec399224b4f340ced5db72269c9c1d7a81d4d8380601e3982e71_prof);

        
        $__internal_14c8126514a957f73caacea7450a09273ef4e81afedb0589a5647cd435de96c4->leave($__internal_14c8126514a957f73caacea7450a09273ef4e81afedb0589a5647cd435de96c4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_147148e85ad15b54daf7bb8ef3c0a28a435aafc441e8ec08909b3cf051178bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147148e85ad15b54daf7bb8ef3c0a28a435aafc441e8ec08909b3cf051178bc7->enter($__internal_147148e85ad15b54daf7bb8ef3c0a28a435aafc441e8ec08909b3cf051178bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3eefb53675c987c8f08bccd8140c6e0fcf5e7827368d74c6242de2d8773fbc47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eefb53675c987c8f08bccd8140c6e0fcf5e7827368d74c6242de2d8773fbc47->enter($__internal_3eefb53675c987c8f08bccd8140c6e0fcf5e7827368d74c6242de2d8773fbc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3eefb53675c987c8f08bccd8140c6e0fcf5e7827368d74c6242de2d8773fbc47->leave($__internal_3eefb53675c987c8f08bccd8140c6e0fcf5e7827368d74c6242de2d8773fbc47_prof);

        
        $__internal_147148e85ad15b54daf7bb8ef3c0a28a435aafc441e8ec08909b3cf051178bc7->leave($__internal_147148e85ad15b54daf7bb8ef3c0a28a435aafc441e8ec08909b3cf051178bc7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/guillaumequirin/Sourcetree/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
