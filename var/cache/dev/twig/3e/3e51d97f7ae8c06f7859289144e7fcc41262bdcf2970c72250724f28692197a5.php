<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8d75d46680520b17a436b17adebc419e865bc5fb1e9380c89c0f2d5ba5bb5b37 extends Twig_Template
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
        $__internal_97f8cd4ce454318351e26ffe682b403353a894d97e9e19c0767fda21e8f3dfa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f8cd4ce454318351e26ffe682b403353a894d97e9e19c0767fda21e8f3dfa3->enter($__internal_97f8cd4ce454318351e26ffe682b403353a894d97e9e19c0767fda21e8f3dfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d1504c6928fc95296516e6f0cc1e4124da0f2d1ff0b53e819f55a574b7ac542f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1504c6928fc95296516e6f0cc1e4124da0f2d1ff0b53e819f55a574b7ac542f->enter($__internal_d1504c6928fc95296516e6f0cc1e4124da0f2d1ff0b53e819f55a574b7ac542f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97f8cd4ce454318351e26ffe682b403353a894d97e9e19c0767fda21e8f3dfa3->leave($__internal_97f8cd4ce454318351e26ffe682b403353a894d97e9e19c0767fda21e8f3dfa3_prof);

        
        $__internal_d1504c6928fc95296516e6f0cc1e4124da0f2d1ff0b53e819f55a574b7ac542f->leave($__internal_d1504c6928fc95296516e6f0cc1e4124da0f2d1ff0b53e819f55a574b7ac542f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a75cdfbd14939bc362a86f548510b56c911fff5c394c26379210969dd114d4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75cdfbd14939bc362a86f548510b56c911fff5c394c26379210969dd114d4c2->enter($__internal_a75cdfbd14939bc362a86f548510b56c911fff5c394c26379210969dd114d4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fee7ea0441e67391f0306d8c7853a5fc368cb822f92ae106b6f6049c81fe58e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee7ea0441e67391f0306d8c7853a5fc368cb822f92ae106b6f6049c81fe58e8->enter($__internal_fee7ea0441e67391f0306d8c7853a5fc368cb822f92ae106b6f6049c81fe58e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fee7ea0441e67391f0306d8c7853a5fc368cb822f92ae106b6f6049c81fe58e8->leave($__internal_fee7ea0441e67391f0306d8c7853a5fc368cb822f92ae106b6f6049c81fe58e8_prof);

        
        $__internal_a75cdfbd14939bc362a86f548510b56c911fff5c394c26379210969dd114d4c2->leave($__internal_a75cdfbd14939bc362a86f548510b56c911fff5c394c26379210969dd114d4c2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c32852d0a8290eb936dd2de1e96e5cd36ef28eea0f17e5330fe24b60829e09e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c32852d0a8290eb936dd2de1e96e5cd36ef28eea0f17e5330fe24b60829e09e->enter($__internal_2c32852d0a8290eb936dd2de1e96e5cd36ef28eea0f17e5330fe24b60829e09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_66e913cc017b214ec9ab766ed7847c20a8d08d7240d0ff24f6ce0af83092f45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e913cc017b214ec9ab766ed7847c20a8d08d7240d0ff24f6ce0af83092f45f->enter($__internal_66e913cc017b214ec9ab766ed7847c20a8d08d7240d0ff24f6ce0af83092f45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_66e913cc017b214ec9ab766ed7847c20a8d08d7240d0ff24f6ce0af83092f45f->leave($__internal_66e913cc017b214ec9ab766ed7847c20a8d08d7240d0ff24f6ce0af83092f45f_prof);

        
        $__internal_2c32852d0a8290eb936dd2de1e96e5cd36ef28eea0f17e5330fe24b60829e09e->leave($__internal_2c32852d0a8290eb936dd2de1e96e5cd36ef28eea0f17e5330fe24b60829e09e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95c050e9ed1d4095285b0741ae6235d47c5b6a4325cacef3900a92d95665090f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c050e9ed1d4095285b0741ae6235d47c5b6a4325cacef3900a92d95665090f->enter($__internal_95c050e9ed1d4095285b0741ae6235d47c5b6a4325cacef3900a92d95665090f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fe324d58dfcd884985c4816fcfa74f2f6164553299c46b8964852aa61872e0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe324d58dfcd884985c4816fcfa74f2f6164553299c46b8964852aa61872e0e2->enter($__internal_fe324d58dfcd884985c4816fcfa74f2f6164553299c46b8964852aa61872e0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_fe324d58dfcd884985c4816fcfa74f2f6164553299c46b8964852aa61872e0e2->leave($__internal_fe324d58dfcd884985c4816fcfa74f2f6164553299c46b8964852aa61872e0e2_prof);

        
        $__internal_95c050e9ed1d4095285b0741ae6235d47c5b6a4325cacef3900a92d95665090f->leave($__internal_95c050e9ed1d4095285b0741ae6235d47c5b6a4325cacef3900a92d95665090f_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/guillaumequirin/Sourcetree/open/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
