<?php

/* lucky/number.html.twig */
class __TwigTemplate_9e1e94a9e60c0c5d26163dd1d6e75e1b53b6397c052623f2a1c0584d77c978e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afd621968bfd93da28f7b8137cfeee8528378c8ef4bd03a02a463e005c5ea493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd621968bfd93da28f7b8137cfeee8528378c8ef4bd03a02a463e005c5ea493->enter($__internal_afd621968bfd93da28f7b8137cfeee8528378c8ef4bd03a02a463e005c5ea493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_5f51dc44727bed06b097bc8a305dc1f920f3338e8ab1efa79ce5d6ab491070f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f51dc44727bed06b097bc8a305dc1f920f3338e8ab1efa79ce5d6ab491070f4->enter($__internal_5f51dc44727bed06b097bc8a305dc1f920f3338e8ab1efa79ce5d6ab491070f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 1
        echo "<h1>Your lucky number is ";
        echo twig_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
        echo "</h1>
";
        
        $__internal_afd621968bfd93da28f7b8137cfeee8528378c8ef4bd03a02a463e005c5ea493->leave($__internal_afd621968bfd93da28f7b8137cfeee8528378c8ef4bd03a02a463e005c5ea493_prof);

        
        $__internal_5f51dc44727bed06b097bc8a305dc1f920f3338e8ab1efa79ce5d6ab491070f4->leave($__internal_5f51dc44727bed06b097bc8a305dc1f920f3338e8ab1efa79ce5d6ab491070f4_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Your lucky number is {{ number }}</h1>
", "lucky/number.html.twig", "/Users/guillaumequirin/Sourcetree/Symfony/app/Resources/views/lucky/number.html.twig");
    }
}
