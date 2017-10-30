<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_52c432c68a1784b956f4d55926d2f563c9e598302fe2d1b3e738d48e1c5a4cc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_546974582eaacfb397f6b9c44153a9acbc5165589da6506a125e220afa92fbe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546974582eaacfb397f6b9c44153a9acbc5165589da6506a125e220afa92fbe1->enter($__internal_546974582eaacfb397f6b9c44153a9acbc5165589da6506a125e220afa92fbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_5bd8493c63379b5fcb64c4955a81543c1afbcd5b07aab04050ca61c9653a6eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd8493c63379b5fcb64c4955a81543c1afbcd5b07aab04050ca61c9653a6eed->enter($__internal_5bd8493c63379b5fcb64c4955a81543c1afbcd5b07aab04050ca61c9653a6eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_546974582eaacfb397f6b9c44153a9acbc5165589da6506a125e220afa92fbe1->leave($__internal_546974582eaacfb397f6b9c44153a9acbc5165589da6506a125e220afa92fbe1_prof);

        
        $__internal_5bd8493c63379b5fcb64c4955a81543c1afbcd5b07aab04050ca61c9653a6eed->leave($__internal_5bd8493c63379b5fcb64c4955a81543c1afbcd5b07aab04050ca61c9653a6eed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_59ea9cbd48b07a4f18331fac44a91619190b2135cf98182547baf0755d5e2a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ea9cbd48b07a4f18331fac44a91619190b2135cf98182547baf0755d5e2a8b->enter($__internal_59ea9cbd48b07a4f18331fac44a91619190b2135cf98182547baf0755d5e2a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_342d7431ba6a58f2c94c866f5f35ba3703184d07cd06c2ad3b3c05b0c1ada45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342d7431ba6a58f2c94c866f5f35ba3703184d07cd06c2ad3b3c05b0c1ada45e->enter($__internal_342d7431ba6a58f2c94c866f5f35ba3703184d07cd06c2ad3b3c05b0c1ada45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_342d7431ba6a58f2c94c866f5f35ba3703184d07cd06c2ad3b3c05b0c1ada45e->leave($__internal_342d7431ba6a58f2c94c866f5f35ba3703184d07cd06c2ad3b3c05b0c1ada45e_prof);

        
        $__internal_59ea9cbd48b07a4f18331fac44a91619190b2135cf98182547baf0755d5e2a8b->leave($__internal_59ea9cbd48b07a4f18331fac44a91619190b2135cf98182547baf0755d5e2a8b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4f483f0811ac7e21ef07ecb869a2efe80f4f24d3b85b805fe533097868a8407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f483f0811ac7e21ef07ecb869a2efe80f4f24d3b85b805fe533097868a8407->enter($__internal_c4f483f0811ac7e21ef07ecb869a2efe80f4f24d3b85b805fe533097868a8407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2053556c7f9665a72e95481d51ac14386186be9558d0e25c8557817ed506c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2053556c7f9665a72e95481d51ac14386186be9558d0e25c8557817ed506c20->enter($__internal_b2053556c7f9665a72e95481d51ac14386186be9558d0e25c8557817ed506c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b2053556c7f9665a72e95481d51ac14386186be9558d0e25c8557817ed506c20->leave($__internal_b2053556c7f9665a72e95481d51ac14386186be9558d0e25c8557817ed506c20_prof);

        
        $__internal_c4f483f0811ac7e21ef07ecb869a2efe80f4f24d3b85b805fe533097868a8407->leave($__internal_c4f483f0811ac7e21ef07ecb869a2efe80f4f24d3b85b805fe533097868a8407_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4433c55e91659b247ae1ba04f23428194eb04734a549be5824acfb44de6b9563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4433c55e91659b247ae1ba04f23428194eb04734a549be5824acfb44de6b9563->enter($__internal_4433c55e91659b247ae1ba04f23428194eb04734a549be5824acfb44de6b9563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de2c5cfca84850b4ee867eeadb566f14b29ace0fd7c5d07d018ed5db4e768afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2c5cfca84850b4ee867eeadb566f14b29ace0fd7c5d07d018ed5db4e768afb->enter($__internal_de2c5cfca84850b4ee867eeadb566f14b29ace0fd7c5d07d018ed5db4e768afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_de2c5cfca84850b4ee867eeadb566f14b29ace0fd7c5d07d018ed5db4e768afb->leave($__internal_de2c5cfca84850b4ee867eeadb566f14b29ace0fd7c5d07d018ed5db4e768afb_prof);

        
        $__internal_4433c55e91659b247ae1ba04f23428194eb04734a549be5824acfb44de6b9563->leave($__internal_4433c55e91659b247ae1ba04f23428194eb04734a549be5824acfb44de6b9563_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/guillaumequirin/Sourcetree/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
