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
        $__internal_88131f9454ace4b71bcb486ebe4645fc013f008e0da8909227058bd9046371c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88131f9454ace4b71bcb486ebe4645fc013f008e0da8909227058bd9046371c7->enter($__internal_88131f9454ace4b71bcb486ebe4645fc013f008e0da8909227058bd9046371c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_980a04f795248bcaf423c79fc45e67a07e765635ba460ddacef0bb8cbd05cec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980a04f795248bcaf423c79fc45e67a07e765635ba460ddacef0bb8cbd05cec2->enter($__internal_980a04f795248bcaf423c79fc45e67a07e765635ba460ddacef0bb8cbd05cec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_88131f9454ace4b71bcb486ebe4645fc013f008e0da8909227058bd9046371c7->leave($__internal_88131f9454ace4b71bcb486ebe4645fc013f008e0da8909227058bd9046371c7_prof);

        
        $__internal_980a04f795248bcaf423c79fc45e67a07e765635ba460ddacef0bb8cbd05cec2->leave($__internal_980a04f795248bcaf423c79fc45e67a07e765635ba460ddacef0bb8cbd05cec2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_57c9732472816791d199469ec30f6c0a4a823077b897995bb86cbbed90ebb379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c9732472816791d199469ec30f6c0a4a823077b897995bb86cbbed90ebb379->enter($__internal_57c9732472816791d199469ec30f6c0a4a823077b897995bb86cbbed90ebb379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12fde94c592699e25bc7097853bad2784af729cce2634f7ec015a5a43c81ed94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12fde94c592699e25bc7097853bad2784af729cce2634f7ec015a5a43c81ed94->enter($__internal_12fde94c592699e25bc7097853bad2784af729cce2634f7ec015a5a43c81ed94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_12fde94c592699e25bc7097853bad2784af729cce2634f7ec015a5a43c81ed94->leave($__internal_12fde94c592699e25bc7097853bad2784af729cce2634f7ec015a5a43c81ed94_prof);

        
        $__internal_57c9732472816791d199469ec30f6c0a4a823077b897995bb86cbbed90ebb379->leave($__internal_57c9732472816791d199469ec30f6c0a4a823077b897995bb86cbbed90ebb379_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_523ae5b54a500466a7544787ab614c5152ee55cb0980c58b1b63773226a5e1f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523ae5b54a500466a7544787ab614c5152ee55cb0980c58b1b63773226a5e1f0->enter($__internal_523ae5b54a500466a7544787ab614c5152ee55cb0980c58b1b63773226a5e1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_129fa4e705c7e4f674c1c94687051057571bb277933e9eccc65ef0c01db57ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129fa4e705c7e4f674c1c94687051057571bb277933e9eccc65ef0c01db57ec5->enter($__internal_129fa4e705c7e4f674c1c94687051057571bb277933e9eccc65ef0c01db57ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_129fa4e705c7e4f674c1c94687051057571bb277933e9eccc65ef0c01db57ec5->leave($__internal_129fa4e705c7e4f674c1c94687051057571bb277933e9eccc65ef0c01db57ec5_prof);

        
        $__internal_523ae5b54a500466a7544787ab614c5152ee55cb0980c58b1b63773226a5e1f0->leave($__internal_523ae5b54a500466a7544787ab614c5152ee55cb0980c58b1b63773226a5e1f0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f67a08c8750f1716570b0d94778b3e91bbe6b871da2499498723d3b1a82508b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f67a08c8750f1716570b0d94778b3e91bbe6b871da2499498723d3b1a82508b2->enter($__internal_f67a08c8750f1716570b0d94778b3e91bbe6b871da2499498723d3b1a82508b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3bc54403f4444d776cf5e4f9ae86e5faa69846910cda66fc6c1c62fa67f6f207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc54403f4444d776cf5e4f9ae86e5faa69846910cda66fc6c1c62fa67f6f207->enter($__internal_3bc54403f4444d776cf5e4f9ae86e5faa69846910cda66fc6c1c62fa67f6f207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3bc54403f4444d776cf5e4f9ae86e5faa69846910cda66fc6c1c62fa67f6f207->leave($__internal_3bc54403f4444d776cf5e4f9ae86e5faa69846910cda66fc6c1c62fa67f6f207_prof);

        
        $__internal_f67a08c8750f1716570b0d94778b3e91bbe6b871da2499498723d3b1a82508b2->leave($__internal_f67a08c8750f1716570b0d94778b3e91bbe6b871da2499498723d3b1a82508b2_prof);

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
", "@Twig/layout.html.twig", "/Users/guillaumequirin/Sourcetree/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
