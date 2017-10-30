<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f80b1eb8133ce2f1327e469d2067b6386b3f775cc04d0b50eb74197424412f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_94c96ea7b12a488f31c9e68dbbcb7d9c9c20729c1683584045f9e1debb85914f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c96ea7b12a488f31c9e68dbbcb7d9c9c20729c1683584045f9e1debb85914f->enter($__internal_94c96ea7b12a488f31c9e68dbbcb7d9c9c20729c1683584045f9e1debb85914f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_2d67b37dbc652805ae723813cb6830f35decfdc66931e3c25875edb882cf53d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d67b37dbc652805ae723813cb6830f35decfdc66931e3c25875edb882cf53d8->enter($__internal_2d67b37dbc652805ae723813cb6830f35decfdc66931e3c25875edb882cf53d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94c96ea7b12a488f31c9e68dbbcb7d9c9c20729c1683584045f9e1debb85914f->leave($__internal_94c96ea7b12a488f31c9e68dbbcb7d9c9c20729c1683584045f9e1debb85914f_prof);

        
        $__internal_2d67b37dbc652805ae723813cb6830f35decfdc66931e3c25875edb882cf53d8->leave($__internal_2d67b37dbc652805ae723813cb6830f35decfdc66931e3c25875edb882cf53d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_30e25300e8ca10cc0f3c8be57a0954df938f083c3c178dcc2b2b274ed5cc8e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e25300e8ca10cc0f3c8be57a0954df938f083c3c178dcc2b2b274ed5cc8e03->enter($__internal_30e25300e8ca10cc0f3c8be57a0954df938f083c3c178dcc2b2b274ed5cc8e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_534cd65e0f7e33341a071d81cd2f0e4736f586d73f521cb354b1c20b894255d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534cd65e0f7e33341a071d81cd2f0e4736f586d73f521cb354b1c20b894255d1->enter($__internal_534cd65e0f7e33341a071d81cd2f0e4736f586d73f521cb354b1c20b894255d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_534cd65e0f7e33341a071d81cd2f0e4736f586d73f521cb354b1c20b894255d1->leave($__internal_534cd65e0f7e33341a071d81cd2f0e4736f586d73f521cb354b1c20b894255d1_prof);

        
        $__internal_30e25300e8ca10cc0f3c8be57a0954df938f083c3c178dcc2b2b274ed5cc8e03->leave($__internal_30e25300e8ca10cc0f3c8be57a0954df938f083c3c178dcc2b2b274ed5cc8e03_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5826a427d46fd3716fc42653960183640cae2db9f57796d61443b4b5c2b578b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5826a427d46fd3716fc42653960183640cae2db9f57796d61443b4b5c2b578b5->enter($__internal_5826a427d46fd3716fc42653960183640cae2db9f57796d61443b4b5c2b578b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a4db17c0c572c664377c39dcc146f956ede51fdc87d1875db686f064712c1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4db17c0c572c664377c39dcc146f956ede51fdc87d1875db686f064712c1b4->enter($__internal_5a4db17c0c572c664377c39dcc146f956ede51fdc87d1875db686f064712c1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5a4db17c0c572c664377c39dcc146f956ede51fdc87d1875db686f064712c1b4->leave($__internal_5a4db17c0c572c664377c39dcc146f956ede51fdc87d1875db686f064712c1b4_prof);

        
        $__internal_5826a427d46fd3716fc42653960183640cae2db9f57796d61443b4b5c2b578b5->leave($__internal_5826a427d46fd3716fc42653960183640cae2db9f57796d61443b4b5c2b578b5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_455840a5c4c03e4c184062b6332a196877fb9d42bcf01f62affd2692f60d0f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455840a5c4c03e4c184062b6332a196877fb9d42bcf01f62affd2692f60d0f9e->enter($__internal_455840a5c4c03e4c184062b6332a196877fb9d42bcf01f62affd2692f60d0f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_46055a7def357ac737f2086ba9d4d00db4d7ea619e0fe9be75f124cd0cdc72a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46055a7def357ac737f2086ba9d4d00db4d7ea619e0fe9be75f124cd0cdc72a0->enter($__internal_46055a7def357ac737f2086ba9d4d00db4d7ea619e0fe9be75f124cd0cdc72a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_46055a7def357ac737f2086ba9d4d00db4d7ea619e0fe9be75f124cd0cdc72a0->leave($__internal_46055a7def357ac737f2086ba9d4d00db4d7ea619e0fe9be75f124cd0cdc72a0_prof);

        
        $__internal_455840a5c4c03e4c184062b6332a196877fb9d42bcf01f62affd2692f60d0f9e->leave($__internal_455840a5c4c03e4c184062b6332a196877fb9d42bcf01f62affd2692f60d0f9e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/guillaumequirin/Sourcetree/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
