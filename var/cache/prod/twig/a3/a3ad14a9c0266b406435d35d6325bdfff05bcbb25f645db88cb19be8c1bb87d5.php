<?php

/* base.html.twig */
class __TwigTemplate_5f00b5931b33cdd5606ebce15f80504bd16268c2597c23092d8fe6c29aaeefc3 extends Twig_Template
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
        $__internal_bd0f43349aefe374c20baa9f1047513faa0f86c4e7499cf33c4ab3998b26e225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0f43349aefe374c20baa9f1047513faa0f86c4e7499cf33c4ab3998b26e225->enter($__internal_bd0f43349aefe374c20baa9f1047513faa0f86c4e7499cf33c4ab3998b26e225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_bd0f43349aefe374c20baa9f1047513faa0f86c4e7499cf33c4ab3998b26e225->leave($__internal_bd0f43349aefe374c20baa9f1047513faa0f86c4e7499cf33c4ab3998b26e225_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_86f72faa4760ce79a29fa59daf11d11f867cbf806f7c6aff75ca0fc850b712a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f72faa4760ce79a29fa59daf11d11f867cbf806f7c6aff75ca0fc850b712a9->enter($__internal_86f72faa4760ce79a29fa59daf11d11f867cbf806f7c6aff75ca0fc850b712a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OPEN ESGI";
        
        $__internal_86f72faa4760ce79a29fa59daf11d11f867cbf806f7c6aff75ca0fc850b712a9->leave($__internal_86f72faa4760ce79a29fa59daf11d11f867cbf806f7c6aff75ca0fc850b712a9_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2d88adbb1e97c36172e55acc56ba2c0cdaa64e5c7721e18312c232ff4c4046c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d88adbb1e97c36172e55acc56ba2c0cdaa64e5c7721e18312c232ff4c4046c->enter($__internal_c2d88adbb1e97c36172e55acc56ba2c0cdaa64e5c7721e18312c232ff4c4046c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c2d88adbb1e97c36172e55acc56ba2c0cdaa64e5c7721e18312c232ff4c4046c->leave($__internal_c2d88adbb1e97c36172e55acc56ba2c0cdaa64e5c7721e18312c232ff4c4046c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_79a008f9cea5b2aa211516dc9154caba19cd6b41a4d4d31da87e0ff05fad5950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a008f9cea5b2aa211516dc9154caba19cd6b41a4d4d31da87e0ff05fad5950->enter($__internal_79a008f9cea5b2aa211516dc9154caba19cd6b41a4d4d31da87e0ff05fad5950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_79a008f9cea5b2aa211516dc9154caba19cd6b41a4d4d31da87e0ff05fad5950->leave($__internal_79a008f9cea5b2aa211516dc9154caba19cd6b41a4d4d31da87e0ff05fad5950_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2bef93950e99d31ae486606abe202c26af71c7a586727b6ec4b643b864653c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bef93950e99d31ae486606abe202c26af71c7a586727b6ec4b643b864653c6->enter($__internal_f2bef93950e99d31ae486606abe202c26af71c7a586727b6ec4b643b864653c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f2bef93950e99d31ae486606abe202c26af71c7a586727b6ec4b643b864653c6->leave($__internal_f2bef93950e99d31ae486606abe202c26af71c7a586727b6ec4b643b864653c6_prof);

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
        return array (  98 => 15,  87 => 11,  76 => 7,  64 => 5,  55 => 16,  53 => 15,  48 => 12,  46 => 11,  39 => 8,  37 => 7,  32 => 5,  26 => 1,);
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
        <title>{% block title %}OPEN ESGI{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/guillaumequirin/Sourcetree/Symfony/app/Resources/views/base.html.twig");
    }
}
