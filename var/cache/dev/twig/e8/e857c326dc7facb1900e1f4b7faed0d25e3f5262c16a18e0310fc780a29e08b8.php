<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f80b1eb8133ce2f1327e469d2067b6386b3f775cc04d0b50eb74197424412f04 extends Twig_Template
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
        $__internal_8485ccf40972293f3c4a1445e5067f4db6e3629c3376c9eda51c4f625aa21aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8485ccf40972293f3c4a1445e5067f4db6e3629c3376c9eda51c4f625aa21aec->enter($__internal_8485ccf40972293f3c4a1445e5067f4db6e3629c3376c9eda51c4f625aa21aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0f3e0a9c017e0f3d5991f3729dfe0807034db04b31ddac35ae2507d23d1739a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3e0a9c017e0f3d5991f3729dfe0807034db04b31ddac35ae2507d23d1739a4->enter($__internal_0f3e0a9c017e0f3d5991f3729dfe0807034db04b31ddac35ae2507d23d1739a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8485ccf40972293f3c4a1445e5067f4db6e3629c3376c9eda51c4f625aa21aec->leave($__internal_8485ccf40972293f3c4a1445e5067f4db6e3629c3376c9eda51c4f625aa21aec_prof);

        
        $__internal_0f3e0a9c017e0f3d5991f3729dfe0807034db04b31ddac35ae2507d23d1739a4->leave($__internal_0f3e0a9c017e0f3d5991f3729dfe0807034db04b31ddac35ae2507d23d1739a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_278b2a86a4a6ae67de5b90c1d2dc37054835f10b0a46f358d5483bf8d7084a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278b2a86a4a6ae67de5b90c1d2dc37054835f10b0a46f358d5483bf8d7084a83->enter($__internal_278b2a86a4a6ae67de5b90c1d2dc37054835f10b0a46f358d5483bf8d7084a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f1fbc4c22603806c510ddb875e9dd60ee29c476871ebc5b94f6e057cfb5e692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1fbc4c22603806c510ddb875e9dd60ee29c476871ebc5b94f6e057cfb5e692->enter($__internal_2f1fbc4c22603806c510ddb875e9dd60ee29c476871ebc5b94f6e057cfb5e692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2f1fbc4c22603806c510ddb875e9dd60ee29c476871ebc5b94f6e057cfb5e692->leave($__internal_2f1fbc4c22603806c510ddb875e9dd60ee29c476871ebc5b94f6e057cfb5e692_prof);

        
        $__internal_278b2a86a4a6ae67de5b90c1d2dc37054835f10b0a46f358d5483bf8d7084a83->leave($__internal_278b2a86a4a6ae67de5b90c1d2dc37054835f10b0a46f358d5483bf8d7084a83_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6df046b25f6db47628c59b05d104fea5bcb64bd231f23278847d165f83abb6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6df046b25f6db47628c59b05d104fea5bcb64bd231f23278847d165f83abb6e->enter($__internal_a6df046b25f6db47628c59b05d104fea5bcb64bd231f23278847d165f83abb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f6f3ccd761a51903e3eee1fd534e2b9f47eb306d3203a70c50975e38e505ad87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f3ccd761a51903e3eee1fd534e2b9f47eb306d3203a70c50975e38e505ad87->enter($__internal_f6f3ccd761a51903e3eee1fd534e2b9f47eb306d3203a70c50975e38e505ad87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f6f3ccd761a51903e3eee1fd534e2b9f47eb306d3203a70c50975e38e505ad87->leave($__internal_f6f3ccd761a51903e3eee1fd534e2b9f47eb306d3203a70c50975e38e505ad87_prof);

        
        $__internal_a6df046b25f6db47628c59b05d104fea5bcb64bd231f23278847d165f83abb6e->leave($__internal_a6df046b25f6db47628c59b05d104fea5bcb64bd231f23278847d165f83abb6e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4cf6ff5a25469b2fa4c1c25c72de63c159bd212377a0224a271374fcdaa2d77c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf6ff5a25469b2fa4c1c25c72de63c159bd212377a0224a271374fcdaa2d77c->enter($__internal_4cf6ff5a25469b2fa4c1c25c72de63c159bd212377a0224a271374fcdaa2d77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e0f5a6d9ce077d6734e593ee5e4b4fe117b2e3c031014373cd8fa8a25de3495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0f5a6d9ce077d6734e593ee5e4b4fe117b2e3c031014373cd8fa8a25de3495->enter($__internal_4e0f5a6d9ce077d6734e593ee5e4b4fe117b2e3c031014373cd8fa8a25de3495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4e0f5a6d9ce077d6734e593ee5e4b4fe117b2e3c031014373cd8fa8a25de3495->leave($__internal_4e0f5a6d9ce077d6734e593ee5e4b4fe117b2e3c031014373cd8fa8a25de3495_prof);

        
        $__internal_4cf6ff5a25469b2fa4c1c25c72de63c159bd212377a0224a271374fcdaa2d77c->leave($__internal_4cf6ff5a25469b2fa4c1c25c72de63c159bd212377a0224a271374fcdaa2d77c_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/guillaumequirin/Sourcetree/open/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
