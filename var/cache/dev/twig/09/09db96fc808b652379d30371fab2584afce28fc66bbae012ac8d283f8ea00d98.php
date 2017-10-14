<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_52c432c68a1784b956f4d55926d2f563c9e598302fe2d1b3e738d48e1c5a4cc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_f189ffbdf33cea3068c6a02b0a5cfca51b6068d88cd4f770b8f7c27b403ef88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f189ffbdf33cea3068c6a02b0a5cfca51b6068d88cd4f770b8f7c27b403ef88f->enter($__internal_f189ffbdf33cea3068c6a02b0a5cfca51b6068d88cd4f770b8f7c27b403ef88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_eb4286f7810d010fa8220a40386e0478898496197cb5a29f2ada10957de2cccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4286f7810d010fa8220a40386e0478898496197cb5a29f2ada10957de2cccc->enter($__internal_eb4286f7810d010fa8220a40386e0478898496197cb5a29f2ada10957de2cccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f189ffbdf33cea3068c6a02b0a5cfca51b6068d88cd4f770b8f7c27b403ef88f->leave($__internal_f189ffbdf33cea3068c6a02b0a5cfca51b6068d88cd4f770b8f7c27b403ef88f_prof);

        
        $__internal_eb4286f7810d010fa8220a40386e0478898496197cb5a29f2ada10957de2cccc->leave($__internal_eb4286f7810d010fa8220a40386e0478898496197cb5a29f2ada10957de2cccc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_32cdfcd98cf3d6fd040ed75f43478b6ba77fa06353354d76f94fa58daab1c441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32cdfcd98cf3d6fd040ed75f43478b6ba77fa06353354d76f94fa58daab1c441->enter($__internal_32cdfcd98cf3d6fd040ed75f43478b6ba77fa06353354d76f94fa58daab1c441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f7c494923cfa5755b422cf564f2e30ee299d90480b7ea240626f2a421a38c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7c494923cfa5755b422cf564f2e30ee299d90480b7ea240626f2a421a38c5e->enter($__internal_8f7c494923cfa5755b422cf564f2e30ee299d90480b7ea240626f2a421a38c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8f7c494923cfa5755b422cf564f2e30ee299d90480b7ea240626f2a421a38c5e->leave($__internal_8f7c494923cfa5755b422cf564f2e30ee299d90480b7ea240626f2a421a38c5e_prof);

        
        $__internal_32cdfcd98cf3d6fd040ed75f43478b6ba77fa06353354d76f94fa58daab1c441->leave($__internal_32cdfcd98cf3d6fd040ed75f43478b6ba77fa06353354d76f94fa58daab1c441_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7457cf15193c820604f7bf6bee5014e5c301d475607583c4473151b4bf946fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7457cf15193c820604f7bf6bee5014e5c301d475607583c4473151b4bf946fcb->enter($__internal_7457cf15193c820604f7bf6bee5014e5c301d475607583c4473151b4bf946fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4944086daf52431d8c7d399ee7184956aa2e1f50e6fe136cf3a44d2678fe20c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4944086daf52431d8c7d399ee7184956aa2e1f50e6fe136cf3a44d2678fe20c5->enter($__internal_4944086daf52431d8c7d399ee7184956aa2e1f50e6fe136cf3a44d2678fe20c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_4944086daf52431d8c7d399ee7184956aa2e1f50e6fe136cf3a44d2678fe20c5->leave($__internal_4944086daf52431d8c7d399ee7184956aa2e1f50e6fe136cf3a44d2678fe20c5_prof);

        
        $__internal_7457cf15193c820604f7bf6bee5014e5c301d475607583c4473151b4bf946fcb->leave($__internal_7457cf15193c820604f7bf6bee5014e5c301d475607583c4473151b4bf946fcb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_43a17c2bb9ec8ae5b5acb1698ca802fa6d4e92c67bb59f0dc2948547fcb20dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a17c2bb9ec8ae5b5acb1698ca802fa6d4e92c67bb59f0dc2948547fcb20dc2->enter($__internal_43a17c2bb9ec8ae5b5acb1698ca802fa6d4e92c67bb59f0dc2948547fcb20dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4fb4f1f56a8561cc28703d03a948ef165899a7ee63704f0ec043e6f8bb9fdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fb4f1f56a8561cc28703d03a948ef165899a7ee63704f0ec043e6f8bb9fdcf->enter($__internal_a4fb4f1f56a8561cc28703d03a948ef165899a7ee63704f0ec043e6f8bb9fdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a4fb4f1f56a8561cc28703d03a948ef165899a7ee63704f0ec043e6f8bb9fdcf->leave($__internal_a4fb4f1f56a8561cc28703d03a948ef165899a7ee63704f0ec043e6f8bb9fdcf_prof);

        
        $__internal_43a17c2bb9ec8ae5b5acb1698ca802fa6d4e92c67bb59f0dc2948547fcb20dc2->leave($__internal_43a17c2bb9ec8ae5b5acb1698ca802fa6d4e92c67bb59f0dc2948547fcb20dc2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/Users/guillaumequirin/Sourcetree/open/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
