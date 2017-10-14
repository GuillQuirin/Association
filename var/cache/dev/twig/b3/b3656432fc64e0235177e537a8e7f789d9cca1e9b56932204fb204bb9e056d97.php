<?php

/* default/index.html.twig */
class __TwigTemplate_415f368335f6820b864a3497c430a08c137ee3fa5f61156db2b006df476f0f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_2c76e44d0e740176059007ee28671c165bd01fc2029b70e6458e28dff18a6203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c76e44d0e740176059007ee28671c165bd01fc2029b70e6458e28dff18a6203->enter($__internal_2c76e44d0e740176059007ee28671c165bd01fc2029b70e6458e28dff18a6203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_41b0617e21cb4c33656b7cc5dc3c4b3b08b7d32f8cf1eb2f1e44f005805f69bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b0617e21cb4c33656b7cc5dc3c4b3b08b7d32f8cf1eb2f1e44f005805f69bc->enter($__internal_41b0617e21cb4c33656b7cc5dc3c4b3b08b7d32f8cf1eb2f1e44f005805f69bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c76e44d0e740176059007ee28671c165bd01fc2029b70e6458e28dff18a6203->leave($__internal_2c76e44d0e740176059007ee28671c165bd01fc2029b70e6458e28dff18a6203_prof);

        
        $__internal_41b0617e21cb4c33656b7cc5dc3c4b3b08b7d32f8cf1eb2f1e44f005805f69bc->leave($__internal_41b0617e21cb4c33656b7cc5dc3c4b3b08b7d32f8cf1eb2f1e44f005805f69bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b101a69cf197593894fb13bd4c3558032947102df3b7b9af3043af81329dd31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b101a69cf197593894fb13bd4c3558032947102df3b7b9af3043af81329dd31->enter($__internal_0b101a69cf197593894fb13bd4c3558032947102df3b7b9af3043af81329dd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f34481840ece7a544db617f5d41357aa0dd4726f66232139c0dd23d789381239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34481840ece7a544db617f5d41357aa0dd4726f66232139c0dd23d789381239->enter($__internal_f34481840ece7a544db617f5d41357aa0dd4726f66232139c0dd23d789381239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xs-12 col-md-12\">
            <h4><strong>C'est la première fois que je participe à l'association, comment m'inscrire ?</strong></h4>
            
            <p>Il suffit s'enregistrer ses coordonnées sur le site à chaque séance d'association. Le staff vous remettra un code qu'il faudra indiquer pour garantir votre présence et ainsi obtenir votre point OPEN.</p>

            <h4><strong>Comment obtenir 1 OPEN au cours d'une séance organisée par l'association ?</strong></h4>

            <p>
                Après avoir joué, le staff de l'association vous remettra un code à usage unique, à saisir sur cette page avec vos coordonnées.
                Cela permet d'enregistrer automatiquement votre participation et évite les oublis sur fichier Excel.
            </p>
        </div>
    </div>
    <div class=\"row\">
        <div id=\"inscription\" class=\"col-xs-12 offset-md-3 col-md-6\">
            <h4>
                Inscription
                <small>* : obligatoire</small> 
            </h4>
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form_inscri"]) || array_key_exists("form_inscri", $context) ? $context["form_inscri"] : (function () { throw new Twig_Error_Runtime('Variable "form_inscri" does not exist.', 24, $this->getSourceContext()); })()), 'form', array("method" => "POST"));
        echo "
        </div>
    </div>
";
        
        $__internal_f34481840ece7a544db617f5d41357aa0dd4726f66232139c0dd23d789381239->leave($__internal_f34481840ece7a544db617f5d41357aa0dd4726f66232139c0dd23d789381239_prof);

        
        $__internal_0b101a69cf197593894fb13bd4c3558032947102df3b7b9af3043af81329dd31->leave($__internal_0b101a69cf197593894fb13bd4c3558032947102df3b7b9af3043af81329dd31_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_45f634db418fdf2847ed7c76766f8b282ab2eca165767b8a07a10c89611b5723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f634db418fdf2847ed7c76766f8b282ab2eca165767b8a07a10c89611b5723->enter($__internal_45f634db418fdf2847ed7c76766f8b282ab2eca165767b8a07a10c89611b5723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ea782ffa23627a88722318a84d14c6429ae3c811eaba90f2da4f4a0788aa8e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea782ffa23627a88722318a84d14c6429ae3c811eaba90f2da4f4a0788aa8e0c->enter($__internal_ea782ffa23627a88722318a84d14c6429ae3c811eaba90f2da4f4a0788aa8e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ea782ffa23627a88722318a84d14c6429ae3c811eaba90f2da4f4a0788aa8e0c->leave($__internal_ea782ffa23627a88722318a84d14c6429ae3c811eaba90f2da4f4a0788aa8e0c_prof);

        
        $__internal_45f634db418fdf2847ed7c76766f8b282ab2eca165767b8a07a10c89611b5723->leave($__internal_45f634db418fdf2847ed7c76766f8b282ab2eca165767b8a07a10c89611b5723_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_46d5773a51f3c967cfc88b082ae8986937d08269df91009345654218a6040569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d5773a51f3c967cfc88b082ae8986937d08269df91009345654218a6040569->enter($__internal_46d5773a51f3c967cfc88b082ae8986937d08269df91009345654218a6040569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ee5d0b3e399b92fce32624aa643dc8105bcf261965697f31f93c18a8fcc8032f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5d0b3e399b92fce32624aa643dc8105bcf261965697f31f93c18a8fcc8032f->enter($__internal_ee5d0b3e399b92fce32624aa643dc8105bcf261965697f31f93c18a8fcc8032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ee5d0b3e399b92fce32624aa643dc8105bcf261965697f31f93c18a8fcc8032f->leave($__internal_ee5d0b3e399b92fce32624aa643dc8105bcf261965697f31f93c18a8fcc8032f_prof);

        
        $__internal_46d5773a51f3c967cfc88b082ae8986937d08269df91009345654218a6040569->leave($__internal_46d5773a51f3c967cfc88b082ae8986937d08269df91009345654218a6040569_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 35,  118 => 34,  109 => 33,  96 => 30,  87 => 29,  73 => 24,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-12\">
            <h4><strong>C'est la première fois que je participe à l'association, comment m'inscrire ?</strong></h4>
            
            <p>Il suffit s'enregistrer ses coordonnées sur le site à chaque séance d'association. Le staff vous remettra un code qu'il faudra indiquer pour garantir votre présence et ainsi obtenir votre point OPEN.</p>

            <h4><strong>Comment obtenir 1 OPEN au cours d'une séance organisée par l'association ?</strong></h4>

            <p>
                Après avoir joué, le staff de l'association vous remettra un code à usage unique, à saisir sur cette page avec vos coordonnées.
                Cela permet d'enregistrer automatiquement votre participation et évite les oublis sur fichier Excel.
            </p>
        </div>
    </div>
    <div class=\"row\">
        <div id=\"inscription\" class=\"col-xs-12 offset-md-3 col-md-6\">
            <h4>
                Inscription
                <small>* : obligatoire</small> 
            </h4>
            {{ form(form_inscri, {'method': 'POST'}) }}
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('js/script.js') }}\"></script>
{% endblock %}", "default/index.html.twig", "/Users/guillaumequirin/Sourcetree/open/app/Resources/views/default/index.html.twig");
    }
}
