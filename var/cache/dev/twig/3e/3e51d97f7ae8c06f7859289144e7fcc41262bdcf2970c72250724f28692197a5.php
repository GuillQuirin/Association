<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8d75d46680520b17a436b17adebc419e865bc5fb1e9380c89c0f2d5ba5bb5b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_aed713a553b909d131b983ec07873cb983b8cf209d17c0534e8755992446bc75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed713a553b909d131b983ec07873cb983b8cf209d17c0534e8755992446bc75->enter($__internal_aed713a553b909d131b983ec07873cb983b8cf209d17c0534e8755992446bc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_c84fb2de8a248083ff84824b4afae3f98fdb0f42d4a073bfe929134871d204c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84fb2de8a248083ff84824b4afae3f98fdb0f42d4a073bfe929134871d204c5->enter($__internal_c84fb2de8a248083ff84824b4afae3f98fdb0f42d4a073bfe929134871d204c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aed713a553b909d131b983ec07873cb983b8cf209d17c0534e8755992446bc75->leave($__internal_aed713a553b909d131b983ec07873cb983b8cf209d17c0534e8755992446bc75_prof);

        
        $__internal_c84fb2de8a248083ff84824b4afae3f98fdb0f42d4a073bfe929134871d204c5->leave($__internal_c84fb2de8a248083ff84824b4afae3f98fdb0f42d4a073bfe929134871d204c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d0477665b703e2153f149f519cfb97ae49ba0de30ecb76ae4570156f40d8620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0477665b703e2153f149f519cfb97ae49ba0de30ecb76ae4570156f40d8620->enter($__internal_1d0477665b703e2153f149f519cfb97ae49ba0de30ecb76ae4570156f40d8620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5b962b5fcd731a81165ccc35a0519fd886a578a9b3b649b098b72af827efcb0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b962b5fcd731a81165ccc35a0519fd886a578a9b3b649b098b72af827efcb0c->enter($__internal_5b962b5fcd731a81165ccc35a0519fd886a578a9b3b649b098b72af827efcb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5b962b5fcd731a81165ccc35a0519fd886a578a9b3b649b098b72af827efcb0c->leave($__internal_5b962b5fcd731a81165ccc35a0519fd886a578a9b3b649b098b72af827efcb0c_prof);

        
        $__internal_1d0477665b703e2153f149f519cfb97ae49ba0de30ecb76ae4570156f40d8620->leave($__internal_1d0477665b703e2153f149f519cfb97ae49ba0de30ecb76ae4570156f40d8620_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9f6152ae69eda07dec102645ca3bcf90d8484e696b8e6fddeb60823e5d57ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f6152ae69eda07dec102645ca3bcf90d8484e696b8e6fddeb60823e5d57ff1->enter($__internal_a9f6152ae69eda07dec102645ca3bcf90d8484e696b8e6fddeb60823e5d57ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2e5a6b4d905e59a39ee0d2aac1749b7d0ebad77fe21eddfda93e0da64c287305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5a6b4d905e59a39ee0d2aac1749b7d0ebad77fe21eddfda93e0da64c287305->enter($__internal_2e5a6b4d905e59a39ee0d2aac1749b7d0ebad77fe21eddfda93e0da64c287305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e5a6b4d905e59a39ee0d2aac1749b7d0ebad77fe21eddfda93e0da64c287305->leave($__internal_2e5a6b4d905e59a39ee0d2aac1749b7d0ebad77fe21eddfda93e0da64c287305_prof);

        
        $__internal_a9f6152ae69eda07dec102645ca3bcf90d8484e696b8e6fddeb60823e5d57ff1->leave($__internal_a9f6152ae69eda07dec102645ca3bcf90d8484e696b8e6fddeb60823e5d57ff1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c69406341f077fdd370d1a30fa6f472ac9bbb9a25ca736003ab3d01622ac5d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c69406341f077fdd370d1a30fa6f472ac9bbb9a25ca736003ab3d01622ac5d73->enter($__internal_c69406341f077fdd370d1a30fa6f472ac9bbb9a25ca736003ab3d01622ac5d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a51c708bc3cdc0473942f095e19a2a4bc22e825fab6cc959a6e3e78640b5bc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51c708bc3cdc0473942f095e19a2a4bc22e825fab6cc959a6e3e78640b5bc20->enter($__internal_a51c708bc3cdc0473942f095e19a2a4bc22e825fab6cc959a6e3e78640b5bc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a51c708bc3cdc0473942f095e19a2a4bc22e825fab6cc959a6e3e78640b5bc20->leave($__internal_a51c708bc3cdc0473942f095e19a2a4bc22e825fab6cc959a6e3e78640b5bc20_prof);

        
        $__internal_c69406341f077fdd370d1a30fa6f472ac9bbb9a25ca736003ab3d01622ac5d73->leave($__internal_c69406341f077fdd370d1a30fa6f472ac9bbb9a25ca736003ab3d01622ac5d73_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/guillaumequirin/Sourcetree/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
