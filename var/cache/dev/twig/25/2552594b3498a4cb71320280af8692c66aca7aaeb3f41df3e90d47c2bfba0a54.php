<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5822d96dc649f46e30dff249a3a71de6a19ae062cb782a290b55e829dac1467e extends Twig_Template
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
        $__internal_b279bfece77911b1e067140cd75ea43b7dca70860997ea95f6585ad49549212f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b279bfece77911b1e067140cd75ea43b7dca70860997ea95f6585ad49549212f->enter($__internal_b279bfece77911b1e067140cd75ea43b7dca70860997ea95f6585ad49549212f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_532d51bf72f6a05c51291e94408f26ed91910f6706e1731de02bed7475991108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532d51bf72f6a05c51291e94408f26ed91910f6706e1731de02bed7475991108->enter($__internal_532d51bf72f6a05c51291e94408f26ed91910f6706e1731de02bed7475991108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_b279bfece77911b1e067140cd75ea43b7dca70860997ea95f6585ad49549212f->leave($__internal_b279bfece77911b1e067140cd75ea43b7dca70860997ea95f6585ad49549212f_prof);

        
        $__internal_532d51bf72f6a05c51291e94408f26ed91910f6706e1731de02bed7475991108->leave($__internal_532d51bf72f6a05c51291e94408f26ed91910f6706e1731de02bed7475991108_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_db564dace4f93eeb1b25a631df52e674e0f6ecd9459eae0ef7066721e86cbeab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db564dace4f93eeb1b25a631df52e674e0f6ecd9459eae0ef7066721e86cbeab->enter($__internal_db564dace4f93eeb1b25a631df52e674e0f6ecd9459eae0ef7066721e86cbeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c12dd88b08f7effdda07cfe987fc667ec9c731b5ab210be759a5799cf470289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c12dd88b08f7effdda07cfe987fc667ec9c731b5ab210be759a5799cf470289->enter($__internal_4c12dd88b08f7effdda07cfe987fc667ec9c731b5ab210be759a5799cf470289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4c12dd88b08f7effdda07cfe987fc667ec9c731b5ab210be759a5799cf470289->leave($__internal_4c12dd88b08f7effdda07cfe987fc667ec9c731b5ab210be759a5799cf470289_prof);

        
        $__internal_db564dace4f93eeb1b25a631df52e674e0f6ecd9459eae0ef7066721e86cbeab->leave($__internal_db564dace4f93eeb1b25a631df52e674e0f6ecd9459eae0ef7066721e86cbeab_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_55862151fb52f6eb0a5cc5fce7af970396f3a696c25a90be5c008bbe9f3219e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55862151fb52f6eb0a5cc5fce7af970396f3a696c25a90be5c008bbe9f3219e5->enter($__internal_55862151fb52f6eb0a5cc5fce7af970396f3a696c25a90be5c008bbe9f3219e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b20a2302b103e14b6ecf2db2bfec21ad17c3125d748293433bb48b4bf0d52446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20a2302b103e14b6ecf2db2bfec21ad17c3125d748293433bb48b4bf0d52446->enter($__internal_b20a2302b103e14b6ecf2db2bfec21ad17c3125d748293433bb48b4bf0d52446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b20a2302b103e14b6ecf2db2bfec21ad17c3125d748293433bb48b4bf0d52446->leave($__internal_b20a2302b103e14b6ecf2db2bfec21ad17c3125d748293433bb48b4bf0d52446_prof);

        
        $__internal_55862151fb52f6eb0a5cc5fce7af970396f3a696c25a90be5c008bbe9f3219e5->leave($__internal_55862151fb52f6eb0a5cc5fce7af970396f3a696c25a90be5c008bbe9f3219e5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e42cd9c03d9554136203b6a8e2213cfd1a02e6bef434c85a3785f91b7167bc16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42cd9c03d9554136203b6a8e2213cfd1a02e6bef434c85a3785f91b7167bc16->enter($__internal_e42cd9c03d9554136203b6a8e2213cfd1a02e6bef434c85a3785f91b7167bc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fdc950fc81677331a424ee737207d4ad9415268008e5c162679093301c1a6c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc950fc81677331a424ee737207d4ad9415268008e5c162679093301c1a6c4e->enter($__internal_fdc950fc81677331a424ee737207d4ad9415268008e5c162679093301c1a6c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fdc950fc81677331a424ee737207d4ad9415268008e5c162679093301c1a6c4e->leave($__internal_fdc950fc81677331a424ee737207d4ad9415268008e5c162679093301c1a6c4e_prof);

        
        $__internal_e42cd9c03d9554136203b6a8e2213cfd1a02e6bef434c85a3785f91b7167bc16->leave($__internal_e42cd9c03d9554136203b6a8e2213cfd1a02e6bef434c85a3785f91b7167bc16_prof);

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
