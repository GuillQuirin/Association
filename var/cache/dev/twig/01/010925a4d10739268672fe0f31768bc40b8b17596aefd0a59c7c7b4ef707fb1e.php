<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ffe97f5221c38ac5902a05e4c17b92ad8a8c15bef7051052f0b27c38c3cfad2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63d613b968a2dd34dc06b92a154d5b02409272f3d7cafdc10de59eec16fff645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d613b968a2dd34dc06b92a154d5b02409272f3d7cafdc10de59eec16fff645->enter($__internal_63d613b968a2dd34dc06b92a154d5b02409272f3d7cafdc10de59eec16fff645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_aeeaeaad9098eb052470f4a322517f106e9da2413c1f368366055210a51622ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeeaeaad9098eb052470f4a322517f106e9da2413c1f368366055210a51622ba->enter($__internal_aeeaeaad9098eb052470f4a322517f106e9da2413c1f368366055210a51622ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63d613b968a2dd34dc06b92a154d5b02409272f3d7cafdc10de59eec16fff645->leave($__internal_63d613b968a2dd34dc06b92a154d5b02409272f3d7cafdc10de59eec16fff645_prof);

        
        $__internal_aeeaeaad9098eb052470f4a322517f106e9da2413c1f368366055210a51622ba->leave($__internal_aeeaeaad9098eb052470f4a322517f106e9da2413c1f368366055210a51622ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_407946b7e29eebd2cc0b21722610c53ee751291f0ef61d87d93b2a04dfecfb06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407946b7e29eebd2cc0b21722610c53ee751291f0ef61d87d93b2a04dfecfb06->enter($__internal_407946b7e29eebd2cc0b21722610c53ee751291f0ef61d87d93b2a04dfecfb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0a2454d29988b944fe586b3ab9bb2c9bd4c289d3ba6906e6d37fb09be0be8078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2454d29988b944fe586b3ab9bb2c9bd4c289d3ba6906e6d37fb09be0be8078->enter($__internal_0a2454d29988b944fe586b3ab9bb2c9bd4c289d3ba6906e6d37fb09be0be8078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0a2454d29988b944fe586b3ab9bb2c9bd4c289d3ba6906e6d37fb09be0be8078->leave($__internal_0a2454d29988b944fe586b3ab9bb2c9bd4c289d3ba6906e6d37fb09be0be8078_prof);

        
        $__internal_407946b7e29eebd2cc0b21722610c53ee751291f0ef61d87d93b2a04dfecfb06->leave($__internal_407946b7e29eebd2cc0b21722610c53ee751291f0ef61d87d93b2a04dfecfb06_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/guillaumequirin/Sourcetree/open/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
