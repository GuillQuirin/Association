<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2dd97f27ac5f89f865cd89a67f3139f287d1870106b58a513127a69dba998323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_321ee9159b74142664049bbd68dc17f70c5d37eb6ef78c1b452b162fe3827d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321ee9159b74142664049bbd68dc17f70c5d37eb6ef78c1b452b162fe3827d0e->enter($__internal_321ee9159b74142664049bbd68dc17f70c5d37eb6ef78c1b452b162fe3827d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3c6fbd89892e2b2816505e1e8876ecb561195df2179dc1d29da20ebf6009d744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6fbd89892e2b2816505e1e8876ecb561195df2179dc1d29da20ebf6009d744->enter($__internal_3c6fbd89892e2b2816505e1e8876ecb561195df2179dc1d29da20ebf6009d744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_321ee9159b74142664049bbd68dc17f70c5d37eb6ef78c1b452b162fe3827d0e->leave($__internal_321ee9159b74142664049bbd68dc17f70c5d37eb6ef78c1b452b162fe3827d0e_prof);

        
        $__internal_3c6fbd89892e2b2816505e1e8876ecb561195df2179dc1d29da20ebf6009d744->leave($__internal_3c6fbd89892e2b2816505e1e8876ecb561195df2179dc1d29da20ebf6009d744_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_79acdae765b65b5eb1ad72dc30cf18bc8c7d6f1b97a2746b6383338cf60eff98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79acdae765b65b5eb1ad72dc30cf18bc8c7d6f1b97a2746b6383338cf60eff98->enter($__internal_79acdae765b65b5eb1ad72dc30cf18bc8c7d6f1b97a2746b6383338cf60eff98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd9a6544692080fa28088de2d412316b68a62f89617e2ca76ef2413da3272025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9a6544692080fa28088de2d412316b68a62f89617e2ca76ef2413da3272025->enter($__internal_cd9a6544692080fa28088de2d412316b68a62f89617e2ca76ef2413da3272025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cd9a6544692080fa28088de2d412316b68a62f89617e2ca76ef2413da3272025->leave($__internal_cd9a6544692080fa28088de2d412316b68a62f89617e2ca76ef2413da3272025_prof);

        
        $__internal_79acdae765b65b5eb1ad72dc30cf18bc8c7d6f1b97a2746b6383338cf60eff98->leave($__internal_79acdae765b65b5eb1ad72dc30cf18bc8c7d6f1b97a2746b6383338cf60eff98_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_70fbac482e50695856a3185b0d8f1bf25878265bad4262d2f12679816e6d799c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70fbac482e50695856a3185b0d8f1bf25878265bad4262d2f12679816e6d799c->enter($__internal_70fbac482e50695856a3185b0d8f1bf25878265bad4262d2f12679816e6d799c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a6d6fe23e4ee314b964ebb3652620bd358433cf4688c66a5e6c25795cd87cd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d6fe23e4ee314b964ebb3652620bd358433cf4688c66a5e6c25795cd87cd74->enter($__internal_a6d6fe23e4ee314b964ebb3652620bd358433cf4688c66a5e6c25795cd87cd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a6d6fe23e4ee314b964ebb3652620bd358433cf4688c66a5e6c25795cd87cd74->leave($__internal_a6d6fe23e4ee314b964ebb3652620bd358433cf4688c66a5e6c25795cd87cd74_prof);

        
        $__internal_70fbac482e50695856a3185b0d8f1bf25878265bad4262d2f12679816e6d799c->leave($__internal_70fbac482e50695856a3185b0d8f1bf25878265bad4262d2f12679816e6d799c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_53c05da445a1a2d290e2dace3e3f1339a6988bc2eeceee0fbbaf595059beb1ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c05da445a1a2d290e2dace3e3f1339a6988bc2eeceee0fbbaf595059beb1ea->enter($__internal_53c05da445a1a2d290e2dace3e3f1339a6988bc2eeceee0fbbaf595059beb1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1403d6710c321d594603e0db3bf10abc4788bfd1a1712462af287308ae5ce79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1403d6710c321d594603e0db3bf10abc4788bfd1a1712462af287308ae5ce79f->enter($__internal_1403d6710c321d594603e0db3bf10abc4788bfd1a1712462af287308ae5ce79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1403d6710c321d594603e0db3bf10abc4788bfd1a1712462af287308ae5ce79f->leave($__internal_1403d6710c321d594603e0db3bf10abc4788bfd1a1712462af287308ae5ce79f_prof);

        
        $__internal_53c05da445a1a2d290e2dace3e3f1339a6988bc2eeceee0fbbaf595059beb1ea->leave($__internal_53c05da445a1a2d290e2dace3e3f1339a6988bc2eeceee0fbbaf595059beb1ea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/guillaumequirin/Sourcetree/open/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
