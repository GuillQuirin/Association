<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ffe97f5221c38ac5902a05e4c17b92ad8a8c15bef7051052f0b27c38c3cfad2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_a47cdff55f89e0de990e0a5ada430d07fdc00c35e774fd536b3600d7e5feeb9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47cdff55f89e0de990e0a5ada430d07fdc00c35e774fd536b3600d7e5feeb9e->enter($__internal_a47cdff55f89e0de990e0a5ada430d07fdc00c35e774fd536b3600d7e5feeb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_e823d78f7aae1f92cba6409c1dd2a0a2441841604c8fd110ba6a0c298c25c858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e823d78f7aae1f92cba6409c1dd2a0a2441841604c8fd110ba6a0c298c25c858->enter($__internal_e823d78f7aae1f92cba6409c1dd2a0a2441841604c8fd110ba6a0c298c25c858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a47cdff55f89e0de990e0a5ada430d07fdc00c35e774fd536b3600d7e5feeb9e->leave($__internal_a47cdff55f89e0de990e0a5ada430d07fdc00c35e774fd536b3600d7e5feeb9e_prof);

        
        $__internal_e823d78f7aae1f92cba6409c1dd2a0a2441841604c8fd110ba6a0c298c25c858->leave($__internal_e823d78f7aae1f92cba6409c1dd2a0a2441841604c8fd110ba6a0c298c25c858_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab7b8f85992fcfc229180392284a356679b432d208294b8834142594e0fb8abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7b8f85992fcfc229180392284a356679b432d208294b8834142594e0fb8abb->enter($__internal_ab7b8f85992fcfc229180392284a356679b432d208294b8834142594e0fb8abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_07a95df23c53cac3492f8be109761f893eb8f97d136baa57794cad0d24d56080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a95df23c53cac3492f8be109761f893eb8f97d136baa57794cad0d24d56080->enter($__internal_07a95df23c53cac3492f8be109761f893eb8f97d136baa57794cad0d24d56080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_07a95df23c53cac3492f8be109761f893eb8f97d136baa57794cad0d24d56080->leave($__internal_07a95df23c53cac3492f8be109761f893eb8f97d136baa57794cad0d24d56080_prof);

        
        $__internal_ab7b8f85992fcfc229180392284a356679b432d208294b8834142594e0fb8abb->leave($__internal_ab7b8f85992fcfc229180392284a356679b432d208294b8834142594e0fb8abb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/guillaumequirin/Sourcetree/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
