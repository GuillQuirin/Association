<?php

/* :default:admin.html.twig */
class __TwigTemplate_6ebd845a537e58f236068840692777e62f06ce3ba4bfc20ed6c60d21a41b51de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_946a19472bfd5b0d374520393cd40674b464471c5b825ade3ee098bf0d189c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946a19472bfd5b0d374520393cd40674b464471c5b825ade3ee098bf0d189c18->enter($__internal_946a19472bfd5b0d374520393cd40674b464471c5b825ade3ee098bf0d189c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:admin.html.twig"));

        $__internal_a5f429cfef6fe4ef8f861eceb16a212953717c0800848fb953c2d35eeccfc3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f429cfef6fe4ef8f861eceb16a212953717c0800848fb953c2d35eeccfc3c2->enter($__internal_a5f429cfef6fe4ef8f861eceb16a212953717c0800848fb953c2d35eeccfc3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_946a19472bfd5b0d374520393cd40674b464471c5b825ade3ee098bf0d189c18->leave($__internal_946a19472bfd5b0d374520393cd40674b464471c5b825ade3ee098bf0d189c18_prof);

        
        $__internal_a5f429cfef6fe4ef8f861eceb16a212953717c0800848fb953c2d35eeccfc3c2->leave($__internal_a5f429cfef6fe4ef8f861eceb16a212953717c0800848fb953c2d35eeccfc3c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed8a8fe42401bd3205f05b07b565edb1656b018d52aca946324bba424b7e260e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8a8fe42401bd3205f05b07b565edb1656b018d52aca946324bba424b7e260e->enter($__internal_ed8a8fe42401bd3205f05b07b565edb1656b018d52aca946324bba424b7e260e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acca1a4ac4da1dac1abefccf7862cb904d13fba5666906e13c5f1d9925240e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acca1a4ac4da1dac1abefccf7862cb904d13fba5666906e13c5f1d9925240e13->enter($__internal_acca1a4ac4da1dac1abefccf7862cb904d13fba5666906e13c5f1d9925240e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div id=\"emargement\" class=\"col-xs-12 col-md-6\">
            <h4>
               Génération d'un code pour la séance du ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "  : 
            </h4>
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form_gener"]) || array_key_exists("form_gener", $context) ? $context["form_gener"] : (function () { throw new Twig_Error_Runtime('Variable "form_gener" does not exist.', 9, $this->getSourceContext()); })()), 'form', array("method" => "POST"));
        echo "
        </div>
    </div>
";
        
        $__internal_acca1a4ac4da1dac1abefccf7862cb904d13fba5666906e13c5f1d9925240e13->leave($__internal_acca1a4ac4da1dac1abefccf7862cb904d13fba5666906e13c5f1d9925240e13_prof);

        
        $__internal_ed8a8fe42401bd3205f05b07b565edb1656b018d52aca946324bba424b7e260e->leave($__internal_ed8a8fe42401bd3205f05b07b565edb1656b018d52aca946324bba424b7e260e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_430ad6bb4592e5ea923f94fd9c30198ab3c488f7779f8b623229257b7c2ab242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430ad6bb4592e5ea923f94fd9c30198ab3c488f7779f8b623229257b7c2ab242->enter($__internal_430ad6bb4592e5ea923f94fd9c30198ab3c488f7779f8b623229257b7c2ab242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_daa020d52dfdfc1b9e4614b97b0ea7a5f71c34a0f2ac00d1a9c0ab61512eefe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa020d52dfdfc1b9e4614b97b0ea7a5f71c34a0f2ac00d1a9c0ab61512eefe8->enter($__internal_daa020d52dfdfc1b9e4614b97b0ea7a5f71c34a0f2ac00d1a9c0ab61512eefe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_daa020d52dfdfc1b9e4614b97b0ea7a5f71c34a0f2ac00d1a9c0ab61512eefe8->leave($__internal_daa020d52dfdfc1b9e4614b97b0ea7a5f71c34a0f2ac00d1a9c0ab61512eefe8_prof);

        
        $__internal_430ad6bb4592e5ea923f94fd9c30198ab3c488f7779f8b623229257b7c2ab242->leave($__internal_430ad6bb4592e5ea923f94fd9c30198ab3c488f7779f8b623229257b7c2ab242_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_701b6b70d0eb3d03b0965292fef34484c767d8ad8e9d5eec9a1db75a8ac49e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701b6b70d0eb3d03b0965292fef34484c767d8ad8e9d5eec9a1db75a8ac49e04->enter($__internal_701b6b70d0eb3d03b0965292fef34484c767d8ad8e9d5eec9a1db75a8ac49e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6b0592032e3c025c21496122a5d930dc0f8c756b5acb953d4beb08165295e973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0592032e3c025c21496122a5d930dc0f8c756b5acb953d4beb08165295e973->enter($__internal_6b0592032e3c025c21496122a5d930dc0f8c756b5acb953d4beb08165295e973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "
";
        
        $__internal_6b0592032e3c025c21496122a5d930dc0f8c756b5acb953d4beb08165295e973->leave($__internal_6b0592032e3c025c21496122a5d930dc0f8c756b5acb953d4beb08165295e973_prof);

        
        $__internal_701b6b70d0eb3d03b0965292fef34484c767d8ad8e9d5eec9a1db75a8ac49e04->leave($__internal_701b6b70d0eb3d03b0965292fef34484c767d8ad8e9d5eec9a1db75a8ac49e04_prof);

    }

    public function getTemplateName()
    {
        return ":default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  97 => 18,  84 => 15,  75 => 14,  61 => 9,  56 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"row\">
        <div id=\"emargement\" class=\"col-xs-12 col-md-6\">
            <h4>
               Génération d'un code pour la séance du {{ \"now\"|date(\"d/m/Y\") }}  : 
            </h4>
            {{ form(form_gener, {'method': 'POST'}) }}
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/admin.css') }}\" />
{% endblock %}

{% block javascripts %}

{% endblock %}", ":default:admin.html.twig", "/Users/guillaumequirin/Sourcetree/Symfony/app/Resources/views/default/admin.html.twig");
    }
}
