<?php

/* :default:index.html.twig */
class __TwigTemplate_415f368335f6820b864a3497c430a08c137ee3fa5f61156db2b006df476f0f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_70ef455d00b734300c7769a546215cd038602ae390e4f0792c5df9eceb1339ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ef455d00b734300c7769a546215cd038602ae390e4f0792c5df9eceb1339ce->enter($__internal_70ef455d00b734300c7769a546215cd038602ae390e4f0792c5df9eceb1339ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_1b0598c71fc729faeea118d6bd9059005f7b1749698f62eb03e17749f51f8725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0598c71fc729faeea118d6bd9059005f7b1749698f62eb03e17749f51f8725->enter($__internal_1b0598c71fc729faeea118d6bd9059005f7b1749698f62eb03e17749f51f8725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70ef455d00b734300c7769a546215cd038602ae390e4f0792c5df9eceb1339ce->leave($__internal_70ef455d00b734300c7769a546215cd038602ae390e4f0792c5df9eceb1339ce_prof);

        
        $__internal_1b0598c71fc729faeea118d6bd9059005f7b1749698f62eb03e17749f51f8725->leave($__internal_1b0598c71fc729faeea118d6bd9059005f7b1749698f62eb03e17749f51f8725_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_747fa8fa54bb5ede31e2d5ef916eabef945b93137158c59bac4503b1fbb96efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747fa8fa54bb5ede31e2d5ef916eabef945b93137158c59bac4503b1fbb96efe->enter($__internal_747fa8fa54bb5ede31e2d5ef916eabef945b93137158c59bac4503b1fbb96efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d5e9a2a4b9ea699f1a63d985842f81fec3ed302f20d59373be5018e7fb94c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5e9a2a4b9ea699f1a63d985842f81fec3ed302f20d59373be5018e7fb94c1c->enter($__internal_1d5e9a2a4b9ea699f1a63d985842f81fec3ed302f20d59373be5018e7fb94c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1d5e9a2a4b9ea699f1a63d985842f81fec3ed302f20d59373be5018e7fb94c1c->leave($__internal_1d5e9a2a4b9ea699f1a63d985842f81fec3ed302f20d59373be5018e7fb94c1c_prof);

        
        $__internal_747fa8fa54bb5ede31e2d5ef916eabef945b93137158c59bac4503b1fbb96efe->leave($__internal_747fa8fa54bb5ede31e2d5ef916eabef945b93137158c59bac4503b1fbb96efe_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f148932b13401b5b3deaf62d9b9c940b8b506a82becc5e7c83d9696cd144f721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f148932b13401b5b3deaf62d9b9c940b8b506a82becc5e7c83d9696cd144f721->enter($__internal_f148932b13401b5b3deaf62d9b9c940b8b506a82becc5e7c83d9696cd144f721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f1280597d668742b0dd1045310451afe70ad62355a453983963c541a6b82f9ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1280597d668742b0dd1045310451afe70ad62355a453983963c541a6b82f9ec->enter($__internal_f1280597d668742b0dd1045310451afe70ad62355a453983963c541a6b82f9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f1280597d668742b0dd1045310451afe70ad62355a453983963c541a6b82f9ec->leave($__internal_f1280597d668742b0dd1045310451afe70ad62355a453983963c541a6b82f9ec_prof);

        
        $__internal_f148932b13401b5b3deaf62d9b9c940b8b506a82becc5e7c83d9696cd144f721->leave($__internal_f148932b13401b5b3deaf62d9b9c940b8b506a82becc5e7c83d9696cd144f721_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd6c5beeb76ab3c1bca1db793dd5d3599e347da25ff84386b3a4c1fe9840c3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6c5beeb76ab3c1bca1db793dd5d3599e347da25ff84386b3a4c1fe9840c3a4->enter($__internal_cd6c5beeb76ab3c1bca1db793dd5d3599e347da25ff84386b3a4c1fe9840c3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5e264ff4bba4f7c1c8c5a2e2668d8fc7c355b6917958755c75b62590683005ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e264ff4bba4f7c1c8c5a2e2668d8fc7c355b6917958755c75b62590683005ca->enter($__internal_5e264ff4bba4f7c1c8c5a2e2668d8fc7c355b6917958755c75b62590683005ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5e264ff4bba4f7c1c8c5a2e2668d8fc7c355b6917958755c75b62590683005ca->leave($__internal_5e264ff4bba4f7c1c8c5a2e2668d8fc7c355b6917958755c75b62590683005ca_prof);

        
        $__internal_cd6c5beeb76ab3c1bca1db793dd5d3599e347da25ff84386b3a4c1fe9840c3a4->leave($__internal_cd6c5beeb76ab3c1bca1db793dd5d3599e347da25ff84386b3a4c1fe9840c3a4_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
{% endblock %}", ":default:index.html.twig", "/Users/guillaumequirin/Sourcetree/Symfony/app/Resources/views/default/index.html.twig");
    }
}
