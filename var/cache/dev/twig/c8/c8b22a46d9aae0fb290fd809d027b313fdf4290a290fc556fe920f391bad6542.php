<?php

/* base.html.twig */
class __TwigTemplate_47fd51b039e5f4fb7e336b9f260737cefed48cbce97d781ee1d74e5c39c4c062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07e18a946213c1d7bcfcfe061b83d267b28d9582d22ad171898f60623eab6ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e18a946213c1d7bcfcfe061b83d267b28d9582d22ad171898f60623eab6ff3->enter($__internal_07e18a946213c1d7bcfcfe061b83d267b28d9582d22ad171898f60623eab6ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f4518f520508229126b38326c1df97413e68fa96923a84078f0bcaa83f950438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4518f520508229126b38326c1df97413e68fa96923a84078f0bcaa83f950438->enter($__internal_f4518f520508229126b38326c1df97413e68fa96923a84078f0bcaa83f950438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_07e18a946213c1d7bcfcfe061b83d267b28d9582d22ad171898f60623eab6ff3->leave($__internal_07e18a946213c1d7bcfcfe061b83d267b28d9582d22ad171898f60623eab6ff3_prof);

        
        $__internal_f4518f520508229126b38326c1df97413e68fa96923a84078f0bcaa83f950438->leave($__internal_f4518f520508229126b38326c1df97413e68fa96923a84078f0bcaa83f950438_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a12ddfa3bf77ea0ebeba34e5e6a27c5ef5966b757dd4d85c32b025590af39a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12ddfa3bf77ea0ebeba34e5e6a27c5ef5966b757dd4d85c32b025590af39a66->enter($__internal_a12ddfa3bf77ea0ebeba34e5e6a27c5ef5966b757dd4d85c32b025590af39a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c763ca0f9e71882aa37862efa2035749675d8dcd163b6928df1099ce8ed9fcd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c763ca0f9e71882aa37862efa2035749675d8dcd163b6928df1099ce8ed9fcd0->enter($__internal_c763ca0f9e71882aa37862efa2035749675d8dcd163b6928df1099ce8ed9fcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c763ca0f9e71882aa37862efa2035749675d8dcd163b6928df1099ce8ed9fcd0->leave($__internal_c763ca0f9e71882aa37862efa2035749675d8dcd163b6928df1099ce8ed9fcd0_prof);

        
        $__internal_a12ddfa3bf77ea0ebeba34e5e6a27c5ef5966b757dd4d85c32b025590af39a66->leave($__internal_a12ddfa3bf77ea0ebeba34e5e6a27c5ef5966b757dd4d85c32b025590af39a66_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_72031b5c5b7559f0bd433148c916f0cc59df221d276636d7861c4a87508ccf05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72031b5c5b7559f0bd433148c916f0cc59df221d276636d7861c4a87508ccf05->enter($__internal_72031b5c5b7559f0bd433148c916f0cc59df221d276636d7861c4a87508ccf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9c1dbd2e578f9732d34f8ee672ad51244f0678d8f6272830defdbb856cbf1d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1dbd2e578f9732d34f8ee672ad51244f0678d8f6272830defdbb856cbf1d79->enter($__internal_9c1dbd2e578f9732d34f8ee672ad51244f0678d8f6272830defdbb856cbf1d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9c1dbd2e578f9732d34f8ee672ad51244f0678d8f6272830defdbb856cbf1d79->leave($__internal_9c1dbd2e578f9732d34f8ee672ad51244f0678d8f6272830defdbb856cbf1d79_prof);

        
        $__internal_72031b5c5b7559f0bd433148c916f0cc59df221d276636d7861c4a87508ccf05->leave($__internal_72031b5c5b7559f0bd433148c916f0cc59df221d276636d7861c4a87508ccf05_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_00ca1b61e8136db4f6f2a8696b85584c7e6ec55aab5d4ceefb604821a1706902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ca1b61e8136db4f6f2a8696b85584c7e6ec55aab5d4ceefb604821a1706902->enter($__internal_00ca1b61e8136db4f6f2a8696b85584c7e6ec55aab5d4ceefb604821a1706902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db6b09e86a4d492632d90ed01cf6c46b3296e9b0a83b4616848204e3e8974a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6b09e86a4d492632d90ed01cf6c46b3296e9b0a83b4616848204e3e8974a02->enter($__internal_db6b09e86a4d492632d90ed01cf6c46b3296e9b0a83b4616848204e3e8974a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_db6b09e86a4d492632d90ed01cf6c46b3296e9b0a83b4616848204e3e8974a02->leave($__internal_db6b09e86a4d492632d90ed01cf6c46b3296e9b0a83b4616848204e3e8974a02_prof);

        
        $__internal_00ca1b61e8136db4f6f2a8696b85584c7e6ec55aab5d4ceefb604821a1706902->leave($__internal_00ca1b61e8136db4f6f2a8696b85584c7e6ec55aab5d4ceefb604821a1706902_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a46e8c04002ec1e74a72b6ae1f9881c3f65d0496c1933dcfb5ef5053f2bcf58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a46e8c04002ec1e74a72b6ae1f9881c3f65d0496c1933dcfb5ef5053f2bcf58->enter($__internal_6a46e8c04002ec1e74a72b6ae1f9881c3f65d0496c1933dcfb5ef5053f2bcf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_31a14df60ecde252488335f5c73c211d714bbea475b55e412f81c9b38ef3c790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a14df60ecde252488335f5c73c211d714bbea475b55e412f81c9b38ef3c790->enter($__internal_31a14df60ecde252488335f5c73c211d714bbea475b55e412f81c9b38ef3c790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_31a14df60ecde252488335f5c73c211d714bbea475b55e412f81c9b38ef3c790->leave($__internal_31a14df60ecde252488335f5c73c211d714bbea475b55e412f81c9b38ef3c790_prof);

        
        $__internal_6a46e8c04002ec1e74a72b6ae1f9881c3f65d0496c1933dcfb5ef5053f2bcf58->leave($__internal_6a46e8c04002ec1e74a72b6ae1f9881c3f65d0496c1933dcfb5ef5053f2bcf58_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/guillaumequirin/Sourcetree/Symfony/app/Resources/views/base.html.twig");
    }
}
