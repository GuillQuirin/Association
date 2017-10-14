<?php

/* default/admin.html.twig */
class __TwigTemplate_6ebd845a537e58f236068840692777e62f06ce3ba4bfc20ed6c60d21a41b51de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/admin.html.twig", 1);
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
        $__internal_f52107ff64ca33f21b73b1d683f5b4808bc80927b4e5864b48c4d5e228274524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52107ff64ca33f21b73b1d683f5b4808bc80927b4e5864b48c4d5e228274524->enter($__internal_f52107ff64ca33f21b73b1d683f5b4808bc80927b4e5864b48c4d5e228274524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $__internal_0f013967da7861bdf4552872715fd51e0194af4a8102b6bfe7b5160f0f3b1bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f013967da7861bdf4552872715fd51e0194af4a8102b6bfe7b5160f0f3b1bbd->enter($__internal_0f013967da7861bdf4552872715fd51e0194af4a8102b6bfe7b5160f0f3b1bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f52107ff64ca33f21b73b1d683f5b4808bc80927b4e5864b48c4d5e228274524->leave($__internal_f52107ff64ca33f21b73b1d683f5b4808bc80927b4e5864b48c4d5e228274524_prof);

        
        $__internal_0f013967da7861bdf4552872715fd51e0194af4a8102b6bfe7b5160f0f3b1bbd->leave($__internal_0f013967da7861bdf4552872715fd51e0194af4a8102b6bfe7b5160f0f3b1bbd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_01b91e6a3f3dea0305c3008d4fdf764cd342069dc81a7b121349629668ac845d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b91e6a3f3dea0305c3008d4fdf764cd342069dc81a7b121349629668ac845d->enter($__internal_01b91e6a3f3dea0305c3008d4fdf764cd342069dc81a7b121349629668ac845d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_300e2c1b5b63cc517818fa5734bb47d67928bba535a72db03e67993e8d24b42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300e2c1b5b63cc517818fa5734bb47d67928bba535a72db03e67993e8d24b42f->enter($__internal_300e2c1b5b63cc517818fa5734bb47d67928bba535a72db03e67993e8d24b42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_300e2c1b5b63cc517818fa5734bb47d67928bba535a72db03e67993e8d24b42f->leave($__internal_300e2c1b5b63cc517818fa5734bb47d67928bba535a72db03e67993e8d24b42f_prof);

        
        $__internal_01b91e6a3f3dea0305c3008d4fdf764cd342069dc81a7b121349629668ac845d->leave($__internal_01b91e6a3f3dea0305c3008d4fdf764cd342069dc81a7b121349629668ac845d_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_873ef06c57b136a7cde3342c79db09c54a0addf4bfbce96ac2e82c799158e96f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_873ef06c57b136a7cde3342c79db09c54a0addf4bfbce96ac2e82c799158e96f->enter($__internal_873ef06c57b136a7cde3342c79db09c54a0addf4bfbce96ac2e82c799158e96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8a2f8a6495820b9120bf5117d3001afac23b35bd51f4fd6ee2043ea53eb6e808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2f8a6495820b9120bf5117d3001afac23b35bd51f4fd6ee2043ea53eb6e808->enter($__internal_8a2f8a6495820b9120bf5117d3001afac23b35bd51f4fd6ee2043ea53eb6e808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8a2f8a6495820b9120bf5117d3001afac23b35bd51f4fd6ee2043ea53eb6e808->leave($__internal_8a2f8a6495820b9120bf5117d3001afac23b35bd51f4fd6ee2043ea53eb6e808_prof);

        
        $__internal_873ef06c57b136a7cde3342c79db09c54a0addf4bfbce96ac2e82c799158e96f->leave($__internal_873ef06c57b136a7cde3342c79db09c54a0addf4bfbce96ac2e82c799158e96f_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98592204f0aca3abf58418c6a76bafa3e9cf1769019a56588d1a8de26ddec0a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98592204f0aca3abf58418c6a76bafa3e9cf1769019a56588d1a8de26ddec0a3->enter($__internal_98592204f0aca3abf58418c6a76bafa3e9cf1769019a56588d1a8de26ddec0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_baf0d1a550516535f1e0439ccef188bb252c6795b8695bcf38ae8d0f90975f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf0d1a550516535f1e0439ccef188bb252c6795b8695bcf38ae8d0f90975f04->enter($__internal_baf0d1a550516535f1e0439ccef188bb252c6795b8695bcf38ae8d0f90975f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "
";
        
        $__internal_baf0d1a550516535f1e0439ccef188bb252c6795b8695bcf38ae8d0f90975f04->leave($__internal_baf0d1a550516535f1e0439ccef188bb252c6795b8695bcf38ae8d0f90975f04_prof);

        
        $__internal_98592204f0aca3abf58418c6a76bafa3e9cf1769019a56588d1a8de26ddec0a3->leave($__internal_98592204f0aca3abf58418c6a76bafa3e9cf1769019a56588d1a8de26ddec0a3_prof);

    }

    public function getTemplateName()
    {
        return "default/admin.html.twig";
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

{% endblock %}", "default/admin.html.twig", "/Users/guillaumequirin/Sourcetree/open/app/Resources/views/default/admin.html.twig");
    }
}
