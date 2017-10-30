<?php

/* ::base.html.twig */
class __TwigTemplate_83b5e9b24179292353fe88ba51f5993b124411c8d1e7b755b4a700156f836eec extends Twig_Template
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
        $__internal_4520b16ef03f5230f9b40c95bbf95994c6137fcd18c329e92bdf3c250159ce89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4520b16ef03f5230f9b40c95bbf95994c6137fcd18c329e92bdf3c250159ce89->enter($__internal_4520b16ef03f5230f9b40c95bbf95994c6137fcd18c329e92bdf3c250159ce89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_24049c1ae4b7c71f5d5413923f47d88fa23d615d7144e2d534a41971876b6e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24049c1ae4b7c71f5d5413923f47d88fa23d615d7144e2d534a41971876b6e2c->enter($__internal_24049c1ae4b7c71f5d5413923f47d88fa23d615d7144e2d534a41971876b6e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"messages\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 14
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                echo "                    <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                        ";
                // line 16
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
        <div id=\"wrapper\">
            <div class=\"container-fluid\">
                ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "            </div>
        </div>
        
  <script src=\"jquery.min.js\"></script>
  <script src=\"tether.min.js\"></script>
  <script src=\"bootstrap.min.js\"></script>
        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    </body>
</html>
";
        
        $__internal_4520b16ef03f5230f9b40c95bbf95994c6137fcd18c329e92bdf3c250159ce89->leave($__internal_4520b16ef03f5230f9b40c95bbf95994c6137fcd18c329e92bdf3c250159ce89_prof);

        
        $__internal_24049c1ae4b7c71f5d5413923f47d88fa23d615d7144e2d534a41971876b6e2c->leave($__internal_24049c1ae4b7c71f5d5413923f47d88fa23d615d7144e2d534a41971876b6e2c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_095dc3853161f96f4910fddcb32d12014f39d92fe2668a5c4cb4464e7d8de4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095dc3853161f96f4910fddcb32d12014f39d92fe2668a5c4cb4464e7d8de4a0->enter($__internal_095dc3853161f96f4910fddcb32d12014f39d92fe2668a5c4cb4464e7d8de4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aaadb52b807f1379f609fc824dd37f36a9db5491678102066fbd33ea3a1897e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaadb52b807f1379f609fc824dd37f36a9db5491678102066fbd33ea3a1897e8->enter($__internal_aaadb52b807f1379f609fc824dd37f36a9db5491678102066fbd33ea3a1897e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OPEN ESGI";
        
        $__internal_aaadb52b807f1379f609fc824dd37f36a9db5491678102066fbd33ea3a1897e8->leave($__internal_aaadb52b807f1379f609fc824dd37f36a9db5491678102066fbd33ea3a1897e8_prof);

        
        $__internal_095dc3853161f96f4910fddcb32d12014f39d92fe2668a5c4cb4464e7d8de4a0->leave($__internal_095dc3853161f96f4910fddcb32d12014f39d92fe2668a5c4cb4464e7d8de4a0_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8da8280f19ae5672ef637b45bc4129f4641fca35485ebb8dd3f1a4b8b1c01bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da8280f19ae5672ef637b45bc4129f4641fca35485ebb8dd3f1a4b8b1c01bde->enter($__internal_8da8280f19ae5672ef637b45bc4129f4641fca35485ebb8dd3f1a4b8b1c01bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a51e96f65ae8112dd4cde97834f9ee07254e8b5662119b4f499dff7fd27876f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51e96f65ae8112dd4cde97834f9ee07254e8b5662119b4f499dff7fd27876f2->enter($__internal_a51e96f65ae8112dd4cde97834f9ee07254e8b5662119b4f499dff7fd27876f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a51e96f65ae8112dd4cde97834f9ee07254e8b5662119b4f499dff7fd27876f2->leave($__internal_a51e96f65ae8112dd4cde97834f9ee07254e8b5662119b4f499dff7fd27876f2_prof);

        
        $__internal_8da8280f19ae5672ef637b45bc4129f4641fca35485ebb8dd3f1a4b8b1c01bde->leave($__internal_8da8280f19ae5672ef637b45bc4129f4641fca35485ebb8dd3f1a4b8b1c01bde_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_604c5aeee8898416b78531d6b8c73dfa3ce21cd686464a17ab4bb8fda6929614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604c5aeee8898416b78531d6b8c73dfa3ce21cd686464a17ab4bb8fda6929614->enter($__internal_604c5aeee8898416b78531d6b8c73dfa3ce21cd686464a17ab4bb8fda6929614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3bc19ddf549e9ef2dad2ac4edcc207b6ab53351f82ee8f673cee14bac5714ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc19ddf549e9ef2dad2ac4edcc207b6ab53351f82ee8f673cee14bac5714ed4->enter($__internal_3bc19ddf549e9ef2dad2ac4edcc207b6ab53351f82ee8f673cee14bac5714ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3bc19ddf549e9ef2dad2ac4edcc207b6ab53351f82ee8f673cee14bac5714ed4->leave($__internal_3bc19ddf549e9ef2dad2ac4edcc207b6ab53351f82ee8f673cee14bac5714ed4_prof);

        
        $__internal_604c5aeee8898416b78531d6b8c73dfa3ce21cd686464a17ab4bb8fda6929614->leave($__internal_604c5aeee8898416b78531d6b8c73dfa3ce21cd686464a17ab4bb8fda6929614_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0389f0c5a036860eb03eae60083e11964d5ff9727ff62384da5d399bfcdc5739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0389f0c5a036860eb03eae60083e11964d5ff9727ff62384da5d399bfcdc5739->enter($__internal_0389f0c5a036860eb03eae60083e11964d5ff9727ff62384da5d399bfcdc5739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9e6888eddf82fcd4f50089caceae24ab1b75943ebeb4e638d95a3f9fdaa5f58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6888eddf82fcd4f50089caceae24ab1b75943ebeb4e638d95a3f9fdaa5f58e->enter($__internal_9e6888eddf82fcd4f50089caceae24ab1b75943ebeb4e638d95a3f9fdaa5f58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9e6888eddf82fcd4f50089caceae24ab1b75943ebeb4e638d95a3f9fdaa5f58e->leave($__internal_9e6888eddf82fcd4f50089caceae24ab1b75943ebeb4e638d95a3f9fdaa5f58e_prof);

        
        $__internal_0389f0c5a036860eb03eae60083e11964d5ff9727ff62384da5d399bfcdc5739->leave($__internal_0389f0c5a036860eb03eae60083e11964d5ff9727ff62384da5d399bfcdc5739_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 30,  144 => 23,  127 => 8,  109 => 6,  97 => 31,  95 => 30,  87 => 24,  85 => 23,  80 => 20,  74 => 19,  65 => 16,  60 => 15,  55 => 14,  51 => 13,  43 => 9,  41 => 8,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>{% block title %}OPEN ESGI{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\">
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div id=\"messages\">
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"flash-{{ label }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        </div>
        <div id=\"wrapper\">
            <div class=\"container-fluid\">
                {% block body %}{% endblock %}
            </div>
        </div>
        
  <script src=\"jquery.min.js\"></script>
  <script src=\"tether.min.js\"></script>
  <script src=\"bootstrap.min.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/guillaumequirin/Sourcetree/Symfony/app/Resources/views/base.html.twig");
    }
}
