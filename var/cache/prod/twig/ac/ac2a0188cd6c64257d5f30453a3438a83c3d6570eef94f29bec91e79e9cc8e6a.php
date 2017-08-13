<?php

/* lucky/number.html.twig */
class __TwigTemplate_8af7605ce2fe5377002dfecb57e6fc97744eb95db5817d74170a3f84e538e03f extends Twig_Template
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
        $__internal_c291355cefb0e8745d7317e2be37258d587456b33eb496a74e87e98877466cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c291355cefb0e8745d7317e2be37258d587456b33eb496a74e87e98877466cac->enter($__internal_c291355cefb0e8745d7317e2be37258d587456b33eb496a74e87e98877466cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 1
        echo "<h1>Your lucky number is ";
        echo twig_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
        echo "</h1>
";
        
        $__internal_c291355cefb0e8745d7317e2be37258d587456b33eb496a74e87e98877466cac->leave($__internal_c291355cefb0e8745d7317e2be37258d587456b33eb496a74e87e98877466cac_prof);

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
        return array (  22 => 1,);
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
